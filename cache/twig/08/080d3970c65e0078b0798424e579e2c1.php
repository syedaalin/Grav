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

/* partials/javascripts.html.twig */
class __TwigTemplate_a3608621f98ef5406ca6fbbfef769e81 extends Template
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
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "add", ["jquery", 101], "method", false, false, false, 1);
        // line 2
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.login", "admin.super"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [(($context["theme_url"] ?? null) . "/js/vendor.min.js"), ["loading" => "defer"]], "method", false, false, false, 3);
            // line 4
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [(($context["theme_url"] ?? null) . "/js/admin.min.js"), ["loading" => "defer"]], "method", false, false, false, 4);
            // line 5
            yield "
    ";
            // line 6
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["browser"] ?? null), "getBrowser", [], "any", false, false, false, 6) == "msie") || (CoreExtension::getAttribute($this->env, $this->source, ($context["browser"] ?? null), "getBrowser", [], "any", false, false, false, 6) == "edge"))) {
                // line 7
                yield "        ";
                CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [(($context["theme_url"] ?? null) . "/js/form-attr.polyfill.js")], "method", false, false, false, 7);
                // line 8
                yield "    ";
            }
            // line 9
            yield "
    ";
            // line 10
            try {
                $_v0 = $this->load("partials/javascripts-extra.html.twig", 10);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield($context);
            }
        } else {
            // line 12
            yield "    ";
            // line 13
            yield "    <script>
    (function() {
        var base = '";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_relative"] ?? null), "html", null, true);
            yield "';
        var sep = '";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 16), "param_sep", [], "any", false, false, false, 16), "html", null, true);
            yield "';
        // Use Admin's configured timeout if set; fall back to system session timeout
        var adminTimeout = ";
            // line 18
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, true, false, 18), "admin", [], "any", false, true, false, 18), "session", [], "any", false, true, false, 18), "timeout", [], "any", true, true, false, 18)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 18), "admin", [], "any", false, false, false, 18), "session", [], "any", false, false, false, 18), "timeout", [], "any", false, false, false, 18), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, true, false, 18), "session", [], "any", false, true, false, 18), "timeout", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 18), "session", [], "any", false, false, false, 18), "timeout", [], "any", false, false, false, 18), 1800)) : (1800)), "html", null, true)));
            yield "; // seconds
        // Refresh faster than the admin timeout; aim for ~1/3 of it, but at least 2s and at most 20s
        var interval = Math.max(2, Math.min(20, Math.floor(adminTimeout / 3)));

        function refreshLoginNonce() {
            var url = base + '/task' + sep + 'nonce?ts=' + Date.now();
            fetch(url, { credentials: 'same-origin', headers: { 'Accept': 'application/json', 'Cache-Control': 'no-cache' }})
                .then(function(r){ return r.ok ? r.json() : null; })
                .then(function(data){
                    if (!data || !data.nonce) { return; }
                    var name = (data.nonce_name || 'login-nonce');
                    var inputs = document.querySelectorAll('input[name=\"' + name + '\"]');
                    inputs.forEach(function(i){ i.value = data.nonce; });
                })
                .catch(function(){ /* silent */ });
        }

        function boot() {
            if (document.getElementById('admin-login')) {
                refreshLoginNonce();
                setInterval(refreshLoginNonce, interval * 1000);
            }
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', boot);
        } else { boot(); }
    })();
    </script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/javascripts.html.twig";
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
        return array (  92 => 18,  87 => 16,  83 => 15,  79 => 13,  77 => 12,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/javascripts.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/javascripts.html.twig");
    }
}
