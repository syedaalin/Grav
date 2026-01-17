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

/* partials/sidebar-right.html.twig */
class __TwigTemplate_74ab643ceabb124a62c4f81cdf92736b extends Template
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
\t\tid=\"sidebar-right\" class=\"mobile-menu-overlay\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Global Navigation\" data-direction=\"right\">

\t\t";
        // line 7
        yield "\t\t<div id=\"backdrop-right\" class=\"mobile-menu-backdrop\"></div>

\t\t";
        // line 10
        yield "\t\t<div id=\"sidebar-right-panel\" class=\"mobile-sidebar\">
\t\t\t<div
\t\t\t\tclass=\"mobile-sidebar-inner\">
\t\t\t\t";
        // line 14
        yield "\t\t\t\t<div class=\"mobile-sidebar-content\">
\t\t\t\t\t<div class=\"mobile-header-actions flex justify-end pb-4\">
\t\t\t\t\t\t<button id=\"close-right\" class=\"mobile-close-btn mobile-toggle\" aria-label=\"Close Menu\" aria-controls=\"sidebar-right\">
\t\t\t\t\t\t\t<i class=\"las la-times icon-xl\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 22
        yield "\t\t\t\t\t<nav class=\"mobile-nav stack-s animate-fade-in-up delay-100\">
\t\t\t\t\t\t";
        // line 23
        yield from $this->load("partials/navigation.html.twig", 23)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 24
        yield "\t\t\t\t\t</nav>
\t\t\t\t</div>

\t\t\t\t";
        // line 28
        yield "\t\t\t\t<div class=\"mobile-sidebar-footer animate-fade-in-up delay-200\">
\t\t\t\t\t<h4 class=\"mobile-footer-title\">Follow Our Journey</h4>
\t\t\t\t\t<div class=\"social-icons-grid\">
\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, ["facebook", "twitter", "instagram", "youtube"], function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, ("social_" . ($context["p"] ?? null))); }));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 32
            yield "\t\t\t\t\t\t\t";
            $context["social_url"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, ("social_" . $context["platform"]));
            // line 33
            yield "\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["social_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" class=\"social-icon\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["platform"]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<i class=\"lab la-";
            // line 34
            yield ((($context["platform"] == "facebook")) ? ("facebook-f") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["platform"], "html", null, true)));
            yield "\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['platform'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "\t\t\t\t\t</div>
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
        return "partials/sidebar-right.html.twig";
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
        return array (  104 => 37,  95 => 34,  88 => 33,  85 => 32,  81 => 31,  76 => 28,  71 => 24,  69 => 23,  66 => 22,  57 => 14,  52 => 10,  48 => 7,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/sidebar-right.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/sidebar-right.html.twig");
    }
}
