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

/* forms/fields/select/select.html.twig */
class __TwigTemplate_87a28c3cd1bfbe5c763db4279e0ca6d0 extends Template
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
        yield "    data-grav-selectize=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", true, true, false, 4)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 4)) : ([]))), "html_attr");
        yield "\"
    ";
        // line 5
        yield from $this->yieldParentBlock("global_attributes", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    <div class=\"";
        yield ((($context["form_field_wrapper_classes"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["form_field_wrapper_classes"], "html", null, true)) : ("form-select-wrapper"));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 9), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
        <select name=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 10))) . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("[]") : (""))), "html", null, true);
        yield "\"
                class=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_field_select_classes"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 11), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 11), "html", null, true);
        yield "\"
                ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 12)) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 12));
            yield "\" ";
        }
        // line 13
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 13)) {
            yield "style=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 13));
            yield "\" ";
        }
        // line 14
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled=\"disabled\"";
        }
        // line 15
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 15), ["on", "true", 1])) {
            yield "autofocus=\"autofocus\"";
        }
        // line 16
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 16), ["on", "true", 1])) {
            yield "novalidate=\"novalidate\"";
        }
        // line 17
        yield "                ";
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required=\"required\"";
        }
        // line 18
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 18), ["on", "true", 1])) {
            yield "multiple=\"multiple\"";
        }
        // line 19
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 19) || ($context["isDisabledToggleable"] ?? null))) {
            yield "disabled=\"disabled\"";
        }
        // line 20
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "tabindex=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 20), "html", null, true);
            yield "\"";
        }
        // line 21
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "form", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "form=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "form", [], "any", false, false, false, 21), "html", null, true);
            yield "\"";
        }
        // line 22
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", true, true, false, 22)) {
            yield "autocomplete=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 22), "html", null, true);
            yield "\"";
        }
        // line 23
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                    data-key-observe=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 24))), "html", null, true);
            yield "\"
                ";
        }
        // line 26
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 28
                yield "                        data-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["datakey"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["datavalue"], "html_attr");
                yield "\"
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['datakey'], $context['datavalue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "                ";
        }
        // line 31
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 33
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr");
                yield "\"
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                ";
        }
        // line 36
        yield "                >
            ";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<option value=\"\" disabled selected>";
            yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 37));
            yield "</option>";
        }
        // line 38
        yield "
            ";
        // line 39
        $context["options"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 39);
        // line 40
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 40), "create", [], "any", false, false, false, 40) && ($context["value"] ?? null))) {
            // line 41
            yield "              ";
            $context["custom_value"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["value"] ?? null)) : ([ (string)($context["value"] ?? null) => ($context["value"] ?? null)]));
            // line 42
            yield "              ";
            $context["options"] = array_unique(Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ((array_key_exists("custom_value", $context)) ? (Twig\Extension\CoreExtension::default(($context["custom_value"] ?? null), [])) : ([]))));
            // line 43
            yield "            ";
        }
        // line 44
        yield "
            ";
        // line 45
        $context["value"] = ((is_iterable(($context["value"] ?? null))) ? (($context["value"] ?? null)) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(($context["value"] ?? null))));
        // line 46
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item_value"]) {
            // line 47
            yield "                ";
            if ((is_iterable($context["item_value"]) && CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "value", [], "any", false, false, false, 47))) {
                // line 48
                yield "                    ";
                $context["akey"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 48) && CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 48))) ? ($context["item_value"]) : ($context["key"]));
                // line 49
                yield "                    ";
                $context["avalue"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "value", [], "any", false, false, false, 49));
                // line 50
                yield "                    <option ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "disabled", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled=\"disabled\"") : (""));
                yield "
                        ";
                // line 51
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "selected", [], "any", false, false, false, 51) || ($context["key"] == ($context["value"] ?? null)))) ? ("selected=\"selected\"") : (""));
                yield "
                        ";
                // line 52
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "label", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("label=" . CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "label", [], "any", false, false, false, 52)), "html", null, true)) : (""));
                yield "
                        value=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["akey"] ?? null), "html", null, true);
                yield "\"
                    >
                        ";
                // line 55
                yield ($context["avalue"] ?? null);
                yield "
                    </option>
                ";
            } elseif (is_iterable(            // line 57
$context["item_value"])) {
                // line 58
                yield "                    ";
                $context["optgroup_label"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys($context["item_value"]));
                // line 59
                yield "                    <optgroup label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ($context["optgroup_label"] ?? null)), "html_attr");
                yield "\">
                      ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 60)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["key"]] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["optgroup_label"] ?? null)] ?? null) : null));
                foreach ($context['_seq'] as $context["subkey"] => $context["suboption"]) {
                    // line 61
                    yield "                          ";
                    $context["subkey"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter($context["subkey"]);
                    // line 62
                    yield "                          ";
                    $context["item_value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 62) && CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 62))) ? ($context["suboption"]) : ($context["subkey"])));
                    // line 63
                    yield "                          ";
                    $context["selected"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["suboption"]) : ($context["subkey"])));
                    // line 64
                    yield "                          <option ";
                    if ((($context["subkey"] === ($context["value"] ?? null)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 64) && CoreExtension::inFilter(($context["selected"] ?? null), ($context["value"] ?? null))))) {
                        yield "selected=\"selected\"";
                    }
                    yield " value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["subkey"], "html", null, true);
                    yield "\">
                            ";
                    // line 65
                    yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["suboption"]);
                    yield "
                          </option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['subkey'], $context['suboption'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                yield "                    </optgroup>
                ";
            } else {
                // line 70
                yield "                    ";
                $context["val"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 70) && CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 70))) ? ($context["item_value"]) : ($context["key"])));
                // line 71
                yield "                    ";
                $context["selected"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["item_value"]) : ($context["key"])));
                // line 72
                yield "                    <option ";
                if (((($context["val"] ?? null) === ($context["value"] ?? null)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 72) && CoreExtension::inFilter(($context["selected"] ?? null), ($context["value"] ?? null))))) {
                    yield "selected=\"selected\"";
                }
                yield " value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["val"] ?? null), "html", null, true);
                yield "\">";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["item_value"]);
                yield "</option>
                ";
            }
            // line 74
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item_value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "
        </select>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/select/select.html.twig";
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
        return array (  353 => 75,  347 => 74,  335 => 72,  332 => 71,  329 => 70,  325 => 68,  316 => 65,  307 => 64,  304 => 63,  301 => 62,  298 => 61,  294 => 60,  289 => 59,  286 => 58,  284 => 57,  279 => 55,  274 => 53,  270 => 52,  266 => 51,  261 => 50,  258 => 49,  255 => 48,  252 => 47,  247 => 46,  245 => 45,  242 => 44,  239 => 43,  236 => 42,  233 => 41,  230 => 40,  228 => 39,  225 => 38,  219 => 37,  216 => 36,  213 => 35,  202 => 33,  197 => 32,  194 => 31,  191 => 30,  180 => 28,  175 => 27,  172 => 26,  166 => 24,  163 => 23,  156 => 22,  149 => 21,  142 => 20,  137 => 19,  132 => 18,  127 => 17,  122 => 16,  117 => 15,  112 => 14,  105 => 13,  99 => 12,  91 => 11,  87 => 10,  78 => 9,  71 => 8,  64 => 5,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/select/select.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/fields/select/select.html.twig");
    }
}
