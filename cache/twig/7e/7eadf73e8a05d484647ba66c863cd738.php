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

/* partials/messages.html.twig */
class __TwigTemplate_0e84a03435f6a38ee2bc8bdb3e2ff728 extends Template
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
        $context["type_mapping"] = ["info" => "bg-blue-50 text-blue-700", "error" => "bg-red-50 text-red-700", "warning" => "bg-yellow-50 text-yellow-700", "success" => "bg-green-50 text-green-700"];
        // line 2
        $context["icon_mapping"] = ["info" => "fa-info-circle", "error" => "fa-times-circle", "warning" => "fa-exclamation-triangle", "success" => "fa-check-circle"];
        // line 3
        yield "
";
        // line 4
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "messages", [], "any", false, false, false, 4), "all", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    <div id=\"messages\" class=\"space-y-4 mb-8\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "messages", [], "any", false, false, false, 6), "fetch", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                yield "
        ";
                // line 8
                $context["scope"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "scope", [], "any", false, false, false, 8));
                // line 9
                yield "        ";
                $context["type"] = (($_v0 = ($context["type_mapping"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["scope"] ?? null)] ?? null) : null);
                // line 10
                yield "        ";
                $context["icon"] = (($_v1 = ($context["icon_mapping"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["scope"] ?? null)] ?? null) : null);
                // line 11
                yield "
        <div class=\"rounded-md p-4 ";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["scope"] ?? null), "html", null, true);
                yield "\">
            <div class=\"flex\">
                <span class=\"shrink-0\">
                    <i class=\"fa ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
                yield "\"></i>
                </span>
                <div class=\"ml-3\">
                    <div class=\"text-sm font-medium\">
                        ";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 19);
                yield "
                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/messages.html.twig";
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
        return array (  101 => 25,  89 => 19,  80 => 15,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  61 => 8,  58 => 7,  54 => 6,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/messages.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/messages.html.twig");
    }
}
