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

/* partials/messages.html.twig */
class __TwigTemplate_5aef3f373bcd84b5bf4c7fc3a4ba540c extends Template
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
        $context["type_mapping"] = ["info" => "success", "error" => "error", "warning" => "warning", "success" => "success"];
        // line 2
        $context["icon_mapping"] = ["info" => "shield-alt", "error" => "exclamation-triangle", "warning" => "radiation", "success" => "check-double"];
        // line 3
        yield "
";
        // line 4
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "messages", [], "any", false, false, false, 4), "all", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    <div id=\"messages\" class=\"space-y-6 mb-20 @container animate-in fade-in slide-in-from-top-8 duration-700\" role=\"status\" aria-live=\"polite\" aria-label=\"System Messages\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "messages", [], "any", false, false, false, 6), "fetch", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                yield "
        ";
                // line 8
                $context["scope"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "scope", [], "any", false, false, false, 8));
                // line 9
                yield "        ";
                $context["type"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["type_mapping"] ?? null), ($context["scope"] ?? null), [], "array", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["type_mapping"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["scope"] ?? null)] ?? null) : null), "info")) : ("info"));
                // line 10
                yield "        
        ";
                // line 12
                yield "        ";
                $context["color_classes"] = ["success" => "bg-[var(--color-brand-success)]/10 text-[var(--color-brand-success)] border-[var(--color-brand-success)]/30 shadow-[var(--color-brand-success)]/5", "error" => "bg-[var(--color-brand-error)]/10 text-[var(--color-brand-error)] border-[var(--color-brand-error)]/30 shadow-[var(--color-brand-error)]/5", "warning" => "bg-[var(--color-brand-warning)]/10 text-[var(--color-brand-warning)] border-[var(--color-brand-warning)]/30 shadow-[var(--color-brand-warning)]/5", "info" => "bg-[var(--color-brand-primary)]/10 text-[var(--color-brand-primary)] border-[var(--color-brand-primary)]/30 shadow-[var(--color-brand-primary)]/5"];
                // line 18
                yield "        
        ";
                // line 19
                $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["icon_mapping"] ?? null), ($context["scope"] ?? null), [], "array", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["icon_mapping"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["scope"] ?? null)] ?? null) : null), "info-circle")) : ("info-circle"));
                // line 20
                yield "
        <div class=\"px-12 py-10 rounded-[4rem] bg-white/40 backdrop-blur-3xl border ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["color_classes"] ?? null), ($context["type"] ?? null), [], "array", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["color_classes"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["type"] ?? null)] ?? null) : null), (($_v3 = ($context["color_classes"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["info"] ?? null) : null))) : ((($_v4 = ($context["color_classes"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["info"] ?? null) : null))), "html", null, true);
                yield " flex items-center gap-12 shadow-3xl transition-all duration-1000 hover:scale-[1.02] hover:-rotate-1 relative overflow-hidden group\" role=\"alert\">
            ";
                // line 23
                yield "            <div class=\"absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent -translate-x-full group-hover:animate-[shimmer_3s_infinite] pointer-events-none\" aria-hidden=\"true\"></div>

            <div class=\"w-16 h-16 shrink-0 rounded-[1.5rem] bg-white/80 flex items-center justify-center shadow-xl shadow-black/5 group-hover:scale-110 group-hover:rotate-12 transition-all duration-700\" aria-hidden=\"true\">
                <span class=\"la la-";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield " text-4xl\"></span>
            </div>
            <div class=\"flex-grow flex flex-col justify-center\">
                <span class=\"text-[9px] font-black uppercase tracking-[0.4em] mb-1 opacity-40\" aria-hidden=\"true\">System Notification (";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["scope"] ?? null)), "html", null, true);
                yield ")</span>
                <div class=\"text-xl font-black leading-tight tracking-tightest\">";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 30);
                yield "</div>
            </div>
            
            <button onclick=\"this.parentElement.remove()\" class=\"w-10 h-10 rounded-full hover:bg-black/5 flex items-center justify-center transition-all active:scale-90 group/close\" aria-label=\"Dismiss notification\">
                <span class=\"la la-times text-2xl opacity-20 group-hover/close:opacity-100 transition-opacity\" aria-hidden=\"true\"></span>
            </button>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/messages.html.twig";
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
        return array (  113 => 38,  99 => 30,  95 => 29,  89 => 26,  84 => 23,  80 => 21,  77 => 20,  75 => 19,  72 => 18,  69 => 12,  66 => 10,  63 => 9,  61 => 8,  58 => 7,  54 => 6,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/messages.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/partials/messages.html.twig");
    }
}
