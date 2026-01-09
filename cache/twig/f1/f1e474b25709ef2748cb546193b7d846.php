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

/* modular/featured_courses.html.twig */
class __TwigTemplate_08ee08a95e5d52176ed7c15808ae321b extends Template
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
<section class=\"py-32 bg-[var(--color-brand-light)] dark:bg-[var(--color-brand-dark)] relative overflow-hidden @container [content-visibility:auto] [contain-intrinsic-size:600px]\">
    ";
        // line 5
        yield "    <div class=\"absolute top-0 right-0 w-1/3 h-full bg-brand-primary/5 blur-3xl rounded-l-full pointer-events-none\"></div>

    <div class=\"container mx-auto px-6 max-w-[var(--spacing-container)] relative z-10\">
        <div class=\"flex flex-col @md:flex-row items-end justify-between mb-16 gap-8\">
            <div class=\"max-w-2xl\">
                 <span class=\"text-brand-primary font-bold uppercase tracking-widest text-sm mb-2 block\">
                    Education Portal
                </span>
                <h2 class=\"text-[length:var(--text-h2)] font-black text-[var(--color-brand-dark)] dark:text-white mb-4\">
                    ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 14), "title", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "Knowledge Without Borders")) : ("Knowledge Without Borders")), "html", null, true);
        yield "
                </h2>
                <p class=\"text-lg text-[var(--color-brand-gray)] dark:text-white/60\">
                    Access world-class religious and secular education through our LMS integrations.
                </p>
            </div>
            
            <a href=\"https://moodle.aabtaab.com\" class=\"shrink-0 px-8 py-4 bg-white dark:bg-[var(--surface-sunken)] text-[var(--color-brand-dark)] dark:text-white border border-[var(--surface-sunken)] dark:border-white/10 rounded-[1.5rem] font-bold uppercase tracking-widest hover:border-brand-primary hover:text-brand-primary transition-all shadow-lg shadow-black/5\">
                View All Courses <i class=\"las la-external-link-alt ml-2\"></i>
            </a>
        </div>
        
        <div class=\"grid grid-cols-1 @md:grid-cols-2 @xl:grid-cols-3 gap-8\">
            ";
        // line 27
        $context["courses"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 27), "courses", [], "any", false, false, false, 27)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 27), "courses", [], "any", false, false, false, 27)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 27), "featured_courses_list", [], "any", false, false, false, 27)));
        // line 28
        yield "            
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["courses"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 30
            yield "                ";
            yield $macros["components"]->getTemplateForMacro("macro_course_card", $context, 30, $this->getSourceContext())->macro_course_card(...[$context["course"]]);
            yield "
            ";
            $context['_iterated'] = true;
        }
        // line 31
        if (!$context['_iterated']) {
            // line 32
            yield "                <div class=\"col-span-1 @md:col-span-2 @xl:col-span-3 text-center text-[var(--color-brand-gray)] py-12\">
                    <p>No courses currently featured.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "        </div>
        
        ";
        // line 39
        yield "        <div class=\"mt-16 bg-brand-primary text-white rounded-[2.5rem] p-12 relative overflow-hidden flex flex-col @md:flex-row items-center justify-between gap-12 group\">
            <div class=\"absolute inset-0 bg-[url('theme://images/pattern.svg')] opacity-10\"></div>
            <div class=\"absolute -right-20 -bottom-40 w-96 h-96 bg-white/10 rounded-full blur-3xl group-hover:scale-150 transition-transform duration-700\"></div>
            
            <div class=\"relative z-10 flex items-start gap-6\">
                <div class=\"w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center text-3xl shrink-0 backdrop-blur-sm\">
                    <i class=\"las la-user-circle\"></i>
                </div>
                <div>
                    <h3 class=\"text-2xl font-black mb-2\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 48), "student_login_title", [], "any", false, false, false, 48), "html", null, true);
        yield "</h3>
                    <p class=\"text-white/80 text-lg\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 49), "student_login_description", [], "any", false, false, false, 49), "html", null, true);
        yield "</p>
                </div>
            </div>
            
            <a href=\"https://moodle.aabtaab.com/login\" class=\"relative z-10 bg-white text-brand-primary px-10 py-5 rounded-[1.5rem] font-black uppercase tracking-widest hover:bg-[var(--color-brand-bg)] transition-colors shadow-2xl\">
                ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 54), "student_login_button_text", [], "any", false, false, false, 54), "html", null, true);
        yield "
            </a>
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
        return "modular/featured_courses.html.twig";
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
        return array (  130 => 54,  122 => 49,  118 => 48,  107 => 39,  103 => 36,  94 => 32,  92 => 31,  85 => 30,  80 => 29,  77 => 28,  75 => 27,  59 => 14,  48 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modular/featured_courses.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/modular/featured_courses.html.twig");
    }
}
