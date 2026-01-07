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

/* partials/navigation.html.twig */
class __TwigTemplate_a314a8e5f8b9875d5ebf46602adb9b6e extends Template
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
        $macros["͜macros"] = $this->macros["͜macros"] = $this->load("macros/macros.html.twig", 1)->unwrap();
        // line 2
        $macros["nav_macros"] = $this->macros["nav_macros"] = $this->load("macros/nav.html.twig", 2)->unwrap();
        // line 3
        yield "
";
        // line 5
        $context["header_menu"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_header_structure");
        // line 6
        $context["navigation_config"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_nav_nodes");
        // line 7
        yield "
";
        // line 8
        if ((($tmp = ($context["header_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    ";
            // line 10
            yield "    <ul class=\"cognitive-nav__list\">
        ";
            // line 11
            yield $macros["nav_macros"]->getTemplateForMacro("macro_loop", $context, 11, $this->getSourceContext())->macro_loop(...[($context["header_menu"] ?? null), 1]);
            yield "
    </ul>
";
        } else {
            // line 14
            yield " <nav class=\"cognitive-nav\" role=\"navigation\" aria-label=\"Main Navigation\">
     ";
            // line 16
            yield "    <ul class=\"cognitive-nav__list\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["navigation_config"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                yield "            ";
                // line 19
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 19) == "static_node")) {
                    // line 20
                    yield "                <li class=\"cognitive-nav__item\">
                    <a href=\"";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 21), "html", null, true);
                    yield "\" class=\"cognitive-nav__link\">
                        ";
                    // line 22
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 22), "html", null, true);
                    yield "
                    </a>
                    ";
                    // line 24
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 25
                        yield "                        <ul class=\"cognitive-nav__sublist\">
                            ";
                        // line 26
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 26));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 27
                            yield "                                <li class=\"cognitive-nav__item\">
                                    <a href=\"";
                            // line 28
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 28), "html", null, true);
                            yield "\" class=\"cognitive-nav__link\">
                                        ";
                            // line 29
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 29), "html", null, true);
                            yield "
                                    </a>
                                </li>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 33
                        yield "                        </ul>
                    ";
                    }
                    // line 35
                    yield "                </li>

            ";
                    // line 38
                    yield "            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 38) == "smart_node")) {
                    // line 39
                    yield "                <li class=\"cognitive-nav__item cognitive-nav__item--smart\">
                    <span class=\"cognitive-nav__label\">";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 40), "html", null, true);
                    yield "</span>
                    <ul class=\"cognitive-nav__sublist\">
                        ";
                    // line 43
                    yield "                        ";
                    $context["collection_config"] = ["items" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 44
$context["item"], "collection_source", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "collection_source", [], "any", false, false, false, 44), "@root.descendants")) : ("@root.descendants")), "limit" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 45
$context["item"], "collection_limit", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "collection_limit", [], "any", false, false, false, 45), 5)) : (5)), "order" => ["by" => "date", "dir" => "desc"]];
                    // line 48
                    yield "                        
                        ";
                    // line 50
                    yield "                        ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "collection_type", [], "any", false, false, false, 50) && (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "collection_type", [], "any", false, false, false, 50) != "all")) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "collection_value", [], "any", false, false, false, 50))) {
                        // line 51
                        yield "                             ";
                        $context["filter_type"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "collection_type", [], "any", false, false, false, 51) == "type")) ? ("template") : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "collection_type", [], "any", false, false, false, 51)));
                        // line 52
                        yield "                             ";
                        $context["collection_config"] = Twig\Extension\CoreExtension::merge(($context["collection_config"] ?? null), ["filter" => [ (string)($context["filter_type"] ?? null) => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "collection_value", [], "any", false, false, false, 52)]]);
                        // line 53
                        yield "                        ";
                    }
                    // line 54
                    yield "
                        ";
                    // line 55
                    $context["collection"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [($context["collection_config"] ?? null)], "method", false, false, false, 55);
                    // line 56
                    yield "
                        ";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["collection"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["child_page"]) {
                        // line 58
                        yield "                             <li class=\"cognitive-nav__item\">
                                <a href=\"";
                        // line 59
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child_page"], "url", [], "any", false, false, false, 59), "html", null, true);
                        yield "\" class=\"cognitive-nav__link\">
                                    ";
                        // line 60
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child_page"], "title", [], "any", false, false, false, 60), "html", null, true);
                        yield "
                                </a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['child_page'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    yield "                    </ul>
                </li>
            ";
                }
                // line 67
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "    </ul>
</nav>

";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/navigation.html.twig";
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
        return array (  201 => 68,  195 => 67,  190 => 64,  180 => 60,  176 => 59,  173 => 58,  169 => 57,  166 => 56,  164 => 55,  161 => 54,  158 => 53,  155 => 52,  152 => 51,  149 => 50,  146 => 48,  144 => 45,  143 => 44,  141 => 43,  136 => 40,  133 => 39,  130 => 38,  126 => 35,  122 => 33,  112 => 29,  108 => 28,  105 => 27,  101 => 26,  98 => 25,  96 => 24,  91 => 22,  87 => 21,  84 => 20,  81 => 19,  79 => 18,  75 => 17,  72 => 16,  69 => 14,  63 => 11,  60 => 10,  58 => 9,  56 => 8,  53 => 7,  51 => 6,  49 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/navigation.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/navigation.html.twig");
    }
}
