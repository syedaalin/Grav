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

/* partials/dashboard-pages.html.twig */
class __TwigTemplate_22d3f8677ce0bef476abeb847972a581 extends Template
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
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.pages.list", "admin.pages", "admin.super"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <div id=\"latest\">
        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc("/pages"), "html", null, true);
            yield "\"><i class=\"fa fa-fw fa-file-text-o\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            yield "</a>
        </div>
        <h1>";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.LATEST_PAGE_UPDATES"), "html", null, true);
            yield "</h1>
        <table>
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "latestPages", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "latestPages", [], "any", false, false, false, 8), [])) : ([])));
            foreach ($context['_seq'] as $context["_key"] => $context["latest"]) {
                // line 9
                yield "            ";
                $context["route"] = CoreExtension::getAttribute($this->env, $this->source, $context["latest"], "rawRoute", [], "any", false, false, false, 9);
                // line 10
                yield "            <tr>
                <td class=\"triple page-title\">
                    <a href=\"";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(("/pages/" . Twig\Extension\CoreExtension::trim(($context["route"] ?? null), "/"))), "html", null, true);
                yield "\"><i class=\"fa fa-fw fa-file-text-o\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["latest"], "title", [], "any", false, false, false, 12), "html", null, true);
                yield "</a></td>
                <td class=\"triple page-route\">";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["route"] ?? null), "html", null, true);
                yield "</td><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminNicetimeFilter(CoreExtension::getAttribute($this->env, $this->source, $context["latest"], "modified", [], "any", false, false, false, 13)), "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['latest'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "        </table>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/dashboard-pages.html.twig";
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
        return array (  88 => 16,  77 => 13,  71 => 12,  67 => 10,  64 => 9,  60 => 8,  55 => 6,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/dashboard-pages.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/dashboard-pages.html.twig");
    }
}
