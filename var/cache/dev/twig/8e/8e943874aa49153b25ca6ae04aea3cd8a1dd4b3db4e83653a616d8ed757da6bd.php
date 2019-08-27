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

                        ";
        // line 56
        $context["accion_habilitada"] = false;
        // line 57
        echo "                        ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 58
            echo "                            ";
            $context["accion_habilitada"] = true;
            // line 59
            echo "                        ";
        } else {
            // line 60
            echo "
                            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "responsables", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 62
                echo "                                ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == $this->getAttribute($context["responsable"], "usuario", []))) {
                    // line 63
                    echo "                                    ";
                    $context["accion_habilitada"] = true;
                    // line 64
                    echo "                                ";
                }
                // line 65
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                        ";
        }
        echo "  

                        ";
        // line 68
        if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
            // line 69
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => 1, "modo" => "asociado", "padre_id" => $this->getAttribute(            // line 70
($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                               role=\"button\" class=\"btn btn-info float-right\">Nuevo Expediente Asociado</a>
                        ";
        }
        // line 73
        echo "
                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'errors');
        echo "
                            <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
                            <div class=\"row\">
                                <div class=\"threecol col-lg-1\">
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "codigoExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "codigoExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"threecol col-lg-2\">
                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "numeroExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "numeroExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"threecol col-lg-1\">
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "digitoExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "digitoExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"threecol col-lg-4\">
                                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCION"]);
        echo "
                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'errors');
        echo "
                                    </div>
                                </div> 
                                <div class=\"threecol col-lg-4\">
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'label', ["label" => "CODIGO DE TEMA"]);
        echo "
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'errors');
        echo "
                                    </div>
                                </div> 


                            </div>

                            <hr/>
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "filter", []), 'widget');
        echo "

                                    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "reset", []), 'widget');
        echo "
                                </div>
                            </div>

                            ";
        // line 130
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'form_end');
        echo "

                        </form>              
                    </div>
                </div>
            </div>
            <hr/>
            ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 138
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 139
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "
            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 145
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 146
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
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
        // line 161
        $context["count"] = 0;
        // line 162
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asociados"] ?? $this->getContext($context, "asociados")));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente_asoc"]) {
            // line 163
            echo "                        <tr>
                            <td>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "fojas", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "codigo", []), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-info\" href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>

                                ";
            // line 170
            if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
                // line 171
                echo "                                    <a class=\"btn btn-warning\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
                echo "\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                        ";
                // line 173
                echo "

                                    <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                // line 175
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"myModal";
                // line 179
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">
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
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
                echo "?
                                                </div>

                                                <!-- Modal footer -->
                                                <div class=\"modal-footer\">                                          
                                                    <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                // line 196
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remover_expediente_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "id_asoc" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
                echo "\"  role=\"button\">Si</a></button>                                   
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 203
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 204
                echo "                                ";
            }
            // line 205
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente_asoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "
                </tbody>
            </table>

        </div>

        ";
        // line 214
        if ((twig_length_filter($this->env, ($context["asociados"] ?? $this->getContext($context, "asociados"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 215
            echo "            <ul class=\"pagination\">
                ";
            // line 216
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
                ";
            } else {
                // line 218
                echo "                    ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 219
                echo "                ";
            }
            // line 220
            echo "

                <li ><a class=\"page-link\" href=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                    ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 224
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
            // line 226
            echo "
                ";
            // line 227
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 228
                echo "
                ";
            } else {
                // line 230
                echo "                    ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 231
                echo "                ";
            }
            // line 232
            echo "                <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

            </ul>
        ";
        }
        // line 235
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
        return array (  492 => 235,  484 => 232,  481 => 231,  478 => 230,  474 => 228,  472 => 227,  469 => 226,  458 => 224,  454 => 223,  450 => 222,  446 => 220,  443 => 219,  440 => 218,  435 => 216,  432 => 215,  430 => 214,  422 => 208,  414 => 205,  411 => 204,  409 => 203,  399 => 196,  391 => 191,  376 => 179,  369 => 175,  365 => 173,  360 => 171,  358 => 170,  353 => 168,  349 => 167,  345 => 166,  341 => 165,  337 => 164,  334 => 163,  329 => 162,  327 => 161,  314 => 150,  304 => 146,  301 => 145,  297 => 144,  294 => 143,  284 => 139,  281 => 138,  277 => 137,  267 => 130,  260 => 126,  255 => 124,  242 => 114,  237 => 112,  233 => 111,  226 => 107,  221 => 105,  217 => 104,  208 => 98,  203 => 96,  196 => 92,  191 => 90,  184 => 86,  179 => 84,  172 => 80,  163 => 73,  157 => 70,  155 => 69,  153 => 68,  147 => 66,  141 => 65,  138 => 64,  135 => 63,  132 => 62,  128 => 61,  125 => 60,  122 => 59,  119 => 58,  116 => 57,  114 => 56,  60 => 4,  51 => 3,  29 => 1,);
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

                        {% if accion_habilitada == true  %}
                            <a href=\"{{ path('listado_expediente',
                                 {'currentPage':1,'modo':'asociado','padre_id':expediente.id}) }}\" 
                               role=\"button\" class=\"btn btn-info float-right\">Nuevo Expediente Asociado</a>
                        {% endif %}

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
                    {% set count = 0 %}
                    {% for expediente_asoc in asociados %}
                        <tr>
                            <td>{{expediente_asoc.expedienteAsociado}}</td>
                            <td>{{expediente_asoc.expedienteAsociado.tema.descripcion}}</td>
                            <td>{{expediente_asoc.expedienteAsociado.fojas}}</td>
                            <td>{{expediente_asoc.expedienteAsociado.tema.codigo}}</td>
                            <td><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente_asoc.expedienteAsociado.id}) }}\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>

                                {% if accion_habilitada == true  %}
                                    <a class=\"btn btn-warning\" href=\"{{ path(\"editar_expediente\", {'id':expediente_asoc.expedienteAsociado.id}) }}\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                        {#                            <a class=\"btn btn-danger\" href=\"{{ path(\"remover_expediente_asociado\", {'id':padre_id, 'id_asoc':expediente_asoc.expedienteAsociado.id}) }}\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a>#}


                                    <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal{{ count }}\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"myModal{{count}}\">
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
                                    {% set count=count+1 %}
                                {%endif%}
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
