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

/* forms/fields/mediapicker/mediapicker.html.twig */
class __TwigTemplate_5863dd0141363de586c899941f79533e extends Template
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

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'contents' => [$this, 'block_contents'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "forms/fields/text/text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["unique_identifier"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->randomStringFunc();
        // line 1
        $this->parent = $this->load("forms/fields/text/text.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->yieldParentBlock("global_attributes", $context, $blocks);
        yield "
data-mediapicker-modal-trigger
data-grav-mediapicker-unique-identifier=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_identifier"] ?? null), "html", null, true);
        yield "\"
";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield from $this->yieldParentBlock("contents", $context, $blocks);
        yield "
<div class=\"remodal remodal-mediapicker\" data-remodal-mediapicker data-remodal-unique-identifier=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_identifier"] ?? null), "html", null, true);
        yield "\" data-remodal-options=\"hashTracking: false\">
    ";
        // line 15
        yield from $this->load("partials/media-list-wrapper.html.twig", 15)->unwrap()->yield(CoreExtension::merge($context, ["is_modal" => true]));
        // line 16
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/mediapicker/mediapicker.html.twig";
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
        return array (  91 => 16,  89 => 15,  85 => 14,  81 => 13,  74 => 12,  67 => 8,  62 => 6,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/mediapicker/mediapicker.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/mediapicker/mediapicker.html.twig");
    }
}
