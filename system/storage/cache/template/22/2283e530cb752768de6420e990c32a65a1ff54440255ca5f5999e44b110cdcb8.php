<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* catalog/category_form.twig */
class __TwigTemplate_497fe1a51a48699088d0dcceb44cca660cb867f2f448906faa55f8f40286aa4a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-category\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 38
            echo "                <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 38);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 38);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 38);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 38);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 38);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 43
            echo "                <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["category_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["category_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47)] ?? null) : null), "name", [], "any", false, false, false, 47)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            echo "\" class=\"form-control\" />
                      ";
            // line 48
            if ((($__internal_compile_2 = ($context["error_name"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48)] ?? null) : null)) {
                // line 49
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_compile_3 = ($context["error_name"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 51
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_4 = ($context["category_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["category_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56)] ?? null) : null), "description", [], "any", false, false, false, 56)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_compile_6 = ($context["category_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["category_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null), "meta_title", [], "any", false, false, false, 62)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62);
            echo "\" class=\"form-control\" />
                      ";
            // line 63
            if ((($__internal_compile_8 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null)) {
                // line 64
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_compile_9 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 66
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_10 = ($context["category_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["category_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null), "meta_description", [], "any", false, false, false, 71)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_12 = ($context["category_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["category_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 77)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-parent\">";
        // line 86
        echo ($context["entry_parent"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"path\" value=\"";
        // line 88
        echo ($context["path"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_parent"] ?? null);
        echo "\" id=\"input-parent\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"parent_id\" value=\"";
        // line 89
        echo ($context["parent_id"] ?? null);
        echo "\" />
                  ";
        // line 90
        if (($context["error_parent"] ?? null)) {
            // line 91
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_parent"] ?? null);
            echo "</div>
                  ";
        }
        // line 93
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 96
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 98
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\" />
                  <div id=\"category-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_filter"]) {
            // line 101
            echo "                    <div id=\"category-filter";
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "filter_id", [], "any", false, false, false, 101);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "name", [], "any", false, false, false, 101);
            echo "
                      <input type=\"hidden\" name=\"category_filter[]\" value=\"";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "filter_id", [], "any", false, false, false, 102);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 109
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 113
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 115
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 115), ($context["category_store"] ?? null))) {
                // line 116
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 116);
                echo "\" checked=\"checked\" />
                        ";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 117);
                echo "
                        ";
            } else {
                // line 119
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 119);
                echo "\" />
                        ";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 120);
                echo "
                        ";
            }
            // line 122
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 129
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 130
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 131
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 135
        echo ($context["entry_image2"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image2\" data-toggle=\"icon\" class=\"img-thumbnail\"><img src=\"";
        // line 136
        echo ($context["img"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"icon\" value=\"";
        // line 137
        echo ($context["img"] ?? null);
        echo "\" id=\"input-image2\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-top\"><span data-toggle=\"tooltip\" title=\"";
        // line 141
        echo ($context["help_top"] ?? null);
        echo "\">";
        echo ($context["entry_top"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 145
        if (($context["top"] ?? null)) {
            // line 146
            echo "                      <input type=\"checkbox\" name=\"top\" value=\"1\" checked=\"checked\" id=\"input-top\" />
                      ";
        } else {
            // line 148
            echo "                      <input type=\"checkbox\" name=\"top\" value=\"1\" id=\"input-top\" />
                      ";
        }
        // line 150
        echo "                      &nbsp; </label>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-column\"><span data-toggle=\"tooltip\" title=\"";
        // line 155
        echo ($context["help_column"] ?? null);
        echo "\">";
        echo ($context["entry_column"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"column\" value=\"";
        // line 157
        echo ($context["column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_column"] ?? null);
        echo "\" id=\"input-column\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 161
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 163
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 167
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 170
        if (($context["status"] ?? null)) {
            // line 171
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 172
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 174
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 175
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 177
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 182
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 187
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 188
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 193
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 194
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 194);
            echo "</td>
                    <td class=\"text-left\">";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 196
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 196);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 196);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 196);
                echo "\" /></span>
                        <input type=\"text\" name=\"category_seo_url[";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 197);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 197);
                echo "]\" value=\"";
                if ((($__internal_compile_14 = (($__internal_compile_15 = ($context["category_seo_url"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 197)] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 197)] ?? null) : null)) {
                    echo (($__internal_compile_16 = (($__internal_compile_17 = ($context["category_seo_url"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 197)] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 197)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" />
                      </div>
                      ";
                // line 199
                if ((($__internal_compile_18 = (($__internal_compile_19 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 199)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 199)] ?? null) : null)) {
                    // line 200
                    echo "                      <div class=\"text-danger\">";
                    echo (($__internal_compile_20 = (($__internal_compile_21 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 200)] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 200)] ?? null) : null);
                    echo "</div>
                      ";
                }
                // line 202
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                  </tbody>
                  
                </table>
              </div>
            </div>            
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 215
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 216
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 222
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 223
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 223);
            echo "</td>
                      <td class=\"text-left\"><select name=\"category_layout[";
            // line 224
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 224);
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>
                          ";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 227
                echo "                          ";
                if (((($__internal_compile_22 = ($context["category_layout"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 227)] ?? null) : null) && (0 === twig_compare((($__internal_compile_23 = ($context["category_layout"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 227)] ?? null) : null), twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 227))))) {
                    // line 228
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 228);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 228);
                    echo "</option>
                          ";
                } else {
                    // line 230
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 230);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 230);
                    echo "</option>
                          ";
                }
                // line 232
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "                        </select></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  
  <script type=\"text/javascript\"><!--
\$('input[name=\\'path\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 260
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcategory_id: 0,
\t\t\t\t\tname: '";
        // line 265
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'path\\']').val(item['label']);
\t\t\$('input[name=\\'parent_id\\']').val(item['value']);
\t}
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 287
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#category-filter' + item['value']).remove();

\t\t\$('#category-filter').append('<div id=\"category-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#category-filter').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div>
";
        // line 315
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/category_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  779 => 315,  748 => 287,  723 => 265,  715 => 260,  689 => 236,  681 => 233,  675 => 232,  667 => 230,  659 => 228,  656 => 227,  652 => 226,  647 => 224,  643 => 223,  640 => 222,  636 => 221,  628 => 216,  624 => 215,  612 => 205,  599 => 202,  593 => 200,  591 => 199,  578 => 197,  569 => 196,  565 => 195,  561 => 194,  558 => 193,  554 => 192,  547 => 188,  543 => 187,  535 => 182,  528 => 177,  523 => 175,  518 => 174,  513 => 172,  508 => 171,  506 => 170,  500 => 167,  491 => 163,  486 => 161,  477 => 157,  470 => 155,  463 => 150,  459 => 148,  455 => 146,  453 => 145,  444 => 141,  437 => 137,  431 => 136,  427 => 135,  420 => 131,  414 => 130,  410 => 129,  404 => 125,  396 => 122,  391 => 120,  386 => 119,  381 => 117,  376 => 116,  374 => 115,  370 => 113,  366 => 112,  360 => 109,  354 => 105,  345 => 102,  338 => 101,  334 => 100,  329 => 98,  322 => 96,  317 => 93,  311 => 91,  309 => 90,  305 => 89,  299 => 88,  294 => 86,  288 => 82,  271 => 77,  264 => 75,  251 => 71,  244 => 69,  239 => 66,  233 => 64,  231 => 63,  221 => 62,  214 => 60,  199 => 56,  192 => 54,  187 => 51,  181 => 49,  179 => 48,  169 => 47,  162 => 45,  156 => 43,  152 => 42,  148 => 40,  131 => 38,  127 => 37,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-category\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"{{ cancel }}\" data-toggle=\"tooltip\" title=\"{{ button_cancel }}\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ul class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
        <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> {{ text_form }}</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">{{ tab_general }}</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">{{ tab_data }}</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">{{ tab_seo }}</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">{{ tab_design }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                {% for language in languages %}
                <li><a href=\"#language{{ language.language_id }}\" data-toggle=\"tab\"><img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\" /> {{ language.name }}</a></li>
                {% endfor %}
              </ul>
              <div class=\"tab-content\">
                {% for language in languages %}
                <div class=\"tab-pane\" id=\"language{{ language.language_id }}\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name{{ language.language_id }}\">{{ entry_name }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[{{ language.language_id }}][name]\" value=\"{{ category_description[language.language_id] ? category_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name{{ language.language_id }}\" class=\"form-control\" />
                      {% if error_name[language.language_id] %}
                      <div class=\"text-danger\">{{ error_name[language.language_id] }}</div>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description{{ language.language_id }}\">{{ entry_description }}</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[{{ language.language_id }}][description]\" placeholder=\"{{ entry_description }}\" id=\"input-description{{ language.language_id }}\" data-toggle=\"summernote\" data-lang=\"{{ summernote }}\" class=\"form-control\">{{ category_description[language.language_id] ? category_description[language.language_id].description }}</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title{{ language.language_id }}\">{{ entry_meta_title }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[{{ language.language_id }}][meta_title]\" value=\"{{ category_description[language.language_id] ? category_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title{{ language.language_id }}\" class=\"form-control\" />
                      {% if error_meta_title[language.language_id] %}
                      <div class=\"text-danger\">{{ error_meta_title[language.language_id] }}</div>
                      {% endif %}
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description{{ language.language_id }}\">{{ entry_meta_description }}</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description{{ language.language_id }}\" class=\"form-control\">{{ category_description[language.language_id] ? category_description[language.language_id].meta_description }}</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword{{ language.language_id }}\">{{ entry_meta_keyword }}</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword{{ language.language_id }}\" class=\"form-control\">{{ category_description[language.language_id] ? category_description[language.language_id].meta_keyword }}</textarea>
                    </div>
                  </div>
                </div>
                {% endfor %}
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-parent\">{{ entry_parent }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"path\" value=\"{{ path }}\" placeholder=\"{{ entry_parent }}\" id=\"input-parent\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"parent_id\" value=\"{{ parent_id }}\" />
                  {% if error_parent %}
                  <div class=\"text-danger\">{{ error_parent }}</div>
                  {% endif %}
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"{{ help_filter }}\">{{ entry_filter }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"{{ entry_filter }}\" id=\"input-filter\" class=\"form-control\" />
                  <div id=\"category-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    {% for category_filter in category_filters %}
                    <div id=\"category-filter{{ category_filter.filter_id }}\"><i class=\"fa fa-minus-circle\"></i> {{ category_filter.name }}
                      <input type=\"hidden\" name=\"category_filter[]\" value=\"{{ category_filter.filter_id }}\" />
                    </div>
                    {% endfor %}
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">{{ entry_store }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    {% for store in stores %}
                    <div class=\"checkbox\">
                      <label>
                        {% if store.store_id in category_store %}
                        <input type=\"checkbox\" name=\"category_store[]\" value=\"{{ store.store_id }}\" checked=\"checked\" />
                        {{ store.name }}
                        {% else %}
                        <input type=\"checkbox\" name=\"category_store[]\" value=\"{{ store.store_id }}\" />
                        {{ store.name }}
                        {% endif %}
                      </label>
                    </div>
                    {% endfor %}
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">{{ entry_image }}</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ thumb }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a>
                  <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">{{ entry_image2 }}</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image2\" data-toggle=\"icon\" class=\"img-thumbnail\"><img src=\"{{ img }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a>
                  <input type=\"hidden\" name=\"icon\" value=\"{{ img }}\" id=\"input-image2\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-top\"><span data-toggle=\"tooltip\" title=\"{{ help_top }}\">{{ entry_top }}</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"checkbox\">
                    <label>
                      {% if top %}
                      <input type=\"checkbox\" name=\"top\" value=\"1\" checked=\"checked\" id=\"input-top\" />
                      {% else %}
                      <input type=\"checkbox\" name=\"top\" value=\"1\" id=\"input-top\" />
                      {% endif %}
                      &nbsp; </label>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-column\"><span data-toggle=\"tooltip\" title=\"{{ help_column }}\">{{ entry_column }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"column\" value=\"{{ column }}\" placeholder=\"{{ entry_column }}\" id=\"input-column\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">{{ entry_sort_order }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">{{ entry_status }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    {% if status %}
                    <option value=\"1\" selected=\"selected\">{{ text_enabled }}</option>
                    <option value=\"0\">{{ text_disabled }}</option>
                    {% else %}
                    <option value=\"1\">{{ text_enabled }}</option>
                    <option value=\"0\" selected=\"selected\">{{ text_disabled }}</option>
                    {% endif %}
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> {{ text_keyword }}</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">{{ entry_store }}</td>
                      <td class=\"text-left\">{{ entry_keyword }}</td>
                    </tr>
                  </thead>
                  <tbody>
                  {% for store in stores %}
                  <tr>
                    <td class=\"text-left\">{{ store.name }}</td>
                    <td class=\"text-left\">{% for language in languages %}
                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\" /></span>
                        <input type=\"text\" name=\"category_seo_url[{{ store.store_id }}][{{ language.language_id }}]\" value=\"{% if category_seo_url[store.store_id][language.language_id] %}{{ category_seo_url[store.store_id][language.language_id] }}{% endif %}\" placeholder=\"{{ entry_keyword }}\" class=\"form-control\" />
                      </div>
                      {% if error_keyword[store.store_id][language.language_id] %}
                      <div class=\"text-danger\">{{ error_keyword[store.store_id][language.language_id] }}</div>
                      {% endif %}
                      {% endfor %}</td>
                  </tr>
                  {% endfor %}
                  </tbody>
                  
                </table>
              </div>
            </div>            
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">{{ entry_store }}</td>
                      <td class=\"text-left\">{{ entry_layout }}</td>
                    </tr>
                  </thead>
                  <tbody>

                    {% for store in stores %}
                    <tr>
                      <td class=\"text-left\">{{ store.name }}</td>
                      <td class=\"text-left\"><select name=\"category_layout[{{ store.store_id }}]\" class=\"form-control\">
                          <option value=\"\"></option>
                          {% for layout in layouts %}
                          {% if category_layout[store.store_id] and category_layout[store.store_id] == layout.layout_id %}
                          <option value=\"{{ layout.layout_id }}\" selected=\"selected\">{{ layout.name }}</option>
                          {% else %}
                          <option value=\"{{ layout.layout_id }}\">{{ layout.name }}</option>
                          {% endif %}
                          {% endfor %}
                        </select></td>
                    </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  
  <script type=\"text/javascript\"><!--
\$('input[name=\\'path\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcategory_id: 0,
\t\t\t\t\tname: '{{ text_none }}'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'path\\']').val(item['label']);
\t\t\$('input[name=\\'parent_id\\']').val(item['value']);
\t}
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#category-filter' + item['value']).remove();

\t\t\$('#category-filter').append('<div id=\"category-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#category-filter').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div>
{{ footer }}
", "catalog/category_form.twig", "");
    }
}
