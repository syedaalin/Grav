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

/* partials/blueprints-new-folder.html.twig */
class __TwigTemplate_cd6317944dcc0adc54a27a6777e424c8 extends Template
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
        $context["form_id"] = (((($tmp = ($context["form_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["form_id"] ?? null)) : ("blueprints"));
        // line 2
        $context["scope"] = ((($context["scope"] ?? null)) ? ($context["scope"]) : ("data."));
        // line 3
        $context["field_layout"] = "admin";
        // line 4
        yield "
<form ";
        // line 5
        if ((($tmp = ($context["form_action"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_action"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
        yield "\" method=\"post\" data-grav-form=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
        yield "\" data-grav-keepalive=\"true\">
    ";
        // line 6
        yield from $this->load("partials/blueprints-new-folder.html.twig", 6, 378423332)->unwrap()->yield(CoreExtension::merge($context, ["name" => null, "fields" => CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "fields", [], "any", false, false, false, 6)]));
        // line 10
        yield "
    <input type=\"hidden\" name=\"task\" value=\"saveNewFolder\" />
    <div class=\"button-bar\">
        <button class=\"button primary\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SAVE"), "html", null, true);
        yield "</button>
    </div>

    ";
        // line 16
        yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc("admin-form", "admin-nonce");
        yield "

</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/blueprints-new-folder.html.twig";
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
        return array (  76 => 16,  70 => 13,  65 => 10,  63 => 6,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/blueprints-new-folder.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/blueprints-new-folder.html.twig");
    }
}


/* partials/blueprints-new-folder.html.twig */
class __TwigTemplate_cd6317944dcc0adc54a27a6777e424c8___378423332 extends Template
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
        // line 6
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/default/fields.html.twig", 6);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_open(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "<div class=\"block block-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 7), "html", null, true);
        yield "\">";
        yield from [];
    }

    // line 8
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
        return "partials/blueprints-new-folder.html.twig";
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
        return array (  163 => 8,  150 => 7,  139 => 6,  76 => 16,  70 => 13,  65 => 10,  63 => 6,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/blueprints-new-folder.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/blueprints-new-folder.html.twig");
    }
}
