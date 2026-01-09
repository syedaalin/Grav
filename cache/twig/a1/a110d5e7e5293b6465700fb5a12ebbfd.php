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

/* modular/hero.html.twig */
class __TwigTemplate_be78705788fbc962dce2f8399afaf088 extends Template
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
        $context["grid_size"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "grid-size");
        // line 2
        $context["hero_image"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2), "hero_image", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 2)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2), "hero_image", [], "any", false, false, false, 2)] ?? null) : null)) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 2), "images", [], "any", false, false, false, 2))));
        // line 3
        yield "
";
        // line 4
        yield from $this->load("partials/hero.html.twig", 4)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/hero.html.twig";
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
        return array (  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modular/hero.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/modular/hero.html.twig");
    }
}
