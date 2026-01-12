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

/* partials/stylesheets.html.twig */
class __TwigTemplate_4407dd81f56505f23e9ca28675996dfd extends Template
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
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css-compiled/nucleus.css"), ["priority" => 20]], "method", false, false, false, 1);
        // line 2
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css-compiled/template.css"), ["priority" => 20]], "method", false, false, false, 2);
        // line 3
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["asset://admin-preset.css", ["priority" => 5]], "method", false, false, false, 3);
        // line 4
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css-compiled/simple-fonts.css")], "method", false, false, false, 4);
        // line 5
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css/fontawesome7.min.css")], "method", false, false, false, 5);
        // line 6
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css/fork-awesome-shim.css")], "method", false, false, false, 6);
        // line 7
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css/chartist.min.css")], "method", false, false, false, 7);
        // line 8
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css/selectize.min.css")], "method", false, false, false, 8);
        // line 9
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css/hint.base.min.css")], "method", false, false, false, 9);
        // line 10
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css/iconpicker.css")], "method", false, false, false, 10);
        // line 11
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["browser"] ?? null), "getBrowser", [], "any", false, false, false, 11) == "msie") && (CoreExtension::getAttribute($this->env, $this->source, ($context["browser"] ?? null), "getVersion", [], "any", false, false, false, 11) >= 8)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["browser"] ?? null), "getVersion", [], "any", false, false, false, 11) <= 9))) {
            // line 12
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css/nucleus-ie9.css")], "method", false, false, false, 12);
            // line 13
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css/pure-0.5.0/grids-min.css")], "method", false, false, false, 13);
        }
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["language_codes"] ?? null), "rtl", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 15), "language", [], "any", false, false, false, 15)], "method", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(($context["theme_url"] ?? null) . "/css/rtl.css")], "method", false, false, false, 16);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/stylesheets.html.twig";
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
        return array (  73 => 16,  71 => 15,  67 => 13,  64 => 12,  62 => 11,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/stylesheets.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/stylesheets.html.twig");
    }
}
