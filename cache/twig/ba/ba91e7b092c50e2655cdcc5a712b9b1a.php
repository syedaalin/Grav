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

/* flex-objects.html.twig */
class __TwigTemplate_5ea2b6b331cca49916ff248f57fbbb86 extends Template
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
        $context["user"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "user", [], "any", false, false, false, 1);
        // line 2
        $context["route"] = CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "route", [], "any", false, false, false, 2);
        // line 3
        $context["type"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.template"], "method", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.template"], "method", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.template"], "method", false, false, false, 3)) : (($context["target"] ?? null)));
        // line 6
        if ((($context["key"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "currentUri", [], "method", false, false, false, 6), "queryParam", ["preview"], "method", false, false, false, 6))) {
            // line 7
            yield "    ";
            $context["action"] = "preview";
        }
        // line 10
        $context["template"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            if ((($context["action"] ?? null) == "add")) {
                // line 12
                yield "edit";
            } elseif ((            // line 13
($context["action"] ?? null) == "delete")) {
                // line 14
                yield "list";
            } else {
                // line 16
                yield ((($context["action"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true)) : (((($context["task"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["task"], "html", null, true)) : ("types"))));
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        $context["separator"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 20), "param_sep", [], "any", false, false, false, 20);
        // line 21
        $context["view_config"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [("admin.views." . ($context["template"] ?? null))], "method", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [("admin.views." . ($context["template"] ?? null))], "method", false, false, false, 21)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [("admin.views." . ($context["template"] ?? null))], "method", false, false, false, 21)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [("admin." . ($context["template"] ?? null))], "method", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [("admin." . ($context["template"] ?? null))], "method", false, false, false, 21)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", [("admin." . ($context["template"] ?? null))], "method", false, false, false, 21)) : ([]))));
        // line 23
        yield from $this->load((((($tmp = ($context["target"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ([(((("flex-objects/types/" .         // line 24
($context["type"] ?? null)) . "/") . ($context["template"] ?? null)) . ".html.twig"), (("flex-objects/types/default/" .         // line 25
($context["template"] ?? null)) . ".html.twig"), "flex-objects/layouts/404.html.twig"]) : ([(("flex-objects/types/default/" .         // line 28
($context["template"] ?? null)) . ".html.twig"), "flex-objects/layouts/404.html.twig"])), 23)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects.html.twig";
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
        return array (  77 => 28,  76 => 25,  75 => 24,  74 => 23,  72 => 21,  70 => 20,  65 => 16,  62 => 14,  60 => 13,  58 => 12,  56 => 11,  54 => 10,  50 => 7,  48 => 6,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects.html.twig");
    }
}
