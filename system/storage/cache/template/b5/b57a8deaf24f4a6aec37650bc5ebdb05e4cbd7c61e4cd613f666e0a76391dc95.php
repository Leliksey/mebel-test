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
class __TwigTemplate_f083d313c253eacff0d072a38e3a8b7b517e73c10a7a92112db3ce13c9acfc8f extends Template
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
            echo "\t\t\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"";
        // line 27
        echo ($context["cart"] ?? null);
        echo "\" class=\"btn btn-secondary\">";
        echo ($context["text_cart"] ?? null);
        echo "</a>
\t\t\t\t<a href=\"";
        // line 28
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
        return array (  86 => 28,  80 => 27,  74 => 23,  68 => 21,  65 => 20,  63 => 19,  53 => 12,  43 => 5,  37 => 1,);
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
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>{{ text_empty }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"{{ cart }}\" class=\"btn btn-secondary\">{{ text_cart }}</a>
\t\t\t\t<a href=\"{{ checkout }}\" class=\"btn btn-primary\">{{ text_checkout }}</a>
\t\t\t</div>

\t\t</div>
\t</div>
</div>
", "mebel/template/common/cart.twig", "");
    }
}
