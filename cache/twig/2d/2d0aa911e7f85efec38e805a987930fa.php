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

/* partials/tools-restore-grav.html.twig */
class __TwigTemplate_ec78857bf06b5ccda81ebfea92a13ab5 extends Template
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
        yield "<h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESTORE_GRAV"), "html", null, true);
        yield "</h1>

<div class=\"restore-grav-content\">
    ";
        // line 4
        $context["snapshots"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "safeUpgradeSnapshots", [], "method", false, false, false, 4);
        // line 5
        yield "
    ";
        // line 6
        if ((($tmp = ($context["snapshots"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "        <p class=\"restore-grav-intro\">
            ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESTORE_GRAV_DESC"), "html", null, true);
            yield "
        </p>

        <form id=\"snapshot-delete-form\" action=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/tools/restore-grav"), "html", null, true);
            yield "\" method=\"post\" class=\"snapshot-delete-form\">
            <input type=\"hidden\" name=\"task\" value=\"safeUpgradeDelete\">
            ";
            // line 13
            yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->nonceFieldFunc("admin-form", "admin-nonce");
            yield "
        </form>

        <table class=\"restore-grav-table\">
            <thead>
                <tr>
                    <th class=\"checkbox-cell\"></th>
                    <th>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESTORE_GRAV_TABLE_SNAPSHOT"), "html", null, true);
            yield "</th>
                    <th>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESTORE_GRAV_TABLE_VERSION"), "html", null, true);
            yield "</th>
                    <th>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESTORE_GRAV_TABLE_CREATED"), "html", null, true);
            yield "</th>
                    <th class=\"actions-cell\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESTORE_GRAV_TABLE_ACTIONS"), "html", null, true);
            yield "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["snapshots"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["snapshot"]) {
                // line 28
                yield "                ";
                $context["version"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "source_version", [], "any", false, false, false, 28)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "source_version", [], "any", false, false, false, 28)) : (CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "target_version", [], "any", false, false, false, 28)));
                // line 29
                yield "                <tr>
                    <td class=\"checkbox-cell\">
                        <input type=\"checkbox\" name=\"snapshots[]\" value=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "id", [], "any", false, false, false, 31), "html", null, true);
                yield "\" form=\"snapshot-delete-form\" />
                    </td>
                    <td>
                        ";
                // line 34
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "label", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 35
                    yield "                            <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "label", [], "any", false, false, false, 35), "html", null, true);
                    yield "</strong><br>
                            <code>";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "id", [], "any", false, false, false, 36), "html", null, true);
                    yield "</code>
                        ";
                } else {
                    // line 38
                    yield "                            <code>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "id", [], "any", false, false, false, 38), "html", null, true);
                    yield "</code>
                        ";
                }
                // line 40
                yield "                    </td>
                    <td>";
                // line 41
                yield ((($context["version"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["version"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.UNKNOWN"), "html", null, true)));
                yield "</td>
                    <td>
                        ";
                // line 43
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "created_at", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 44
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "created_at", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true);
                    yield "
                            <span class=\"hint\" data-nicetime-timestamp=\"";
                    // line 45
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "created_at", [], "any", false, false, false, 45), "c"), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->nicetimeFunc(CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "created_at", [], "any", false, false, false, 45), false, false), "html", null, true);
                    yield "</span>
                        ";
                } else {
                    // line 47
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.UNKNOWN"), "html", null, true);
                    yield "
                        ";
                }
                // line 49
                yield "                    </td>
                    <td class=\"actions-cell\">
                        <button type=\"button\" class=\"button\" data-restore-snapshot=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["snapshot"], "id", [], "any", false, false, false, 51), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESTORE_GRAV_RESTORE_BUTTON"), "html", null, true);
                yield "</button>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['snapshot'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "            </tbody>
        </table>

        <div class=\"button-bar\">
            <button type=\"button\" class=\"button primary\" data-create-snapshot>
                ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESTORE_GRAV_CREATE_SNAPSHOT"), "html", null, true);
            yield "
            </button>
            <button type=\"submit\" form=\"snapshot-delete-form\" class=\"button danger\" name=\"task\" value=\"safeUpgradeDelete\">
                ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESTORE_GRAV_DELETE_SELECTED"), "html", null, true);
            yield "
            </button>
        </div>
    ";
        } else {
            // line 67
            yield "        <div class=\"notice secondary\">
            <p>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESTORE_GRAV_NONE"), "html", null, true);
            yield "</p>
        </div>
    ";
        }
        // line 71
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/tools-restore-grav.html.twig";
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
        return array (  207 => 71,  201 => 68,  198 => 67,  191 => 63,  185 => 60,  178 => 55,  166 => 51,  162 => 49,  156 => 47,  149 => 45,  144 => 44,  142 => 43,  137 => 41,  134 => 40,  128 => 38,  123 => 36,  118 => 35,  116 => 34,  110 => 31,  106 => 29,  103 => 28,  99 => 27,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  70 => 13,  65 => 11,  59 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/tools-restore-grav.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/tools-restore-grav.html.twig");
    }
}
