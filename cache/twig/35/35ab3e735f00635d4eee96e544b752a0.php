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

/* partials/hero-builder.html.twig */
class __TwigTemplate_5cdc10efc65e15d301ae5e2e0b8f2215 extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 1), "hero_enabled", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            $context["hero_style"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 2), "hero_style", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2), "hero_style", [], "any", false, false, false, 2), "standard")) : ("standard"));
            // line 3
            yield "    ";
            $context["title"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 3), "hero_title", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3), "hero_title", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 3))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 3)));
            // line 4
            yield "    ";
            $context["subtitle"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 4), "hero_subtitle", [], "any", false, false, false, 4);
            // line 5
            yield "    ";
            $context["overlay_op"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 5), "hero_overlay_opacity", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 5), "hero_overlay_opacity", [], "any", false, false, false, 5), 0.3)) : (0.3));
            // line 6
            yield "    
    ";
            // line 8
            yield "    ";
            $context["hero_bg"] = "";
            // line 9
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "hero_image", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "        ";
                $context["hero_image"] = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 10)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 10), "hero_image", [], "any", false, false, false, 10)] ?? null) : null);
                // line 11
                yield "        ";
                if ((($tmp = ($context["hero_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 12
                    yield "             ";
                    $context["hero_bg"] = (("background-image: url(" . CoreExtension::getAttribute($this->env, $this->source, ($context["hero_image"] ?? null), "url", [], "any", false, false, false, 12)) . ");");
                    // line 13
                    yield "             ";
                    // line 14
                    yield "             <link rel=\"preload\" as=\"image\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero_image"] ?? null), "url", [], "any", false, false, false, 14), "html", null, true);
                    yield "\" fetchpriority=\"high\">
        ";
                }
                // line 16
                yield "    ";
            }
            // line 17
            yield "
    <section 
        class=\"hero-builder hero-";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hero_style"] ?? null), "html", null, true);
            yield "\" 
        style=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hero_bg"] ?? null), "html", null, true);
            yield " --overlay-opacity: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["overlay_op"] ?? null), "html", null, true);
            yield ";\"
        aria-label=\"Hero Section\"
    >
        ";
            // line 24
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 24), "hero_video", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "             ";
                $context["video"] = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 25)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 25), "hero_video", [], "any", false, false, false, 25)] ?? null) : null);
                // line 26
                yield "             <video class=\"hero-video\" autoplay muted loop playsinline>
                 <source src=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["video"] ?? null), "url", [], "any", false, false, false, 27), "html", null, true);
                yield "\" type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["video"] ?? null), "mime", [], "any", false, false, false, 27), "html", null, true);
                yield "\">
             </video>
        ";
            }
            // line 30
            yield "        
        <div class=\"hero-overlay\"></div>

        <div class=\"container\">
            <div class=\"hero-content\">
                <h1 class=\"hero-title\" style=\"text-wrap: balance;\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null));
            yield "</h1>
                
                ";
            // line 37
            if ((($tmp = ($context["subtitle"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "                    <p class=\"hero-subtitle\" style=\"text-wrap: pretty;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subtitle"] ?? null));
                yield "</p>
                ";
            }
            // line 40
            yield "
                ";
            // line 41
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 41), "hero_buttons", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "                <div class=\"hero-actions\">
                    ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 43), "hero_buttons", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 44
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 44), "html", null, true);
                    yield "\" class=\"btn ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "class", [], "any", false, false, false, 44), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "text", [], "any", false, false, false, 44), "html", null, true);
                    yield "</a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['button'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "                </div>
                ";
            }
            // line 48
            yield "            </div>
        </div>
    </section>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/hero-builder.html.twig";
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
        return array (  167 => 48,  163 => 46,  150 => 44,  146 => 43,  143 => 42,  141 => 41,  138 => 40,  132 => 38,  130 => 37,  125 => 35,  118 => 30,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  93 => 20,  89 => 19,  85 => 17,  82 => 16,  76 => 14,  74 => 13,  71 => 12,  68 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 6,  53 => 5,  50 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/hero-builder.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/hero-builder.html.twig");
    }
}
