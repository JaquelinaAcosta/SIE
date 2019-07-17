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

/* AppBundle:Expediente:listadoExpediente.html.twig */
class __TwigTemplate_30a25b2efbe3082d1ea36eef481e2a46039b69b13e9163915b6143d6c1f31456 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoExpediente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoExpediente.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:listadoExpediente.html.twig", 1);
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

        // line 4
        echo "    <style>
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;           
        }
        .expediente{
            margin-right: 12px;
        }
        .expediente p{
            margin-top:10px;
        }
        .titulo{
            height: 30px;
            padding:7px;
            background-color:black;
            color: #fff;
        }
        .panel{
            font-size: 11px;        
        }
        .form-exp{
            font-size:15px;
            padding:10px;
        }
        .title{
            font-size:16px;
        }
    </style>
    
    <div class=\"formu col-lg-12\">
        <div class=\"border border-primary\">
            <h2 class=\"text-center\">Lista de Expedientes</h2>
            <hr/>              
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["expediente"]);
        foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
            // line 41
            echo "                   <div class=\"expediente col-lg-3\">
                       <div class=\"titulo\">
                            <h4 class=\"list-group-item-heading\">Nro. Expediente: ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "nroExpediente", []));
            echo "</h4>
                       </div>
                       
                        <p class=\"list-group-item-text\">Tema: ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "tema", []));
            echo "</p>
                        <hr/>
                        <p class=\"list-group-item-text\">Concepto: ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "concepto", []));
            echo "</p>
                        <hr/>
                        <a class=\"btn btn-default\" href=\"expediente/";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "id", []), "html", null, true);
            echo "\"  role=\"button\">Ver detalle</a>
                        <a class=\"btn btn-default\" href=\"edit/";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "id", []), "html", null, true);
            echo "\"  role=\"button\">Modificar</a>
                        <a class=\"btn btn-default\" href=\"delete/";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "id", []), "html", null, true);
            echo "\"  role=\"button\">Eliminar</a>
                   </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                
      
        </div>
    </div>
    
    ";
        // line 61
        echo "    
    
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Expediente:listadoExpediente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 61,  139 => 55,  130 => 52,  126 => 51,  122 => 50,  117 => 48,  112 => 46,  106 => 43,  102 => 41,  98 => 40,  60 => 4,  51 => 3,  29 => 1,);
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
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;           
        }
        .expediente{
            margin-right: 12px;
        }
        .expediente p{
            margin-top:10px;
        }
        .titulo{
            height: 30px;
            padding:7px;
            background-color:black;
            color: #fff;
        }
        .panel{
            font-size: 11px;        
        }
        .form-exp{
            font-size:15px;
            padding:10px;
        }
        .title{
            font-size:16px;
        }
    </style>
    
    <div class=\"formu col-lg-12\">
        <div class=\"border border-primary\">
            <h2 class=\"text-center\">Lista de Expedientes</h2>
            <hr/>              
            {% for expediente in expediente %}
                   <div class=\"expediente col-lg-3\">
                       <div class=\"titulo\">
                            <h4 class=\"list-group-item-heading\">Nro. Expediente: {{ expediente.nroExpediente|e }}</h4>
                       </div>
                       
                        <p class=\"list-group-item-text\">Tema: {{ expediente.tema|e }}</p>
                        <hr/>
                        <p class=\"list-group-item-text\">Concepto: {{ expediente.concepto|e }}</p>
                        <hr/>
                        <a class=\"btn btn-default\" href=\"expediente/{{expediente.id}}\"  role=\"button\">Ver detalle</a>
                        <a class=\"btn btn-default\" href=\"edit/{{expediente.id}}\"  role=\"button\">Modificar</a>
                        <a class=\"btn btn-default\" href=\"delete/{{expediente.id}}\"  role=\"button\">Eliminar</a>
                   </div>
            {% endfor %}
                
      
        </div>
    </div>
    
    {#{{dump(expediente)}}#}
    
    
  
{% endblock %}", "AppBundle:Expediente:listadoExpediente.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/Expediente/listadoExpediente.html.twig");
    }
}
