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

/* partials/header-builder.html.twig */
class __TwigTemplate_f08d9cb3d60961e2541d8ee1d923a30d extends Template
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
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/header.css"], "method", false, false, false, 1);
        // line 2
        $context["items"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_header_structure");
        // line 3
        yield "
<nav class=\"header-builder-container builder-active\" role=\"navigation\" aria-label=\"Main Navigation\">
    ";
        // line 6
        yield "    ";
        $context["cognitive_nav"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_nav_nodes");
        // line 7
        yield "    
    ";
        // line 8
        if ((($tmp = ($context["cognitive_nav"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        ";
            // line 10
            yield "        ";
            yield from $this->load("partials/navigation.html.twig", 10)->unwrap()->yield($context);
            // line 11
            yield "    ";
        } elseif ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "        ";
            // line 13
            yield "        ";
            yield from $this->load("partials/nav.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["items" => ($context["items"] ?? null)]));
            // line 14
            yield "    ";
        } else {
            // line 15
            yield "        ";
            // line 16
            yield "        <div class=\"header-default\">
            ";
            // line 17
            yield from $this->load("partials/logo.html.twig", 17)->unwrap()->yield($context);
            // line 18
            yield "            ";
            // line 19
            yield "            ";
            yield from $this->load("partials/navigation.html.twig", 19)->unwrap()->yield(CoreExtension::merge($context, ["fallback" => true]));
            yield " 
        </div>
    ";
        }
        // line 22
        yield "</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header-builder.html.twig";
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
        return array (  90 => 22,  83 => 19,  81 => 18,  79 => 17,  76 => 16,  74 => 15,  71 => 14,  68 => 13,  66 => 12,  63 => 11,  60 => 10,  58 => 9,  56 => 8,  53 => 7,  50 => 6,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/header-builder.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/header-builder.html.twig");
    }
}
