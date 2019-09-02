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

/* AppBundle:PaginaPrincipal:inicio.html.twig */
class __TwigTemplate_937e2d57c9f0461ce866fd73ed1cc4b0092b24789d325722770234a443218b9c extends \Twig\Template
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
        // line 2
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:PaginaPrincipal:inicio.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:PaginaPrincipal:inicio.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:PaginaPrincipal:inicio.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_contentmain($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentmain"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentmain"));

        // line 5
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

        .cod{
            width:60px;

        }
        .num{
            width:115px;
            margin-left:-4px;
        }
        .dig{
            width:35px;
            margin-left:-32px;

        }
        .bg-white{
            background-color:red;
        }
    </style>
    
    
    <div class=\"content\">
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h2 class=\"mb-0\">
                        <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <i class=\"fas fa-search-plus\"></i>   Búsqueda de un Expediente
                        </button>
                    </h2>
                </div>
                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_start');
        echo "
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'errors');
        echo "
                        
                        <label class=\"text-default\">Número de expediente</label><br/>
                        <label class=\"text-info\">Ingrese el Número de Expediente con: 5 (cinco) digitos para código - 7 (siete) dígitos para número - 1 (un) dígito</label>
                        <div class=\"row\">
                            <div class=\"threecol col-lg-1\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-2\">
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-1\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                             
                        <div class=\"threecol col-lg-1\">
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'errors');
        echo "
                                </div>
                        </div>
                            <hr/>
                        <div class=\"threecol col-lg-4\">
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "Buscar", []), 'widget');
        echo "
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "Limpiar", []), 'widget');
        echo "
                                
                            </div>
                        
                </div>
        </div>
        </div>
        
        
        
        ";
        // line 92
        if ((twig_length_filter($this->env, ($context["expedientes"] ?? $this->getContext($context, "expedientes"))) > 0)) {
            // line 93
            echo "        
            ";
            // line 94
            $context["expediente"] = $this->getAttribute(($context["expedientes"] ?? $this->getContext($context, "expedientes")), 0, [], "array");
            // line 95
            echo "  
            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                   
                    <tr>
                        <th scope=\"col\"> </th>
                        <th scope=\"col\"><i class=\"fas fa-info-circle \"></i> <strong> EXPEDIENTE NÚMERO: ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "codigoExpediente", []), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "numeroExpediente", []), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "digitoExpediente", []), "html", null, true);
            echo "</th>
                    </tr>

                </thead>
                
                <tbody>
                        <tr>
                            <th class=\"w-25\">TEMA</th>
                            <td class=\"bg-white\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tema", []), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">CONCEPTO</th>
                            <td class=\"bg-white\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "concepto", []), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">TOTAL DE FOJAS</th>
                            <td class=\"bg-white\">";
            // line 117
            $context["fojas"] = $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fojas", []);
            // line 118
            echo "
                            ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["caratula"]) {
                // line 120
                echo "
                                ";
                // line 121
                $context["fojas"] = (($context["fojas"] ?? $this->getContext($context, "fojas")) + $this->getAttribute($context["caratula"], "fojas", []));
                // line 122
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratula'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "
                            ";
            // line 125
            echo twig_escape_filter($this->env, ($context["fojas"] ?? $this->getContext($context, "fojas")), "html", null, true);
            echo " </td>
                        </tr>
                            <tr>
                        <th class=\"w-25\">TIPO</th>
                        <td  class=\"bg-white\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tipo", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">INICIADOR DEPENDENCIA</th>
                        <td  class=\"bg-white\">";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "iniciadorDependencia", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">FECHA DE INICIO</th>
                        <td class=\"bg-white\">";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaInicio", []), "d-m-Y"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">FECHA DE FIN</th>
                        <td  class=\"bg-white\">";
            // line 141
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []), "d-m-Y"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">ULTIMO PASE</th>
                        <td  class=\"bg-white\">
                            ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ultimaUbicacion", []), "html", null, true);
            echo "

                            - ";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ultimaUbicacion", []), "dependencia", []), "html", null, true);
            echo "

                            , en fecha <strong>";
            // line 150
            echo twig_escape_filter($this->env, ($context["ultima_fecha"] ?? $this->getContext($context, "ultima_fecha")), "html", null, true);
            echo "</strong>
                        </td>
                    </tr>  
                    <tr>
                        <th class=\"w-25\">UBICACION ACTUAL</th>
                        <td  class=\"bg-white\">
                            ";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "html", null, true);
            echo "                          
                            - ";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "dependencia", []), "html", null, true);
            echo "
                            , desde el <strong>";
            // line 158
            echo twig_escape_filter($this->env, ($context["actual_fecha"] ?? $this->getContext($context, "actual_fecha")), "html", null, true);
            echo "</strong>
                        </td>
                    </tr>   


                    ";
            // line 163
            if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "estado", []) == "ASOCIADO")) {
                echo "                        
                        <tr>
                            <th class=\"w-25 bg-gray\">ASOCIADO A EXPEDIENTE</th>
                            <td  class=\"bg-white\">

                                ";
                // line 168
                echo twig_escape_filter($this->env, ($context["expediente_padre"] ?? $this->getContext($context, "expediente_padre")), "html", null, true);
                echo "
                                <br/>
                            <td/>
                        </tr>              
                    ";
            }
            // line 173
            echo "
                </tbody>
                <tfoot>
            </table> 
    

        ";
        }
        // line 180
        echo "    </div>
         
         </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:PaginaPrincipal:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 180,  340 => 173,  332 => 168,  324 => 163,  316 => 158,  312 => 157,  308 => 156,  299 => 150,  294 => 148,  289 => 146,  281 => 141,  274 => 137,  267 => 133,  260 => 129,  253 => 125,  250 => 124,  243 => 122,  241 => 121,  238 => 120,  234 => 119,  231 => 118,  229 => 117,  222 => 113,  215 => 109,  200 => 101,  192 => 95,  190 => 94,  187 => 93,  185 => 92,  172 => 82,  168 => 81,  160 => 76,  155 => 74,  146 => 68,  141 => 66,  134 => 62,  129 => 60,  122 => 56,  117 => 54,  108 => 48,  104 => 47,  60 => 5,  51 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"AppBundle::layout.html.twig\" %}

{% block contentmain %}

    <style>
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;
            padding:10px;            
        }

        .cod{
            width:60px;

        }
        .num{
            width:115px;
            margin-left:-4px;
        }
        .dig{
            width:35px;
            margin-left:-32px;

        }
        .bg-white{
            background-color:red;
        }
    </style>
    
    
    <div class=\"content\">
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h2 class=\"mb-0\">
                        <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <i class=\"fas fa-search-plus\"></i>   Búsqueda de un Expediente
                        </button>
                    </h2>
                </div>
                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        {{ form_start(formExpedienteFilter) }}
                        {{ form_errors(formExpedienteFilter) }}
                        
                        <label class=\"text-default\">Número de expediente</label><br/>
                        <label class=\"text-info\">Ingrese el Número de Expediente con: 5 (cinco) digitos para código - 7 (siete) dígitos para número - 1 (un) dígito</label>
                        <div class=\"row\">
                            <div class=\"threecol col-lg-1\">
                                {{ form_widget(formExpedienteFilter.codigoExpediente) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formExpedienteFilter.codigoExpediente) }}
                                </div>
                            </div>
                            <div class=\"threecol col-lg-2\">
                                {{ form_widget(formExpedienteFilter.numeroExpediente) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formExpedienteFilter.numeroExpediente) }}
                                </div>
                            </div>
                            <div class=\"threecol col-lg-1\">
                                {{ form_widget(formExpedienteFilter.digitoExpediente) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formExpedienteFilter.digitoExpediente) }}
                                </div>
                            </div>
                        </div>
                             
                        <div class=\"threecol col-lg-1\">
                                {{ form_widget(formExpedienteFilter.digitoExpediente) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formExpedienteFilter.digitoExpediente) }}
                                </div>
                        </div>
                            <hr/>
                        <div class=\"threecol col-lg-4\">
                                {{ form_widget(formExpedienteFilter.Buscar) }}
                                {{ form_widget(formExpedienteFilter.Limpiar) }}
                                
                            </div>
                        
                </div>
        </div>
        </div>
        
        
        
        {% if expedientes|length >0 %}
        
            {% set expediente =  expedientes[0]%}
  
            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                   
                    <tr>
                        <th scope=\"col\"> </th>
                        <th scope=\"col\"><i class=\"fas fa-info-circle \"></i> <strong> EXPEDIENTE NÚMERO: {{expediente.codigoExpediente }}-{{expediente.numeroExpediente }}-{{expediente.digitoExpediente }}</th>
                    </tr>

                </thead>
                
                <tbody>
                        <tr>
                            <th class=\"w-25\">TEMA</th>
                            <td class=\"bg-white\">{{ expediente.tema}}</td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">CONCEPTO</th>
                            <td class=\"bg-white\">{{ expediente.concepto}}</td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">TOTAL DE FOJAS</th>
                            <td class=\"bg-white\">{% set fojas = expediente.fojas %}

                            {% for caratula in expediente.caratulas.getValues %}

                                {% set fojas = fojas+caratula.fojas %}

                            {% endfor %}

                            {{ fojas }} </td>
                        </tr>
                            <tr>
                        <th class=\"w-25\">TIPO</th>
                        <td  class=\"bg-white\">{{ expediente.tipo}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">INICIADOR DEPENDENCIA</th>
                        <td  class=\"bg-white\">{{ expediente.iniciadorDependencia}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">FECHA DE INICIO</th>
                        <td class=\"bg-white\">{{ expediente.fechaInicio|date('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">FECHA DE FIN</th>
                        <td  class=\"bg-white\">{{ expediente.fechaFin|date('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">ULTIMO PASE</th>
                        <td  class=\"bg-white\">
                            {{ expediente.ultimaUbicacion}}

                            - {{ expediente.ultimaUbicacion.dependencia }}

                            , en fecha <strong>{{ ultima_fecha }}</strong>
                        </td>
                    </tr>  
                    <tr>
                        <th class=\"w-25\">UBICACION ACTUAL</th>
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
    

        {% endif %}
    </div>
         
         </div>
{% endblock %}", "AppBundle:PaginaPrincipal:inicio.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/PaginaPrincipal/inicio.html.twig");
    }
}
