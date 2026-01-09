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

/* partials/media-list-wrapper__list__filters.html.twig */
class __TwigTemplate_280424fa046793c5a4be63152530f154 extends Template
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
        yield "<div>
    <div class=\"filter-wrapper filter-type\">
        <select class=\"filter js__filter\" data-name=\"type\" data-grav-selectize>
            <option value=\"*\" ";
        // line 4
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 4), "param", ["type"], "method", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "selected";
        }
        yield ">All Files</option>
            <option value=\"images\" ";
        // line 5
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 5), "param", ["type"], "method", false, false, false, 5) == "images")) {
            yield "selected";
        }
        yield ">Images</option>
            <option value=\"videos\"";
        // line 6
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 6), "param", ["type"], "method", false, false, false, 6) == "videos")) {
            yield "selected";
        }
        yield ">Videos</option>
            <option value=\"audios\"";
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 7), "param", ["type"], "method", false, false, false, 7) == "audios")) {
            yield "selected";
        }
        yield ">Audio</option>
            <option value=\"files\"";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 8), "param", ["type"], "method", false, false, false, 8) == "files")) {
            yield "selected";
        }
        yield ">Files</option>
        </select>
    </div>

    <div class=\"filter-wrapper filter-date\">
        <select class=\"filter js__filter\" data-name=\"date\" data-grav-selectize>
            <option value=\"*\">All Dates</option>
            ";
        // line 15
        $context["theDate"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
        // line 16
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "filesDates", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["year"] => $context["months"]) {
            // line 17
            yield "                <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "\">
                    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["months"]);
            foreach ($context['_seq'] as $context["month"] => $context["number"]) {
                // line 19
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["month"], "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 19), "param", ["date"], "method", false, false, false, 19) == (($context["year"] . "-") . $context["month"]))) {
                    yield "selected";
                }
                yield ">
                            ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["theDate"] ?? null), "setDate", [CoreExtension::getAttribute($this->env, $this->source, ($context["theDate"] ?? null), "format", ["Y"], "method", false, false, false, 20), $context["month"], CoreExtension::getAttribute($this->env, $this->source, ($context["theDate"] ?? null), "format", ["d"], "method", false, false, false, 20)], "method", false, false, false, 20), "M"), "html", null, true);
                yield "
                            (";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["number"], "html", null, true);
                yield ")</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['month'], $context['number'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "                </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['year'], $context['months'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
        </select>
    </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/media-list-wrapper__list__filters.html.twig";
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
        return array (  129 => 25,  122 => 23,  114 => 21,  110 => 20,  99 => 19,  95 => 18,  90 => 17,  85 => 16,  83 => 15,  71 => 8,  65 => 7,  59 => 6,  53 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/media-list-wrapper__list__filters.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/media-list-wrapper__list__filters.html.twig");
    }
}
