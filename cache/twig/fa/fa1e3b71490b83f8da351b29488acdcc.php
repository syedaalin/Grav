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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "
";
        // line 6
        $context["ticker_enabled"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "ticker_enabled");
        // line 7
        $context["announcement_enabled"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_enabled");
        // line 8
        $context["show_top_bar"] = (((($context["ticker_enabled"] ?? null) == "1") || (($context["ticker_enabled"] ?? null) == true)) || ((($context["announcement_enabled"] ?? null) == "1") || (($context["announcement_enabled"] ?? null) == true)));
        // line 9
        yield "\t";
        if ((($tmp = ($context["show_top_bar"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "\t\t<div class=\"header-top-sticky\"> ";
            yield from $this->load("partials/top-banner.html.twig", 10)->unwrap()->yield($context);
            // line 11
            yield "\t</div>
";
        }
        // line 13
        yield "
";
        // line 15
        yield "<header id=\"header\" class=\"header-main-sticky\" role=\"banner\">
\t<div class=\"container container-px header-spacing\">
\t\t<nav
\t\t\tclass=\"header-nav\" aria-label=\"Main navigation\">

\t\t\t";
        // line 21
        yield "\t\t\t<div class=\"header-zone-a\">
\t\t\t\t";
        // line 23
        yield "\t\t\t\t<button id=\"mobile-toggle-left\" class=\"mobile-toggle mobile-only\" aria-label=\"Open Left Sidebar\" data-direction=\"left\" aria-controls=\"sidebar-left\" aria-expanded=\"false\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\" class=\"icon-lg\">
\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\"/>
\t\t\t\t\t</svg>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t";
        // line 31
        yield "\t\t\t<div class=\"header-zone-b\">
\t\t\t\t";
        // line 33
        yield "\t\t\t\t<div class=\"logo-hover\">
\t\t\t\t\t";
        // line 34
        yield from $this->load("partials/logo.html.twig", 34)->unwrap()->yield($context);
        // line 35
        yield "\t\t\t\t</div>

\t\t\t\t";
        // line 38
        yield "\t\t\t\t<div class=\"desktop-only desktop-nav\">
\t\t\t\t\t";
        // line 39
        yield from $this->load("partials/navigation.html.twig", 39)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => false]));
        // line 40
        yield "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 44
        yield "\t\t\t<div class=\"header-zone-c\">
\t\t\t\t";
        // line 46
        yield "\t\t\t\t<button id=\"mobile-toggle-right\" class=\"mobile-toggle ml-2 mobile-only\" aria-label=\"Open Right Sidebar\" data-direction=\"right\" aria-controls=\"sidebar-right\" aria-expanded=\"false\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\" class=\"icon-lg\">
\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\"/>
\t\t\t\t\t</svg>
\t\t\t\t</button>
\t\t\t</div>
\t\t</nav>
\t</div>
</header>
";
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
        return array (  108 => 46,  105 => 44,  100 => 40,  98 => 39,  95 => 38,  91 => 35,  89 => 34,  86 => 33,  83 => 31,  74 => 23,  71 => 21,  64 => 15,  61 => 13,  57 => 11,  54 => 10,  51 => 9,  49 => 8,  47 => 7,  45 => 6,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/header-wrapper.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/header-wrapper.html.twig");
    }
}
