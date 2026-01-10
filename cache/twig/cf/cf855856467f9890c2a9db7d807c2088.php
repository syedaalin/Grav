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
            yield "  ";
            $macros["͜macros"] = $this;
            // line 3
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 3), "visible", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                yield "    ";
                $context["active_page"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 4) || CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 4))) ? ("active") : (""));
                // line 5
                yield "    <li>
      <a href=\"";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 6), "html", null, true);
                yield "\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_page"] ?? null), "html", null, true);
                yield "\">
        ";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 7), "html", null, true);
                yield "
      </a>
      ";
                // line 9
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 9), "visible", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9) > 0)) {
                    // line 10
                    yield "      <ul>
        ";
                    // line 11
                    yield $macros["͜macros"]->getTemplateForMacro("macro_nav_loop", $context, 11, $this->getSourceContext())->macro_nav_loop(...[$context["p"]]);
                    yield "
      </ul>
      ";
                }
                // line 14
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
        return array (  93 => 14,  87 => 11,  84 => 10,  82 => 9,  77 => 7,  71 => 6,  68 => 5,  65 => 4,  60 => 3,  57 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "macros/macros.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/macros/macros.html.twig");
    }
}
