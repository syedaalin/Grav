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

/* forms/layouts/field/default-field.html.twig */
class __TwigTemplate_ea97a22dbda4b75b04f4fa474dc45091 extends Template
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
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('field', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"form-field ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(($context["layout_form_field_outer_classes"] ?? null)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(($context["form_field_outer_core"] ?? null)), "html", null, true);
        yield "\">
  ";
        // line 3
        yield from $this->unwrap()->yieldBlock('contents', $context, $blocks);
        // line 52
        yield "</div>
";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if ((($tmp = ($context["show_label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "      <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["layout_form_field_outer_label_classes"] ?? null), "html", null, true);
            yield "\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_field_toggleable"] ?? null), "html", null, true);
            // line 7
            yield "<label class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["layout_form_field_label_classes"] ?? null), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_field_label_trim"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_field_for"] ?? null), "html", null, true);
                yield "\"";
            }
            yield ">";
            // line 8
            yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
            // line 18
            yield "</label>
      </div>
    ";
        }
        // line 21
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["layout_form_field_outer_data_classes"] ?? null), "html", null, true);
        yield "\"
        ";
        // line 22
        yield from $this->unwrap()->yieldBlock('global_attributes', $context, $blocks);
        // line 23
        yield "    >
      ";
        // line 24
        yield from $this->unwrap()->yieldBlock('group', $context, $blocks);
        // line 43
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", true, true, false, 43)) {
            // line 44
            yield "        <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_field_extra_wrapper_classes"] ?? null), "html", null, true);
            yield "\">
          <span class=\"form-description\">
            ";
            // line 46
            yield ($context["form_field_description"] ?? null);
            yield "
          </span>
        </div>
      ";
        }
        // line 50
        yield "    </div>
  ";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        if ((($tmp = ($context["form_field_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "<span class=\"tooltip\" data-tooltip=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_field_help"] ?? null));
            yield "\">";
            yield ($context["form_field_label"] ?? null);
            yield "</span>";
        } else {
            // line 12
            yield ($context["form_field_label"] ?? null);
        }
        // line 14
        if ((($tmp = ($context["form_field_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "              <span class=\"required\">*</span>";
        }
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_group(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "        ";
        yield from $this->unwrap()->yieldBlock('input', $context, $blocks);
        // line 42
        yield "      ";
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "          <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["layout_form_field_wrapper_classes"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 26), "html", null, true);
        yield "\">
            ";
        // line 27
        yield from $this->unwrap()->yieldBlock('prepend', $context, $blocks);
        // line 28
        yield "            ";
        $context["input_value"] = ((is_iterable(($context["value"] ?? null))) ? (Twig\Extension\CoreExtension::join(($context["value"] ?? null), ",")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(($context["value"] ?? null))));
        // line 29
        yield "            <input
              name=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 30))), "html", null, true);
        yield "\"
              value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_value"] ?? null));
        yield "\"
              ";
        // line 32
        yield from $this->unwrap()->yieldBlock('input_attributes', $context, $blocks);
        // line 33
        yield "            />
            ";
        // line 34
        yield from $this->unwrap()->yieldBlock('append', $context, $blocks);
        // line 35
        yield "            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 36
            yield "            <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_field_inline_error_classes"] ?? null), "html", null, true);
            yield "\">
              <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 37
            yield Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["errors"] ?? null));
            yield "</p>
            </div>
            ";
        }
        // line 40
        yield "          </div>
        ";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_append(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/layouts/field/default-field.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  274 => 34,  264 => 32,  254 => 27,  248 => 40,  242 => 37,  237 => 36,  234 => 35,  232 => 34,  229 => 33,  227 => 32,  223 => 31,  219 => 30,  216 => 29,  213 => 28,  211 => 27,  204 => 26,  197 => 25,  192 => 42,  189 => 25,  182 => 24,  172 => 22,  166 => 15,  164 => 14,  161 => 12,  154 => 10,  152 => 9,  145 => 8,  139 => 50,  132 => 46,  126 => 44,  123 => 43,  121 => 24,  118 => 23,  116 => 22,  111 => 21,  106 => 18,  104 => 8,  93 => 7,  91 => 6,  87 => 5,  84 => 4,  77 => 3,  71 => 52,  69 => 3,  62 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/layouts/field/default-field.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/layouts/field/default-field.html.twig");
    }
}
