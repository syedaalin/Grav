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

/* partials/base-root.html.twig */
class __TwigTemplate_691906fd18c536a46be599317dd6def6 extends Template
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
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body' => [$this, 'block_body'],
            'page' => [$this, 'block_page'],
            'navigation' => [$this, 'block_navigation'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'messages' => [$this, 'block_messages'],
            'widgets' => [$this, 'block_widgets'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
            'modals' => [$this, 'block_modals'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "extension", [], "method", false, false, false, 1) == "json")) {
            yield from $this->load("default.json.twig", 1)->unwrap()->yield($context);
        } else {
            // line 2
            yield "    <!DOCTYPE html>
    <html lang=\"";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "language", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "language", [], "any", false, false, false, 3), "en")) : ("en")), "html", null, true);
            yield "\">
    <head>
    ";
            // line 5
            yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
            // line 30
            yield "
    ";
            // line 31
            yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
            // line 35
            yield "
    </head>
    ";
            // line 37
            yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
            // line 180
            yield "    </html>
";
        }
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield Twig\Extension\CoreExtension::striptags(($context["title"] ?? null));
            yield " | ";
        } else {
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "title", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
                yield " | ";
            }
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "</title>
        ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "description", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "            <meta name=\"description\" content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "description", [], "any", false, false, false, 9), "html", null, true);
            yield "\">
        ";
        } else {
            // line 11
            yield "            <meta name=\"description\" content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "description", [], "any", false, false, false, 11), "html", null, true);
            yield "\">
        ";
        }
        // line 13
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "robots", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "            <meta name=\"robots\" content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "robots", [], "any", false, false, false, 14), "html", null, true);
            yield "\">
        ";
        } else {
            // line 16
            yield "            <meta name=\"robots\" content=\"noindex, nofollow\">
        ";
        }
        // line 18
        yield "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_simple"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["theme_url"] ?? null), "html", null, true);
        yield "/images/favicon.png\">

        ";
        // line 21
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 24
        yield "
        ";
        // line 25
        yield from $this->load("partials/javascript-config.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "        ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 29
        yield "    ";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "            ";
        yield from $this->load("partials/stylesheets.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "        ";
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "            ";
        yield from $this->load("partials/javascripts.html.twig", 27)->unwrap()->yield($context);
        // line 28
        yield "        ";
        yield from [];
    }

    // line 31
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
        // line 32
        yield "        ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 32);
        yield "
        ";
        // line 33
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, false, 33);
        yield "
    ";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "        ";
        $context["sidebarStatus"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->getCookie("grav-admin-sidebar");
        // line 39
        yield "        ";
        $context["sidebarStatus"] = (((( !(null === ($context["sidebarStatus"] ?? null)) && (($context["sidebarStatus"] ?? null) == "false")) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 39), "admin", [], "any", false, false, false, 39), "sidebar", [], "any", false, false, false, 39), "size", [], "any", false, false, false, 39) == "small"))) ? ("sidebar-closed") : (""));
        // line 40
        yield "    <body class=\"ga-theme-17x ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sidebarStatus"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 40), "admin", [], "any", false, false, false, 40), "body_classes", [], "any", false, false, false, 40), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["body_classes"] ?? null), "html", null, true);
        yield "\">

    ";
        // line 42
        if ((($tmp =  !$this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(["admin.login"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "        ";
            yield from $this->load("partials/messages.html.twig", 43)->unwrap()->yield($context);
            // line 44
            yield "    ";
        } else {
            // line 45
            yield "        ";
            yield from $this->unwrap()->yieldBlock('page', $context, $blocks);
            // line 172
            yield "
    ";
        }
        // line 174
        yield "
    ";
        // line 175
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 178
        yield "    </body>
    ";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "        <div class=\"remodal-bg\">

            ";
        // line 48
        yield from $this->unwrap()->yieldBlock('navigation', $context, $blocks);
        // line 51
        yield "
            <main id=\"admin-main\" >
                ";
        // line 53
        yield from $this->load("partials/nav-toggle.html.twig", 53)->unwrap()->yield($context);
        // line 54
        yield "                <div id=\"titlebar\" class=\"titlebar\">
                    ";
        // line 55
        yield from $this->unwrap()->yieldBlock('titlebar', $context, $blocks);
        // line 56
        yield "                </div>

                ";
        // line 58
        yield from $this->unwrap()->yieldBlock('content_wrapper', $context, $blocks);
        // line 84
        yield "
";
        // line 85
        $context["safe_upgrade_enabled"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, true, false, 85), "updates", [], "any", false, true, false, 85), "safe_upgrade", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 85), "updates", [], "any", false, false, false, 85), "safe_upgrade", [], "any", false, false, false, 85), false)) : (false));
        // line 86
        yield from $this->unwrap()->yieldBlock('modals', $context, $blocks);
        // line 167
        yield "
            </main>
            <div id='overlay'></div>
        </div>
        ";
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "                ";
        yield from $this->load("partials/nav.html.twig", 49)->unwrap()->yield($context);
        // line 50
        yield "            ";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_titlebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "                <div data-simplebar class=\"content-wrapper\">
                    <div class=\"";
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 60), "admin", [], "any", false, false, false, 60), "content_padding", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "content-padding";
        }
        yield "\">
                        ";
        // line 61
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 64
        yield "
                        ";
        // line 65
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 66
        yield "                        <div class=\"default-box-shadow\">
                            ";
        // line 67
        yield from $this->unwrap()->yieldBlock('content_top', $context, $blocks);
        // line 68
        yield "                            <div class=\"admin-block\">";
        // line 69
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 70
        yield "</div>
                            ";
        // line 71
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 71), "admin", [], "any", false, false, false, 71), "show_github_msg", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\" rel=\"noopener noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ADMIN_REPORT_ISSUE"), "html", null, true);
            yield "</a></div>
                            ";
        }
        // line 74
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('content_bottom', $context, $blocks);
        // line 75
        yield "                        </div>
                        ";
        // line 76
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 81
        yield "                    </div>
                </div>
                ";
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "                            ";
        yield from $this->load("partials/messages.html.twig", 62)->unwrap()->yield($context);
        // line 63
        yield "                        ";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widgets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "                        <footer id=\"footer\">
                             ";
        // line 78
        yield from $this->load("partials/footer.html.twig", 78)->unwrap()->yield($context);
        // line 79
        yield "                        </footer>
                        ";
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modals(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "                ";
        // line 88
        yield "                <div class=\"remodal\" data-remodal-id=\"session-expired\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SESSION_EXPIRED"), "Session Expired"), "html", null, true);
        yield "</h1>
                        <p class=\"bigger\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SESSION_EXPIRED_DESC"), "Your admin login session has expired. Click OK to log in again."), "html", null, true);
        yield "</p>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-confirm\" data-remodal-action=\"confirm\" href=\"#\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.OK"), "OK"), "html", null, true);
        yield "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ERROR"), "html", null, true);
        yield "</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLOSE"), "html", null, true);
        yield "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.METADATA"), "html", null, true);
        yield " for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLOSE"), "html", null, true);
        yield "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        yield "</h1>
                        <p class=\"bigger\">
                            ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        yield "
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        yield "</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        yield "</button>
                        </div>
                    </form>
                </div>
                ";
        // line 131
        if ((($tmp = ($context["safe_upgrade_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "                <div class=\"remodal safe-upgrade-modal\" data-remodal-id=\"update-grav\" data-remodal-options=\"hashTracking: false\">
                    <form class=\"safe-upgrade-form\">
                        <div class=\"safe-upgrade-header\">
                            <h2>";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SAFE_UPGRADE_TITLE"), "html", null, true);
            yield "</h2>
                            <p class=\"bigger\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SAFE_UPGRADE_DESC"), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"safe-upgrade-body\">
                            <section data-safe-upgrade-step=\"preflight\"></section>
                            <section data-safe-upgrade-step=\"progress\" class=\"hidden\"></section>
                            <section data-safe-upgrade-step=\"result\" class=\"hidden\"></section>
                        </div>
                        <div class=\"button-bar\" data-safe-upgrade-footer>
                            <button data-remodal-action=\"cancel\" data-safe-upgrade-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
            yield "</button>
                            <button data-safe-upgrade-action=\"recheck\" class=\"button secondary\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SAFE_UPGRADE_RECHECK"), "html", null, true);
            yield "</button>
                            <button data-safe-upgrade-action=\"start\" class=\"button primary hidden\" disabled>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SAFE_UPGRADE_START"), "html", null, true);
            yield "</button>
                            <button data-safe-upgrade-action=\"finish\" class=\"button primary hidden\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.SAFE_UPGRADE_FINISH"), "html", null, true);
            yield "</button>
                        </div>
                    </form>
                </div>
                ";
        } else {
            // line 152
            yield "                <div class=\"remodal\" data-remodal-id=\"update-grav\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
            yield "</h1>
                        <p class=\"bigger\">
                            ";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.MODAL_UPDATE_GRAV_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
            yield "
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
            yield "</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> ";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            yield "</button>
                        </div>
                    </form>
                </div>
                ";
        }
        // line 166
        yield "                ";
        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 176
        yield "        ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 176);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base-root.html.twig";
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
        return array (  647 => 176,  640 => 175,  635 => 166,  627 => 161,  623 => 160,  616 => 156,  611 => 154,  607 => 152,  599 => 147,  595 => 146,  591 => 145,  587 => 144,  576 => 136,  572 => 135,  567 => 132,  565 => 131,  558 => 127,  554 => 126,  547 => 122,  542 => 120,  533 => 114,  524 => 108,  515 => 102,  509 => 99,  500 => 93,  495 => 91,  491 => 90,  487 => 88,  485 => 87,  478 => 86,  472 => 79,  470 => 78,  467 => 77,  460 => 76,  450 => 74,  440 => 69,  430 => 67,  420 => 65,  415 => 63,  412 => 62,  405 => 61,  398 => 81,  396 => 76,  393 => 75,  390 => 74,  384 => 72,  382 => 71,  379 => 70,  377 => 69,  375 => 68,  373 => 67,  370 => 66,  368 => 65,  365 => 64,  363 => 61,  357 => 60,  354 => 59,  347 => 58,  337 => 55,  332 => 50,  329 => 49,  322 => 48,  313 => 167,  311 => 86,  309 => 85,  306 => 84,  304 => 58,  300 => 56,  298 => 55,  295 => 54,  293 => 53,  289 => 51,  287 => 48,  283 => 46,  276 => 45,  270 => 178,  268 => 175,  265 => 174,  261 => 172,  258 => 45,  255 => 44,  252 => 43,  250 => 42,  240 => 40,  237 => 39,  234 => 38,  227 => 37,  219 => 33,  214 => 32,  197 => 31,  192 => 28,  189 => 27,  182 => 26,  177 => 23,  174 => 22,  167 => 21,  162 => 29,  159 => 26,  157 => 25,  154 => 24,  152 => 21,  146 => 19,  143 => 18,  139 => 16,  133 => 14,  130 => 13,  124 => 11,  118 => 9,  116 => 8,  103 => 7,  100 => 6,  93 => 5,  85 => 180,  83 => 37,  79 => 35,  77 => 31,  74 => 30,  72 => 5,  67 => 3,  64 => 2,  60 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/base-root.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/base-root.html.twig");
    }
    private $deferred;
}
