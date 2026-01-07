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

/* partials/footer-builder.html.twig */
class __TwigTemplate_fa22f7c23ba3ab696ef2ffc4c44900cf extends Template
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
        yield "<div class=\"footer-builder-row\">
    ";
        // line 2
        $context["widgets"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_footer_widgets");
        // line 3
        yield "    
    ";
        // line 5
        yield "    ";
        if ((($tmp =  !($context["widgets"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "       ";
            // line 7
            yield "        <div class=\"footer-col col-4\">
            <h3 class=\"footer-heading\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
            yield "</h3>
            <p class=\"footer-tagline\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 9), "description", [], "any", false, false, false, 9), "html", null, true);
            yield "</p>
            ";
            // line 11
            yield "            ";
            // line 12
            yield "        </div>
        ";
            // line 14
            yield "        ";
            // line 22
            yield "         <div class=\"footer-col col-4\">
            <h3 class=\"footer-heading\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_footer_links_title"), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "Links")), "html", null, true);
            yield "</h3>
         </div>
    
    ";
        } else {
            // line 27
            yield "        
        ";
            // line 29
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["widgets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 30
                yield "            ";
                // line 31
                yield "            ";
                $context["w_mobile"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width_mobile", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width_mobile", [], "any", false, false, false, 31), "col-sm-12")) : ("col-sm-12"));
                // line 32
                yield "            ";
                $context["w_tablet"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width_tablet", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width_tablet", [], "any", false, false, false, 32), "col-md-6")) : ("col-md-6"));
                // line 33
                yield "            ";
                $context["w_desktop"] = Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width_desktop", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width_desktop", [], "any", false, false, false, 33), CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width", [], "any", false, false, false, 33))) : (CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width", [], "any", false, false, false, 33))), "col-4");
                // line 34
                yield "            
            ";
                // line 35
                $context["anim_attr"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "animation", [], "any", false, false, false, 35) && (CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "animation", [], "any", false, false, false, 35) != "none"))) ? ((("data-aos=\"" . CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "animation", [], "any", false, false, false, 35)) . "\"")) : (""));
                // line 36
                yield "            ";
                $context["ai_badge"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "ai_badge", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<span class=\"ai-badge\" title=\"Content generated by AI\">AI</span>") : (""));
                // line 37
                yield "
            <div class=\"footer-col ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["w_mobile"] ?? null), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["w_tablet"] ?? null), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["w_desktop"] ?? null), "html", null, true);
                yield " widget-type-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 38), "html", null, true);
                yield "\" ";
                yield ($context["anim_attr"] ?? null);
                yield ">
                ";
                // line 39
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 40
                    yield "                    <h3 class=\"footer-heading\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 40), "html", null, true);
                    yield "</h3>
                ";
                }
                // line 42
                yield "                
                <div class=\"widget-content\">
                    ";
                // line 45
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "ai_badge", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ($context["ai_badge"] ?? null);
                }
                // line 46
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 46) == "branding")) {
                    // line 47
                    yield "                         <div class=\"footer-branding\">
                             ";
                    // line 48
                    $context["logo_file"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_logo")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_logo")), "name", [], "any", false, false, false, 48)) : ("logo.png"));
                    // line 49
                    yield "                             <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . ($context["logo_file"] ?? null))), "html", null, true);
                    yield "\" alt=\"Logo\" class=\"footer-logo\" style=\"height: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "logo_height", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "logo_height", [], "any", false, false, false, 49), 40)) : (40)), "html", null, true);
                    yield "px; margin-bottom: 1rem;\">
                             <p>";
                    // line 50
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "content", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 50), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 50), "description", [], "any", false, false, false, 50))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 50), "description", [], "any", false, false, false, 50)));
                    yield "</p>
                         </div>
                    
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 53
$context["widget"], "type", [], "any", false, false, false, 53) == "menu")) {
                    // line 54
                    yield "                        ";
                    // line 55
                    yield "                         <ul class=\"footer-menu\">
                            ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 56), "visible", [], "any", false, false, false, 56));
                    foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                        // line 57
                        yield "                                <li><a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 57), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 57), "html", null, true);
                        yield "</a></li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    yield "                        </ul>

                         <ul class=\"contact-list\">
                            ";
                    // line 62
                    if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_address")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 63
                        yield "                            <li><span class=\"icon\">📍</span> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_address"), "html", null, true);
                        yield "</li>
                            ";
                    }
                    // line 65
                    yield "                            ";
                    if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_email")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 66
                        yield "                            <li><span class=\"icon\">✉️</span> <a href=\"mailto:";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_email"), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_email"), "html", null, true);
                        yield "</a></li>
                            ";
                    }
                    // line 68
                    yield "                            ";
                    if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_phone")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 69
                        yield "                            <li><span class=\"icon\">📞</span> <a href=\"tel:";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_phone"), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_phone"), "html", null, true);
                        yield "</a></li>
                            ";
                    }
                    // line 71
                    yield "                        </ul>

                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 73
$context["widget"], "type", [], "any", false, false, false, 73) == "social")) {
                    // line 74
                    yield "                        <div class=\"social-section\">
                             <div class=\"social-icons icons-only\">
                                ";
                    // line 76
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_identity_social"));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 77
                        yield "                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 77), "html", null, true);
                        yield "\" target=\"_blank\" class=\"social-btn\"><i class=\"fa fa-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "network", [], "any", false, false, false, 77), "html", null, true);
                        yield "\"></i></a>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    yield "                             </div>
                        </div>

                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 82
$context["widget"], "type", [], "any", false, false, false, 82) == "newsletter")) {
                    // line 83
                    yield "                         <p>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "content", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 83), "Subscribe to our newsletter.")) : ("Subscribe to our newsletter.")), "html", null, true);
                    yield "</p>
                         <form class=\"footer-form\" action=\"#\">
                            <input type=\"email\" placeholder=\"Email Address\" required>
                            <button type=\"submit\">Subscribe</button>
                        </form>

                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 89
$context["widget"], "type", [], "any", false, false, false, 89) == "html")) {
                    // line 90
                    yield "                        ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 90);
                    yield "
                    ";
                }
                // line 92
                yield "                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['widget'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "        
    ";
        }
        // line 97
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer-builder.html.twig";
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
        return array (  282 => 97,  278 => 95,  270 => 92,  264 => 90,  262 => 89,  252 => 83,  250 => 82,  245 => 79,  234 => 77,  230 => 76,  226 => 74,  224 => 73,  220 => 71,  212 => 69,  209 => 68,  201 => 66,  198 => 65,  192 => 63,  190 => 62,  185 => 59,  174 => 57,  170 => 56,  167 => 55,  165 => 54,  163 => 53,  157 => 50,  150 => 49,  148 => 48,  145 => 47,  142 => 46,  137 => 45,  133 => 42,  127 => 40,  125 => 39,  113 => 38,  110 => 37,  107 => 36,  105 => 35,  102 => 34,  99 => 33,  96 => 32,  93 => 31,  91 => 30,  86 => 29,  83 => 27,  76 => 23,  73 => 22,  71 => 14,  68 => 12,  66 => 11,  62 => 9,  58 => 8,  55 => 7,  53 => 6,  50 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/footer-builder.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/footer-builder.html.twig");
    }
}
