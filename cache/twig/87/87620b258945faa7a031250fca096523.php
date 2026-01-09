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

/* flex-objects/views/directories.html.twig */
class __TwigTemplate_18ebbff2173f063cec8160f68d13c425 extends Template
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
        // line 2
        yield "
";
        // line 3
        $context["flex"] = CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "get", ["flex_objects"], "method", false, false, false, 3);
        // line 4
        $context["directory_url"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "method", false, false, false, 4);
        // line 5
        $context["list"] = (((array_key_exists("list", $context) &&  !(null === $context["list"]))) ? ($context["list"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "list", [], "any", false, false, false, 5)));
        // line 6
        $context["directories"] = (((($tmp = ($context["list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flex"] ?? null), "directories", [$this->extensions['Grav\Common\Twig\Extension\GravExtension']->arrayFilter(($context["list"] ?? null))], "method", false, false, false, 6)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["flex"] ?? null), "defaultDirectories", [], "method", false, false, false, 6)));
        // line 7
        $context["layout"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "layout", [], "any", false, false, false, 7)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "layout", [], "any", false, false, false, 7)) : ("default"));
        // line 8
        yield "
";
        // line 9
        yield from $this->load([(("flex-objects/directories/" .         // line 10
($context["layout"] ?? null)) . ".html.twig"), "flex-objects/directories/default.html.twig"], 9)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/views/directories.html.twig";
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
        return array (  59 => 10,  58 => 9,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/views/directories.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/templates/flex-objects/views/directories.html.twig");
    }
}
