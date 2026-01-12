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

/* partials/logo.html.twig */
class __TwigTemplate_8d8af6f17b08d7deffd19c98ef126f60 extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 1), "admin", [], "any", false, false, false, 1), "logo_text", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <h3>
        <a href=\"";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/"), "html", null, true);
            yield "\">
            ";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 4), "admin", [], "any", false, false, false, 4), "logo_text", [], "any", false, false, false, 4), "html", null, true);
            yield "
        </a>
        <a class=\"front-end hint--left\" data-hint=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            yield "\" target=\"_blank\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_relative_frontend"] ?? null), "html", null, true);
            yield "\"> <i class=\"fa fa-external-link\"></i></a>
    </h3>
";
        } else {
            // line 9
            yield "    <div class=\"admin-logo ";
            yield (((($tmp = ($context["custom_admin_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("custom-logo") : ("default-logo"));
            yield "\">
        <a href=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/"), "html", null, true);
            yield "\">
            ";
            // line 11
            if ((($tmp = ($context["custom_admin_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 12
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["custom_admin_logo"] ?? null)), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 12), "html", null, true);
                yield "\" />
            ";
            } else {
                // line 14
                yield "                ";
                yield from $this->load("@admin-images/grav-small.svg", 14)->unwrap()->yield($context);
                // line 15
                yield "                ";
                yield from $this->load("@admin-images/grav-regular.svg", 15)->unwrap()->yield($context);
                // line 16
                yield "            ";
            }
            // line 17
            yield "        </a>
        <a class=\"front-end hint--left\" data-hint=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            yield "\" target=\"_blank\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_relative_frontend"] ?? null), "html", null, true);
            yield "\"> <i class=\"fa fa-external-link\"></i></a>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/logo.html.twig";
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
        return array (  95 => 18,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  75 => 12,  73 => 11,  69 => 10,  64 => 9,  56 => 6,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/logo.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/logo.html.twig");
    }
}
