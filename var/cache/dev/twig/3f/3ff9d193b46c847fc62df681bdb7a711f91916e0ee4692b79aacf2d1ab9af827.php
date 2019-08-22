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
        <h4>Búsqueda de Expediente</h4>
        <hr/>
        <div class=\"filtro\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_start');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'errors');
        echo "

            <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
            <div class=\"row\">
                <div class=\"threecol col-lg-1\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'widget');
        echo "
                    <div class=\"help-block with-errors\">
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"threecol col-lg-2\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'widget');
        echo "
                    <div class=\"help-block with-errors\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"threecol col-lg-1\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'widget');
        echo "
                    <div class=\"help-block with-errors\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'errors');
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_end');
        echo "
        </div>
        ";
        // line 63
        if ((twig_length_filter($this->env, ($context["expedientes"] ?? $this->getContext($context, "expedientes"))) > 0)) {
            // line 64
            echo "            <hr/>
            ";
            // line 65
            $context["expediente"] = $this->getAttribute(($context["expedientes"] ?? $this->getContext($context, "expedientes")), 0, [], "array");
            // line 66
            echo "
            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                </thead>
                <tbody >
                    <tr>
                        <th class=\"w-25 bg-gray\">TEMA</th>
                        <td  class=\"bg-white\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tema", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">CONCEPTO</th>
                        <td  class=\"bg-white\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "concepto", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TOTAL DE FOJAS</th>
                        <td  class=\"bg-white\">

                            ";
            // line 83
            $context["fojas"] = $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fojas", []);
            // line 84
            echo "
                            ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["caratula"]) {
                // line 86
                echo "
                                ";
                // line 87
                $context["fojas"] = (($context["fojas"] ?? $this->getContext($context, "fojas")) + $this->getAttribute($context["caratula"], "fojas", []));
                // line 88
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratula'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "
                            ";
            // line 91
            echo twig_escape_filter($this->env, ($context["fojas"] ?? $this->getContext($context, "fojas")), "html", null, true);
            echo " 


                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TIPO</th>
                        <td  class=\"bg-white\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tipo", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">INICIADOR DEPENDENCIA</th>
                        <td  class=\"bg-white\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "iniciadorDependencia", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE INICIO</th>
                        <td class=\"bg-white\">";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaInicio", []), "d-m-Y"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE FIN</th>
                        <td  class=\"bg-white\">";
            // line 110
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []), "d-m-Y"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">ULTIMO PASE</th>
                        <td  class=\"bg-white\">
                            ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ultimaUbicacion", []), "html", null, true);
            echo "

                            - ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ultimaUbicacion", []), "dependencia", []), "html", null, true);
            echo "

                            , en fecha <strong>";
            // line 119
            echo twig_escape_filter($this->env, ($context["ultima_fecha"] ?? $this->getContext($context, "ultima_fecha")), "html", null, true);
            echo "</strong>
                        </td>
                    </tr>  
                    <tr>
                        <th class=\"w-25 bg-gray\">UBICACION ACTUAL</th>
                        <td  class=\"bg-white\">
                            ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "html", null, true);
            echo "                          
                            - ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "dependencia", []), "html", null, true);
            echo "
                            , desde el <strong>";
            // line 127
            echo twig_escape_filter($this->env, ($context["actual_fecha"] ?? $this->getContext($context, "actual_fecha")), "html", null, true);
            echo "</strong>
                        </td>
                    </tr>   


                    ";
            // line 132
            if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "estado", []) == "ASOCIADO")) {
                echo "                        
                        <tr>
                            <th class=\"w-25 bg-gray\">ASOCIADO A EXPEDIENTE</th>
                            <td  class=\"bg-white\">

                                ";
                // line 137
                echo twig_escape_filter($this->env, ($context["expediente_padre"] ?? $this->getContext($context, "expediente_padre")), "html", null, true);
                echo "
                                <br/>
                            <td/>
                        </tr>              
                    ";
            }
            // line 142
            echo "
                </tbody>
                <tfoot>
            </table>  

        ";
        }
        // line 148
        echo "    </div>
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
        return array (  301 => 148,  293 => 142,  285 => 137,  277 => 132,  269 => 127,  265 => 126,  261 => 125,  252 => 119,  247 => 117,  242 => 115,  234 => 110,  227 => 106,  220 => 102,  213 => 98,  203 => 91,  200 => 90,  193 => 88,  191 => 87,  188 => 86,  184 => 85,  181 => 84,  179 => 83,  170 => 77,  163 => 73,  154 => 66,  152 => 65,  149 => 64,  147 => 63,  142 => 61,  135 => 57,  130 => 55,  123 => 51,  118 => 49,  111 => 45,  106 => 43,  98 => 38,  94 => 37,  60 => 5,  51 => 4,  29 => 2,);
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
        <h4>Búsqueda de Expediente</h4>
        <hr/>
        <div class=\"filtro\">
            {{ form_start(formExpedienteFilter) }}
            {{ form_errors(formExpedienteFilter) }}

            <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
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
            {{ form_end(formExpedienteFilter) }}
        </div>
        {% if expedientes|length >0 %}
            <hr/>
            {% set expediente =  expedientes[0]%}

            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                </thead>
                <tbody >
                    <tr>
                        <th class=\"w-25 bg-gray\">TEMA</th>
                        <td  class=\"bg-white\">{{ expediente.tema}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">CONCEPTO</th>
                        <td  class=\"bg-white\">{{ expediente.concepto}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TOTAL DE FOJAS</th>
                        <td  class=\"bg-white\">

                            {% set fojas = expediente.fojas %}

                            {% for caratula in expediente.caratulas.getValues %}

                                {% set fojas = fojas+caratula.fojas %}

                            {% endfor %}

                            {{ fojas }} 


                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TIPO</th>
                        <td  class=\"bg-white\">{{ expediente.tipo}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">INICIADOR DEPENDENCIA</th>
                        <td  class=\"bg-white\">{{ expediente.iniciadorDependencia}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE INICIO</th>
                        <td class=\"bg-white\">{{ expediente.fechaInicio|date('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE FIN</th>
                        <td  class=\"bg-white\">{{ expediente.fechaFin|date('d-m-Y')}}</td>
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

        {% endif %}
    </div>
{% endblock %}", "AppBundle:PaginaPrincipal:inicio.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/PaginaPrincipal/inicio.html.twig");
    }
}
