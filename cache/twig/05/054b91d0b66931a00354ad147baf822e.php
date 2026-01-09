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

/* forms/fields/taxonomy/taxonomy.html.twig */
class __TwigTemplate_e62ea771d613ae8a97c075302203d679 extends Template
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
        $context["object"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 4);
        // line 5
        $context["taxonomies"] = (((array_key_exists("taxonomies", $context) &&  !(null === $context["taxonomies"]))) ? ($context["taxonomies"]) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "taxonomies", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "taxonomies", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "taxonomies", [], "any", false, false, false, 5)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "data", ["config/site"], "method", false, true, false, 5), "taxonomies", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "data", ["config/site"], "method", false, false, false, 5), "taxonomies", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "data", ["config/site"], "method", false, false, false, 5), "taxonomies", [], "any", false, false, false, 5)) : ([]))))));
        // line 6
        $context["parentname"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 6);
        // line 7
        $context["options"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 7);
        // line 8
        $context["default"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 8);
        // line 9
        yield "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["taxonomies"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 11
            yield "    ";
            $context["field_name"] = ((($context["parentname"] ?? null) . ".") . $context["name"]);
            // line 12
            yield "    ";
            $context["value"] = (((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [($context["field_name"] ?? null)], "method", false, false, false, 12)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", [($context["field_name"] ?? null)], "method", false, false, false, 12)));
            // line 13
            yield "    ";
            $context["value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->arrayFilter((((array_key_exists("value", $context) &&  !(null === $context["value"]))) ? ($context["value"]) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["default"] ?? null), $context["name"], [], "array", true, true, false, 13) &&  !(null === (($_v0 = ($context["default"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["name"]] ?? null) : null)))) ? ((($_v1 = ($context["default"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["name"]] ?? null) : null)) : ([])))));
            // line 14
            yield "    ";
            if ((($tmp = ($context["object"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "        ";
                $context["can_translate"] = (((array_key_exists("can_translate", $context) &&  !(null === $context["can_translate"]))) ? ($context["can_translate"]) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "multilang", [], "any", false, false, false, 15) && CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "hasFlexFeature", ["flex-translate"], "method", false, false, false, 15))));
                // line 16
                yield "        ";
                $context["index"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getFlexDirectory", [], "method", false, false, false, 16), "getIndex", [], "method", false, false, false, 16);
                // line 17
                yield "        ";
                $context["translated"] = (((($tmp = ($context["can_translate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "withTranslated", [CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "language", [], "any", false, false, false, 17)], "method", false, false, false, 17)) : (($context["index"] ?? null)));
                // line 18
                yield "        ";
                $context["sub_taxonomies"] = CoreExtension::getAttribute($this->env, $this->source, ($context["translated"] ?? null), "getDistinctValues", [($context["field_name"] ?? null)], "method", false, false, false, 18);
                // line 19
                yield "    ";
            } else {
                // line 20
                yield "        ";
                $context["sub_taxonomies"] = Twig\Extension\CoreExtension::keys((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "taxonomy", [], "any", false, true, false, 20), "taxonomy", [], "any", false, true, false, 20), $context["name"], [], "any", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "taxonomy", [], "any", false, false, false, 20), "taxonomy", [], "any", false, false, false, 20), $context["name"], [], "any", false, false, false, 20)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "taxonomy", [], "any", false, false, false, 20), "taxonomy", [], "any", false, false, false, 20), $context["name"], [], "any", false, false, false, 20)) : ([])));
                // line 21
                yield "    ";
            }
            // line 22
            yield "    ";
            $context["list"] = array_unique(Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), $context["name"], [], "array", true, true, false, 22) &&  !(null === (($_v2 = ($context["options"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[$context["name"]] ?? null) : null)))) ? ((($_v3 = ($context["options"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[$context["name"]] ?? null) : null)) : ([])), ($context["sub_taxonomies"] ?? null)), ($context["value"] ?? null)));
            // line 23
            yield "
    ";
            // line 25
            yield "    ";
            $context["field"] = ["type" => "select", "classes" => "fancy create", "label" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(),             // line 28
$context["name"])), "name" =>             // line 29
($context["field_name"] ?? null), "multiple" => true, "options" =>             // line 31
($context["list"] ?? null), "style" => CoreExtension::getAttribute($this->env, $this->source,             // line 32
($context["field"] ?? null), "style", [], "any", false, false, false, 32), "selectize" => ["create" => true]];
            // line 37
            yield "
    ";
            // line 38
            yield from $this->load("forms/fields/select/select.html.twig", 38)->unwrap()->yield($context);
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
        unset($context['_seq'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/taxonomy/taxonomy.html.twig";
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
        return array (  137 => 38,  134 => 37,  132 => 32,  131 => 31,  130 => 29,  129 => 28,  127 => 25,  124 => 23,  121 => 22,  118 => 21,  115 => 20,  112 => 19,  109 => 18,  106 => 17,  103 => 16,  100 => 15,  97 => 14,  94 => 13,  91 => 12,  88 => 11,  71 => 10,  68 => 9,  66 => 8,  64 => 7,  62 => 6,  60 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/taxonomy/taxonomy.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/taxonomy/taxonomy.html.twig");
    }
}
