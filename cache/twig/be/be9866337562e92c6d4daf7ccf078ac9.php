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

/* partials/utility-bar.html.twig */
class __TwigTemplate_1176339f943231dbd7636fd5c08930c9 extends Template
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
<div class=\"hidden @lg:flex justify-between items-center py-2 px-6 bg-brand-primary/5 text-xs font-bold border-b border-brand-dark/5\">
    ";
        // line 5
        yield "    <div class=\"flex items-center gap-6\">
        ";
        // line 6
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 6), "utility_prayer_toggle", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "            ";
            yield $macros["components"]->getTemplateForMacro("macro_prayer_widget", $context, 7, $this->getSourceContext())->macro_prayer_widget(...[]);
            yield "
        ";
        }
        // line 9
        yield "        
        ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 10), "utility_hijri_toggle", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "            <div class=\"flex items-center text-brand-dark/80\">
                <i class=\"las la-calendar-alt text-lg mr-2 text-brand-primary\"></i>
                <span>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "l, F j, Y"), "html", null, true);
            yield "</span>
                <span class=\"mx-2 opacity-30\">|</span>
                <span class=\"font-heading text-sm\" x-data=\"{ hijri: '' }\" x-init=\"hijri = new Intl.DateTimeFormat('en-TN-u-ca-islamic', {day: 'numeric', month: 'long', year: 'numeric'}).format(new Date())\" x-text=\"hijri\"></span>
            </div>
        ";
        }
        // line 18
        yield "    </div>

    ";
        // line 21
        yield "    <div class=\"flex items-center gap-4\">
        ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 22), "utility_accessibility_toggle", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "            <div class=\"flex items-center gap-2 pr-4 border-r border-brand-dark/10\">
                <button class=\"p-3 min-h-[44px] min-w-[44px] flex items-center justify-center hover:text-brand-primary transition-colors\" title=\"Increase Text Size\" aria-label=\"Increase text size\">
                    <i class=\"las la-text-height text-lg\"></i>
                </button>
                <button class=\"p-3 min-h-[44px] min-w-[44px] flex items-center justify-center hover:text-brand-primary transition-colors\" title=\"High Contrast\" aria-label=\"Toggle high contrast\">
                    <i class=\"las la-adjust text-lg\"></i>
                </button>
            </div>
        ";
        }
        // line 32
        yield "
        ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 33), "utility_language_toggle", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "            <div class=\"relative group/lang\">
                <button class=\"flex items-center gap-1 hover:text-brand-primary transition-colors uppercase tracking-wider\">
                    <i class=\"las la-globe text-lg\"></i>
                    <span>EN</span>
                    <i class=\"las la-angle-down text-[10px]\"></i>
                </button>
                <div class=\"absolute top-full right-0 mt-2 w-32 bg-surface-sunken rounded-xl shadow-xl border border-glass-border opacity-0 invisible group-hover/lang:opacity-100 group-hover/lang:visible transition-all duration-300 transform translate-y-2 group-hover/lang:translate-y-0 z-50\">
                     <a href=\"#\" class=\"block px-4 py-2 hover:bg-brand-primary hover:text-white rounded-t-xl transition-colors\">English</a>
                     <a href=\"#\" class=\"block px-4 py-2 hover:bg-brand-primary hover:text-white transition-colors text-right font-heading\">اردو</a>
                     <a href=\"#\" class=\"block px-4 py-2 hover:bg-brand-primary hover:text-white rounded-b-xl transition-colors text-right font-heading\">العربية</a>
                </div>
            </div>
        ";
        }
        // line 47
        yield "    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/utility-bar.html.twig";
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
        return array (  116 => 47,  101 => 34,  99 => 33,  96 => 32,  85 => 23,  83 => 22,  80 => 21,  76 => 18,  68 => 13,  64 => 11,  62 => 10,  59 => 9,  53 => 7,  51 => 6,  48 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/utility-bar.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/partials/utility-bar.html.twig");
    }
}
