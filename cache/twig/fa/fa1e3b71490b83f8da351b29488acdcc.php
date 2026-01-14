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

/* partials/header-wrapper.html.twig */
class __TwigTemplate_d041c99c57d1d7060c379f7f55678c4f extends Template
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
            'header_navigation' => [$this, 'block_header_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "
";
        // line 6
        yield "<div class=\"header-top-sticky\">
    ";
        // line 7
        yield from $this->load("partials/top-banner.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "</div>

";
        // line 11
        yield "<header id=\"header\" class=\"header-main-sticky\" role=\"banner\">
    <div class=\"container container-px header-spacing\">
        <nav class=\"header-nav\" aria-label=\"Main navigation\">

            ";
        // line 16
        yield "            <div class=\"header-zone-a\">
                ";
        // line 18
        yield "                <button id=\"mobile-toggle\" class=\"mobile-toggle\" aria-label=\"Open navigation menu\" aria-controls=\"mobile-menu-wrapper\" aria-expanded=\"false\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\" class=\"icon-lg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\"/>
                    </svg>
                </button>

                ";
        // line 25
        yield "                <div class=\"desktop-only logo-hover\">
                    ";
        // line 26
        yield from $this->load("partials/logo.html.twig", 26)->unwrap()->yield($context);
        // line 27
        yield "                </div>
            </div>

            ";
        // line 31
        yield "            <div class=\"header-zone-b\">
                ";
        // line 33
        yield "                <div class=\"mobile-only logo-hover\">
                    ";
        // line 34
        yield from $this->load("partials/logo.html.twig", 34)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 35
        yield "                </div>

                ";
        // line 38
        yield "                <nav id=\"desktop-nav\" class=\"desktop-nav\">
                    ";
        // line 39
        yield from $this->unwrap()->yieldBlock('header_navigation', $context, $blocks);
        // line 42
        yield "                </nav>
            </div>

            ";
        // line 46
        yield "            <div class=\"header-zone-c\">
                ";
        // line 48
        yield "                <button id=\"search-trigger\" class=\"icon-button desktop-only\" aria-label=\"Open search\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\" class=\"icon-lg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\"/>
                    </svg>
                </button>

                ";
        // line 55
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 55), "login", [], "any", false, false, false, 55), "enabled", [], "any", false, false, false, 55) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 55), "username", [], "any", false, false, false, 55))) {
            // line 56
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://dashboard"), "html", null, true);
            yield "\" class=\"btn-dashboard desktop-only\" aria-label=\"Go to Dashboard\">
                        <span>Dashboard</span>
                    </a>
                ";
        } else {
            // line 60
            yield "                    ";
            $context["login_url"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "moodle_url")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "moodle_url") . "/login")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://login")));
            // line 61
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["login_url"] ?? null), "html", null, true);
            yield "\" class=\"btn-login desktop-only\" aria-label=\"Log in to your account\">
                        Login
                    </a>
                ";
        }
        // line 65
        yield "            </div>
        </nav>
    </div>
</header>
";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "                        ";
        yield from $this->load("partials/navigation.html.twig", 40)->unwrap()->yield($context);
        // line 41
        yield "                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header-wrapper.html.twig";
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
        return array (  156 => 41,  153 => 40,  146 => 39,  137 => 65,  129 => 61,  126 => 60,  118 => 56,  115 => 55,  107 => 48,  104 => 46,  99 => 42,  97 => 39,  94 => 38,  90 => 35,  88 => 34,  85 => 33,  82 => 31,  77 => 27,  75 => 26,  72 => 25,  64 => 18,  61 => 16,  55 => 11,  51 => 8,  49 => 7,  46 => 6,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/header-wrapper.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/header-wrapper.html.twig");
    }
}
