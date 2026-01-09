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

/* modular/default.html.twig */
class __TwigTemplate_0d8d60773e5c2a9719167b7643143702 extends Template
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
        yield "<h3 style=\"color:red\">ERROR: <code>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "method", false, false, false, 2) . ".") . CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "templateFormat", [], "method", false, false, false, 2)) . ".twig"), "html", null, true);
        yield "</code> template not found for page: <code>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "method", false, false, false, 2), "html", null, true);
        yield "</code></h3>
<h1>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "method", false, false, false, 3), "html", null, true);
        yield "</h1>
";
        // line 4
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "method", false, false, false, 4);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/default.html.twig";
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
        return array (  53 => 4,  49 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modular/default.html.twig", "/Users/syedaalin/Documents/Grav/system/templates/modular/default.html.twig");
    }
}
