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

/* partials/media-list-wrapper__list.html.twig */
class __TwigTemplate_abf180116a5207443ec425beb8f9a804 extends Template
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
        yield "<div id=\"admin-media\" class=\"files js__files card-row grid fixed-blocks pure-g\">
    ";
        // line 2
        if ((($tmp =  !($context["is_modal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "        ";
            try {
                $_v0 = $this->load("partials/media-list-wrapper__list__dropzone.html.twig", 3);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield($context);
            }
            // line 4
            yield "    ";
        }
        // line 5
        yield "
    ";
        // line 6
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "files", [], "any", false, false, false, 6))) {
            // line 7
            yield "        <div class=\"empty-state\">
            ";
            // line 8
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "param", ["type"], "method", false, false, false, 8) || CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "param", ["date"], "method", false, false, false, 8))) {
                // line 9
                yield "                <h2>Filtering by ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "param", ["type"], "method", false, false, false, 9), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "param", ["date"], "method", false, false, false, 9), "html", null, true);
                yield "</h2>
            ";
            }
            // line 11
            yield "
            <h2>No media files found</h2>

            <p>You need to add media to a page in order to display it here.</p>
        </div>
    ";
        } else {
            // line 17
            yield "        ";
            yield from $this->load("media-list-content.html.twig", 17)->unwrap()->yield(CoreExtension::merge($context, ["is_modal" => ($context["is_modal"] ?? null)]));
            yield " ";
            // line 18
            yield "    ";
        }
        // line 19
        yield "
    ";
        // line 20
        yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc("admin-form", "admin-nonce");
        yield "
</div>

";
        // line 23
        yield from $this->load("partials/spinning-wheel.html.twig", 23)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/media-list-wrapper__list.html.twig";
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
        return array (  103 => 23,  97 => 20,  94 => 19,  91 => 18,  87 => 17,  79 => 11,  71 => 9,  69 => 8,  66 => 7,  64 => 6,  61 => 5,  58 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/media-list-wrapper__list.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/media-list-wrapper__list.html.twig");
    }
}
