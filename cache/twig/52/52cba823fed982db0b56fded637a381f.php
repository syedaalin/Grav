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

/* flex-objects/types/pages/list.html.twig */
class __TwigTemplate_dcb132475c8d44d1150a60e5ff4d7e70 extends Template
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
            'back_button' => [$this, 'block_back_button'],
            'create_button' => [$this, 'block_create_button'],
            'content_top' => [$this, 'block_content_top'],
            'content_list' => [$this, 'block_content_list'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "flex-objects/types/default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["can_create"] = true;
        // line 1
        $this->parent = $this->load("flex-objects/types/default/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_back_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), "flex-objects/types/pages/buttons/back.html.twig"], 6)->unwrap()->yield($context);
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_create_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 10), "admin", [], "any", false, false, false, 10), "add_modals", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
            // line 11
            yield "        ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["add_modal"], "show_in", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["add_modal"], "show_in", [], "any", false, false, false, 11), "bar")) : ("bar")) == "bar")) {
                // line 12
                yield "            <a class=\"button ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["add_modal"], "link_classes", [], "any", false, false, false, 12), "html", null, true);
                yield "\" href=\"#modal-add_modal-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" data-remodal-target=\"modal-add_modal-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"><i class=\"fa fa-plus\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter(CoreExtension::getAttribute($this->env, $this->source, $context["add_modal"], "label", [], "any", false, false, false, 12)), "html", null, true);
                yield "</a>
        ";
            }
            // line 14
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['add_modal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
    ";
        // line 16
        yield from $this->load([(("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/add.html.twig"), "flex-objects/types/pages/buttons/add.html.twig"], 16)->unwrap()->yield($context);
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_list(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "    ";
        $context["list_layout"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 22), "param", ["layout", "columns"], "method", false, false, false, 22);
        // line 23
        yield "    ";
        yield from $this->load([(((("flex-objects/types/" .         // line 24
($context["target"] ?? null)) . "/list/") . ($context["list_layout"] ?? null)) . ".html.twig"), (("flex-objects/types/pages/list/" .         // line 25
($context["list_layout"] ?? null)) . ".html.twig"), (("flex-objects/types/" .         // line 26
($context["target"] ?? null)) . "/list/list.html.twig"), "flex-objects/types/pages/list/list.html.twig"], 23)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/types/pages/list.html.twig";
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
        return array (  135 => 26,  134 => 25,  133 => 24,  131 => 23,  128 => 22,  121 => 21,  111 => 19,  106 => 16,  103 => 15,  97 => 14,  85 => 12,  82 => 11,  77 => 10,  70 => 9,  64 => 6,  57 => 5,  52 => 1,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/types/pages/list.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/list.html.twig");
    }
}
