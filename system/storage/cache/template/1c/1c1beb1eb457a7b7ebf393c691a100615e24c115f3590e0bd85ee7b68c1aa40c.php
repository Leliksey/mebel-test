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
class __TwigTemplate_992c51a31b3e302386cb4cb05c9033dd5f9a5116fa8b51031f6968cbb12b4fd9 extends Template
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
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"";
                    // line 6
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 6);
                    echo "\" alt=\"\">
                    ";
                    // line 7
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 7);
                    echo "</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<div class=\"dropdown-inner\">
\t\t\t\t\t\t";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 10), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 11
                        echo "\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
                        // line 12
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 13
                            echo "\t\t\t\t\t\t\t\t<li class=\"header-bottom__catalog-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 14
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 14);
                            echo "\">
                                    <img src=\"";
                            // line 15
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 15);
                            echo "\" alt=\"\">
                                    ";
                            // line 16
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 16);
                            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 19
                        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"header-bottom__catalog-link\" href=\"";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 22);
                    echo "\" class=\"see-all\">";
                    echo ($context["text_all"] ?? null);
                    echo "
\t\t\t\t\t<img src=\"";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 23);
                    echo "\" alt=\"\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23);
                    echo "</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
                } else {
                    // line 27
                    echo "\t\t\t\t<li class=\"header-bottom__catalog-item\">
\t\t\t\t\t<a class=\"header-bottom__catalog-link\" href=\"";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 28);
                    echo "\">
                    <img src=\"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 29);
                    echo "\" alt=\"\">
                    ";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                    echo "</a>
\t\t\t\t</li>
\t\t";
                }
                // line 33
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
        return array (  137 => 33,  131 => 30,  127 => 29,  123 => 28,  120 => 27,  111 => 23,  105 => 22,  102 => 21,  95 => 19,  86 => 16,  82 => 15,  78 => 14,  75 => 13,  71 => 12,  68 => 11,  64 => 10,  58 => 7,  54 => 6,  50 => 5,  47 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if categories %}
\t{% for category in categories %}
\t\t{% if category.children %}
\t\t\t<li class=\"dropdown header-bottom__catalog-item\">
\t\t\t\t<a href=\"{{ category.href }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"{{ category.icon }}\" alt=\"\">
                    {{ category.name }}</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<div class=\"dropdown-inner\">
\t\t\t\t\t\t{% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t{% for child in children %}
\t\t\t\t\t\t\t\t<li class=\"header-bottom__catalog-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ child.href }}\">
                                    <img src=\"{{ category.icon }}\" alt=\"\">
                                    {{ child.name }}</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"header-bottom__catalog-link\" href=\"{{ category.href }}\" class=\"see-all\">{{ text_all }}
\t\t\t\t\t<img src=\"{{ category.icon }}\" alt=\"\">{{ category.name }}</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"header-bottom__catalog-item\">
\t\t\t\t\t<a class=\"header-bottom__catalog-link\" href=\"{{ category.href }}\">
                    <img src=\"{{ category.icon }}\" alt=\"\">
                    {{ category.name }}</a>
\t\t\t\t</li>
\t\t{% endif %}
\t{% endfor %}
{% endif %}
", "mebel/template/common/menu.twig", "");
    }
}
