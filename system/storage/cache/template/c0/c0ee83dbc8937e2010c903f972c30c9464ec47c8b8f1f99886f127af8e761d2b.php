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

/* setting/setting.twig */
class __TwigTemplate_cee96082008a60e8cb50014f2f3a96954da116c88d8d4617ef165799677d5996 extends Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 44
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 46
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 47
        if (($context["error_meta_title"] ?? null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 49
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 52
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 54
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 58
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 60
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 64
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">                    
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 68
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 68), ($context["config_theme"] ?? null)))) {
                echo "                    
                    <option value=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 69);
                echo "</option>                    
                    ";
            } else {
                // line 70
                echo "                    
                    <option value=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 71);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 71);
                echo "</option>                    
                    ";
            }
            // line 73
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 79
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">                    
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 83
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 83), ($context["config_layout_id"] ?? null)))) {
                echo "                    
                    <option value=\"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 84);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 84);
                echo "</option>                    
                    ";
            } else {
                // line 85
                echo "                    
                    <option value=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 86);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 86);
                echo "</option>                    
                    ";
            }
            // line 88
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 95
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 97
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 98
        if (($context["error_name"] ?? null)) {
            // line 99
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 100
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 103
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 105
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 106
        if (($context["error_owner"] ?? null)) {
            // line 107
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 108
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 111
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 113
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 114
        if (($context["error_address"] ?? null)) {
            // line 115
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 116
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 119
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 121
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 125
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 127
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 128
        if (($context["error_email"] ?? null)) {
            // line 129
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 130
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 133
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 135
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 136
        if (($context["error_telephone"] ?? null)) {
            // line 137
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 138
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 141
        echo ($context["entry_telephone2"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 143
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 144
        if (($context["error_telephone"] ?? null)) {
            // line 145
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 146
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 149
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 151
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 155
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 156
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 157
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 161
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 163
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 167
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 169
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 172
        if (($context["locations"] ?? null)) {
            // line 173
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 174
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 176
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 177
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 177), ($context["config_location"] ?? null))) {
                    // line 178
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 178);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 179);
                    echo "
                      ";
                } else {
                    // line 181
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 181);
                    echo "\" />
                      ";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 182);
                    echo "
                      ";
                }
                // line 183
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo " </div>
              </div>
              ";
        }
        // line 187
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 190
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">                    
                    ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 194
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 194), ($context["config_country_id"] ?? null)))) {
                echo "                    
                    <option value=\"";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 195);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 195);
                echo "</option>                    
                    ";
            } else {
                // line 196
                echo "                    
                    <option value=\"";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 197);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 197);
                echo "</option>                    
                    ";
            }
            // line 199
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 204
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 211
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 215
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 215), ($context["config_timezone"] ?? null)))) {
                // line 216
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 216);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 216);
                echo "</option>
                      ";
            } else {
                // line 218
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 218);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 218);
                echo "</option>
                      ";
            }
            // line 220
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 225
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">                    
                    ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 229
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 229), ($context["config_language"] ?? null)))) {
                echo "                    
                    <option value=\"";
                // line 230
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 230);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 230);
                echo "</option>                    
                    ";
            } else {
                // line 231
                echo "                    
                    <option value=\"";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 232);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 232);
                echo "</option>                    
                    ";
            }
            // line 234
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 239
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">                    
                    ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 243
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 243), ($context["config_admin_language"] ?? null)))) {
                echo "                    
                    <option value=\"";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 244);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 244);
                echo "</option>                    
                    ";
            } else {
                // line 245
                echo "                    
                    <option value=\"";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 246);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 246);
                echo "</option>                    
                    ";
            }
            // line 248
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 253
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">                    
                    ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 257
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 257), ($context["config_currency"] ?? null)))) {
                echo "                    
                    <option value=\"";
                // line 258
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 258);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 258);
                echo "</option>                    
                    ";
            } else {
                // line 259
                echo "                    
                    <option value=\"";
                // line 260
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 260);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 260);
                echo "</option>                    
                    ";
            }
            // line 262
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 267
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 269
        if (($context["config_currency_auto"] ?? null)) {
            // line 270
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 271
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 273
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 274
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 275
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 276
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 277
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 278
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 280
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 281
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 282
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 286
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">                    
                    ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 290
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 290), ($context["config_length_class_id"] ?? null)))) {
                echo "                    
                    <option value=\"";
                // line 291
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 291);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 291);
                echo "</option>                    
                    ";
            } else {
                // line 292
                echo "                    
                    <option value=\"";
                // line 293
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 293);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 293);
                echo "</option>                    
                    ";
            }
            // line 295
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 300
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">                    
                    ";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 304
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 304), ($context["config_weight_class_id"] ?? null)))) {
                echo "                    
                    <option value=\"";
                // line 305
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 305);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 305);
                echo "</option>                    
                    ";
            } else {
                // line 306
                echo "                    
                    <option value=\"";
                // line 307
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 307);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 307);
                echo "</option>                    
                    ";
            }
            // line 309
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 316
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 318
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 320
        if (($context["config_product_count"] ?? null)) {
            // line 321
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 322
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 324
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 325
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 326
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 327
        if ( !($context["config_product_count"] ?? null)) {
            // line 328
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 329
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 331
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 332
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 333
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 337
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 339
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 340
        if (($context["error_limit_admin"] ?? null)) {
            // line 341
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 342
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 346
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 348
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 350
        if (($context["config_review_status"] ?? null)) {
            // line 351
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 352
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 354
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 355
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 356
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 357
        if ( !($context["config_review_status"] ?? null)) {
            // line 358
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 359
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 361
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 362
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 363
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 367
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 369
        if (($context["config_review_guest"] ?? null)) {
            // line 370
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 371
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 373
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 374
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 375
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 376
        if ( !($context["config_review_guest"] ?? null)) {
            // line 377
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 378
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 380
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 381
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 382
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 387
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 389
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 391
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 392
        if (($context["error_voucher_min"] ?? null)) {
            // line 393
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 394
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 397
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 399
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 400
        if (($context["error_voucher_max"] ?? null)) {
            // line 401
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 402
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 406
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 408
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 410
        if (($context["config_tax"] ?? null)) {
            // line 411
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 412
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 414
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 415
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 416
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 417
        if ( !($context["config_tax"] ?? null)) {
            // line 418
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 419
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 421
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 422
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 423
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 427
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 430
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 431
        if ((0 === twig_compare(($context["config_tax_default"] ?? null), "shipping"))) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 432
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 433
            echo "                      
                      <option value=\"shipping\">";
            // line 434
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 436
        echo "                      ";
        if ((0 === twig_compare(($context["config_tax_default"] ?? null), "payment"))) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 437
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 438
            echo "                      
                      <option value=\"payment\">";
            // line 439
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 440
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 445
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 448
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 449
        if ((0 === twig_compare(($context["config_tax_customer"] ?? null), "shipping"))) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 450
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 451
            echo "                      
                      <option value=\"shipping\">";
            // line 452
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 454
        echo "                      ";
        if ((0 === twig_compare(($context["config_tax_customer"] ?? null), "payment"))) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 455
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 456
            echo "                      
                      <option value=\"payment\">";
            // line 457
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 458
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 464
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 466
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 468
        if (($context["config_customer_online"] ?? null)) {
            // line 469
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 470
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 472
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 473
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 474
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 475
        if ( !($context["config_customer_online"] ?? null)) {
            // line 476
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 477
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 479
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 480
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 481
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 485
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 487
        if (($context["config_customer_activity"] ?? null)) {
            // line 488
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 489
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 491
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 492
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 493
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 494
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 495
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 496
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 498
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 499
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 500
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 504
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 506
        if (($context["config_customer_search"] ?? null)) {
            // line 507
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 508
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 510
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 511
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 512
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 513
        if ( !($context["config_customer_search"] ?? null)) {
            // line 514
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 515
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 517
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 518
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 519
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 523
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      ";
        // line 526
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 527
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 527), ($context["config_customer_group_id"] ?? null)))) {
                echo "                      
                      <option value=\"";
                // line 528
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 528);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 528);
                echo "</option>                      
                      ";
            } else {
                // line 529
                echo "                      
                      <option value=\"";
                // line 530
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 530);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 530);
                echo "</option>                      
                      ";
            }
            // line 532
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 537
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 538
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 539
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 540
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 540), ($context["config_customer_group_display"] ?? null))) {
                // line 541
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 541);
                echo "\" checked=\"checked\" />
                        ";
                // line 542
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 542);
                echo "
                        ";
            } else {
                // line 544
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 544);
                echo "\" />
                        ";
                // line 545
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 545);
                echo "
                        ";
            }
            // line 546
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 550
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 551
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 554
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 556
        if (($context["config_customer_price"] ?? null)) {
            // line 557
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 558
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 560
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 561
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 562
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 563
        if ( !($context["config_customer_price"] ?? null)) {
            // line 564
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 565
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 567
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 568
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 569
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 573
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 575
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 576
        if (($context["error_login_attempts"] ?? null)) {
            // line 577
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 578
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 581
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 584
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 585
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 586
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 586), ($context["config_account_id"] ?? null)))) {
                echo "                      
                      <option value=\"";
                // line 587
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 587);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 587);
                echo "</option>                      
                      ";
            } else {
                // line 588
                echo "                      
                      <option value=\"";
                // line 589
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 589);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 589);
                echo "</option>                      
                      ";
            }
            // line 591
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 597
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 599
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 601
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 605
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 607
        if (($context["config_cart_weight"] ?? null)) {
            // line 608
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 609
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 611
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 612
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 613
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 614
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 615
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 616
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 618
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 619
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 620
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 624
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 626
        if (($context["config_checkout_guest"] ?? null)) {
            // line 627
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 628
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 630
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 631
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 632
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 633
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 634
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 635
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 637
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 638
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 639
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 643
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 646
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 648
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 648), ($context["config_checkout_id"] ?? null)))) {
                echo "                      
                      <option value=\"";
                // line 649
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 649);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 649);
                echo "</option>                      
                      ";
            } else {
                // line 650
                echo "                      
                      <option value=\"";
                // line 651
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 651);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 651);
                echo "</option>                      
                      ";
            }
            // line 653
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 658
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      ";
        // line 661
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 662
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 662), ($context["config_order_status_id"] ?? null)))) {
                echo "                      
                      <option value=\"";
                // line 663
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 663);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 663);
                echo "</option>                      
                      ";
            } else {
                // line 664
                echo "                      
                      <option value=\"";
                // line 665
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 665);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 665);
                echo "</option>                      
                      ";
            }
            // line 667
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 672
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 674
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 675
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 676
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 676), ($context["config_processing_status"] ?? null))) {
                // line 677
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 677);
                echo "\" checked=\"checked\" />
                          ";
                // line 678
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 678);
                echo "
                          ";
            } else {
                // line 680
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 680);
                echo "\" />
                          ";
                // line 681
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 681);
                echo "
                          ";
            }
            // line 682
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 684
        echo " </div>
                    ";
        // line 685
        if (($context["error_processing_status"] ?? null)) {
            // line 686
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 687
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 690
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 692
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 693
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 694
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 694), ($context["config_complete_status"] ?? null))) {
                // line 695
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 695);
                echo "\" checked=\"checked\" />
                          ";
                // line 696
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 696);
                echo "
                          ";
            } else {
                // line 698
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 698);
                echo "\" />
                          ";
                // line 699
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 699);
                echo "
                          ";
            }
            // line 700
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 702
        echo " </div>
                    ";
        // line 703
        if (($context["error_complete_status"] ?? null)) {
            // line 704
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 705
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 708
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      ";
        // line 711
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 712
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 712), ($context["config_fraud_status_id"] ?? null)))) {
                echo "                      
                      <option value=\"";
                // line 713
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 713);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 713);
                echo "</option>                      
                      ";
            } else {
                // line 714
                echo "                      
                      <option value=\"";
                // line 715
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 715);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 715);
                echo "</option>                      
                      ";
            }
            // line 717
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 722
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 725
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 727
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 727), ($context["config_api_id"] ?? null)))) {
                echo "                      
                      <option value=\"";
                // line 728
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 728);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 728);
                echo "</option>                      
                      ";
            } else {
                // line 729
                echo "                      
                      <option value=\"";
                // line 730
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 730);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 730);
                echo "</option>                      
                      ";
            }
            // line 732
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 738
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 740
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 742
        if (($context["config_stock_display"] ?? null)) {
            // line 743
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 744
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 746
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 747
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 748
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 749
        if ( !($context["config_stock_display"] ?? null)) {
            // line 750
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 751
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 753
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 754
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 755
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 759
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 761
        if (($context["config_stock_warning"] ?? null)) {
            // line 762
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 763
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 765
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 766
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 767
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 768
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 769
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 770
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 772
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 773
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 774
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 778
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 780
        if (($context["config_stock_checkout"] ?? null)) {
            // line 781
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 782
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 784
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 785
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 786
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 787
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 788
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 789
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 791
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 792
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 793
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 798
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 800
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      ";
        // line 803
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 804
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 804), ($context["config_affiliate_group_id"] ?? null)))) {
                echo "                      
                      <option value=\"";
                // line 805
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 805);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 805);
                echo "</option>                      
                      ";
            } else {
                // line 806
                echo "                      
                      <option value=\"";
                // line 807
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 807);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 807);
                echo "</option>                      
                      ";
            }
            // line 809
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 814
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 816
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 817
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 818
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 820
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 821
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 822
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 823
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 824
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 825
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 827
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 828
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 829
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 833
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 835
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 836
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 837
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 839
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 840
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 841
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 842
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 843
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 844
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 846
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 847
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 848
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 852
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 854
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 858
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 861
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 862
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 863
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 863), ($context["config_affiliate_id"] ?? null)))) {
                echo "                      
                      <option value=\"";
                // line 864
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 864);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 864);
                echo "</option>                      
                      ";
            } else {
                // line 865
                echo "                      
                      <option value=\"";
                // line 866
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 866);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 866);
                echo "</option>                      
                      ";
            }
            // line 868
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 874
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 876
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 879
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 880
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 881
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 881), ($context["config_return_id"] ?? null)))) {
                echo "                      
                      <option value=\"";
                // line 882
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 882);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 882);
                echo "</option>                      
                      ";
            } else {
                // line 883
                echo "                      
                      <option value=\"";
                // line 884
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 884);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 884);
                echo "</option>                      
                      ";
            }
            // line 886
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 891
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      ";
        // line 894
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 895
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 895), ($context["config_return_status_id"] ?? null)))) {
                echo "                      
                      <option value=\"";
                // line 896
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 896);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 896);
                echo "</option>                      
                      ";
            } else {
                // line 897
                echo "                      
                      <option value=\"";
                // line 898
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 898);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 898);
                echo "</option>                      
                      ";
            }
            // line 900
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 906
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 908
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 911
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 912
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 913
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 913), ($context["config_captcha"] ?? null)))) {
                echo "                      
                      <option value=\"";
                // line 914
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 914);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 914);
                echo "</option>                      
                      ";
            } else {
                // line 915
                echo "                      
                      <option value=\"";
                // line 916
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 916);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 916);
                echo "</option>                      
                      ";
            }
            // line 918
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 923
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 925
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 926
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 927
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 927), ($context["config_captcha_page"] ?? null))) {
                // line 928
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 928);
                echo "\" checked=\"checked\" />
                          ";
                // line 929
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 929);
                echo "
                          ";
            } else {
                // line 931
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 931);
                echo "\" />
                          ";
                // line 932
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 932);
                echo "
                          ";
            }
            // line 933
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 935
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 942
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 943
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 944
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 948
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 949
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 950
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 956
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 958
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      ";
        // line 961
        if ((0 === twig_compare(($context["config_mail_engine"] ?? null), "mail"))) {
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 962
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 963
            echo "                      
                      <option value=\"mail\">";
            // line 964
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 966
        echo "                      ";
        if ((0 === twig_compare(($context["config_mail_engine"] ?? null), "smtp"))) {
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 967
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 968
            echo "                      
                      <option value=\"smtp\">";
            // line 969
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 970
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 975
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 977
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 981
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 983
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 987
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 989
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 993
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 995
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 999
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1001
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1005
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1007
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1012
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1014
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1016
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1017
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1018
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1018), ($context["config_mail_alert"] ?? null))) {
                // line 1019
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1019);
                echo "\" checked=\"checked\" />
                          ";
                // line 1020
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1020);
                echo "
                          ";
            } else {
                // line 1022
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1022);
                echo "\" />
                          ";
                // line 1023
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1023);
                echo "
                          ";
            }
            // line 1024
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1026
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1030
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1032
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1039
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1041
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1043
        if (($context["config_maintenance"] ?? null)) {
            // line 1044
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1045
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1047
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1048
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1049
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1050
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1051
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1052
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1054
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1055
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1056
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1060
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1062
        if (($context["config_seo_url"] ?? null)) {
            // line 1063
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1064
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1066
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1067
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1068
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1069
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1070
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1071
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1073
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1074
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1075
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1079
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1081
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1085
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1087
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1092
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1094
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1096
        if (($context["config_secure"] ?? null)) {
            // line 1097
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1098
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1100
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1101
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1102
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1103
        if ( !($context["config_secure"] ?? null)) {
            // line 1104
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1105
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1107
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1108
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1109
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1113
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1115
        if (($context["config_password"] ?? null)) {
            // line 1116
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1117
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1119
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1120
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1121
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1122
        if ( !($context["config_password"] ?? null)) {
            // line 1123
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1124
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1126
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1127
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1128
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1132
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1134
        if (($context["config_shared"] ?? null)) {
            // line 1135
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1136
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1138
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1139
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1140
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1141
        if ( !($context["config_shared"] ?? null)) {
            // line 1142
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1143
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1145
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1146
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1147
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1151
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1153
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1154
        if (($context["error_encryption"] ?? null)) {
            // line 1155
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1156
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1160
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1162
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1164
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1168
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1170
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1174
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1176
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1181
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1183
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1185
        if (($context["config_error_display"] ?? null)) {
            // line 1186
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1187
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1189
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1190
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1191
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1192
        if ( !($context["config_error_display"] ?? null)) {
            // line 1193
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1194
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1196
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1197
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1198
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1202
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1204
        if (($context["config_error_log"] ?? null)) {
            // line 1205
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1206
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1208
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1209
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1210
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1211
        if ( !($context["config_error_log"] ?? null)) {
            // line 1212
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1213
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1215
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1216
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1217
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1221
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1223
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1224
        if (($context["error_log"] ?? null)) {
            // line 1225
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1226
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1238
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1260
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1269
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1275
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1282
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1297
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3632 => 1297,  3614 => 1282,  3604 => 1275,  3595 => 1269,  3583 => 1260,  3558 => 1238,  3544 => 1226,  3538 => 1225,  3536 => 1224,  3530 => 1223,  3525 => 1221,  3519 => 1217,  3514 => 1216,  3511 => 1215,  3506 => 1213,  3503 => 1212,  3501 => 1211,  3498 => 1210,  3493 => 1209,  3490 => 1208,  3485 => 1206,  3482 => 1205,  3480 => 1204,  3475 => 1202,  3469 => 1198,  3464 => 1197,  3461 => 1196,  3456 => 1194,  3453 => 1193,  3451 => 1192,  3448 => 1191,  3443 => 1190,  3440 => 1189,  3435 => 1187,  3432 => 1186,  3430 => 1185,  3425 => 1183,  3420 => 1181,  3410 => 1176,  3403 => 1174,  3394 => 1170,  3387 => 1168,  3378 => 1164,  3371 => 1162,  3366 => 1160,  3360 => 1156,  3354 => 1155,  3352 => 1154,  3346 => 1153,  3339 => 1151,  3333 => 1147,  3328 => 1146,  3325 => 1145,  3320 => 1143,  3317 => 1142,  3315 => 1141,  3312 => 1140,  3307 => 1139,  3304 => 1138,  3299 => 1136,  3296 => 1135,  3294 => 1134,  3287 => 1132,  3281 => 1128,  3276 => 1127,  3273 => 1126,  3268 => 1124,  3265 => 1123,  3263 => 1122,  3260 => 1121,  3255 => 1120,  3252 => 1119,  3247 => 1117,  3244 => 1116,  3242 => 1115,  3235 => 1113,  3229 => 1109,  3224 => 1108,  3221 => 1107,  3216 => 1105,  3213 => 1104,  3211 => 1103,  3208 => 1102,  3203 => 1101,  3200 => 1100,  3195 => 1098,  3192 => 1097,  3190 => 1096,  3183 => 1094,  3178 => 1092,  3168 => 1087,  3161 => 1085,  3152 => 1081,  3145 => 1079,  3139 => 1075,  3134 => 1074,  3131 => 1073,  3126 => 1071,  3123 => 1070,  3121 => 1069,  3118 => 1068,  3113 => 1067,  3110 => 1066,  3105 => 1064,  3102 => 1063,  3100 => 1062,  3093 => 1060,  3087 => 1056,  3082 => 1055,  3079 => 1054,  3074 => 1052,  3071 => 1051,  3069 => 1050,  3066 => 1049,  3061 => 1048,  3058 => 1047,  3053 => 1045,  3050 => 1044,  3048 => 1043,  3041 => 1041,  3036 => 1039,  3024 => 1032,  3017 => 1030,  3011 => 1026,  3003 => 1024,  2998 => 1023,  2993 => 1022,  2988 => 1020,  2983 => 1019,  2981 => 1018,  2978 => 1017,  2974 => 1016,  2967 => 1014,  2962 => 1012,  2952 => 1007,  2947 => 1005,  2938 => 1001,  2933 => 999,  2924 => 995,  2917 => 993,  2908 => 989,  2903 => 987,  2894 => 983,  2887 => 981,  2878 => 977,  2871 => 975,  2864 => 970,  2859 => 969,  2856 => 968,  2851 => 967,  2846 => 966,  2841 => 964,  2838 => 963,  2833 => 962,  2829 => 961,  2821 => 958,  2816 => 956,  2807 => 950,  2801 => 949,  2795 => 948,  2788 => 944,  2782 => 943,  2778 => 942,  2769 => 935,  2761 => 933,  2756 => 932,  2751 => 931,  2746 => 929,  2741 => 928,  2739 => 927,  2736 => 926,  2732 => 925,  2727 => 923,  2715 => 918,  2708 => 916,  2705 => 915,  2698 => 914,  2693 => 913,  2689 => 912,  2685 => 911,  2677 => 908,  2672 => 906,  2659 => 900,  2652 => 898,  2649 => 897,  2642 => 896,  2637 => 895,  2633 => 894,  2625 => 891,  2613 => 886,  2606 => 884,  2603 => 883,  2596 => 882,  2591 => 881,  2587 => 880,  2583 => 879,  2575 => 876,  2570 => 874,  2557 => 868,  2550 => 866,  2547 => 865,  2540 => 864,  2535 => 863,  2531 => 862,  2527 => 861,  2519 => 858,  2510 => 854,  2503 => 852,  2497 => 848,  2492 => 847,  2489 => 846,  2484 => 844,  2481 => 843,  2479 => 842,  2476 => 841,  2471 => 840,  2468 => 839,  2463 => 837,  2460 => 836,  2458 => 835,  2451 => 833,  2445 => 829,  2440 => 828,  2437 => 827,  2432 => 825,  2429 => 824,  2427 => 823,  2424 => 822,  2419 => 821,  2416 => 820,  2411 => 818,  2408 => 817,  2406 => 816,  2399 => 814,  2387 => 809,  2380 => 807,  2377 => 806,  2370 => 805,  2365 => 804,  2361 => 803,  2355 => 800,  2350 => 798,  2343 => 793,  2338 => 792,  2335 => 791,  2330 => 789,  2327 => 788,  2325 => 787,  2322 => 786,  2317 => 785,  2314 => 784,  2309 => 782,  2306 => 781,  2304 => 780,  2297 => 778,  2291 => 774,  2286 => 773,  2283 => 772,  2278 => 770,  2275 => 769,  2273 => 768,  2270 => 767,  2265 => 766,  2262 => 765,  2257 => 763,  2254 => 762,  2252 => 761,  2245 => 759,  2239 => 755,  2234 => 754,  2231 => 753,  2226 => 751,  2223 => 750,  2221 => 749,  2218 => 748,  2213 => 747,  2210 => 746,  2205 => 744,  2202 => 743,  2200 => 742,  2193 => 740,  2188 => 738,  2175 => 732,  2168 => 730,  2165 => 729,  2158 => 728,  2153 => 727,  2149 => 726,  2145 => 725,  2137 => 722,  2125 => 717,  2118 => 715,  2115 => 714,  2108 => 713,  2103 => 712,  2099 => 711,  2091 => 708,  2086 => 705,  2080 => 704,  2078 => 703,  2075 => 702,  2067 => 700,  2062 => 699,  2057 => 698,  2052 => 696,  2047 => 695,  2045 => 694,  2042 => 693,  2038 => 692,  2031 => 690,  2026 => 687,  2020 => 686,  2018 => 685,  2015 => 684,  2007 => 682,  2002 => 681,  1997 => 680,  1992 => 678,  1987 => 677,  1985 => 676,  1982 => 675,  1978 => 674,  1971 => 672,  1959 => 667,  1952 => 665,  1949 => 664,  1942 => 663,  1937 => 662,  1933 => 661,  1925 => 658,  1913 => 653,  1906 => 651,  1903 => 650,  1896 => 649,  1891 => 648,  1887 => 647,  1883 => 646,  1875 => 643,  1869 => 639,  1864 => 638,  1861 => 637,  1856 => 635,  1853 => 634,  1851 => 633,  1848 => 632,  1843 => 631,  1840 => 630,  1835 => 628,  1832 => 627,  1830 => 626,  1823 => 624,  1817 => 620,  1812 => 619,  1809 => 618,  1804 => 616,  1801 => 615,  1799 => 614,  1796 => 613,  1791 => 612,  1788 => 611,  1783 => 609,  1780 => 608,  1778 => 607,  1771 => 605,  1762 => 601,  1755 => 599,  1750 => 597,  1737 => 591,  1730 => 589,  1727 => 588,  1720 => 587,  1715 => 586,  1711 => 585,  1707 => 584,  1699 => 581,  1694 => 578,  1688 => 577,  1686 => 576,  1680 => 575,  1673 => 573,  1667 => 569,  1662 => 568,  1659 => 567,  1654 => 565,  1651 => 564,  1649 => 563,  1646 => 562,  1641 => 561,  1638 => 560,  1633 => 558,  1630 => 557,  1628 => 556,  1621 => 554,  1616 => 551,  1610 => 550,  1607 => 549,  1599 => 546,  1594 => 545,  1589 => 544,  1584 => 542,  1579 => 541,  1577 => 540,  1574 => 539,  1570 => 538,  1564 => 537,  1552 => 532,  1545 => 530,  1542 => 529,  1535 => 528,  1530 => 527,  1526 => 526,  1518 => 523,  1512 => 519,  1507 => 518,  1504 => 517,  1499 => 515,  1496 => 514,  1494 => 513,  1491 => 512,  1486 => 511,  1483 => 510,  1478 => 508,  1475 => 507,  1473 => 506,  1468 => 504,  1462 => 500,  1457 => 499,  1454 => 498,  1449 => 496,  1446 => 495,  1444 => 494,  1441 => 493,  1436 => 492,  1433 => 491,  1428 => 489,  1425 => 488,  1423 => 487,  1416 => 485,  1410 => 481,  1405 => 480,  1402 => 479,  1397 => 477,  1394 => 476,  1392 => 475,  1389 => 474,  1384 => 473,  1381 => 472,  1376 => 470,  1373 => 469,  1371 => 468,  1364 => 466,  1359 => 464,  1351 => 458,  1346 => 457,  1343 => 456,  1338 => 455,  1333 => 454,  1328 => 452,  1325 => 451,  1320 => 450,  1316 => 449,  1312 => 448,  1304 => 445,  1297 => 440,  1292 => 439,  1289 => 438,  1284 => 437,  1279 => 436,  1274 => 434,  1271 => 433,  1266 => 432,  1262 => 431,  1258 => 430,  1250 => 427,  1244 => 423,  1239 => 422,  1236 => 421,  1231 => 419,  1228 => 418,  1226 => 417,  1223 => 416,  1218 => 415,  1215 => 414,  1210 => 412,  1207 => 411,  1205 => 410,  1200 => 408,  1195 => 406,  1189 => 402,  1183 => 401,  1181 => 400,  1175 => 399,  1168 => 397,  1163 => 394,  1157 => 393,  1155 => 392,  1149 => 391,  1142 => 389,  1137 => 387,  1130 => 382,  1125 => 381,  1122 => 380,  1117 => 378,  1114 => 377,  1112 => 376,  1109 => 375,  1104 => 374,  1101 => 373,  1096 => 371,  1093 => 370,  1091 => 369,  1084 => 367,  1078 => 363,  1073 => 362,  1070 => 361,  1065 => 359,  1062 => 358,  1060 => 357,  1057 => 356,  1052 => 355,  1049 => 354,  1044 => 352,  1041 => 351,  1039 => 350,  1032 => 348,  1027 => 346,  1021 => 342,  1015 => 341,  1013 => 340,  1007 => 339,  1000 => 337,  994 => 333,  989 => 332,  986 => 331,  981 => 329,  978 => 328,  976 => 327,  973 => 326,  968 => 325,  965 => 324,  960 => 322,  957 => 321,  955 => 320,  948 => 318,  943 => 316,  929 => 309,  922 => 307,  919 => 306,  912 => 305,  907 => 304,  903 => 303,  897 => 300,  885 => 295,  878 => 293,  875 => 292,  868 => 291,  863 => 290,  859 => 289,  853 => 286,  847 => 282,  842 => 281,  839 => 280,  834 => 278,  831 => 277,  829 => 276,  826 => 275,  821 => 274,  818 => 273,  813 => 271,  810 => 270,  808 => 269,  801 => 267,  789 => 262,  782 => 260,  779 => 259,  772 => 258,  767 => 257,  763 => 256,  755 => 253,  743 => 248,  736 => 246,  733 => 245,  726 => 244,  721 => 243,  717 => 242,  711 => 239,  699 => 234,  692 => 232,  689 => 231,  682 => 230,  677 => 229,  673 => 228,  667 => 225,  661 => 221,  655 => 220,  647 => 218,  639 => 216,  636 => 215,  632 => 214,  626 => 211,  616 => 204,  604 => 199,  597 => 197,  594 => 196,  587 => 195,  582 => 194,  578 => 193,  572 => 190,  567 => 187,  562 => 185,  554 => 183,  549 => 182,  544 => 181,  539 => 179,  534 => 178,  532 => 177,  529 => 176,  525 => 175,  519 => 174,  516 => 173,  514 => 172,  506 => 169,  499 => 167,  490 => 163,  483 => 161,  476 => 157,  470 => 156,  466 => 155,  457 => 151,  452 => 149,  447 => 146,  441 => 145,  439 => 144,  433 => 143,  428 => 141,  423 => 138,  417 => 137,  415 => 136,  409 => 135,  404 => 133,  399 => 130,  393 => 129,  391 => 128,  385 => 127,  380 => 125,  371 => 121,  364 => 119,  359 => 116,  353 => 115,  351 => 114,  345 => 113,  340 => 111,  335 => 108,  329 => 107,  327 => 106,  321 => 105,  316 => 103,  311 => 100,  305 => 99,  303 => 98,  297 => 97,  292 => 95,  278 => 88,  271 => 86,  268 => 85,  261 => 84,  256 => 83,  252 => 82,  246 => 79,  233 => 73,  226 => 71,  223 => 70,  216 => 69,  211 => 68,  207 => 67,  201 => 64,  192 => 60,  187 => 58,  178 => 54,  173 => 52,  168 => 49,  162 => 48,  160 => 47,  154 => 46,  149 => 44,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"{{ cancel }}\" data-toggle=\"tooltip\" title=\"{{ button_cancel }}\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ul class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
        <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> {{ text_edit }}</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">{{ tab_general }}</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">{{ tab_store }}</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">{{ tab_local }}</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">{{ tab_option }}</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">{{ tab_image }}</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">{{ tab_mail }}</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">{{ tab_server }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">{{ entry_meta_title }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"{{ config_meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title\" class=\"form-control\" />
                  {% if error_meta_title %}
                  <div class=\"text-danger\">{{ error_meta_title }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">{{ entry_meta_description }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description\" class=\"form-control\">{{ config_meta_description }}</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">{{ entry_meta_keyword }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword\" class=\"form-control\">{{ config_meta_keyword }}</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">{{ entry_theme }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">                    
                    {% for theme in themes %}
                    {% if theme.value == config_theme %}                    
                    <option value=\"{{ theme.value }}\" selected=\"selected\">{{ theme.text }}</option>                    
                    {% else %}                    
                    <option value=\"{{ theme.value }}\">{{ theme.text }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">{{ entry_layout }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">                    
                    {% for layout in layouts %}
                    {% if layout.layout_id == config_layout_id %}                    
                    <option value=\"{{ layout.layout_id }}\" selected=\"selected\">{{ layout.name }}</option>                    
                    {% else %}                    
                    <option value=\"{{ layout.layout_id }}\">{{ layout.name }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">{{ entry_name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"{{ config_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\" />
                  {% if error_name %}
                  <div class=\"text-danger\">{{ error_name }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">{{ entry_owner }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"{{ config_owner }}\" placeholder=\"{{ entry_owner }}\" id=\"input-owner\" class=\"form-control\" />
                  {% if error_owner %}
                  <div class=\"text-danger\">{{ error_owner }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">{{ entry_address }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"{{ entry_address }}\" rows=\"5\" id=\"input-address\" class=\"form-control\">{{ config_address }}</textarea>
                  {% if error_address %}
                  <div class=\"text-danger\">{{ error_address }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_geocode }}\">{{ entry_geocode }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"{{ config_geocode }}\" placeholder=\"{{ entry_geocode }}\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"{{ config_email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
                  {% if error_email %}
                  <div class=\"text-danger\">{{ error_email }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">{{ entry_telephone }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"{{ config_telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\" />
                  {% if error_telephone %}
                  <div class=\"text-danger\">{{ error_telephone }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">{{ entry_telephone2 }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"{{ config_telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\" />
                  {% if error_telephone %}
                  <div class=\"text-danger\">{{ error_telephone }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">{{ entry_fax }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"{{ config_fax }}\" placeholder=\"{{ entry_fax }}\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">{{ entry_image }}</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ thumb }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"{{ config_image }}\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_open }}\">{{ entry_open }}</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"{{ entry_open }}\" id=\"input-open\" class=\"form-control\">{{ config_open }}</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_comment }}\">{{ entry_comment }}</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ config_comment }}</textarea>
                </div>
              </div>
              {% if locations %}
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_location }}\">{{ entry_location }}</span></label>
                <div class=\"col-sm-10\"> {% for location in locations %}
                  <div class=\"checkbox\">
                    <label> {% if location.location_id in config_location %}
                      <input type=\"checkbox\" name=\"config_location[]\" value=\"{{ location.location_id }}\" checked=\"checked\" />
                      {{ location.name }}
                      {% else %}
                      <input type=\"checkbox\" name=\"config_location[]\" value=\"{{ location.location_id }}\" />
                      {{ location.name }}
                      {% endif %} </label>
                  </div>
                  {% endfor %} </div>
              </div>
              {% endif %} </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">{{ entry_country }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">                    
                    {% for country in countries %}
                    {% if country.country_id == config_country_id %}                    
                    <option value=\"{{ country.country_id }}\" selected=\"selected\">{{ country.name }}</option>                    
                    {% else %}                    
                    <option value=\"{{ country.country_id }}\">{{ country.name }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">{{ entry_zone }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">{{ entry_timezone }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    {% for timezone in timezones %}
                      {% if timezone.value == config_timezone %}
                        <option value=\"{{ timezone.value }}\" selected=\"selected\">{{ timezone.text }}</option>
                      {% else %}
                        <option value=\"{{ timezone.value }}\">{{ timezone.text }}</option>
                      {% endif %}
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">{{ entry_language }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">                    
                    {% for language in languages %}
                    {% if language.code == config_language %}                    
                    <option value=\"{{ language.code }}\" selected=\"selected\">{{ language.name }}</option>                    
                    {% else %}                    
                    <option value=\"{{ language.code }}\">{{ language.name }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">{{ entry_admin_language }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">                    
                    {% for language in languages %}
                    {% if language.code == config_admin_language %}                    
                    <option value=\"{{ language.code }}\" selected=\"selected\">{{ language.name }}</option>                    
                    {% else %}                    
                    <option value=\"{{ language.code }}\">{{ language.name }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"{{ help_currency }}\">{{ entry_currency }}</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">                    
                    {% for currency in currencies %}
                    {% if currency.code == config_currency %}                    
                    <option value=\"{{ currency.code }}\" selected=\"selected\">{{ currency.title }}</option>                    
                    {% else %}                    
                    <option value=\"{{ currency.code }}\">{{ currency.title }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_currency_auto }}\">{{ entry_currency_auto }}</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> {% if config_currency_auto %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    {{ text_yes }}
                    {% else %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    {{ text_yes }}
                    {% endif %} </label>
                  <label class=\"radio-inline\"> {% if not config_currency_auto %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    {{ text_no }}
                    {% else %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    {{ text_no }}
                    {% endif %} </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">{{ entry_length_class }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">                    
                    {% for length_class in length_classes %}
                    {% if length_class.length_class_id == config_length_class_id %}                    
                    <option value=\"{{ length_class.length_class_id }}\" selected=\"selected\">{{ length_class.title }}</option>                    
                    {% else %}                    
                    <option value=\"{{ length_class.length_class_id }}\">{{ length_class.title }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">{{ entry_weight_class }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">                    
                    {% for weight_class in weight_classes %}
                    {% if weight_class.weight_class_id == config_weight_class_id %}                    
                    <option value=\"{{ weight_class.weight_class_id }}\" selected=\"selected\">{{ weight_class.title }}</option>                    
                    {% else %}                    
                    <option value=\"{{ weight_class.weight_class_id }}\">{{ weight_class.title }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>{{ text_product }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_product_count }}\">{{ entry_product_count }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_product_count %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_product_count %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"{{ help_limit_admin }}\">{{ entry_limit_admin }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"{{ config_limit_admin }}\" placeholder=\"{{ entry_limit_admin }}\" id=\"input-admin-limit\" class=\"form-control\" />
                    {% if error_limit_admin %}
                    <div class=\"text-danger\">{{ error_limit_admin }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_review }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_review }}\">{{ entry_review }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_review_status %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_review_status %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_review_guest }}\">{{ entry_review_guest }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_review_guest %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_review_guest %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_voucher }}</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"{{ help_voucher_min }}\">{{ entry_voucher_min }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"{{ config_voucher_min }}\" placeholder=\"{{ entry_voucher_min }}\" id=\"input-voucher-min\" class=\"form-control\" />
                    {% if error_voucher_min %}
                    <div class=\"text-danger\">{{ error_voucher_min }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"{{ help_voucher_max }}\">{{ entry_voucher_max }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"{{ config_voucher_max }}\" placeholder=\"{{ entry_voucher_max }}\" id=\"input-voucher-max\" class=\"form-control\" />
                    {% if error_voucher_max %}
                    <div class=\"text-danger\">{{ error_voucher_max }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_tax }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_tax }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_tax %}
                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_tax %}
                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"{{ help_tax_default }}\">{{ entry_tax_default }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">{{ text_none }}</option>                      
                      {% if config_tax_default == 'shipping' %}                      
                      <option value=\"shipping\" selected=\"selected\">{{ text_shipping }}</option>                      
                      {% else %}                      
                      <option value=\"shipping\">{{ text_shipping }}</option>                      
                      {% endif %}
                      {% if config_tax_default == 'payment' %}                      
                      <option value=\"payment\" selected=\"selected\">{{ text_payment }}</option>                      
                      {% else %}                      
                      <option value=\"payment\">{{ text_payment }}</option>                      
                      {% endif %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"{{ help_tax_customer }}\">{{ entry_tax_customer }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">{{ text_none }}</option>                      
                      {% if config_tax_customer == 'shipping' %}                      
                      <option value=\"shipping\" selected=\"selected\">{{ text_shipping }}</option>                      
                      {% else %}                      
                      <option value=\"shipping\">{{ text_shipping }}</option>                      
                      {% endif %}
                      {% if config_tax_customer == 'payment' %}                      
                      <option value=\"payment\" selected=\"selected\">{{ text_payment }}</option>                      
                      {% else %}                      
                      <option value=\"payment\">{{ text_payment }}</option>                      
                      {% endif %}                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_account }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_online }}\">{{ entry_customer_online }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_online %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_online %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_activity }}\">{{ entry_customer_activity }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_activity %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_activity %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_customer_search }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_search %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_search %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_group }}\">{{ entry_customer_group }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      {% for customer_group in customer_groups %}
                      {% if customer_group.customer_group_id == config_customer_group_id %}                      
                      <option value=\"{{ customer_group.customer_group_id }}\" selected=\"selected\">{{ customer_group.name }}</option>                      
                      {% else %}                      
                      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_group_display }}\">{{ entry_customer_group_display }}</span></label>
                  <div class=\"col-sm-10\"> {% for customer_group in customer_groups %}
                    <div class=\"checkbox\">
                      <label> {% if customer_group.customer_group_id in config_customer_group_display %}
                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"{{ customer_group.customer_group_id }}\" checked=\"checked\" />
                        {{ customer_group.name }}
                        {% else %}
                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"{{ customer_group.customer_group_id }}\" />
                        {{ customer_group.name }}
                        {% endif %} </label>
                    </div>
                    {% endfor %}
                    {% if error_customer_group_display %}
                    <div class=\"text-danger\">{{ error_customer_group_display }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_price }}\">{{ entry_customer_price }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_price %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_price %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"{{ help_login_attempts }}\">{{ entry_login_attempts }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"{{ config_login_attempts }}\" placeholder=\"{{ entry_login_attempts }}\" id=\"input-login-attempts\" class=\"form-control\" />
                    {% if error_login_attempts %}
                    <div class=\"text-danger\">{{ error_login_attempts }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"{{ help_account }}\">{{ entry_account }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>                      
                      {% for information in informations %}
                      {% if information.information_id == config_account_id %}                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>                      
                      {% else %}                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_checkout }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"{{ help_invoice_prefix }}\">{{ entry_invoice_prefix }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"{{ config_invoice_prefix }}\" placeholder=\"{{ entry_invoice_prefix }}\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_cart_weight }}\">{{ entry_cart_weight }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_cart_weight %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_cart_weight %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_checkout_guest }}\">{{ entry_checkout_guest }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_checkout_guest %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_checkout_guest %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"{{ help_checkout }}\">{{ entry_checkout }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>                      
                      {% for information in informations %}
                      {% if information.information_id == config_checkout_id %}                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>                      
                      {% else %}                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"{{ help_order_status }}\">{{ entry_order_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      {% for order_status in order_statuses %}
                      {% if order_status.order_status_id == config_order_status_id %}                      
                      <option value=\"{{ order_status.order_status_id }}\" selected=\"selected\">{{ order_status.name }}</option>                      
                      {% else %}                      
                      <option value=\"{{ order_status.order_status_id }}\">{{ order_status.name }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"{{ help_processing_status }}\">{{ entry_processing_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for order_status in order_statuses %}
                      <div class=\"checkbox\">
                        <label> {% if order_status.order_status_id in config_processing_status %}
                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"{{ order_status.order_status_id }}\" checked=\"checked\" />
                          {{ order_status.name }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"{{ order_status.order_status_id }}\" />
                          {{ order_status.name }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                    {% if error_processing_status %}
                    <div class=\"text-danger\">{{ error_processing_status }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"{{ help_complete_status }}\">{{ entry_complete_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for order_status in order_statuses %}
                      <div class=\"checkbox\">
                        <label> {% if order_status.order_status_id in config_complete_status %}
                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"{{ order_status.order_status_id }}\" checked=\"checked\" />
                          {{ order_status.name }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"{{ order_status.order_status_id }}\" />
                          {{ order_status.name }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                    {% if error_complete_status %}
                    <div class=\"text-danger\">{{ error_complete_status }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"{{ help_fraud_status }}\">{{ entry_fraud_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      {% for order_status in order_statuses %}
                      {% if order_status.order_status_id == config_fraud_status_id %}                      
                      <option value=\"{{ order_status.order_status_id }}\" selected=\"selected\">{{ order_status.name }}</option>                      
                      {% else %}                      
                      <option value=\"{{ order_status.order_status_id }}\">{{ order_status.name }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"{{ help_api }}\">{{ entry_api }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>                      
                      {% for api in apis %}
                      {% if api.api_id == config_api_id %}                      
                      <option value=\"{{ api.api_id }}\" selected=\"selected\">{{ api.username }}</option>                      
                      {% else %}                      
                      <option value=\"{{ api.api_id }}\">{{ api.username }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_stock }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_stock_display }}\">{{ entry_stock_display }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_stock_display %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_stock_display %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_stock_warning }}\">{{ entry_stock_warning }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_stock_warning %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_stock_warning %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_stock_checkout }}\">{{ entry_stock_checkout }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_stock_checkout %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_stock_checkout %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_affiliate }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">{{ entry_affiliate_group }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      {% for customer_group in customer_groups %}
                      {% if customer_group.customer_group_id == config_affiliate_group_id %}                      
                      <option value=\"{{ customer_group.customer_group_id }}\" selected=\"selected\">{{ customer_group.name }}</option>                      
                      {% else %}                      
                      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate_approval }}\">{{ entry_affiliate_approval }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_affiliate_approval %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_affiliate_approval %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate_auto }}\">{{ entry_affiliate_auto }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_affiliate_auto %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_affiliate_auto %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate_commission }}\">{{ entry_affiliate_commission }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"{{ config_affiliate_commission }}\" placeholder=\"{{ entry_affiliate_commission }}\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate }}\">{{ entry_affiliate }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>                      
                      {% for information in informations %}
                      {% if information.information_id == config_affiliate_id %}                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>                      
                      {% else %}                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_return }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"{{ help_return }}\">{{ entry_return }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>                      
                      {% for information in informations %}
                      {% if information.information_id == config_return_id %}                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>                      
                      {% else %}                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"{{ help_return_status }}\">{{ entry_return_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      {% for return_status in return_statuses %}
                      {% if return_status.return_status_id == config_return_status_id %}                      
                      <option value=\"{{ return_status.return_status_id }}\" selected=\"selected\">{{ return_status.name }}</option>                      
                      {% else %}                      
                      <option value=\"{{ return_status.return_status_id }}\">{{ return_status.name }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_captcha }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_captcha }}\">{{ entry_captcha }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">{{ text_none }}</option>                      
                      {% for captcha in captchas %}
                      {% if captcha.value == config_captcha %}                      
                      <option value=\"{{ captcha.value }}\" selected=\"selected\">{{ captcha.text }}</option>                      
                      {% else %}                      
                      <option value=\"{{ captcha.value }}\">{{ captcha.text }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_captcha_page }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for captcha_page in captcha_pages %}
                      <div class=\"checkbox\">
                        <label> {% if captcha_page.value in config_captcha_page %}
                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"{{ captcha_page.value }}\" checked=\"checked\" />
                          {{ captcha_page.text }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"{{ captcha_page.value }}\" />
                          {{ captcha_page.text }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">{{ entry_logo }}</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ logo }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"{{ config_logo }}\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"{{ help_icon }}\">{{ entry_icon }}</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ icon }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"{{ config_icon }}\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_engine }}\">{{ entry_mail_engine }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      {% if config_mail_engine == 'mail' %}                      
                      <option value=\"mail\" selected=\"selected\">{{ text_mail }}</option>                      
                      {% else %}                      
                      <option value=\"mail\">{{ text_mail }}</option>                      
                      {% endif %}
                      {% if config_mail_engine == 'smtp' %}                      
                      <option value=\"smtp\" selected=\"selected\">{{ text_smtp }}</option>                      
                      {% else %}                      
                      <option value=\"smtp\">{{ text_smtp }}</option>                      
                      {% endif %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_parameter }}\">{{ entry_mail_parameter }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"{{ config_mail_parameter }}\" placeholder=\"{{ entry_mail_parameter }}\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_smtp_hostname }}\">{{ entry_mail_smtp_hostname }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"{{ config_mail_smtp_hostname }}\" placeholder=\"{{ entry_mail_smtp_hostname }}\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">{{ entry_mail_smtp_username }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"{{ config_mail_smtp_username }}\" placeholder=\"{{ entry_mail_smtp_username }}\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_smtp_password }}\">{{ entry_mail_smtp_password }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"{{ config_mail_smtp_password }}\" placeholder=\"{{ entry_mail_smtp_password }}\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">{{ entry_mail_smtp_port }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"{{ config_mail_smtp_port }}\" placeholder=\"{{ entry_mail_smtp_port }}\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">{{ entry_mail_smtp_timeout }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"{{ config_mail_smtp_timeout }}\" placeholder=\"{{ entry_mail_smtp_timeout }}\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_mail_alert }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_alert }}\">{{ entry_mail_alert }}</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for mail_alert in mail_alerts %}
                      <div class=\"checkbox\">
                        <label> {% if mail_alert.value in config_mail_alert %}
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"{{ mail_alert.value }}\" checked=\"checked\" />
                          {{ mail_alert.text }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"{{ mail_alert.value }}\" />
                          {{ mail_alert.text }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_alert_email }}\">{{ entry_mail_alert_email }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"{{ entry_mail_alert_email }}\" id=\"input-alert-email\" class=\"form-control\">{{ config_mail_alert_email }}</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_maintenance }}\">{{ entry_maintenance }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_maintenance %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_maintenance %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_seo_url }}\">{{ entry_seo_url }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_seo_url %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_seo_url %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"{{ help_robots }}\">{{ entry_robots }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"{{ entry_robots }}\" id=\"input-robots\" class=\"form-control\">{{ config_robots }}</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"{{ help_compression }}\">{{ entry_compression }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"{{ config_compression }}\" placeholder=\"{{ entry_compression }}\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_security }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_secure }}\">{{ entry_secure }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_secure %}
                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_secure %}
                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_password }}\">{{ entry_password }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_password %}
                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_password %}
                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_shared }}\">{{ entry_shared }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_shared %}
                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_shared %}
                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"{{ help_encryption }}\">{{ entry_encryption }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"{{ entry_encryption }}\" id=\"input-encryption\" class=\"form-control\">{{ config_encryption }}</textarea>
                    {% if error_encryption %}
                    <div class=\"text-danger\">{{ error_encryption }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_upload }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"{{ help_file_max_size }}\">{{ entry_file_max_size }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"{{ config_file_max_size }}\" placeholder=\"{{ entry_file_max_size }}\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"{{ help_file_ext_allowed }}\">{{ entry_file_ext_allowed }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"{{ entry_file_ext_allowed }}\" id=\"input-file-ext-allowed\" class=\"form-control\">{{ config_file_ext_allowed }}</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"{{ help_file_mime_allowed }}\">{{ entry_file_mime_allowed }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"{{ entry_file_mime_allowed }}\" id=\"input-file-mime-allowed\" class=\"form-control\">{{ config_file_mime_allowed }}</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_error }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_error_display }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_error_display %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_error_display %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_error_log }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_error_log %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_error_log %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      {{ text_no }}
                      {% endif %}</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">{{ entry_error_filename }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"{{ config_error_filename }}\" placeholder=\"{{ entry_error_filename }}\" id=\"input-error-filename\" class=\"form-control\" />
                    {% if error_log %}
                    <div class=\"text-danger\">{{ error_log }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">{{ text_select }}</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">{{ text_none }}</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
{{ footer }} 
", "setting/setting.twig", "");
    }
}
