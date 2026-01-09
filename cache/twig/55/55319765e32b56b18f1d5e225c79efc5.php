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

/* forms/fields/fieldset/fieldset.html.twig */
class __TwigTemplate_79258ecf5cc35e43ae6adf379589acb8 extends Template
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
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'actions' => [$this, 'block_actions'],
            'group' => [$this, 'block_group'],
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
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "  <div class=\"form-fieldset";
        if ((($tmp = ($context["vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " vertical";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", true, true, false, 4)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 4), "html", null, true);
        }
        yield "\">
    ";
        // line 5
        yield from $this->unwrap()->yieldBlock('contents', $context, $blocks);
        // line 80
        yield "  </div>
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "      <input type=\"checkbox\" class=\"hidden\" id=\"fieldset_collapsible_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "\"";
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "collapsible", [], "any", false, false, false, 6) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "collapsed", [], "any", false, false, false, 6))) {
            yield " checked=\"checked\"";
        }
        yield " />

      <div class=\"form-label form-fieldset--label\">
        <h2>
          <label";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "collapsible", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " for=\"fieldset_collapsible_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
            yield "\" class=\"form-fieldset--cursor ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 10), "html", null, true);
            yield "\"";
        }
        yield ">
            ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "            <span class=\"hint--bottom\" data-hint=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 12)), "html", null, true);
            yield "\">
            ";
        }
        // line 14
        yield "            ";
        yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
        // line 24
        yield "          ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "          </span>
          ";
        }
        // line 27
        yield "
          ";
        // line 29
        yield "          <span class=\"actions\">
            ";
        // line 30
        yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
        // line 38
        yield "          </span>
        </label>
      </h2>
      </div>
      <div class=\"form-data\"
        ";
        // line 48
        yield "      >

          ";
        // line 50
        yield from $this->unwrap()->yieldBlock('group', $context, $blocks);
        // line 78
        yield "      </div>
    ";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "icon", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                <i class=\"fa fa-fw fa-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "icon", [], "any", false, false, false, 16), "html", null, true);
            yield "\"></i>
              ";
        }
        // line 18
        yield "              ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 18)), "html", null, true);
        yield "
              ";
        // line 19
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "required", [], "any", false, false, false, 19), ["on", "true", 1])) ? ("<span class=\"required\">*</span>") : (""));
        yield "
              ";
        // line 20
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "info", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                <span class=\"form-fieldset--info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "info", [], "any", false, false, false, 21)), "html", null, true);
            yield "</span>
              ";
        }
        // line 23
        yield "            ";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "collapsible", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                <span class=\"form-fieldset--collapsible\">
                  <i class=\"fa fa-chevron-down open\"></i>
                  <i class=\"fa fa-chevron-up close\"></i>
                </span>
              ";
        }
        // line 37
        yield "            ";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_group(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "text", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "                ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "text", [], "any", false, false, false, 52)))) : ((("<p>" . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "text", [], "any", false, false, false, 52))) . "</p>")));
            yield "
              ";
        }
        // line 54
        yield "
              ";
        // line 55
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 56));
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
            foreach ($context['_seq'] as $context["child_name"] => $context["child"]) {
                // line 57
                yield "                      ";
                $context["child"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->prepareFormField($context, $context["child"], $context["child_name"], CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 57), ["key" => ($context["key"] ?? null)]);
                // line 58
                yield "                      ";
                if ((($tmp = $context["child"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 59
                    yield "                        ";
                    $context["default_layout"] = "text";
                    // line 60
                    yield "                        ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", false, false, false, 60) == "key") || (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "key", [], "any", false, false, false, 60) == true))) {
                        // line 61
                        yield "                            ";
                        // line 62
                        yield "                            ";
                        $context["default_layout"] = "key";
                        // line 63
                        yield "                            ";
                        $context["child_value"] = ($context["key"] ?? null);
                        // line 64
                        yield "                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 64) == "value")) {
                        // line 65
                        yield "                            ";
                        // line 66
                        yield "                            ";
                        $context["child"] = Twig\Extension\CoreExtension::merge($context["child"], ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 66)]);
                        // line 67
                        yield "                            ";
                        $context["child_value"] = ($context["value"] ?? null);
                        // line 68
                        yield "                        ";
                    } else {
                        // line 69
                        yield "                          ";
                        $context["child_value"] = (((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 69)], "method", false, false, false, 69)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 69)], "method", false, false, false, 69)));
                        // line 70
                        yield "                        ";
                    }
                    // line 71
                    yield "
                        ";
                    // line 72
                    $context["field_templates"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "type", [], "any", false, false, false, 72), ($context["field_layout"] ?? null), ($context["default_layout"] ?? null));
                    // line 73
                    yield "                        ";
                    yield from $this->load(($context["field_templates"] ?? null), 73)->unwrap()->yield(CoreExtension::merge($context, ["field" => $context["child"], "value" => ($context["child_value"] ?? null), "originalValue" => null]));
                    // line 74
                    yield "                      ";
                }
                // line 75
                yield "                  ";
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
            unset($context['_seq'], $context['child_name'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            yield "              ";
        }
        // line 77
        yield "          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/fieldset/fieldset.html.twig";
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
        return array (  322 => 77,  319 => 76,  305 => 75,  302 => 74,  299 => 73,  297 => 72,  294 => 71,  291 => 70,  288 => 69,  285 => 68,  282 => 67,  279 => 66,  277 => 65,  274 => 64,  271 => 63,  268 => 62,  266 => 61,  263 => 60,  260 => 59,  257 => 58,  254 => 57,  236 => 56,  234 => 55,  231 => 54,  225 => 52,  222 => 51,  215 => 50,  210 => 37,  203 => 32,  200 => 31,  193 => 30,  188 => 23,  182 => 21,  180 => 20,  176 => 19,  171 => 18,  165 => 16,  162 => 15,  155 => 14,  149 => 78,  147 => 50,  143 => 48,  136 => 38,  134 => 30,  131 => 29,  128 => 27,  124 => 25,  121 => 24,  118 => 14,  112 => 12,  110 => 11,  100 => 10,  88 => 6,  81 => 5,  75 => 80,  73 => 5,  62 => 4,  55 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/fieldset/fieldset.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/fieldset/fieldset.html.twig");
    }
}
