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

/* Expediente/listadoExpedienteAsociado.html.twig */
class __TwigTemplate_5a4e29e9d56502f7921f11b95e41d931ba521670d7d00bb60b849a91b27f4075 extends \Twig\Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/listadoExpedienteAsociado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/listadoExpedienteAsociado.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Expediente/listadoExpedienteAsociado.html.twig", 1);
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
        echo "      <style>
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
                           <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Expedientes Asociados,  expediente ";
        // line 24
        echo twig_escape_filter($this->env, ($context["expediente"] ?? $this->getContext($context, "expediente")), "html", null, true);
        echo "( Haga click aquí para expandir )
                        </button>

                        ";
        // line 27
        $context["accion_habilitada"] = false;
        // line 28
        echo "                        ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 29
            echo "                            ";
            $context["accion_habilitada"] = true;
            // line 30
            echo "                        ";
        } else {
            // line 31
            echo "
                            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "responsables", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 33
                echo "                                ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == $this->getAttribute($context["responsable"], "usuario", []))) {
                    // line 34
                    echo "                                    ";
                    $context["accion_habilitada"] = true;
                    // line 35
                    echo "                                ";
                }
                // line 36
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                        ";
        }
        echo "  

                        ";
        // line 39
        if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
            // line 40
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => 1, "modo" => "asociado", "padre_id" => $this->getAttribute(            // line 41
($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                               role=\"button\" class=\"btn btn-info float-right\">Nuevo Expediente Asociado</a>
                        ";
        }
        // line 44
        echo "
                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'errors');
        echo "
                            <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
                            <div class=\"row\">
                                <div class=\"threecol col-lg-1\">
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "codigoExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "codigoExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"threecol col-lg-2\">
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "numeroExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "numeroExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"threecol col-lg-1\">
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "digitoExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "digitoExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"threecol col-lg-4\">
                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCION"]);
        echo "
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'errors');
        echo "
                                    </div>
                                </div> 
                                <div class=\"threecol col-lg-4\">
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'label', ["label" => "CODIGO DE TEMA"]);
        echo "
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'errors');
        echo "
                                    </div>
                                </div> 


                            </div>

                            <hr/>
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "filter", []), 'widget');
        echo "

                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "reset", []), 'widget');
        echo "
                                </div>
                            </div>

                            ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'form_end');
        echo "

                        </form>              
                    </div>
                </div>
            </div>
            <hr/>
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 109
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 110
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "
            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 116
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 117
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "            
            ";
        // line 122
        if ((twig_length_filter($this->env, ($context["asociados"] ?? $this->getContext($context, "asociados"))) > 0)) {
            // line 123
            echo "            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: ";
            // line 125
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["asociados"] ?? $this->getContext($context, "asociados"))), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
            ";
        } else {
            // line 129
            echo "                <div class=\"alert alert-info\">
                    <i class=\"fas fa-search\"></i> Búsqueda con 0 resultados! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                </div>
                <hr/>
            ";
        }
        // line 134
        echo "        
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
                    ";
        // line 147
        $context["count"] = 0;
        // line 148
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asociados"] ?? $this->getContext($context, "asociados")));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente_asoc"]) {
            // line 149
            echo "                        <tr>
                            <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "fojas", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "codigo", []), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-info\" href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>

                                ";
            // line 156
            if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
                // line 157
                echo "                                    <a class=\"btn btn-warning\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
                echo "\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                        ";
                // line 159
                echo "

                                    <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                // line 161
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"myModal";
                // line 165
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">
                                        <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                            <div class=\"modal-content\">

                                                <!-- Modal Header -->
                                                <div class=\"modal-header-warning\">
                                                    <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\">Eliminar Expediente Asociado</h4>
                                                </div>

                                                <!-- Modal body -->
                                                <div class=\"modal-body\">
                                                    ¿Está seguro de quitar la asociacion del expediente ";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
                echo "?
                                                </div>

                                                <!-- Modal footer -->
                                                <div class=\"modal-footer\">                                          
                                                    <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remover_expediente_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "id_asoc" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
                echo "\"  role=\"button\">Si</a></button>                                   
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 189
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 190
                echo "                                ";
            }
            // line 191
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente_asoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                  
                </tbody>
            </table>

        </div>



        ";
        // line 202
        echo "        ";
        $context["limite"] = 6;
        // line 203
        echo "        ";
        $context["extremos"] = 2;
        // line 204
        echo "
        ";
        // line 205
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < ($context["limite"] ?? $this->getContext($context, "limite")))) {
            echo " 

            ";
            // line 207
            $context["minLeftRange"] = 1;
            // line 208
            echo "            ";
            $context["maxLeftRange"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 209
            echo "            ";
            $context["minRightRange"] = (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 210
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 211
            echo "
        ";
        } elseif ((        // line 212
($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 213
            echo "            ";
            $context["minLeftRange"] = 1;
            // line 214
            echo "            ";
            $context["maxLeftRange"] = 2;
            // line 215
            echo "
            ";
            // line 216
            $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 217
            echo "            ";
            $context["extremoDerecho"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 218
            echo "            ";
            $context["minRightRange"] = ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))) + 2);
            // line 219
            echo "
            ";
            // line 220
            if ((($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) >= (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) + ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
                // line 221
                echo "                ";
                $context["minRightRange"] = ($context["thisPage"] ?? $this->getContext($context, "thisPage"));
                // line 222
                echo "                ";
                $context["extremoDerecho"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
                // line 223
                echo "                ";
                $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - (($context["extremos"] ?? $this->getContext($context, "extremos")) * 2));
                // line 224
                echo "            ";
            }
            // line 225
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 226
            echo "        ";
        }
        // line 227
        echo "

        <div class=\"pagination\">
            <li><a class=\"page-link\" href=\"";
        // line 230
        (((0 < (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "currentPage" => (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1)]), "html", null, true))) : (print ("")));
        echo "\">Anterior</a></li>

            ";
        // line 232
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - 1))) {
            // line 233
            echo "                ";
            $context["maxLeftRange"] = (($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange")) - 1);
            // line 234
            echo "            ";
        } elseif (((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages"))) && (($context["thisPage"] ?? $this->getContext($context, "thisPage")) != ($context["minRightRange"] ?? $this->getContext($context, "minRightRange"))))) {
            // line 235
            echo "                ";
            $context["maxLeftRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 236
            echo "            ";
        }
        // line 237
        echo "

            ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["minLeftRange"] ?? $this->getContext($context, "minLeftRange")), ($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 240
            echo "                <li class=\"page-item ";
            echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
            echo "\">
                    <a class=\"page-link\"  href=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "currentPage" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "
            ";
        // line 245
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 246
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                ";
            // line 249
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 1))) {
                // line 250
                echo "                    ";
                $context["extremoDerecho"] = (($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) - 1);
                // line 251
                echo "                ";
            }
            // line 252
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["extremoIzquierdo"] ?? $this->getContext($context, "extremoIzquierdo")), ($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                    
                    <li class=\"page-item ";
                // line 253
                echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
                echo "\">
                        <a class=\"page-link\"  href=\"";
                // line 254
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "            ";
        }
        // line 258
        echo "
            ";
        // line 259
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 2))) {
            // line 260
            echo "                ";
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) != (($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange")) - 3))) {
                // line 261
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                ";
            }
            // line 265
            echo "            ";
        }
        // line 266
        echo "
            ";
        // line 267
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
            // line 268
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minRightRange"] ?? $this->getContext($context, "minRightRange")), ($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"";
                // line 270
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "            ";
        }
        echo "            

            ";
        // line 275
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 276
            echo "
            ";
        } else {
            // line 278
            echo "                ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 279
            echo "            ";
        }
        // line 280
        echo "            <li><a class=\"page-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
        echo "\">Siguiente</a></li>

            </ul>
        </div>  


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
        return "Expediente/listadoExpedienteAsociado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  651 => 280,  648 => 279,  645 => 278,  641 => 276,  639 => 275,  633 => 273,  622 => 270,  614 => 268,  612 => 267,  609 => 266,  606 => 265,  600 => 261,  597 => 260,  595 => 259,  592 => 258,  589 => 257,  578 => 254,  574 => 253,  567 => 252,  564 => 251,  561 => 250,  559 => 249,  554 => 246,  552 => 245,  549 => 244,  538 => 241,  533 => 240,  529 => 239,  525 => 237,  522 => 236,  519 => 235,  516 => 234,  513 => 233,  511 => 232,  506 => 230,  501 => 227,  498 => 226,  495 => 225,  492 => 224,  489 => 223,  486 => 222,  483 => 221,  481 => 220,  478 => 219,  475 => 218,  472 => 217,  470 => 216,  467 => 215,  464 => 214,  461 => 213,  459 => 212,  456 => 211,  453 => 210,  450 => 209,  447 => 208,  445 => 207,  440 => 205,  437 => 204,  434 => 203,  431 => 202,  421 => 193,  413 => 191,  410 => 190,  408 => 189,  398 => 182,  390 => 177,  375 => 165,  368 => 161,  364 => 159,  359 => 157,  357 => 156,  352 => 154,  348 => 153,  344 => 152,  340 => 151,  336 => 150,  333 => 149,  328 => 148,  326 => 147,  311 => 134,  304 => 129,  297 => 125,  293 => 123,  291 => 122,  288 => 121,  278 => 117,  275 => 116,  271 => 115,  268 => 114,  258 => 110,  255 => 109,  251 => 108,  241 => 101,  234 => 97,  229 => 95,  216 => 85,  211 => 83,  207 => 82,  200 => 78,  195 => 76,  191 => 75,  182 => 69,  177 => 67,  170 => 63,  165 => 61,  158 => 57,  153 => 55,  146 => 51,  137 => 44,  131 => 41,  129 => 40,  127 => 39,  121 => 37,  115 => 36,  112 => 35,  109 => 34,  106 => 33,  102 => 32,  99 => 31,  96 => 30,  93 => 29,  90 => 28,  88 => 27,  82 => 24,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block contentmain %}
      <style>
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
                           <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Expedientes Asociados,  expediente {{expediente}}( Haga click aquí para expandir )
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

                <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
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
            
            {% if asociados|length >0 %}
            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: {{ asociados|length }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
            {% else %}
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-search\"></i> Búsqueda con 0 resultados! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                </div>
                <hr/>
            {%endif%}
        
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
                                        <div class=\"modal-dialog modal-sm modal-dialog-centered\">
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



        {#         -----Paginación-----              #}
        {% set limite = 6 %}
        {% set extremos = 2 %}

        {% if thisPage < limite %} 

            {%set minLeftRange = 1%}
            {%set maxLeftRange = thisPage+extremos%}
            {%set minRightRange = maxPages-extremos%}
            {%set maxRightRange = maxPages %}

        {% elseif thisPage >= limite%}
            {%set minLeftRange = 1 %}
            {%set maxLeftRange = 2 %}

            {%set extremoIzquierdo = thisPage-extremos%}
            {%set extremoDerecho = thisPage+extremos%}
            {%set minRightRange = maxPages-extremos+2 %}

            {% if extremoDerecho >= minRightRange+extremos%}
                {%set minRightRange = thisPage %}
                {%set extremoDerecho = maxPages%}
                {%set extremoIzquierdo = thisPage-((extremos*2))%}
            {%endif%}
            {%set maxRightRange = maxPages %}
        {%endif%}


        <div class=\"pagination\">
            <li><a class=\"page-link\" href=\"{{ 0 < thisPage-1 ? path('listado_asociado', {\"id\":padre_id, \"currentPage\": thisPage-1}) }}\">Anterior</a></li>

            {%if thisPage == maxPages-1%}
                {%set maxLeftRange = maxLeftRange-1%}
            {%elseif thisPage == maxPages and thisPage != minRightRange%}
                {%set maxLeftRange = maxPages%}
            {%endif%}


            {% for i in minLeftRange..maxLeftRange %}
                <li class=\"page-item {{  i == thisPage ? 'active' : '' }}\">
                    <a class=\"page-link\"  href=\"{{ path('listado_asociado', {\"id\": padre_id, \"currentPage\": i}) }}\">{{ i }}</a>
                </li>
            {% endfor %}

            {% if thisPage >= limite %}
                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                {% if thisPage == minRightRange-1%}
                    {%set extremoDerecho = extremoDerecho-1%}
                {%endif%}
                {% for i in extremoIzquierdo..extremoDerecho %}                    
                    <li class=\"page-item {{  i == thisPage ? 'active' : '' }}\">
                        <a class=\"page-link\"  href=\"{{ path('listado_asociado', {\"id\":padre_id, \"currentPage\": i}) }}\">{{ i }}</a>
                    </li>                    
                {% endfor %}
            {%endif%}

            {% if thisPage < minRightRange-2%}
                {%if thisPage!= maxRightRange-3%}
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                {%endif%}
            {% endif%}

            {% if thisPage < maxPages-extremos%}
                {% for i in minRightRange..maxRightRange %}                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"{{ path('listado_asociado', {\"id\":padre_id, \"currentPage\": i}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
            {%endif%}            

            {%if (page==maxPages)%}

            {%else%}
                {%set page= page+1%}
            {%endif%}
            <li><a class=\"page-link\" href=\"{{ path('listado_asociado', {\"id\":padre_id, \"currentPage\": page}) }}\">Siguiente</a></li>

            </ul>
        </div>  


        <script>
            \$(function () {
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        </script>

    {% endblock %}", "Expediente/listadoExpedienteAsociado.html.twig", "/var/www/html/SIE/app/Resources/views/Expediente/listadoExpedienteAsociado.html.twig");
    }
}
