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

        .modal-header-warning {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #060325;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    </style>


    <div class=\"content\">
        <div class=\"filtro\">
            <div class=\"header\">
                <i class=\"fas fa-search\"></i> Búsqueda de Expediente Asociado. Expediente - ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "codigoExpediente", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "numeroExpediente", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "digitoExpediente", []), "html", null, true);
        echo "</h4> 
                <a role=\"button\" 
                   class=\"btn btn-success float-right\" 
                   href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => 1, "modo" => "asociado", "padre_id" => $this->getAttribute(        // line 36
($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\">
                    Nuevo Expediente Asociado</a>
            </div>

            <hr/>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"threecol col-lg-4\">
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "expedienteAsociado", []), 'label', ["label" => "EXPEDIENTE"]);
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "expedienteAsociado", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "expedienteAsociado", []), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"threecol col-lg-4\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCION"]);
        echo "
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'errors');
        echo "
                        </div>
                    </div> 
                    <div class=\"threecol col-lg-4\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'label', ["label" => "CODIGO DE TEMA"]);
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'errors');
        echo "
                        </div>
                    </div> 


                </div>

                <hr/>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "filter", []), 'widget');
        echo "

                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "reset", []), 'widget');
        echo "
                    </div>
                </div>

                ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'form_end');
        echo "

            </form> 
        </div>               
        <hr/>
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 84
            echo "            <div class=\"alert alert-success\">
                ";
            // line 85
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
            <hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 91
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 92
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
            <hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">EXPEDIENTE</th>
                    <th scope=\"col\">DESCRIPCION</th>
                    <th scope=\"col\">FOJAS</th>
                    <th scope=\"col\">CODIGO</th>
                    <th scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asociados"] ?? $this->getContext($context, "asociados")));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente_asoc"]) {
            // line 109
            echo "                    <tr>
                        <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "fojas", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "codigo", []), "html", null, true);
            echo "</td>
                        <td><a class=\"btn btn-info\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                            <a class=\"btn btn-warning\" href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                ";
            // line 117
            echo "

                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                            <!-- The Modal -->
                            <div class=\"modal fade\" id=\"myModal\">
                                <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                    <div class=\"modal-content\">

                                        <!-- Modal Header -->
                                        <div class=\"modal-header-warning\">
                                            <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <h4 class=\"modal-title\">Eliminar Persona</h4>
                                        </div>

                                        <!-- Modal body -->
                                        <div class=\"modal-body\">
                                            ¿Está seguro de quitar el expediente asociado ";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
            echo "?
                                        </div>

                                        <!-- Modal footer -->
                                        <div class=\"modal-footer\">                                          
                                            <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remover_expediente_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "id_asoc" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\">Si</a></button>                                   
                                         <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente_asoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "
            </tbody>
        </table>

    </div>

    ";
        // line 157
        if ((twig_length_filter($this->env, ($context["asociados"] ?? $this->getContext($context, "asociados"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 158
            echo "        <ul class=\"pagination\">
            ";
            // line 159
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
            ";
            } else {
                // line 161
                echo "                ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 162
                echo "            ";
            }
            // line 163
            echo "

            <li ><a class=\"page-link\" href=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 167
                echo "                <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "
            ";
            // line 170
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 171
                echo "
            ";
            } else {
                // line 173
                echo "                ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 174
                echo "            ";
            }
            // line 175
            echo "            <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
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
        return array (  387 => 178,  379 => 175,  376 => 174,  373 => 173,  369 => 171,  367 => 170,  364 => 169,  353 => 167,  349 => 166,  345 => 165,  341 => 163,  338 => 162,  335 => 161,  330 => 159,  327 => 158,  325 => 157,  317 => 151,  300 => 140,  292 => 135,  272 => 117,  268 => 115,  264 => 114,  260 => 113,  256 => 112,  252 => 111,  248 => 110,  245 => 109,  241 => 108,  227 => 96,  217 => 92,  214 => 91,  210 => 90,  207 => 89,  197 => 85,  194 => 84,  190 => 83,  182 => 78,  175 => 74,  170 => 72,  157 => 62,  152 => 60,  148 => 59,  141 => 55,  136 => 53,  132 => 52,  125 => 48,  120 => 46,  116 => 45,  110 => 42,  101 => 36,  100 => 35,  90 => 32,  60 => 4,  51 => 3,  29 => 1,);
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

        .modal-header-warning {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #060325;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    </style>


    <div class=\"content\">
        <div class=\"filtro\">
            <div class=\"header\">
                <i class=\"fas fa-search\"></i> Búsqueda de Expediente Asociado. Expediente - {{expediente.codigoExpediente }}-{{expediente.numeroExpediente }}-{{expediente.digitoExpediente }}</h4> 
                <a role=\"button\" 
                   class=\"btn btn-success float-right\" 
                   href=\"{{ path('listado_expediente',
                                 {'currentPage':1,'modo':'asociado','padre_id':expediente.id}) }}\">
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
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
            <hr/>
        {% endfor %}

        {% for message in app.flashes('danger') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
            <hr/>
        {% endfor %}
        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">EXPEDIENTE</th>
                    <th scope=\"col\">DESCRIPCION</th>
                    <th scope=\"col\">FOJAS</th>
                    <th scope=\"col\">CODIGO</th>
                    <th scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>

                {% for expediente_asoc in asociados %}
                    <tr>
                        <td>{{expediente_asoc.expedienteAsociado}}</td>
                        <td>{{expediente_asoc.expedienteAsociado.tema.descripcion}}</td>
                        <td>{{expediente_asoc.expedienteAsociado.fojas}}</td>
                        <td>{{expediente_asoc.expedienteAsociado.tema.codigo}}</td>
                        <td><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente_asoc.expedienteAsociado.id}) }}\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                            <a class=\"btn btn-warning\" href=\"{{ path(\"editar_expediente\", {'id':expediente_asoc.expedienteAsociado.id}) }}\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                {#                            <a class=\"btn btn-danger\" href=\"{{ path(\"remover_expediente_asociado\", {'id':padre_id, 'id_asoc':expediente_asoc.expedienteAsociado.id}) }}\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a>#}


                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                            <!-- The Modal -->
                            <div class=\"modal fade\" id=\"myModal\">
                                <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                    <div class=\"modal-content\">

                                        <!-- Modal Header -->
                                        <div class=\"modal-header-warning\">
                                            <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <h4 class=\"modal-title\">Eliminar Persona</h4>
                                        </div>

                                        <!-- Modal body -->
                                        <div class=\"modal-body\">
                                            ¿Está seguro de quitar el expediente asociado {{expediente_asoc.expedienteAsociado}}?
                                        </div>

                                        <!-- Modal footer -->
                                        <div class=\"modal-footer\">                                          
                                            <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"{{ path(\"remover_expediente_asociado\", {'id':padre_id, 'id_asoc':expediente_asoc.expedienteAsociado.id}) }}\"  role=\"button\">Si</a></button>                                   
                                         <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </td>
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
