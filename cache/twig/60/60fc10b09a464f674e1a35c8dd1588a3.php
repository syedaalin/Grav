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

/* forms/fields/xss/xss.html.twig */
class __TwigTemplate_6a229cbeafe8172d9ba758d305ee5782 extends Template
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
        $context["xss_header"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->arrayFilter((((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", ["header"], "method", false, false, false, 1)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", ["header"], "method", false, false, false, 1))));
        // line 2
        $context["xss_content"] = (((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", ["content"], "method", false, false, false, 2)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", ["content"], "method", false, false, false, 2)));
        // line 3
        $context["xss_status"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->xssFunc(["header" => ($context["xss_header"] ?? null), "content" => ($context["xss_content"] ?? null)]);
        // line 4
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["xss_status"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    <div class=\"notice alert\">";
            yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.XSS_ISSUE", ($context["xss_status"] ?? null));
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/xss/xss.html.twig";
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
        return array (  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/xss/xss.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/xss/xss.html.twig");
    }
}
