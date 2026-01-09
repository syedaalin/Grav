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

/* forms/fields/save-redirect/save-redirect.html.twig */
class __TwigTemplate_4441db655d576decc5f23802fb4d6341 extends Template
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
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["originalValue"] = ($context["value"] ?? null);
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 4)) : (($context["value"] ?? null)));
        // line 5
        $context["isNew"] = (((($tmp = ($context["key"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (false) : (true));
        // line 6
        $context["savedOption"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "session", [], "any", false, true, false, 6), "post_entries_save", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "session", [], "any", false, false, false, 6), "post_entries_save", [], "any", false, false, false, 6), "edit")) : ("edit"));
        // line 8
        if ((($tmp = ($context["isNew"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            $context["options"] = ["create-new" => "PLUGIN_FLEX_OBJECTS.ACTION.CREATE_NEW", "edit" => "PLUGIN_FLEX_OBJECTS.ACTION.EDIT_ITEM", "list" => "PLUGIN_FLEX_OBJECTS.ACTION.LIST_ITEMS"];
        } else {
            // line 11
            $context["options"] = ["edit" => "PLUGIN_FLEX_OBJECTS.ACTION.EDIT_ITEM", "list" => "PLUGIN_FLEX_OBJECTS.ACTION.LIST_ITEMS"];
        }
        // line 1
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 16
            yield "        ";
            $context["id"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 16))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 16))) . "-") . $context["key"]);
            // line 17
            yield "
        ";
            // line 18
            if ((($context["savedOption"] ?? null) == $context["key"])) {
                // line 19
                yield "            ";
                $context["value"] = ($context["savedOption"] ?? null);
                // line 20
                yield "        ";
            }
            // line 21
            yield "
        <span class=\"radio\">
            <input type=\"radio\"
                   value=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"]);
            yield "\"
                   id=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null));
            yield "\"
                   name=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 26)), "html", null, true);
            yield "\"
                   ";
            // line 27
            if (($context["key"] == ($context["value"] ?? null))) {
                yield "checked=\"checked\" ";
            }
            // line 28
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 28) || ($context["isDisabledToggleable"] ?? null))) {
                yield "disabled=\"disabled\"";
            }
            // line 29
            yield "                    ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 29), "required", [], "any", false, false, false, 29), ["on", "true", 1])) {
                yield "required=\"required\"";
            }
            // line 30
            yield "            />
            <label style=\"display: inline\" class=\"inline\" for=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter($context["text"]));
            yield "</label>
        </span>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['text'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/save-redirect/save-redirect.html.twig";
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
        return array (  128 => 31,  125 => 30,  120 => 29,  115 => 28,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  94 => 21,  91 => 20,  88 => 19,  86 => 18,  83 => 17,  80 => 16,  75 => 15,  68 => 14,  63 => 1,  60 => 11,  57 => 9,  55 => 8,  53 => 6,  51 => 5,  49 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/save-redirect/save-redirect.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/forms/fields/save-redirect/save-redirect.html.twig");
    }
}
