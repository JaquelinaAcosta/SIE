<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* AppBundle:PaginaPrincipal:login.html.twig */
class __TwigTemplate_dfc6036fa56eda70cb2bd40ece1b7ce08051cf6683f937e1daddf0423f6efe89 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'login' => [$this, 'block_login'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:PaginaPrincipal:login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:PaginaPrincipal:login.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:PaginaPrincipal:login.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_login($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        // line 5
        echo "
    <style>
        body{
            background-color:#474747;
        }
        .logincontent{
            width:525px;
            margin:0 auto;
            margin-top: 100px;
            background-color:#fff;

        } 
        .logincontent .border{
            padding:15px;

        }
        .co{
            background-color:#2e2e2e;
            height:10px;
        }
        .title{
            width:525px;
            padding:15px;
            margin:0 auto;
            margin-top: 30px;
        }
        p{
            text-align:center;
        }
        .header{
            ";
        // line 36
        echo "            color:gray;
            padding-top:6px;
            padding-bottom: 3px;
        }
        .header p{
            text-align: center;
            font-weight: bold;

        }
        .subcontent{
            padding:30px;
        }
        .btn{
            width:100%;
        }
    </style>
    ";
        // line 55
        echo "    <div class=\"logincontent\"> 
        <hr class=\"co\"/>
        <div class=\"border\">
            <form action=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
                <p>ACCESO AL SISTEMA</p>
        </div>
        <div class=\"subcontent\">
            ";
        // line 63
        echo "            <label>USUARIO</label>
            <input style=\"padding:20px;\" placeholder=\"Email | Usuario(iup)\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>

            <label for=\"password\">CONTRASEÑA</label>
            <input style=\"padding:14px;\" placeholder=\"**********\" type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
            <br/>

            <button style=\"padding:14px;\" type=\"submit\" class=\"form-submit btn btn-info\">ENTRAR</button>

            <input type=\"hidden\" name=\"_target_path\" value=\"/\" />
        </div>
    </form>
</div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:PaginaPrincipal:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 64,  122 => 63,  115 => 58,  110 => 55,  92 => 36,  60 => 5,  51 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"AppBundle::layout.html.twig\" %}

{% block login %}

    <style>
        body{
            background-color:#474747;
        }
        .logincontent{
            width:525px;
            margin:0 auto;
            margin-top: 100px;
            background-color:#fff;

        } 
        .logincontent .border{
            padding:15px;

        }
        .co{
            background-color:#2e2e2e;
            height:10px;
        }
        .title{
            width:525px;
            padding:15px;
            margin:0 auto;
            margin-top: 30px;
        }
        p{
            text-align:center;
        }
        .header{
            {#            background-color:#5294ff;#}
            color:gray;
            padding-top:6px;
            padding-bottom: 3px;
        }
        .header p{
            text-align: center;
            font-weight: bold;

        }
        .subcontent{
            padding:30px;
        }
        .btn{
            width:100%;
        }
    </style>
    {#    <div class=\"title\">
            <h1 class=\"text-primary\"><p style=\"color:#5eb5ab;\">BIENVENIDO AL SISTEMA DE GESTION INTERNA DE EXPEDIENTES</p></h1>
        </div>#}
    <div class=\"logincontent\"> 
        <hr class=\"co\"/>
        <div class=\"border\">
            <form action=\"{{ path('login_check') }}\" method=\"post\">
                <p>ACCESO AL SISTEMA</p>
        </div>
        <div class=\"subcontent\">
            {# Input para el campo iup #}
            <label>USUARIO</label>
            <input style=\"padding:20px;\" placeholder=\"Email | Usuario(iup)\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>

            <label for=\"password\">CONTRASEÑA</label>
            <input style=\"padding:14px;\" placeholder=\"**********\" type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
            <br/>

            <button style=\"padding:14px;\" type=\"submit\" class=\"form-submit btn btn-info\">ENTRAR</button>

            <input type=\"hidden\" name=\"_target_path\" value=\"/\" />
        </div>
    </form>
</div>
</div>


{% endblock %}", "AppBundle:PaginaPrincipal:login.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/PaginaPrincipal/login.html.twig");
    }
}
