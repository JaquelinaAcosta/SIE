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
        echo "    <div class=\"content\">
        <div class=\"row\">
            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\"> <i class=\"fas fa-info-circle \"></i> <strong>DETALLE DEL EXPEDIENTE  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
        echo "</th>
                        <th scope=\"col\"> <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\" class=\"right btn btn-warning float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Expediente\"><i class=\"fas fa-edit\"></i></a></th>       
                    </tr>

                </thead>
                <tbody >
                    <tr>
                        <th class=\"w-25\">TEMA</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tema", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">CONCEPTO</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "concepto", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">TOTAL DE FOJAS</th>
                        <td>

                            ";
        // line 27
        $context["fojas"] = $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fojas", []);
        // line 28
        echo "                            
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", []));
        foreach ($context['_seq'] as $context["_key"] => $context["caratula"]) {
            // line 30
            echo "                                
                                ";
            // line 31
            $context["fojas"] = (($context["fojas"] ?? $this->getContext($context, "fojas")) + $this->getAttribute($context["caratula"], "fojas", []));
            // line 32
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                            
                            ";
        // line 35
        echo twig_escape_filter($this->env, ($context["fojas"] ?? $this->getContext($context, "fojas")), "html", null, true);
        echo " (foja iniciales + fojas de caratulas)
                            

                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">TIPO</th>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tipo", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">INICIADOR DEPENDENCIA</th>
                        <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "iniciadorDependencia", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 \">FECHA DE INICIO</th>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaInicio", []), "d-m-Y"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">FECHA DE FIN</th>
                        <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []), "d-m-Y"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">UBICACION ACTUAL</th>
                        <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "html", null, true);
        echo "</td>
                    </tr>   

                    ";
        // line 61
        if ((twig_length_filter($this->env, ($context["expedientes_asociados"] ?? $this->getContext($context, "expedientes_asociados"))) > 0)) {
            echo "                        
                        <tr>

                            <th class=\"w-25\">ASOCIADO A EXPEDIENTE</th>
                            <td>
                                ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["expedientes_asociados"] ?? $this->getContext($context, "expedientes_asociados")));
            foreach ($context['_seq'] as $context["_key"] => $context["exp_asoc"]) {
                // line 67
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["exp_asoc"], "expedientePadre", []), "nroExpediente", []), "html", null, true);
                echo "
                                    <br/>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp_asoc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                            <td/>
                        </tr>              
                    ";
        }
        // line 73
        echo "
                </tbody>
                <tfoot>
            </table>  


        </div>

        <div class=\"row\">
            <div class=\"btn-group float-left\">
                <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => 1]), "html", null, true);
        echo "\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">MOVIMIENTOS
                    ";
        // line 86
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "movimientos", []), "getValues", [])) > 0)) {
            // line 87
            echo "                        <span class=\"badge badge-danger badge-pill\">
                            ";
            // line 88
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "movimientos", []), "getValues", [])), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 91
        echo "                </a>
                <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => 1]), "html", null, true);
        echo "\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">CARATULAS
                    ";
        // line 95
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", [])) > 0)) {
            // line 96
            echo "                        <span class=\"badge badge-danger badge-pill\">
                            ";
            // line 97
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", [])), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 100
        echo "                </a>
                ";
        // line 101
        if ((twig_length_filter($this->env, ($context["expedientes_asociados"] ?? $this->getContext($context, "expedientes_asociados"))) == 0)) {
            // line 102
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => 1]), "html", null, true);
            echo "\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">EXPEDIENTES ASOCIADOS
                        ";
            // line 105
            if ((twig_length_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "expedientesAsociados", [])) > 0)) {
                // line 106
                echo "                            <span class=\"badge badge-danger badge-pill\">
                                ";
                // line 107
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "expedientesAsociados", [])), "html", null, true);
                echo "
                            </span>
                        ";
            }
            // line 110
            echo "
                    </a>
                ";
        }
        // line 113
        echo "                ";
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []) == null)) {
            echo " 
                    <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_resolucion", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">RESOLUCION</a>
                ";
        } else {
            // line 118
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_resolucion", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">VER RESOLUCIÓN</a>
                ";
        }
        // line 122
        echo "
                <a class=\"btn btn-primary\" href=\"#\" onclick=\"history.back()\"  role=\"button\">Volver</a>
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
        return array (  289 => 122,  281 => 118,  274 => 114,  269 => 113,  264 => 110,  258 => 107,  255 => 106,  253 => 105,  246 => 102,  244 => 101,  241 => 100,  235 => 97,  232 => 96,  230 => 95,  224 => 92,  221 => 91,  215 => 88,  212 => 87,  210 => 86,  204 => 83,  192 => 73,  187 => 70,  177 => 67,  173 => 66,  165 => 61,  159 => 58,  152 => 54,  145 => 50,  138 => 46,  131 => 42,  121 => 35,  118 => 34,  111 => 32,  109 => 31,  106 => 30,  102 => 29,  99 => 28,  97 => 27,  88 => 21,  81 => 17,  71 => 10,  67 => 9,  60 => 4,  51 => 3,  29 => 1,);
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
    <div class=\"content\">
        <div class=\"row\">
            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\"> <i class=\"fas fa-info-circle \"></i> <strong>DETALLE DEL EXPEDIENTE  {{ expediente.nroExpediente}}</th>
                        <th scope=\"col\"> <a href=\"{{ path('editar_expediente',{'id':expediente.id}) }}\" class=\"right btn btn-warning float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Expediente\"><i class=\"fas fa-edit\"></i></a></th>       
                    </tr>

                </thead>
                <tbody >
                    <tr>
                        <th class=\"w-25\">TEMA</th>
                        <td>{{ expediente.tema}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">CONCEPTO</th>
                        <td>{{ expediente.concepto}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">TOTAL DE FOJAS</th>
                        <td>

                            {% set fojas = expediente.fojas %}
                            
                            {% for caratula in expediente.caratulas.getValues %}
                                
                                {% set fojas = fojas+caratula.fojas %}

                            {% endfor %}
                            
                            {{ fojas }} (foja iniciales + fojas de caratulas)
                            

                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">TIPO</th>
                        <td>{{ expediente.tipo}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">INICIADOR DEPENDENCIA</th>
                        <td>{{ expediente.iniciadorDependencia}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 \">FECHA DE INICIO</th>
                        <td>{{ expediente.fechaInicio|date('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">FECHA DE FIN</th>
                        <td>{{ expediente.fechaFin|date('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">UBICACION ACTUAL</th>
                        <td>{{ expediente.ubicacionActual}}</td>
                    </tr>   

                    {% if expedientes_asociados|length>0 %}                        
                        <tr>

                            <th class=\"w-25\">ASOCIADO A EXPEDIENTE</th>
                            <td>
                                {% for exp_asoc in expedientes_asociados %}
                                    {{ exp_asoc.expedientePadre.nroExpediente}}
                                    <br/>
                                {% endfor %}
                            <td/>
                        </tr>              
                    {% endif %}

                </tbody>
                <tfoot>
            </table>  


        </div>

        <div class=\"row\">
            <div class=\"btn-group float-left\">
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
                    <a href=\"{{ path('nueva_resolucion',{'id':expediente.id}) }}\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">RESOLUCION</a>
                {% else %}
                    <a href=\"{{ path('ver_resolucion',{'id':expediente.id}) }}\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">VER RESOLUCIÓN</a>
                {% endif %}

                <a class=\"btn btn-primary\" href=\"#\" onclick=\"history.back()\"  role=\"button\">Volver</a>
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
