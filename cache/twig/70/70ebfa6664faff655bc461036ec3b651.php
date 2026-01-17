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
<a
\thref=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["home_url"] ?? null), "html", null, true);
        yield "\" class=\"logo-link\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_title", [], "any", false, false, false, 9), "html");
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_title", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_title", [], "any", false, false, false, 9), "Home")) : ("Home")), "html", null, true);
        yield "\">

\t";
        // line 12
        yield "\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "image", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "\t\t";
            if ((($tmp = ($context["mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 14
                yield "\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "image_mobile", [], "any", false, false, false, 14), "html", null, true);
                yield "\" width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "width_mobile", [], "any", false, false, false, 14), "html", null, true);
                yield "\" height=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "height_mobile", [], "any", false, false, false, 14), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", false, false, false, 14), "Site Logo")) : ("Site Logo")), "html", null, true);
                yield "\" class=\"logo-image\" fetchpriority=\"high\" loading=\"eager\" decoding=\"async\"/>
\t\t";
            } else {
                // line 16
                yield "\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "image_desktop", [], "any", false, false, false, 16), "html", null, true);
                yield "\" width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "width_desktop", [], "any", false, false, false, 16), "html", null, true);
                yield "\" height=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "height_desktop", [], "any", false, false, false, 16), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", false, false, false, 16), "Site Logo")) : ("Site Logo")), "html", null, true);
                yield "\" class=\"logo-image\" fetchpriority=\"high\" loading=\"eager\" decoding=\"async\"/>
\t\t";
            }
            // line 18
            yield "\t";
        } else {
            // line 19
            yield "\t\t";
            // line 20
            yield "\t\t";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "\t\t\t<div class=\"logo-fallback\">
\t\t\t\t";
                // line 22
                try {
                    $_v0 = $this->load("@images/grav-logo.svg", 22);
                } catch (LoaderError $e) {
                    // ignore missing template
                    $_v0 = null;
                }
                if ($_v0) {
                    yield from $_v0->unwrap()->yield($context);
                }
                // line 23
                yield "\t\t\t</div>
\t\t";
            }
            // line 25
            yield "\t";
        }
        // line 26
        yield "
\t";
        // line 28
        yield "\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "\t\t<span class=\"logo-text desktop-only\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "site_name", [], "any", false, false, false, 29), "html", null, true);
            yield "</span>
\t";
        }
        // line 31
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
        return array (  125 => 31,  119 => 29,  116 => 28,  113 => 26,  110 => 25,  106 => 23,  96 => 22,  93 => 21,  90 => 20,  88 => 19,  85 => 18,  73 => 16,  61 => 14,  58 => 13,  55 => 12,  46 => 9,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/logo.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/logo.html.twig");
    }
}
