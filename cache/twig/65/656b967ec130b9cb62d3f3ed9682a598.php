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

/* modular/service-cards.html.twig */
class __TwigTemplate_d48075dd114865030697980623d8ef1f extends Template
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
        $macros["components"] = $this->macros["components"] = $this->load("macros/components.html.twig", 2)->unwrap();
        // line 3
        yield "
<section class=\"service-bento py-32 bg-[var(--color-brand-dark)] overflow-hidden @container [content-visibility:auto] [contain-intrinsic-size:1000px]\">
    <div class=\"container mx-auto px-6 max-w-[var(--spacing-container)]\">
        <header class=\"max-w-3xl mb-24 space-y-4\">
            <span class=\"text-xs font-black uppercase tracking-[0.4em] text-[var(--color-brand-primary)] animate-in slide-in-from-left duration-700\">Our Services</span>
            <h2 class=\"text-[var(--text-h2)] font-black text-white tracking-tighter leading-tightest\">
                ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 9), "title", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "Expert Consultation & Ethics")) : ("Expert Consultation & Ethics")), "html", null, true);
        yield "
            </h2>
            <p class=\"text-xl text-white/50 font-medium leading-relaxed\">
                ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 12)), "Bridging traditional values with modern business and personal needs."), "html", null, true);
        yield "
            </p>
        </header>

        <div class=\"grid grid-cols-1 @md:grid-cols-6 @xl:grid-cols-12 gap-8 auto-rows-[350px]\">
            ";
        // line 17
        $context["services"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 17), "services", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 17), "services", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "services_list", [], "any", false, false, false, 17))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "services_list", [], "any", false, false, false, 17)));
        // line 18
        yield "            
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["services"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 20
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "                    ";
                // line 22
                yield "                    <div class=\"group/bento @md:col-span-6 @xl:col-span-8 @xl:row-span-2 relative p-12 bg-gradient-to-br from-[var(--surface-sunken)] to-[var(--color-brand-dark)] rounded-[3rem] border border-white/5 overflow-hidden transition-all duration-700 hover:shadow-4xl hover:shadow-[var(--color-brand-primary)]/10 hover:border-[var(--color-brand-primary)]/20\">
                        <div class=\"relative z-10 flex flex-col h-full justify-between\">
                            <div class=\"space-y-8\">
                                <div class=\"w-20 h-20 bg-white/5 flex items-center justify-center rounded-3xl text-[var(--color-brand-primary)] shadow-inner border border-white/5 group-hover/bento:scale-110 transition-transform duration-500\">
                                    <span class=\"la la-";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "icon", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "icon", [], "any", false, false, false, 26), "star")) : ("star")), "html", null, true);
                yield " text-4xl\"></span>
                                </div>
                                <div class=\"space-y-4\">
                                    <h3 class=\"text-[length:var(--text-h2)] font-black text-white tracking-tighter leading-[0.9]\">";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 29), "html", null, true);
                yield "</h3>
                                    <p class=\"text-white/40 text-lg max-w-md leading-relaxed\">";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 30), "html", null, true);
                yield "</p>
                                </div>
                            </div>
                            <div>
                                ";
                // line 34
                yield $macros["components"]->getTemplateForMacro("macro_cta_button", $context, 34, $this->getSourceContext())->macro_cta_button(...["Learn More", ((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "link", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "link", [], "any", false, false, false, 34), "#")) : ("#")), "primary"]);
                yield "
                            </div>
                        </div>
                        ";
                // line 38
                yield "                        <div class=\"absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-[var(--color-brand-primary)]/10 blur-[150px] rounded-full animate-pulse-slow pointer-events-none\"></div>
                    </div>
                ";
            } else {
                // line 41
                yield "                    ";
                // line 42
                yield "                    <div class=\"@md:col-span-3 @xl:col-span-4 p-10 bg-white/5 backdrop-blur-3xl border border-white/10 rounded-[2.5rem] flex flex-col justify-between hover:bg-white/10 transition-all group/bento duration-500 hover:-translate-y-2\">
                        <div class=\"space-y-6\">
                            <div class=\"w-14 h-14 bg-white/10 flex items-center justify-center rounded-2xl text-[var(--color-brand-secondary)] group-hover/bento:bg-[var(--color-brand-secondary)] group-hover/bento:text-white transition-all shadow-lg\">
                                <span class=\"la la-";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "icon", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "icon", [], "any", false, false, false, 45), "check")) : ("check")), "html", null, true);
                yield " text-3xl\"></span>
                            </div>
                            <div>
                                <h3 class=\"text-2xl font-black text-white tracking-tight mb-2\">";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 48), "html", null, true);
                yield "</h3>
                                <p class=\"text-white/40 text-sm leading-relaxed\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 49), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"h-1.5 w-full bg-white/5 rounded-full overflow-hidden mt-6\">
                            <div class=\"h-full bg-[var(--color-brand-secondary)] w-1/2 group-hover/bento:w-full transition-all duration-700 ease-[var(--ease-premium)]\"></div>
                        </div>
                    </div>
                ";
            }
            // line 57
            yield "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "
            ";
        // line 60
        yield "            <div class=\"@md:col-span-6 @xl:col-span-4 bg-gradient-to-br from-[var(--color-brand-secondary)] to-[var(--color-brand-primary)] p-10 rounded-[2.5rem] flex items-center justify-between group/cta shadow-2xl shadow-[var(--color-brand-primary)]/20 hover:brightness-110 transition-all cursor-pointer relative overflow-hidden\">
                <div class=\"relative z-10 space-y-3\">
                    <h3 class=\"text-2xl font-black text-white tracking-tight leading-tight\">Need Urgent <br>Consultation?</h3>
                    <p class=\"inline-block px-3 py-1 bg-white/20 rounded-lg text-white text-[10px] font-black uppercase tracking-widest backdrop-blur-sm\">24/7 WhatsApp</p>
                </div>
                <!-- WhatsApp Link Wrapper -->
                <a href=\"https://wa.me/";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "contact_whatsapp", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "contact_whatsapp", [], "any", false, false, false, 66), "923000000000")) : ("923000000000")), "html", null, true);
        yield "\" class=\"absolute inset-0 z-20\" aria-label=\"Contact via WhatsApp\"></a>
                
                <div class=\"relative z-10 w-20 h-20 bg-white/20 rounded-full flex items-center justify-center text-white text-4xl transition-transform group-hover/cta:scale-125 hover:rotate-12\">
                    <span class=\"la la-whatsapp\"></span>
                </div>
                
                ";
        // line 73
        yield "                <div class=\"absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjZmZmIi8+CjxyZWN0IHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9IiMwMDAiLz4KPC9zdmc+')] mix-blend-overlay\"></div>
            </div>
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
        return "modular/service-cards.html.twig";
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
        return array (  189 => 73,  180 => 66,  172 => 60,  169 => 58,  155 => 57,  144 => 49,  140 => 48,  134 => 45,  129 => 42,  127 => 41,  122 => 38,  116 => 34,  109 => 30,  105 => 29,  99 => 26,  93 => 22,  91 => 21,  88 => 20,  71 => 19,  68 => 18,  66 => 17,  58 => 12,  52 => 9,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modular/service-cards.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/modular/service-cards.html.twig");
    }
}
