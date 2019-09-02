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
            'contentmain' => [$this, 'block_contentmain'],
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
    public function block_contentmain($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentmain"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentmain"));

        // line 4
        echo "
    ";
        // line 5
        $context["accion_habilitada"] = false;
        // line 6
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 7
            echo "        ";
            $context["accion_habilitada"] = true;
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "responsables", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 10
                echo "            ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == $this->getAttribute($context["responsable"], "usuario", []))) {
                    // line 11
                    echo "                ";
                    $context["accion_habilitada"] = true;
                    // line 12
                    echo "            ";
                }
                // line 13
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
    ";
        }
        // line 15
        echo "  

    <div class=\"content\">
        <div class=\"row\">
            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\"> </th>
                        <th scope=\"col\"> <i class=\"fas fa-info-circle \"></i> <strong>DETALLE DEL EXPEDIENTE ";
        // line 23
        echo twig_escape_filter($this->env, ($context["expediente"] ?? $this->getContext($context, "expediente")), "html", null, true);
        echo "
                                ";
        // line 24
        if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
            // line 25
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" class=\"right btn btn-warning float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Expediente\"><i class=\"fas fa-edit\"></i></a></th>       
                                    ";
        }
        // line 27
        echo "                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <th class=\"w-25 bg-gray\">TEMA</th>
                        <td class=\"bg-white\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tema", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">CONCEPTO</th>
                        <td class=\"bg-white\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "concepto", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TOTAL DE FOJAS</th>
                        <td class=\"bg-white\">

                            ";
        // line 42
        $context["fojas"] = $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fojas", []);
        // line 43
        echo "
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", []));
        foreach ($context['_seq'] as $context["_key"] => $context["caratula"]) {
            // line 45
            echo "
                                ";
            // line 46
            $context["fojas"] = (($context["fojas"] ?? $this->getContext($context, "fojas")) + $this->getAttribute($context["caratula"], "fojas", []));
            // line 47
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
                            ";
        // line 50
        echo twig_escape_filter($this->env, ($context["fojas"] ?? $this->getContext($context, "fojas")), "html", null, true);
        echo "


                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TIPO</th>
                        <td class=\"bg-white\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tipo", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">INICIADOR DEPENDENCIA</th>
                        <td class=\"bg-white\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "iniciadorDependencia", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE INICIO</th>
                        <td class=\"bg-white\">";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaInicio", []), "d-m-Y"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE FIN</th>
                        <td class=\"bg-white\">
                            ";
        // line 70
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []) != null)) {
            // line 71
            echo "                                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []), "d-m-Y"), "html", null, true);
            echo "
                            ";
        }
        // line 73
        echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">ULTIMO PASE</th>
                        <td  class=\"bg-white\">
                            ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ultimaUbicacion", []), "html", null, true);
        echo "

                            - ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ultimaUbicacion", []), "dependencia", []), "html", null, true);
        echo "

                            , en fecha <strong>";
        // line 82
        echo twig_escape_filter($this->env, ($context["ultima_fecha"] ?? $this->getContext($context, "ultima_fecha")), "html", null, true);
        echo "</strong>
                        </td>
                    </tr>  
                    <tr>
                        <th class=\"w-25 bg-gray\">UBICACION ACTUAL</th>
                        <td  class=\"bg-white\">
                            ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "html", null, true);
        echo "                          
                            - ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "dependencia", []), "html", null, true);
        echo "
                            , desde el <strong>";
        // line 90
        echo twig_escape_filter($this->env, ($context["actual_fecha"] ?? $this->getContext($context, "actual_fecha")), "html", null, true);
        echo "</strong>
                        </td>
                    </tr>   


                    ";
        // line 95
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "estado", []) == "ASOCIADO")) {
            echo "                        
                        <tr>
                            <th class=\"w-25 bg-gray\">ASOCIADO A EXPEDIENTE</th>
                            <td  class=\"bg-white\">

                                ";
            // line 100
            echo twig_escape_filter($this->env, ($context["expediente_padre"] ?? $this->getContext($context, "expediente_padre")), "html", null, true);
            echo "
                                <br/>
                            <td/>
                        </tr>              
                    ";
        }
        // line 105
        echo "
                </tbody>
                <tfoot>
            </table>  


        </div>

        <div class=\"row\">
            <div class=\"btn-group float-left\">
                  <a class=\"btn btn-primary\" href=\"#\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => 1]), "html", null, true);
        echo "\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">MOVIMIENTOS
                    ";
        // line 119
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "movimientos", []), "getValues", [])) > 0)) {
            // line 120
            echo "                        <span class=\"badge badge-danger badge-pill\">
                            ";
            // line 121
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "movimientos", []), "getValues", [])), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 124
        echo "                </a>
                <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => 1]), "html", null, true);
        echo "\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">CARATULAS
                    ";
        // line 128
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", [])) > 0)) {
            // line 129
            echo "                        <span class=\"badge badge-danger badge-pill\">
                            ";
            // line 130
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", [])), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 133
        echo "                </a>
                ";
        // line 134
        if ((twig_length_filter($this->env, ($context["expedientes_asociados"] ?? $this->getContext($context, "expedientes_asociados"))) == 0)) {
            // line 135
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => 1]), "html", null, true);
            echo "\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">EXPEDIENTES ASOCIADOS
                        ";
            // line 138
            if ((twig_length_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "expedientesAsociados", [])) > 0)) {
                // line 139
                echo "                            <span class=\"badge badge-danger badge-pill\">
                                ";
                // line 140
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "expedientesAsociados", [])), "html", null, true);
                echo "
                            </span>
                        ";
            }
            // line 143
            echo "
                    </a>
                ";
        }
        // line 146
        echo "                ";
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []) == null)) {
            echo " 
                    ";
            // line 147
            if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN") || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "R0LE_RESPONSABLE"))) {
                // line 148
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_resolucion", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
                echo "\" 
                           class=\"btn btn-primary\" 
                           role=\"button\">RESOLUCION</a>
                    ";
            }
            // line 152
            echo "                ";
        } else {
            // line 153
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_resolucion", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">VER RESOLUCIÓN</a>
                ";
        }
        // line 157
        echo "
              
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
        return array (  369 => 157,  361 => 153,  358 => 152,  350 => 148,  348 => 147,  343 => 146,  338 => 143,  332 => 140,  329 => 139,  327 => 138,  320 => 135,  318 => 134,  315 => 133,  309 => 130,  306 => 129,  304 => 128,  298 => 125,  295 => 124,  289 => 121,  286 => 120,  284 => 119,  278 => 116,  265 => 105,  257 => 100,  249 => 95,  241 => 90,  237 => 89,  233 => 88,  224 => 82,  219 => 80,  214 => 78,  207 => 73,  201 => 71,  199 => 70,  191 => 65,  184 => 61,  177 => 57,  167 => 50,  164 => 49,  157 => 47,  155 => 46,  152 => 45,  148 => 44,  145 => 43,  143 => 42,  134 => 36,  127 => 32,  120 => 27,  114 => 25,  112 => 24,  108 => 23,  98 => 15,  94 => 14,  88 => 13,  85 => 12,  82 => 11,  79 => 10,  74 => 9,  71 => 8,  68 => 7,  65 => 6,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
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

{% block contentmain %}

    {% set accion_habilitada = false %}
    {% if app.user.role == 'ROLE_ADMIN' %}
        {% set accion_habilitada = true %}
    {%else%}
        {% for responsable in expediente.ubicacionActual.responsables.getValues %}
            {% if app.user == responsable.usuario %}
                {% set accion_habilitada = true %}
            {% endif %}
        {%endfor%}

    {% endif %}  

    <div class=\"content\">
        <div class=\"row\">
            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\"> </th>
                        <th scope=\"col\"> <i class=\"fas fa-info-circle \"></i> <strong>DETALLE DEL EXPEDIENTE {{expediente}}
                                {% if accion_habilitada == true %}
                                    <a href=\"{{ path('editar_expediente',{'id':expediente.id}) }}\" class=\"right btn btn-warning float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Expediente\"><i class=\"fas fa-edit\"></i></a></th>       
                                    {% endif%}
                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <th class=\"w-25 bg-gray\">TEMA</th>
                        <td class=\"bg-white\">{{ expediente.tema}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">CONCEPTO</th>
                        <td class=\"bg-white\">{{ expediente.concepto}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TOTAL DE FOJAS</th>
                        <td class=\"bg-white\">

                            {% set fojas = expediente.fojas %}

                            {% for caratula in expediente.caratulas.getValues %}

                                {% set fojas = fojas+caratula.fojas %}

                            {% endfor %}

                            {{ fojas }}


                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TIPO</th>
                        <td class=\"bg-white\">{{ expediente.tipo}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">INICIADOR DEPENDENCIA</th>
                        <td class=\"bg-white\">{{ expediente.iniciadorDependencia}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE INICIO</th>
                        <td class=\"bg-white\">{{ expediente.fechaInicio|date('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE FIN</th>
                        <td class=\"bg-white\">
                            {% if expediente.fechaFin != null %}
                                {{ expediente.fechaFin|date('d-m-Y')}}
                            {% endif %}
                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">ULTIMO PASE</th>
                        <td  class=\"bg-white\">
                            {{ expediente.ultimaUbicacion}}

                            - {{ expediente.ultimaUbicacion.dependencia }}

                            , en fecha <strong>{{ ultima_fecha }}</strong>
                        </td>
                    </tr>  
                    <tr>
                        <th class=\"w-25 bg-gray\">UBICACION ACTUAL</th>
                        <td  class=\"bg-white\">
                            {{ expediente.ubicacionActual}}                          
                            - {{ expediente.ubicacionActual.dependencia }}
                            , desde el <strong>{{ actual_fecha }}</strong>
                        </td>
                    </tr>   


                    {% if expediente.estado == 'ASOCIADO' %}                        
                        <tr>
                            <th class=\"w-25 bg-gray\">ASOCIADO A EXPEDIENTE</th>
                            <td  class=\"bg-white\">

                                {{ expediente_padre }}
                                <br/>
                            <td/>
                        </tr>              
                    {% endif %}

                </tbody>
                <tfoot>
            </table>  


        </div>

        <div class=\"row\">
            <div class=\"btn-group float-left\">
                  <a class=\"btn btn-primary\" href=\"#\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                <a href=\"{{ path('listado_movimiento',{'id':expediente.id,'currentPage':1}) }}\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">MOVIMIENTOS
                    {% if expediente.movimientos.getValues|length >0 %}
                        <span class=\"badge badge-danger badge-pill\">
                            {{ expediente.movimientos.getValues|length }}
                        </span>
                    {% endif %}
                </a>
                <a href=\"{{ path('listado_caratula',{'id':expediente.id, 'currentPage':1}) }}\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">CARATULAS
                    {% if expediente.caratulas.getValues|length >0 %}
                        <span class=\"badge badge-danger badge-pill\">
                            {{ expediente.caratulas.getValues|length }}
                        </span>
                    {% endif %}
                </a>
                {% if expedientes_asociados|length == 0 %}
                    <a href=\"{{ path('listado_asociado',{'id':expediente.id,'currentPage':1}) }}\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">EXPEDIENTES ASOCIADOS
                        {% if expediente.expedientesAsociados|length >0 %}
                            <span class=\"badge badge-danger badge-pill\">
                                {{ expediente.expedientesAsociados|length }}
                            </span>
                        {% endif %}

                    </a>
                {% endif %}
                {% if expediente.resolucion == null %} 
                    {% if app.user.role == 'ROLE_ADMIN' or app.user.role == 'R0LE_RESPONSABLE' %}
                        <a href=\"{{ path('nueva_resolucion',{'id':expediente.id}) }}\" 
                           class=\"btn btn-primary\" 
                           role=\"button\">RESOLUCION</a>
                    {% endif  %}
                {% else %}
                    <a href=\"{{ path('ver_resolucion',{'id':expediente.id}) }}\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">VER RESOLUCIÓN</a>
                {% endif %}

              
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
