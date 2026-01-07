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

/* macros/nav.html.twig */
class __TwigTemplate_ccfc449aca6f3275f0e70b847e3d1726 extends Template
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
        yield from [];
    }

    // line 1
    public function macro_loop($items = null, $level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "level" => $level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            $macros["͜macros"] = $this;
            // line 3
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
                // line 4
                yield "    ";
                $context["has_children"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 4)) > 0);
                // line 5
                yield "    ";
                $context["is_mega"] = (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 5) == "mega");
                // line 6
                yield "    ";
                $context["active_class"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 6) == CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "route", [], "any", false, false, false, 6))) ? ("active") : (""));
                // line 7
                yield "    
    <li class=\"nav-item ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_class"] ?? null), "html", null, true);
                yield " ";
                yield (((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-children") : (""));
                yield " ";
                yield (((($tmp = ($context["is_mega"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-mega") : (""));
                yield "\" 
        role=\"none\" 
        data-mx-context=\"";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "mx_context", [], "any", false, false, false, 10));
                yield "\"
        data-design-token=\"";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "design_token", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "design_token", [], "any", false, false, false, 11), "default")) : ("default")), "html", null, true);
                yield "\">
      
      ";
                // line 13
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 13) == "heading")) {
                    // line 14
                    yield "        <span class=\"nav-heading\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 14), "html", null, true);
                    yield "</span>
      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 15
$context["item"], "type", [], "any", false, false, false, 15) == "logo")) {
                    // line 16
                    yield "        <a href=\"";
                    yield (((($context["base_url"] ?? null) == "")) ? ("/") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true)));
                    yield "\" class=\"nav-brand\" aria-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
                    yield "\">
          ";
                    // line 17
                    yield from $this->load("partials/logo.html.twig", 17)->unwrap()->yield($context);
                    // line 18
                    yield "        </a>
      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 19
$context["item"], "type", [], "any", false, false, false, 19) == "button")) {
                    // line 20
                    yield "         <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 20), "html", null, true);
                    yield "\" class=\"btn btn-primary ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "design_token", [], "any", false, false, false, 20) == "accent")) ? ("btn-accent") : (""));
                    yield "\">
           ";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 21), "html", null, true);
                    yield "
         </a>
      ";
                } else {
                    // line 24
                    yield "        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 24), "html", null, true);
                    yield "\" class=\"nav-link\" role=\"menuitem\" ";
                    yield (((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("aria-haspopup=\"true\" aria-expanded=\"false\"") : (""));
                    yield ">
          ";
                    // line 25
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 25), "html", null, true);
                    yield "
          ";
                    // line 26
                    if ((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 27
                        yield "            <span class=\"dropdown-icon\">▼</span>
          ";
                    }
                    // line 29
                    yield "        </a>
      ";
                }
                // line 31
                yield "
      ";
                // line 32
                if ((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 33
                    yield "         <div class=\"dropdown-menu level-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level"] ?? null), "html", null, true);
                    yield "\">
           <ul role=\"menu\">
             ";
                    // line 35
                    yield $macros["͜macros"]->getTemplateForMacro("macro_loop", $context, 35, $this->getSourceContext())->macro_loop(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 35), (($context["level"] ?? null) + 1)]);
                    yield "
           </ul>
         </div>
      ";
                }
                // line 39
                yield "    </li>
  ";
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
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/nav.html.twig";
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
        return array (  184 => 39,  177 => 35,  171 => 33,  169 => 32,  166 => 31,  162 => 29,  158 => 27,  156 => 26,  152 => 25,  145 => 24,  139 => 21,  132 => 20,  130 => 19,  127 => 18,  125 => 17,  118 => 16,  116 => 15,  111 => 14,  109 => 13,  104 => 11,  100 => 10,  91 => 8,  88 => 7,  85 => 6,  82 => 5,  79 => 4,  61 => 3,  58 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "macros/nav.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/macros/nav.html.twig");
    }
}
