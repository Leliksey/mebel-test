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
class __TwigTemplate_4629981b3217cce7f5f051f5f25211da245dba55e1ffab7e08236bb199c824e0 extends Template
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
            <div class=\"\">
                <div class=\"sectionTitle\">Трендовые товары</div>
                <div class=\"popular__content\">
                    <!--<aside class=\"popular__aside\">
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
                    </aside>-->
                    <div class=\"products__popular\">
                        <div class=\"popular__tab-item carousel1\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "                            <div class=\"product\">
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
                                        <img src=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 38);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38);
            echo "\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Category name</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
            echo "</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 49);
            echo "</div>
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
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section>  ";
    }

    public function getTemplateName()
    {
        return "mebel/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 66,  100 => 49,  94 => 46,  81 => 38,  67 => 26,  63 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"popular\">
            <div class=\"\">
                <div class=\"sectionTitle\">Трендовые товары</div>
                <div class=\"popular__content\">
                    <!--<aside class=\"popular__aside\">
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
                    </aside>-->
                    <div class=\"products__popular\">
                        <div class=\"popular__tab-item carousel1\">
                        {% for product in products %}
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
                                        <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\">
                                    </a>
                                </div>
                                <div class=\"product__description-top\">
                                    <div class=\"product__name\">Category name</div>
                                    <div class=\"product__articul\">Код:02051</div>
                                </div>
                                <div class=\"product__title\">
                                    <a href=\"product.html\" class=\"product__link\">{{ product.name }}</a>
                                </div>
                                <div class=\"product__price\">
                                    <div class=\"product__price_current\">{{ product.price }}</div>
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
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </section>  ", "mebel/template/extension/module/featured.twig", "");
    }
}
