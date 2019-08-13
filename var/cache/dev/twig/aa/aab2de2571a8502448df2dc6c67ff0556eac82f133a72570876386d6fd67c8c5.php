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



   <div class=\"content\">
        <div class=\"filtro\">
            <div class=\"header\"><i class=\"fas fa-search\"></i> <strong>Búsqueda de carátula</strong></h4>
                <a role=\"button\" 
                   class=\"btn btn-success float-right\" 
                   href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente");
        echo "\">
                    Nuevo Expediente</a>
            </div>
                    
            <hr/>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), 'errors');
        echo "
                    <div class=\"row\">
                        <div class=\"threecol col-lg-4\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "concepto", []), 'label', ["label" => "CONCEPTO"]);
        echo "
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "concepto", []), 'widget');
        echo "
                            <div class=\"help-block with-errors\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "concepto", []), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"threecol col-lg-4\">
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "tema", []), 'label', ["label" => "CODIGO"]);
        echo "
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "tema", []), 'widget');
        echo "
                            <div class=\"help-block with-errors\">
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "tema", []), 'errors');
        echo "
                            </div>
                           
                                
                                
                               ";
        // line 79
        echo "                        </div> 
                       
                    </div>

                    <hr/>
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "filter", []), 'widget');
        echo "
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "reset", []), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), 'form_end');
        echo "

                </form>
        </div>
            <hr/>
                
                    <table class=\"table table-striped table-hover\"> 
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\">CODIGO</th>
                                <th scope=\"col\">DESCRIPCION</th>
                                <th scope=\"col\">CONCEPTO</th>
                                <th scope=\"col\">FOJAS</th>
                                <th scope=\"col\">ACCIONES</th>

                            </tr>
                        </thead>

                        <tbody>

                            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["caratulas"] ?? $this->getContext($context, "caratulas")));
        foreach ($context['_seq'] as $context["_key"] => $context["caratulaAgregada"]) {
            // line 111
            echo "
                                <tr>
                                    <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["caratulaAgregada"], "tema", []), "codigo", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["caratulaAgregada"], "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["caratulaAgregada"], "concepto", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["caratulaAgregada"], "fojas", []), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-warning\" href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                                        <a class=\"btn btn-danger\" href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratulaAgregada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                        </tbody>

                    </table>


   </div>
                            
                            
    ";
        // line 132
        if ((twig_length_filter($this->env, ($context["caratulas"] ?? $this->getContext($context, "caratulas"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 133
            echo "            <ul class=\"pagination\">
                ";
            // line 134
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
                ";
            } else {
                // line 136
                echo "                    ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 137
                echo "                ";
            }
            // line 138
            echo "

                <li ><a class=\"page-link\" href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                    ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 142
                echo "                    <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "
                ";
            // line 145
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 146
                echo "
                ";
            } else {
                // line 148
                echo "                    ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 149
                echo "                ";
            }
            // line 150
            echo "                <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

            </ul>
        ";
        }
        // line 154
        echo "        
                            
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
    
    <script>
            \$('#caratula_filter_responsable').autocompleter({
                url_list: \"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
                url_get: \"";
        // line 165
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
        return array (  330 => 165,  326 => 164,  314 => 154,  306 => 150,  303 => 149,  300 => 148,  296 => 146,  294 => 145,  291 => 144,  280 => 142,  276 => 141,  272 => 140,  268 => 138,  265 => 137,  262 => 136,  257 => 134,  254 => 133,  252 => 132,  241 => 123,  231 => 119,  227 => 118,  222 => 116,  218 => 115,  214 => 114,  210 => 113,  206 => 111,  202 => 110,  179 => 90,  173 => 87,  169 => 86,  160 => 79,  152 => 73,  147 => 71,  143 => 70,  136 => 66,  131 => 64,  127 => 63,  121 => 60,  112 => 54,  60 => 4,  51 => 3,  29 => 1,);
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



   <div class=\"content\">
        <div class=\"filtro\">
            <div class=\"header\"><i class=\"fas fa-search\"></i> <strong>Búsqueda de carátula</strong></h4>
                <a role=\"button\" 
                   class=\"btn btn-success float-right\" 
                   href=\"{{ path('nuevo_expediente')}}\">
                    Nuevo Expediente</a>
            </div>
                    
            <hr/>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                    {{ form_errors(formCaratulaAgregadaFilter) }}
                    <div class=\"row\">
                        <div class=\"threecol col-lg-4\">
                            {{ form_label(formCaratulaAgregadaFilter.concepto, 'CONCEPTO') }}
                            {{ form_widget(formCaratulaAgregadaFilter.concepto) }}
                            <div class=\"help-block with-errors\">
                                {{ form_errors(formCaratulaAgregadaFilter.concepto) }}
                            </div>
                        </div>
                        <div class=\"threecol col-lg-4\">
                            {{ form_label(formCaratulaAgregadaFilter.tema, 'CODIGO') }}
                            {{ form_widget(formCaratulaAgregadaFilter.tema) }}
                            <div class=\"help-block with-errors\">
                                {{ form_errors(formCaratulaAgregadaFilter.tema) }}
                            </div>
                           
                                
                                
                               {# {{dump(formCaratulaAgregadaFilter.tema)}}#}
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
            <hr/>
                
                    <table class=\"table table-striped table-hover\"> 
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\">CODIGO</th>
                                <th scope=\"col\">DESCRIPCION</th>
                                <th scope=\"col\">CONCEPTO</th>
                                <th scope=\"col\">FOJAS</th>
                                <th scope=\"col\">ACCIONES</th>

                            </tr>
                        </thead>

                        <tbody>

                            {% for caratulaAgregada in caratulas %}

                                <tr>
                                    <td>{{caratulaAgregada.tema.codigo}}</td>
                                    <td>{{caratulaAgregada.tema.descripcion}}</td>
                                    <td>{{caratulaAgregada.concepto}}</td>
                                    <td>{{caratulaAgregada.fojas}}</td>
                                    <td>
                                        <a class=\"btn btn-warning\" href=\"{{ path(\"editar_caratula\", {'id':caratulaAgregada.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                                        <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_caratula\", {'id':caratulaAgregada.id}) }}\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
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
{% endblock %}", "AppBundle:Expediente:listadoCaratulas.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/Expediente/listadoCaratulas.html.twig");
    }
}
