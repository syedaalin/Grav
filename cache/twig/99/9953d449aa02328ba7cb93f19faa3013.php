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

/* reports/yamllinter.html.twig */
class __TwigTemplate_8ca5266c03f25ee42270f261095f864b extends Template
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
            yield "    <div class=\"alert warning\"><strong>YAML Linting:</strong> Found <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["result"] ?? null)), "html", null, true);
            yield "</strong> linting errors</div>
    <table>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["result"] ?? null));
            foreach ($context['_seq'] as $context["path"] => $context["error"]) {
                // line 5
                yield "            ";
                $context["page_url"] = ((($context["base_url_simple"] ?? null) . "/") . ($context["admin_route"] ?? null));
                // line 6
                yield "            ";
                $context["bits"] = $this->extensions['Grav\Common\Twig\Extension\FilesystemExtension']->pathinfo($context["path"]);
                // line 7
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "multilang", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 8
                    yield "                ";
                    $context["lang"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Grav\Common\Twig\Extension\FilesystemExtension']->pathinfo(CoreExtension::getAttribute($this->env, $this->source, ($context["bits"] ?? null), "filename", [], "any", false, false, false, 8)), "extension", [], "any", false, false, false, 8);
                    // line 9
                    yield "                ";
                    $context["page_url"] = ((((($context["base_url_simple"] ?? null) . "/") . ($context["lang"] ?? null)) . "/") . ($context["admin_route"] ?? null));
                    // line 10
                    yield "            ";
                }
                // line 11
                yield "            ";
                $context["page_path"] = (($context["base_path"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["bits"] ?? null), "dirname", [], "any", false, false, false, 11));
                // line 12
                yield "            ";
                $context["page"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "pages", [], "any", false, false, false, 12), "get", [($context["page_path"] ?? null)], "method", false, false, false, 12);
                // line 13
                yield "            <tr>
                <td><i class=\"fa fa-file-text-o\"></i>
                    ";
                // line 15
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 16
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["page_url"] ?? null) . "/pages") . CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "rawRoute", [], "any", false, false, false, 16)), "html", null, true);
                    yield "/mode:expert\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, false, 16), "html", null, true);
                    yield "</a>
                    ";
                } else {
                    // line 18
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["path"], "html", null, true);
                    yield "
                    ";
                }
                // line 20
                yield "                    ";
                if ((($tmp = ($context["lang"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 21
                    yield "                        <span class=\"badge\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lang"] ?? null), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 23
                yield "                </td>
                <td class=\"double\">";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['path'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    </table>
";
        } else {
            // line 29
            yield "    <div class=\"alert info\"><strong>YAML Linting:</strong> No errors found.</div>
";
        }
        // line 31
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reports/yamllinter.html.twig";
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
        return array (  127 => 31,  123 => 29,  119 => 27,  110 => 24,  107 => 23,  101 => 21,  98 => 20,  92 => 18,  84 => 16,  82 => 15,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  50 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reports/yamllinter.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/reports/yamllinter.html.twig");
    }
}
