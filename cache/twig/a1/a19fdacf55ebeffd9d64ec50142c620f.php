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

        // line 4
        $_trait_0 = $this->load("blocks/base.html.twig", 4);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->source);
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
        $context["body_classes"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->bodyClassFunc($context, ["header-fixed", "header-animated", "header-dark", "header-transparent", "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "production-mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (".min.css") : (".css"));
        // line 5
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 6
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 6), "getActive", [], "any", false, false, false, 6)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 6), "getActive", [], "any", false, false, false, 6), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 6), "site", [], "any", false, false, false, 6), "default_lang", [], "any", false, false, false, 6), "html", null, true)));
        yield "\">
<head>
";
        // line 8
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 21
        yield "
";
        // line 22
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 30
        yield "
";
        // line 31
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 37
        yield "
";
        // line 38
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        // line 42
        yield "</head>
<body id=\"top\" class=\"";
        // line 43
        yield from $this->unwrap()->yieldBlock('body_classes', $context, $blocks);
        yield "\">
    <a href=\"#start\" class=\"skip-to-content\">Skip to main content</a>
    <div id=\"page-wrapper\">
    ";
        // line 46
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 77
        yield "
    ";
        // line 78
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 79
        yield "
        <section id=\"start\">
        ";
        // line 81
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 91
        yield "        </section>

    </div>

    ";
        // line 95
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 98
        yield "
    ";
        // line 99
        yield from $this->unwrap()->yieldBlock('mobile', $context, $blocks);
        // line 111
        yield "
";
        // line 112
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 115
        yield "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 8
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
        // line 9
        yield "    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 10), "html");
            yield " | ";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 10), "html");
        yield "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 14
        yield from $this->load("partials/metadata.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "    ";
        yield from $this->load("partials/custom-styles.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "    ";
        yield from $this->load("partials/structured-data.html.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/favicon.png"), "html", null, true);
        yield "\" />
    <link rel=\"canonical\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 19), "html", null, true);
        yield "\" />
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method", false, false, false, 23);
        // line 24
        yield "    ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "spectre.exp")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method", false, false, false, 24);
        }
        // line 25
        yield "    ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "spectre.icons")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method", false, false, false, 25);
        }
        // line 26
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method", false, false, false, 26);
        // line 27
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/custom.css"], "method", false, false, false, 27);
        // line 28
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/line-awesome.min.css"], "method", false, false, false, 28);
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["jquery", 101], "method", false, false, false, 32);
        // line 33
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/jquery.treemenu.js", ["group" => "bottom"]], "method", false, false, false, 33);
        // line 34
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/site.js", ["group" => "bottom"]], "method", false, false, false, 34);
        // line 35
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/email-deobfuscate.js", ["group" => "bottom"]], "method", false, false, false, 35);
        yield from [];
    }

    // line 38
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
        // line 39
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 39);
        yield "
    ";
        // line 40
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, false, 40);
        yield "
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["body_classes"] ?? null), "html", null, true);
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_size"] ?? null), "html", null, true);
        yield "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 51
        yield from $this->load("partials/logo.html.twig", 51)->unwrap()->yield($context);
        // line 52
        yield "                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        ";
        // line 56
        yield from $this->unwrap()->yieldBlock('header_navigation', $context, $blocks);
        // line 59
        yield "                        </nav>

                        ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 61), "login", [], "any", false, false, false, 61), "enabled", [], "any", false, false, false, 61) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 61), "username", [], "any", false, false, false, 61))) {
            // line 62
            yield "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            try {
                $_v0 = $this->load("partials/login-status.html.twig", 62);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield($context);
            }
            yield "</span>
                        ";
        }
        // line 64
        yield "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "                            ";
        yield from $this->load("partials/navigation.html.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "                        ";
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_size"] ?? null), "html", null, true);
        yield "\">
                    ";
        // line 84
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 87
        yield "                    ";
        yield from         $this->unwrap()->yieldBlock("content_surround", $context, $blocks);
        yield "
                </section>
            </section>
        ";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "                        ";
        try {
            $_v1 = $this->load("partials/messages.html.twig", 85);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v1 = null;
        }
        if ($_v1) {
            yield from $_v1->unwrap()->yield($context);
        }
        // line 86
        yield "                    ";
        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 96
        yield "        ";
        yield from $this->load("partials/footer.html.twig", 96)->unwrap()->yield($context);
        // line 97
        yield "    ";
        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mobile(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 100
        yield "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 103
        yield from $this->load("partials/logo.html.twig", 103)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 104
        yield "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 106
        yield from $this->load("partials/navigation.html.twig", 106)->unwrap()->yield(CoreExtension::merge($context, ["tree" => true]));
        // line 107
        yield "            </nav>
        </div>
    </div>
    ";
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 113
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 113);
        yield "
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
        return array (  484 => 113,  477 => 112,  469 => 107,  467 => 106,  463 => 104,  461 => 103,  456 => 100,  449 => 99,  444 => 97,  441 => 96,  434 => 95,  429 => 86,  418 => 85,  411 => 84,  401 => 87,  399 => 84,  395 => 83,  392 => 82,  385 => 81,  375 => 78,  370 => 58,  367 => 57,  360 => 56,  343 => 64,  329 => 62,  327 => 61,  323 => 59,  321 => 56,  315 => 52,  313 => 51,  307 => 48,  304 => 47,  297 => 46,  286 => 43,  278 => 40,  273 => 39,  256 => 38,  250 => 35,  247 => 34,  244 => 33,  241 => 32,  234 => 31,  228 => 28,  225 => 27,  222 => 26,  217 => 25,  212 => 24,  209 => 23,  202 => 22,  194 => 19,  190 => 18,  187 => 17,  184 => 16,  181 => 15,  179 => 14,  168 => 10,  165 => 9,  148 => 8,  139 => 115,  137 => 112,  134 => 111,  132 => 99,  129 => 98,  127 => 95,  121 => 91,  119 => 81,  115 => 79,  113 => 78,  110 => 77,  108 => 46,  102 => 43,  99 => 42,  97 => 38,  94 => 37,  92 => 31,  89 => 30,  87 => 22,  84 => 21,  82 => 8,  77 => 6,  74 => 5,  72 => 3,  70 => 2,  68 => 1,  35 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/base.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/base.html.twig");
    }
    private $deferred;
}
