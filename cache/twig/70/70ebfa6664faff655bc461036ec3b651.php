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
        // line 1
        $context["custom_logo_file"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo");
        // line 2
        $context["logo_image"] = (((($tmp = ($context["custom_logo_file"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = ($context["media"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[("theme://images/logo/" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["custom_logo_file"] ?? null)), "name", [], "any", false, false, false, 2))] ?? null) : null)) : (null));
        // line 3
        $context["site_name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "site_name");
        // line 4
        yield "
<a
\thref=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["home_url"] ?? null), "html", null, true);
        yield "\" class=\"logo-link\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 6), "html");
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 6), "Home")) : ("Home")), "html", null, true);
        yield "\">

\t";
        // line 9
        yield "\t";
        if ((($tmp = ($context["logo_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "\t\t";
            $context["logo_resized"] = (((($tmp = ($context["mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["logo_image"] ?? null), "resize", [80, 80], "method", false, false, false, 10)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["logo_image"] ?? null), "resize", [160, 160], "method", false, false, false, 10)));
            // line 11
            yield "\t\t<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_resized"] ?? null), "url", [], "any", false, false, false, 11), "html", null, true);
            yield "\" width=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_resized"] ?? null), "width", [], "any", false, false, false, 11), "html", null, true);
            yield "\" height=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_resized"] ?? null), "height", [], "any", false, false, false, 11), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((array_key_exists("site_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["site_name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 11))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 11))), "Site Logo"), "html", null, true);
            yield "\" class=\"logo-image\" fetchpriority=\"high\" decoding=\"async\"/>
\t";
        } else {
            // line 13
            yield "\t\t";
            // line 14
            yield "\t\t";
            if ((($tmp =  !($context["site_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "\t\t\t<div class=\"logo-fallback\">
\t\t\t\t";
                // line 16
                try {
                    $_v1 = $this->load("@images/grav-logo.svg", 16);
                } catch (LoaderError $e) {
                    // ignore missing template
                    $_v1 = null;
                }
                if ($_v1) {
                    yield from $_v1->unwrap()->yield($context);
                }
                // line 17
                yield "\t\t\t</div>
\t\t";
            }
            // line 19
            yield "\t";
        }
        // line 20
        yield "
\t";
        // line 22
        yield "\t";
        if ((($tmp = ($context["site_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "\t\t<span class=\"logo-text desktop-only\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
            yield "</span>
\t";
        }
        // line 25
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
        return array (  116 => 25,  110 => 23,  107 => 22,  104 => 20,  101 => 19,  97 => 17,  87 => 16,  84 => 15,  81 => 14,  79 => 13,  67 => 11,  64 => 10,  61 => 9,  52 => 6,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/logo.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/logo.html.twig");
    }
}
