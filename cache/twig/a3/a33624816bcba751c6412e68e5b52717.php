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

/* partials/bottom-banner.html.twig */
class __TwigTemplate_29c6cdc348a36fe574672a332062ecf1 extends Template
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
        $context["copyright"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_copyright");
        // line 3
        $context["site_name"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "site_name"), CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 3));
        // line 4
        $context["direction"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "direction"), "ltr");
        // line 5
        $context["bottom_banner_bg"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "top_banner_bg_color"), "var(--color-bottom-banner-bg)");
        // line 6
        $context["bottom_banner_bg_style"] = (((CoreExtension::matches("/^var\\(/i", ($context["bottom_banner_bg"] ?? null)) || CoreExtension::matches("/^oklch/i", ($context["bottom_banner_bg"] ?? null)))) ? (($context["bottom_banner_bg"] ?? null)) : ((("oklch(from " . ($context["bottom_banner_bg"] ?? null)) . " L C H)")));
        // line 7
        yield "
";
        // line 10
        yield "\t";
        // line 38
        yield "
<footer
\tid=\"bottom-banner\" class=\"bottom-banner-main\" style=\"background-color: ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bottom_banner_bg_style"] ?? null), "html", null, true);
        yield ";\" role=\"contentinfo\" aria-label=\"Site bottom banner\">
\t";
        // line 42
        yield "\t<script type=\"application/ld+json\">
\t\t{
\t\t            \"@context\": \"https://schema.org\",
\t\t            \"@type\": \"Organization\",
\t\t            \"name\": \"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "orgName", [], "any", false, false, false, 46), "js"), "html", null, true);
        yield "\",
\t\t            \"url\": \"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("", [], true), "html", null, true);
        yield "\",
\t\t";
        // line 48
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "\"logo\": \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo"), [], true), "html", null, true);
            yield "\",
\t\t";
        }
        // line 50
        yield "\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "email", [], "any", false, false, false, 50) || CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "phone", [], "any", false, false, false, 50))) {
            // line 51
            yield "\t\t\t\"contactPoint\": {
\t\t\t                    \"@type\": \"ContactPoint\",
\t\t\t";
            // line 53
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "phone", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "\"telephone\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "phone", [], "any", false, false, false, 53), "js"), "html", null, true);
                yield "\",
\t\t\t";
            }
            // line 55
            yield "\t\t\t";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "email", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "\"email\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "email", [], "any", false, false, false, 55), "js"), "html", null, true);
                yield "\",
\t\t\t";
            }
            // line 57
            yield "\t\t\t\"contactType\": \"customer service\"
\t\t\t                },
\t\t";
        }
        // line 60
        yield "\t\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "address", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "\t\t\t\"address\": {
\t\t\t                    \"@type\": \"PostalAddress\",
\t\t\t                    \"streetAddress\": \"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "address", [], "any", false, false, false, 63), "js"), "html", null, true);
            yield "\"
\t\t\t                },
\t\t";
        }
        // line 66
        yield "\t\t\"sameAs\":
\t\t";
        // line 67
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "socials", [], "any", false, false, false, 67));
        yield "
\t\t}
\t</script>

\t";
        // line 72
        yield "\t<div class=\"bottom-banner-pattern\" aria-hidden=\"true\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<defs>
\t\t\t\t<pattern id=\"bottom-banner-pattern\" x=\"0\" y=\"0\" width=\"40\" height=\"40\" patternunits=\"userSpaceOnUse\">
\t\t\t\t\t<circle cx=\"20\" cy=\"20\" r=\"1\" fill=\"currentColor\"/>
\t\t\t\t</pattern>
\t\t\t</defs>
\t\t\t<rect width=\"100%\" height=\"100%\" fill=\"url(#bottom-banner-pattern)\"/>
\t\t</svg>
\t</div>

\t";
        // line 84
        yield "\t";
        $context["widgets"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_widgets_order"), ["brand", "social", "nav", "newsletter", "copyright"]);
        // line 85
        yield "
\t<div class=\"bottom-banner-layout-stack\">
\t\t";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["widgets"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 88
            yield "\t\t\t";
            if (($context["widget"] == "brand")) {
                // line 89
                yield "\t\t\t\t";
                // line 90
                yield "\t\t\t\t<div class=\"bottom-banner-header\">
\t\t\t\t\t<div class=\"bottom-banner-brand-column\">
\t\t\t\t\t\t<div class=\"bottom-banner-brand-header\">
\t\t\t\t\t\t\t";
                // line 93
                $context["logo_var"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo");
                // line 94
                yield "\t\t\t\t\t\t\t";
                if ((($context["logo_var"] ?? null) && $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_show_logo"))) {
                    // line 95
                    yield "\t\t\t\t\t\t\t\t<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["home_url"] ?? null), "html", null, true);
                    yield "\" class=\"bottom-banner-logo-link\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["logo_var"] ?? null)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
                    yield "\" class=\"bottom-banner-logo\" width=\"80\" height=\"auto\" loading=\"lazy\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 99
                yield "
\t\t\t\t\t\t\t";
                // line 100
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_show_site_name")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 101
                    yield "\t\t\t\t\t\t\t\t<h2 class=\"bottom-banner-brand-title\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
                    yield "</h2>
\t\t\t\t\t\t\t";
                }
                // line 103
                yield "
\t\t\t\t\t\t\t";
                // line 104
                if (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "site_tagline") && $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_show_tagline"))) {
                    // line 105
                    yield "\t\t\t\t\t\t\t\t<p class=\"bottom-banner-brand-tagline\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "site_tagline"), "html", null, true);
                    yield "</p>
\t\t\t\t\t\t\t";
                }
                // line 107
                yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
            } elseif ((            // line 111
$context["widget"] == "newsletter")) {
                // line 112
                yield "\t\t\t\t";
                // line 113
                yield "\t\t\t\t";
                yield from $this->load("partials/bottom-banner-newsletter.html.twig", 113)->unwrap()->yield($context);
                // line 114
                yield "
\t\t\t";
            } elseif ((            // line 115
$context["widget"] == "social")) {
                // line 116
                yield "\t\t\t\t";
                // line 117
                yield "\t\t\t\t<div class=\"bottom-banner-social-strip\">
\t\t\t\t\t<div class=\"bottom-banner-body\">
\t\t\t\t\t\t<section class=\"bottom-banner-social-section\" aria-labelledby=\"bottom-banner-social-heading\">
\t\t\t\t\t\t\t<h2 id=\"bottom-banner-social-heading\" class=\"bottom-banner-social-heading\">Connect With Us</h2>
\t\t\t\t\t\t\t";
                // line 121
                yield from $this->load("partials/social-icons.html.twig", 121)->unwrap()->yield(CoreExtension::merge($context, ["context" => "bottom_banner"]));
                // line 122
                yield "\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
            } elseif ((            // line 126
$context["widget"] == "nav")) {
                // line 127
                yield "\t\t\t\t";
                // line 128
                yield "\t\t\t\t<div class=\"bottom-banner-nav-strip\">
\t\t\t\t\t<div class=\"bottom-banner-body\">
\t\t\t\t\t\t<div class=\"bottom-banner-grid\">
\t\t\t\t\t\t\t";
                // line 131
                $context["bottom_banner_columns"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_columns");
                // line 132
                yield "\t\t\t\t\t\t\t";
                if ((($tmp = ($context["bottom_banner_columns"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 133
                    yield "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["bottom_banner_columns"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                        // line 134
                        yield "\t\t\t\t\t\t\t\t\t<nav class=\"bottom-banner-nav-column\" aria-labelledby=\"bottom-banner-nav-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 134), "html", null, true);
                        yield "\" data-accordion=\"mobile\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bottom-banner-nav-toggle\" aria-expanded=\"false\" aria-controls=\"bottom-banner-nav-content-";
                        // line 135
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 135), "html", null, true);
                        yield "\" data-bottom-banner-toggle>
\t\t\t\t\t\t\t\t\t\t\t<h3 id=\"bottom-banner-nav-";
                        // line 136
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 136), "html", null, true);
                        yield "\" class=\"bottom-banner-nav-title\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 136), "html", null, true);
                        yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bottom-banner-nav-icon\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<div id=\"bottom-banner-nav-content-";
                        // line 139
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 139), "html", null, true);
                        yield "\" class=\"bottom-banner-nav-content\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 140
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "links", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 141
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"bottom-banner-nav-list\" role=\"list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 142
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "links", [], "any", false, false, false, 142));
                            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                                // line 143
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 144
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 144), "html", null, true);
                                yield "\" class=\"bottom-banner-nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bottom-banner-nav-link-icon la la-angle-";
                                // line 145
                                yield (((($context["direction"] ?? null) == "rtl")) ? ("left") : ("right"));
                                yield "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bottom-banner-nav-link-text\">";
                                // line 146
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "text", [], "any", false, false, false, 146), "html", null, true);
                                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 150
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 152
                        yield "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t";
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
                    unset($context['_seq'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    yield "\t\t\t\t\t\t\t";
                }
                // line 156
                yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
            } elseif ((            // line 160
$context["widget"] == "copyright")) {
                // line 161
                yield "\t\t\t\t";
                // line 162
                yield "\t\t\t\t<div class=\"bottom-banner-footer\">
\t\t\t\t\t<div class=\"bottom-banner-footer-content\">
\t\t\t\t\t\t<div class=\"bottom-banner-copyright\">
\t\t\t\t\t\t\t";
                // line 165
                if ((($tmp = ($context["copyright"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 166
                    yield "\t\t\t\t\t\t\t\t";
                    yield Twig\Extension\CoreExtension::replace(($context["copyright"] ?? null), ["{year}" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "[year]" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y")]);
                    yield "
\t\t\t\t\t\t\t";
                } else {
                    // line 168
                    yield "\t\t\t\t\t\t\t\t<p>&copy;
\t\t\t\t\t\t\t\t\t";
                    // line 169
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t";
                    // line 170
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
                    yield ". All rights reserved.</p>
\t\t\t\t\t\t\t";
                }
                // line 172
                yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 176
            yield "\t\t";
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
        unset($context['_seq'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "\t</div>

\t";
        // line 180
        yield "\t<a href=\"#top\" class=\"back-to-top\" aria-label=\"Back to top\" data-back-to-top>
\t\t<i class=\"la la-angle-up icon-lg\" aria-hidden=\"true\"></i>
\t</a>
</footer>
";
        yield from [];
    }

    // line 10
    public function macro_social_icon($url = null, $platform = null, $label = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "platform" => $platform,
            "label" => $label,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "\t";
            $context["show_mobile"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_show_social_labels_mobile");
            // line 12
            yield "\t";
            $context["show_desktop"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_show_social_labels_desktop");
            // line 13
            yield "\t";
            $context["svg_paths"] = ["facebook" => "M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z", "twitter" => "M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z", "instagram" => "M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z", "youtube" => "M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z", "telegram" => "M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z", "maps" => "M12 0C7.802 0 4.4 3.402 4.4 7.602C4.4 11.174 12 24 12 24S19.6 11.174 19.6 7.602C19.6 3.402 16.199 0 12 0ZM12 10.933C10.16 10.933 8.667 9.44 8.667 7.6C8.667 5.76 10.16 4.267 12 4.267C13.84 4.267 15.333 5.76 15.333 7.6C15.333 9.44 13.84 10.933 12 10.933Z", "whatsapp" => "M12.031 0C5.396 0 0 5.396 0 12.031c0 2.12.55 4.167 1.589 5.968L.47 23.511l5.656-1.484A11.967 11.967 0 0012.03 24.06c6.636 0 12.031-5.396 12.031-12.03S18.667 0 12.031 0zM12.03 22.043c-1.83 0-3.628-.488-5.203-1.422l-.373-.222-3.86 1.013 1.031-3.765-.24-.386a9.982 9.982 0 01-1.533-5.23c0-5.515 4.486-10.003 10.046-10.003h.005c5.513 0 10.003 4.488 10.003 10.003.002 5.514-4.488 10.012-9.871 10.012zm5.492-7.513c-.3-.15-1.78-.878-2.055-.978-.276-.1-.476-.15-.676.15-.2.3-.776.978-.951 1.178-.175.2-.351.226-.651.076-1.286-.64-2.368-1.642-3.32-3.338-.266-.475 2.152-3.048-1.127-1.702-.1-.041-.22-.066-.34-.1-.13-.035-2.016-4.99-.214-4.832.185.016.37.039.53.07.135.025.29.076.4.202.155.176.5 1.254.55 1.354.05.1.075.213.013.338-.063.125-.1.2-.188.3-.1.113-.213.25-.3.338-.1.1-.213.213-.088.425.125.213.551.913 1.188 1.488.825.738 1.525.963 1.738 1.063.213.1.338.088.463-.05.125-.138.538-.626.688-.838.15-.213.3-.175.525-.088.225.088 1.425.675 1.675.8.25.125.413.188.475.288.063.1.063.576-.188 1.276z", "phone" => "M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z", "email" => "M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67zM22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z", "linkedin" => "M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z", "tiktok" => "M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93v6.14c0 1.36-.02 2.72-.31 4.05-.67 3.09-3.4 5.25-6.55 5.56-4.52.44-8.86-2.43-9.66-6.86-.44-2.45.2-4.99 1.74-6.89 1.55-1.92 4.02-3 6.47-2.91v4.17c-1.52-.08-3.03 1.14-3.5 2.59-.53 1.63.38 3.56 2.02 4.21 1.65.65 3.59.07 4.54-1.43.37-.58.55-1.26.54-1.94.01-3.69.01-7.39.01-11.08.01-1.35.01-2.7.01-4.05h1.11z", "pinterest" => "M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.399.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.951-7.252 4.173 0 7.41 2.967 7.41 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z", "snapchat" => "M12.003 0C5.373 0 0 5.373 0 12c0 6.628 5.373 12 12.003 12 6.627 0 11.997-5.372 11.997-12 0-6.627-5.37-12-11.997-12zm7.042 16.969c-.792 1.488-3.058 1.488-3.058 1.488S15.659 20 12.003 20c-3.659 0-3.987-1.543-3.987-1.543s-2.266 0-3.058-1.488c-.689-1.295-1.472-1.892-1.472-1.892s.823-.278 1.458-.875c.635-.597.55-1.914.55-1.914s-.699-1.234-1.054-2.864c-.354-1.631-.059-2.903.626-4.09 1.353-2.348 4.341-2.98 6.937-2.98 2.597 0 5.584.632 6.937 2.98.685 1.187.979 2.459.626 4.09-.356 1.63-.1.054 2.864.55 1.914.55 1.914 1.458.875.635.597 1.472.875 1.472 1.892z", "spotify" => "M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z", "discord" => "M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028 14.09 14.09 0 0 0 1.226-1.994.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.04.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.419 0 1.334-.956 2.42-2.157 2.42zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.419 0 1.334-.946 2.42-2.157 2.42z"];
            // line 30
            yield "\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"bottom-banner-social-icon ";
            yield (((($tmp = ($context["show_mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show-label-mobile") : (""));
            yield " ";
            yield (((($tmp = ($context["show_desktop"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show-label-desktop") : (""));
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "\"> <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"currentColor\" class=\"bottom-banner-social-icon-svg\" aria-hidden=\"true\">
\t\t\t<path d=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["svg_paths"] ?? null), ($context["platform"] ?? null), [], "array", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["svg_paths"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["platform"] ?? null)] ?? null) : null), "")) : ("")), "html", null, true);
            yield "\"/>
\t\t</svg>
\t\t";
            // line 33
            if ((($context["show_mobile"] ?? null) || ($context["show_desktop"] ?? null))) {
                // line 34
                yield "\t\t\t<span class=\"social-label\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ($context["platform"] ?? null)), "html", null, true);
                yield "</span>
\t\t";
            }
            // line 36
            yield "\t</a>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/bottom-banner.html.twig";
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
        return array (  478 => 36,  472 => 34,  470 => 33,  465 => 31,  454 => 30,  451 => 13,  448 => 12,  445 => 11,  431 => 10,  422 => 180,  418 => 177,  404 => 176,  398 => 172,  393 => 170,  389 => 169,  386 => 168,  380 => 166,  378 => 165,  373 => 162,  371 => 161,  369 => 160,  363 => 156,  360 => 155,  344 => 152,  340 => 150,  330 => 146,  326 => 145,  322 => 144,  319 => 143,  315 => 142,  312 => 141,  310 => 140,  306 => 139,  298 => 136,  294 => 135,  289 => 134,  271 => 133,  268 => 132,  266 => 131,  261 => 128,  259 => 127,  257 => 126,  251 => 122,  249 => 121,  243 => 117,  241 => 116,  239 => 115,  236 => 114,  233 => 113,  231 => 112,  229 => 111,  223 => 107,  217 => 105,  215 => 104,  212 => 103,  206 => 101,  204 => 100,  201 => 99,  193 => 96,  188 => 95,  185 => 94,  183 => 93,  178 => 90,  176 => 89,  173 => 88,  156 => 87,  152 => 85,  149 => 84,  136 => 72,  129 => 67,  126 => 66,  120 => 63,  116 => 61,  113 => 60,  108 => 57,  100 => 55,  93 => 53,  89 => 51,  86 => 50,  79 => 48,  75 => 47,  71 => 46,  65 => 42,  61 => 40,  57 => 38,  55 => 10,  52 => 7,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/bottom-banner.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/bottom-banner.html.twig");
    }
}
