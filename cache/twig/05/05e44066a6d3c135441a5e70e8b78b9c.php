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

/* default.html.twig */
class __TwigTemplate_1ca3a0149f29d4e63481ae09c03b8fbf extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <div id=\"body-wrapper\" class=\"py-32 bg-[var(--color-brand-bg)] min-h-[70vh] @container\">
        <article class=\"container mx-auto px-6 max-w-5xl animate-in fade-in duration-1000\" aria-labelledby=\"page-title\">
            <h1 id=\"page-title\" class=\"sr-only\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>
            <div class=\"prose prose-2xl prose-slate max-w-none text-[var(--color-brand-dark)] leading-[1.8] font-medium selection:bg-[var(--color-brand-primary)]/20\">
                ";
        // line 8
        $context["ai_disclosure_enabled"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, true, false, 8), "ai_disclosure", [], "any", true, true, false, 8)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 8), "ai_disclosure", [], "any", false, false, false, 8)) : (true));
        // line 9
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "ai_augmented", [], "any", false, false, false, 9) && ($context["ai_disclosure_enabled"] ?? null))) {
            // line 10
            yield "                    ";
            yield from $this->load("partials/ai-block.html.twig", 10)->unwrap()->yield(CoreExtension::merge($context, ["ai_generated" => true, "content" => CoreExtension::getAttribute($this->env, $this->source,             // line 12
($context["page"] ?? null), "content", [], "any", false, false, false, 12), "show_reasoning" => true, "reasoning" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 14
($context["page"] ?? null), "header", [], "any", false, false, false, 14), "ai_reasoning", [], "any", false, false, false, 14)]));
            // line 16
            yield "                ";
        } else {
            // line 17
            yield "                    ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 17);
            yield "
                ";
        }
        // line 19
        yield "            </div>
        </article>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default.html.twig";
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
        return array (  86 => 19,  80 => 17,  77 => 16,  75 => 14,  74 => 12,  72 => 10,  69 => 9,  67 => 8,  62 => 6,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/default.html.twig");
    }
}
