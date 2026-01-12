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

/* partials/tools-reports.html.twig */
class __TwigTemplate_b53d20c6c0e2aa19577adb6e60ede811 extends Template
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
        yield "<div class=\"reports-content\">

    ";
        // line 3
        $context["reports"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "generateReports", [], "method", false, false, false, 3);
        // line 4
        yield "
    <div class=\"report-output\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["title"] => $context["report"]) {
            // line 7
            yield "        <h1>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true);
            yield "</h1>
        ";
            // line 8
            yield $context["report"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['title'], $context['report'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "    </div>

    ";
        // line 12
        yield from $this->load("partials/modal-changes-detected.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "

</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/tools-reports.html.twig";
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
        return array (  75 => 13,  73 => 12,  69 => 10,  61 => 8,  56 => 7,  52 => 6,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/tools-reports.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/tools-reports.html.twig");
    }
}
