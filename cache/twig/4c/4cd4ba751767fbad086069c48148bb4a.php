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
        // line 9
        yield "
";
        // line 10
        $context["text_dir"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 10), "getDirection", [], "method", false, false, false, 10)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 10), "getDirection", [], "method", false, false, false, 10)) : ("ltr"));
        // line 11
        yield "


";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "active", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "\t";
            // line 19
            yield "\t<div id=\"top-banner-utility-bar\" 
         class=\"top-banner\" 
         data-glass=\"";
            // line 21
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "use_glass", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\"
         data-border=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "border_type", [], "any", false, false, false, 22), "html", null, true);
            yield "\"
         data-pause-hover=\"";
            // line 23
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "pause_on_hover", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\"
         style=\"--banner-bg: ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "bg_color", [], "any", false, false, false, 24), "html", null, true);
            yield "; --banner-text: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "text_color", [], "any", false, false, false, 24), "html", null, true);
            yield ";\" 
         dir=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_dir"] ?? null), "html", null, true);
            yield "\" 
         role=\"complementary\" 
         aria-label=\"Utility Bar\">

\t\t";
            // line 29
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "show_announcement", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "\t\t\t";
                // line 31
                yield "\t\t\t<div class=\"top-banner-announcement\" role=\"alert\" aria-live=\"assertive\">
\t\t\t\t<div class=\"announcement-marquee-container\">
\t\t\t\t\t<div class=\"announcement-marquee\" style=\"--marquee-speed: ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_speed", [], "any", false, false, false, 33), "html", null, true);
                yield "s;\">
\t\t\t\t\t\t";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_text", [], "any", false, false, false, 34), "html", null, true);
                yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
            } else {
                // line 40
                yield "\t\t\t";
                // line 41
                yield "\t\t\t<div class=\"top-banner-inner\">
\t\t\t\t<div class=\"top-banner-layout\">
\t\t\t\t\t<div class=\"top-banner-widgets\">
\t\t\t\t\t\t";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "widgets_order", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                    // line 45
                    yield "\t\t\t\t\t\t\t";
                    $context["is_hidden_mobile"] = CoreExtension::inFilter($context["widget"], CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "mobile_hide", [], "any", false, false, false, 45));
                    // line 46
                    yield "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 48
                    yield "\t\t\t\t\t\t\t";
                    if (($context["widget"] == "date")) {
                        // line 49
                        yield "\t\t\t\t\t\t\t\t<div class=\"banner-pill widget-gregorian ";
                        yield (((($tmp = ($context["is_hidden_mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hide-mobile") : (""));
                        yield "\" aria-label=\"Current Date\">
\t\t\t\t\t\t\t\t\t<time id=\"gregorian-date\" class=\"banner-date\" datetime=\"";
                        // line 50
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 51
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "D, M j"), "html", null, true);
                        yield "<span class=\"year-responsive\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", ", Y"), "html", null, true);
                        yield "</span>
\t\t\t\t\t\t\t\t\t</time>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                        // line 56
                        yield "\t\t\t\t\t\t\t";
                    } elseif (($context["widget"] == "prayer")) {
                        // line 57
                        yield "\t\t\t\t\t\t\t\t<div class=\"banner-pill widget-prayer ";
                        yield (((($tmp = ($context["is_hidden_mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hide-mobile") : (""));
                        yield "\" role=\"timer\" aria-live=\"polite\" aria-label=\"Upcoming Namaz Timing\">
\t\t\t\t\t\t\t\t\t<span class=\"banner-prayer-name\" id=\"next-prayer-name\">--</span>
\t\t\t\t\t\t\t\t\t<time class=\"banner-countdown\" id=\"prayer-countdown\">--:--</time>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                        // line 63
                        yield "\t\t\t\t\t\t\t";
                    } elseif (($context["widget"] == "hijri")) {
                        // line 64
                        yield "\t\t\t\t\t\t\t\t<div class=\"banner-pill widget-hijri ";
                        yield (((($tmp = ($context["is_hidden_mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hide-mobile") : (""));
                        yield "\" aria-label=\"Hijri Date\">
\t\t\t\t\t\t\t\t\t<span id=\"hijri-date\" class=\"banner-date\" aria-live=\"polite\">Loading...</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 68
                    yield "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['widget'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 73
            yield "\t</div>
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
        return array (  179 => 73,  173 => 69,  167 => 68,  159 => 64,  156 => 63,  147 => 57,  144 => 56,  135 => 51,  131 => 50,  126 => 49,  123 => 48,  120 => 46,  117 => 45,  113 => 44,  108 => 41,  106 => 40,  97 => 34,  93 => 33,  89 => 31,  87 => 30,  85 => 29,  78 => 25,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  56 => 19,  54 => 15,  52 => 14,  47 => 11,  45 => 10,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/top-banner.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/top-banner.html.twig");
    }
}
