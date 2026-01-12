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

/* macros/macros.html.twig */
class __TwigTemplate_f2dfbc3b08f075cbd6509f5eb23b3213 extends Template
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
    public function macro_nav_loop($page = null, $mobile = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "page" => $page,
            "mobile" => $mobile,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "\t";
            $macros["͜macros"] = $this;
            // line 3
            yield "\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 3), "visible", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                yield "\t\t";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["p"], "home", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 5
                    yield "\t\t\t";
                    $context["active_page"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 5) || CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 5))) ? ("active") : (""));
                    // line 6
                    yield "\t\t\t";
                    $context["has_children"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 6), "visible", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6) > 0);
                    // line 7
                    yield "
\t\t\t";
                    // line 9
                    yield "\t\t\t";
                    // line 11
                    yield "\t\t\t";
                    $context["is_khums"] = (CoreExtension::getAttribute($this->env, $this->source, $context["p"], "slug", [], "any", false, false, false, 11) == "khums-calculator");
                    // line 12
                    yield "\t\t\t";
                    $context["hide_on_mobile"] = (($context["is_khums"] ?? null) || ((!($context["mobile"] ?? null)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "slug", [], "any", false, false, false, 12), ["services", "ask", "donate"])));
                    // line 13
                    yield "\t\t\t\t<li class=\"nav-item ";
                    yield (((($tmp = ($context["hide_on_mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("desktop-only") : (""));
                    yield "\"> ";
                    if ((($context["mobile"] ?? null) && ($context["has_children"] ?? null))) {
                        // line 14
                        yield "\t\t\t\t\t";
                        // line 15
                        yield "\t\t\t\t\t<div class=\"flex-between\">
\t\t\t\t\t\t<a href=\"";
                        // line 16
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 16), "html", null, true);
                        yield "\" class=\"nav-link-mobile ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_page"] ?? null), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t";
                        // line 17
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 17), "html", null, true);
                        yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button type=\"button\" class=\"mobile-submenu-toggle ";
                        // line 19
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_page"] ?? null), "html", null, true);
                        yield "\" aria-expanded=\"";
                        yield (((($context["active_page"] ?? null) == "active")) ? ("true") : ("false"));
                        yield "\" aria-label=\"Toggle submenu\">
\t\t\t\t\t\t\t<i class=\"la la-angle-down\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t";
                    } else {
                        // line 24
                        yield "\t\t\t\t\t";
                        // line 25
                        yield "\t\t\t\t\t<a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 25), "html", null, true);
                        yield "\" class=\"nav-link ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_page"] ?? null), "html", null, true);
                        yield "\" ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 25) || CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 25))) {
                            yield " aria-current=\"page\" ";
                        }
                        yield ">

\t\t\t\t\t\t<span>";
                        // line 27
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 27), "html", null, true);
                        yield "</span>

\t\t\t\t\t\t";
                        // line 29
                        if ((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 30
                            yield "\t\t\t\t\t\t\t<i class=\"la la-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t";
                        }
                        // line 32
                        yield "\t\t\t\t\t</a>
\t\t\t\t";
                    }
                    // line 34
                    yield "
\t\t\t\t";
                    // line 35
                    if ((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 36
                        yield "\t\t\t\t\t";
                        if ((($tmp = ($context["mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 37
                            yield "\t\t\t\t\t\t";
                            // line 38
                            yield "\t\t\t\t\t\t<ul class=\"mobile-submenu ";
                            yield (((($context["active_page"] ?? null) == "active")) ? ("") : ("hidden"));
                            yield "\">
\t\t\t\t\t\t\t";
                            // line 39
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 39), "visible", [], "any", false, false, false, 39));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                                // line 40
                                yield "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 41
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "url", [], "any", false, false, false, 41), "html", null, true);
                                yield "\" class=\"";
                                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "active", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                                yield "\">
\t\t\t\t\t\t\t\t\t\t";
                                // line 42
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "menu", [], "any", false, false, false, 42), "html", null, true);
                                yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['sub'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 46
                            yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                        } else {
                            // line 48
                            yield "\t\t\t\t\t\t";
                            // line 49
                            yield "\t\t\t\t\t\t<ul class=\"desktop-submenu\">
\t\t\t\t\t\t\t";
                            // line 50
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 50), "visible", [], "any", false, false, false, 50));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                                // line 51
                                yield "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 52
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "url", [], "any", false, false, false, 52), "html", null, true);
                                yield "\" ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "active", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield " aria-current=\"page\" ";
                                }
                                yield ">
\t\t\t\t\t\t\t\t\t\t";
                                // line 53
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "menu", [], "any", false, false, false, 53), "html", null, true);
                                yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['sub'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 57
                            yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                        }
                        // line 59
                        yield "\t\t\t\t";
                    }
                    // line 60
                    yield "\t\t\t</li>
\t\t";
                }
                // line 62
                yield "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/macros.html.twig";
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
        return array (  229 => 62,  225 => 60,  222 => 59,  218 => 57,  208 => 53,  200 => 52,  197 => 51,  193 => 50,  190 => 49,  188 => 48,  184 => 46,  174 => 42,  168 => 41,  165 => 40,  161 => 39,  156 => 38,  154 => 37,  151 => 36,  149 => 35,  146 => 34,  142 => 32,  138 => 30,  136 => 29,  131 => 27,  119 => 25,  117 => 24,  107 => 19,  102 => 17,  96 => 16,  93 => 15,  91 => 14,  86 => 13,  83 => 12,  80 => 11,  78 => 9,  75 => 7,  72 => 6,  69 => 5,  66 => 4,  61 => 3,  58 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "macros/macros.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/macros/macros.html.twig");
    }
}
