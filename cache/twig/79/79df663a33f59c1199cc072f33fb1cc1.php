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

/* partials/nav.html.twig */
class __TwigTemplate_391029aece8497f614804d218bacfa54 extends Template
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
        $context["nav_hover"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 1), "admin", [], "any", false, false, false, 1), "sidebar", [], "any", false, false, false, 1), "activate", [], "any", false, false, false, 1) == "hover");
        // line 2
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.login", "admin.super"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    <nav id=\"admin-sidebar\" data-quickopen=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 3), "admin", [], "any", false, false, false, 3), "sidebar", [], "any", false, false, false, 3), "activate", [], "any", false, false, false, 3) == "hover")) ? ("true") : ("false"));
            yield "\" data-quickopen-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 3), "admin", [], "any", false, false, false, 3), "sidebar", [], "any", false, false, false, 3), "hover_delay", [], "any", false, false, false, 3), "html", null, true);
            yield "\">

        <div id=\"admin-logo\" class=\"";
            // line 5
            yield (((($tmp = ($context["nav_hover"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("nav-hover") : (""));
            yield "\">
            ";
            // line 6
            if ((($tmp =  !($context["nav_hover"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "                <div id=\"open-handle\" data-sidebar-toggle><i class=\"fa fa-angle-right\"></i></div>
            ";
            }
            // line 9
            yield "            ";
            yield from $this->load("partials/logo.html.twig", 9)->unwrap()->yield($context);
            // line 10
            yield "        </div>

        ";
            // line 12
            yield from $this->load("partials/nav-user-details.html.twig", 12)->unwrap()->yield($context);
            // line 13
            yield "
        ";
            // line 14
            yield from $this->load("partials/nav-quick-tray.html.twig", 14)->unwrap()->yield($context);
            // line 15
            yield "
        <div data-simplebar class=\"admin-menu-wrapper\">
            <ul id=\"admin-menu\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 18), "plugins_hooked_nav", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                // line 19
                yield "                    ";
                $context["route"] = Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", true, true, false, 19) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 19)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 19)) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "location", [], "any", false, false, false, 19))), "/");
                // line 20
                yield "                    ";
                $context["location"] = (Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "location", [], "any", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "location", [], "any", false, false, false, 20)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "location", [], "any", false, false, false, 20)) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 20))), "/") . "/");
                // line 21
                yield "                    ";
                $context["auth_rule"] = ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 21))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 21)) : ([((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 21)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 21)) : (("admin." . ($context["route"] ?? null)))), "admin.super"]));
                // line 22
                yield "                    ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(($context["auth_rule"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 23
                    yield "                        <li class=\"";
                    yield (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->startsWithFilter(($context["nav_route"] ?? null), ($context["location"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
                    yield "\">
                            <a href=\"";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["route"] ?? null)), "html", null, true);
                    yield "\">
                                <i class=\"fa fa-fw ";
                    // line 25
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 25), "html", null, true);
                    yield "\"></i>
                                <em>";
                    // line 26
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["label"]), "html", null, true);
                    yield "</em>
                                ";
                    // line 27
                    $context["badge"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "badge", [], "any", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "badge", [], "any", false, false, false, 27)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "badge", [], "any", false, false, false, 27)) : (null));
                    // line 28
                    yield "                                ";
                    if ((($tmp = ($context["badge"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 29
                        yield "                                <span class=\"badges ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["badge"] ?? null), "updates", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "with-updates";
                        }
                        yield "\">
                                    ";
                        // line 30
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["badge"] ?? null), "updates", [], "any", true, true, false, 30)) {
                            yield "<span class=\"badge updates\">";
                            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["badge"] ?? null), "updates", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["badge"] ?? null), "updates", [], "any", false, false, false, 30), "html", null, true)) : (""));
                            yield "</span>";
                        }
                        // line 31
                        yield "                                    <span class=\"badge count\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["badge"] ?? null), "count", [], "any", false, false, false, 31), "html", null, true);
                        yield "</span>
                                </span>
                                ";
                    }
                    // line 34
                    yield "                            </a>
                        </li>
                    ";
                }
                // line 37
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "
                ";
            // line 39
            try {
                $_v0 = $this->load("partials/nav-pro.html.twig", 39);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield($context);
            }
            // line 40
            yield "
                <li>
                    <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((($context["base_url_relative"] ?? null) . "/task") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 42), "param_sep", [], "any", false, false, false, 42)) . "logout"), "logout-form", "logout-nonce"], "method", false, false, false, 42), "html", null, true);
            yield "\"><i class=\"fa fa-fw fa-sign-out\"></i><em>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.LOGOUT"), "html", null, true);
            yield "</em></a>
                </li>
            </ul>
        </div>
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
        return "partials/nav.html.twig";
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
        return array (  169 => 42,  165 => 40,  155 => 39,  152 => 38,  146 => 37,  141 => 34,  134 => 31,  128 => 30,  121 => 29,  118 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  99 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  83 => 18,  78 => 15,  76 => 14,  73 => 13,  71 => 12,  67 => 10,  64 => 9,  60 => 7,  58 => 6,  54 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/nav.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/nav.html.twig");
    }
}
