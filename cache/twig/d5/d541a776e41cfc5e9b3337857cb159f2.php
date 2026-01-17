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

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
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
        $context["top_banner_color"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_bg_color");
        // line 8
        yield "


<!DOCTYPE html>
<html lang=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["language"] ?? null), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["direction"] ?? null), "html", null, true);
        yield "\" style=\"";
        if ((($tmp = ($context["top_banner_color"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "--top-banner-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["top_banner_color"] ?? null), "html", null, true);
            yield ";";
        }
        yield " ";
        yield ($context["dynamic_styles"] ?? null);
        yield "; --font-heading: ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["theme_fonts"] ?? null), "heading", [], "any", false, false, false, 12);
        yield "; --font-body: ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["theme_fonts"] ?? null), "body", [], "any", false, false, false, 12);
        yield ";\">
\t<head>
\t\t";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme_fonts"] ?? null), "custom_css", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "\t\t\t<style>
\t\t\t\t";
            // line 16
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["theme_fonts"] ?? null), "custom_css", [], "any", false, false, false, 16);
            yield "</style>
\t\t";
        }
        // line 18
        yield "\t\t";
        // line 19
        yield "\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addInlineCss", [$this->extensions['Grav\Common\Twig\Extension\GravExtension']->readFileFunc("theme://css/layers/tokens.css"), ["priority" => 100]], "method", false, false, false, 19);
        // line 20
        yield "\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addInlineCss", [$this->extensions['Grav\Common\Twig\Extension\GravExtension']->readFileFunc("theme://css/layers/reset.css"), ["priority" => 99]], "method", false, false, false, 20);
        // line 21
        yield "\t\t";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 21);
        yield "

\t\t";
        // line 24
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 27
        yield "
\t\t";
        // line 28
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 36
        yield "
\t\t";
        // line 37
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 60
        yield "
\t\t\t";
        // line 61
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        // line 65
        yield "\t</head>
\t\t<body id=\"top\" class=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["body_classes"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["dynamic_body_classes"] ?? null), " "), "html", null, true);
        yield "\"> <div
\t\t\tid=\"page-wrapper\">
\t\t\t";
        // line 69
        yield "\t\t\t<a href=\"#start\" class=\"skip-link\">Skip to main content</a>


\t\t\t";
        // line 76
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 83
        yield "

\t\t\t";
        // line 85
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 86
        yield "
\t\t\t<section id=\"start\">
\t\t\t\t";
        // line 88
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 100
        yield "\t\t\t</section>

\t\t\t";
        // line 102
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 105
        yield "
\t\t\t";
        // line 106
        yield from $this->load("partials/search-overlay.html.twig", 106)->unwrap()->yield($context);
        // line 107
        yield "\t\t</div>

\t\t";
        // line 109
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 118
        yield "\t</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 24
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
        // line 25
        yield "\t\t\t";
        yield from $this->load("partials/head.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "\t\t";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "\t\t\t";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "production-mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "\t\t\t\t";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/nur-ul-huda.css"], "method", false, false, false, 30);
            // line 31
            yield "\t\t\t";
        } else {
            // line 32
            yield "\t\t\t\t";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/modern-vanilla.css"], "method", false, false, false, 32);
            // line 33
            yield "\t\t\t";
        }
        // line 34
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/line-awesome.min.css"], "method", false, false, false, 34);
        // line 35
        yield "\t\t";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "\t\t\t";
        // line 39
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/khums-calculator.js", ["priority" => 100, "group" => "bottom", "type" => "module"]], "method", false, false, false, 39);
        // line 40
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/ui.js", ["priority" => 95, "group" => "bottom", "type" => "module"]], "method", false, false, false, 40);
        // line 41
        yield "

\t\t\t";
        // line 44
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/performance-monitor.js", ["priority" => 94, "group" => "bottom", "type" => "module"]], "method", false, false, false, 44);
        // line 45
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/pull-refresh.js", ["priority" => 94, "group" => "bottom", "type" => "module"]], "method", false, false, false, 45);
        // line 46
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/gallery.js", ["priority" => 93, "group" => "bottom", "type" => "module"]], "method", false, false, false, 46);
        // line 47
        yield "
\t\t\t";
        // line 49
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/high-contrast.js", ["priority" => 89, "group" => "bottom", "type" => "module"]], "method", false, false, false, 49);
        // line 50
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/font-scaler.js", ["priority" => 89, "group" => "bottom", "type" => "module"]], "method", false, false, false, 50);
        // line 51
        yield "
\t\t\t";
        // line 53
        yield "\t\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/bottom-banner.js", ["priority" => 89, "group" => "bottom", "type" => "module"]], "method", false, false, false, 53);
        // line 54
        yield "
\t\t\t";
        // line 56
        yield "
\t\t\t";
        // line 58
        yield "\t\t";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/service-worker.js", ["priority" => 87, "group" => "bottom", "type" => "module"]], "method", false, false, false, 58);
        // line 59
        yield "\t\t";
        yield from [];
    }

    // line 61
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
        // line 62
        yield "\t\t\t";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 62);
        yield "
\t\t";
        // line 63
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, false, 63);
        yield "
\t";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "\t\t\t\t";
        yield from $this->load("partials/header-wrapper.html.twig", 77)->unwrap()->yield($context);
        // line 78
        yield "\t\t\t\t";
        // line 79
        yield "\t\t\t\t";
        yield from $this->load("partials/sidebar-left.html.twig", 79)->unwrap()->yield($context);
        // line 80
        yield "\t\t\t\t";
        // line 81
        yield "\t\t\t\t";
        yield from $this->load("partials/sidebar-right.html.twig", 81)->unwrap()->yield($context);
        // line 82
        yield "\t\t\t";
        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "\t\t\t\t\t<main id=\"body-wrapper\" class=\"section-py container-px\">
\t\t\t\t\t\t";
        // line 90
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 95
        yield "\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t";
        // line 96
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 97
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</main>
\t\t\t\t";
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 91
        yield "\t\t\t\t\t\t\t<div class=\"container message-spacer\">
\t\t\t\t\t\t\t\t";
        // line 92
        try {
            $_v0 = $this->load("partials/messages.html.twig", 92);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 93
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 103
        yield "\t\t\t\t";
        yield from $this->load("partials/bottom-banner/main.html.twig", 103)->unwrap()->yield($context);
        // line 104
        yield "\t\t\t";
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 110
        yield "\t\t\t";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 110);
        yield "
\t\t\t";
        // line 111
        yield from $this->load("partials/snipcart.html.twig", 111)->unwrap()->yield($context);
        // line 112
        yield "
\t\t\t";
        // line 114
        yield "\t\t\t<script>
\t\t\t\twindow.GravConfig = ";
        // line 115
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
        return array (  463 => 115,  460 => 114,  457 => 112,  455 => 111,  450 => 110,  443 => 109,  438 => 104,  435 => 103,  428 => 102,  418 => 96,  412 => 93,  402 => 92,  399 => 91,  392 => 90,  385 => 97,  383 => 96,  380 => 95,  378 => 90,  375 => 89,  368 => 88,  358 => 85,  353 => 82,  350 => 81,  348 => 80,  345 => 79,  343 => 78,  340 => 77,  333 => 76,  325 => 63,  320 => 62,  303 => 61,  298 => 59,  295 => 58,  292 => 56,  289 => 54,  286 => 53,  283 => 51,  280 => 50,  277 => 49,  274 => 47,  271 => 46,  268 => 45,  265 => 44,  261 => 41,  258 => 40,  255 => 39,  253 => 38,  246 => 37,  241 => 35,  238 => 34,  235 => 33,  232 => 32,  229 => 31,  226 => 30,  223 => 29,  216 => 28,  210 => 26,  207 => 25,  190 => 24,  182 => 118,  180 => 109,  176 => 107,  174 => 106,  171 => 105,  169 => 102,  165 => 100,  163 => 88,  159 => 86,  157 => 85,  153 => 83,  150 => 76,  145 => 69,  138 => 66,  135 => 65,  133 => 61,  130 => 60,  128 => 37,  125 => 36,  123 => 28,  120 => 27,  117 => 24,  111 => 21,  108 => 20,  105 => 19,  103 => 18,  98 => 16,  95 => 15,  93 => 14,  74 => 12,  68 => 8,  66 => 7,  64 => 6,  62 => 5,  60 => 4,  58 => 3,  56 => 2,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/base.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/base.html.twig");
    }
    private $deferred;
}
