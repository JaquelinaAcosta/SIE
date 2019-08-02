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
        // line 39
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
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tema", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Concepto</th>
                                <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "concepto", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Total de Fojas</th>
                                <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fojas", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Tipo</th>
                                <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tipo", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Iniciador Dependencia</th>
                                <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "iniciadorDependencia", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info \">Fecha de inicio</th>
                                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaInicio", []), "d/m/Y"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Fecha de Fin</th>
                                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []), "d/m/Y"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Ubicacion   </th>
                                <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                        <tfoot>
                        <th>

                        </th>
                    </table>
                </div>  

                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        <i class=\"fas fa-history\"></i>  <strong>HISTORIAL DE LOS ÚLTIMOS MOVIMENTOS</strong> <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\" class=\"right btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agregar Movimiento\"><i class=\"fas fa-plus\"></i></a>
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
        // line 102
        $context["count"] = (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "movimientos", []), "getValues", [])) + 1);
        // line 103
        echo "
                            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "movimientos", []), "getValues", [])));
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 105
            echo "                                <tr>
                                    ";
            // line 106
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) - 1);
            // line 107
            echo "                                    ";
            if ((($context["count"] ?? $this->getContext($context, "count")) != twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "movimientos", []), "getValues", [])))) {
                // line 108
                echo "                                        <td><i class=\"fas fa-arrow-up\"></i> ";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo " </td>
                                    ";
            } else {
                // line 110
                echo "                                        <td><i class=\"fas fa-arrows-alt-h\"></i> ";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo " </td>
                                    ";
            }
            // line 112
            echo "                                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "ubicacion", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "tipoSalida", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "usuario", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "fecha", []), "html", null, true);
            echo "</td>
                                    ";
            // line 116
            if ((($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []) == $this->getAttribute($context["movimiento"], "ubicacion", [])) && (($context["count"] ?? $this->getContext($context, "count")) == twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "movimientos", []), "getValues", []))))) {
                // line 117
                echo "                                        <td><a class=\"btn btn-info\" href=\"\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                            <a class=\"btn btn-warning\" href=\"\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                                        ";
            }
            // line 121
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                        </tbody>
                    </table>

                </div>            

                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        <i class=\"far fa-copy\"></i> <strong>EXPEDIENTES ASOCIADOS</strong>
                    </div>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th scope=\"col\">EXPEDIENTE</th>
                                <th scope=\"col\">DESCRIPCION</th>
                                <th scope=\"col\">CODIGO</th>
                                <th scope=\"col\">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>

                            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ExpedientesAsociados", []), "getValues", []));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente_asoc"]) {
            // line 145
            echo "                                <tr>
                                    <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "codigo", []), "html", null, true);
            echo "</td>
                                    <td><a class=\"btn btn-info\" href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                        <a class=\"btn btn-warning\" href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                        <a class=\"btn btn-danger\" href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente_asoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "
                        </tbody>
                    </table>
                </div>

                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        <i class=\"far fa-clone\"></i> <strong>CARÁTULAS AGREGADAS</strong>  <a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\" class=\"right btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agregar Carátula\"><i class=\"fas fa-plus\"></i></a>
                    </div>
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
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", []));
        foreach ($context['_seq'] as $context["_key"] => $context["caratulaAgregada"]) {
            // line 177
            echo "
                                <tr>
                                    <td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["caratulaAgregada"], "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["caratulaAgregada"], "concepto", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["caratulaAgregada"], "fojas", []), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-warning\" href=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                                        <a class=\"btn btn-danger\" href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratulaAgregada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "
                        </tbody>

                    </table>


                </div>
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                       <i class=\"far fa-folder-open\"></i> <strong>RESOLUCIÓN</strong>
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                        <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Resolución:  </th>
                                <td>";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>

                    </table>
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
        return array (  394 => 206,  374 => 188,  364 => 184,  360 => 183,  355 => 181,  351 => 180,  347 => 179,  343 => 177,  339 => 176,  321 => 161,  312 => 154,  303 => 151,  299 => 150,  295 => 149,  291 => 148,  287 => 147,  283 => 146,  280 => 145,  276 => 144,  253 => 123,  246 => 121,  240 => 117,  238 => 116,  234 => 115,  230 => 114,  226 => 113,  221 => 112,  215 => 110,  209 => 108,  206 => 107,  204 => 106,  201 => 105,  197 => 104,  194 => 103,  192 => 102,  175 => 88,  160 => 76,  153 => 72,  146 => 68,  139 => 64,  132 => 60,  125 => 56,  118 => 52,  111 => 48,  97 => 39,  60 => 4,  51 => 3,  29 => 1,);
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
                </div>  

                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        <i class=\"fas fa-history\"></i>  <strong>HISTORIAL DE LOS ÚLTIMOS MOVIMENTOS</strong> <a href=\"{{ path('nuevo_movimiento',{'id':expediente.id}) }}\" class=\"right btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agregar Movimiento\"><i class=\"fas fa-plus\"></i></a>
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
                            {% set count = expediente.movimientos.getValues|length+1 %}

                            {% for movimiento in expediente.movimientos.getValues|reverse%}
                                <tr>
                                    {% set count= count-1 %}
                                    {% if count != expediente.movimientos.getValues|length %}
                                        <td><i class=\"fas fa-arrow-up\"></i> {{count}} </td>
                                    {% else %}
                                        <td><i class=\"fas fa-arrows-alt-h\"></i> {{ count }} </td>
                                    {% endif %}
                                    <td>{{movimiento.ubicacion}}</td>
                                    <td>{{movimiento.tipoSalida}}</td>
                                    <td>{{movimiento.usuario}}</td>
                                    <td>{{movimiento.fecha}}</td>
                                    {% if (expediente.ubicacionActual == movimiento.ubicacion) and (count == expediente.movimientos.getValues|length) %}
                                        <td><a class=\"btn btn-info\" href=\"\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                            <a class=\"btn btn-warning\" href=\"\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                                        {% endif %}
                                </tr>
                            {% endfor %}

                        </tbody>
                    </table>

                </div>            

                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        <i class=\"far fa-copy\"></i> <strong>EXPEDIENTES ASOCIADOS</strong>
                    </div>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th scope=\"col\">EXPEDIENTE</th>
                                <th scope=\"col\">DESCRIPCION</th>
                                <th scope=\"col\">CODIGO</th>
                                <th scope=\"col\">ACCIONES</th>
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
                        <i class=\"far fa-clone\"></i> <strong>CARÁTULAS AGREGADAS</strong>  <a href=\"{{ path('nueva_caratula',{'id':expediente.id}) }}\" class=\"right btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agregar Carátula\"><i class=\"fas fa-plus\"></i></a>
                    </div>
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


                </div>
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                       <i class=\"far fa-folder-open\"></i> <strong>RESOLUCIÓN</strong>
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

                <div class=\"col-lg-3 float left\">
                    <a class=\"btn btn-primary\" onclick=\"history.back()\"  role=\"button\">Volver</a>
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
