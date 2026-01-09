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

/* partials/cmp.html.twig */
class __TwigTemplate_57e3224e6b28662ea2f83f305466bde5 extends Template
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
        yield "<section id=\"cmp-banner\" class=\"fixed bottom-8 left-8 right-8 z-[9999] max-w-[500px] mx-auto @container\" style=\"display:none;\" role=\"dialog\" aria-labelledby=\"cmp-title\" aria-describedby=\"cmp-desc\" aria-modal=\"true\">
    <div class=\"relative bg-[var(--surface-sunken)]/60 backdrop-blur-3xl p-10 rounded-[3rem] border border-[var(--color-brand-primary)]/20 shadow-2xl shadow-[var(--color-brand-primary)]/10 animate-in fade-in slide-in-from-bottom-10 duration-700\">
        ";
        // line 5
        yield "        <div class=\"absolute -top-10 -right-10 w-24 h-24 bg-[var(--color-brand-primary)]/10 rounded-full blur-2xl\" aria-hidden=\"true\"></div>

        <h5 id=\"cmp-title\" class=\"text-2xl font-black font-heading text-[var(--color-brand-dark)] mb-4 tracking-tight flex items-center gap-3\">
            <span class=\"la la-cookie-bite text-3xl text-[var(--color-brand-primary)] animate-bounce\" aria-hidden=\"true\"></span>
            Privacy Consent
        </h5>
        
        <p id=\"cmp-desc\" class=\"text-lg text-[var(--color-brand-dark)]/60 font-medium leading-relaxed mb-8\">
            We respect your privacy. This site uses local storage for preferences (Eco-Mode, Focus-Mode) and does not track you across the web.
        </p>

        <div class=\"flex flex-col @sm:flex-row gap-4 items-center\">
            <button class=\"w-full @sm:w-auto px-8 py-3 min-h-[44px] text-xs font-black uppercase tracking-[0.2em] text-[var(--color-brand-dark)]/50 bg-[var(--color-brand-dark)]/5 rounded-2xl hover:bg-[var(--color-brand-dark)]/10 transition-all focus:ring-4 focus:ring-[var(--color-brand-primary)]/10\" onclick=\"document.getElementById('cmp-banner').style.display='none'\" aria-label=\"Dismiss and Manage Settings\">
                Manage
            </button>
            <button class=\"w-full @sm:flex-1 px-8 py-4 min-h-[44px] text-xs font-black uppercase tracking-[0.2em] text-white bg-[var(--color-brand-primary)] rounded-2xl shadow-xl shadow-[var(--color-brand-primary)]/20 hover:bg-[var(--color-brand-secondary)] hover:shadow-[var(--color-brand-secondary)]/30 transition-all active:scale-95 focus:ring-4 focus:ring-[var(--color-brand-primary)]/20\" onclick=\"localStorage.setItem('cmp_consent', 'true'); document.getElementById('cmp-banner').style.display='none';\" aria-label=\"Accept Necessary Cookies\">
                Accept Necessary
            </button>
        </div>
    </div>
</section>

<script>
    if (!localStorage.getItem('cmp_consent')) {
        document.getElementById('cmp-banner').style.display = 'block';
    }
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/cmp.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  46 => 5,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/cmp.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/partials/cmp.html.twig");
    }
}
