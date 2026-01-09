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

/* modular/testimonials.html.twig */
class __TwigTemplate_4ba4996834a8d0df608298fa191be951 extends Template
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
        // line 5
        yield "<section class=\"testimonials-modular py-32 bg-[var(--color-brand-bg)] @container overflow-hidden [content-visibility:auto] [contain-intrinsic-size:500px]\">
    <div class=\"container mx-auto px-6 max-w-[var(--spacing-container)]\">
        ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "        <header class=\"mb-20 text-center @lg:text-left\">
            <span class=\"text-xs font-black uppercase tracking-[0.4em] text-[var(--color-brand-primary)] animate-in slide-in-from-left duration-700\">Success Stories</span>
            <h2 class=\"text-[var(--text-h2)] font-black text-[var(--color-brand-dark)] tracking-tighter leading-tightest\">
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), "html", null, true);
            yield "
            </h2>
        </header>
        ";
        }
        // line 15
        yield "
        <div class=\"testimonial-carousel flex gap-10 overflow-x-auto snap-x snap-mandatory no-scrollbar pb-12 cursor-grab active:cursor-grabbing\">
            ";
        // line 17
        $context["testimonials"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 17), "testimonials", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 17), "testimonials", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "testimonials_list", [], "any", false, false, false, 17))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "testimonials_list", [], "any", false, false, false, 17)));
        // line 18
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            yield "                <div class=\"testimonial-card shrink-0 w-[85vw] @md:w-[500px] snap-center p-12 bg-white/60 backdrop-blur-3xl border border-white/20 rounded-[3rem] shadow-xl hover:shadow-4xl hover:border-[var(--color-brand-primary)]/20 transition-all duration-700 group\">
                    <div class=\"space-y-8 h-full flex flex-col justify-between\">
                        <div class=\"space-y-6\">
                            <div class=\"flex gap-1 text-[var(--color-brand-primary)] opacity-60\">
                                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                yield "<span class=\"la la-star text-xl\"></span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "                            </div>
                            <blockquote class=\"text-[var(--color-brand-dark)] text-xl @md:text-2xl font-medium leading-relaxed tracking-tight\">
                                \"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quote", [], "any", false, false, false, 26), "html", null, true);
            yield "\"
                            </blockquote>
                        </div>
                        
                        <div class=\"pt-8 border-t border-[var(--color-brand-dark)]/5 flex items-center gap-5\">
                            <div class=\"w-14 h-14 bg-gradient-to-br from-[var(--color-brand-primary)] to-[var(--color-brand-secondary)] rounded-2xl flex items-center justify-center text-white font-black text-lg shadow-lg group-hover:scale-110 transition-transform\">
                                ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 32)), "html", null, true);
            yield "
                            </div>
                            <div>
                                <cite class=\"not-italic block font-black text-[var(--color-brand-dark)] text-lg tracking-tight\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 35), "html", null, true);
            yield "</cite>
                                <span class=\"block text-xs text-[var(--color-brand-dark)]/40 font-bold uppercase tracking-widest mt-1\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "role", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            
            ";
        // line 44
        yield "            <div class=\"shrink-0 w-6\"></div>
        </div>
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
        return "modular/testimonials.html.twig";
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
        return array (  124 => 44,  121 => 42,  109 => 36,  105 => 35,  99 => 32,  90 => 26,  86 => 24,  77 => 23,  71 => 19,  66 => 18,  64 => 17,  60 => 15,  53 => 11,  48 => 8,  46 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modular/testimonials.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/modular/testimonials.html.twig");
    }
}
