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

/* partials/page-move.html.twig */
class __TwigTemplate_4704c4a65bd9a0f761e18efe8c45d5ac extends Template
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
        $context["form_id"] = (((($tmp = ($context["form_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["form_id"] ?? null)) : ("page-move"));
        // line 2
        $context["scope"] = ((($context["scope"] ?? null)) ? ($context["scope"]) : ("data."));
        // line 3
        $context["field_layout"] = "admin";
        // line 4
        yield "
<form id=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
        yield "\" method=\"post\" data-grav-form=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
        yield "\" data-page-move>
    <h1>Move</h1>
    <div class=\"grav-loading\"><div class=\"grav-loader\">Loading...</div></div>
    <div class=\"parents-content\"></div>

    ";
        // line 10
        yield from $this->load("partials/page-move.html.twig", 10, 1935317537)->unwrap()->yield(CoreExtension::merge($context, ["name" => null, "fields" => CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "fields", [], "any", false, false, false, 10)]));
        // line 14
        yield "
    ";
        // line 15
        yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc("admin-form", "admin-nonce");
        yield "

    <div class=\"button-bar\">
        <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        yield "</button>
        <button class=\"button primary\" name=\"task\" value=\"save\" form=\"blueprints\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        yield "</button>
    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/page-move.html.twig";
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
        return array (  76 => 19,  72 => 18,  66 => 15,  63 => 14,  61 => 10,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/page-move.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/page-move.html.twig");
    }
}


/* partials/page-move.html.twig */
class __TwigTemplate_4704c4a65bd9a0f761e18efe8c45d5ac___1935317537 extends Template
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
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 10
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/default/fields.html.twig", 10);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_open(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "<div class=\"block block-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 11), "html", null, true);
        yield "\">";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/page-move.html.twig";
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
        return array (  163 => 12,  150 => 11,  139 => 10,  76 => 19,  72 => 18,  66 => 15,  63 => 14,  61 => 10,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/page-move.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/page-move.html.twig");
    }
}
