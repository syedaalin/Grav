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

/* services_parent.html.twig */
class __TwigTemplate_bdaf30d2ab2c5084f3e370dc1749e481 extends Template
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

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 6
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("partials/base.html.twig", 6);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "\t<main id=\"body-wrapper\" class=\"section section-py\">
\t\t<div
\t\t\tclass=\"section-container\">
\t\t\t";
        // line 13
        yield "\t\t\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "\t\t\t\t<header class=\"services-parent-header animate-fade-in-up\">
\t\t\t\t\t<h1 class=\"services-parent-title\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
            yield "</h1>
\t\t\t\t\t<div class=\"prose-custom services-parent-intro\">
\t\t\t\t\t\t";
            // line 17
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 17);
            yield "
\t\t\t\t\t</div>
\t\t\t\t</header>
\t\t\t";
        } else {
            // line 21
            yield "\t\t\t\t<header class=\"services-parent-header animate-fade-in-up\">
\t\t\t\t\t<h1 class=\"services-parent-title\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 22), "html", null, true);
            yield "</h1>
\t\t\t\t</header>
\t\t\t";
        }
        // line 25
        yield "
\t\t\t";
        // line 27
        yield "\t\t\t";
        yield from $this->load("partials/child-list.html.twig", 27)->unwrap()->yield(CoreExtension::merge($context, ["collection" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 27), "visible", [], "any", false, false, false, 27)]));
        // line 28
        yield "
\t\t</div>
\t</main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "services_parent.html.twig";
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
        return array (  96 => 28,  93 => 27,  90 => 25,  84 => 22,  81 => 21,  74 => 17,  69 => 15,  66 => 14,  63 => 13,  58 => 9,  51 => 8,  40 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "services_parent.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/services_parent.html.twig");
    }
}
