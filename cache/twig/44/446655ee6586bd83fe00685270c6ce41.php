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

/* forms/fields/facebook/facebook.html.twig */
class __TwigTemplate_d2632e6c991b7766162358d00abe9a77 extends Template
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
        yield "
";
        // line 2
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "route", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    ";
            $context["context"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "page", [true], "method", false, false, false, 3);
        }
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
    ";
        // line 9
        $context["context"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "page", [true], "method", false, false, false, 9);
        // line 10
        yield "   <div class=\"f-card\">
  <div class=\"header\">
    <div class=\"options\"><i class=\"fa fa-chevron-down\"></i></div>
    <img class=\"co-logo\" src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["media"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["user://plugins/seo/assets/logofacebook.jpg"] ?? null) : null), "resize", [50, 50], "method", false, false, false, 13), "url", [], "method", false, false, false, 13), "html", null, true);
        yield "\" />
    <div class=\"co-name\"><a href=\"#\">Facebook Team</a></div>
    <div class=\"time\"><a href=\"#\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 15), "j M, g:ia"), "html", null, true);
        yield "</a> · <i class=\"fa fa-globe\"></i></div>
  </div>
  <div class=\"facebookcontent\">
    <p>Here is how this page will look when shared on facebook.</p>
  </div>

  <div class=\"reference\">
    <img class=\"reference-thumb\" id=\"liveimg\" src=\"";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 22), "facebookimg", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_absolute"] ?? null), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 22), "facebookimg", [], "any", false, false, false, 22), "html", null, true);
            yield " ";
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "media", [], "any", false, false, false, 22), "images", [], "any", false, false, false, 22)), "url", [], "any", false, false, false, 22), "html", null, true);
        }
        yield "\" />
    <div class=\"reference-content\">
      <div class=\"reference-title\" id=\"facebooktargtitle\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, true, false, 24), "facebooktitle", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 24), "facebooktitle", [], "any", false, false, false, 24), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24) . " | ") . CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 24)))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24) . " | ") . CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 24)))), "html", null, true);
        yield "</div>
      <div class=\"reference-subtitle\" id=\"facebooktargdesc\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, true, false, 25), "facebookdesc", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 25), "facebookdesc", [], "any", false, false, false, 25), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "summary", [], "any", false, false, false, 25)))) : (Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "summary", [], "any", false, false, false, 25)))), "html", null, true);
        yield "</div>
      <div class=\"reference-font\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "host", [], "any", false, false, false, 26), ["http://" => "", "/" => " › "]), "html", null, true);
        yield "</div>
    </div>
  </div>
  <div class=\"social\">
    <div class=\"social-content\"></div>
    <div class=\"social-buttons\">
      <span><i class=\"fa fa-thumbs-up\"></i>Like</span>
      <span><i class=\"fa fa-comment\"></i>Comment</span>
      <span><i class=\"fa fa-share\"></i>Share</span></div>
  </div>
</div>
<div id=\"fbcount\" style=\"text-align:center\"></div>
<style>

*, *:before, *:after {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}


.f-card {
  background-color:white;
  /*height:400px;*/
  width:502px;
  border: 1px solid #d0d1d5;
  border-radius:3px;
  margin: auto;
  margin-bottom:10px;
  padding: 12px; 
  
  box-shadow: 0 0 5px rgba(0, 0, 0, .30); /* Not original, just a test */
}

.header {
  margin-bottom:17px;
}

.co-logo {
  /*display:block;*/
  float:left;
  margin-right:8px;
  
  width:40px;
  height:40px;
}

.co-name > a {
  font-family: Helvetica;
  font-size:14px;
  font-weight: bold;
  line-height: 1.38;
  color: #365899;
  text-decoration:none;
  
  margin-bottom:2px;
}

.co-name > a:hover {
  text-decoration:underline;
}

.time {
  font-family: Helvetica;
  font-size:12px;
  color: #90949c;
}

.time > a {
  color: #90949c;
  text-decoration:none;
}

.time > a:hover {
  text-decoration:underline;
}

.options {
  font-family: Helvetica;
  font-size:12px;
  color: #e5e5e5;
  float:right;
}

.options:hover {
  color: black; /* Fallback */
  color: rgba(0, 0, 0, .30);
}

.content {
  clear:both;
  font-family: Helvetica, sans-serif;
  font-size:14px;
  line-height: 1.38;
}

.reference {
  width:476px;
}
.reference-thumb {
  display:block;
  width:476px;
  height:auto;
}

.reference-content {
  border: 2px solid black;
  border: 2px solid rgba(0, 0, 0, .1);
  border-top: 0;
  padding: 10px 12px 10px 12px;
}

.reference:hover .reference-content {
  border-color: black; /* Fallback */
  border-color: rgba(0, 0, 0, .15);
}

.reference-title {
  font-family: Georgia;
  font-size: 18px;
  font-weight: 500;
  line-height: 22px;
  
  margin-bottom:5px;
}

.reference-subtitle {
  font-family: Helvetica;
  font-size:12px;
  line-height: 16px; 
}

.reference-font {
  color: #90949c;
  font-family: Helvetica;
  font-size: 11px;
  line-height: 11px;
  text-transform: uppercase;

  padding-top:9px; 
}

.social {
  margin-top:12px;
}
.social-buttons {
  color: #7f7f7f;
  font-family: Helvetica;
  font-size: 12px;
  font-weight:bold;
  line-height:14px;
  
  border-top:1px solid #e5e5e5;
  padding-top:4px;
  
}

.social-buttons span {
  font-size: 12px;
  margin-right:20px;
  padding:4px 4px 4px 0;
}

.social-buttons span:hover {
  text-decoration:underline;
  cursor:pointer;
}

.social-buttons span i {
  padding-right:4px;
}</style>
<script type=\"text/javascript\">
\$('#facebooktitle').keyup(function(){
  var keyed = \$(this).val();\$(\"#facebooktargtitle\").html(keyed); 
  
});\$('#facebookdesc').keyup(function(){var keyed = \$(this).val();\$(\"#facebooktargdesc\").html(keyed);
   \$(\"#fbcount\").text(\"Characters left: \" + (300 - \$(this).val().length));
});
\$('#fbimgselect').on('click', function() {
   \$('.js__media-element').on('click', function() {
      var valueselect = \$(this).attr(\"data-file-url\") ;
      var newimg = \"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_absolute"] ?? null), "html", null, true);
        yield "\" + valueselect ;
      \$('#liveimg').attr(\"src\", newimg);
   });
  
})

</script>
<script>
function validatepage() {
   var protocol = location.protocol;
 var slashes = protocol.concat(\"//\");
 var host = slashes.concat(window.location.hostname);
 var structuredurl = \"https://search.google.com/structured-data/testing-tool/u/0/#url=\"
 var targeturl = \$(\"[title|='";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Grav\Plugin\Admin\Twig\AdminTwigExtension']->tuFilter("PLUGIN_ADMIN.PREVIEW"), "html", null, true);
        yield "']\").attr(\"href\");
 var strippedurl = targeturl.replace(\"/admin/preview\",\"\");
 var validateurl = structuredurl + encodeURIComponent(host + strippedurl);
   window.open(validateurl, '_blank')
}

</script>
    ";
        // line 227
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "text", [], "any", false, false, false, 227)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 228
            yield "    ";
        }
        // line 229
        yield "
    ";
        // line 230
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 231
            yield "        <div class=\"form-section ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "field_classes", [], "any", false, false, false, 231), "html", null, true);
            yield "\">
        ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "fields", [], "any", false, false, false, 232));
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
                // line 233
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 234
                    yield "                ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 234)], "method", false, false, false, 234);
                    // line 235
                    yield "                ";
                    yield from $this->load([(((("forms/fields/" . CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 235)) . "/") . CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 235)) . ".html.twig"), "forms/fields/text/text.html.twig"], 235)->unwrap()->yield($context);
                    // line 236
                    yield "            ";
                }
                // line 237
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
            // line 238
            yield "        </div>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/facebook/facebook.html.twig";
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
        return array (  381 => 238,  367 => 237,  364 => 236,  361 => 235,  358 => 234,  355 => 233,  338 => 232,  333 => 231,  331 => 230,  328 => 229,  325 => 228,  323 => 227,  313 => 220,  297 => 207,  113 => 26,  109 => 25,  105 => 24,  93 => 22,  83 => 15,  78 => 13,  73 => 10,  71 => 9,  68 => 8,  54 => 6,  51 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/facebook/facebook.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/seo/templates/forms/fields/facebook/facebook.html.twig");
    }
}
