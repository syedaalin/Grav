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

/* dashboard.html.twig */
class __TwigTemplate_326566dc797abc12c7c476238ed25e8e extends Template
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
            'titlebar' => [$this, 'block_titlebar'],
            'widgets' => [$this, 'block_widgets'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
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
        $context["title"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DASHBOARD");
        // line 5
        $context["clear_cache_url"] = (((($context["base_url_relative"] ?? null) . "/cache.json/task") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 5), "param_sep", [], "any", false, false, false, 5)) . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("clearCache", "html_attr"));
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_titlebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    <div class=\"button-bar\">
        ";
        // line 9
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.maintenance", "admin.super", "admin.cache"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "            <div class=\"button-group\">
                <button data-clear-cache-type=\"\" data-clear-cache=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [($context["clear_cache_url"] ?? null), "admin-form", "admin-nonce"], "method", false, false, false, 11), "html", null, true);
            yield "\" class=\"button\"><i class=\"fa fa-retweet\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLEAR_CACHE"), "html", null, true);
            yield "</button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a data-clear-cache-type=\"all\" data-clear-cache=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((($context["clear_cache_url"] ?? null) . "/cleartype") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 16), "param_sep", [], "any", false, false, false, 16)) . "all"), "admin-form", "admin-nonce"], "method", false, false, false, 16), "html", null, true);
            yield "\" href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE"), "html", null, true);
            yield "</a></li>
                    <li><a data-clear-cache-type=\"assets-only\" data-clear-cache=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((($context["clear_cache_url"] ?? null) . "/cleartype") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 17), "param_sep", [], "any", false, false, false, 17)) . "assets-only"), "admin-form", "admin-nonce"], "method", false, false, false, 17), "html", null, true);
            yield "\" href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY"), "html", null, true);
            yield "</a></li>
                    <li><a data-clear-cache-type=\"images-only\" data-clear-cache=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((($context["clear_cache_url"] ?? null) . "/cleartype") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 18), "param_sep", [], "any", false, false, false, 18)) . "images-only"), "admin-form", "admin-nonce"], "method", false, false, false, 18), "html", null, true);
            yield "\" href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY"), "html", null, true);
            yield "</a></li>
                    <li><a data-clear-cache-type=\"cache-only\" data-clear-cache=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((($context["clear_cache_url"] ?? null) . "/cleartype") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 19), "param_sep", [], "any", false, false, false, 19)) . "cache-only"), "admin-form", "admin-nonce"], "method", false, false, false, 19), "html", null, true);
            yield "\" href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY"), "html", null, true);
            yield "</a></li>
                    <li><a data-clear-cache-type=\"tmp-only\" data-clear-cache=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((($context["clear_cache_url"] ?? null) . "/cleartype") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 20), "param_sep", [], "any", false, false, false, 20)) . "tmp-only"), "admin-form", "admin-nonce"], "method", false, false, false, 20), "html", null, true);
            yield "\" href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLEAR_CACHE_TMP_ONLY"), "html", null, true);
            yield "</a></li>
                    <li><a data-clear-cache-type=\"purge\" data-clear-cache=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((($context["clear_cache_url"] ?? null) . "/cleartype") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 21), "param_sep", [], "any", false, false, false, 21)) . "purge"), "admin-form", "admin-nonce"], "method", false, false, false, 21), "html", null, true);
            yield "\" href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CACHE_PURGE"), "html", null, true);
            yield "</a></li>
                </ul>
            </div>
        ";
        }
        // line 25
        yield "        ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.maintenance", "admin.super"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
            yield "</button>
        ";
        }
        // line 28
        yield "    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.DASHBOARD"), "html", null, true);
        yield "</h1>
";
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widgets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 33), "admin", [], "any", false, false, false, 33), "notifications", [], "any", false, false, false, 33), "dashboard", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "    <div class=\"dashboard-notifications-container\"></div>
    ";
        }
        // line 36
        yield "
    ";
        // line 38
        yield "    ";
        yield from $this->load("partials/dashboard-problems.html.twig", 38)->unwrap()->yield($context);
        // line 39
        yield "
    <div id=\"admin-dashboard\">
        ";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 41), "plugins_hooked_dashboard_widgets_top", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 42), "plugins_hooked_dashboard_widgets_top", [], "any", false, false, false, 42));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 43
                yield "                ";
                if (CoreExtension::inFilter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 43), "admin", [], "any", false, false, false, 43), "widgets_display", [], "any", false, false, false, 43), CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "template", [], "any", false, false, false, 43), [], "any", false, false, false, 43)), ["1", "true"])) {
                    // line 44
                    yield "                    <div class=\"dashboard-item-flex\">
                        ";
                    // line 45
                    yield from $this->load((("partials/" . CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "template", [], "any", false, false, false, 45)) . ".html.twig"), 45)->unwrap()->yield($context);
                    // line 46
                    yield "                    </div>
                ";
                }
                // line 48
                yield "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "        ";
        }
        // line 50
        yield "    </div>
";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 54), "plugins_hooked_dashboard_widgets_main", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 55), "plugins_hooked_dashboard_widgets_main", [], "any", false, false, false, 55));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 56
                if (CoreExtension::inFilter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 56), "admin", [], "any", false, false, false, 56), "widgets_display", [], "any", false, false, false, 56), CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "template", [], "any", false, false, false, 56), [], "any", false, false, false, 56)), ["1", "true"])) {
                    // line 57
                    yield "                ";
                    yield from $this->load((("partials/" . CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "template", [], "any", false, false, false, 57)) . ".html.twig"), 57)->unwrap()->yield($context);
                    // line 58
                    yield "            ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "    <div id=\"admin-dashboard\">";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 65), "plugins_hooked_dashboard_widgets_bottom", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, false, false, 66), "plugins_hooked_dashboard_widgets_bottom", [], "any", false, false, false, 66));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 67
                if (CoreExtension::inFilter($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 67), "admin", [], "any", false, false, false, 67), "widgets_display", [], "any", false, false, false, 67), CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "template", [], "any", false, false, false, 67), [], "any", false, false, false, 67)), ["1", "true"])) {
                    // line 68
                    yield "                    ";
                    yield from $this->load((("partials/" . CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "template", [], "any", false, false, false, 68)) . ".html.twig"), 68)->unwrap()->yield($context);
                    // line 69
                    yield "                ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 72
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard.html.twig";
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
        return array (  320 => 72,  304 => 69,  301 => 68,  299 => 67,  282 => 66,  280 => 65,  278 => 64,  271 => 63,  252 => 58,  249 => 57,  247 => 56,  230 => 55,  228 => 54,  221 => 53,  215 => 50,  212 => 49,  198 => 48,  194 => 46,  192 => 45,  189 => 44,  186 => 43,  168 => 42,  166 => 41,  162 => 39,  159 => 38,  156 => 36,  152 => 34,  149 => 33,  142 => 32,  135 => 29,  132 => 28,  126 => 26,  123 => 25,  114 => 21,  108 => 20,  102 => 19,  96 => 18,  90 => 17,  84 => 16,  74 => 11,  71 => 10,  69 => 9,  66 => 8,  59 => 7,  54 => 1,  52 => 5,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/dashboard.html.twig");
    }
}
