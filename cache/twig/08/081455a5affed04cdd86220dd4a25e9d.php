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

/* partials/header.html.twig */
class __TwigTemplate_e0751291a257a4b7711283f44cd2fcec extends Template
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
            'header_navigation' => [$this, 'block_header_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->load("partials/utility-bar.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "<header id=\"header\" class=\"w-full fixed top-8 z-50 transition-all duration-700 bg-transparent group/header data-[scroll=true]:bg-white/10 data-[scroll=true]:backdrop-blur-3xl data-[scroll=true]:shadow-3xl data-[scroll=true]:shadow-black/5 data-[scroll=true]:border-b data-[scroll=true]:border-white/20 @container\" data-scroll=\"false\" role=\"banner\">
    <div class=\"container mx-auto px-6 max-w-container\">
        <nav class=\"flex items-center justify-between h-header-lg group-data-[scroll=true]/header:h-header-sm transition-all duration-700\" aria-label=\"Main Navigation\">
            <div class=\"shrink-0 transition-transform duration-700 group-data-[scroll=true]/header:scale-90 origin-left\">
                ";
        // line 6
        yield from $this->load("partials/logo.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "            </div>
            
            <div class=\"hidden @lg:flex items-center gap-12\">
                ";
        // line 10
        yield from $this->unwrap()->yieldBlock('header_navigation', $context, $blocks);
        // line 13
        yield "
                ";
        // line 15
        yield "                <div class=\"flex items-center gap-6 py-3 border-l-2 border-brand-dark/5 pl-8 h-10\">
                    ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 16), "search_enabled", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "                         <button class=\"text-2xl hover:text-brand-primary transition-colors focus:outline-none\" aria-label=\"Search\">
                            <i class=\"las la-search\"></i>
                        </button>
                    ";
        }
        // line 21
        yield "
                    ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 22), "education_section", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, true, false, 23), "cta_button", [], "any", false, true, false, 23), "url", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 23), "cta_button", [], "any", false, false, false, 23), "url", [], "any", false, false, false, 23), "#")) : ("#")), "html", null, true);
            yield "\" target=\"_blank\" class=\"hidden @xl:flex items-center gap-2 font-bold text-xs uppercase tracking-widest hover:text-brand-primary transition-colors text-brand-dark\">
                            <i class=\"las la-user-graduate text-lg\"></i>
                            <span>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, true, false, 25), "student_login_title", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 25), "student_login_title", [], "any", false, false, false, 25), "My Dashboard")) : ("My Dashboard")), "html", null, true);
            yield "</span>
                        </a>
                    ";
        }
        // line 28
        yield "                    
                    <a href=\"#\" class=\"relative group/cart text-2xl hover:text-brand-primary transition-colors\">
                        <i class=\"las la-shopping-bag\"></i>
                        <span class=\"absolute -top-1 -right-1 w-4 h-4 bg-brand-secondary text-white text-[9px] font-black rounded-full flex items-center justify-center border-2 border-brand-bg group-hover/cart:scale-110 transition-transform\">2</span>
                    </a>
                    
                    ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 34), "login", [], "any", false, false, false, 34), "enabled", [], "any", false, false, false, 34) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34))) {
            // line 35
            yield "                        ";
            try {
                $_v0 = $this->load("partials/login-status.html.twig", 35);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield($context);
            }
            // line 36
            yield "                    ";
        }
        // line 37
        yield "                </div>
            </div>
            
            <div class=\"@lg:hidden flex items-center\">
                <button id=\"toggle\" class=\"group/toggle relative z-[70] p-5 bg-white/10 backdrop-blur-3xl border border-white/20 rounded-[1.5rem] shadow-2xl cursor-pointer focus:outline-none transition-all active:scale-90 hover:shadow-brand-primary/10\" aria-label=\"Toggle Menu\" aria-expanded=\"false\" data-state=\"inactive\" popovertarget=\"overlay\">
                    <div class=\"w-7 h-5 flex flex-col justify-between\">
                        <span class=\"block w-full h-0.5 bg-brand-dark transition-all duration-500 origin-center group-data-[state=active]/toggle:translate-y-2.5 group-data-[state=active]/toggle:rotate-45\"></span>
                        <span class=\"block w-full h-0.5 bg-brand-dark transition-all duration-500 group-data-[state=active]/toggle:opacity-0 group-data-[state=active]/toggle:scale-x-0\"></span>
                        <span class=\"block w-full h-0.5 bg-brand-dark transition-all duration-500 origin-center group-data-[state=active]/toggle:-translate-y-2 group-data-[state=active]/toggle:-rotate-45\"></span>
                    </div>
                </button>
            </div>
        </nav>
    </div>
</header>

<div id=\"overlay\" class=\"fixed inset-0 z-[60] bg-brand-bg/98 backdrop-blur-3xl transform transition-transform duration-700 ease-premium translate-x-full data-[state=open]:translate-x-0 opacity-0 data-[state=open]:opacity-100\" aria-hidden=\"true\" data-state=\"closed\" popover>
     <div class=\"flex flex-col h-full p-6 pt-32 @lg:p-16 @lg:pt-48 max-w-2xl mx-auto overflow-y-auto\">
        <nav aria-label=\"Mobile Navigation\">
            ";
        // line 56
        yield from $this->load("partials/navigation.html.twig", 56)->unwrap()->yield(CoreExtension::merge($context, ["tree" => true]));
        // line 57
        yield "        </nav>
     </div>
</div>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "                    ";
        yield from $this->load("partials/navigation.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header.html.twig";
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
        return array (  156 => 12,  153 => 11,  146 => 10,  138 => 57,  136 => 56,  115 => 37,  112 => 36,  101 => 35,  99 => 34,  91 => 28,  85 => 25,  79 => 23,  77 => 22,  74 => 21,  68 => 17,  66 => 16,  63 => 15,  60 => 13,  58 => 10,  53 => 7,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/header.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/partials/header.html.twig");
    }
}
