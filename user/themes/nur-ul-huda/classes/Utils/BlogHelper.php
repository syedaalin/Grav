<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Page\Page;
use Grav\Common\Page\Media;

readonly class BlogHelper
{
    /**
     * @param Page $page
     * @return array
     */
    public static function getPostData(Page $page): array
    {
        $media = $page->media();
        $images = $media->images();
        $primaryImage = null;

        if (!empty($images)) {
            $primaryImage = \reset($images);
        }

        return [
            'image' => $primaryImage,
            'title' => $page->title(),
            'url' => $page->url(),
            'slug' => $page->slug(),
            'summary' => $page->summary(),
            'content' => $page->content(),
            'date' => $page->date(),
        ];
    }

    /**
     * @param Page $page
     * @return array
     */
    public static function getNavigationData(Page $page): array
    {
        $prev = $page->prevSibling();
        $next = $page->nextSibling();

        return [
            'prev' => $prev ? ['url' => $prev->url(), 'title' => $prev->title()] : null,
            'next' => $next ? ['url' => $next->url(), 'title' => $next->title()] : null,
            'is_first' => $page->isFirst(),
            'is_last' => $page->isLast(),
        ];
    }
}
