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

/* flex-objects/types/pages/list/columns.html.twig */
class __TwigTemplate_69b5f1db0a81722ca354b693b563b268 extends Template
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
            'directory' => [$this, 'block_directory'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "
";
        // line 13
        $macros["͜macros"] = $this->macros["͜macros"] = $this;
        // line 14
        yield "
";
        // line 15
        yield from $this->unwrap()->yieldBlock('directory', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_directory(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "    ";
        $context["filters"] = (($_v0 = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonDecodeFilter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->base64DecodeFilter((($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "request", [], "any", false, false, false, 16), "getCookieParams", [], "method", false, false, false, 16)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["grav-admin-flexpages"] ?? null) : null)), true)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["filters"] ?? null) : null);
        // line 17
        yield "    ";
        $context["hidePanel"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) == 0) || ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) == 1) && (($_v2 = ($context["filters"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["filters[search]"] ?? null) : null)));
        // line 18
        yield "    <div id=\"pages-content-wrapper\">
        <div id=\"pages-filters\">
            <form>
                <div class=\"filters-bar\">
                    <input type=\"text\"
                        placeholder=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.SEARCH_PLACEHOLDER"), "html", null, true);
        yield "\"
                        name=\"filters[search]\"
                        value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["filters"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["filters[search]"] ?? null) : null), "html", null, true);
        yield "\" />
                    <a href=\"#\" class=\"adv-options button-border ";
        // line 26
        yield (((($tmp = ($context["hidePanel"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("close") : ("open"));
        yield "\">
                        ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.ADVANCED_OPTIONS"), "html", null, true);
        yield "
                    </a>
                </div>

                <div class=\"filters-advanced ";
        // line 31
        yield (((($tmp = ($context["hidePanel"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hide") : (""));
        yield "\">
                    <fieldset>
                        <legend>
                            ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.FILTER.PAGE_ATTRIBUTES"), "html", null, true);
        yield "
                        </legend>
                        ";
        // line 36
        yield $macros["͜macros"]->getTemplateForMacro("macro_toggle", $context, 36, $this->getSourceContext())->macro_toggle(...["filters.routable", "Routable", ($context["filters"] ?? null)]);
        yield "
                        ";
        // line 37
        yield $macros["͜macros"]->getTemplateForMacro("macro_toggle", $context, 37, $this->getSourceContext())->macro_toggle(...["filters.module", "Module", ($context["filters"] ?? null)]);
        yield "
                        ";
        // line 38
        yield $macros["͜macros"]->getTemplateForMacro("macro_toggle", $context, 38, $this->getSourceContext())->macro_toggle(...["filters.visible", "Visible", ($context["filters"] ?? null)]);
        yield "
                        ";
        // line 39
        yield $macros["͜macros"]->getTemplateForMacro("macro_toggle", $context, 39, $this->getSourceContext())->macro_toggle(...["filters.published", "Published", ($context["filters"] ?? null)]);
        yield "
                        ";
        // line 40
        yield $macros["͜macros"]->getTemplateForMacro("macro_toggle", $context, 40, $this->getSourceContext())->macro_toggle(...["filters.translated", "Translated", ($context["filters"] ?? null)]);
        yield "
                        ";
        // line 41
        yield $macros["͜macros"]->getTemplateForMacro("macro_toggle", $context, 41, $this->getSourceContext())->macro_toggle(...["filters.folder", "Empty Folder", ($context["filters"] ?? null)]);
        yield "
                    </fieldset>

                    ";
        // line 44
        $context["selected"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), (($_v4 = ($context["filters"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["filters[page_type]"] ?? null) : null), ",");
        // line 45
        yield "                    ";
        $context["page_types"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "types", [null], "method", false, false, false, 45);
        yield " ";
        // line 46
        yield "                    <fieldset>
                        <legend>
                            ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.FILTER.PAGE_TYPES"), "html", null, true);
        yield "
                        </legend>
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["page_types"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["title"]) {
            // line 51
            yield "                            <span class=\"checkboxes toggleable\">
                                <input type=\"checkbox\" id=\"filters.type.";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "\" name=\"filters[page_type][]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "\" ";
            if (CoreExtension::inFilter($context["name"], ($context["selected"] ?? null))) {
                yield "checked";
            }
            yield ">
                                <label for=\"filters.type.";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true);
            yield "</label>
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['title'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                    </fieldset>

                    ";
        // line 58
        $context["module_types"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "modularTypes", [null], "method", false, false, false, 58);
        yield " ";
        // line 59
        yield "                    ";
        if ((($tmp = ($context["module_types"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                        <fieldset>
                            <legend>
                                ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.FILTER.MODULAR_TYPES"), "html", null, true);
            yield "
                            </legend>
                            ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["module_types"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 65
                yield "                                <span class=\"checkboxes toggleable\">
                                    <input type=\"checkbox\" id=\"filters.type.";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "\" name=\"filters[page_type][]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "\" ";
                if (CoreExtension::inFilter($context["name"], ($context["selected"] ?? null))) {
                    yield "checked";
                }
                yield ">
                                    <label for=\"filters.type.";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true);
                yield "</label>
                                </span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['title'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "                        </fieldset>
                    ";
        }
        // line 72
        yield "
                    <a href=\"#\" class=\"apply-filters button-border\" data-filters=\"apply\">
                        ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.APPLY_FILTERS"), "html", null, true);
        yield "
                    </a>
                    <a href=\"#\" class=\"reset-defaults button-border\" data-filters=\"reset\">
                        ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ACTION.RESET_FILTERS"), "html", null, true);
        yield "
                    </a>
                </div>
            </form>
        </div>

        <div class=\"grav-loading\">
            <div class=\"grav-loader\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.LOADING"), "html", null, true);
        yield "</div>
        </div>
        <div id=\"pages-columns\" style=\"margin-top: -1rem;\"
             data-lang-url=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 87), "getCurrentRoute", [], "any", false, false, false, 87), "withoutParams", [], "any", false, false, false, 87), "withExtension", [""], "method", false, false, false, 87), "withLanguage", ["%LANG%"], "method", false, false, false, 87), "toString", [true], "method", false, false, false, 87), "html", null, true);
        yield "\"></div>

    </div>

    ";
        // line 92
        yield "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
        ";
        // line 93
        yield from $this->load("partials/blueprints-new.html.twig", 93)->unwrap()->yield(CoreExtension::merge($context, ["blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", ["admin/pages/new"], "method", false, false, false, 93), "data" => ($context["obj_data"] ?? null), "form_id" => "new-page"]));
        // line 94
        yield "    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        ";
        // line 97
        yield from $this->load("partials/blueprints-new-folder.html.twig", 97)->unwrap()->yield(CoreExtension::merge($context, ["blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", ["admin/pages/new_folder"], "method", false, false, false, 97), "data" => ($context["obj_data"] ?? null), "form_id" => "new-folder"]));
        // line 98
        yield "    </div>

    <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
        ";
        // line 101
        yield from $this->load("partials/blueprints-new.html.twig", 101)->unwrap()->yield(CoreExtension::merge($context, ["blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", ["admin/pages/modular_new"], "method", false, false, false, 101), "data" => ($context["obj_data"] ?? null), "form_id" => "new-module"]));
        // line 102
        yield "    </div>

    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 104), "admin", [], "any", false, false, false, 104), "add_modals", [], "any", false, false, false, 104));
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
        foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
            // line 105
            yield "    <div class=\"remodal ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["add_modal"], "modal_classes", [], "any", false, false, false, 105), ""), "html", null, true);
            yield "\" data-remodal-id=\"modal-add_modal-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
        ";
            // line 106
            yield from $this->load($this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["add_modal"], "template", [], "any", false, false, false, 106), "partials/blueprints-new.html.twig"), 106)->unwrap()->yield(CoreExtension::merge($context, Twig\Extension\CoreExtension::merge(["blueprints" => CoreExtension::getAttribute($this->env, $this->source,             // line 107
($context["admin"] ?? null), "blueprints", [CoreExtension::getAttribute($this->env, $this->source, $context["add_modal"], "blueprint", [], "any", false, false, false, 107)], "method", false, false, false, 107), "data" =>             // line 108
($context["obj_data"] ?? null), "form_id" => "add-modal"], $this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(CoreExtension::getAttribute($this->env, $this->source,             // line 110
$context["add_modal"], "with", [], "any", false, false, false, 110), []))));
            // line 111
            yield "    </div>
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
        unset($context['_seq'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "
    <div class=\"remodal\" data-remodal-id=\"modal-page-copy\" data-remodal-options=\"hashTracking: false\">
      ";
        // line 115
        yield from $this->load("partials/blueprints-copy.html.twig", 115)->unwrap()->yield(CoreExtension::merge($context, ["blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", ["admin/pages/copy"], "method", false, false, false, 115), "data" => ($context["obj_data"] ?? null), "form_id" => "copy"]));
        // line 116
        yield "    </div>

    <div class=\"remodal parents-container\" data-remodal-id=\"parents\"
         data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>Parents</h1>
            <div class=\"grav-loading\">
                <div class=\"grav-loader\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.LOADING"), "html", null, true);
        yield "</div>
            </div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">
                    <i class=\"fa fa-fw fa-close\"></i> ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        yield "</a>
                <a class=\"button\" data-parents-select href=\"#\">
                    <i class=\"fa fa-fw fa-check\"></i> ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        yield "</a>
            </div>
        </form>
    </div>

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        yield "</h1>
            <p class=\"bigger\">
                ";
        // line 139
        if ((($tmp = ($context["context"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
            yield "                    <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "title", [], "any", false, false, false, 140), "html", null, true);
            yield "</strong>
                ";
        }
        // line 142
        yield "            </p>
            <p class=\"bigger\">
                ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        yield "
            </p>
            <br>
            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i
                            class=\"fa fa-fw fa-close\"></i> ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        yield "</button>
                <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i
                            class=\"fa fa-fw fa-check\"></i> ";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        yield "</a>
            </div>
        </form>
    </div>
";
        yield from [];
    }

    // line 1
    public function macro_toggle($id = null, $title = null, $filters = null, $name = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "id" => $id,
            "title" => $title,
            "filters" => $filters,
            "name" => $name,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "    ";
            $context["name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter(($context["id"] ?? null));
            // line 3
            yield "    ";
            $context["filter"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), ($context["name"] ?? null), [], "array", true, true, false, 3) &&  !(null === (($_v5 = ($context["filters"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["name"] ?? null)] ?? null) : null)))) ? ((($_v6 = ($context["filters"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[($context["name"] ?? null)] ?? null) : null)) : (null));
            // line 4
            yield "    ";
            $context["value"] = (((null === ($context["filter"] ?? null))) ? (0) : (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->intFilter((!($context["filter"] ?? null))) + 1)));
            // line 5
            yield "    ";
            $context["classes"] = ["status-unchecked", "status-checked", "status-indeterminate"];
            // line 6
            yield "
    <span class=\"checkboxes indeterminate toggleable ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = ($context["classes"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["value"] ?? null)] ?? null) : null), "html", null, true);
            yield "\" data-_check-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\">
        <input type=\"checkbox\" id=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" indeterminate=\"";
            yield (((($context["value"] ?? null) == 2)) ? ("true") : ("false"));
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filter"] ?? null), "html", null, true);
            yield "\" ";
            if ((($context["value"] ?? null) == 1)) {
                yield "checked";
            }
            yield ">
        <label for=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
    </span>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/types/pages/list/columns.html.twig";
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
        return array (  456 => 9,  442 => 8,  436 => 7,  433 => 6,  430 => 5,  427 => 4,  424 => 3,  421 => 2,  406 => 1,  396 => 151,  391 => 149,  383 => 144,  379 => 142,  371 => 140,  369 => 139,  364 => 137,  354 => 130,  349 => 128,  341 => 123,  332 => 116,  330 => 115,  326 => 113,  311 => 111,  309 => 110,  308 => 108,  307 => 107,  306 => 106,  299 => 105,  282 => 104,  278 => 102,  276 => 101,  271 => 98,  269 => 97,  264 => 94,  262 => 93,  259 => 92,  252 => 87,  246 => 84,  236 => 77,  230 => 74,  226 => 72,  222 => 70,  211 => 67,  201 => 66,  198 => 65,  194 => 64,  189 => 62,  185 => 60,  182 => 59,  179 => 58,  175 => 56,  164 => 53,  154 => 52,  151 => 51,  147 => 50,  142 => 48,  138 => 46,  134 => 45,  132 => 44,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  101 => 34,  95 => 31,  88 => 27,  84 => 26,  80 => 25,  75 => 23,  68 => 18,  65 => 17,  62 => 16,  51 => 15,  48 => 14,  46 => 13,  43 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/types/pages/list/columns.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/list/columns.html.twig");
    }
}
