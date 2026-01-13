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

/* partials/themes-details.html.twig */
class __TwigTemplate_5b33e10c671ae2a86f09e8a5249903c9 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["gpm"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "gpm", [], "method", false, false, false, 1);
        // line 2
        $context["installed"] = CoreExtension::getAttribute($this->env, $this->source, ($context["gpm"] ?? null), "isThemeInstalled", [CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 2)], "method", false, false, false, 2);
        // line 3
        $context["isTestingRelease"] = CoreExtension::getAttribute($this->env, $this->source, ($context["gpm"] ?? null), "isTestingRelease", [CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "slug", [], "any", false, false, false, 3)], "method", false, false, false, 3);
        // line 4
        $context["gumroad_loaded"] = false;
        // line 5
        yield "
";
        // line 6
        $context["state"] = "inactive";
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["system.pages.theme"], "method", false, false, false, 7) == CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "slug", [], "any", false, false, false, 7))) {
            $context["state"] = "active";
        }
        // line 8
        yield "
<div class=\"grav-update theme\" data-gpm-theme=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
</div>

<h1>
    ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "
    ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "isTeamGrav", [($context["theme"] ?? null)], "method", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.GRAV_OFFICIAL_THEME"), "html", null, true);
            yield "\"></i></span></small>
    ";
        }
        // line 17
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "isPremiumProduct", [($context["theme"] ?? null)], "method", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
            yield "</span></small>
    ";
        }
        // line 20
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "symlink", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "    <small class=\"hint--bottom\"  data-hint=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"), "html", null, true);
            yield "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 25
        yield "    <small>";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "version", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("v" . CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "version", [], "any", false, false, false, 25)), "html", null, true)) : (""));
        yield "</small>
    ";
        // line 26
        if ((($tmp = ($context["isTestingRelease"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"gpm-testing\">test release</span>";
        }
        // line 27
        yield "</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "icon", [], "any", false, false, false, 29), "html", null, true);
        yield "\"></i>
    <table>
        ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "version", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "        <tr>
            <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.VERSION"), "html", null, true);
            yield ":</td>
            <td class=\"double\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "version", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
        </tr>
        ";
        }
        // line 37
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "            <tr>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.AUTHOR"), "html", null, true);
            yield ":</td>
                <td class=\"double\">
                    ";
            // line 41
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, false, false, 41), "url", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, false, false, 42), "url", [], "any", false, false, false, 42), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
                yield "</a>
                    ";
            } else {
                // line 44
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
                yield "
                    ";
            }
            // line 46
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 47
                yield "                         - <a href=\"mailto:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
                yield "</a>
                    ";
            }
            // line 49
            yield "                </td>
            </tr>
        ";
        }
        // line 52
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "homepage", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "        <tr>
            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.HOMEPAGE"), "html", null, true);
            yield ":</td>
            <td class=\"double\"><a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "homepage", [], "any", false, false, false, 55), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "homepage", [], "any", false, false, false, 55), "html", null, true);
            yield "</a></td>
        </tr>
        ";
        }
        // line 58
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "demo", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "        <tr>
            <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DEMO"), "html", null, true);
            yield ":</td>
            <td class=\"double\"><a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "demo", [], "any", false, false, false, 61), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "demo", [], "any", false, false, false, 61), "html", null, true);
            yield "</a></td>
        </tr>
        ";
        }
        // line 64
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "bugs", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "            <tr>
                <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BUG_TRACKER"), "html", null, true);
            yield ":</td>
                <td class=\"double\"><a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "bugs", [], "any", false, false, false, 67), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "bugs", [], "any", false, false, false, 67), "html", null, true);
            yield "</a></td>
            </tr>
        ";
        }
        // line 70
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "keywords", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "            <tr>
                <td>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.KEYWORDS"), "html", null, true);
            yield ":</td>
                <td class=\"double\">
                   ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "keywords", [], "any", false, false, false, 74), ", "), "html", null, true);
            yield "
                </td>
            </tr>
        ";
        }
        // line 78
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "license", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "            <tr>
                <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.LICENSE"), "html", null, true);
            yield ":</td>
                ";
            // line 81
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->startsWithFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "license", [], "any", false, false, false, 81), "http")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "                    <td class=\"double\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "license", [], "any", false, false, false, 82), "html", null, true);
                yield "\" target=\"_blank\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "license", [], "any", false, false, false, 82), "html", null, true);
                yield "</a></td>
                ";
            } else {
                // line 84
                yield "                    <td class=\"double\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "license", [], "any", false, false, false, 84), "html", null, true);
                yield "</td>
                ";
            }
            // line 86
            yield "            </tr>
        ";
        }
        // line 88
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "description", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "            <tr>
                <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DESCRIPTION"), "html", null, true);
            yield ":</td>
                <td class=\"double\">";
            // line 91
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "description_html", [], "any", false, false, false, 91);
            yield "</td>
            </tr>
        ";
        }
        // line 94
        yield "
        ";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "readme", [], "any", false, false, false, 95) || CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "homepage", [], "any", false, false, false, 95))) {
            // line 96
            yield "            ";
            $context["readme_link"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "readme", [], "any", false, false, false, 96)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "readme", [], "any", false, false, false, 96)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "docs", [], "any", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "docs", [], "any", false, false, false, 96), (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "homepage", [], "any", false, false, false, 96) . "/blob/master/README.md"))) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "homepage", [], "any", false, false, false, 96) . "/blob/master/README.md")))));
            // line 97
            yield "            <tr>
                <td>";
            // line 98
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "readme", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.README"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DOCS"), "html", null, true)));
            yield ":</td>
                <td class=\"double\"><a href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["readme_link"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["readme_link"] ?? null), "html", null, true);
            yield "</a></td>
            </tr>
        ";
        }
        // line 102
        yield "
        ";
        // line 103
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "gpm", [], "any", false, false, false, 103), "findPackage", [CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "slug", [], "any", false, false, false, 103), true], "method", false, false, false, 103), "changelog", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "        <tr>
            <td>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CHANGELOG"), "html", null, true);
            yield ":</td>
            <td class=\"double\"><a class=\"button button-small\" href=\"#\" data-remodal-target=\"changelog\" data-remodal-changelog=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(("/changelog/slug:" . CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "slug", [], "any", false, false, false, 106))), "html", null, true);
            yield "\"><i class=\"fa fa-binoculars\"></i> View Changelog</a></td>
        </tr>
        ";
        }
        // line 109
        yield "    </table>
</div>

";
        // line 112
        if ((($tmp = ($context["installed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "  ";
            if ((($context["state"] ?? null) == "active")) {
                // line 114
                yield "    ";
                $context["data"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "data", [("themes/" . CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 114))], "method", false, false, false, 114);
                // line 115
                yield "    ";
                yield from $this->load("partials/blueprints.html.twig", 115)->unwrap()->yield(CoreExtension::merge($context, ["data" => ($context["data"] ?? null), "blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "blueprints", [], "any", false, false, false, 115)]));
                // line 116
                yield "  ";
            } else {
                // line 117
                yield "    <div class=\"theme\" data-gpm-theme=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "slug", [], "any", false, false, false, 117), "html", null, true);
                yield "\" data-gpm-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 117), "html", null, true);
                yield "\">
      <div style=\"display:none;\" class=\"gpm-name\"><a>";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 118), "html", null, true);
                yield "</a></div>
      <form>
        <div class=\"form-field grid\">
          <div class=\"form-label block size-1-3\">
            <label>";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ACTIVATION_REQUIRED"), "html", null, true);
                yield "</label>
          </div>
          <div class=\"form-data block size-2-3\">
            <a class=\"button gpm-actions\" data-remodal-target=\"theme-switch-warn\" href=\"";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((((($context["base_url_relative"] ?? null) . "/themes/") . CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "slug", [], "any", false, false, false, 125)) . "/task") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 125), "param_sep", [], "any", false, false, false, 125)) . "activate"), "admin-form", "admin-nonce"], "method", false, false, false, 125), "html", null, true);
                yield "\">
              <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> ";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ACTIVATE"), "html", null, true);
                yield " <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 126), "html", null, true);
                yield "</strong>
            </a>
          </div>
        </div>
      </form>
    </div>

    <div class=\"button-bar danger\">
      <span class=\"danger-zone\"></span>
      ";
                // line 135
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "symlink", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 136
                    yield "          <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REINSTALL_THEME"), "html", null, true);
                    yield "</a>
      ";
                }
                // line 138
                yield "      <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REMOVE_THEME"), "html", null, true);
                yield "</a>
    </div>
  ";
            }
        } else {
            // line 142
            yield "    <div class=\"button-bar success\">
        ";
            // line 143
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "premium", [], "any", false, false, false, 143) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "license", [CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "slug", [], "any", false, false, false, 143)], "method", false, false, false, 143))) {
                // line 144
                yield "            ";
                if ((($tmp =  !($context["gumroad_loaded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 145
                    yield "                ";
                    $context["gumroad_loaded"] = true;
                    // line 146
                    yield "                <script src=\"//gumroad.com/js/gumroad.js\"></script>
            ";
                }
                // line 148
                yield "            <a class=\"gumroad-button button\" href=\"https://gum.co/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "premium", [], "any", false, false, false, 148), "permalink", [], "any", false, false, false, 148), "html", null, true);
                yield "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "premium", [], "any", false, true, false, 148), "button", [], "any", true, true, false, 148)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "premium", [], "any", false, false, false, 148), "button", [], "any", false, false, false, 148), "Purchase")) : ("Purchase")), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 150
                yield "            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "slug", [], "any", false, false, false, 150), "html", null, true);
                yield "\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.INSTALL_THEME"), "html", null, true);
                yield "</a>
        ";
            }
            // line 152
            yield "    </div>
";
        }
        // line 154
        yield "
";
        // line 155
        yield from $this->load("partials/modal-switch-theme.html.twig", 155)->unwrap()->yield(CoreExtension::merge($context, ["theme_name" => CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 155)]));
        // line 156
        yield from $this->load("partials/modal-changes-detected.html.twig", 156)->unwrap()->yield($context);
        // line 157
        yield from $this->load("partials/modal-add-package.html.twig", 157)->unwrap()->yield(CoreExtension::merge($context, ["type" => "theme"]));
        // line 158
        yield from $this->load("partials/modal-update-packages.html.twig", 158)->unwrap()->yield(CoreExtension::merge($context, ["type" => "theme"]));
        // line 159
        yield from $this->load("partials/modal-remove-package.html.twig", 159)->unwrap()->yield(CoreExtension::merge($context, ["type" => "theme", "package" => ($context["theme"] ?? null)]));
        // line 160
        yield from $this->load("partials/modal-reinstall-package.html.twig", 160)->unwrap()->yield(CoreExtension::merge($context, ["type" => "theme", "package" => ($context["theme"] ?? null)]));
        // line 161
        yield from $this->load("partials/modal-changelog.html.twig", 161)->unwrap()->yield(CoreExtension::merge($context, ["package" => ($context["theme"] ?? null)]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/themes-details.html.twig";
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
        return array (  459 => 161,  457 => 160,  455 => 159,  453 => 158,  451 => 157,  449 => 156,  447 => 155,  444 => 154,  440 => 152,  432 => 150,  424 => 148,  420 => 146,  417 => 145,  414 => 144,  412 => 143,  409 => 142,  401 => 138,  395 => 136,  393 => 135,  379 => 126,  375 => 125,  369 => 122,  362 => 118,  355 => 117,  352 => 116,  349 => 115,  346 => 114,  343 => 113,  341 => 112,  336 => 109,  330 => 106,  326 => 105,  323 => 104,  321 => 103,  318 => 102,  310 => 99,  306 => 98,  303 => 97,  300 => 96,  298 => 95,  295 => 94,  289 => 91,  285 => 90,  282 => 89,  279 => 88,  275 => 86,  269 => 84,  261 => 82,  259 => 81,  255 => 80,  252 => 79,  249 => 78,  242 => 74,  237 => 72,  234 => 71,  231 => 70,  223 => 67,  219 => 66,  216 => 65,  213 => 64,  205 => 61,  201 => 60,  198 => 59,  195 => 58,  187 => 55,  183 => 54,  180 => 53,  177 => 52,  172 => 49,  164 => 47,  161 => 46,  155 => 44,  147 => 42,  145 => 41,  140 => 39,  137 => 38,  134 => 37,  128 => 34,  124 => 33,  121 => 32,  119 => 31,  114 => 29,  110 => 27,  106 => 26,  101 => 25,  93 => 21,  90 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  62 => 9,  59 => 8,  55 => 7,  53 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/themes-details.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/themes-details.html.twig");
    }
}
