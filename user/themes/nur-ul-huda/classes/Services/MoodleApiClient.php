<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Services;

class MoodleApiClient
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
            $api_url = \rtrim($url, '/') . '/webservice/rest/server.php';
            $params = [
                'wstoken' => $token,
                'wsfunction' => $function,
                'moodlewsrestformat' => $format
            ];

            $full_url = $api_url . '?' . \http_build_query($params);
            $response = @\file_get_contents($full_url);

            if ($response === false) {
                return null;
            }

            return (array)\json_decode($response, true);
        } catch (\Exception $e) {
            return null;
        }
    }
}
