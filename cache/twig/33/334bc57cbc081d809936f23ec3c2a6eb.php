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

/* partials/dashboard-statistics.html.twig */
class __TwigTemplate_cea30d3b8d6c5184d32ab90e43e485ee extends Template
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
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.statistics", "admin.super"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <div id=\"popularity\" class=\"dashboard-item dashboard-right\" data-chart-name=\"popularity\" data-chart-type=\"bar\" data-chart-data=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["series" => [(($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["popularity"] ?? null), "getDailyChartData", [], "any", false, false, false, 2)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["data"] ?? null) : null)], "labels" => (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["popularity"] ?? null), "getDailyChartData", [], "any", false, false, false, 2)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["labels"] ?? null) : null)]), "html_attr");
            yield "\">
        <div class=\"primary-accent default-box-shadow\">
            <h1>";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.VIEWS_STATISTICS"), "html", null, true);
            yield "</h1>
            <div class=\"admin-statistics-chart\">
                <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                <div class=\"flush-bottom button-bar stats-bar\">
                    <span class=\"stat\">
                        <b>";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["popularity"] ?? null), "getDailyTotal", [], "any", false, false, false, 9), "html", null, true);
            yield "</b>
                        <i>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.TODAY"), "html", null, true);
            yield "</i>
                    </span>
                    <span class=\"stat\">
                        <b>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["popularity"] ?? null), "getWeeklyTotal", [], "any", false, false, false, 13), "html", null, true);
            yield "</b>
                        <i>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.WEEK"), "html", null, true);
            yield "</i>
                    </span>
                    <span class=\"stat\">
                        <b>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["popularity"] ?? null), "getMonthlyTotal", [], "any", false, false, false, 17), "html", null, true);
            yield "</b>
                        <i>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.MONTH"), "html", null, true);
            yield "</i>
                    </span>
                </div>
            </div>
        </div>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/dashboard-statistics.html.twig";
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
        return array (  82 => 18,  78 => 17,  72 => 14,  68 => 13,  62 => 10,  58 => 9,  50 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/dashboard-statistics.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/dashboard-statistics.html.twig");
    }
}
