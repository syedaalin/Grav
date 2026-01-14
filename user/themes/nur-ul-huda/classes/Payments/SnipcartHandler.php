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

            // Use Grav's Guzzle client
            $client = $this->grav['httpClient'];
            $response = $client->put($api_url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Basic ' . \base64_encode($api_key . ':')
                ],
                'json' => [
                    'status' => $status,
                    'paymentStatus' => 'Paid'
                ]
            ]);

            if ($response->getStatusCode() === 200) {
                $this->grav['log']->info("Snipcart order {$order_token} updated to {$status}");
            } else {
                $this->grav['log']->error("Failed to update Snipcart order: HTTP " . $response->getStatusCode());
            }
        } catch (\Exception $e) {
            $this->grav['log']->error('Snipcart API error: ' . $e->getMessage());
        }
    }
}
