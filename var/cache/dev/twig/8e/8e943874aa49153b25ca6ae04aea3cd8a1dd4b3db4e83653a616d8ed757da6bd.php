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

        label{
            margin-top:6px;
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

        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h2 class=\"mb-0\">
                        <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Expedientes Asociados
                        </button>
                        <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => 1, "modo" => "asociado", "padre_id" => $this->getAttribute(        // line 56
($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\" 
                                 role=\"button\" class=\"btn btn-info float-right\">Nuevo Expediente Asociado</a>
                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'errors');
        echo "
                            <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
                            <div class=\"row\">
                                <div class=\"threecol col-lg-1\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "codigoExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "codigoExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"threecol col-lg-2\">
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "numeroExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "numeroExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"threecol col-lg-1\">
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "digitoExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "digitoExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"threecol col-lg-4\">
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCION"]);
        echo "
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'errors');
        echo "
                                    </div>
                                </div> 
                                <div class=\"threecol col-lg-4\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'label', ["label" => "CODIGO DE TEMA"]);
        echo "
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'errors');
        echo "
                                    </div>
                                </div> 


                            </div>

                            <hr/>
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "filter", []), 'widget');
        echo "

                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "reset", []), 'widget');
        echo "
                                </div>
                            </div>

                            ";
        // line 114
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'form_end');
        echo "

                        </form>              
                    </div>
                </div>
            </div>
            <hr/>
            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 122
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 123
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "
            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 129
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 130
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "            <table class=\"table table-striped\">
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
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asociados"] ?? $this->getContext($context, "asociados")));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente_asoc"]) {
            // line 147
            echo "                        <tr>
                            <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "fojas", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "codigo", []), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-info\" href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                <a class=\"btn btn-warning\" href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                    ";
            // line 155
            echo "

                                <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                <!-- The Modal -->
                                <div class=\"modal fade\" id=\"myModal\">
                                    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
                                        <div class=\"modal-content\">

                                            <!-- Modal Header -->
                                            <div class=\"modal-header-warning\">
                                                <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\">Eliminar Expediente Asociado</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <div class=\"modal-body\">
                                                ¿Está seguro de quitar la asociacion del expediente ";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
            echo "?
                                            </div>

                                            <!-- Modal footer -->
                                            <div class=\"modal-footer\">                                          
                                                <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
            // line 178
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
        // line 189
        echo "
                </tbody>
            </table>

        </div>

        ";
        // line 195
        if ((twig_length_filter($this->env, ($context["asociados"] ?? $this->getContext($context, "asociados"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 196
            echo "            <ul class=\"pagination\">
                ";
            // line 197
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
                ";
            } else {
                // line 199
                echo "                    ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 200
                echo "                ";
            }
            // line 201
            echo "

                <li ><a class=\"page-link\" href=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                    ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 205
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
            // line 207
            echo "
                ";
            // line 208
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 209
                echo "
                ";
            } else {
                // line 211
                echo "                    ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 212
                echo "                ";
            }
            // line 213
            echo "                <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

            </ul>
        ";
        }
        // line 216
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
        return array (  427 => 216,  419 => 213,  416 => 212,  413 => 211,  409 => 209,  407 => 208,  404 => 207,  393 => 205,  389 => 204,  385 => 203,  381 => 201,  378 => 200,  375 => 199,  370 => 197,  367 => 196,  365 => 195,  357 => 189,  340 => 178,  332 => 173,  312 => 155,  308 => 153,  304 => 152,  300 => 151,  296 => 150,  292 => 149,  288 => 148,  285 => 147,  281 => 146,  267 => 134,  257 => 130,  254 => 129,  250 => 128,  247 => 127,  237 => 123,  234 => 122,  230 => 121,  220 => 114,  213 => 110,  208 => 108,  195 => 98,  190 => 96,  186 => 95,  179 => 91,  174 => 89,  170 => 88,  161 => 82,  156 => 80,  149 => 76,  144 => 74,  137 => 70,  132 => 68,  125 => 64,  114 => 56,  113 => 55,  60 => 4,  51 => 3,  29 => 1,);
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

        label{
            margin-top:6px;
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

        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h2 class=\"mb-0\">
                        <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Expedientes Asociados
                        </button>
                        <a href=\"{{ path('listado_expediente',
                                 {'currentPage':1,'modo':'asociado','padre_id':expediente.id}) }}\" 
                                 role=\"button\" class=\"btn btn-info float-right\">Nuevo Expediente Asociado</a>
                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                            {{ form_errors(formExpedienteAsociadoFilter) }}
                            <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
                            <div class=\"row\">
                                <div class=\"threecol col-lg-1\">
                                    {{ form_widget(formExpedienteAsociadoFilter.codigoExpediente) }}
                                    <div class=\"help-block with-errors\">
                                        {{ form_errors(formExpedienteAsociadoFilter.codigoExpediente) }}
                                    </div>
                                </div>
                                <div class=\"threecol col-lg-2\">
                                    {{ form_widget(formExpedienteAsociadoFilter.numeroExpediente) }}
                                    <div class=\"help-block with-errors\">
                                        {{ form_errors(formExpedienteAsociadoFilter.numeroExpediente) }}
                                    </div>
                                </div>
                                <div class=\"threecol col-lg-1\">
                                    {{ form_widget(formExpedienteAsociadoFilter.digitoExpediente) }}
                                    <div class=\"help-block with-errors\">
                                        {{ form_errors(formExpedienteAsociadoFilter.digitoExpediente) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
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
                </div>
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
                                    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
                                        <div class=\"modal-content\">

                                            <!-- Modal Header -->
                                            <div class=\"modal-header-warning\">
                                                <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\">Eliminar Expediente Asociado</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <div class=\"modal-body\">
                                                ¿Está seguro de quitar la asociacion del expediente {{expediente_asoc.expedienteAsociado}}?
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
