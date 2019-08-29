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

/* AppBundle:Expediente:listadoCaratulas.html.twig */
class __TwigTemplate_ba7aa7db0e5d0776e97e52d2b98426a14fe47233f903abeb0477efb49f72a296 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoCaratulas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoCaratulas.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:listadoCaratulas.html.twig", 1);
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
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingOne\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Carátulas
                    </button>

                    ";
        // line 25
        $context["accion_habilitada"] = false;
        // line 26
        echo "                    ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 27
            echo "                        ";
            $context["accion_habilitada"] = true;
            // line 28
            echo "                    ";
        } else {
            // line 29
            echo "
                        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "responsables", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 31
                echo "                            ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == $this->getAttribute($context["responsable"], "usuario", []))) {
                    // line 32
                    echo "                                ";
                    $context["accion_habilitada"] = true;
                    // line 33
                    echo "                            ";
                }
                // line 34
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    ";
        }
        echo "  
                    ";
        // line 36
        if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
            // line 37
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                           role=\"button\" class=\"btn btn-info float-right\">Nuevo Carátula</a>
                    ";
        }
        // line 40
        echo "                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), 'form_start');
        echo "
";
        // line 48
        echo "                        <div class=\"row\">
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "tema", []), 'label', ["label" => "CODIGO"]);
        echo "
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "tema", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "tema", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "descripcionTema", []), 'label', ["label" => "DESCRIPCION TEMA"]);
        echo "
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "descripcionTema", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "descripcionTema", []), 'errors');
        echo "
                                </div>
                            </div> 

                        </div>

                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), 'form_end');
        echo "

                    </form>

                </div>
            </div>
        </div>

        <hr/>

        <table class=\"table table-striped table-hover\"> 
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">CODIGO TEMA</th>
                    <th scope=\"col\">DESCRIPCION</th>
                    <th scope=\"col\">ACCIONES</th>

                </tr>
            </thead>

            <tbody>

                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["caratulas"] ?? $this->getContext($context, "caratulas")));
        foreach ($context['_seq'] as $context["_key"] => $context["caratulaAgregada"]) {
            // line 96
            echo "
                    <tr>
                        <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["caratulaAgregada"], "tema", []), "codigo", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["caratulaAgregada"], "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 101
            if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
                // line 102
                echo "                                <a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                <a class=\"btn btn-warning\" href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                                <a class=\"btn btn-danger\" href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                                ";
            }
            // line 106
            echo "                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratulaAgregada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
            </tbody>

        </table>


    </div>


    ";
        // line 118
        if ((twig_length_filter($this->env, ($context["caratulas"] ?? $this->getContext($context, "caratulas"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 119
            echo "        <ul class=\"pagination\">
            ";
            // line 120
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
            ";
            } else {
                // line 122
                echo "                ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 123
                echo "            ";
            }
            // line 124
            echo "

            <li ><a class=\"page-link\" href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 128
                echo "                <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "
            ";
            // line 131
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 132
                echo "
            ";
            } else {
                // line 134
                echo "                ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 135
                echo "            ";
            }
            // line 136
            echo "            <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

        </ul>
    ";
        }
        // line 140
        echo "

    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

    <script>
        \$('#caratula_filter_responsable').autocompleter({
            url_list: \"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
            url_get: \"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_get");
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
        return "AppBundle:Expediente:listadoCaratulas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 151,  344 => 150,  332 => 140,  324 => 136,  321 => 135,  318 => 134,  314 => 132,  312 => 131,  309 => 130,  298 => 128,  294 => 127,  290 => 126,  286 => 124,  283 => 123,  280 => 122,  275 => 120,  272 => 119,  270 => 118,  259 => 109,  251 => 106,  246 => 104,  242 => 103,  237 => 102,  235 => 101,  230 => 99,  226 => 98,  222 => 96,  218 => 95,  193 => 73,  187 => 70,  183 => 69,  171 => 60,  166 => 58,  162 => 57,  155 => 53,  150 => 51,  146 => 50,  142 => 48,  138 => 46,  130 => 40,  123 => 37,  121 => 36,  116 => 35,  110 => 34,  107 => 33,  104 => 32,  101 => 31,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  83 => 25,  60 => 4,  51 => 3,  29 => 1,);
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
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingOne\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Carátulas
                    </button>

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
                    {% if accion_habilitada == true %}
                        <a href=\"{{ path('nueva_caratula',{'id':expediente.id}) }}\" 
                           role=\"button\" class=\"btn btn-info float-right\">Nuevo Carátula</a>
                    {%endif%}
                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        {{ form_start(formCaratulaAgregadaFilter) }}
{#                        {{ form_errors(formCaratulaAgregadaFilter) }}#}
                        <div class=\"row\">
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formCaratulaAgregadaFilter.tema, 'CODIGO') }}
                                {{ form_widget(formCaratulaAgregadaFilter.tema) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formCaratulaAgregadaFilter.tema) }}
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formCaratulaAgregadaFilter.descripcionTema, 'DESCRIPCION TEMA') }}
                                {{ form_widget(formCaratulaAgregadaFilter.descripcionTema) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formCaratulaAgregadaFilter.descripcionTema) }}
                                </div>
                            </div> 

                        </div>

                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                {{ form_widget(formCaratulaAgregadaFilter.filter) }}
                                {{ form_widget(formCaratulaAgregadaFilter.reset) }}
                            </div>
                        </div>
                        {{ form_end(formCaratulaAgregadaFilter) }}

                    </form>

                </div>
            </div>
        </div>

        <hr/>

        <table class=\"table table-striped table-hover\"> 
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">CODIGO TEMA</th>
                    <th scope=\"col\">DESCRIPCION</th>
                    <th scope=\"col\">ACCIONES</th>

                </tr>
            </thead>

            <tbody>

                {% for caratulaAgregada in caratulas %}

                    <tr>
                        <td>{{caratulaAgregada.tema.codigo}}</td>
                        <td>{{caratulaAgregada.tema.descripcion}}</td>
                        <td>
                            {% if accion_habilitada == true %}
                                <a class=\"btn btn-info\" href=\"{{path(\"ver_caratula\",{'id':caratulaAgregada.id})}}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                <a class=\"btn btn-warning\" href=\"{{ path(\"editar_caratula\", {'id':caratulaAgregada.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                                <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_caratula\", {'id':caratulaAgregada.id}) }}\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                                {%endif%}
                    </tr>

                {% endfor %}

            </tbody>

        </table>


    </div>


    {% if caratulas|length < totalItems %}
        <ul class=\"pagination\">
            {%if (thisPage==1)%}           
            {%else%}
                {%set thisPage= thisPage-1%}
            {%endif%}


            <li ><a class=\"page-link\" href=\"{{ path('listado_caratula', {'id':expediente.id, \"currentPage\": thisPage}) }}\">&laquo</a></li>
                {% for i in 1..maxPages %}
                <li><a class=\"page-link\"  href=\"{{ path('listado_caratula', {'id':expediente.id, \"currentPage\": i}) }}\">{{ i }}</a></li>
                {% endfor %}

            {%if (page==maxPages)%}

            {%else%}
                {%set page= page+1%}
            {%endif%}
            <li><a class=\"page-link\" href=\"{{ path('listado_caratula', {'id':expediente.id, \"currentPage\": page}) }}\">&raquo</a></li>

        </ul>
    {% endif %}


    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

    <script>
        \$('#caratula_filter_responsable').autocompleter({
            url_list: \"{{ path('tema_search') }}\",
            url_get: \"{{ path('tema_get') }}\"
        });
    </script>

    <hr/>
{% endblock %}", "AppBundle:Expediente:listadoCaratulas.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/listadoCaratulas.html.twig");
    }
}
