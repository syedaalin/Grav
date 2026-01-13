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

/* themes.html.twig */
class __TwigTemplate_160bf18bc5c3f2f6e1bab5ca26a7d7c6 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            $context["installing"] = (is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 4)) && is_string($_v1 = "install") && str_starts_with($_v0, $_v1));
            // line 6
            if ((($tmp = ($context["installing"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                $context["title"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.THEMES");
            } else {
                // line 9
                $context["installed"] = true;
                // line 12
                $context["package"] = (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "themes", [true], "method", false, false, false, 12)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 12)] ?? null) : null);
                // line 13
                if ((($tmp = (!($context["package"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 14
                    $context["package"] = (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "themes", [false], "method", false, false, false, 14)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 14)] ?? null) : null);
                    // line 15
                    $context["installed"] = false;
                }
                // line 18
                $context["theme"] = CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "toArray", [], "method", false, false, false, 18);
                // line 19
                $context["state"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["system.pages.theme"], "method", false, false, false, 19) == CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "slug", [], "any", false, false, false, 19))) ? ("active") : ("inactive"));
                // line 21
                $context["title"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.THEME") . ": ") . CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 21));
            }
        } else {
            // line 24
            $context["title"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.THEMES");
        }
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 27) || ($context["installing"] ?? null))) {
        }
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")], "method", false, false, false, 29);
        // line 30
        yield "        ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_titlebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 39) || ($context["installing"] ?? null))) {
            // line 40
            yield "        <div class=\"button-bar\">
        ";
            // line 41
            if ((($tmp = ($context["installing"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "            <a class=\"button\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/themes"), "html", null, true);
                yield "\"><i class=\"fa fa-reply\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 44
                yield "            <a class=\"button\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/"), "html", null, true);
                yield "\"><i class=\"fa fa-reply\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
                yield "</a>
            <a class=\"button\" href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/themes/install"), "html", null, true);
                yield "\"><i class=\"fa fa-plus\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ADD"), "html", null, true);
                yield "</a>
            ";
                // line 46
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.maintenance", "admin.super"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
                    yield "</button>
            ";
                }
                // line 49
                yield "        ";
            }
            // line 50
            yield "        </div>
        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.THEMES"), "html", null, true);
            yield "</h1>
    ";
        } else {
            // line 53
            yield "        ";
            if ((($tmp = ($context["installed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/themes"), "html", null, true);
                yield "\"><i class=\"fa fa-arrow-left\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACK_TO_THEMES"), "html", null, true);
                yield "</a>
            ";
                // line 56
                if ((($context["state"] ?? null) == "active")) {
                    // line 57
                    yield "            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SAVE"), "html", null, true);
                    yield "</button>
            ";
                }
                // line 59
                yield "        </div>
        ";
            } else {
                // line 61
                yield "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/themes/install"), "html", null, true);
                yield "\"><i class=\"fa fa-arrow-left\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACK_TO_THEMES"), "html", null, true);
                yield "</a>
        </div>
        ";
            }
            // line 65
            yield "        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.THEME"), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 65), "html", null, true);
            yield "</h1>
    ";
        }
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "    ";
        yield from $this->yieldParentBlock("messages", $context, $blocks);
        yield "
    ";
        // line 71
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 71), "admin", [], "any", false, false, false, 71), "notifications", [], "any", false, false, false, 71), "themes", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "        <div class=\"themes-notifications-container hidden\"></div>
    ";
        }
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "    <div class=\"gpm gpm-themes\">
        ";
        // line 78
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 78) || ($context["installing"] ?? null))) {
            // line 79
            yield "            ";
            yield from $this->load("partials/themes-list.html.twig", 79)->unwrap()->yield($context);
            // line 80
            yield "        ";
        } else {
            // line 81
            yield "            ";
            if ((null === ($context["theme"] ?? null))) {
                // line 82
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->redirectFunc((($context["base_url_relative"] ?? null) . "/404")), "html", null, true);
                yield "
            ";
            }
            // line 84
            yield "            ";
            yield from $this->load("partials/themes-details.html.twig", 84)->unwrap()->yield($context);
            // line 85
            yield "        ";
        }
        // line 86
        yield "    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes.html.twig";
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
        return array (  278 => 86,  275 => 85,  272 => 84,  266 => 82,  263 => 81,  260 => 80,  257 => 79,  255 => 78,  252 => 77,  245 => 76,  238 => 72,  236 => 71,  231 => 70,  224 => 69,  213 => 65,  205 => 62,  202 => 61,  198 => 59,  192 => 57,  190 => 56,  184 => 55,  181 => 54,  178 => 53,  173 => 51,  170 => 50,  167 => 49,  161 => 47,  159 => 46,  153 => 45,  146 => 44,  138 => 42,  136 => 41,  133 => 40,  130 => 39,  123 => 38,  115 => 34,  108 => 33,  100 => 30,  97 => 29,  90 => 28,  85 => 1,  82 => 27,  79 => 24,  75 => 21,  73 => 19,  71 => 18,  68 => 15,  66 => 14,  64 => 13,  62 => 12,  60 => 9,  57 => 7,  55 => 6,  53 => 4,  51 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/themes.html.twig");
    }
}
