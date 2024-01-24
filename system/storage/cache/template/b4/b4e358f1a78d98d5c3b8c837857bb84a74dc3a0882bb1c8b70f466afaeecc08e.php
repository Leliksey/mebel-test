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

/* mebel/template/product/category.twig */
class __TwigTemplate_d77e7217e33f797d48d5ccc1fdf288da00715cd5b8f4eb199b3135ddcf7c6d0f extends Template
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
    }

    public function getTemplateName()
    {
        return "mebel/template/product/category.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("{# {{ header }}

<div id=\"product-category\">

    <!-- Breadcrumb Start -->
    <div class=\"container-fluid\">
        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <nav class=\"breadcrumb bg-light mb-30\">
                    {% for breadcrumb in breadcrumbs %}
                        {% if loop.last %}
                            <span class=\"breadcrumb-item active\">{{ breadcrumb.text }}</span>
                        {% else %}
                            <a class=\"breadcrumb-item text-dark\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                        {% endif %}
                    {% endfor %}
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class=\"container-fluid\" style=\"position: relative;\">

        <div class=\"ajax-loader\">
            <img src=\"catalog/view/theme/mebel/assets/images/ripple.svg\" alt=\"\">
        </div>

        <div class=\"row px-xl-5\">

            {{ column_left }}

            {% if column_left and column_right %}
                {% set class, card = 'col-lg-6 col-md-8', 'col-lg-6' %}
            {% elseif column_left or column_right %}
                {% set class, card = 'col-lg-9 col-md-8', 'col-lg-4' %}
            {% else %}
                {% set class, card = 'col-12', 'col-lg-3' %}
            {% endif %}

            <!-- Shop Product Start -->
            <div class=\"{{ class }}\" id=\"content\">

                <div class=\"row\">
                    <div class=\"col-12\">
                        <h1 class=\"section-title position-relative text-uppercase mb-4 h3\">
                            <span class=\"bg-secondary pr-3\">{{ heading_title }}</span>
                        </h1>
                    </div>

                    {% if thumb or description %}
                        {% if thumb %}
                            <div class=\"col-4 col-sm-2\">
                                <img src=\"{{ thumb }}\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\"
                                     class=\"img-thumbnail\">
                            </div>
                        {% endif %}

                        {% if description %}
                            <div class=\"col-8 col-sm-10\">
                                {{ description }}
                            </div>
                        {% endif %}

                        <div class=\"col-12\">
                            <hr>
                        </div>
                    {% endif %}

                    {% if categories %}
                        <div class=\"col-12\">
                            <h4>{{ text_refine }}</h4>
                            {% if categories|length <= 5 %}
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <ul class=\"list-unstyled\">
                                            {% for category in categories %}
                                                <li><a href=\"{{ category.href }}\">{{ category.name }}</a></li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            {% else %}
                                <div class=\"row\">{% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}
                                        <div class=\"col-sm-3\">
                                            <ul class=\"list-unstyled\">
                                                {% for child in category %}
                                                    <li><a href=\"{{ child.href }}\">{{ child.name }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    {% endfor %}</div>
                                <br/>
                            {% endif %}
                        </div>
                    {% endif %}

                </div>

                <div class=\"row pb-3 products-items-sort\">

                    {% if products %}
                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"sort-select\">{{ text_sort }}</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-sort\" onchange=\"location = this.value;\">
                                    {% for sorts in sorts %}
                                        {% if sorts.value == '%s-%s'|format(sort, order) %}
                                            <option value=\"{{ sorts.href }}\"
                                                    selected=\"selected\">{{ sorts.text }}</option>
                                        {% else %}
                                            <option value=\"{{ sorts.href }}\">{{ sorts.text }}</option>
                                        {% endif %}
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    {% endif %}
                </div>

                <div class=\"row pb-3 product-items\">

                    {% if products %}
                        {% for product in products %}
                            <div class=\"{{ card }} col-sm-6 pb-1\">
                                {% include 'mebel/template/product_card.twig' %}
                            </div>
                        {% endfor %}

                    {% else %}
                        <div class=\"col-12\">
                            <p>{{ text_empty }}</p>
                        </div>
                    {% endif %}

                </div>

                {% if products %}
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <nav class=\"nav-pagination\">
                                        {{ pagination }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
            <!-- Shop Product End -->

        </div>
    </div>
    <!-- Shop End -->

</div>


{{ footer }} #}", "mebel/template/product/category.twig", "");
    }
}
