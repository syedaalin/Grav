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
<a href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["home_url"] ?? null), "html", null, true);
        yield "\" 
   class=\"font-black text-xl mr-spacing-base relative z-10 group focus:input-focus flex items-center gap-2\" 
   title=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 7), "html");
        yield "\" 
   aria-label=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 8), "Home")) : ("Home")), "html", null, true);
        yield "\">

    ";
        // line 11
        yield "    ";
        if ((($tmp = ($context["logo_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "        ";
            $context["logo_resized"] = (((($tmp = ($context["mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["logo_image"] ?? null), "resize", [80, 80], "method", false, false, false, 12)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["logo_image"] ?? null), "resize", [160, 160], "method", false, false, false, 12)));
            // line 13
            yield "        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_resized"] ?? null), "url", [], "any", false, false, false, 13), "html", null, true);
            yield "\" 
             width=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_resized"] ?? null), "width", [], "any", false, false, false, 14), "html", null, true);
            yield "\" 
             height=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_resized"] ?? null), "height", [], "any", false, false, false, 15), "html", null, true);
            yield "\" 
             alt=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((array_key_exists("site_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["site_name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 16))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 16))), "Site Logo"), "html", null, true);
            yield "\" 
             class=\"w-auto object-contain transition-transform duration-500 group-hover:scale-105 h-[clamp(2rem,5vh,3.5rem)]\"
             fetchpriority=\"high\"
             decoding=\"async\" />
    ";
        } else {
            // line 21
            yield "        ";
            // line 22
            yield "        ";
            if ((($tmp =  !($context["site_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "             <div class=\"w-auto object-contain transition-transform duration-500 group-hover:scale-105 h-[clamp(2rem,5vh,3.5rem)] text-primary\">
                ";
                // line 24
                try {
                    $_v1 = $this->load("@images/grav-logo.svg", 24);
                } catch (LoaderError $e) {
                    // ignore missing template
                    $_v1 = null;
                }
                if ($_v1) {
                    yield from $_v1->unwrap()->yield($context);
                }
                // line 25
                yield "             </div>
        ";
            }
            // line 27
            yield "    ";
        }
        // line 28
        yield "
    ";
        // line 30
        yield "    ";
        if ((($tmp = ($context["site_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "        <span class=\"text-gradient font-black tracking-tighter hidden @lg:inline\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
            yield "</span>
    ";
        }
        // line 33
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
        return array (  129 => 33,  123 => 31,  120 => 30,  117 => 28,  114 => 27,  110 => 25,  100 => 24,  97 => 23,  94 => 22,  92 => 21,  84 => 16,  80 => 15,  76 => 14,  71 => 13,  68 => 12,  65 => 11,  60 => 8,  56 => 7,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/logo.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/logo.html.twig");
    }
}
