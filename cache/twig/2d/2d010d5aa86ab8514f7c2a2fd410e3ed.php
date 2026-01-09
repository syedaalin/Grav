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

/* forms/fields/blueprint/blueprint.html.twig */
class __TwigTemplate_936d294bc1849001cdf8c59f784920db extends Template
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
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<input
    data-grav-field=\"hidden\"
    data-grav-disabled=\"false\"
    type=\"hidden\"
    class=\"input\"
    ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 9) || ($context["isDisabledToggleable"] ?? null))) {
            yield "disabled=\"disabled\"";
        }
        // line 10
        yield "    name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 10))), "html", null, true);
        yield "\"
    value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        yield "\" />
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/blueprint/blueprint.html.twig";
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
        return array (  74 => 11,  69 => 10,  65 => 9,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/blueprint/blueprint.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/blueprint/blueprint.html.twig");
    }
}
