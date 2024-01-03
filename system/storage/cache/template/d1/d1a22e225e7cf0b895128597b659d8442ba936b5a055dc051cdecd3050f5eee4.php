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
class __TwigTemplate_995e6af396f03e928ab2bc362c3e768ae2be7ed0868e658770732475f147338f extends Template
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
\t<div class=\"sectionTitle\">";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t<div class=\"catalog__content\">
\t\t<ul class=\"catalog__list\">
\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            echo "\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 28);
            echo "\" class=\"catalog__link\">
\t\t\t\t\t\t<img src=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 29);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
            echo "\" class=\"catalog__img\">
\t\t\t\t\t\t<span class=\"catalog__name\">";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t</ul>
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
        return array (  74 => 34,  64 => 30,  58 => 29,  54 => 28,  51 => 27,  47 => 26,  41 => 23,  37 => 21,);
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
\t<div class=\"sectionTitle\">{{ heading_title }}</div>
\t<div class=\"catalog__content\">
\t\t<ul class=\"catalog__list\">
\t\t\t{% for category in categories %}
\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t<a href=\"{{ category.href }}\" class=\"catalog__link\">
\t\t\t\t\t\t<img src=\"{{ category.image }}\" alt=\"{{ category.name }}\" class=\"catalog__img\">
\t\t\t\t\t\t<span class=\"catalog__name\">{{ category.name }}</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>
\t</div>
</section>
", "mebel/template/extension/module/category.twig", "");
    }
}
