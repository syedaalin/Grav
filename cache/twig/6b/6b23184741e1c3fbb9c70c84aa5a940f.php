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

/* modular/hero.html.twig */
class __TwigTemplate_77d561e7cbc2b1e871dc99c46a439a6e extends Template
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
        $macros["components"] = $this->macros["components"] = $this->load("macros/components.html.twig", 1)->unwrap();
        // line 2
        yield "
<section class=\"relative min-h-[90vh] @lg:min-h-screen flex items-center justify-center overflow-hidden bg-[var(--color-brand-dark)] text-white @container\">
    ";
        // line 5
        yield "    <div class=\"absolute inset-0 z-0 bg-[var(--color-brand-dark)]\">
        ";
        // line 6
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "video_url", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "             <video autoplay loop muted playsinline webkit-playsinline class=\"w-full h-full object-cover scale-105 opacity-0 animate-[fade-in_1s_ease-out_forwards]\">
                <source src=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 8), "video_url", [], "any", false, false, false, 8), "html", null, true);
            yield "\" type=\"video/mp4\">
            </video>
        ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["config"] ?? null), "theme", [], "any", false, false, false, 10), "hero_video_url", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "             <video autoplay loop muted playsinline webkit-playsinline class=\"w-full h-full object-cover scale-105 opacity-0 animate-[fade-in_1s_ease-out_forwards]\">
                <source src=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/hero/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 12), "hero_video_url", [], "any", false, false, false, 12))), "html", null, true);
            yield "\" type=\"video/mp4\">
            </video>
        ";
        } else {
            // line 15
            yield "            ";
            // line 16
            yield "        ";
        }
        // line 17
        yield "        <div class=\"absolute inset-0 bg-black/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, true, false, 17), "hero_glass_opacity", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 17), "hero_glass_opacity", [], "any", false, false, false, 17), 60)) : (60)), "html", null, true);
        yield " backdrop-blur-sm\"></div>
    </div>

    ";
        // line 21
        yield "    <div class=\"container mx-auto px-6 max-w-[var(--spacing-container)] relative z-10 grid grid-cols-1 @lg:grid-cols-2 gap-12 items-center\">
        
        ";
        // line 24
        yield "        <div class=\"text-white space-y-8 animate-fade-in-up\">
            <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-sm font-bold uppercase tracking-widest text-brand-accent\">
                <span class=\"w-2 h-2 rounded-full bg-brand-accent animate-pulse\"></span>
                ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 27), "badge", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 27), "badge", [], "any", false, false, false, 27), "Serving Humanity Since 2005")) : ("Serving Humanity Since 2005")), "html", null, true);
        yield "
            </div>
            
            <h1 class=\"text-[length:var(--text-h1)] font-black leading-tight tracking-tight\">
                ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 31), "title", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 31), "title", [], "any", false, false, false, 31), "Empowering Communities Through Faith & Action")) : ("Empowering Communities Through Faith & Action")), "html", null, true);
        yield "
            </h1>
            
            <p class=\"text-xl text-white/80 max-w-xl leading-relaxed\">
                ";
        // line 35
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 35);
        yield "
            </p>
            
            <div class=\"flex flex-wrap gap-4 pt-4\">
                ";
        // line 40
        yield "                ";
        $context["primary_text"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 40), "primary_btn_text", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 40), "primary_btn_text", [], "any", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 40), "hero_primary_cta_text", [], "any", false, false, false, 40))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 40), "hero_primary_cta_text", [], "any", false, false, false, 40)));
        // line 41
        yield "                ";
        $context["primary_link"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 41), "primary_btn_link", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 41), "primary_btn_link", [], "any", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 41), "hero_primary_cta_link", [], "any", false, false, false, 41))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 41), "hero_primary_cta_link", [], "any", false, false, false, 41)));
        // line 42
        yield "                
                ";
        // line 43
        if ((($tmp = ($context["primary_text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                    ";
            yield $macros["components"]->getTemplateForMacro("macro_cta_button", $context, 44, $this->getSourceContext())->macro_cta_button(...[($context["primary_text"] ?? null), ($context["primary_link"] ?? null), "primary"]);
            yield "
                ";
        }
        // line 46
        yield "
                ";
        // line 48
        yield "                ";
        $context["secondary_text"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 48), "secondary_btn_text", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 48), "secondary_btn_text", [], "any", false, false, false, 48), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 48), "hero_secondary_cta_text", [], "any", false, false, false, 48))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 48), "hero_secondary_cta_text", [], "any", false, false, false, 48)));
        // line 49
        yield "                ";
        $context["secondary_link"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 49), "secondary_btn_link", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 49), "secondary_btn_link", [], "any", false, false, false, 49), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 49), "hero_secondary_cta_link", [], "any", false, false, false, 49))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 49), "hero_secondary_cta_link", [], "any", false, false, false, 49)));
        // line 50
        yield "                
                ";
        // line 51
        if ((($tmp = ($context["secondary_text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "                    ";
            yield $macros["components"]->getTemplateForMacro("macro_cta_button", $context, 52, $this->getSourceContext())->macro_cta_button(...[($context["secondary_text"] ?? null), ($context["secondary_link"] ?? null), "secondary"]);
            yield "
                ";
        }
        // line 54
        yield "            </div>
        </div>
        
        ";
        // line 58
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 58), "inspiration_text", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "        <div class=\"hidden @lg:block\">
            <div class=\"bg-white/5 backdrop-blur-2xl border border-white/10 p-10 rounded-[3rem] shadow-2xl relative overflow-hidden group hover:bg-white/10 transition-colors duration-500\">
                <i class=\"las la-quote-right absolute top-8 right-8 text-8xl text-white/5 group-hover:text-white/10 transition-colors\"></i>
                
                <div class=\"relative z-10 space-y-6\">
                    <span class=\"text-xs font-black uppercase tracking-[0.2em] text-white/40\">Daily Inspiration</span>
                    <blockquote class=\"text-3xl font-serif italic leading-relaxed text-white\">
                        ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 66), "inspiration_text", [], "any", false, false, false, 66), "html", null, true);
            yield "
                    </blockquote>
                    <cite class=\"block font-sans font-bold text-brand-accent not-italic\">
                        — ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 69), "inspiration_source", [], "any", false, false, false, 69), "html", null, true);
            yield "
                    </cite>
                </div>
            </div>
        </div>
        ";
        }
        // line 75
        yield "    </div>
    
    ";
        // line 78
        yield "    <div class=\"absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/50 animate-bounce\">
        <span class=\"text-[10px] uppercase tracking-widest\">Scroll</span>
        <i class=\"las la-arrow-down\"></i>
    </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/hero.html.twig";
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
        return array (  187 => 78,  183 => 75,  174 => 69,  168 => 66,  159 => 59,  156 => 58,  151 => 54,  145 => 52,  143 => 51,  140 => 50,  137 => 49,  134 => 48,  131 => 46,  125 => 44,  123 => 43,  120 => 42,  117 => 41,  114 => 40,  107 => 35,  100 => 31,  93 => 27,  88 => 24,  84 => 21,  77 => 17,  74 => 16,  72 => 15,  66 => 12,  63 => 11,  61 => 10,  56 => 8,  53 => 7,  51 => 6,  48 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modular/hero.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/modular/hero.html.twig");
    }
}
