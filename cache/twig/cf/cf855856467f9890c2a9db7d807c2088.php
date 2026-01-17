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

    // line 6
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
            // line 7
            yield "\t";
            $macros["͜macros"] = $this;
            // line 8
            yield "\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 8), "visible", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 9
                yield "\t\t";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["p"], "home", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "\t\t\t";
                    $context["active_page"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 10) || CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 10))) ? ("active") : (""));
                    // line 11
                    yield "\t\t\t";
                    $context["has_children"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 11), "visible", [], "any", false, false, false, 11), "count", [], "any", false, false, false, 11) > 0);
                    // line 12
                    yield "
\t\t\t";
                    // line 14
                    yield "\t\t\t";
                    // line 16
                    yield "\t\t\t";
                    $context["is_khums"] = (CoreExtension::getAttribute($this->env, $this->source, $context["p"], "slug", [], "any", false, false, false, 16) == "khums-calculator");
                    // line 17
                    yield "\t\t\t";
                    $context["hide_on_mobile"] = (($context["is_khums"] ?? null) || ((!($context["mobile"] ?? null)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "slug", [], "any", false, false, false, 17), ["services", "ask", "donate"])));
                    // line 18
                    yield "\t\t\t\t<li class=\"nav-item ";
                    yield (((($tmp = ($context["hide_on_mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("desktop-only") : (""));
                    yield "\"> ";
                    if ((($context["mobile"] ?? null) && ($context["has_children"] ?? null))) {
                        // line 19
                        yield "\t\t\t\t\t";
                        // line 20
                        yield "\t\t\t\t\t<div class=\"flex-between\">
\t\t\t\t\t\t<a href=\"";
                        // line 21
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 21), "html", null, true);
                        yield "\" class=\"nav-link-mobile ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_page"] ?? null), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t";
                        // line 22
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 22), "html", null, true);
                        yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button type=\"button\" class=\"mobile-submenu-toggle ";
                        // line 24
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_page"] ?? null), "html", null, true);
                        yield "\" aria-expanded=\"";
                        yield (((($context["active_page"] ?? null) == "active")) ? ("true") : ("false"));
                        yield "\" aria-label=\"Toggle submenu\">
\t\t\t\t\t\t\t<i class=\"la la-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t";
                    } else {
                        // line 29
                        yield "\t\t\t\t\t";
                        // line 30
                        yield "\t\t\t\t\t<a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 30), "html", null, true);
                        yield "\" class=\"nav-link ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_page"] ?? null), "html", null, true);
                        yield "\" ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 30) || CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 30))) {
                            yield " aria-current=\"page\" ";
                        }
                        yield ">

\t\t\t\t\t\t<span>";
                        // line 32
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 32), "html", null, true);
                        yield "</span>

\t\t\t\t\t\t";
                        // line 34
                        if ((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 35
                            yield "\t\t\t\t\t\t\t<i class=\"la la-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t";
                        }
                        // line 37
                        yield "\t\t\t\t\t</a>
\t\t\t\t";
                    }
                    // line 39
                    yield "
\t\t\t\t";
                    // line 40
                    if ((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 41
                        yield "\t\t\t\t\t";
                        if ((($tmp = ($context["mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 42
                            yield "\t\t\t\t\t\t";
                            // line 43
                            yield "\t\t\t\t\t\t<ul class=\"mobile-submenu ";
                            yield (((($context["active_page"] ?? null) == "active")) ? ("") : ("hidden"));
                            yield "\">
\t\t\t\t\t\t\t";
                            // line 44
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 44), "visible", [], "any", false, false, false, 44));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                                // line 45
                                yield "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 46
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "url", [], "any", false, false, false, 46), "html", null, true);
                                yield "\" class=\"";
                                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "active", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                                yield "\">
\t\t\t\t\t\t\t\t\t\t";
                                // line 47
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "menu", [], "any", false, false, false, 47), "html", null, true);
                                yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['sub'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 51
                            yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                        } else {
                            // line 53
                            yield "\t\t\t\t\t\t";
                            // line 54
                            yield "\t\t\t\t\t\t<ul class=\"desktop-submenu\">
\t\t\t\t\t\t\t";
                            // line 55
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 55), "visible", [], "any", false, false, false, 55));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                                // line 56
                                yield "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 57
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "url", [], "any", false, false, false, 57), "html", null, true);
                                yield "\" ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "active", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield " aria-current=\"page\" ";
                                }
                                yield ">
\t\t\t\t\t\t\t\t\t\t";
                                // line 58
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "menu", [], "any", false, false, false, 58), "html", null, true);
                                yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['sub'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 62
                            yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                        }
                        // line 64
                        yield "\t\t\t\t";
                    }
                    // line 65
                    yield "\t\t\t</li>
\t\t";
                }
                // line 67
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
        return array (  229 => 67,  225 => 65,  222 => 64,  218 => 62,  208 => 58,  200 => 57,  197 => 56,  193 => 55,  190 => 54,  188 => 53,  184 => 51,  174 => 47,  168 => 46,  165 => 45,  161 => 44,  156 => 43,  154 => 42,  151 => 41,  149 => 40,  146 => 39,  142 => 37,  138 => 35,  136 => 34,  131 => 32,  119 => 30,  117 => 29,  107 => 24,  102 => 22,  96 => 21,  93 => 20,  91 => 19,  86 => 18,  83 => 17,  80 => 16,  78 => 14,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  61 => 8,  58 => 7,  45 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "macros/macros.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/macros/macros.html.twig");
    }
}
