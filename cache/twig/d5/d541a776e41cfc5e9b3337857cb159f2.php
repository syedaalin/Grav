<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/base.html.twig */
class __TwigTemplate_5d4123dc4519b027947d0628eb6cc604 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 12
        $_trait_0 = $this->load("blocks/base.html.twig", 12);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 12, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'header' => [$this, 'block_header'],
                'header_navigation' => [$this, 'block_header_navigation'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["direction"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "direction"), "ltr");
        // line 2
        $context["language"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "language"), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 2), "getActive", [], "any", false, false, false, 2)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 2), "getActive", [], "any", false, false, false, 2)) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 2), "site", [], "any", false, false, false, 2), "default_lang", [], "any", false, false, false, 2)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 2), "site", [], "any", false, false, false, 2), "default_lang", [], "any", false, false, false, 2)) : ("en")))));
        // line 3
        $context["typography"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "typography"), "font-sans");
        // line 4
        $context["body_classes"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->bodyClassFunc($context, ["header-fixed", "header-animated", "header-dark", "header-transparent", ($context["direction"] ?? null), ($context["typography"] ?? null)]);
        // line 5
        $context["grid_size"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "grid-size");
        // line 6
        $context["compress"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "production-mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (".min.css") : (".css"));
        // line 7
        $context["top_banner_color"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_bg_color"), "oklch(0.2 0.02 260)");
        // line 8
        yield "
";
        // line 11
        yield "
";
        // line 13
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["language"] ?? null), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["direction"] ?? null), "html", null, true);
        yield "\" style=\"--top-banner-color: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["top_banner_color"] ?? null), "html", null, true);
        yield "; ";
        yield ($context["dynamic_styles"] ?? null);
        yield "; --font-heading: ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["theme_fonts"] ?? null), "heading", [], "any", false, false, false, 14);
        yield "; --font-body: ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["theme_fonts"] ?? null), "body", [], "any", false, false, false, 14);
        yield ";\">
\t<head>
\t\t";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme_fonts"] ?? null), "custom_css", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "\t\t\t<style>
\t\t\t\t";
            // line 18
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["theme_fonts"] ?? null), "custom_css", [], "any", false, false, false, 18);
            yield "</style>
\t\t";
        }
        // line 20
        yield "\t\t";
        // line 21
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 65
        yield "
\t\t";
        // line 66
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 70
        yield "
\t\t";
        // line 71
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 87
        yield "
\t\t";
        // line 88
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        // line 92
        yield "\t</head>
\t<body
\t\tid=\"top\" class=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["body_classes"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["dynamic_body_classes"] ?? null), " "), "html", null, true);
        yield "\">
\t\t";
        // line 96
        yield "\t\t<div id=\"root-debug-base\" style=\"position: fixed; top: 40px; right: 0; background: orange; color: black; padding: 10px; z-index: 1000000; font-family: monospace; font-size: 14px; border: 2px solid black; font-weight: bold; pointer-events: none;\">
\t\t\tROOT_BASE_LOADED | FILE: partials/base.html.twig
\t\t</div>
\t\t<div
\t\t\tid=\"page-wrapper\">
\t\t\t";
        // line 102
        yield "\t\t\t<a href=\"#start\" class=\"skip-link\">Skip to main content</a>

\t\t\t";
        // line 104
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 217
        yield "

\t\t\t";
        // line 219
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 220
        yield "
\t\t\t<section id=\"start\">
\t\t\t\t";
        // line 222
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 234
        yield "\t\t\t</section>

\t\t\t";
        // line 236
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 239
        yield "
\t\t\t";
        // line 241
        yield "\t\t\t<div id=\"search-overlay\" class=\"search-overlay\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Search\">

\t\t\t\t<button id=\"search-close\" class=\"search-close-button\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\" class=\"icon-xl\">
\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<span class=\"sr-only\">Close search</span>
\t\t\t\t</button>

\t\t\t\t<div class=\"search-container\" id=\"search-container\">
\t\t\t\t\t<h2 class=\"search-title desktop-only\">Search Resources</h2>
\t\t\t\t\t";
        // line 252
        yield from $this->load("partials/tntsearch.html.twig", 252)->unwrap()->yield($context);
        // line 253
        yield "\t\t\t\t\t<p class=\"desktop-only search-hint\">Press
\t\t\t\t\t\t<kbd class=\"kbd\">ESC</kbd>
\t\t\t\t\t\tto close</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 260
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 269
        yield "\t</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->deferred->defer($this, 'head');
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_deferred(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<title>
\t\t\t\t";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 25), "html");
            yield "
\t\t\t\t\t|
\t\t\t\t";
        }
        // line 28
        yield "\t\t\t\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 28), "html");
        yield "</title>

\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t\t\t";
        // line 32
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "production-mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "\t\t\t\t<meta http-equiv=\"Content-Security-Policy\" content=\"default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.snipcart.com https://api.aladhan.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.snipcart.com; font-src 'self' https://fonts.gstatic.com data:; img-src 'self' data: https://cdn.snipcart.com; connect-src 'self' https://api.aladhan.com https://cdn.snipcart.com; frame-src 'self' https://cdn.snipcart.com;\">
\t\t\t";
        }
        // line 35
        yield "\t\t\t";
        try {
            $_v0 = $this->load("partials/metadata.html.twig", 35);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 36
        yield "
\t\t\t";
        // line 37
        $context["logo_img"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v1 = ($context["media"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[("theme://images/logo/" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo")), "name", [], "any", false, false, false, 37))] ?? null) : null)) : (null));
        // line 38
        yield "\t\t\t";
        $context["favicon"] = (((($tmp = ($context["logo_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["logo_img"] ?? null), "cropZoom", [32, 32], "method", false, false, false, 38)) : ((($_v2 = ($context["media"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["theme://images/favicon.png"] ?? null) : null)));
        // line 39
        yield "\t\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["favicon"] ?? null), "url", [], "any", false, false, false, 39), "html", null, true);
        yield "\"/>
\t\t\t<link rel=\"canonical\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 40), "html", null, true);
        yield "\"/>

\t\t\t<link rel=\"manifest\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true);
        yield "/manifest\">
\t\t\t<meta name=\"theme-color\" content=\"oklch(0.55 0.18 165)\">
\t\t\t<meta name=\"mobile-web-app-capable\" content=\"yes\">
\t\t\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t\t\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"default\">
\t\t\t<meta
\t\t\tname=\"apple-mobile-web-app-title\" content=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 48), "html", null, true);
        yield "\">

\t\t\t";
        // line 51
        yield "\t\t\t<script>
\t\t\t\tif ('serviceWorker' in navigator) {
window.addEventListener('load', () => {
navigator.serviceWorker.register('";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["theme_url"] ?? null), "html", null, true);
        yield "/sw.js').then((registration) => {
console.log('SW registered:', registration);
}).catch((error) => {
console.log('SW registration failed:', error);
});
});
}
\t\t\t</script>


\t\t";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/modern-vanilla.css"], "method", false, false, false, 67);
        // line 68
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/line-awesome.min.css"], "method", false, false, false, 68);
        // line 69
        yield "\t\t";
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["jquery", 101], "method", false, false, false, 72);
        // line 73
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/khums-calculator.js", ["priority" => 100, "group" => "bottom", "type" => "module"]], "method", false, false, false, 73);
        // line 74
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/ui.js", ["priority" => 95, "group" => "bottom", "type" => "module"]], "method", false, false, false, 74);
        // line 75
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/utils.js", 95], "method", false, false, false, 75);
        // line 76
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/performance-monitor.js", 94], "method", false, false, false, 76);
        // line 77
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/pull-refresh.js", 94], "method", false, false, false, 77);
        // line 78
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/gallery.js", 93], "method", false, false, false, 78);
        // line 79
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/high-contrast.js", 89], "method", false, false, false, 79);
        // line 80
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/font-scaler.js", 89], "method", false, false, false, 80);
        // line 81
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/bottom-banner.js", 89], "method", false, false, false, 81);
        // line 82
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/prayer-times.js", 89], "method", false, false, false, 82);
        // line 83
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/hijri-date.js", 89], "method", false, false, false, 83);
        // line 84
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/adhan-player.js", 89], "method", false, false, false, 84);
        // line 85
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/spiritual.js", 88], "method", false, false, false, 85);
        // line 86
        yield "\t\t";
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->deferred->defer($this, 'assets');
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets_deferred(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "\t\t\t";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 89);
        yield "
\t\t\t";
        // line 90
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, false, 90);
        yield "
\t\t";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 105
        yield "\t\t\t\t";
        // line 106
        yield "\t\t\t\t<div class=\"header-top-sticky\" style=\"display: block !important; visibility: visible !important; opacity: 1 !important; height: auto !important; min-height: 2.75rem !important;\">
\t\t\t\t\t";
        // line 107
        yield from $this->load("partials/top-banner.html.twig", 107)->unwrap()->yield($context);
        // line 108
        yield "\t\t\t\t</div>

\t\t\t\t";
        // line 111
        yield "\t\t\t\t<header id=\"header\" class=\"header-main-sticky\" role=\"banner\">

\t\t\t\t\t<div class=\"container container-px header-spacing\">
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"header-nav\" aria-label=\"Main navigation\">

\t\t\t\t\t\t\t";
        // line 118
        yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"header-zone-a\">
\t\t\t\t\t\t\t\t";
        // line 121
        yield "\t\t\t\t\t\t\t\t<button id=\"mobile-toggle\" class=\"mobile-toggle\" aria-label=\"Open navigation menu\" aria-controls=\"mobile-overlay\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\" class=\"icon-lg\">
\t\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t";
        // line 128
        yield "\t\t\t\t\t\t\t\t<div class=\"desktop-only logo-hover\">
\t\t\t\t\t\t\t\t\t";
        // line 129
        yield from $this->load("partials/logo.html.twig", 129)->unwrap()->yield($context);
        // line 130
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 134
        yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"header-zone-b\">
\t\t\t\t\t\t\t\t";
        // line 137
        yield "\t\t\t\t\t\t\t\t<div class=\"mobile-only logo-hover\">
\t\t\t\t\t\t\t\t\t";
        // line 138
        yield from $this->load("partials/logo.html.twig", 138)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 139
        yield "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 142
        yield "\t\t\t\t\t\t\t\t<nav id=\"desktop-nav\" class=\"desktop-nav\">
\t\t\t\t\t\t\t\t\t";
        // line 143
        yield from $this->unwrap()->yieldBlock('header_navigation', $context, $blocks);
        // line 146
        yield "\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 150
        yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"header-zone-c\">

\t\t\t\t\t\t\t\t";
        // line 154
        yield "\t\t\t\t\t\t\t\t<button id=\"search-trigger\" class=\"icon-button desktop-only\" aria-label=\"Open search\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\" class=\"icon-lg\">
\t\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t";
        // line 162
        yield "\t\t\t\t\t\t\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 162), "login", [], "any", false, false, false, 162), "enabled", [], "any", false, false, false, 162) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 162), "username", [], "any", false, false, false, 162))) {
            // line 163
            yield "\t\t\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://dashboard"), "html", null, true);
            yield "\" class=\"btn-dashboard desktop-only\" aria-label=\"Go to Dashboard\">
\t\t\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
        } else {
            // line 167
            yield "\t\t\t\t\t\t\t\t\t";
            $context["login_url"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "moodle_url")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "moodle_url") . "/login")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://login")));
            // line 168
            yield "\t\t\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["login_url"] ?? null), "html", null, true);
            yield "\" class=\"btn-login desktop-only\" aria-label=\"Log in to your account\">
\t\t\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
        }
        // line 172
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</header>

\t\t\t\t";
        // line 178
        yield "\t\t\t\t";
        // line 179
        yield "\t\t\t\t<div
\t\t\t\t\tid=\"mobile-menu-wrapper\" class=\"mobile-menu-overlay\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Mobile Navigation\">

\t\t\t\t\t";
        // line 183
        yield "\t\t\t\t\t<div id=\"mobile-backdrop\" class=\"mobile-menu-backdrop\"></div>

\t\t\t\t\t";
        // line 186
        yield "\t\t\t\t\t<div id=\"mobile-sidebar\" class=\"mobile-sidebar\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"mobile-sidebar-inner\">
\t\t\t\t\t\t\t";
        // line 191
        yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"mobile-sidebar-content\">
\t\t\t\t\t\t\t\t";
        // line 194
        yield "\t\t\t\t\t\t\t\t<nav class=\"mobile-nav stack-s animate-fade-in-up delay-100\">
\t\t\t\t\t\t\t\t\t";
        // line 195
        yield from $this->load("partials/navigation.html.twig", 195)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 196
        yield "\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 200
        yield "\t\t\t\t\t\t\t<div class=\"mobile-sidebar-footer animate-fade-in-up delay-200\">
\t\t\t\t\t\t\t\t<h4 class=\"mobile-footer-title\">Follow Our Journey</h4>
\t\t\t\t\t\t\t\t<div class=\"social-icons-grid\">
\t\t\t\t\t\t\t\t\t";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["facebook", "twitter", "instagram", "youtube"]);
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 204
            yield "\t\t\t\t\t\t\t\t\t\t";
            $context["social_url"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, ("social_" . $context["platform"]));
            // line 205
            yield "\t\t\t\t\t\t\t\t\t\t";
            if ((($tmp = ($context["social_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 206
                yield "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["social_url"] ?? null), "html", null, true);
                yield "\" target=\"_blank\" class=\"social-icon\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["platform"]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lab la-";
                // line 207
                yield ((($context["platform"] == "facebook")) ? ("facebook-f") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["platform"], "html", null, true)));
                yield "\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 210
            yield "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['platform'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 144
        yield "\t\t\t\t\t\t\t\t\t\t";
        yield from $this->load("partials/navigation.html.twig", 144)->unwrap()->yield($context);
        // line 145
        yield "\t\t\t\t\t\t\t\t\t";
        yield from [];
    }

    // line 219
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 222
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 223
        yield "\t\t\t\t\t<section id=\"body-wrapper\" class=\"section-py container-px\">
\t\t\t\t\t\t";
        // line 224
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 229
        yield "\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t";
        // line 230
        yield from         $this->unwrap()->yieldBlock("content_surround", $context, $blocks);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t";
        yield from [];
    }

    // line 224
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 225
        yield "\t\t\t\t\t\t\t<div class=\"container message-spacer\">
\t\t\t\t\t\t\t\t";
        // line 226
        try {
            $_v3 = $this->load("partials/messages.html.twig", 226);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v3 = null;
        }
        if ($_v3) {
            yield from $_v3->unwrap()->yield($context);
        }
        // line 227
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        yield from [];
    }

    // line 236
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 237
        yield "\t\t\t\t";
        yield from $this->load("partials/bottom-banner.html.twig", 237)->unwrap()->yield($context);
        // line 238
        yield "\t\t\t";
        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 261
        yield "\t\t\t";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 261);
        yield "
\t\t\t";
        // line 262
        yield from $this->load("partials/snipcart.html.twig", 262)->unwrap()->yield($context);
        // line 263
        yield "
\t\t\t";
        // line 265
        yield "\t\t\t<script id=\"theme-config\" type=\"application/json\">
\t\t\t\t";
        // line 266
        yield json_encode(($context["theme_js_config"] ?? null));
        yield "
\t\t\t</script>
\t\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  722 => 266,  719 => 265,  716 => 263,  714 => 262,  709 => 261,  702 => 260,  697 => 238,  694 => 237,  687 => 236,  681 => 227,  671 => 226,  668 => 225,  661 => 224,  652 => 230,  649 => 229,  647 => 224,  644 => 223,  637 => 222,  627 => 219,  622 => 145,  619 => 144,  612 => 143,  602 => 211,  596 => 210,  590 => 207,  583 => 206,  580 => 205,  577 => 204,  573 => 203,  568 => 200,  563 => 196,  561 => 195,  558 => 194,  554 => 191,  548 => 186,  544 => 183,  539 => 179,  537 => 178,  530 => 172,  522 => 168,  519 => 167,  511 => 163,  508 => 162,  499 => 154,  494 => 150,  489 => 146,  487 => 143,  484 => 142,  480 => 139,  478 => 138,  475 => 137,  471 => 134,  466 => 130,  464 => 129,  461 => 128,  453 => 121,  449 => 118,  441 => 111,  437 => 108,  435 => 107,  432 => 106,  430 => 105,  423 => 104,  415 => 90,  410 => 89,  393 => 88,  388 => 86,  385 => 85,  382 => 84,  379 => 83,  376 => 82,  373 => 81,  370 => 80,  367 => 79,  364 => 78,  361 => 77,  358 => 76,  355 => 75,  352 => 74,  349 => 73,  346 => 72,  339 => 71,  334 => 69,  331 => 68,  328 => 67,  321 => 66,  304 => 54,  299 => 51,  294 => 48,  285 => 42,  280 => 40,  275 => 39,  272 => 38,  270 => 37,  267 => 36,  256 => 35,  252 => 33,  250 => 32,  242 => 28,  235 => 25,  233 => 24,  229 => 22,  212 => 21,  204 => 269,  202 => 260,  193 => 253,  191 => 252,  178 => 241,  175 => 239,  173 => 236,  169 => 234,  167 => 222,  163 => 220,  161 => 219,  157 => 217,  155 => 104,  151 => 102,  144 => 96,  138 => 94,  134 => 92,  132 => 88,  129 => 87,  127 => 71,  124 => 70,  122 => 66,  119 => 65,  116 => 21,  114 => 20,  109 => 18,  106 => 17,  104 => 16,  89 => 14,  86 => 13,  83 => 11,  80 => 8,  78 => 7,  76 => 6,  74 => 5,  72 => 4,  70 => 3,  68 => 2,  66 => 1,  35 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/base.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/base.html.twig");
    }
    private $deferred;
}
