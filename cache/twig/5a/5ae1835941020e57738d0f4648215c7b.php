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

/* forms/fields/order/order.html.twig */
class __TwigTemplate_4b90b56b90133b4a9e242c7de26a82e3 extends Template
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
        $context["value"] = (((null === ($context["value"] ?? null))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 3)) : (($context["value"] ?? null)));
        // line 4
        if ((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            $context["siblings"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 5), "parent", [], "any", false, false, false, 5), "children", [], "any", false, false, false, 5), "collection", [], "any", false, false, false, 5);
            // line 6
            $context["canOrder"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 6), "order", [], "any", false, false, false, 6);
            // line 7
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 7), "exists", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 8
                CoreExtension::getAttribute($this->env, $this->source, ($context["siblings"] ?? null), "add", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "object", [], "any", false, false, false, 8)], "method", false, false, false, 8);
            }
        } else {
            // line 11
            CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "enablePages", [], "method", false, false, false, 11);
            // line 12
            $context["siblings"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "parent", [], "any", false, false, false, 12), "children", [], "any", false, false, false, 12);
            // line 13
            $context["canOrder"] = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "order", [], "any", false, false, false, 13);
        }
        // line 15
        $context["vertical"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 15) == "vertical");
        // line 1
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "<div class=\"form-field grid pure-g";
        if ((($tmp = ($context["vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " vertical";
        }
        yield "\">
    <div class=\"form-label";
        // line 19
        if ((($tmp =  !($context["vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " block size-1-3 pure-u-1-3";
        }
        yield "\">
        <label>
            ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 22)), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 22)), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 24
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 24)), "html", null, true);
            yield "
            ";
        }
        // line 26
        yield "            ";
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 26), "required", [], "any", false, false, false, 26), ["on", "true", 1])) ? ("<span class=\"required\">*</span>") : (""));
        yield "
        </label>
    </div>
    <div class=\"form-data";
        // line 29
        if ((($tmp =  !($context["vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " block size-2-3 pure-u-2-3";
        }
        yield "\">
        <div class=\"form-order-wrapper ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 30), "html", null, true);
        yield "\">

            <input
                type=\"hidden\"
                data-order
                ";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 35) || ($context["isDisabledToggleable"] ?? null))) {
            yield "disabled=\"disabled\"";
        }
        // line 36
        yield "                name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 36))), "html", null, true);
        yield "\"
                value=\"\" />
            ";
        // line 38
        if ((($tmp =  !($context["canOrder"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "                <div class=\"notice\">";
            yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX");
            yield "</div>
            ";
        }
        // line 41
        yield "
            ";
        // line 42
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["siblings"] ?? null)) < 200)) {
            // line 43
            yield "                ";
            $context["sortable_count"] = 0;
            // line 44
            yield "                <ul id=\"ordering\" class=\"orderable ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 44), "html", null, true);
            yield "\">
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["siblings"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["page"], "order", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "                    <li class=\"drag-handle\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 47), "html", null, true);
                    yield "\" ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 47) == CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "slug", [], "any", false, false, false, 47))) ? ("data-active-id") : (""));
                    yield "><span class=\"page-order\">";
                    yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->intFilter(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "order", [], "any", false, false, false, 47));
                    yield ".</span> ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 47), "html", null, true)) : ("NEW"));
                    yield " <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->getPageUrl($context["page"]), "html", null, true);
                    yield "\"><i class=\"fa fa-external-link\"></i></a></li>
                    ";
                    // line 48
                    $context["sortable_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48);
                    // line 49
                    yield "                    ";
                }
                // line 50
                yield "                ";
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
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                </ul>
                ";
            // line 52
            if ((($context["sortable_count"] ?? null) < Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["siblings"] ?? null)))) {
                // line 53
                yield "                <label>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.UNSORTABLE_PAGES"), "html", null, true);
                yield "</label>
                <ul class=\"orderable disabled\">
                    ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["siblings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 56
                    yield "                        ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["page"], "order", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 57
                        yield "                        <li ";
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 57) == CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "slug", [], "any", false, false, false, 57))) ? ("data-active-id") : (""));
                        yield ">";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 57)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 57), "html", null, true)) : ("NEW"));
                        yield " <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->getPageUrl($context["page"]), "html", null, true);
                        yield "\"><i class=\"fa fa-external-link\"></i></a></li>
                        ";
                    }
                    // line 59
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                yield "                </ul>
                ";
            }
            // line 62
            yield "            ";
        } else {
            // line 63
            yield "                <div class=\"notice\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS"), "html", null, true);
            yield "</div>
            ";
        }
        // line 65
        yield "        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/order/order.html.twig";
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
        return array (  263 => 65,  257 => 63,  254 => 62,  250 => 60,  244 => 59,  234 => 57,  231 => 56,  227 => 55,  221 => 53,  219 => 52,  216 => 51,  202 => 50,  199 => 49,  197 => 48,  184 => 47,  181 => 46,  164 => 45,  159 => 44,  156 => 43,  154 => 42,  151 => 41,  145 => 39,  143 => 38,  137 => 36,  133 => 35,  125 => 30,  119 => 29,  112 => 26,  106 => 24,  98 => 22,  96 => 21,  89 => 19,  82 => 18,  75 => 17,  70 => 1,  68 => 15,  65 => 13,  63 => 12,  61 => 11,  57 => 8,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/order/order.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/order/order.html.twig");
    }
}
