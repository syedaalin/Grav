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

/* partials/base.html.twig */
class __TwigTemplate_ca1564a2a09add33d0b9d0035ec1dd09 extends Template
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

        // line 4
        $_trait_0 = $this->load("blocks/base.html.twig", 4);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["body_classes"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->bodyClassFunc($context, ["header-fixed", "header-animated", "header-dark", "header-transparent", "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "production-mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (".min.css") : (".css"));
        // line 5
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 6
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 6), "getActive", [], "any", false, false, false, 6)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, false, 6), "getActive", [], "any", false, false, false, 6), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 6), "site", [], "any", false, false, false, 6), "default_lang", [], "any", false, false, false, 6), "html", null, true)));
        yield "\" class=\"scroll-smooth focus-within:scroll-auto\">
<head>
";
        // line 8
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 49
        yield "
";
        // line 50
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 54
        yield "
";
        // line 55
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 66
        yield "
";
        // line 67
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        // line 71
        yield "</head>
<body id=\"top\" class=\"antialiased text-brand-dark bg-brand-bg font-sans selection:bg-brand-primary selection:text-white transition-all duration-700 ";
        // line 72
        yield from $this->unwrap()->yieldBlock('body_classes', $context, $blocks);
        yield "\" itemscope itemtype=\"https://schema.org/WebPage\">
    <nav aria-label=\"Skip links\">
        <a href=\"#main-content\" class=\"sr-only focus:not-sr-only focus:fixed focus:top-8 focus:left-8 focus:z-[100] focus:px-10 focus:py-5 focus:bg-brand-primary focus:text-white focus:rounded-[2rem] focus:shadow-4xl focus:font-black focus:uppercase focus:tracking-widest transition-all\">Skip to main content</a>
    </nav>
    
    ";
        // line 77
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "ai_disclosure")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "        ";
            try {
                $_v0 = $this->load("partials/ai-disclosure.html.twig", 78);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield($context);
            }
            // line 79
            yield "    ";
        }
        // line 80
        yield "    
    ";
        // line 81
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "doodle_engine")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "    <div id=\"doodle-container\" class=\"fixed inset-0 pointer-events-none z-[-1]\" aria-hidden=\"true\"></div>
    ";
        }
        // line 84
        yield "
    <div id=\"page-wrapper\" class=\"min-h-screen flex flex-col relative @container overflow-x-hidden\">
    ";
        // line 86
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 89
        yield "
    ";
        // line 90
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 91
        yield "
    <main id=\"main-content\" class=\"flex-grow\" role=\"main\">
        ";
        // line 93
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 105
        yield "    </main>

    ";
        // line 107
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 110
        yield "
    ";
        // line 111
        try {
            $_v1 = $this->load("partials/cmp.html.twig", 111);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v1 = null;
        }
        if ($_v1) {
            yield from $_v1->unwrap()->yield($context);
        }
        // line 112
        yield "
    ";
        // line 113
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 116
        yield "    </div>
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->deferred->defer($this, 'head');
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_deferred(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 10), "html");
            yield " | ";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 10), "html");
        yield "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, viewport-fit=cover\">
    ";
        // line 14
        yield from $this->load("partials/metadata.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "
    ";
        // line 16
        $context["favicon_img"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo")), "name", [], "any", false, false, false, 16)))) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/favicon.png")));
        // line 17
        yield "    <link rel=\"icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["favicon_img"] ?? null), "html", null, true);
        yield "\" />
    <link rel=\"canonical\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 18), "html", null, true);
        yield "\" />
    <meta name=\"view-transition\" content=\"same-origin\" />

    ";
        // line 22
        yield "    <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org\",
      \"@type\": \"NGO\",
      \"name\": \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 26), "html", null, true);
        yield "\",
      \"url\": \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "base_url_absolute", [], "any", false, false, false, 27), "html", null, true);
        yield "\",
      \"logo\": {
        \"@type\": \"ImageObject\",
        \"url\": \"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "base_url_absolute", [], "any", false, false, false, 30), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/logo.svg"), "html", null, true);
        yield "\"
      },
      \"description\": \"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 32), "description", [], "any", false, false, false, 32), "html", null, true);
        yield "\",
      \"foundingDate\": \"2026-01-01\", 
      \"areaServed\": \"Global\",
      \"knowsAbout\": [\"Islam\", \"Education\", \"Digital Transformation\", \"Ethics\"],
      \"address\": {
        \"@type\": \"PostalAddress\",
        \"streetAddress\": \"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 38), "contact_address", [], "any", false, false, false, 38), "html", null, true);
        yield "\"
      },
      \"email\": \"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 40), "contact_email", [], "any", false, false, false, 40), "html", null, true);
        yield "\",
      \"sameAs\": [
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 42), "social_links", [], "any", false, false, false, 42));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 43
            yield "          \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 43), "html", null, true);
            yield "\"";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",";
            }
            // line 44
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "      ]
    }
    </script>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/build.css"], "method", false, false, false, 51);
        // line 52
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/line-awesome.min.css"], "method", false, false, false, 52);
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/site.js", ["group" => "bottom"]], "method", false, false, false, 56);
        // line 57
        yield "    <script>
        window.themeSettings = {
            ai_disclosure: ";
        // line 59
        yield (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "ai_disclosure")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ",
            ai_assistant: ";
        // line 60
        yield (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "ai_assistant")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ",
            focus_mode: ";
        // line 61
        yield (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "focus_mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ",
            doodle_engine: ";
        // line 62
        yield (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "doodle_engine")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "
        };
    </script>
";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->deferred->defer($this, 'assets');
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets_deferred(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 68);
        yield "
    ";
        // line 69
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, false, 69);
        yield "
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["body_classes"] ?? null), "html", null, true);
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "        ";
        yield from $this->load("partials/header.html.twig", 87)->unwrap()->yield($context);
        // line 88
        yield "    ";
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 94
        yield "            <div id=\"body-wrapper\" class=\"py-32 @container\">
                <article class=\"container mx-auto px-6 max-w-container\" itemprop=\"mainEntityOfPage\">
                    <header>
                        ";
        // line 97
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 100
        yield "                    </header>
                    ";
        // line 101
        yield from         $this->unwrap()->yieldBlock("content_surround", $context, $blocks);
        yield "
                </article>
            </div>
        ";
        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 98
        yield "                            ";
        try {
            $_v2 = $this->load("partials/messages.html.twig", 98);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v2 = null;
        }
        if ($_v2) {
            yield from $_v2->unwrap()->yield($context);
        }
        // line 99
        yield "                        ";
        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 108
        yield "        ";
        yield from $this->load("partials/footer.html.twig", 108)->unwrap()->yield($context);
        // line 109
        yield "    ";
        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 114
        yield "        ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 114);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base.html.twig";
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
        return array (  508 => 114,  501 => 113,  496 => 109,  493 => 108,  486 => 107,  481 => 99,  470 => 98,  463 => 97,  454 => 101,  451 => 100,  449 => 97,  444 => 94,  437 => 93,  427 => 90,  422 => 88,  419 => 87,  412 => 86,  401 => 72,  393 => 69,  388 => 68,  371 => 67,  362 => 62,  358 => 61,  354 => 60,  350 => 59,  346 => 57,  343 => 56,  336 => 55,  330 => 52,  327 => 51,  320 => 50,  311 => 45,  297 => 44,  290 => 43,  273 => 42,  268 => 40,  263 => 38,  254 => 32,  248 => 30,  242 => 27,  238 => 26,  232 => 22,  226 => 18,  221 => 17,  219 => 16,  216 => 15,  214 => 14,  203 => 10,  200 => 9,  183 => 8,  174 => 116,  172 => 113,  169 => 112,  159 => 111,  156 => 110,  154 => 107,  150 => 105,  148 => 93,  144 => 91,  142 => 90,  139 => 89,  137 => 86,  133 => 84,  129 => 82,  127 => 81,  124 => 80,  121 => 79,  110 => 78,  108 => 77,  100 => 72,  97 => 71,  95 => 67,  92 => 66,  90 => 55,  87 => 54,  85 => 50,  82 => 49,  80 => 8,  75 => 6,  72 => 5,  70 => 3,  68 => 2,  66 => 1,  35 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/base.html.twig", "/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/templates/partials/base.html.twig");
    }
    private $deferred;
}
