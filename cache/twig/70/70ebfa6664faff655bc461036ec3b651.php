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
        $context["logo_var"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo");
        // line 2
        yield "<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["home_url"] ?? null), "html", null, true);
        yield "\" class=\"font-bold text-xl mr-10 relative z-10 group focus:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:rounded-lg transition-colors\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 2), "html");
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 2), "Home")) : ("Home")), "html", null, true);
        yield "\">
";
        // line 3
        if ((($tmp = ($context["logo_var"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "  ";
            $context["logo_media"] = (($_v0 = ($context["media"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[("theme://images/logo/" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["logo_var"] ?? null)), "name", [], "any", false, false, false, 4))] ?? null) : null);
            // line 5
            yield "  ";
            $context["logo_img"] = (((($tmp = ($context["mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["logo_media"] ?? null), "resize", [80, 80], "method", false, false, false, 5)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["logo_media"] ?? null), "resize", [160, 160], "method", false, false, false, 5)));
            // line 6
            yield "  <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_img"] ?? null), "url", [], "any", false, false, false, 6), "html", null, true);
            yield "\" 
       width=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_img"] ?? null), "width", [], "any", false, false, false, 7), "html", null, true);
            yield "\" 
       height=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_img"] ?? null), "height", [], "any", false, false, false, 8), "html", null, true);
            yield "\" 
       alt=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 9), "Site Logo")) : ("Site Logo")), "html", null, true);
            yield "\" 
       class=\"h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-105\" 
       style=\"height: var(--header-logo-height, 2.5rem); width: auto;\"
       fetchpriority=\"high\"
       decoding=\"async\" />
";
        } else {
            // line 15
            yield "  <div class=\"h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-105\" style=\"height: var(--header-logo-height, 2.5rem);\">
    ";
            // line 16
            yield from $this->load("@images/grav-logo.svg", 16)->unwrap()->yield($context);
            // line 17
            yield "  </div>
";
        }
        // line 19
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
        return array (  92 => 19,  88 => 17,  86 => 16,  83 => 15,  74 => 9,  70 => 8,  66 => 7,  61 => 6,  58 => 5,  55 => 4,  53 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/logo.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/logo.html.twig");
    }
}
