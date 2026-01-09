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
class __TwigTemplate_dd2bea487b2ea76029777cfe742b5694 extends Template
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
        yield "<footer class=\"bg-brand-dark text-white pt-24 pb-12 relative overflow-hidden @container [content-visibility:auto] [contain-intrinsic-size:500px]\">
    ";
        // line 3
        yield "    <div class=\"absolute inset-0 opacity-5 pointer-events-none\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/pattern.svg"), "html", null, true);
        yield "'); background-size: 600px;\"></div>
    
    <div class=\"container mx-auto px-6 max-w-container relative z-10\">
        <div class=\"grid grid-cols-1 @md:grid-cols-2 @lg:grid-cols-4 gap-12 mb-16 border-b border-white/10 pb-16\">
            ";
        // line 8
        yield "            <div class=\"@lg:col-span-1 space-y-6\">
                ";
        // line 9
        yield from $this->load("partials/logo.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "                
                <div class=\"space-y-4\">
                    <h4 class=\"font-bold text-lg text-white\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 12), "footer_about_title", [], "any", false, false, false, 12), "html", null, true);
        yield "</h4>
                    <p class=\"text-brand-gray/60 leading-relaxed\">
                        ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 14), "footer_mission", [], "any", false, false, false, 14), "html", null, true);
        yield "
                    </p>
                </div>
                
                ";
        // line 19
        yield "                <div class=\"flex gap-4\">
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 20), "social_links", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 21
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 21), "html", null, true);
            yield "\" class=\"w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-brand-gray hover:bg-brand-primary hover:text-white transition-all duration-300\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "network", [], "any", false, false, false, 21), "html", null, true);
            yield "\">
                            <i class=\"lab la-";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "network", [], "any", false, false, false, 22), "html", null, true);
            yield " text-xl\"></i>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['social'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "                </div>
            </div>
            
            ";
        // line 29
        yield "            <div class=\"@lg:col-span-1\">
                <h4 class=\"font-bold text-lg mb-8\">Quick Links</h4>
                <ul class=\"space-y-4\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 32), "footer_links", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 33
            yield "                        <li>
                            <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 34), "html", null, true);
            yield "\" class=\"text-brand-gray/80 hover:text-brand-primary transition-colors flex items-center gap-2 group\">
                                <i class=\"las la-angle-right text-xs group-hover:translate-x-1 transition-transform\"></i>
                                ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "text", [], "any", false, false, false, 36), "html", null, true);
            yield "
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                     ";
        // line 41
        yield "                    ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 41), "footer_links", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                        <li><a href=\"/about\" class=\"text-brand-gray hover:text-brand-primary\">About Us</a></li>
                        <li><a href=\"/services\" class=\"text-brand-gray hover:text-brand-primary\">Our Services</a></li>
                        <li><a href=\"/projects\" class=\"text-brand-gray hover:text-brand-primary\">Projects</a></li>
                        <li><a href=\"/contact\" class=\"text-brand-gray hover:text-brand-primary\">Contact</a></li>
                    ";
        }
        // line 47
        yield "                </ul>
            </div>
            
            ";
        // line 51
        yield "            <div class=\"@lg:col-span-1\">
                <h4 class=\"font-bold text-lg mb-8\">Contact Us</h4>
                <ul class=\"space-y-6\">
                    <li class=\"flex items-start gap-4\">
                        <i class=\"las la-map-marker text-brand-primary text-xl mt-1\"></i>
                        <span class=\"text-brand-gray\">";
        // line 56
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 56), "contact_address", [], "any", false, false, false, 56), "html", null, true));
        yield "</span>
                    </li>
                    <li class=\"flex items-center gap-4\">
                        <i class=\"las la-envelope text-brand-primary text-xl\"></i>
                        <a href=\"mailto:";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 60), "contact_email", [], "any", false, false, false, 60), "html", null, true);
        yield "\" class=\"text-brand-gray hover:text-white transition-colors\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 60), "contact_email", [], "any", false, false, false, 60), "html", null, true);
        yield "</a>
                    </li>
                    <li class=\"flex items-center gap-4\">
                        <i class=\"lab la-whatsapp text-brand-primary text-xl\"></i>
                        <a href=\"https://wa.me/";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 64), "contact_whatsapp", [], "any", false, false, false, 64), "html", null, true);
        yield "\" class=\"text-brand-gray hover:text-white transition-colors\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 64), "contact_whatsapp", [], "any", false, false, false, 64), "html", null, true);
        yield "</a>
                    </li>
                </ul>
            </div>
            
            ";
        // line 70
        yield "            <div class=\"@lg:col-span-1\">
                <h4 class=\"font-bold text-lg mb-8\">Stay Updated</h4>
                <p class=\"text-brand-gray mb-6 text-sm\">Join our weekly digest for community news and impact reports.</p>
                
                ";
        // line 74
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 74), "newsletter_enabled", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 75), "newsletter_action", [], "any", false, false, false, 75), "html", null, true);
            yield "\" method=\"post\" class=\"space-y-3\">
                        <div class=\"relative\">
                            <input type=\"email\" placeholder=\"Email Address\" required
                                   class=\"w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder:text-brand-gray focus:outline-none focus:border-brand-primary transition-colors\">
                        </div>
                        <button type=\"submit\" class=\"w-full bg-brand-primary text-white font-bold uppercase tracking-widest text-xs py-4 rounded-xl hover:bg-brand-secondary transition-colors\">
                            Subscribe
                        </button>
                    </form>
                ";
        } else {
            // line 85
            yield "                     <div class=\"bg-white/5 border border-white/10 rounded-xl p-4 text-center\">
                        <span class=\"text-brand-gray text-xs uppercase tracking-widest\">Newsletter Coming Soon</span>
                    </div>
                ";
        }
        // line 89
        yield "            </div>
        </div>
        
        <div class=\"flex flex-col @md:flex-row items-center justify-between gap-6 text-xs text-brand-gray uppercase tracking-widest\">
            <p>&copy; ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 93), "html", null, true);
        yield ". All Rights Reserved.</p>
            <div class=\"flex items-center gap-6\">
                 <a href=\"/privacy\" class=\"hover:text-white transition-colors\">Privacy</a>
                 <a href=\"/terms\" class=\"hover:text-white transition-colors\">Terms</a>
                 <span class=\"opacity-50\">Built on Grav</span>
            </div>
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
        return array (  213 => 93,  207 => 89,  201 => 85,  187 => 75,  185 => 74,  179 => 70,  169 => 64,  160 => 60,  153 => 56,  146 => 51,  141 => 47,  134 => 42,  131 => 41,  129 => 40,  119 => 36,  114 => 34,  111 => 33,  107 => 32,  102 => 29,  97 => 25,  88 => 22,  81 => 21,  77 => 20,  74 => 19,  67 => 14,  62 => 12,  58 => 10,  56 => 9,  53 => 8,  45 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/footer.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/partials/footer.html.twig");
    }
}
