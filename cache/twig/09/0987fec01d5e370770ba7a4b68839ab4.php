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

/* forms/fields/backupshistory/backupshistory.html.twig */
class __TwigTemplate_753a3cc48f0718aed98b3d365fb934fe extends Template
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
        $context["delete_url"] = CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((($context["base_url_relative"] ?? null) . "/backup.json/backup:%BACKUP_FILE/task") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 1), "param_sep", [], "any", false, false, false, 1)) . "backupDelete"), "admin-form", "admin-nonce"], "method", false, false, false, 1);
        // line 2
        yield "<table class=\"backups-history noflex\">
    <thead>
    <tr>
        <th>#</th>
        <th>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUP_DATE"), "html", null, true);
        yield "</th>
        <th>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.NAME"), "html", null, true);
        yield "</th>
        <th class=\"right pad\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SIZE"), "html", null, true);
        yield "</th>
        <th class=\"right pad\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ACTION"), "html", null, true);
        yield "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("backups", $context)) ? (Twig\Extension\CoreExtension::default(($context["backups"] ?? null), [])) : ([])));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["backup"]) {
            // line 14
            yield "        ";
            $context["encoded_name"] = Twig\Extension\CoreExtension::urlencode($this->extensions['Grav\Common\Twig\Extension\GravExtension']->base64EncodeFilter(CoreExtension::getAttribute($this->env, $this->source, $context["backup"], "filename", [], "any", false, false, false, 14)));
            // line 15
            yield "        ";
            $context["backup_delete"] = Twig\Extension\CoreExtension::replace(($context["delete_url"] ?? null), ["%BACKUP_FILE" => ($context["encoded_name"] ?? null)]);
            // line 16
            yield "        <tr>
            <td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
            <td> <i class=\"fa fa-clock-o\"></i> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["backup"], "date", [], "any", false, false, false, 18)), "html", null, true);
            yield "</td>
            <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["backup"], "title", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
            <td class=\"right pad\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->niceFilesizeFunc(CoreExtension::getAttribute($this->env, $this->source, $context["backup"], "size", [], "any", false, false, false, 20)), "html", null, true);
            yield "</td>
            <td class=\"right pad nowrap\" >
                <a class=\"button button-small hint--bottom\" href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "backups", [], "any", false, false, false, 22), "getBackupDownloadUrl", [CoreExtension::getAttribute($this->env, $this->source, $context["backup"], "filename", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "base", [], "any", false, false, false, 22)], "method", false, false, false, 22), "html", null, true);
            yield "\" data-hint=\"Download\"><i class=\"fa fa-download\"></i></a>
                <span class=\"button button-small danger hint--bottom\" data-hint=\"Delete\" data-backup data-ajax=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["backup_delete"] ?? null), "html", null, true);
            yield "\"><i class=\"fa fa-close\"></i></span>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 26
        if (!$context['_iterated']) {
            // line 27
            yield "        <tr>
            <td colspan=\"5\" class=\"error\" style=\"text-align: center;\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACKUPS_NOT_GENERATED"), "html", null, true);
            yield "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['backup'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
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
        return "forms/fields/backupshistory/backupshistory.html.twig";
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
        return array (  147 => 31,  138 => 28,  135 => 27,  133 => 26,  117 => 23,  113 => 22,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  93 => 16,  90 => 15,  87 => 14,  69 => 13,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/backupshistory/backupshistory.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/backupshistory/backupshistory.html.twig");
    }
}
