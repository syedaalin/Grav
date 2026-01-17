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

/* partials/form-messages.html.twig */
class __TwigTemplate_e1331b6568c2275c03e4355ed8a3d100 extends Template
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
        // line 6
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "  ";
            $context["inline_errors"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 7))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 7)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 7), "form", [], "any", false, false, false, 7), "inline_errors", [false], "method", false, false, false, 7)));
            // line 8
            yield "  ";
            $context["status_mapping"] = ["success" => "alert-success", "error" => "alert-error", "warning" => "alert-warning"];
            // line 13
            yield "  ";
            $context["message"] = (((($context["inline_errors"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "messages", [], "any", false, false, false, 13))) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "GRAV.FORM.VALIDATION_FAIL")) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 13)));
            // line 14
            yield "  
  <div class=\"form-alert ";
            // line 15
            yield (((($_v0 = ($context["status_mapping"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 15)] ?? null) : null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["status_mapping"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 15)] ?? null) : null), "html", null, true)) : ("alert-default"));
            yield "\">
    ";
            // line 16
            yield ($context["message"] ?? null);
            yield "
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
        return "partials/form-messages.html.twig";
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
        return array (  60 => 16,  56 => 15,  53 => 14,  50 => 13,  47 => 8,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/form-messages.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/form-messages.html.twig");
    }
}
