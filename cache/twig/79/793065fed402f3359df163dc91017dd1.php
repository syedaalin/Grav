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

/* partials/footer.html.twig */
class __TwigTemplate_2c40d98e669a4b4717a70753d99f3db0 extends Template
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
        yield "<footer class=\"aabtaab-footer\">
    <div class=\"footer-container\">
        
        ";
        // line 5
        yield "        ";
        yield from $this->load("partials/footer-builder.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "
    </div>

    <div class=\"footer-bottom\">
        <div class=\"bottom-content\">
            <div class=\"copyright\">";
        // line 11
        yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_footer_legal_copy");
        yield "</div>
            <div class=\"credits\">";
        // line 12
        yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_footer_legal_credits");
        yield "</div>
        </div>
    </div>
</footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.html.twig";
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
        return array (  61 => 12,  57 => 11,  50 => 6,  47 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/footer.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/footer.html.twig");
    }
}
