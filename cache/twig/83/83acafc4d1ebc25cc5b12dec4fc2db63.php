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

/* tools.html.twig */
class __TwigTemplate_dd437fb5466642149ef521f4c204a4fe extends Template
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
            'titlebar' => [$this, 'block_titlebar'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
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
        // line 3
        $context["tools_slug"] = CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "basename", [], "any", false, false, false, 3);
        // line 4
        if ((($context["tools_slug"] ?? null) == "tools")) {
            $context["tools_slug"] = "backups";
        }
        // line 5
        $context["tools"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "tools", [], "method", false, false, false, 5);
        // line 6
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["tools"] ?? null), ($context["tools_slug"] ?? null), [], "array", true, true, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            $context["tools_slug"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["tools"] ?? null)));
        }
        // line 9
        $context["title"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.TOOLS") . ": ") . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("underscor", ($context["tools_slug"] ?? null))))));
        // line 11
        $context["titlebar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            try {
                $_v0 = $this->load((("partials/tools-" . ($context["tools_slug"] ?? null)) . "-titlebar.html.twig"), 12);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield($context);
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_titlebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "    ";
        if ((($tmp = ($context["titlebar"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["titlebar"] ?? null), "html", null, true);
            yield "
    ";
        } else {
            // line 19
            yield "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true);
            yield "\"><i class=\"fa fa-reply\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
            yield "</a>
    </div>
    <h1><i class=\"fa fa-fw fa-briefcase\"></i> ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.TOOLS"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("underscor", ($context["tools_slug"] ?? null))))), "html", null, true);
            yield "</h1>
    ";
        }
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tools"] ?? null)) > 1)) {
            // line 28
            yield "    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tools"] ?? null));
            foreach ($context['_seq'] as $context["slug"] => $context["tool"]) {
                // line 31
                yield "            ";
                $context["perms"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["tool"]);
                // line 32
                yield "            ";
                $context["name"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), $context["tool"]);
                // line 33
                yield "            ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(($context["perms"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 34
                    yield "            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(("/tools/" . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", $context["slug"]))), "html", null, true);
                    yield "\" ";
                    if ((($context["tools_slug"] ?? null) == $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", $context["slug"]))) {
                        yield "class=\"active\"";
                    }
                    yield ">
                ";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ($context["name"] ?? null))), "html", null, true);
                    yield "
            </a>
            ";
                }
                // line 38
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['slug'], $context['tool'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "        </div>
    </div>
    ";
        }
        // line 42
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->dump($this->env, $context, ($context["tools"] ?? null)), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "    ";
        $context["perms"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (($_v1 = ($context["tools"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["tools_slug"] ?? null)] ?? null) : null));
        // line 47
        yield "
    ";
        // line 48
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(($context["perms"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "        ";
            try {
                $_v2 = $this->load((("partials/tools-" . ($context["tools_slug"] ?? null)) . ".html.twig"), 49);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v2 = null;
            }
            if ($_v2) {
                yield from $_v2->unwrap()->yield($context);
            }
            // line 50
            yield "    ";
        } else {
            // line 51
            yield "        <h1>Unauthorized</h1>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tools.html.twig";
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
        return array (  209 => 51,  206 => 50,  195 => 49,  193 => 48,  190 => 47,  187 => 46,  180 => 45,  172 => 42,  167 => 39,  161 => 38,  155 => 35,  146 => 34,  143 => 33,  140 => 32,  137 => 31,  133 => 30,  129 => 28,  126 => 27,  119 => 26,  109 => 22,  102 => 20,  99 => 19,  93 => 17,  90 => 16,  83 => 15,  78 => 1,  66 => 12,  64 => 11,  62 => 9,  59 => 7,  57 => 6,  55 => 5,  51 => 4,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tools.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/tools.html.twig");
    }
}
