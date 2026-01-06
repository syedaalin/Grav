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

/* partials/custom-styles.html.twig */
class __TwigTemplate_a465ad0eb0ac369e1f7322cf0fdba91f extends Template
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
        yield "<style>
/* DYNAMIC THEME VARIABLES (Generated from Admin Config) */
:root {
    /* 1. BRAND PALETTE */
    --brand-primary: ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand_primary"), "#3b4252"), "html", null, true);
        yield ";
    --brand-secondary: ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand_secondary"), "#88c0d0"), "html", null, true);
        yield ";
    --brand-accent: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand_accent"), "#bf616a"), "html", null, true);
        yield ";
    
    /* 2. COLORS: FOOTER */
    --footer-bg: ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer_bg"), "#0f0f10"), "html", null, true);
        yield ";
    --footer-text: ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer_text"), "#ffffff"), "html", null, true);
        yield ";
    --footer-accent: ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer_accent"), "#d4af37"), "html", null, true);
        yield ";
    
    /* 3. SHAPES & UI */
    --radius-main: ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "radius_main"), "12px"), "html", null, true);
        yield ";
    --glass-opacity: ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "glass_opacity"), 0.85), "html", null, true);
        yield ";
    
    /* BACKGROUND TEXTURE (2026 ADAPTIVE) */
    ";
        // line 19
        $context["tex"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "background_texture"), "none");
        // line 20
        yield "    ";
        $context["op"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "texture_opacity"), 0.05);
        // line 21
        yield "    ";
        $context["tex_col"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "texture_color"), "#000000");
        // line 22
        yield "    ";
        $context["tex_col_encoded"] = Twig\Extension\CoreExtension::replace(($context["tex_col"] ?? null), ["#" => "%23"]);
        // line 23
        yield "    
    /* Modern Alpha-Mixing for Gradients */
    ";
        // line 25
        $context["mix_col"] = (((("color-mix(in srgb, " . ($context["tex_col"] ?? null)) . ", transparent ") . Twig\Extension\CoreExtension::round(((1 - ($context["op"] ?? null)) * 100))) . "%)");
        // line 26
        yield "    
    ";
        // line 27
        if ((($context["tex"] ?? null) == "noise")) {
            // line 28
            yield "        /* SVG Noise Filter */
        --bg-pattern: url(\"data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' fill='";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tex_col_encoded"] ?? null), "html", null, true);
            yield "' opacity='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["op"] ?? null), "html", null, true);
            yield "' type='matrix'/%3E%3C/svg%3E\");
        --bg-size: 100% 100%;
        --bg-fixed: fixed;
    ";
        } elseif ((        // line 32
($context["tex"] ?? null) == "plus")) {
            // line 33
            yield "        --bg-pattern: url(\"data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tex_col_encoded"] ?? null), "html", null, true);
            yield "' fill-opacity='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["op"] ?? null), "html", null, true);
            yield "' fill-rule='evenodd'%3E%3Cpath d='M20 3a1 1 0 0 1 1 1v15h15a1 1 0 1 1 0 2H21v15a1 1 0 1 1-2 0V21H4a1 1 0 1 1 0-2h15V4a1 1 0 0 1 1-1z'/%3E%3C/g%3E%3C/svg%3E\");
        --bg-size: 40px 40px;
    ";
        } elseif ((        // line 35
($context["tex"] ?? null) == "cross")) {
            // line 36
            yield "        --bg-pattern: url(\"data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tex_col_encoded"] ?? null), "html", null, true);
            yield "' fill-opacity='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["op"] ?? null), "html", null, true);
            yield "' fill-rule='evenodd'%3E%3Cpath d='M20 18.59l14.15-14.15 1.41 1.41L21.41 20l14.15 14.15-1.41 1.41L20 21.41 5.85 35.56 4.44 34.15 18.59 20 4.44 5.85 5.85 4.44z'/%3E%3C/g%3E%3C/svg%3E\");
        --bg-size: 40px 40px;
    ";
        } elseif ((        // line 38
($context["tex"] ?? null) == "circle")) {
            // line 39
            yield "        --bg-pattern: url(\"data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 37a17 17 0 1 0 0-34 17 17 0 0 0 0 34zm0-2a15 15 0 1 1 0-30 15 15 0 0 1 0 30z' fill='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tex_col_encoded"] ?? null), "html", null, true);
            yield "' fill-opacity='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["op"] ?? null), "html", null, true);
            yield "' fill-rule='nonzero'/%3E%3C/svg%3E\");
        --bg-size: 50px 50px;
    ";
        } elseif ((        // line 41
($context["tex"] ?? null) == "triangle")) {
            // line 42
            yield "        --bg-pattern: url(\"data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 5l15 26H5z' stroke='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tex_col_encoded"] ?? null), "html", null, true);
            yield "' stroke-opacity='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["op"] ?? null), "html", null, true);
            yield "' stroke-width='2' fill='none'/%3E%3C/svg%3E\");
        --bg-size: 40px 40px;
    ";
        } elseif ((        // line 44
($context["tex"] ?? null) == "dots")) {
            // line 45
            yield "        /* Micro-Dot Grid */
        --bg-pattern: radial-gradient(";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mix_col"] ?? null), "html", null, true);
            yield " 1px, transparent 1px);
        --bg-size: 20px 20px;
    ";
        } elseif ((        // line 48
($context["tex"] ?? null) == "grid")) {
            // line 49
            yield "        /* Technical Graph */
        --bg-pattern: linear-gradient(";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mix_col"] ?? null), "html", null, true);
            yield " 1px, transparent 1px), linear-gradient(90deg, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mix_col"] ?? null), "html", null, true);
            yield " 1px, transparent 1px);
        --bg-size: 30px 30px;
    ";
        } elseif ((        // line 52
($context["tex"] ?? null) == "lines")) {
            // line 53
            yield "        /* Modern Diagonal */
        --bg-pattern: repeating-linear-gradient(45deg, ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mix_col"] ?? null), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mix_col"] ?? null), "html", null, true);
            yield " 1px, transparent 1px, transparent 10px);
        --bg-size: 20px 20px;
    ";
        } elseif ((        // line 56
($context["tex"] ?? null) == "mesh")) {
            // line 57
            yield "        /* Dynamic Brand Mesh */
        /* We use the brand variables injected above, mixing them with transparency based on opacity setting */
        --bg-pattern: 
            radial-gradient(at 0% 0%, color-mix(in srgb, var(--brand-primary), transparent ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((1 - (($context["op"] ?? null) * 2)) * 100), "html", null, true);
            yield "%) 0, transparent 50%), 
            radial-gradient(at 50% 0%, color-mix(in srgb, var(--brand-secondary), transparent ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((1 - (($context["op"] ?? null) * 2)) * 100), "html", null, true);
            yield "%) 0, transparent 50%), 
            radial-gradient(at 100% 0%, color-mix(in srgb, var(--brand-accent), transparent ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((1 - (($context["op"] ?? null) * 2)) * 100), "html", null, true);
            yield "%) 0, transparent 50%);
        --bg-size: 100% 100%;
        --bg-fixed: fixed;
    ";
        } else {
            // line 66
            yield "        --bg-pattern: none;
        --bg-size: auto;
    ";
        }
        // line 69
        yield "    
    /* ANIMATION & EFFECTS */
    ";
        // line 71
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "texture_animate")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "        --bg-anim: bgBreathing 30s ease-in-out infinite alternate;
    ";
        } else {
            // line 74
            yield "        --bg-anim: none;
    ";
        }
        // line 76
        yield "    
    ";
        // line 77
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "vignette_overlay")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "        --vignette-display: block;
    ";
        } else {
            // line 80
            yield "        --vignette-display: none;
    ";
        }
        // line 82
        yield "    
    /* 4. LAYOUT & SPACING */
    --site-width: ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "container_width"), 1200), "html", null, true);
        yield "px;
    --space-unit: ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "spacing_scale"), 1.0), "html", null, true);
        yield "rem; 
    
    /* 5. LOGO */
    --logo-h-desktop: ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "logo_height"), 48), "html", null, true);
        yield "px;
    --logo-h-mobile: ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "logo_height_mobile"), 32), "html", null, true);
        yield "px;
    
    /* 6. TYPOGRAPHY (Calculated) */
    --font-base: ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "font_size_base"), 16), "html", null, true);
        yield "px;
    --type-scale: ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "heading_scale"), 1.2), "html", null, true);
        yield ";
    
    --heading-3: calc(var(--font-base) * var(--type-scale) * var(--type-scale));
    --heading-2: calc(var(--font-base) * var(--type-scale) * var(--type-scale) * var(--type-scale));
    --heading-1: calc(var(--font-base) * var(--type-scale) * var(--type-scale) * var(--type-scale) * var(--type-scale));
}

/* Font Implementation */
body { 
    font-family: '";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "font_primary"), "Outfit"), "html", null, true);
        yield "', sans-serif !important; 
    font-size: var(--font-base);
}

";
        // line 106
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "font_header")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "h1, h2, h3, h4, h5, h6, .footer-heading, .brand-text {
    font-family: '";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "font_header"), "html", null, true);
            yield "', sans-serif !important;
}
";
        }
        // line 111
        yield "
/* Dark Mode Support */
@media (prefers-color-scheme: dark) {
    :root {
        --bg-body: #1a1a1a;
        --text-main: #e0e0e0;
        --text-muted: #a0a0a0;
        --bg-card: #2a2a2a;
        --glass-bg: rgba(42, 42, 42, var(--glass-opacity, 0.85));
    }
    
    body {
        background-color: var(--bg-body);
        color: var(--text-main);
    }
    
    .course-card,
    .service-card,
    .quote-box,
    .popular-course-card {
        background: var(--bg-card);
        border-color: rgba(255,255,255,0.1);
    }
    
    .quote-box p,
    .course-info span {
        color: var(--text-muted);
    }
    
    #header {
        background: var(--glass-bg) !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
}
</style>

";
        // line 148
        $context["primary"] = Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "font_primary"), "Outfit"), [" " => "+"]);
        // line 149
        $context["header"] = Twig\Extension\CoreExtension::replace($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "font_header"), [" " => "+"]);
        // line 150
        yield "
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

";
        // line 155
        yield "<link href=\"https://fonts.googleapis.com/css2?family=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["primary"] ?? null), "html", null, true);
        yield ":wght@300;400;600;700&display=swap\" rel=\"stylesheet\">

";
        // line 158
        if ((($tmp = ($context["header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 159
            yield "<link href=\"https://fonts.googleapis.com/css2?family=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["header"] ?? null), "html", null, true);
            yield ":wght@400;700&display=swap\" rel=\"stylesheet\">
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/custom-styles.html.twig";
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
        return array (  361 => 159,  359 => 158,  353 => 155,  347 => 150,  345 => 149,  343 => 148,  305 => 111,  299 => 108,  296 => 107,  294 => 106,  287 => 102,  275 => 93,  271 => 92,  265 => 89,  261 => 88,  255 => 85,  251 => 84,  247 => 82,  243 => 80,  239 => 78,  237 => 77,  234 => 76,  230 => 74,  226 => 72,  224 => 71,  220 => 69,  215 => 66,  208 => 62,  204 => 61,  200 => 60,  195 => 57,  193 => 56,  186 => 54,  183 => 53,  181 => 52,  174 => 50,  171 => 49,  169 => 48,  164 => 46,  161 => 45,  159 => 44,  151 => 42,  149 => 41,  141 => 39,  139 => 38,  131 => 36,  129 => 35,  121 => 33,  119 => 32,  111 => 29,  108 => 28,  106 => 27,  103 => 26,  101 => 25,  97 => 23,  94 => 22,  91 => 21,  88 => 20,  86 => 19,  80 => 16,  76 => 15,  70 => 12,  66 => 11,  62 => 10,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/custom-styles.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/custom-styles.html.twig");
    }
}
