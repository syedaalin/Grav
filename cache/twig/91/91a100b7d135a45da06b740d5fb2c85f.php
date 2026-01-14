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

/* partials/bottom-banner/nav.html.twig */
class __TwigTemplate_318b5d950365f6c0f049614f6a9c7c0a extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "columns", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    <div class=\"bottom-banner-nav-strip\">
        <div class=\"bottom-banner-body\">
            <div class=\"bottom-banner-grid\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "columns", [], "any", false, false, false, 6));
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
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 7
                yield "                    <nav class=\"bottom-banner-nav-column\" aria-labelledby=\"bottom-banner-nav-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 7), "html", null, true);
                yield "\">
                        
                        ";
                // line 10
                yield "                        <h3 id=\"bottom-banner-nav-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10), "html", null, true);
                yield "\" class=\"bottom-banner-nav-title -desktop\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 10), "html", null, true);
                yield "</h3>
                        
                        ";
                // line 13
                yield "                        <button type=\"button\" class=\"bottom-banner-nav-toggle -mobile\" aria-expanded=\"false\" aria-controls=\"bottom-banner-nav-content-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13), "html", null, true);
                yield "\" data-bottom-banner-toggle>
                            <span class=\"bottom-banner-nav-title\">";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 14), "html", null, true);
                yield "</span>
                            <i class=\"bottom-banner-nav-icon\" aria-hidden=\"true\"></i>
                        </button>

                        <div id=\"bottom-banner-nav-content-";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18), "html", null, true);
                yield "\" class=\"bottom-banner-nav-content\" aria-hidden=\"true\">
                            ";
                // line 19
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "links", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 20
                    yield "                                <ul class=\"bottom-banner-nav-list\" role=\"list\">
                                    ";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "links", [], "any", false, false, false, 21));
                    foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                        // line 22
                        yield "                                        <li>
                                            <a href=\"";
                        // line 23
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 23), "html", null, true);
                        yield "\" class=\"bottom-banner-nav-link\">
                                                <i class=\"bottom-banner-nav-link-icon la la-angle-";
                        // line 24
                        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "direction", [], "any", false, false, false, 24) == "rtl")) ? ("left") : ("right"));
                        yield "\" aria-hidden=\"true\"></i>
                                                <span class=\"bottom-banner-nav-link-text\">";
                        // line 25
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "text", [], "any", false, false, false, 25), "html", null, true);
                        yield "</span>
                                            </a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    yield "                                </ul>
                            ";
                }
                // line 31
                yield "                        </div>
                    </nav>
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
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "            </div>
        </div>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/bottom-banner/nav.html.twig";
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
        return array (  146 => 34,  130 => 31,  126 => 29,  116 => 25,  112 => 24,  108 => 23,  105 => 22,  101 => 21,  98 => 20,  96 => 19,  92 => 18,  85 => 14,  80 => 13,  72 => 10,  66 => 7,  49 => 6,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/bottom-banner/nav.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/bottom-banner/nav.html.twig");
    }
}
