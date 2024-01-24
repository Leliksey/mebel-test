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

/* default/template/extension/module/custom/payment.twig */
class __TwigTemplate_8ed17f19077c350217ad7d3d30299015cebe3de02cac1a859fa8bd0b33e2ba53 extends Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">";
        // line 2
        echo ($context["heading_payment"] ?? null);
        echo "</div>
  <div class=\"panel-body\">

    ";
        // line 5
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 6
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 7
        echo " 

    ";
        // line 9
        if (($context["payment_methods"] ?? null)) {
            echo " 
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                echo " 
    <div class=\"radio\">
      <label>
        ";
                // line 13
                if (((0 === twig_compare((($__internal_compile_0 = $context["payment_method"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["code"] ?? null) : null), ($context["code"] ?? null))) ||  !($context["code"] ?? null))) {
                    echo " 
        ";
                    // line 14
                    $context["code"] = (($__internal_compile_1 = $context["payment_method"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["code"] ?? null) : null);
                    echo " 
        <input type=\"radio\" name=\"payment_method\" value=\"";
                    // line 15
                    echo (($__internal_compile_2 = $context["payment_method"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["code"] ?? null) : null);
                    echo "\" checked=\"checked\" />
        ";
                } else {
                    // line 16
                    echo " 
        <input type=\"radio\" name=\"payment_method\" value=\"";
                    // line 17
                    echo (($__internal_compile_3 = $context["payment_method"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["code"] ?? null) : null);
                    echo "\" />
        ";
                }
                // line 18
                echo " 
        ";
                // line 19
                echo (($__internal_compile_4 = $context["payment_method"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["title"] ?? null) : null);
                echo " 
        ";
                // line 20
                if ((($__internal_compile_5 = $context["payment_method"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["terms"] ?? null) : null)) {
                    echo " 
        (";
                    // line 21
                    echo (($__internal_compile_6 = $context["payment_method"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["terms"] ?? null) : null);
                    echo ")
        ";
                }
                // line 22
                echo " 
        ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "description", [], "array", true, true, false, 23)) {
                    echo " 
        <br /><small>";
                    // line 24
                    echo (($__internal_compile_7 = $context["payment_method"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["description"] ?? null) : null);
                    echo "</small>
        ";
                }
                // line 25
                echo " 
      </label>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo " 
    ";
        }
        // line 29
        echo " 

    
    <script>
        \$(function(){

            let customer_group_id = ";
        // line 35
        echo ($context["customer_group_id"] ?? null);
        echo ";

            if ( \$('#custom-customer input[name=\\'customer_group_id\\']:checked').val() !== undefined ) {
                customer_group_id = \$('#custom-customer input[name=\\'customer_group_id\\']:checked').val();
            }

            custom_block.payment( customer_group_id );
            
        });
    </script>


  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/custom/payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 35,  133 => 29,  129 => 28,  120 => 25,  115 => 24,  111 => 23,  108 => 22,  103 => 21,  99 => 20,  95 => 19,  92 => 18,  87 => 17,  84 => 16,  79 => 15,  75 => 14,  71 => 13,  63 => 10,  59 => 9,  55 => 7,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel panel-default\">
  <div class=\"panel-heading\">{{ heading_payment }}</div>
  <div class=\"panel-body\">

    {% if (error_warning) %} 
    <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
    {% endif %} 

    {% if (payment_methods) %} 
    {% for payment_method in payment_methods %} 
    <div class=\"radio\">
      <label>
        {% if (payment_method['code'] == code or not code) %} 
        {% set code = payment_method['code'] %} 
        <input type=\"radio\" name=\"payment_method\" value=\"{{ payment_method['code'] }}\" checked=\"checked\" />
        {% else %} 
        <input type=\"radio\" name=\"payment_method\" value=\"{{ payment_method['code'] }}\" />
        {% endif %} 
        {{ payment_method['title'] }} 
        {% if (payment_method['terms']) %} 
        ({{ payment_method['terms'] }})
        {% endif %} 
        {% if (payment_method['description'] is defined) %} 
        <br /><small>{{ payment_method['description'] }}</small>
        {% endif %} 
      </label>
    </div>
    {% endfor %} 
    {% endif %} 

    
    <script>
        \$(function(){

            let customer_group_id = {{ customer_group_id }};

            if ( \$('#custom-customer input[name=\\'customer_group_id\\']:checked').val() !== undefined ) {
                customer_group_id = \$('#custom-customer input[name=\\'customer_group_id\\']:checked').val();
            }

            custom_block.payment( customer_group_id );
            
        });
    </script>


  </div>
</div>", "default/template/extension/module/custom/payment.twig", "");
    }
}
