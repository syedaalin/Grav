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

/* partials/tools-logs.html.twig */
class __TwigTemplate_e7ab9cd511dfec16c6a63bbcb0222fe5 extends Template
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
        yield "<div class=\"logs-content\">

    ";
        // line 15
        yield "
    ";
        // line 16
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 17
        yield "
        ";
        // line 18
        $context["file"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 18), "query", ["log"], "method", false, false, false, 18)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 18), "query", ["log"], "method", false, false, false, 18)) : ("grav.log"));
        // line 19
        yield "        ";
        $context["verbose"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 19), "query", ["verbose"], "method", false, false, false, 19) == "true")) ? (true) : (false));
        // line 20
        yield "        ";
        $context["lines"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 20), "query", ["lines"], "method", false, false, false, 20)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "uri", [], "any", false, false, false, 20), "query", ["lines"], "method", false, false, false, 20)) : (20));
        // line 21
        yield "        ";
        $context["logfile"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "locator", [], "any", false, false, false, 21), "findResource", [("log://" . ($context["file"] ?? null))], "method", false, false, false, 21);
        // line 22
        yield "        ";
        $context["logs"] = (((($tmp = ($context["logfile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["logviewer"] ?? null), "objectTail", [($context["logfile"] ?? null), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->intFilter(($context["lines"] ?? null)), false], "method", false, false, false, 22)) : ([]));
        // line 23
        yield "        ";
        $context["log_files"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "getLogFiles", [], "method", false, false, false, 23);
        // line 24
        yield "        ";
        $context["title"] = (($_v0 = ($context["log_files"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["file"] ?? null)] ?? null) : null);
        // line 25
        yield "
        <div class=\"logs-output\">

        <form id=\"logs-form\">
            <div class=\"block block-select\">
                <div class=\"form-field\">
                    <div class=\"form-data\">

                        ";
        // line 33
        $context["lines_list"] = [10 => "10 entries", 25 => "25 entries", 50 => "50 entries", 100 => "100 entries", 200 => "200 entries", 500 => "500 entries"];
        // line 34
        yield "
                        ";
        // line 35
        yield $macros["macro"]->getTemplateForMacro("macro_render_select", $context, 35, $this->getSourceContext())->macro_render_select(...["log", ($context["log_files"] ?? null), ($context["file"] ?? null)]);
        yield "
                        ";
        // line 36
        yield $macros["macro"]->getTemplateForMacro("macro_render_select", $context, 36, $this->getSourceContext())->macro_render_select(...["verbose", ["false" => "Essential Output", "true" => "Verbose Output"], ($context["verbose"] ?? null)]);
        yield "
                        ";
        // line 37
        yield $macros["macro"]->getTemplateForMacro("macro_render_select", $context, 37, $this->getSourceContext())->macro_render_select(...["lines", ($context["lines_list"] ?? null), ($context["lines"] ?? null)]);
        yield "
                    </div>
                </div>
            </div>
        </form>

        <h1>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield " Output</h1>
        <h3>Display the ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lines"] ?? null), "html", null, true);
        yield " most recent entries...</h3>
        <table class=\"noflex\">
            <thead>
                <tr>
                    <th class=\"date\">Date</th>
                    <th class=\"level\">Level</th>
                    <th class=\"message\">Message</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 55
            yield "                <tr>
                    <td class=\"date\" title=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "date", [], "any", false, false, false, 56), "r"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "date", [], "any", false, false, false, 56)), "html", null, true);
            yield "</td>
                    <td class=\"level\"><span class=\"badge ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "level", [], "any", false, false, false, 57)), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "level", [], "any", false, false, false, 57), "html", null, true);
            yield "</span></td>
                    <td class=\"message\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                    ";
            // line 59
            if ((($tmp = ($context["verbose"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 60
                yield "                </tr>
                <tr class=\"trace\">
                    <td colspan=\"2\">&nbsp;</td>
                    <td>
                        <div class=\"overflow\">
                            <ol>
                            ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "trace", [], "any", false, false, false, 66));
                foreach ($context['_seq'] as $context["_key"] => $context["tracerow"]) {
                    // line 67
                    yield "                                <li><code>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tracerow"], "html", null, true);
                    yield "</code></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tracerow'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                yield "                            </ol>
                        </div>
                    </td>
                    ";
            }
            // line 73
            yield "                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "            </tbody>
        </table>
    </div>


</div>
";
        yield from [];
    }

    // line 3
    public function macro_render_select($name = null, $options = null, $selected = null, $autokey = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "options" => $options,
            "selected" => $selected,
            "autokey" => $autokey,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "        <div class=\"forms-select-wrapper\">
            <select class=\"form-select\" name=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\"  data-grav-selectize>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 7
                yield "                    ";
                if ((($tmp = ($context["autokey"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 8
                    yield "                        ";
                    $context["key"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["key"], "int")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["option"])) : ($context["key"]));
                    // line 9
                    yield "                    ";
                }
                // line 10
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" ";
                yield ((($context["key"] == ($context["selected"] ?? null))) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("title", $context["option"]), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            yield "            </select>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/tools-logs.html.twig";
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
        return array (  241 => 12,  228 => 10,  225 => 9,  222 => 8,  219 => 7,  215 => 6,  211 => 5,  208 => 4,  193 => 3,  182 => 75,  175 => 73,  169 => 69,  160 => 67,  156 => 66,  148 => 60,  146 => 59,  142 => 58,  136 => 57,  130 => 56,  127 => 55,  123 => 54,  110 => 44,  106 => 43,  97 => 37,  93 => 36,  89 => 35,  86 => 34,  84 => 33,  74 => 25,  71 => 24,  68 => 23,  65 => 22,  62 => 21,  59 => 20,  56 => 19,  54 => 18,  51 => 17,  49 => 16,  46 => 15,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/tools-logs.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/tools-logs.html.twig");
    }
}
