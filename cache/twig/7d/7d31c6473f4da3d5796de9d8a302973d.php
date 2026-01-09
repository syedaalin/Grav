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

/* flex-objects.html.twig */
class __TwigTemplate_82ae5d639b9e0a00fd46b853c5170b59 extends Template
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
            'content' => [$this, 'block_content'],
            'page_content' => [$this, 'block_page_content'],
            'flex_content' => [$this, 'block_flex_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from $this->unwrap()->yieldBlock('page_content', $context, $blocks);
        // line 7
        yield "
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('flex_content', $context, $blocks);
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "        ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 5);
        yield "
    ";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_flex_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "        ";
        $context["options"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "flex", [], "any", false, false, false, 9);
        // line 10
        yield "        ";
        $context["page_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 10), "assets", [], "any", false, false, false, 10);
        // line 11
        yield "        ";
        $context["type"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directory", [], "any", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directory", [], "any", false, false, false, 11)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directory", [], "any", false, false, false, 11)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 11), "directory", [], "any", false, false, false, 11)));
        // line 12
        yield "        ";
        if ((($tmp = ($context["type"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "            ";
            $context["list"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->arrayFilter(($context["type"] ?? null));
            // line 14
            yield "        ";
        } else {
            // line 15
            yield "            ";
            $context["type"] = CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "param", ["directory"], "method", false, false, false, 15);
            // line 16
            yield "        ";
        }
        // line 17
        yield "        ";
        $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 17)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 17)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "param", ["id"], "method", false, false, false, 17)));
        // line 18
        yield "
        ";
        // line 19
        yield from $this->load("flex-objects/page.html.twig", 19)->unwrap()->yield($context);
        // line 20
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects.html.twig";
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
        return array (  125 => 20,  123 => 19,  120 => 18,  117 => 17,  114 => 16,  111 => 15,  108 => 14,  105 => 13,  102 => 12,  99 => 11,  96 => 10,  93 => 9,  86 => 8,  78 => 5,  71 => 4,  66 => 8,  63 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/templates/flex-objects.html.twig");
    }
}
