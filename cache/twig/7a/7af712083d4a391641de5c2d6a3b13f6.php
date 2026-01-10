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
        $context["show_social"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer_show_social"), true);
        // line 3
        $context["copyright"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer_copyright");
        // line 4
        $context["site_name"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "site_name"), CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 4));
        // line 5
        $context["direction"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "direction"), "ltr");
        // line 6
        $context["footer_bg"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "minaret_bg_color"), "#111827");
        // line 7
        yield "
";
        // line 18
        yield "
<footer id=\"footer\" class=\"relative overflow-hidden text-[oklch(0.85_0.02_260)]\" style=\"background-color: ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["footer_bg"] ?? null), "html", null, true);
        yield ";\" role=\"contentinfo\" aria-label=\"Site footer\">
    ";
        // line 21
        yield "    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"Organization\",
        \"name\": \"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "orgName", [], "any", false, false, false, 25), "js"), "html", null, true);
        yield "\",
        \"url\": \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("", [], true), "html", null, true);
        yield "\",
        ";
        // line 27
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "        \"logo\": \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo"), [], true), "html", null, true);
            yield "\",
        ";
        }
        // line 30
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "email", [], "any", false, false, false, 30) || CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "phone", [], "any", false, false, false, 30))) {
            // line 31
            yield "        \"contactPoint\": {
            \"@type\": \"ContactPoint\",
            ";
            // line 33
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "phone", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "\"telephone\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "phone", [], "any", false, false, false, 33), "js"), "html", null, true);
                yield "\",";
            }
            // line 34
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "email", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "\"email\": \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "email", [], "any", false, false, false, 34), "js"), "html", null, true);
                yield "\",";
            }
            // line 35
            yield "            \"contactType\": \"customer service\"
        },
        ";
        }
        // line 38
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "address", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "        \"address\": {
            \"@type\": \"PostalAddress\",
            \"streetAddress\": \"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "address", [], "any", false, false, false, 41), "js"), "html", null, true);
            yield "\"
        },
        ";
        }
        // line 44
        yield "        \"sameAs\": ";
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["schema_data"] ?? null), "socials", [], "any", false, false, false, 44));
        yield "
    }
    </script>

    ";
        // line 49
        yield "    <div class=\"absolute inset-0 opacity-5 pointer-events-none\" aria-hidden=\"true\">
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
        // line 61
        yield "    <div class=\"relative container mx-auto section-py container-px @container\">
        
        ";
        // line 64
        yield "        ";
        if ((($context["show_social"] ?? null) && ((((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_facebook") || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_twitter")) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_instagram")) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_youtube")) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_telegram")) || $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_whatsapp")))) {
            // line 65
            yield "            <section class=\"mb-[clamp(2rem,4cqw,3.5rem)] text-center @md:text-left\" aria-labelledby=\"footer-social-heading\">
                <h2 id=\"footer-social-heading\" class=\"text-white font-bold text-[clamp(1.125rem,2cqw+0.5rem,1.35rem)] uppercase tracking-wider mb-4\">
                    Connect With Us
                </h2>
                <div class=\"flex flex-wrap justify-center @md:justify-start gap-[clamp(0.75rem,1cqw,1.25rem)]\">
                    ";
            // line 70
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_facebook")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 71, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_facebook"), "facebook", "lab la-facebook-f", "Visit our Facebook page"]);
                yield "
                    ";
            }
            // line 73
            yield "                    ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_twitter")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 74, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_twitter"), "twitter", "lab la-twitter", "Follow us on Twitter"]);
                yield "
                    ";
            }
            // line 76
            yield "                    ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_instagram")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 77, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_instagram"), "instagram", "lab la-instagram", "Follow us on Instagram"]);
                yield "
                    ";
            }
            // line 79
            yield "                    ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_youtube")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 80, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_youtube"), "youtube", "lab la-youtube", "Subscribe to our YouTube channel"]);
                yield "
                    ";
            }
            // line 82
            yield "                    ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_telegram")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 83, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_telegram"), "telegram", "lab la-telegram", "Join our Telegram group"]);
                yield "
                    ";
            }
            // line 85
            yield "                    ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_whatsapp")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "                        ";
                yield $this->getTemplateForMacro("macro_social_icon", $context, 86, $this->getSourceContext())->macro_social_icon(...[$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_whatsapp"), "whatsapp", "lab la-whatsapp", "Contact us on WhatsApp"]);
                yield "
                    ";
            }
            // line 88
            yield "                </div>
            </section>
        ";
        }
        // line 91
        yield "
        ";
        // line 93
        yield "        <div class=\"grid-bento !gap-[clamp(2rem,4cqw,4rem)]\">
            
            ";
        // line 96
        yield "            <div class=\"flex flex-col gap-6\">
                <div class=\"flex flex-col gap-3\">
                    <h2 class=\"text-white font-bold text-[clamp(1.5rem,5cqw+0.5rem,2.25rem)] leading-[1.1] tracking-tighter\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
        yield "</h2>
                    ";
        // line 99
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "site_tagline")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "                        <p class=\"text-[oklch(0.70_0.02_260)] text-[clamp(1rem,1.2cqw,1.15rem)] leading-relaxed max-w-[20rem]\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "site_tagline"), "html", null, true);
            yield "</p>
                    ";
        }
        // line 102
        yield "                </div>
                
                ";
        // line 105
        yield "                <address class=\"flex flex-col gap-3 not-italic\">
                    ";
        // line 106
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "                        <a href=\"tel:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone"), [" " => "", "(" => "", ")" => "", "-" => ""]), "html", null, true);
            yield "\" 
                           class=\"flex items-center gap-3 py-2 min-h-[44px] text-base font-medium text-[oklch(0.85_0.02_260)] hover:text-primary transition-colors group\">
                            <span class=\"flex items-center justify-center shrink-0 w-11 h-11 rounded-lg bg-[oklch(0.25_0.03_260/0.5)] transition-colors duration-300 group-hover:bg-[oklch(0.65_0.22_260/0.2)]\">
                                <i class=\"la la-phone text-xl\" aria-hidden=\"true\"></i>
                            </span>
                            <span>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone"), "html", null, true);
            yield "</span>
                        </a>
                    ";
        }
        // line 115
        yield "                    
                    ";
        // line 116
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 117
            yield "                        <a href=\"mailto:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email"), "html", null, true);
            yield "\" 
                           class=\"flex items-center gap-3 py-2 min-h-[44px] text-base font-medium text-[oklch(0.85_0.02_260)] hover:text-primary transition-colors group\">
                            <span class=\"flex items-center justify-center shrink-0 w-11 h-11 rounded-lg bg-[oklch(0.25_0.03_260/0.5)] transition-colors duration-300 group-hover:bg-[oklch(0.65_0.22_260/0.2)]\">
                                <i class=\"la la-envelope text-xl\" aria-hidden=\"true\"></i>
                            </span>
                            <span class=\"break-all\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email"), "html", null, true);
            yield "</span>
                        </a>
                    ";
        }
        // line 125
        yield "                    
                    ";
        // line 126
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_address")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "                        <div class=\"flex items-center gap-3 py-2 min-h-[44px] text-base font-medium text-[oklch(0.85_0.02_260)] hover:text-primary transition-colors cursor-default group\">
                            <span class=\"flex items-center justify-center shrink-0 w-11 h-11 rounded-lg bg-[oklch(0.25_0.03_260/0.5)] transition-colors duration-300 group-hover:bg-[oklch(0.65_0.22_260/0.2)]\">
                                <i class=\"la la-map-marker text-xl\" aria-hidden=\"true\"></i>
                            </span>
                            <span>";
            // line 131
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_address"), "html", null, true));
            yield "</span>
                        </div>
                    ";
        }
        // line 134
        yield "                </address>
            </div>
            
            ";
        // line 138
        yield "            ";
        $context["footer_columns"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer_columns");
        // line 139
        yield "            ";
        if ((($tmp = ($context["footer_columns"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
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
                // line 141
                yield "                    <nav class=\"group\" aria-labelledby=\"footer-nav-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 141), "html", null, true);
                yield "\" data-accordion=\"mobile\">
                        <button type=\"button\"
                                class=\"flex items-center justify-between w-full py-3 min-h-[44px] text-left bg-transparent border-none text-inherit cursor-pointer @md:cursor-default @md:pointer-events-none\"
                                aria-expanded=\"false\"
                                aria-controls=\"footer-nav-content-";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 145), "html", null, true);
                yield "\"
                                onclick=\"this.setAttribute('aria-expanded', this.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'); this.nextElementSibling.classList.toggle('hidden');\">
                            <h3 id=\"footer-nav-";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 147), "html", null, true);
                yield "\" class=\"text-white font-bold text-[clamp(1rem,1.5cqw,1.15rem)] uppercase tracking-wider\">
                                ";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 148), "html", null, true);
                yield "
                            </h3>
                            <i class=\"la la-angle-down text-[1.25rem] text-[oklch(0.70_0.02_260)] transition-transform duration-300 @md:hidden group-aria-expanded:rotate-180\" aria-hidden=\"true\"></i>
                        </button>
                        
                        <div id=\"footer-nav-content-";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 153), "html", null, true);
                yield "\"
                             class=\"hidden @md:block transition-all duration-300 ease-in-out\"
                             aria-hidden=\"true\">
                            ";
                // line 156
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "links", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 157
                    yield "                                <ul class=\"flex flex-col gap-1 mt-4 list-none p-0\" role=\"list\">
                                    ";
                    // line 158
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "links", [], "any", false, false, false, 158));
                    foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                        // line 159
                        yield "                                        <li>
                                            <a href=\"";
                        // line 160
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 160), "html", null, true);
                        yield "\" class=\"flex items-center gap-2 py-3 min-h-[44px] text-base text-[oklch(0.70_0.02_260)] hover:text-primary transition-all duration-300 group/link\">
                                                <i class=\"la la-angle-";
                        // line 161
                        yield (((($context["direction"] ?? null) == "rtl")) ? ("left") : ("right"));
                        yield " text-sm opacity-0 transition-opacity duration-300 group-hover/link:opacity-100\" aria-hidden=\"true\"></i>
                                                <span class=\"transition-transform duration-300 group-hover/link:translate-x-1\">";
                        // line 162
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "text", [], "any", false, false, false, 162), "html", null, true);
                        yield "</span>
                                            </a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    yield "                                </ul>
                            ";
                }
                // line 168
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
            // line 171
            yield "            ";
        }
        // line 172
        yield "            
        </div>
    </div>

    ";
        // line 177
        yield "    <div class=\"relative border-t border-[oklch(0.30_0.03_260/0.5)] bg-[oklch(0.12_0.02_260/0.5)]\">
        <div class=\"container mx-auto px-[clamp(1rem,3cqw,2rem)] py-[clamp(1.5rem,3cqw,2rem)] flex flex-col items-center gap-4 text-center @md:flex-row @md:justify-between @md:text-left content-visibility-auto\">
            <div class=\"text-[clamp(0.875rem,1cqw,1rem)] text-[oklch(0.70_0.02_260)]\">
                ";
        // line 180
        if ((($tmp = ($context["copyright"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "                    ";
            yield ($context["copyright"] ?? null);
            yield "
                ";
        } else {
            // line 183
            yield "                    <p>&copy; ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
            yield ". All rights reserved.</p>
                ";
        }
        // line 185
        yield "            </div>
            
            <div class=\"flex flex-wrap items-center justify-center @md:justify-end gap-4 text-[clamp(0.875rem,1cqw,1rem)] text-[oklch(0.60_0.02_260)]\">
                <span>Powered by</span>
                <a href=\"https://getgrav.org\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"font-medium text-[oklch(0.70_0.02_260)] decoration-transparent hover:text-primary hover:underline underline-offset-2 transition-colors\">Grav</a>
                <span>•</span>
                <a href=\"https://github.com/syedaalin/grav-theme-nur-ul-huda\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"font-medium text-[oklch(0.70_0.02_260)] decoration-transparent hover:text-primary hover:underline underline-offset-2 transition-colors\">Nur-ul-Huda Theme</a>
            </div>
        </div>
    </div>
    
    ";
        // line 197
        yield "    <a href=\"#top\" 
       class=\"fixed bottom-6 right-6 z-40 flex items-center justify-center w-12 h-12 @sm:w-14 @sm:h-14 rounded-full bg-primary text-white shadow-lg opacity-0 pointer-events-none transition-all duration-300 hover:scale-110 hover:shadow-xl focus-visible:outline-2 focus-visible:outline-white focus-visible:outline-offset-4 [&.visible]:opacity-100 [&.visible]:pointer-events-auto [dir=rtl]&:right-auto [dir=rtl]&:left-6\" 
       aria-label=\"Back to top\" 
       data-back-to-top>
        <i class=\"la la-angle-up text-2xl\" aria-hidden=\"true\"></i>
    </a>
</footer>
";
        yield from [];
    }

    // line 9
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
            // line 10
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
            yield "\" 
       target=\"_blank\" 
       rel=\"noopener noreferrer\" 
       class=\"relative flex items-center justify-center w-[clamp(3rem,4cqw,3.75rem)] h-[clamp(3rem,4cqw,3.75rem)] rounded-full bg-[oklch(0.25_0.03_260/0.8)] backdrop-blur-sm transition-all duration-300 hover:bg-primary hover:scale-110 hover:shadow-lg hover:shadow-primary/30 group will-change-transform\"
       aria-label=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "\">
        <i class=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon_class"] ?? null), "html", null, true);
            yield " text-[clamp(1.25rem,1.5cqw,1.6rem)] transition-transform duration-300 group-hover:scale-110\" aria-hidden=\"true\"></i>
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
        return array (  491 => 15,  487 => 14,  479 => 10,  464 => 9,  452 => 197,  439 => 185,  431 => 183,  425 => 181,  423 => 180,  418 => 177,  412 => 172,  409 => 171,  393 => 168,  389 => 166,  379 => 162,  375 => 161,  371 => 160,  368 => 159,  364 => 158,  361 => 157,  359 => 156,  353 => 153,  345 => 148,  341 => 147,  336 => 145,  328 => 141,  310 => 140,  307 => 139,  304 => 138,  299 => 134,  293 => 131,  287 => 127,  285 => 126,  282 => 125,  276 => 122,  267 => 117,  265 => 116,  262 => 115,  256 => 112,  247 => 107,  245 => 106,  242 => 105,  238 => 102,  232 => 100,  230 => 99,  226 => 98,  222 => 96,  218 => 93,  215 => 91,  210 => 88,  204 => 86,  201 => 85,  195 => 83,  192 => 82,  186 => 80,  183 => 79,  177 => 77,  174 => 76,  168 => 74,  165 => 73,  159 => 71,  157 => 70,  150 => 65,  147 => 64,  143 => 61,  130 => 49,  122 => 44,  116 => 41,  112 => 39,  109 => 38,  104 => 35,  97 => 34,  91 => 33,  87 => 31,  84 => 30,  78 => 28,  76 => 27,  72 => 26,  68 => 25,  62 => 21,  58 => 19,  55 => 18,  52 => 7,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/footer.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/footer.html.twig");
    }
}
