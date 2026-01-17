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

/* partials/sidebar-left.html.twig */
class __TwigTemplate_83b1469f4a18aed3233e5cd7e1787778 extends Template
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
        // line 2
        yield "<div class=\"mobile-menu\">
\t<div
\t\tid=\"sidebar-left\" class=\"mobile-menu-overlay\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Services Navigation\" data-direction=\"left\">

\t\t";
        // line 7
        yield "\t\t<div id=\"backdrop-left\" class=\"mobile-menu-backdrop\"></div>

\t\t";
        // line 10
        yield "\t\t<div id=\"sidebar-left-panel\" class=\"mobile-sidebar\">
\t\t\t<div
\t\t\t\tclass=\"mobile-sidebar-inner\">
\t\t\t\t";
        // line 14
        yield "\t\t\t\t<div class=\"mobile-sidebar-content\">
\t\t\t\t\t<div class=\"mobile-header-actions flex justify-end pb-4\">
\t\t\t\t\t\t<button id=\"close-left\" class=\"mobile-close-btn mobile-toggle\" aria-label=\"Close Menu\" aria-controls=\"sidebar-left\">
\t\t\t\t\t\t\t<i class=\"las la-times icon-xl\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 22
        yield "\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"mobile-nav stack-s animate-fade-in-up delay-100\">
\t\t\t\t\t\t";
        // line 25
        yield "\t\t\t\t\t\t";
        $macros["͜macros"] = $this->macros["͜macros"] = $this->load("macros/macros.html.twig", 25)->unwrap();
        // line 26
        yield "
\t\t\t\t\t\t";
        // line 28
        yield "\t\t\t\t\t\t";
        $context["services_page"] = CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "find", ["/services"], "method", false, false, false, 28);
        // line 29
        yield "
\t\t\t\t\t\t<ul class=\"nav-list\">
\t\t\t\t\t\t\t";
        // line 31
        if ((($tmp = ($context["services_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "\t\t\t\t\t\t\t\t";
            // line 33
            yield "\t\t\t\t\t\t\t\t";
            yield $macros["͜macros"]->getTemplateForMacro("macro_nav_loop", $context, 33, $this->getSourceContext())->macro_nav_loop(...[($context["services_page"] ?? null), true]);
            yield "
\t\t\t\t\t\t\t";
        } else {
            // line 35
            yield "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link\">Services not found</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 39
        yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>

\t\t\t\t";
        // line 44
        yield "\t\t\t\t<div class=\"mobile-sidebar-footer animate-fade-in-up delay-200\">
\t\t\t\t\t<h4 class=\"mobile-footer-title\">Our Services</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/sidebar-left.html.twig";
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
        return array (  105 => 44,  99 => 39,  93 => 35,  87 => 33,  85 => 32,  83 => 31,  79 => 29,  76 => 28,  73 => 26,  70 => 25,  66 => 22,  57 => 14,  52 => 10,  48 => 7,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/sidebar-left.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/sidebar-left.html.twig");
    }
}
