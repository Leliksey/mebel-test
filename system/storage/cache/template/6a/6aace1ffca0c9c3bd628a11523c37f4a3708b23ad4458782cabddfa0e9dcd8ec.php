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

/* mebel/template/extension/module/featured.twig */
class __TwigTemplate_aee1da1bfe91810edec7fd92c6c118d4ebdba9bcfa16892c97bfa4289dba33f2 extends Template
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
        echo "<section class=\"popular\">
            <div class=\"container\">
                <div class=\"sectionTitle\">Трендовые товары</div>
                <div class=\"popular__content\">
                    <aside class=\"popular__aside\">
                        <ul class=\"popular__aside-list\">
                            <li class=\"popular__aside-item active\">
                                <a href=\"#\" class=\"popular__aside-link\">Новинки</a>
                            </li>
                            <li class=\"popular__aside-item\">
                                <a href=\"#\" class=\"popular__aside-link\">Акции</a>
                            </li>
                            <li class=\"popular__aside-item\">
                                <a href=\"#\" class=\"popular__aside-link\">Распродажа</a>
                            </li>
                        </ul>
                        <div class=\"popular__aside-nav\">
                            <span class=\"active\"></span>
                            <span></span>
                            <span></span>
                        </div>
                    </aside>
                    <div class=\"products__popular\">
                        <div class=\"popular__tab-item carousel1\">
                            <div class=\"product\">
                                <div class=\"product__label product__label_new\">New</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product1.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Dining chairs</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">100 UAH</div>
                                    <div class=\"product__price_old\">120 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                                <div class=\"product__label product__label_sale\">Sale</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product2.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Minimal iconic chair</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">12000 UAH</div>
                                    <div class=\"product__price_old\">150000 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                            <div class=\"product__label product__label_sale\">Sale</div>
                            <div class=\"product__icons\">
                                <div class=\"product__icon product__icon_compare\">
                                    <img src=\"images/compare.png\" alt=\"\">
                                </div>
                                <div class=\"product__icon product__icon_favorite\">
                                    <img src=\"images/favorite.png\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"product__image\">
                                <a href=\"product.html\" class=\"product__link\">
                                    <img src=\"images/product3.png\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"product__description-top\">
                                <div class=\"product__name\">Chair</div>
                                <div class=\"product__articul\">Код:02051</div>
                            </div>
                            <div class=\"product__title\">
                                <a href=\"product.html\" class=\"product__link\">Buskbo armchair</a>
                            </div>
                            <div class=\"product__price\">
                                <div class=\"product__price_current\">130 UAH</div>
                                <div class=\"product__price_old\">190 UAH</div>
                            </div>
                            <div class=\"product__bottom\">
                                <div class=\"product__bottom_group\">
                                    <span>Размер спального места 100см*100см*100см</span>
                                    <span>Размер Ш*В*Д 100см*100см*100см</span>
                                </div>
                                <div class=\"product__bottom_group\">
                                    <div class=\"product__bottom_img\">
                                        <img src=\"images/Shop.png\" alt=\"\">
                                    </div>
                                    <span>В корзину</span>
                                </div>
                            </div>
                            </div>
                            <div class=\"product\">
                                <div class=\"product__label product__label_new\">New</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product1.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Dining chairs</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">100 UAH</div>
                                    <div class=\"product__price_old\">120 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                                <div class=\"product__label product__label_sale\">Sale</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product2.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Minimal iconic chair</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">12000 UAH</div>
                                    <div class=\"product__price_old\">150000 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                            <div class=\"product__label product__label_sale\">Sale</div>
                            <div class=\"product__icons\">
                                <div class=\"product__icon product__icon_compare\">
                                    <img src=\"images/compare.png\" alt=\"\">
                                </div>
                                <div class=\"product__icon product__icon_favorite\">
                                    <img src=\"images/favorite.png\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"product__image\">
                                <a href=\"product.html\" class=\"product__link\">
                                    <img src=\"images/product3.png\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"product__description-top\">
                                <div class=\"product__name\">Chair</div>
                                <div class=\"product__articul\">Код:02051</div>
                            </div>
                            <div class=\"product__title\">
                                <a href=\"product.html\" class=\"product__link\">Buskbo armchair</a>
                            </div>
                            <div class=\"product__price\">
                                <div class=\"product__price_current\">130 UAH</div>
                                <div class=\"product__price_old\">190 UAH</div>
                            </div>
                            <div class=\"product__bottom\">
                                <div class=\"product__bottom_group\">
                                    <span>Размер спального места 100см*100см*100см</span>
                                    <span>Размер Ш*В*Д 100см*100см*100см</span>
                                </div>
                                <div class=\"product__bottom_group\">
                                    <div class=\"product__bottom_img\">
                                        <img src=\"images/Shop.png\" alt=\"\">
                                    </div>
                                    <span>В корзину</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class=\"popular__tab-item carousel2 hide\">
                            <div class=\"product\">
                                <div class=\"product__label product__label_new\">New</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product1.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Dining chairs2</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">100 UAH</div>
                                    <div class=\"product__price_old\">120 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                                <div class=\"product__label product__label_sale\">Sale</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product2.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Minimal iconic chair2</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">12000 UAH</div>
                                    <div class=\"product__price_old\">150000 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                            <div class=\"product__label product__label_sale\">Sale</div>
                            <div class=\"product__icons\">
                                <div class=\"product__icon product__icon_compare\">
                                    <img src=\"images/compare.png\" alt=\"\">
                                </div>
                                <div class=\"product__icon product__icon_favorite\">
                                    <img src=\"images/favorite.png\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"product__image\">
                                <a href=\"product.html\" class=\"product__link\">
                                    <img src=\"images/product3.png\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"product__description-top\">
                                <div class=\"product__name\">Chair</div>
                                <div class=\"product__articul\">Код:02051</div>
                            </div>
                            <div class=\"product__title\">
                                <a href=\"product.html\" class=\"product__link\">Buskbo armchair2</a>
                            </div>
                            <div class=\"product__price\">
                                <div class=\"product__price_current\">130 UAH</div>
                                <div class=\"product__price_old\">190 UAH</div>
                            </div>
                            <div class=\"product__bottom\">
                                <div class=\"product__bottom_group\">
                                    <span>Размер спального места 100см*100см*100см</span>
                                    <span>Размер Ш*В*Д 100см*100см*100см</span>
                                </div>
                                <div class=\"product__bottom_group\">
                                    <div class=\"product__bottom_img\">
                                        <img src=\"images/Shop.png\" alt=\"\">
                                    </div>
                                    <span>В корзину</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class=\"popular__tab-item carousel3 hide\">
                            <div class=\"product\">
                                <div class=\"product__label product__label_new\">New</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product1.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Dining chairs3</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">100 UAH</div>
                                    <div class=\"product__price_old\">120 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                                <div class=\"product__label product__label_sale\">Sale</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product2.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Minimal iconic chair3</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">12000 UAH</div>
                                    <div class=\"product__price_old\">150000 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                            <div class=\"product__label product__label_sale\">Sale</div>
                            <div class=\"product__icons\">
                                <div class=\"product__icon product__icon_compare\">
                                    <img src=\"images/compare.png\" alt=\"\">
                                </div>
                                <div class=\"product__icon product__icon_favorite\">
                                    <img src=\"images/favorite.png\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"product__image\">
                                <a href=\"product.html\" class=\"product__link\">
                                    <img src=\"images/product3.png\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"product__description-top\">
                                <div class=\"product__name\">Chair</div>
                                <div class=\"product__articul\">Код:02051</div>
                            </div>
                            <div class=\"product__title\">
                                <a href=\"product.html\" class=\"product__link\">Buskbo armchair3</a>
                            </div>
                            <div class=\"product__price\">
                                <div class=\"product__price_current\">130 UAH</div>
                                <div class=\"product__price_old\">190 UAH</div>
                            </div>
                            <div class=\"product__bottom\">
                                <div class=\"product__bottom_group\">
                                    <span>Размер спального места 100см*100см*100см</span>
                                    <span>Размер Ш*В*Д 100см*100см*100см</span>
                                </div>
                                <div class=\"product__bottom_group\">
                                    <div class=\"product__bottom_img\">
                                        <img src=\"images/Shop.png\" alt=\"\">
                                    </div>
                                    <span>В корзину</span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  ";
    }

    public function getTemplateName()
    {
        return "mebel/template/extension/module/featured.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"popular\">
            <div class=\"container\">
                <div class=\"sectionTitle\">Трендовые товары</div>
                <div class=\"popular__content\">
                    <aside class=\"popular__aside\">
                        <ul class=\"popular__aside-list\">
                            <li class=\"popular__aside-item active\">
                                <a href=\"#\" class=\"popular__aside-link\">Новинки</a>
                            </li>
                            <li class=\"popular__aside-item\">
                                <a href=\"#\" class=\"popular__aside-link\">Акции</a>
                            </li>
                            <li class=\"popular__aside-item\">
                                <a href=\"#\" class=\"popular__aside-link\">Распродажа</a>
                            </li>
                        </ul>
                        <div class=\"popular__aside-nav\">
                            <span class=\"active\"></span>
                            <span></span>
                            <span></span>
                        </div>
                    </aside>
                    <div class=\"products__popular\">
                        <div class=\"popular__tab-item carousel1\">
                            <div class=\"product\">
                                <div class=\"product__label product__label_new\">New</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product1.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Dining chairs</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">100 UAH</div>
                                    <div class=\"product__price_old\">120 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                                <div class=\"product__label product__label_sale\">Sale</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product2.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Minimal iconic chair</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">12000 UAH</div>
                                    <div class=\"product__price_old\">150000 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                            <div class=\"product__label product__label_sale\">Sale</div>
                            <div class=\"product__icons\">
                                <div class=\"product__icon product__icon_compare\">
                                    <img src=\"images/compare.png\" alt=\"\">
                                </div>
                                <div class=\"product__icon product__icon_favorite\">
                                    <img src=\"images/favorite.png\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"product__image\">
                                <a href=\"product.html\" class=\"product__link\">
                                    <img src=\"images/product3.png\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"product__description-top\">
                                <div class=\"product__name\">Chair</div>
                                <div class=\"product__articul\">Код:02051</div>
                            </div>
                            <div class=\"product__title\">
                                <a href=\"product.html\" class=\"product__link\">Buskbo armchair</a>
                            </div>
                            <div class=\"product__price\">
                                <div class=\"product__price_current\">130 UAH</div>
                                <div class=\"product__price_old\">190 UAH</div>
                            </div>
                            <div class=\"product__bottom\">
                                <div class=\"product__bottom_group\">
                                    <span>Размер спального места 100см*100см*100см</span>
                                    <span>Размер Ш*В*Д 100см*100см*100см</span>
                                </div>
                                <div class=\"product__bottom_group\">
                                    <div class=\"product__bottom_img\">
                                        <img src=\"images/Shop.png\" alt=\"\">
                                    </div>
                                    <span>В корзину</span>
                                </div>
                            </div>
                            </div>
                            <div class=\"product\">
                                <div class=\"product__label product__label_new\">New</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product1.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Dining chairs</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">100 UAH</div>
                                    <div class=\"product__price_old\">120 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                                <div class=\"product__label product__label_sale\">Sale</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product2.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Minimal iconic chair</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">12000 UAH</div>
                                    <div class=\"product__price_old\">150000 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                            <div class=\"product__label product__label_sale\">Sale</div>
                            <div class=\"product__icons\">
                                <div class=\"product__icon product__icon_compare\">
                                    <img src=\"images/compare.png\" alt=\"\">
                                </div>
                                <div class=\"product__icon product__icon_favorite\">
                                    <img src=\"images/favorite.png\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"product__image\">
                                <a href=\"product.html\" class=\"product__link\">
                                    <img src=\"images/product3.png\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"product__description-top\">
                                <div class=\"product__name\">Chair</div>
                                <div class=\"product__articul\">Код:02051</div>
                            </div>
                            <div class=\"product__title\">
                                <a href=\"product.html\" class=\"product__link\">Buskbo armchair</a>
                            </div>
                            <div class=\"product__price\">
                                <div class=\"product__price_current\">130 UAH</div>
                                <div class=\"product__price_old\">190 UAH</div>
                            </div>
                            <div class=\"product__bottom\">
                                <div class=\"product__bottom_group\">
                                    <span>Размер спального места 100см*100см*100см</span>
                                    <span>Размер Ш*В*Д 100см*100см*100см</span>
                                </div>
                                <div class=\"product__bottom_group\">
                                    <div class=\"product__bottom_img\">
                                        <img src=\"images/Shop.png\" alt=\"\">
                                    </div>
                                    <span>В корзину</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class=\"popular__tab-item carousel2 hide\">
                            <div class=\"product\">
                                <div class=\"product__label product__label_new\">New</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product1.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Dining chairs2</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">100 UAH</div>
                                    <div class=\"product__price_old\">120 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                                <div class=\"product__label product__label_sale\">Sale</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product2.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Minimal iconic chair2</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">12000 UAH</div>
                                    <div class=\"product__price_old\">150000 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                            <div class=\"product__label product__label_sale\">Sale</div>
                            <div class=\"product__icons\">
                                <div class=\"product__icon product__icon_compare\">
                                    <img src=\"images/compare.png\" alt=\"\">
                                </div>
                                <div class=\"product__icon product__icon_favorite\">
                                    <img src=\"images/favorite.png\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"product__image\">
                                <a href=\"product.html\" class=\"product__link\">
                                    <img src=\"images/product3.png\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"product__description-top\">
                                <div class=\"product__name\">Chair</div>
                                <div class=\"product__articul\">Код:02051</div>
                            </div>
                            <div class=\"product__title\">
                                <a href=\"product.html\" class=\"product__link\">Buskbo armchair2</a>
                            </div>
                            <div class=\"product__price\">
                                <div class=\"product__price_current\">130 UAH</div>
                                <div class=\"product__price_old\">190 UAH</div>
                            </div>
                            <div class=\"product__bottom\">
                                <div class=\"product__bottom_group\">
                                    <span>Размер спального места 100см*100см*100см</span>
                                    <span>Размер Ш*В*Д 100см*100см*100см</span>
                                </div>
                                <div class=\"product__bottom_group\">
                                    <div class=\"product__bottom_img\">
                                        <img src=\"images/Shop.png\" alt=\"\">
                                    </div>
                                    <span>В корзину</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class=\"popular__tab-item carousel3 hide\">
                            <div class=\"product\">
                                <div class=\"product__label product__label_new\">New</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product1.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Dining chairs3</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">100 UAH</div>
                                    <div class=\"product__price_old\">120 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                                <div class=\"product__label product__label_sale\">Sale</div>
                                <div class=\"product__icons\">
                                    <div class=\"product__icon product__icon_compare\">
                                        <img src=\"images/compare.png\" alt=\"\">
                                    </div>
                                    <div class=\"product__icon product__icon_favorite\">
                                        <img src=\"images/favorite.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product__image\">
                                    <a href=\"product.html\" class=\"product__link\">
                                        <img src=\"images/product2.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Chair</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">Minimal iconic chair3</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">12000 UAH</div>
                                    <div class=\"product__price_old\">150000 UAH</div>
                                </div>
                                <div class=\"product__bottom\">
                                    <div class=\"product__bottom_group\">
                                        <span>Размер спального места 100см*100см*100см</span>
                                        <span>Размер Ш*В*Д 100см*100см*100см</span>
                                    </div>
                                    <div class=\"product__bottom_group\">
                                        <div class=\"product__bottom_img\">
                                            <img src=\"images/Shop.png\" alt=\"\">
                                        </div>
                                        <span>В корзину</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product\">
                            <div class=\"product__label product__label_sale\">Sale</div>
                            <div class=\"product__icons\">
                                <div class=\"product__icon product__icon_compare\">
                                    <img src=\"images/compare.png\" alt=\"\">
                                </div>
                                <div class=\"product__icon product__icon_favorite\">
                                    <img src=\"images/favorite.png\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"product__image\">
                                <a href=\"product.html\" class=\"product__link\">
                                    <img src=\"images/product3.png\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"product__description-top\">
                                <div class=\"product__name\">Chair</div>
                                <div class=\"product__articul\">Код:02051</div>
                            </div>
                            <div class=\"product__title\">
                                <a href=\"product.html\" class=\"product__link\">Buskbo armchair3</a>
                            </div>
                            <div class=\"product__price\">
                                <div class=\"product__price_current\">130 UAH</div>
                                <div class=\"product__price_old\">190 UAH</div>
                            </div>
                            <div class=\"product__bottom\">
                                <div class=\"product__bottom_group\">
                                    <span>Размер спального места 100см*100см*100см</span>
                                    <span>Размер Ш*В*Д 100см*100см*100см</span>
                                </div>
                                <div class=\"product__bottom_group\">
                                    <div class=\"product__bottom_img\">
                                        <img src=\"images/Shop.png\" alt=\"\">
                                    </div>
                                    <span>В корзину</span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  ", "mebel/template/extension/module/featured.twig", "");
    }
}
