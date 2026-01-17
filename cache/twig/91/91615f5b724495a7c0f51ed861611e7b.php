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

/* forms/layouts/form/default-form.html.twig */
class __TwigTemplate_a200d77c0f442a8b822042d599800893 extends Template
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
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_form_custom_attributes' => [$this, 'block_embed_form_custom_attributes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<form
    ";
        // line 2
        yield from $this->unwrap()->yieldBlock('embed_form_core', $context, $blocks);
        // line 3
        yield "    ";
        yield from $this->unwrap()->yieldBlock('embed_form_classes', $context, $blocks);
        // line 4
        yield "    ";
        yield from $this->unwrap()->yieldBlock('embed_form_custom_attributes', $context, $blocks);
        // line 5
        yield ">
  ";
        // line 6
        yield from $this->unwrap()->yieldBlock('embed_fields', $context, $blocks);
        // line 7
        yield "  ";
        yield from $this->unwrap()->yieldBlock('embed_buttons', $context, $blocks);
        // line 8
        yield "</form>

";
        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_core(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_custom_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_buttons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/layouts/form/default-form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  113 => 7,  103 => 6,  93 => 4,  83 => 3,  73 => 2,  66 => 8,  63 => 7,  61 => 6,  58 => 5,  55 => 4,  52 => 3,  50 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/layouts/form/default-form.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/layouts/form/default-form.html.twig");
    }
}
