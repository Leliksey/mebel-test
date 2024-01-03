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

/* mebel/template/common/menu.twig */
class __TwigTemplate_864ac4ee53b39de3c2075174532e2e7d58d353a3045f759c5176d749244fdf13 extends Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 3
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 3)) {
                    // line 4
                    echo "\t\t\t<li class=\"dropdown header-bottom__catalog-item\">
\t\t\t\t<a href=\"";
                    // line 5
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 5);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5);
                    echo "</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<div class=\"dropdown-inner\">
\t\t\t\t\t\t";
                    // line 8
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 8), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 9
                        echo "\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
                        // line 10
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 11
                            echo "\t\t\t\t\t\t\t\t<li class=\"header-bottom__catalog-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 12
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 12);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 12);
                            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 15
                        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"header-bottom__catalog-link\" href=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 18);
                    echo "\" class=\"see-all\">";
                    echo ($context["text_all"] ?? null);
                    echo "
\t\t\t\t\t";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19);
                    echo "</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t<li class=\"header-bottom__catalog-item\">
\t\t\t\t\t<a class=\"header-bottom__catalog-link\" href=\"";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 24);
                    echo "\">
                    <img src=\"";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 25);
                    echo "\" alt=\"\">
                    ";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
                    echo "</a>
\t\t\t\t</li>
\t\t";
                }
                // line 29
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "mebel/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 29,  117 => 26,  113 => 25,  109 => 24,  106 => 23,  99 => 19,  93 => 18,  90 => 17,  83 => 15,  72 => 12,  69 => 11,  65 => 10,  62 => 9,  58 => 8,  50 => 5,  47 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if categories %}
\t{% for category in categories %}
\t\t{% if category.children %}
\t\t\t<li class=\"dropdown header-bottom__catalog-item\">
\t\t\t\t<a href=\"{{ category.href }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ category.name }}</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<div class=\"dropdown-inner\">
\t\t\t\t\t\t{% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t{% for child in children %}
\t\t\t\t\t\t\t\t<li class=\"header-bottom__catalog-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ child.href }}\">{{ child.name }}</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"header-bottom__catalog-link\" href=\"{{ category.href }}\" class=\"see-all\">{{ text_all }}
\t\t\t\t\t{{ category.name }}</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"header-bottom__catalog-item\">
\t\t\t\t\t<a class=\"header-bottom__catalog-link\" href=\"{{ category.href }}\">
                    <img src=\"{{ category.image }}\" alt=\"\">
                    {{ category.name }}</a>
\t\t\t\t</li>
\t\t{% endif %}
\t{% endfor %}
{% endif %}
", "mebel/template/common/menu.twig", "");
    }
}
