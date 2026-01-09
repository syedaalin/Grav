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

/* partials/hero.html.twig */
class __TwigTemplate_449b1fa28ad97af3733b712f80a5ed0b extends Template
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
";
        // line 9
        $context["is_home"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 9);
        // line 10
        $context["hero_size"] = (((($tmp = ($context["is_home"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hero-large") : ("hero-medium"));
        // line 11
        $context["hero_classes"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 11), "hero_classes", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 11), "hero_classes", [], "any", false, false, false, 11), "")) : (""));
        // line 12
        $context["hero_align"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 12), "hero_align", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 12), "hero_align", [], "any", false, false, false, 12), (((($tmp = ($context["is_home"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("center") : ("left")))) : ((((($tmp = ($context["is_home"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("center") : ("left"))));
        // line 13
        $context["show_scroll_indicator"] = (($context["is_home"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 13), "hide_scroll_indicator", [], "any", false, false, false, 13));
        // line 14
        yield "
";
        // line 16
        $context["hero_image"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, true, false, 16), "images", [], "any", false, true, false, 16), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 16), "hero_image", [], "any", false, false, false, 16), [], "array", true, true, false, 16) &&  !(null === (($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 16), "images", [], "any", false, false, false, 16)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 16), "hero_image", [], "any", false, false, false, 16)] ?? null) : null)))) ? ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 16), "images", [], "any", false, false, false, 16)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 16), "hero_image", [], "any", false, false, false, 16)] ?? null) : null)) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 16), "images", [], "any", false, false, false, 16))));
        // line 17
        yield "
<section id=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("id", $context)) ? (Twig\Extension\CoreExtension::default(($context["id"] ?? null), "hero")) : ("hero")), "html", null, true);
        yield "\" 
         class=\"section modular-hero hero ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hero_size"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hero_classes"] ?? null), "html", null, true);
        yield " ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 19), "background", [], "any", false, false, false, 19), "parallax", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("parallax") : (""));
        yield "\" 
         ";
        // line 20
        if ((($tmp = ($context["hero_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "style=\"background-image: url('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero_image"] ?? null), "url", [], "any", false, false, false, 20), "html", null, true);
            yield "');\"";
        }
        yield ">
    
    ";
        // line 23
        yield "    <div class=\"image-overlay\"></div>
    
    ";
        // line 26
        yield "    <section class=\"container ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("grid_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["grid_size"] ?? null), "grid-lg")) : ("grid-lg")), "html", null, true);
        yield "\" style=\"text-align: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hero_align"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 27
        if ((($tmp = ($context["is_home"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "            ";
            // line 29
            yield "            <div class=\"hero-content-home\">
                ";
            // line 30
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 30), "hero_title", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 31
                yield "                    <h1 class=\"hero-title animate-fade-in\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 31), "hero_title", [], "any", false, false, false, 31), "html", null, true);
                yield "</h1>
                ";
            }
            // line 33
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 33), "hero_subtitle", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "                    <p class=\"hero-subtitle animate-fade-in-delay\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 34), "hero_subtitle", [], "any", false, false, false, 34), "html", null, true);
                yield "</p>
                ";
            }
            // line 36
            yield "                ";
            yield ($context["content"] ?? null);
            yield "
                ";
            // line 37
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 37), "hero_buttons", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "                    <div class=\"hero-buttons\">
                        ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 39), "hero_buttons", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 40
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 40), "html", null, true);
                    yield "\" class=\"btn ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "class", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "class", [], "any", false, false, false, 40), "btn-primary")) : ("btn-primary")), "html", null, true);
                    yield " squishy\">
                                ";
                    // line 41
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "text", [], "any", false, false, false, 41), "html", null, true);
                    yield "
                            </a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['button'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                yield "                    </div>
                ";
            }
            // line 46
            yield "            </div>
        ";
        } else {
            // line 48
            yield "            ";
            // line 49
            yield "            <div class=\"hero-content-internal\">
                ";
            // line 50
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 51
                yield "                    <h1 class=\"hero-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 51), "html", null, true);
                yield "</h1>
                ";
            }
            // line 53
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 53), "subtitle", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                    <p class=\"hero-subtitle\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 54), "subtitle", [], "any", false, false, false, 54), "html", null, true);
                yield "</p>
                ";
            }
            // line 56
            yield "                ";
            yield ($context["content"] ?? null);
            yield "
            </div>
        ";
        }
        // line 59
        yield "    </section>
    
    ";
        // line 62
        yield "    ";
        if ((($tmp = ($context["show_scroll_indicator"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "        <i id=\"to-start\" class=\"pulse fa fa-angle-down\" aria-label=\"Scroll to content\"></i>
    ";
        }
        // line 65
        yield "</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/hero.html.twig";
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
        return array (  197 => 65,  193 => 63,  190 => 62,  186 => 59,  179 => 56,  173 => 54,  170 => 53,  164 => 51,  162 => 50,  159 => 49,  157 => 48,  153 => 46,  149 => 44,  140 => 41,  133 => 40,  129 => 39,  126 => 38,  124 => 37,  119 => 36,  113 => 34,  110 => 33,  104 => 31,  102 => 30,  99 => 29,  97 => 28,  95 => 27,  88 => 26,  84 => 23,  75 => 20,  67 => 19,  63 => 18,  60 => 17,  58 => 16,  55 => 14,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  45 => 9,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/hero.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/partials/hero.html.twig");
    }
}
