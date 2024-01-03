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

/* mebel/template/extension/module/category.twig */
class __TwigTemplate_71f9fe416aca564538abe472301a1a9a7550616b0a0201b3837a2301e99fc8f4 extends Template
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
        // line 21
        echo "
<section class=\"catalog\">
\t<div class=\"container\">
\t\t<div class=\"sectionTitle\">Наш каталог</div>
\t\t<div class=\"catalog__content\">
\t\t\t<ul class=\"catalog__list\">
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "      ";
            // line 29
            echo "\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
            echo "\" class=\"catalog__link\">
\t\t\t\t\t\t<img src=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 31);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
            echo "\" class=\"catalog__img\">
\t\t\t\t\t\t<span class=\"catalog__name\">";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32);
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
        ";
            // line 36
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "mebel/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 37,  70 => 36,  64 => 32,  58 => 31,  54 => 30,  51 => 29,  49 => 28,  45 => 27,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{# <div class=\"list-group\">
\t{% for category in categories %}
\t\t{% if category.category_id == category_id %}
\t\t\t<a href=\"{{ category.href }}\" class=\"list-group-item active\">{{ category.name }}</a>
\t\t\t{% if category.children %}
\t\t\t\t{% for child in category.children %}
\t\t\t\t\t{% if child.category_id == child_id %}
\t\t\t\t\t\t<a href=\"{{ child.href }}\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;-
\t\t\t\t\t\t\t{{ child.name }}</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{ child.href }}\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;-
\t\t\t\t\t\t\t{{ child.name }}</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t{% else %}
\t\t\t<a href=\"{{ category.href }}\" class=\"list-group-item\">{{ category.name }}</a>
\t\t{% endif %}
\t{% endfor %}
</div> #}

<section class=\"catalog\">
\t<div class=\"container\">
\t\t<div class=\"sectionTitle\">Наш каталог</div>
\t\t<div class=\"catalog__content\">
\t\t\t<ul class=\"catalog__list\">
      {% for category in categories %}
      {# {% if category.category_id == category_id %} #}
\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t<a href=\"{{ category.href }}\" class=\"catalog__link\">
\t\t\t\t\t\t<img src=\"{{ category.image }}\" alt=\"{{ category.name }}\" class=\"catalog__img\">
\t\t\t\t\t\t<span class=\"catalog__name\">{{ category.name }}</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
        {# {% endif %} #}
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t</div>
</section>
", "mebel/template/extension/module/category.twig", "");
    }
}
