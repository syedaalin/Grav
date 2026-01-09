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
class __TwigTemplate_191e38e166e68c1f3c1d40e59da701a1 extends Template
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
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "\t<div id=\"error\" class=\"flex flex-col items-center justify-center min-h-[85svh] text-center px-6 py-32 bg-[var(--color-brand-bg)] @container overflow-hidden relative\" role=\"alert\" aria-labelledby=\"error-heading\">
        ";
        // line 6
        yield "        <div class=\"absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1000px] h-[1000px] bg-[var(--color-brand-primary)]/5 rounded-full blur-[200px] -z-10 animate-pulse\" aria-hidden=\"true\"></div>

\t\t<div class=\"relative w-full max-w-2xl p-16 @lg:p-24 bg-[var(--surface-sunken)]/40 backdrop-blur-3xl rounded-[5rem] border border-[var(--color-brand-primary)]/10 shadow-3xl shadow-black/5 animate-in zoom-in duration-1000 group/error-card\">
            <div class=\"absolute -top-16 left-1/2 -translate-x-1/2 w-40 h-40 bg-gradient-to-br from-[var(--color-brand-primary)] to-[var(--color-brand-secondary)] text-white rounded-[3rem] flex items-center justify-center shadow-3xl rotate-12 group-hover/error-card:rotate-0 transition-all duration-700\" aria-hidden=\"true\">
                <span class=\"la la-exclamation-triangle text-7xl\"></span>
            </div>
            
            <div class=\"mt-16 space-y-12\">
                <div class=\"relative\">
                    <span class=\"sr-only\">Error Status: </span>
                    <h1 id=\"error-heading\" class=\"text-[12rem] font-black font-heading text-[var(--color-brand-primary)] tracking-tightest leading-none drop-shadow-3xl animate-bounce\" aria-hidden=\"true\">
                        ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 17), "http_response_code", [], "any", false, false, false, 17), "html", null, true);
        yield "
                    </h1>
                </div>
                
                <h2 class=\"text-5xl font-black font-heading text-[var(--color-brand-dark)] tracking-tightest leading-tight\">
                    ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ERROR.ERROR"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 22), "http_response_code", [], "any", false, false, false, 22), "html", null, true);
        yield "
                </h2>
                
                <div class=\"text-2xl text-[var(--color-brand-dark)]/50 font-medium leading-relaxed max-w-md mx-auto\">
                    ";
        // line 26
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 26);
        yield "
                </div>
                
                <div class=\"pt-16\">
                    <a href=\"";
        // line 30
        yield (((($context["base_url"] ?? null) == "")) ? ("/") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true)));
        yield "\" class=\"group/btn inline-flex items-center gap-6 px-16 py-8 bg-[var(--color-brand-primary)] text-white font-black rounded-[2.5rem] hover:bg-[var(--color-brand-secondary)] transition-all shadow-3xl shadow-[var(--color-brand-primary)]/20 active:scale-95\" aria-label=\"Return to homepage\">
                        <span class=\"la la-home text-3xl transition-transform group-hover/btn:-translate-y-2\" aria-hidden=\"true\"></span>
                        <span class=\"uppercase tracking-widest text-sm\">Return to Safe Haven</span>
                    </a>
                </div>
            </div>
\t\t</div>
\t</div>
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
        return array (  98 => 30,  91 => 26,  82 => 22,  74 => 17,  61 => 6,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "error.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/error.html.twig");
    }
}
