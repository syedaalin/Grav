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
        yield "<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["home_url"] ?? null), "html", null, true);
        yield "\" 
   class=\"font-black text-xl mr-spacing-base relative z-10 group focus:input-focus\" 
   title=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 3), "html");
        yield "\" 
   aria-label=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 4), "Home")) : ("Home")), "html", null, true);
        yield "\">
";
        // line 5
        if ((($tmp = ($context["logo_var"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "  ";
            $context["logo_media"] = (($_v0 = ($context["media"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[("theme://images/logo/" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["logo_var"] ?? null)), "name", [], "any", false, false, false, 6))] ?? null) : null);
            // line 7
            yield "  ";
            $context["logo_img"] = (((($tmp = ($context["mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["logo_media"] ?? null), "resize", [80, 80], "method", false, false, false, 7)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["logo_media"] ?? null), "resize", [160, 160], "method", false, false, false, 7)));
            // line 8
            yield "  <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_img"] ?? null), "url", [], "any", false, false, false, 8), "html", null, true);
            yield "\" 
       width=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_img"] ?? null), "width", [], "any", false, false, false, 9), "html", null, true);
            yield "\" 
       height=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_img"] ?? null), "height", [], "any", false, false, false, 10), "html", null, true);
            yield "\" 
       alt=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 11), "Site Logo")) : ("Site Logo")), "html", null, true);
            yield "\" 
       class=\"w-auto object-contain transition-transform duration-500 group-hover:scale-105 h-[clamp(2rem,5vh,3.5rem)]\"
       fetchpriority=\"high\"
       decoding=\"async\" />
";
        } else {
            // line 16
            yield "  <div class=\"w-auto object-contain transition-transform duration-500 group-hover:scale-105 h-[clamp(2rem,5vh,3.5rem)] text-primary\">
    ";
            // line 17
            try {
                $_v1 = $this->load("@images/grav-logo.svg", 17);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v1 = null;
            }
            if ($_v1) {
                yield from $_v1->unwrap()->yield($context);
            }
            // line 18
            yield "    ";
            if ((($tmp =  !($context["logo_media"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 19
                yield "        <span class=\"text-gradient font-black tracking-tighter\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 19), "NUR-UL-HUDA")) : ("NUR-UL-HUDA")), "html", null, true);
                yield "</span>
    ";
            }
            // line 21
            yield "  </div>
";
        }
        // line 23
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
        return array (  111 => 23,  107 => 21,  101 => 19,  98 => 18,  88 => 17,  85 => 16,  77 => 11,  73 => 10,  69 => 9,  64 => 8,  61 => 7,  58 => 6,  56 => 5,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/logo.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/logo.html.twig");
    }
}
