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

/* forms/fields/google/google.html.twig */
class __TwigTemplate_da506d13278705663df9b452cf9704d4 extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            $context["context"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "page", [true], "method", false, false, false, 2);
        }
        // line 4
        $context["title"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "title", [], "any", false, false, false, 4)));
        // line 5
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 5) || CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "underline", [], "any", false, false, false, 5))) {
            // line 6
            yield "    <h1 ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "underline", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "class=\"no_underline\"";
            }
            yield ">";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "twig", [], "any", false, true, false, 6), "twig", [], "any", false, true, false, 6), "filters", [], "any", false, true, false, 6), "tu", [], "array", true, true, false, 6)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 6)), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 6)), "html", null, true);
            }
            yield "</h1>
    ";
        }
        // line 8
        yield "             
    <div class=\"google-results-wrapper\"> 
    <div class=\"content\"> 
    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2000px-Google_2015_logo.svg.png\" height=\"50\"/>
    <div class=\"snippet\"> <h3 class=\"title\"> 
    <a href=\"#\" id=\"target\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, true, false, 13), "googletitle", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 13), "googletitle", [], "any", false, false, false, 13), ((CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "title", [], "any", false, false, false, 13) . " | ") . CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 13)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "title", [], "any", false, false, false, 13) . " | ") . CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 13)))), "html", null, true);
        yield "</a> </h3>
    <div class=\"url-breadcrumb\"><span style=\"color: #006621; font-size: normal; display: block;\"> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "url", [true], "method", false, false, false, 14), ["//" => "//", "/" => " › "]), "html", null, true);
        yield " </span></div>
    <div class=\"description\" id=\"resultdesc\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, true, false, 15), "googledesc", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 15), "googledesc", [], "any", false, false, false, 15), Grav\Common\Utils::truncate(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "summary", [], "any", false, false, false, 15)), 140))) : (Grav\Common\Utils::truncate(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "summary", [], "any", false, false, false, 15)), 140))), "html", null, true);
        yield " </div>
    
    </div>
    </div>
    </div>
    <div id=\"googlecount\" style=\"text-align:center\"></div>
    
    <style> #resultdesc{max-width:80%;} @import url(https://fonts.googleapis.com/css?family=Roboto&subset=greek);.mobile .url-breadcrumb,.title{overflow:hidden;text-overflow:ellipsis}body{min-height:100vh;display:flex;flex-flow:column;font-family:arial,sans-serif}body.grey{background:#f2f2f2;} .content{margin: auto; background-color:#fff;}.google-results-wrapper{margin:auto auto 10px}.content{width:600px;padding:16px}.snippet{width:600px;margin-bottom:26px;box-sizing:border-box}.title{font-size:18px;margin:0;white-space:nowrap;max-width:550px}.title a{color:#1a0dab;font-weight:400;text-decoration:none}.title a:hover{cursor:pointer;text-decoration:underline}.url-breadcrumb{height:18px;margin:1px 0 0;line-height:16px;white-space:nowrap}.url-breadcrumb cite{font-size:14px;color:#006621;font-style:normal}.url-breadcrumb .arrow-down{display:inline-block;vertical-align:middle;width:13px;text-align:center}.url-breadcrumb .arrow-down:after{content:\"\";display:inline-block;border-color:#006621 transparent;border-width:5px 4px 0;border-style:solid;vertical-align:middle;margin:-2px 0 0}.microdata{color:grey;line-height:18px;font-size:13px}.microdata .stars-wrapper{margin:-4px 1px 0;width:65px;height:13px;display:inline-block;vertical-align:middle;background-position:0 50%;}.description{font-size:13px;color:#545454;line-height:1.4;word-wrap:break-word}.description em{color:#6a6a6a;font-weight:700;font-style:normal}.description .date{color:grey}.mobile{font-family:Roboto,sans-serif}.mobile.google-results-wrapper{background:#f2f2f2;padding:10px 8px;width:320px}.mobile .content{padding:0;width:100%}.mobile .snippet{font-size:14px;line-height:20px;width:auto;background-color:#fff;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:2px;margin:0 0 10px;padding:11px 16px}.mobile .title{font-size:16px;white-space:normal}.mobile .url-breadcrumb{border-bottom:1px solid #ebebeb;line-height:20px;margin:0 -16px 9px;padding:0 16px 11px;white-space:nowrap}.mobile .description{color:#222}.mobile .description .date{color:#777}.toggler{margin:15px auto auto;font-family:Roboto,san-serif}.toggler a{color:#bbb}.toggler .desktop{color:#1a0dab}.toggler .mobile .desktop{color:#bbb}.toggler .mobile .mobile{color:#1a0dab}</style>
    
    <script type=\"text/javascript\">\$('#text').keyup(function(){
        var keyed = \$(this).val();\$(\"#target\").html(keyed);
        
        
        });
        \$('#desc').keyup(function(){
        var keyed = \$(this).val();\$(\"#resultdesc\").html(keyed);
        \$(\"#googlecount\").text(\"Characters left: \" + (140 - \$(this).val().length));
        });
    

    </script>
    ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "text", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "    ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "text", [], "any", false, false, false, 37);
            yield "
    ";
        }
        // line 39
        yield "
    ";
        // line 40
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "        <div class=\"form-section ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "field_classes", [], "any", false, false, false, 41), "html", null, true);
            yield "\">
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "fields", [], "any", false, false, false, 42));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 43
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 44
                    yield "                ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 44)], "method", false, false, false, 44);
                    // line 45
                    yield "                ";
                    yield from $this->load([(((("forms/fields/" . CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 45)) . "/") . CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 45)) . ".html.twig"), "forms/fields/text/text.html.twig"], 45)->unwrap()->yield($context);
                    // line 46
                    yield "            ";
                }
                // line 47
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
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "        </div>
    ";
        }
        // line 50
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/google/google.html.twig";
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
        return array (  171 => 50,  167 => 48,  153 => 47,  150 => 46,  147 => 45,  144 => 44,  141 => 43,  124 => 42,  119 => 41,  117 => 40,  114 => 39,  108 => 37,  106 => 36,  82 => 15,  78 => 14,  74 => 13,  67 => 8,  53 => 6,  50 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/google/google.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/seo/templates/forms/fields/google/google.html.twig");
    }
}
