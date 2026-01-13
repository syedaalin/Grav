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
        $context["_top_banner_enabled"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_enabled");
        // line 3
        $context["top_banner_active"] = ((((null === ($context["_top_banner_enabled"] ?? null)) || (($context["_top_banner_enabled"] ?? null) == 1)) || (($context["_top_banner_enabled"] ?? null) == "1")) || (($context["_top_banner_enabled"] ?? null) == true));
        // line 4
        yield "
";
        // line 5
        if ((($tmp = ($context["top_banner_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "
\t";
            // line 8
            yield "\t";
            $context["announcement_text"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_text");
            // line 9
            yield "\t";
            $context["announcement_expires"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_expires");
            // line 10
            yield "\t";
            $context["show_announcement"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_enabled") && ($context["announcement_text"] ?? null)) && ( !($context["announcement_expires"] ?? null) || ($this->extensions['Twig\Extension\CoreExtension']->convertDate(($context["announcement_expires"] ?? null)) > $this->extensions['Twig\Extension\CoreExtension']->convertDate("now"))));
            // line 11
            yield "\t";
            $context["text_dir"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 11), "getDirection", [], "method", false, false, false, 11)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 11), "getDirection", [], "method", false, false, false, 11)) : ("ltr"));
            // line 12
            yield "
\t";
            // line 14
            yield "\t";
            $context["current_bg"] = (((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_bg_color"), "#bf616a")) : (Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_bg_color"), "#1a1c23")));
            // line 15
            yield "\t";
            $context["current_text"] = (((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_announcement_text_color"), "#ffffff")) : (Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_text_color"), "#d4af37")));
            // line 16
            yield "
\t";
            // line 18
            yield "\t";
            $context["current_bg_style"] = (((CoreExtension::matches("/^var\\(/i", ($context["current_bg"] ?? null)) || CoreExtension::matches("/^oklch/i", ($context["current_bg"] ?? null)))) ? (($context["current_bg"] ?? null)) : (($context["current_bg"] ?? null)));
            // line 19
            yield "\t";
            $context["current_text_style"] = (((CoreExtension::matches("/^var\\(/i", ($context["current_text"] ?? null)) || CoreExtension::matches("/^oklch/i", ($context["current_text"] ?? null)))) ? (($context["current_text"] ?? null)) : (($context["current_text"] ?? null)));
            // line 20
            yield "
\t<div id=\"top-banner-utility-bar\" class=\"top-banner\" style=\"background: ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_bg_style"] ?? null), "html", null, true);
            yield " !important; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_text_style"] ?? null), "html", null, true);
            yield " !important; z-index: 10000 !important; position: relative !important; display: flex !important;\" dir=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_dir"] ?? null), "html", null, true);
            yield "\" role=\"complementary\" aria-label=\"Utility Bar\">

\t\t<div class=\"top-banner-inner\">

\t\t\t";
            // line 25
            if ((($tmp = ($context["show_announcement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "\t\t\t\t";
                // line 27
                yield "\t\t\t\t<div class=\"top-banner-announcement\" role=\"alert\" aria-live=\"assertive\">
\t\t\t\t\t<div class=\"announcement-marquee-container\">
\t\t\t\t\t\t<div class=\"announcement-marquee\">
\t\t\t\t\t\t\t";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["announcement_text"] ?? null), "html", null, true);
                yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
            } else {
                // line 36
                yield "\t\t\t\t";
                // line 37
                yield "\t\t\t\t<div
\t\t\t\t\tclass=\"top-banner-layout\">


\t\t\t\t\t";
                // line 42
                yield "\t\t\t\t\t<div class=\"top-banner-widgets\">
\t\t\t\t\t\t";
                // line 43
                $context["widgets_order"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_widgets_order"), ["date", "prayer", "hijri"]);
                // line 44
                yield "
\t\t\t\t\t\t";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["widgets_order"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                    // line 46
                    yield "\t\t\t\t\t\t\t";
                    if (($context["widget"] == "date")) {
                        // line 47
                        yield "\t\t\t\t\t\t\t\t<div class=\"banner-pill widget-gregorian\" aria-label=\"Current Date\">
\t\t\t\t\t\t\t\t\t<svg class=\"pill-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
\t\t\t\t\t\t\t\t\t\t<line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
\t\t\t\t\t\t\t\t\t\t<line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
\t\t\t\t\t\t\t\t\t\t<line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<time id=\"gregorian-date\" class=\"banner-date\" datetime=\"";
                        // line 54
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 55
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "D, M j"), "html", null, true);
                        yield "<span class=\"year-responsive\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", ", Y"), "html", null, true);
                        yield "</span>
\t\t\t\t\t\t\t\t\t</time>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                    } elseif ((                    // line 59
$context["widget"] == "prayer")) {
                        // line 60
                        yield "\t\t\t\t\t\t\t\t<div class=\"banner-pill widget-prayer\" role=\"timer\" aria-live=\"polite\" aria-label=\"Next Prayer Timing\">
\t\t\t\t\t\t\t\t\t<svg class=\"pill-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
\t\t\t\t\t\t\t\t\t\t<polyline points=\"12 6 12 12 16 14\"></polyline>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<span class=\"banner-prayer-name\" id=\"next-prayer-name\">--</span>
\t\t\t\t\t\t\t\t\t<time class=\"banner-countdown\" id=\"prayer-countdown\">--:--</time>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                    } elseif ((                    // line 69
$context["widget"] == "hijri")) {
                        // line 70
                        yield "\t\t\t\t\t\t\t\t<div class=\"banner-pill widget-hijri\" aria-label=\"Hijri Date\">
\t\t\t\t\t\t\t\t\t<svg class=\"pill-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<span id=\"hijri-date\" class=\"banner-date\" aria-live=\"polite\">Loading...</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 77
                    yield "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['widget'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                yield "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
            }
            // line 82
            yield "
\t\t</div>
\t</div>
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
        return array (  197 => 82,  191 => 78,  185 => 77,  176 => 70,  174 => 69,  163 => 60,  161 => 59,  152 => 55,  148 => 54,  139 => 47,  136 => 46,  132 => 45,  129 => 44,  127 => 43,  124 => 42,  118 => 37,  116 => 36,  107 => 30,  102 => 27,  100 => 26,  98 => 25,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 16,  72 => 15,  69 => 14,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/top-banner.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/top-banner.html.twig");
    }
}
