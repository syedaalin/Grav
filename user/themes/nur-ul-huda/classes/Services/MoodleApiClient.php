<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Services;

use Grav\Common\Grav;

readonly class MoodleApiClient
{
    /**
     * Fetch raw data from Moodle webservice
     * 
     * @param string $url
     * @param string $token
     * @param string $function
     * @param string $format
     * @return array|null
     */
    public function get(string $url, string $token, string $function, string $format = 'json'): ?array
    {
        try {
            $params = [
                'wstoken' => $token,
                'wsfunction' => $function,
                'moodlewsrestformat' => $format
            ];

            $full_url = \rtrim($url, '/')
            |> (static fn($u) => $u . '/webservice/rest/server.php')(...)
            |> (static fn($u) => $u . '?' . \http_build_query($params))(...);

            // Use Grav's Guzzle client for better reliability
            $client = Grav::instance()['httpClient'];
            $response = $client->get($full_url);

            if ($response->getStatusCode() !== 200) {
                return null;
            }

            return (array)\json_decode((string)$response->getBody(), true);
        } catch (\Exception $e) {
            Grav::instance()['log']->error('Moodle API Error: ' . $e->getMessage());
            return null;
        }
    }
}
