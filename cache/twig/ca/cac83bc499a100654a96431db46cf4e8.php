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

/* partials/navigation.html.twig */
class __TwigTemplate_22a92eed6b94d2263db81f969134bbe3 extends Template
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
        // line 6
        $macros["͜macros"] = $this->macros["͜macros"] = $this->load("macros/macros.html.twig", 6)->unwrap();
        // line 7
        yield "
<ul class=\"nav-list\">
    ";
        // line 9
        yield $macros["͜macros"]->getTemplateForMacro("macro_nav_loop", $context, 9, $this->getSourceContext())->macro_nav_loop(...[($context["pages"] ?? null), ((array_key_exists("mobile", $context)) ? (Twig\Extension\CoreExtension::default(($context["mobile"] ?? null), false)) : (false))]);
        yield "
</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/navigation.html.twig";
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
        return array (  48 => 9,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/navigation.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/navigation.html.twig");
    }
}
