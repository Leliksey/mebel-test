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

/* common/column_left.twig */
class __TwigTemplate_0b74b9df4e4c0ff424dc8af9ef6911af6634fb8746d1bff84c5fcb36f3fb397b extends Template
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
        echo "<nav id=\"column-left\">
  <div id=\"navigation\"><span class=\"fa fa-bars\"></span> ";
        // line 2
        echo ($context["text_navigation"] ?? null);
        echo "</div>
  <ul id=\"menu\">
    ";
        // line 4
        $context["i"] = 0;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            echo "    <li id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 6);
            echo "\">
        ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 7)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 7);
                echo "\"><i class=\"fa ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 7);
                echo " fw\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 7);
                echo "</a>";
            } else {
                echo "<a href=\"#collapse";
                echo ($context["i"] ?? null);
                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fa ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 7);
                echo " fw\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 7);
                echo "</a>";
            }
            // line 8
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 8)) {
                // line 9
                echo "          <ul id=\"collapse";
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse\">
            ";
                // line 10
                $context["j"] = 0;
                // line 11
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 12
                    echo "              <li>";
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 12)) {
                        // line 13
                        echo "                  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 13);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 13);
                        echo "</a>
                ";
                    } else {
                        // line 15
                        echo "                  <a href=\"#collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 15);
                        echo "</a>
                ";
                    }
                    // line 17
                    echo "
                ";
                    // line 18
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 18)) {
                        // line 19
                        echo "                  <ul id=\"collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" class=\"collapse\">
                    ";
                        // line 20
                        $context["k"] = 0;
                        // line 21
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 21));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 22
                            echo "                      <li>";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 22)) {
                                // line 23
                                echo "                          <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 23);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 23);
                                echo "</a>
                        ";
                            } else {
                                // line 25
                                echo "                          <a href=\"#collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 25);
                                echo "</a>
                        ";
                            }
                            // line 27
                            echo "                        ";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 27)) {
                                // line 28
                                echo "                          <ul id=\"collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\" class=\"collapse\">
                            ";
                                // line 29
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 29));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 30
                                    echo "                              <li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "href", [], "any", false, false, false, 30);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "name", [], "any", false, false, false, 30);
                                    echo "</a></li>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 32
                                echo "                          </ul>
                        ";
                            }
                            // line 33
                            echo "</li>
                      ";
                            // line 34
                            $context["k"] = (($context["k"] ?? null) + 1);
                            // line 35
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 36
                        echo "                  </ul>
                ";
                    }
                    // line 37
                    echo " </li>
              ";
                    // line 38
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 39
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "          </ul>
        ";
            }
            // line 42
            echo "      </li>
    ";
            // line 43
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </ul>
  <div id=\"stats\">
    <ul>
      <li>
        <div>";
        // line 49
        echo ($context["text_complete_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["complete_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 51
        echo ($context["complete_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["complete_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["complete_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 55
        echo ($context["text_processing_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["processing_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
        // line 57
        echo ($context["processing_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["processing_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["processing_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 61
        echo ($context["text_other_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["other_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
        // line 63
        echo ($context["other_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["other_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["other_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 63,  267 => 61,  256 => 57,  249 => 55,  238 => 51,  231 => 49,  225 => 45,  219 => 44,  217 => 43,  214 => 42,  210 => 40,  204 => 39,  202 => 38,  199 => 37,  195 => 36,  189 => 35,  187 => 34,  184 => 33,  180 => 32,  169 => 30,  165 => 29,  156 => 28,  153 => 27,  141 => 25,  133 => 23,  130 => 22,  125 => 21,  123 => 20,  116 => 19,  114 => 18,  111 => 17,  101 => 15,  93 => 13,  90 => 12,  85 => 11,  83 => 10,  78 => 9,  75 => 8,  57 => 7,  52 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"column-left\">
  <div id=\"navigation\"><span class=\"fa fa-bars\"></span> {{ text_navigation }}</div>
  <ul id=\"menu\">
    {% set i = 0 %}
    {% for menu in menus %}
    <li id=\"{{ menu.id }}\">
        {% if menu.href %}<a href=\"{{ menu.href }}\"><i class=\"fa {{ menu.icon }} fw\"></i> {{ menu.name }}</a>{% else %}<a href=\"#collapse{{ i }}\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fa {{ menu.icon }} fw\"></i> {{ menu.name }}</a>{% endif %}
        {% if menu.children %}
          <ul id=\"collapse{{ i }}\" class=\"collapse\">
            {% set j = 0 %}
            {% for children_1 in menu.children %}
              <li>{% if children_1.href %}
                  <a href=\"{{ children_1.href }}\">{{ children_1.name }}</a>
                {% else %}
                  <a href=\"#collapse{{ i }}-{{ j }}\" data-toggle=\"collapse\" class=\"parent collapsed\">{{ children_1.name }}</a>
                {% endif %}

                {% if children_1.children %}
                  <ul id=\"collapse{{ i }}-{{ j }}\" class=\"collapse\">
                    {% set k = 0 %}
                    {% for children_2 in children_1.children %}
                      <li>{% if children_2.href %}
                          <a href=\"{{ children_2.href }}\">{{ children_2.name }}</a>
                        {% else %}
                          <a href=\"#collapse-{{ i }}-{{ j }}-{{ k }}\" data-toggle=\"collapse\" class=\"parent collapsed\">{{ children_2.name }}</a>
                        {% endif %}
                        {% if children_2.children %}
                          <ul id=\"collapse-{{ i }}-{{ j }}-{{ k }}\" class=\"collapse\">
                            {% for children_3 in children_2.children %}
                              <li><a href=\"{{ children_3.href }}\">{{ children_3.name }}</a></li>
                            {% endfor %}
                          </ul>
                        {% endif %}</li>
                      {% set k = k + 1 %}
                    {% endfor %}
                  </ul>
                {% endif %} </li>
              {% set j = j + 1 %}
            {% endfor %}
          </ul>
        {% endif %}
      </li>
    {% set i = i + 1 %}
    {% endfor %}
  </ul>
  <div id=\"stats\">
    <ul>
      <li>
        <div>{{ text_complete_status }} <span class=\"pull-right\">{{ complete_status }}%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"{{ complete_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ complete_status }}%\"> <span class=\"sr-only\">{{ complete_status }}%</span></div>
        </div>
      </li>
      <li>
        <div>{{ text_processing_status }} <span class=\"pull-right\">{{ processing_status }}%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"{{ processing_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ processing_status }}%\"> <span class=\"sr-only\">{{ processing_status }}%</span></div>
        </div>
      </li>
      <li>
        <div>{{ text_other_status }} <span class=\"pull-right\">{{ other_status }}%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"{{ other_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ other_status }}%\"> <span class=\"sr-only\">{{ other_status }}%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
", "common/column_left.twig", "");
    }
}
