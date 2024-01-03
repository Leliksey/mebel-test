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
class __TwigTemplate_8403f160e49d62b0c0ea0bfa35a972a9ee9bc5b7b08dfe6450e9a768f76358bd extends Template
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
                echo "    <pre>
        ";
                // line 4
                echo twig_var_dump($this->env, $context, ...[0 => ($context["categories"] ?? null)]);
                echo "
    </pre>
\t\t";
                // line 6
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "\t\t\t<li class=\"dropdown header-bottom__catalog-item\">
\t\t\t\t<a href=\"";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 8);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8);
                    echo "</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<div class=\"dropdown-inner\">
\t\t\t\t\t\t";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 11), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 12
                        echo "\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
                        // line 13
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 14
                            echo "\t\t\t\t\t\t\t\t<li class=\"header-bottom__catalog-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 15
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 15);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 15);
                            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 18
                        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"header-bottom__catalog-link\" href=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                    echo "\" class=\"see-all\">";
                    echo ($context["text_all"] ?? null);
                    echo "
\t\t\t\t\t";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
                    echo "</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t<li class=\"header-bottom__catalog-item\">
\t\t\t\t\t<a class=\"header-bottom__catalog-link\" href=\"";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 27);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27);
                    echo "</a>
\t\t\t\t</li>
\t\t";
                }
                // line 30
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
        return array (  124 => 30,  116 => 27,  113 => 26,  106 => 22,  100 => 21,  97 => 20,  90 => 18,  79 => 15,  76 => 14,  72 => 13,  69 => 12,  65 => 11,  57 => 8,  54 => 7,  52 => 6,  47 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if categories %}
\t{% for category in categories %}
    <pre>
        {{ dump(categories) }}
    </pre>
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
\t\t\t\t\t<a class=\"header-bottom__catalog-link\" href=\"{{ category.href }}\">{{ category.name }}</a>
\t\t\t\t</li>
\t\t{% endif %}
\t{% endfor %}
{% endif %}
", "mebel/template/common/menu.twig", "");
    }
}
