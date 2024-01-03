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
class __TwigTemplate_e38e221cb87508d1c2df257e34d195372198e2dacaf09205dc12e3981bfe7322 extends Template
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
        echo "        <footer>
        
        </footer>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 5
            echo "            <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 5);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 5);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 5);
            echo "\"/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 8
            echo "            <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
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
        return array (  73 => 10,  64 => 8,  59 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <footer>
        
        </footer>
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
