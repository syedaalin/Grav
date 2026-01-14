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

/* manifest.html.twig */
class __TwigTemplate_5ad27396b6b5e121b6e4005a54b613a8 extends Template
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
        yield json_encode(["name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["config"] ?? null), "site", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "short_name" => Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["config"] ?? null), "site", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), 0, 12), "start_url" => (        // line 9
($context["base_url"] ?? null) . "/"), "display" => "standalone", "background_color" => "#ffffff", "theme_color" => "#0d1117", "icons" => [["src" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/grav-logo.svg"), "sizes" => "192x192", "type" => "image/svg+xml"], ["src" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/grav-logo.svg"), "sizes" => "512x512", "type" => "image/svg+xml"]]]);
        // line 25
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "manifest.html.twig";
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
        return array (  47 => 25,  45 => 9,  44 => 8,  43 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "manifest.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/manifest.html.twig");
    }
}
