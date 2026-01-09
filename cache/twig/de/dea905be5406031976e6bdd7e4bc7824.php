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

/* forms/fields/editor/editor.html.twig */
class __TwigTemplate_ea35d8b77fc19b2aea3e4c2d8592228a extends Template
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
            'label' => [$this, 'block_label'],
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
        $context["whitelabel"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 3), "admin", [], "any", false, false, false, 3), "whitelabel", [], "any", false, false, false, 3);
        // line 4
        $context["theme"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_theme", [], "any", true, true, false, 4) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_theme", [], "any", false, false, false, 4)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_theme", [], "any", false, false, false, 4)) : ("paper.css"));
        // line 5
        $context["fontsize"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_fontsize", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_fontsize", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["whitelabel"] ?? null), "codemirror_fontsize", [], "any", false, false, false, 5)) : ("lg"));
        // line 7
        $context["value"] = (((array_key_exists("value", $context) &&  !(null === $context["value"]))) ? ($context["value"]) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 7))));
        // line 8
        if ((($tmp =  !($context["codemirrorOptions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            $context["codemirrorOptions"] = Twig\Extension\CoreExtension::merge(["mode" => "gfm", "theme" => ($context["theme"] ?? null), "ignore" => ["code", "preview"], "font" => "mono"], ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "codemirror", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "codemirror", [], "any", false, false, false, 9), [])) : ([])));
        }
        // line 12
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "theme", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [(((($context["theme_url"] ?? null) . "/css/codemirror/themes/") . CoreExtension::getAttribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "theme", [], "any", false, false, false, 13)) . ".css")], "method", false, false, false, 13);
        }
        // line 1
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    ";
        yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
        // line 28
        yield "    <div class=\"form-field ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 28), "")) : ("")), "html", null, true);
        yield "\">
        <div class=\"form-data grav-editor\">
            <div class=\"grav-editor-content is-active fontsize-";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "font_size", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "font_size", [], "any", false, false, false, 30), ($context["fontsize"] ?? null))) : (($context["fontsize"] ?? null))), "html", null, true);
        yield " fontfamily-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "font", [], "any", false, false, false, 30), "html", null, true);
        yield "\">
                ";
        // line 31
        $context["input_value"] = ((is_iterable(($context["value"] ?? null))) ? (Twig\Extension\CoreExtension::join(($context["value"] ?? null), "
")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringFilter(($context["value"] ?? null))));
        // line 32
        yield "                <textarea
                    data-grav-editor=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["codemirror" => ($context["codemirrorOptions"] ?? null)]), "html_attr");
        yield "\"
                    data-grav-editor-mode=\"editor\"
                    name=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 35))), "html", null, true);
        yield "\"
                    ";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", true, true, false, 36)) {
            yield "class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 36), "html", null, true);
            yield "\" ";
        }
        // line 37
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 37)) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true);
            yield "\" ";
        }
        // line 38
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 38)) {
            yield "style=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 38), "html", null, true);
            yield "\" ";
        }
        // line 39
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 39) || ($context["isDisabledToggleable"] ?? null))) {
            yield "disabled=\"disabled\"";
        }
        // line 40
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 40)), "html", null, true);
            yield "\"";
        }
        // line 41
        yield "                    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 41), ["on", "true", 1])) {
            yield "autofocus=\"autofocus\"";
        }
        // line 42
        yield "                    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 42), ["on", "true", 1])) {
            yield "novalidate=\"novalidate\"";
        }
        // line 43
        yield "                    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "readonly", [], "any", false, false, false, 43), ["on", "true", 1])) {
            yield "readonly=\"readonly\"";
        }
        // line 44
        yield "                    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 44), "required", [], "any", false, false, false, 44), ["on", "true", 1])) {
            yield "required=\"required\"";
        }
        // line 45
        yield "                    ";
        if (!CoreExtension::inFilter("preview", CoreExtension::getAttribute($this->env, $this->source, ($context["codemirrorOptions"] ?? null), "ignore", [], "any", false, false, false, 45))) {
            yield "data-grav-urlpreview=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true);
            yield "/media/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 45), "/"), "html", null, true);
            yield ".json\"";
        }
        // line 46
        yield "                >";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_value"] ?? null), "html", null, true);
        yield "</textarea>
            </div>
            ";
        // line 48
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "resizer", [], "any", true, true, false, 48) || !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "resizer", [], "any", false, false, false, 48), ["off", "false", 0]))) {
            yield "<div class=\"grav-editor-resizer\"></div>";
        }
        // line 49
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                <div class=\"form-extra-wrapper ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 50), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 50), "html", null, true);
            yield "\">
                    <span class=\"form-description\">
                        ";
            // line 52
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "                            ";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 53)), false);
                yield "
                        ";
            } else {
                // line 55
                yield "                            ";
                yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 55));
                yield "
                        ";
            }
            // line 57
            yield "                    </span>
                </div>
            ";
        }
        // line 60
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "                ";
                $context["hint"] = (("data-hint=\"" . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 20))) . "\"");
                // line 21
                yield "            ";
            }
            // line 22
            yield "            <div class=\"form-label form-field hint--bottom ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 22), "html", null, true);
            yield "\" ";
            yield ($context["hint"] ?? null);
            yield ">
                ";
            // line 23
            yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 23));
            yield "
                ";
            // line 24
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 24), "required", [], "any", false, false, false, 24), ["on", "true", 1])) ? ("<span class=\"required\">*</span>") : (""));
            yield "
            </div>
        ";
        }
        // line 27
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/editor/editor.html.twig";
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
        return array (  252 => 27,  246 => 24,  242 => 23,  235 => 22,  232 => 21,  229 => 20,  226 => 19,  223 => 18,  216 => 17,  209 => 60,  204 => 57,  198 => 55,  192 => 53,  190 => 52,  182 => 50,  179 => 49,  175 => 48,  169 => 46,  160 => 45,  155 => 44,  150 => 43,  145 => 42,  140 => 41,  133 => 40,  128 => 39,  121 => 38,  114 => 37,  108 => 36,  104 => 35,  99 => 33,  96 => 32,  93 => 31,  87 => 30,  81 => 28,  78 => 17,  71 => 16,  66 => 1,  63 => 13,  61 => 12,  58 => 9,  56 => 8,  54 => 7,  52 => 5,  50 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/editor/editor.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/editor/editor.html.twig");
    }
}
