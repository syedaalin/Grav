<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Services;

use Grav\Common\Grav;

readonly class MoodleService
{
    protected Grav $grav;

    public function __construct(
        ?Grav $grav = null
    ) {
        $this->grav = $grav ?? Grav::instance();
    }

    /**
     * Fetch featured courses from Moodle
     */
    public function fetchCourses(string $url, string $token): array
    {
        /** @var \Grav\Common\Cache $cache */
        $cache = $this->grav['cache'];
        $cache_id = 'moodle_courses_featured';

        // Use closure to capture $url and $token
        return (array)($cache->fetch($cache_id) ?: $cache->save($cache_id, function () use ($url, $token) {
            $client = new MoodleApiClient();
            $data = $client->get($url, $token, 'core_course_get_courses');

            return \is_array($data) ? \array_slice($data, 1, 4) : []; // Skip site course, take 4
        }, 3600)); // Cache for 1 hour
    }
}
