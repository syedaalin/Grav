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
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["p"], "home", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 5
                    yield "            ";
                    $context["active_page"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 5) || CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 5))) ? ("active") : (""));
                    // line 6
                    yield "            <li class=\"relative group/nav\">
                <a href=\"";
                    // line 7
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 7), "html", null, true);
                    yield "\" 
                   class=\"flex items-center gap-2 px-4 py-3 text-sm @lg:text-base font-black transition-all duration-300 whitespace-nowrap rounded-xl
                          ";
                    // line 9
                    yield (((($context["active_page"] ?? null) == "active")) ? ("text-primary bg-primary/5") : ("text-gray-950 hover:text-primary hover:bg-primary/5"));
                    yield "
                          focus:input-focus\"
                   ";
                    // line 11
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 11) || CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 11))) {
                        yield "aria-current=\"page\"";
                    }
                    yield ">
                    ";
                    // line 12
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 12), "html", null, true);
                    yield "
                    ";
                    // line 13
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 13), "visible", [], "any", false, false, false, 13), "count", [], "any", false, false, false, 13) > 0)) {
                        // line 14
                        yield "                        <i class=\"la la-angle-down text-[10px] transition-transform duration-300 group-hover/nav:rotate-180\" aria-hidden=\"true\"></i>
                    ";
                    }
                    // line 16
                    yield "                </a>

                ";
                    // line 18
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 18), "visible", [], "any", false, false, false, 18), "count", [], "any", false, false, false, 18) > 0)) {
                        // line 19
                        yield "                    <ul class=\"absolute top-full left-0 mt-2 min-w-[220px] card-glass p-2 opacity-0 translate-y-2 pointer-events-none group-hover/nav:opacity-100 group-hover/nav:translate-y-0 group-hover/nav:pointer-events-auto z-50\">
                        ";
                        // line 20
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 20), "visible", [], "any", false, false, false, 20));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                            // line 21
                            yield "                            <li>
                                <a href=\"";
                            // line 22
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "url", [], "any", false, false, false, 22), "html", null, true);
                            yield "\" 
                                   class=\"block px-4 py-3 text-sm font-black text-gray-950 hover:text-primary hover:bg-primary/5 rounded-xl transition-colors
                                          focus:input-focus\"
                                   ";
                            // line 25
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "active", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "aria-current=\"page\"";
                            }
                            yield ">
                                    ";
                            // line 26
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "menu", [], "any", false, false, false, 26), "html", null, true);
                            yield "
                                </a>
                            </li>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['sub'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 30
                        yield "                    </ul>
                ";
                    }
                    // line 32
                    yield "            </li>
        ";
                }
                // line 34
                yield "    ";
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
        return array (  146 => 34,  142 => 32,  138 => 30,  128 => 26,  122 => 25,  116 => 22,  113 => 21,  109 => 20,  106 => 19,  104 => 18,  100 => 16,  96 => 14,  94 => 13,  90 => 12,  84 => 11,  79 => 9,  74 => 7,  71 => 6,  68 => 5,  65 => 4,  60 => 3,  57 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "macros/macros.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/macros/macros.html.twig");
    }
}
