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

/* partials/top-banner.html.twig */
class __TwigTemplate_6b8c6e30bd7c8d82f1b08e683da16f04 extends Template
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
        yield "<style>
    .year-responsive { display: none; }
    @media (min-width: 768px) {
        .year-responsive { display: inline !important; }
    }
</style>

";
        // line 9
        $context["_top_banner_enabled"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_enabled");
        // line 10
        if ((($tmp = (((null === ($context["_top_banner_enabled"] ?? null))) ? (true) : (($context["_top_banner_enabled"] ?? null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "    ";
            // line 12
            yield "    ";
            $context["announcement_text"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_text");
            // line 13
            yield "    ";
            $context["announcement_expires"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_expires");
            // line 14
            yield "    ";
            $context["show_announcement"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_enabled") && ($context["announcement_text"] ?? null)) && ( !($context["announcement_expires"] ?? null) || ($this->extensions['Twig\Extension\CoreExtension']->convertDate(($context["announcement_expires"] ?? null)) > $this->extensions['Twig\Extension\CoreExtension']->convertDate("now"))));
            // line 15
            yield "    ";
            $context["text_dir"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 15), "getDirection", [], "method", false, false, false, 15)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 15), "getDirection", [], "method", false, false, false, 15)) : ("ltr"));
            // line 16
            yield "    
    ";
            // line 18
            yield "    ";
            $context["default_bg"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_bg_color"), "oklch(0.2 0.02 260)");
            // line 19
            yield "    ";
            $context["default_text"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_text_color"), "oklch(0.85 0.15 85)");
            // line 20
            yield "    ";
            $context["announce_bg"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_bg_color"), "oklch(0.5 0.25 25)");
            // line 21
            yield "    ";
            $context["announce_text"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_text_color"), "oklch(0.98 0.01 260)");
            // line 22
            yield "
    ";
            // line 23
            $context["current_bg"] = (((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["announce_bg"] ?? null)) : (($context["default_bg"] ?? null)));
            // line 24
            yield "    ";
            $context["current_text"] = (((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["announce_text"] ?? null)) : (($context["default_text"] ?? null)));
            // line 25
            yield "
<div id=\"top-banner-utility-bar\" 
     class=\"@container py-1 text-[10px] @md:text-xs font-bold relative border-b border-white/5 transition-colors duration-300 z-50\" 
     style=\"background-color: ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_bg"] ?? null), "html", null, true);
            yield "; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_text"] ?? null), "html", null, true);
            yield "; box-shadow: 0 4px 24px -2px ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_bg"] ?? null), "html", null, true);
            yield ";\" 
     dir=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_dir"] ?? null), "html", null, true);
            yield "\"
     role=\"complementary\"
     aria-label=\"Utility Bar\">
    
    <div class=\"container-px mx-auto flex items-center min-h-[28px] h-full\">
        
        ";
            // line 35
            if ((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "            ";
                // line 37
                yield "            <div class=\"w-full flex justify-center h-full\" role=\"alert\" aria-live=\"assertive\">
                <div class=\"w-full max-w-4xl overflow-hidden whitespace-nowrap\">
                    <div class=\"animate-marquee inline-block px-4 tracking-wide uppercase\">
                        ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["announcement_text"] ?? null), "html", null, true);
                yield "
                    </div>
                </div>
            </div>

        ";
            } else {
                // line 46
                yield "            ";
                // line 47
                yield "            <div class=\"flex items-center w-full justify-between sm:justify-center divide-x divide-white/20 text-[10px] sm:text-xs\">
                
                ";
                // line 50
                yield "                ";
                if ((($tmp = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_show_dates"), true)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 51
                    yield "                    <div class=\"px-3 sm:px-4 shrink-0 flex items-center justify-center\">
                        <time id=\"gregorian-date\" class=\"uppercase tracking-[0.2em] whitespace-nowrap\" datetime=\"";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                    yield "\">
                            ";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "D, M j"), "html", null, true);
                    yield "<span class=\"year-responsive\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", ", Y"), "html", null, true);
                    yield "</span>
                        </time>
                    </div>
                ";
                }
                // line 57
                yield "
                ";
                // line 59
                yield "                ";
                if ((($tmp = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_show_prayer_ticker"), true)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "                    <div class=\"px-3 sm:px-4 shrink-0 flex items-center justify-center gap-[2ch]\" role=\"timer\" aria-live=\"polite\">
                        <span class=\"uppercase tracking-[0.2em]\" id=\"next-prayer-name\">Maghrib</span>
                        <time class=\"uppercase tracking-[0.2em]\" id=\"prayer-countdown\">00:00</time>
                    </div>
                ";
                }
                // line 65
                yield "
                ";
                // line 67
                yield "                ";
                if ((($tmp = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_show_dates"), true)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 68
                    yield "                    <div class=\"px-3 sm:px-4 shrink-0 flex items-center justify-center\">
                        <span id=\"hijri-date\" class=\"uppercase tracking-[0.2em] whitespace-nowrap\" aria-live=\"polite\">Loading...</span>
                    </div>
                ";
                }
                // line 72
                yield "            </div>
            
        ";
            }
            // line 75
            yield "
    </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/top-banner.html.twig";
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
        return array (  187 => 75,  182 => 72,  176 => 68,  173 => 67,  170 => 65,  163 => 60,  160 => 59,  157 => 57,  148 => 53,  144 => 52,  141 => 51,  138 => 50,  134 => 47,  132 => 46,  123 => 40,  118 => 37,  116 => 36,  114 => 35,  105 => 29,  97 => 28,  92 => 25,  89 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  55 => 11,  53 => 10,  51 => 9,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/top-banner.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/top-banner.html.twig");
    }
}
