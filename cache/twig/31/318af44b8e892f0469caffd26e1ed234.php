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

/* forms/fields/acl_picker/acl_picker.html.twig */
class __TwigTemplate_ffdd0a197952b81d2fcb5e17043aac89 extends Template
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
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        $context["permissions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "permissions", [], "any", false, false, false, 4);
        // line 5
        yield "    ";
        $context["classes"] = ["" => "status-unchecked", 1 => "status-checked", 0 => "status-indeterminate"];
        // line 6
        yield "    ";
        $context["states"] = ["" => 0, 1 => 1, 0 => 2];
        // line 7
        yield "
    ";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 8) == "access")) {
            // line 9
            yield "        ";
            $context["groupsList"] = [];
            // line 10
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["permissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 11
                yield "            ";
                if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "visible", [], "any", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["action"], "visible", [], "any", false, false, false, 11)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "visible", [], "any", false, false, false, 11)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 12
                    yield "            ";
                    $context["groupsList"] = Twig\Extension\CoreExtension::merge(($context["groupsList"] ?? null), [["label" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 12)), "value" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 12)]]);
                    // line 13
                    yield "            ";
                }
                // line 14
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "
        ";
            // line 16
            $context["optionsList"] = [];
            // line 17
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["permissions"] ?? null), "instances", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 18
                yield "            ";
                if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "visible", [], "any", true, true, false, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["action"], "visible", [], "any", false, false, false, 18)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "visible", [], "any", false, false, false, 18)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 19
                    yield "            ";
                    $context["label"] = ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "params", [], "any", false, false, false, 19), "letter", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "parent", [], "any", false, false, false, 19), "label", [], "any", false, false, false, 19)) . " > ")) : ("")) . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 19)));
                    // line 20
                    yield "            ";
                    $context["optionsList"] = Twig\Extension\CoreExtension::merge(($context["optionsList"] ?? null), [["text" => (((($context["label"] ?? null) . " (") . CoreExtension::getAttribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 20)) . ")"), "value" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 20), "optgroup" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "scope", [], "any", false, false, false, 20)]]);
                    // line 21
                    yield "            ";
                }
                // line 22
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 23) == "permissions")) {
            // line 24
            yield "        ";
            $context["groups"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "flex", [], "any", false, false, false, 24), "directory", ["user-groups"], "method", false, false, false, 24);
            // line 25
            yield "        ";
            $context["groupsList"] = [];
            // line 26
            yield "        ";
            $context["crudp"] = ["create" => ["letter" => "C", "title" => "Create", "value" => ""], "read" => ["letter" => "R", "title" => "Read", "value" => ""], "update" => ["letter" => "U", "title" => "Update", "value" => ""], "delete" => ["letter" => "D", "title" => "Delete", "value" => ""]];
            // line 32
            yield "
        ";
            // line 33
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "hasFlexFeature", ["page"], "method", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "            ";
                $context["optionsList"] = [["text" => "Page Authors (Special)", "value" => "authors"], ["text" => "Default ACL (Special)", "value" => "defaults"]];
                // line 35
                yield "        ";
            } else {
                // line 36
                yield "            ";
                $context["optionsList"] = [];
                // line 37
                yield "        ";
            }
            // line 38
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["groups"] ?? null), "index", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 39
                yield "        ";
                // line 40
                yield "        ";
                $context["optionsList"] = Twig\Extension\CoreExtension::merge(($context["optionsList"] ?? null), [["text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["group"], "readableName", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["group"], "readableName", [], "any", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["group"], "readableName", [], "any", false, false, false, 40)) : (CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupname", [], "any", false, false, false, 40)))), "value" => CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupname", [], "any", false, false, false, 40)]]);
                // line 41
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "    ";
        }
        // line 43
        yield "
    <template data-id=\"acl_picker-";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 44), "html", null, true);
        yield "\">
        <div class=\"permissions-item\" data-field-type=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 45), "html", null, true);
        yield "\">
            <a href=\"#\" class=\"remove-item\"><i class=\"fa fa-trash\"></i></a>
            <select data-grav-selectize=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["options" => ($context["optionsList"] ?? null), "optgroups" => ($context["groupsList"] ?? null)]), "html", null, true);
        yield "\"></select>

            ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 49) == "access")) {
            // line 50
            yield "            <div class=\"switch-toggle switch-grav medium switch-3\">
                <input type=\"radio\" value=\"1\" id=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 51) . "_"), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 51))) . "[]"), "html", null, true);
            yield "\" class=\"label1\" checked>

                <label for=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 53) . "_"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ALLOWED"), "html", null, true);
            yield "</label>

                <input type=\"radio\" value=\"0\" id=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 55) . "_"), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 55))) . "[]"), "html", null, true);
            yield "\" class=\"label0\">

                <label for=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 57) . "_"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DENIED"), "html", null, true);
            yield "</label>

            </div>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["field"] ?? null), "data_type", [], "any", false, false, false, 60) == "permissions")) {
            // line 61
            yield "                ";
            $context["data_field_name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter(((($context["scope"] ?? null) . "_json.") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 61)));
            // line 62
            yield "                <div class=\"crudp-container\" data-field-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["data_field_name"] ?? null) . "[]"), "html", null, true);
            yield "\">
                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["crudp"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["button"]) {
                // line 64
                yield "                        <div>
                            <span class=\"checkboxes indeterminate toggleable status-unchecked hint--top\"
                                  data-_check-status=\"0\"
                                  data-hint=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 67), "html", null, true);
                yield "\">
                                <input type=\"checkbox\"
                                       id=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 69) . "_") . $context["key"]) . "_"), "html", null, true);
                yield "\"
                                       data-crudp-key=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"
                                      ";
                // line 72
                yield "                                       indeterminte=\"false\" value=\"\">
                                <label for=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 73) . "_") . $context["key"]) . "_"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "letter", [], "any", false, false, false, 73), "html", null, true);
                yield "</label>
                            </span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['button'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "
                    <input type=\"hidden\" name=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($context["data_field_name"] ?? null) . "[][") . ($context["key"] ?? null)) . "]"), "html", null, true);
            yield "\">
                </div>
            ";
        }
        // line 81
        yield "            <button class=\"button add-item\"><i class=\"fa fa-plus\"></i></button>
        </div>
    </template>


    <div class=\"permissions-container\" data-acl_picker_id=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 86), "html", null, true);
        yield "\" data-acl_picker=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["options" => ($context["optionsList"] ?? null), "optgroups" => ($context["groupsList"] ?? null)]), "html", null, true);
        yield "\">
        <div class=\"permissions-item empty-list ";
        // line 87
        yield (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hidden") : (""));
        yield "\">
            <a href=\"#\" class=\"button add-item\"><i class=\"fa fa-plus\"></i></a>
        </div>

        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["access"]) {
            // line 92
            yield "            <div class=\"permissions-item\" data-field-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 92), "html", null, true);
            yield "\">
                <a href=\"#\" class=\"remove-item\"><i class=\"fa fa-trash\"></i></a>
                <select data-grav-selectize=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["options" => ($context["optionsList"] ?? null), "optgroups" => ($context["groupsList"] ?? null)]), "html", null, true);
            yield "\">
                    <option value=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" selected>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "</option>
                </select>
                ";
            // line 97
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "data_type", [], "any", false, false, false, 97) == "access")) {
                // line 98
                yield "                <div class=\"switch-toggle switch-grav medium switch-3\">
                    ";
                // line 99
                $context["rnd"] = Twig\Extension\CoreExtension::random($this->env->getCharset(), 100);
                // line 100
                yield "                    <input type=\"radio\" value=\"1\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 100) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                yield "\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 100))) . "[") . $context["key"]) . "]"), "html", null, true);
                yield "\" class=\"label1\" ";
                yield (((($tmp = $context["access"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
                yield ">

                    <label for=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 102) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ALLOWED"), "html", null, true);
                yield "</label>

                    ";
                // line 104
                $context["rnd"] = Twig\Extension\CoreExtension::random($this->env->getCharset(), 100);
                // line 105
                yield "                    <input type=\"radio\" value=\"0\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 105) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                yield "\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 105))) . "[") . $context["key"]) . "]"), "html", null, true);
                yield "\" class=\"label0\" ";
                yield (((($tmp =  !$context["access"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
                yield ">

                    <label for=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 107) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DENIED"), "html", null, true);
                yield "</label>

                </div>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 110
($context["field"] ?? null), "data_type", [], "any", false, false, false, 110) == "permissions")) {
                // line 111
                yield "                    ";
                $context["data_field_name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter(((($context["scope"] ?? null) . "_json.") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 111)));
                // line 112
                yield "                    <div class=\"crudp-container\" data-field-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["data_field_name"] ?? null) . "[]"), "html", null, true);
                yield "\">
                        ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["crudp"] ?? null));
                foreach ($context['_seq'] as $context["crudp_key"] => $context["button"]) {
                    // line 114
                    yield "                            <div>
                                ";
                    // line 115
                    $context["crudp_value"] = (($_v0 = (($_v1 = ($context["value"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["key"]] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["crudp_key"]] ?? null) : null);
                    // line 116
                    yield "                                <span class=\"checkboxes indeterminate toggleable ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["classes"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["crudp_value"] ?? null)] ?? null) : null), "html", null, true);
                    yield " hint--top\"
                                      data-_check-status=\"";
                    // line 117
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["states"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["crudp_value"] ?? null)] ?? null) : null), "html", null, true);
                    yield "\"
                                      data-hint=\"";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 118), "html", null, true);
                    yield "\">
                                    <input type=\"checkbox\"
                                           id=\"";
                    // line 120
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 120) . "_") . $context["crudp_key"]) . "_"), "html", null, true);
                    yield "\"
                                           data-crudp-key=\"";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["crudp_key"], "html", null, true);
                    yield "\"
                                           ";
                    // line 123
                    yield "                                           indeterminate=\"false\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["crudp_value"] ?? null), "html", null, true);
                    yield "\">
                                    <label for=\"";
                    // line 124
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 124) . "_") . $context["crudp_key"]) . "_"), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "letter", [], "any", false, false, false, 124), "html", null, true);
                    yield "</label>
                                </span>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['crudp_key'], $context['button'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                yield "                        <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($context["data_field_name"] ?? null) . "[") . $context["key"]) . "]"), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), $context["key"], [], "array", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default((($_v4 = ($context["value"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[$context["key"]] ?? null) : null), [])) : ([]))), "html", null, true);
                yield "\">
                    </div>
                ";
            }
            // line 131
            yield "                <button class=\"button add-item\"><i class=\"fa fa-plus\"></i></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['access'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/acl_picker/acl_picker.html.twig";
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
        return array (  438 => 134,  430 => 131,  421 => 128,  409 => 124,  404 => 123,  400 => 121,  396 => 120,  391 => 118,  387 => 117,  382 => 116,  380 => 115,  377 => 114,  373 => 113,  368 => 112,  365 => 111,  363 => 110,  355 => 107,  345 => 105,  343 => 104,  336 => 102,  326 => 100,  324 => 99,  321 => 98,  319 => 97,  312 => 95,  308 => 94,  302 => 92,  298 => 91,  291 => 87,  285 => 86,  278 => 81,  272 => 78,  269 => 77,  257 => 73,  254 => 72,  250 => 70,  246 => 69,  241 => 67,  236 => 64,  232 => 63,  227 => 62,  224 => 61,  222 => 60,  214 => 57,  207 => 55,  200 => 53,  193 => 51,  190 => 50,  188 => 49,  183 => 47,  178 => 45,  174 => 44,  171 => 43,  168 => 42,  162 => 41,  159 => 40,  157 => 39,  152 => 38,  149 => 37,  146 => 36,  143 => 35,  140 => 34,  138 => 33,  135 => 32,  132 => 26,  129 => 25,  126 => 24,  123 => 23,  117 => 22,  114 => 21,  111 => 20,  108 => 19,  105 => 18,  100 => 17,  98 => 16,  95 => 15,  89 => 14,  86 => 13,  83 => 12,  80 => 11,  75 => 10,  72 => 9,  70 => 8,  67 => 7,  64 => 6,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/acl_picker/acl_picker.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/acl_picker/acl_picker.html.twig");
    }
}
