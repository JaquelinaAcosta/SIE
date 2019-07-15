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

/* AppBundle:Expediente:detalleExpediente.html.twig */
class __TwigTemplate_62c4432632740064b916d87d3e0fd7af4f013e01581d3ac7a4fd5b3de51ca6dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:detalleExpediente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:detalleExpediente.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:detalleExpediente.html.twig", 1);
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
            <h2 class=\"text-center \">Expediente Nro: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
        echo "</h2>
            <hr/>
            
            <div class=\"list-group\">
               
                    <p class=\"list-group-item-text\">Tema: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tema", []), "html", null, true);
        echo "</p>
                    <p class=\"list-group-item-text\">Concepto: ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "concepto", []), "html", null, true);
        echo "</p>
                    <p class=\"list-group-item-text\">Cantidad de fojas: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fojas", []), "html", null, true);
        echo "</p>
                    <p class=\"list-group-item-text\">Tipo: ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tipo", []), "html", null, true);
        echo "</p>
                    <p class=\"list-group-item-text\">Dependencia: ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "iniciadorDependencia", []), "html", null, true);
        echo "</p>
                    <p class=\"list-group-item-text\">Fecha de Inicio: ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaInicio", []), "d/m/Y"), "html", null, true);
        echo "</p>
                    <p class=\"list-group-item-text\">Fecha de Fin: ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []), "d/m/Y"), "html", null, true);
        echo "</p>
                    <p class=\"list-group-item-text\">Ubicación Actual: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "html", null, true);
        echo "</p>
                    
                    <hr>
                    <p class=\"list-group-item-text\">Resolución: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []), "html", null, true);
        echo "</p>
                    
                    <hr>
                    ";
        // line 38
        echo "                    
                    <hr>
                    ";
        // line 41
        echo "                  
                    <hr>
                    ";
        // line 44
        echo "                    
                    <hr>
                    ";
        // line 48
        echo "                    
                    <hr>
                    <a class=\"btn btn-default\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                   
            </div>
            
           
      
        </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Expediente:detalleExpediente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  133 => 44,  129 => 41,  125 => 38,  119 => 34,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  77 => 19,  60 => 4,  51 => 3,  29 => 1,);
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
            padding:10px;            
         }

    </style>
    
    <div class=\"formu col-lg-4 col-md-offset-1\">
        <div class=\"border border-primary\">
            <h2 class=\"text-center \">Expediente Nro: {{ expediente.nroExpediente}}</h2>
            <hr/>
            
            <div class=\"list-group\">
               
                    <p class=\"list-group-item-text\">Tema: {{ expediente.tema}}</p>
                    <p class=\"list-group-item-text\">Concepto: {{ expediente.concepto}}</p>
                    <p class=\"list-group-item-text\">Cantidad de fojas: {{ expediente.fojas}}</p>
                    <p class=\"list-group-item-text\">Tipo: {{ expediente.tipo}}</p>
                    <p class=\"list-group-item-text\">Dependencia: {{ expediente.iniciadorDependencia}}</p>
                    <p class=\"list-group-item-text\">Fecha de Inicio: {{ expediente.fechaInicio|date(\"d/m/Y\")}}</p>
                    <p class=\"list-group-item-text\">Fecha de Fin: {{ expediente.fechaFin|date(\"d/m/Y\")}}</p>
                    <p class=\"list-group-item-text\">Ubicación Actual: {{ expediente.ubicacionActual}}</p>
                    
                    <hr>
                    <p class=\"list-group-item-text\">Resolución: {{ expediente.resolucion}}</p>
                    
                    <hr>
                    {#  <p class=\"list-group-item-text\">Carátulas: {{ expediente.caratulas}}</p>#}
                    
                    <hr>
                    {#<p class=\"list-group-item-text\">Expedientes asociados: {{ expediente.expedientesAsociados}}</p>#}
                  
                    <hr>
                    {#<p class=\"list-group-item-text\">Movimientos: {{ expediente.movimientos}}</p>#}
                    
                    <hr>
                    {# no se si hace falta lo de persona.......
                    <p class=\"list-group-item-text\">Usuario: {{ expediente.persona}}</p>#}
                    
                    <hr>
                    <a class=\"btn btn-default\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                   
            </div>
            
           
      
        </div>
    </div>
    
{% endblock %}", "AppBundle:Expediente:detalleExpediente.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/Expediente/detalleExpediente.html.twig");
    }
}
