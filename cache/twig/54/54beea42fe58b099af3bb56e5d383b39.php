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

/* forms/fields/array/array.html.twig */
class __TwigTemplate_437d04b655d51a7e761195c59966d2a7 extends Template
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
        // line 43
        $macros["array_field"] = $this->macros["array_field"] = $this;
        // line 1
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "    data-grav-array-name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 46))), "html", null, true);
        yield "\"
    data-grav-array-keyname=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_key", [], "any", false, false, false, 47)), "html", null, true);
        yield "\"
    data-grav-array-valuename=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_value", [], "any", false, false, false, 48)), "html", null, true);
        yield "\"
    data-grav-array-textarea=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value_type", [], "any", false, false, false, 49) == "textarea"), "html", null, true);
        yield "\"
    ";
        // line 50
        yield from $this->yieldParentBlock("global_attributes", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 54), "html", null, true);
        yield "\" data-grav-array-type=\"container\"";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value_only", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " data-grav-array-mode=\"value_only\"";
        }
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)) <= 1)) ? (" class=\"one-child\"") : (""));
        yield ">
        ";
        // line 55
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 57
                if ((($tmp =  !is_iterable($context["text"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 58
                    yield "                    ";
                    yield $macros["array_field"]->getTemplateForMacro("macro_renderer", $context, 58, $this->getSourceContext())->macro_renderer(...[$context["key"], $context["text"], ($context["field"] ?? null), ($context["scope"] ?? null)]);
                    yield "
                ";
                } else {
                    // line 60
                    yield "                    ";
                    // line 61
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["text"]);
                    foreach ($context['_seq'] as $context["subkey"] => $context["subtext"]) {
                        // line 62
                        yield $macros["array_field"]->getTemplateForMacro("macro_renderer", $context, 62, $this->getSourceContext())->macro_renderer(...[((($context["key"] . "[") . $context["subkey"]) . "]"), $context["subtext"], ($context["field"] ?? null), ($context["scope"] ?? null)]);
                        yield "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['subkey'], $context['subtext'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    yield "                ";
                }
                // line 65
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['text'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 68
            yield "            <div class=\"form-row\" data-grav-array-type=\"row\">
                <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
                ";
            // line 70
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value_only", [], "any", false, false, false, 70) != true)) {
                // line 71
                yield "                    <input
                        data-grav-array-type=\"key\"
                        type=\"text\"
                        ";
                // line 74
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 74) || ($context["isDisabledToggleable"] ?? null))) {
                    yield "disabled=\"disabled\"";
                }
                // line 75
                yield "                        placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_key", [], "any", false, false, false, 75)), "html", null, true);
                yield "\" />
                ";
            }
            // line 77
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value_type", [], "any", false, false, false, 77) == "textarea")) {
                // line 78
                yield "                    <textarea
                        data-grav-array-type=\"value\"
                        name=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 80))), "html", null, true);
                yield "\"
                        ";
                // line 81
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 81) || ($context["isDisabledToggleable"] ?? null))) {
                    yield "disabled=\"disabled\"";
                }
                // line 82
                yield "                        placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_value", [], "any", false, false, false, 82)), "html", null, true);
                yield "\"></textarea>
                ";
            } else {
                // line 84
                yield "                    <input
                        data-grav-array-type=\"value\"
                        type=\"text\"
                        name=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 87))), "html", null, true);
                yield "\"
                        ";
                // line 88
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 88) || ($context["isDisabledToggleable"] ?? null))) {
                    yield "disabled=\"disabled\"";
                }
                // line 89
                yield "                        placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_value", [], "any", false, false, false, 89)), "html", null, true);
                yield "\" />
                ";
            }
            // line 91
            yield "                <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
            </div>";
        }
        // line 95
        yield "    </div>
";
        yield from [];
    }

    // line 3
    public function macro_renderer($key = null, $text = null, $field = null, $scope = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "key" => $key,
            "text" => $text,
            "field" => $field,
            "scope" => $scope,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "
    ";
            // line 5
            if ((($tmp =  !is_iterable(($context["text"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "        <div class=\"form-row";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value_only", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " array-field-value_only";
                }
                yield "\"
             data-grav-array-type=\"row\">
            <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
            ";
                // line 9
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value_only", [], "any", false, false, false, 9) != true)) {
                    // line 10
                    yield "                ";
                    if (((($context["key"] ?? null) == "0") && (($context["text"] ?? null) == ""))) {
                        // line 11
                        yield "                    ";
                        $context["key"] = "";
                        // line 12
                        yield "                ";
                    }
                    // line 13
                    yield "
                <input
                        data-grav-array-type=\"key\"
                        type=\"text\" value=\"";
                    // line 16
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["key"] ?? null), "html", null, true);
                    yield "\"
                        ";
                    // line 17
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 17) || ($context["isDisabledToggleable"] ?? null))) {
                        yield "disabled=\"disabled\"";
                    }
                    // line 18
                    yield "                        placeholder=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_key", [], "any", false, false, false, 18)), "html", null, true);
                    yield "\" />
            ";
                }
                // line 20
                yield "
            ";
                // line 21
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value_type", [], "any", false, false, false, 21) == "textarea")) {
                    // line 22
                    yield "                <textarea
                        data-grav-array-type=\"value\"
                        name=\"";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 24))) . "[") . ($context["key"] ?? null)) . "]"), "html", null, true);
                    yield "\"
                        placeholder=\"";
                    // line 25
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_value", [], "any", false, false, false, 25)), "html", null, true);
                    yield "\"
                        ";
                    // line 26
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 26) || ($context["isDisabledToggleable"] ?? null))) {
                        yield "disabled=\"disabled\"";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
                    yield "</textarea>
            ";
                } else {
                    // line 28
                    yield "                <input
                        data-grav-array-type=\"value\"
                        type=\"text\"
                        name=\"";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 31))) . "[") . ($context["key"] ?? null)) . "]"), "html", null, true);
                    yield "\"
                        placeholder=\"";
                    // line 32
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder_value", [], "any", false, false, false, 32)), "html", null, true);
                    yield "\"
                        ";
                    // line 33
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 33) || ($context["isDisabledToggleable"] ?? null))) {
                        yield "disabled=\"disabled\"";
                    }
                    // line 34
                    yield "                        value=";
                    if ((($context["text"] ?? null) == "true")) {
                        yield "true";
                    } elseif ((($context["text"] ?? null) == "false")) {
                        yield "false";
                    } else {
                        yield "\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["text"] ?? null), ", "), "html", null, true);
                        yield "\"";
                    }
                    yield " />
            ";
                }
                // line 36
                yield "
            <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
            <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/array/array.html.twig";
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
        return array (  331 => 36,  317 => 34,  313 => 33,  309 => 32,  305 => 31,  300 => 28,  291 => 26,  287 => 25,  283 => 24,  279 => 22,  277 => 21,  274 => 20,  268 => 18,  264 => 17,  260 => 16,  255 => 13,  252 => 12,  249 => 11,  246 => 10,  244 => 9,  235 => 6,  233 => 5,  230 => 4,  215 => 3,  209 => 95,  204 => 91,  198 => 89,  194 => 88,  190 => 87,  185 => 84,  179 => 82,  175 => 81,  171 => 80,  167 => 78,  164 => 77,  158 => 75,  154 => 74,  149 => 71,  147 => 70,  143 => 68,  136 => 65,  133 => 64,  125 => 62,  120 => 61,  118 => 60,  112 => 58,  110 => 57,  105 => 56,  103 => 55,  93 => 54,  86 => 53,  79 => 50,  75 => 49,  71 => 48,  67 => 47,  62 => 46,  55 => 45,  50 => 1,  48 => 43,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/array/array.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/array/array.html.twig");
    }
}
