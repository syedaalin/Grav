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

/* partials/login.html.twig */
class __TwigTemplate_e801d05b2ecf0c503f9372047929f119 extends Template
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
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
            'instructions' => [$this, 'block_instructions'],
            'integration' => [$this, 'block_integration'],
            'form' => [$this, 'block_form'],
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
        // line 2
        $context["scope"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "scope", [], "any", false, false, false, 2);
        // line 3
        $context["field_layout"] = "admin";
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"login-box-shadow ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
        yield "\">

        ";
        // line 11
        yield from $this->load("partials/login-logo.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "
        ";
        // line 13
        yield from $this->load("partials/messages.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "
        ";
        // line 15
        yield from $this->unwrap()->yieldBlock('instructions', $context, $blocks);
        // line 16
        yield "
        ";
        // line 17
        yield from $this->unwrap()->yieldBlock('integration', $context, $blocks);
        // line 18
        yield "
        <form method=\"post\" action=\"\">
            <div class=\"padding\">
                ";
        // line 21
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        // line 22
        yield "                ";
        yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", false, false, false, 22));
        yield "
            </div>
        </form>

        <script>
            \$(document).ready( function() {
                \$('#messages').delay(5000).animate({ height: 'toggle', opacity: 'toggle' }, 'slow');
            });
        </script>
    </section>
</body>
";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_instructions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integration(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/login.html.twig";
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
        return array (  147 => 21,  137 => 17,  127 => 15,  109 => 22,  107 => 21,  102 => 18,  100 => 17,  97 => 16,  95 => 15,  92 => 14,  90 => 13,  87 => 12,  85 => 11,  80 => 9,  77 => 8,  70 => 7,  60 => 5,  55 => 1,  53 => 3,  51 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/login.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/login.html.twig");
    }
}
