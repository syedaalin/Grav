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

/* partials/nav-user-details.html.twig */
class __TwigTemplate_a28a9c2d145cf5e00d4815adc55b0540 extends Template
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
        yield "<div id=\"offline-status\">
    <span><i class=\"fa fa-fw fa-plane\"></i> You are offline</span>
</div>
";
        // line 4
        $context["flex"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "flex_objects", [], "array", true, true, false, 4) &&  !(null === (($_v0 = ($context["grav"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["flex_objects"] ?? null) : null)))) ? ((($_v1 = ($context["grav"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["flex_objects"] ?? null) : null)) : (null));
        // line 5
        $context["user"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "user", [], "any", false, false, false, 5);
        // line 6
        if ((($context["flex"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "hasFlexFeature", ["user"], "method", false, false, false, 6))) {
            // line 7
            yield "    ";
            $context["route"] = CoreExtension::getAttribute($this->env, $this->source, ($context["flex"] ?? null), "adminRoute", [($context["user"] ?? null)], "method", false, false, false, 7);
        } else {
            // line 9
            yield "    ";
            $context["route"] = ("/user/" . CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 9));
        }
        // line 11
        yield "
<div id=\"admin-user-details\">
    <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->adminRouteFunc(($context["route"] ?? null)), "html", null, true);
        yield "\">
        ";
        // line 14
        yield from $this->load("partials/nav-user-avatar.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "
        <div class=\"admin-user-names\">
            <h4>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullname", [], "any", false, false, false, 17), "html", null, true);
        yield " ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "twofa_enabled", [], "any", false, false, false, 17) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 17), "admin", [], "any", false, false, false, 17), "twofa_enabled", [], "any", false, false, false, 17))) {
            yield "<span class=\"badge\">2FA</span>";
        }
        yield "</h4>
            <h5>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
        yield "</h5>
        </div>
    </a>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/nav-user-details.html.twig";
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
        return array (  83 => 18,  75 => 17,  71 => 15,  69 => 14,  65 => 13,  61 => 11,  57 => 9,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/nav-user-details.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/nav-user-details.html.twig");
    }
}
