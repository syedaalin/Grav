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

/* forms/fields/checkboxes/checkboxes.html.twig */
class __TwigTemplate_d42b6c755974db75863eef4c92f08d7a extends Template
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
            'input' => [$this, 'block_input'],
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
        yield from $this->yieldParentBlock("global_attributes", $context, $blocks);
        yield "
    data-grav-keys=\"";
        // line 5
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "use", [], "any", false, false, false, 5) == "keys")) ? ("true") : ("false"));
        yield "\"
    data-grav-field-name=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 6))), "html", null, true);
        yield "\"
";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        $context["value"] = (((null === ($context["value"] ?? null))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 10)) : (($context["value"] ?? null)));
        // line 11
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "use", [], "any", false, false, false, 11) == "keys") && CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 11))) {
            // line 12
            yield "        ";
            $context["value"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 12), ($context["value"] ?? null));
            // line 13
            yield "    ";
        }
        // line 14
        yield "
        <div class=\"checkboxes ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_field_wrapper_classes"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 17
            yield "                ";
            $context["id"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17)))) . "-") . $context["key"]);
            // line 18
            yield "                ";
            $context["name"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "use", [], "any", false, false, false, 18) == "keys")) ? ($context["key"]) : (($context["id"] ?? null)));
            // line 19
            yield "                ";
            $context["val"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "use", [], "any", false, false, false, 19) == "keys")) ? ("1") : ($context["key"]));
            // line 20
            yield "                ";
            $context["checked"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "use", [], "any", false, false, false, 20) == "keys")) ? ((($_v0 = ($context["value"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["key"]] ?? null) : null)) : (CoreExtension::inFilter($context["key"], ($context["value"] ?? null))));
            // line 21
            yield "                ";
            $context["help"] = ((CoreExtension::inFilter($context["key"], Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help_options", [], "any", false, false, false, 21)))) ? ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help_options", [], "any", false, false, false, 21)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["key"]] ?? null) : null)) : (false));
            // line 22
            yield "                ";
            $context["disabled"] = CoreExtension::inFilter($context["key"], CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled_options", [], "any", false, false, false, 22));
            // line 23
            yield "                <input type=\"checkbox\"
                    id=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null));
            yield "\"
                    value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["val"] ?? null));
            yield "\"
                    name=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 26))) . "[") . ($context["name"] ?? null)) . "]"), "html", null, true);
            yield "\"
                    class=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_field_checkbox_classes"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 27), "html", null, true);
            yield "\"
                    ";
            // line 28
            if ((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked=\"checked\"";
            }
            // line 29
            yield "                    ";
            if ((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled=\"disabled\"";
            }
            // line 30
            yield "                >
                <label style=\"display: inline; ";
            // line 31
            if ((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "opacity: 0.6; cursor: no-drop;";
            }
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null));
            yield "\">
                    ";
            // line 32
            if ((($tmp = ($context["help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "                        <span class=\"hint--bottom\" data-hint=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ($context["help"] ?? null)), "html_attr");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["text"]));
                yield "</span>
                    ";
            } else {
                // line 35
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["text"]));
                yield "
                    ";
            }
            // line 37
            yield "                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['text'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "        </div>
    
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/checkboxes/checkboxes.html.twig";
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
        return array (  189 => 39,  182 => 37,  176 => 35,  168 => 33,  166 => 32,  158 => 31,  155 => 30,  150 => 29,  146 => 28,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  125 => 23,  122 => 22,  119 => 21,  116 => 20,  113 => 19,  110 => 18,  107 => 17,  103 => 16,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  85 => 11,  82 => 10,  75 => 9,  68 => 6,  64 => 5,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/checkboxes/checkboxes.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/fields/checkboxes/checkboxes.html.twig");
    }
}
