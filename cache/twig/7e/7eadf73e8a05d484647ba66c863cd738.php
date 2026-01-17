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
        // line 6
        $context["type_mapping"] = ["info" => "message-info", "error" => "message-error", "warning" => "message-warning", "success" => "message-success"];
        // line 12
        $context["icon_mapping"] = ["info" => "la-info-circle", "error" => "la-times-circle", "warning" => "la-exclamation-triangle", "success" => "la-check-circle"];
        // line 18
        yield "
";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "messages", [], "any", false, false, false, 19), "all", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "    <div id=\"messages\" class=\"messages-list\">
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "messages", [], "any", false, false, false, 21), "fetch", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                yield "        ";
                $context["scope"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "scope", [], "any", false, false, false, 22));
                // line 23
                yield "        ";
                $context["type_classes"] = (((($_v0 = ($context["type_mapping"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["scope"] ?? null)] ?? null) : null)) ? ((($_v1 = ($context["type_mapping"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["scope"] ?? null)] ?? null) : null)) : ("message-default"));
                // line 24
                yield "        ";
                $context["icon_name"] = (((($_v2 = ($context["icon_mapping"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["scope"] ?? null)] ?? null) : null)) ? ((($_v3 = ($context["icon_mapping"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["scope"] ?? null)] ?? null) : null)) : ("la-bell"));
                // line 25
                yield "
        <div class=\"message-item ";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type_classes"] ?? null), "html", null, true);
                yield "\">
            <span class=\"message-icon-wrapper\">
                <i class=\"la ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon_name"] ?? null), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
            </span>
            <div class=\"message-content\">
                ";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 31);
                yield "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
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
        return array (  91 => 35,  81 => 31,  75 => 28,  70 => 26,  67 => 25,  64 => 24,  61 => 23,  58 => 22,  54 => 21,  51 => 20,  49 => 19,  46 => 18,  44 => 12,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/messages.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/messages.html.twig");
    }
}
