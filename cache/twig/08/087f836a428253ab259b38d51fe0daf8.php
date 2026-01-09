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

/* flex-objects/types/default/list.html.twig */
class __TwigTemplate_b2fe5ff7541673de27926545957494fd extends Template
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
        $_trait_0 = $this->load("flex-objects/types/default/titlebar/list.html.twig", 2);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."flex-objects/types/default/titlebar/list.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'body' => [$this, 'block_body'],
                'content_top' => [$this, 'block_content_top'],
                'content' => [$this, 'block_content'],
                'content_list' => [$this, 'block_content_list'],
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
        $context["export"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.export"], "method", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.export"], "method", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.export"], "method", false, false, false, 5)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.export"], "method", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.export"], "method", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.export"], "method", false, false, false, 5)) : ([]))));
        // line 6
        $context["can_export"] = (((array_key_exists("can_export", $context) &&  !(null === $context["can_export"]))) ? ($context["can_export"]) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->boolFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["export"] ?? null), "enabled", [], "array", true, true, false, 6) &&  !(null === (($_v0 = ($context["export"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["enabled"] ?? null) : null)))) ? ((($_v1 = ($context["export"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["enabled"] ?? null) : null)) : (count($this->extensions['Grav\Common\Twig\Extension\GravExtension']->arrayFilter(($context["export"] ?? null))))))));
        // line 7
        $context["can_create"] = (((array_key_exists("can_create", $context) &&  !(null === $context["can_create"]))) ? ($context["can_create"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", ["create", "admin", ($context["user"] ?? null)], "method", false, false, false, 7)));
        // line 8
        $context["can_translate"] = (((array_key_exists("can_translate", $context) &&  !(null === $context["can_translate"]))) ? ($context["can_translate"]) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "multilang", [], "any", false, false, false, 8) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "object", [], "any", false, false, false, 8), "hasFlexFeature", ["flex-translate"], "method", false, false, false, 8))));
        // line 10
        $context["per_page"] = (((array_key_exists("per_page", $context) &&  !(null === $context["per_page"]))) ? ($context["per_page"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 10), "currentUri", [], "any", false, false, false, 10), "queryParam", ["per_page"], "method", false, false, false, 10)));
        // line 13
        if ((($tmp = ($context["can_translate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            $context["translate_include_default"] = (((array_key_exists("translate_include_default", $context) &&  !(null === $context["translate_include_default"]))) ? ($context["translate_include_default"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 14), "get", ["system.languages.include_default_lang_file_extension", true], "method", false, false, false, 14)));
            // line 15
            $context["all_languages"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "admin", [], "any", false, false, false, 15), "siteLanguages", [], "any", false, false, false, 15);
            // line 16
            $context["admin_languages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "languages_enabled", [], "any", false, false, false, 16);
            // line 17
            $context["default_language"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 17), "default", [], "any", false, false, false, 17);
            // line 18
            $context["language"] = CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "language", [], "any", false, false, false, 18);
            // line 25
            $context["language"] = ((($context["language"] ?? null)) ? ($context["language"]) : (($context["default_language"] ?? null)));
        }
        // line 30
        $context["allowed"] = (((array_key_exists("allowed", $context) &&  !(null === $context["allowed"]))) ? ($context["allowed"]) : ((($context["directory"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "isAuthorized", ["list", "admin", ($context["user"] ?? null)], "method", false, false, false, 30))));
        // line 31
        $context["back_route"] = (((array_key_exists("back_route", $context) &&  !(null === $context["back_route"]))) ? ($context["back_route"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "getRoute", [1,  -1], "method", false, false, false, 31)));
        // line 33
        $context["configure_path"] = CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.router.actions.configure.path"], "method", false, false, false, 33);
        // line 34
        $context["configure_route"] = (((array_key_exists("configure_route", $context) &&  !(null === $context["configure_route"]))) ? ($context["configure_route"]) : ((((($tmp = ($context["configure_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "withRoute", [Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["configure_path"] ?? null)), "toString", [true], "method", false, false, false, 34), "/")], "method", false, false, false, 34)) : (null))));
        // line 35
        $context["configure_route"] = (((array_key_exists("configure_route", $context) &&  !(null === $context["configure_route"]))) ? ($context["configure_route"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "withGravParam", ["", "configure"], "method", false, false, false, 35), "toString", [true], "method", false, false, false, 35)));
        // line 37
        $context["title_icon"] = (((array_key_exists("title_icon", $context) &&  !(null === $context["title_icon"]))) ? ($context["title_icon"]) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["view_config"] ?? null), "icon", [], "array", true, true, false, 37) &&  !(null === (($_v2 = ($context["view_config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["icon"] ?? null) : null)))) ? ((($_v3 = ($context["view_config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["icon"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, true, false, 37), "admin", [], "any", false, true, false, 37), "menu", [], "any", false, true, false, 37), "list", [], "any", false, true, false, 37), "icon", [], "any", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, false, false, 37), "admin", [], "any", false, false, false, 37), "menu", [], "any", false, false, false, 37), "list", [], "any", false, false, false, 37), "icon", [], "any", false, false, false, 37)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [], "any", false, false, false, 37), "admin", [], "any", false, false, false, 37), "menu", [], "any", false, false, false, 37), "list", [], "any", false, false, false, 37), "icon", [], "any", false, false, false, 37)) : ("fa-file-text-o"))))));
        // line 38
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            $context["title_config"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["view_config"] ?? null), "title", [], "array", true, true, false, 39) &&  !(null === (($_v4 = ($context["view_config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["title"] ?? null) : null)))) ? ((($_v5 = ($context["view_config"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["title"] ?? null) : null)) : (null));
            // line 40
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["title_config"] ?? null), "template", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield Twig\Extension\CoreExtension::include($this->env, $context, Twig\Extension\StringLoaderExtension::templateFromString($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_config"] ?? null), "template", [], "any", false, false, false, 41), "configure title template"));
            } else {
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "title", [], "any", false, false, false, 43)), "html", null, true);
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        $context["schema"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "blueprint", [], "any", false, false, false, 47), "schema", [], "any", false, false, false, 47);
        // line 49
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://flex-objects/js/flex-objects.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 49);
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "    ";
        $context["collection"] = (((($tmp = ($context["directory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["collection"] ?? null), "isAuthorized", ["list", "admin", ($context["user"] ?? null)], "method", false, false, false, 52)) : (""));
        // line 53
        yield "    ";
        $context["directory_config"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["view_config"] ?? null), "options", [], "array", true, true, false, 53) &&  !(null === (($_v6 = ($context["view_config"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["options"] ?? null) : null)))) ? ((($_v7 = ($context["view_config"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["options"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.flex-objects.admin_list", ["per_page" => 15, "order" => ["by" => "updated_timestamp", "dir" => "desc"]]], "method", false, false, false, 53)));
        // line 54
        yield "    ";
        $context["per_page"] = max(1, (((array_key_exists("per_page", $context) &&  !(null === $context["per_page"]))) ? ($context["per_page"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["directory_config"] ?? null), "per_page", [], "any", false, false, false, 54))));
        // line 55
        yield "    ";
        $context["table"] = (((($tmp = ($context["directory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flex"] ?? null), "dataTable", [CoreExtension::getAttribute($this->env, $this->source, ($context["collection"] ?? null), "flexDirectory", [], "method", false, false, false, 55), ["collection" => ($context["collection"] ?? null), "limit" => ($context["per_page"] ?? null), "sort" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["directory_config"] ?? null), "order", [], "any", false, false, false, 55), "by", [], "any", false, false, false, 55) . "|") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["directory_config"] ?? null), "order", [], "any", false, false, false, 55), "dir", [], "any", false, false, false, 55))]], "method", false, false, false, 55)) : (""));
        // line 56
        yield "    ";
        $context["back_url"] = $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["back_route"] ?? null));
        // line 57
        yield "    ";
        $context["configure_url"] = (((($tmp =  !((((CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.configure.hidden"], "method", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.configure.hidden"], "method", false, false, false, 57)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.configure.hidden"], "method", false, false, false, 57)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.configure.hidden", false], "method", false, false, false, 57))) === true)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["configure_route"] ?? null), "toString", [true], "method", false, false, false, 57)) : (""));
        // line 58
        yield "
    ";
        // line 59
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "getColumns", [], "method", false, false, false, 59);
        // line 60
        yield "    ";
        $context["fields_count"] = (((($tmp = ($context["fields"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (count(($context["fields"] ?? null))) : (0));
        // line 61
        yield "    ";
        $context["fields_width"] = 8;
        // line 62
        yield "    ";
        $context["fields_set"] = 0;
        // line 63
        yield "    ";
        $context["title_field"] = (($_v8 = ($context["view_config"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["title"] ?? null) : null);
        // line 64
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["options"]) {
            // line 65
            yield "        ";
            $context["fields_width"] = (((($context["fields_width"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, $context["options"], "width", [], "any", false, false, false, 65))) ? ((($context["fields_width"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, $context["options"], "width", [], "any", false, false, false, 65))) : (0));
            // line 66
            yield "        ";
            $context["fields_set"] = (($context["fields_set"] ?? null) + (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["options"], "width", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0)));
            // line 67
            yield "        ";
            if (( !($context["title_field"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, $context["options"], "link", [], "any", false, false, false, 67) == "edit"))) {
                // line 68
                yield "            ";
                $context["title_field"] = $context["key"];
                // line 69
                yield "        ";
            }
            // line 70
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['options'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "
    ";
        // line 72
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        if ((($context["allowed"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "authorize", ["admin.super"], "method", false, false, false, 76))) {
            // line 77
            yield "    ";
            $context["save_location"] = CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "getStorageFolder", [], "method", false, false, false, 77);
            // line 78
            yield "    <div class=\"alert notice\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            yield ": <b>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
            yield "</b></div>
";
        }
        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        if ((($tmp = ($context["allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "    ";
            yield from $this->unwrap()->yieldBlock('content_list', $context, $blocks);
        } else {
            // line 88
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "modifyHeader", ["http_response_code", 404], "method", false, false, false, 88);
            // line 89
            yield "    <div class=\"error-block\">
        <h1>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
            yield " 404</h1>
        <div class=\"padding\">
            <p>
                ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.ERROR.PAGE_NOT_EXIST"), "html", null, true);
            yield "
            </p>
        </div>
    </div>
";
        }
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_list(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "    ";
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/list/list.html.twig"), "flex-objects/types/default/list/list.html.twig"], 85)->unwrap()->yield($context);
        // line 86
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/types/default/list.html.twig";
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
        return array (  269 => 86,  266 => 85,  259 => 84,  248 => 93,  242 => 90,  239 => 89,  236 => 88,  232 => 84,  230 => 83,  223 => 82,  212 => 78,  209 => 77,  207 => 76,  200 => 75,  193 => 72,  190 => 71,  184 => 70,  181 => 69,  178 => 68,  175 => 67,  172 => 66,  169 => 65,  164 => 64,  161 => 63,  158 => 62,  155 => 61,  152 => 60,  150 => 59,  147 => 58,  144 => 57,  141 => 56,  138 => 55,  135 => 54,  132 => 53,  129 => 52,  122 => 51,  117 => 1,  115 => 49,  113 => 47,  108 => 43,  105 => 41,  103 => 40,  101 => 39,  99 => 38,  97 => 37,  95 => 35,  93 => 34,  91 => 33,  89 => 31,  87 => 30,  84 => 25,  82 => 18,  80 => 17,  78 => 16,  76 => 15,  74 => 14,  72 => 13,  70 => 10,  68 => 8,  66 => 7,  64 => 6,  62 => 5,  55 => 1,  33 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/types/default/list.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects/types/default/list.html.twig");
    }
}
