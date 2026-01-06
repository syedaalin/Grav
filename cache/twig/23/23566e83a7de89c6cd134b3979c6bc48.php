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

/* forms/fields/file/file.html.twig */
class __TwigTemplate_bba45e934536d3daede6d236a4e4330c extends Template
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
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'file_extras' => [$this, 'block_file_extras'],
            'input_attributes' => [$this, 'block_input_attributes'],
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
        // line 58
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 60
        $context["defaults"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 60), "form", [], "any", false, false, false, 60);
        // line 61
        $context["files"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["defaults"] ?? null), "files", [], "any", false, false, false, 61), ((array_key_exists("field", $context)) ? (Twig\Extension\CoreExtension::default(($context["field"] ?? null), [])) : ([])));
        // line 62
        $context["limit"] = (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (CoreExtension::getAttribute($this->env, $this->source, ($context["files"] ?? null), "limit", [], "any", false, false, false, 62)));
        // line 1
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "    ";
        $context["page_can_upload"] = (($context["exists"] ?? null) || (((($context["type"] ?? null) == "page") &&  !($context["exists"] ?? null)) &&  !((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "destination", [], "any", false, false, false, 65)) && is_string($_v1 = "@self") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "destination", [], "any", false, false, false, 65)) && is_string($_v3 = "self@") && str_starts_with($_v2, $_v3)))));
        // line 66
        yield "    ";
        if ((($context["form"] ?? null) || ( !array_key_exists("type", $context) || ($context["page_can_upload"] ?? null)))) {
            // line 67
            yield "
    ";
            // line 68
            yield from $this->unwrap()->yieldBlock('prepend', $context, $blocks);
            // line 69
            yield "    ";
            $context["settings"] = ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 69), "paramName" => ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 69))) . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["files"] ?? null), "multiple", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("[]") : (""))), "limit" => ($context["limit"] ?? null), "filesize" => ($context["form_max_filesize"] ?? null), "accept" => CoreExtension::getAttribute($this->env, $this->source, ($context["files"] ?? null), "accept", [], "any", false, false, false, 69), "resolution" => CoreExtension::getAttribute($this->env, $this->source, ($context["files"] ?? null), "resolution", [], "any", false, false, false, 69), "resizeWidth" => CoreExtension::getAttribute($this->env, $this->source, ($context["files"] ?? null), "resizeWidth", [], "any", false, false, false, 69), "resizeHeight" => CoreExtension::getAttribute($this->env, $this->source, ($context["files"] ?? null), "resizeHeight", [], "any", false, false, false, 69), "resizeQuality" => CoreExtension::getAttribute($this->env, $this->source, ($context["files"] ?? null), "resizeQuality", [], "any", false, false, false, 69)];
            // line 70
            yield "    ";
            $context["dropzoneSettings"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "dropzone", [], "any", false, false, false, 70);
            // line 71
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getMediaTaskRoute", [], "method", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 72
                yield "        ";
                $context["file_url_add"] = (($context["base_url_relative"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getMediaTaskRoute", [[], "json"], "method", false, false, false, 72));
                // line 73
                yield "        ";
                $context["file_task_add"] = ["task" => "media.upload", "name" => CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 73), "__form-name__" => CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 73), "__unique_form_id__" => CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "uniqueid", [], "any", false, false, false, 73)];
                // line 74
                yield "
        ";
                // line 75
                $context["file_url_remove"] = (($context["base_url_relative"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getMediaTaskRoute", [[], "json"], "method", false, false, false, 75));
                // line 76
                yield "        ";
                $context["file_task_remove"] = ["task" => "media.delete", "name" => CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 76), "__form-name__" => CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 76), "__unique_form_id__" => CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "uniqueid", [], "any", false, false, false, 76)];
                // line 77
                yield "    ";
            } else {
                // line 78
                yield "        ";
                $context["file_url_remove"] = ((($context["file_url_remove"] ?? null)) ? ($context["file_url_remove"]) : (($context["base_url_relative"] ?? null)));
                // line 79
                yield "    ";
            }
            // line 80
            yield "
    <div class=\"";
            // line 81
            yield ((($context["form_field_wrapper_classes"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["form_field_wrapper_classes"], "html", null, true)) : ("form-input-wrapper"));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 81), "html", null, true);
            yield " dropzone files-upload ";
            if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "fancy", [], "any", false, false, false, 81) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "form-input-file";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 81), "html", null, true);
            yield "\"
         data-grav-file-settings=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["settings"] ?? null)), "html_attr");
            yield "\"
         data-dropzone-options=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["dropzoneSettings"] ?? null)), "html_attr");
            yield "\"
         ";
            // line 84
            if ((($context["file_task_add"] ?? null) && ($context["file_task_remove"] ?? null))) {
                // line 85
                yield "             data-file-post-add=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["file_task_add"] ?? null)), "html_attr");
                yield "\"
             data-file-post-remove=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["file_task_remove"] ?? null)), "html_attr");
                yield "\"
             data-file-url-add=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["file_url_add"] ?? null), "html", null, true);
                yield "\"
             data-file-url-remove=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["file_url_remove"] ?? null), "html", null, true);
                yield "\"
         ";
            } else {
                // line 90
                yield "             ";
                if ((($tmp = ($context["file_url_add"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-file-url-add=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["file_url_add"] ?? null), "html", null, true);
                    yield "\"";
                }
                // line 91
                yield "             ";
                if ((($tmp = ($context["file_url_remove"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-file-url-remove=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["file_url_remove"] ?? null), "html", null, true);
                    yield "\"";
                }
                // line 92
                yield "         ";
            }
            // line 93
            yield "    >

    ";
            // line 95
            yield from $this->unwrap()->yieldBlock('file_extras', $context, $blocks);
            // line 96
            yield "    <input
            ";
            // line 98
            yield "            ";
            yield from $this->unwrap()->yieldBlock('input_attributes', $context, $blocks);
            // line 107
            yield "    />

    ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["path"] => $context["file"]) {
                // line 110
                yield "        ";
                yield $macros["macro"]->getTemplateForMacro("macro_preview", $context, 110, $this->getSourceContext())->macro_preview(...[$context["path"], $context["file"], $context]);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['path'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "    ";
            yield from $this->load("forms/fields/hidden/hidden.html.twig", 112)->unwrap()->yield(CoreExtension::merge($context, ["field" => ["name" => ("_json." . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 112))], "value" => json_encode((((array_key_exists("value", $context) &&  !(null === $context["value"]))) ? ($context["value"]) : ([])))]));
            // line 113
            yield "    </div>

    ";
        } else {
            // line 116
            yield "        <span class=\"note\">";
            yield $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "PLUGIN_ADMIN.CANNOT_ADD_FILES_PAGE_NOT_SAVED");
            yield "</span>
    ";
        }
        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_extras(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "                type=\"file\"
                ";
        // line 100
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["files"] ?? null), "multiple", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "multiple=\"multiple\"";
        }
        // line 101
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["files"] ?? null), "accept", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "accept=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["files"] ?? null), "accept", [], "any", false, false, false, 101), ","), "html", null, true);
            yield "\"";
        }
        // line 102
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 102) || ($context["isDisabledToggleable"] ?? null))) {
            yield "disabled=\"disabled\"";
        }
        // line 103
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "random_name", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "random=\"true\"";
        }
        // line 104
        yield "                ";
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required=\"required\"";
        }
        // line 105
        yield "                ";
        yield from $this->yieldParentBlock("input_attributes", $context, $blocks);
        yield "
            ";
        yield from [];
    }

    // line 3
    public function macro_bytesToSize($bytes = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "bytes" => $bytes,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            $_v4 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 5
                yield "        ";
                $context["kilobyte"] = 1024;
                // line 6
                yield "        ";
                $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
                // line 7
                yield "        ";
                $context["gigabyte"] = (($context["megabyte"] ?? null) * 1024);
                // line 8
                yield "        ";
                $context["terabyte"] = (($context["gigabyte"] ?? null) * 1024);
                // line 9
                yield "
        ";
                // line 10
                if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                    // line 11
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["bytes"] ?? null) . " B"), "html", null, true);
                    yield "
        ";
                } elseif ((                // line 12
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                    // line 13
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2, ".") . " KB"), "html", null, true);
                    yield "
        ";
                } elseif ((                // line 14
($context["bytes"] ?? null) < ($context["gigabyte"] ?? null))) {
                    // line 15
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2, ".") . " MB"), "html", null, true);
                    yield "
        ";
                } elseif ((                // line 16
($context["bytes"] ?? null) < ($context["terabyte"] ?? null))) {
                    // line 17
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["bytes"] ?? null) / ($context["gigabyte"] ?? null)), 2, ".") . " GB"), "html", null, true);
                    yield "
        ";
                } else {
                    // line 19
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["bytes"] ?? null) / ($context["terabyte"] ?? null)), 2, ".") . " TB"), "html", null, true);
                    yield "
        ";
                }
                // line 21
                yield "    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 4
            yield Twig\Extension\CoreExtension::spaceless($_v4);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function macro_preview($path = null, $value = null, $global = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "path" => $path,
            "value" => $value,
            "global" => $global,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 25
            yield "    ";
            if ((($tmp = ($context["value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "        ";
                $context["uri"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "grav", [], "any", false, false, false, 26), "uri", [], "any", false, false, false, 26);
                // line 27
                yield "        ";
                $context["files"] = CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "files", [], "any", false, false, false, 27);
                // line 28
                yield "        ";
                $context["config"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "grav", [], "any", false, false, false, 28), "config", [], "any", false, false, false, 28);
                // line 29
                yield "        ";
                $context["route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "context", [], "any", false, false, false, 29), "route", [], "method", false, false, false, 29);
                // line 30
                yield "
        ";
                // line 31
                $context["type"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "blueprint_type", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "blueprint_type", [], "any", false, false, false, 31)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "admin", [], "any", false, false, false, 31), "location", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "admin", [], "any", false, false, false, 31), "location", [], "any", false, false, false, 31)) : ("config"))));
                // line 32
                yield "
        ";
                // line 33
                $context["blueprint_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "blueprints", [], "any", false, false, false, 33), "getFilename", [], "any", false, false, false, 33);
                // line 34
                yield "        ";
                $context["real_path"] = ($context["path"] ?? null);
                // line 35
                yield "
        ";
                // line 36
                if ((($context["type"] ?? null) == "pages")) {
                    // line 37
                    yield "            ";
                    $context["blueprint_name"] = ((($context["type"] ?? null) . "/") . ($context["blueprint_name"] ?? null));
                    // line 38
                    yield "            ";
                    $context["real_path"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ltrimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "thumb", [], "any", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "thumb", [], "any", false, false, false, 38)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "thumb", [], "any", false, false, false, 38)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "context", [], "any", false, true, false, 38), "media", [], "any", false, true, false, 38), ($context["path"] ?? null), [], "array", false, true, false, 38), "relativePath", [], "any", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "context", [], "any", false, false, false, 38), "media", [], "any", false, false, false, 38)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["path"] ?? null)] ?? null) : null), "relativePath", [], "any", false, false, false, 38)))) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "context", [], "any", false, false, false, 38), "media", [], "any", false, false, false, 38)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[($context["path"] ?? null)] ?? null) : null), "relativePath", [], "any", false, false, false, 38)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "form", [], "any", false, true, false, 38), "getPagePathFromToken", [($context["path"] ?? null)], "method", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "form", [], "any", false, false, false, 38), "getPagePathFromToken", [($context["path"] ?? null)], "method", false, false, false, 38)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "form", [], "any", false, false, false, 38), "getPagePathFromToken", [($context["path"] ?? null)], "method", false, false, false, 38)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "admin", [], "any", false, false, false, 38), "getPagePathFromToken", [($context["path"] ?? null)], "method", false, false, false, 38))))))), "/");
                    // line 39
                    yield "        ";
                }
                // line 40
                yield "        ";
                $context["blueprint"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->base64EncodeFilter(($context["blueprint_name"] ?? null));
                // line 41
                yield "

        ";
                // line 43
                $context["remove"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "file_task_remove", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["global"] ?? null), "file_url_remove", [], "any", false, false, false, 43)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "addNonce", [(((((((((((((((((((CoreExtension::getAttribute($this->env, $this->source,                 // line 44
($context["global"] ?? null), "file_url_remove", [], "any", false, false, false, 44) . "/media.json") . "/task") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 46
($context["config"] ?? null), "system", [], "any", false, false, false, 46), "param_sep", [], "any", false, false, false, 46)) . "removeFileFromBlueprint") . "/proute") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 47
($context["config"] ?? null), "system", [], "any", false, false, false, 47), "param_sep", [], "any", false, false, false, 47)) . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->base64EncodeFilter(($context["route"] ?? null))) . "/blueprint") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 48
($context["config"] ?? null), "system", [], "any", false, false, false, 48), "param_sep", [], "any", false, false, false, 48)) . ($context["blueprint"] ?? null)) . "/type") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 49
($context["config"] ?? null), "system", [], "any", false, false, false, 49), "param_sep", [], "any", false, false, false, 49)) . ($context["type"] ?? null)) . "/field") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 50
($context["config"] ?? null), "system", [], "any", false, false, false, 50), "param_sep", [], "any", false, false, false, 50)) . CoreExtension::getAttribute($this->env, $this->source, ($context["files"] ?? null), "name", [], "any", false, false, false, 50)) . "/path") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 51
($context["config"] ?? null), "system", [], "any", false, false, false, 51), "param_sep", [], "any", false, false, false, 51)) . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->base64EncodeFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "path", [], "any", false, false, false, 51))), "admin-form", "admin-nonce"], "method", false, false, false, 43)));
                // line 52
                yield "
        ";
                // line 53
                $context["file"] = Twig\Extension\CoreExtension::merge(($context["value"] ?? null), ["remove" => ($context["remove"] ?? null), "path" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "thumb_url", [], "any", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "thumb_url", [], "any", false, false, false, 53)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "thumb_url", [], "any", false, false, false, 53)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [], "any", false, false, false, 53) == "/")) ? ("/") : (((CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [], "any", false, false, false, 53) . "/") . ($context["real_path"] ?? null))))))]);
                // line 54
                yield "        <div class=\"hidden\" data-file=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["file"] ?? null)), "html_attr");
                yield "\"></div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/file/file.html.twig";
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
        return array (  434 => 54,  432 => 53,  429 => 52,  427 => 51,  426 => 50,  425 => 49,  424 => 48,  423 => 47,  422 => 46,  421 => 44,  420 => 43,  416 => 41,  413 => 40,  410 => 39,  407 => 38,  404 => 37,  402 => 36,  399 => 35,  396 => 34,  394 => 33,  391 => 32,  389 => 31,  386 => 30,  383 => 29,  380 => 28,  377 => 27,  374 => 26,  371 => 25,  357 => 24,  351 => 4,  347 => 21,  341 => 19,  335 => 17,  333 => 16,  328 => 15,  326 => 14,  321 => 13,  319 => 12,  314 => 11,  312 => 10,  309 => 9,  306 => 8,  303 => 7,  300 => 6,  297 => 5,  295 => 4,  283 => 3,  275 => 105,  270 => 104,  265 => 103,  260 => 102,  253 => 101,  249 => 100,  246 => 99,  239 => 98,  229 => 95,  219 => 68,  210 => 116,  205 => 113,  202 => 112,  193 => 110,  189 => 109,  185 => 107,  182 => 98,  179 => 96,  177 => 95,  173 => 93,  170 => 92,  163 => 91,  156 => 90,  151 => 88,  147 => 87,  143 => 86,  138 => 85,  136 => 84,  132 => 83,  128 => 82,  116 => 81,  113 => 80,  110 => 79,  107 => 78,  104 => 77,  101 => 76,  99 => 75,  96 => 74,  93 => 73,  90 => 72,  87 => 71,  84 => 70,  81 => 69,  79 => 68,  76 => 67,  73 => 66,  70 => 65,  63 => 64,  58 => 1,  56 => 62,  54 => 61,  52 => 60,  50 => 58,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forms/fields/file/file.html.twig", "/Users/syedaalin/Documents/Grav/user/plugins/admin/themes/grav/templates/forms/fields/file/file.html.twig");
    }
}
