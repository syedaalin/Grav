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
class __TwigTemplate_59e842fdcb46289423f3c47b08850adc extends Template
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
            yield "  ";
            $macros["͜macros"] = $this;
            // line 3
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 3), "visible", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                yield "    ";
                $context["is_active"] = (CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 4) || CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 4));
                // line 5
                yield "    ";
                $context["active_classes"] = (((($tmp = ($context["is_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-brand-primary text-white font-black shadow-3xl shadow-brand-primary/30") : ("text-brand-dark/40 hover:text-brand-primary hover:bg-brand-primary/5"));
                // line 6
                yield "    <li class=\"group/nav relative\">
      <a href=\"";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 7), "html", null, true);
                yield "\" 
         class=\"flex items-center px-8 py-4 text-[13px] font-black transition-all rounded-[1.5rem] uppercase tracking-[0.15em] ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_classes"] ?? null), "html", null, true);
                yield " focus:ring-4 focus:ring-brand-primary/10\"
         ";
                // line 9
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "aria-current=\"page\"";
                }
                // line 10
                yield "         ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 10), "visible", [], "any", false, false, false, 10), "count", [], "any", false, false, false, 10) > 0)) {
                    yield "aria-haspopup=\"true\" aria-expanded=\"false\"";
                }
                yield ">
        <span class=\"relative z-10\">";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 11), "html", null, true);
                yield "</span>
        ";
                // line 12
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 12), "visible", [], "any", false, false, false, 12), "count", [], "any", false, false, false, 12) > 0)) {
                    // line 13
                    yield "          <span class=\"la la-angle-down ml-3 text-xs transition-transform duration-500 group-hover/nav:rotate-180 group-focus-within/nav:rotate-180\" aria-hidden=\"true\"></span>
        ";
                }
                // line 15
                yield "      </a>
      ";
                // line 16
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 16), "visible", [], "any", false, false, false, 16), "count", [], "any", false, false, false, 16) > 0)) {
                    // line 17
                    yield "        <ul class=\"lg:absolute lg:top-full lg:left-0 lg:min-w-[300px] lg:bg-surface-sunken/40 lg:backdrop-blur-3xl lg:shadow-4xl lg:rounded-[2.5rem] lg:p-8 lg:mt-6 lg:opacity-0 lg:invisible lg:group-hover/nav:opacity-100 lg:group-hover/nav:visible lg:translate-x-4 lg:group-hover/nav:translate-x-0 lg:transition-all lg:duration-700 lg:z-[70] lg:border lg:border-brand-primary/10
                   pl-10 border-l-2 border-brand-primary/5 ml-8 space-y-4 mt-6 lg:ml-0 lg:border-l-0\" role=\"list\">
          ";
                    // line 19
                    yield $macros["͜macros"]->getTemplateForMacro("macro_nav_loop", $context, 19, $this->getSourceContext())->macro_nav_loop(...[$context["p"]]);
                    yield "
        </ul>
      ";
                }
                // line 22
                yield "    </li>
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
        return array (  118 => 22,  112 => 19,  108 => 17,  106 => 16,  103 => 15,  99 => 13,  97 => 12,  93 => 11,  86 => 10,  82 => 9,  78 => 8,  74 => 7,  71 => 6,  68 => 5,  65 => 4,  60 => 3,  57 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "macros/macros.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/macros/macros.html.twig");
    }
}
