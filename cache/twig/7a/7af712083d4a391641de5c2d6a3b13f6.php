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

/* partials/footer.html.twig */
class __TwigTemplate_59ed5d271ca050322e0b439a6727884b extends Template
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
        $context["footer_columns"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer_columns");
        // line 3
        $context["show_social"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer_show_social"), true);
        // line 4
        $context["copyright"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer_copyright");
        // line 5
        $context["site_name"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "site_name"), CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 5));
        // line 6
        $context["direction"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "direction"), "ltr");
        // line 7
        $context["total_columns"] = (1 + (((($tmp = ($context["footer_columns"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["footer_columns"] ?? null))) : (0)));
        // line 8
        $context["has_contact"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone") || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_address")) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email"));
        // line 9
        yield "
";
        // line 20
        yield "
<footer id=\"footer\" class=\"footer\" role=\"contentinfo\" aria-label=\"Site footer\">
    ";
        // line 23
        yield "    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"Organization\",
        \"name\": \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "js"), "html", null, true);
        yield "\",
        \"url\": \"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("", [], true), "html", null, true);
        yield "\",
        ";
        // line 29
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "        \"logo\": \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo"), [], true), "html", null, true);
            yield "\",
        ";
        }
        // line 32
        yield "        ";
        if (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email") || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone"))) {
            // line 33
            yield "        \"contactPoint\": {
            \"@type\": \"ContactPoint\",
            ";
            // line 35
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "\"telephone\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone"), "js"), "html", null, true);
                yield "\",";
            }
            // line 36
            yield "            ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "\"email\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email"), "js"), "html", null, true);
                yield "\",";
            }
            // line 37
            yield "            \"contactType\": \"customer service\"
        },
        ";
        }
        // line 40
        yield "        ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_address")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "        \"address\": {
            \"@type\": \"PostalAddress\",
            \"streetAddress\": \"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_address"), "js"), ["
" => ", "]), "html", null, true);
            yield "\"
        },
        ";
        }
        // line 46
        yield "        \"sameAs\": [
            ";
        // line 47
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_facebook")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_facebook"), "js"), "html", null, true);
            yield "\",";
        }
        // line 48
        yield "            ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_twitter")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_twitter"), "js"), "html", null, true);
            yield "\",";
        }
        // line 49
        yield "            ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_instagram")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_instagram"), "js"), "html", null, true);
            yield "\",";
        }
        // line 50
        yield "            ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_youtube")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_youtube"), "js"), "html", null, true);
            yield "\",";
        }
        // line 51
        yield "            ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_telegram")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_telegram"), "js"), "html", null, true);
            yield "\",";
        }
        // line 52
        yield "            ";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_whatsapp")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_whatsapp"), "js"), "html", null, true);
            yield "\"";
        }
        // line 53
        yield "        ]
    }
    </script>

    ";
        // line 58
        yield "    <div class=\"footer-pattern\" aria-hidden=\"true\">
        <svg class=\"w-full h-full\" xmlns=\"http://www.w3.org/2000/svg\">
            <defs>
                <pattern id=\"footer-pattern\" x=\"0\" y=\"0\" width=\"40\" height=\"40\" patternUnits=\"userSpaceOnUse\">
                    <circle cx=\"20\" cy=\"20\" r=\"1\" fill=\"currentColor\"/>
                </pattern>
            </defs>
            <rect width=\"100%\" height=\"100%\" fill=\"url(#footer-pattern)\"/>
        </svg>
    </div>

    ";
        // line 70
        yield "    <div class=\"footer-main\">
        
        ";
        // line 73
        yield "        ";
        if ((($context["show_social"] ?? null) && ((((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_facebook") || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_twitter")) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_instagram")) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_youtube")) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_telegram")) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_whatsapp")))) {
            // line 74
            yield "            <section class=\"footer-social\" aria-labelledby=\"footer-social-heading\">
                <h2 id=\"footer-social-heading\" class=\"footer-social-title\">
                    Connect With Us
                </h2>
                <div class=\"footer-social-icons\">
                    ";
            // line 79
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_facebook")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 80, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_facebook"), "facebook", "lab la-facebook-f", "Visit our Facebook page"]);
                yield "
                    ";
            }
            // line 82
            yield "                    ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_twitter")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 83, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_twitter"), "twitter", "lab la-twitter", "Follow us on Twitter"]);
                yield "
                    ";
            }
            // line 85
            yield "                    ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_instagram")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 86, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_instagram"), "instagram", "lab la-instagram", "Follow us on Instagram"]);
                yield "
                    ";
            }
            // line 88
            yield "                    ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_youtube")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 89
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 89, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_youtube"), "youtube", "lab la-youtube", "Subscribe to our YouTube channel"]);
                yield "
                    ";
            }
            // line 91
            yield "                    ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_telegram")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 92
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 92, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_telegram"), "telegram", "lab la-telegram", "Join our Telegram group"]);
                yield "
                    ";
            }
            // line 94
            yield "                    ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_whatsapp")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 95
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 95, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_whatsapp"), "whatsapp", "lab la-whatsapp", "Contact us on WhatsApp"]);
                yield "
                    ";
            }
            // line 97
            yield "                </div>
            </section>
        ";
        }
        // line 100
        yield "
        ";
        // line 102
        yield "        <div class=\"footer-grid footer-grid-cols-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_columns"] ?? null), "html", null, true);
        yield "\">
            
            ";
        // line 105
        yield "            <div class=\"footer-brand\">
                <div class=\"footer-brand-identity\">
                    <h2 class=\"footer-brand-name\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
        yield "</h2>
                    ";
        // line 108
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "site_tagline")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "                        <p class=\"footer-brand-tagline\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "site_tagline"), "html", null, true);
            yield "</p>
                    ";
        }
        // line 111
        yield "                </div>
                
                ";
        // line 114
        yield "                ";
        if ((($tmp = ($context["has_contact"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "                    <address class=\"footer-contact\">
                        ";
            // line 116
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "                            <a href=\"tel:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone"), [" " => "", "(" => "", ")" => "", "-" => ""]), "html", null, true);
                yield "\" 
                               class=\"footer-contact-item\">
                                <span class=\"footer-contact-icon\">
                                    <i class=\"la la-phone\" aria-hidden=\"true\"></i>
                                </span>
                                <span>";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone"), "html", null, true);
                yield "</span>
                            </a>
                        ";
            }
            // line 125
            yield "                        
                        ";
            // line 126
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 127
                yield "                            <a href=\"mailto:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email"), "html", null, true);
                yield "\" 
                               class=\"footer-contact-item\">
                                <span class=\"footer-contact-icon\">
                                    <i class=\"la la-envelope\" aria-hidden=\"true\"></i>
                                </span>
                                <span class=\"break-all\">";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email"), "html", null, true);
                yield "</span>
                            </a>
                        ";
            }
            // line 135
            yield "                        
                        ";
            // line 136
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_address")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 137
                yield "                            <div class=\"footer-contact-item\">
                                <span class=\"footer-contact-icon\">
                                    <i class=\"la la-map-marker\" aria-hidden=\"true\"></i>
                                </span>
                                <span class=\"not-italic\">";
                // line 141
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_address"), "html", null, true));
                yield "</span>
                            </div>
                        ";
            }
            // line 144
            yield "                    </address>
                ";
        }
        // line 146
        yield "            </div>
            
            ";
        // line 149
        yield "            ";
        if ((($tmp = ($context["footer_columns"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 150
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["footer_columns"] ?? null));
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
                // line 151
                yield "                    <nav class=\"footer-nav\" aria-labelledby=\"footer-nav-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 151), "html", null, true);
                yield "\">
                        <button type=\"button\"
                                class=\"footer-nav-toggle\"
                                aria-expanded=\"false\"
                                aria-controls=\"footer-nav-content-";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 155), "html", null, true);
                yield "\"
                                data-footer-toggle>
                            <h3 id=\"footer-nav-";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 157), "html", null, true);
                yield "\" class=\"footer-nav-title\">
                                ";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 158), "html", null, true);
                yield "
                            </h3>
                            <i class=\"la la-angle-down footer-nav-icon\" aria-hidden=\"true\"></i>
                        </button>
                        
                        <div id=\"footer-nav-content-";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 163), "html", null, true);
                yield "\"
                             class=\"footer-nav-content\"
                             aria-hidden=\"true\">
                            ";
                // line 166
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "links", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 167
                    yield "                                <ul class=\"footer-nav-list\" role=\"list\">
                                    ";
                    // line 168
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "links", [], "any", false, false, false, 168));
                    foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                        // line 169
                        yield "                                        <li>
                                            <a href=\"";
                        // line 170
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 170), "html", null, true);
                        yield "\" class=\"footer-nav-link\">
                                                <i class=\"la la-angle-";
                        // line 171
                        yield (((($context["direction"] ?? null) == "rtl")) ? ("left") : ("right"));
                        yield "\" aria-hidden=\"true\"></i>
                                                <span>";
                        // line 172
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "text", [], "any", false, false, false, 172), "html", null, true);
                        yield "</span>
                                            </a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    yield "                                </ul>
                            ";
                }
                // line 178
                yield "                        </div>
                    </nav>
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
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            yield "            ";
        }
        // line 182
        yield "            
        </div>
    </div>

    ";
        // line 187
        yield "    <div class=\"footer-sub\">
        <div class=\"footer-sub-content\">
            <div class=\"footer-copyright\">
                ";
        // line 190
        if ((($tmp = ($context["copyright"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 191
            yield "                    ";
            yield ($context["copyright"] ?? null);
            yield "
                ";
        } else {
            // line 193
            yield "                    <p>&copy; ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
            yield ". All rights reserved.</p>
                ";
        }
        // line 195
        yield "            </div>
            
            <div class=\"footer-credits\">
                <span>Powered by</span>
                <a href=\"https://getgrav.org\" target=\"_blank\" rel=\"noopener noreferrer\">Grav</a>
                <span>•</span>
                <a href=\"https://github.com/syedaalin/grav-theme-nur-ul-huda\" target=\"_blank\" rel=\"noopener noreferrer\">Nur-ul-Huda Theme</a>
            </div>
        </div>
    </div>
    
    ";
        // line 207
        yield "    <a href=\"#top\" class=\"footer-back-to-top\" aria-label=\"Back to top\" data-back-to-top>
        <i class=\"la la-angle-up\" aria-hidden=\"true\"></i>
    </a>
</footer>

<style>
/* Footer CSS Variables - 2026 Modern Standard (OKLCH) */
:root {
    /* Deep Navy/Black independent of SRGB */
    --footer-bg-from: oklch(0.15 0.02 260);
    --footer-bg-via: oklch(0.20 0.03 260);
    --footer-bg-to: oklch(0.15 0.02 260);
    --footer-text: oklch(0.85 0.02 260);
    --footer-text-muted: oklch(0.70 0.02 260);
    --footer-border: oklch(0.30 0.03 260 / 0.5);
    --footer-sub-bg: oklch(0.12 0.02 260 / 0.5);
    --footer-icon-bg: oklch(0.25 0.03 260 / 0.5);
    --footer-icon-bg-hover: oklch(0.65 0.22 260 / 0.2);
    --footer-social-bg: oklch(0.25 0.03 260 / 0.8);
    --footer-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
}

/* Main Footer */
.footer {
    position: relative;
    overflow: hidden;
    background: linear-gradient(to bottom right, var(--footer-bg-from), var(--footer-bg-via), var(--footer-bg-to));
    color: var(--footer-text);
}

/* Background Pattern */
.footer-pattern {
    position: absolute;
    inset: 0;
    opacity: 0.05;
    pointer-events: none;
}

/* Main Content Container - The \"Container\" for Queries */
.footer-main {
    position: relative;
    container-type: inline-size;
    max-width: 1280px;
    margin: 0 auto;
    /* Fluid Padding using clamp() */
    padding: clamp(3rem, 5cqw + 2rem, 5rem) clamp(1rem, 4cqw, 3rem);
}

/* Social Media Section */
.footer-social {
    margin-bottom: clamp(2rem, 4cqw, 3.5rem);
    text-align: center;
}

@container (min-width: 768px) {
    .footer-social {
        text-align: left;
    }
}

.footer-social-title {
    color: white;
    font-weight: 700;
    font-size: clamp(1.125rem, 2cqw + 0.5rem, 1.35rem);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 1rem;
}

.footer-social-icons {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: clamp(0.75rem, 1cqw, 1.25rem);
}

@container (min-width: 768px) {
    .footer-social-icons {
        justify-content: flex-start;
    }
}

.footer-social-icon {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: clamp(3rem, 4cqw, 3.75rem);
    height: clamp(3rem, 4cqw, 3.75rem);
    border-radius: 9999px;
    background: var(--footer-social-bg);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    transition: all var(--footer-transition);
    will-change: transform;
}

.footer-social-icon:hover {
    background: var(--color-primary);
    transform: scale(1.1);
    box-shadow: 0 10px 15px -3px rgba(var(--color-primary-rgb), 0.3);
}

.footer-social-icon:focus-visible {
    outline: 2px solid var(--color-primary);
    outline-offset: 4px;
}

.footer-social-icon i {
    font-size: clamp(1.25rem, 1.5cqw, 1.6rem);
    transition: transform var(--footer-transition);
}

.footer-social-icon:hover i {
    transform: scale(1.1);
}

/* Footer Grid - Intrinsic Grid Layout */
.footer-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: clamp(2rem, 4cqw, 4rem);
}

@container (min-width: 768px) {
    .footer-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@container (min-width: 1024px) {
    .footer-grid-cols-2 { grid-template-columns: repeat(2, 1fr); }
    .footer-grid-cols-3 { grid-template-columns: repeat(3, 1fr); }
    .footer-grid-cols-4 { grid-template-columns: repeat(4, 1fr); }
}

/* Brand Column */
.footer-brand {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.footer-brand-identity {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.footer-brand-name {
    color: white;
    font-weight: 700;
    /* Fluid Typography */
    font-size: clamp(1.5rem, 5cqw + 0.5rem, 2.25rem);
    line-height: 1.1;
    letter-spacing: -0.025em;
}

.footer-brand-tagline {
    font-size: clamp(1rem, 1.2cqw, 1.15rem);
    color: var(--footer-text-muted);
    line-height: 1.6;
    max-width: 20rem;
}

/* Contact Information */
.footer-contact {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    font-style: normal;
}

.footer-contact-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.5rem 0;
    min-height: 44px;
    font-size: 1rem;
    font-weight: 500;
    color: var(--footer-text);
    transition: color var(--footer-transition);
}

.footer-contact-item:hover {
    color: var(--color-primary);
}

.footer-contact-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 2.75rem;
    height: 2.75rem;
    border-radius: 0.5rem;
    background: var(--footer-icon-bg);
    transition: background var(--footer-transition);
}

.footer-contact-item:hover .footer-contact-icon {
    background: var(--footer-icon-bg-hover);
}

.footer-contact-icon i {
    font-size: 1.25rem;
}

/* Navigation Columns */
.footer-nav-toggle {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding: 0.75rem 0;
    min-height: 44px;
    text-align: left;
    background: none;
    border: none;
    color: inherit;
    cursor: pointer;
}

@container (min-width: 768px) {
    .footer-nav-toggle {
        pointer-events: none;
        cursor: default;
    }
}

.footer-nav-title {
    color: white;
    font-weight: 700;
    font-size: clamp(1rem, 1.5cqw, 1.15rem);
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.footer-nav-icon {
    font-size: 1.25rem;
    color: var(--footer-text-muted);
    transition: transform var(--footer-transition);
}

@container (min-width: 768px) {
    .footer-nav-icon {
        display: none;
    }
}

.footer-nav-toggle[aria-expanded=\"true\"] .footer-nav-icon {
    transform: rotate(180deg);
}

/* Navigation Content */
.footer-nav-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
}

@container (min-width: 768px) {
    .footer-nav-content {
        display: block !important;
        max-height: none !important;
    }
}

.footer-nav-content.active {
    display: block !important;
    max-height: 500px;
    transition: max-height 0.4s ease-in;
}

.footer-nav-list {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
    margin-top: 1rem;
    list-style: none;
    padding: 0;
}

.footer-nav-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 0;
    min-height: 44px;
    font-size: 1rem;
    color: var(--footer-text-muted);
    transition: all var(--footer-transition);
}

.footer-nav-link:hover {
    color: var(--color-primary);
}

.footer-nav-link i {
    font-size: 0.875rem;
    opacity: 0;
    transition: opacity var(--footer-transition);
}

.footer-nav-link:hover i {
    opacity: 1;
}

.footer-nav-link span {
    transition: transform var(--footer-transition);
}

.footer-nav-link:hover span {
    transform: translateX(0.25rem);
}

/* Sub-Footer */
.footer-sub {
    position: relative;
    border-top: 1px solid var(--footer-border);
    background: var(--footer-sub-bg);
}

.footer-sub-content {
    max-width: 1280px;
    margin: 0 auto;
    padding: clamp(1.5rem, 3cqw, 2rem) clamp(1rem, 3cqw, 2rem);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
    text-align: center;
    content-visibility: auto; /* Performance Optimization */
}

@media (min-width: 768px) {
    .footer-sub-content {
        flex-direction: row;
        justify-content: space-between;
        text-align: left;
    }
}

.footer-copyright {
    font-size: clamp(0.875rem, 1cqw, 1rem);
    color: var(--footer-text-muted);
}

.footer-credits {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    font-size: clamp(0.875rem, 1cqw, 1rem);
    color: oklch(0.60 0.02 260);
}

@media (min-width: 768px) {
    .footer-credits {
        justify-content: flex-end;
    }
}

.footer-credits a {
    font-weight: 500;
    color: var(--footer-text-muted);
    text-decoration: none;
    text-underline-offset: 2px;
    transition: color var(--footer-transition);
}

.footer-credits a:hover {
    color: var(--color-primary);
    text-decoration: underline;
}

/* Back to Top Button */
.footer-back-to-top {
    position: fixed;
    bottom: 1.5rem;
    right: 1.5rem;
    z-index: 40;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 3rem;
    height: 3rem;
    border-radius: 9999px;
    background: var(--color-primary);
    color: white;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
    opacity: 0;
    pointer-events: none;
    transition: all var(--footer-transition);
    will-change: transform, opacity;
}

@media (min-width: 640px) {
    .footer-back-to-top {
        width: 3.5rem;
        height: 3.5rem;
    }
}

.footer-back-to-top.visible {
    opacity: 1;
    pointer-events: auto;
}

.footer-back-to-top:hover {
    transform: scale(1.1);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.4);
}

.footer-back-to-top:focus-visible {
    outline: 2px solid white;
    outline-offset: 4px;
}

.footer-back-to-top i {
    font-size: 1.5rem;
}

/* RTL Support */
[dir=\"rtl\"] .footer-back-to-top {
    right: auto;
    left: 1.5rem;
}

/* Smooth Scroll */
html {
    scroll-behavior: smooth;
}

/* Focus States */
footer a:focus-visible,
footer button:focus-visible {
    outline: 2px solid var(--color-primary);
    outline-offset: 4px;
    border-radius: 4px;
}
</style>

<script>
// Enhanced Footer JavaScript - Performance Optimized
(function() {
    'use strict';
    
    // Cache DOM elements
    const footer = document.getElementById('footer');
    if (!footer) return;
    
    const backToTop = footer.querySelector('[data-back-to-top]');
    const accordionToggles = footer.querySelectorAll('[data-footer-toggle]');
    
    // Accordion Functionality with Event Delegation (Mobile Only)
    if (accordionToggles.length > 0) {
        const isMobile = () => window.innerWidth < 768;
        
        // Single event listener for all toggles (event delegation pattern)
        footer.addEventListener('click', function(e) {
            const toggle = e.target.closest('[data-footer-toggle]');
            if (!toggle || !isMobile()) return;
            
            const content = toggle.nextElementSibling;
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
            
            // Toggle accordion
            toggle.setAttribute('aria-expanded', !isExpanded);
            content.setAttribute('aria-hidden', isExpanded);
            content.classList.toggle('active');
        });
        
        // Reset accordions on resize (debounced)
        let resizeTimeout;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(function() {
                if (!isMobile()) {
                    accordionToggles.forEach(toggle => {
                        toggle.setAttribute('aria-expanded', 'false');
                        const content = toggle.nextElementSibling;
                        content.setAttribute('aria-hidden', 'false');
                        content.classList.remove('active');
                    });
                }
            }, 150);
        }, { passive: true });
    }
    
    // Back to Top Button with IntersectionObserver (More Efficient)
    if (backToTop) {
        // Fallback to scroll listener if IntersectionObserver not supported
        if ('IntersectionObserver' in window) {
            // Create a sentinel element at 300px from top
            const sentinel = document.createElement('div');
            sentinel.style.cssText = 'position:absolute;top:300px;height:1px;width:1px;pointer-events:none;';
            document.body.prepend(sentinel);
            
            const observer = new IntersectionObserver(
                ([entry]) => {
                    backToTop.classList.toggle('visible', !entry.isIntersecting);
                },
                { threshold: 0 }
            );
            
            observer.observe(sentinel);
        } else {
            // Fallback: scroll listener with debouncing
            let scrollTimeout;
            window.addEventListener('scroll', function() {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(function() {
                    backToTop.classList.toggle('visible', window.scrollY > 300);
                }, 100);
            }, { passive: true });
        }
    }
})();
</script>
";
        yield from [];
    }

    // line 11
    public function macro_social_icon($url = null, $platform = null, $icon_class = null, $label = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "platform" => $platform,
            "icon_class" => $icon_class,
            "label" => $label,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
            yield "\" 
       target=\"_blank\" 
       rel=\"noopener noreferrer\" 
       class=\"footer-social-icon group\"
       aria-label=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "\">
        <i class=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon_class"] ?? null), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
    </a>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.html.twig";
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
        return array (  1055 => 17,  1051 => 16,  1043 => 12,  1028 => 11,  501 => 207,  488 => 195,  480 => 193,  474 => 191,  472 => 190,  467 => 187,  461 => 182,  458 => 181,  442 => 178,  438 => 176,  428 => 172,  424 => 171,  420 => 170,  417 => 169,  413 => 168,  410 => 167,  408 => 166,  402 => 163,  394 => 158,  390 => 157,  385 => 155,  377 => 151,  359 => 150,  356 => 149,  352 => 146,  348 => 144,  342 => 141,  336 => 137,  334 => 136,  331 => 135,  325 => 132,  316 => 127,  314 => 126,  311 => 125,  305 => 122,  296 => 117,  294 => 116,  291 => 115,  288 => 114,  284 => 111,  278 => 109,  276 => 108,  272 => 107,  268 => 105,  262 => 102,  259 => 100,  254 => 97,  248 => 95,  245 => 94,  239 => 92,  236 => 91,  230 => 89,  227 => 88,  221 => 86,  218 => 85,  212 => 83,  209 => 82,  203 => 80,  201 => 79,  194 => 74,  191 => 73,  187 => 70,  174 => 58,  168 => 53,  161 => 52,  154 => 51,  147 => 50,  140 => 49,  133 => 48,  127 => 47,  124 => 46,  117 => 43,  113 => 41,  110 => 40,  105 => 37,  98 => 36,  92 => 35,  88 => 33,  85 => 32,  79 => 30,  77 => 29,  73 => 28,  69 => 27,  63 => 23,  59 => 20,  56 => 9,  54 => 8,  52 => 7,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/footer.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/footer.html.twig");
    }
}
