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

/* flex-objects/types/pages/buttons/add.html.twig */
class __TwigTemplate_f32f98fce418bbf988981bb1fb784958 extends Template
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
        yield "<div id=\"titlebar-add\" class=\"button-group\">
    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
        <i class=\"fa fa-plus\"></i> ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
        yield "
    </button>
    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-caret-down\"></i>
    </button>
    <ul class=\"dropdown-menu\">
        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
        yield "</a></li>
        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
        yield "</a></li>
        ";
        // line 11
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "modularTypes", [], "any", false, false, false, 11))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "        <li><a class=\"button\" href=\"#module\" data-remodal-target=\"module\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.ADD_MODULE"), "html", null, true);
            yield "</a></li>
        ";
        }
        // line 14
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 14), "admin", [], "any", false, false, false, 14), "add_modals", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
            // line 15
            yield "            ";
            if (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["add_modal"], "show_in", [], "any", false, false, false, 15), "bar") == "dropdown")) {
                // line 16
                yield "                <li><a class=\"button ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["add_modal"], "link_classes", [], "any", false, false, false, 16), "html", null, true);
                yield "\" href=\"#modal-add_modal-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" data-remodal-target=\"modal-add_modal-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter(CoreExtension::getAttribute($this->env, $this->source, $context["add_modal"], "label", [], "any", false, false, false, 16)), "html", null, true);
                yield "</a></li>
            ";
            }
            // line 18
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['add_modal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "    </ul>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/types/pages/buttons/add.html.twig";
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
        return array (  97 => 19,  91 => 18,  79 => 16,  76 => 15,  71 => 14,  65 => 12,  63 => 11,  59 => 10,  55 => 9,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/types/pages/buttons/add.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/buttons/add.html.twig");
    }
}
