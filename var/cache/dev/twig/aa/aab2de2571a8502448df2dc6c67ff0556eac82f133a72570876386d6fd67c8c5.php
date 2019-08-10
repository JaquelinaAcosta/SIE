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

/* AppBundle:Expediente:listadoCaratulas.html.twig */
class __TwigTemplate_ba7aa7db0e5d0776e97e52d2b98426a14fe47233f903abeb0477efb49f72a296 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoCaratulas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoCaratulas.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:listadoCaratulas.html.twig", 1);
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
            padding:15px;
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
            font-size: 15px; 
            margin-bottom: 20px;
            margin-right: 20px;
        }
        .form-exp{
            font-size:15px;
            padding:10px;
        }
        .title{
            font-size:16px;
        }

        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

    </style>



    <h4 class=\"text-center\"><i class=\"fas fa-bars\"></i>CARÁTULAS - EXPEDIENTE ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
        echo " - 
        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\">Nuevo</a></h4>
    <hr/>
  
                
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                            <tr>
                                <th scope=\"col\">TEMA</th>
                                <th scope=\"col\">CONCEPTO</th>
                                <th scope=\"col\">FOJAS</th>
                                <th scope=\"col\">ACCIONES</th>

                            </tr>
                        </thead>

                        <tbody>

                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", []));
        foreach ($context['_seq'] as $context["_key"] => $context["caratulaAgregada"]) {
            // line 68
            echo "
                                <tr>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["caratulaAgregada"], "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["caratulaAgregada"], "concepto", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["caratulaAgregada"], "fojas", []), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-warning\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                                        <a class=\"btn btn-danger\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratulaAgregada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
                        </tbody>

                    </table>



    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
    <hr/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Expediente:listadoCaratulas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 79,  156 => 75,  152 => 74,  147 => 72,  143 => 71,  139 => 70,  135 => 68,  131 => 67,  111 => 50,  107 => 49,  60 => 4,  51 => 3,  29 => 1,);
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
            padding:15px;
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
            font-size: 15px; 
            margin-bottom: 20px;
            margin-right: 20px;
        }
        .form-exp{
            font-size:15px;
            padding:10px;
        }
        .title{
            font-size:16px;
        }

        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

    </style>



    <h4 class=\"text-center\"><i class=\"fas fa-bars\"></i>CARÁTULAS - EXPEDIENTE {{ expediente.nroExpediente }} - 
        <a href=\"{{ path('nueva_caratula',{'id':expediente.id}) }}\">Nuevo</a></h4>
    <hr/>
  
                
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                            <tr>
                                <th scope=\"col\">TEMA</th>
                                <th scope=\"col\">CONCEPTO</th>
                                <th scope=\"col\">FOJAS</th>
                                <th scope=\"col\">ACCIONES</th>

                            </tr>
                        </thead>

                        <tbody>

                            {% for caratulaAgregada in expediente.caratulas.getValues %}

                                <tr>
                                    <td>{{caratulaAgregada.tema.descripcion}}</td>
                                    <td>{{caratulaAgregada.concepto}}</td>
                                    <td>{{caratulaAgregada.fojas}}</td>
                                    <td>
                                        <a class=\"btn btn-warning\" href=\"{{ path(\"editar_caratula\", {'id':caratulaAgregada.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                                        <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_caratula\", {'id':caratulaAgregada.id}) }}\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                                </tr>

                            {% endfor %}

                        </tbody>

                    </table>



    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
    <hr/>
{% endblock %}", "AppBundle:Expediente:listadoCaratulas.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/listadoCaratulas.html.twig");
    }
}
