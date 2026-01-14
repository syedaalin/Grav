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

/* partials/search-overlay.html.twig */
class __TwigTemplate_288f555320b0554dd7d14f70eac9a2cf extends Template
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
        // line 2
        yield "<div id=\"search-overlay\" class=\"search-overlay\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Search\">

    <button id=\"search-close\" class=\"search-close-button\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\" class=\"icon-xl\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\"/>
        </svg>
        <span class=\"sr-only\">Close search</span>
    </button>

    <div class=\"search-container\" id=\"search-container\">
        <h2 class=\"search-title desktop-only\">Search Resources</h2>
        ";
        // line 13
        yield from $this->load("partials/tntsearch.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "        <p class=\"desktop-only search-hint\">Press <kbd class=\"kbd\">ESC</kbd> to close</p>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/search-overlay.html.twig";
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
        return array (  57 => 14,  55 => 13,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/search-overlay.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/search-overlay.html.twig");
    }
}
