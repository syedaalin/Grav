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

/* partials/social-icons.html.twig */
class __TwigTemplate_cb6cf4b8de89f675f2d796467850cd54 extends Template
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
        // line 8
        yield "<div class=\"social-icons-wrapper ";
        yield (((($context["context"] ?? null) == "top_banner")) ? ("is-top") : ("is-bottom"));
        yield "\">
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["social_icons"] ?? null), "items", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 10
            yield "\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 10), "html", null, true);
            yield "\" 
           target=\"_blank\" 
           rel=\"noopener noreferrer\" 
           class=\"social-icon ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "name", [], "any", false, false, false, 13), ["_" => "-"]), "html", null, true);
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["social_icons"] ?? null), "show_labels_mobile", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show-label-mobile") : (""));
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["social_icons"] ?? null), "show_labels_desktop", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show-label-desktop") : (""));
            yield "\" 
           aria-label=\"Visit our ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "label", [], "any", false, false, false, 14), "html", null, true);
            yield " page\"
           data-tooltip=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "label", [], "any", false, false, false, 15), "html", null, true);
            yield "\">

\t\t\t";
            // line 17
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["social"], "svg", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"currentColor\" class=\"social-icon-svg\" aria-hidden=\"true\">
\t\t\t\t\t<path d=\"";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "svg", [], "any", false, false, false, 19), "html", null, true);
                yield "\"/>
\t\t\t\t</svg>
\t\t\t";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 21
$context["social"], "icon", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 22
                yield "\t\t\t\t<i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "icon", [], "any", false, false, false, 22), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 24
            yield "
\t\t\t";
            // line 25
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["social_icons"] ?? null), "show_labels_mobile", [], "any", false, false, false, 25) || CoreExtension::getAttribute($this->env, $this->source, ($context["social_icons"] ?? null), "show_labels_desktop", [], "any", false, false, false, 25)) && (($context["context"] ?? null) != "top_banner"))) {
                // line 26
                yield "\t\t\t\t<span class=\"social-label\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "label", [], "any", false, false, false, 26), "html", null, true);
                yield "</span>
\t\t\t";
            }
            // line 28
            yield "\t\t</a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['social'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/social-icons.html.twig";
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
        return array (  111 => 30,  104 => 28,  98 => 26,  96 => 25,  93 => 24,  87 => 22,  85 => 21,  80 => 19,  77 => 18,  75 => 17,  70 => 15,  66 => 14,  58 => 13,  51 => 10,  47 => 9,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/social-icons.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/social-icons.html.twig");
    }
}
