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

/* mebel/template/common/footer.twig */
class __TwigTemplate_552a982070ede6360de231f92207f76d41eb38da432871fa1134db862d071737 extends Template
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
        echo "        <footer class=\"footer\">
\t\t\t<div class=\"footer__subscribe\">
\t\t\t\t<div class=\"footer__subscribe-text\">Подпишись, и получай эксклюзивные предложения прямо на почту</div>
\t\t\t\t<form action=\"#\" class=\"footer__subscribe-form\" method=\"get\">
\t\t\t\t\t<input type=\"text\" class=\"footer__subscribe-input\" placeholder=\"Ваш email\">
\t\t\t\t\t<button type=\"submit\" class=\"custom-button footer__subscribe-custom-button\">Подписаться
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer__content\">
\t\t\t\t\t<div class=\"footer__top\">
\t\t\t\t\t\t<div class=\"footer__left\">
\t\t\t\t\t\t\t<div class=\"logo footer__logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/logo.png\" alt=\"logo\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"footer__contacts\">
\t\t\t\t\t\t\t\t<div class=\"header-middle__contacts\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source media=\"(max-width:768px)\" srcset=\"images/headphone_mobile.png\">
\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/headphone.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t<div class=\"header-middle__tel\">
\t\t\t\t\t\t\t\t\t\t<a href=\"tel:+380933838878\">+380 93 38 388 78</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"tel:+380933838878\">+380 93 38 388 78</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer__social\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/facebook.png\" alt=\"facebook\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/twitter.png\" alt=\"twitter\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/instagram.png\" alt=\"instagram\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/pinterest.png\" alt=\"pinterest\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer__mail\">info@mebeltop.com.ua</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer__menu\">
\t\t\t\t\t\t\t<ul class=\"footer__list\">
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-title\">Полезное</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">Распродажа</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tНовинки
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tАкции
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tОтзывы
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tБлог
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"footer__list\">
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-title\">Информация</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">О нас</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tКонтакты
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tНаши магазины
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tДоставка и оплата
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"footer__list\">
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-title\">Категории</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">Диваны</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tКухни
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tГостинные
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tКровати
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tСтулья и кресла
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tШкафы купе
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tКомоды
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tДетская мебель
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tМатрасы
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tЗеркала
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tОфисная мебель
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer__bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"footer__bottom-content\">
\t\t\t\t\t\t<div class=\"footer__bottom-create\">СОЗДАНО В MAXOPEN</div>
\t\t\t\t\t\t<div class=\"footer__bottom-rules\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__bottom-policy\">Политика конфиндециальности</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__bottom-policy\">Условия офёрты</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"popup hide\">
\t\t\t\t<div class=\"popup-custom popup-manager\">
\t\t\t\t\t<div class=\"popup__close\">
\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/filter_close.png\" alt=\"close\">
\t\t\t\t\t</div>
\t\t\t\t\t<section class=\"consulting\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"consulting__content\">
\t\t\t\t\t\t\t\t<div class=\"blockTitle\">Связаться с менеджером</div>
\t\t\t\t\t\t\t\t<div class=\"consulting__description\">Не тратьте время на изучение ассортимента, проконсультируйтесь со специалистом</div>
\t\t\t\t\t\t\t\t<form action=\"#\" class=\"consulting__form\" method=\"get\">
\t\t\t\t\t\t\t\t\t<label class=\"consulting__input_label\">
\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__input_name\">Имя</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"consulting__input\" placeholder=\"Андрей\">
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"consulting__input_label\">
\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__input_tel\">Телефон</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"tel\" id=\"popup-manager\" class=\"consulting__input phone\" placeholder=\"+7 (___) ___ - __ - __\">
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"consulting__agree\">Отправляю данную форму даю согласие на обработку персональных данных</div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"consulting__button custom-button\">Оставить заявку</button>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<div class=\"consulting__img\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/expert.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"popup hide\">
\t\t\t\t<div class=\"popup-custom popup-byClick\">
\t\t\t\t\t<div class=\"popup__close\">
\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/filter_close.png\" alt=\"close\">
\t\t\t\t\t</div>
\t\t\t\t\t<section class=\"consulting\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"consulting__content\">
\t\t\t\t\t\t\t\t<div class=\"consulting__left\">
\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-title\">Быстрый заказ</div>
\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-description\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-group\">
\t\t\t\t\t\t\t\t\t\t<section class=\"slider\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__col\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__thumbs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"swiper-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Слайдер с превью -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"swiper-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Слайдер с изображениями -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-text\">цена</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-current\">1700uah</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-old\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strike>2300uah</strike>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<form class=\"product-card__group_count\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-card__minus bt_minus\">-</button>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"product-card__count\" name=\"quantity\" size=\"2\" id=\"input-quantity\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-card__plus bt_plus\">+</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-text\">сумма</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-total\">189. 18₽</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"consulting__right\">
\t\t\t\t\t\t\t\t\t<div class=\"blockTitle\">Оформить заказ</div>
\t\t\t\t\t\t\t\t\t<form action=\"#\" class=\"consulting__form\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t<label class=\"consulting__input_label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__input_name\">Имя</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"consulting__input\" placeholder=\"Андрей\">
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"consulting__input_label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__input_tel\">Телефон</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"tel\" id=\"popup-byClick\" class=\"consulting__input phone\" placeholder=\"+7 (___) ___ - __ - __\">
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__agree\">Отправляю данную форму даю согласие на обработку персональных данных</div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"custom-button consulting__button\">Оставить заявку</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
        ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 315
            echo "            <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 315);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 315);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 315);
            echo "\"/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 318
            echo "            <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "        <!--
        OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
        Please donate via PayPal to donate@opencart.com
        //-->
        
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js\"></script>
        <script src=\"catalog/view/theme/mebel/assets/js/owlcarousel/owl.carousel.min.js\"></script>
        <script src=\"catalog/view/theme/mebel/assets/js/slick/slick.min.js\"></script>
        <script src=\"catalog/view/theme/mebel/assets/js/jquery.maskedinput.js\"></script>
        <script src=\"catalog/view/theme/mebel/assets/js/swiper.js\"></script>
        <script src=\"catalog/view/theme/mebel/assets/js/app.js\"></script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "mebel/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 320,  374 => 318,  369 => 317,  356 => 315,  352 => 314,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <footer class=\"footer\">
\t\t\t<div class=\"footer__subscribe\">
\t\t\t\t<div class=\"footer__subscribe-text\">Подпишись, и получай эксклюзивные предложения прямо на почту</div>
\t\t\t\t<form action=\"#\" class=\"footer__subscribe-form\" method=\"get\">
\t\t\t\t\t<input type=\"text\" class=\"footer__subscribe-input\" placeholder=\"Ваш email\">
\t\t\t\t\t<button type=\"submit\" class=\"custom-button footer__subscribe-custom-button\">Подписаться
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer__content\">
\t\t\t\t\t<div class=\"footer__top\">
\t\t\t\t\t\t<div class=\"footer__left\">
\t\t\t\t\t\t\t<div class=\"logo footer__logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/logo.png\" alt=\"logo\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"footer__contacts\">
\t\t\t\t\t\t\t\t<div class=\"header-middle__contacts\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source media=\"(max-width:768px)\" srcset=\"images/headphone_mobile.png\">
\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/headphone.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t\t<div class=\"header-middle__tel\">
\t\t\t\t\t\t\t\t\t\t<a href=\"tel:+380933838878\">+380 93 38 388 78</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"tel:+380933838878\">+380 93 38 388 78</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer__social\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/facebook.png\" alt=\"facebook\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/twitter.png\" alt=\"twitter\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/instagram.png\" alt=\"instagram\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/pinterest.png\" alt=\"pinterest\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer__mail\">info@mebeltop.com.ua</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer__menu\">
\t\t\t\t\t\t\t<ul class=\"footer__list\">
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-title\">Полезное</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">Распродажа</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tНовинки
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tАкции
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tОтзывы
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tБлог
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"footer__list\">
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-title\">Информация</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">О нас</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tКонтакты
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tНаши магазины
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tДоставка и оплата
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"footer__list\">
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-title\">Категории</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">Диваны</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tКухни
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tГостинные
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tКровати
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tСтулья и кресла
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tШкафы купе
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tКомоды
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tДетская мебель
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tМатрасы
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tЗеркала
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"footer__list-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__list-link\">
\t\t\t\t\t\t\t\t\t\tОфисная мебель
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer__bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"footer__bottom-content\">
\t\t\t\t\t\t<div class=\"footer__bottom-create\">СОЗДАНО В MAXOPEN</div>
\t\t\t\t\t\t<div class=\"footer__bottom-rules\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__bottom-policy\">Политика конфиндециальности</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"footer__bottom-policy\">Условия офёрты</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"popup hide\">
\t\t\t\t<div class=\"popup-custom popup-manager\">
\t\t\t\t\t<div class=\"popup__close\">
\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/filter_close.png\" alt=\"close\">
\t\t\t\t\t</div>
\t\t\t\t\t<section class=\"consulting\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"consulting__content\">
\t\t\t\t\t\t\t\t<div class=\"blockTitle\">Связаться с менеджером</div>
\t\t\t\t\t\t\t\t<div class=\"consulting__description\">Не тратьте время на изучение ассортимента, проконсультируйтесь со специалистом</div>
\t\t\t\t\t\t\t\t<form action=\"#\" class=\"consulting__form\" method=\"get\">
\t\t\t\t\t\t\t\t\t<label class=\"consulting__input_label\">
\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__input_name\">Имя</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"consulting__input\" placeholder=\"Андрей\">
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"consulting__input_label\">
\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__input_tel\">Телефон</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"tel\" id=\"popup-manager\" class=\"consulting__input phone\" placeholder=\"+7 (___) ___ - __ - __\">
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"consulting__agree\">Отправляю данную форму даю согласие на обработку персональных данных</div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"consulting__button custom-button\">Оставить заявку</button>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<div class=\"consulting__img\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/expert.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"popup hide\">
\t\t\t\t<div class=\"popup-custom popup-byClick\">
\t\t\t\t\t<div class=\"popup__close\">
\t\t\t\t\t\t<img src=\"catalog/view/theme/mebel/assets/images/filter_close.png\" alt=\"close\">
\t\t\t\t\t</div>
\t\t\t\t\t<section class=\"consulting\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"consulting__content\">
\t\t\t\t\t\t\t\t<div class=\"consulting__left\">
\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-title\">Быстрый заказ</div>
\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-description\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-group\">
\t\t\t\t\t\t\t\t\t\t<section class=\"slider\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__col\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__thumbs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"swiper-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Слайдер с превью -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"swiper-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Слайдер с изображениями -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider__image\"><img src=\"catalog/view/theme/mebel/assets/images/product.png\" alt=\"\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-text\">цена</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-current\">1700uah</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-old\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strike>2300uah</strike>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<form class=\"product-card__group_count\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-card__minus bt_minus\">-</button>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"product-card__count\" name=\"quantity\" size=\"2\" id=\"input-quantity\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-card__plus bt_plus\">+</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-text\">сумма</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__left-bottom-total\">189. 18₽</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"consulting__right\">
\t\t\t\t\t\t\t\t\t<div class=\"blockTitle\">Оформить заказ</div>
\t\t\t\t\t\t\t\t\t<form action=\"#\" class=\"consulting__form\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t<label class=\"consulting__input_label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__input_name\">Имя</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"consulting__input\" placeholder=\"Андрей\">
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"consulting__input_label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__input_tel\">Телефон</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"tel\" id=\"popup-byClick\" class=\"consulting__input phone\" placeholder=\"+7 (___) ___ - __ - __\">
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"consulting__agree\">Отправляю данную форму даю согласие на обработку персональных данных</div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"custom-button consulting__button\">Оставить заявку</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
        {% for style in styles %}
            <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
        {% endfor %}
        {% for script in scripts %}
            <script src=\"{{ script }}\" type=\"text/javascript\"></script>
        {% endfor %}
        <!--
        OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
        Please donate via PayPal to donate@opencart.com
        //-->
        
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js\"></script>
        <script src=\"catalog/view/theme/mebel/assets/js/owlcarousel/owl.carousel.min.js\"></script>
        <script src=\"catalog/view/theme/mebel/assets/js/slick/slick.min.js\"></script>
        <script src=\"catalog/view/theme/mebel/assets/js/jquery.maskedinput.js\"></script>
        <script src=\"catalog/view/theme/mebel/assets/js/swiper.js\"></script>
        <script src=\"catalog/view/theme/mebel/assets/js/app.js\"></script>
    </body>
</html>
", "mebel/template/common/footer.twig", "");
    }
}
