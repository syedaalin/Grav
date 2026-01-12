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
\t<body id=\"top\" class=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["body_classes"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["dynamic_body_classes"] ?? null), " "), "html", null, true);
        yield "\">
\t\t<div
\t\t\tid=\"page-wrapper\">
\t\t\t";
        // line 97
        yield "\t\t\t<a href=\"#start\" class=\"skip-link\">Skip to main content</a>

\t\t\t";
        // line 99
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 216
        yield "

\t\t\t";
        // line 218
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 219
        yield "
\t\t\t<section id=\"start\">
\t\t\t\t";
        // line 221
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 233
        yield "\t\t\t</section>

\t\t\t";
        // line 235
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 238
        yield "
\t\t\t";
        // line 240
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
        // line 251
        yield from $this->load("partials/tntsearch.html.twig", 251)->unwrap()->yield($context);
        // line 252
        yield "\t\t\t\t\t<p class=\"desktop-only search-hint\">Press
\t\t\t\t\t\t<kbd class=\"kbd\">ESC</kbd>
\t\t\t\t\t\tto close</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 259
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 268
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

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 100
        yield "\t\t\t\t";
        $context["_top_banner_enabled"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_enabled");
        // line 101
        yield "\t\t\t\t";
        $context["top_banner_active"] = (((null === ($context["_top_banner_enabled"] ?? null))) ? (true) : (($context["_top_banner_enabled"] ?? null)));
        // line 102
        yield "\t\t\t\t";
        $context["top_banner_color"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_bg_color"), "oklch(0.2 0.02 260)");
        // line 103
        yield "
\t\t\t\t";
        // line 105
        yield "\t\t\t\t<div class=\"header-top-sticky\">
\t\t\t\t\t";
        // line 106
        yield from $this->load("partials/top-banner.html.twig", 106)->unwrap()->yield($context);
        // line 107
        yield "\t\t\t\t</div>

\t\t\t\t";
        // line 110
        yield "\t\t\t\t<header id=\"header\" class=\"header-main-sticky\" role=\"banner\">

\t\t\t\t\t<div class=\"container container-px header-spacing\">
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"header-nav\" aria-label=\"Main navigation\">

\t\t\t\t\t\t\t";
        // line 117
        yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"header-zone-a\">
\t\t\t\t\t\t\t\t";
        // line 120
        yield "\t\t\t\t\t\t\t\t<button id=\"mobile-toggle\" class=\"mobile-toggle\" aria-label=\"Open navigation menu\" aria-controls=\"mobile-overlay\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\" class=\"icon-lg\">
\t\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t";
        // line 127
        yield "\t\t\t\t\t\t\t\t<div class=\"desktop-only logo-hover\">
\t\t\t\t\t\t\t\t\t";
        // line 128
        yield from $this->load("partials/logo.html.twig", 128)->unwrap()->yield($context);
        // line 129
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 133
        yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"header-zone-b\">
\t\t\t\t\t\t\t\t";
        // line 136
        yield "\t\t\t\t\t\t\t\t<div class=\"mobile-only logo-hover\">
\t\t\t\t\t\t\t\t\t";
        // line 137
        yield from $this->load("partials/logo.html.twig", 137)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 138
        yield "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 141
        yield "\t\t\t\t\t\t\t\t<nav id=\"desktop-nav\" class=\"desktop-nav\">
\t\t\t\t\t\t\t\t\t";
        // line 142
        yield from $this->unwrap()->yieldBlock('header_navigation', $context, $blocks);
        // line 145
        yield "\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 149
        yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"header-zone-c\">

\t\t\t\t\t\t\t\t";
        // line 153
        yield "\t\t\t\t\t\t\t\t<button id=\"search-trigger\" class=\"icon-button desktop-only\" aria-label=\"Open search\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\" class=\"icon-lg\">
\t\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t\t";
        // line 161
        yield "\t\t\t\t\t\t\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 161), "login", [], "any", false, false, false, 161), "enabled", [], "any", false, false, false, 161) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 161), "username", [], "any", false, false, false, 161))) {
            // line 162
            yield "\t\t\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://dashboard"), "html", null, true);
            yield "\" class=\"btn-dashboard desktop-only\" aria-label=\"Go to Dashboard\">
\t\t\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
        } else {
            // line 166
            yield "\t\t\t\t\t\t\t\t\t";
            $context["login_url"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "moodle_url")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "moodle_url") . "/login")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://login")));
            // line 167
            yield "\t\t\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["login_url"] ?? null), "html", null, true);
            yield "\" class=\"btn-login desktop-only\" aria-label=\"Log in to your account\">
\t\t\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
        }
        // line 171
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</header>

\t\t\t\t";
        // line 177
        yield "\t\t\t\t";
        // line 178
        yield "\t\t\t\t<div
\t\t\t\t\tid=\"mobile-menu-wrapper\" class=\"mobile-menu-overlay\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Mobile Navigation\">

\t\t\t\t\t";
        // line 182
        yield "\t\t\t\t\t<div id=\"mobile-backdrop\" class=\"mobile-menu-backdrop\"></div>

\t\t\t\t\t";
        // line 185
        yield "\t\t\t\t\t<div id=\"mobile-sidebar\" class=\"mobile-sidebar\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"mobile-sidebar-inner\">
\t\t\t\t\t\t\t";
        // line 190
        yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"mobile-sidebar-content\">
\t\t\t\t\t\t\t\t";
        // line 193
        yield "\t\t\t\t\t\t\t\t<nav class=\"mobile-nav stack-s animate-fade-in-up delay-100\">
\t\t\t\t\t\t\t\t\t";
        // line 194
        yield from $this->load("partials/navigation.html.twig", 194)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 195
        yield "\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 199
        yield "\t\t\t\t\t\t\t<div class=\"mobile-sidebar-footer animate-fade-in-up delay-200\">
\t\t\t\t\t\t\t\t<h4 class=\"mobile-footer-title\">Follow Our Journey</h4>
\t\t\t\t\t\t\t\t<div class=\"social-icons-grid\">
\t\t\t\t\t\t\t\t\t";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["facebook", "twitter", "instagram", "youtube"]);
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 203
            yield "\t\t\t\t\t\t\t\t\t\t";
            $context["social_url"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, ("social_" . $context["platform"]));
            // line 204
            yield "\t\t\t\t\t\t\t\t\t\t";
            if ((($tmp = ($context["social_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 205
                yield "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["social_url"] ?? null), "html", null, true);
                yield "\" target=\"_blank\" class=\"social-icon\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["platform"]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lab la-";
                // line 206
                yield ((($context["platform"] == "facebook")) ? ("facebook-f") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["platform"], "html", null, true)));
                yield "\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 209
            yield "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['platform'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        yield "\t\t\t\t\t\t\t\t\t\t";
        yield from $this->load("partials/navigation.html.twig", 143)->unwrap()->yield($context);
        // line 144
        yield "\t\t\t\t\t\t\t\t\t";
        yield from [];
    }

    // line 218
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 221
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 222
        yield "\t\t\t\t\t<section id=\"body-wrapper\" class=\"section-py container-px\">
\t\t\t\t\t\t";
        // line 223
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 228
        yield "\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t";
        // line 229
        yield from         $this->unwrap()->yieldBlock("content_surround", $context, $blocks);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t";
        yield from [];
    }

    // line 223
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 224
        yield "\t\t\t\t\t\t\t<div class=\"container message-spacer\">
\t\t\t\t\t\t\t\t";
        // line 225
        try {
            $_v3 = $this->load("partials/messages.html.twig", 225);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v3 = null;
        }
        if ($_v3) {
            yield from $_v3->unwrap()->yield($context);
        }
        // line 226
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        yield from [];
    }

    // line 235
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 236
        yield "\t\t\t\t";
        yield from $this->load("partials/bottom-banner.html.twig", 236)->unwrap()->yield($context);
        // line 237
        yield "\t\t\t";
        yield from [];
    }

    // line 259
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 260
        yield "\t\t\t";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 260);
        yield "
\t\t\t";
        // line 261
        yield from $this->load("partials/snipcart.html.twig", 261)->unwrap()->yield($context);
        // line 262
        yield "
\t\t\t";
        // line 264
        yield "\t\t\t<script id=\"theme-config\" type=\"application/json\">
\t\t\t\t";
        // line 265
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
        return array (  726 => 265,  723 => 264,  720 => 262,  718 => 261,  713 => 260,  706 => 259,  701 => 237,  698 => 236,  691 => 235,  685 => 226,  675 => 225,  672 => 224,  665 => 223,  656 => 229,  653 => 228,  651 => 223,  648 => 222,  641 => 221,  631 => 218,  626 => 144,  623 => 143,  616 => 142,  606 => 210,  600 => 209,  594 => 206,  587 => 205,  584 => 204,  581 => 203,  577 => 202,  572 => 199,  567 => 195,  565 => 194,  562 => 193,  558 => 190,  552 => 185,  548 => 182,  543 => 178,  541 => 177,  534 => 171,  526 => 167,  523 => 166,  515 => 162,  512 => 161,  503 => 153,  498 => 149,  493 => 145,  491 => 142,  488 => 141,  484 => 138,  482 => 137,  479 => 136,  475 => 133,  470 => 129,  468 => 128,  465 => 127,  457 => 120,  453 => 117,  445 => 110,  441 => 107,  439 => 106,  436 => 105,  433 => 103,  430 => 102,  427 => 101,  424 => 100,  417 => 99,  409 => 90,  404 => 89,  387 => 88,  382 => 86,  379 => 85,  376 => 84,  373 => 83,  370 => 82,  367 => 81,  364 => 80,  361 => 79,  358 => 78,  355 => 77,  352 => 76,  349 => 75,  346 => 74,  343 => 73,  340 => 72,  333 => 71,  328 => 69,  325 => 68,  322 => 67,  315 => 66,  298 => 54,  293 => 51,  288 => 48,  279 => 42,  274 => 40,  269 => 39,  266 => 38,  264 => 37,  261 => 36,  250 => 35,  246 => 33,  244 => 32,  236 => 28,  229 => 25,  227 => 24,  223 => 22,  206 => 21,  198 => 268,  196 => 259,  187 => 252,  185 => 251,  172 => 240,  169 => 238,  167 => 235,  163 => 233,  161 => 221,  157 => 219,  155 => 218,  151 => 216,  149 => 99,  145 => 97,  137 => 93,  134 => 92,  132 => 88,  129 => 87,  127 => 71,  124 => 70,  122 => 66,  119 => 65,  116 => 21,  114 => 20,  109 => 18,  106 => 17,  104 => 16,  89 => 14,  86 => 13,  83 => 11,  80 => 8,  78 => 7,  76 => 6,  74 => 5,  72 => 4,  70 => 3,  68 => 2,  66 => 1,  35 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/base.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/base.html.twig");
    }
    private $deferred;
}
