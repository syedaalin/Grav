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
        // line 6
        yield "
";
        // line 8
        yield "
";
        // line 11
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "show_announcement", [], "any", false, false, false, 11) && CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_text", [], "any", false, false, false, 11))) {
            // line 12
            yield "\t<div class=\"ticker-component\" style=\"--ticker-bg: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "bg_color", [], "any", false, false, false, 12), "html", null, true);
            yield "; --ticker-text: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "text_color", [], "any", false, false, false, 12), "html", null, true);
            yield ";\">
\t\t<div class=\"container ticker-wrapper\">
\t\t\t";
            // line 15
            yield "\t\t\t<div class=\"ticker-marquee\" style=\"--marquee-duration: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_speed", [], "any", false, false, false, 15), "html", null, true);
            yield "s;\" data-pause=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "pause_on_hover", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\">
\t\t\t\t<span class=\"ticker-content\">
\t\t\t\t\t";
            // line 17
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_link", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_link", [], "any", false, false, false, 18), "html", null, true);
                yield "\" class=\"ticker-link\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_new_tab", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " target=\"_blank\" ";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_text", [], "any", false, false, false, 18), "html", null, true);
                yield "</a>
\t\t\t\t\t";
            } else {
                // line 20
                yield "\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_text", [], "any", false, false, false, 20), "html", null, true);
                yield "
\t\t\t\t\t";
            }
            // line 22
            yield "\t\t\t\t</span>
\t\t\t\t
\t\t\t\t";
            // line 25
            yield "\t\t\t\t<span class=\"ticker-content\" aria-hidden=\"true\">
\t\t\t\t\t";
            // line 26
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_link", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_link", [], "any", false, false, false, 27), "html", null, true);
                yield "\" class=\"ticker-link\" tabindex=\"-1\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_new_tab", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " target=\"_blank\" ";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_text", [], "any", false, false, false, 27), "html", null, true);
                yield "</a>
\t\t\t\t\t";
            } else {
                // line 29
                yield "\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["top_banner"] ?? null), "announcement_text", [], "any", false, false, false, 29), "html", null, true);
                yield "
\t\t\t\t\t";
            }
            // line 31
            yield "\t\t\t\t</span>
\t\t\t</div>
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
        return array (  113 => 31,  107 => 29,  95 => 27,  93 => 26,  90 => 25,  86 => 22,  80 => 20,  68 => 18,  66 => 17,  58 => 15,  50 => 12,  48 => 11,  45 => 8,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/top-banner.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/top-banner.html.twig");
    }
}
