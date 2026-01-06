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
class __TwigTemplate_2c40d98e669a4b4717a70753d99f3db0 extends Template
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
        yield "<footer class=\"aabtaab-footer\">
    <div class=\"footer-container\">
        
        <div class=\"footer-col\">
            <h3 class=\"footer-heading\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        yield "</h3>
            <p class=\"footer-tagline\">Faith. Knowledge. Access.</p>
            <div class=\"social-section\">
                <p><strong>Social Media</strong></p>
                <div class=\"social-icons ";
        // line 9
        yield (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_text")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("icons-only"));
        yield "\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_links"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            yield "                        ";
            $context["network"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "network", [], "any", false, false, false, 11);
            // line 12
            yield "                        ";
            $context["icon"] = ($context["network"] ?? null);
            // line 13
            yield "                        ";
            $context["label"] = Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ($context["network"] ?? null));
            // line 14
            yield "                        
                        ";
            // line 16
            yield "                        ";
            if ((($context["network"] ?? null) == "googlemaps")) {
                // line 17
                yield "                            ";
                $context["icon"] = "map-marker";
                // line 18
                yield "                            ";
                $context["label"] = "Google Maps";
                // line 19
                yield "                        ";
            } elseif ((($context["network"] ?? null) == "twitter")) {
                // line 20
                yield "                            ";
                $context["label"] = "X";
                // line 21
                yield "                        ";
            }
            // line 22
            yield "
                        <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 23), "html", null, true);
            yield "\" target=\"_blank\" class=\"social-btn\" rel=\"noopener noreferrer\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "\">
                            <i class=\"fa fa-";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield "\"></i> ";
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_text")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            }
            // line 25
            yield "                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "                    
                    ";
        // line 28
        if ((($tmp =  !$this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_links")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "                        <!-- Default/Fallback Social Links if none configured -->
                        <a href=\"#\" class=\"social-btn\"><i class=\"fa fa-facebook\"></i> ";
            // line 30
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_text")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Facebook";
            }
            yield "</a>
                        <a href=\"#\" class=\"social-btn\"><i class=\"fa fa-twitter\"></i> ";
            // line 31
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_text")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "X";
            }
            yield "</a>
                    ";
        }
        // line 33
        yield "                </div>
            </div>
        </div>

        <div class=\"footer-col\">
            <h3 class=\"footer-heading\">Contact Us</h3>
            <ul class=\"contact-list\">
                <li>
                    <span class=\"icon\" aria-hidden=\"true\">📍</span> 
                    <span>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_address"), "Address not set"), "html", null, true);
        yield "</span>
                </li>
                <li>
                    <span class=\"icon\" aria-hidden=\"true\">✉️</span> 
                    <a href=\"mailto:";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_email"), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_email"), "email@example.com"), "html", null, true);
        yield "</a>
                </li>
                <li>
                    <span class=\"icon\" aria-hidden=\"true\">📞</span> 
                    <a href=\"tel:";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone"), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "contact_phone"), "+00 000 0000"), "html", null, true);
        yield "</a>
                </li>
            </ul>
        </div>

        <div class=\"footer-col\">
            <h3 class=\"footer-heading\">Newsletter</h3>
            <p>Subscribe to get the latest updates.</p>
            <form class=\"footer-form\" action=\"#\">
                <label for=\"newsletter-email\" class=\"sr-only\">Your Email Address</label>
                <input type=\"email\" id=\"newsletter-email\" placeholder=\"Your Email Address\" required>
                <button type=\"submit\">Subscribe</button>
            </form>
            <div class=\"donate-wrapper\">
                <a href=\"/donate\" class=\"donate-btn\">Donate Now</a>
            </div>
        </div>

    </div>

    <div class=\"footer-bottom\">
        <div class=\"bottom-content\">
            <p>Developed By: <strong>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
        yield "</strong></p>
            <p>&copy; ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 73), "html", null, true);
        yield "</strong>. All rights reserved.</p>
        </div>
    </div>
</footer>
";
        yield from [];
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
        return array (  194 => 73,  190 => 72,  163 => 50,  154 => 46,  147 => 42,  136 => 33,  129 => 31,  123 => 30,  120 => 29,  118 => 28,  115 => 27,  108 => 25,  102 => 24,  96 => 23,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  59 => 10,  55 => 9,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/footer.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/footer.html.twig");
    }
}
