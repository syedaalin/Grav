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

/* macros/components.html.twig */
class __TwigTemplate_88f50c7ee637c03c004495b8d29eddff extends Template
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
        // line 25
        yield "
";
        // line 59
        yield "
";
        // line 98
        yield "
";
        // line 128
        yield "
";
        // line 147
        yield "
";
        yield from [];
    }

    // line 1
    public function macro_service_card($service = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "service" => $service,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "<div class=\"group relative flex flex-col h-full bg-white/60 dark:bg-surface-sunken backdrop-blur-3xl rounded-[2rem] border border-brand-primary/10 hover:border-brand-primary/30 hover:shadow-2xl hover:shadow-brand-primary/10 transition-all duration-500 overflow-hidden @container\">
    <div class=\"absolute inset-0 bg-gradient-to-br from-brand-primary/5 to-brand-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500\"></div>
    
    <div class=\"relative z-10 flex flex-col h-full p-8\">
        <div class=\"mb-6 inline-flex items-center justify-center w-16 h-16 rounded-xl bg-brand-primary/10 text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-colors duration-300\">
            <i class=\"las la-";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "icon", [], "any", false, false, false, 7), "html", null, true);
            yield " text-3xl\"></i>
        </div>
        
        <h3 class=\"text-h3 font-heading leading-tight mb-3 text-brand-dark\">
            ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
            yield "
        </h3>
        
        <p class=\"text-brand-gray opacity-80 leading-relaxed mb-6 flex-grow\">
            ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "description", [], "any", false, false, false, 15), "html", null, true);
            yield "
        </p>
        
        <a href=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "link", [], "any", false, false, false, 18), "html", null, true);
            yield "\" class=\"inline-flex items-center text-brand-primary font-semibold tracking-wide group-hover:translate-x-2 transition-transform duration-300 py-3 min-h-[44px]\">
            Learn More <i class=\"las la-arrow-right ml-2 text-lg\"></i>
            <span class=\"absolute inset-0\" aria-hidden=\"true\"></span>
        </a>
    </div>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 26
    public function macro_course_card($course = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "course" => $course,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 27
            yield "<div class=\"group relative flex flex-col bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden @container\">
    <div class=\"aspect-video relative overflow-hidden bg-gray-100\">
        ";
            // line 29
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "image", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "image", [], "any", false, false, false, 30)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "title", [], "any", false, false, false, 30), "html", null, true);
                yield " thumbnail\" class=\"w-full h-full object-cover transition-transform duration-700 group-hover:scale-105\" loading=\"lazy\">
        ";
            } else {
                // line 32
                yield "            <div class=\"w-full h-full flex items-center justify-center text-brand-primary bg-brand-primary/5\">
                <i class=\"las la-graduation-cap text-6xl opacity-50\"></i>
            </div>
        ";
            }
            // line 36
            yield "        <div class=\"absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60\"></div>
        <span class=\"absolute bottom-4 left-4 inline-flex items-center px-3 py-1 bg-brand-primary text-white text-xs font-bold uppercase tracking-wider rounded-full shadow-md\">
            Course
        </span>
    </div>
    
    <div class=\"p-6 flex flex-col flex-grow\">
        <h3 class=\"text-[length:clamp(1.25rem,1vw+1rem,1.5rem)] font-heading font-bold mb-2 text-brand-dark group-hover:text-brand-primary transition-colors\">
            ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "title", [], "any", false, false, false, 44), "html", null, true);
            yield "
        </h3>
        
        <div class=\"flex items-center mt-auto pt-4 border-t border-gray-100\">
            <div class=\"flex items-center text-sm text-brand-gray\">
                <i class=\"las la-chalkboard-teacher mr-2 text-lg text-brand-primary\"></i>
                <span>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "instructor", [], "any", false, true, false, 50), "name", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "instructor", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "instructor", [], "any", false, false, false, 50))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "instructor", [], "any", false, false, false, 50))), "html", null, true);
            yield "</span>
            </div>
            <a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "link", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "link", [], "any", false, false, false, 52), CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "url", [], "any", false, false, false, 52))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "url", [], "any", false, false, false, 52))), "html", null, true);
            yield "\" class=\"ml-auto inline-flex items-center justify-center w-11 h-11 rounded-full bg-gray-50 text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-colors\" aria-label=\"Enroll in ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "title", [], "any", false, false, false, 52), "html", null, true);
            yield "\">
                <i class=\"las la-arrow-right\"></i>
            </a>
        </div>
    </div>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 60
    public function macro_project_card($project = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "project" => $project,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 61
            yield "<div class=\"relative flex flex-col bg-white dark:bg-surface-sunken rounded-[2rem] p-8 shadow-lg border border-surface-sunken dark:border-white/10 hover:shadow-2xl transition-all duration-500 @container group/project\">
    <div class=\"flex justify-between items-start mb-6\">
        <div>
            <span class=\"inline-block px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest mb-3
                ";
            // line 65
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "status", [], "any", false, false, false, 65) == "active")) ? ("bg-brand-success/10 text-brand-success") : ("bg-brand-gray/10 text-brand-gray"));
            yield "\">
                ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "status", [], "any", false, false, false, 66), "html", null, true);
            yield "
            </span>
            <h4 class=\"text-h3 font-black text-brand-dark dark:text-white group-hover/project:text-brand-primary transition-colors\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "title", [], "any", false, false, false, 68), "html", null, true);
            yield "</h4>
        </div>
        <div class=\"text-right\">
            <span class=\"block text-3xl font-black text-brand-primary\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "percent", [], "any", false, false, false, 71), "html", null, true);
            yield "%</span>
            <span class=\"text-[10px] font-bold text-brand-gray uppercase tracking-widest\">Funded</span>
        </div>
    </div>
    
    <p class=\"text-brand-gray text-sm mb-8 leading-relaxed min-h-[3rem]\">
        ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "description", [], "any", false, false, false, 77), "html", null, true);
            yield "
    </p>
    
    <div class=\"relative w-full h-4 bg-surface-sunken rounded-full overflow-hidden mb-6\">
        <div class=\"absolute top-0 left-0 h-full bg-brand-primary rounded-full transition-all duration-1000 ease-out relative overflow-hidden\" style=\"width: ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "percent", [], "any", false, false, false, 81), "html", null, true);
            yield "%\">
             <div class=\"absolute inset-0 bg-white/20 animate-[shimmer_2s_infinite]\"></div>
        </div>
    </div>
    
    <div class=\"flex justify-between items-center text-sm font-bold mb-8\">
        <span class=\"text-brand-dark dark:text-white\">Raised: <span class=\"text-brand-success\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "raised", [], "any", false, false, false, 87), "html", null, true);
            yield "</span></span>
        <span class=\"text-brand-gray\">Goal: ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "goal", [], "any", false, false, false, 88), "html", null, true);
            yield "</span>
    </div>
    
    <div class=\"mt-auto\">
        <button class=\"w-full py-4 rounded-xl bg-brand-dark dark:bg-white dark:text-brand-dark text-white font-bold tracking-widest uppercase text-xs hover:bg-brand-primary hover:scale-[1.02] transition-all shadow-lg hover:shadow-brand-primary/20\">
            Donate Now
        </button>
    </div>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 99
    public function macro_product_card($image = null, $title = null, $price = null, $type = null, $link = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "image" => $image,
            "title" => $title,
            "price" => $price,
            "type" => $type,
            "link" => $link,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 100
            yield "<div class=\"group relative flex flex-col bg-white rounded-3xl border border-brand-primary/5 overflow-hidden hover:shadow-2xl hover:shadow-brand-primary/10 transition-all duration-500 @container\">
    <div class=\"relative aspect-square overflow-hidden bg-surface-sunken\">
        ";
            // line 102
            if ((($tmp = ($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "\" class=\"w-full h-full object-cover transition-transform duration-700 group-hover:scale-110\">
        ";
            } else {
                // line 105
                yield "             <div class=\"w-full h-full flex items-center justify-center text-brand-gray\">
                <i class=\"las la-shopping-bag text-5xl opacity-20\"></i>
            </div>
        ";
            }
            // line 109
            yield "        
        <span class=\"absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider shadow-sm text-brand-dark\">
            ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "
        </span>

        <button class=\"absolute bottom-4 right-4 w-10 h-10 rounded-full bg-brand-primary text-white shadow-lg translate-y-20 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-[var(--ease-premium)] flex items-center justify-center hover:bg-brand-secondary\" aria-label=\"Quick Add to Cart\">
            <i class=\"las la-plus text-lg\"></i>
        </button>
    </div>

    <div class=\"p-6 flex flex-col flex-grow\">
        <h3 class=\"font-bold text-lg mb-2 text-brand-dark leading-tight group-hover:text-brand-primary transition-colors\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</h3>
        <div class=\"mt-auto flex items-center justify-between\">
            <span class=\"text-xl font-black text-brand-dark\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["price"] ?? null), "html", null, true);
            yield "</span>
            <a href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
            yield "\" class=\"text-xs font-bold uppercase tracking-widest text-brand-gray hover:text-brand-primary transition-colors\">Details</a>
        </div>
    </div>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 129
    public function macro_prayer_widget($prayer_data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "prayer_data" => $prayer_data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 130
            yield "<div class=\"flex items-center space-x-4 bg-brand-primary/5 px-4 py-2 rounded-lg border border-brand-primary/10\" x-data=\"prayerWidget()\">
    <div class=\"hidden @md:flex flex-col text-right border-r border-brand-primary/20 pr-4\">
        <span class=\"text-xs font-bold text-brand-primary uppercase tracking-wider\" x-text=\"hijriDate\">--</span>
        <span class=\"text-[10px] text-brand-dark opacity-70\" x-text=\"gregorianDate\">--</span>
    </div>
    
    <div class=\"flex items-center\">
        <div class=\"mr-3 p-2 bg-brand-primary text-white rounded-lg shadow-sm\">
            <i class=\"las la-mosque text-xl\"></i>
        </div>
        <div>
            <span class=\"block text-xs text-brand-dark opacity-70\">Next Prayer: <span class=\"font-bold\" x-text=\"nextPrayerName\">--</span></span>
            <span class=\"block font-heading font-bold text-brand-primary leading-none text-lg\" x-text=\"nextPrayerTime\">--:--</span>
        </div>
    </div>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 148
    public function macro_cta_button($text = null, $link = null, $style = "primary", $icon = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "link" => $link,
            "style" => $style,
            "icon" => $icon,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 149
            yield "    ";
            $context["classes"] = (((($context["style"] ?? null) == "primary")) ? ("bg-brand-primary text-white border-brand-primary hover:bg-brand-secondary hover:border-brand-secondary") : ("bg-transparent text-white border-white hover:bg-white hover:text-brand-dark"));
            // line 152
            yield "    
    <a href=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
            yield " px-8 py-4 rounded-full font-bold uppercase tracking-widest border transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg flex items-center gap-3\">
        <span>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
            yield "</span>
        ";
            // line 155
            if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 156
                yield "            <i class=\"las la-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield "\"></i>
        ";
            } elseif ((            // line 157
($context["style"] ?? null) == "primary")) {
                // line 158
                yield "            <i class=\"las la-arrow-right\"></i>
        ";
            } else {
                // line 160
                yield "            <i class=\"las la-heart\"></i>
        ";
            }
            // line 162
            yield "    </a>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/components.html.twig";
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
        return array (  415 => 162,  411 => 160,  407 => 158,  405 => 157,  400 => 156,  398 => 155,  394 => 154,  388 => 153,  385 => 152,  382 => 149,  367 => 148,  345 => 130,  333 => 129,  322 => 123,  318 => 122,  313 => 120,  301 => 111,  297 => 109,  291 => 105,  283 => 103,  281 => 102,  277 => 100,  261 => 99,  245 => 88,  241 => 87,  232 => 81,  225 => 77,  216 => 71,  210 => 68,  205 => 66,  201 => 65,  195 => 61,  183 => 60,  168 => 52,  163 => 50,  154 => 44,  144 => 36,  138 => 32,  130 => 30,  128 => 29,  124 => 27,  112 => 26,  99 => 18,  93 => 15,  86 => 11,  79 => 7,  72 => 2,  60 => 1,  54 => 147,  51 => 128,  48 => 98,  45 => 59,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "macros/components.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/macros/components.html.twig");
    }
}
