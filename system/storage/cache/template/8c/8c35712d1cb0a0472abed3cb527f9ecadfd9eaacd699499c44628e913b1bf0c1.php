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
class __TwigTemplate_5055c1aa520f5f8c5554fa7e937376d2b2c942089e792227f2dcfd188437cf25 extends Template
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
        // line 27
        echo "slideshow";
    }

    public function getTemplateName()
    {
        return "mebel/template/extension/module/slideshow.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{# <div class=\"slideshow swiper-viewport\">
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
