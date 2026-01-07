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
class __TwigTemplate_6dee95767a110398242d682075a13e3a extends Template
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
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["body_classes"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join([(((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_header_fixed")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("header-fixed") : ("")), (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_header_animated")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("header-animated") : ("")), (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_header_dark")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("header-dark") : ("")), (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_header_transparent")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("header-transparent") : ("")), (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_footer_sticky")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("sticky-footer") : ("")), (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "physic_eco_mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("eco-mode") : ("")), (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "physic_focus_mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("focus-mode") : (""))], " "));
        // line 10
        $context["grid_size"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_gov_gridSize");
        // line 11
        $context["compress"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_gov_production")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (".min.css") : (".css"));
        // line 13
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 14
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 14), "getActive", [], "any", false, false, false, 14)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 14), "getActive", [], "any", false, false, false, 14), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 14), "site", [], "any", false, false, false, 14), "default_lang", [], "any", false, false, false, 14), "html", null, true)));
        yield "\">
<head>
";
        // line 16
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 31
        yield "
";
        // line 32
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 40
        yield "
";
        // line 41
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 46
        yield "
";
        // line 47
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        // line 51
        yield from $this->load("partials/custom-styles.html.twig", 51)->unwrap()->yield($context);
        // line 52
        yield "
";
        // line 56
        yield "<script>
// Anchor Positioning Polyfill (2026 Standard)
if (!CSS.supports('anchor-name', '--test')) {
    const script = document.createElement('script');
    script.src = 'https://unpkg.com/@oddbird/css-anchor-positioning';
    script.async = true;
    document.head.appendChild(script);
    console.log('Gravity: Loading Anchor Positioning polyfill');
}

// View Transitions API (2026 Progressive Enhancement)
if ('startViewTransition' in document) {
    document.addEventListener('click', (e) => {
        const link = e.target.closest('a');
        if (link && link.href && !link.target && link.origin === location.origin && !link.href.includes('#')) {
           e.preventDefault();
            document.startViewTransition(() => {
                window.location.href = link.href;
            });
        }
    });
    console.log('Gravity: View Transitions API Active');
}
</script>
</head>
<body id=\"top\" class=\"";
        // line 81
        yield from $this->unwrap()->yieldBlock('body_classes', $context, $blocks);
        yield "\" data-haptics=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_gov_haptics"), "false"), "html", null, true);
        yield "\">
    <a href=\"#start\" class=\"skip-to-content\">Skip to main content</a>
    <div id=\"page-wrapper\">
    ";
        // line 84
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 106
        yield "
    ";
        // line 107
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 110
        yield "
        <section id=\"start\">
        ";
        // line 112
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 122
        yield "        </section>

    </div>

    ";
        // line 126
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 129
        yield "
    ";
        // line 130
        yield from $this->unwrap()->yieldBlock('mobile', $context, $blocks);
        // line 142
        yield "
";
        // line 143
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 147
        yield "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 16
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
        // line 17
        yield "    <meta charset=\"utf-8\" />
    <title>";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 18), "html");
            yield " | ";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 18), "html");
        yield "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 22
        yield from $this->load("partials/metadata.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "    ";
        yield from $this->load("partials/structured-data.html.twig", 23)->unwrap()->yield($context);
        // line 24
        yield "
    ";
        // line 25
        $context["favicon"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_logo")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_logo"))) : (null));
        // line 26
        yield "    ";
        if ((($tmp = ($context["favicon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "    <link rel=\"icon\" type=\"image/png\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . CoreExtension::getAttribute($this->env, $this->source, ($context["favicon"] ?? null), "name", [], "any", false, false, false, 27))), "html", null, true);
            yield "\" />
    ";
        }
        // line 29
        yield "    <link rel=\"canonical\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 29), "html", null, true);
        yield "\" />
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method", false, false, false, 33);
        // line 34
        yield "    ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "spectre.exp")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method", false, false, false, 34);
        }
        // line 35
        yield "    ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "spectre.icons")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method", false, false, false, 35);
        }
        // line 36
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method", false, false, false, 36);
        // line 37
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/custom.css"], "method", false, false, false, 37);
        // line 38
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/line-awesome.min.css"], "method", false, false, false, 38);
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/email-deobfuscate.js", ["group" => "bottom"]], "method", false, false, false, 42);
        // line 43
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/builder-features.js", ["group" => "bottom"]], "method", false, false, false, 43);
        // line 44
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/theme-core.js", ["group" => "bottom"]], "method", false, false, false, 44);
        yield from [];
    }

    // line 47
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
        // line 48
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 48);
        yield "
    ";
        // line 49
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, false, 49);
        yield "
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["body_classes"] ?? null), "html", null, true);
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_size"] ?? null), "html", null, true);
        yield "\">
                <nav class=\"navbar\" role=\"navigation\" aria-label=\"Primary navigation\">
                    ";
        // line 88
        yield from $this->load("partials/header-builder.html.twig", 88)->unwrap()->yield($context);
        // line 89
        yield "                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <button 
                class=\"button_container\" 
                id=\"toggle\"
                aria-label=\"Toggle mobile navigation menu\"
                aria-expanded=\"false\"
                aria-controls=\"overlay\"
                type=\"button\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </button>
        </div>
    ";
        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 108
        yield "        ";
        yield from $this->load("partials/hero-builder.html.twig", 108)->unwrap()->yield($context);
        // line 109
        yield "    ";
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 113
        yield "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_size"] ?? null), "html", null, true);
        yield "\">
                    ";
        // line 115
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 118
        yield "                    ";
        yield from         $this->unwrap()->yieldBlock("content_surround", $context, $blocks);
        yield "
                </section>
            </section>
        ";
        yield from [];
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 116
        yield "                        ";
        try {
            $_v0 = $this->load("partials/messages.html.twig", 116);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 117
        yield "                    ";
        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 127
        yield "        ";
        yield from $this->load("partials/footer.html.twig", 127)->unwrap()->yield($context);
        // line 128
        yield "    ";
        yield from [];
    }

    // line 130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mobile(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 131
        yield "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 134
        yield from $this->load("partials/logo.html.twig", 134)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 135
        yield "            </div>
            <nav class=\"overlay-menu\" role=\"navigation\" aria-label=\"Mobile navigation\">
                ";
        // line 137
        yield from $this->load("partials/navigation.html.twig", 137)->unwrap()->yield(CoreExtension::merge($context, ["tree" => true]));
        // line 138
        yield "            </nav>
        </div>
    </div>
    ";
        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 144
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 144);
        yield "
    <script src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://js/navigation.js"), "html", null, true);
        yield "\" defer></script>
";
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
        return array (  486 => 145,  481 => 144,  474 => 143,  466 => 138,  464 => 137,  460 => 135,  458 => 134,  453 => 131,  446 => 130,  441 => 128,  438 => 127,  431 => 126,  426 => 117,  415 => 116,  408 => 115,  398 => 118,  396 => 115,  392 => 114,  389 => 113,  382 => 112,  377 => 109,  374 => 108,  367 => 107,  346 => 89,  344 => 88,  339 => 86,  336 => 85,  329 => 84,  318 => 81,  310 => 49,  305 => 48,  288 => 47,  282 => 44,  279 => 43,  276 => 42,  269 => 41,  263 => 38,  260 => 37,  257 => 36,  252 => 35,  247 => 34,  244 => 33,  237 => 32,  228 => 29,  222 => 27,  219 => 26,  217 => 25,  214 => 24,  211 => 23,  209 => 22,  198 => 18,  195 => 17,  178 => 16,  169 => 147,  167 => 143,  164 => 142,  162 => 130,  159 => 129,  157 => 126,  151 => 122,  149 => 112,  145 => 110,  143 => 107,  140 => 106,  138 => 84,  130 => 81,  103 => 56,  100 => 52,  98 => 51,  96 => 47,  93 => 46,  91 => 41,  88 => 40,  86 => 32,  83 => 31,  81 => 16,  76 => 14,  73 => 13,  71 => 11,  69 => 10,  67 => 1,  35 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/base.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/base.html.twig");
    }
    private $deferred;
}
