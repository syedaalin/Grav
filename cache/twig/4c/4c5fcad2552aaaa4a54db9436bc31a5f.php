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

/* flex-objects/types/default/titlebar/list.html.twig */
class __TwigTemplate_8b1ba02c10017859378215c2e843ef07 extends Template
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
            'export_button' => [$this, 'block_export_button'],
            'create_button' => [$this, 'block_create_button'],
            'languages_button' => [$this, 'block_languages_button'],
            'configure' => [$this, 'block_configure'],
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
        // line 36
        yield "
    ";
        // line 37
        yield from $this->unwrap()->yieldBlock('titlebar_title', $context, $blocks);
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
        if ((($tmp = ($context["can_export"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "        ";
            yield from $this->unwrap()->yieldBlock('export_button', $context, $blocks);
            // line 14
            yield "        ";
        }
        // line 15
        yield "
        ";
        // line 17
        yield "        ";
        if ((($tmp = ($context["can_create"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "        ";
            yield from $this->unwrap()->yieldBlock('create_button', $context, $blocks);
            // line 21
            yield "        ";
        }
        // line 22
        yield "
        ";
        // line 24
        yield "        ";
        if ((($tmp = ($context["can_translate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "        ";
            yield from $this->unwrap()->yieldBlock('languages_button', $context, $blocks);
            // line 28
            yield "        ";
        }
        // line 29
        yield "
        ";
        // line 31
        yield "        ";
        yield from $this->unwrap()->yieldBlock('configure', $context, $blocks);
        // line 34
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
    public function block_export_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "            ";
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/export.html.twig"), "flex-objects/types/default/buttons/export.html.twig"], 12)->unwrap()->yield(CoreExtension::merge($context, ["export" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.export"], "method", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.export"], "method", false, false, false, 12)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.views.export"], "method", false, false, false, 12)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.export"], "method", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.export"], "method", false, false, false, 12)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["directory"] ?? null), "config", ["admin.export"], "method", false, false, false, 12)) : ([]))))]));
        // line 13
        yield "        ";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_create_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "            ";
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/add.html.twig"), "flex-objects/types/default/buttons/add.html.twig"], 19)->unwrap()->yield($context);
        // line 20
        yield "        ";
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_languages_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "            ";
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/languages.html.twig"), "flex-objects/types/default/buttons/languages.html.twig"], 26)->unwrap()->yield($context);
        // line 27
        yield "        ";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configure(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "            ";
        yield from $this->load("flex-objects/types/default/buttons/configuration.html.twig", 32)->unwrap()->yield($context);
        // line 33
        yield "        ";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_titlebar_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    <h1>
        ";
        // line 39
        if ((($tmp = ($context["allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "            <i class=\"fa fa-fw ";
            yield (((($tmp = ($context["directory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title_icon"] ?? null), "html", null, true)) : ("fa-exclamation-triangle"));
            yield "\"></i>
            ";
            // line 41
            yield (((($tmp = ($context["directory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter(($context["title"] ?? null)), "html", null, true)) : ("Error"));
            yield "
        ";
        } else {
            // line 43
            yield "            <i class=\"fa fa-fw fa-exclamation-triangle\"></i>
            ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
            yield "
       ";
        }
        // line 46
        yield "    </h1>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/types/default/titlebar/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  238 => 46,  233 => 44,  230 => 43,  225 => 41,  220 => 40,  218 => 39,  215 => 38,  208 => 37,  203 => 33,  200 => 32,  193 => 31,  188 => 27,  185 => 26,  178 => 25,  173 => 20,  170 => 19,  163 => 18,  158 => 13,  155 => 12,  148 => 11,  143 => 7,  140 => 6,  133 => 5,  127 => 34,  124 => 31,  121 => 29,  118 => 28,  115 => 25,  112 => 24,  109 => 22,  106 => 21,  103 => 18,  100 => 17,  97 => 15,  94 => 14,  91 => 11,  88 => 10,  85 => 8,  82 => 5,  79 => 3,  72 => 2,  67 => 37,  64 => 36,  61 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/types/default/titlebar/list.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects/types/default/titlebar/list.html.twig");
    }
}
