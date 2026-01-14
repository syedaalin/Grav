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

/* partials/dashboard-problems.html.twig */
class __TwigTemplate_a0b49d93e9ac518cc2546ce9bf88cad8 extends Template
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
        if (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.plugins", "admin.super"]) && (null === (($_v0 = ($context["grav"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["flex_objects"] ?? null) : null)))) {
            // line 2
            yield "    <div id=\"dependency-missing\" class=\"dashboard-item-flex\">
        <div class=\"alert warning\">
            <h1>Admin plugin dependency is missing</h1>

            <p>Admin now requires the Flex Objects plugin for managing <em>User Accounts</em> and <em>Flex Pages</em>. For more information, please <a href=\"https://learn.getgrav.org/17/admin-panel/faq#flex-objects\">check the documentation</a>.</p>
            <p><a href=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/plugins/flex-objects"), "html", null, true);
            yield "\" class=\"button\"><i class=\"fa fa-download\"></i> Install and enable Flex Objects plugin</a></p>
        </div>
    </div>

";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/dashboard-problems.html.twig";
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
        return array (  51 => 7,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/dashboard-problems.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/dashboard-problems.html.twig");
    }
}
