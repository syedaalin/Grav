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

/* partials/metadata.html.twig */
class __TwigTemplate_9fa2a3b7f1284e8b1272f1194b71c967 extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metadata", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 2
            yield "    <meta ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "name", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "name", [], "any", false, false, false, 2));
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "http_equiv", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "http-equiv=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "http_equiv", [], "any", false, false, false, 2));
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "charset", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "charset=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "charset", [], "any", false, false, false, 2));
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "property", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "property=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "property", [], "any", false, false, false, 2));
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "content", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "content=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "content", [], "any", false, false, false, 2);
                yield "\" ";
            }
            yield "/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['meta'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/metadata.html.twig";
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
        return array (  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/metadata.html.twig", "/Users/syedaalin/Documents/Grav/system/templates/partials/metadata.html.twig");
    }
}
