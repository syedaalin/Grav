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

/* forms/default/form.html.twig */
class __TwigTemplate_90ad11135417a3f6dda94bbe96603f42 extends Template
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
            'xhr' => [$this, 'block_xhr'],
            'form_classes' => [$this, 'block_form_classes'],
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_fields' => [$this, 'block_inner_markup_fields'],
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'field' => [$this, 'block_field'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('xhr', $context, $blocks);
        // line 2
        $context["form"] = (((array_key_exists("form", $context) &&  !(null === $context["form"]))) ? ($context["form"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "session", [], "any", false, false, false, 2), "getFlashObject", ["form"], "method", false, false, false, 2)));
        // line 3
        $context["layout"] = (((array_key_exists("layout", $context) &&  !(null === $context["layout"]))) ? ($context["layout"]) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 3)) : ("default"))));
        // line 4
        $context["field_layout"] = (((array_key_exists("field_layout", $context) &&  !(null === $context["field_layout"]))) ? ($context["field_layout"]) : (($context["layout"] ?? null)));
        // line 5
        yield "
<div id=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        yield "-wrapper\" class=\"form-wrapper\">
";
        // line 8
        yield from $this->load("partials/form-messages.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "
";
        // line 10
        $context["scope"] = (((($tmp = ((($context["scope"] ?? null)) ? ($context["scope"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "scope", [], "any", true, true, false, 10)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "scope", [], "any", false, false, false, 10)) : ("data."));
        // line 11
        $context["multipart"] = "";
        // line 12
        $context["blueprints"] = (((array_key_exists("blueprints", $context) &&  !(null === $context["blueprints"]))) ? ($context["blueprints"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "method", false, false, false, 12)));
        // line 13
        $context["method"] = Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "method", [], "any", false, false, false, 13)), "POST");
        // line 14
        $context["client_side_validation"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_side_validation", [], "any", false, false, false, 14))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_side_validation", [], "any", false, false, false, 14)) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 14), "form", [], "any", false, false, false, 14), "client_side_validation", [], "any", false, false, false, 14), true)));
        // line 15
        $context["inline_errors"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 15)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 15), "form", [], "any", false, false, false, 15), "inline_errors", [false], "method", false, false, false, 15)));
        // line 16
        yield "
";
        // line 17
        $context["data"] = (((array_key_exists("data", $context) &&  !(null === $context["data"]))) ? ($context["data"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "data", [], "any", false, false, false, 17)));
        // line 18
        $context["context"] = (((array_key_exists("context", $context) &&  !(null === $context["context"]))) ? ($context["context"]) : (($context["data"] ?? null)));
        // line 19
        yield "
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 21
            yield "    ";
            if (((($context["method"] ?? null) == "POST") && (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 21) == "file"))) {
                // line 22
                yield "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 23
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
";
        // line 26
        $context["action"] = (((array_key_exists("action", $context) &&  !(null === $context["action"]))) ? ($context["action"]) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "action", [], "any", false, false, false, 26)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "action", [], "any", false, false, false, 26)) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, false, 26) . CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "params", [], "any", false, false, false, 26))))));
        // line 27
        $context["action"] = ((((is_string($_v0 = ($context["action"] ?? null)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = ($context["action"] ?? null)) && is_string($_v3 = "#") && str_starts_with($_v2, $_v3)))) ? (($context["action"] ?? null)) : ((($context["base_url"] ?? null) . ($context["action"] ?? null))));
        // line 28
        $context["action"] = Twig\Extension\CoreExtension::trim(($context["action"] ?? null), "/", "right");
        // line 29
        yield "
";
        // line 30
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 31
            yield "    ";
            $context["action"] = (($context["base_url_relative"] ?? null) . "/");
        }
        // line 33
        yield "
";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "keep_alive", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "browser", [], "any", false, false, false, 35), "browser", [], "any", false, false, false, 35) == "msie") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "browser", [], "any", false, false, false, 35), "version", [], "any", false, false, false, 35) < 12))) {
                // line 36
                yield "        ";
                CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/object.assign.polyfill.js"], "method", false, false, false, 36);
                // line 37
                yield "    ";
            }
            // line 38
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/form.vendor.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 38);
            // line 39
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/form.min.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 39);
        }
        // line 41
        yield "
";
        // line 42
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addInlineJs", [(((((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["grav"] ?? null), "route", [], "any", false, false, false, 45), "withoutParams", [], "method", false, false, false, 45), "toString", [true], "method", false, false, false, 45)) . "',
        current_params: ") . json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["grav"] ?? null), "route", [], "any", false, false, false, 46), "params", [], "any", false, false, false, 46))) . ",
        param_sep: '") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["config"] ?? null), "system", [], "any", false, false, false, 47), "param_sep", [], "any", false, false, false, 47)) . "',
        base_url_relative: '") .         // line 48
($context["base_url_relative"] ?? null)) . "',
        form_nonce: '") . CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["form"] ?? null), "getNonce", [], "method", false, false, false, 49)) . "',
        session_timeout: ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["config"] ?? null), "system", [], "any", false, false, false, 50), "session", [], "any", false, false, false, 50), "timeout", [], "any", false, false, false, 50)) . "
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
"), ["group" => "bottom", "position" => "before", "priority" => 100]], "method", false, false, false, 42);
        // line 54
        yield "
";
        // line 56
        $context["override_form_classes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 57
            yield "  ";
            yield from $this->unwrap()->yieldBlock('form_classes', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "
";
        // line 62
        $context["override_inner_markup_fields_start"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 63
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_fields_start', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "
";
        // line 66
        $context["override_inner_markup_fields_end"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 67
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_fields_end', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "
";
        // line 70
        $context["override_inner_markup_fields"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 71
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_fields', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "
";
        // line 88
        $context["override_inner_markup_buttons_start"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 89
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_buttons_start', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        yield "
";
        // line 94
        $context["override_inner_markup_buttons_end"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 95
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_buttons_end', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        yield "
";
        // line 101
        yield from $this->load("forms/default/form.html.twig", 101, 196630501)->unwrap()->yield($context);
        // line 205
        yield "
";
        // line 206
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "forms", [], "any", false, false, false, 206), "dropzone", [], "any", false, false, false, 206), "enabled", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 207
            yield "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 208
            yield from $this->load("forms/dropzone/template.html.twig", 208)->unwrap()->yield($context);
            // line 209
            yield "</div>
";
        }
        // line 211
        yield "</div>";
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_xhr(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_outer_classes"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "classes", [], "any", false, false, false, 58), "html", null, true);
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_fields_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_fields_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 72));
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
            // line 73
            yield "      ";
            $context["field"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->prepareFormField($context, $context["field"], $context["field_name"]);
            // line 74
            yield "      ";
            if ((($tmp = $context["field"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "        ";
                $context["value"] = (((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 75)], "method", false, false, false, 75)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 75)], "method", false, false, false, 75)));
                // line 76
                yield "        ";
                $context["field_templates"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 76), ($context["field_layout"] ?? null));
                // line 77
                yield "
        ";
                // line 78
                yield from $this->unwrap()->yieldBlock('inner_markup_field_open', $context, $blocks);
                // line 79
                yield "        ";
                yield from $this->unwrap()->yieldBlock('field', $context, $blocks);
                // line 82
                yield "        ";
                yield from $this->unwrap()->yieldBlock('inner_markup_field_close', $context, $blocks);
                // line 83
                yield "      ";
            }
            // line 84
            yield "    ";
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
        // line 85
        yield "  ";
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_open(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 80
        yield "          ";
        try {
            $_v4 = $this->load(($context["field_templates"] ?? null), 80);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v4 = null;
        }
        if ($_v4) {
            yield from $_v4->unwrap()->yield($context);
        }
        // line 81
        yield "        ";
        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_buttons_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        yield "  <div class=\"";
        yield ((($context["form_button_outer_classes"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["form_button_outer_classes"], "html", null, true)) : ("buttons"));
        yield "\">
  ";
        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_buttons_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 96
        yield "  </div>
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/form.html.twig";
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
        return array (  435 => 96,  428 => 95,  420 => 90,  413 => 89,  403 => 82,  398 => 81,  387 => 80,  380 => 79,  370 => 78,  365 => 85,  351 => 84,  348 => 83,  345 => 82,  342 => 79,  340 => 78,  337 => 77,  334 => 76,  331 => 75,  328 => 74,  325 => 73,  307 => 72,  300 => 71,  290 => 67,  280 => 63,  273 => 58,  266 => 57,  256 => 1,  251 => 211,  247 => 209,  245 => 208,  242 => 207,  240 => 206,  237 => 205,  235 => 101,  232 => 99,  227 => 95,  225 => 94,  222 => 93,  217 => 89,  215 => 88,  212 => 87,  207 => 71,  205 => 70,  202 => 69,  197 => 67,  195 => 66,  192 => 65,  187 => 63,  185 => 62,  182 => 61,  177 => 57,  175 => 56,  172 => 54,  167 => 50,  165 => 49,  163 => 48,  161 => 47,  159 => 46,  157 => 45,  153 => 42,  150 => 41,  146 => 39,  143 => 38,  140 => 37,  137 => 36,  134 => 35,  132 => 34,  129 => 33,  125 => 31,  123 => 30,  120 => 29,  118 => 28,  116 => 27,  114 => 26,  111 => 25,  104 => 23,  101 => 22,  98 => 21,  94 => 20,  91 => 19,  89 => 18,  87 => 17,  84 => 16,  82 => 15,  80 => 14,  78 => 13,  76 => 12,  74 => 11,  72 => 10,  69 => 9,  67 => 8,  63 => 6,  60 => 5,  58 => 4,  56 => 3,  54 => 2,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/default/form.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/default/form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_90ad11135417a3f6dda94bbe96603f42___196630501 extends Template
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
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_form_custom_attributes' => [$this, 'block_embed_form_custom_attributes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 101
        return "forms/layouts/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/layouts/form.html.twig", 101);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 103
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_core(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 104
        yield "    name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 104), "html", null, true);
        yield "\"
    action=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield "\"
    method=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
        yield "\"";
        yield ($context["multipart"] ?? null);
        yield "
    id=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 107), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 107)))) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 107)))), "html", null, true);
        yield "\"
    ";
        // line 108
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "novalidate", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "novalidate";
        }
        // line 109
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "xhr_submit", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-xhr-enabled=\"true\"";
        }
        // line 110
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "keep_alive", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-grav-keepalive=\"true\"";
        }
        // line 111
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attributes", [], "any", true, true, false, 111)) {
            // line 112
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attributes", [], "any", false, false, false, 112));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 113
                yield "        ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 114
                    yield "          ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 114), "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 114), "html_attr");
                    yield "\"
        ";
                } else {
                    // line 116
                    yield "          ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html_attr");
                    yield "\"
        ";
                }
                // line 118
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "    ";
        }
        // line 120
        yield "  ";
        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 123
        yield "class=\"";
        yield from $this->yieldParentBlock("embed_form_classes", $context, $blocks);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(($context["override_form_classes"] ?? null)), "html", null, true);
        yield "\"";
        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_custom_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 127
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "form", [], "any", false, false, false, 127), "attributes", [], "any", false, false, false, 127));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 128
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]);
            yield "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "  ";
        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 133
        yield "    ";
        yield ($context["override_inner_markup_fields_start"] ?? null);
        yield "
    ";
        // line 134
        yield ($context["override_inner_markup_fields"] ?? null);
        yield "

    ";
        // line 136
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", true, true, false, 136) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 136)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 136)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("formname", ($context["field_layout"] ?? null), "hidden"), 137)->unwrap()->yield($context);
            // line 138
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("formtask", ($context["field_layout"] ?? null), "hidden"), 138)->unwrap()->yield($context);
            // line 139
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("uniqueid", ($context["field_layout"] ?? null), "hidden"), 139)->unwrap()->yield($context);
            // line 140
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("nonce", ($context["field_layout"] ?? null), "hidden"), 140)->unwrap()->yield($context);
            // line 141
            yield "    ";
        }
        // line 142
        yield "
    ";
        // line 143
        yield ($context["override_inner_markup_fields_end"] ?? null);
        yield "
  ";
        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_buttons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 147
        yield "    ";
        yield ($context["override_inner_markup_buttons_start"] ?? null);
        yield "

    ";
        // line 149
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", true, true, false, 149) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 149)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 149)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 150
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "buttons", [], "any", false, false, false, 150));
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 151
                yield "      ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, $context["button"], "access", [], "any", false, false, false, 151) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "access", [], "any", false, false, false, 151)))) {
                    // line 152
                    yield "      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "outerclasses", [], "any", true, true, false, 152)) {
                        yield "<div class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "outerclasses", [], "any", false, false, false, 152), "html", null, true);
                        yield "\">";
                    }
                    // line 153
                    yield "
      ";
                    // line 154
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 155
                        yield "      ";
                        $context["button_url"] = (((is_string($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 155)) && is_string($_v6 = "http") && str_starts_with($_v5, $_v6))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 155)) : ((($context["base_url"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 155))));
                        // line 156
                        yield "      ";
                    }
                    // line 157
                    yield "
      ";
                    // line 158
                    yield from $this->load("forms/default/form.html.twig", 158, 1689272399)->unwrap()->yield($context);
                    // line 195
                    yield "
      ";
                    // line 196
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "outerclasses", [], "any", true, true, false, 196)) {
                        yield "</div>";
                    }
                    // line 197
                    yield "      ";
                }
                // line 198
                yield "    ";
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
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            yield "    ";
        }
        // line 200
        yield "
    ";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["override_inner_markup_buttons_end"] ?? null), "html", null, true);
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/form.html.twig";
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
        return array (  767 => 201,  764 => 200,  761 => 199,  747 => 198,  744 => 197,  740 => 196,  737 => 195,  735 => 158,  732 => 157,  729 => 156,  726 => 155,  724 => 154,  721 => 153,  714 => 152,  711 => 151,  693 => 150,  691 => 149,  685 => 147,  678 => 146,  671 => 143,  668 => 142,  665 => 141,  662 => 140,  659 => 139,  656 => 138,  653 => 137,  651 => 136,  646 => 134,  641 => 133,  634 => 132,  629 => 130,  618 => 128,  613 => 127,  606 => 126,  597 => 123,  590 => 122,  585 => 120,  582 => 119,  576 => 118,  568 => 116,  560 => 114,  557 => 113,  552 => 112,  549 => 111,  544 => 110,  539 => 109,  535 => 108,  531 => 107,  525 => 106,  521 => 105,  516 => 104,  509 => 103,  498 => 101,  435 => 96,  428 => 95,  420 => 90,  413 => 89,  403 => 82,  398 => 81,  387 => 80,  380 => 79,  370 => 78,  365 => 85,  351 => 84,  348 => 83,  345 => 82,  342 => 79,  340 => 78,  337 => 77,  334 => 76,  331 => 75,  328 => 74,  325 => 73,  307 => 72,  300 => 71,  290 => 67,  280 => 63,  273 => 58,  266 => 57,  256 => 1,  251 => 211,  247 => 209,  245 => 208,  242 => 207,  240 => 206,  237 => 205,  235 => 101,  232 => 99,  227 => 95,  225 => 94,  222 => 93,  217 => 89,  215 => 88,  212 => 87,  207 => 71,  205 => 70,  202 => 69,  197 => 67,  195 => 66,  192 => 65,  187 => 63,  185 => 62,  182 => 61,  177 => 57,  175 => 56,  172 => 54,  167 => 50,  165 => 49,  163 => 48,  161 => 47,  159 => 46,  157 => 45,  153 => 42,  150 => 41,  146 => 39,  143 => 38,  140 => 37,  137 => 36,  134 => 35,  132 => 34,  129 => 33,  125 => 31,  123 => 30,  120 => 29,  118 => 28,  116 => 27,  114 => 26,  111 => 25,  104 => 23,  101 => 22,  98 => 21,  94 => 20,  91 => 19,  89 => 18,  87 => 17,  84 => 16,  82 => 15,  80 => 14,  78 => 13,  76 => 12,  74 => 11,  72 => 10,  69 => 9,  67 => 8,  63 => 6,  60 => 5,  58 => 4,  56 => 3,  54 => 2,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/default/form.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/default/form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_90ad11135417a3f6dda94bbe96603f42___1689272399 extends Template
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
            'embed_button_core' => [$this, 'block_embed_button_core'],
            'embed_button_classes' => [$this, 'block_embed_button_classes'],
            'button_classes' => [$this, 'block_button_classes'],
            'embed_button_content' => [$this, 'block_embed_button_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 158
        return "forms/layouts/button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/layouts/button.html.twig", 158);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_core(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 160
        yield "          ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 160), "html", null, true);
            yield "\"";
        }
        // line 161
        yield "          ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "disabled", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled=\"disabled\"";
        }
        // line 162
        yield "          ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "name", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "            name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "name", [], "any", false, false, false, 163), "html", null, true);
            yield "\"
          ";
        } else {
            // line 165
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "task", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "name=\"task\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "task", [], "any", false, false, false, 165), "html", null, true);
                yield "\"";
            }
            // line 166
            yield "          ";
        }
        // line 167
        yield "          type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", true, true, false, 167)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", false, false, false, 167), "submit")) : ("submit")), "html", null, true);
        yield "\"
          ";
        // line 168
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "attributes", [], "any", true, true, false, 168)) {
            // line 169
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "attributes", [], "any", false, false, false, 169));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 170
                yield "              ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 171
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 171), "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 171), "html_attr");
                    yield "\"
              ";
                } else {
                    // line 173
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html_attr");
                    yield "\"
              ";
                }
                // line 175
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            yield "          ";
        }
        // line 177
        yield "        ";
        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 180
        yield "          ";
        yield from $this->unwrap()->yieldBlock('button_classes', $context, $blocks);
        // line 183
        yield "        ";
        yield from [];
    }

    // line 180
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 181
        yield "            class=\"";
        yield ((($context["form_button_classes"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["form_button_classes"], "html", null, true)) : ("button"));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "classes", [], "any", false, false, false, 181), "html", null, true);
        yield "\"
          ";
        yield from [];
    }

    // line 185
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 186
        $context["button_value"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "value", [], "any", false, false, false, 186)), "Submit");
        // line 187
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "html", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 188
            yield Twig\Extension\CoreExtension::trim(($context["button_value"] ?? null));
        } else {
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(($context["button_value"] ?? null)));
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/form.html.twig";
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
        return array (  970 => 190,  967 => 188,  965 => 187,  963 => 186,  956 => 185,  946 => 181,  939 => 180,  934 => 183,  931 => 180,  924 => 179,  919 => 177,  916 => 176,  910 => 175,  902 => 173,  894 => 171,  891 => 170,  886 => 169,  884 => 168,  879 => 167,  876 => 166,  869 => 165,  863 => 163,  860 => 162,  855 => 161,  848 => 160,  841 => 159,  830 => 158,  767 => 201,  764 => 200,  761 => 199,  747 => 198,  744 => 197,  740 => 196,  737 => 195,  735 => 158,  732 => 157,  729 => 156,  726 => 155,  724 => 154,  721 => 153,  714 => 152,  711 => 151,  693 => 150,  691 => 149,  685 => 147,  678 => 146,  671 => 143,  668 => 142,  665 => 141,  662 => 140,  659 => 139,  656 => 138,  653 => 137,  651 => 136,  646 => 134,  641 => 133,  634 => 132,  629 => 130,  618 => 128,  613 => 127,  606 => 126,  597 => 123,  590 => 122,  585 => 120,  582 => 119,  576 => 118,  568 => 116,  560 => 114,  557 => 113,  552 => 112,  549 => 111,  544 => 110,  539 => 109,  535 => 108,  531 => 107,  525 => 106,  521 => 105,  516 => 104,  509 => 103,  498 => 101,  435 => 96,  428 => 95,  420 => 90,  413 => 89,  403 => 82,  398 => 81,  387 => 80,  380 => 79,  370 => 78,  365 => 85,  351 => 84,  348 => 83,  345 => 82,  342 => 79,  340 => 78,  337 => 77,  334 => 76,  331 => 75,  328 => 74,  325 => 73,  307 => 72,  300 => 71,  290 => 67,  280 => 63,  273 => 58,  266 => 57,  256 => 1,  251 => 211,  247 => 209,  245 => 208,  242 => 207,  240 => 206,  237 => 205,  235 => 101,  232 => 99,  227 => 95,  225 => 94,  222 => 93,  217 => 89,  215 => 88,  212 => 87,  207 => 71,  205 => 70,  202 => 69,  197 => 67,  195 => 66,  192 => 65,  187 => 63,  185 => 62,  182 => 61,  177 => 57,  175 => 56,  172 => 54,  167 => 50,  165 => 49,  163 => 48,  161 => 47,  159 => 46,  157 => 45,  153 => 42,  150 => 41,  146 => 39,  143 => 38,  140 => 37,  137 => 36,  134 => 35,  132 => 34,  129 => 33,  125 => 31,  123 => 30,  120 => 29,  118 => 28,  116 => 27,  114 => 26,  111 => 25,  104 => 23,  101 => 22,  98 => 21,  94 => 20,  91 => 19,  89 => 18,  87 => 17,  84 => 16,  82 => 15,  80 => 14,  78 => 13,  76 => 12,  74 => 11,  72 => 10,  69 => 9,  67 => 8,  63 => 6,  60 => 5,  58 => 4,  56 => 3,  54 => 2,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/default/form.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/default/form.html.twig");
    }
}
