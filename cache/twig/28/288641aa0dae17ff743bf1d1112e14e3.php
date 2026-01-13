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

/* partials/modal-remove-package.html.twig */
class __TwigTemplate_201ba3debd9640e68e2da2836b670115 extends Template
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
     data-remodal-id=\"remove-package\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"remove-package-confirm\">
            <h1>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REMOVE_THE", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["type"] ?? null))))), "html", null, true);
        yield "</h1>
            <p class=\"bigger\">
                ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONFIRM_REMOVAL", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["type"] ?? null))))), "html", null, true);
        yield "
            </p>

            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        yield "</button>
                <button data-";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
        yield "-action=\"remove-package\" data-packages-slugs=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "slug", [], "any", false, false, false, 13), "html", null, true);
        yield "\" class=\"button\"><i class=\"fa fa-fw fa-check\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        yield "</button>
            </div>
        </div>

        <div class=\"remove-package-dependencies hidden\">
            <h1>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REMOVED_SUCCESSFULLY", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["type"] ?? null))))), "html", null, true);
        yield "</h1>
            <p>
                ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ADDITIONAL_DEPENDENCIES_CAN_BE_REMOVED", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["type"] ?? null))))), "html", null, true);
        yield "
            </p>
            <div>
                <ul class=\"package-dependencies-container\"></ul>
            </div>
            <div class=\"button-bar\">
                <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc((("/" . ($context["type"] ?? null)) . "s")), "html", null, true);
        yield "\" class=\"button secondary\"><i class=\"fa fa-fw fa-close\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLOSE"), "html", null, true);
        yield "</a>
            </div>
        </div>

        <div class=\"remove-package-done hidden\">
            <h1>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.REMOVED_SUCCESSFULLY", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["type"] ?? null))))), "html", null, true);
        yield "</h1>
            <div class=\"button-bar\">
                <a href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc((("/" . ($context["type"] ?? null)) . "s")), "html", null, true);
        yield "\" class=\"button secondary\"><i class=\"fa fa-fw fa-close\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CLOSE"), "html", null, true);
        yield "</a>
            </div>
        </div>

        <div class=\"remove-package-error hidden\">
            <h1>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.ERROR_REMOVING_THE", $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ("PLUGIN_ADMIN." . Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["type"] ?? null))))), "html", null, true);
        yield "</h1>
            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        yield "</button>
            </div>
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
        return "partials/modal-remove-package.html.twig";
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
        return array (  121 => 40,  116 => 38,  106 => 33,  101 => 31,  91 => 26,  82 => 20,  77 => 18,  65 => 13,  61 => 12,  54 => 8,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/modal-remove-package.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/modal-remove-package.html.twig");
    }
}
