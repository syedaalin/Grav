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

/* modular/khums-calculator.html.twig */
class __TwigTemplate_71cd49ba726ff7ae4900caa89f8c8dad extends Template
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
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modules/khums-calculator.js", ["priority" => 90, "group" => "bottom", "defer" => true, "type" => "module"]], "method", false, false, false, 2);
        // line 3
        yield "
";
        // line 22
        yield "<section class=\"modular-section modular-khums-calculator\">
\t<div class=\"section-container\">
\t\t<div class=\"calculator-wrapper\">

\t\t\t<div class=\"calculator-header animate-fade-in-up\">
\t\t\t\t<h2 class=\"section-title\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 27), "calc_title", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 27), "calc_title", [], "any", false, false, false, 27), "Khums & Sadaqah Calculator")) : ("Khums & Sadaqah Calculator")), "html", null, true);
        yield "</h2>
\t\t\t\t<p class=\"calculator-description\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 28), "calc_description", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 28), "calc_description", [], "any", false, false, false, 28), "Calculate your religious dues with complete privacy. All calculations are performed client-side.")) : ("Calculate your religious dues with complete privacy. All calculations are performed client-side.")), "html", null, true);
        yield "</p>

\t\t\t\t";
        // line 31
        yield "\t\t\t\t<div id=\"khums-currency-config\" data-currency=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 31), "currency_symbol", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 31), "currency_symbol", [], "any", false, false, false, 31), "\$")) : ("\$")), "html", null, true);
        yield "\" hidden aria-hidden=\"true\"></div>
\t\t\t\t<div id=\"khums-rate-config\" data-rate=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 32), "khums_rate", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 32), "khums_rate", [], "any", false, false, false, 32), 20)) : (20)), "html", null, true);
        yield "\" hidden aria-hidden=\"true\"></div>
\t\t\t</div>

\t\t\t<div
\t\t\t\tclass=\"calculator-layout\">

\t\t\t\t";
        // line 39
        yield "\t\t\t\t<div
\t\t\t\t\tclass=\"calculator-inputs\">
\t\t\t\t\t";
        // line 42
        yield "\t\t\t\t\t<div class=\"calculator-card calculator-card-success\">
\t\t\t\t\t\t<div class=\"calculator-card-bg\"></div>
\t\t\t\t\t\t<h3 class=\"calculator-card-title\">
\t\t\t\t\t\t\t<div class=\"calculator-card-icon calculator-icon-success\">
\t\t\t\t\t\t\t\t<i class=\"la la-coins\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>1. Assets (Surplus)</span>
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<div class=\"calculator-fields-grid\">
\t\t\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["id" => "khums-savings", "label" => "Savings & Cash", "icon" => "la-wallet"], ["id" => "khums-gold", "label" => "Gold & Jewelry", "icon" => "la-ring"], ["id" => "khums-business", "label" => "Business Inventory", "icon" => "la-store"], ["id" => "khums-other", "label" => "Other Surplus", "icon" => "la-archive"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 58
            yield "\t\t\t\t\t\t\t\t<div class=\"calculator-field\">
\t\t\t\t\t\t\t\t\t<label for=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 59), "html", null, true);
            yield "\" class=\"calculator-label calculator-label-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 59), "html", null, true);
            yield "</label>
\t\t\t\t\t\t\t\t\t<div class=\"calculator-input-wrapper\">
\t\t\t\t\t\t\t\t\t\t<span class=\"calculator-currency\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 61), "currency_symbol", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 61), "currency_symbol", [], "any", false, false, false, 61), "\$")) : ("\$")), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\" class=\"calculator-input calculator-input-success active-assets\" value=\"\" placeholder=\"0.00\" min=\"0\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 70
        yield "\t\t\t\t\t<div class=\"calculator-card calculator-card-error\">
\t\t\t\t\t\t<div class=\"calculator-card-bg\"></div>
\t\t\t\t\t\t<h3 class=\"calculator-card-title\">
\t\t\t\t\t\t\t<div class=\"calculator-card-icon calculator-icon-error\">
\t\t\t\t\t\t\t\t<i class=\"la la-file-invoice-dollar\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>2. Deductions</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"calculator-field\">
\t\t\t\t\t\t\t<label for=\"khums-debts\" class=\"calculator-label calculator-label-error\">Outstanding Debts & Expenses</label>
\t\t\t\t\t\t\t<div class=\"calculator-input-wrapper\">
\t\t\t\t\t\t\t\t<span class=\"calculator-currency\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 81), "currency_symbol", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 81), "currency_symbol", [], "any", false, false, false, 81), "\$")) : ("\$")), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t<input type=\"number\" id=\"khums-debts\" class=\"calculator-input calculator-input-error active-assets\" value=\"\" placeholder=\"0.00\" min=\"0\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 88
        yield "\t\t\t\t\t<div class=\"calculator-card calculator-card-primary\">
\t\t\t\t\t\t<div class=\"calculator-card-bg\"></div>
\t\t\t\t\t\t<h3 class=\"calculator-card-title\">
\t\t\t\t\t\t\t<div class=\"calculator-card-icon calculator-icon-primary\">
\t\t\t\t\t\t\t\t<i class=\"la la-heart\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>3. Optional Sadaqah</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"calculator-field\">
\t\t\t\t\t\t\t<label for=\"sadaqah-amount\" class=\"calculator-label calculator-label-primary\">Voluntary Contribution</label>
\t\t\t\t\t\t\t<div class=\"calculator-input-wrapper\">
\t\t\t\t\t\t\t\t<span class=\"calculator-currency\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 99), "currency_symbol", [], "any", true, true, false, 99)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 99), "currency_symbol", [], "any", false, false, false, 99), "\$")) : ("\$")), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t<input type=\"number\" id=\"sadaqah-amount\" class=\"calculator-input calculator-input-primary active-assets\" value=\"\" placeholder=\"0.00\" min=\"0\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 106
        yield "\t\t\t\t\t<div class=\"calculator-action\">
\t\t\t\t\t\t<button id=\"khums-calc-trigger\" class=\"btn-primary-outline calculator-button\">
\t\t\t\t\t\t\t<i class=\"la la-calculator calculator-button-icon\"></i>
\t\t\t\t\t\t\t<span>Calculate Amounts</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 115
        yield "\t\t\t\t<div class=\"calculator-results\">
\t\t\t\t\t<div class=\"calculator-results-card\">
\t\t\t\t\t\t<h3 class=\"calculator-results-title\">
\t\t\t\t\t\t\t<i class=\"la la-calculator\"></i>
\t\t\t\t\t\t\tSummary
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<div class=\"calculator-summary\">
\t\t\t\t\t\t\t<div class=\"calculator-summary-row\">
\t\t\t\t\t\t\t\t<span class=\"calculator-summary-label\">Net Surplus</span>
\t\t\t\t\t\t\t\t<span id=\"khums-net-display\" class=\"calculator-summary-value\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 125), "currency_symbol", [], "any", true, true, false, 125)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 125), "currency_symbol", [], "any", false, false, false, 125), "\$")) : ("\$")), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t0.00</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"calculator-summary-row\">
\t\t\t\t\t\t\t\t<span class=\"calculator-summary-label calculator-summary-khums\">Khums (20%)</span>
\t\t\t\t\t\t\t\t<span id=\"khums-calc-display\" class=\"calculator-summary-value calculator-summary-khums\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 130), "currency_symbol", [], "any", true, true, false, 130)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 130), "currency_symbol", [], "any", false, false, false, 130), "\$")) : ("\$")), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t0.00</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"calculator-summary-row\">
\t\t\t\t\t\t\t\t<span class=\"calculator-summary-label calculator-summary-sadaqah\">Sadaqah</span>
\t\t\t\t\t\t\t\t<span id=\"sadaqah-display\" class=\"calculator-summary-value calculator-summary-sadaqah\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 135), "currency_symbol", [], "any", true, true, false, 135)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 135), "currency_symbol", [], "any", false, false, false, 135), "\$")) : ("\$")), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t0.00</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"calculator-total\">
\t\t\t\t\t\t\t<div class=\"calculator-total-bg\"></div>
\t\t\t\t\t\t\t<div class=\"calculator-total-content\">
\t\t\t\t\t\t\t\t<div class=\"calculator-total-label\">Total Payable</div>
\t\t\t\t\t\t\t\t<div id=\"khums-total-display\" class=\"calculator-total-amount\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 144), "currency_symbol", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 144), "currency_symbol", [], "any", false, false, false, 144), "\$")) : ("\$")), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t0.00</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 150
        yield "\t\t\t\t\t\t<div class=\"calculator-toggle-wrapper\">
\t\t\t\t\t\t\t<label class=\"calculator-toggle-label\">
\t\t\t\t\t\t\t\t<span class=\"calculator-toggle-text\">Split Khums 50/50</span>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"khums-split-toggle\" class=\"sr-only\">
\t\t\t\t\t\t\t\t<div class=\"calculator-toggle-switch\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<p class=\"calculator-toggle-hint\">Automatically divides your Khums equally between Sehme Imam and Sehme Sadaat.</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"calculator-actions\">
\t\t\t\t\t\t\t<div class=\"calculator-security-badge\">
\t\t\t\t\t\t\t\t<i class=\"la la-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tSecure & Private
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<button id=\"khums-checkout-btn\" class=\"btn-primary calculator-checkout-button snipcart-add-item\" data-item-id=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 165), "donation_snipcart_id", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 165), "donation_snipcart_id", [], "any", false, false, false, 165), "religious-dues")) : ("religious-dues")), "html", null, true);
        yield "\" data-item-name=\"Religious Dues (Khums + Sadaqah)\" data-item-price=\"0\" data-item-url=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true], "method", false, false, false, 165), "html", null, true);
        yield "\" data-item-custom1-name=\"Khums Split\" data-item-custom1-options=\"Full Amount|Split 50/50\" data-item-custom2-name=\"Khums Amount\" data-item-custom2-type=\"readonly\" data-item-custom2-value=\"0\" data-item-custom3-name=\"Sadaqah Amount\" data-item-custom3-type=\"readonly\" data-item-custom3-value=\"0\">
\t\t\t\t\t\t\t\t<i class=\"la la-heart\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tPay Total
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/khums-calculator.html.twig";
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
        return array (  245 => 165,  228 => 150,  220 => 144,  208 => 135,  200 => 130,  192 => 125,  180 => 115,  170 => 106,  161 => 99,  148 => 88,  139 => 81,  126 => 70,  121 => 66,  111 => 62,  107 => 61,  100 => 59,  97 => 58,  93 => 52,  81 => 42,  77 => 39,  68 => 32,  63 => 31,  58 => 28,  54 => 27,  47 => 22,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modular/khums-calculator.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/modular/khums-calculator.html.twig");
    }
}
