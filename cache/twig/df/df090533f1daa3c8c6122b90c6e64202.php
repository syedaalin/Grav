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

/* forms/fields/parents/parents.html.twig */
class __TwigTemplate_d0dd8fa9f819405196af459450163550 extends Template
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

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        // line 16
        yield "
    ";
        // line 17
        $context["name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17)));
        // line 18
        yield "    ";
        if ((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "        ";
            $context["parent"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 19), "parent", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19);
            // line 20
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["grav"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["flex_objects"] ?? null) : null), "hasDirectory", ["pages"], "method", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "        ";
            $context["directory"] = CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["grav"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["flex_objects"] ?? null) : null), "getDirectory", ["pages"], "method", false, false, false, 21);
            // line 22
            yield "        ";
            $context["parent"] = (((($tmp = ($context["value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "getObject", [Twig\Extension\CoreExtension::trim(($context["value"] ?? null), "/")], "method", false, false, false, 22), "title", [], "any", false, false, false, 22)) : ("<root>"));
            // line 23
            yield "    ";
        } else {
            // line 24
            yield "        ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "enablePages", [], "method", false, false, false, 24);
            // line 25
            yield "        ";
            $context["parent"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", [($context["value"] ?? null)], "method", false, false, false, 25), "title", [], "any", false, false, false, 25);
            // line 26
            yield "    ";
        }
        // line 27
        yield "    <div class=\"parents-wrapper\">
        <div class=\"form-input-wrapper\" data-parents=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\" data-remodal-target=\"parents\">
            <div class=\"parent-title\" data-parents-field-name=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parent"] ?? null), "html", null, true);
        yield "</div>
            <span><i class=\"fa fa-folder-o\"></i> <span data-parents-field-label=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("value", $context)) ? (Twig\Extension\CoreExtension::default(($context["value"] ?? null), "/")) : ("/")), "html", null, true);
        yield "</span></span>
        </div>

        <input type=\"hidden\" class=\"input\" name=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\" data-field-name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["value"] ?? null), ", "), "html", null, true);
        yield "\" />
    </div>

    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/parents/parents.html.twig";
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
        return array (  113 => 33,  105 => 30,  99 => 29,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  83 => 24,  80 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/parents/parents.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/parents/parents.html.twig");
    }
}
