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

/* modular/services.html.twig */
class __TwigTemplate_093d410b35f33382c4833683ad92542f extends Template
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
        // line 13
        yield "
<section class=\"section-services\">
    <div class=\"container ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("grid_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["grid_size"] ?? null), "grid-lg")) : ("grid-lg")), "html", null, true);
        yield "\">
        ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "            <h2 class=\"section-title\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 17), "title", [], "any", false, false, false, 17), "html", null, true);
            yield "</h2>
        ";
        }
        // line 19
        yield "        
        ";
        // line 20
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 20), "subtitle", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "            <p class=\"section-subtitle text-center\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 21), "subtitle", [], "any", false, false, false, 21), "html", null, true);
            yield "</p>
        ";
        }
        // line 23
        yield "        
        <div class=\"card-grid\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 25), "services", [], "any", false, false, false, 25));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            yield "                ";
            // line 27
            yield "                ";
            yield from $this->load("components/card.html.twig", 27)->unwrap()->yield(CoreExtension::merge($context, ["title" => CoreExtension::getAttribute($this->env, $this->source,             // line 28
$context["item"], "name", [], "any", false, false, false, 28), "subtitle" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 29
$context["item"], "subtitle", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "subtitle", [], "any", false, false, false, 29), "")) : ("")), "content" => CoreExtension::getAttribute($this->env, $this->source,             // line 30
$context["item"], "description", [], "any", false, false, false, 30), "image" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source,             // line 31
($context["page"] ?? null), "media", [], "any", false, false, false, 31)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 31)] ?? null) : null), "link" => CoreExtension::getAttribute($this->env, $this->source,             // line 32
$context["item"], "url", [], "any", false, false, false, 32), "button_text" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 33
$context["item"], "button_text", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "button_text", [], "any", false, false, false, 33), "Learn More")) : ("Learn More")), "style" => "glass-panel"]));
            // line 36
            yield "            ";
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        </div>
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
        return "modular/services.html.twig";
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
        return array (  115 => 37,  101 => 36,  99 => 33,  98 => 32,  97 => 31,  96 => 30,  95 => 29,  94 => 28,  92 => 27,  90 => 26,  73 => 25,  69 => 23,  63 => 21,  61 => 20,  58 => 19,  52 => 17,  50 => 16,  46 => 15,  42 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modular/services.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/modular/services.html.twig");
    }
}
