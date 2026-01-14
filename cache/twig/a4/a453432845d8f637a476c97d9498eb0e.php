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

/* partials/bottom-banner/main.html.twig */
class __TwigTemplate_b1cec81ce16d9e06e21ac78590669fab extends Template
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
        // line 8
        yield "
<footer
\tid=\"bottom-banner\" class=\"bottom-banner-main\" style=\"background-color: ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "bg_style", [], "any", false, false, false, 10), "html", null, true);
        yield "; color: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "text_color", [], "any", false, false, false, 10), "html", null, true);
        yield ";\" role=\"contentinfo\" aria-label=\"Site bottom banner\">
\t
    ";
        // line 12
        yield from $this->load("partials/bottom-banner/schema.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "
\t";
        // line 15
        yield "\t<div class=\"bottom-banner-pattern\" aria-hidden=\"true\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<defs>
\t\t\t\t<pattern id=\"bottom-banner-pattern\" x=\"0\" y=\"0\" width=\"40\" height=\"40\" patternunits=\"userSpaceOnUse\">
\t\t\t\t\t<circle cx=\"20\" cy=\"20\" r=\"1\" fill=\"currentColor\"/>
\t\t\t\t</pattern>
\t\t\t</defs>
\t\t\t<rect width=\"100%\" height=\"100%\" fill=\"url(#bottom-banner-pattern)\"/>
\t\t</svg>
\t</div>

\t<div class=\"bottom-banner-layout-stack\">
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "widgets", [], "any", false, false, false, 27));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 28
            yield "\t\t\t";
            if (($context["widget"] == "brand")) {
                // line 29
                yield "\t\t\t\t";
                yield from $this->load("partials/bottom-banner/brand.html.twig", 29)->unwrap()->yield($context);
                // line 30
                yield "
\t\t\t";
            } elseif ((            // line 31
$context["widget"] == "newsletter")) {
                // line 32
                yield "\t\t\t\t";
                // line 33
                yield "\t\t\t\t";
                yield from $this->load("partials/bottom-banner/newsletter.html.twig", 33)->unwrap()->yield($context);
                // line 34
                yield "
\t\t\t";
            } elseif ((            // line 35
$context["widget"] == "social")) {
                // line 36
                yield "\t\t\t\t";
                // line 37
                yield "\t\t\t\t<div class=\"bottom-banner-social-strip\">
\t\t\t\t\t<div class=\"bottom-banner-body\">
\t\t\t\t\t\t<section class=\"bottom-banner-social-section\" aria-label=\"Social Media Links\">
\t\t\t\t\t\t\t";
                // line 40
                yield from $this->load("partials/social-icons.html.twig", 40)->unwrap()->yield(CoreExtension::merge($context, ["context" => "bottom_banner"]));
                // line 41
                yield "\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
            } elseif ((            // line 45
$context["widget"] == "nav")) {
                // line 46
                yield "\t\t\t\t";
                yield from $this->load("partials/bottom-banner/nav.html.twig", 46)->unwrap()->yield($context);
                // line 47
                yield "
\t\t\t";
            } elseif ((            // line 48
$context["widget"] == "copyright")) {
                // line 49
                yield "\t\t\t\t";
                yield from $this->load("partials/bottom-banner/copyright.html.twig", 49)->unwrap()->yield($context);
                // line 50
                yield "\t\t\t";
            }
            // line 51
            yield "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "\t</div>

\t";
        // line 55
        yield "\t";
        // line 56
        yield "\t<a href=\"#top\" class=\"back-to-top\" aria-label=\"Back to top\" data-back-to-top>
\t\t<svg class=\"progress-ring\" width=\"100%\" height=\"100%\" viewBox=\"0 0 100 100\">
\t\t\t<circle class=\"progress-ring-circle\" cx=\"50\" cy=\"50\" r=\"46\" />
\t\t</svg>
\t\t<i class=\"la la-angle-up icon-lg\" aria-hidden=\"true\"></i>
\t</a>
</footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/bottom-banner/main.html.twig";
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
        return array (  161 => 56,  159 => 55,  155 => 52,  141 => 51,  138 => 50,  135 => 49,  133 => 48,  130 => 47,  127 => 46,  125 => 45,  119 => 41,  117 => 40,  112 => 37,  110 => 36,  108 => 35,  105 => 34,  102 => 33,  100 => 32,  98 => 31,  95 => 30,  92 => 29,  89 => 28,  72 => 27,  58 => 15,  55 => 13,  53 => 12,  46 => 10,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/bottom-banner/main.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/bottom-banner/main.html.twig");
    }
}
