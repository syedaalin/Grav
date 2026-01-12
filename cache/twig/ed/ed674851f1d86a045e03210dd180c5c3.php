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

/* forms/field.html.twig */
class __TwigTemplate_806760aebaee01f1df7bdd8ff3fae41c extends Template
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

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 1), "ignore", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "
";
            // line 3
            if (( !($context["blueprints"] ?? null) || ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, true, false, 3), "type", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 3)], "method", false, true, false, 3), "input@", [], "array", true, true, false, 3) &&  !(null === (($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, false, false, 3), "type", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 3)], "method", false, false, false, 3)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["input@"] ?? null) : null)))) ? ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, false, false, 3), "type", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 3)], "method", false, false, false, 3)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["input@"] ?? null) : null)) : (true)) === true))) {
                // line 4
                yield "    ";
                $context["default"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 4);
                // line 5
                yield "    ";
                $context["toggleable"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 5)) : (false));
                // line 6
                yield "    ";
                if ((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 7
                    yield "        ";
                    $context["originalValue"] = (((array_key_exists("originalValue", $context) &&  !(null === $context["originalValue"]))) ? ($context["originalValue"]) : (($context["value"] ?? null)));
                    // line 8
                    yield "        ";
                    $context["toggleableChecked"] =  !(null === ($context["originalValue"] ?? null));
                    // line 9
                    yield "    ";
                }
                // line 10
                yield "
    ";
                // line 11
                $context["has_value"] =  !(null === ($context["value"] ?? null));
                // line 12
                yield "    ";
                if ((($tmp =  !($context["has_value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 13
                    yield "        ";
                    $context["value"] = ($context["default"] ?? null);
                    // line 14
                    yield "    ";
                }
                // line 15
                yield "
    ";
                // line 16
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "yaml", [], "any", false, false, false, 16) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 16), "type", [], "any", false, false, false, 16) == "yaml")) && is_iterable(($context["value"] ?? null)))) {
                    // line 17
                    yield "        ";
                    $context["value"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->toYamlFilter(($context["value"] ?? null));
                    // line 18
                    yield "    ";
                }
            } else {
                // line 20
                yield "    ";
                $context["toggleable"] = false;
            }
            // line 22
            $context["vertical"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 22) == "vertical");
            // line 23
            $context["field_name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 23)));
            // line 24
            $context["show_label"] = ( !(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 24) === false) &&  !(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "display_label", [], "any", false, false, false, 24) === false));
            // line 25
            yield "
";
            // line 27
            $context["isDisabledToggleable"] = (($context["toggleable"] ?? null) &&  !($context["toggleableChecked"] ?? null));
            // line 28
            yield "
";
            // line 29
            yield from $this->unwrap()->yieldBlock('field', $context, $blocks);
            // line 129
            yield "
";
        }
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "    <div class=\"form-field grid";
        if ((($tmp = ($context["vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " vertical";
        }
        if ((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " form-field-toggleable";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "outerclasses", [], "any", false, false, false, 30), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "field_classes", [], "any", false, false, false, 30), "html", null, true);
        yield "\">
        ";
        // line 31
        yield from $this->unwrap()->yieldBlock('contents', $context, $blocks);
        // line 127
        yield "    </div>
";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "            ";
        if ((($tmp = ($context["show_label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "            <div class=\"form-label";
            if ((($tmp =  !($context["vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " block size-1-3";
            }
            yield "\">
                ";
            // line 34
            if ((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["field_name"] ?? null), "html", null, true);
                yield "\">
                        <input type=\"checkbox\"
                               id=\"toggleable_";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 37), "html", null, true);
                yield "\"
                               ";
                // line 38
                if ((($tmp = ($context["toggleableChecked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "value=\"1\"";
                }
                // line 39
                yield "                               name=\"toggleable_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["field_name"] ?? null), "html", null, true);
                yield "\"
                               ";
                // line 40
                if ((($tmp = ($context["toggleableChecked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "checked=\"checked\"";
                }
                // line 41
                yield "                        >
                        <label for=\"toggleable_";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 42), "html", null, true);
                yield "\"></label>
                    </span>
                ";
            }
            // line 45
            yield "               <label";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((((" class=\"toggleable " . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 45)) . "\" for=\"toggleable_") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 45)) . "\"")) : (((" class=\"" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 45)) . "\"")));
            yield ">
                ";
            // line 46
            yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
            // line 62
            yield "                </label>
                ";
            // line 63
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sublabel", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "                <div class=\"form-sublabel ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sublabelclasses", [], "any", false, false, false, 64), "html", null, true);
                yield "\">
                    ";
                // line 65
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 66
                    yield "                        ";
                    yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sublabel", [], "any", false, false, false, 66)), false);
                    yield "
                    ";
                } else {
                    // line 68
                    yield "                        ";
                    yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sublabel", [], "any", false, false, false, 68));
                    yield "
                    ";
                }
                // line 70
                yield "                </div>
                ";
            }
            // line 72
            yield "            </div>
            ";
        }
        // line 74
        yield "            <div class=\"form-data";
        if ((($tmp =  !($context["vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " block size-2-3";
        }
        yield "\"
                ";
        // line 75
        yield from $this->unwrap()->yieldBlock('global_attributes', $context, $blocks);
        // line 80
        yield "            >
                ";
        // line 81
        yield from $this->unwrap()->yieldBlock('group', $context, $blocks);
        // line 114
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "                    <div class=\"form-extra-wrapper ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 115), "html", null, true);
            yield "\">
                        <span class=\"form-description\">
                            ";
            // line 117
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 118
                yield "                                ";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 118)), false);
                yield "
                            ";
            } else {
                // line 120
                yield "                                ";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 120));
                yield "
                            ";
            }
            // line 122
            yield "                        </span>
                    </div>
                ";
        }
        // line 125
        yield "            </div>
        ";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "                            <span class=\"hint--bottom\" data-hint=\"";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 49)), false);
                yield "\">";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 49)), false);
                yield "</span> <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        ";
            } else {
                // line 51
                yield "                            <span class=\"hint--bottom\" data-hint=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 51)), "html", null, true);
                yield "\">";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 51));
                yield " <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        ";
            }
            // line 53
            yield "                    ";
        } else {
            // line 54
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "                            ";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 55)), false);
                yield "
                        ";
            } else {
                // line 57
                yield "                            ";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 57));
                yield "
                        ";
            }
            // line 59
            yield "                    ";
        }
        // line 60
        yield "                    ";
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 60), "required", [], "any", false, false, false, 60), ["on", "true", 1])) ? ("<span class=\"required\">*</span>") : (""));
        yield "
                ";
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "                data-grav-field=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 76), "html", null, true);
        yield "\"
                data-grav-disabled=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["toggleableChecked"] ?? null), "html", null, true);
        yield "\"
                data-grav-default=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 78)), "html_attr");
        yield "\"
                ";
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_group(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('input', $context, $blocks);
        // line 113
        yield "                ";
        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        yield "                        <div class=\"form-input-wrapper ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 83), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 83), "html", null, true);
        yield "\">
                            ";
        // line 84
        yield from $this->unwrap()->yieldBlock('prepend', $context, $blocks);
        // line 85
        yield "                            ";
        $context["input_value"] = ((is_iterable(($context["value"] ?? null))) ? (Twig\Extension\CoreExtension::join(($context["value"] ?? null), ",")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(($context["value"] ?? null))));
        // line 86
        yield "                            <input
                                ";
        // line 88
        yield "                                name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["field_name"] ?? null), "html", null, true);
        yield "\"
                                value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_value"] ?? null), "html", null, true);
        yield "\"
                                ";
        // line 90
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "                                    data-key-observe=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . ($context["field_name"] ?? null))), "html", null, true);
            yield "\"
                                ";
        }
        // line 93
        yield "                                ";
        // line 94
        yield "                                ";
        yield from $this->unwrap()->yieldBlock('input_attributes', $context, $blocks);
        // line 109
        yield "                            />
                            ";
        // line 110
        yield from $this->unwrap()->yieldBlock('append', $context, $blocks);
        // line 111
        yield "                        </div>
                    ";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 95
        yield "                                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", true, true, false, 95)) {
            yield "class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 95), "html", null, true);
            yield "\" ";
        }
        // line 96
        yield "                                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 96)) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 96), "html", null, true);
            yield "\" ";
        }
        // line 97
        yield "                                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 97)) {
            yield "style=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 97), "html", null, true);
            yield "\" ";
        }
        // line 98
        yield "                                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 98) || ($context["isDisabledToggleable"] ?? null))) {
            yield "disabled=\"disabled\"";
        }
        // line 99
        yield "                                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 99)), "html", null, true);
            yield "\"";
        }
        // line 100
        yield "                                    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 100), ["on", "true", 1])) {
            yield "autofocus=\"autofocus\"";
        }
        // line 101
        yield "                                    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 101), ["on", "true", 1])) {
            yield "novalidate=\"novalidate\"";
        }
        // line 102
        yield "                                    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "readonly", [], "any", false, false, false, 102), ["on", "true", 1])) {
            yield "readonly=\"readonly\"";
        }
        // line 103
        yield "                                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", true, true, false, 103)) {
            yield "autocomplete=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 103), "html", null, true);
            yield "\"";
        }
        // line 104
        yield "                                    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 104), "required", [], "any", false, false, false, 104), ["on", "true", 1])) {
            yield "required=\"required\"";
        }
        // line 105
        yield "                                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 105), "pattern", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "pattern=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 105), "pattern", [], "any", false, false, false, 105), "html", null, true);
            yield "\"";
        }
        // line 106
        yield "                                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 106), "message", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 106), "message", [], "any", false, false, false, 106)), "html", null, true);
            yield "\"
                                    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 107
($context["field"] ?? null), "title", [], "any", true, true, false, 107)) {
            yield "title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 107)), "html", null, true);
            yield "\" ";
        }
        // line 108
        yield "                                ";
        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_append(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/field.html.twig";
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
        return array (  549 => 110,  544 => 108,  538 => 107,  531 => 106,  524 => 105,  519 => 104,  512 => 103,  507 => 102,  502 => 101,  497 => 100,  490 => 99,  485 => 98,  478 => 97,  471 => 96,  464 => 95,  457 => 94,  447 => 84,  441 => 111,  439 => 110,  436 => 109,  433 => 94,  431 => 93,  425 => 91,  423 => 90,  419 => 89,  414 => 88,  411 => 86,  408 => 85,  406 => 84,  399 => 83,  392 => 82,  387 => 113,  384 => 82,  377 => 81,  370 => 78,  366 => 77,  361 => 76,  354 => 75,  346 => 60,  343 => 59,  337 => 57,  331 => 55,  328 => 54,  325 => 53,  317 => 51,  309 => 49,  306 => 48,  303 => 47,  296 => 46,  290 => 125,  285 => 122,  279 => 120,  273 => 118,  271 => 117,  265 => 115,  262 => 114,  260 => 81,  257 => 80,  255 => 75,  248 => 74,  244 => 72,  240 => 70,  234 => 68,  228 => 66,  226 => 65,  221 => 64,  219 => 63,  216 => 62,  214 => 46,  209 => 45,  203 => 42,  200 => 41,  196 => 40,  191 => 39,  187 => 38,  183 => 37,  177 => 35,  175 => 34,  168 => 33,  165 => 32,  158 => 31,  152 => 127,  150 => 31,  136 => 30,  129 => 29,  122 => 129,  120 => 29,  117 => 28,  115 => 27,  112 => 25,  110 => 24,  108 => 23,  106 => 22,  102 => 20,  98 => 18,  95 => 17,  93 => 16,  90 => 15,  87 => 14,  84 => 13,  81 => 12,  79 => 11,  76 => 10,  73 => 9,  70 => 8,  67 => 7,  64 => 6,  61 => 5,  58 => 4,  56 => 3,  53 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/field.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/field.html.twig");
    }
}
