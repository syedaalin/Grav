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

/* partials/list-sort.html.twig */
class __TwigTemplate_749eb9eb72650727ecf56ac0dd73cf2a extends Template
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
        yield "<form class=\"sort-actions\" data-grav-selectize=\"true\">
    <select>
        <option value=\"name\" selected>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.NAME"), "html", null, true);
        yield "</option>
        <option value=\"author\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.AUTHOR"), "html", null, true);
        yield "</option>
        <option value=\"official\">GravTeam</option>
        <option value=\"premium\">Premium</option>
        <option value=\"release-date\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RELEASE_DATE"), "html", null, true);
        yield "</option>
        ";
        // line 8
        if (((($context["list_view"] ?? null) == "plugins") &&  !($context["installing"] ?? null))) {
            yield "<option value=\"enabled\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ENABLED"), "html", null, true);
            yield "</option>";
        }
        // line 9
        yield "        ";
        if ((($tmp =  !($context["installing"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<option value=\"updatable\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.UPDATES_AVAILABLE"), "html", null, true);
            yield "</option>";
        }
        // line 10
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 10), "gpm", [], "any", false, false, false, 10), "releases", [], "any", false, false, false, 10) == "testing")) {
            yield "<option value=\"testing\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.TESTING"), "html", null, true);
            yield "</option>";
        }
        // line 11
        yield "    </select>
    <div class=\"sort-icon\"><i class=\"fa fa-fw fa-sort-amount-asc\"></i></div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/list-sort.html.twig";
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
        return array (  80 => 11,  73 => 10,  66 => 9,  60 => 8,  56 => 7,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/list-sort.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/list-sort.html.twig");
    }
}
