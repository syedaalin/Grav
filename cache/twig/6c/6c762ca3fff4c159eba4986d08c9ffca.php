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

/* edit title template (string template a2b65de5a8af64fb59fe4086515a434b) */
class __TwigTemplate_cdf243255bc804f64290682c0924e1cd extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "root", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Root <small>( &lt;root&gt; )</small>";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", ["header.title"], "method", true, true, false, 1) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", ["header.title"], "method", false, false, false, 1)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", ["header.title"], "method", false, false, false, 1)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", ["folder"], "method", false, false, false, 1))));
            yield " <small>( ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getRoute", [], "method", false, false, false, 1), "toString", [false], "method", false, false, false, 1)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getRoute", [], "method", false, false, false, 1), "toString", [false], "method", false, false, false, 1)) : ("/")));
            yield " )</small>";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "edit title template (string template a2b65de5a8af64fb59fe4086515a434b)";
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
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "edit title template (string template a2b65de5a8af64fb59fe4086515a434b)", "");
    }
}
