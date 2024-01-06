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
class __TwigTemplate_5ff6628927aeafc9f2ee6eed2075fd3e8a879d29dab13554a22b116a40a9c8f0 extends Template
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
\t\t\t\t<h5 class=\"modal-title\" id=\"modal-cart-Label\">Modal title</h5>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t...
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Save changes</button>
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
        return array (  43 => 5,  37 => 1,);
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
\t\t\t\t<h5 class=\"modal-title\" id=\"modal-cart-Label\">Modal title</h5>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t...
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Save changes</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "mebel/template/common/cart.twig", "");
    }
}
