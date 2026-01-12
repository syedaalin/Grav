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

/* partials/nav-quick-tray.html.twig */
class __TwigTemplate_bd094bf32d66ff3bc02fffe7d31074f9 extends Template
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
        $context["clear_cache_url"] = (((($context["base_url_relative"] ?? null) . "/cache.json/task") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 1), "param_sep", [], "any", false, false, false, 1)) . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("clearCache", "html_attr"));
        // line 2
        yield "<ul id=\"admin-nav-quick-tray\">
    ";
        // line 3
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.maintenance", "admin.super", "admin.cache"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <li class=\"hint--bottom\" data-hint=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLEAR_CACHE"), "html", null, true);
            yield "\">
        <a data-clear-cache-type=\"\" data-clear-cache=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [($context["clear_cache_url"] ?? null), "admin-form", "admin-nonce"], "method", false, false, false, 5), "html", null, true);
            yield "\">
            <i class=\"fa fa-retweet\"></i>
        </a>
    </li>
    ";
        }
        // line 10
        yield "    ";
        if (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.super"]) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 10), "admin", [], "any", false, false, false, 10), "whitelabel", [], "any", false, false, false, 10), "quicktray_recompile", [], "any", false, false, false, 10))) {
            // line 11
            yield "        <li class=\"hint--bottom\" data-hint=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.QUICKTRAY_RECOMPILE_HELP"), "html", null, true);
            yield "\">
            <a data-recompile-scss href=\"#\">
                <i class=\"fa fa-paint-brush\"></i>
            </a>
        </li>
    ";
        }
        // line 17
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 17), "plugins_quick_tray", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 18), "plugins_quick_tray", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                // line 19
                yield "        ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorize", [], "any", true, true, false, 19) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 19)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 19)) : ([((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 19)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorize", [], "any", false, false, false, 19)) : (("admin." . ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "location", [], "any", false, false, false, 19)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "location", [], "any", false, false, false, 19)) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 19)))))), "admin.super"])))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 20
                    yield "            ";
                    $context["data_tags"] = "";
                    // line 21
                    yield "            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "data", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 22
                        yield "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "data", [], "any", false, false, false, 22));
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 23
                            yield "                    ";
                            $context["data_tags"] = (((((($context["data_tags"] ?? null) . " data-") . $context["key"]) . "=\"") . $context["value"]) . "\"");
                            // line 24
                            yield "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        yield "            ";
                    }
                    // line 26
                    yield "            <li class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 26), "html", null, true);
                    yield " hint--bottom\" data-hint=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hint", [], "any", false, false, false, 26), "html", null, true);
                    yield "\" ";
                    yield ($context["data_tags"] ?? null);
                    yield ">
            ";
                    // line 27
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 28
                        yield "                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 28)), "html", null, true);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "target", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "target=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "target", [], "any", false, false, false, 28), "html", null, true);
                            yield "\"";
                        }
                        yield ">
                    <i class=\"fa fa-fw ";
                        // line 29
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 29), "html", null, true);
                        yield "\"></i>
                </a>
            ";
                    } else {
                        // line 32
                        yield "                <i class=\"fa fa-fw ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 32), "html", null, true);
                        yield "\"></i>
            ";
                    }
                    // line 34
                    yield "            </li>
        ";
                }
                // line 36
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "    ";
        } else {
            // line 38
            yield "        ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.maintenance", "admin.super"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                yield "        <li class=\"hint--bottom\" data-hint=\"Add the 'quick-tray-links' plugin for more...\">
            <a href=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/plugins/install"), "html", null, true);
                yield "\">
                <i class=\"fa fa-plus\"></i>
            </a>
        </li>
        ";
            }
            // line 45
            yield "    ";
        }
        // line 46
        yield "</ul>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/nav-quick-tray.html.twig";
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
        return array (  173 => 46,  170 => 45,  162 => 40,  159 => 39,  156 => 38,  153 => 37,  147 => 36,  143 => 34,  137 => 32,  131 => 29,  120 => 28,  118 => 27,  109 => 26,  106 => 25,  100 => 24,  97 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  78 => 18,  75 => 17,  65 => 11,  62 => 10,  54 => 5,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/nav-quick-tray.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/nav-quick-tray.html.twig");
    }
}
