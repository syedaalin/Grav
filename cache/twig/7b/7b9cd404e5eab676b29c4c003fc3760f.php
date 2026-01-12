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

/* forms/default/fields.html.twig */
class __TwigTemplate_c56b11b5485cf0bf8fbf1ba0c79dcadd extends Template
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
            'outer_markup_field_open' => [$this, 'block_outer_markup_field_open'],
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'field' => [$this, 'block_field'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
            'outer_markup_field_close' => [$this, 'block_outer_markup_field_close'],
            'empty_fields_markup' => [$this, 'block_empty_fields_markup'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["fields"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->prepareFormFields($context, ($context["fields"] ?? null), ($context["name"] ?? null));
        // line 2
        $context["originalValue"] = null;
        // line 3
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["fields"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "  ";
            yield from $this->unwrap()->yieldBlock('outer_markup_field_open', $context, $blocks);
            // line 5
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
                // line 6
                yield "    ";
                $context["value"] = (((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 6)], "method", false, false, false, 6)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 6)], "method", false, false, false, 6)));
                // line 7
                yield "    ";
                $context["field_templates"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 7), ($context["field_layout"] ?? null), (((array_key_exists("fallback_field", $context) &&  !(null === $context["fallback_field"]))) ? ($context["fallback_field"]) : ("text")));
                // line 8
                yield "    ";
                yield from $this->unwrap()->yieldBlock('inner_markup_field_open', $context, $blocks);
                // line 9
                yield "    ";
                yield from $this->unwrap()->yieldBlock('field', $context, $blocks);
                // line 12
                yield "    ";
                yield from $this->unwrap()->yieldBlock('inner_markup_field_close', $context, $blocks);
                // line 13
                yield "  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "  ";
            yield from $this->unwrap()->yieldBlock('outer_markup_field_close', $context, $blocks);
        } else {
            // line 16
            yield "  ";
            yield from $this->unwrap()->yieldBlock('empty_fields_markup', $context, $blocks);
        }
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer_markup_field_open(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_open(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "        ";
        yield from $this->load(($context["field_templates"] ?? null), 10)->unwrap()->yield($context);
        // line 11
        yield "    ";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer_markup_field_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_empty_fields_markup(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/fields.html.twig";
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
        return array (  170 => 16,  160 => 14,  150 => 12,  145 => 11,  142 => 10,  135 => 9,  125 => 8,  115 => 4,  108 => 16,  104 => 14,  90 => 13,  87 => 12,  84 => 9,  81 => 8,  78 => 7,  75 => 6,  57 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/default/fields.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/default/fields.html.twig");
    }
}
