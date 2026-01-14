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

/* partials/bottom-banner/schema.html.twig */
class __TwigTemplate_b684601271997c9fad8b54c16d39a5bf extends Template
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
        yield "<script type=\"application/ld+json\">
{
    \"@context\": \"https://schema.org\",
    \"@type\": \"Organization\",
    \"name\": \"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "orgName", [], "any", false, false, false, 6), "js"), "html", null, true);
        yield "\",
    \"url\": \"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("", [], true), "html", null, true);
        yield "\",
    ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "logo", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "\"logo\": \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(CoreExtension::getAttribute($this->env, $this->source, ($context["bottom_banner"] ?? null), "logo", [], "any", false, false, false, 8), [], true), "html", null, true);
            yield "\",
    ";
        }
        // line 10
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "email", [], "any", false, false, false, 10) || CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "phone", [], "any", false, false, false, 10))) {
            // line 11
            yield "    \"contactPoint\": {
        \"@type\": \"ContactPoint\",
        ";
            // line 13
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "phone", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "\"telephone\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "phone", [], "any", false, false, false, 13), "js"), "html", null, true);
                yield "\",
        ";
            }
            // line 15
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "email", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "\"email\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "email", [], "any", false, false, false, 15), "js"), "html", null, true);
                yield "\",
        ";
            }
            // line 17
            yield "        \"contactType\": \"customer service\"
    },
    ";
        }
        // line 20
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "address", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "    \"address\": {
        \"@type\": \"PostalAddress\",
        \"streetAddress\": \"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "address", [], "any", false, false, false, 23), "js"), "html", null, true);
            yield "\"
    },
    ";
        }
        // line 26
        yield "    \"sameAs\": ";
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "socials", [], "any", false, false, false, 26));
        yield "
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/bottom-banner/schema.html.twig";
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
        return array (  103 => 26,  97 => 23,  93 => 21,  90 => 20,  85 => 17,  77 => 15,  70 => 13,  66 => 11,  63 => 10,  56 => 8,  52 => 7,  48 => 6,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/bottom-banner/schema.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/bottom-banner/schema.html.twig");
    }
}
