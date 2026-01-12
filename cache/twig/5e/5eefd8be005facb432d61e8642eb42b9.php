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

/* forms/fields/webhook-status/webhook-status.html.twig */
class __TwigTemplate_9eb182e18c235230aa2e6e471554fa0b extends Template
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
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <div class=\"webhook-status-field\">
        ";
        // line 5
        $context["plugin_exists"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, true, false, 5), "scheduler-webhook", [], "array", true, true, false, 5);
        // line 6
        yield "        ";
        $context["plugin_enabled"] = (($context["plugin_exists"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 6)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["scheduler-webhook"] ?? null) : null), "enabled", [], "any", false, false, false, 6));
        // line 7
        yield "        
        ";
        // line 8
        if ((($tmp =  !($context["plugin_exists"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "            ";
            // line 10
            yield "            <div class=\"alert alert-warning\">
                <strong>Webhook Plugin Required</strong><br>
                The <code>scheduler-webhook</code> plugin is required for webhook functionality.<br><br>
                <a class=\"button button-primary\" href=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_relative"] ?? null), "html", null, true);
            yield "/plugins/install/scheduler-webhook\">
                    <i class=\"fa fa-download\"></i> Install Plugin Now
                </a>
                <span class=\"hint\" style=\"margin-left: 10px;\">or run: <code>bin/gpm install scheduler-webhook</code></span>
            </div>
        ";
        } elseif ((($tmp =  !        // line 18
($context["plugin_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "            ";
            // line 20
            yield "            <div class=\"alert alert-info\">
                <i class=\"fa fa-info-circle\"></i> <strong>Webhook Plugin Installed</strong><br>
                The scheduler-webhook plugin is installed but disabled. 
                <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_relative"] ?? null), "html", null, true);
            yield "/plugins/scheduler-webhook\">Enable it in plugin settings</a> to use webhook functionality.
            </div>
        ";
        } else {
            // line 26
            yield "            ";
            // line 27
            yield "            <div class=\"alert alert-success\">
                <i class=\"fa fa-check-circle\"></i> <strong>Webhook Plugin Ready!</strong><br>
                The scheduler-webhook plugin is installed and active. Configure your webhook settings below.
            </div>
        ";
        }
        // line 32
        yield "    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/webhook-status/webhook-status.html.twig";
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
        return array (  110 => 32,  103 => 27,  101 => 26,  95 => 23,  90 => 20,  88 => 19,  86 => 18,  78 => 13,  73 => 10,  71 => 9,  69 => 8,  66 => 7,  63 => 6,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/webhook-status/webhook-status.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/webhook-status/webhook-status.html.twig");
    }
}
