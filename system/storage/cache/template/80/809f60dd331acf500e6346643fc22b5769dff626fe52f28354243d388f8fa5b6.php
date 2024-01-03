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

/* mebel/template/common/language.twig */
class __TwigTemplate_11b18476288c943f66d11fecebeb76bf85fa25d337eff9655c6f171cce374dd6 extends Template
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
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["languages"] ?? null)), 1))) {
            // line 2
            echo "  <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
    <div class=\"btn-group\">
      <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "      ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6), ($context["code"] ?? null)))) {
                    echo " 
      ";
                }
                // line 8
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "      <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_language"] ?? null);
            echo "</span></button>
      <ul class=\"dropdown-menu\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 12
                echo "        ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 12), ($context["code"] ?? null)))) {
                    echo " 
        <li>
          <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 14);
                    echo "\">
           ";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 15);
                    echo "
           </button>
        </li>
        ";
                }
                // line 19
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 23
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "mebel/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  95 => 20,  89 => 19,  82 => 15,  78 => 14,  72 => 12,  68 => 11,  62 => 9,  56 => 8,  50 => 6,  46 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if languages|length > 1 %}
  <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
    <div class=\"btn-group\">
      <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
      {% for language in languages %}
      {% if language.code == code %} 
      {% endif %}
      {% endfor %}
      <span class=\"hidden-xs hidden-sm hidden-md\">{{ text_language }}</span></button>
      <ul class=\"dropdown-menu\">
        {% for language in languages %}
        {% if language.code != code %} 
        <li>
          <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"{{ language.code }}\">
           {{ language.name }}
           </button>
        </li>
        {% endif %}
        {% endfor %}
      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
  </form>
{% endif %}
", "mebel/template/common/language.twig", "");
    }
}
