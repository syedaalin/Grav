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

/* forms/default/field.html.twig */
class __TwigTemplate_04807683dd25821fd26e6e1a65622d7c extends Template
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

        // line 3
        $_trait_0 = $this->load("forms/layouts/field-variables.html.twig", 3);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."forms/layouts/field-variables.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'field_override_variables_before' => [$this, 'block_field_override_variables_before'],
                'outer_field_classes' => [$this, 'block_outer_field_classes'],
                'global_attributes' => [$this, 'block_global_attributes'],
                'input_attributes' => [$this, 'block_input_attributes'],
            ]
        );
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 112
        return "forms/layouts/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 1), "ignore", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            $context["field_name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 6)));
            // line 7
            $context["vertical"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 7) == "vertical");
            // line 9
            if (( !($context["blueprints"] ?? null) || ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, true, false, 9), "type", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 9)], "method", false, true, false, 9), "input@", [], "array", true, true, false, 9) &&  !(null === (($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, false, false, 9), "type", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 9)], "method", false, false, false, 9)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["input@"] ?? null) : null)))) ? ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, false, false, 9), "type", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 9)], "method", false, false, false, 9)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["input@"] ?? null) : null)) : (true)) === true))) {
                // line 10
                $context["default"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 10);
                // line 11
                $context["toggleable"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 11)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 11)) : (false));
                // line 12
                if ((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 13
                    $context["originalValue"] = (((array_key_exists("originalValue", $context) &&  !(null === $context["originalValue"]))) ? ($context["originalValue"]) : (($context["value"] ?? null)));
                    // line 14
                    $context["toggleableChecked"] =  !(null === ($context["originalValue"] ?? null));
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 15
($context["field"] ?? null), "overridable", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 16
                    $context["toggleable"] = true;
                    // line 17
                    $context["default"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getDefaultValue", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17)], "method", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getDefaultValue", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17)], "method", false, false, false, 17)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getDefaultValue", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17)], "method", false, false, false, 17)) : (($context["default"] ?? null)));
                    // line 18
                    $context["toggleableChecked"] = ( !(null === ($context["value"] ?? null)) && (($context["value"] ?? null) != ($context["default"] ?? null)));
                }
                // line 21
                $context["cookie_name"] = ((("forms-" . CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 21)) . "-") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 21));
                // line 22
                $context["value"] = (((array_key_exists("value", $context) &&  !(null === $context["value"]))) ? ($context["value"]) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->getCookie(($context["cookie_name"] ?? null))));
                // line 23
                $context["has_value"] =  !(($context["value"] ?? null) === null);
                // line 24
                if ((($tmp =  !($context["has_value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 25
                    $context["value"] = ($context["default"] ?? null);
                }
                // line 28
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "yaml", [], "any", false, false, false, 28) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 28), "type", [], "any", false, false, false, 28) == "yaml")) && is_iterable(($context["value"] ?? null)))) {
                    // line 29
                    $context["value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->yamlFilter(($context["value"] ?? null));
                }
            } else {
                // line 32
                $context["toggleable"] = false;
            }
            // line 36
            $context["isDisabledToggleable"] = (($context["toggleable"] ?? null) &&  !($context["toggleableChecked"] ?? null));
            // line 38
            if ((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                $context["form_field_toggleable"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 40
                    yield "    ";
                    yield from $this->load("forms/default/toggleable.html.twig", 40)->unwrap()->yield(CoreExtension::merge($context, ["checked" => ($context["toggleableChecked"] ?? null)]));
                    // line 41
                    yield "  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }
            // line 44
            $context["errors"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "messages", [], "any", false, false, false, 44), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 44), [], "any", false, false, false, 44);
            // line 45
            $context["required"] = (($context["client_side_validation"] ?? null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 45), "required", [], "any", false, false, false, 45), ["on", "true", 1]));
            // line 46
            $context["autofocus"] = ((($context["inline_errors"] ?? null) == false) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 46), ["on", "true", 1]));
            // line 48
            if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
                // line 49
                $context["autofocus"] = true;
            }
            // line 52
            $context["embed_outer_field_classes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 53
                yield "  ";
                yield from $this->unwrap()->yieldBlock('outer_field_classes', $context, $blocks);
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["form_field_outer_core"] = (($context["form_field_outer_core"] ?? null) . " has-errors");
            }
            // line 58
            if ((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["form_field_outer_core"] = (($context["form_field_outer_core"] ?? null) . " form-field-toggleable");
            }
            // line 60
            $context["layout_form_field_outer_classes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "outerclasses", [], "any", false, false, false, 60);
            // line 61
            $context["layout_form_field_outer_classes"] = ((Twig\Extension\CoreExtension::trim(($context["layout_form_field_outer_classes"] ?? null)) . " ") . ($context["form_field_outer_classes"] ?? null));
            // line 62
            $context["layout_form_field_outer_classes"] = ((Twig\Extension\CoreExtension::trim(($context["layout_form_field_outer_classes"] ?? null)) . " ") . ($context["embed_outer_field_classes"] ?? null));
            // line 65
            $context["show_label"] = ( !(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 65) === false) &&  !(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "display_label", [], "any", false, false, false, 65) === false));
            // line 68
            $context["layout_form_field_outer_label_classes"] = Twig\Extension\CoreExtension::trim(((((($context["form_field_outer_label_classes"] ?? null)) ? ($context["form_field_outer_label_classes"]) : ("form-label")) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 68)));
            // line 69
            $context["layout_form_field_label_classes"] = Twig\Extension\CoreExtension::trim(((($context["form_field_label_classes"] ?? null)) ? ($context["form_field_label_classes"]) : ("inline")));
            // line 70
            $context["form_field_label_trim"] = (((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toggleable") : (""));
            // line 73
            $context["layout_form_field_outer_data_classes"] = Twig\Extension\CoreExtension::trim(((((($context["form_field_outer_data_classes"] ?? null)) ? ($context["form_field_outer_data_classes"]) : (" form-data")) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "dataclasses", [], "any", false, false, false, 73)));
            // line 76
            $context["layout_form_field_wrapper_classes"] = Twig\Extension\CoreExtension::trim(((((($context["form_field_wrapper_classes"] ?? null)) ? ($context["form_field_wrapper_classes"]) : (" form-input-wrapper")) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 76)));
            // line 79
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc(($context["field"] ?? null), "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 81
                    $context["field"] = Twig\Extension\CoreExtension::merge(($context["field"] ?? null), ["classes" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 81) . " ") . Twig\Extension\CoreExtension::trim(                    $this->unwrap()->renderBlock("field_input_classes", $context, $blocks)))]);
                } else {
                    // line 83
                    $context["field"] = Twig\Extension\CoreExtension::merge(($context["field"] ?? null), ["classes" =>                     $this->unwrap()->renderBlock("field_input_classes", $context, $blocks)]);
                }
            }
            // line 86
            $context["layout_form_field_input_classes"] = Twig\Extension\CoreExtension::trim(((($context["form_field_input_classes"] ?? null) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 86)));
            // line 89
            $context["form_field_inline_error_classes"] = ((($context["form_field_inline_error_classes"] ?? null)) ? ($context["form_field_inline_error_classes"]) : (" form-errors"));
            // line 92
            $context["form_field_extra_wrapper_classes"] = ("form-extra-wrapper " . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 92));
            // line 95
            $context["form_field_for"] = (((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("toggleable_" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 95))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 95))));
            // line 98
            $context["form_field_label"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 98), false)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 98)));
            // line 99
            $context["form_field_label"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ((array_key_exists("form_field_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["form_field_label"] ?? null), Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 99)))) : (Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 99)))));
            // line 102
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                $context["form_field_help"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 103)), false))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 103)))));
            }
            // line 107
            $context["form_field_required"] = ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 107), "required", [], "any", false, false, false, 107), ["on", "true", 1])) ? (true) : (false));
            // line 110
            $context["form_field_description"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 110)), false)) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 110))));
        }
        // line 112
        $this->parent = $this->load("forms/layouts/field.html.twig", 112);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field_override_variables_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer_field_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 115
        yield "  data-grav-field=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 115), "html", null, true);
        yield "\"
  data-grav-disabled=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["toggleable"] ?? null) && ($context["toggleableChecked"] ?? null)), "html", null, true);
        yield "\"
  data-grav-default=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["default"] ?? null)), "html_attr");
        yield "\"
";
        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 121
        yield "  class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(($context["layout_form_field_input_classes"] ?? null)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 121), "html", null, true);
        yield "\"
  ";
        // line 122
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 122)) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 122));
            yield "\" ";
        }
        // line 123
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 123)) {
            yield "style=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 123));
            yield "\" ";
        }
        // line 124
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 124) || ($context["isDisabledToggleable"] ?? null))) {
            yield "disabled=\"disabled\"";
        }
        // line 125
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 125)), "html_attr");
            yield "\"";
        }
        // line 126
        yield "  ";
        if ((($tmp = ($context["autofocus"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "autofocus=\"autofocus\"";
        }
        // line 127
        yield "  ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 127), ["on", "true", 1])) {
            yield "novalidate=\"novalidate\"";
        }
        // line 128
        yield "  ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "readonly", [], "any", false, false, false, 128), ["on", "true", 1])) {
            yield "readonly=\"readonly\"";
        }
        // line 129
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", true, true, false, 129)) {
            yield "autocomplete=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 129), "html", null, true);
            yield "\"";
        }
        // line 130
        yield "  ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocapitalize", [], "any", false, false, false, 130), ["off", "characters", "words", "sentences"])) {
            yield "autocapitalize=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocapitalize", [], "any", false, false, false, 130), "html", null, true);
            yield "\"";
        }
        // line 131
        yield "  ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputmode", [], "any", false, false, false, 131), ["none", "text", "decimal", "numeric", "tel", "search", "email", "url"])) {
            yield "inputmode=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputmode", [], "any", false, false, false, 131), "html", null, true);
            yield "\"";
        }
        // line 132
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "tabindex=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 132), "html", null, true);
            yield "\"";
        }
        // line 133
        yield "  ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "spellcheck", [], "any", false, false, false, 133), ["true", "false"])) {
            yield "spellcheck=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "spellcheck", [], "any", false, false, false, 133), "html", null, true);
            yield "\"";
        }
        // line 134
        yield "  ";
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required=\"required\"";
        }
        // line 135
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 135), "pattern", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "pattern=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 135), "pattern", [], "any", false, false, false, 135));
            yield "\"";
        }
        // line 136
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 136), "message", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 136), "message", [], "any", false, false, false, 136)));
            yield "\"
  ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 137
($context["field"] ?? null), "title", [], "any", true, true, false, 137)) {
            yield "title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 137)));
            yield "\" ";
        }
        // line 138
        yield "
  ";
        // line 140
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", true, true, false, 140)) {
            // line 141
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, false, 141));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 142
                yield "      ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 143
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 143), "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 143), "html_attr");
                    yield "\"
      ";
                } else {
                    // line 145
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html_attr");
                    yield "\"
      ";
                }
                // line 147
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            yield "  ";
        }
        // line 149
        yield "
  ";
        // line 151
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 152
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 152));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 153
                yield "      data-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html_attr");
                yield "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/field.html.twig";
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
        return array (  423 => 155,  412 => 153,  407 => 152,  404 => 151,  401 => 149,  398 => 148,  392 => 147,  384 => 145,  376 => 143,  373 => 142,  368 => 141,  365 => 140,  362 => 138,  356 => 137,  349 => 136,  342 => 135,  337 => 134,  330 => 133,  323 => 132,  316 => 131,  309 => 130,  302 => 129,  297 => 128,  292 => 127,  287 => 126,  280 => 125,  275 => 124,  268 => 123,  262 => 122,  255 => 121,  248 => 120,  241 => 117,  237 => 116,  232 => 115,  225 => 114,  215 => 53,  205 => 4,  200 => 112,  197 => 110,  195 => 107,  192 => 103,  190 => 102,  188 => 99,  186 => 98,  184 => 95,  182 => 92,  180 => 89,  178 => 86,  174 => 83,  171 => 81,  169 => 80,  167 => 79,  165 => 76,  163 => 73,  161 => 70,  159 => 69,  157 => 68,  155 => 65,  153 => 62,  151 => 61,  149 => 60,  145 => 58,  141 => 57,  136 => 53,  134 => 52,  131 => 49,  129 => 48,  127 => 46,  125 => 45,  123 => 44,  118 => 41,  115 => 40,  113 => 39,  111 => 38,  109 => 36,  106 => 32,  102 => 29,  100 => 28,  97 => 25,  95 => 24,  93 => 23,  91 => 22,  89 => 21,  86 => 18,  84 => 17,  82 => 16,  80 => 15,  78 => 14,  76 => 13,  74 => 12,  72 => 11,  70 => 10,  68 => 9,  66 => 7,  64 => 6,  62 => 1,  55 => 112,  33 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/default/field.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/default/field.html.twig");
    }
}
