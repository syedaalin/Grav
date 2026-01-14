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

/* partials/bottom-banner/copyright.html.twig */
class __TwigTemplate_08c99186464a8bdfa1ab7a3404a1c28f extends Template
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
        yield "<div class=\"bottom-banner-footer\">
    <div class=\"bottom-banner-footer-content\">
        <div class=\"bottom-banner-copyright\">
            <small>
                ";
        // line 6
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "copyright", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "                    ";
            yield Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "copyright", [], "any", false, false, false, 7), ["{year}" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "[year]" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y")]);
            yield "
                ";
        } else {
            // line 9
            yield "                    &copy; ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "site_name", [], "any", false, false, false, 9), "html", null, true);
            yield ". All rights reserved.
                ";
        }
        // line 11
        yield "            </small>
        </div>

        ";
        // line 15
        yield "        <nav class=\"bottom-banner-legal-links\" aria-label=\"Legal\">
            <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true);
        yield "/privacy-policy\">Privacy Policy</a>
            <span class=\"separator\" aria-hidden=\"true\">•</span>
            <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true);
        yield "/terms\">Terms of Service</a>
        </nav>
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
        return "partials/bottom-banner/copyright.html.twig";
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
        return array (  77 => 18,  72 => 16,  69 => 15,  64 => 11,  56 => 9,  50 => 7,  48 => 6,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/bottom-banner/copyright.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/bottom-banner/copyright.html.twig");
    }
}
