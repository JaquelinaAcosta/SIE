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
        .expediente{
            margin-right: 12px;
            padding:5px;
            font-size:15px;
        }

        .btn{
            width:30px;
            padding:5px;
            height:30px;
        }
        .btnopt{
            width:300px;
            padding:10px;
            height:30px;
        }
        .movimiento{
            width:auto;
            height: auto;
            float:right;
            padding:15px;
        }
        .right{
            float:right;
        }
    </style>

    <div class=\"border border-primary\">
        <div class=\"list-group col-lg-30 col-md-offset-1\">
            <div class=\"expediente col-lg-10 panel panel-primary\">
                <div class=\"panel-heading\" style=\"font-size:18px;\">
                    <i class=\"fas fa-info-circle\"></i> <strong>DETALLE DEL EXPEDIENTE</strong> - ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\" class=\"right btn btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Expediente\"><i class=\"fas fa-edit\"></i></a>
                </div>
                <table class=\"table table-striped table-hover\"> 
                    <thead>
                    <br/>
                    </thead>
                    <tbody>
                        <tr>
                            <th class=\"info list-group col-lg-2\">Tema</th>
                            <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tema", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Concepto</th>
                            <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "concepto", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Total de Fojas</th>
                            <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fojas", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Tipo</th>
                            <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tipo", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Iniciador Dependencia</th>
                            <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "iniciadorDependencia", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"info \">Fecha de inicio</th>
                            <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaInicio", []), "d/m/Y"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Fecha de Fin</th>
                            <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []), "d/m/Y"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Ubicacion   </th>
                            <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                    <tfoot>
                    <th>

                    </th>
                </table>

                <div class=\"botones\">
                    <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\" 
                       class=\"btnopt btn-primary\" 
                       role=\"button\">MOVIMIENTOS</a>
                    <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\" 
                       class=\"btnopt btn-primary\" 
                       role=\"button\">CARATULAS</a>
                    <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\" 
                       class=\"btnopt btn-primary\" 
                       role=\"button\">EXPEDIENTES ASOCIADOS</a>
                    ";
        // line 101
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []) == null)) {
            echo " 
                        <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_resolucion", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                           class=\"btnopt btn-primary\" 
                           role=\"button\">RESOLUCION</a>
                    ";
        }
        // line 106
        echo "

                </div>     
            </div>  

            ";
        // line 111
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []) != null)) {
            // line 112
            echo "                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        <i class=\"fas fa-info-circle\"></i> <strong>RESOLUCIÓN</strong> - ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
            echo "
                    </div>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th scope=\"col\">USUARIO</th>
                                <th scope=\"col\">NUMERO DE RESOLUCION</th>
                                <th scope=\"col\">TIPO</th>
                                <th scope=\"col\">FECHA</th>
                                <th scope=\"col\">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []), "usuario", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []), "numeroResolucion", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []), "tipo", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []), "fechaResolucion", []), "html", null, true);
            echo "</td>
                                <td><a class=\"btn btn-info\" href=\"\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                    <a class=\"btn btn-warning\" href=\"\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                    <a class=\"btn btn-danger\" href=\"\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                            </tr>

                        </tbody>
                    </table>
                ";
        }
        // line 141
        echo "            </div>

            <div class=\"col-lg-3 float left\">
                <a class=\"btn btn-primary\" onclick=\"history.back()\"  role=\"button\">Volver</a>
            </div>
        </div>

        <script>
            \$(function () {
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        </script>

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
        return array (  263 => 141,  251 => 132,  247 => 131,  243 => 130,  239 => 129,  221 => 114,  217 => 112,  215 => 111,  208 => 106,  201 => 102,  197 => 101,  191 => 98,  185 => 95,  179 => 92,  166 => 82,  159 => 78,  152 => 74,  145 => 70,  138 => 66,  131 => 62,  124 => 58,  117 => 54,  103 => 45,  60 => 4,  51 => 3,  29 => 1,);
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
        .expediente{
            margin-right: 12px;
            padding:5px;
            font-size:15px;
        }

        .btn{
            width:30px;
            padding:5px;
            height:30px;
        }
        .btnopt{
            width:300px;
            padding:10px;
            height:30px;
        }
        .movimiento{
            width:auto;
            height: auto;
            float:right;
            padding:15px;
        }
        .right{
            float:right;
        }
    </style>

    <div class=\"border border-primary\">
        <div class=\"list-group col-lg-30 col-md-offset-1\">
            <div class=\"expediente col-lg-10 panel panel-primary\">
                <div class=\"panel-heading\" style=\"font-size:18px;\">
                    <i class=\"fas fa-info-circle\"></i> <strong>DETALLE DEL EXPEDIENTE</strong> - {{ expediente.nroExpediente}}<a href=\"{{ path('editar_expediente',{'id':expediente.id}) }}\" class=\"right btn btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Expediente\"><i class=\"fas fa-edit\"></i></a>
                </div>
                <table class=\"table table-striped table-hover\"> 
                    <thead>
                    <br/>
                    </thead>
                    <tbody>
                        <tr>
                            <th class=\"info list-group col-lg-2\">Tema</th>
                            <td>{{ expediente.tema}}</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Concepto</th>
                            <td>{{ expediente.concepto}}</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Total de Fojas</th>
                            <td>{{ expediente.fojas}}</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Tipo</th>
                            <td>{{ expediente.tipo}}</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Iniciador Dependencia</th>
                            <td>{{ expediente.iniciadorDependencia}}</td>
                        </tr>
                        <tr>
                            <th class=\"info \">Fecha de inicio</th>
                            <td>{{ expediente.fechaInicio|date(\"d/m/Y\")}}</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Fecha de Fin</th>
                            <td>{{ expediente.fechaFin|date(\"d/m/Y\")}}</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">Ubicacion   </th>
                            <td>{{ expediente.ubicacionActual}}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                    <th>

                    </th>
                </table>

                <div class=\"botones\">
                    <a href=\"{{ path('listado_movimiento',{'id':expediente.id}) }}\" 
                       class=\"btnopt btn-primary\" 
                       role=\"button\">MOVIMIENTOS</a>
                    <a href=\"{{ path('listado_caratula',{'id':expediente.id}) }}\" 
                       class=\"btnopt btn-primary\" 
                       role=\"button\">CARATULAS</a>
                    <a href=\"{{ path('listado_asociado',{'id':expediente.id}) }}\" 
                       class=\"btnopt btn-primary\" 
                       role=\"button\">EXPEDIENTES ASOCIADOS</a>
                    {% if expediente.resolucion == null %} 
                        <a href=\"{{ path('nueva_resolucion',{'id':expediente.id}) }}\" 
                           class=\"btnopt btn-primary\" 
                           role=\"button\">RESOLUCION</a>
                    {% endif %}


                </div>     
            </div>  

            {% if expediente.resolucion != null %}
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        <i class=\"fas fa-info-circle\"></i> <strong>RESOLUCIÓN</strong> - {{ expediente.nroExpediente}}
                    </div>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th scope=\"col\">USUARIO</th>
                                <th scope=\"col\">NUMERO DE RESOLUCION</th>
                                <th scope=\"col\">TIPO</th>
                                <th scope=\"col\">FECHA</th>
                                <th scope=\"col\">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{expediente.resolucion.usuario}}</td>
                                <td>{{expediente.resolucion.numeroResolucion}}</td>
                                <td>{{expediente.resolucion.tipo}}</td>
                                <td>{{expediente.resolucion.fechaResolucion}}</td>
                                <td><a class=\"btn btn-info\" href=\"\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                    <a class=\"btn btn-warning\" href=\"\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                    <a class=\"btn btn-danger\" href=\"\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                            </tr>

                        </tbody>
                    </table>
                {% endif %}
            </div>

            <div class=\"col-lg-3 float left\">
                <a class=\"btn btn-primary\" onclick=\"history.back()\"  role=\"button\">Volver</a>
            </div>
        </div>

        <script>
            \$(function () {
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        </script>

    {% endblock %}", "AppBundle:Expediente:detalleExpediente.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/Expediente/detalleExpediente.html.twig");
    }
}
