<?php

declare(strict_types=1);

namespace Grav\Theme\NurUlHuda\Utils;

use Grav\Common\Page\Page;
use Grav\Common\Page\Media;

readonly final class BlogHelper
{
    /**
     * Extract blog post data from a Grav page.
     *
     * Retrieves all essential blog post information including primary image,
     * metadata, and content. Automatically selects the first image from page
     * media if available. Follows SRP by focusing solely on data extraction.
     *
     * @param Page $page The blog post page object
     * @return array Post data structure containing:
     *               - image: Primary image media object (null if none)
     *               - title: Post title
     *               - url: Full URL to post
     *               - slug: URL-friendly slug
     *               - summary: Post excerpt/summary
     *               - content: Full post content (HTML)
     *               - date: Publication date
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
     * Get blog post navigation data for prev/next links.
     *
     * Determines adjacent posts and boundary states for pagination controls.
     * Provides data needed to render "Previous Post" and "Next Post" links
     * with proper disability states for first/last posts.
     *
     * @param Page $page The current blog post page
     * @return array Navigation data structure containing:
     *               - prev: Previous post data (url, title) or null
     *               - next: Next post data (url, title) or null
     *               - is_first: Boolean indicating if this is the first post
     *               - is_last: Boolean indicating if this is the last post
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
