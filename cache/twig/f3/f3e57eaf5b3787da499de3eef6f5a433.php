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

/* partials/logo.html.twig */
class __TwigTemplate_083c8e8db2a7687d7d28c37d32938259 extends Template
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
        // line 2
        yield "<a href=\"";
        yield (((($context["base_url"] ?? null) == "")) ? ("/") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true)));
        yield "\" class=\"group/logo relative block focus:outline-none\" aria-label=\"Navigate to Home\">
    ";
        // line 3
        $context["logo"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo"))) : (null));
        // line 4
        yield "    ";
        if ((($tmp = ($context["logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        <div class=\"relative transition-all duration-300 hover:scale-105\">
            <img src=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "name", [], "any", false, false, false, 6))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
            yield "\" class=\"h-12 w-auto object-contain\" loading=\"eager\">
        </div>
    ";
        } else {
            // line 9
            yield "        <div class=\"flex items-center gap-4 py-2 px-6 bg-white/20 backdrop-blur-3xl rounded-[1.5rem] border border-white/10 shadow-lg group-hover/logo:bg-[var(--color-brand-primary)] group-hover/logo:text-white transition-all duration-700 active:scale-95\">
            <span class=\"la la-infinity text-4xl text-[var(--color-brand-primary)] group-hover/logo:text-white transition-colors duration-500 group-hover/logo:rotate-180 transition-transform duration-1000\"></span>
            <span class=\"text-3xl font-black font-heading tracking-tightest leading-none drop-shadow-sm\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
            yield "</span>
        </div>
    ";
        }
        // line 14
        yield "</a>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/logo.html.twig";
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
        return array (  73 => 14,  67 => 11,  63 => 9,  55 => 6,  52 => 5,  49 => 4,  47 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/logo.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/partials/logo.html.twig");
    }
}
