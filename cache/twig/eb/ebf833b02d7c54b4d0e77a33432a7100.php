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

/* flex-objects/types/pages/buttons/save.html.twig */
class __TwigTemplate_e54787dff77a28a2f86b9c31a93283ba extends Template
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
        $context["task"] = (((array_key_exists("task", $context) &&  !(null === $context["task"]))) ? ($context["task"]) : ("save"));
        // line 2
        yield "<div id=\"titlebar-save\" class=\"button-group\">
    <button class=\"button success\" type=\"submit\" name=\"task\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["task"] ?? null), "html", null, true);
        yield "\" lang=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["language"] ?? null), "html", null, true);
        yield "\" form=\"blueprints\">
        <i class=\"fa fa-check\"></i> ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
        yield "
    </button>
    ";
        // line 6
        if ((($tmp = ($context["can_translate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "        ";
            $context["untranslated"] = array_diff(($context["admin_languages"] ?? null), ($context["object_languages"] ?? null));
            // line 8
            yield "        ";
            if ((($tmp = count(($context["untranslated"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "            <button id=\"titlebar-button-save\" type=\"button\" class=\"button success dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu lang-switcher\">
                ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["untranslated"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang_code"]) {
                    // line 14
                    yield "                    <li>
                        <button class=\"button success task\" type=\"submit\" name=\"task\" value=\"saveas\" lang=\"";
                    // line 15
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["lang_code"], "html", null, true);
                    yield "\" form=\"blueprints\">
                            ";
                    // line 16
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                    yield " ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["all_languages"] ?? null), $context["lang_code"], [], "array", true, true, false, 16) &&  !(null === (($_v0 = ($context["all_languages"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["lang_code"]] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["all_languages"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["lang_code"]] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["lang_code"], "html", null, true)));
                    yield "
                        </button>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['lang_code'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                yield "            </ul>
        ";
            }
            // line 22
            yield "    ";
        }
        // line 23
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "flex-objects/types/pages/buttons/save.html.twig";
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
        return array (  102 => 23,  99 => 22,  95 => 20,  83 => 16,  79 => 15,  76 => 14,  72 => 13,  66 => 9,  63 => 8,  60 => 7,  58 => 6,  53 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/types/pages/buttons/save.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/buttons/save.html.twig");
    }
}
