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

/* flex-objects/types/default/buttons/configuration.html.twig */
class __TwigTemplate_b273a499833b9c745a3b4c68ddf833da extends Template
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
        $context["authorize"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.configure.authorize"], "method", true, true, false, 1) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.configure.authorize"], "method", false, false, false, 1)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.configure.authorize"], "method", false, false, false, 1)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.configure.authorize"], "method", true, true, false, 1) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.configure.authorize"], "method", false, false, false, 1)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.configure.authorize"], "method", false, false, false, 1)) : ("admin.super"))));
        // line 3
        if ((($context["configure_url"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "authorize", [($context["authorize"] ?? null)], "method", false, false, false, 3))) {
            // line 4
            yield "<a id=\"titlebar-button-configure\" class=\"button\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["configure_url"] ?? null), "html", null, true);
            yield "\">
    <i class=\"fa fa-cog\"></i> ";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
            yield "
</a>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/types/default/buttons/configuration.html.twig";
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
        return array (  51 => 5,  46 => 4,  44 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/types/default/buttons/configuration.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects/types/default/buttons/configuration.html.twig");
    }
}
