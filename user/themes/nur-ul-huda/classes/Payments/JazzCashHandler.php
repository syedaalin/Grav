<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Payments;

use Grav\Common\Grav;
use Grav\Common\Config\Config;
use Grav\Theme\NurUlHuda\Utils\SecurityLogger;

readonly class JazzCashHandler
{
    protected Grav $grav;
    protected SnipcartHandler $snipcart;

    public function __construct(
        protected mixed $config,
        protected SecurityLogger $logger = new SecurityLogger()
    ) {
        $this->grav = Grav::instance();
        $this->snipcart = new SnipcartHandler($config);
    }

    public function handleCallback(): void
    {
        /** @var array $post */
        $post = $_POST;
        $salt = (string)($this->config['jazzcash_salt'] ?? '');

        /** @var \Grav\Common\Session $session */
        $session = $this->grav['session'];

        // Security: Check rate limiting
        if (!$this->logger->checkRateLimit('jazzcash_callback')) {
            $this->logger->log('Rate limit exceeded for JazzCash callback', 'warning');
            \header('HTTP/1.1 429 Too Many Requests');
            exit;
        }

        if (empty($post) || empty($salt)) {
            $this->logger->log('JazzCash callback failed: Missing POST data or salt', 'error');
            $this->redirect('/checkout/error');
        }

        // Security: Verify session nonce
        $nonce = (string)$session->getFlashObject('jazzcash_nonce');
        if (!$nonce || !isset($post['pp_TxnRefNo']) || !\hash_equals($nonce, (string)$post['pp_TxnRefNo'])) {
            $this->logger->log('JazzCash callback failed: Invalid or missing nonce', 'security');
            $this->redirect('/checkout/error');
        }

        // Verify Hash
        if (!$this->verifyHash($post, $salt)) {
            $this->logger->log('JazzCash callback failed: Invalid hash signature', 'security');
            $this->redirect('/checkout/error');
        }

        if (isset($post['pp_ResponseCode']) && $post['pp_ResponseCode'] === '000') {
            // Payment successful
            $billRef = (string)($post['pp_BillReference'] ?? 'unknown');
            $this->logger->log('JazzCash payment successful: ' . $billRef, 'info');
            $this->snipcart->updateOrderStatus($billRef, 'Processed');
            $this->redirect('/checkout/confirmation');
        } else {
            // Payment failed
            $respCode = (string)($post['pp_ResponseCode'] ?? 'unknown');
            $this->logger->log('JazzCash payment failed: Code ' . $respCode, 'warning');
            $this->redirect('/checkout/error');
        }
    }

    /**
     * Handle AJAX request to sign payment data.
     * Generates the secure hash on the server using the hidden Salt.
     */
    public function handleSignRequest(): void
    {
        // 1. Verify Request Method
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            \http_response_code(405);
            echo \json_encode(['error' => 'Method Not Allowed']);
            exit;
        }

        // 2. Rate Limiting
        if (!$this->logger->checkRateLimit('payment_sign')) {
            \http_response_code(429);
            echo \json_encode(['error' => 'Too Many Requests']);
            exit;
        }

        // 3. Get JSON Payload
        $input = \json_decode(\file_get_contents('php://input'), true);
        if (!\is_array($input)) {
            \http_response_code(400);
            echo \json_encode(['error' => 'Invalid JSON']);
            exit;
        }

        // 4. Validate Required Fields (Whitelist)
        $allowedFields = [
            'pp_Amount',
            'pp_BillReference',
            'pp_Description',
            'pp_Language',
            'pp_MerchantID',
            'pp_Password',
            'pp_ReturnURL',
            'pp_TxnCurrency',
            'pp_TxnDateTime',
            'pp_TxnExpiryDateTime',
            'pp_TxnRefNo',
            'pp_TxnType',
            'pp_Version',
            'ppmpf_1',
            'ppmpf_2',
            'ppmpf_3',
            'ppmpf_4',
            'ppmpf_5'
        ];

        $data = \array_intersect_key($input, \array_flip($allowedFields));

        // 5. Generate Hash
        $salt = (string)($this->config['jazzcash_salt'] ?? '');
        if (empty($salt)) {
            $this->logger->log('Payment signing failed: Missing Salt', 'error');
            \http_response_code(500);
            echo \json_encode(['error' => 'Configuration Error']);
            exit;
        }

        $hash = $this->calculateHash($data, $salt);

        // 6. Return Signature
        \header('Content-Type: application/json');
        echo \json_encode(['pp_SecureHash' => $hash]);
        exit;
    }

    protected function calculateHash(array $data, string $salt): string
    {
        \ksort($data);

        $hash_string = $salt;
        foreach ($data as $key => $value) {
            $val = (string)$value;
            if ($val !== '') {
                $hash_string .= '&' . $val;
            }
        }

        return \strtoupper(\hash_hmac('sha256', $hash_string, $salt));
    }

    protected function redirect(string $path): void
    {
        \header('Location: ' . $this->grav['base_url'] . $path);
        exit;
    }

    protected function verifyHash(array $post, string $salt): bool
    {
        $response_hash = (string)($post['pp_SecureHash'] ?? '');
        if (empty($response_hash)) {
            return false;
        }

        unset($post['pp_SecureHash']);
        \ksort($post);

        $hash_string = $salt;
        foreach ($post as $key => $value) {
            $val = (string)$value;
            if ($val !== '') {
                $hash_string .= '&' . $val;
            }
        }

        $expected_hash = \hash_hmac('sha256', $hash_string, $salt);
        $expected_hash = \strtoupper($expected_hash);

        return \hash_equals($expected_hash, $response_hash);
    }

    /**
     * Generate a secure nonce for payment transactions
     */
    public function generatePaymentNonce(): string
    {
        $nonce = \bin2hex(\random_bytes(16));
        $this->grav['session']->setFlashObject('jazzcash_nonce', $nonce);
        return $nonce;
    }
}
