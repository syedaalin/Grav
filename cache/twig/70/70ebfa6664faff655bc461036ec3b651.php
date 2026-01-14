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
class __TwigTemplate_485d18bbdbea1bb5efadfeaeeb307ff1 extends Template
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
        // line 7
        yield "
<a href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["home_url"] ?? null), "html", null, true);
        yield "\" class=\"logo-link\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_title", [], "any", false, false, false, 8), "html");
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_title", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_title", [], "any", false, false, false, 8), "Home")) : ("Home")), "html", null, true);
        yield "\">

\t";
        // line 11
        yield "\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "image", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "\t\t";
            if ((($tmp = ($context["mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                yield "\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "image_mobile", [], "any", false, false, false, 13), "html", null, true);
                yield "\" width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "width_mobile", [], "any", false, false, false, 13), "html", null, true);
                yield "\" height=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "height_mobile", [], "any", false, false, false, 13), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", false, false, false, 13), "Site Logo")) : ("Site Logo")), "html", null, true);
                yield "\" class=\"logo-image\" fetchpriority=\"high\" decoding=\"async\"/>
\t\t";
            } else {
                // line 15
                yield "\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "image_desktop", [], "any", false, false, false, 15), "html", null, true);
                yield "\" width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "width_desktop", [], "any", false, false, false, 15), "html", null, true);
                yield "\" height=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "height_desktop", [], "any", false, false, false, 15), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", false, false, false, 15), "Site Logo")) : ("Site Logo")), "html", null, true);
                yield "\" class=\"logo-image\" fetchpriority=\"high\" decoding=\"async\"/>
\t\t";
            }
            // line 17
            yield "\t";
        } else {
            // line 18
            yield "\t\t";
            // line 19
            yield "\t\t";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "\t\t\t<div class=\"logo-fallback\">
\t\t\t\t";
                // line 21
                try {
                    $_v0 = $this->load("@images/grav-logo.svg", 21);
                } catch (LoaderError $e) {
                    // ignore missing template
                    $_v0 = null;
                }
                if ($_v0) {
                    yield from $_v0->unwrap()->yield($context);
                }
                // line 22
                yield "\t\t\t</div>
\t\t";
            }
            // line 24
            yield "\t";
        }
        // line 25
        yield "
\t";
        // line 27
        yield "\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "\t\t<span class=\"logo-text desktop-only\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", false, false, false, 28), "html", null, true);
            yield "</span>
\t";
        }
        // line 30
        yield "</a>
";
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
        return array (  124 => 30,  118 => 28,  115 => 27,  112 => 25,  109 => 24,  105 => 22,  95 => 21,  92 => 20,  89 => 19,  87 => 18,  84 => 17,  72 => 15,  60 => 13,  57 => 12,  54 => 11,  45 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/logo.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/logo.html.twig");
    }
}
