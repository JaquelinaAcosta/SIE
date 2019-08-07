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



    <h4 class=\"text-center\"><i class=\"fas fa-bars\"></i> Lista de Expedientes -  ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "dependencia", []), "descripcion", []), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente");
        echo "\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nuevo Expediente\"><i class=\"fas fa-plus\"></i></a></h4>
    
    <div class=\"row form col-lg-10\" style=\"background:none;margin:0;\">
            <h4>FILTROS</h4>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"threecol col-lg-4\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "nroExpediente", []), 'label', ["label" => "EXPEDIENTE"]);
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "nroExpediente", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "nroExpediente", []), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"threecol col-lg-5\">
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'label', ["label" => "TEMA"]);
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'errors');
        echo "
                        </div>
                    </div>    
                     <div class=\"threecol col-lg-3\">
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'label', ["label" => "TIPO"]);
        echo "
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'errors');
        echo "
                        </div>
                    </div>   
                         <div class=\"threecol col-lg-3\">
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'label', ["label" => "FECHA DESDE"]);
        echo "
                         ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'row', ["id" => "date1"]);
        echo " 
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'errors');
        echo "
                        </div>
                    </div>     
                    
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-1\">
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "filter", []), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-1\">
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "reset", []), 'row');
        echo "
                    </div>
                </div>
                ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_end');
        echo "
            </form>
        </div>
    </div>

    <hr/>
    
    <table class=\"table table-striped\">
        <thead class=\"\">
            <tr>
                <th scope=\"col\">EXPEDIENTE</th>
                <th scope=\"col\">TEMA</th>
                <th scope=\"col\">FECHA DE INICIO</th>
                <th scope=\"col\">UBICACION ACTUAL</th>
                <th scope=\"col\">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["expediente"]));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
            // line 114
            echo "                <tr>
                    <td class=\"text-default\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "nroExpediente", []));
            echo "</td>            
                    <td class=\"text-default\">";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "tema", []));
            echo "</td>
                    <td class=\"text-default\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "fechaInicio", []));
            echo "</td>
                    <td class=\"text-default\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "ubicacionActual", []));
            echo "</td>
                    <td><a class=\"btn btn-info\" href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                        <a class=\"btn btn-warning\" href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "
        </tbody>
    </table>

    <script>
        
      
         \$('#expediente_filter_tema').autocompleter({
                url_list: \"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
                url_get: \"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_get");
        echo "\"
            });
        ";
        // line 139
        echo "        
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
        return array (  286 => 139,  281 => 133,  277 => 132,  267 => 124,  258 => 121,  254 => 120,  250 => 119,  246 => 118,  242 => 117,  238 => 116,  234 => 115,  231 => 114,  227 => 113,  205 => 94,  199 => 91,  193 => 88,  184 => 82,  179 => 80,  175 => 79,  171 => 78,  164 => 74,  159 => 72,  155 => 71,  148 => 67,  143 => 65,  139 => 64,  132 => 60,  127 => 58,  123 => 57,  117 => 54,  107 => 49,  60 => 4,  51 => 3,  29 => 1,);
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



    <h4 class=\"text-center\"><i class=\"fas fa-bars\"></i> Lista de Expedientes -  {{ app.user.persona.dependencia.descripcion }} <a href=\"{{ path('nuevo_expediente') }}\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nuevo Expediente\"><i class=\"fas fa-plus\"></i></a></h4>
    
    <div class=\"row form col-lg-10\" style=\"background:none;margin:0;\">
            <h4>FILTROS</h4>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                {{ form_errors(formExpedienteFilter) }}
                <div class=\"row\">
                    <div class=\"threecol col-lg-4\">
                        {{ form_label(formExpedienteFilter.nroExpediente, 'EXPEDIENTE') }}
                        {{ form_widget(formExpedienteFilter.nroExpediente) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formExpedienteFilter.nroExpediente) }}
                        </div>
                    </div>
                    <div class=\"threecol col-lg-5\">
                        {{ form_label(formExpedienteFilter.tema, 'TEMA') }}
                        {{ form_widget(formExpedienteFilter.tema) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formExpedienteFilter.tema) }}
                        </div>
                    </div>    
                     <div class=\"threecol col-lg-3\">
                        {{ form_label(formExpedienteFilter.tipo, 'TIPO') }}
                        {{ form_widget(formExpedienteFilter.tipo) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formExpedienteFilter.tipo) }}
                        </div>
                    </div>   
                         <div class=\"threecol col-lg-3\">
                        {{ form_label(formExpedienteFilter.fechaInicio, 'FECHA DESDE') }}
                         {{ form_row(formExpedienteFilter.fechaInicio, { 'id': 'date1' })}} 
                        {{ form_widget(formExpedienteFilter.fechaInicio) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formExpedienteFilter.fechaInicio) }}
                        </div>
                    </div>     
                    
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-1\">
                        {{ form_row(formExpedienteFilter.filter) }}
                    </div>
                    <div class=\"col-lg-1\">
                        {{ form_row(formExpedienteFilter.reset) }}
                    </div>
                </div>
                {{ form_end(formExpedienteFilter) }}
            </form>
        </div>
    </div>

    <hr/>
    
    <table class=\"table table-striped\">
        <thead class=\"\">
            <tr>
                <th scope=\"col\">EXPEDIENTE</th>
                <th scope=\"col\">TEMA</th>
                <th scope=\"col\">FECHA DE INICIO</th>
                <th scope=\"col\">UBICACION ACTUAL</th>
                <th scope=\"col\">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

            {% for expediente in expediente|reverse %}
                <tr>
                    <td class=\"text-default\">{{expediente.nroExpediente|e }}</td>            
                    <td class=\"text-default\">{{expediente.tema|e }}</td>
                    <td class=\"text-default\">{{expediente.fechaInicio|e }}</td>
                    <td class=\"text-default\">{{expediente.ubicacionActual|e }}</td>
                    <td><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                        <a class=\"btn btn-warning\" href=\"{{ path(\"editar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                </tr>
            {% endfor %}

        </tbody>
    </table>

    <script>
        
      
         \$('#expediente_filter_tema').autocompleter({
                url_list: \"{{ path('tema_search') }}\",
                url_get: \"{{ path('tema_get') }}\"
            });
        {#  \$('#expediente_filter_nroExpediente').autocompleter({
                url_list: \"{{ path('expediente_search') }}\",
                url_get: \"{{ path('expediente_get') }}\"
            });#}
        
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
    <hr/>
{% endblock %}", "AppBundle:Expediente:listadoExpediente.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/listadoExpediente.html.twig");
    }
}
