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

/* partials/bottom-banner-newsletter.html.twig */
class __TwigTemplate_758a544c59a4ca501ee689b18fd12fdd extends Template
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
        $context["enabled"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_newsletter_enabled");
        // line 3
        $context["title"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_newsletter_title"), "Stay Connected");
        // line 4
        $context["text"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_newsletter_text"), "Join our spiritual journey for weekly insights.");
        // line 5
        yield "
";
        // line 6
        if ((($tmp = ($context["enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "\t<section class=\"bottom-banner-newsletter\" aria-labelledby=\"newsletter-heading\">
\t\t<div class=\"newsletter-container\">
\t\t\t<div class=\"newsletter-content\">
\t\t\t\t<h3 id=\"newsletter-heading\" class=\"newsletter-title\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</h3>
\t\t\t\t<p class=\"newsletter-description\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
            yield "</p>
\t\t\t</div>

\t\t\t<div
\t\t\t\tclass=\"newsletter-form-wrapper\">
\t\t\t\t";
            // line 17
            yield "\t\t\t\t<form class=\"newsletter-form\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true);
            yield "/newsletter-signup\" method=\"post\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Enter your email\" required aria-label=\"Email address\" class=\"newsletter-input\">
\t\t\t\t\t\t<button type=\"submit\" class=\"newsletter-submit\">
\t\t\t\t\t\t\t<span>Subscribe</span>
\t\t\t\t\t\t\t<i class=\"la la-paper-plane\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 26
            yield "\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</section>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/bottom-banner-newsletter.html.twig";
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
        return array (  82 => 26,  70 => 17,  62 => 11,  58 => 10,  53 => 7,  51 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/bottom-banner-newsletter.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/bottom-banner-newsletter.html.twig");
    }
}
