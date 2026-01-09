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

/* flex-objects/page.html.twig */
class __TwigTemplate_d7f011f9dd70c64088afef1cbfb9daa7 extends Template
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
        // line 3
        $context["options"] = (((array_key_exists("options", $context) &&  !(null === $context["options"]))) ? ($context["options"]) : ([]));
        // line 4
        $context["flex"] = CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "get", ["flex_objects"], "method", false, false, false, 4);
        // line 5
        $context["list"] = (((array_key_exists("list", $context) &&  !(null === $context["list"]))) ? ($context["list"]) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "list", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "list", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "list", [], "any", false, false, false, 5)) : (Twig\Extension\CoreExtension::keys((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 5)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["flex"] ?? null), "defaultDirectories", [], "method", false, false, false, 5))))))));
        // line 7
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page_assets"] ?? null), "css", [], "any", true, true, false, 7) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["page_assets"] ?? null), "css", [], "any", false, false, false, 7)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page_assets"] ?? null), "css", [], "any", false, false, false, 7)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.flex-objects.built_in_css"], "method", true, true, false, 7) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.flex-objects.built_in_css"], "method", false, false, false, 7)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.flex-objects.built_in_css"], "method", false, false, false, 7)) : (true))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["plugin://flex-objects/css/site.css"], "method", false, false, false, 8);
        }
        // line 10
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page_assets"] ?? null), "jss", [], "any", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["page_assets"] ?? null), "jss", [], "any", false, false, false, 10)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page_assets"] ?? null), "jss", [], "any", false, false, false, 10)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://flex-objects/js/list.min.js"], "method", false, false, false, 11);
        }
        // line 14
        if ((($tmp = ($context["type"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            $context["options"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, true, false, 15), ($context["type"] ?? null), [], "array", true, true, false, 15) &&  !(null === (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 15)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["type"] ?? null)] ?? null) : null)))) ? ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 15)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["type"] ?? null)] ?? null) : null)) : (($context["options"] ?? null)));
            // line 17
            if (!CoreExtension::inFilter(($context["type"] ?? null), ($context["list"] ?? null))) {
                // line 18
                yield "        ";
                // line 19
                yield "        ";
                yield from $this->load("flex-objects/views/404.html.twig", 19)->unwrap()->yield($context);
            } elseif ((($tmp =             // line 21
($context["id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 22
                yield "        ";
                $context["options"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "object", [], "any", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "object", [], "any", false, false, false, 22)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "object", [], "any", false, false, false, 22)) : (($context["options"] ?? null)));
                // line 23
                yield "
        ";
                // line 25
                yield "        ";
                yield from $this->load("flex-objects/views/object.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["type" => ($context["type"] ?? null), "id" => ($context["id"] ?? null), "options" => ($context["options"] ?? null)]));
            } else {
                // line 28
                yield "        ";
                $context["options"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "collection", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "collection", [], "any", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "collection", [], "any", false, false, false, 28)) : (($context["options"] ?? null)));
                // line 29
                yield "
        ";
                // line 31
                yield "        ";
                yield from $this->load("flex-objects/views/directory.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["type" => ($context["type"] ?? null), "options" => ($context["options"] ?? null)]));
            }
        } else {
            // line 35
            yield "    ";
            // line 36
            yield "    ";
            yield from $this->load("flex-objects/views/directories.html.twig", 36)->unwrap()->yield(CoreExtension::merge($context, ["options" => ($context["options"] ?? null), "list" => ($context["list"] ?? null)]));
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/page.html.twig";
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
        return array (  96 => 36,  94 => 35,  89 => 31,  86 => 29,  83 => 28,  79 => 25,  76 => 23,  73 => 22,  71 => 21,  68 => 19,  66 => 18,  64 => 17,  62 => 15,  60 => 14,  56 => 11,  54 => 10,  50 => 8,  48 => 7,  46 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/page.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/templates/flex-objects/page.html.twig");
    }
}
