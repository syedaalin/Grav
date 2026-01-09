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

/* forms/fields/pagemedia/pagemedia.html.twig */
class __TwigTemplate_e6d917dfdba242bc0a4c7e8206c42910 extends Template
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

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 3)) : (($context["value"] ?? null)));
        // line 1
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "folderExists", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "    ";
            $context["pagemedia"] = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.admin.pagemedia"], "method", false, false, false, 7);
            // line 8
            yield "    ";
            $context["pagemedia_settings"] = ["resolution" => ["min" => ["width" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 11
($context["pagemedia"] ?? null), "res_min_width", [], "any", false, false, false, 11)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["pagemedia"] ?? null), "res_min_width", [], "any", false, false, false, 11)) : (null)), "height" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 12
($context["pagemedia"] ?? null), "res_min_height", [], "any", false, false, false, 12)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["pagemedia"] ?? null), "res_min_height", [], "any", false, false, false, 12)) : (null))], "max" => ["width" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 15
($context["pagemedia"] ?? null), "res_max_width", [], "any", false, false, false, 15)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["pagemedia"] ?? null), "res_max_width", [], "any", false, false, false, 15)) : (null)), "height" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 16
($context["pagemedia"] ?? null), "res_max_height", [], "any", false, false, false, 16)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["pagemedia"] ?? null), "res_max_height", [], "any", false, false, false, 16)) : (null))]], "resizeWidth" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 19
($context["pagemedia"] ?? null), "resize_width", [], "any", false, false, false, 19)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["pagemedia"] ?? null), "resize_width", [], "any", false, false, false, 19)) : (null)), "resizeHeight" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 20
($context["pagemedia"] ?? null), "resize_height", [], "any", false, false, false, 20)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["pagemedia"] ?? null), "resize_height", [], "any", false, false, false, 20)) : (null)), "resizeQuality" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 21
($context["pagemedia"] ?? null), "resize_quality", [], "any", false, false, false, 21)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["pagemedia"] ?? null), "resize_quality", [], "any", false, false, false, 21)) : (0.8))];
            // line 23
            yield "
    ";
            // line 24
            $context["media_url"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getMediaTaskRoute", [], "method", false, false, false, 24)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getMediaTaskRoute", [], "method", false, false, false, 24)) : ((("/media/" . Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 24), "/")) . ".json")));
            // line 25
            yield "    ";
            $context["media_local"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getMediaRoute", [], "method", false, false, false, 25)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getMediaRoute", [], "method", false, false, false, 25)) : ((($this->extensions['Grav\Common\Twig\Extension\GravExtension']->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . "/") . Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 25), "/"))));
            // line 26
            yield "    ";
            $context["media_path"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "relativePagePath", [], "any", false, false, false, 26));
            // line 27
            yield "    ";
            $context["media_uri"] = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "mediaUri", [], "method", false, false, false, 27);
            // line 28
            yield "    ";
            $context["dropzone_settings"] = Twig\Extension\CoreExtension::merge(["maxFilesize" => ($context["form_max_filesize"] ?? null)], ($context["pagemedia_settings"] ?? null));
            // line 29
            yield "    ";
            $context["pageMediaStore"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonDecodeFilter(Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->getCookie("grav-admin-pagemedia"), "{\"width\":200,\"collapsed\":false}"));
            // line 30
            yield "
    <div class=\"pagemedia-field form-field grid vertical ";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", true, true, false, 31)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 31), "html", null, true);
            }
            yield "\">
    <div class=\"form-label\">
        <label class=\"media-collapser ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 33), "html", null, true);
            yield "\">
          <i class=\"fa fa-fw small fa-chevron-";
            // line 34
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["pageMediaStore"] ?? null), "collapsed", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("right") : ("down"));
            yield "\"></i>
          ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 35)), "html", null, true);
            yield " <span data-pagemedia-count>(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "page", [], "any", false, false, false, 35), "media", [], "any", false, false, false, 35)), "html", null, true);
            yield ")</span>
        </label>
        <div class=\"";
            // line 37
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["pageMediaStore"] ?? null), "collapsed", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hidden") : (""));
            yield "\">
          <input type=\"range\" min=\"70\" step=\"10\" max=\"200\" value=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pageMediaStore"] ?? null), "width", [], "any", false, false, false, 38), "html", null, true);
            yield "\" class=\"media-resizer\">
        </div>
    </div>
    <div class=\"form-data form-uploads-wrapper\" style=\"";
            // line 41
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["pageMediaStore"] ?? null), "collapsed", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("display: none;") : (""));
            yield "\">
        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["base_url"] ?? null) . ($context["media_url"] ?? null)), "html_attr");
            yield "\"
             data-media-local=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["media_local"] ?? null), "html_attr");
            yield "\"
             data-media-path=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["media_path"] ?? null), "html_attr");
            yield "\"
             data-media-uri=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["media_uri"] ?? null), "html_attr");
            yield "\"
             data-dropzone-options=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["dropzone_settings"] ?? null)), "html_attr");
            yield "\"
             data-dropzone-field=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 49))), "html", null, true);
            yield "\"></div>

        ";
            // line 51
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "session", [], "any", false, false, false, 51), "expert", [], "any", false, false, false, 51) == "0") ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "authorize", ["admin.super"], "method", false, false, false, 51))) {
                // line 52
                yield "        <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 52))), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" />
        ";
            }
            // line 54
            yield "    </div>
</div>
";
        } else {
            // line 57
            yield "<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED"), "html", null, true);
            yield "
        </div>
    </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/pagemedia/pagemedia.html.twig";
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
        return array (  182 => 60,  177 => 57,  172 => 54,  164 => 52,  162 => 51,  157 => 49,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  137 => 44,  131 => 41,  125 => 38,  121 => 37,  114 => 35,  110 => 34,  106 => 33,  99 => 31,  96 => 30,  93 => 29,  90 => 28,  87 => 27,  84 => 26,  81 => 25,  79 => 24,  76 => 23,  74 => 21,  73 => 20,  72 => 19,  71 => 16,  70 => 15,  69 => 12,  68 => 11,  66 => 8,  63 => 7,  61 => 6,  54 => 5,  49 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/pagemedia/pagemedia.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/pagemedia/pagemedia.html.twig");
    }
}
