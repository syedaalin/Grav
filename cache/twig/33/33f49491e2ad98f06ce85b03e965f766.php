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
class __TwigTemplate_a30df2595985d025a61e56affe7b9321 extends Template
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
        $context["logo"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_logo");
        // line 2
        $context["brand"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_brandName"), CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 2));
        // line 3
        $context["show_text"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_showText");
        // line 4
        yield "
<a href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["home_url"] ?? null), "html", null, true);
        yield "\" class=\"navbar-brand mr-10\" style=\"display: flex; align-items: center; gap: 12px;\">
    ";
        // line 6
        if ((($tmp = ($context["logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "      ";
            $context["logo_file"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["logo"] ?? null)), "name", [], "any", false, false, false, 7);
            // line 8
            yield "      <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . ($context["logo_file"] ?? null))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["brand"] ?? null), "html", null, true);
            yield "\" fetchpriority=\"high\" />
    ";
        }
        // line 10
        yield "
    ";
        // line 11
        if ((($context["show_text"] ?? null) ||  !($context["logo"] ?? null))) {
            // line 12
            yield "      <span class=\"brand-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["brand"] ?? null), "html", null, true);
            yield "</span>
    ";
        }
        // line 14
        yield "</a>";
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
        return array (  79 => 14,  73 => 12,  71 => 11,  68 => 10,  60 => 8,  57 => 7,  55 => 6,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/logo.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/logo.html.twig");
    }
}
