<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use Grav\Common\Utils;

class MyQuark extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onAdminTwigTemplatePaths' => ['onAdminTwigTemplatePaths', 0],
            'onAssetsInitialized' => ['onAssetsInitialized', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
            'onAdminAfterSave' => ['onAdminAfterSave', 0],
            'onPageInitialized' => ['onPageInitialized', 0]
        ];
    }

    public function onAdminTwigTemplatePaths($event)
    {
        $event['paths'] = array_merge($event['paths'], [__DIR__ . '/admin/templates']);
        return $event;
    }

    public function onAssetsInitialized()
    {
        if ($this->isAdmin()) {
            $this->grav['assets']->addCss('theme://css/admin-custom.css');
            
            // Logic to check if we are on the Theme Configuration page
            $uri = $this->grav['uri'];
            if (strpos($uri->path(), 'themes/my-quark') !== false) {
                 // Builder Assets Removed
            }
        }
    }

    public function onTwigSiteVariables()
    {
        if ($this->isAdmin()) {
            return;
        }
    }

    public function onAdminAfterSave($event)
    {
        $obj = $event['object'];
        if (!($obj instanceof \Grav\Common\Data\Data) || $obj->blueprints()->getFilename() !== 'my-quark') {
            return;
        }

        // Font Downloader Logic (2026 GDPR Compliance)
        $config = $this->config->get('themes.my-quark');
        $fonts = array_unique([
            $config['font_primary'] ?? 'Outfit',
            $config['font_header'] ?? 'Outfit'
        ]);

        foreach ($fonts as $font) {
            $this->downloadGoogleFont($font);
        }
    }

    /**
     * Generate and apply Content Security Policy headers (2026 Security Standard)
     * Rule 5.1: CSP Management - prevents XSS attacks
     */
    public function onPageInitialized()
    {
        // Skip CSP in admin panel
        if ($this->isAdmin()) {
            return;
        }

        // Get CSP configuration from theme settings
        $config = $this->config->get('themes.my-quark');
        $cspEnabled = $config['security_csp_enabled'] ?? true;

        if (!$cspEnabled) {
            return;
        }

        // Build CSP directives
        $csp = [
            "default-src 'self'",
            "script-src 'self' 'unsafe-inline' https://unpkg.com", // Anchor Positioning polyfill
            "style-src 'self' 'unsafe-inline'", // Inline styles for theme customization
            "img-src 'self' data: https:",
            "font-src 'self' data:",
            "connect-src 'self'",
            "frame-ancestors 'self'",
            "base-uri 'self'",
            "form-action 'self'"
        ];

        $cspHeader = implode('; ', $csp);
        
        // Only send headers if not already sent
        if (!headers_sent()) {
            header("Content-Security-Policy: " . $cspHeader);
            // Also send X-Content-Type-Options for additional security
            header("X-Content-Type-Options: nosniff");
            header("X-Frame-Options: SAMEORIGIN");
            header("Referrer-Policy: strict-origin-when-cross-origin");
        }
    }

    private function downloadGoogleFont($fontName)
    {
        if (empty($fontName) || $fontName === 'Outfit') return; // Outfit is already local

        $cleanName = str_replace(' ', '', $fontName);
        $targetDir = __DIR__ . '/fonts';
        $targetFile = $targetDir . '/' . $cleanName . '-400.woff2';

        if (file_exists($targetFile)) return;

        // Fetch CSS from Google
        $url = "https://fonts.googleapis.com/css2?family=" . urlencode($fontName) . ":wght@400;700&display=swap";
        $css = @file_get_contents($url, false, stream_context_create([
            "ssl" => [
                "verify_peer" => false,
                "verify_peer_name" => false,
            ],
            // Simulate modern browser to get WOFF2
            'http' => [
                'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36\r\n"
            ]
        ]));

        if ($css) {
            // Simple regex to find the first WOFF2 URL
            if (preg_match('/url\((https:\/\/[^)]+\.woff2)\)/', $css, $matches)) {
                $fontUrl = $matches[1];
                $fontData = @file_get_contents($fontUrl);
                if ($fontData) {
                    @file_put_contents($targetFile, $fontData);
                    $this->grav['log']->info("MyQuark: Downloaded local font $fontName");
                }
            }
        }
    }
}
