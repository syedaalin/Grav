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

/* flex-objects/types/pages/edit.html.twig */
class __TwigTemplate_37061eeec69be97a7b7a634054f5ceb5 extends Template
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
            'body' => [$this, 'block_body'],
            'back_button' => [$this, 'block_back_button'],
            'preview_button' => [$this, 'block_preview_button'],
            'delete_button' => [$this, 'block_delete_button'],
            'extra_buttons' => [$this, 'block_extra_buttons'],
            'save_button' => [$this, 'block_save_button'],
            'content_top' => [$this, 'block_content_top'],
            'topbar' => [$this, 'block_topbar'],
            'edit' => [$this, 'block_edit'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "flex-objects/types/default/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["expert"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "authorize", ["admin.super"], "method", false, false, false, 4) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "session", [], "any", false, false, false, 4), "expert", [], "any", false, false, false, 4) != "0"));
        // line 5
        if ((($context["expert"] ?? null) ||  !array_key_exists("form", $context))) {
            // line 6
            $context["form"] = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "form", [(((($tmp = ($context["expert"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("raw") : (""))], "method", false, false, false, 6);
            // line 7
            $context["object"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 7);
        }
        // line 10
        $context["title"] = (((array_key_exists("title", $context) &&  !(null === $context["title"]))) ? ($context["title"]) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getValue", ["header.title"], "method", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getValue", ["header.title"], "method", false, false, false, 10)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getValue", ["header.title"], "method", false, false, false, 10)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", false, false, false, 10)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", false, false, false, 10)) : (($context["key"] ?? null)))))));
        // line 11
        $context["parent"] = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "parent", [], "any", false, false, false, 11);
        // line 12
        $context["can_read"] = (((array_key_exists("can_read", $context) &&  !(null === $context["can_read"]))) ? ($context["can_read"]) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->boolFilter((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", ["read", "admin", ($context["user"] ?? null)], "method", false, false, false, 12)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", ["create", "admin", ($context["user"] ?? null)], "method", false, false, false, 12))))));
        // line 13
        $context["can_copy"] = (((array_key_exists("can_copy", $context) &&  !(null === $context["can_copy"]))) ? ($context["can_copy"]) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "exists", [], "any", false, false, false, 13) && CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "isAuthorized", ["create", "admin", ($context["user"] ?? null)], "method", false, false, false, 13))));
        // line 14
        $context["can_create"] = (((array_key_exists("can_create", $context) &&  !(null === $context["can_create"]))) ? ($context["can_create"]) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 14) && CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", ["create", "admin", ($context["user"] ?? null)], "method", false, false, false, 14))));
        // line 15
        $context["can_save"] = (((array_key_exists("can_save", $context) &&  !(null === $context["can_save"]))) ? ($context["can_save"]) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->boolFilter((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", ["update", "admin", ($context["user"] ?? null)], "method", false, false, false, 15)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", ["create", "admin", ($context["user"] ?? null)], "method", false, false, false, 15))))));
        // line 16
        $context["can_move"] = ((((array_key_exists("can_move", $context) &&  !(null === $context["can_move"]))) ? ($context["can_move"]) : (($context["can_save"] ?? null))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "any", false, false, false, 16), "schema", [], "any", false, false, false, 16), "property", ["route"], "method", false, false, false, 16), "type", [], "any", false, false, false, 16) === "parents"));
        // line 17
        $context["can_translate"] = (((array_key_exists("can_translate", $context) &&  !(null === $context["can_translate"]))) ? ($context["can_translate"]) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "multilang", [], "any", false, false, false, 17) && CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "hasFlexFeature", ["page-translate"], "method", false, false, false, 17)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 17))));
        // line 22
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 1
        $this->parent = $this->load("flex-objects/types/default/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "    ";
        $context["current_route"] = ("/" . CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "getRoute", [1], "method", false, false, false, 25));
        // line 26
        yield "
    ";
        // line 27
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "    ";
            $context["child"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "children", [], "any", false, false, false, 28), "first", [], "any", false, false, false, 28);
            // line 29
            yield "    ";
            $context["prev"] = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "prevSibling", [], "any", false, false, false, 29);
            // line 30
            yield "    ";
            $context["next"] = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "nextSibling", [], "any", false, false, false, 30);
            // line 31
            yield "
    ";
            // line 32
            $context["parent_url"] = (((($context["parent"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "root", [], "any", false, false, false, 32))) ? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["back_route"] ?? null))) : (""));
            // line 33
            yield "    ";
            $context["child_url"] = (((($context["can_read"] ?? null) && ($context["child"] ?? null))) ? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(((($context["current_route"] ?? null) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "slug", [], "any", false, false, false, 33)))) : (""));
            // line 34
            yield "    ";
            $context["prev_url"] = (((($context["can_read"] ?? null) && ($context["prev"] ?? null))) ? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(((($context["back_route"] ?? null) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["prev"] ?? null), "slug", [], "any", false, false, false, 34)))) : (""));
            // line 35
            yield "    ";
            $context["next_url"] = (((($context["can_read"] ?? null) && ($context["next"] ?? null))) ? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(((($context["back_route"] ?? null) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["next"] ?? null), "slug", [], "any", false, false, false, 35)))) : (""));
            // line 36
            yield "    ";
        }
        // line 37
        yield "    ";
        $context["back_url"] = (((array_key_exists("back_url", $context) &&  !(null === $context["back_url"]))) ? ($context["back_url"]) : ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(CoreExtension::getAttribute($this->env, $this->source, ($context["flex"] ?? null), "adminRoute", [CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "getFlexType", [], "method", false, false, false, 37)], "method", false, false, false, 37))));
        // line 38
        yield "
    ";
        // line 39
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_back_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "    ";
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), "flex-objects/types/pages/buttons/back.html.twig"], 43)->unwrap()->yield(CoreExtension::merge($context, ["back_url" =>         // line 44
($context["back_url"] ?? null)]));
        // line 45
        yield "    ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "    ";
            yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-prev.html.twig"), "flex-objects/types/pages/buttons/nav-prev.html.twig"], 46)->unwrap()->yield(CoreExtension::merge($context, ["prev_url" =>             // line 47
($context["prev_url"] ?? null), "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["prev"] ?? null), "route", [], "any", false, false, false, 47)]));
            // line 48
            yield "    ";
            yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-parent.html.twig"), "flex-objects/types/pages/buttons/nav-parent.html.twig"], 48)->unwrap()->yield(CoreExtension::merge($context, ["parent_url" =>             // line 49
($context["parent_url"] ?? null), "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "route", [], "any", false, false, false, 49)]));
            // line 50
            yield "    ";
            yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-child.html.twig"), "flex-objects/types/pages/buttons/nav-child.html.twig"], 50)->unwrap()->yield(CoreExtension::merge($context, ["child_url" =>             // line 51
($context["child_url"] ?? null), "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "route", [], "any", false, false, false, 51)]));
            // line 52
            yield "    ";
            yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-next.html.twig"), "flex-objects/types/pages/buttons/nav-next.html.twig"], 52)->unwrap()->yield(CoreExtension::merge($context, ["next_url" =>             // line 53
($context["next_url"] ?? null), "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["next"] ?? null), "route", [], "any", false, false, false, 53)]));
            // line 54
            yield "    ";
        }
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_preview_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 58) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 58))) {
            // line 59
            yield "    ";
            yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/preview.html.twig"), "flex-objects/types/pages/buttons/preview.html.twig"], 59)->unwrap()->yield($context);
            // line 60
            yield "    ";
        }
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "    ";
        // line 65
        yield "    ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "    ";
            yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/delete.html.twig"), "flex-objects/types/pages/buttons/delete.html.twig"], 66)->unwrap()->yield($context);
            // line 67
            yield "    ";
        }
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_buttons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 71) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "method", false, false, false, 71))) {
            // line 72
            yield "    ";
            if ((($tmp = ($context["can_create"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "    ";
                yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/add.html.twig"), "flex-objects/types/pages/buttons/add.html.twig"], 73)->unwrap()->yield($context);
                // line 74
                yield "    ";
            }
            // line 75
            yield "    ";
            if ((($tmp = ($context["can_copy"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "    ";
                yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/copy.html.twig"), "flex-objects/types/pages/buttons/copy.html.twig"], 76)->unwrap()->yield($context);
                // line 77
                yield "    ";
            }
            // line 78
            yield "    ";
            if ((($tmp = ($context["can_move"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 79
                yield "    ";
                yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/move.html.twig"), "flex-objects/types/pages/buttons/move.html.twig"], 79)->unwrap()->yield($context);
                // line 80
                yield "    ";
            }
            // line 81
            yield "    ";
        }
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_save_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "    ";
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/save.html.twig"), "flex-objects/types/pages/buttons/save.html.twig"], 85)->unwrap()->yield($context);
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "    ";
        if ((($context["allowed"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "authorize", ["admin.super"], "method", false, false, false, 89))) {
            // line 90
            yield "    <div class=\"alert notice\">
        ";
            // line 91
            $context["save_location"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getStorageFolder", [], "method", false, false, false, 91)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getStorageFolder", [], "method", false, false, false, 91)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "getStorageFolder", [], "method", false, false, false, 91)));
            // line 92
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            yield ": <b>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
            yield " ";
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("[" . Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.NEW"))) . "]"), "html", null, true)) : (""));
            yield "</b> (type: <b>";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getValue", ["name"], "method", false, false, false, 92)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getValue", ["name"], "method", false, false, false, 92), "html", null, true)) : ("default"));
            yield "</b>)
    </div>
    ";
        }
        // line 95
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 95) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "flash", [], "any", false, false, false, 95), "exists", [], "any", false, false, false, 95))) {
            // line 96
            yield "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.EDITING_DRAFT"), "html", null, true);
            yield " <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.RESET"), "html", null, true);
            yield "</button>
        </div>
    ";
        }
        // line 100
        yield "    ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.NOT_CREATED_YET"), "html", null, true);
            yield "
        </div>
    ";
        } elseif ((($tmp =         // line 104
($context["can_translate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "        ";
            $context["is_default"] = (($context["language"] ?? null) === ($context["default_language"] ?? null));
            // line 106
            yield "        ";
            if ((($context["is_default"] ?? null) && CoreExtension::inFilter(($context["default_language"] ?? null), ($context["object_languages"] ?? null)))) {
                // line 107
                yield "            ";
                if (( !($context["translate_include_default"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "property", ["lang"], "method", false, false, false, 107))) {
                    // line 108
                    yield "            ";
                    // line 109
                    yield "            <div class=\"alert secondary-accent\">
                ";
                    // line 110
                    $context["overrideLanguage"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true, false, 110) &&  !(null === (($_v0 = ($context["all_languages"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["object_language"] ?? null)] ?? null) : null)))) ? ((($_v1 = ($context["all_languages"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["object_language"] ?? null)] ?? null) : null)) : (($context["object_language"] ?? null)));
                    // line 111
                    yield "                ";
                    yield $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_OVERRIDE", ($context["overrideLanguage"] ?? null), null);
                    yield "
                ";
                    // line 112
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "hasTranslation", ["", false], "method", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT")) : (""));
                    yield "
            </div>
            ";
                } elseif ((($tmp =                 // line 114
($context["translate_include_default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 115
                    yield "                ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "property", ["lang"], "method", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 116
                        yield "                    <div class=\"alert secondary-accent\">
                        ";
                        // line 117
                        yield $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_DEFAULT");
                        yield "
                    </div>
                ";
                    } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 119
($context["object"] ?? null), "hasTranslation", ["", false], "method", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 120
                        yield "                    <div class=\"alert secondary-accent\">
                        ";
                        // line 121
                        yield $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT");
                        yield "
                    </div>
                ";
                    }
                    // line 124
                    yield "            ";
                }
                // line 125
                yield "        ";
            } elseif ((($tmp =  !($context["has_translation"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "        <div class=\"alert warning\">
            ";
                // line 127
                $context["overrideLanguage"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array", true, true, false, 127) &&  !(null === (($_v2 = ($context["all_languages"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["language"] ?? null)] ?? null) : null)))) ? ((($_v3 = ($context["all_languages"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["language"] ?? null)] ?? null) : null)) : (($context["object_language"] ?? null)));
                // line 128
                yield "            ";
                yield $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.NOT_TRANSLATED_YET", ($context["overrideLanguage"] ?? null), null);
                yield "
            ";
                // line 129
                if ((($context["language"] ?? null) == ($context["object_language"] ?? null))) {
                    // line 130
                    yield "                ";
                    yield $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.NO_FALLBACK_FOUND");
                    yield "
            ";
                } else {
                    // line 132
                    yield "                ";
                    $context["overrideLanguage"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true, false, 132) &&  !(null === (($_v4 = ($context["all_languages"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[($context["object_language"] ?? null)] ?? null) : null)))) ? ((($_v5 = ($context["all_languages"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["object_language"] ?? null)] ?? null) : null)) : (($context["object_language"] ?? null)));
                    // line 133
                    yield "                ";
                    yield $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.FALLING_BACK", ($context["overrideLanguage"] ?? null), null);
                    yield "
            ";
                }
                // line 135
                yield "        </div>
        ";
            }
            // line 137
            yield "    ";
        }
        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_topbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 141
        yield "    ";
        if ((($tmp = ($context["can_translate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 142
            yield "        <div id=\"admin-lang-toggle\" class=\"button-group\">
            <button type=\"button\" class=\"button disabled\">
                <i class=\"fa fa-flag-o\"></i>
                ";
            // line 145
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true, false, 145) &&  !(null === (($_v6 = ($context["all_languages"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[($context["object_language"] ?? null)] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = ($context["all_languages"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["object_language"] ?? null)] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["object_language"] ?? null), "html", null, true)));
            yield "
            </button>
            ";
            // line 147
            if ((count(($context["object_languages"] ?? null)) > $this->extensions['Grav\Common\Twig\Extension\GravExtension']->intFilter(CoreExtension::inFilter(($context["object_language"] ?? null), ($context["object_languages"] ?? null))))) {
                // line 148
                yield "                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu language-switcher\">
                ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["object_languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang_code"]) {
                    // line 153
                    yield "                    ";
                    if (($context["lang_code"] != ($context["object_language"] ?? null))) {
                        // line 154
                        yield "                    <li>
                        <a href=\"";
                        // line 155
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "getRoute", [1], "method", false, false, false, 155), $context["lang_code"]), "html", null, true);
                        yield "\">";
                        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["all_languages"] ?? null), $context["lang_code"], [], "array", true, true, false, 155) &&  !(null === (($_v8 = ($context["all_languages"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[$context["lang_code"]] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = ($context["all_languages"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[$context["lang_code"]] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["lang_code"], "html", null, true)));
                        yield "</a>
                    </li>
                    ";
                    }
                    // line 158
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['lang_code'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                yield "                </ul>
            ";
            }
            // line 161
            yield "        </div>
    ";
        }
        // line 163
        yield "
    ";
        // line 164
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "authorize", ["admin.super"], "method", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 165
            yield "    <form id=\"admin-mode-toggle\">
        ";
            // line 166
            $context["normalText"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.NORMAL");
            // line 167
            yield "        ";
            $context["expertText"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.EXPERT");
            // line 168
            yield "        ";
            $context["maxLen"] = max([Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["normalText"] ?? null)), Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["expertText"] ?? null))]);
            // line 169
            yield "        ";
            $context["normalText"] = $macros["macro"]->getTemplateForMacro("macro_spanToggle", $context, 169, $this->getSourceContext())->macro_spanToggle(...[($context["normalText"] ?? null), ($context["maxLen"] ?? null)]);
            // line 170
            yield "        ";
            $context["expertText"] = $macros["macro"]->getTemplateForMacro("macro_spanToggle", $context, 170, $this->getSourceContext())->macro_spanToggle(...[($context["expertText"] ?? null), ($context["maxLen"] ?? null)]);
            // line 171
            yield "
        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "withGravParam", ["mode", "normal"], "method", false, false, false, 173), "toString", [true], "method", false, false, false, 173), "html", null, true);
            yield "\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
            if ((($context["expert"] ?? null) == "0")) {
                yield " checked=\"checked\"";
            }
            yield ">
            <label for=\"normal\">";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["normalText"] ?? null), "html", null, true);
            yield "</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "withGravParam", ["mode", "expert"], "method", false, false, false, 175), "toString", [true], "method", false, false, false, 175), "html", null, true);
            yield "\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
            if ((($context["expert"] ?? null) == "1")) {
                yield " checked=\"checked\"";
            }
            yield ">
            <label for=\"expert\">";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["expertText"] ?? null), "html", null, true);
            yield "</label>
            <a></a>
        </div>
    </form>
    ";
        }
        yield from [];
    }

    // line 183
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_edit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 184
        yield "    ";
        yield from $this->load("partials/blueprints.html.twig", 184)->unwrap()->yield(CoreExtension::merge($context, ["context" => ($context["object"] ?? null), "data" => ($context["object"] ?? null), "blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "any", false, false, false, 184)]));
        yield from [];
    }

    // line 187
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 188
        yield "    ";
        yield from $this->yieldParentBlock("content", $context, $blocks);
        yield "

    ";
        // line 190
        yield from $this->load("partials/modal-changes-detected.html.twig", 190)->unwrap()->yield($context);
        // line 191
        yield "
    ";
        // line 192
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 193
            yield "        ";
            $context["modal_data"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->dataFunc(["route" => ("/" . CoreExtension::getAttribute($this->env, $this->source,             // line 194
($context["object"] ?? null), "key", [], "any", false, false, false, 194)), "name" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 195
($context["object"] ?? null), "header", [], "any", false, true, false, 195), "child_type", [], "any", true, true, false, 195) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "header", [], "any", false, false, false, 195), "child_type", [], "any", false, false, false, 195)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "header", [], "any", false, false, false, 195), "child_type", [], "any", false, false, false, 195)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "blueprint", [], "any", false, true, false, 195), "child_type", [], "any", true, true, false, 195) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "blueprint", [], "any", false, false, false, 195), "child_type", [], "any", false, false, false, 195)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "blueprint", [], "any", false, false, false, 195), "child_type", [], "any", false, false, false, 195)) : ("default"))))]);
            // line 197
            yield "
        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 199
            yield from $this->load("partials/blueprints-new.html.twig", 199)->unwrap()->yield(CoreExtension::merge($context, ["form" => null, "blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", ["admin/pages/new"], "method", false, false, false, 199), "data" => ($context["modal_data"] ?? null), "form_id" => "new-page"]));
            // line 200
            yield "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 203
            yield from $this->load("partials/blueprints-new-folder.html.twig", 203)->unwrap()->yield(CoreExtension::merge($context, ["form" => null, "blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", ["admin/pages/new_folder"], "method", false, false, false, 203), "data" => ($context["modal_data"] ?? null), "form_id" => "new-folder"]));
            // line 204
            yield "        </div>

        <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 207
            yield from $this->load("partials/blueprints-new.html.twig", 207)->unwrap()->yield(CoreExtension::merge($context, ["form" => null, "blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", ["admin/pages/modular_new"], "method", false, false, false, 207), "data" => ($context["modal_data"] ?? null), "form_id" => "new-module"]));
            // line 208
            yield "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-page-copy\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 211
            yield from $this->load("partials/blueprints-copy.html.twig", 211)->unwrap()->yield(CoreExtension::merge($context, ["blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", ["admin/pages/copy"], "method", false, false, false, 211), "data" => $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->dataFunc(["title" => (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", false, false, false, 211) . " (Copy)"), "folder" => (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "slug", [], "any", false, false, false, 211) . "-copy")]), "form_id" => "copy"]));
            // line 212
            yield "        </div>
    ";
        }
        // line 214
        yield "
    ";
        // line 216
        yield "
    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.PARENTS"), "html", null, true);
        yield "</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.LOADING"), "html", null, true);
        yield "</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        yield "</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        yield "</a>
            </div>
        </form>
    </div>

";
        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 232
        yield "    ";
        yield from $this->yieldParentBlock("bottom", $context, $blocks);
        yield "
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
";
        yield from [];
    }

    // line 19
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
            // line 20
            yield "    ";
            yield (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["input"] ?? null))) / 2)));
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
        return "flex-objects/types/pages/edit.html.twig";
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
        return array (  673 => 20,  660 => 19,  649 => 232,  642 => 231,  631 => 224,  627 => 223,  621 => 220,  617 => 219,  612 => 216,  609 => 214,  605 => 212,  603 => 211,  598 => 208,  596 => 207,  591 => 204,  589 => 203,  584 => 200,  582 => 199,  578 => 197,  576 => 195,  575 => 194,  573 => 193,  571 => 192,  568 => 191,  566 => 190,  560 => 188,  553 => 187,  547 => 184,  540 => 183,  529 => 176,  521 => 175,  517 => 174,  509 => 173,  505 => 171,  502 => 170,  499 => 169,  496 => 168,  493 => 167,  491 => 166,  488 => 165,  486 => 164,  483 => 163,  479 => 161,  475 => 159,  469 => 158,  461 => 155,  458 => 154,  455 => 153,  451 => 152,  445 => 148,  443 => 147,  438 => 145,  433 => 142,  430 => 141,  423 => 140,  417 => 137,  413 => 135,  407 => 133,  404 => 132,  398 => 130,  396 => 129,  391 => 128,  389 => 127,  386 => 126,  383 => 125,  380 => 124,  374 => 121,  371 => 120,  369 => 119,  364 => 117,  361 => 116,  358 => 115,  356 => 114,  351 => 112,  346 => 111,  344 => 110,  341 => 109,  339 => 108,  336 => 107,  333 => 106,  330 => 105,  328 => 104,  323 => 102,  320 => 101,  317 => 100,  309 => 97,  306 => 96,  303 => 95,  290 => 92,  288 => 91,  285 => 90,  282 => 89,  275 => 88,  269 => 85,  262 => 84,  256 => 81,  253 => 80,  250 => 79,  247 => 78,  244 => 77,  241 => 76,  238 => 75,  235 => 74,  232 => 73,  229 => 72,  226 => 71,  219 => 70,  213 => 67,  210 => 66,  207 => 65,  205 => 64,  198 => 63,  192 => 60,  189 => 59,  186 => 58,  179 => 57,  173 => 54,  171 => 53,  169 => 52,  167 => 51,  165 => 50,  163 => 49,  161 => 48,  159 => 47,  157 => 46,  154 => 45,  152 => 44,  150 => 43,  143 => 42,  136 => 39,  133 => 38,  130 => 37,  127 => 36,  124 => 35,  121 => 34,  118 => 33,  116 => 32,  113 => 31,  110 => 30,  107 => 29,  104 => 28,  102 => 27,  99 => 26,  96 => 25,  89 => 24,  84 => 1,  82 => 22,  80 => 17,  78 => 16,  76 => 15,  74 => 14,  72 => 13,  70 => 12,  68 => 11,  66 => 10,  63 => 7,  61 => 6,  59 => 5,  57 => 4,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/types/pages/edit.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/edit.html.twig");
    }
}
