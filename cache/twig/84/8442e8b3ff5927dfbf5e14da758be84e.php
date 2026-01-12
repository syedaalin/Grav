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

/* partials/javascript-config.html.twig */
class __TwigTemplate_273d59c4c2b4291e8aeca24cb7cbb436 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "authorized", [], "any", false, false, false, 1) && $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.login", "admin.super"]))) {
            // line 2
            $context["feed_enabled"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 2), "admin", [], "any", false, false, false, 2), "notifications", [], "any", false, false, false, 2), "feed", [], "any", false, false, false, 2) === true) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 2), "admin", [], "any", false, false, false, 2), "notifications", [], "any", false, false, false, 2), "feed", [], "any", false, false, false, 2) == "true"));
            // line 3
            $context["dashboard_enabled"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 3), "admin", [], "any", false, false, false, 3), "notifications", [], "any", false, false, false, 3), "dashboard", [], "any", false, false, false, 3) === true) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 3), "admin", [], "any", false, false, false, 3), "notifications", [], "any", false, false, false, 3), "dashboard", [], "any", false, false, false, 3) == "true"));
            // line 4
            $context["plugins_enabled"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 4), "admin", [], "any", false, false, false, 4), "notifications", [], "any", false, false, false, 4), "plugins", [], "any", false, false, false, 4) === true) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 4), "admin", [], "any", false, false, false, 4), "notifications", [], "any", false, false, false, 4), "plugins", [], "any", false, false, false, 4) == "true"));
            // line 5
            $context["themes_enabled"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "notifications", [], "any", false, false, false, 5), "themes", [], "any", false, false, false, 5) === true) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "notifications", [], "any", false, false, false, 5), "themes", [], "any", false, false, false, 5) == "true"));
            // line 6
            $context["notifications"] = (((((($context["feed_enabled"] ?? null) || ($context["dashboard_enabled"] ?? null)) || ($context["plugins_enabled"] ?? null)) || ($context["themes_enabled"] ?? null))) ? (1) : (0));
            // line 7
            $context["safe_upgrade_enabled"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, true, false, 7), "updates", [], "any", false, true, false, 7), "safe_upgrade", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 7), "updates", [], "any", false, false, false, 7), "safe_upgrade", [], "any", false, false, false, 7), false)) : (false));
            // line 8
            yield "
";
            // line 9
            switch (($context["template_route"] ?? null)) {
                case "dashboard":
                {
                    // line 11
                    yield "        ";
                    $context["notifications_filters"] = "['feed', 'dashboard', 'top']";
                    // line 12
                    yield "    ";
                    break;
                }
                case "plugins":
                {
                    // line 13
                    yield "        ";
                    $context["notifications_filters"] = "['plugins', 'top']";
                    // line 14
                    yield "    ";
                    break;
                }
                case "themes":
                {
                    // line 15
                    yield "        ";
                    $context["notifications_filters"] = "['themes', 'top']";
                    // line 16
                    yield "    ";
                    break;
                }
                default:
                {
                    // line 17
                    yield "        ";
                    $context["notifications_filters"] = "['top']";
                }
            }
            // line 19
            yield "<script type=\"text/javascript\">
    window.GravAdmin = window.GravAdmin || {};
    window.GravAdmin.config = {
        current_url: '";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "getCurrentRoute", [], "method", false, false, false, 22), "withLanguage", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 22), "active", [], "any", false, false, false, 22)], "method", false, false, false, 22), "withExtension", [""], "method", false, false, false, 22), "withoutParams", [], "method", false, false, false, 22), "toString", [true], "method", false, false, false, 22), "html", null, true);
            yield "',
        base_url_relative: '";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_relative"] ?? null), "html", null, true);
            yield "',
        base_url_simple: '";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_simple"] ?? null), "html", null, true);
            yield "',
        route: '";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 25), "/"), "html", null, true);
            yield "',
        param_sep: '";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 26), "param_sep", [], "any", false, false, false, 26), "html", null, true);
            yield "',
        ";
            // line 27
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.maintenance", "admin.super"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "        enable_auto_updates_check: '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 28), "admin", [], "any", false, false, false, 28), "enable_auto_updates_check", [], "any", false, false, false, 28), "html", null, true);
                yield "',
        ";
            }
            // line 30
            yield "        admin_timeout: '";
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 30), "admin", [], "any", false, false, false, 30), "session", [], "any", false, false, false, 30), "timeout", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 30), "admin", [], "any", false, false, false, 30), "session", [], "any", false, false, false, 30), "timeout", [], "any", false, false, false, 30), "html", null, true)) : (1800));
            yield "',
        keep_alive_enabled: ";
            // line 31
            yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, true, false, 31), "admin", [], "any", false, true, false, 31), "session", [], "any", false, true, false, 31), "keep_alive", [], "any", true, true, false, 31)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 31), "admin", [], "any", false, false, false, 31), "session", [], "any", false, false, false, 31), "keep_alive", [], "any", false, false, false, 31)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
            yield ",
        safe_upgrade_enabled: ";
            // line 32
            yield (((($tmp = ($context["safe_upgrade_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
            yield ",
        admin_nonce: '";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "getNonce", [], "any", false, false, false, 33), "html", null, true);
            yield "',
        language: '";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, true, false, 34), "language", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 34), "language", [], "any", false, false, false, 34), "en")) : ("en")), "html", null, true);
            yield "',
        pro_enabled: '";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 35)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["admin-pro"] ?? null) : null), "enabled", [], "any", false, false, false, 35), "html", null, true);
            yield "',
        notifications: {
            enabled: ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["notifications"] ?? null), "html", null, true);
            yield ",
            filters: ";
            // line 38
            yield ($context["notifications_filters"] ?? null);
            yield "
        },
        local_notifications: '";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, true, false, 40), "local_notifications", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 40), "local_notifications", [], "any", false, false, false, 40), false)) : (false)), "html", null, true);
            yield "',
        site: {
            delimiter: '";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "site", [], "any", false, true, false, 42), "summary", [], "any", false, true, false, 42), "delimiter", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "site", [], "any", false, false, false, 42), "summary", [], "any", false, false, false, 42), "delimiter", [], "any", false, false, false, 42), "===")) : ("===")), "html", null, true);
            yield "'
        }
    };
    window.GravAdmin.uri_params = {};

    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 47), "params", [null, true], "method", false, false, false, 47));
            foreach ($context['_seq'] as $context["param"] => $context["value"]) {
                // line 48
                yield "        window.GravAdmin.uri_params[";
                yield json_encode($context["param"]);
                yield "] = \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["value"], ["\\" => "/"]), "html", null, true);
                yield "\";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['param'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "</script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/javascript-config.html.twig";
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
        return array (  191 => 50,  180 => 48,  176 => 47,  168 => 42,  163 => 40,  158 => 38,  154 => 37,  149 => 35,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  128 => 30,  122 => 28,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  95 => 19,  90 => 17,  84 => 16,  81 => 15,  75 => 14,  72 => 13,  66 => 12,  63 => 11,  59 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/javascript-config.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/javascript-config.html.twig");
    }
}
