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

/* forms/fields/folder-slug/folder-slug.html.twig */
class __TwigTemplate_c06123849c01db8a332eaa9f0be1cb23 extends Template
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
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "forms/fields/text/text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["field"] = Twig\Extension\CoreExtension::merge(($context["field"] ?? null), ["wrapper_classes" => "form-input-addon-wrapper"]);
        // line 1
        $this->parent = $this->load("forms/fields/text/text.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_append(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    <div class=\"form-input-addon form-input-append hint--top\" data-hint=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.AUTOREGENERATE_FOLDER_SLUG"), "html", null, true);
        yield "\" data-regenerate='[name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 5))), "html", null, true);
        yield "\"]'>
        <i class=\"fa fa-refresh\"></i>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/folder-slug/folder-slug.html.twig";
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
        return array (  61 => 5,  54 => 4,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/folder-slug/folder-slug.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/folder-slug/folder-slug.html.twig");
    }
}
