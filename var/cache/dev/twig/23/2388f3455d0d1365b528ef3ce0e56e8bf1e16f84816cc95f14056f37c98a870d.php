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

/* AppBundle:PaginaPrincipal:index.html.twig */
class __TwigTemplate_f00a9fe82af130be4151094a955578bdb99db76fa1545477496e9c6c74bcc6a1 extends \Twig\Template
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
        // line 1
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:PaginaPrincipal:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:PaginaPrincipal:index.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:PaginaPrincipal:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "  
    <style>   
        
        body{
            margin:0;
        }
        
        .main{              
            width:auto;          
        }
        .header p{
            margin-left:3%;
            color:#7d7d7d;
            font-size: 18px;
        }
        .opciones{
            margin:0;
            padding:10px;
            display:flex;
        }

        .add,.list,.search{
            width:350px;
            height:350px; 
            margin:0; 
            margin-left:20px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(207,207,207,1);
            -moz-box-shadow: 10px 10px 5px 0px rgba(207,207,207,1);
            box-shadow: 10px 10px 5px 0px rgba(207,207,207,1);
            outline: 0px dashed #9e9e9e;
            -webkit-transition: outline 0.05s;
        }
        .content img{
            margin-left:26%;
        }
        .content h4{
            text-align: center;
            color:#fff;
            padding-left: 29px;
            padding-right:29px;
        }
        .content p{
            text-align: justify;
            font-size:18px;
            padding-left: 29px;
            padding-right:29px;
            color:#fff;
        }

        .add{
            background-color: #f5b92f;           
        }
        .list{
            background-color:#6bc238;       
        }
        .search{
            background-color: #6eb6ff;
        }
        
        .add:hover{
           cursor: pointer;
           outline: 5px dashed #9e9e9e;
           text-decoration:none; 
           transition-property: outline;
           transition-duration:  0.05s;
           transition-timing-function: linear;
        }
         .search:hover{
           cursor: pointer;
           outline: 5px dashed #9e9e9e;
           text-decoration:none;
           transition-property: outline;
           transition-duration:  0.05s;
           transition-timing-function: linear;
          
        }

         .list:hover{
           cursor: pointer;
           outline: 5px dashed #9e9e9e;
           text-decoration:none;
           transition-property: outline;
           transition-duration:  0.05s;
           transition-timing-function: linear;
          
        }       
    </style>
    
    <div class=\"main\">
        <div class=\"header\">
            <p>A continuación, eliga la operación que desea realizar.</p>
            <hr/>
            <div class=\"opciones\">
                <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoExpediente");
        echo "\" class=\"add\"> 
                    <div class=\"content\">
                        <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Icons/add.png"), "html", null, true);
        echo "\" width=\"170\"/>
                        <h4><strong>CARGAR UN EXPEDIENTE</strong></h4>
                        <p>Seleccione para cargar un nuevo expediente en el sistema.</p>  
                    </div>
                </a>
                <a href=\"#\" class=\"search\"> 
                    <div class=\"content\">
                        <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Icons/search.png"), "html", null, true);
        echo "\" width=\"170\"/>
                        <h4><strong>BUSCAR EXPEDIENTES</strong></h4>
                        <p>Al seleccionar esta opción, podrá buscar expedientes con filtros específicos y eventualmente, podrá realizar acciones en ellos.</p>   
                    </div>
                </a>
                <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listaExpediente");
        echo "\" class=\"list\"> 
                    <div class=\"content\">
                        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Icons/list.png"), "html", null, true);
        echo "\" width=\"170\"/>
                        <h4><strong>HISTORIAL DE EXPEDIENTES</strong></h4>
                        <p>Aquí se podran ver los expedientes cargados por un usuario específico.</p> 
                    </div>
                </a>
            </div>
        </div>
        <hr/>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:PaginaPrincipal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 112,  177 => 110,  169 => 105,  159 => 98,  154 => 96,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block content %}  
    <style>   
        
        body{
            margin:0;
        }
        
        .main{              
            width:auto;          
        }
        .header p{
            margin-left:3%;
            color:#7d7d7d;
            font-size: 18px;
        }
        .opciones{
            margin:0;
            padding:10px;
            display:flex;
        }

        .add,.list,.search{
            width:350px;
            height:350px; 
            margin:0; 
            margin-left:20px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(207,207,207,1);
            -moz-box-shadow: 10px 10px 5px 0px rgba(207,207,207,1);
            box-shadow: 10px 10px 5px 0px rgba(207,207,207,1);
            outline: 0px dashed #9e9e9e;
            -webkit-transition: outline 0.05s;
        }
        .content img{
            margin-left:26%;
        }
        .content h4{
            text-align: center;
            color:#fff;
            padding-left: 29px;
            padding-right:29px;
        }
        .content p{
            text-align: justify;
            font-size:18px;
            padding-left: 29px;
            padding-right:29px;
            color:#fff;
        }

        .add{
            background-color: #f5b92f;           
        }
        .list{
            background-color:#6bc238;       
        }
        .search{
            background-color: #6eb6ff;
        }
        
        .add:hover{
           cursor: pointer;
           outline: 5px dashed #9e9e9e;
           text-decoration:none; 
           transition-property: outline;
           transition-duration:  0.05s;
           transition-timing-function: linear;
        }
         .search:hover{
           cursor: pointer;
           outline: 5px dashed #9e9e9e;
           text-decoration:none;
           transition-property: outline;
           transition-duration:  0.05s;
           transition-timing-function: linear;
          
        }

         .list:hover{
           cursor: pointer;
           outline: 5px dashed #9e9e9e;
           text-decoration:none;
           transition-property: outline;
           transition-duration:  0.05s;
           transition-timing-function: linear;
          
        }       
    </style>
    
    <div class=\"main\">
        <div class=\"header\">
            <p>A continuación, eliga la operación que desea realizar.</p>
            <hr/>
            <div class=\"opciones\">
                <a href=\"{{ path(\"nuevoExpediente\") }}\" class=\"add\"> 
                    <div class=\"content\">
                        <img src=\"{{ asset(\"Icons/add.png\") }}\" width=\"170\"/>
                        <h4><strong>CARGAR UN EXPEDIENTE</strong></h4>
                        <p>Seleccione para cargar un nuevo expediente en el sistema.</p>  
                    </div>
                </a>
                <a href=\"#\" class=\"search\"> 
                    <div class=\"content\">
                        <img src=\"{{ asset(\"Icons/search.png\") }}\" width=\"170\"/>
                        <h4><strong>BUSCAR EXPEDIENTES</strong></h4>
                        <p>Al seleccionar esta opción, podrá buscar expedientes con filtros específicos y eventualmente, podrá realizar acciones en ellos.</p>   
                    </div>
                </a>
                <a href=\"{{ path(\"listaExpediente\") }}\" class=\"list\"> 
                    <div class=\"content\">
                        <img src=\"{{ asset(\"Icons/list.png\") }}\" width=\"170\"/>
                        <h4><strong>HISTORIAL DE EXPEDIENTES</strong></h4>
                        <p>Aquí se podran ver los expedientes cargados por un usuario específico.</p> 
                    </div>
                </a>
            </div>
        </div>
        <hr/>
    </div>
    
{% endblock %}", "AppBundle:PaginaPrincipal:index.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/PaginaPrincipal/index.html.twig");
    }
}
