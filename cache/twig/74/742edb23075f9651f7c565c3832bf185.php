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

/* partials/blueprints-copy.html.twig */
class __TwigTemplate_55490693290ea9ac8f7b9d92b62e2cc0 extends Template
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
        yield "\" ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "novalidate", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "novalidate";
        }
        yield " data-grav-keepalive=\"true\">
    ";
        // line 6
        yield from $this->load("partials/blueprints-copy.html.twig", 6, 31382698)->unwrap()->yield(CoreExtension::merge($context, ["name" => null, "fields" => CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "fields", [], "any", false, false, false, 6)]));
        // line 10
        yield "
    <input type=\"hidden\" name=\"task\" value=\"copy\" />
    <div class=\"button-bar\">
        <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        yield "</button>
        <button class=\"button success\" ";
        // line 14
        yield "><i class=\"fa fa-fw fa-check\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        yield "</button>
    </div>

    ";
        // line 17
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
        return "partials/blueprints-copy.html.twig";
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
        return array (  85 => 17,  78 => 14,  74 => 13,  69 => 10,  67 => 6,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/blueprints-copy.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/blueprints-copy.html.twig");
    }
}


/* partials/blueprints-copy.html.twig */
class __TwigTemplate_55490693290ea9ac8f7b9d92b62e2cc0___31382698 extends Template
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
        return "partials/blueprints-copy.html.twig";
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
        return array (  172 => 8,  159 => 7,  148 => 6,  85 => 17,  78 => 14,  74 => 13,  69 => 10,  67 => 6,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/blueprints-copy.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/blueprints-copy.html.twig");
    }
}
