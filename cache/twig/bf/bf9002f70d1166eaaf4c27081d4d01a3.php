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

/* forms/fields/conditional/conditional.html.twig */
class __TwigTemplate_5f46e6d06c309c06729c5f9ae5b39fdd extends Template
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
        $context["value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->evaluateStringFunc($context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "condition", [], "any", false, false, false, 4));
        // line 5
        $context["value"] = (((($context["value"] ?? null) == "true")) ? (1) : (($context["value"] ?? null)));
        // line 6
        $context["value"] = (((($context["value"] ?? null) == "false")) ? (0) : (($context["value"] ?? null)));
        // line 7
        yield "
";
        // line 8
        if ((($tmp = ($context["value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "    <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 10), "html", null, true);
                yield "\">
    ";
            }
            // line 12
            yield "
    ";
            // line 13
            yield from $this->load("forms/default/fields.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 13), "fields" => CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 13)]));
            // line 14
            yield "
    ";
            // line 15
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "    </div>
    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/conditional/conditional.html.twig";
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
        return array (  88 => 16,  86 => 15,  83 => 14,  81 => 13,  78 => 12,  72 => 10,  69 => 9,  67 => 8,  64 => 7,  62 => 6,  60 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/conditional/conditional.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/fields/conditional/conditional.html.twig");
    }
}
