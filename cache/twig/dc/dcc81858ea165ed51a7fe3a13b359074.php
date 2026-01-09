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

/* partials/tools-backups.html.twig */
class __TwigTemplate_a77f26685df8e42161145e766097aa66 extends Template
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
        yield "<div class=\"backups-content\">

    ";
        // line 3
        $context["data"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "data", ["config/backups"], "method", false, false, false, 3);
        // line 4
        yield "    ";
        $context["backups"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "backups", [], "any", false, false, false, 4), "getAvailableBackups", [], "method", false, false, false, 4);
        // line 5
        yield "    ";
        $context["profiles"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "backups", [], "any", false, false, false, 5), "getBackupProfiles", [], "method", false, false, false, 5);
        // line 6
        yield "    ";
        $context["purge_config"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "backups", [], "any", false, false, false, 6), "getPurgeConfig", [], "method", false, false, false, 6);
        // line 7
        yield "    ";
        $context["newest_date"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["backups"] ?? null)), "date", [], "any", false, false, false, 7);
        // line 8
        yield "    ";
        $context["newest_backup"] = (((($tmp = ($context["newest_date"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->nicetimeFunc(($context["newest_date"] ?? null), false, false)) : ("none"));
        // line 9
        yield "    ";
        $context["oldest_date"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), ($context["backups"] ?? null)), "date", [], "any", false, false, false, 9);
        // line 10
        yield "    ";
        $context["oldest_backup"] = (((($tmp = ($context["oldest_date"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->nicetimeFunc(($context["oldest_date"] ?? null), false, false)) : ("none"));
        // line 11
        yield "
    ";
        // line 12
        switch (CoreExtension::getAttribute($this->env, $this->source, ($context["purge_config"] ?? null), "trigger", [], "any", false, false, false, 12)) {
            case "number":
            {
                // line 14
                yield "        ";
                $context["count"] = count(($context["backups"] ?? null));
                // line 15
                yield "        ";
                $context["max_backups"] = CoreExtension::getAttribute($this->env, $this->source, ($context["purge_config"] ?? null), "max_backups_count", [], "any", false, false, false, 15);
                // line 16
                yield "        ";
                if ((($context["max_backups"] ?? null) > 0)) {
                    // line 17
                    yield "            ";
                    $context["percent_used"] = (((($context["count"] ?? null) == 0)) ? (0) : ((100 - ((($context["count"] ?? null) / ($context["max_backups"] ?? null)) * 100))));
                    // line 18
                    yield "        ";
                } else {
                    // line 19
                    yield "            ";
                    $context["percent_used"] = 100;
                    // line 20
                    yield "        ";
                }
                // line 21
                yield "        ";
                $context["bar_msg"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUPS_PURGE_NUMBER", ($context["count"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["purge_config"] ?? null), "max_backups_count", [], "any", false, false, false, 21));
                // line 22
                yield "    ";
                break;
            }
            case "time":
            {
                // line 23
                yield "        ";
                $context["last"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), ($context["backups"] ?? null));
                // line 24
                yield "        ";
                $context["days"] = (((($context["last"] ?? null) == null)) ? (0) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate("now"), "diff", [CoreExtension::getAttribute($this->env, $this->source, ($context["last"] ?? null), "time", [], "any", false, false, false, 24)], "method", false, false, false, 24), "days", [], "any", false, false, false, 24)));
                // line 25
                yield "        ";
                $context["percent_used"] = (((($context["days"] ?? null) == 0)) ? (0) : ((100 - ((($context["days"] ?? null) / CoreExtension::getAttribute($this->env, $this->source, ($context["purge_config"] ?? null), "max_backups_time", [], "any", false, false, false, 25)) * 100))));
                // line 26
                yield "        ";
                $context["bar_msg"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUPS_PURGE_TIME", (CoreExtension::getAttribute($this->env, $this->source, ($context["purge_config"] ?? null), "max_backups_time", [], "any", false, false, false, 26) - ($context["days"] ?? null)));
                // line 27
                yield "    ";
                break;
            }
            default:
            {
                // line 28
                yield "        ";
                $context["space_used"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "backups", [], "any", false, false, false, 28), "getTotalBackupsSize", [], "method", false, false, false, 28);
                // line 29
                yield "        ";
                $context["space_available"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["purge_config"] ?? null), "max_backups_space", [], "any", false, false, false, 29) * 1024) * 1024) * 1024);
                // line 30
                yield "        ";
                $context["percent_used"] = (((($context["space_used"] ?? null) == 0)) ? (0) : ((100 - ((($context["space_used"] ?? null) / ($context["space_available"] ?? null)) * 100))));
                // line 31
                yield "        ";
                $context["bar_msg"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUPS_PURGE_SPACE", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->niceFilesizeFunc(($context["space_used"] ?? null)), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->niceFilesizeFunc(($context["space_available"] ?? null)));
                // line 32
                yield "    ";
            }
        }
        // line 33
        yield "
    <div id=\"admin-dashboard\">
      <div id=\"backups-stats\" class=\"dashboard-item\">
        <div class=\"primary-accent default-box-shadow\">
          <h1>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUPS_STATS"), "html", null, true);
        yield "</h1>
          <div class=\"admin-statistics-chart\">
            <div class=\"stats-info\">

                <div id=\"backups-usage\">
                    <div class=\"backups-usage-wrapper\">
                        ";
        // line 43
        if ((($context["percent_used"] ?? null) >= 100)) {
            // line 44
            yield "                            <div class=\"usage full\"></div>
                        ";
        } else {
            // line 46
            yield "                            <div class=\"usage\" style=\"width:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percent_used"] ?? null), "html", null, true);
            yield "%\"></div>
                        ";
        }
        // line 48
        yield "                    </div>
                    <h1>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bar_msg"] ?? null), "html", null, true);
        yield "</h1>
                </div>
            </div>

            <div class=\"flush-bottom button-bar stats-bar\">
              <span class=\"stat\">
                  <b>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["backups"] ?? null)), "html", null, true);
        yield "</b>
                  <i>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUPS_COUNT"), "html", null, true);
        yield "</i>
              </span>
              <span class=\"stat\">
                  <b>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(count(($context["profiles"] ?? null)), "html", null, true);
        yield "</b>
                  <i>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUPS_PROFILES_COUNT"), "html", null, true);
        yield "</i>
              </span>
                <span class=\"stat\">
                  <b>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["newest_backup"] ?? null), "html", null, true);
        yield "</b>
                  <i>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUPS_NEWEST"), "html", null, true);
        yield "</i>
              </span>
                <span class=\"stat\">
                  <b>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["oldest_backup"] ?? null), "html", null, true);
        yield "</b>
                  <i>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUPS_OLDEST"), "html", null, true);
        yield "</i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 76
        yield from $this->load("partials/blueprints.html.twig", 76)->unwrap()->yield(CoreExtension::merge($context, ["blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "blueprints", [], "any", false, false, false, 76), "data" => ($context["data"] ?? null)]));
        // line 77
        yield "
    ";
        // line 78
        yield from $this->load("partials/modal-changes-detected.html.twig", 78)->unwrap()->yield($context);
        // line 79
        yield "

</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/tools-backups.html.twig";
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
        return array (  231 => 79,  229 => 78,  226 => 77,  224 => 76,  213 => 68,  209 => 67,  203 => 64,  199 => 63,  193 => 60,  189 => 59,  183 => 56,  179 => 55,  170 => 49,  167 => 48,  161 => 46,  157 => 44,  155 => 43,  146 => 37,  140 => 33,  136 => 32,  133 => 31,  130 => 30,  127 => 29,  124 => 28,  118 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  100 => 22,  97 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/tools-backups.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/tools-backups.html.twig");
    }
}
