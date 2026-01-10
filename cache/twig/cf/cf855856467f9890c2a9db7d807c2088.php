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
    public function macro_nav_loop($page = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "page" => $page,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "    ";
            $macros["͜macros"] = $this;
            // line 3
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 3), "visible", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                yield "        ";
                $context["active_page"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 4) || CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 4))) ? ("active") : (""));
                // line 5
                yield "        <li class=\"relative group/nav\">
            <a href=\"";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 6), "html", null, true);
                yield "\" 
               class=\"flex items-center gap-2 px-4 py-3 text-sm @lg:text-base font-black transition-all duration-300 whitespace-nowrap rounded-xl
                      ";
                // line 8
                yield (((($context["active_page"] ?? null) == "active")) ? ("text-primary bg-primary/5") : ("text-gray-950 hover:text-primary hover:bg-primary/5"));
                yield "
                      focus:input-focus\"
               ";
                // line 10
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 10) || CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 10))) {
                    yield "aria-current=\"page\"";
                }
                yield ">
                ";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 11), "html", null, true);
                yield "
                ";
                // line 12
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 12), "visible", [], "any", false, false, false, 12), "count", [], "any", false, false, false, 12) > 0)) {
                    // line 13
                    yield "                    <i class=\"la la-angle-down text-[10px] transition-transform duration-300 group-hover/nav:rotate-180\" aria-hidden=\"true\"></i>
                ";
                }
                // line 15
                yield "            </a>

            ";
                // line 17
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 17), "visible", [], "any", false, false, false, 17), "count", [], "any", false, false, false, 17) > 0)) {
                    // line 18
                    yield "                <ul class=\"absolute top-full left-0 mt-2 min-w-[220px] card-glass p-2 opacity-0 translate-y-2 pointer-events-none group-hover/nav:opacity-100 group-hover/nav:translate-y-0 group-hover/nav:pointer-events-auto z-50\">
                    ";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 19), "visible", [], "any", false, false, false, 19));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 20
                        yield "                        <li>
                            <a href=\"";
                        // line 21
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "url", [], "any", false, false, false, 21), "html", null, true);
                        yield "\" 
                               class=\"block px-4 py-3 text-sm font-black text-gray-950 hover:text-primary hover:bg-primary/5 rounded-xl transition-colors
                                      focus:input-focus\"
                               ";
                        // line 24
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "active", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "aria-current=\"page\"";
                        }
                        yield ">
                                ";
                        // line 25
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "menu", [], "any", false, false, false, 25), "html", null, true);
                        yield "
                            </a>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['sub'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    yield "                </ul>
            ";
                }
                // line 31
                yield "        </li>
    ";
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
        return array (  139 => 31,  135 => 29,  125 => 25,  119 => 24,  113 => 21,  110 => 20,  106 => 19,  103 => 18,  101 => 17,  97 => 15,  93 => 13,  91 => 12,  87 => 11,  81 => 10,  76 => 8,  71 => 6,  68 => 5,  65 => 4,  60 => 3,  57 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "macros/macros.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/macros/macros.html.twig");
    }
}
