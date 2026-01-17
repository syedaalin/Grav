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

/* forms/layouts/xhr.html.twig */
class __TwigTemplate_5d6cd6c8fdf6c084e73a81cf028b5812 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "xhr_submit", [], "any", false, false, false, 1) == true)) {
            // line 2
            yield "  ";
            // line 3
            yield "  ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/xhr-submitter.js", ["group" => "bottom", "priority" => 101, "position" => "before"]], "method", false, false, false, 3);
            // line 4
            yield "  ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addInlineJs", [(((((("
    document.addEventListener('DOMContentLoaded', () => {
        // This now primarily sets up the *potential* for XHR submission
        // It might not attach the listener directly if recaptcha is present
        attachFormSubmitListener('" . CoreExtension::getAttribute($this->env, $this->source,             // line 8
($context["form"] ?? null), "id", [], "any", false, false, false, 8)) . "');

        // Re-run captcha initializers *if* the form was loaded via XHR initially
        // This covers edge cases, might not be strictly needed if captcha script handles DOMContentLoaded
        const formElement = document.getElementById('") . CoreExtension::getAttribute($this->env, $this->source,             // line 12
($context["form"] ?? null), "id", [], "any", false, false, false, 12)) . "');
        if (formElement && window.GravRecaptchaInitializers) {
            const initializerFuncName = 'initRecaptcha_") . CoreExtension::getAttribute($this->env, $this->source,             // line 14
($context["form"] ?? null), "id", [], "any", false, false, false, 14)) . "';
            if (typeof window.GravRecaptchaInitializers[initializerFuncName] === 'function') {
                 // Check if it needs init (e.g., if container exists but no widget/listener)
                 // For simplicity, just call it again; the init function should be idempotent
                 // window.GravRecaptchaInitializers[initializerFuncName]();
            }
        }
    });"), ["group" => "bottom", "priority" => 100, "position" => "before"]], "method", false, false, false, 4);
            // line 23
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/captcha/recaptcha-handler.js", ["group" => "bottom", "priority" => 99, "position" => "before"]], "method", false, false, false, 23);
            // line 24
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/captcha/turnstile-handler.js", ["group" => "bottom", "priority" => 98, "position" => "before"]], "method", false, false, false, 24);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/layouts/xhr.html.twig";
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
        return array (  75 => 24,  72 => 23,  63 => 14,  60 => 12,  55 => 8,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/layouts/xhr.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/form/templates/forms/layouts/xhr.html.twig");
    }
}
