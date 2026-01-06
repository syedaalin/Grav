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

/* partials/modal-reinstall-package.html.twig */
class __TwigTemplate_c40669c69e114ffaf20d86255cb488dc extends Template
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
        yield "<div class=\"remodal\"
     data-remodal-id=\"reinstall-package\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"reinstall-package-confirm\">
            <h1>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REINSTALL_THE", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["type"] ?? null))))), "html", null, true);
        yield "</h1>
            <p class=\"bigger\">
                ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONFIRM_REINSTALL", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["type"] ?? null))))), "html", null, true);
        yield "
            </p>
            <p class=\"bigger hidden warning-reinstall-not-latest-release\">
                ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.WARNING_REINSTALL_NOT_LATEST_RELEASE"), "html", null, true);
        yield "
            </p>

            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        yield "</button>

                <button data-";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
        yield "-action=\"reinstall-package\"
                        data-package-slug=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "slug", [], "any", false, false, false, 18), "html", null, true);
        yield "\"
                        data-package-type=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "package_type", [], "any", false, false, false, 19), "html", null, true);
        yield "\"
                        data-package-name=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        yield "\"
                        data-package-current-version=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "version", [], "any", false, false, false, 21), "html", null, true);
        yield "\"
                        class=\"button\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        yield "</button>

                <div class=\"spinning-wheel hidden\">
                    ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.INSTALLING"), "html", null, true);
        yield ".. <i class=\"fa fa-spinner fa-spin\"></i>
                </div>
            </div>
        </div>

        <div class=\"reinstall-package-done hidden\">
            <h1>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REINSTALLED_SUCCESSFULLY", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["type"] ?? null))))), "html", null, true);
        yield "</h1>
        </div>

        <div class=\"reinstall-package-error hidden\">
            <h1>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ERROR_REINSTALLING_THE", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["type"] ?? null))))), "html", null, true);
        yield "</h1>
        </div>
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/modal-reinstall-package.html.twig";
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
        return array (  114 => 35,  107 => 31,  98 => 25,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  67 => 15,  60 => 11,  54 => 8,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/modal-reinstall-package.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/modal-reinstall-package.html.twig");
    }
}
