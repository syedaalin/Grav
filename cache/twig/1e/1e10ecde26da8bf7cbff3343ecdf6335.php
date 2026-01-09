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

/* flex-objects/types/pages/buttons/move.html.twig */
class __TwigTemplate_719b2f579d1e229fe814c273fad07f63 extends Template
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
        yield "<a id=\"titlebar-button-move\" class=\"button\" href=\"#\" data-remodal-target=\"move\" data-parents=\"data[route]\">
    <i class=\"fa fa-arrows\"></i> ";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
        yield "
</a>
<div class=\"remodal parents-container\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">
    ";
        // line 5
        yield from $this->load("partials/page-move.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["blueprints" => CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "blueprints", ["admin/pages/move"], "method", false, false, false, 5), "data" => ($context["context"] ?? null)]));
        // line 6
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/types/pages/buttons/move.html.twig";
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
        return array (  53 => 6,  51 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/types/pages/buttons/move.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/buttons/move.html.twig");
    }
}
