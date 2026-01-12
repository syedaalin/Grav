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

/* forms/fields/toggle/toggle.html.twig */
class __TwigTemplate_fd1172ecec4ce53b4c3b1f687d7a6627 extends Template
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
        // line 8
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 10
        $context["has_hidden"] = false;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 12
            if (Twig\Extension\CoreExtension::testEmpty($context["key"])) {
                // line 13
                $context["has_hidden"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['text'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "  ";
        yield from $this->yieldParentBlock("global_attributes", $context, $blocks);
        yield "
  data-grav-field-name=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 19))), "html", null, true);
        yield "\"
";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "  <div class=\"switch-toggle switch-grav ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 23), "html", null, true);
        yield " switch-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 23)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 23), "html", null, true);
        yield "\">
    ";
        // line 24
        $context["maxLen"] = 0;
        // line 25
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 26
            yield "      ";
            $context["translation"] = Twig\Extension\CoreExtension::trim($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["text"]));
            // line 27
            yield "      ";
            $context["maxLen"] = max(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["translation"] ?? null)), ($context["maxLen"] ?? null));
            // line 28
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['text'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
    ";
        // line 31
        yield "    ";
        $context["highlight"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "highlight", [], "any", false, false, false, 31));
        // line 32
        yield "    ";
        $context["value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter((((array_key_exists("value", $context) &&  !(null === $context["value"]))) ? ($context["value"]) : ((((array_key_exists("default", $context) &&  !(null === $context["default"]))) ? ($context["default"]) : (($context["highlight"] ?? null))))));
        // line 33
        yield "
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 35
            yield "      ";
            $context["key"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter($context["key"]);
            // line 36
            yield "      ";
            $context["id"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 36) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 36)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 36)) : (("toggle_" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 36)))) . $context["key"]);
            // line 37
            yield "      ";
            $context["translation"] = Twig\Extension\CoreExtension::trim($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["text"]));
            // line 38
            yield "
      <input type=\"radio\"
             value=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"
             id=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\"
             name=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 42))), "html", null, true);
            yield "\"
             ";
            // line 43
            if ((($context["highlight"] ?? null) === $context["key"])) {
                yield "class=\"highlight\"";
            }
            // line 44
            yield "             ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 44) || ($context["isDisabledToggleable"] ?? null))) {
                yield "disabled=\"disabled\"";
            }
            // line 45
            yield "             ";
            if (($context["key"] === ($context["value"] ?? null))) {
                yield "checked=\"checked\"";
            }
            // line 46
            yield "             ";
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "required=\"required\"";
            }
            // line 47
            yield "             ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "tabindex=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 47), "html", null, true);
                yield "\"";
            }
            // line 48
            yield "      />
      <label for=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\">";
            yield Twig\Extension\CoreExtension::trim($macros["macro"]->getTemplateForMacro("macro_spanToggle", $context, 49, $this->getSourceContext())->macro_spanToggle(...[($context["translation"] ?? null), ($context["maxLen"] ?? null)]));
            yield "</label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['text'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "  </div>
";
        yield from [];
    }

    // line 3
    public function macro_spanToggle($input = null, $length = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "input" => $input,
            "length" => $length,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "  ";
            $context["space"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["input"] ?? null))) / 2));
            // line 5
            yield "  ";
            yield ((($context["space"] ?? null) . ($context["input"] ?? null)) . ($context["space"] ?? null));
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/toggle/toggle.html.twig";
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
        return array (  226 => 5,  223 => 4,  210 => 3,  204 => 51,  194 => 49,  191 => 48,  184 => 47,  179 => 46,  174 => 45,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  153 => 40,  149 => 38,  146 => 37,  143 => 36,  140 => 35,  136 => 34,  133 => 33,  130 => 32,  127 => 31,  124 => 29,  118 => 28,  115 => 27,  112 => 26,  107 => 25,  105 => 24,  96 => 23,  89 => 22,  82 => 19,  77 => 18,  70 => 17,  65 => 1,  58 => 13,  56 => 12,  52 => 11,  50 => 10,  48 => 8,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/toggle/toggle.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/fields/toggle/toggle.html.twig");
    }
}
