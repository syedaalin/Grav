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

/* partials/backups-button.html.twig */
class __TwigTemplate_e0c4b89c021054db978c07b1e1d3d62f extends Template
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
        yield "<div class=\"button-group\">
    ";
        // line 2
        $context["profiles"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "backups", [], "any", false, false, false, 2), "getBackupProfiles", [], "method", false, false, false, 2);
        // line 3
        yield "    ";
        $context["backup_url"] = CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((((($context["base_url_relative"] ?? null) . "/backup.json/id") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 3), "param_sep", [], "any", false, false, false, 3)) . "%BACKUP_ID/task") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 3), "param_sep", [], "any", false, false, false, 3)) . "backup"), "admin-form", "admin-nonce"], "method", false, false, false, 3);
        // line 4
        yield "
    <button class=\"button\" data-backup data-ajax=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["backup_url"] ?? null), ["%BACKUP_ID" => "0"]), "html", null, true);
        yield "\">
        <i class=\"fa fa-life-ring\"></i> ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUP_NOW"), "html", null, true);
        yield "
    </button>
    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-caret-down\"></i>
    </button>
    <ul class=\"dropdown-menu\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["profiles"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["profile"]) {
            // line 13
            yield "            <li>
                <a data-backup data-ajax=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["backup_url"] ?? null), ["%BACKUP_ID" => $context["id"]]), "html", null, true);
            yield "\" class=\"button\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 14), "html", null, true);
            yield "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['profile'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "        <li>
            <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/tools/backups"), "html", null, true);
        yield "\" class=\"button\">Backups Manager</a>
        </li>
    </ul>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/backups-button.html.twig";
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
        return array (  87 => 18,  84 => 17,  73 => 14,  70 => 13,  66 => 12,  57 => 6,  53 => 5,  50 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/backups-button.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/backups-button.html.twig");
    }
}
