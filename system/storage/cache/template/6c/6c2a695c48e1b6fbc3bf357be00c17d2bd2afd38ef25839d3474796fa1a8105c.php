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

/* mebel/template/extension/module/slideshow.twig */
class __TwigTemplate_cd805e86cff77226ed3c870e4524327f09ed4b35f3f637ff96af157564dec4f5 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 2
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 2);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "<section class=\"main\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"main__content\">
\t\t\t\t\t<div class=\"main__action hide\">
\t\t\t\t\t\t<button class=\"button main__action-button main__action-button_green\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/phone.png\" alt=\"\">
\t\t\t\t\t\t\t<span>Позвонить</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"button main__action-button main__action-button_violet\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/viber.png\" alt=\"\">
\t\t\t\t\t\t\t<span>Viber - чат</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"banners__top\">
\t\t\t\t\t\t<div class=\"banners__slider owl-carousel\">
\t\t\t\t\t\t\t<div class=\"banners__item banners__slider1\">
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__subtitle\">Новый взгляд на кухню</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__title\">Киевская<br>
\t\t\t\t\t\t\t\t\tмебельная фабрика</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__image\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<a href=\"category.html\" class=\"custom-button main__custom-button\">Купить</a>
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__item banners__slider1\">
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__subtitle\">Новый взгляд на кухню</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__title\">Киевская<br>
\t\t\t\t\t\t\t\t\tмебельная фабрика</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__image\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<button class=\"custom-button main__custom-button\">Купить</button>
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__item banners__slider1\">
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__subtitle\">Новый взгляд на кухню</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__title\">Киевская<br>
\t\t\t\t\t\t\t\t\tмебельная фабрика</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__image\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<button class=\"custom-button main__custom-button\">Купить</button>
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"banners__static\">
\t\t\t\t\t\t\t<div class=\"banners__static_mask\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/mask.png\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"banners__static_info\">
\t\t\t\t\t\t\t\t\t<span>под</span>
\t\t\t\t\t\t\t\t\t<span>0</span>
\t\t\t\t\t\t\t\t\t<span>%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__static_title\">Рассрочка</div>
\t\t\t\t\t\t\t<div class=\"banners__static_image\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"custom-button banners__static__custom-button\">
\t\t\t\t\t\t\t\tПодробнее
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"main__example hide\">
\t\t\t\t\t\t<ul class=\"main__example-list\">
\t\t\t\t\t\t\t<li class=\"main__example-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"main__example-link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/tkan.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span>Образцы тканей</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"main__example-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"main__example-link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/material.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span>Образцы материалов</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"main__example-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"main__example-link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/napolnitel.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span>Образцы наполнителя</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main__bottom_mobile hide\">
\t\t\t\t<div class=\"main__bottom_mobile-title\">Рассрочка платежей на весь ассортимент</div>
\t\t\t\t<div class=\"banners__static_info\">
\t\t\t\t\t<span>под</span>
\t\t\t\t\t<span>0</span>
\t\t\t\t\t<span>%</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
";
        // line 131
        echo "slideshow";
    }

    public function getTemplateName()
    {
        return "mebel/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 131,  71 => 4,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for banner in banners %}
    {{ loop.index }}
{% endfor %}
<section class=\"main\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"main__content\">
\t\t\t\t\t<div class=\"main__action hide\">
\t\t\t\t\t\t<button class=\"button main__action-button main__action-button_green\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/phone.png\" alt=\"\">
\t\t\t\t\t\t\t<span>Позвонить</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"button main__action-button main__action-button_violet\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/viber.png\" alt=\"\">
\t\t\t\t\t\t\t<span>Viber - чат</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"banners__top\">
\t\t\t\t\t\t<div class=\"banners__slider owl-carousel\">
\t\t\t\t\t\t\t<div class=\"banners__item banners__slider1\">
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__subtitle\">Новый взгляд на кухню</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__title\">Киевская<br>
\t\t\t\t\t\t\t\t\tмебельная фабрика</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__image\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<a href=\"category.html\" class=\"custom-button main__custom-button\">Купить</a>
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__item banners__slider1\">
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__subtitle\">Новый взгляд на кухню</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__title\">Киевская<br>
\t\t\t\t\t\t\t\t\tмебельная фабрика</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__image\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<button class=\"custom-button main__custom-button\">Купить</button>
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__item banners__slider1\">
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__subtitle\">Новый взгляд на кухню</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__title\">Киевская<br>
\t\t\t\t\t\t\t\t\tмебельная фабрика</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__image\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<button class=\"custom-button main__custom-button\">Купить</button>
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"banners__static\">
\t\t\t\t\t\t\t<div class=\"banners__static_mask\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/mask.png\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"banners__static_info\">
\t\t\t\t\t\t\t\t\t<span>под</span>
\t\t\t\t\t\t\t\t\t<span>0</span>
\t\t\t\t\t\t\t\t\t<span>%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__static_title\">Рассрочка</div>
\t\t\t\t\t\t\t<div class=\"banners__static_image\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"custom-button banners__static__custom-button\">
\t\t\t\t\t\t\t\tПодробнее
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"main__example hide\">
\t\t\t\t\t\t<ul class=\"main__example-list\">
\t\t\t\t\t\t\t<li class=\"main__example-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"main__example-link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/tkan.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span>Образцы тканей</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"main__example-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"main__example-link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/material.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span>Образцы материалов</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"main__example-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"main__example-link\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/napolnitel.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span>Образцы наполнителя</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main__bottom_mobile hide\">
\t\t\t\t<div class=\"main__bottom_mobile-title\">Рассрочка платежей на весь ассортимент</div>
\t\t\t\t<div class=\"banners__static_info\">
\t\t\t\t\t<span>под</span>
\t\t\t\t\t<span>0</span>
\t\t\t\t\t<span>%</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
{# <div class=\"slideshow swiper-viewport\">
  <div id=\"slideshow{{ module }}\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\"> {% for banner in banners %}
      <div class=\"swiper-slide text-center\">{% if banner.link %}<a href=\"{{ banner.link }}\"><img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"img-responsive\" /></a>{% else %}<img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"img-responsive\" />{% endif %}</div>
      {% endfor %} </div>
  </div>
  <div class=\"swiper-pagination slideshow{{ module }}\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#slideshow{{ module }}').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow{{ module }}',
\tpaginationClickable: true,
\tnextButton: '.slideshow .swiper-button-next',
    prevButton: '.slideshow .swiper-button-prev',
    spaceBetween: 30,
\tautoplay: 2500,
    autoplayDisableOnInteraction: true,
\tloop: true
});
//--></script> #}
slideshow", "mebel/template/extension/module/slideshow.twig", "");
    }
}
