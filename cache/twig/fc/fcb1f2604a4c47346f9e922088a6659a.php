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

/* reports/security.html.twig */
class __TwigTemplate_8dd5fd468063baeb97f11a119a5e3b8a extends Template
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
        if ((($tmp = ($context["result"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <div class=\"alert warning\"> Security Scan complete: <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["result"] ?? null)), "html", null, true);
            yield " potential XSS issues found...</strong></div>
    <table>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["result"] ?? null));
            foreach ($context['_seq'] as $context["route"] => $context["results"]) {
                // line 5
                yield "            <tr>
                <td><i class=\"fa fa-file-text-o\"></i> <a href=\"";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["base_url"] ?? null) . "/pages") . $context["route"]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["route"], "html", null, true);
                yield "</a></td>
                ";
                // line 7
                $context["results_string"] = [];
                // line 8
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["results"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 9
                    yield "                    ";
                    $context["results_string"] = Twig\Extension\CoreExtension::merge(($context["results_string"] ?? null), [(((("<span class=\"key\">" . $context["key"]) . "</span>: <span class=\"value\">") . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("title", $context["value"])) . "</span>")]);
                    // line 10
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                yield "
                <td class=\"double\">";
                // line 12
                yield Twig\Extension\CoreExtension::join(($context["results_string"] ?? null), ", ");
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['route'], $context['results'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "    </table>

";
        } else {
            // line 18
            yield "    <div class=\"alert info\">Security Scan complete: <strong>No issues found...</strong></div>
";
        }
        // line 20
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reports/security.html.twig";
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
        return array (  100 => 20,  96 => 18,  91 => 15,  82 => 12,  79 => 11,  73 => 10,  70 => 9,  65 => 8,  63 => 7,  57 => 6,  54 => 5,  50 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reports/security.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/reports/security.html.twig");
    }
}
