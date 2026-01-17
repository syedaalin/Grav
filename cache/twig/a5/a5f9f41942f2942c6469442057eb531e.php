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

/* modular.html.twig */
class __TwigTemplate_f1a8cfe4d0b3c535e630af92aedaee4a extends Template
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

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 6
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        $context["show_onpage_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "onpage_menu", [], "any", false, false, false, 9) == true) || (null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "onpage_menu", [], "any", false, false, false, 9)));
        // line 6
        $this->parent = $this->load("partials/base.html.twig", 6);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "\t";
        if ((($tmp = ($context["show_onpage_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "\t\t";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/lib/singlepagenav.min.js", ["priority" => 100, "group" => "bottom"]], "method", false, false, false, 13);
            // line 14
            yield "\t\t";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/one-page-nav.js", ["priority" => 99, "group" => "bottom", "type" => "module"]], "method", false, false, false, 14);
            // line 15
            yield "\t";
        }
        // line 16
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "\t";
        if ((($tmp = ($context["show_onpage_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "\t\t<ul
\t\t\tclass=\"modular-nav\">
\t\t\t";
            // line 24
            yield "\t\t\t";
            $macros["͜macros"] = $this->load("macros/macros.html.twig", 24)->unwrap();
            // line 25
            yield "\t\t\t";
            yield $macros["͜macros"]->getTemplateForMacro("macro_nav_loop", $context, 25, $this->getSourceContext())->macro_nav_loop(...[($context["pages"] ?? null)]);
            yield "

\t\t\t";
            // line 28
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "method", false, false, false, 28), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "header", [], "any", false, false, false, 28), "visible", [], "any", false, false, false, 28) === false); }));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 29
                yield "\t\t\t\t";
                $context["current_module"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["module"], "active", [], "any", false, false, false, 29) || CoreExtension::getAttribute($this->env, $this->source, $context["module"], "activeChild", [], "any", false, false, false, 29))) ? ("active") : (""));
                // line 30
                yield "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, $context["module"], "menu", [], "any", false, false, false, 31)), "html", null, true);
                yield "\" class=\"nav-link ";
                yield (((($context["current_module"] ?? null) == "active")) ? ("nav-link-active") : (""));
                yield "\">
\t\t\t\t\t\t";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "menu", [], "any", false, false, false, 32), "html", null, true);
                yield "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "
\t\t\t";
            // line 38
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "menu", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 39
                yield "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mitem"], "url", [], "any", false, false, false, 40), "html", null, true);
                yield "\" class=\"nav-link ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mitem"], "class", [], "any", false, false, false, 40), "html", null, true);
                yield "\">
\t\t\t\t\t\t";
                // line 41
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["mitem"], "icon", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 42
                    yield "\t\t\t\t\t\t\t<i class=\"la la-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mitem"], "icon", [], "any", false, false, false, 42), "html", null, true);
                    yield " nav-icon\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t";
                }
                // line 44
                yield "\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mitem"], "text", [], "any", false, false, false, 44), "html", null, true);
                yield "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mitem'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "\t\t</ul>
\t";
        } else {
            // line 50
            yield "\t\t";
            yield from $this->yieldParentBlock("header_navigation", $context, $blocks);
            yield "
\t";
        }
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "method", false, false, false, 55), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "template", [], "any", false, false, false, 55) == "modular/hero"); }));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 56
            yield "\t\t<div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, $context["module"], "menu", [], "any", false, false, false, 56)), "html", null, true);
            yield "\" class=\"modular-section-anchor\">
\t\t\t";
            // line 57
            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "content", [], "any", false, false, false, 57);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "\t<main class=\"modular-body-wrapper\">
\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "method", false, false, false, 64), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "template", [], "any", false, false, false, 64) != "modular/hero"); }));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 65
            yield "\t\t\t<div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, $context["module"], "menu", [], "any", false, false, false, 65)), "html", null, true);
            yield "\" class=\"modular-section-anchor section-py\">
\t\t\t\t";
            // line 66
            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "content", [], "any", false, false, false, 66);
            yield "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "\t</main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular.html.twig";
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
        return array (  240 => 69,  231 => 66,  226 => 65,  222 => 64,  219 => 63,  212 => 62,  200 => 57,  195 => 56,  190 => 55,  183 => 54,  174 => 50,  170 => 48,  159 => 44,  153 => 42,  151 => 41,  145 => 40,  142 => 39,  137 => 38,  134 => 36,  124 => 32,  118 => 31,  115 => 30,  112 => 29,  107 => 28,  101 => 25,  98 => 24,  94 => 21,  91 => 20,  84 => 19,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  64 => 12,  57 => 11,  52 => 6,  50 => 9,  43 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modular.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/modular.html.twig");
    }
}
