<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Payments;

use Grav\Common\Grav;
use Grav\Common\Config\Config;

class SnipcartHandler
{
    protected Grav $grav;
    protected mixed $config;

    public function __construct(mixed $config = null)
    {
        $this->grav = Grav::instance();
        // Allow passing config, or fetch from theme config if null
        $this->config = $config ?? $this->grav['config']->get('themes.nur-ul-huda');
    }

    /**
     * Update Snipcart order status via API
     * 
     * @param string $order_token
     * @param string $status
     * @return void
     */
    public function updateOrderStatus(string $order_token, string $status): void
    {
        $api_key = (string)($this->config['snipcart_key'] ?? '');

        if (!$api_key) {
            $this->grav['log']->warning('Snipcart API key not configured');
            return;
        }

        try {
            $api_url = "https://app.snipcart.com/api/orders/{$order_token}";

            $ch = \curl_init($api_url);
            \curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            \curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            \curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Accept: application/json',
                'Content-Type: application/json',
                'Authorization: Basic ' . \base64_encode($api_key . ':')
            ]);
            \curl_setopt($ch, CURLOPT_POSTFIELDS, \json_encode([
                'status' => $status,
                'paymentStatus' => 'Paid'
            ]));

            $response = \curl_exec($ch);
            $http_code = \curl_getinfo($ch, CURLINFO_HTTP_CODE);
            \curl_close($ch);

            if ($http_code === 200) {
                $this->grav['log']->info("Snipcart order {$order_token} updated to {$status}");
            } else {
                $this->grav['log']->error("Failed to update Snipcart order: HTTP {$http_code}");
            }
        } catch (\Exception $e) {
            $this->grav['log']->error('Snipcart API error: ' . $e->getMessage());
        }
    }
}
