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

/* login.html.twig */
class __TwigTemplate_92ccf0587482775753f048f620c3837e extends Template
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
        $context["user"] = CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 3) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "authenticated", [], "any", false, false, false, 3))) {
            // line 4
            yield "    ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "authorized", [], "any", false, false, false, 4) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "twofa_enabled", [], "any", false, false, false, 4))) {
                // line 5
                yield "        ";
                yield from $this->load("partials/login-twofa.html.twig", 5)->unwrap()->yield($context);
                // line 6
                yield "    ";
            } else {
                // line 7
                yield "        ";
                yield from $this->load("partials/login-logout.html.twig", 7)->unwrap()->yield($context);
                // line 8
                yield "    ";
            }
        } else {
            // line 10
            yield "    ";
            yield from $this->load("partials/login-form.html.twig", 10)->unwrap()->yield($context);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login.html.twig";
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
        return array (  65 => 10,  61 => 8,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "login.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/login.html.twig");
    }
}
