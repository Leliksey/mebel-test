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

/* mebel/template/common/header.twig */
class __TwigTemplate_6103eea849efbe2422c3127dd822af3d1dc7f0530ee70036fe8256b28f10ff30 extends Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
\t<html
\tdir=\"";
        // line 7
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"> <!--<![endif]-->
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
\t\t<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 17
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 20
        echo "\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\"/>
\t\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
\t\t<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css\" rel=\"stylesheet\"/>
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/owlcarousel/owl.theme.default.min.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/owlcarousel/owl.carousel.min.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/slick/slick-theme.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/slick/slick.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:wght@500;600&display=swap\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/app.css\">
\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 36
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 36);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 36);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 36);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 39
            echo "\t\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 42
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 42);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 42);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 45
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t</head>
\t<body>
\t\t<header class=\"header\">
\t\t\t<div class=\"header-top\">
\t\t\t\t<ul class=\"header__menu_mobile\">
\t\t\t\t\t<!--<li class=\"header__menu-item active\">
\t\t\t\t\t\t<a href=\"about.html\" class=\"header__menu-link\">О нас</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Контакты</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Наши магазины</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Доставка</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Оплата</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Акции</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Гарантии</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Отзывы</a>
\t\t\t\t\t</li>-->
\t\t\t\t\t";
        // line 76
        echo ($context["top_menu"] ?? null);
        echo "
\t\t\t\t</ul>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"header-top__content\">
\t\t\t\t\t\t<ul class=\"header__menu\">
\t\t\t\t\t\t\t<!--<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"about.html\" class=\"header__menu-link\">О нас</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Контакты</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Наши магазины</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Доставка</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Оплата</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Акции</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Гарантии</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Отзывы</a>
\t\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t\t";
        // line 105
        echo ($context["top_menu"] ?? null);
        echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"header__burger\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/burger.png\" alt=\"menu\" class=\"\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/close.png\" alt=\"close\" class=\"hide\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header__setting\">
\t\t\t\t\t\t\t<div class=\"header__setting-location\">
\t\t\t\t\t\t\t\t<span>Ваш город:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<select name=\"location\" id=\"location\">
\t\t\t\t\t\t\t\t\t<option value=\"Запоріжжя\">Запоріжжя</option>
\t\t\t\t\t\t\t\t\t<option value=\"Киев\">Киев</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"header__setting-lang\">
\t\t\t\t\t\t\t\t";
        // line 121
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"header__icons\">
\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t<li class=\"header__item header__item-search\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"header__link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/search.png\" alt=\"search\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__item\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"header__link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/compare.png\" alt=\"search\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__item\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"header__link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/favorite.png\" alt=\"search\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 147
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"header-middle\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"header-middle__content\">
          ";
        // line 155
        if (($context["logo"] ?? null)) {
            // line 156
            echo "\t\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"logo header__logo\">
\t\t\t\t\t\t\t<img src=\"";
            // line 157
            echo ($context["logo"] ?? null);
            echo "\" alt=\"logo\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\">
\t\t\t\t\t\t</a>
            ";
        } else {
            // line 160
            echo "            <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
            ";
        }
        // line 162
        echo "\t\t\t\t\t\t<div class=\"header-middle__right\">
\t\t\t\t\t\t\t<div class=\"header-middle__contacts\">
\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t<source media=\"(max-width:768px)\" srcset=\"images/headphone_mobile.png\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/headphone.png\" alt=\"\">
\t\t\t\t\t\t\t\t</picture>

\t\t\t\t\t\t\t\t<div class=\"header-middle__tel\">
\t\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 170
        echo ($context["telephone"] ?? null);
        echo "\">";
        echo ($context["telephone"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 171
        echo ($context["telephone2"] ?? null);
        echo "\">";
        echo ($context["telephone2"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"custom-button header-middle__custom-button popup__button popup__button_manager\">Перезвонить вам?</div>
\t\t\t\t\t\t\t<div class=\"header-middle__search\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input header-middle__input\" placeholder=\"Поиск\">
\t\t\t\t\t\t\t\t<div class=\"header-middle__input-icon\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/search.png\" alt=\"search\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"header-middle__icons\">
\t\t\t\t\t\t\t\t<ul class=\"header__icons\">
\t\t\t\t\t\t\t\t\t<li class=\"header__item\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"header__link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/compare.png\" alt=\"search\">
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"header__item\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"header__link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/favorite.png\" alt=\"search\">
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 193
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"header-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"header-bottom__content\">
\t\t\t\t\t\t<div class=\"header-bottom__catalog__button\">
\t\t\t\t\t\t\t<button class=\"custom-button header-bottom__custom-button\" type=\"button\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/burger.png\" alt=\"\">
\t\t\t\t\t\t\t\t<span>КАТАЛОГ ТОВАРОВ</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"header-bottom__catalog\">
                ";
        // line 212
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-bottom__category-group\">
\t\t\t\t\t\t\t<ul class=\"header-bottom__category\">
\t\t\t\t\t\t\t\t";
        // line 223
        echo "                ";
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"header-bottom__category-button\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/arrow.png\" alt=\"next\">
\t\t\t\t\t\t\t\t<span>Далее</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
";
    }

    public function getTemplateName()
    {
        return "mebel/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 223,  373 => 212,  351 => 193,  324 => 171,  318 => 170,  308 => 162,  300 => 160,  290 => 157,  285 => 156,  283 => 155,  273 => 147,  250 => 121,  231 => 105,  199 => 76,  168 => 47,  159 => 45,  154 => 44,  143 => 42,  138 => 41,  129 => 39,  124 => 38,  111 => 36,  107 => 35,  90 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  55 => 7,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"{{ direction }}\" lang=\"{{ lang }}\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"{{ direction }}\" lang=\"{{ lang }}\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
\t<html
\tdir=\"{{ direction }}\" lang=\"{{ lang }}\"> <!--<![endif]-->
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>{{ title }}</title>
\t\t<base href=\"{{ base }}\"/>
\t\t{% if description %}
\t\t\t<meta name=\"description\" content=\"{{ description }}\"/>
\t\t{% endif %}
\t\t{% if keywords %}
\t\t\t<meta name=\"keywords\" content=\"{{ keywords }}\"/>
\t\t{% endif %}
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\"/>
\t\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
\t\t<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css\" rel=\"stylesheet\"/>
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/owlcarousel/owl.theme.default.min.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/owlcarousel/owl.carousel.min.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/slick/slick-theme.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/slick/slick.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:wght@500;600&display=swap\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/app.css\">
\t\t{% for style in styles %}
\t\t\t<link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
\t\t{% endfor %}
\t\t{% for script in scripts %}
\t\t\t<script src=\"{{ script }}\" type=\"text/javascript\"></script>
\t\t{% endfor %}
\t\t{% for link in links %}
\t\t\t<link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
\t\t{% endfor %}
\t\t{% for analytic in analytics %}
\t\t\t{{ analytic }}
\t\t{% endfor %}
\t</head>
\t<body>
\t\t<header class=\"header\">
\t\t\t<div class=\"header-top\">
\t\t\t\t<ul class=\"header__menu_mobile\">
\t\t\t\t\t<!--<li class=\"header__menu-item active\">
\t\t\t\t\t\t<a href=\"about.html\" class=\"header__menu-link\">О нас</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Контакты</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Наши магазины</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Доставка</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Оплата</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Акции</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Гарантии</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Отзывы</a>
\t\t\t\t\t</li>-->
\t\t\t\t\t{{ top_menu }}
\t\t\t\t</ul>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"header-top__content\">
\t\t\t\t\t\t<ul class=\"header__menu\">
\t\t\t\t\t\t\t<!--<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"about.html\" class=\"header__menu-link\">О нас</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Контакты</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Наши магазины</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Доставка</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Оплата</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Акции</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Гарантии</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__menu-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header__menu-link\">Отзывы</a>
\t\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t\t{{ top_menu }}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"header__burger\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/burger.png\" alt=\"menu\" class=\"\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/close.png\" alt=\"close\" class=\"hide\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header__setting\">
\t\t\t\t\t\t\t<div class=\"header__setting-location\">
\t\t\t\t\t\t\t\t<span>Ваш город:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<select name=\"location\" id=\"location\">
\t\t\t\t\t\t\t\t\t<option value=\"Запоріжжя\">Запоріжжя</option>
\t\t\t\t\t\t\t\t\t<option value=\"Киев\">Киев</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"header__setting-lang\">
\t\t\t\t\t\t\t\t{{ language }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"header__icons\">
\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t<li class=\"header__item header__item-search\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"header__link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/search.png\" alt=\"search\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__item\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"header__link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/compare.png\" alt=\"search\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header__item\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"header__link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/favorite.png\" alt=\"search\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{# <li class=\"header__item\" data-toggle=\"modal\" data-target=\"#modal-cart\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"header__link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/basket.png\" alt=\"search\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"header__count\">4</div>
\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"header-middle\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"header-middle__content\">
          {% if logo %}
\t\t\t\t\t\t<a href=\"{{ home }}\" class=\"logo header__logo\">
\t\t\t\t\t\t\t<img src=\"{{ logo }}\" alt=\"logo\" title=\"{{ name }}\" alt=\"{{ name }}\">
\t\t\t\t\t\t</a>
            {% else %}
            <h1><a href=\"{{ home }}\">{{ name }}</a></h1>
            {% endif %}
\t\t\t\t\t\t<div class=\"header-middle__right\">
\t\t\t\t\t\t\t<div class=\"header-middle__contacts\">
\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t<source media=\"(max-width:768px)\" srcset=\"images/headphone_mobile.png\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/headphone.png\" alt=\"\">
\t\t\t\t\t\t\t\t</picture>

\t\t\t\t\t\t\t\t<div class=\"header-middle__tel\">
\t\t\t\t\t\t\t\t\t<a href=\"tel:{{ telephone }}\">{{ telephone }}</a>
\t\t\t\t\t\t\t\t\t<a href=\"tel:{{ telephone2 }}\">{{ telephone2 }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"custom-button header-middle__custom-button popup__button popup__button_manager\">Перезвонить вам?</div>
\t\t\t\t\t\t\t<div class=\"header-middle__search\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input header-middle__input\" placeholder=\"Поиск\">
\t\t\t\t\t\t\t\t<div class=\"header-middle__input-icon\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/search.png\" alt=\"search\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"header-middle__icons\">
\t\t\t\t\t\t\t\t<ul class=\"header__icons\">
\t\t\t\t\t\t\t\t\t<li class=\"header__item\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"header__link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/compare.png\" alt=\"search\">
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"header__item\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"header__link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/favorite.png\" alt=\"search\">
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{{ cart }}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"header-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"header-bottom__content\">
\t\t\t\t\t\t<div class=\"header-bottom__catalog__button\">
\t\t\t\t\t\t\t<button class=\"custom-button header-bottom__custom-button\" type=\"button\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/burger.png\" alt=\"\">
\t\t\t\t\t\t\t\t<span>КАТАЛОГ ТОВАРОВ</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"header-bottom__catalog\">
                {{ menu }}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-bottom__category-group\">
\t\t\t\t\t\t\t<ul class=\"header-bottom__category\">
\t\t\t\t\t\t\t\t{# <li class=\"header-bottom__category-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"header-bottom__category-link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/category1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span>Диваны</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li> #}
                {{ menu }}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"header-bottom__category-button\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/arrow.png\" alt=\"next\">
\t\t\t\t\t\t\t\t<span>Далее</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
", "mebel/template/common/header.twig", "");
    }
}
