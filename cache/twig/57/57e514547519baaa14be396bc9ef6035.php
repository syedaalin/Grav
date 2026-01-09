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

/* partials/media-list-wrapper.html.twig */
class __TwigTemplate_af0c930c5af4baf81095477a18e72507 extends Template
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
        yield "<div class=\"grid media-container ";
        if ((($tmp = ($context["is_modal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "in-modal";
        }
        yield "\">
    ";
        // line 2
        $context["default_site_lang"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 2), "system", [], "any", false, false, false, 2), "languages", [], "any", false, false, false, 2)));
        // line 3
        yield "
    ";
        // line 4
        if ((($tmp =  !($context["route"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        ";
            yield from $this->load("partials/media-list-wrapper__sidebar.html.twig", 5)->unwrap()->yield($context);
            // line 6
            yield "    ";
        }
        // line 7
        yield "
    ";
        // line 8
        if ((($tmp = ($context["is_modal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        <div class=\"thumbs-list-container block size-3-4\">
            ";
            // line 10
            yield from $this->load("partials/media-list-wrapper__list__filters.html.twig", 10)->unwrap()->yield($context);
            // line 11
            yield "            <h5 class=\"media-list-title\"><span class=\"page-indicator\">All Pages</span> <a class=\"hidden js__reset-pages-filter\" href=\"#\"><i class=\"fa fa-fw fa-times\"></i></a></h5>

            <div class=\"mediapicker-scroll\">
                ";
            // line 14
            yield from $this->load("partials/media-list-wrapper__list.html.twig", 14)->unwrap()->yield(CoreExtension::merge($context, ["is_modal" => ($context["is_modal"] ?? null)]));
            // line 15
            yield "            </div>

            <input name=\"thumb-size\" class=\"media-range\" type=\"range\" min=\"50\" max=\"250\" value=\"100\" />
        </div>
    ";
        } else {
            // line 20
            yield "        <div class=\"thumbs-list-container block ";
            if ((($tmp =  !($context["route"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "size-2-3";
            }
            yield " \">
            ";
            // line 21
            if ((($tmp =  !($context["route"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 22
                yield "                ";
                yield from $this->load("partials/media-list-wrapper__list__filters.html.twig", 22)->unwrap()->yield($context);
                // line 23
                yield "                <h5 class=\"media-list-title\"><span class=\"page-indicator\">All Pages</span> <a class=\"hidden js__reset-pages-filter\" href=\"#\"><i class=\"fa fa-fw fa-times\"></i></a></h5>

                ";
                // line 25
                yield from $this->load("partials/media-list-wrapper__list.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["is_modal" => ($context["is_modal"] ?? null)]));
                // line 26
                yield "
            ";
            } else {
                // line 28
                yield "                ";
                yield from $this->load("partials/media-list-wrapper__details.html.twig", 28)->unwrap()->yield($context);
                // line 29
                yield "            ";
            }
            // line 30
            yield "        </div>
    ";
        }
        // line 32
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/media-list-wrapper.html.twig";
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
        return array (  118 => 32,  114 => 30,  111 => 29,  108 => 28,  104 => 26,  102 => 25,  98 => 23,  95 => 22,  93 => 21,  86 => 20,  79 => 15,  77 => 14,  72 => 11,  70 => 10,  67 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  54 => 4,  51 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/media-list-wrapper.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/partials/media-list-wrapper.html.twig");
    }
}
