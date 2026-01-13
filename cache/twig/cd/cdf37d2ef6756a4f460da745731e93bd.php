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

/* forms/fields/selectize/selectize.html.twig */
class __TwigTemplate_194c411308d44b488b6d3980bceba283 extends Template
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
            'global_attributes' => [$this, 'block_global_attributes'],
            'input_attributes' => [$this, 'block_input_attributes'],
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
    public function block_global_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", true, true, false, 4)) {
            // line 5
            yield "        ";
            $context["fieldSelectize"] = Twig\Extension\CoreExtension::merge(["create" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, true, false, 5), "create", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 5), "create", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 5), "create", [], "any", false, false, false, 5)) : (true))], (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 5)) : ([])));
            // line 6
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "merge_items", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "            ";
                $context["fieldSelectize"] = Twig\Extension\CoreExtension::merge(($context["fieldSelectize"] ?? null), ["items" => ($context["value"] ?? null)]);
                // line 8
                yield "        ";
            }
            // line 9
            yield "    ";
        } else {
            // line 10
            yield "        ";
            $context["fieldSelectize"] = ["create" => true];
            // line 11
            yield "    ";
        }
        // line 12
        yield "    data-grav-selectize=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["fieldSelectize"] ?? null)), "html_attr");
        yield "\"
    ";
        // line 13
        yield from $this->yieldParentBlock("global_attributes", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    type=\"text\"
    ";
        // line 18
        yield from $this->yieldParentBlock("input_attributes", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/selectize/selectize.html.twig";
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
        return array (  105 => 18,  102 => 17,  95 => 16,  88 => 13,  83 => 12,  80 => 11,  77 => 10,  74 => 9,  71 => 8,  68 => 7,  65 => 6,  62 => 5,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/selectize/selectize.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/selectize/selectize.html.twig");
    }
}
