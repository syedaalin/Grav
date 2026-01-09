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

/* partials/navigation.html.twig */
class __TwigTemplate_7b3eb1c640c6014346b844d29cd72d20 extends Template
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
        $macros["͜macros"] = $this->macros["͜macros"] = $this->load("macros/macros.html.twig", 1)->unwrap();
        // line 2
        yield "
<ul class=\"flex flex-col @lg:flex-row @lg:items-center gap-6 @lg:gap-12 ";
        // line 3
        yield (((($tmp = ($context["tree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pl-4 border-l-2 border-brand-primary/10 space-y-4 @lg:pl-0 @lg:border-l-0 @lg:space-y-0") : (""));
        yield "\" role=\"list\">
    ";
        // line 4
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "mega_menu_structure", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        ";
            // line 6
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "mega_menu_structure", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 7
                yield "            <li class=\"group/nav relative\">
                <a href=\"#\" class=\"flex items-center px-4 py-4 @lg:px-8 @lg:py-4 text-sm @lg:text-[13px] font-black transition-all rounded-xl @lg:rounded-[1.5rem] uppercase tracking-wider @lg:tracking-[0.15em] text-brand-dark/60 @lg:text-brand-dark/40 hover:text-brand-primary hover:bg-brand-primary/5 min-h-[44px]\" aria-haspopup=\"true\">
                    ";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "title", [], "any", false, false, false, 9), "html", null, true);
                yield "
                    <span class=\"la la-angle-down ml-3 text-xs transition-transform duration-500 group-hover/nav:rotate-180\" aria-hidden=\"true\"></span>
                </a>
                <ul class=\"@lg:absolute @lg:top-full @lg:left-0 @lg:min-w-[300px] @lg:bg-white/40 @lg:backdrop-blur-3xl @lg:shadow-4xl @lg:rounded-[2.5rem] @lg:p-8 @lg:mt-6 @lg:opacity-0 @lg:invisible @lg:group-hover/nav:opacity-100 @lg:group-hover/nav:visible @lg:translate-x-4 @lg:group-hover/nav:translate-x-0 @lg:transition-all @lg:duration-700 @lg:z-[70] @lg:border @lg:border-brand-primary/10 pl-10 border-l-2 border-brand-primary/5 ml-8 space-y-4 mt-6 @lg:ml-0 @lg:border-l-0\" role=\"list\">
                    ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "links", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 14
                    yield "                        <li>
                            <a href=\"";
                    // line 15
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 15), "html", null, true);
                    yield "\" class=\"block text-sm font-bold text-brand-gray hover:text-brand-primary transition-colors py-2\">
                                ";
                    // line 16
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "text", [], "any", false, false, false, 16), "html", null, true);
                    yield "
                            </a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                yield "                </ul>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "    ";
        } else {
            // line 24
            yield "        ";
            // line 25
            yield "        ";
            yield $macros["͜macros"]->getTemplateForMacro("macro_nav_loop", $context, 25, $this->getSourceContext())->macro_nav_loop(...[($context["pages"] ?? null)]);
            yield "
    ";
        }
        // line 27
        yield "    
    ";
        // line 29
        yield "    ";
        $context["cta_button"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "cta_button", [], "any", false, false, false, 29);
        // line 30
        yield "    <li class=\"flex flex-col @lg:flex-row items-center gap-4 mt-10 @lg:mt-0 @lg:ml-4\">
        ";
        // line 31
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["cta_button"] ?? null), "enabled", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["cta_button"] ?? null), "enabled", [], "any", false, false, false, 31), true)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["cta_button"] ?? null), "url", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["cta_button"] ?? null), "url", [], "any", false, false, false, 32), "https://moodle.aabtaab.com")) : ("https://moodle.aabtaab.com")), "html", null, true);
            yield "\" 
               class=\"group/cta inline-flex items-center gap-4 px-10 py-4 bg-gradient-to-br from-brand-primary to-brand-secondary text-white text-[11px] font-black uppercase tracking-[0.2em] rounded-[1.5rem] hover:scale-105 active:scale-95 transition-all shadow-3xl shadow-brand-primary/30 justify-center\" 
               ";
            // line 34
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["cta_button"] ?? null), "external", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["cta_button"] ?? null), "external", [], "any", false, false, false, 34), true)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "target=\"_blank\" rel=\"noopener noreferrer\"";
            }
            yield ">
                <span class=\"la la-";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["cta_button"] ?? null), "icon", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["cta_button"] ?? null), "icon", [], "any", false, false, false, 35), "user-graduate")) : ("user-graduate")), "html", null, true);
            yield " text-2xl transition-transform duration-500 group-hover/cta:-translate-y-1\" aria-hidden=\"true\"></span> 
                <span>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["cta_button"] ?? null), "text", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["cta_button"] ?? null), "text", [], "any", false, false, false, 36), "Student Portal")) : ("Student Portal")), "html", null, true);
            yield "</span>
            </a>
        ";
        }
        // line 39
        yield "
        ";
        // line 41
        yield "        <a href=\"/dashboard\" class=\"group/user p-3 bg-surface-sunken hover:bg-brand-primary/10 rounded-full transition-all\" title=\"My Dashboard (SSO)\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"text-brand-dark group-hover/user:text-brand-primary\"><path d=\"M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2\"/><circle cx=\"12\" cy=\"7\" r=\"4\"/></svg>
        </a>
    </li>
    
    ";
        // line 47
        yield "    <li class=\"hidden @lg:block ml-4\">
        <button class=\"w-11 h-11 rounded-full bg-brand-primary/5 hover:bg-brand-primary hover:text-white flex items-center justify-center transition-all shadow-sm hover:shadow-lg group/search\" aria-label=\"Open AI Search\" title=\"Ask AI Assistant\">
            <span class=\"la la-search group-hover/search:scale-110 transition-transform font-bold\"></span>
        </button>
    </li>

    ";
        // line 54
        yield "    <li class=\"flex items-center gap-3 mt-10 @lg:mt-0 @lg:ml-6 py-10 @lg:py-0 border-t-2 @lg:border-t-0 @lg:border-l-2 border-[var(--color-brand-dark)]/5 @lg:pl-12\">
        <div class=\"flex items-center gap-2 p-2 bg-white/40 backdrop-blur-3xl rounded-[2.5rem] border border-brand-primary/10 shadow-inner group/controls\">
            <button id=\"dark-toggle\" title=\"Protocol: Nocturnal\" aria-label=\"Toggle Dark Mode\" class=\"p-4 rounded-2xl hover:bg-brand-primary hover:text-white text-brand-dark/30 transition-all group/dark active:scale-90 hover:shadow-2xl hover:shadow-brand-primary/20\">
                <span class=\"la la-moon text-2xl group-hover/dark:rotate-12 transition-transform\" aria-hidden=\"true\"></span>
            </button>
            <button id=\"focus-toggle\" title=\"Protocol: Clarity\" aria-label=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "MY_2ND_THEME.ADMIN.FOCUS_MODE"), "html", null, true);
        yield "\" class=\"p-4 rounded-2xl hover:bg-brand-primary hover:text-white text-brand-dark/30 transition-all group/focus active:scale-90 hover:shadow-2xl hover:shadow-brand-primary/20\">
                <span class=\"la la-eye text-2xl group-hover/focus:scale-125 transition-transform\" aria-hidden=\"true\"></span>
            </button>
            <button id=\"eco-toggle\" title=\"Protocol: Sustenance\" aria-label=\"Toggle Eco-Mode\" class=\"p-4 rounded-2xl hover:bg-brand-primary hover:text-white text-brand-dark/30 transition-all group/eco active:scale-90 hover:shadow-2xl hover:shadow-brand-primary/20\">
                <span class=\"la la-leaf text-2xl group-hover/eco:-translate-y-2 transition-transform\" aria-hidden=\"true\"></span>
            </button>
        </div>
    </li>
</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/navigation.html.twig";
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
        return array (  169 => 59,  162 => 54,  154 => 47,  147 => 41,  144 => 39,  138 => 36,  134 => 35,  128 => 34,  122 => 32,  120 => 31,  117 => 30,  114 => 29,  111 => 27,  105 => 25,  103 => 24,  100 => 23,  92 => 20,  82 => 16,  78 => 15,  75 => 14,  71 => 13,  64 => 9,  60 => 7,  55 => 6,  53 => 5,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/navigation.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/partials/navigation.html.twig");
    }
}
