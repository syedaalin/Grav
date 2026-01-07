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
/* ==========================================================================
   DYNAMIC THEME VARIABLES (Generated from Admin Config)
   2026 Standards: OKLCH Colors, Self-Hosted Fonts, Modern CSS
   ========================================================================== */

/* SELF-HOSTED FONTS (GDPR Compliant - Rule 5.1) */
";
        // line 8
        $context["font_primary"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_font_body"), "Outfit");
        // line 9
        $context["font_primary_file"] = Twig\Extension\CoreExtension::replace(($context["font_primary"] ?? null), [" " => ""]);
        // line 10
        yield "
";
        // line 12
        yield "@font-face {
    font-family: '";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["font_primary"] ?? null), "html", null, true);
        yield "';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url('";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc((("theme://fonts/" . ($context["font_primary_file"] ?? null)) . "-400.woff2")), "html", null, true);
        yield "') format('woff2');
}
@font-face {
    font-family: '";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["font_primary"] ?? null), "html", null, true);
        yield "';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url('";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc((("theme://fonts/" . ($context["font_primary_file"] ?? null)) . "-700.woff2")), "html", null, true);
        yield "') format('woff2');
}

";
        // line 28
        $context["font_header"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_font_header"), "Outfit");
        // line 29
        if (((($context["font_header"] ?? null) != ($context["font_primary"] ?? null)) && (($context["font_header"] ?? null) != ""))) {
            // line 30
            yield "    ";
            $context["font_header_file"] = Twig\Extension\CoreExtension::replace(($context["font_header"] ?? null), [" " => ""]);
            // line 31
            yield "    @font-face {
        font-family: '";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["font_header"] ?? null), "html", null, true);
            yield "';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url('";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc((("theme://fonts/" . ($context["font_header_file"] ?? null)) . "-700.woff2")), "html", null, true);
            yield "') format('woff2');
    }
";
        }
        // line 39
        yield "
   ======================================================================= */
/* 
   Fluid Typography Logic (2026 Standard)
   Uses clamp() for smooth scaling between viewport widths (320px - 1200px)
*/
";
        // line 45
        $context["min_size"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_typo_min_size"), 16);
        // line 46
        $context["max_size"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_typo_max_size"), 18);
        // line 47
        $context["scale"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_typo_scale"), 1.25);
        // line 48
        $context["fluid_enabled"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_typo_fluid");
        // line 49
        yield "
";
        // line 53
        $context["slope"] = ((($context["max_size"] ?? null) - ($context["min_size"] ?? null)) / 880);
        // line 54
        $context["intercept"] = (($context["min_size"] ?? null) - (($context["slope"] ?? null) * 320));
        // line 55
        yield "
:root {
    /* =======================================================================
       1. OKLCH BRAND PALETTE (2026 Standard - Rule 3.1)
       Perceptually uniform color space for accurate lightness manipulation
       ======================================================================= */
    
    /* Original Hex values for fallback */
    ";
        // line 63
        $context["p_hex"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_color_primary"), "#3b4252");
        // line 64
        yield "    ";
        $context["s_hex"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_color_secondary"), "#88c0d0");
        // line 65
        yield "    ";
        $context["a_hex"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_color_accent"), "#bf616a");
        // line 66
        yield "    
    --brand-primary-hex: ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["p_hex"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["p_hex"] ?? null))) : (($context["p_hex"] ?? null))), "html");
        yield ";
    --brand-secondary-hex: ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["s_hex"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["s_hex"] ?? null))) : (($context["s_hex"] ?? null))), "html");
        yield ";
    --brand-accent-hex: ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = $this->env->getFilter('iterable')->getCallable()(($context["a_hex"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["a_hex"] ?? null))) : (($context["a_hex"] ?? null))), "html");
        yield ";
    
    /* OKLCH Conversions (Primary color system) */
    /* We use the hex values from Admin and allow CSS to handle OKLCH if needed via color-mix or relative syntax */
    --brand-primary: ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["p_hex"] ?? null), "html", null, true);
        yield ";
    --brand-secondary: ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["s_hex"] ?? null), "html", null, true);
        yield ";
    --brand-accent: ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["a_hex"] ?? null), "html", null, true);
        yield ";
    
    /* Derived colors using CSS relative color syntax (2026 Standard) */
    --brand-primary-light: oklch(from var(--brand-primary) calc(l + 0.1) c h);
    --brand-primary-dark: oklch(from var(--brand-primary) calc(l - 0.1) c h);
    --brand-secondary-light: oklch(from var(--brand-secondary) calc(l + 0.1) c h);
    --brand-accent-hover: oklch(from var(--brand-accent) calc(l + 0.1) c h);
    
    /* 2. FOOTER COLORS */
    --footer-bg: ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_footer_color_bg"), "#0f0f10"), "html", null, true);
        yield ";
    --footer-text: ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_footer_color_text"), "#ffffff"), "html", null, true);
        yield ";
    --footer-accent: ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_footer_color_accent"), "#d4af37"), "html", null, true);
        yield ";
    --footer-muted: oklch(from var(--footer-text) l c h / 0.7);
    --footer-danger: oklch(55% 0.2 25); ";
        // line 89
        yield "    
    /* 3. UI SURFACE COLORS */
    --bg-body: ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_color_bg_body"), "#eceff4"), "html", null, true);
        yield ";
    --bg-card: ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_color_bg_card"), "#ffffff"), "html", null, true);
        yield ";
    --text-main: ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_color_text_main"), "#2e3440"), "html", null, true);
        yield ";
    --text-muted: ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_color_text_muted"), "#4c566a"), "html", null, true);
        yield ";
    
    /* 4. SHAPES & UI */
    --radius-main: ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "physic_radius_main"), "12px"), "html", null, true);
        yield ";
    --glass-opacity: ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "physic_glass_opacity"), 0.85), "html", null, true);
        yield ";
    --glass-blur: blur(";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "physic_glass_blur"), 20), "html", null, true);
        yield "px) saturate(180%);

    /* Neomorphism System (2026) */
    ";
        // line 102
        $context["neo_strength"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "physic_neo_strength"), 0);
        // line 103
        yield "    ";
        $context["neo_light"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "physic_neo_lightSource"), "top-left");
        // line 104
        yield "    
    ";
        // line 105
        if ((($context["neo_strength"] ?? null) > 0)) {
            // line 106
            yield "        --neo-dist: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["neo_strength"] ?? null) * 6), "html", null, true);
            yield "px;
        --neo-blur: ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["neo_strength"] ?? null) * 12), "html", null, true);
            yield "px;
        --neo-op-dark: ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["neo_strength"] ?? null) * 0.15), "html", null, true);
            yield ";
        --neo-op-light: ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["neo_strength"] ?? null) * 0.8), "html", null, true);
            yield ";
        
        ";
            // line 111
            if ((($context["neo_light"] ?? null) == "top-left")) {
                // line 112
                yield "            --neo-shadow: var(--neo-dist) var(--neo-dist) var(--neo-blur) oklch(0% 0 0 / var(--neo-op-dark)), 
                          calc(var(--neo-dist) * -1) calc(var(--neo-dist) * -1) var(--neo-blur) oklch(100% 0 0 / var(--neo-op-light));
            --neo-shadow-inset: inset var(--neo-dist) var(--neo-dist) var(--neo-blur) oklch(0% 0 0 / var(--neo-op-dark)), 
                                inset calc(var(--neo-dist) * -1) calc(var(--neo-dist) * -1) var(--neo-blur) oklch(100% 0 0 / var(--neo-op-light));
        ";
            } elseif ((            // line 116
($context["neo_light"] ?? null) == "top-right")) {
                // line 117
                yield "            --neo-shadow: calc(var(--neo-dist) * -1) var(--neo-dist) var(--neo-blur) oklch(0% 0 0 / var(--neo-op-dark)), 
                          var(--neo-dist) calc(var(--neo-dist) * -1) var(--neo-blur) oklch(100% 0 0 / var(--neo-op-light));
            --neo-shadow-inset: inset calc(var(--neo-dist) * -1) var(--neo-dist) var(--neo-blur) oklch(0% 0 0 / var(--neo-op-dark)), 
                                inset var(--neo-dist) calc(var(--neo-dist) * -1) var(--neo-blur) oklch(100% 0 0 / var(--neo-op-light));
        ";
            } else {
                // line 122
                yield "            --neo-shadow: 0 var(--neo-dist) var(--neo-blur) oklch(0% 0 0 / var(--neo-op-dark)), 
                          0 calc(var(--neo-dist) * -1) var(--neo-blur) oklch(100% 0 0 / var(--neo-op-light));
            --neo-shadow-inset: inset 0 var(--neo-dist) var(--neo-blur) oklch(0% 0 0 / var(--neo-op-dark)), 
                                inset 0 calc(var(--neo-dist) * -1) var(--neo-blur) oklch(100% 0 0 / var(--neo-op-light));
        ";
            }
            // line 127
            yield "    ";
        } else {
            // line 128
            yield "        --neo-shadow: 0 4px 6px -1px oklch(0% 0 0 / 0.1), 0 2px 4px -2px oklch(0% 0 0 / 0.1);
        --neo-shadow-inset: inset 0 2px 4px 0 oklch(0% 0 0 / 0.06);
    ";
        }
        // line 131
        yield "    
    /* BACKGROUND BUILDER 2026 (Dynamic Modes) */
    ";
        // line 133
        $context["bg_mode"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_mode"), 0);
        // line 134
        yield "    
    ";
        // line 135
        if ((($context["bg_mode"] ?? null) == 0)) {
            // line 136
            yield "        /* Mode: Solid Color (Default) */
        ";
            // line 137
            $context["s_col"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_solid_col"), "#ffffff");
            // line 138
            yield "        --bg-pattern: linear-gradient(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["s_col"] ?? null), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["s_col"] ?? null), "html", null, true);
            yield ");
        --bg-size: auto;
        --bg-fixed: scroll;
        --bg-anim: none;

    ";
        } elseif ((        // line 143
($context["bg_mode"] ?? null) == 1)) {
            // line 144
            yield "        /* Mode: Gradient */
        ";
            // line 145
            $context["g_type"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_grad_type"), "linear");
            // line 146
            yield "        ";
            $context["g_angle"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_grad_angle"), 135);
            // line 147
            yield "        ";
            $context["g_start"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_grad_start"), "#3b4252");
            // line 148
            yield "        ";
            $context["g_end"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_grad_end"), "#88c0d0");
            // line 149
            yield "        
        ";
            // line 150
            if ((($context["g_type"] ?? null) == "linear")) {
                // line 151
                yield "            --bg-pattern: linear-gradient(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["g_angle"] ?? null), "html", null, true);
                yield "deg, ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["g_start"] ?? null), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["g_end"] ?? null), "html", null, true);
                yield ");
        ";
            } else {
                // line 153
                yield "            --bg-pattern: radial-gradient(circle at center, ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["g_start"] ?? null), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["g_end"] ?? null), "html", null, true);
                yield ");
        ";
            }
            // line 155
            yield "        --bg-size: 100% 100%;
        --bg-fixed: fixed;
        --bg-anim: none;

    ";
        } elseif ((        // line 159
($context["bg_mode"] ?? null) == 2)) {
            // line 160
            yield "        /* Mode: Background Image */
        ";
            // line 161
            $context["bg_img"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_img")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/backgrounds/" . CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_img"), "name", [], "any", false, false, false, 161)))) : (""));
            // line 162
            yield "        ";
            $context["bg_pos"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_img_pos"), "center center");
            // line 163
            yield "        ";
            $context["bg_size"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_img_size"), "cover");
            // line 164
            yield "        ";
            $context["bg_attach"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_img_attach"), "fixed");
            // line 165
            yield "        ";
            $context["ov_col"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_img_overlay"), "#000000");
            // line 166
            yield "        ";
            $context["ov_op"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_img_op"), 0.3);
            // line 167
            yield "        
        /* Image with Overlay using Linear-Gradient Trick */
        ";
            // line 169
            if ((($tmp = ($context["bg_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 170
                yield "            --bg-pattern: linear-gradient(color-mix(in srgb, ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ov_col"] ?? null), "html", null, true);
                yield ", transparent ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((1 - ($context["ov_op"] ?? null)) * 100), "html", null, true);
                yield "%), color-mix(in srgb, ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ov_col"] ?? null), "html", null, true);
                yield ", transparent ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((1 - ($context["ov_op"] ?? null)) * 100), "html", null, true);
                yield "%)), url('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg_img"] ?? null), "html", null, true);
                yield "');
        ";
            } else {
                // line 172
                yield "            --bg-pattern: none; 
        ";
            }
            // line 174
            yield "        
        --bg-size: ";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg_size"] ?? null), "html", null, true);
            yield ";
        --bg-position: ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg_pos"] ?? null), "html", null, true);
            yield ";
        --bg-fixed: ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg_attach"] ?? null), "html", null, true);
            yield ";
        --bg-anim: none;

    ";
        } elseif ((        // line 180
($context["bg_mode"] ?? null) == 3)) {
            // line 181
            yield "        /* Mode: Aurora Mesh (Animated) */
        ";
            // line 182
            $context["m_c1"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_mesh_1"), "#3b4252");
            // line 183
            yield "        ";
            $context["m_c2"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_mesh_2"), "#bf616a");
            // line 184
            yield "        ";
            $context["m_c3"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_mesh_3"), "#88c0d0");
            // line 185
            yield "        ";
            $context["m_speed"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_mesh_speed"), 20);
            // line 186
            yield "
        --bg-pattern: 
            radial-gradient(at 0% 0%, ";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["m_c1"] ?? null), "html", null, true);
            yield " 0px, transparent 50%),
            radial-gradient(at 100% 0%, ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["m_c2"] ?? null), "html", null, true);
            yield " 0px, transparent 50%),
            radial-gradient(at 100% 100%, ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["m_c3"] ?? null), "html", null, true);
            yield " 0px, transparent 50%),
            radial-gradient(at 0% 100%, ";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["m_c1"] ?? null), "html", null, true);
            yield " 0px, transparent 50%);
        --bg-size: 200% 200%;
        --bg-fixed: fixed;
        --bg-anim: auroraMesh ";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["m_speed"] ?? null), "html", null, true);
            yield "s ease infinite alternate;

    ";
        } elseif ((        // line 196
($context["bg_mode"] ?? null) == 4)) {
            // line 197
            yield "        /* Mode: Legacy Pattern */
        ";
            // line 198
            $context["tex"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_tex"), "none");
            // line 199
            yield "        ";
            $context["op"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_tex_op"), 0.05);
            // line 200
            yield "        ";
            $context["tex_col"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "agent_env_tex_col"), "#000000");
            // line 201
            yield "        ";
            $context["tex_col_encoded"] = Twig\Extension\CoreExtension::replace(($context["tex_col"] ?? null), ["#" => "%23"]);
            // line 202
            yield "        ";
            $context["mix_col"] = (((("color-mix(in srgb, " . ($context["tex_col"] ?? null)) . ", transparent ") . Twig\Extension\CoreExtension::round(((1 - ($context["op"] ?? null)) * 100))) . "%)");
            // line 203
            yield "
        ";
            // line 204
            if ((($context["tex"] ?? null) == "noise")) {
                // line 205
                yield "            --bg-pattern: url(\"data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' fill='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tex_col_encoded"] ?? null), "html", null, true);
                yield "' opacity='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["op"] ?? null), "html", null, true);
                yield "' type='matrix'/%3E%3C/svg%3E\");
            --bg-size: 100% 100%;
        ";
            } elseif ((            // line 207
($context["tex"] ?? null) == "dots")) {
                // line 208
                yield "            --bg-pattern: radial-gradient(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mix_col"] ?? null), "html", null, true);
                yield " 1px, transparent 1px);
            --bg-size: 20px 20px;
        ";
            } elseif ((            // line 210
($context["tex"] ?? null) == "grid")) {
                // line 211
                yield "            --bg-pattern: linear-gradient(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mix_col"] ?? null), "html", null, true);
                yield " 1px, transparent 1px), linear-gradient(90deg, ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mix_col"] ?? null), "html", null, true);
                yield " 1px, transparent 1px);
            --bg-size: 30px 30px;
        ";
            } else {
                // line 214
                yield "             --bg-pattern: none;
             --bg-size: auto;
        ";
            }
            // line 217
            yield "        --bg-fixed: scroll;
        --bg-anim: none;
    ";
        }
        // line 220
        yield "
    ";
        // line 221
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "physic_vignette_enabled")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 222
            yield "        --vignette-display: block;
    ";
        } else {
            // line 224
            yield "        --vignette-display: none;
    ";
        }
        // line 226
        yield "    

    
    /* 5. LAYOUT & SPACING */
    --site-width: ";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "container_width"), 1200), "html", null, true);
        yield "px;
    --space-unit: ";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "spacing_scale"), 1.0), "html", null, true);
        yield "rem; 
    
    /* 6. LOGO */
    --logo-h-desktop: ";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "logo_height"), 48), "html", null, true);
        yield "px;
    --logo-h-mobile: ";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "logo_height_mobile"), 32), "html", null, true);
        yield "px;
    
    /* 7. FLUID TYPOGRAPHY VARIABLES */
    ";
        // line 238
        if ((($tmp = ($context["fluid_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 239
            yield "        /* min + (max-min) * ((100vw - 320px) / (1200 - 320)) simplified */
        --font-base: clamp(";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["min_size"] ?? null), "html", null, true);
            yield "px, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["intercept"] ?? null), 4), "html", null, true);
            yield "px + ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["slope"] ?? null) * 100), 4), "html", null, true);
            yield "vw, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_size"] ?? null), "html", null, true);
            yield "px);
    ";
        } else {
            // line 242
            yield "        --font-base: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["min_size"] ?? null), "html", null, true);
            yield "px;
    ";
        }
        // line 244
        yield "
    --scale-ratio: ";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["scale"] ?? null), "html", null, true);
        yield ";
    
    /* Micro-Typography */
    --line-height-body: ";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_typo_lh_body"), 1.6), "html", null, true);
        yield ";
    --line-height-heading: ";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_typo_lh_heading"), 1.2), "html", null, true);
        yield ";
    --tracking-heading: ";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_typo_ls_heading"),  -0.02), "html", null, true);
        yield "em;
    --measure: ";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_typo_measure"), 65), "html", null, true);
        yield "ch;

    --heading-3: calc(var(--font-base) * var(--scale-ratio) * var(--scale-ratio));
    --heading-2: calc(var(--font-base) * var(--scale-ratio) * var(--scale-ratio) * var(--scale-ratio));
    --heading-1: calc(var(--font-base) * var(--scale-ratio) * var(--scale-ratio) * var(--scale-ratio) * var(--scale-ratio));
}

/* =======================================================================
   REDUCED MOTION (Accessibility & Sustainability)
   ======================================================================= */
@media (prefers-reduced-motion: reduce) {
    :root {
        --bg-anim: none !important;
        --vignette-display: none !important;
        scroll-behavior: auto !important;
    }
    
    *, *::before, *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

/* =======================================================================
   TYPOGRAPHY (2026 Standard - Rule 3.2)
   ======================================================================= */
body { 
    font-family: '";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_font_body"), "Outfit"), "html", null, true);
        yield "', system-ui, -apple-system, sans-serif !important; 
    font-size: var(--font-base);
    line-height: var(--line-height-body);
}

h1, h2, h3, h4, h5, h6 {
    font-family: '";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_font_header"), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "token_font_body")), "Outfit"), "html", null, true);
        yield "', system-ui;
    line-height: var(--line-height-heading);
    letter-spacing: var(--tracking-heading);
    font-weight: 700;
}

/* Modular Scale */
h6 { font-size: var(--font-base); }
h5 { font-size: calc(var(--font-base) * var(--scale-ratio)); }
h4 { font-size: calc(var(--font-base) * var(--scale-ratio) * var(--scale-ratio)); }
h3 { font-size: calc(var(--font-base) * var(--scale-ratio) * var(--scale-ratio) * var(--scale-ratio)); }
h2 { font-size: calc(var(--font-base) * var(--scale-ratio) * var(--scale-ratio) * var(--scale-ratio) * var(--scale-ratio)); }
h1 { font-size: calc(var(--font-base) * var(--scale-ratio) * var(--scale-ratio) * var(--scale-ratio) * var(--scale-ratio) * var(--scale-ratio)); }

p, li, article {
    max-width: var(--measure);
}

/* =======================================================================
   MODERN CSS 2026 FEATURES
   ======================================================================= */

/* Text Wrapping (2026 Standard - Rule 3.2) */
h1, h2, h3, h4, h5, h6 {
    text-wrap: balance; /* Prevents orphans in headings */
}

p, li {
    text-wrap: pretty; /* Optimizes paragraph line breaks */
}

/* Performance Optimization */
.footer-builder-row,
.cognitive-nav__sublist,
.course-grid,
.service-grid {
    content-visibility: auto; /* Virtualizes off-screen content */
    contain-intrinsic-size: auto 500px; /* Estimated height for layout calculations */
}

/* Sticky Header Accessibility */
html {
    scroll-padding-top: 100px; /* Prevents content from hiding under fixed header */
}

/* Focus Outline Enhancement (WCAG 3.0) */
*:focus-visible {
    outline: 3px solid var(--brand-accent);
    outline-offset: 2px;
    border-radius: 2px;
}

/* =======================================================================
   DARK MODE SUPPORT (OKLCH-based)
   ======================================================================= */
@media (prefers-color-scheme: dark) {
    :root {
        --bg-body: oklch(15% 0.01 250);
        --bg-card: oklch(22% 0.01 250);
        --text-main: oklch(90% 0.01 250);
        --text-muted: oklch(65% 0.01 250);
        --glass-bg: oklch(22% 0.01 250 / var(--glass-opacity, 0.85));
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
        border-color: oklch(100% 0 0 / 0.1);
    }
    
    .quote-box p,
    .course-info span {
        color: var(--text-muted);
    }
    
    #header {
        background: var(--glass-bg) !important;
        border-bottom: 1px solid oklch(100% 0 0 / 0.1);
    }
}
/* FIX: Logo Constraints for Semantic Markup (CLS Prevention) */
.navbar-brand img, .nav-brand img {
    height: var(--logo-h-mobile);
    width: auto;
    /* Prevent layout shift by reserving space */
    aspect-ratio: auto;
}
@media (min-width: 840px) {
    .navbar-brand img, .nav-brand img {
        height: var(--logo-h-desktop);
    }
}
/* Aurora Mesh Animation */
@keyframes auroraMesh {
    0% { background-position: 0% 50%; border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; }
    50% { background-position: 100% 50%; border-radius: 60% 40% 30% 70% / 60% 50% 40% 50%; }
    100% { background-position: 0% 50%; border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; }
}
/* =======================================================================
   UI EFFECTS OVERRIDES (Applying Global Settings)
   ======================================================================= */
.glass-panel, 
#header, 
.service-card, 
.course-card, 
.quote-box, 
.hero-banner, 
.popular-course-card,
.social-btn,
.btn-primary,
.btn-secondary {
    box-shadow: var(--neo-shadow) !important;
}

#header, .glass-panel, .course-card {
    backdrop-filter: var(--glass-blur) !important;
    -webkit-backdrop-filter: var(--glass-blur) !important;
}

input:focus, textarea:focus, select:focus {
    box-shadow: var(--neo-shadow-inset) !important;
}

/* Ensure glass background uses dynamic opacity */
:root {
    --glass-bg: oklch(100% 0 0 / var(--glass-opacity, 0.85));
}

/* =======================================================================
   ADAPTIVE UX PROTOCOLS (Sentient Rule 1.2 & 3.3)
   ======================================================================= */

/* 1. RADICAL SUSTAINABILITY (ECO MODE) */
body.eco-mode {
    --bg-anim: none !important;
    --glass-blur: blur(0px) !important;
    --neo-shadow: 0 2px 4px oklch(0% 0 0 / 0.1) !important;
    --neo-shadow-inset: none !important;
}
body.eco-mode .aurora-mesh, 
body.eco-mode .hero-video, 
body.eco-mode .animated-blob {
    display: none !important;
}

/* 2. COGNITIVE FOCUS MODE */
body.focus-mode {
    --vignette-display: none !important;
    --glass-opacity: 1 !important;
    --bg-pattern: none !important;
    background-color: var(--bg-body) !important;
}
body.focus-mode .hero-banner,
body.focus-mode .side-widgets,
body.focus-mode .decorative-divider {
    display: none !important;
}
body.focus-mode article, 
body.focus-mode p {
    font-size: 1.1em;
    line-height: 1.8;
}

</style>

";
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
        return array (  660 => 286,  651 => 280,  619 => 251,  615 => 250,  611 => 249,  607 => 248,  601 => 245,  598 => 244,  592 => 242,  581 => 240,  578 => 239,  576 => 238,  570 => 235,  566 => 234,  560 => 231,  556 => 230,  550 => 226,  546 => 224,  542 => 222,  540 => 221,  537 => 220,  532 => 217,  527 => 214,  518 => 211,  516 => 210,  510 => 208,  508 => 207,  500 => 205,  498 => 204,  495 => 203,  492 => 202,  489 => 201,  486 => 200,  483 => 199,  481 => 198,  478 => 197,  476 => 196,  471 => 194,  465 => 191,  461 => 190,  457 => 189,  453 => 188,  449 => 186,  446 => 185,  443 => 184,  440 => 183,  438 => 182,  435 => 181,  433 => 180,  427 => 177,  423 => 176,  419 => 175,  416 => 174,  412 => 172,  398 => 170,  396 => 169,  392 => 167,  389 => 166,  386 => 165,  383 => 164,  380 => 163,  377 => 162,  375 => 161,  372 => 160,  370 => 159,  364 => 155,  356 => 153,  346 => 151,  344 => 150,  341 => 149,  338 => 148,  335 => 147,  332 => 146,  330 => 145,  327 => 144,  325 => 143,  314 => 138,  312 => 137,  309 => 136,  307 => 135,  304 => 134,  302 => 133,  298 => 131,  293 => 128,  290 => 127,  283 => 122,  276 => 117,  274 => 116,  268 => 112,  266 => 111,  261 => 109,  257 => 108,  253 => 107,  248 => 106,  246 => 105,  243 => 104,  240 => 103,  238 => 102,  232 => 99,  228 => 98,  224 => 97,  218 => 94,  214 => 93,  210 => 92,  206 => 91,  202 => 89,  197 => 86,  193 => 85,  189 => 84,  177 => 75,  173 => 74,  169 => 73,  162 => 69,  158 => 68,  154 => 67,  151 => 66,  148 => 65,  145 => 64,  143 => 63,  133 => 55,  131 => 54,  129 => 53,  126 => 49,  124 => 48,  122 => 47,  120 => 46,  118 => 45,  110 => 39,  104 => 36,  97 => 32,  94 => 31,  91 => 30,  89 => 29,  87 => 28,  81 => 24,  74 => 20,  68 => 17,  61 => 13,  58 => 12,  55 => 10,  53 => 9,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/custom-styles.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/my-quark/templates/partials/custom-styles.html.twig");
    }
}
