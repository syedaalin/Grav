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

/* partials/snipcart.html.twig */
class __TwigTemplate_e494b3ba7044fadd801da322371faa3e extends Template
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
        // line 7
        $context["snipcart_key"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "snipcart_key");
        // line 8
        if ((($tmp = ($context["snipcart_key"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    <script async src=\"https://cdn.snipcart.com/themes/v3.0.31/default/snipcart.js\"></script>
    <div hidden id=\"snipcart\" data-api-key=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["snipcart_key"] ?? null), "html", null, true);
            yield "\" data-config-modal-style=\"side\"></div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/snipcart.html.twig";
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
        return array (  49 => 10,  46 => 9,  44 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/snipcart.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/snipcart.html.twig");
    }
}
