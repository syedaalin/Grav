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

/* error.html.twig */
class __TwigTemplate_7e2557bb6bc4cbe83d763a3a0870f171 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 6
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("partials/base.html.twig", 6);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "\t<main
\t\tid=\"error\" class=\"error-page-section\" style=\"container-type: inline-size;\">
\t\t";
        // line 12
        yield "\t\t<div class=\"error-page-glow\" aria-hidden=\"true\"></div>

\t\t<div class=\"error-page-content\">
\t\t\t<div class=\"error-card\">
\t\t\t\t<div class=\"error-code-badge\">
\t\t\t\t\t<span class=\"error-code\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 17), "http_response_code", [], "any", false, false, false, 17), "html", null, true);
        yield "</span>
\t\t\t\t</div>

\t\t\t\t<h1 class=\"section-title error-title\">
\t\t\t\t\t";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ERROR.ERROR"), "html", null, true);
        yield "
\t\t\t\t</h1>

\t\t\t\t<div class=\"prose-custom error-message\">
\t\t\t\t\t";
        // line 25
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 25);
        yield "
\t\t\t\t</div>

\t\t\t\t<div class=\"error-actions\">
\t\t\t\t\t<a href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["home_url"] ?? null), "html", null, true);
        yield "\" class=\"btn-primary error-home-button\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" class=\"error-icon\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tBack to Home
\t\t\t\t\t</a>

\t\t\t\t\t<button onclick=\"window.history.back()\" class=\"error-back-button\">
\t\t\t\t\t\t<i class=\"la la-arrow-left error-back-icon\"></i>
\t\t\t\t\t\tGo Back
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<p class=\"error-code-footer\">
\t\t\t\tError Code:
\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 45), "http_response_code", [], "any", false, false, false, 45), "html", null, true);
        yield "
\t\t\t</p>
\t\t</div>
\t</main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "error.html.twig";
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
        return array (  109 => 45,  90 => 29,  83 => 25,  76 => 21,  69 => 17,  62 => 12,  58 => 9,  51 => 8,  40 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "error.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/error.html.twig");
    }
}
