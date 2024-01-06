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
class __TwigTemplate_fd952fd9bc40e0c16cdfa2ab3eff7f20f5ed8945f7db9315fd196eafa6c1ac43 extends Template
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
\t<button type=\"button\" class=\"header__link\">
\t\t<img src=\"catalog/view/theme/mebel/assets/images/basket.png\" alt=\"search\">
\t</button>
\t<div class=\"header__count\">";
        // line 5
        echo ($context["text_items"] ?? null);
        echo "</div>
</li>

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
\t<button type=\"button\" class=\"header__link\">
\t\t<img src=\"catalog/view/theme/mebel/assets/images/basket.png\" alt=\"search\">
\t</button>
\t<div class=\"header__count\">{{ text_items }}</div>
</li>

", "mebel/template/common/cart.twig", "");
    }
}
