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

/* forms/fields/tabs/tabs.html.twig */
class __TwigTemplate_47a461b892a2c44b6074a3b42b2cad2b extends Template
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
        // line 3
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "admin", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/form.vendor.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 4);
            // line 5
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/form.min.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 5);
        }
        // line 1
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "<div class=\"form-tabs ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "class", [], "any", false, false, false, 9), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 9), "html", null, true);
        yield "\">

  ";
        // line 11
        $context["fields"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->prepareFormFields($context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 11));
        // line 12
        yield "  ";
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["fields"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "    ";
            $context["tabs"] = [];
            // line 14
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 15
                yield "        ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "type", [], "any", false, false, false, 15) == "tab") &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "validate", [], "any", false, false, false, 15), "ignore", [], "any", false, false, false, 15)) && (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "security", [], "any", false, false, false, 15)) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize($this->extensions['Grav\Common\Twig\Extension\GravExtension']->arrayFilter(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "security", [], "any", false, false, false, 15)))))) {
                    // line 16
                    yield "        ";
                    $context["tabs"] = Twig\Extension\CoreExtension::merge(($context["tabs"] ?? null), [$context["tab"]]);
                    // line 17
                    yield "        ";
                }
                // line 18
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "    ";
            $context["count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tabs"] ?? null));
            // line 20
            yield "
    ";
            // line 21
            if ((($context["count"] ?? null) == 0)) {
                // line 22
                yield "        ";
                // line 23
                yield "    ";
            } elseif (((($context["count"] ?? null) == 1) &&  !($context["admin"] ?? null))) {
                // line 24
                yield "        ";
                $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["tabs"] ?? null)), "fields", [], "any", false, false, false, 24);
                // line 25
                yield "        ";
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
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 26
                    yield "            ";
                    $context["value"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 26)], "method", false, false, false, 26)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 26)], "method", false, false, false, 26)))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "toArray", [], "any", false, false, false, 26)));
                    // line 27
                    yield "            ";
                    $context["field_templates"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 27), ($context["field_layout"] ?? null), "text");
                    // line 28
                    yield "            ";
                    yield from $this->load(($context["field_templates"] ?? null), 28)->unwrap()->yield($context);
                    // line 29
                    yield "        ";
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
                unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                yield "    ";
            } else {
                // line 31
                yield "        ";
                $context["tabsKey"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 31) . "-") . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->md5Filter(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::keys(($context["fields"] ?? null)), ":")));
                // line 32
                yield "        ";
                $context["storedValue"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "admin", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonDecodeFilter(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->getCookie("grav-tabs-state"), "{}"))) : ([]));
                // line 33
                yield "        ";
                $context["storedTab"] = CoreExtension::getAttribute($this->env, $this->source, ($context["storedValue"] ?? null), ("tab-" . ($context["tabsKey"] ?? null)), [], "any", false, false, false, 33);
                // line 34
                yield "        ";
                if (Twig\Extension\CoreExtension::testEmpty(($context["storedTab"] ?? null))) {
                    // line 35
                    yield "            ";
                    $context["active"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "params", [], "any", false, true, false, 35), "tab", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "params", [], "any", false, false, false, 35), "tab", [], "any", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "params", [], "any", false, false, false, 35), "tab", [], "any", false, false, false, 35)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "active", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "active", [], "any", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "active", [], "any", false, false, false, 35)) : (1))));
                    // line 36
                    yield "        ";
                }
                // line 37
                yield "
        <div class=\"tabs-nav\">
            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 40
                    yield "                ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "type", [], "any", false, false, false, 40) == "tab") && ((null === CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "condition", [], "any", false, false, false, 40)) || (CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "condition", [], "any", false, false, false, 40) == true)))) {
                        // line 41
                        yield "                <a class=\"tab__link ";
                        yield ((((($context["storedTab"] ?? null) == (($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 41))) || (($context["active"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41)))) ? ("active") : (""));
                        yield "\" data-tabid=\"tab-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["tabsKey"] ?? null) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 41)), "html", null, true);
                        yield "\" data-tabkey=\"tab-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tabsKey"] ?? null), "html", null, true);
                        yield "\" data-scope=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 41)), "html", null, true);
                        yield "\">
                <span>";
                        // line 42
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 42)), "html", null, true);
                        yield "</span>
                ";
                    }
                    // line 44
                    yield "            </a>
        ";
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
                unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "        </div>
        <div class=\"tabs-content\">
            ";
                // line 48
                yield from $this->load("forms/fields/tabs/tabs.html.twig", 48, 1848077360)->unwrap()->yield(CoreExtension::merge($context, ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 48), "fields" => ($context["fields"] ?? null)]));
                // line 56
                yield "        </div>
    ";
            }
        }
        // line 59
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/tabs/tabs.html.twig";
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
        return array (  246 => 59,  241 => 56,  239 => 48,  235 => 46,  220 => 44,  215 => 42,  204 => 41,  201 => 40,  184 => 39,  180 => 37,  177 => 36,  174 => 35,  171 => 34,  168 => 33,  165 => 32,  162 => 31,  159 => 30,  145 => 29,  142 => 28,  139 => 27,  136 => 26,  118 => 25,  115 => 24,  112 => 23,  110 => 22,  108 => 21,  105 => 20,  102 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  82 => 14,  79 => 13,  76 => 12,  74 => 11,  66 => 9,  59 => 8,  54 => 1,  51 => 5,  49 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/tabs/tabs.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/fields/tabs/tabs.html.twig");
    }
}


/* forms/fields/tabs/tabs.html.twig */
class __TwigTemplate_47a461b892a2c44b6074a3b42b2cad2b___1848077360 extends Template
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
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 48
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/default/fields.html.twig", 48);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_open(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "                    <div id=\"tab-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["tabsKey"] ?? null) . "-") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 50)), "html", null, true);
        yield "\" class=\"tab__content ";
        yield ((((($context["storedTab"] ?? null) == (($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 50))) || (($context["active"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 50)))) ? ("active") : (""));
        yield "\">
                ";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "                    </div>
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/tabs/tabs.html.twig";
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
        return array (  341 => 53,  334 => 52,  324 => 50,  317 => 49,  306 => 48,  246 => 59,  241 => 56,  239 => 48,  235 => 46,  220 => 44,  215 => 42,  204 => 41,  201 => 40,  184 => 39,  180 => 37,  177 => 36,  174 => 35,  171 => 34,  168 => 33,  165 => 32,  162 => 31,  159 => 30,  145 => 29,  142 => 28,  139 => 27,  136 => 26,  118 => 25,  115 => 24,  112 => 23,  110 => 22,  108 => 21,  105 => 20,  102 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  82 => 14,  79 => 13,  76 => 12,  74 => 11,  66 => 9,  59 => 8,  54 => 1,  51 => 5,  49 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/tabs/tabs.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/fields/tabs/tabs.html.twig");
    }
}
