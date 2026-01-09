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

/* flex-objects/directories/default.html.twig */
class __TwigTemplate_6e1084cf4080d6a29a5a188fa3d81b34 extends Template
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
        yield "<table id=\"data-table\" class=\"table\">
    <colgroup>
        <col width=\"20\" />
        <col width=\"80\" />
    </colgroup>
    <thead>
    <tr>
        <th>Type</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["directories"] ?? null));
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
        foreach ($context['_seq'] as $context["type"] => $context["directory"]) {
            // line 14
            $context["title"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, true, false, 14), $context["type"], [], "array", false, true, false, 14), "title", [], "array", true, true, false, 14) &&  !(null === (($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 14)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["type"]] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["title"] ?? null) : null)))) ? ((($_v2 = (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 14)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[$context["type"]] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["title"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, true, false, 14), $context["type"], [], "array", false, true, false, 14), "collection", [], "array", false, true, false, 14), "title", [], "array", true, true, false, 14) &&  !(null === (($_v4 = (($_v5 = (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 14)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[$context["type"]] ?? null) : null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["collection"] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["title"] ?? null) : null)))) ? ((($_v7 = (($_v8 = (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 14)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[$context["type"]] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["collection"] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["title"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["directory"], "title", [], "any", false, false, false, 14)))));
            // line 15
            if (CoreExtension::matches("/{/", ($context["title"] ?? null))) {
                // line 16
                $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::include($this->env, $context, Twig\Extension\StringLoaderExtension::templateFromString($this->env, ($context["title"] ?? null), "collection title template")));
            }
            // line 18
            $context["description"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, true, false, 18), $context["type"], [], "array", false, true, false, 18), "description", [], "array", true, true, false, 18) &&  !(null === (($_v10 = (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 18)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[$context["type"]] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["description"] ?? null) : null)))) ? ((($_v12 = (($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 18)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[$context["type"]] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["description"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, true, false, 18), $context["type"], [], "array", false, true, false, 18), "collection", [], "array", false, true, false, 18), "description", [], "array", true, true, false, 18) &&  !(null === (($_v14 = (($_v15 = (($_v16 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 18)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[$context["type"]] ?? null) : null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["collection"] ?? null) : null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["description"] ?? null) : null)))) ? ((($_v17 = (($_v18 = (($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "directories", [], "any", false, false, false, 18)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[$context["type"]] ?? null) : null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["collection"] ?? null) : null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["description"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["directory"], "description", [], "any", false, false, false, 18)))));
            // line 20
            yield "<tr>
            <td>
                <a href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(((($context["directory_url"] ?? null) . "/directory:") . $context["type"])));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null));
            yield "</a>
            </td>
            <td>
                ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null));
            yield "
            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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
        return "flex-objects/directories/default.html.twig";
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
        return array (  112 => 29,  94 => 25,  86 => 22,  82 => 20,  80 => 18,  77 => 16,  75 => 15,  73 => 14,  56 => 13,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "flex-objects/directories/default.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/flex-objects/templates/flex-objects/directories/default.html.twig");
    }
}
