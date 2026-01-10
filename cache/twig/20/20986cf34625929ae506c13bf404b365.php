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

/* partials/minaret.html.twig */
class __TwigTemplate_d147d911b2e7733c72616215b77824ab extends Template
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
        if ((($tmp = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_enabled"), true)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            // line 3
            yield "    ";
            $context["announcement_text"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_announcement_text");
            // line 4
            yield "    ";
            $context["announcement_expires"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_announcement_expires");
            // line 5
            yield "    ";
            $context["show_announcement"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_announcement_enabled") && ($context["announcement_text"] ?? null)) && ( !($context["announcement_expires"] ?? null) || ($this->extensions['Twig\Extension\CoreExtension']->convertDate(($context["announcement_expires"] ?? null)) > $this->extensions['Twig\Extension\CoreExtension']->convertDate("now"))));
            // line 6
            yield "    ";
            $context["text_dir"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 6), "getDirection", [], "method", false, false, false, 6)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 6), "getDirection", [], "method", false, false, false, 6)) : ("ltr"));
            // line 7
            yield "    
    ";
            // line 9
            yield "    ";
            $context["default_bg"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_bg_color"), "#111827");
            // line 10
            yield "    ";
            $context["default_text"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_text_color"), "#f1c40f");
            // line 11
            yield "    ";
            $context["announce_bg"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_announcement_bg_color"), "#b91c1c");
            // line 12
            yield "    ";
            $context["announce_text"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_announcement_text_color"), "#ffffff");
            // line 13
            yield "
    ";
            // line 14
            $context["current_bg"] = (((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["announce_bg"] ?? null)) : (($context["default_bg"] ?? null)));
            // line 15
            yield "    ";
            $context["current_text"] = (((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["announce_text"] ?? null)) : (($context["default_text"] ?? null)));
            // line 16
            yield "
<div id=\"minaret-utility-bar\" 
     class=\"@container py-0.5 text-xs font-medium relative border-b border-light-sep transition-colors duration-300 overflow-hidden\" 
     style=\"z-index: 100; --minaret-bg: ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_bg"] ?? null), "html", null, true);
            yield "; --minaret-text: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_text"] ?? null), "html", null, true);
            yield "; background-color: var(--minaret-bg); color: var(--minaret-text);\" dir=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_dir"] ?? null), "html", null, true);
            yield "\">
    
    <style>
        @keyframes marquee {
            0% { transform: translateX(";
            // line 23
            yield (((($context["text_dir"] ?? null) == "rtl")) ? ("-100%") : ("100%"));
            yield "); }
            100% { transform: translateX(";
            // line 24
            yield (((($context["text_dir"] ?? null) == "rtl")) ? ("100%") : ("-100%"));
            yield "); }
        }
        .animate-marquee {
            display: inline-flex;
            white-space: nowrap;
            animation: marquee 30s linear infinite; /* Slower 30s for readability */
            align-items: center;
            /* No gap, use margins on separators for consistency */
            column-gap: 0; 
            /* Ensure direction flows naturally for the text content */
            direction: ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_dir"] ?? null), "html", null, true);
            yield ";
        }
        .animate-marquee:hover, 
        .animate-marquee:focus-within {
            animation-play-state: paused;
        }
        @media (prefers-reduced-motion: reduce) {
            .animate-marquee {
                animation: none;
                transform: none;
                white-space: normal;
                display: flex;
                justify-content: center;
                width: 100%;
            }
        }
    </style>

    <div class=\"container mx-auto px-4 flex items-center min-h-[24px] h-full overflow-hidden\">
        
        ";
            // line 54
            if ((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "            ";
                // line 56
                yield "            ";
                // line 57
                yield "            <div class=\"w-full flex justify-center h-full\" role=\"alert\" aria-live=\"polite\">
                ";
                // line 59
                yield "                <div class=\"hidden @md:block w-full max-w-3xl overflow-hidden text-center\">
                    <div class=\"animate-marquee font-semibold\" tabindex=\"0\">
                        ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["announcement_text"] ?? null), "html", null, true);
                yield "
                    </div>
                </div>
                ";
                // line 65
                yield "                <div class=\"block @md:hidden w-full overflow-hidden text-center\">
                    <div class=\"animate-marquee\" tabindex=\"0\">
                        ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["announcement_text"] ?? null), "html", null, true);
                yield "
                    </div>
                </div>
            </div>

        ";
            } else {
                // line 73
                yield "            ";
                // line 74
                yield "            
            <div class=\"w-full h-full overflow-hidden relative\">
                <div class=\"animate-marquee w-full h-full\" role=\"toolbar\" aria-label=\"Utility Bar Ticker\">
                    
                    ";
                // line 79
                yield "                    ";
                if ((($tmp = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_show_dates"), true)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 80
                    yield "                        <div class=\"flex items-center\">
                            <time id=\"gregorian-date\" class=\"uppercase tracking-wider\" datetime=\"";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "D, M j, Y"), "html", null, true);
                    yield "</time>
                            <span class=\"mx-2 opacity-80\">|</span>
                            <span id=\"hijri-date\" class=\"font-arabic uppercase tracking-wider\">Loading Hijri...</span>
                        </div>
                    ";
                }
                // line 86
                yield "                    
                    ";
                // line 87
                if ((Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_show_dates"), true) && Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_show_prayer_ticker"), true))) {
                    // line 88
                    yield "                        <span class=\"mx-2 opacity-80\">|</span>
                    ";
                }
                // line 90
                yield "
                    ";
                // line 91
                if ((($tmp = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_show_prayer_ticker"), true)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 92
                    yield "                        <div class=\"flex items-center gap-2\" role=\"timer\" aria-live=\"polite\">
                            <span>Next Prayer:</span>
                            <span class=\"font-bold\" id=\"next-prayer-name\">Maghrib</span>
                            <time class=\"tabular-nums tracking-widest text-[0.9em]\" id=\"prayer-countdown\" datetime=\"PT2H14M15S\">02:14:15</time>
                        </div>
                    ";
                }
                // line 98
                yield "
                </div>
            </div>
            
        ";
            }
            // line 102
            yield " ";
            // line 103
            yield "
    </div>
</div>
";
        }
        // line 107
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/minaret.html.twig";
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
        return array (  230 => 107,  224 => 103,  222 => 102,  215 => 98,  207 => 92,  205 => 91,  202 => 90,  198 => 88,  196 => 87,  193 => 86,  183 => 81,  180 => 80,  177 => 79,  171 => 74,  169 => 73,  160 => 67,  156 => 65,  150 => 61,  146 => 59,  143 => 57,  141 => 56,  139 => 55,  137 => 54,  114 => 34,  101 => 24,  97 => 23,  86 => 19,  81 => 16,  78 => 15,  76 => 14,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/minaret.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/minaret.html.twig");
    }
}
