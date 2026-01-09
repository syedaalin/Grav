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
class __TwigTemplate_390e1e0d10627e57180b693e8e1768ce extends Template
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
            'bottom' => [$this, 'block_bottom'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["show_onpage_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "onpage_menu", [], "any", false, false, false, 3) == true) || (null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "onpage_menu", [], "any", false, false, false, 3)));
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        if ((($tmp = ($context["show_onpage_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "        ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "add", ["theme://js/singlepagenav.min.js"], "method", false, false, false, 7);
            // line 8
            yield "    ";
        }
        // line 9
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    ";
        yield from $this->yieldParentBlock("bottom", $context, $blocks);
        yield "
    ";
        // line 14
        if ((($tmp = ($context["show_onpage_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "        <script>
        // singlePageNav initialization & configuration
        \$('ul.navigation').singlePageNav({
            offset: \$('#header').outerHeight(),
            filter: ':not(.external)',
            updateHash: true,
            currentClass: 'active'
        });
        </script>
    ";
        }
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        if ((($tmp = ($context["show_onpage_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "        <nav class=\"flex items-center\" aria-label=\"On-page navigation\">
            <ul class=\"navigation flex items-center gap-3 bg-white/40 backdrop-blur-3xl p-3 rounded-[2.5rem] border border-white/10 shadow-2xl\" role=\"list\">
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "method", false, false, false, 31), function ($__module__) use ($context, $macros) { $context["module"] = $__module__; return  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "header", [], "any", false, false, false, 31), "visible", [], "any", false, false, false, 31) === false); }));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 32
                yield "                <li role=\"listitem\">
                    <a class=\"px-10 py-5 text-xs font-black transition-all duration-700 rounded-[1.75rem] hover:bg-[var(--color-brand-primary)]/10 text-[var(--color-brand-dark)]/40 hover:text-[var(--color-brand-primary)] [&.active]:bg-[var(--color-brand-primary)] [&.active]:text-white [&.active]:shadow-2xl [&.active]:shadow-[var(--color-brand-primary)]/40 focus:ring-8 focus:ring-[var(--color-brand-primary)]/10 uppercase tracking-[0.3em] active:scale-90\" href=\"#";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, $context["module"], "menu", [], "any", false, false, false, 33)), "html", null, true);
                yield "\">
                        ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "menu", [], "any", false, false, false, 34), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "            </ul>
        </nav>
    ";
        } else {
            // line 41
            yield "        ";
            yield from $this->yieldParentBlock("header_navigation", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "method", false, false, false, 46), function ($__module__) use ($context, $macros) { $context["module"] = $__module__; return (CoreExtension::getAttribute($this->env, $this->source, $context["module"], "template", [], "any", false, false, false, 46) == "modular/hero"); }));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 47
            yield "        <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, $context["module"], "menu", [], "any", false, false, false, 47)), "html", null, true);
            yield "\"></div>
        ";
            // line 48
            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "content", [], "any", false, false, false, 48);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "    <div class=\"space-y-0 animate-in fade-in duration-1000\">
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "method", false, false, false, 54), function ($__module__) use ($context, $macros) { $context["module"] = $__module__; return (CoreExtension::getAttribute($this->env, $this->source, $context["module"], "template", [], "any", false, false, false, 54) != "modular/hero"); }));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 55
            yield "        <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, $context["module"], "menu", [], "any", false, false, false, 55)), "html", null, true);
            yield "\"></div>
        <div class=\"relative overflow-hidden\">
            ";
            // line 57
            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "content", [], "any", false, false, false, 57);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "    </div>
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
        return array (  217 => 60,  208 => 57,  202 => 55,  198 => 54,  195 => 53,  188 => 52,  177 => 48,  172 => 47,  167 => 46,  160 => 45,  151 => 41,  146 => 38,  136 => 34,  132 => 33,  129 => 32,  125 => 31,  121 => 29,  118 => 28,  111 => 27,  96 => 15,  94 => 14,  89 => 13,  82 => 12,  74 => 9,  71 => 8,  68 => 7,  65 => 6,  58 => 5,  53 => 1,  51 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modular.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/modular.html.twig");
    }
}
