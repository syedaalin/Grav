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

/* partials/bottom-banner/newsletter.html.twig */
class __TwigTemplate_14e74520a78d8adda9708c70a37808a8 extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "newsletter_enabled", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "\t<section class=\"bottom-banner-newsletter\" aria-label=\"Newsletter Subscription\">
\t\t<div class=\"newsletter-container\">

\t\t\t<div class=\"newsletter-content\">
\t\t\t\t<h3 class=\"newsletter-title\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "newsletter_title", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "newsletter_title", [], "any", false, false, false, 7), "Subscribe to our Newsletter")) : ("Subscribe to our Newsletter")), "html", null, true);
            yield "</h3>
\t\t\t\t<p class=\"newsletter-description\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "newsletter_description", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "newsletter_description", [], "any", false, false, false, 8), "Stay updated with the latest prayer times, events, and community news.")) : ("Stay updated with the latest prayer times, events, and community news.")), "html", null, true);
            yield "</p>
\t\t\t</div>

\t\t\t<div class=\"newsletter-form-wrapper\">
\t\t\t\t";
            // line 13
            yield "\t\t\t\t<form class=\"newsletter-form\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true);
            yield "/newsletter-signup\" method=\"post\">
\t\t\t\t\t";
            // line 15
            yield "\t\t\t\t\t<div style=\"display: none;\" aria-hidden=\"true\">
\t\t\t\t\t\t<input type=\"text\" name=\"website_honeypot\" tabindex=\"-1\" autocomplete=\"off\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<div class=\"newsletter-input-wrapper\">
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\ttype=\"email\" 
\t\t\t\t\t\t\t\tname=\"email\" 
\t\t\t\t\t\t\t\tid=\"newsletter-email\"
\t\t\t\t\t\t\t\tplaceholder=\" \" 
\t\t\t\t\t\t\t\trequired 
\t\t\t\t\t\t\t\tclass=\"newsletter-input\"
\t\t\t\t\t\t\t\tautocomplete=\"email\"
\t\t\t\t\t\t\t\tinputmode=\"email\"
\t\t\t\t\t\t\t\tspellcheck=\"false\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t<label for=\"newsletter-email\" class=\"newsletter-label\">Your email address</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"submit\" class=\"newsletter-submit\" aria-label=\"Subscribe\">
\t\t\t\t\t\t\t<span>Subscribe</span>
\t\t\t\t\t\t\t<i class=\"la la-paper-plane\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
                    <div class=\"form-status\" aria-live=\"polite\"></div>
\t\t\t\t</form>
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
        return "partials/bottom-banner/newsletter.html.twig";
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
        return array (  66 => 15,  61 => 13,  54 => 8,  50 => 7,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/bottom-banner/newsletter.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/bottom-banner/newsletter.html.twig");
    }
}
