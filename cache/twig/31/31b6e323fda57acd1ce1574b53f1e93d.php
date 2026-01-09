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

/* forms/fields/datetime/datetime.html.twig */
class __TwigTemplate_19d5048ea6cfbca95ae4bd5203d5f9f5 extends Template
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
            'input' => [$this, 'block_input'],
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
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 3)) : (($context["value"] ?? null)));
        // line 4
        $context["default_php_dateformat"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "guessDateFormat", [($context["value"] ?? null)], "method", false, false, false, 4);
        // line 5
        $context["php_dateformat"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "format", [], "any", false, false, false, 5)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "format", [], "any", false, false, false, 5)) : ((((((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "page", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5)))) ? ((((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "page", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5)))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 5), "pages", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5), "default", [], "any", false, false, false, 5)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 5), "pages", [], "any", false, false, false, 5), "dateformat", [], "any", false, false, false, 5), "default", [], "any", false, false, false, 5)) : (($context["default_php_dateformat"] ?? null)))))));
        // line 6
        $context["js_dateformat"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "dateformatToMomentJS", [($context["php_dateformat"] ?? null)], "method", false, false, false, 6);
        // line 7
        $context["value"] = (((null === ($context["value"] ?? null))) ? (($context["value"] ?? null)) : ($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["value"] ?? null), ($context["php_dateformat"] ?? null))));
        // line 1
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "<div class=\"form-input-wrapper datetime-picker-wrapper ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 10), "html", null, true);
        yield "\">
    ";
        // line 11
        $context["input_value"] = ((is_iterable(($context["value"] ?? null))) ? (Twig\Extension\CoreExtension::join(($context["value"] ?? null), ",")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(($context["value"] ?? null))));
        // line 12
        yield "    <input
            name=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 13))), "html", null, true);
        yield "\"
            value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_value"] ?? null), "html", null, true);
        yield "\"
            ";
        // line 15
        yield from $this->unwrap()->yieldBlock('input_attributes', $context, $blocks);
        // line 22
        yield "    />
    <span class=\"field-icons\">
        <i class=\"fa fa-fw fa-calendar\"></i>
    </span>
</div>
";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "                type=\"text\"
                data-grav-datetime=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["format" => ($context["js_dateformat"] ?? null)]), "html_attr");
        yield "\"
                ";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "min=\"";
            yield (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18), ($context["php_dateformat"] ?? null)), "html", null, true)));
            yield "\"";
        }
        // line 19
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "max=\"";
            yield (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19), ($context["php_dateformat"] ?? null)), "html", null, true)));
            yield "\"";
        }
        // line 20
        yield "                ";
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
        return "forms/fields/datetime/datetime.html.twig";
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
        return array (  127 => 20,  120 => 19,  114 => 18,  110 => 17,  107 => 16,  100 => 15,  90 => 22,  88 => 15,  84 => 14,  80 => 13,  77 => 12,  75 => 11,  70 => 10,  63 => 9,  58 => 1,  56 => 7,  54 => 6,  52 => 5,  50 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/datetime/datetime.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/datetime/datetime.html.twig");
    }
}
