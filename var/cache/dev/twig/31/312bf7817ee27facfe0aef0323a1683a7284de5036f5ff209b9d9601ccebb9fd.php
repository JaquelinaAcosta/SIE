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
        <div class=\"col-lg-12 border border-primary\">
            <br/>
            <table class=\"table table-sm table-striped\"> 
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\"> <i class=\"fas fa-info-circle \"></i> <strong>DETALLE DEL EXPEDIENTE - ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
        echo "</th>
                    <th scope=\"col\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\" class=\"right btn btn-warning float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Expediente\"><i class=\"fas fa-edit\"></i></a></th>       
                </tr>
                
            </thead>
                <tbody >
                    <tr>
                        <th class=\"info list-group col-lg-2\">Tema</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tema", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"info list-group\">Concepto</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "concepto", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"info list-group\">Total de Fojas</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fojas", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"info list-group\">Tipo</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tipo", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"info list-group\">Iniciador Dependencia</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "iniciadorDependencia", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"info \">Fecha de inicio</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaInicio", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"info list-group\">Fecha de Fin</th>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"info list-group\">Ubicacion   </th>
                        <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "html", null, true);
        echo "</td>
                    </tr>                       
                </tbody>
                <tfoot>
                <th>

                </th>
            </table>
        </div>    
        <br/>
        <div class=\"btn-group float-right\">
            <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\" 
               class=\"btn btn-primary\" 
               role=\"button\">MOVIMIENTOS</a>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => 1]), "html", null, true);
        echo "\" 
               class=\"btn btn-primary\" 
               role=\"button\">CARATULAS</a>
            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\" 
               class=\"btn btn-primary\" 
               role=\"button\">EXPEDIENTES ASOCIADOS</a>
            ";
        // line 66
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []) == null)) {
            echo " 
                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_resolucion", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">RESOLUCION</a>
            ";
        } else {
            // line 71
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_resolucion", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">VER RESOLUCIÓN</a>
            ";
        }
        // line 75
        echo "        </div>              
        ";
        // line 106
        echo "        <br/>
        <br/>
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
        return array (  185 => 106,  182 => 75,  174 => 71,  167 => 67,  163 => 66,  157 => 63,  151 => 60,  145 => 57,  131 => 46,  124 => 42,  117 => 38,  110 => 34,  103 => 30,  96 => 26,  89 => 22,  82 => 18,  72 => 11,  68 => 10,  60 => 4,  51 => 3,  29 => 1,);
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
        <div class=\"col-lg-12 border border-primary\">
            <br/>
            <table class=\"table table-sm table-striped\"> 
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\"> <i class=\"fas fa-info-circle \"></i> <strong>DETALLE DEL EXPEDIENTE - {{ expediente.nroExpediente}}</th>
                    <th scope=\"col\"><a href=\"{{ path('editar_expediente',{'id':expediente.id}) }}\" class=\"right btn btn-warning float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Expediente\"><i class=\"fas fa-edit\"></i></a></th>       
                </tr>
                
            </thead>
                <tbody >
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
                        <td>{{ expediente.fechaInicio}}</td>
                    </tr>
                    <tr>
                        <th class=\"info list-group\">Fecha de Fin</th>
                        <td>{{ expediente.fechaFin}}</td>
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
        <br/>
        <div class=\"btn-group float-right\">
            <a href=\"{{ path('listado_movimiento',{'id':expediente.id}) }}\" 
               class=\"btn btn-primary\" 
               role=\"button\">MOVIMIENTOS</a>
            <a href=\"{{ path('listado_caratula',{'id':expediente.id, 'currentPage':1}) }}\" 
               class=\"btn btn-primary\" 
               role=\"button\">CARATULAS</a>
            <a href=\"{{ path('listado_asociado',{'id':expediente.id}) }}\" 
               class=\"btn btn-primary\" 
               role=\"button\">EXPEDIENTES ASOCIADOS</a>
            {% if expediente.resolucion == null %} 
                <a href=\"{{ path('nueva_resolucion',{'id':expediente.id}) }}\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">RESOLUCION</a>
            {% else %}
                <a href=\"{{ path('ver_resolucion',{'id':expediente.id}) }}\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">VER RESOLUCIÓN</a>
            {% endif %}
        </div>              
        {# {% if expediente.resolucion != null %}
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
             {% endif %}#}
        <br/>
        <br/>
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
