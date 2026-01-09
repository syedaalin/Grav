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

/* partials/notification-dashboard-block.html.twig */
class __TwigTemplate_da6b659a4595638cc0d4b4834def901b extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["notifications"] ?? null));
        foreach ($context['_seq'] as $context["entry_id"] => $context["entry"]) {
            // line 2
            yield "    <div class=\"alert ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 2), "html", null, true);
            yield " position-dashboard\">
        <a href=\"#\" data-notification-action=\"hide-notification\" data-notification-id=\"";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 3), "html", null, true);
            yield "\" class=\"close hide-notification\"><i class=\"fa fa-close\"></i></a>
        ";
            // line 4
            yield CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "message", [], "any", false, false, false, 4);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['entry_id'], $context['entry'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/notification-dashboard-block.html.twig";
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
        return array (  55 => 4,  51 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/notification-dashboard-block.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/notification-dashboard-block.html.twig");
    }
}
