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

/* flex-objects/types/default/edit.html.twig */
class __TwigTemplate_7173b976c270521e6c46f686470fe80c extends Template
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

        // line 2
        $_trait_0 = $this->load("flex-objects/types/default/titlebar/edit.html.twig", 2);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."flex-objects/types/default/titlebar/edit.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'body' => [$this, 'block_body'],
                'content_top' => [$this, 'block_content_top'],
                'content' => [$this, 'block_content'],
                'topbar' => [$this, 'block_topbar'],
                'edit' => [$this, 'block_edit'],
            ]
        );
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        if ((($tmp =  !array_key_exists("form", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            $context["form"] = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "form", [], "any", false, false, false, 6);
            // line 7
            $context["object"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 7);
        }
        // line 11
        $context["can_list"] = (((array_key_exists("can_list", $context) &&  !(null === $context["can_list"]))) ? ($context["can_list"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", ["list", "admin", ($context["user"] ?? null)], "method", false, false, false, 11)));
        // line 12
        $context["can_read"] = (((array_key_exists("can_read", $context) &&  !(null === $context["can_read"]))) ? ($context["can_read"]) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", ["read", "admin", ($context["user"] ?? null)], "method", false, false, false, 12)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", ["create", "admin", ($context["user"] ?? null)], "method", false, false, false, 12)))));
        // line 13
        $context["can_create"] = (((array_key_exists("can_create", $context) &&  !(null === $context["can_create"]))) ? ($context["can_create"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", ["create", "admin", ($context["user"] ?? null)], "method", false, false, false, 13)));
        // line 14
        $context["can_save"] = (((array_key_exists("can_save", $context) &&  !(null === $context["can_save"]))) ? ($context["can_save"]) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", ["update", "admin", ($context["user"] ?? null)], "method", false, false, false, 14)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", ["create", "admin", ($context["user"] ?? null)], "method", false, false, false, 14)))));
        // line 15
        $context["can_delete"] = (((array_key_exists("can_delete", $context) &&  !(null === $context["can_delete"]))) ? ($context["can_delete"]) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 15) && CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isAuthorized", ["delete", "admin", ($context["user"] ?? null)], "method", false, false, false, 15))));
        // line 16
        $context["can_translate"] = (((array_key_exists("can_translate", $context) &&  !(null === $context["can_translate"]))) ? ($context["can_translate"]) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "multilang", [], "any", false, false, false, 16) && CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "hasFlexFeature", ["flex-translate"], "method", false, false, false, 16))));
        // line 17
        $context["can_preview"] = (((array_key_exists("can_preview", $context) &&  !(null === $context["can_preview"]))) ? ($context["can_preview"]) : (((($context["can_read"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 17)) && (((CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.preview.enabled"], "method", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.preview.enabled"], "method", false, false, false, 17)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.preview.enabled"], "method", false, false, false, 17)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.preview.enabled", false], "method", false, false, false, 17))))));
        // line 20
        if ((($tmp = ($context["can_translate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            $context["translate_include_default"] = (((array_key_exists("translate_include_default", $context) &&  !(null === $context["translate_include_default"]))) ? ($context["translate_include_default"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 21), "get", ["system.languages.include_default_lang_file_extension", true], "method", false, false, false, 21)));
            // line 22
            $context["all_languages"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "admin", [], "any", false, false, false, 22), "siteLanguages", [], "any", false, false, false, 22);
            // line 23
            $context["admin_languages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "languages_enabled", [], "any", false, false, false, 23);
            // line 24
            $context["default_language"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 24), "default", [], "any", false, false, false, 24);
            // line 25
            $context["object_language"] = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "language", [], "any", false, false, false, 25);
            // line 26
            $context["language"] = CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "language", [], "any", false, false, false, 26);
            // line 27
            $context["has_translation"] = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "hasTranslation", [($context["language"] ?? null), false], "method", false, false, false, 27);
            // line 36
            $context["language"] = ((($context["language"] ?? null)) ? ($context["language"]) : (($context["default_language"] ?? null)));
            // line 37
            $context["object_language"] = ((($context["object_language"] ?? null)) ? ($context["object_language"]) : (($context["default_language"] ?? null)));
            // line 38
            $context["object_languages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "languages", [false], "method", false, false, false, 38);
        }
        // line 43
        $context["allowed"] = (((array_key_exists("allowed", $context) &&  !(null === $context["allowed"]))) ? ($context["allowed"]) : (((($context["directory"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 43) && (($context["can_read"] ?? null) || ($context["can_save"] ?? null)))) || ((($context["action"] ?? null) == "add") && ($context["can_read"] ?? null)))));
        // line 44
        $context["back_route"] = (((array_key_exists("back_route", $context) &&  !(null === $context["back_route"]))) ? ($context["back_route"]) : (("/" . ((((($context["action"] ?? null) != "edit") &&  !($context["key"] ?? null))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "getRoute", [1, (((($tmp =  !($context["can_list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ( -1) : (null))], "method", false, false, false, 44)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "getRoute", [1, (((($tmp =  !($context["can_list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ( -2) : ( -1))], "method", false, false, false, 44))))));
        // line 45
        $context["title_icon"] = (((array_key_exists("title_icon", $context) &&  !(null === $context["title_icon"]))) ? ($context["title_icon"]) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["view_config"] ?? null), "icon", [], "array", true, true, false, 45) &&  !(null === (($_v0 = ($context["view_config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["icon"] ?? null) : null)))) ? ((($_v1 = ($context["view_config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["icon"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, true, false, 45), "admin", [], "any", false, true, false, 45), "menu", [], "any", false, true, false, 45), "list", [], "any", false, true, false, 45), "icon", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, false, false, 45), "admin", [], "any", false, false, false, 45), "menu", [], "any", false, false, false, 45), "list", [], "any", false, false, false, 45), "icon", [], "any", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, false, false, 45), "admin", [], "any", false, false, false, 45), "menu", [], "any", false, false, false, 45), "list", [], "any", false, false, false, 45), "icon", [], "any", false, false, false, 45)) : ("fa-file-text-o"))))));
        // line 46
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 47
            $context["title_config"] = (($_v2 = ($context["view_config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["title"] ?? null) : null);
            // line 48
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["title_config"] ?? null), "template", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield Twig\Extension\CoreExtension::include($this->env, $context, Twig\Extension\StringLoaderExtension::templateFromString($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_config"] ?? null), "template", [], "any", false, false, false, 49), "edit title template"));
            } else {
                // line 51
                yield (((array_key_exists("title", $context) &&  !(null === $context["title"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "form", [], "any", false, true, false, 51), "getValue", ["title"], "method", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "form", [], "any", false, false, false, 51), "getValue", ["title"], "method", false, false, false, 51)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "form", [], "any", false, false, false, 51), "getValue", ["title"], "method", false, false, false, 51), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", false, false, false, 51)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "title", [], "any", false, false, false, 51), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["key"] ?? null), "html", null, true)))))));
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "    ";
        $context["back_url"] = (((array_key_exists("back_url", $context) &&  !(null === $context["back_url"]))) ? ($context["back_url"]) : ($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["back_route"] ?? null))));
        // line 57
        yield "    ";
        $context["id"] = ($context["key"] ?? null);
        // line 58
        yield "    ";
        $context["blueprint"] = (((array_key_exists("blueprint", $context) &&  !(null === $context["blueprint"]))) ? ($context["blueprint"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "any", false, false, false, 58)));
        // line 59
        yield "
    ";
        // line 60
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "    ";
        if ((($context["allowed"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "authorize", ["admin.super"], "method", false, false, false, 64))) {
            // line 65
            yield "        ";
            if (((($context["directory"] ?? null) && ($context["object"] ?? null)) || (($context["action"] ?? null) == "add"))) {
                // line 66
                yield "            ";
                $context["save_location"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getStorageFolder", [], "method", true, true, false, 66) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getStorageFolder", [], "method", false, false, false, 66)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getStorageFolder", [], "method", false, false, false, 66)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "getStorageFolder", [], "method", false, false, false, 66)));
                // line 67
                yield "            <div class=\"alert notice\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
                yield ": <b>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
                yield " ";
                yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("[" . Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.NEW"))) . "]"), "html", null, true)) : (""));
                yield "</b></div>
        ";
            }
            // line 69
            yield "    ";
        }
        // line 70
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 70) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "flash", [], "any", false, false, false, 70), "exists", [], "any", false, false, false, 70))) {
            // line 71
            yield "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.EDITING_DRAFT"), "html", null, true);
            yield " <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.RESET"), "html", null, true);
            yield "</button>
        </div>
    ";
        }
        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 78
        yield "    ";
        if ((($tmp = ($context["allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "        <div class=\"clear directory admin-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "html", null, true);
            yield "\">
            <div class=\"admin-form-wrapper\">
                <div id=\"admin-topbar\">
                    ";
            // line 82
            yield from $this->unwrap()->yieldBlock('topbar', $context, $blocks);
            // line 83
            yield "                </div>
                ";
            // line 84
            yield from $this->unwrap()->yieldBlock('edit', $context, $blocks);
            // line 87
            yield "            </div>
        </div>

        ";
            // line 90
            yield from $this->load("partials/modal-changes-detected.html.twig", 90)->unwrap()->yield($context);
            // line 91
            yield "
        ";
            // line 92
            if ((($tmp = ($context["can_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 93
                yield "            ";
                yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/modals/remove.html.twig"), "flex-objects/types/default/modals/remove.html.twig"], 93)->unwrap()->yield(CoreExtension::merge($context, ["name" => ($context["target"] ?? null)]));
                // line 94
                yield "        ";
            }
            // line 95
            yield "
    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 96
($context["object"] ?? null), "exists", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "
        ";
            // line 98
            CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "modifyHeader", ["http_response_code", 403], "method", false, false, false, 98);
            // line 99
            yield "        <div class=\"error-block\">
            <h1>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
            yield " 403</h1>
            <div class=\"padding\">
                <p>
                    ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.PAGE_FORBIDDEN"), "html", null, true);
            yield "
                </p>
            </div>
        </div>

    ";
        } else {
            // line 109
            yield "
        ";
            // line 110
            CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "modifyHeader", ["http_response_code", 404], "method", false, false, false, 110);
            // line 111
            yield "        <div class=\"error-block\">
            <h1>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
            yield " 404</h1>
            <div class=\"padding\">
                <p>
                    ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.PAGE_NOT_EXIST"), "html", null, true);
            yield "
                </p>
            </div>
        </div>

    ";
        }
        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_topbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_edit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "                    ";
        yield from $this->load("partials/blueprints.html.twig", 85)->unwrap()->yield(CoreExtension::merge($context, ["form" => ($context["form"] ?? null), "context" => ($context["object"] ?? null), "data" => ($context["object"] ?? null)]));
        // line 86
        yield "                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/types/default/edit.html.twig";
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
        return array (  320 => 86,  317 => 85,  310 => 84,  300 => 82,  288 => 115,  282 => 112,  279 => 111,  277 => 110,  274 => 109,  265 => 103,  259 => 100,  256 => 99,  254 => 98,  251 => 97,  249 => 96,  246 => 95,  243 => 94,  240 => 93,  238 => 92,  235 => 91,  233 => 90,  228 => 87,  226 => 84,  223 => 83,  221 => 82,  214 => 79,  211 => 78,  204 => 77,  193 => 72,  190 => 71,  187 => 70,  184 => 69,  174 => 67,  171 => 66,  168 => 65,  165 => 64,  158 => 63,  151 => 60,  148 => 59,  145 => 58,  142 => 57,  139 => 56,  132 => 55,  127 => 1,  122 => 51,  119 => 49,  117 => 48,  115 => 47,  113 => 46,  111 => 45,  109 => 44,  107 => 43,  104 => 38,  102 => 37,  100 => 36,  98 => 27,  96 => 26,  94 => 25,  92 => 24,  90 => 23,  88 => 22,  86 => 21,  84 => 20,  82 => 17,  80 => 16,  78 => 15,  76 => 14,  74 => 13,  72 => 12,  70 => 11,  67 => 7,  65 => 6,  63 => 5,  56 => 1,  33 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/types/default/edit.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects/types/default/edit.html.twig");
    }
}
