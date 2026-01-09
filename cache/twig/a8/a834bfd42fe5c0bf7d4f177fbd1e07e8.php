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

/* partials/themes-list.html.twig */
class __TwigTemplate_651cff38861f5ae617ea7052e6893959 extends Template
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
        $context["gumroad_loaded"] = false;
        // line 2
        yield "<div class=\"grav-update themes\"></div>
";
        // line 3
        if ((($tmp = ($context["installing"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            yield from $this->load("partials/release-toggle.html.twig", 4)->unwrap()->yield($context);
        }
        // line 6
        yield from $this->load("partials/list-sort.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["list_view" => "themes"]));
        // line 7
        yield "<h1>
    ";
        // line 8
        yield (((($tmp = ($context["installing"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.AVAILABLE_THEMES"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.INSTALLED_THEMES"), "html", null, true)));
        yield "
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.RESOURCE_FILTER"), "html", null, true);
        yield "\" data-gpm-filter>
    </div>
</form>

<div class=\"themes card-row grid fixed-blocks pure-g\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->ksortFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "themes", [ !($context["installing"] ?? null)], "method", false, false, false, 17), "toArray", [], "any", false, false, false, 17)));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["slug"] => $context["theme"]) {
            // line 18
            yield "        ";
            $context["state"] = "inactive";
            // line 19
            yield "        ";
            if ((($tmp = ($context["installing"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["state"] = "installing";
            }
            // line 20
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["system.pages.theme"], "method", false, false, false, 20) == $context["slug"])) {
                $context["state"] = "active";
            }
            // line 21
            yield "        ";
            $context["isTestingRelease"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "gpm", [], "any", false, false, false, 21), "isTestingRelease", [$context["slug"]], "method", false, false, false, 21);
            // line 22
            yield "        ";
            $context["isPremium"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "isPremiumProduct", [$context["theme"]], "method", false, false, false, 22);
            // line 23
            yield "        ";
            $context["releaseDate"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "date", [], "any", false, false, false, 23)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "date", [], "any", false, false, false, 23)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "gpm", [], "any", false, false, false, 23), "findPackage", [$context["slug"], true], "method", false, false, false, 23), "date", [], "any", false, false, false, 23)));
            // line 24
            yield "
        <div class=\"theme card-item pure-u-1-3 ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["state"] ?? null), "html", null, true);
            yield "-theme\" data-gpm-theme=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode($context["slug"]), "html", null, true);
            yield "\" data-gpm-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 25), "html", null, true);
            yield "\" data-gpm-release-date=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["releaseDate"] ?? null), "html", null, true);
            yield "\" data-gpm-author=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "author", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
            yield "\" data-gpm-official=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "isTeamGrav", [$context["theme"]], "method", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("2"));
            yield "\" data-gpm-updatable=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "gpm", [], "any", false, false, false, 25), "isUpdatable", [$context["slug"]], "method", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("2"));
            yield "\" data-gpm-enabled=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "get", ["enabled"], "method", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("2"));
            yield "\" data-gpm-testing=\"";
            yield (((($tmp = ($context["isTestingRelease"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("2"));
            yield "\" data-gpm-premium=\"";
            yield (((($tmp = ($context["isPremium"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("2"));
            yield "\">
            <div class=\"gpm-name\">
                <i class=\"fa fa-fw fa-";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "icon", [], "any", false, false, false, 27), "html", null, true);
            yield "\"></i>
                <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(("/themes/" . Twig\Extension\CoreExtension::urlencode($context["slug"]))), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 28), "html", null, true);
            yield "</a>
                ";
            // line 29
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "isTeamGrav", [$context["theme"]], "method", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.GRAV_OFFICIAL_THEME"), "html", null, true);
                yield "\"></i></span></small>
                ";
            }
            // line 32
            yield "                ";
            if ((($tmp = ($context["isPremium"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "                    ";
                if ((($tmp =  !($context["gumroad_loaded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 34
                    yield "                        ";
                    $context["gumroad_loaded"] = true;
                    // line 35
                    yield "                        <script src=\"//gumroad.com/js/gumroad.js\"></script>
                    ";
                }
                // line 37
                yield "                    <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
                yield "</span></small>
                ";
            }
            // line 39
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "symlink", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "                    <span class=\"hint--bottom\"  data-hint=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"), "html", null, true);
                yield "\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                ";
            }
            // line 44
            yield "                <span class=\"gpm-version\">v";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "version", [], "any", false, false, false, 44), "html", null, true);
            yield "</span>
                ";
            // line 45
            if ((($tmp = ($context["isTestingRelease"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"gpm-testing\">test release</span>";
            }
            // line 46
            yield "            </div>
            <div class=\"gpm-screenshot\">
                ";
            // line 48
            $context["thumb"] = (((($tmp = ($context["installing"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("//getgrav.org/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, false, 48))) : (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "thumbnail", [], "any", false, false, false, 48)));
            // line 49
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(("/themes/" . Twig\Extension\CoreExtension::urlencode($context["slug"]))), "html", null, true);
            yield "\"><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["thumb"] ?? null), "html", null, true);
            yield "\" /></a>
            </div>
            ";
            // line 51
            if ((($context["state"] ?? null) == "installing")) {
                // line 52
                yield "                <div class=\"gpm-actions\">
                    ";
                // line 53
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "premium", [], "any", false, false, false, 53) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "license", [CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "slug", [], "any", false, false, false, 53)], "method", false, false, false, 53))) {
                    // line 54
                    yield "                        ";
                    if ((($tmp =  !($context["gumroad_loaded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 55
                        yield "                            ";
                        $context["gumroad_loaded"] = true;
                        // line 56
                        yield "                            <script src=\"//gumroad.com/js/gumroad.js\"></script>
                        ";
                    }
                    // line 58
                    yield "                        <a class=\"gumroad-button button\" href=\"https://gum.co/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "premium", [], "any", false, false, false, 58), "permalink", [], "any", false, false, false, 58), "html", null, true);
                    yield "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "premium", [], "any", false, true, false, 58), "button", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "premium", [], "any", false, false, false, 58), "button", [], "any", false, false, false, 58), "Purchase")) : ("Purchase")), "html", null, true);
                    yield "</a>
                    ";
                } else {
                    // line 60
                    yield "                        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["slug"], "html", null, true);
                    yield "\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.INSTALL"), "html", null, true);
                    yield "</a>
                    ";
                }
                // line 62
                yield "
                </div>
            ";
            } elseif ((            // line 64
($context["state"] ?? null) == "active")) {
                // line 65
                yield "                <div class=\"gpm-actions\">
                    <i class=\"fa fa-star\"></i> ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ACTIVE_THEME"), "html", null, true);
                yield "
                </div>
            ";
            } else {
                // line 69
                yield "                <a data-remodal-target=\"theme-switch-warn\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((((($context["base_url_relative"] ?? null) . "/themes/") . $context["slug"]) . "/task") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 69), "param_sep", [], "any", false, false, false, 69)) . "activate"), "admin-form", "admin-nonce"], "method", false, false, false, 69), "html", null, true);
                yield "\" class=\"gpm-actions\">
                  <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ACTIVATE"), "html", null, true);
                yield "
                </a>
            ";
            }
            // line 73
            yield "        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 74
        if (!$context['_iterated']) {
            // line 75
            yield "        <tr><td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.OFFLINE_WARNING"), "html", null, true);
            yield "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['slug'], $context['theme'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "</div>

";
        // line 79
        yield from $this->load("partials/modal-switch-theme.html.twig", 79)->unwrap()->yield($context);
        // line 80
        yield from $this->load("partials/modal-add-package.html.twig", 80)->unwrap()->yield(CoreExtension::merge($context, ["type" => "theme"]));
        // line 81
        yield from $this->load("partials/modal-update-packages.html.twig", 81)->unwrap()->yield(CoreExtension::merge($context, ["type" => "theme"]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/themes-list.html.twig";
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
        return array (  280 => 81,  278 => 80,  276 => 79,  272 => 77,  263 => 75,  261 => 74,  256 => 73,  250 => 70,  245 => 69,  239 => 66,  236 => 65,  234 => 64,  230 => 62,  222 => 60,  214 => 58,  210 => 56,  207 => 55,  204 => 54,  202 => 53,  199 => 52,  197 => 51,  189 => 49,  187 => 48,  183 => 46,  179 => 45,  174 => 44,  166 => 40,  163 => 39,  157 => 37,  153 => 35,  150 => 34,  147 => 33,  144 => 32,  138 => 30,  136 => 29,  130 => 28,  126 => 27,  103 => 25,  100 => 24,  97 => 23,  94 => 22,  91 => 21,  86 => 20,  81 => 19,  78 => 18,  73 => 17,  65 => 12,  58 => 8,  55 => 7,  53 => 6,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/themes-list.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/themes-list.html.twig");
    }
}
