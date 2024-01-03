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

/* mebel/template/common/home.twig */
class __TwigTemplate_47af9b7662a0e2ff3116eb2325143b18d886a039b6fdb87b9ee9367e3c060257 extends Template
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
        echo "
\t\t<section class=\"main\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"main__content\">
\t\t\t\t\t<div class=\"main__action hide\">
\t\t\t\t\t\t<button class=\"button main__action-button main__action-button_green\">
\t\t\t\t\t\t\t<img src=\"images/phone.png\" alt=\"\">
\t\t\t\t\t\t\t<span>Позвонить</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"button main__action-button main__action-button_violet\">
\t\t\t\t\t\t\t<img src=\"images/viber.png\" alt=\"\">
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
\t\t\t\t\t\t\t\t\t<img src=\"images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<a href=\"category.html\" class=\"custom-button main__custom-button\">Купить</a>
\t\t\t\t\t\t\t\t<img src=\"images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__item banners__slider1\">
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__subtitle\">Новый взгляд на кухню</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__title\">Киевская<br>
\t\t\t\t\t\t\t\t\tмебельная фабрика</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<button class=\"custom-button main__custom-button\">Купить</button>
\t\t\t\t\t\t\t\t<img src=\"images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__item banners__slider1\">
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__subtitle\">Новый взгляд на кухню</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__title\">Киевская<br>
\t\t\t\t\t\t\t\t\tмебельная фабрика</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<button class=\"custom-button main__custom-button\">Купить</button>
\t\t\t\t\t\t\t\t<img src=\"images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"banners__static\">
\t\t\t\t\t\t\t<div class=\"banners__static_mask\">
\t\t\t\t\t\t\t\t<img src=\"images/mask.png\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"banners__static_info\">
\t\t\t\t\t\t\t\t\t<span>под</span>
\t\t\t\t\t\t\t\t\t<span>0</span>
\t\t\t\t\t\t\t\t\t<span>%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__static_title\">Рассрочка</div>
\t\t\t\t\t\t\t<div class=\"banners__static_image\">
\t\t\t\t\t\t\t\t<img src=\"images/ground.png\" alt=\"\">
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
\t\t\t\t\t\t\t\t\t<img src=\"images/tkan.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span>Образцы тканей</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"main__example-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"main__example-link\">
\t\t\t\t\t\t\t\t\t<img src=\"images/material.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span>Образцы материалов</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"main__example-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"main__example-link\">
\t\t\t\t\t\t\t\t\t<img src=\"images/napolnitel.png\" alt=\"\">
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
\t\t<section class=\"service\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"service__content\">
\t\t\t\t\t<ul class=\"service__list\">
\t\t\t\t\t\t<li class=\"service__item\">
\t\t\t\t\t\t\t<img src=\"images/delivery.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"service__item-group\">
\t\t\t\t\t\t\t\t<div class=\"service__item-title\">Доставка</div>
\t\t\t\t\t\t\t\t<div class=\"service__item-description\">Доставка по всей Украине</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"service__item\">
\t\t\t\t\t\t\t<img src=\"images/shield.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"service__item-group\">
\t\t\t\t\t\t\t\t<div class=\"service__item-title\">Гарантия</div>
\t\t\t\t\t\t\t\t<div class=\"service__item-description\">На весь товар 18 месяцев</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"service__item\">
\t\t\t\t\t\t\t<img src=\"images/wallet.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"service__item-group\">
\t\t\t\t\t\t\t\t<div class=\"service__item-title\">Кредит/Рассрочка</div>
\t\t\t\t\t\t\t\t<div class=\"service__item-description\">Работаем с популярными банками</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"service__item\">
\t\t\t\t\t\t\t<img src=\"images/headphone.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"service__item-group\">
\t\t\t\t\t\t\t\t<div class=\"service__item-title\">Сервис</div>
\t\t\t\t\t\t\t\t<div class=\"service__item-description\">Мебель под заказ</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"popular\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">Трендовые товары</div>
\t\t\t\t<div class=\"popular__content\">
\t\t\t\t\t<aside class=\"popular__aside\">
\t\t\t\t\t\t<ul class=\"popular__aside-list\">
\t\t\t\t\t\t\t<li class=\"popular__aside-item active\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"popular__aside-link\">Новинки</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"popular__aside-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"popular__aside-link\">Акции</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"popular__aside-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"popular__aside-link\">Распродажа</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"popular__aside-nav\">
\t\t\t\t\t\t\t<span class=\"active\"></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>
\t\t\t\t\t<div class=\"products__popular\">
\t\t\t\t\t\t<div class=\"popular__tab-item carousel1\">
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_new\">New</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Dining chairs</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">100 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">120 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Minimal iconic chair</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">12000 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">150000 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Buskbo armchair</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">130 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">190 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_new\">New</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Dining chairs</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">100 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">120 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Minimal iconic chair</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">12000 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">150000 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Buskbo armchair</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">130 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">190 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"popular__tab-item carousel2 hide\">
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_new\">New</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Dining chairs2</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">100 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">120 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Minimal iconic chair2</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">12000 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">150000 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Buskbo armchair2</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">130 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">190 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"popular__tab-item carousel3 hide\">
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_new\">New</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Dining chairs3</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">100 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">120 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Minimal iconic chair3</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">12000 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">150000 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Buskbo armchair3</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">130 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">190 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"catalog\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">Наш каталог</div>
\t\t\t\t<div class=\"catalog__content\">
\t\t\t\t\t<ul class=\"catalog__list\">
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog1.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Шкафы купе</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog2.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Кухни</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog3.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Диваны</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog4.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Мягкая мебель</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog1.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Кровати</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog1.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Гостинные</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog1.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Детская мебель</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog1.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Кухонные уголки</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"indiv\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"indiv__content\">
\t\t\t\t\t<div class=\"indiv__info\">
\t\t\t\t\t\t<div class=\"sectionTitle\">Получите индивидуальное предложение!</div>
\t\t\t\t\t\t<div class=\"sectionTitle sectionTitle_mobile\">Диван по индивидуальным размерам</div>
\t\t\t\t\t\t<div class=\"indiv__description\">Мы всегда готовы предложить лучшую цену на весь ассортимент мебели “МебельТоп”</div>
\t\t\t\t\t\t<div class=\"indiv__description indiv__description_mobile\">Мы можем изменить габаритные размеры дивана под нужные именно вам</div>
\t\t\t\t\t\t<form action=\"#\" class=\"indiv__form\" method=\"get\">
\t\t\t\t\t\t\t<input type=\"tel\" class=\"indiv__input\" placeholder=\"Ваш телефон\">
\t\t\t\t\t\t\t<button class=\"custom-button\">Получить скидку</button>
\t\t\t\t\t\t\t<button class=\"custom-button custom-button_mobile\">Рассчитать</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"indiv__agree\">Отправляя эту форму, вы даете согласие на обработку персональных данных</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"indiv__image\">
\t\t\t\t\t\t<img src=\"images/sofa.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"benefits\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">Наши преимущества</div>
\t\t\t\t<div class=\"benefits__content\">
\t\t\t\t\t<ul class=\"benefits__list\">
\t\t\t\t\t\t<li class=\"benefits__item\">
\t\t\t\t\t\t\t<div class=\"benefits__top\">
\t\t\t\t\t\t\t\t<div class=\"benefits__count\">1</div>
\t\t\t\t\t\t\t\t<div class=\"benefits__title\">Самые низкие цены</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"benefits__description\">Почему выбирают нас? Потому что мы прямые производители, никаких посредников. Диван со склада в Полтаве по ценам производителя всегда будет намного дешевле чем в магазинах посредников, которые по мимо своей накрутки платят еще огромные сумы за аренду торговых помещений.</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"benefits__item\">
\t\t\t\t\t\t\t<div class=\"benefits__top\">
\t\t\t\t\t\t\t\t<div class=\"benefits__count\">2</div>
\t\t\t\t\t\t\t\t<div class=\"benefits__title\">Мы экономим ваше время</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"benefits__description\">Покупая диван у нас на сайте Вы не выходя из дома или офиса имеете возможность посмотреть более 50 видов диванов и 30 видов оббивок тканей.Наши специалисты предоставят квалифицированную консультацию по телефону.</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"benefits__item\">
\t\t\t\t\t\t\t<div class=\"benefits__top\">
\t\t\t\t\t\t\t\t<div class=\"benefits__count\">3</div>
\t\t\t\t\t\t\t\t<div class=\"benefits__title\">Высокое качество материалов</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"benefits__description\">Каркасы всех диванов сделаны из натурального Сухого дерева (7 % влажности, брус 40-50мм). На все диваны ставится пенополиуретан   Гарантия: 3 года. Пружинный блок «Боннель» и «Змейка». Все ткани от 6-й, 7-й и выше категорий</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"geografic\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">География деятельности</div>
\t\t\t\t<div class=\"geografic__content\">
\t\t\t\t\t<ul class=\"geografic__info\">
\t\t\t\t\t\t<li class=\"geografic__item\">
\t\t\t\t\t\t\t<span class=\"geografic__circle\"></span>
\t\t\t\t\t\t\t<span class=\"geografic__text\">Представительство в 12 областях Украины</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geografic__item\">
\t\t\t\t\t\t\t<span class=\"geografic__circle\"></span>
\t\t\t\t\t\t\t<span class=\"geografic__text\">Доставка по любую точку страны</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geografic__item\">
\t\t\t\t\t\t\t<span class=\"geografic__circle\"></span>
\t\t\t\t\t\t\t<span class=\"geografic__text\">Выгодная доставка своим транспортом</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geografic__item\">
\t\t\t\t\t\t\t<span class=\"geografic__circle\"></span>
\t\t\t\t\t\t\t<span class=\"geografic__text\">Сотрудничаем с почтовыми службами</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"geografic__map\">
\t\t\t\t\t\t<img src=\"images/map.png\" alt=\"map\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"news\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">Новости</div>
\t\t\t\t<div class=\"news__content\">
\t\t\t\t\t<ul class=\"news__list\">
\t\t\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<ul class=\"news__list news__list_mobile\">
\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</section>
\t\t<section class=\"reviews\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">Отзывы</div>
\t\t\t\t<div class=\"reviews__content\">
\t\t\t\t\t<div class=\"reviews__wrapper\">
\t\t\t\t\t\t<div class=\"reviews__nav\">
\t\t\t\t\t\t\t<div class=\"reviews__nav_prev\">
\t\t\t\t\t\t\t\t<img src=\"images/arrow.png\" alt=\"prev\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reviews__nav_next\">
\t\t\t\t\t\t\t\t<img src=\"images/arrow.png\" alt=\"next\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"reviews__list\">
\t\t\t\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<ul class=\"reviews__list reviews__list_mobile\">
\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</section>
\t\t<section class=\"company\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">О компании</div>
\t\t\t\t<div class=\"company__content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer tooвk a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer tooвk a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"info\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"info__content\">
\t\t\t\t\t<div class=\"logo info__logo\">
\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t<img src=\"images/logo.png\" alt=\"logo\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info__contacts\">
\t\t\t\t\t\t<div class=\"header-middle__contacts\">
\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t<source media=\"(max-width:768px)\" srcset=\"images/headphone_mobile.png\">
\t\t\t\t\t\t\t\t<img src=\"images/headphone.png\" alt=\"\">
\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t<div class=\"header-middle__tel\">
\t\t\t\t\t\t\t\t<a href=\"tel:+380933838878\">+380 93 38 388 78</a>
\t\t\t\t\t\t\t\t<a href=\"tel:+380933838878\">+380 93 38 388 78</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info__social\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"images/facebook.png\" alt=\"facebook\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"images/twitter.png\" alt=\"twitter\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"images/instagram.png\" alt=\"instagram\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"images/pinterest.png\" alt=\"pinterest\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
";
    }

    public function getTemplateName()
    {
        return "mebel/template/common/home.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
\t\t<section class=\"main\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"main__content\">
\t\t\t\t\t<div class=\"main__action hide\">
\t\t\t\t\t\t<button class=\"button main__action-button main__action-button_green\">
\t\t\t\t\t\t\t<img src=\"images/phone.png\" alt=\"\">
\t\t\t\t\t\t\t<span>Позвонить</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"button main__action-button main__action-button_violet\">
\t\t\t\t\t\t\t<img src=\"images/viber.png\" alt=\"\">
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
\t\t\t\t\t\t\t\t\t<img src=\"images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<a href=\"category.html\" class=\"custom-button main__custom-button\">Купить</a>
\t\t\t\t\t\t\t\t<img src=\"images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__item banners__slider1\">
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__subtitle\">Новый взгляд на кухню</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__title\">Киевская<br>
\t\t\t\t\t\t\t\t\tмебельная фабрика</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<button class=\"custom-button main__custom-button\">Купить</button>
\t\t\t\t\t\t\t\t<img src=\"images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__item banners__slider1\">
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__subtitle\">Новый взгляд на кухню</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__title\">Киевская<br>
\t\t\t\t\t\t\t\t\tмебельная фабрика</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__image\">
\t\t\t\t\t\t\t\t\t<img src=\"images/ground.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banners__slider1__text\">Скидка на линейку кухонь 2022 года</div>
\t\t\t\t\t\t\t\t<button class=\"custom-button main__custom-button\">Купить</button>
\t\t\t\t\t\t\t\t<img src=\"images/kitchen.png\" alt=\"\" class=\"slider1_bg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"banners__static\">
\t\t\t\t\t\t\t<div class=\"banners__static_mask\">
\t\t\t\t\t\t\t\t<img src=\"images/mask.png\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"banners__static_info\">
\t\t\t\t\t\t\t\t\t<span>под</span>
\t\t\t\t\t\t\t\t\t<span>0</span>
\t\t\t\t\t\t\t\t\t<span>%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banners__static_title\">Рассрочка</div>
\t\t\t\t\t\t\t<div class=\"banners__static_image\">
\t\t\t\t\t\t\t\t<img src=\"images/ground.png\" alt=\"\">
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
\t\t\t\t\t\t\t\t\t<img src=\"images/tkan.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span>Образцы тканей</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"main__example-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"main__example-link\">
\t\t\t\t\t\t\t\t\t<img src=\"images/material.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span>Образцы материалов</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"main__example-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"main__example-link\">
\t\t\t\t\t\t\t\t\t<img src=\"images/napolnitel.png\" alt=\"\">
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
\t\t<section class=\"service\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"service__content\">
\t\t\t\t\t<ul class=\"service__list\">
\t\t\t\t\t\t<li class=\"service__item\">
\t\t\t\t\t\t\t<img src=\"images/delivery.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"service__item-group\">
\t\t\t\t\t\t\t\t<div class=\"service__item-title\">Доставка</div>
\t\t\t\t\t\t\t\t<div class=\"service__item-description\">Доставка по всей Украине</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"service__item\">
\t\t\t\t\t\t\t<img src=\"images/shield.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"service__item-group\">
\t\t\t\t\t\t\t\t<div class=\"service__item-title\">Гарантия</div>
\t\t\t\t\t\t\t\t<div class=\"service__item-description\">На весь товар 18 месяцев</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"service__item\">
\t\t\t\t\t\t\t<img src=\"images/wallet.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"service__item-group\">
\t\t\t\t\t\t\t\t<div class=\"service__item-title\">Кредит/Рассрочка</div>
\t\t\t\t\t\t\t\t<div class=\"service__item-description\">Работаем с популярными банками</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"service__item\">
\t\t\t\t\t\t\t<img src=\"images/headphone.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"service__item-group\">
\t\t\t\t\t\t\t\t<div class=\"service__item-title\">Сервис</div>
\t\t\t\t\t\t\t\t<div class=\"service__item-description\">Мебель под заказ</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"popular\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">Трендовые товары</div>
\t\t\t\t<div class=\"popular__content\">
\t\t\t\t\t<aside class=\"popular__aside\">
\t\t\t\t\t\t<ul class=\"popular__aside-list\">
\t\t\t\t\t\t\t<li class=\"popular__aside-item active\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"popular__aside-link\">Новинки</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"popular__aside-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"popular__aside-link\">Акции</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"popular__aside-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"popular__aside-link\">Распродажа</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"popular__aside-nav\">
\t\t\t\t\t\t\t<span class=\"active\"></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>
\t\t\t\t\t<div class=\"products__popular\">
\t\t\t\t\t\t<div class=\"popular__tab-item carousel1\">
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_new\">New</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Dining chairs</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">100 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">120 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Minimal iconic chair</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">12000 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">150000 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Buskbo armchair</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">130 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">190 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_new\">New</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Dining chairs</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">100 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">120 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Minimal iconic chair</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">12000 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">150000 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Buskbo armchair</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">130 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">190 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"popular__tab-item carousel2 hide\">
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_new\">New</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Dining chairs2</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">100 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">120 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Minimal iconic chair2</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">12000 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">150000 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Buskbo armchair2</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">130 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">190 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"popular__tab-item carousel3 hide\">
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_new\">New</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Dining chairs3</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">100 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">120 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Minimal iconic chair3</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">12000 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">150000 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t<div class=\"product__label product__label_sale\">Sale</div>
\t\t\t\t\t\t\t\t<div class=\"product__icons\">
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_compare\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/compare.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__icon product__icon_favorite\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/favorite.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__description-top\">
\t\t\t\t\t\t\t\t\t<div class=\"product__name\">Chair</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__articul\">Код:02051</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"product__link\">Buskbo armchair3</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t<div class=\"product__price_current\">130 UAH</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__price_old\">190 UAH</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product__bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<span>Размер спального места 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t\t<span>Размер Ш*В*Д 100см*100см*100см</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__bottom_img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Shop.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>В корзину</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"catalog\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">Наш каталог</div>
\t\t\t\t<div class=\"catalog__content\">
\t\t\t\t\t<ul class=\"catalog__list\">
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog1.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Шкафы купе</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog2.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Кухни</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog3.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Диваны</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog4.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Мягкая мебель</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog1.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Кровати</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog1.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Гостинные</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog1.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Детская мебель</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"catalog__link\">
\t\t\t\t\t\t\t\t<img src=\"images/catalog1.png\" alt=\"\" class=\"catalog__img\">
\t\t\t\t\t\t\t\t<span class=\"catalog__name\">Кухонные уголки</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"indiv\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"indiv__content\">
\t\t\t\t\t<div class=\"indiv__info\">
\t\t\t\t\t\t<div class=\"sectionTitle\">Получите индивидуальное предложение!</div>
\t\t\t\t\t\t<div class=\"sectionTitle sectionTitle_mobile\">Диван по индивидуальным размерам</div>
\t\t\t\t\t\t<div class=\"indiv__description\">Мы всегда готовы предложить лучшую цену на весь ассортимент мебели “МебельТоп”</div>
\t\t\t\t\t\t<div class=\"indiv__description indiv__description_mobile\">Мы можем изменить габаритные размеры дивана под нужные именно вам</div>
\t\t\t\t\t\t<form action=\"#\" class=\"indiv__form\" method=\"get\">
\t\t\t\t\t\t\t<input type=\"tel\" class=\"indiv__input\" placeholder=\"Ваш телефон\">
\t\t\t\t\t\t\t<button class=\"custom-button\">Получить скидку</button>
\t\t\t\t\t\t\t<button class=\"custom-button custom-button_mobile\">Рассчитать</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"indiv__agree\">Отправляя эту форму, вы даете согласие на обработку персональных данных</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"indiv__image\">
\t\t\t\t\t\t<img src=\"images/sofa.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"benefits\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">Наши преимущества</div>
\t\t\t\t<div class=\"benefits__content\">
\t\t\t\t\t<ul class=\"benefits__list\">
\t\t\t\t\t\t<li class=\"benefits__item\">
\t\t\t\t\t\t\t<div class=\"benefits__top\">
\t\t\t\t\t\t\t\t<div class=\"benefits__count\">1</div>
\t\t\t\t\t\t\t\t<div class=\"benefits__title\">Самые низкие цены</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"benefits__description\">Почему выбирают нас? Потому что мы прямые производители, никаких посредников. Диван со склада в Полтаве по ценам производителя всегда будет намного дешевле чем в магазинах посредников, которые по мимо своей накрутки платят еще огромные сумы за аренду торговых помещений.</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"benefits__item\">
\t\t\t\t\t\t\t<div class=\"benefits__top\">
\t\t\t\t\t\t\t\t<div class=\"benefits__count\">2</div>
\t\t\t\t\t\t\t\t<div class=\"benefits__title\">Мы экономим ваше время</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"benefits__description\">Покупая диван у нас на сайте Вы не выходя из дома или офиса имеете возможность посмотреть более 50 видов диванов и 30 видов оббивок тканей.Наши специалисты предоставят квалифицированную консультацию по телефону.</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"benefits__item\">
\t\t\t\t\t\t\t<div class=\"benefits__top\">
\t\t\t\t\t\t\t\t<div class=\"benefits__count\">3</div>
\t\t\t\t\t\t\t\t<div class=\"benefits__title\">Высокое качество материалов</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"benefits__description\">Каркасы всех диванов сделаны из натурального Сухого дерева (7 % влажности, брус 40-50мм). На все диваны ставится пенополиуретан   Гарантия: 3 года. Пружинный блок «Боннель» и «Змейка». Все ткани от 6-й, 7-й и выше категорий</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"geografic\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">География деятельности</div>
\t\t\t\t<div class=\"geografic__content\">
\t\t\t\t\t<ul class=\"geografic__info\">
\t\t\t\t\t\t<li class=\"geografic__item\">
\t\t\t\t\t\t\t<span class=\"geografic__circle\"></span>
\t\t\t\t\t\t\t<span class=\"geografic__text\">Представительство в 12 областях Украины</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geografic__item\">
\t\t\t\t\t\t\t<span class=\"geografic__circle\"></span>
\t\t\t\t\t\t\t<span class=\"geografic__text\">Доставка по любую точку страны</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geografic__item\">
\t\t\t\t\t\t\t<span class=\"geografic__circle\"></span>
\t\t\t\t\t\t\t<span class=\"geografic__text\">Выгодная доставка своим транспортом</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"geografic__item\">
\t\t\t\t\t\t\t<span class=\"geografic__circle\"></span>
\t\t\t\t\t\t\t<span class=\"geografic__text\">Сотрудничаем с почтовыми службами</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"geografic__map\">
\t\t\t\t\t\t<img src=\"images/map.png\" alt=\"map\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"news\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">Новости</div>
\t\t\t\t<div class=\"news__content\">
\t\t\t\t\t<ul class=\"news__list\">
\t\t\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<ul class=\"news__list news__list_mobile\">
\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"news__item\">
\t\t\t\t\t<img src=\"images/news1.png\" alt=\"\">
\t\t\t\t\t<div class=\"news__info\">
\t\t\t\t\t\t<div class=\"news__top\">
\t\t\t\t\t\t\t<div class=\"news__category\">
\t\t\t\t\t\t\t\t<img src=\"images/label.png\" alt=\"\">
\t\t\t\t\t\t\t\t<span>Категория</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news__date\">23 Сентября 2022</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"news__title\">Название новости</div>
\t\t\t\t\t\t<a href=\"#\" class=\"news__link\">Читать далее</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</section>
\t\t<section class=\"reviews\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">Отзывы</div>
\t\t\t\t<div class=\"reviews__content\">
\t\t\t\t\t<div class=\"reviews__wrapper\">
\t\t\t\t\t\t<div class=\"reviews__nav\">
\t\t\t\t\t\t\t<div class=\"reviews__nav_prev\">
\t\t\t\t\t\t\t\t<img src=\"images/arrow.png\" alt=\"prev\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"reviews__nav_next\">
\t\t\t\t\t\t\t\t<img src=\"images/arrow.png\" alt=\"next\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"reviews__list\">
\t\t\t\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<ul class=\"reviews__list reviews__list_mobile\">
\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"reviews__item\">
\t\t\t\t\t<div class=\"reviews__avatar\">
\t\t\t\t\t\t<img src=\"images/avatar.png\" alt=\"avatar\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"reviews__title\">Название товара</div>
\t\t\t\t\t<div class=\"reviews__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque suscipit deserunt dignissimos fugiat commodi sequi iste hic doloremque dolorum optio, veniam maiores sapiente velit reprehenderit aliquid recusandae, nobis ut minima?</div>
\t\t\t\t\t<div class=\"reviews__rating\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t\t<img src=\"images/star.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</section>
\t\t<section class=\"company\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"sectionTitle\">О компании</div>
\t\t\t\t<div class=\"company__content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer tooвk a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer tooвk a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"info\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"info__content\">
\t\t\t\t\t<div class=\"logo info__logo\">
\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t<img src=\"images/logo.png\" alt=\"logo\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info__contacts\">
\t\t\t\t\t\t<div class=\"header-middle__contacts\">
\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t<source media=\"(max-width:768px)\" srcset=\"images/headphone_mobile.png\">
\t\t\t\t\t\t\t\t<img src=\"images/headphone.png\" alt=\"\">
\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t<div class=\"header-middle__tel\">
\t\t\t\t\t\t\t\t<a href=\"tel:+380933838878\">+380 93 38 388 78</a>
\t\t\t\t\t\t\t\t<a href=\"tel:+380933838878\">+380 93 38 388 78</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info__social\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"images/facebook.png\" alt=\"facebook\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"images/twitter.png\" alt=\"twitter\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"images/instagram.png\" alt=\"instagram\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"images/pinterest.png\" alt=\"pinterest\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
", "mebel/template/common/home.twig", "");
    }
}
