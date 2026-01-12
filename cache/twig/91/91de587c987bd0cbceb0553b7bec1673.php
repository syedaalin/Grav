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

/* partials/tntsearch.html.twig */
class __TwigTemplate_d8b2f8358a443fe70eaf863f2d011ee5 extends Template
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
        $context["url"] = ((array_key_exists("url", $context)) ? (Twig\Extension\CoreExtension::default(($context["url"] ?? null), (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->rtrimFilter(($context["base_url"] ?? null), "/") . "/") . Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.query_route", "s"], "method", false, false, false, 1), "/")))) : ((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->rtrimFilter(($context["base_url"] ?? null), "/") . "/") . Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.query_route", "s"], "method", false, false, false, 1), "/"))));
        // line 2
        $context["limit"] = ((array_key_exists("limit", $context)) ? (Twig\Extension\CoreExtension::default(($context["limit"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.limit", 20], "method", false, false, false, 2))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.limit", 20], "method", false, false, false, 2)));
        // line 3
        $context["snippet"] = ((array_key_exists("snippet", $context)) ? (Twig\Extension\CoreExtension::default(($context["snippet"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.snippet", 300], "method", false, false, false, 3))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.snippet", 300], "method", false, false, false, 3)));
        // line 4
        $context["min"] = ((array_key_exists("min", $context)) ? (Twig\Extension\CoreExtension::default(($context["min"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.min", 3], "method", false, false, false, 4))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.min", 3], "method", false, false, false, 4)));
        // line 5
        $context["search_type"] = ((array_key_exists("search_type", $context)) ? (Twig\Extension\CoreExtension::default(($context["search_type"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.search_type", "auto"], "method", false, false, false, 5))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.search_type", "auto"], "method", false, false, false, 5)));
        // line 6
        $context["placeholder"] = ((array_key_exists("placeholder", $context)) ? (Twig\Extension\CoreExtension::default(($context["placeholder"] ?? null), "Search Resources...")) : ("Search Resources..."));
        // line 7
        $context["live_update"] = (((($tmp = ($context["in_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((array_key_exists("live_update", $context)) ? (Twig\Extension\CoreExtension::default(($context["live_update"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.live_uri_update", 1], "method", false, false, false, 7))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.live_uri_update", 1], "method", false, false, false, 7)))) : (0));
        // line 8
        $context["nojs_action"] = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.tntsearch.search_route", "/search"], "method", false, false, false, 8), "/");
        // line 9
        yield "
";
        // line 10
        $context["options"] = ["uri" => ($context["url"] ?? null), "limit" => ($context["limit"] ?? null), "snippet" => ($context["snippet"] ?? null), "min" => ($context["min"] ?? null), "in_page" => ($context["in_page"] ?? null), "live_update" => ($context["live_update"] ?? null), "search_type" => ($context["search_type"] ?? null)];
        // line 11
        yield "
<form role=\"form\" class=\"tntsearch-form group\" action=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nojs_action"] ?? null), "html", null, true);
        yield "\" method=\"get\">
    <div id=\"tntsearch-wrapper\" style=\"position: relative;\">
        <label for=\"tntsearch-field\" class=\"sr-only\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "html", null, true);
        yield "</label>
        <input 
            type=\"text\" 
            name=\"q\" 
            id=\"tntsearch-field\"
            class=\"tntsearch-input tntsearch-field";
        // line 19
        yield (((($tmp = ($context["in_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" tntsearch-field-inpage") : (""));
        yield "\" 
            data-tntsearch=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["options"] ?? null)), "html_attr");
        yield "\" 
            placeholder=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "html", null, true);
        yield "\" 
            value=\"";
        // line 22
        yield (((($tmp =  !($context["dropdown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["query"] ?? null))) : (""));
        yield "\"
            autocomplete=\"off\"
        >
        <div class=\"tntsearch-icon-wrapper\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
            </svg>
        </div>
        <span class=\"tntsearch-clear\" ";
        // line 30
        yield ((( !($context["query"] ?? null) || ($context["dropdown"] ?? null))) ? ("style=\"display: none;\"") : (""));
        yield ">&times;</span>
    </div>
    
    <div class=\"tntsearch-results";
        // line 33
        yield (((($tmp = ($context["in_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" tntsearch-results-inpage") : (""));
        yield "\">
        ";
        // line 34
        if (((array_key_exists("tntsearch_results", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["tntsearch_results"] ?? null))) && ($context["in_page"] ?? null))) {
            // line 35
            yield "            ";
            yield from $this->load("tntquery-ajax.html.twig", 35)->unwrap()->yield($context);
            // line 36
            yield "        ";
        }
        // line 37
        yield "    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/tntsearch.html.twig";
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
        return array (  120 => 37,  117 => 36,  114 => 35,  112 => 34,  108 => 33,  102 => 30,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  71 => 14,  66 => 12,  63 => 11,  61 => 10,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/tntsearch.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/tntsearch.html.twig");
    }
}
