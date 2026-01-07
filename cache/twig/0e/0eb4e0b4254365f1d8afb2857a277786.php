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

/* partials/structured-data.html.twig */
class __TwigTemplate_d3996a8286f20d82eb778b44a40eb5b0 extends Template
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
        // line 2
        yield "
";
        // line 6
        yield "<script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"WebSite\",
  \"name\": \"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 10), "html");
        yield "\",
  \"url\": \"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [true], "method", false, false, false, 11), "html", null, true);
        yield "\",
  ";
        // line 12
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 12), "description", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "  \"description\": \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13), "html");
            yield "\",
  ";
        }
        // line 15
        yield "  \"potentialAction\": {
    \"@type\": \"SearchAction\",
    \"target\": {
      \"@type\": \"EntryPoint\",
      \"urlTemplate\": \"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [true], "method", false, false, false, 19), "html", null, true);
        yield "/search?query={search_term_string}\"
    },
    \"query-input\": \"required name=search_term_string\"
  },
  \"inLanguage\": \"";
        // line 23
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 23), "getActive", [], "any", false, false, false, 23)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 23), "getActive", [], "any", false, false, false, 23), "html", null, true)) : ("en"));
        yield "\"
}
</script>

";
        // line 30
        yield "<script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"";
        // line 33
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 33) == "courses")) ? ("EducationalOrganization") : ("Organization"));
        yield "\",
  \"name\": \"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 34), "html");
        yield "\",
  ";
        // line 35
        $context["site_desc"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, true, false, 35), "description", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 35), "description", [], "any", false, false, false, 35), "Professional web development and digital services")) : ("Professional web development and digital services"));
        yield "\\n  \"description\": \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["site_desc"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::join(($context["site_desc"] ?? null), " ")) : (($context["site_desc"] ?? null))), "html");
        yield "\",
  \"url\": \"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [true], "method", false, false, false, 36), "html", null, true);
        yield "\",
  ";
        // line 37
        $context["logo_var"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_logo"), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "logo"));
        // line 38
        yield "  ";
        $context["logo_filename"] = null;
        // line 39
        yield "  
  ";
        // line 40
        if ((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["logo_var"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "      ";
            $context["first_item"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["logo_var"] ?? null));
            // line 42
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["first_item"] ?? null), "name", [], "any", true, true, false, 42)) {
                // line 43
                yield "          ";
                $context["logo_filename"] = CoreExtension::getAttribute($this->env, $this->source, ($context["first_item"] ?? null), "name", [], "any", false, false, false, 43);
                // line 44
                yield "      ";
            }
            // line 45
            yield "  ";
        }
        // line 46
        yield "
  ";
        // line 47
        if ((($tmp = ($context["logo_filename"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "  \"logo\": {
    \"@type\": \"ImageObject\",
    \"url\": \"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . ($context["logo_filename"] ?? null)), true), "html", null, true);
            yield "\",
    \"width\": \"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "logo_height"), 48), "html", null, true);
            yield "\",
    \"height\": \"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "logo_height"), 48), "html", null, true);
            yield "\"
  },
  \"image\": \"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . ($context["logo_filename"] ?? null)), true), "html", null, true);
            yield "\",
  ";
        }
        // line 56
        yield "  ";
        $context["contact_email"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_email"), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_email"));
        // line 57
        yield "  ";
        $context["contact_phone"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_phone"), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone"));
        // line 58
        yield "  ";
        if ((($context["contact_phone"] ?? null) || ($context["contact_email"] ?? null))) {
            // line 59
            yield "  \"contactPoint\": {
    \"@type\": \"ContactPoint\",
    ";
            // line 61
            if ((($tmp = ($context["contact_phone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "    \"telephone\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["contact_phone"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::join(($context["contact_phone"] ?? null), ", ")) : (($context["contact_phone"] ?? null))), "html");
                yield "\",
    ";
            }
            // line 64
            yield "    ";
            if ((($tmp = ($context["contact_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "    \"email\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["contact_email"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::join(($context["contact_email"] ?? null), ", ")) : (($context["contact_email"] ?? null))), "html");
                yield "\",
    ";
            }
            // line 67
            yield "    \"contactType\": \"Customer Service\",
    \"availableLanguage\": [\"";
            // line 68
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 68), "getActive", [], "any", false, false, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 68), "getActive", [], "any", false, false, false, 68), "html", null, true)) : ("en"));
            yield "\"]
  },
  ";
        }
        // line 71
        yield "  ";
        $context["contact_address"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_address"), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_address"));
        // line 72
        yield "  ";
        if ((($tmp = ($context["contact_address"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "  \"address\": {
    \"@type\": \"PostalAddress\",
    \"streetAddress\": \"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["contact_address"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::join(($context["contact_address"] ?? null), " ")) : (($context["contact_address"] ?? null))), "html");
            yield "\"
  },
  ";
        }
        // line 78
        yield "  \"sameAs\": [
    ";
        // line 79
        $context["social"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_social"), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_links"));
        // line 80
        yield "    ";
        if ((($tmp = ($context["social"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["social"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 82
                yield "        \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 82), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ",";
                }
                // line 83
                yield "      ";
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "    ";
        }
        // line 85
        yield "  ]
}
</script>

";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, false, 92) != "/")) {
            // line 93
            yield "<script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"BreadcrumbList\",
  \"itemListElement\": [
    {
      \"@type\": \"ListItem\",
      \"position\": 1,
      \"name\": \"Home\",
      \"item\": \"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [true], "method", false, false, false, 102), "html", null, true);
            yield "\"
    }
    ";
            // line 104
            $context["breadcrumbs"] = [];
            // line 105
            yield "    ";
            $context["current"] = ($context["page"] ?? null);
            // line 106
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->rangeFunc(0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 107
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["current"] ?? null), "parent", [], "any", false, false, false, 107) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["current"] ?? null), "parent", [], "any", false, false, false, 107), "routable", [], "any", false, false, false, 107))) {
                    // line 108
                    yield "        ";
                    $context["breadcrumbs"] = Twig\Extension\CoreExtension::merge([CoreExtension::getAttribute($this->env, $this->source, ($context["current"] ?? null), "parent", [], "any", false, false, false, 108)], ($context["breadcrumbs"] ?? null));
                    // line 109
                    yield "        ";
                    $context["current"] = CoreExtension::getAttribute($this->env, $this->source, ($context["current"] ?? null), "parent", [], "any", false, false, false, 109);
                    // line 110
                    yield "      ";
                }
                // line 111
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 113
                yield "    ,{
      \"@type\": \"ListItem\",
      \"position\": ";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 115) + 1), "html", null, true);
                yield ",
      \"name\": \"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "menu", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "menu", [], "any", false, false, false, 116), CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 116))) : (CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 116))), "html");
                yield "\",
      \"item\": \"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "url", [true], "method", false, false, false, 117), "html", null, true);
                yield "\"
    }
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
            unset($context['_seq'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "    ,{
      \"@type\": \"ListItem\",
      \"position\": ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["breadcrumbs"] ?? null)) + 2), "html", null, true);
            yield ",
      \"name\": \"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, false, 123), CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 123))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 123))), "html");
            yield "\",
      \"item\": \"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true], "method", false, false, false, 124), "html", null, true);
            yield "\"
    }
  ]
}
</script>
";
        }
        // line 130
        yield "
";
        // line 131
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 131) == "courses")) {
            // line 133
            yield "<script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"ItemList\",
  \"name\": \"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 137), "html");
            yield "\",
  \"description\": \"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metadata", [], "any", false, false, false, 138), "description", [], "any", false, false, false, 138), "html");
            yield "\",
  \"itemListElement\": [
    ";
            // line 140
            $context["courses"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 140);
            // line 141
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["courses"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 142
                yield "    {
      \"@type\": \"Course\",
      \"name\": \"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 144), "html");
                yield "\",
      \"description\": \"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "header", [], "any", false, false, false, 145), "short_description", [], "any", false, false, false, 145), "html");
                yield "\",
      \"provider\": {
        \"@type\": \"Organization\",
        \"name\": \"";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 148), "html");
                yield "\"
      }";
                // line 149
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "header", [], "any", false, false, false, 149), "instructor", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ",
      ";
                    // line 150
                    $context["instructor"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "header", [], "any", false, false, false, 150), "instructor", [], "any", false, false, false, 150);
                    // line 151
                    yield "      \"instructor\": {
        \"@type\": \"Person\",
        \"name\": \"";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["instructor"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::join(($context["instructor"] ?? null), ", ")) : (($context["instructor"] ?? null))), "html");
                    yield "\"
      }";
                }
                // line 154
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "header", [], "any", false, false, false, 154), "duration", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ",
      ";
                    // line 155
                    $context["duration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "header", [], "any", false, false, false, 155), "duration", [], "any", false, false, false, 155);
                    // line 156
                    yield "      \"timeRequired\": \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["duration"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::join(($context["duration"] ?? null), " ")) : (($context["duration"] ?? null))), "html");
                    yield "\"";
                }
                // line 157
                yield "    }";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ",";
                }
                // line 158
                yield "    ";
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
            unset($context['_seq'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            yield "  ]
}
</script>
";
        }
        // line 163
        yield "
";
        // line 164
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 164), "instructor", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 166
            yield "<script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"Course\",
  \"name\": \"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 170), "html");
            yield "\",
  \"description\": \"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 171), "short_description", [], "any", false, false, false, 171), "html");
            yield "\",
  \"provider\": {
    \"@type\": \"Organization\",
    \"name\": \"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 174), "html");
            yield "\",
    \"url\": \"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [true], "method", false, false, false, 175), "html", null, true);
            yield "\"
  },
  \"instructor\": {
    \"@type\": \"Person\",
    ";
            // line 179
            $context["page_instructor"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 179), "instructor", [], "any", false, false, false, 179);
            // line 180
            yield "    \"name\": \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["page_instructor"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::join(($context["page_instructor"] ?? null), ", ")) : (($context["page_instructor"] ?? null))), "html");
            yield "\"
  }";
            // line 181
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 181), "duration", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",
  ";
                // line 182
                $context["page_duration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 182), "duration", [], "any", false, false, false, 182);
                // line 183
                yield "  \"timeRequired\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["page_duration"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::join(($context["page_duration"] ?? null), " ")) : (($context["page_duration"] ?? null))), "html");
                yield "\"";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 183), "level", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",
  \"educationalLevel\": \"";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 184), "level", [], "any", false, false, false, 184), "html");
                yield "\"";
            }
            yield ",
  \"inLanguage\": \"en\",
  \"courseMode\": \"online\",
  \"availableLanguage\": [\"English\", \"Urdu\"]
}
</script>
";
        }
        // line 191
        yield "
";
        // line 195
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "taxonomy", [], "any", false, false, false, 195), "tag", [], "any", false, false, false, 195) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "taxonomy", [], "any", false, false, false, 195), "category", [], "any", false, false, false, 195)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 195), "author", [], "any", false, false, false, 195))) {
            // line 196
            yield "<script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"";
            // line 199
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "taxonomy", [], "any", false, false, false, 199), "category", [], "any", false, false, false, 199)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("BlogPosting") : ("Article"));
            yield "\",
  \"headline\": \"";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 200), "html");
            yield "\",
  \"name\": \"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 201), "html");
            yield "\",
  ";
            // line 202
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "summary", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 203
                yield "  \"description\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "summary", [200], "method", false, false, false, 203)), "html");
                yield "\",
  ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 204
($context["site"] ?? null), "metadata", [], "any", false, false, false, 204), "description", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 205
                yield "  \"description\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 205), "description", [], "any", false, false, false, 205), "html");
                yield "\",
  ";
            }
            // line 207
            yield "  \"url\": \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true], "method", false, false, false, 207), "html", null, true);
            yield "\",
  \"mainEntityOfPage\": {
    \"@type\": \"WebPage\",
    \"@id\": \"";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true], "method", false, false, false, 210), "html", null, true);
            yield "\"
  },
  ";
            // line 212
            if ((($tmp = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 212), "images", [], "any", false, false, false, 212))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 213
                yield "  \"image\": {
    \"@type\": \"ImageObject\",
    \"url\": \"";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 215), "images", [], "any", false, false, false, 215)), "url", [true], "method", false, false, false, 215), "html", null, true);
                yield "\",
    \"width\": \"";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 216), "images", [], "any", false, false, false, 216)), "width", [], "any", true, true, false, 216)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 216), "images", [], "any", false, false, false, 216)), "width", [], "any", false, false, false, 216), 1200)) : (1200)), "html", null, true);
                yield "\",
    \"height\": \"";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 217), "images", [], "any", false, false, false, 217)), "height", [], "any", true, true, false, 217)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 217), "images", [], "any", false, false, false, 217)), "height", [], "any", false, false, false, 217), 630)) : (630)), "html", null, true);
                yield "\"
  },
  ";
            }
            // line 220
            yield "  \"datePublished\": \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 220), "c"), "html", null, true);
            yield "\",
  \"dateModified\": \"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "modified", [], "any", true, true, false, 221)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "modified", [], "any", false, false, false, 221), CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 221))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 221))), "c"), "html", null, true);
            yield "\",
  \"author\": {
    \"@type\": \"Person\",
    \"name\": \"";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 224), "author", [], "any", true, true, false, 224)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 224), "author", [], "any", false, false, false, 224), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, false, false, 224), "name", [], "any", false, false, false, 224))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, false, false, 224), "name", [], "any", false, false, false, 224))), CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 224)), "html");
            yield "\"
  },
  \"publisher\": {
    \"@type\": \"Organization\",
    \"name\": \"";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 228), "html");
            yield "\",
    \"url\": \"";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [true], "method", false, false, false, 229), "html", null, true);
            yield "\"
    ";
            // line 230
            if ((($tmp = ($context["logo_filename"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",
    \"logo\": {
      \"@type\": \"ImageObject\",
      \"url\": \"";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . ($context["logo_filename"] ?? null)), true), "html", null, true);
                yield "\"
    }
    ";
            }
            // line 236
            yield "  },
  ";
            // line 237
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "taxonomy", [], "any", false, false, false, 237), "tag", [], "any", false, false, false, 237)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 238
                yield "  \"keywords\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "taxonomy", [], "any", false, false, false, 238), "tag", [], "any", false, false, false, 238), ", "), "html");
                yield "\",
  ";
            }
            // line 240
            yield "  \"inLanguage\": \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 240), "language", [], "any", true, true, false, 240)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 240), "language", [], "any", false, false, false, 240), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 240), "getActive", [], "any", false, false, false, 240))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 240), "getActive", [], "any", false, false, false, 240))), "en"), "html", null, true);
            yield "\"
}
</script>
";
        }
        // line 244
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/structured-data.html.twig";
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
        return array (  687 => 244,  679 => 240,  673 => 238,  671 => 237,  668 => 236,  662 => 233,  656 => 230,  652 => 229,  648 => 228,  641 => 224,  635 => 221,  630 => 220,  624 => 217,  620 => 216,  616 => 215,  612 => 213,  610 => 212,  605 => 210,  598 => 207,  592 => 205,  590 => 204,  585 => 203,  583 => 202,  579 => 201,  575 => 200,  571 => 199,  566 => 196,  564 => 195,  561 => 191,  549 => 184,  541 => 183,  539 => 182,  535 => 181,  530 => 180,  528 => 179,  521 => 175,  517 => 174,  511 => 171,  507 => 170,  501 => 166,  499 => 164,  496 => 163,  490 => 159,  476 => 158,  471 => 157,  466 => 156,  464 => 155,  460 => 154,  455 => 153,  451 => 151,  449 => 150,  445 => 149,  441 => 148,  435 => 145,  431 => 144,  427 => 142,  409 => 141,  407 => 140,  402 => 138,  398 => 137,  392 => 133,  390 => 131,  387 => 130,  378 => 124,  374 => 123,  370 => 122,  366 => 120,  349 => 117,  345 => 116,  341 => 115,  337 => 113,  319 => 112,  313 => 111,  310 => 110,  307 => 109,  304 => 108,  301 => 107,  296 => 106,  293 => 105,  291 => 104,  286 => 102,  275 => 93,  273 => 92,  267 => 85,  264 => 84,  250 => 83,  243 => 82,  225 => 81,  222 => 80,  220 => 79,  217 => 78,  211 => 75,  207 => 73,  204 => 72,  201 => 71,  195 => 68,  192 => 67,  186 => 65,  183 => 64,  177 => 62,  175 => 61,  171 => 59,  168 => 58,  165 => 57,  162 => 56,  157 => 54,  152 => 52,  148 => 51,  144 => 50,  140 => 48,  138 => 47,  135 => 46,  132 => 45,  129 => 44,  126 => 43,  123 => 42,  120 => 41,  118 => 40,  115 => 39,  112 => 38,  110 => 37,  106 => 36,  100 => 35,  96 => 34,  92 => 33,  87 => 30,  80 => 23,  73 => 19,  67 => 15,  61 => 13,  59 => 12,  55 => 11,  51 => 10,  45 => 6,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/structured-data.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/structured-data.html.twig");
    }
}
