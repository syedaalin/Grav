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

/* partials/blueprints.html.twig */
class __TwigTemplate_3ea7d55969ae44b5b0703af71128022e extends Template
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
        $context["blueprints"] = (((array_key_exists("blueprints", $context) &&  !(null === $context["blueprints"]))) ? ($context["blueprints"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "any", false, false, false, 1)));
        // line 2
        $context["data"] = (((array_key_exists("data", $context) &&  !(null === $context["data"]))) ? ($context["data"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "data", [], "any", false, false, false, 2)));
        // line 3
        $context["form_id"] = (((array_key_exists("form_id", $context) &&  !(null === $context["form_id"]))) ? ($context["form_id"]) : ("blueprints"));
        // line 4
        $context["scope"] = ((($context["scope"] ?? null)) ? ($context["scope"]) : ("data."));
        // line 5
        $context["field_layout"] = "admin";
        // line 6
        yield "
";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "findFormFields", ["file", CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "fields", [], "any", false, false, false, 7)], "method", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    ";
            $context["multipart"] = " enctype=\"multipart/form-data\"";
        }
        // line 10
        yield "
<form ";
        // line 11
        if ((($tmp = ($context["form_action"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_action"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
        yield "\" method=\"post\" data-grav-form=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
        yield "\" ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "novalidate", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "novalidate";
        }
        yield " data-grav-keepalive=\"true\"";
        yield ($context["multipart"] ?? null);
        yield ">
    ";
        // line 12
        yield from $this->load("partials/blueprints.html.twig", 12, 917512092)->unwrap()->yield(CoreExtension::merge($context, ["name" => null, "fields" => CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "fields", [], "any", false, false, false, 12)]));
        // line 16
        yield "
    ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "extra", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "extra", [], "any", false, false, false, 18));
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
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 19
                yield "        ";
                if (!CoreExtension::inFilter($context["name"], ["_json", "task", "admin-nonce"])) {
                    // line 20
                    yield "            ";
                    $context["field"] = ["name" => ("_json." . $context["name"])];
                    // line 21
                    yield "            ";
                    $context["value"] = json_encode($context["value"]);
                    // line 22
                    yield "            ";
                    yield from $this->load("forms/fields/hidden/hidden.html.twig", 22)->unwrap()->yield($context);
                    // line 23
                    yield "        ";
                }
                // line 24
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
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "    ";
        }
        // line 26
        yield "
    ";
        // line 27
        if ((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "        ";
            yield from $this->load("forms/fields/formname/formname.html.twig", 28)->unwrap()->yield($context);
            // line 29
            yield "        ";
            yield from $this->load("forms/fields/uniqueid/uniqueid.html.twig", 29)->unwrap()->yield($context);
            // line 30
            yield "        ";
            yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", false, false, false, 30));
            yield "
    ";
        } else {
            // line 32
            yield "        ";
            yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc("admin-form", "admin-nonce");
            yield "
    ";
        }
        // line 34
        yield "</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/blueprints.html.twig";
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
        return array (  162 => 34,  156 => 32,  150 => 30,  147 => 29,  144 => 28,  142 => 27,  139 => 26,  136 => 25,  122 => 24,  119 => 23,  116 => 22,  113 => 21,  110 => 20,  107 => 19,  89 => 18,  87 => 17,  84 => 16,  82 => 12,  64 => 11,  61 => 10,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/blueprints.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/blueprints.html.twig");
    }
}


/* partials/blueprints.html.twig */
class __TwigTemplate_3ea7d55969ae44b5b0703af71128022e___917512092 extends Template
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
        // line 12
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/default/fields.html.twig", 12);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_open(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "<div class=\"block block-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 13), "html", null, true);
        yield "\">";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/blueprints.html.twig";
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
        return array (  246 => 14,  233 => 13,  222 => 12,  162 => 34,  156 => 32,  150 => 30,  147 => 29,  144 => 28,  142 => 27,  139 => 26,  136 => 25,  122 => 24,  119 => 23,  116 => 22,  113 => 21,  110 => 20,  107 => 19,  89 => 18,  87 => 17,  84 => 16,  82 => 12,  64 => 11,  61 => 10,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/blueprints.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/blueprints.html.twig");
    }
}
