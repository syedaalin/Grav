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

/* forms/fields/nonce/nonce.html.twig */
class __TwigTemplate_60f0d524700376ca093dc766df9b9728 extends Template
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
        $context["nonce_action"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", true, true, false, 1) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", false, false, false, 1)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", false, false, false, 1)) : ("form"));
        // line 2
        $context["nonce_name"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", true, true, false, 2) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", false, false, false, 2)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", false, false, false, 2)) : ("form-nonce"));
        // line 3
        $context["nonce_value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonce", [], "method", false, false, false, 3);
        // line 4
        yield "<input type=\"hidden\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nonce_name"] ?? null), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nonce_value"] ?? null), "html", null, true);
        yield "\" class=\"form-nonce-field\" data-nonce-action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nonce_action"] ?? null), "html", null, true);
        yield "\" />
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/nonce/nonce.html.twig";
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
        return array (  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/nonce/nonce.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/fields/nonce/nonce.html.twig");
    }
}
