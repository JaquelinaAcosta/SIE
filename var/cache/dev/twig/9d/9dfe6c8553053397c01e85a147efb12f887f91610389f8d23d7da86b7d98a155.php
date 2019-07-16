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
            'content' => [$this, 'block_content'],
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
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    
    <style>
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
         }
         input[type=submit]{
            margin-bottom: 10px;
            padding:10px;            
         }

    </style>
    
    <div class=\"formu col-lg-4 col-md-offset-1\">
        <div class=\"border border-primary\">
            <h2 class=\"text-center\">Usuario</h2>
          
        </div>
    </div>
    
   
    <div class=\"col-lg-8\">
    
     <form action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
 
        ";
        // line 31
        echo "        <label>Usuario:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
 
       
        <label for=\"password\">Contraseña:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
        <br/>
 
        <button type=\"submit\" class=\"form-submit btn btn-primary\">Entrar</button>
        
         <input type=\"hidden\" name=\"_target_path\" value=\"/home\" />
    </form>
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
        return array (  93 => 32,  90 => 31,  85 => 28,  60 => 5,  51 => 4,  29 => 2,);
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

{% block content %}
    
    <style>
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
         }
         input[type=submit]{
            margin-bottom: 10px;
            padding:10px;            
         }

    </style>
    
    <div class=\"formu col-lg-4 col-md-offset-1\">
        <div class=\"border border-primary\">
            <h2 class=\"text-center\">Usuario</h2>
          
        </div>
    </div>
    
   
    <div class=\"col-lg-8\">
    
     <form action=\"{{ path('login_check') }}\" method=\"post\">
 
        {# Input para el campo iup #}
        <label>Usuario:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
 
       
        <label for=\"password\">Contraseña:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
        <br/>
 
        <button type=\"submit\" class=\"form-submit btn btn-primary\">Entrar</button>
        
         <input type=\"hidden\" name=\"_target_path\" value=\"/home\" />
    </form>
    </div>
        
 
{% endblock %}", "AppBundle:PaginaPrincipal:login.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/PaginaPrincipal/login.html.twig");
    }
}
