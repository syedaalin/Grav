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

/* partials/social-icons.html.twig */
class __TwigTemplate_cb6cf4b8de89f675f2d796467850cd54 extends Template
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
        $context["show_mobile"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_show_social_labels_mobile");
        // line 3
        $context["show_desktop"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "bottom_banner_show_social_labels_desktop");
        // line 4
        yield "
";
        // line 5
        $context["svg_paths"] = ["facebook" => "M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z", "twitter" => "M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z", "instagram" => "M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z", "youtube" => "M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z", "telegram" => "M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z", "maps" => "M12 0C7.802 0 4.4 3.402 4.4 7.602C4.4 11.174 12 24 12 24S19.6 11.174 19.6 7.602C19.6 3.402 16.199 0 12 0ZM12 10.933C10.16 10.933 8.667 9.44 8.667 7.6C8.667 5.76 10.16 4.267 12 4.267C13.84 4.267 15.333 5.76 15.333 7.6C15.333 9.44 13.84 10.933 12 10.933Z", "whatsapp" => "M12.031 0C5.396 0 0 5.396 0 12.031c0 2.12.55 4.167 1.589 5.968L.47 23.511l5.656-1.484A11.967 11.967 0 0012.03 24.06c6.636 0 12.031-5.396 12.031-12.03S18.667 0 12.031 0zM12.03 22.043c-1.83 0-3.628-.488-5.203-1.422l-.373-.222-3.86 1.013 1.031-3.765-.24-.386a9.982 9.982 0 01-1.533-5.23c0-5.515 4.486-10.003 10.046-10.003h.005c5.513 0 10.003 4.488 10.003 10.003.002 5.514-4.488 10.012-9.871 10.012zm5.492-7.513c-.3-.15-1.78-.878-2.055-.978-.276-.1-.476-.15-.676.15-.2.3-.776.978-.951 1.178-.175.2-.351.226-.651.076-1.286-.64-2.368-1.642-3.32-3.338-.266-.475 2.152-3.048-1.127-1.702-.1-.041-.22-.066-.34-.1-.13-.035-2.016-4.99-.214-4.832.185.016.37.039.53.07.135.025.29.076.4.202.155.176.5 1.254.55 1.354.05.1.075.213.013.338-.063.125-.1.2-.188.3-.1.113-.213.25-.3.338-.1.1-.213.213-.088.425.125.213.551.913 1.188 1.488.825.738 1.525.963 1.738 1.063.213.1.338.088.463-.05.125-.138.538-.626.688-.838.15-.213.3-.175.525-.088.225.088 1.425.675 1.675.8.25.125.413.188.475.288.063.1.063.576-.188 1.276z", "linkedin" => "M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z", "tiktok" => "M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93v6.14c0 1.36-.02 2.72-.31 4.05-.67 3.09-3.4 5.25-6.55 5.56-4.52.44-8.86-2.43-9.66-6.86-.44-2.45.2-4.99 1.74-6.89 1.55-1.92 4.02-3 6.47-2.91v4.17c-1.52-.08-3.03 1.14-3.5 2.59-.53 1.63.38 3.56 2.02 4.21 1.65.65 3.59.07 4.54-1.43.37-.58.55-1.26.54-1.94.01-3.69.01-7.39.01-11.08.01-1.35.01-2.7.01-4.05h1.11z", "pinterest" => "M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.399.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.951-7.252 4.173 0 7.41 2.967 7.41 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"];
        // line 17
        yield "
";
        // line 18
        $context["social_platforms"] = ["facebook", "twitter", "instagram", "youtube", "telegram", "linkedin", "tiktok", "pinterest", "snapchat", "spotify", "discord", "whatsapp"];
        // line 23
        yield "
<div class=\"social-icons-wrapper ";
        // line 24
        yield (((($context["context"] ?? null) == "top_banner")) ? ("is-top") : ("is-bottom"));
        yield "\">
\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["social_platforms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 26
            yield "\t\t";
            $context["url"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, ("social_" . $context["platform"]));
            // line 27
            yield "\t\t";
            $context["enabled"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, (("social_" . $context["platform"]) . "_enabled")), true);
            // line 28
            yield "\t\t";
            if ((($context["url"] ?? null) && ($context["enabled"] ?? null))) {
                // line 29
                yield "\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"social-icon ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["platform"], "html", null, true);
                yield " ";
                yield (((($tmp = ($context["show_mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show-label-mobile") : (""));
                yield " ";
                yield (((($tmp = ($context["show_desktop"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show-label-desktop") : (""));
                yield "\" aria-label=\"Visit our ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["platform"]), "html", null, true);
                yield " page\">

\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"currentColor\" class=\"social-icon-svg\" aria-hidden=\"true\">
\t\t\t\t\t<path d=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["svg_paths"] ?? null), $context["platform"], [], "array", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["svg_paths"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["platform"]] ?? null) : null), "")) : ("")), "html", null, true);
                yield "\"/>
\t\t\t\t</svg>

\t\t\t\t";
                // line 35
                if (((($context["show_mobile"] ?? null) || ($context["show_desktop"] ?? null)) && (($context["context"] ?? null) != "top_banner"))) {
                    // line 36
                    yield "\t\t\t\t\t<span class=\"social-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["platform"]), "html", null, true);
                    yield "</span>
\t\t\t\t";
                }
                // line 38
                yield "\t\t\t</a>
\t\t";
            }
            // line 40
            yield "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['platform'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "
\t";
        // line 43
        yield "\t";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_phone")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "\t\t<a href=\"tel:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_phone"), [" " => "", "(" => "", ")" => "", "-" => ""]), "html", null, true);
            yield "\" class=\"social-icon phone\" aria-label=\"Call us\">
\t\t\t<i class=\"la la-phone\"></i>
\t\t</a>
\t";
        }
        // line 48
        yield "\t";
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "\t\t<a href=\"mailto:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social_email"), "html", null, true);
            yield "\" class=\"social-icon email\" aria-label=\"Email us\">
\t\t\t<i class=\"la la-envelope\"></i>
\t\t</a>
\t";
        }
        // line 53
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/social-icons.html.twig";
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
        return array (  140 => 53,  132 => 49,  129 => 48,  121 => 44,  118 => 43,  115 => 41,  109 => 40,  105 => 38,  99 => 36,  97 => 35,  91 => 32,  76 => 29,  73 => 28,  70 => 27,  67 => 26,  63 => 25,  59 => 24,  56 => 23,  54 => 18,  51 => 17,  49 => 5,  46 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/social-icons.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/templates/partials/social-icons.html.twig");
    }
}
