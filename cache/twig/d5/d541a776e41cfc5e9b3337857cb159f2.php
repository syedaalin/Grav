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
        // line 55
        yield "
\t\t";
        // line 56
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 60
        yield "
\t\t";
        // line 61
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

\t\t<div
\t\t\tid=\"page-wrapper\">
\t\t\t";
        // line 99
        yield "\t\t\t<a href=\"#start\" class=\"skip-link\">Skip to main content</a>


\t\t\t\t";
        // line 106
        yield "\t\t\t\t";
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 110
        yield "

\t\t\t";
        // line 112
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 113
        yield "
\t\t\t<section id=\"start\">
\t\t\t\t";
        // line 115
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 127
        yield "\t\t\t</section>

\t\t\t";
        // line 129
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 132
        yield "
\t\t\t";
        // line 133
        yield from $this->load("partials/search-overlay.html.twig", 133)->unwrap()->yield($context);
        // line 134
        yield "\t\t</div>

\t\t";
        // line 136
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 145
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
        yield "


\t\t";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/modern-vanilla.css"], "method", false, false, false, 57);
        // line 58
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/line-awesome.min.css"], "method", false, false, false, 58);
        // line 59
        yield "\t\t";
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "\t\t\t";
        // line 63
        yield "\t\t\t";
        // line 64
        yield "\t\t\t
\t\t\t";
        // line 66
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/khums-calculator.js", ["priority" => 100, "group" => "bottom", "type" => "module"]], "method", false, false, false, 66);
        // line 67
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/ui.js", ["priority" => 95, "group" => "bottom", "type" => "module"]], "method", false, false, false, 67);
        // line 68
        yield "\t\t\t
\t\t\t";
        // line 70
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/performance-monitor.js", ["priority" => 94, "group" => "bottom", "type" => "module"]], "method", false, false, false, 70);
        // line 71
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/pull-refresh.js", ["priority" => 94, "group" => "bottom", "type" => "module"]], "method", false, false, false, 71);
        // line 72
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/gallery.js", ["priority" => 93, "group" => "bottom", "type" => "module"]], "method", false, false, false, 72);
        // line 73
        yield "\t\t\t
\t\t\t";
        // line 75
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/high-contrast.js", ["priority" => 89, "group" => "bottom", "type" => "module"]], "method", false, false, false, 75);
        // line 76
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/font-scaler.js", ["priority" => 89, "group" => "bottom", "type" => "module"]], "method", false, false, false, 76);
        // line 77
        yield "\t\t\t
\t\t\t";
        // line 79
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/bottom-banner.js", ["priority" => 89, "group" => "bottom", "type" => "module"]], "method", false, false, false, 79);
        // line 80
        yield "\t\t\t
\t\t\t";
        // line 82
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/spiritual.js", ["priority" => 88, "group" => "bottom", "type" => "module"]], "method", false, false, false, 82);
        // line 83
        yield "\t\t\t
\t\t\t";
        // line 85
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/service-worker.js", ["priority" => 87, "group" => "bottom", "type" => "module"]], "method", false, false, false, 85);
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

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 107
        yield "\t\t\t\t\t";
        yield from $this->load("partials/header-wrapper.html.twig", 107)->unwrap()->yield($context);
        // line 108
        yield "\t\t\t\t\t";
        yield from $this->load("partials/mobile-menu.html.twig", 108)->unwrap()->yield($context);
        // line 109
        yield "\t\t\t\t";
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 116
        yield "\t\t\t\t\t<section id=\"body-wrapper\" class=\"section-py container-px\">
\t\t\t\t\t\t";
        // line 117
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 122
        yield "\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t";
        // line 123
        yield from         $this->unwrap()->yieldBlock("content_surround", $context, $blocks);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t";
        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 118
        yield "\t\t\t\t\t\t\t<div class=\"container message-spacer\">
\t\t\t\t\t\t\t\t";
        // line 119
        try {
            $_v3 = $this->load("partials/messages.html.twig", 119);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v3 = null;
        }
        if ($_v3) {
            yield from $_v3->unwrap()->yield($context);
        }
        // line 120
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 130
        yield "\t\t\t\t";
        yield from $this->load("partials/bottom-banner/main.html.twig", 130)->unwrap()->yield($context);
        // line 131
        yield "\t\t\t";
        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 137
        yield "\t\t\t";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 137);
        yield "
\t\t\t";
        // line 138
        yield from $this->load("partials/snipcart.html.twig", 138)->unwrap()->yield($context);
        // line 139
        yield "
\t\t\t";
        // line 141
        yield "\t\t\t<script>
\t\t\t\twindow.GravConfig = ";
        // line 142
        yield json_encode(Twig\Extension\CoreExtension::merge(((array_key_exists("theme_js_config", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme_js_config"] ?? null), [])) : ([])), ["theme_url" => ($context["theme_url"] ?? null)]));
        yield ";
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
        return array (  512 => 142,  509 => 141,  506 => 139,  504 => 138,  499 => 137,  492 => 136,  487 => 131,  484 => 130,  477 => 129,  471 => 120,  461 => 119,  458 => 118,  451 => 117,  442 => 123,  439 => 122,  437 => 117,  434 => 116,  427 => 115,  417 => 112,  412 => 109,  409 => 108,  406 => 107,  399 => 106,  391 => 90,  386 => 89,  369 => 88,  364 => 86,  361 => 85,  358 => 83,  355 => 82,  352 => 80,  349 => 79,  346 => 77,  343 => 76,  340 => 75,  337 => 73,  334 => 72,  331 => 71,  328 => 70,  325 => 68,  322 => 67,  319 => 66,  316 => 64,  314 => 63,  312 => 62,  305 => 61,  300 => 59,  297 => 58,  294 => 57,  287 => 56,  278 => 51,  273 => 48,  264 => 42,  259 => 40,  254 => 39,  251 => 38,  249 => 37,  246 => 36,  235 => 35,  231 => 33,  229 => 32,  221 => 28,  214 => 25,  212 => 24,  208 => 22,  191 => 21,  183 => 145,  181 => 136,  177 => 134,  175 => 133,  172 => 132,  170 => 129,  166 => 127,  164 => 115,  160 => 113,  158 => 112,  154 => 110,  151 => 106,  146 => 99,  137 => 94,  133 => 92,  131 => 88,  128 => 87,  126 => 61,  123 => 60,  121 => 56,  118 => 55,  115 => 21,  113 => 20,  108 => 18,  105 => 17,  103 => 16,  88 => 14,  85 => 13,  82 => 11,  79 => 8,  77 => 7,  75 => 6,  73 => 5,  71 => 4,  69 => 3,  67 => 2,  65 => 1,  35 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/base.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/base.html.twig");
    }
    private $deferred;
}
