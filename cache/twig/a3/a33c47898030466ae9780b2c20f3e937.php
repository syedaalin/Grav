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

/* forms/fields/codemirror/codemirror.html.twig */
class __TwigTemplate_d352c82ca889278479e560d9289760a0 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "forms/fields/editor/editor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["theme"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, true, false, 2), "admin", [], "any", false, true, false, 2), "whitelabel", [], "any", false, true, false, 2), "codemirror_theme", [], "any", true, true, false, 2) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 2), "admin", [], "any", false, false, false, 2), "whitelabel", [], "any", false, false, false, 2), "codemirror_theme", [], "any", false, false, false, 2)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 2), "admin", [], "any", false, false, false, 2), "whitelabel", [], "any", false, false, false, 2), "codemirror_theme", [], "any", false, false, false, 2)) : ("paper.css"));
        // line 3
        $context["font"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, true, false, 3), "admin", [], "any", false, true, false, 3), "whitelabel", [], "any", false, true, false, 3), "codemirror_md_font", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 3), "admin", [], "any", false, false, false, 3), "whitelabel", [], "any", false, false, false, 3), "codemirror_md_font", [], "any", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 3), "admin", [], "any", false, false, false, 3), "whitelabel", [], "any", false, false, false, 3), "codemirror_md_font", [], "any", false, false, false, 3)) : ("sans"));
        // line 4
        $context["codemirrorOptions"] = Twig\Extension\CoreExtension::merge(["spellcheck" => "true", "inputStyle" => "contenteditable", "mode" => "gfm", "theme" => ($context["theme"] ?? null), "font" => ($context["font"] ?? null), "ignore" => []], ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "codemirror", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "codemirror", [], "any", false, false, false, 4), [])) : ([])));
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "showPreview", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            $context["codemirrorOptions"] = Twig\Extension\CoreExtension::merge(($context["codemirrorOptions"] ?? null), ["ignore" => []]);
        }
        // line 1
        $this->parent = $this->load("forms/fields/editor/editor.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/codemirror/codemirror.html.twig";
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
        return array (  57 => 1,  54 => 8,  52 => 7,  50 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/codemirror/codemirror.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/codemirror/codemirror.html.twig");
    }
}
