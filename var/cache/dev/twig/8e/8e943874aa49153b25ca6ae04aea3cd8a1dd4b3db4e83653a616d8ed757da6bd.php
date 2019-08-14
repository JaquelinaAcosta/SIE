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

/* AppBundle:Expediente:listadoExpedienteAsociado.html.twig */
class __TwigTemplate_a5748b60bfc0fc50b2211f17757d2ea6b068a394ec4a680bbac375a8e5cce751 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoExpedienteAsociado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoExpedienteAsociado.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:listadoExpedienteAsociado.html.twig", 1);
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
        echo "    <style>
       
        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

    </style>


    <div class=\"content\">
        <div class=\"filtro\">
            <div class=\"header\">
                <i class=\"fas fa-search\"></i> Búsqueda de Expediente Asociado. Expediente - ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
        echo "</h4> 
            <a role=\"button\" 
               class=\"btn btn-success float-right\" 
                    href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente_asociado", ["id" => $this->getAttribute(        // line 23
($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\">
                    Nuevo Expediente Asociado</a>
            </div>
                    
            <hr/>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'errors');
        echo "
                    <div class=\"row\">
                        <div class=\"threecol col-lg-4\">
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "expedienteAsociado", []), 'label', ["label" => "EXPEDIENTE"]);
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "expedienteAsociado", []), 'widget');
        echo "
                            <div class=\"help-block with-errors\">
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "expedienteAsociado", []), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"threecol col-lg-4\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCION"]);
        echo "
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'widget');
        echo "
                            <div class=\"help-block with-errors\">
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'errors');
        echo "
                            </div>
                        </div> 
                        <div class=\"threecol col-lg-4\">
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'label', ["label" => "CODIGO DE TEMA"]);
        echo "
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'widget');
        echo "
                            <div class=\"help-block with-errors\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'errors');
        echo "
                            </div>
                        </div> 
                            
                       
                    </div>

                    <hr/>
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "filter", []), 'widget');
        echo "
                            
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "reset", []), 'widget');
        echo "
                        </div>
                    </div>
                        
                    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'form_end');
        echo "

                </form> 
            </div>               
        <hr/>

        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">EXPEDIENTE</th>
                    <th scope=\"col\">DESCRIPCION</th>
                    <th scope=\"col\">CODIGO</th>
                    <th scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asociados"] ?? $this->getContext($context, "asociados")));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente_asoc"]) {
            // line 83
            echo "                    <tr>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "codigo", []), "html", null, true);
            echo "</td>
                        <td><a class=\"btn btn-info\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                            <a class=\"btn btn-warning\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                            <a class=\"btn btn-danger\" href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente_asoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
            </tbody>
        </table>

    </div>
                
    ";
        // line 98
        if ((twig_length_filter($this->env, ($context["asociados"] ?? $this->getContext($context, "asociados"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 99
            echo "            <ul class=\"pagination\">
                ";
            // line 100
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
                ";
            } else {
                // line 102
                echo "                    ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 103
                echo "                ";
            }
            // line 104
            echo "

                <li ><a class=\"page-link\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                    ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 108
                echo "                    <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "
                ";
            // line 111
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 112
                echo "
                ";
            } else {
                // line 114
                echo "                    ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 115
                echo "                ";
            }
            // line 116
            echo "                <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

            </ul>
        ";
        }
        // line 119
        echo "            
                
         

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
        return "AppBundle:Expediente:listadoExpedienteAsociado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 119,  283 => 116,  280 => 115,  277 => 114,  273 => 112,  271 => 111,  268 => 110,  257 => 108,  253 => 107,  249 => 106,  245 => 104,  242 => 103,  239 => 102,  234 => 100,  231 => 99,  229 => 98,  221 => 92,  212 => 89,  208 => 88,  204 => 87,  200 => 86,  196 => 85,  192 => 84,  189 => 83,  185 => 82,  165 => 65,  158 => 61,  153 => 59,  140 => 49,  135 => 47,  131 => 46,  124 => 42,  119 => 40,  115 => 39,  108 => 35,  103 => 33,  99 => 32,  93 => 29,  84 => 23,  83 => 22,  77 => 19,  60 => 4,  51 => 3,  29 => 1,);
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
    <style>
       
        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

    </style>


    <div class=\"content\">
        <div class=\"filtro\">
            <div class=\"header\">
                <i class=\"fas fa-search\"></i> Búsqueda de Expediente Asociado. Expediente - {{ expediente.nroExpediente }}</h4> 
            <a role=\"button\" 
               class=\"btn btn-success float-right\" 
                    href=\"{{ path('nuevo_expediente_asociado',
                                 {'id':expediente.id}) }}\">
                    Nuevo Expediente Asociado</a>
            </div>
                    
            <hr/>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                    {{ form_errors(formExpedienteAsociadoFilter) }}
                    <div class=\"row\">
                        <div class=\"threecol col-lg-4\">
                            {{ form_label(formExpedienteAsociadoFilter.expedienteAsociado, 'EXPEDIENTE') }}
                            {{ form_widget(formExpedienteAsociadoFilter.expedienteAsociado) }}
                            <div class=\"help-block with-errors\">
                                {{ form_errors(formExpedienteAsociadoFilter.expedienteAsociado) }}
                            </div>
                        </div>
                        <div class=\"threecol col-lg-4\">
                            {{ form_label(formExpedienteAsociadoFilter.descripcion, 'DESCRIPCION') }}
                            {{ form_widget(formExpedienteAsociadoFilter.descripcion) }}
                            <div class=\"help-block with-errors\">
                                {{ form_errors(formExpedienteAsociadoFilter.descripcion) }}
                            </div>
                        </div> 
                        <div class=\"threecol col-lg-4\">
                            {{ form_label(formExpedienteAsociadoFilter.tema, 'CODIGO DE TEMA') }}
                            {{ form_widget(formExpedienteAsociadoFilter.tema) }}
                            <div class=\"help-block with-errors\">
                                {{ form_errors(formExpedienteAsociadoFilter.tema) }}
                            </div>
                        </div> 
                            
                       
                    </div>

                    <hr/>
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            {{ form_widget(formExpedienteAsociadoFilter.filter) }}
                            
                            {{ form_widget(formExpedienteAsociadoFilter.reset) }}
                        </div>
                    </div>
                        
                    {{ form_end(formExpedienteAsociadoFilter) }}

                </form> 
            </div>               
        <hr/>

        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">EXPEDIENTE</th>
                    <th scope=\"col\">DESCRIPCION</th>
                    <th scope=\"col\">CODIGO</th>
                    <th scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>

                {% for expediente_asoc in asociados %}
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
                
    {% if asociados|length < totalItems %}
            <ul class=\"pagination\">
                {%if (thisPage==1)%}           
                {%else%}
                    {%set thisPage= thisPage-1%}
                {%endif%}


                <li ><a class=\"page-link\" href=\"{{ path('listado_asociado', {'id':expediente.id, \"currentPage\": thisPage}) }}\">&laquo</a></li>
                    {% for i in 1..maxPages %}
                    <li><a class=\"page-link\"  href=\"{{ path('listado_asociado', {'id':expediente.id, \"currentPage\": i}) }}\">{{ i }}</a></li>
                    {% endfor %}

                {%if (page==maxPages)%}

                {%else%}
                    {%set page= page+1%}
                {%endif%}
                <li><a class=\"page-link\" href=\"{{ path('listado_asociado', {'id':expediente.id, \"currentPage\": page}) }}\">&raquo</a></li>

            </ul>
        {% endif %}            
                
         

    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

{% endblock %}", "AppBundle:Expediente:listadoExpedienteAsociado.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/listadoExpedienteAsociado.html.twig");
    }
}
