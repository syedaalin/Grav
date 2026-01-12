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

/* partials/dashboard-maintenance.html.twig */
class __TwigTemplate_991a684e961110bceaed2573d151f2d7 extends Template
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
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.maintenance", "admin.super"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            $context["backup"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "lastBackup", [], "method", false, false, false, 2);
            // line 3
            yield "
    <div id=\"updates\" class=\"dashboard-item dashboard-left\">
        <div class=\"secondary-accent default-box-shadow\">
            <h1>";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.MAINTENANCE"), "html", null, true);
            yield "</h1>
            <div class=\"admin-update-charts\">
                <div class=\"updates-chart\" data-chart-name=\"updates\" data-chart-type=\"pie\" data-chart-data=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["series" => [100, 0]]), "html_attr");
            yield "\">
                    <div class=\"chart-wrapper\">
                        <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\"><span>-</span><em>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.UPDATED")), "html", null, true);
            yield "</em></span>
                    </div>
                    <p class=\"js__updates-available-description\">&nbsp;</p>
                </div>
                <div class=\"backups-chart\" data-chart-name=\"backups\" data-chart-type=\"pie\" data-chart-data=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["series" => [CoreExtension::getAttribute($this->env, $this->source, ($context["backup"] ?? null), "chart_fill", [], "any", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, ($context["backup"] ?? null), "chart_empty", [], "any", false, false, false, 15)]]), "html_attr");
            yield "\">
                    <div class=\"chart-wrapper\">
                        <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\">";
            // line 18
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["backup"] ?? null), "days", [], "any", false, false, false, 18);
            yield "<em>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DAYS")), "html", null, true);
            yield "</em></span>
                    </div>
                    <p class=\"hidden\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.LAST_BACKUP"), "html", null, true);
            yield "</p>
                </div>
            </div>

            <div class=\"flush-bottom button-bar\">
                <a class=\"button hidden\" href=\"#\" data-update-packages data-remodal-target=\"update-packages\"  data-plugin-action=\"start-packages-update\"><i class=\"fa fa-cloud-download\"></i> ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.UPDATE"), "html", null, true);
            yield "</a>
                ";
            // line 26
            yield from $this->load("partials/backups-button.html.twig", 26)->unwrap()->yield($context);
            // line 27
            yield "            </div>
        </div>
    </div>

    ";
            // line 31
            yield from $this->load("partials/modal-update-packages.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["type" => "plugin"]));
            // line 32
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/dashboard-maintenance.html.twig";
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
        return array (  105 => 32,  103 => 31,  97 => 27,  95 => 26,  91 => 25,  83 => 20,  76 => 18,  70 => 15,  63 => 11,  57 => 8,  52 => 6,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/dashboard-maintenance.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/dashboard-maintenance.html.twig");
    }
}
