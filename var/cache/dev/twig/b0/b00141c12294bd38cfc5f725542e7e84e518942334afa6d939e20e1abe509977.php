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



    <h4 class=\"text-center\">    <i class=\"fas fa-bars\"></i> Lista de Expedientes -  ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "dependencia", []), "descripcion", []), "html", null, true);
        echo "</h4>
    <hr/>
    <table class=\"table table-striped\">
        <thead class=\"\">
            <tr>
                <th scope=\"col\">Nro. Expediente</th>
                <th scope=\"col\">Concepto</th>
                <th scope=\"col\">Tema</th>
                <th scope=\"col\">Fecha Inicio</th>
                <th scope=\"col\">Ubicacion</th>
                <th scope=\"col\">Acciones</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["expediente"]));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
            // line 65
            echo "                <tr>
                    <td class=\"text-default\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "nroExpediente", []));
            echo "</td>
                    <td class=\"text-default\"><p>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "concepto", []));
            echo "</p></td>
                    <td class=\"text-default\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "tema", []));
            echo "</td>
                    <td class=\"text-default\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "fechaInicio", []));
            echo "</td>
                    <td class=\"text-default\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "ubicacionActual", []));
            echo "</td>
                    <td><a class=\"btn btn-info\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-search\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"></i></a>
                        <a class=\"btn btn-warning\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
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
        return "AppBundle:Expediente:listadoExpediente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 76,  160 => 73,  156 => 72,  152 => 71,  148 => 70,  144 => 69,  140 => 68,  136 => 67,  132 => 66,  129 => 65,  125 => 64,  107 => 49,  60 => 4,  51 => 3,  29 => 1,);
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



    <h4 class=\"text-center\">    <i class=\"fas fa-bars\"></i> Lista de Expedientes -  {{ app.user.persona.dependencia.descripcion }}</h4>
    <hr/>
    <table class=\"table table-striped\">
        <thead class=\"\">
            <tr>
                <th scope=\"col\">Nro. Expediente</th>
                <th scope=\"col\">Concepto</th>
                <th scope=\"col\">Tema</th>
                <th scope=\"col\">Fecha Inicio</th>
                <th scope=\"col\">Ubicacion</th>
                <th scope=\"col\">Acciones</th>
            </tr>
        </thead>
        <tbody>

            {% for expediente in expediente|reverse %}
                <tr>
                    <td class=\"text-default\">{{expediente.nroExpediente|e }}</td>
                    <td class=\"text-default\"><p>{{expediente.concepto|e }}</p></td>
                    <td class=\"text-default\">{{expediente.tema|e }}</td>
                    <td class=\"text-default\">{{expediente.fechaInicio|e }}</td>
                    <td class=\"text-default\">{{expediente.ubicacionActual|e }}</td>
                    <td><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente.id}) }}\"  role=\"button\"><i class=\"fas fa-search\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"></i></a>
                        <a class=\"btn btn-warning\" href=\"{{ path(\"editar_expediente\", {'id':expediente.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                        <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_expediente\", {'id':expediente.id}) }}\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
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
{% endblock %}", "AppBundle:Expediente:listadoExpediente.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/Expediente/listadoExpediente.html.twig");
    }
}
