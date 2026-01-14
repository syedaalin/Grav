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

/* partials/mobile-menu.html.twig */
class __TwigTemplate_a0d58e857ba617203a00180fb5a118a2 extends Template
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
        // line 2
        yield "<div id=\"mobile-menu-wrapper\" class=\"mobile-menu-overlay\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Mobile Navigation\">

    ";
        // line 5
        yield "    <div id=\"mobile-backdrop\" class=\"mobile-menu-backdrop\"></div>

    ";
        // line 8
        yield "    <div id=\"mobile-sidebar\" class=\"mobile-sidebar\">
        <div class=\"mobile-sidebar-inner\">
                ";
        // line 11
        yield "            <div class=\"mobile-sidebar-content\">
                <div class=\"mobile-header-actions\" style=\"display: flex; justify-content: flex-end; padding-bottom: 1rem;\">
                    <button id=\"mobile-close\" class=\"mobile-close-btn\" aria-label=\"Close Menu\">
                         <i class=\"las la-times\" style=\"font-size: 1.5rem;\"></i>
                    </button>
                </div>

                ";
        // line 19
        yield "                <nav class=\"mobile-nav stack-s animate-fade-in-up delay-100\">
                    ";
        // line 20
        yield from $this->load("partials/navigation.html.twig", 20)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 21
        yield "                </nav>
            </div>

            ";
        // line 25
        yield "            <div class=\"mobile-sidebar-footer animate-fade-in-up delay-200\">
                <h4 class=\"mobile-footer-title\">Follow Our Journey</h4>
                <div class=\"social-icons-grid\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, ["facebook", "twitter", "instagram", "youtube"], function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, ("social_" . ($context["p"] ?? null))); }));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 29
            yield "                        ";
            $context["social_url"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, ("social_" . $context["platform"]));
            // line 30
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["social_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" class=\"social-icon\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["platform"]), "html", null, true);
            yield "\">
                            <i class=\"lab la-";
            // line 31
            yield ((($context["platform"] == "facebook")) ? ("facebook-f") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["platform"], "html", null, true)));
            yield "\"></i>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['platform'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "                </div>
            </div>
        </div>
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
        return "partials/mobile-menu.html.twig";
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
        return array (  101 => 34,  92 => 31,  85 => 30,  82 => 29,  78 => 28,  73 => 25,  68 => 21,  66 => 20,  63 => 19,  54 => 11,  50 => 8,  46 => 5,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/mobile-menu.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/mobile-menu.html.twig");
    }
}
