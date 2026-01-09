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

/* modular/text.html.twig */
class __TwigTemplate_70ed668e7c5f85107073e81f4eeb25f2 extends Template
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
        yield "<section class=\"py-24 @lg:py-32 px-6 @lg:px-12 bg-[var(--surface-sunken)] dark:bg-[var(--color-brand-dark)] @container [content-visibility:auto]\">
    <div class=\"prose prose-lg @lg:prose-xl max-w-none text-[var(--color-brand-gray)] dark:text-gray-300 leading-loose\">
        ";
        // line 3
        yield ($context["content"] ?? null);
        yield "
    </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/text.html.twig";
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
        return array (  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modular/text.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/modular/text.html.twig");
    }
}
