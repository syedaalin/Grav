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

/* forms/fields/list/list.html.twig */
class __TwigTemplate_487d60bf3eca653f7db9b3a508577bf9 extends Template
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
            'contents' => [$this, 'block_contents'],
            'global_attributes' => [$this, 'block_global_attributes'],
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
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 4);
        // line 5
        $context["btnLabel"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "btnLabel", [], "any", true, true, false, 5)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "btnLabel", [], "any", false, false, false, 5)) : ("PLUGIN_ADMIN.ADD_ITEM"));
        // line 6
        $context["btnSortLabel"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "btnSortLabel", [], "any", true, true, false, 6)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "btnSortLabel", [], "any", false, false, false, 6)) : ("PLUGIN_ADMIN.SORT_BY"));
        // line 7
        $context["fieldControls"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "controls", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "controls", [], "any", false, false, false, 7), "bottom")) : ("bottom"));
        // line 1
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    <div class=\"form-label";
        if ((($tmp =  !($context["vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " block size-1-3 pure-u-1-3";
        }
        yield "\">
        ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 12))), "html", null, true);
            yield "\">
                <input type=\"checkbox\"
                       id=\"toggleable_";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
            yield "\"
                       ";
            // line 15
            if ((($tmp = ($context["toggleableChecked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "value=\"1\"";
            }
            // line 16
            yield "                       name=\"toggleable_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 16))), "html", null, true);
            yield "\"
                       ";
            // line 17
            if ((($tmp = ($context["toggleableChecked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked=\"checked\"";
            }
            // line 18
            yield "                >
                <label for=\"toggleable_";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
            yield "\"></label>
            </span>
        ";
        }
        // line 22
        yield "        ";
        if ((($tmp = ($context["show_label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "        <label";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((((" class=\"toggleable " . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 23)) . "\" for=\"toggleable_") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 23)) . "\"")) : (((" class=\"" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 23)) . "\"")));
            yield ">
            ";
            // line 24
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    yield "                    <span class=\"hint--bottom\" data-hint=\"";
                    yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 26)), false);
                    yield "\">";
                    yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 26)), false);
                    yield " <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                ";
                } else {
                    // line 28
                    yield "                    <span class=\"hint--bottom\" data-hint=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 28)), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 28));
                    yield " <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                ";
                }
                // line 30
                yield "            ";
            } else {
                // line 31
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 31)), "html", null, true);
                yield "
            ";
            }
            // line 33
            yield "            ";
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 33), "required", [], "any", false, false, false, 33), ["on", "true", 1])) ? ("<span class=\"required\">*</span>") : (""));
            yield "
        </label>
        ";
        }
        // line 36
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "        <div class=\"form-extra-wrapper ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 37), "html", null, true);
            yield "\">
            <span class=\"form-description\">";
            // line 38
            yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 38)), false);
            yield "</span>
        </div>
        ";
        }
        // line 41
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sublabel", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "        <div class=\"form-sublabel ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sublabelclasses", [], "any", false, false, false, 42), "html", null, true);
            yield "\">
            ";
            // line 43
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "                ";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sublabel", [], "any", false, false, false, 44)), false);
                yield "
            ";
            } else {
                // line 46
                yield "                ";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sublabel", [], "any", false, false, false, 46));
                yield "
            ";
            }
            // line 48
            yield "        </div>
        ";
        }
        // line 50
        yield "    </div>
    <div class=\"form-data";
        // line 51
        if ((($tmp =  !($context["vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " block size-2-3 pure-u-2-3";
        }
        yield "\"
        ";
        // line 52
        yield from $this->unwrap()->yieldBlock('global_attributes', $context, $blocks);
        // line 57
        yield "    >

        <div class=\"form-list-wrapper ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 59), "html", null, true);
        yield "\" data-type=\"collection\"
             ";
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectunique", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "                 data-select-unique=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectunique", [], "any", false, false, false, 61)), "html_attr");
            yield "\"
                 data-max=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectunique", [], "any", false, false, false, 62)), "html", null, true);
            yield "\"
             ";
        }
        // line 64
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "min", [], "any", true, true, false, 64)) {
            yield "data-min=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "min", [], "any", false, false, false, 64), "html", null, true);
            yield "\"";
        }
        // line 65
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "max", [], "any", true, true, false, 65) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectunique", [], "any", false, false, false, 65))) {
            yield "data-max=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "max", [], "any", false, false, false, 65), "html", null, true);
            yield "\"";
        }
        // line 66
        yield "        >
            ";
        // line 67
        if (CoreExtension::inFilter(($context["fieldControls"] ?? null), ["top", "both"])) {
            // line 68
            yield "                <div class=\"collection-actions\">
                    ";
            // line 69
            if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 70
                yield "                        <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                                ";
                // line 71
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 71) || ($context["isDisabledToggleable"] ?? null))) {
                    yield "disabled=\"disabled\"";
                }
                yield "><i class=\"fa fa-chevron-circle-down\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
                yield "</button>
                        <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                                ";
                // line 73
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 73) || ($context["isDisabledToggleable"] ?? null))) {
                    yield "disabled=\"disabled\"";
                }
                yield "><i class=\"fa fa-chevron-circle-right\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
                yield "</button>
                    ";
            }
            // line 75
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "                        <button class=\"button";
                yield (((($tmp =  !Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" hidden") : (""));
                yield "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby", [], "any", false, false, false, 76), "html", null, true);
                yield "\" data-action-sort-dir=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby_dir", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby_dir", [], "any", false, false, false, 76), "asc")) : ("asc")), "html", null, true);
                yield "\"
                                ";
                // line 77
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 77) || ($context["isDisabledToggleable"] ?? null))) {
                    yield "disabled=\"disabled\"";
                }
                yield "><i class=\"fa fa-sort-amount-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby_dir", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby_dir", [], "any", false, false, false, 77), "asc")) : ("asc")), "html", null, true);
                yield "\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ($context["btnSortLabel"] ?? null)), "html", null, true);
                yield " '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby", [], "any", false, false, false, 77), "html", null, true);
                yield "'</button>
                    ";
            }
            // line 79
            yield "                    <button class=\"button\" type=\"button\" data-action=\"add\"
                            data-action-add=\"";
            // line 80
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placement", [], "any", false, false, false, 80) === "position")) ? ("top") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placement", [], "any", true, true, false, 80)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placement", [], "any", false, false, false, 80), "bottom")) : ("bottom")), "html", null, true)));
            yield "\"
                            ";
            // line 81
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 81) || ($context["isDisabledToggleable"] ?? null))) {
                yield "disabled=\"disabled\"";
            }
            // line 82
            yield "                    ><i class=\"fa fa-plus\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ($context["btnLabel"] ?? null)), "html", null, true);
            yield "</button>
                </div>
            ";
        }
        // line 85
        yield "            <ul  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", true, true, false, 85)) {
            yield "class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 85), "html", null, true);
            yield "\"";
        }
        yield " data-collection-holder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\"
                ";
        // line 86
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sort", [], "any", false, false, false, 86) === false)) {
            // line 87
            yield "                    data-collection-nosort
                ";
        }
        // line 88
        yield ">
                ";
        // line 89
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                ";
            $context["collapsible"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 90)) > 1) && ( !CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "collapsible", [], "any", true, true, false, 90) || CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "collapsible", [], "any", false, false, false, 90)));
            // line 91
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["value"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 92
                yield "                    ";
                $context["item_name"] = (((($tmp = ($context["name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((($context["name"] ?? null) . ".") . $context["key"])) : ($context["key"]));
                // line 93
                yield "                    <li data-collection-item=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["item_name"] ?? null), "html", null, true);
                yield "\"
                        data-collection-key=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"
                        class=\"";
                // line 95
                yield (((($context["collapsible"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "collapsed", [], "any", false, false, false, 95))) ? ("collection-collapsed") : (""));
                yield "\"
                        ";
                // line 96
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "min_height", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "style=\"min-height:";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "min_height", [], "any", false, false, false, 96), "html", null, true);
                    yield ";\"";
                }
                yield ">
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 98));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["child_name"] => $context["child"]) {
                    // line 99
                    $context["child"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->prepareFormField($context, $context["child"], $context["child_name"], ($context["item_name"] ?? null));
                    // line 100
                    yield "                                ";
                    if ((($tmp = $context["child"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 101
                        yield "                                    ";
                        $context["child"] = Twig\Extension\CoreExtension::merge($context["child"], ["_list_index" => ($context["item_name"] ?? null)]);
                        // line 102
                        yield "                                    ";
                        $context["default_layout"] = "text";
                        // line 103
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", false, false, false, 103) == "key") || ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "key", [], "any", false, false, false, 103) == true) && (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", false, false, false, 103) != "list")))) {
                            // line 104
                            yield "                                        ";
                            // line 105
                            yield "                                        ";
                            $context["default_layout"] = "key";
                            // line 106
                            yield "                                        ";
                            $context["child_value"] = $context["key"];
                            // line 107
                            yield "                                    ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 107) == "value")) {
                            // line 108
                            yield "                                        ";
                            // line 109
                            yield "                                        ";
                            $context["child"] = Twig\Extension\CoreExtension::merge($context["child"], ["name" => ($context["item_name"] ?? null)]);
                            // line 110
                            yield "                                        ";
                            $context["child_value"] = $context["val"];
                            // line 111
                            yield "                                    ";
                        } else {
                            // line 112
                            yield "                                        ";
                            $context["child_value"] = (((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 112)], "method", false, false, false, 112)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 112)], "method", false, false, false, 112)));
                            // line 113
                            yield "                                        ";
                            // line 114
                            yield "                                        ";
                            if (((null === ($context["child_value"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, $context["val"], Twig\Extension\CoreExtension::trim($context["child_name"], ".", "left"), [], "array", true, true, false, 114))) {
                                // line 115
                                yield "                                          ";
                                $context["child_value"] = (($_v0 = $context["val"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[Twig\Extension\CoreExtension::trim($context["child_name"], ".", "left")] ?? null) : null);
                                // line 116
                                yield "                                        ";
                            }
                            // line 117
                            yield "                                    ";
                        }
                        // line 118
                        yield "
                                    ";
                        // line 119
                        $context["field_templates"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", false, false, false, 119), ($context["field_layout"] ?? null), ($context["default_layout"] ?? null));
                        // line 120
                        yield "                                    ";
                        $context["template_data"] = ["field" => $context["child"], "value" => ($context["child_value"] ?? null), "originalValue" => null];
                        // line 121
                        yield "                                    ";
                        if ((($context["default_layout"] ?? null) != "key")) {
                            // line 122
                            yield "                                        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", false, false, false, 122) == "fieldset")) {
                                // line 123
                                yield "                                            ";
                                $context["template_data"] = Twig\Extension\CoreExtension::merge(($context["template_data"] ?? null), ["val" => ($context["child_value"] ?? null)]);
                                // line 124
                                yield "                                        ";
                            }
                            // line 125
                            yield "                                    ";
                        }
                        // line 127
                        yield from $this->load(($context["field_templates"] ?? null), 127)->unwrap()->yield(CoreExtension::merge($context, ($context["template_data"] ?? null)));
                    }
                    // line 129
                    yield "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['child_name'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                yield "                            <div class=\"item-actions\">
                                ";
                // line 131
                if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 132
                    yield "                                    <i class=\"fa fa-chevron-circle-";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "collapsed", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("right") : ("down"));
                    yield "\" data-action=\"";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "collapsed", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("expand") : ("collapse"));
                    yield "\"></i>
                                    <br />
                                ";
                }
                // line 135
                yield "                                <i class=\"fa fa-trash-o\" data-action=\"confirm\"></i>
                                <div class=\"list-confirm-deletion button danger hidden\"  data-action=\"delete\">
                                  <i class=\"fa fa-fw text-primary fa-check\"></i>
                                  <span>";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DELETE"), "html", null, true);
                yield "</span>
                                </div>
                            </div>
                        </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            yield "                ";
        }
        // line 144
        yield "            </ul>
            ";
        // line 145
        if (CoreExtension::inFilter(($context["fieldControls"] ?? null), ["bottom", "both"])) {
            // line 146
            yield "            <div class=\"collection-actions\">
                ";
            // line 147
            if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 148
                yield "                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            ";
                // line 149
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 149) || ($context["isDisabledToggleable"] ?? null))) {
                    yield "disabled=\"disabled\"";
                }
                yield "><i class=\"fa fa-chevron-circle-down\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
                yield "</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            ";
                // line 151
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 151) || ($context["isDisabledToggleable"] ?? null))) {
                    yield "disabled=\"disabled\"";
                }
                yield "><i class=\"fa fa-chevron-circle-right\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
                yield "</button>
                ";
            }
            // line 153
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 154
                yield "                    <button class=\"button";
                yield (((($tmp =  !Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" hidden") : (""));
                yield "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby", [], "any", false, false, false, 154), "html", null, true);
                yield "\" data-action-sort-dir=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby_dir", [], "any", true, true, false, 154)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby_dir", [], "any", false, false, false, 154), "asc")) : ("asc")), "html", null, true);
                yield "\"
                            ";
                // line 155
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 155) || ($context["isDisabledToggleable"] ?? null))) {
                    yield "disabled=\"disabled\"";
                }
                yield "><i class=\"fa fa-sort-amount-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby_dir", [], "any", true, true, false, 155)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby_dir", [], "any", false, false, false, 155), "asc")) : ("asc")), "html", null, true);
                yield "\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ($context["btnSortLabel"] ?? null)), "html", null, true);
                yield " '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sortby", [], "any", false, false, false, 155), "html", null, true);
                yield "'</button>
                ";
            }
            // line 157
            yield "                <button class=\"button\" type=\"button\" data-action=\"add\"
                        data-action-add=\"";
            // line 158
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placement", [], "any", false, false, false, 158) === "position")) ? ("bottom") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placement", [], "any", true, true, false, 158)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placement", [], "any", false, false, false, 158), "bottom")) : ("bottom")), "html", null, true)));
            yield "\"
                        ";
            // line 159
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 159) || ($context["isDisabledToggleable"] ?? null))) {
                yield "disabled=\"disabled\"";
            }
            // line 160
            yield "                ><i class=\"fa fa-plus\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ($context["btnLabel"] ?? null)), "html", null, true);
            yield "</button>
            </div>
            ";
        }
        // line 163
        yield "
            ";
        // line 164
        $context["template"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 165
            $context["item_name"] = (((($tmp = ($context["name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($context["name"] ?? null) . ".*")) : ("*"));
            // line 166
            yield "<li data-collection-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["item_name"] ?? null), "html", null, true);
            yield "\">
                    ";
            // line 167
            if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "sort", [], "any", false, false, false, 167) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 168
                yield "                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                    ";
            }
            // line 170
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 171));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["child_name"] => $context["child"]) {
                    // line 172
                    $context["child"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->prepareFormField($context, $context["child"], $context["child_name"], ($context["item_name"] ?? null));
                    // line 173
                    yield "                            ";
                    if ((($tmp = $context["child"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 174
                        yield "                                ";
                        $context["child"] = Twig\Extension\CoreExtension::merge($context["child"], ["_list_index" => ($context["item_name"] ?? null)]);
                        // line 175
                        yield "                                ";
                        $context["default_layout"] = "text";
                        // line 176
                        yield "                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", false, false, false, 176) == "key") || (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "key", [], "any", false, false, false, 176) == true))) {
                            // line 177
                            yield "                                    ";
                            // line 178
                            yield "                                    ";
                            $context["default_layout"] = "key";
                            // line 179
                            yield "                                ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 179) == "value")) {
                            // line 180
                            yield "                                    ";
                            // line 181
                            yield "                                    ";
                            $context["child"] = Twig\Extension\CoreExtension::merge($context["child"], ["name" => ($context["item_name"] ?? null)]);
                            // line 182
                            yield "                                ";
                        }
                        // line 183
                        yield "
                                ";
                        // line 184
                        $context["field_templates"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", false, false, false, 184), ($context["field_layout"] ?? null), ($context["default_layout"] ?? null));
                        // line 185
                        yield "                                ";
                        yield from $this->load(($context["field_templates"] ?? null), 185)->unwrap()->yield(CoreExtension::merge($context, ["field" => $context["child"], "value" => null]));
                        // line 186
                        yield "                            ";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['child_name'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                yield "                        <div class=\"item-actions\">
                            ";
                // line 189
                if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 190
                    yield "                                <i class=\"fa fa-chevron-circle-down\" data-action=\"collapse\"></i>
                                <br />
                            ";
                }
                // line 193
                yield "                            <i class=\"fa fa-trash-o\" data-action=\"confirm\"></i>
                            <div class=\"list-confirm-deletion button danger hidden\"  data-action=\"delete\">
                              <i class=\"fa fa-fw text-primary fa-check\"></i>
                              <span>";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DELETE"), "html", null, true);
                yield "</span>
                            </div>
                        </div>";
            }
            // line 200
            yield "</li>
            ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        yield "            <div style=\"display: none;\" data-collection-template=\"new\"
                 data-collection-template-html=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->regexReplace(($context["template"] ?? null), "/([ 
]+)/", " "), "html_attr");
        yield "\"></div>
            <div style=\"display: none;\" data-collection-config=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\"></div>
        </div>
    </div>
";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "        data-grav-field=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 53), "html", null, true);
        yield "\"
        data-grav-disabled=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["toggleableChecked"] ?? null), "html", null, true);
        yield "\"
        data-grav-default=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 55)), "html_attr");
        yield "\"
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/list/list.html.twig";
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
        return array (  756 => 55,  752 => 54,  747 => 53,  740 => 52,  731 => 204,  726 => 203,  723 => 202,  718 => 200,  712 => 196,  707 => 193,  702 => 190,  700 => 189,  697 => 188,  682 => 186,  679 => 185,  677 => 184,  674 => 183,  671 => 182,  668 => 181,  666 => 180,  663 => 179,  660 => 178,  658 => 177,  655 => 176,  652 => 175,  649 => 174,  646 => 173,  644 => 172,  627 => 171,  625 => 170,  621 => 168,  619 => 167,  614 => 166,  612 => 165,  610 => 164,  607 => 163,  600 => 160,  596 => 159,  592 => 158,  589 => 157,  576 => 155,  567 => 154,  564 => 153,  555 => 151,  546 => 149,  543 => 148,  541 => 147,  538 => 146,  536 => 145,  533 => 144,  530 => 143,  511 => 138,  506 => 135,  497 => 132,  495 => 131,  492 => 130,  478 => 129,  475 => 127,  472 => 125,  469 => 124,  466 => 123,  463 => 122,  460 => 121,  457 => 120,  455 => 119,  452 => 118,  449 => 117,  446 => 116,  443 => 115,  440 => 114,  438 => 113,  435 => 112,  432 => 111,  429 => 110,  426 => 109,  424 => 108,  421 => 107,  418 => 106,  415 => 105,  413 => 104,  410 => 103,  407 => 102,  404 => 101,  401 => 100,  399 => 99,  382 => 98,  374 => 96,  370 => 95,  366 => 94,  361 => 93,  358 => 92,  340 => 91,  337 => 90,  335 => 89,  332 => 88,  328 => 87,  326 => 86,  315 => 85,  308 => 82,  304 => 81,  300 => 80,  297 => 79,  284 => 77,  275 => 76,  272 => 75,  263 => 73,  254 => 71,  251 => 70,  249 => 69,  246 => 68,  244 => 67,  241 => 66,  234 => 65,  227 => 64,  222 => 62,  217 => 61,  215 => 60,  211 => 59,  207 => 57,  205 => 52,  199 => 51,  196 => 50,  192 => 48,  186 => 46,  180 => 44,  178 => 43,  173 => 42,  170 => 41,  164 => 38,  159 => 37,  156 => 36,  149 => 33,  143 => 31,  140 => 30,  132 => 28,  124 => 26,  121 => 25,  119 => 24,  114 => 23,  111 => 22,  105 => 19,  102 => 18,  98 => 17,  93 => 16,  89 => 15,  85 => 14,  79 => 12,  77 => 11,  70 => 10,  63 => 9,  58 => 1,  56 => 7,  54 => 6,  52 => 5,  50 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/list/list.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/list/list.html.twig");
    }
}
