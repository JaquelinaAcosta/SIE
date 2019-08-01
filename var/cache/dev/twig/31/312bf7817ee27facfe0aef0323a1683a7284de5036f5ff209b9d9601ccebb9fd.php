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

    </style>
    <div class=\"formu col-lg-12\">
        <div class=\"border border-primary\">

            <div class=\"list-group col-lg-11 col-md-offset-1\">
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        <i class=\"far fa-file\"></i> Detalle del Expediente - Nro. ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
        echo "
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                        <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Tema: </th>
                                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tema", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Concepto: </th>
                                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "concepto", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Cantidad de fojas:  </th>
                                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fojas", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Tipo: </th>
                                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tipo", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Iniciador Dependencia:  </th>
                                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "iniciadorDependencia", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info \">Fecha de Inicio:  </th>
                                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaInicio", []), "d/m/Y"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Fecha de Finalización:  </th>
                                <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []), "d/m/Y"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Ubicación Actual:  </th>
                                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <th>
                                <td><a href=\"#\"><input type=\"button\" class=\"btn btn-info\" value=\"Editar Expediente\"/></a></td>
                            </th>
                    </table>
                </div>  
                
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Movimientos
                    </div>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th scope=\"col\"></th>
                                <th scope=\"col\">UBICACION</th>
                                <th scope=\"col\">TIPO DE SALIDA</th>
                                <th scope=\"col\">USUARIO</th>
                                <th scope=\"col\">FECHA</th>
                                <th scope=\"col\">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 96
        $context["count"] = 0;
        // line 97
        echo "                            
                            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "movimientos", []), "getValues", []));
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 99
            echo "                                <tr>
                                    ";
            // line 100
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
            // line 101
            echo "                                    <td>";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "</td>
                                    <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "ubicacion", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "tipoSalida", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "usuario", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "fecha", []), "html", null, true);
            echo "</td>
                                    <td><a class=\"btn btn-info\" href=\"\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                        <a class=\"btn btn-warning\" href=\"\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                        <a class=\"btn btn-danger\" href=\"\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
                        </tbody>
                    </table>
                              <hr/>
                            
                    Agregar nuevo Movimiento <a class=\"btn btn-warning\" href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\"  role=\"button\"><i class=\"fas fa-file\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agregar Carátula\"></i></a>
                </div>            
                            
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Expedientes asociados
                    </div>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th scope=\"col\">Nro. Expediente</th>
                                <th scope=\"col\">Descripción</th>
                                <th scope=\"col\">Código</th>
                                <th scope=\"col\">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ExpedientesAsociados", []), "getValues", []));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente_asoc"]) {
            // line 135
            echo "                                <tr>
                                    <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "codigo", []), "html", null, true);
            echo "</td>
                                    <td><a class=\"btn btn-info\" href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                        <a class=\"btn btn-warning\" href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                        <a class=\"btn btn-danger\" href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente_asoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                            
                        </tbody>
                    </table>
                </div>

                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Resolución
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                        <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Resolución:  </th>
                                <td>";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>

                    </table>
                </div> 

                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Carátulas
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                            <tr>
                                <th scope=\"col\">Tema</th>
                                <th scope=\"col\">Concepto</th>
                                <th scope=\"col\">Cantidad de Fojas</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>

                            ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", []));
        foreach ($context['_seq'] as $context["_key"] => $context["caratulaAgregada"]) {
            // line 184
            echo "                                
                                <tr>
                                    <td>";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["caratulaAgregada"], "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["caratulaAgregada"], "concepto", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["caratulaAgregada"], "fojas", []), "html", null, true);
            echo "</td>
                                    <td>
                                    <a class=\"btn btn-warning\" href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                                </tr>
                                
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratulaAgregada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "
                        </tbody>
                        
                    </table>
                            <hr/>
                            
                    Agregar nueva Carátula <a class=\"btn btn-warning\" href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\"  role=\"button\"><i class=\"fas fa-file\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agregar Carátula\"></i></a>

                </div>

                <div class=\"col-lg-3 float left\">
                    <a class=\"btn btn-primary\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                </div>

                <div class=\"col-lg-3 float left\">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <div/>
                </div>



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
        return array (  375 => 201,  367 => 195,  357 => 191,  353 => 190,  348 => 188,  344 => 187,  340 => 186,  336 => 184,  332 => 183,  306 => 160,  288 => 144,  279 => 141,  275 => 140,  271 => 139,  267 => 138,  263 => 137,  259 => 136,  256 => 135,  252 => 134,  231 => 116,  224 => 111,  212 => 105,  208 => 104,  204 => 103,  200 => 102,  195 => 101,  193 => 100,  190 => 99,  186 => 98,  183 => 97,  181 => 96,  152 => 70,  145 => 66,  138 => 62,  131 => 58,  124 => 54,  117 => 50,  110 => 46,  103 => 42,  91 => 33,  60 => 4,  51 => 3,  29 => 1,);
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

    </style>
    <div class=\"formu col-lg-12\">
        <div class=\"border border-primary\">

            <div class=\"list-group col-lg-11 col-md-offset-1\">
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        <i class=\"far fa-file\"></i> Detalle del Expediente - Nro. {{ expediente.nroExpediente}}
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                        <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Tema: </th>
                                <td>{{ expediente.tema}}</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Concepto: </th>
                                <td>{{ expediente.concepto}}</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Cantidad de fojas:  </th>
                                <td>{{ expediente.fojas}}</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Tipo: </th>
                                <td>{{ expediente.tipo}}</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Iniciador Dependencia:  </th>
                                <td>{{ expediente.iniciadorDependencia}}</td>
                            </tr>
                            <tr>
                                <th class=\"info \">Fecha de Inicio:  </th>
                                <td>{{ expediente.fechaInicio|date(\"d/m/Y\")}}</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Fecha de Finalización:  </th>
                                <td>{{ expediente.fechaFin|date(\"d/m/Y\")}}</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Ubicación Actual:  </th>
                                <td>{{ expediente.ubicacionActual}}</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <th>
                                <td><a href=\"#\"><input type=\"button\" class=\"btn btn-info\" value=\"Editar Expediente\"/></a></td>
                            </th>
                    </table>
                </div>  
                
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Movimientos
                    </div>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th scope=\"col\"></th>
                                <th scope=\"col\">UBICACION</th>
                                <th scope=\"col\">TIPO DE SALIDA</th>
                                <th scope=\"col\">USUARIO</th>
                                <th scope=\"col\">FECHA</th>
                                <th scope=\"col\">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% set count = 0 %}
                            
                            {% for movimiento in expediente.movimientos.getValues %}
                                <tr>
                                    {% set count= count+1 %}
                                    <td>{{ count }}</td>
                                    <td>{{movimiento.ubicacion}}</td>
                                    <td>{{movimiento.tipoSalida}}</td>
                                    <td>{{movimiento.usuario}}</td>
                                    <td>{{movimiento.fecha}}</td>
                                    <td><a class=\"btn btn-info\" href=\"\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                        <a class=\"btn btn-warning\" href=\"\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                        <a class=\"btn btn-danger\" href=\"\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                                </tr>
                            {% endfor %}

                        </tbody>
                    </table>
                              <hr/>
                            
                    Agregar nuevo Movimiento <a class=\"btn btn-warning\" href=\"{{ path('nuevo_movimiento',{'id':expediente.id}) }}\"  role=\"button\"><i class=\"fas fa-file\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agregar Carátula\"></i></a>
                </div>            
                            
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Expedientes asociados
                    </div>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th scope=\"col\">Nro. Expediente</th>
                                <th scope=\"col\">Descripción</th>
                                <th scope=\"col\">Código</th>
                                <th scope=\"col\">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            {% for expediente_asoc in expediente.ExpedientesAsociados.getValues %}
                                <tr>
                                    <td>{{expediente_asoc.expedienteAsociado}}</td>
                                    <td>{{expediente_asoc.expedienteAsociado.tema.descripcion}}</td>
                                    <td>{{expediente_asoc.expedienteAsociado.tema.codigo}}</td>
                                    <td><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente_asoc.expedienteAsociado.id}) }}\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                        <a class=\"btn btn-warning\" href=\"{{ path(\"editar_expediente\", {'id':expediente_asoc.expedienteAsociado.id}) }}\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                        <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_expediente\", {'id':expediente_asoc.expedienteAsociado.id}) }}\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                                </tr>
                            {% endfor %}
                            
                        </tbody>
                    </table>
                </div>

                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Resolución
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                        <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Resolución:  </th>
                                <td>{{ expediente.resolucion}}</td>
                            </tr>
                        </tbody>

                    </table>
                </div> 

                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Carátulas
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                            <tr>
                                <th scope=\"col\">Tema</th>
                                <th scope=\"col\">Concepto</th>
                                <th scope=\"col\">Cantidad de Fojas</th>
                                
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
                            <hr/>
                            
                    Agregar nueva Carátula <a class=\"btn btn-warning\" href=\"{{ path('nueva_caratula',{'id':expediente.id}) }}\"  role=\"button\"><i class=\"fas fa-file\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agregar Carátula\"></i></a>

                </div>

                <div class=\"col-lg-3 float left\">
                    <a class=\"btn btn-primary\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                </div>

                <div class=\"col-lg-3 float left\">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <div/>
                </div>



            </div>
        </div>
                            
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

    {% endblock %}", "AppBundle:Expediente:detalleExpediente.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/detalleExpediente.html.twig");
    }
}
