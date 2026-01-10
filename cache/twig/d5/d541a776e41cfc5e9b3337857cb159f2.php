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
        $context["typography"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "typography"), "inter_noto");
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
        yield "\">
<head>
";
        // line 11
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 49
        yield "
";
        // line 50
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 54
        yield "
";
        // line 55
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 72
        yield "
";
        // line 73
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        // line 77
        yield "</head>
<body id=\"top\" class=\"";
        // line 78
        yield from $this->unwrap()->yieldBlock('body_classes', $context, $blocks);
        yield "\">
    ";
        // line 80
        yield "    <a href=\"#start\" class=\"sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-100 focus:bg-primary focus:text-white focus:px-4 focus:py-2 focus:rounded-lg\">Skip to main content</a>
    
";
        // line 82
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 233
        yield "
    ";
        // line 234
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 235
        yield "
        <section id=\"start\">
        ";
        // line 237
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 249
        yield "        </section>

    </div>

    ";
        // line 253
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 256
        yield "
    ";
        // line 258
        yield "
";
        // line 259
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 335
        yield "
</body>
</html>
";
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
    <link rel=\"manifest\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://manifest.json"), "html", null, true);
        yield "\">

    <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://sw.js"), "html", null, true);
        yield "');
        });
      }
    </script>

    ";
        // line 36
        $context["primary_color"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "primary_spirit_color"), "#2ecc71");
        // line 37
        yield "    ";
        $context["accent_color"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "accent_color"), "#f1c40f");
        // line 38
        yield "    ";
        $context["blur_strength"] = (Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "blur_strength"), 12) . "px");
        // line 39
        yield "
    <style>
        :root {
            --color-primary: ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["primary_color"] ?? null), "html", null, true);
        yield ";
            --color-accent: ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accent_color"] ?? null), "html", null, true);
        yield ";
            --color-secondary: ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accent_color"] ?? null), "html", null, true);
        yield ";
            --blur-strength: ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["blur_strength"] ?? null), "html", null, true);
        yield ";
        }
    </style>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/custom.css"], "method", false, false, false, 51);
        // line 52
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/line-awesome.min.css"], "method", false, false, false, 52);
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["jquery", 101], "method", false, false, false, 56);
        // line 57
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/number-format.js", 95], "method", false, false, false, 57);
        // line 58
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/pull-to-refresh.js", 94], "method", false, false, false, 58);
        // line 59
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/gallery-swipe.js", 93], "method", false, false, false, 59);
        // line 60
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/site.js", 90], "method", false, false, false, 60);
        // line 61
        yield "    
    ";
        // line 63
        yield "    <script>
        window.themeConfig = {
            numberFormat: '";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "number_format"), "western"), "html", null, true);
        yield "',
            dateCalendar: '";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "date_calendar"), "gregorian"), "html", null, true);
        yield "',
            direction: '";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["direction"] ?? null), "html", null, true);
        yield "',
            language: '";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["language"] ?? null), "html", null, true);
        yield "'
        };
    </script>
";
        yield from [];
    }

    // line 73
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
        // line 74
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 74);
        yield "
    ";
        // line 75
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, false, 75);
        yield "
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["body_classes"] ?? null), "html", null, true);
        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        yield "        ";
        yield from $this->load("partials/minaret.html.twig", 83)->unwrap()->yield($context);
        // line 84
        yield "        <section id=\"header\" class=\"section py-4 lg:py-6 sticky top-0 bg-white/80 backdrop-blur-md z-50 border-b border-gray-100 transition-transform duration-300\">
            <section class=\"container mx-auto px-4\">
                <nav class=\"navbar flex justify-between items-center h-12 lg:h-14\">
                    
                    ";
        // line 89
        yield "                    <div class=\"navbar-left flex items-center gap-4 lg:gap-8 flex-1 lg:flex-none\">
                        ";
        // line 91
        yield "                        ";
        // line 92
        yield "                        <button id=\"mobile-toggle\" 
                                class=\"lg:hidden p-2 -ml-2 text-black hover:text-primary transition-colors focus:outline-none focus:ring-2 focus:ring-primary rounded-lg relative z-50\"
                                aria-label=\"Toggle navigation\"
                                aria-controls=\"mobile-overlay\"
                                aria-expanded=\"false\"
                                onclick=\"document.getElementById('mobile-overlay').classList.remove('-translate-x-full'); document.body.style.overflow = 'hidden';\"
                                style=\"min-width: 44px; min-height: 44px; display: flex; align-items: center; justify-content: center;\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\" />
                            </svg>
                        </button>

                        ";
        // line 105
        yield "                        <div class=\"hidden lg:block logo-wrapper\">
                            ";
        // line 106
        yield from $this->load("partials/logo.html.twig", 106)->unwrap()->yield($context);
        // line 107
        yield "                        </div>
                    </div>

                    ";
        // line 111
        yield "                    <div class=\"navbar-center flex items-center justify-center lg:justify-start lg:flex-1\">
                        ";
        // line 113
        yield "                        <div class=\"lg:hidden logo-mobile\">
                            ";
        // line 114
        yield from $this->load("partials/logo.html.twig", 114)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 115
        yield "                        </div>

                        ";
        // line 118
        yield "                        <nav class=\"hidden lg:flex items-center space-x-6 font-bold text-sm uppercase tracking-wide\">
                            ";
        // line 119
        yield from $this->unwrap()->yieldBlock('header_navigation', $context, $blocks);
        // line 122
        yield "                        </nav>
                    </div>

                    ";
        // line 126
        yield "                    <div class=\"navbar-right flex items-center justify-end gap-3 lg:gap-4 flex-1 lg:flex-none\">
                        
                        ";
        // line 129
        yield "                        <button class=\"p-2 text-gray-700 hover:text-primary transition-colors rounded-lg\" 
                                aria-label=\"Search\"
                                style=\"min-width: 44px; min-height: 44px; display: flex; align-items: center; justify-content: center;\">
                            <i class=\"la la-search text-xl\" aria-hidden=\"true\"></i>
                        </button>

                        ";
        // line 136
        yield "                        <button class=\"snipcart-checkout relative p-2 text-gray-700 hover:text-primary transition-colors rounded-lg\" 
                                aria-label=\"Shopping cart\"
                                style=\"min-width: 44px; min-height: 44px; display: flex; align-items: center; justify-content: center;\">
                            <i class=\"la la-shopping-bag text-xl md:text-2xl\" aria-hidden=\"true\"></i>
                            <span class=\"snipcart-items-count absolute top-1 right-0 bg-accent text-gray-900 text-[10px] font-black w-4 h-4 md:w-5 md:h-5 flex items-center justify-center rounded-full border-2 border-white shadow-sm\" aria-live=\"polite\">0</span>
                        </button>

                        ";
        // line 144
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 144), "login", [], "any", false, false, false, 144), "enabled", [], "any", false, false, false, 144) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 144), "username", [], "any", false, false, false, 144))) {
            // line 145
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://dashboard"), "html", null, true);
            yield "\" 
                               class=\"hidden lg:inline-flex items-center gap-2 glass bg-primary text-white px-5 py-2 rounded-xl font-bold text-xs hover:shadow-lg hover:shadow-primary/20 transition-all\"
                               aria-label=\"Dashboard\">
                                <span>Dashboard</span>
                            </a>
                            <a href=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://dashboard"), "html", null, true);
            yield "\" 
                               class=\"lg:hidden p-2 text-gray-700 hover:text-primary transition-colors rounded-lg\"
                               aria-label=\"Dashboard\"
                               style=\"min-width: 44px; min-height: 44px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"la la-user-circle text-2xl\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        } else {
            // line 157
            yield "                            ";
            $context["login_url"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "moodle_url")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "moodle_url") . "/login")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://login")));
            // line 158
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["login_url"] ?? null), "html", null, true);
            yield "\" 
                               class=\"hidden lg:inline-block text-gray-900 font-black text-xs uppercase hover:text-primary transition-colors ml-2\"
                               aria-label=\"Login\">
                                Login
                            </a>
                            <a href=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["login_url"] ?? null), "html", null, true);
            yield "\" 
                               class=\"lg:hidden p-2 text-gray-700 hover:text-primary transition-colors rounded-lg\"
                               aria-label=\"Login\"
                               style=\"min-width: 44px; min-height: 44px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"la la-sign-in-alt text-2xl\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        }
        // line 170
        yield "                    </div>
                </nav>
            </section>
        </section>

        ";
        // line 176
        yield "        <div id=\"mobile-overlay\" 
             class=\"fixed inset-0 z-60 bg-gray-900 text-white transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden\"
             aria-hidden=\"true\">
            
            <div class=\"flex flex-col h-full\">
                ";
        // line 182
        yield "                <div class=\"flex items-center justify-between p-4 border-b border-gray-800\">
                    <div class=\"w-32 brightness-0 invert filter\">
                         ";
        // line 184
        yield from $this->load("partials/logo.html.twig", 184)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 185
        yield "                    </div>
                    <button id=\"mobile-close\" 
                            class=\"p-2 text-gray-400 hover:text-white transition-colors rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500\"
                            aria-label=\"Close menu\"
                            style=\"min-width: 44px; min-height: 44px; display: flex; align-items: center; justify-content: center;\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
                        </svg>
                    </button>
                </div>

                ";
        // line 197
        yield "                <div class=\"flex-1 overflow-y-auto p-6\">
                    ";
        // line 199
        yield "                    <div class=\"mb-8\">
                        <div class=\"relative\">
                            <input type=\"text\" placeholder=\"Search...\" class=\"w-full pl-10 pr-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all placeholder-gray-500\">
                            <i class=\"la la-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-lg\"></i>
                        </div>
                    </div>

                    ";
        // line 207
        yield "                    <nav class=\"mobile-nav space-y-2 font-bold text-lg\">
                        ";
        // line 208
        yield from $this->load("partials/navigation.html.twig", 208)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 209
        yield "                    </nav>
                </div>

                ";
        // line 213
        yield "                <div class=\"p-6 bg-gray-900 border-t border-gray-800\">
                    <h4 class=\"text-xs font-bold text-gray-500 uppercase tracking-wider mb-4\">Connect With Us</h4>
                    <div class=\"flex gap-4\">
                        ";
        // line 216
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_facebook")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 217
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_facebook"), "html", null, true);
            yield "\" target=\"_blank\" class=\"w-10 h-10 rounded-full bg-gray-800 border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-primary transition-colors text-xl shadow-sm\"><i class=\"lab la-facebook-f\"></i></a>
                        ";
        }
        // line 219
        yield "                        ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_twitter")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_twitter"), "html", null, true);
            yield "\" target=\"_blank\" class=\"w-10 h-10 rounded-full bg-gray-800 border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-primary transition-colors text-xl shadow-sm\"><i class=\"lab la-twitter\"></i></a>
                        ";
        }
        // line 222
        yield "                        ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_instagram")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 223
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_instagram"), "html", null, true);
            yield "\" target=\"_blank\" class=\"w-10 h-10 rounded-full bg-gray-800 border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-primary transition-colors text-xl shadow-sm\"><i class=\"lab la-instagram\"></i></a>
                        ";
        }
        // line 225
        yield "                         ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_youtube")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 226
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_youtube"), "html", null, true);
            yield "\" target=\"_blank\" class=\"w-10 h-10 rounded-full bg-gray-800 border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-primary transition-colors text-xl shadow-sm\"><i class=\"lab la-youtube\"></i></a>
                        ";
        }
        // line 228
        yield "                    </div>
                </div>
            </div>
        </div>
    ";
        yield from [];
    }

    // line 119
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 120
        yield "                                ";
        yield from $this->load("partials/navigation.html.twig", 120)->unwrap()->yield($context);
        // line 121
        yield "                            ";
        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 237
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 238
        yield "            <section id=\"body-wrapper\" class=\"section py-8\">
                ";
        // line 239
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 244
        yield "                <div class=\"container mx-auto px-4\">
                    ";
        // line 245
        yield from         $this->unwrap()->yieldBlock("content_surround", $context, $blocks);
        yield "
                </div>
            </section>
        ";
        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 240
        yield "                    <div class=\"container mx-auto px-4\">
                        ";
        // line 241
        try {
            $_v2 = $this->load("partials/messages.html.twig", 241);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v2 = null;
        }
        if ($_v2) {
            yield from $_v2->unwrap()->yield($context);
        }
        // line 242
        yield "                    </div>
                ";
        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 254
        yield "        ";
        yield from $this->load("partials/footer.html.twig", 254)->unwrap()->yield($context);
        // line 255
        yield "    ";
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
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 260);
        yield "

    <script>
        window.themeConfig = {
            direction: '";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["direction"] ?? null), "html", null, true);
        yield "',
            prayerMethod: '";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "prayer_method"), "tehran"), "html", null, true);
        yield "',
            hijriOffset: ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "hijri_offset"), 0), "html", null, true);
        yield ",
            location: '";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "default_location"), "Karachi"), "html", null, true);
        yield "',
            snipcartKey: '";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "snipcart_key"), "html", null, true);
        yield "',
            moodleUrl: '";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "moodle_url"), "html", null, true);
        yield "',
            adhanMedia: '";
        // line 270
        yield (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "adhan_media")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://media/" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "adhan_media")), "name", [], "any", false, false, false, 270))), "html", null, true)) : (""));
        yield "'
        };

        // CRITICAL: Inline Mobile Menu Logic (No Dependencies)
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.getElementById('mobile-toggle');
            const mobileClose = document.getElementById('mobile-close');
            const mobileOverlay = document.getElementById('mobile-overlay');
            const bodyEl = document.body;

            console.log('Mobile Menu Script Loaded');

            function toggleMenu() {
                if (!mobileOverlay) return;
                
                // Toggle state
                if (mobileOverlay.classList.contains('-translate-x-full')) {
                    // Open
                    console.log('Opening Menu');
                    mobileOverlay.classList.remove('-translate-x-full');
                    bodyEl.classList.add('overflow-hidden');
                    if(mobileToggle) mobileToggle.setAttribute('aria-expanded', 'true');
                } else {
                    // Close
                    console.log('Closing Menu');
                    mobileOverlay.classList.add('-translate-x-full');
                    bodyEl.classList.remove('overflow-hidden');
                    if(mobileToggle) mobileToggle.setAttribute('aria-expanded', 'false');
                }
            }

            if (mobileToggle) {
                mobileToggle.addEventListener('click', function(e) {
                    e.stopPropagation(); // Stop bubbling
                    toggleMenu();
                });
            } else {
                console.error('Mobile Toggle Button NOT found');
            }

            if (mobileClose) {
                mobileClose.addEventListener('click', function(e) {
                    e.stopPropagation();
                    toggleMenu();
                });
            }

            // Close on click outside
            document.addEventListener('click', function(e) {
                if (mobileOverlay && !mobileOverlay.classList.contains('-translate-x-full') && 
                    !mobileOverlay.contains(e.target) && 
                    (!mobileToggle || !mobileToggle.contains(e.target))) {
                    console.log('Closing Menu (Outside Click)');
                    toggleMenu();
                }
            });
        });
    </script>

    ";
        // line 330
        yield "    ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "snipcart_key")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 331
            yield "        <script async src=\"https://cdn.snipcart.com/themes/v3.0.31/default/snipcart.js\"></script>
        <div hidden id=\"snipcart\" data-api-key=\"";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "snipcart_key"), "html", null, true);
            yield "\" data-config-modal-style=\"side\"></div>
    ";
        }
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
        return array (  803 => 332,  800 => 331,  797 => 330,  735 => 270,  731 => 269,  727 => 268,  723 => 267,  719 => 266,  715 => 265,  711 => 264,  703 => 260,  696 => 259,  691 => 255,  688 => 254,  681 => 253,  675 => 242,  665 => 241,  662 => 240,  655 => 239,  646 => 245,  643 => 244,  641 => 239,  638 => 238,  631 => 237,  621 => 234,  616 => 121,  613 => 120,  606 => 119,  597 => 228,  591 => 226,  588 => 225,  582 => 223,  579 => 222,  573 => 220,  570 => 219,  564 => 217,  562 => 216,  557 => 213,  552 => 209,  550 => 208,  547 => 207,  538 => 199,  535 => 197,  522 => 185,  520 => 184,  516 => 182,  509 => 176,  502 => 170,  492 => 163,  483 => 158,  480 => 157,  470 => 150,  461 => 145,  458 => 144,  449 => 136,  441 => 129,  437 => 126,  432 => 122,  430 => 119,  427 => 118,  423 => 115,  421 => 114,  418 => 113,  415 => 111,  410 => 107,  408 => 106,  405 => 105,  391 => 92,  389 => 91,  386 => 89,  380 => 84,  377 => 83,  370 => 82,  359 => 78,  351 => 75,  346 => 74,  329 => 73,  320 => 68,  316 => 67,  312 => 66,  308 => 65,  304 => 63,  301 => 61,  298 => 60,  295 => 59,  292 => 58,  289 => 57,  286 => 56,  279 => 55,  273 => 52,  270 => 51,  263 => 50,  253 => 45,  249 => 44,  245 => 43,  241 => 42,  236 => 39,  233 => 38,  230 => 37,  228 => 36,  220 => 31,  212 => 26,  208 => 25,  203 => 24,  200 => 23,  198 => 22,  195 => 21,  192 => 20,  188 => 18,  186 => 17,  175 => 13,  172 => 12,  155 => 11,  146 => 335,  144 => 259,  141 => 258,  138 => 256,  136 => 253,  130 => 249,  128 => 237,  124 => 235,  122 => 234,  119 => 233,  117 => 82,  113 => 80,  109 => 78,  106 => 77,  104 => 73,  101 => 72,  99 => 55,  96 => 54,  94 => 50,  91 => 49,  89 => 11,  82 => 9,  79 => 8,  77 => 6,  75 => 5,  73 => 4,  71 => 3,  69 => 2,  67 => 1,  35 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/base.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/base.html.twig");
    }
    private $deferred;
}
