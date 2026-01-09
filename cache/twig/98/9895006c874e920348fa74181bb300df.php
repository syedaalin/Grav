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

/* flex-objects/types/default/titlebar/edit.html.twig */
class __TwigTemplate_ec3930508b7f3ee030e1151bc7c453f5 extends Template
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
            'titlebar' => [$this, 'block_titlebar'],
            'titlebar_button_bar' => [$this, 'block_titlebar_button_bar'],
            'back_button' => [$this, 'block_back_button'],
            'preview_button' => [$this, 'block_preview_button'],
            'delete_button' => [$this, 'block_delete_button'],
            'extra_buttons' => [$this, 'block_extra_buttons'],
            'save_button' => [$this, 'block_save_button'],
            'titlebar_title' => [$this, 'block_titlebar_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('titlebar', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_titlebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    ";
        yield from $this->unwrap()->yieldBlock('titlebar_button_bar', $context, $blocks);
        // line 33
        yield "
    ";
        // line 34
        yield from $this->unwrap()->yieldBlock('titlebar_title', $context, $blocks);
        // line 45
        yield "
";
        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_titlebar_button_bar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "    <div class=\"button-bar\">
        ";
        // line 5
        yield "        ";
        yield from $this->unwrap()->yieldBlock('back_button', $context, $blocks);
        // line 8
        yield "
        ";
        // line 10
        yield "        ";
        if ((($tmp = ($context["can_preview"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "        ";
            yield from $this->unwrap()->yieldBlock('preview_button', $context, $blocks);
            // line 14
            yield "        ";
        }
        // line 15
        yield "
        ";
        // line 17
        yield "        ";
        if ((($tmp = ($context["can_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "        ";
            yield from $this->unwrap()->yieldBlock('delete_button', $context, $blocks);
            // line 21
            yield "        ";
        }
        // line 22
        yield "
        ";
        // line 23
        yield from $this->unwrap()->yieldBlock('extra_buttons', $context, $blocks);
        // line 24
        yield "
        ";
        // line 26
        yield "        ";
        if ((($context["allowed"] ?? null) && ($context["can_save"] ?? null))) {
            // line 27
            yield "        ";
            yield from $this->unwrap()->yieldBlock('save_button', $context, $blocks);
            // line 30
            yield "        ";
        }
        // line 31
        yield "    </div>
    ";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_back_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "            ";
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), "flex-objects/types/default/buttons/back.html.twig"], 6)->unwrap()->yield($context);
        // line 7
        yield "        ";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_preview_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "            ";
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/preview.html.twig"), "flex-objects/types/default/buttons/preview.html.twig"], 12)->unwrap()->yield($context);
        // line 13
        yield "        ";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "            ";
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/delete.html.twig"), "flex-objects/types/default/buttons/delete.html.twig"], 19)->unwrap()->yield($context);
        // line 20
        yield "        ";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_buttons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_save_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "            ";
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/save.html.twig"), "flex-objects/types/default/buttons/save.html.twig"], 28)->unwrap()->yield(CoreExtension::merge($context, ["task" => "save"]));
        // line 29
        yield "        ";
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_titlebar_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "    <h1>
        ";
        // line 36
        if ((($tmp = ($context["allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "            <i class=\"fa fa-fw ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title_icon"] ?? null), "html", null, true);
            yield "\"></i>
            ";
            // line 38
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "exists", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("[" . Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_FLEX_OBJECTS.NEW"))) . "]"), "html", null, true)) : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter(($context["title"] ?? null)), "html", null, true);
            yield "
        ";
        } else {
            // line 40
            yield "            <i class=\"fa fa-fw fa-exclamation-triangle\"></i>
            ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
            yield "
        ";
        }
        // line 43
        yield "    </h1>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/types/default/titlebar/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  237 => 43,  232 => 41,  229 => 40,  222 => 38,  217 => 37,  215 => 36,  212 => 35,  205 => 34,  200 => 29,  197 => 28,  190 => 27,  180 => 23,  175 => 20,  172 => 19,  165 => 18,  160 => 13,  157 => 12,  150 => 11,  145 => 7,  142 => 6,  135 => 5,  129 => 31,  126 => 30,  123 => 27,  120 => 26,  117 => 24,  115 => 23,  112 => 22,  109 => 21,  106 => 18,  103 => 17,  100 => 15,  97 => 14,  94 => 11,  91 => 10,  88 => 8,  85 => 5,  82 => 3,  75 => 2,  69 => 45,  67 => 34,  64 => 33,  61 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/types/default/titlebar/edit.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects/types/default/titlebar/edit.html.twig");
    }
}
