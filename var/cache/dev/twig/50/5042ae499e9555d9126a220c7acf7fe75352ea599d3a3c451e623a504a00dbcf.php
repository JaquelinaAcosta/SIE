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

/* AppBundle:Dependencia:listadoDependencia.html.twig */
class __TwigTemplate_12f817bb0e2e7275511ada3393220b050f1d08dac0e78d56f7196cf6a9b5171b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Dependencia:listadoDependencia.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Dependencia:listadoDependencia.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Dependencia:listadoDependencia.html.twig", 1);
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
    
    
    <h4 class=\"text-center\"><i class=\"fas fa-building\"></i> Lista de Dependencias <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_dependencia");
        echo "\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nueva Dependencia\"><i class=\"fas fa-plus\"></i></a></h4>
    <hr/>
    <div id=\"accordion_filtros\">

        <div class=\"row form col-lg-12\" style=\"background:none;margin:0;\">
            
            <h4>FILTROS</h4>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"threecol col-lg-3\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCIÓN"]);
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"threecol col-lg-4\">
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'label', ["label" => "DEPENDENCIA PADRE"]);
        echo "
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'errors');
        echo "
                        </div>
                    </div> 
                    <div class=\"threecol col-lg-2\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'label', ["label" => "NOMBRE RESPONSABLE"]);
        echo "
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'errors');
        echo "
                        </div>
                    </div>  
                    <div class=\"twocol col-lg-1\">
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'label', ["label" => "NIVEL"]);
        echo "
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'errors');
        echo "
                        </div>
                    </div> 
                    <div class=\"twocol col-lg-2\">
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "archivado", []), 'label', ["label" => "ARCHIVADO: Si/No"]);
        echo "
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "archivado", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "archivado", []), 'errors');
        echo "
                        </div>
                    </div> 
                </div>
                
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-1\">
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "filter", []), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-1\">
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "reset", []), 'row');
        echo "
                    </div>
                </div>
                    <br/>
                    <br/>
                    <hr/>
                ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), 'form_end');
        echo "

            </form>
                 
        </div>
    </div>


    <br/>
    
  
    <table class=\"table table-striped\">
        <thead class=\"\">
            <tr>
                <th scope=\"col\">Descripción</th>
                <th scope=\"col\">Dependencia Padre</th>
                <th scope=\"col\">Responsable</th>
                <th scope=\"col\">Estado</th>
                <th scope=\"col\">Nivel</th>
                <th scope=\"col\">Acciones</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["dependencias"] ?? $this->getContext($context, "dependencias"))));
        foreach ($context['_seq'] as $context["_key"] => $context["dependencia"]) {
            // line 131
            echo "                <tr>
                    <td class=\"text-default\">";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "descripcion", []));
            echo "</td>
                    <td class=\"text-default\"><p>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dependencia"], "dependenciaPadre", []), "descripcion", []));
            echo "</p></td>
                    <td class=\"text-default\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "responsable", []));
            echo "</td>
                    
                    ";
            // line 136
            if (($this->getAttribute($context["dependencia"], "archivado", []) == "NO")) {
                // line 137
                echo "                        <td class=\"text-default\">Vigente</td>
                          <td class=\"text-default\">";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "nivel", []));
                echo "</td>
                    <td> <a class=\"btn btn-info\" href=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adm_gestionar_mesaentrada", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar Mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                        <a class=\"btn btn-warning\" href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archivar_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"far fa-file-archive\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Archivar\"></i></a></td>
                    ";
            } else {
                // line 143
                echo "                        <td class=\"text-default\">Archivado</td>
                          <td class=\"text-default\">";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "nivel", []));
                echo "</td>
                    <td> <a class=\"btn btn-info\" href=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adm_gestionar_mesaentrada", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                        <a class=\"btn btn-warning\" href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Dependencia\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-success\" href=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alta_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"far fa-calendar-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dar de Alta\"></i></a></td>
                    ";
            }
            // line 149
            echo "                  
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "
        </tbody>
    </table>
    
    ";
        // line 156
        if ((twig_length_filter($this->env, ($context["dependencias"] ?? $this->getContext($context, "dependencias"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 157
            echo "    <ul class=\"pagination\">
        ";
            // line 158
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
        ";
            } else {
                // line 160
                echo "            ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 161
                echo "        ";
            }
            // line 162
            echo "

        <li ><a class=\"page-link\" href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
            ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 166
                echo "            <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "        
        ";
            // line 169
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 170
                echo "
        ";
            } else {
                // line 172
                echo "            ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 173
                echo "        ";
            }
            // line 174
            echo "        <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

    </ul>
    ";
        }
        // line 178
        echo "
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
    
    <script>
        \$('#dependencia_filter_responsable').autocompleter({
            url_list: \"";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_search");
        echo "\",
            url_get: \"";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_get");
        echo "\"
        });
    </script>

    <hr/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Dependencia:listadoDependencia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 188,  397 => 187,  386 => 178,  378 => 174,  375 => 173,  372 => 172,  368 => 170,  366 => 169,  363 => 168,  352 => 166,  348 => 165,  344 => 164,  340 => 162,  337 => 161,  334 => 160,  329 => 158,  326 => 157,  324 => 156,  318 => 152,  310 => 149,  305 => 147,  301 => 146,  297 => 145,  293 => 144,  290 => 143,  285 => 141,  281 => 140,  277 => 139,  273 => 138,  270 => 137,  268 => 136,  263 => 134,  259 => 133,  255 => 132,  252 => 131,  248 => 130,  221 => 106,  212 => 100,  206 => 97,  196 => 90,  191 => 88,  187 => 87,  180 => 83,  175 => 81,  171 => 80,  164 => 76,  159 => 74,  155 => 73,  148 => 69,  143 => 67,  139 => 66,  132 => 62,  127 => 60,  123 => 59,  117 => 56,  106 => 48,  60 => 4,  51 => 3,  29 => 1,);
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
    
    
    <h4 class=\"text-center\"><i class=\"fas fa-building\"></i> Lista de Dependencias <a href=\"{{ path('nueva_dependencia') }}\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nueva Dependencia\"><i class=\"fas fa-plus\"></i></a></h4>
    <hr/>
    <div id=\"accordion_filtros\">

        <div class=\"row form col-lg-12\" style=\"background:none;margin:0;\">
            
            <h4>FILTROS</h4>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                {{ form_errors(formDependenciaFilter) }}
                <div class=\"row\">
                    <div class=\"threecol col-lg-3\">
                        {{ form_label(formDependenciaFilter.descripcion, 'DESCRIPCIÓN') }}
                        {{ form_widget(formDependenciaFilter.descripcion) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formDependenciaFilter.descripcion) }}
                        </div>
                    </div>
                    <div class=\"threecol col-lg-4\">
                        {{ form_label(formDependenciaFilter.dependenciaPadre, 'DEPENDENCIA PADRE') }}
                        {{ form_widget(formDependenciaFilter.dependenciaPadre) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formDependenciaFilter.dependenciaPadre) }}
                        </div>
                    </div> 
                    <div class=\"threecol col-lg-2\">
                        {{ form_label(formDependenciaFilter.responsable, 'NOMBRE RESPONSABLE') }}
                        {{ form_widget(formDependenciaFilter.responsable) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formDependenciaFilter.responsable) }}
                        </div>
                    </div>  
                    <div class=\"twocol col-lg-1\">
                        {{ form_label(formDependenciaFilter.nivel, 'NIVEL') }}
                        {{ form_widget(formDependenciaFilter.nivel) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formDependenciaFilter.nivel) }}
                        </div>
                    </div> 
                    <div class=\"twocol col-lg-2\">
                        {{ form_label(formDependenciaFilter.archivado, 'ARCHIVADO: Si/No') }}
                        {{ form_widget(formDependenciaFilter.archivado) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formDependenciaFilter.archivado) }}
                        </div>
                    </div> 
                </div>
                
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-1\">
                        {{ form_row(formDependenciaFilter.filter) }}
                    </div>
                    <div class=\"col-lg-1\">
                        {{ form_row(formDependenciaFilter.reset) }}
                    </div>
                </div>
                    <br/>
                    <br/>
                    <hr/>
                {{ form_end(formDependenciaFilter) }}

            </form>
                 
        </div>
    </div>


    <br/>
    
  
    <table class=\"table table-striped\">
        <thead class=\"\">
            <tr>
                <th scope=\"col\">Descripción</th>
                <th scope=\"col\">Dependencia Padre</th>
                <th scope=\"col\">Responsable</th>
                <th scope=\"col\">Estado</th>
                <th scope=\"col\">Nivel</th>
                <th scope=\"col\">Acciones</th>
            </tr>
        </thead>
        <tbody>

            {% for dependencia in dependencias|reverse %}
                <tr>
                    <td class=\"text-default\">{{dependencia.descripcion|e }}</td>
                    <td class=\"text-default\"><p>{{dependencia.dependenciaPadre.descripcion|e }}</p></td>
                    <td class=\"text-default\">{{dependencia.responsable|e }}</td>
                    
                    {% if dependencia.archivado == 'NO' %}
                        <td class=\"text-default\">Vigente</td>
                          <td class=\"text-default\">{{dependencia.nivel|e }}</td>
                    <td> <a class=\"btn btn-info\" href=\"{{ path('adm_gestionar_mesaentrada',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar Mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                        <a class=\"btn btn-warning\" href=\"{{ path('editar_dependencia',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"{{ path('archivar_dependencia',{'id':dependencia.id}) }}\"  role=\"button\"><i class=\"far fa-file-archive\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Archivar\"></i></a></td>
                    {% else %}
                        <td class=\"text-default\">Archivado</td>
                          <td class=\"text-default\">{{dependencia.nivel|e }}</td>
                    <td> <a class=\"btn btn-info\" href=\"{{ path('adm_gestionar_mesaentrada',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                        <a class=\"btn btn-warning\" href=\"{{ path('editar_dependencia',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Dependencia\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-success\" href=\"{{ path('alta_dependencia',{'id':dependencia.id}) }}\"  role=\"button\"><i class=\"far fa-calendar-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dar de Alta\"></i></a></td>
                    {% endif %}
                  
                </tr>
            {% endfor %}

        </tbody>
    </table>
    
    {% if dependencias|length < totalItems %}
    <ul class=\"pagination\">
        {%if (thisPage==1)%}           
        {%else%}
            {%set thisPage= thisPage-1%}
        {%endif%}


        <li ><a class=\"page-link\" href=\"{{ path('listado_dependencia', {\"currentPage\": thisPage}) }}\">&laquo</a></li>
            {% for i in 1..maxPages %}
            <li><a class=\"page-link\"  href=\"{{ path('listado_dependencia', {\"currentPage\": i}) }}\">{{ i }}</a></li>
            {% endfor %}
        
        {%if (page==maxPages)%}

        {%else%}
            {%set page= page+1%}
        {%endif%}
        <li><a class=\"page-link\" href=\"{{ path('listado_dependencia', {\"currentPage\": page}) }}\">&raquo</a></li>

    </ul>
    {% endif %}

    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
    
    <script>
        \$('#dependencia_filter_responsable').autocompleter({
            url_list: \"{{ path('persona_search') }}\",
            url_get: \"{{ path('persona_get') }}\"
        });
    </script>

    <hr/>
{% endblock %}", "AppBundle:Dependencia:listadoDependencia.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Dependencia/listadoDependencia.html.twig");
    }
}
