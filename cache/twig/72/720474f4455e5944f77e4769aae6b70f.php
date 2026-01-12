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

/* forms/fields/cronstatus/cronstatus.html.twig */
class __TwigTemplate_44063b806dfa158b6791c4fe3d8b4ac2 extends Template
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
        $context["jobs"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "scheduler", [], "any", false, false, false, 1), "getAllJobs", [], "method", false, false, false, 1);
        // line 2
        $context["job_states"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "scheduler", [], "any", false, false, false, 2), "getJobStates", [], "method", false, false, false, 2), "content", [], "method", false, false, false, 2);
        // line 3
        yield "
<table class=\"cron-status noflex\">
    <thead>
        <tr>
            <th style=\"flex:3;\">Job ID</th>
            <th style=\"flex:3;\">Run</th>
            <th>Status</th>
            <th class=\"right pad\">State</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["jobs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 15
            yield "        ";
            $context["job_status"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "status", [], "any", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 15), [], "any", false, false, false, 15);
            // line 16
            yield "        ";
            $context["job_enabled"] = (((array_key_exists("job_status", $context) && (($context["job_status"] ?? null) != "enabled"))) ? (0) : (1));
            // line 17
            yield "        ";
            $context["job_id"] = CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 17);
            // line 18
            yield "        ";
            $context["job_id_md5"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->md5Filter(($context["job_id"] ?? null));
            // line 19
            yield "        ";
            $context["job_state"] = CoreExtension::getAttribute($this->env, $this->source, ($context["job_states"] ?? null), ($context["job_id"] ?? null), [], "any", false, false, false, 19);
            // line 20
            yield "        ";
            $context["job_at"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["job"], "getAt", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "getAt", [], "any", false, false, false, 20), "* * * * *")) : ("* * * * *"));
            // line 21
            yield "        ";
            $context["job_backlink"] = CoreExtension::getAttribute($this->env, $this->source, $context["job"], "backlink", [], "any", false, false, false, 21);
            // line 22
            yield "        <tr>
            <td style=\"flex:3;overflow:hidden;\">
                ";
            // line 24
            if ((($tmp = ($context["job_backlink"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["job_backlink"] ?? null)), "html", null, true);
                yield "\"><kbd>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 25), "html", null, true);
                yield "</kbd></a>
                ";
            } else {
                // line 27
                yield "                    <kbd>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 27), "html", null, true);
                yield "</kbd>
                ";
            }
            // line 29
            yield "            </td>
            <td style=\"flex:3;\" class=\"cron-at\">
                ";
            // line 31
            if ((($tmp = ($context["job_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "                    <span class=\"hint--bottom\" data-hint=\"next run: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->cronFunc(($context["job_at"] ?? null)), "getNextRunDate", [], "method", false, false, false, 32), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "date_format", [], "any", false, false, false, 32), "default", [], "any", false, false, false, 32)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->niceCronFilter(($context["job_at"] ?? null)), "html", null, true);
                yield "</span>
                ";
            } else {
                // line 34
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->niceCronFilter(($context["job_at"] ?? null)), "html", null, true);
                yield "
                ";
            }
            // line 36
            yield "            </td>
            <td>
                ";
            // line 38
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["job_state"] ?? null), "state", [], "any", false, false, false, 38) == "failure")) {
                // line 39
                yield "                    ";
                $context["run_type"] = "error";
                // line 40
                yield "                    ";
                $context["run_hint"] = CoreExtension::getAttribute($this->env, $this->source, ($context["job_state"] ?? null), "error", [], "any", false, false, false, 40);
                // line 41
                yield "                    ";
                $context["run_text"] = "<i class=\"fa fa-warning\"></i> Failure";
                // line 42
                yield "                ";
            } else {
                // line 43
                yield "                    ";
                $context["run_type"] = "info";
                // line 44
                yield "                    ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["job_state"] ?? null), "state", [], "any", true, true, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 45
                    yield "                        ";
                    $context["run_hint"] = "not run yet";
                    // line 46
                    yield "                        ";
                    $context["run_text"] = "<i class=\"fa fa-check\"></i> Ready";
                    // line 47
                    yield "                    ";
                } else {
                    // line 48
                    yield "                        ";
                    $context["run_hint"] = ("last run: " . $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["job_state"] ?? null), "last-run", [], "any", false, false, false, 48), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "date_format", [], "any", false, false, false, 48), "default", [], "any", false, false, false, 48)));
                    // line 49
                    yield "                        ";
                    $context["run_text"] = "<i class=\"fa fa-check\"></i> Success";
                    // line 50
                    yield "                    ";
                }
                // line 51
                yield "                ";
            }
            // line 52
            yield "                <span class=\"hint--bottom\" data-hint=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["run_hint"] ?? null), "html", null, true);
            yield "\">
                    <span class=\"badge ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["run_type"] ?? null), "html", null, true);
            yield "\">";
            yield ($context["run_text"] ?? null);
            yield "</span>
                </span>
            </td>
            <td class=\"right pad\">
                <div class=\"form-data\" data-grav-field=\"toggle\" data-grav-disabled=\"\" data-grav-default=\"null\" data-grav-field-name=\"data[status][";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["job_id"] ?? null), "html", null, true);
            yield "]\">
                    <div class=\"switch-toggle switch-grav switch-2 \">
                        <input type=\"radio\" value=\"enabled\" id=\"toggle_status.";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["job_id_md5"] ?? null), "html", null, true);
            yield "1\" name=\"data[status][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["job_id"] ?? null), "html", null, true);
            yield "]\" class=\"highlight\" ";
            if ((($tmp = ($context["job_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked=\"checked\"";
            }
            yield ">
                        <label for=\"toggle_status.";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["job_id_md5"] ?? null), "html", null, true);
            yield "1\">Enabled</label>

                        <input type=\"radio\" value=\"disabled\" id=\"toggle_status.";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["job_id_md5"] ?? null), "html", null, true);
            yield "0\" name=\"data[status][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["job_id"] ?? null), "html", null, true);
            yield "]\" class=\"\" ";
            if ((($tmp =  !($context["job_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked=\"checked\"";
            }
            yield ">
                        <label for=\"toggle_status.";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["job_id_md5"] ?? null), "html", null, true);
            yield "0\">Disabled</label>
                    </div>
                </div>

            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['job'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "    </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/cronstatus/cronstatus.html.twig";
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
        return array (  226 => 70,  213 => 63,  203 => 62,  198 => 60,  188 => 59,  183 => 57,  174 => 53,  169 => 52,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  154 => 47,  151 => 46,  148 => 45,  145 => 44,  142 => 43,  139 => 42,  136 => 41,  133 => 40,  130 => 39,  128 => 38,  124 => 36,  118 => 34,  110 => 32,  108 => 31,  104 => 29,  98 => 27,  90 => 25,  88 => 24,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  59 => 14,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/cronstatus/cronstatus.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/cronstatus/cronstatus.html.twig");
    }
}
