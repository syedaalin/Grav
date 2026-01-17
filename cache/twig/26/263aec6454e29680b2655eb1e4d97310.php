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

/* partials/child-list.html.twig */
class __TwigTemplate_db11e0a64d295ab1d31a22f5246554b7 extends Template
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
        yield "<div class=\"child-list-grid\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            yield "\t\t<a
\t\t\thref=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, false, 9), "html", null, true);
            yield "\" class=\"child-card\">

\t\t\t";
            // line 12
            yield "\t\t\t";
            $context["child_image"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "media", [], "any", false, false, false, 12), "images", [], "any", false, false, false, 12));
            // line 13
            yield "\t\t\t";
            if ((($tmp = ($context["child_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 14
                yield "\t\t\t\t<div class=\"bg\">
\t\t\t\t\t<img src=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["child_image"] ?? null), "cropZoom", [600, 600], "method", false, false, false, 15), "derivative", ["webp"], "method", false, false, false, 15), "url", [], "any", false, false, false, 15), "html", null, true);
                yield "\" width=\"600\" height=\"600\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 15), "html_attr");
                yield "\" class=\"child-image\" loading=\"lazy\" decoding=\"async\">
\t\t\t\t</div>
\t\t\t";
            }
            // line 18
            yield "
\t\t\t<div
\t\t\t\tclass=\"content\">
\t\t\t\t";
            // line 22
            yield "\t\t\t\t<div class=\"icon\">
\t\t\t\t\t";
            // line 23
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "header", [], "any", false, false, false, 23), "icon", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "\t\t\t\t\t\t<i class=\"la la-fw ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "header", [], "any", false, false, false, 24), "icon", [], "any", false, false, false, 24), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
\t\t\t\t\t";
            } else {
                // line 26
                yield "\t\t\t\t\t\t<i class=\"la la-fw la-star\" aria-hidden=\"true\"></i>
\t\t\t\t\t";
            }
            // line 28
            yield "\t\t\t\t</div>

\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 31), "html", null, true);
            yield "
\t\t\t\t</h3>

\t\t\t\t<div class=\"text\">
\t\t\t\t\t";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "summary", [], "any", false, false, false, 35)), Grav\Common\Utils::truncate(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "content", [], "any", false, false, false, 35)), 150)), "html", null, true);
            yield "
\t\t\t\t</div>

\t\t\t\t<div class=\"label\">
\t\t\t\t\tDiscover
\t\t\t\t\t<i class=\"la la-arrow-right\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"glow\"></div>
\t\t</a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/child-list.html.twig";
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
        return array (  124 => 47,  106 => 35,  99 => 31,  94 => 28,  90 => 26,  84 => 24,  82 => 23,  79 => 22,  74 => 18,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  52 => 9,  49 => 8,  45 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/child-list.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/child-list.html.twig");
    }
}
