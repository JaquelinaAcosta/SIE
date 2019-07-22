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

    </style>
    
    <div class=\"formu col-lg-12\">
        <div class=\"border border-primary\">
            <h2 class=\"text-center \">Expediente Nro.: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
        echo "</h2>
            <hr/>
            
            <div class=\"list-group col-lg-11 col-md-offset-1\">
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Detalle del Expediente
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                            <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Tema: </th>
                                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tema", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Concepto: </th>
                                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "concepto", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Cantidad de fojas:  </th>
                                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fojas", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Tipo: </th>
                                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tipo", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Dependencia:  </th>
                                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "iniciadorDependencia", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info \">Fecha de Inicio:  </th>
                                <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaInicio", []), "d/m/Y"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Fecha de Finalización:  </th>
                                <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []), "d/m/Y"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"info list-group\">Ubicación Actual:  </th>
                                <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "html", null, true);
        echo "</td>
                            </tr>
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
        // line 85
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
                            <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Carátulas:  </th>
                                <td> ";
        // line 103
        echo "</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
                
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Expedientes asociados
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                            <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Expedientes asociados:  </th>
                                <td> ";
        // line 121
        echo "</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
                 
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Movimientos
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                            <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Movimientos:   </th>
                                <td> ";
        // line 139
        echo "</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
                
                ";
        // line 147
        echo "                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Usuario
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                            <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Usuario:   </th>
                                <td> ";
        // line 158
        echo "</td>
                            </tr>
                        </tbody>
                        
                    </table>
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
        return array (  253 => 158,  240 => 147,  231 => 139,  211 => 121,  191 => 103,  170 => 85,  149 => 67,  142 => 63,  135 => 59,  128 => 55,  121 => 51,  114 => 47,  107 => 43,  100 => 39,  82 => 24,  60 => 4,  51 => 3,  29 => 1,);
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

    </style>
    
    <div class=\"formu col-lg-12\">
        <div class=\"border border-primary\">
            <h2 class=\"text-center \">Expediente Nro.: {{ expediente.nroExpediente}}</h2>
            <hr/>
            
            <div class=\"list-group col-lg-11 col-md-offset-1\">
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Detalle del Expediente
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
                                <th class=\"info list-group\">Dependencia:  </th>
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
                            <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Carátulas:  </th>
                                <td> {#{{ expediente.caratulas}}#}</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
                
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Expedientes asociados
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                            <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Expedientes asociados:  </th>
                                <td> {#{{ expediente.expedientesAsociados}}#}</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
                 
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Movimientos
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                            <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Movimientos:   </th>
                                <td> {#{{ expediente.movimientos}}#}</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
                
                {# no se si hace falta lo de persona.......#}
                <div class=\"expediente col-lg-10 panel panel-primary\">
                    <div class=\"panel-heading\" style=\"font-size:18px;\">
                        Usuario
                    </div>
                    <table class=\"table table-striped table-hover\"> 
                        <thead>
                            <br/>
                        </thead>
                        <tbody>
                            <tr>
                                <th class=\"info list-group col-lg-3\">Usuario:   </th>
                                <td> {#{{ expediente.persona}}#}</td>
                            </tr>
                        </tbody>
                        
                    </table>
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
    
{% endblock %}", "AppBundle:Expediente:detalleExpediente.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/Expediente/detalleExpediente.html.twig");
    }
}
