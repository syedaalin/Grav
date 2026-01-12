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
        // line 1
        yield "
";
        // line 2
        $context["_top_banner_enabled"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_enabled");
        // line 3
        if ((($tmp = (((null === ($context["_top_banner_enabled"] ?? null))) ? (true) : (($context["_top_banner_enabled"] ?? null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            // line 5
            yield "    ";
            $context["announcement_text"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_text");
            // line 6
            yield "    ";
            $context["announcement_expires"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_expires");
            // line 7
            yield "    ";
            $context["show_announcement"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_enabled") && ($context["announcement_text"] ?? null)) && ( !($context["announcement_expires"] ?? null) || ($this->extensions['Twig\Extension\CoreExtension']->convertDate(($context["announcement_expires"] ?? null)) > $this->extensions['Twig\Extension\CoreExtension']->convertDate("now"))));
            // line 8
            yield "    ";
            $context["text_dir"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 8), "getDirection", [], "method", false, false, false, 8)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 8), "getDirection", [], "method", false, false, false, 8)) : ("ltr"));
            // line 9
            yield "    
    ";
            // line 11
            yield "    ";
            $context["default_bg"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_bg_color"), "oklch(0.2 0.02 260)");
            // line 12
            yield "    ";
            $context["default_text"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_text_color"), "oklch(0.85 0.15 85)");
            // line 13
            yield "    ";
            $context["announce_bg"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_bg_color"), "oklch(0.5 0.25 25)");
            // line 14
            yield "    ";
            $context["announce_text"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_text_color"), "oklch(0.98 0.01 260)");
            // line 15
            yield "
    ";
            // line 16
            $context["current_bg"] = (((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["announce_bg"] ?? null)) : (($context["default_bg"] ?? null)));
            // line 17
            yield "    ";
            $context["current_text"] = (((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["announce_text"] ?? null)) : (($context["default_text"] ?? null)));
            // line 18
            yield "    
    ";
            // line 20
            yield "    ";
            $context["current_bg_style"] = (((CoreExtension::matches("/^var\\(/i", ($context["current_bg"] ?? null)) || CoreExtension::matches("/^oklch/i", ($context["current_bg"] ?? null)))) ? (($context["current_bg"] ?? null)) : ((("oklch(from " . ($context["current_bg"] ?? null)) . " L C H)")));
            // line 21
            yield "    ";
            $context["current_text_style"] = (((CoreExtension::matches("/^var\\(/i", ($context["current_text"] ?? null)) || CoreExtension::matches("/^oklch/i", ($context["current_text"] ?? null)))) ? (($context["current_text"] ?? null)) : ((("oklch(from " . ($context["current_text"] ?? null)) . " L C H)")));
            // line 22
            yield "
<div id=\"top-banner-utility-bar\" 
     class=\"top-banner\" 
     style=\"background-color: ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_bg_style"] ?? null), "html", null, true);
            yield "; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_text_style"] ?? null), "html", null, true);
            yield "; box-shadow: 0 4px 24px -2px oklch(from ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_bg_style"] ?? null), "html", null, true);
            yield " L C H / 0.5);\" 
     dir=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_dir"] ?? null), "html", null, true);
            yield "\"
     role=\"complementary\"
     aria-label=\"Utility Bar\">
    
    <div class=\"top-banner-inner\">
        
        ";
            // line 32
            if ((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "            ";
                // line 34
                yield "            <div class=\"top-banner-announcement\" role=\"alert\" aria-live=\"assertive\">
                <div class=\"announcement-marquee-container\">
                    <div class=\"announcement-marquee\">
                        ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["announcement_text"] ?? null), "html", null, true);
                yield "
                    </div>
                </div>
            </div>

        ";
            } else {
                // line 43
                yield "            ";
                // line 44
                yield "            <div class=\"top-banner-widgets\">
                
                ";
                // line 47
                yield "                ";
                if ((($tmp = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_show_dates"), true)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "                    <div class=\"banner-widget\">
                        <time id=\"gregorian-date\" class=\"banner-date\" datetime=\"";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                    yield "\">
                            ";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "D, M j"), "html", null, true);
                    yield "<span class=\"year-responsive\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", ", Y"), "html", null, true);
                    yield "</span>
                        </time>
                    </div>
                ";
                }
                // line 54
                yield "
                ";
                // line 56
                yield "                ";
                if ((($tmp = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_show_prayer_ticker"), true)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield "                    <div class=\"banner-widget\" role=\"timer\" aria-live=\"polite\">
                        <span class=\"banner-prayer-name\" id=\"next-prayer-name\">Maghrib</span>
                        <time class=\"banner-countdown\" id=\"prayer-countdown\">00:00</time>
                    </div>
                ";
                }
                // line 62
                yield "
                ";
                // line 64
                yield "                ";
                if ((($tmp = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_show_dates"), true)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 65
                    yield "                    <div class=\"banner-widget\">
                        <span id=\"hijri-date\" class=\"banner-date\" aria-live=\"polite\">Loading...</span>
                    </div>
                ";
                }
                // line 69
                yield "            </div>
            
        ";
            }
            // line 72
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
        return array (  190 => 72,  185 => 69,  179 => 65,  176 => 64,  173 => 62,  166 => 57,  163 => 56,  160 => 54,  151 => 50,  147 => 49,  144 => 48,  141 => 47,  137 => 44,  135 => 43,  126 => 37,  121 => 34,  119 => 33,  117 => 32,  108 => 26,  100 => 25,  95 => 22,  92 => 21,  89 => 20,  86 => 18,  83 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  49 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/top-banner.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/top-banner.html.twig");
    }
}
