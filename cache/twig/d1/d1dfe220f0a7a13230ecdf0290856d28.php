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

/* forms/fields/twitter/twitter.html.twig */
class __TwigTemplate_388e7a841e4d10653d4d4d045b9c554c extends Template
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
        yield "    <div class=\"tweetcontainer\"><div class=\"tweet-card\"> <div class=\"tweethead\"> <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["media"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["user://plugins/seo/assets/twitter.png"] ?? null) : null), "resize", [50, 50], "method", false, false, false, 10), "url", [], "method", false, false, false, 10), "html", null, true);
        yield "\" width=\"50\" height=\"50\" class=\"twitterimg\"> <span class=\"twitterusername\">Twitter team <br><span class=\"twitternick\">@twitter</span></span> </div><blockquote class=\"twitter-tweet\"> 
    <p class=\"twittcontent\"> Here is how this page will looks once shared on twitter. </p>
    <div class=\"SummaryCardContainer\"> <div class=\"SummaryCard\">
         <img id=\"twittliveimg\" src=\"";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 13), "twittershareimg", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_absolute"] ?? null), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 13), "twittershareimg", [], "any", false, false, false, 13), "html", null, true);
            yield " ";
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "media", [], "any", false, false, false, 13), "images", [], "any", false, false, false, 13)), "url", [], "any", false, false, false, 13), "html", null, true);
        }
        yield "\" width=\"100%\">
    <div class=\"cardtext\">
         <h2 class=\"cardtitle\" id=\"titletwtarget\">
         ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, true, false, 16), "twittertitle", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 16), "twittertitle", [], "any", false, false, false, 16), ((CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "title", [], "any", false, false, false, 16) . " | ") . CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 16)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "title", [], "any", false, false, false, 16) . " | ") . CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 16)))), "html", null, true);
        yield "
        </h2>
        <p style=\"padding:0px;\" id=\"twittdesc\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, true, false, 18), "twitterdescription", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "header", [], "any", false, false, false, 18), "twitterdescription", [], "any", false, false, false, 18), Grav\Common\Utils::truncate(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "summary", [], "any", false, false, false, 18)), 140))) : (Grav\Common\Utils::truncate(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "summary", [], "any", false, false, false, 18)), 140))), "html", null, true);
        yield "</p>
        <span class=\"sitename\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "host", [], "any", false, false, false, 19), ["http://" => "", "/" => " › "]), "html", null, true);
        yield "</span>
    </div></div></div></blockquote>
    <span class=\"iconcontainer\"> <i class=\"fa fa-reply twittericon\"></i> <i class=\"fa fa-heart twittericon\"></i><i class=\"fa fa-retweet twittericon\"></i></span></div></div> <div id=\"twittcount\"></div>
    
    <style> .tweet-card{min-height:180px;width:31%;min-width:500px}.SummaryCardContainer{border:1px solid #e1e8ed;border-radius:8px;width:95%}blockquote{font-size:17.5px; border-left:0px!important;}.tweet-card{padding:0 0 6px;margin: auto;background:#fff;border:1px solid #e1e8ed;border-radius:5px}.cardtext{padding:1em;font-family:arial}.cardtitle{margin:0 0 .15em;font-size:1em;font-weight:700}.sitename{color:#8899A6}.usertwitt{color:#2b7bb9}.twittcontent{font-family:arial; padding: 0 1rem!important; background-color:#fff;white-space:normal;color:#1c2022;clear:left;padding-top:17px}.twittericon{color:grey;margin-left:15px}.iconcontainer{padding-left:25px}.twitterimg{border-radius:6px;margin-top:19px;margin-left:39px;float:left}.twitterusername{font-weight:700;font-family:arial;padding-top:15px;padding-left:15px;float:left}.twitternick{font-weight:500;color:grey;padding-top:3px}</style>
    
    <script type=\"text/javascript\">\$('#twittertitle').keyup(function(){var keyed = \$(this).val();\$(\"#titletwtarget\").html(keyed); });\$('#twitterdescription').keyup(function(){var keyed = \$(this).val();\$(\"#twittdesc\").html(keyed);
         \$(\"#twittcount\").text(\"Characters left: \" + (140 - \$(this).val().length));
    
        
    });
    \$('#twittimgselect').on('click', function() {
        console.log(\"inputclick\");
        \$('.js__media-element').on('click', function() {
        
          var valueselect = \$(this).attr(\"data-file-url\") ;
          var newimg = \"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url_absolute"] ?? null), "html", null, true);
        yield "\" + valueselect ;
          \$('#twittliveimg').attr(\"src\", newimg);
          console.log(newimg);
        });
    }
    )


    </script>
    ";
        // line 44
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "text", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "    ";
        }
        // line 46
        yield "
    ";
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fields", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "        <div class=\"form-section ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "field_classes", [], "any", false, false, false, 48), "html", null, true);
            yield "\">
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "fields", [], "any", false, false, false, 49));
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
                // line 50
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 51
                    yield "                ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 51)], "method", false, false, false, 51);
                    // line 52
                    yield "                ";
                    yield from $this->load([(((("forms/fields/" . CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 52)) . "/") . CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 52)) . ".html.twig"), "forms/fields/text/text.html.twig"], 52)->unwrap()->yield($context);
                    // line 53
                    yield "            ";
                }
                // line 54
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
            // line 55
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
        return "forms/fields/twitter/twitter.html.twig";
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
        return array (  191 => 55,  177 => 54,  174 => 53,  171 => 52,  168 => 51,  165 => 50,  148 => 49,  143 => 48,  141 => 47,  138 => 46,  135 => 45,  133 => 44,  121 => 35,  102 => 19,  98 => 18,  93 => 16,  80 => 13,  73 => 10,  71 => 9,  68 => 8,  54 => 6,  51 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/twitter/twitter.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/seo/templates/forms/fields/twitter/twitter.html.twig");
    }
}
