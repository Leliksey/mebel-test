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

/* mebel/template/common/cart.twig */
class __TwigTemplate_0c55554188d02d46c390faf9e22c405b78b312ec52c65baffb70b6c55fd66e19 extends Template
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
        echo "<li class=\"header__item\" data-toggle=\"modal\" data-target=\"#modal-cart\">
\t<a href=\"#\" class=\"header__link\">
\t\t<img src=\"catalog/view/theme/mebel/assets/images/basket.png\" alt=\"search\">
\t</a>
\t<div class=\"header__count\">";
        // line 5
        echo ($context["text_items"] ?? null);
        echo "</div>
</li>
<!-- Modal -->
<div class=\"modal fade\" id=\"modal-cart\" tabindex=\"-1\" aria-labelledby=\"modal-cartl-Label\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"modal-cart-Label\">";
        // line 12
        echo ($context["text_title"] ?? null);
        echo "</h5>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"in-cart\">
\t\t\t\t\t";
        // line 19
        if (($context["products"] ?? null)) {
            // line 20
            echo "\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
                echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 31));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t-<small>";
                        // line 33
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 33);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 33);
                        echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t-<small>";
                    // line 38
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 38);
                    echo "<small>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t\t\t\t\t</td>
                                            <td>";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41);
                echo "<td>
                                            <td>";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 42);
                echo "</td>
                                            <td>";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 43);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
                <table class=\"table table-bordered\">
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 57
            echo "                    <tr>
                        <td class=\"text-right\"><strong>";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 58);
            echo "</strong></td>
                        <td class=\"text-right\">";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 59);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </table>
\t\t\t\t<a href=\"";
        // line 63
        echo ($context["cart"] ?? null);
        echo "\" class=\"btn btn-secondary\">";
        echo ($context["text_cart"] ?? null);
        echo "</a>
\t\t\t\t<a href=\"";
        // line 64
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mebel/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 64,  189 => 63,  186 => 62,  177 => 59,  173 => 58,  170 => 57,  166 => 56,  160 => 52,  154 => 50,  148 => 46,  139 => 43,  135 => 42,  131 => 41,  128 => 40,  121 => 38,  118 => 37,  115 => 36,  112 => 35,  102 => 33,  99 => 32,  94 => 31,  92 => 30,  86 => 29,  78 => 26,  74 => 24,  70 => 23,  65 => 20,  63 => 19,  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"header__item\" data-toggle=\"modal\" data-target=\"#modal-cart\">
\t<a href=\"#\" class=\"header__link\">
\t\t<img src=\"catalog/view/theme/mebel/assets/images/basket.png\" alt=\"search\">
\t</a>
\t<div class=\"header__count\">{{ text_items }}</div>
</li>
<!-- Modal -->
<div class=\"modal fade\" id=\"modal-cart\" tabindex=\"-1\" aria-labelledby=\"modal-cartl-Label\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"modal-cart-Label\">{{ text_title }}</h5>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"in-cart\">
\t\t\t\t\t{% if products %}
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\">{{ product.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% if product.option %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for option in product.option %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t-<small>{{ option.name }} {{ option.value}}</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if product.recurring %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t-<small>{{ text_recurring }} {{ product.recurring }}<small>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</td>
                                            <td>{{ product. quantity }}<td>
                                            <td>{{ product.price }}</td>
                                            <td>{{ product. total }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>{{ text_empty }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
                <table class=\"table table-bordered\">
                    {% for total in totals %}
                    <tr>
                        <td class=\"text-right\"><strong>{{ total.title }}</strong></td>
                        <td class=\"text-right\">{{ total.text }}</td>
                    </tr>
                    {% endfor %}
                </table>
\t\t\t\t<a href=\"{{ cart }}\" class=\"btn btn-secondary\">{{ text_cart }}</a>
\t\t\t\t<a href=\"{{ checkout }}\" class=\"btn btn-primary\">{{ text_checkout }}</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "mebel/template/common/cart.twig", "");
    }
}
