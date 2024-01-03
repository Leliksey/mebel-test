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

/* mebel/template/common/header.twig */
class __TwigTemplate_746c23ede3e145d44b41229d77cab651563cf43a442fc5fadd68f7b82eb9023c extends Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
\t<html
\tdir=\"";
        // line 7
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"> <!--<![endif]-->
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
\t\t<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 17
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 20
        echo "\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\"/>
\t\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
\t\t<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css\" rel=\"stylesheet\"/>
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/owlcarousel/owl.theme.default.min.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/owlcarousel/owl.carousel.min.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/slick/slick-theme.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/slick/slick.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:wght@500;600&display=swap\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/app.css\">
\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 36
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 36);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 36);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 36);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 39
            echo "\t\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 43
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 43);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 43);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 46
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t</head>
\t<body>
\t\t<header>
\t\t\t
\t\t</header>
\t\t";
        // line 53
        echo ($context["menu"] ?? null);
        echo "
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "mebel/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 53,  170 => 48,  161 => 46,  156 => 45,  145 => 43,  141 => 42,  138 => 41,  129 => 39,  124 => 38,  111 => 36,  107 => 35,  90 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  55 => 7,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"{{ direction }}\" lang=\"{{ lang }}\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"{{ direction }}\" lang=\"{{ lang }}\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
\t<html
\tdir=\"{{ direction }}\" lang=\"{{ lang }}\"> <!--<![endif]-->
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>{{ title }}</title>
\t\t<base href=\"{{ base }}\"/>
\t\t{% if description %}
\t\t\t<meta name=\"description\" content=\"{{ description }}\"/>
\t\t{% endif %}
\t\t{% if keywords %}
\t\t\t<meta name=\"keywords\" content=\"{{ keywords }}\"/>
\t\t{% endif %}
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\"/>
\t\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
\t\t<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css\" rel=\"stylesheet\"/>
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/owlcarousel/owl.theme.default.min.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/owlcarousel/owl.carousel.min.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/slick/slick-theme.css\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/slick/slick.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:wght@500;600&display=swap\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/mebel/assets/css/app.css\">
\t\t{% for style in styles %}
\t\t\t<link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
\t\t{% endfor %}
\t\t{% for script in scripts %}
\t\t\t<script src=\"{{ script }}\" type=\"text/javascript\"></script>
\t\t{% endfor %}
\t\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t\t{% for link in links %}
\t\t\t<link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
\t\t{% endfor %}
\t\t{% for analytic in analytics %}
\t\t\t{{ analytic }}
\t\t{% endfor %}
\t</head>
\t<body>
\t\t<header>
\t\t\t
\t\t</header>
\t\t{{ menu }}
\t</body>
</html>
", "mebel/template/common/header.twig", "");
    }
}
