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

/* partials/tools-scheduler.html.twig */
class __TwigTemplate_08eda7b814b33b0f4a23559aa508f2d9 extends Template
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
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("plugin://admin/themes/grav/js/clipboard-helper.js"), "html", null, true);
        yield "\"></script>
<div class=\"scheduler-content\">

    ";
        // line 4
        $context["data"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "data", ["config/scheduler"], "method", false, false, false, 4);
        // line 5
        yield "    ";
        $context["cron_status"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "scheduler", [], "any", false, false, false, 5), "isCrontabSetup", [], "method", false, false, false, 5);
        // line 6
        yield "    ";
        $context["user"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "scheduler", [], "any", false, false, false, 6), "whoami", [], "method", false, false, false, 6);
        // line 7
        yield "    ";
        $context["webhook_enabled"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "scheduler", [], "any", false, false, false, 7), "isWebhookEnabled", [], "method", false, false, false, 7);
        // line 8
        yield "    ";
        $context["active_triggers"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "scheduler", [], "any", false, false, false, 8), "getActiveTriggers", [], "method", false, false, false, 8);
        // line 9
        yield "
    ";
        // line 10
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["active_triggers"] ?? null)) > 0)) {
            // line 11
            yield "        ";
            // line 12
            yield "        ";
            if ((CoreExtension::inFilter("webhook", ($context["active_triggers"] ?? null)) && !CoreExtension::inFilter("cron", ($context["active_triggers"] ?? null)))) {
                // line 13
                yield "            ";
                // line 14
                yield "            <div class=\"alert notice secondary-accent\">
                <div id=\"show-instructions\" class=\"button button-small button-outline float-right\"><i class=\"fa fa-clock-o\"></i> ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_INSTALL_INSTRUCTIONS"), "html", null, true);
                yield "</div>
                <i class=\"fa fa-plug\"></i> <strong>Webhook Active</strong> - Scheduler is ready to receive webhook triggers
            </div>
        ";
            } elseif ((CoreExtension::inFilter("cron",             // line 18
($context["active_triggers"] ?? null)) && CoreExtension::inFilter("webhook", ($context["active_triggers"] ?? null)))) {
                // line 19
                yield "            ";
                // line 20
                yield "            <div class=\"alert notice secondary-accent\">
                <div id=\"show-instructions\" class=\"button button-small button-outline float-right\"><i class=\"fa fa-clock-o\"></i> ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_INSTALL_INSTRUCTIONS"), "html", null, true);
                yield "</div>
                <i class=\"fa fa-check\"></i> <strong>Cron & Webhook Active</strong> - Scheduler is running via cron and accepts webhook triggers
            </div>
        ";
            } elseif (CoreExtension::inFilter("cron",             // line 24
($context["active_triggers"] ?? null))) {
                // line 25
                yield "            ";
                // line 26
                yield "            <div class=\"alert notice secondary-accent\">
                <div id=\"show-instructions\" class=\"button button-small button-outline float-right\"><i class=\"fa fa-clock-o\"></i> ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_INSTALL_INSTRUCTIONS"), "html", null, true);
                yield "</div>
                <i class=\"fa fa-check\"></i> ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_INSTALLED_READY"), "html", null, true);
                yield "
            </div>
        ";
            }
            // line 31
            yield "    ";
        } elseif ((($context["cron_status"] ?? null) == 2)) {
            // line 32
            yield "        <div class=\"alert warning\"> ";
            yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_CRON_NA", [($context["user"] ?? null)]);
            yield "</div>
    ";
        } else {
            // line 34
            yield "        <div class=\"alert warning\"> ";
            yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_NOT_ENABLED", [($context["user"] ?? null)]);
            yield "</div>
    ";
        }
        // line 36
        yield "
    <div class=\"alert notice\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_WARNING", [($context["user"] ?? null)]), "html", null, true);
        yield "</div>

    <div id=\"cron-install\" class=\"form-border overlay ";
        // line 39
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["active_triggers"] ?? null)) > 0)) ? ("hide") : (""));
        yield "\">
        ";
        // line 40
        if ((($tmp = ($context["webhook_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "            <h3>Webhook Setup</h3>
            <p>The scheduler is configured to use webhooks. To trigger jobs via webhook:</p>
            
            ";
            // line 44
            $context["webhook_token"] = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["scheduler.modern.webhook.token"], "method", false, false, false, 44);
            // line 45
            yield "            ";
            if ((($tmp =  !($context["webhook_token"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "                ";
                $context["webhook_token"] = "YOUR_TOKEN";
                // line 47
                yield "            ";
            }
            // line 48
            yield "            <div class=\"form-input-wrapper form-input-addon-wrapper\" style=\"margin: 1rem 0;\">
                <textarea id=\"webhook-setup-cmd\" readonly rows=\"2\" style=\"font-family: monospace; background: #f8f9fa; border: 1px solid #dee2e6; padding: 0.375rem 0.75rem; resize: none; white-space: pre; border-radius: 4px 0 0 4px;\">curl -X POST \"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "base_url_absolute", [], "any", false, false, false, 49), "html", null, true);
            yield "/scheduler/webhook\" \\
  -H \"Authorization: Bearer ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["webhook_token"] ?? null), "html", null, true);
            yield "\"</textarea>
                <div class=\"form-input-addon form-input-append\" style=\"cursor: pointer; background: #e9ecef; border: 1px solid #dee2e6; border-left: 0; padding: 0.375rem 0.75rem; display: inline-flex; align-items: center; border-radius: 0 4px 4px 0;\" onclick=\"GravClipboard.copy(this)\">
                    <i class=\"fa fa-copy\" style=\"margin-right: 0.25rem;\"></i> Copy
                </div>
            </div>
            
            <p>Make sure the <strong>scheduler-webhook</strong> plugin is installed and enabled.</p>
            
            <hr>
            <h3>Alternative: Cron Setup</h3>
        ";
        }
        // line 61
        yield "        
        <div class=\"form-input-wrapper form-input-addon-wrapper\" style=\"margin: 1rem 0;\">
            <input type=\"text\" id=\"cron-setup-cmd\" readonly value=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "scheduler", [], "any", false, false, false, 63), "getCronCommand", [], "method", false, false, false, 63)), "html", null, true);
        yield "\" style=\"font-family: monospace; background: #f8f9fa; border: 1px solid #dee2e6; padding: 0.375rem 0.75rem; border-radius: 4px 0 0 4px;\">
            <div class=\"form-input-addon form-input-append\" style=\"cursor: pointer; background: #e9ecef; border: 1px solid #dee2e6; border-left: 0; padding: 0.375rem 0.75rem; display: inline-flex; align-items: center; border-radius: 0 4px 4px 0;\" onclick=\"GravClipboard.copy(this)\">
                <i class=\"fa fa-copy\" style=\"margin-right: 0.25rem;\"></i> Copy
            </div>
        </div>

        <p>";
        // line 69
        yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SCHEDULER_POST_INSTRUCTIONS", [($context["user"] ?? null)]);
        yield "</p>
    </div>

    ";
        // line 72
        yield from $this->load("partials/blueprints.html.twig", 72)->unwrap()->yield(CoreExtension::merge($context, ["blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "blueprints", [], "any", false, false, false, 72), "data" => ($context["data"] ?? null)]));
        // line 73
        yield "
    ";
        // line 74
        yield from $this->load("partials/modal-changes-detected.html.twig", 74)->unwrap()->yield($context);
        // line 75
        yield "
    <script>
        \$('#show-instructions').click(function() {
            \$('#cron-install').toggleClass( \"hide\" );
        });
    </script>

</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/tools-scheduler.html.twig";
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
        return array (  206 => 75,  204 => 74,  201 => 73,  199 => 72,  193 => 69,  184 => 63,  180 => 61,  166 => 50,  162 => 49,  159 => 48,  156 => 47,  153 => 46,  150 => 45,  148 => 44,  143 => 41,  141 => 40,  137 => 39,  132 => 37,  129 => 36,  123 => 34,  117 => 32,  114 => 31,  108 => 28,  104 => 27,  101 => 26,  99 => 25,  97 => 24,  91 => 21,  88 => 20,  86 => 19,  84 => 18,  78 => 15,  75 => 14,  73 => 13,  70 => 12,  68 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/tools-scheduler.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/tools-scheduler.html.twig");
    }
}
