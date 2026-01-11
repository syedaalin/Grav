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

        // line 7
        $_trait_0 = $this->load("blocks/base.html.twig", 7);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 7, $this->source);
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
                'body_classes' => [$this, 'block_body_classes'],
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
        $context["body_classes"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->bodyClassFunc($context, ["header-fixed", "header-animated", "header-dark", "header-transparent", "sticky-footer", ($context["direction"] ?? null), ($context["typography"] ?? null)]);
        // line 5
        $context["grid_size"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "grid-size");
        // line 6
        $context["compress"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "production-mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (".min.css") : (".css"));
        // line 8
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["language"] ?? null), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["direction"] ?? null), "html", null, true);
        yield "\" style=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["dynamic_styles"] ?? null), ";"), "html", null, true);
        yield "\">
<head>
";
        // line 11
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 40
        yield "
";
        // line 41
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 45
        yield "
";
        // line 46
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 111
        yield "
";
        // line 112
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        // line 116
        yield "</head>
<body id=\"top\" class=\"@container ";
        // line 117
        yield from $this->unwrap()->yieldBlock('body_classes', $context, $blocks);
        yield " selection:bg-primary/20 selection:text-primary\">
    ";
        // line 119
        yield "    <a href=\"#start\" class=\"sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:bg-white focus:text-primary focus:px-6 focus:py-3 focus:rounded-xl focus:shadow-2xl focus:ring-2 focus:ring-primary font-bold transition-all\">Skip to main content</a>
    
    ";
        // line 121
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 266
        yield "

    ";
        // line 268
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 269
        yield "
        <section id=\"start\">
        ";
        // line 271
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 283
        yield "        </section>

    ";
        // line 285
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 288
        yield "
    ";
        // line 290
        yield "
";
        // line 291
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 301
        yield "
</body>
</html>";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 11
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
        // line 12
        yield "    <meta charset=\"utf-8\" />
    <title>";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 13), "html");
            yield " | ";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 13), "html");
        yield "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    ";
        // line 17
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "production-mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "    <meta http-equiv=\"Content-Security-Policy\" content=\"default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.snipcart.com https://api.aladhan.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.snipcart.com; font-src 'self' https://fonts.gstatic.com data:; img-src 'self' data: https://cdn.snipcart.com; connect-src 'self' https://api.aladhan.com https://cdn.snipcart.com; frame-src 'self' https://cdn.snipcart.com;\">
    ";
        }
        // line 20
        yield "    ";
        yield from $this->load("partials/metadata.html.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "
    ";
        // line 22
        $context["logo_img"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = ($context["media"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[("theme://images/logo/" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo")), "name", [], "any", false, false, false, 22))] ?? null) : null)) : (null));
        // line 23
        yield "    ";
        $context["favicon"] = (((($tmp = ($context["logo_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["logo_img"] ?? null), "cropZoom", [32, 32], "method", false, false, false, 23)) : ((($_v1 = ($context["media"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["theme://images/favicon.png"] ?? null) : null)));
        // line 24
        yield "    <link rel=\"icon\" type=\"image/png\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["favicon"] ?? null), "url", [], "any", false, false, false, 24), "html", null, true);
        yield "\" />
    <link rel=\"canonical\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 25), "html", null, true);
        yield "\" />
    ";
        // line 27
        yield "    ";
        // line 28
        yield "
    ";
        // line 30
        yield "    ";
        // line 37
        yield "

";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/nur-ul-huda.css"], "method", false, false, false, 42);
        // line 43
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/line-awesome.min.css"], "method", false, false, false, 43);
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["jquery", 101], "method", false, false, false, 47);
        // line 48
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/utils.js", 95], "method", false, false, false, 48);
        // line 49
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/pull-refresh.js", 94], "method", false, false, false, 49);
        // line 50
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/gallery.js", 93], "method", false, false, false, 50);
        // line 51
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/mobile-menu.js?v=a11y-focus", 90], "method", false, false, false, 51);
        // line 52
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/sticky-header.js?v=pure-fluid", 90], "method", false, false, false, 52);
        // line 53
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/high-contrast.js", 89], "method", false, false, false, 53);
        // line 54
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/font-scaler.js", 89], "method", false, false, false, 54);
        // line 55
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/footer.js", 89], "method", false, false, false, 55);
        // line 56
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/prayer-times.js", 89], "method", false, false, false, 56);
        // line 57
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/hijri-date.js", 89], "method", false, false, false, 57);
        // line 58
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/adhan-player.js", 89], "method", false, false, false, 58);
        // line 59
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/khums-calculator.js", 89], "method", false, false, false, 59);
        // line 60
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/spiritual.js", 88], "method", false, false, false, 60);
        // line 61
        yield "    
    ";
        // line 63
        yield "
    ";
        // line 65
        yield "    ";
        $context["glass_blur"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "glass_blur"), 16);
        // line 66
        yield "    ";
        $context["glass_opacity"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "glass_opacity"), 0.15);
        // line 67
        yield "    ";
        $context["glass_border_opacity"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "glass_border_opacity"), 0.1);
        // line 68
        yield "    ";
        $context["glass_thickness"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "glass_thickness"), 1);
        // line 69
        yield "    ";
        $context["glass_shadow_intensity"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "glass_shadow_intensity"), 0.1);
        // line 70
        yield "    ";
        // line 71
        yield "    ";
        $context["top_banner_color"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_bg_color"), "#111827");
        // line 72
        yield "
    <style>
        /* Global Premium Glass Standard (The 4 Pillars) */
        .glass-card {
            /* Pillar 1: Translucency (Surface) */
            background-color: color-mix(in srgb, ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["top_banner_color"] ?? null), "html", null, true);
        yield " calc(";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_opacity"] ?? null), "html", null, true);
        yield " * 100%), transparent);
            
            /* Pillar 2: Diffusion (Blur) */
            backdrop-filter: blur(";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_blur"] ?? null), "html", null, true);
        yield "px);
            
            /* Pillar 3: Reflective Edge (Border) */
            border: ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_thickness"] ?? null), "html", null, true);
        yield "px solid oklch(1 0 0 / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_border_opacity"] ?? null), "html", null, true);
        yield ");
            
            /* Pillar 4: Depth (Shadow) */
            box-shadow: 0 4px 30px oklch(0 0 0 / ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_shadow_intensity"] ?? null), "html", null, true);
        yield ");
        }

        #header.header-glass:not(.scrolled) {
            background-color: color-mix(in srgb, ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["top_banner_color"] ?? null), "html", null, true);
        yield " calc(";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_opacity"] ?? null), "html", null, true);
        yield " * 100%), transparent) !important;
            backdrop-filter: blur(";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_blur"] ?? null), "html", null, true);
        yield "px) !important;
            border-bottom: ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_thickness"] ?? null), "html", null, true);
        yield "px solid oklch(1 0 0 / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_border_opacity"] ?? null), "html", null, true);
        yield ") !important;
             /* Initial state usually has no shadow or very subtle one */
            box-shadow: none !important;
        }

        /* Scrolled state uses the same blur but enables the full Glass Card effect */
        #header.header-glass.scrolled {
            background-color: color-mix(in srgb, ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["top_banner_color"] ?? null), "html", null, true);
        yield " calc(";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_opacity"] ?? null), "html", null, true);
        yield " * 100%), transparent) !important;
            backdrop-filter: blur(";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_blur"] ?? null), "html", null, true);
        yield "px) !important;
            box-shadow: 0 4px 30px oklch(0 0 0 / ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_shadow_intensity"] ?? null), "html", null, true);
        yield ") !important;
            border-bottom: ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_thickness"] ?? null), "html", null, true);
        yield "px solid oklch(1 0 0 / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glass_border_opacity"] ?? null), "html", null, true);
        yield ") !important;
        }
        
        /* Ensure the shadow (if applied inline) is visible */
        #header[style*=\"box-shadow\"] {
             /* No special rule needed, inline style wins */
        }
    </style>
";
        yield from [];
    }

    // line 112
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
        // line 113
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 113);
        yield "
    ";
        // line 114
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, false, 114);
        yield "
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["body_classes"] ?? null), "html", null, true);
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "        ";
        $context["_top_banner_enabled"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_enabled");
        // line 123
        yield "        ";
        $context["top_banner_active"] = (((null === ($context["_top_banner_enabled"] ?? null))) ? (true) : (($context["_top_banner_enabled"] ?? null)));
        // line 124
        yield "        ";
        $context["top_banner_color"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_bg_color"), "#111827");
        // line 125
        yield "        
        ";
        // line 127
        yield "        <div class=\"sticky top-0 z-40 w-full transition-transform duration-300 ease-in-out\">
            ";
        // line 128
        yield from $this->load("partials/top-banner.html.twig", 128)->unwrap()->yield($context);
        // line 129
        yield "        </div>
        
        ";
        // line 132
        yield "        <header id=\"header\" 
                class=\"sticky top-0 w-full z-50 header-glass transition-transform duration-300 ease-in-out\"
                role=\"banner\">
            
            <div class=\"container-px mx-auto max-w-7xl py-4 @lg:py-6\">
                <nav class=\"flex justify-between items-center h-14 @lg:h-20\" aria-label=\"Main navigation\">
                    
                    ";
        // line 140
        yield "                    <div class=\"flex items-center gap-4 @lg:gap-8 flex-1 @lg:flex-none\">
                        ";
        // line 142
        yield "                        <button id=\"mobile-toggle\" 
                                class=\"@lg:hidden p-2 -ml-2 text-gray-800 hover:text-primary transition-all focus:outline-none focus:ring-4 focus:ring-primary/10 rounded-2xl relative z-60 flex items-center justify-center min-w-[48px] min-h-[48px]\"
                                aria-label=\"Open navigation menu\"
                                aria-controls=\"mobile-overlay\"
                                aria-expanded=\"false\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\" class=\"w-7 h-7\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\" />
                            </svg>
                        </button>

                        ";
        // line 153
        yield "                        <div class=\"hidden @lg:block transition-transform duration-300 hover:scale-[1.03] active:scale-95\">
                            ";
        // line 154
        yield from $this->load("partials/logo.html.twig", 154)->unwrap()->yield($context);
        // line 155
        yield "                        </div>
                    </div>

                    ";
        // line 159
        yield "                    <div class=\"flex items-center justify-center @lg:justify-start @lg:flex-1\">
                        ";
        // line 161
        yield "                        <div class=\"@lg:hidden transition-transform duration-300 hover:scale-105\">
                            ";
        // line 162
        yield from $this->load("partials/logo.html.twig", 162)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 163
        yield "                        </div>

                        ";
        // line 166
        yield "                        <nav id=\"desktop-nav\" class=\"hidden @lg:flex items-center @container\">
                            ";
        // line 167
        yield from $this->unwrap()->yieldBlock('header_navigation', $context, $blocks);
        // line 170
        yield "                        </nav>
                    </div>

                    ";
        // line 174
        yield "                    <div class=\"flex items-center justify-end gap-2 @lg:gap-4 flex-1 @lg:flex-none\">
                        
                        ";
        // line 177
        yield "                        <button class=\"p-2 text-gray-700 hover:text-primary hover:bg-primary/5 transition-all rounded-2xl flex items-center justify-center min-w-[48px] min-h-[48px] focus:outline-none focus:ring-4 focus:ring-primary/10\" 
                                aria-label=\"Open search\">
                            <i class=\"la la-search text-2xl\" aria-hidden=\"true\"></i>
                        </button>

                        ";
        // line 183
        yield "                        <button class=\"snipcart-checkout relative p-2 text-gray-700 hover:text-primary hover:bg-primary/5 transition-all rounded-2xl flex items-center justify-center min-w-[48px] min-h-[48px] focus:outline-none focus:ring-4 focus:ring-primary/10\" 
                                aria-label=\"View shopping cart\">
                            <i class=\"la la-shopping-bag text-2xl\" aria-hidden=\"true\"></i>
                            <span class=\"snipcart-items-count absolute top-2 right-2 bg-accent text-gray-900 text-[10px] font-black w-5 h-5 flex items-center justify-center rounded-full border-2 border-white shadow-xl animate-pulse-subtle\" aria-live=\"polite\">0</span>
                        </button>

                        ";
        // line 190
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 190), "login", [], "any", false, false, false, 190), "enabled", [], "any", false, false, false, 190) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 190), "username", [], "any", false, false, false, 190))) {
            // line 191
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://dashboard"), "html", null, true);
            yield "\" 
                               class=\"hidden @lg:inline-flex items-center gap-2 bg-primary text-white px-8 py-3 rounded-2xl font-black text-sm shadow-xl shadow-primary/20 hover:-translate-y-1 hover:shadow-primary/40 active:translate-y-0 transition-all focus:outline-none focus:ring-4 focus:ring-primary/20\"
                               aria-label=\"Go to Dashboard\">
                                <span>Dashboard</span>
                            </a>
                            <a href=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://dashboard"), "html", null, true);
            yield "\" 
                               class=\"@lg:hidden p-2 text-gray-700 hover:text-primary hover:bg-primary/5 transition-all rounded-2xl flex items-center justify-center min-w-[48px] min-h-[48px]\"
                               aria-label=\"Go to Dashboard\">
                                <i class=\"la la-user-circle text-2xl\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        } else {
            // line 202
            yield "                            ";
            $context["login_url"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "moodle_url")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "moodle_url") . "/login")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://login")));
            // line 203
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["login_url"] ?? null), "html", null, true);
            yield "\" 
                               class=\"hidden @lg:inline-flex items-center px-4 py-3 text-gray-800 font-black text-sm hover:text-primary hover:bg-primary/5 rounded-xl transition-all\"
                               aria-label=\"Log in to your account\">
                                Login
                            </a>
                            <a href=\"";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["login_url"] ?? null), "html", null, true);
            yield "\" 
                               class=\"@lg:hidden p-2 text-gray-700 hover:text-primary hover:bg-primary/5 transition-all rounded-2xl flex items-center justify-center min-w-[48px] min-h-[48px]\"
                               aria-label=\"Log in to your account\">
                                <i class=\"la la-sign-in-alt text-2xl\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        }
        // line 214
        yield "                    </div>
                </nav>
            </div>
        </header>

        ";
        // line 220
        yield "        ";
        // line 221
        yield "        <div id=\"mobile-overlay\" 
             class=\"fixed bottom-0 w-1/2 z-30 translate-x-full transition-transform duration-700 ease-[cubic-bezier(0.23,1,0.32,1)] @lg:hidden invisible [&.open]:visible [&.open]:translate-x-0\"
             role=\"dialog\"
             aria-modal=\"true\"
             aria-label=\"Mobile Navigation\">
            
            <div class=\"flex flex-col h-full glass-card pt-4\">
                ";
        // line 229
        yield "
                ";
        // line 231
        yield "                <div class=\"flex-1 overflow-y-auto p-8 @container\">
                    ";
        // line 233
        yield "                    <div class=\"mb-10 animate-fade-in-up\">
                        <div class=\"relative group\">
                            <input type=\"text\" placeholder=\"Explore resources...\" 
                                   class=\"w-full pl-14 pr-6 py-5 bg-surface-subtle/20 border-2 border-transparent focus:input-focus rounded-premium placeholder-gray-400 font-bold text-lg\">
                            <i class=\"la la-search absolute left-5 top-1/2 -translate-y-1/2 text-subtle text-2xl group-focus-within:text-primary transition-colors\"></i>
                        </div>
                    </div>

                    ";
        // line 242
        yield "                    <nav class=\"mobile-nav space-y-2 animate-fade-in-up\" style=\"animation-delay: 0.1s\">
                        ";
        // line 243
        yield from $this->load("partials/navigation.html.twig", 243)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 244
        yield "                    </nav>
                </div>

                ";
        // line 248
        yield "                <div class=\"p-10 bg-surface-subtle/20 border-t border-subtle/50 animate-fade-in-up\" style=\"animation-delay: 0.2s\">
                    <h4 class=\"text-[11px] font-black text-subtle uppercase tracking-[0.2em] mb-8\">Follow Our Journey</h4>
                    <div class=\"flex flex-wrap gap-5\">
                        ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["facebook", "twitter", "instagram", "youtube"]);
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 252
            yield "                             ";
            $context["social_url"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, ("social_" . $context["platform"]));
            // line 253
            yield "                             ";
            if ((($tmp = ($context["social_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 254
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["social_url"] ?? null), "html", null, true);
                yield "\" target=\"_blank\" 
                                   class=\"w-14 h-14 rounded-2xl bg-white shadow-xl shadow-gray-200/50 flex items-center justify-center text-subtle hover:text-primary hover:shadow-primary/20 hover:-translate-y-1.5 active:translate-y-0 transition-all text-2xl border border-gray-50\" 
                                   aria-label=\"";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["platform"]), "html", null, true);
                yield "\">
                                    <i class=\"lab la-";
                // line 257
                yield ((($context["platform"] == "facebook")) ? ("facebook-f") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["platform"], "html", null, true)));
                yield "\"></i>
                                </a>
                             ";
            }
            // line 260
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['platform'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        yield "                    </div>
                </div>
            </div>
        </div>
    ";
        yield from [];
    }

    // line 167
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 168
        yield "                                ";
        yield from $this->load("partials/navigation.html.twig", 168)->unwrap()->yield($context);
        // line 169
        yield "                            ";
        yield from [];
    }

    // line 268
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 271
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 272
        yield "            <section id=\"body-wrapper\" class=\"section-py container-px\">
                ";
        // line 273
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 278
        yield "                <div class=\"mx-auto max-w-7xl\">
                    ";
        // line 279
        yield from         $this->unwrap()->yieldBlock("content_surround", $context, $blocks);
        yield "
                </div>
            </section>
        ";
        yield from [];
    }

    // line 273
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 274
        yield "                    <div class=\"mx-auto max-w-7xl mb-8\">
                        ";
        // line 275
        try {
            $_v2 = $this->load("partials/messages.html.twig", 275);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v2 = null;
        }
        if ($_v2) {
            yield from $_v2->unwrap()->yield($context);
        }
        // line 276
        yield "                    </div>
                ";
        yield from [];
    }

    // line 285
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 286
        yield "        ";
        yield from $this->load("partials/footer.html.twig", 286)->unwrap()->yield($context);
        // line 287
        yield "    ";
        yield from [];
    }

    // line 291
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 292
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 292);
        yield "

    ";
        // line 295
        yield "    <script id=\"theme-config\" type=\"application/json\">
        ";
        // line 296
        yield json_encode(($context["theme_js_config"] ?? null));
        yield "
    </script>

    ";
        // line 299
        yield from $this->load("partials/snipcart.html.twig", 299)->unwrap()->yield($context);
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
        return array (  794 => 299,  788 => 296,  785 => 295,  779 => 292,  772 => 291,  767 => 287,  764 => 286,  757 => 285,  751 => 276,  741 => 275,  738 => 274,  731 => 273,  722 => 279,  719 => 278,  717 => 273,  714 => 272,  707 => 271,  697 => 268,  692 => 169,  689 => 168,  682 => 167,  673 => 261,  667 => 260,  661 => 257,  657 => 256,  651 => 254,  648 => 253,  645 => 252,  641 => 251,  636 => 248,  631 => 244,  629 => 243,  626 => 242,  616 => 233,  613 => 231,  610 => 229,  601 => 221,  599 => 220,  592 => 214,  583 => 208,  574 => 203,  571 => 202,  562 => 196,  553 => 191,  550 => 190,  542 => 183,  535 => 177,  531 => 174,  526 => 170,  524 => 167,  521 => 166,  517 => 163,  515 => 162,  512 => 161,  509 => 159,  504 => 155,  502 => 154,  499 => 153,  487 => 142,  484 => 140,  475 => 132,  471 => 129,  469 => 128,  466 => 127,  463 => 125,  460 => 124,  457 => 123,  454 => 122,  447 => 121,  436 => 117,  428 => 114,  423 => 113,  406 => 112,  390 => 102,  386 => 101,  382 => 100,  376 => 99,  364 => 92,  360 => 91,  354 => 90,  347 => 86,  339 => 83,  333 => 80,  325 => 77,  318 => 72,  315 => 71,  313 => 70,  310 => 69,  307 => 68,  304 => 67,  301 => 66,  298 => 65,  295 => 63,  292 => 61,  289 => 60,  286 => 59,  283 => 58,  280 => 57,  277 => 56,  274 => 55,  271 => 54,  268 => 53,  265 => 52,  262 => 51,  259 => 50,  256 => 49,  253 => 48,  250 => 47,  243 => 46,  237 => 43,  234 => 42,  227 => 41,  219 => 37,  217 => 30,  214 => 28,  212 => 27,  208 => 25,  203 => 24,  200 => 23,  198 => 22,  195 => 21,  192 => 20,  188 => 18,  186 => 17,  175 => 13,  172 => 12,  155 => 11,  147 => 301,  145 => 291,  142 => 290,  139 => 288,  137 => 285,  133 => 283,  131 => 271,  127 => 269,  125 => 268,  121 => 266,  119 => 121,  115 => 119,  111 => 117,  108 => 116,  106 => 112,  103 => 111,  101 => 46,  98 => 45,  96 => 41,  93 => 40,  91 => 11,  82 => 9,  79 => 8,  77 => 6,  75 => 5,  73 => 4,  71 => 3,  69 => 2,  67 => 1,  35 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/base.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/base.html.twig");
    }
    private $deferred;
}
