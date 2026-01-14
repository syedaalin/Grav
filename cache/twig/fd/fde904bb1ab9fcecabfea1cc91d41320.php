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

/* partials/bottom-banner/brand.html.twig */
class __TwigTemplate_a9ae3ba932fcd21ab7a086506cbee642 extends Template
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
        yield "<div class=\"bottom-banner-header\">
    <div class=\"bottom-banner-brand-column\">
        <hgroup class=\"bottom-banner-brand-header\">
            ";
        // line 5
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "logo", [], "any", false, false, false, 5) && CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "show_logo", [], "any", false, false, false, 5))) {
            // line 6
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["home_url"] ?? null), "html", null, true);
            yield "\" class=\"bottom-banner-logo-link\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "site_name", [], "any", false, false, false, 6), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "logo", [], "any", false, false, false, 7)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "site_name", [], "any", false, false, false, 7), "html", null, true);
            yield "\" class=\"bottom-banner-logo\" width=\"80\" height=\"auto\" loading=\"lazy\">
                </a>
            ";
        }
        // line 10
        yield "
            ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "show_site_name", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "                <h2 class=\"bottom-banner-brand-title\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "site_name", [], "any", false, false, false, 12), "html", null, true);
            yield "</h2>
            ";
        }
        // line 14
        yield "
            ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "site_tagline", [], "any", false, false, false, 15) && CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "show_tagline", [], "any", false, false, false, 15))) {
            // line 16
            yield "                <p class=\"bottom-banner-brand-tagline\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "site_tagline", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
            ";
        }
        // line 18
        yield "        </hgroup>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/bottom-banner/brand.html.twig";
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
        return array (  86 => 18,  80 => 16,  78 => 15,  75 => 14,  69 => 12,  67 => 11,  64 => 10,  56 => 7,  49 => 6,  47 => 5,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/bottom-banner/brand.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/bottom-banner/brand.html.twig");
    }
}
