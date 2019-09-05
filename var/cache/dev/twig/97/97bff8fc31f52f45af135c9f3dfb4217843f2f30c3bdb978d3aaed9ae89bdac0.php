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
        
        .pagination a {
            float: left;
            padding: 0 14px;
            line-height: 34px;
            color: #060325;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 0;
        }

        .pagination a:hover,
        .pagination .active a {
            background-color: #060325;
            color: #ffffff;
        }

        .pagination li:first-child a {
            border-left-width: 1px;
            -webkit-border-radius: 3px 0 0 3px;
            -moz-border-radius: 3px 0 0 3px;
            border-radius: 3px 0 0 3px;
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
        // line 79
        $context["accion_habilitada"] = false;
        // line 80
        echo "                        ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 81
            echo "                            ";
            $context["accion_habilitada"] = true;
            // line 82
            echo "                        ";
        } else {
            // line 83
            echo "
                            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "responsables", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 85
                echo "                                ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == $this->getAttribute($context["responsable"], "usuario", []))) {
                    // line 86
                    echo "                                    ";
                    $context["accion_habilitada"] = true;
                    // line 87
                    echo "                                ";
                }
                // line 88
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                        ";
        }
        echo "  

                        ";
        // line 91
        if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
            // line 92
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => 1, "modo" => "asociado", "padre_id" => $this->getAttribute(            // line 93
($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                               role=\"button\" class=\"btn btn-info float-right\">Nuevo Expediente Asociado</a>
                        ";
        }
        // line 96
        echo "
                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'errors');
        echo "
                            <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
                            <div class=\"row\">
                                <div class=\"threecol col-lg-1\">
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "codigoExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "codigoExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"threecol col-lg-2\">
                                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "numeroExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "numeroExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"threecol col-lg-1\">
                                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "digitoExpediente", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "digitoExpediente", []), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"threecol col-lg-4\">
                                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCION"]);
        echo "
                                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "descripcion", []), 'errors');
        echo "
                                    </div>
                                </div> 
                                <div class=\"threecol col-lg-4\">
                                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'label', ["label" => "CODIGO DE TEMA"]);
        echo "
                                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "tema", []), 'errors');
        echo "
                                    </div>
                                </div> 


                            </div>

                            <hr/>
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "filter", []), 'widget');
        echo "

                                    ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), "reset", []), 'widget');
        echo "
                                </div>
                            </div>

                            ";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteAsociadoFilter"] ?? $this->getContext($context, "formExpedienteAsociadoFilter")), 'form_end');
        echo "

                        </form>              
                    </div>
                </div>
            </div>
            <hr/>
            ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 161
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 162
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "
            ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 168
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 169
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
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
        // line 185
        $context["count"] = 0;
        // line 186
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asociados"] ?? $this->getContext($context, "asociados")));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente_asoc"]) {
            // line 187
            echo "                        <tr>
                            <td>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "fojas", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "tema", []), "codigo", []), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-info\" href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
            echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>

                                ";
            // line 194
            if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
                // line 195
                echo "                                    <a class=\"btn btn-warning\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
                echo "\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                        ";
                // line 197
                echo "

                                    <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                // line 199
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"myModal";
                // line 203
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
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "html", null, true);
                echo "?
                                                </div>

                                                <!-- Modal footer -->
                                                <div class=\"modal-footer\">                                          
                                                    <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remover_expediente_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "id_asoc" => $this->getAttribute($this->getAttribute($context["expediente_asoc"], "expedienteAsociado", []), "id", [])]), "html", null, true);
                echo "\"  role=\"button\">Si</a></button>                                   
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 227
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 228
                echo "                                ";
            }
            // line 229
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente_asoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "
                </tbody>
            </table>

        </div>
                    
                    
                   
     ";
        // line 241
        echo "        ";
        $context["limite"] = 6;
        // line 242
        echo "        ";
        $context["extremos"] = 2;
        // line 243
        echo "
        ";
        // line 244
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < ($context["limite"] ?? $this->getContext($context, "limite")))) {
            echo " 

            ";
            // line 246
            $context["minLeftRange"] = 1;
            // line 247
            echo "            ";
            $context["maxLeftRange"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 248
            echo "            ";
            $context["minRightRange"] = (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 249
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 250
            echo "
        ";
        } elseif ((        // line 251
($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 252
            echo "            ";
            $context["minLeftRange"] = 1;
            // line 253
            echo "            ";
            $context["maxLeftRange"] = 2;
            // line 254
            echo "
            ";
            // line 255
            $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 256
            echo "            ";
            $context["extremoDerecho"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 257
            echo "            ";
            $context["minRightRange"] = ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))) + 2);
            // line 258
            echo "
            ";
            // line 259
            if ((($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) >= (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) + ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
                // line 260
                echo "                ";
                $context["minRightRange"] = ($context["thisPage"] ?? $this->getContext($context, "thisPage"));
                // line 261
                echo "                ";
                $context["extremoDerecho"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
                // line 262
                echo "                ";
                $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - (($context["extremos"] ?? $this->getContext($context, "extremos")) * 2));
                // line 263
                echo "            ";
            }
            // line 264
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 265
            echo "        ";
        }
        // line 266
        echo "

        <div class=\"pagination\">
            <li><a class=\"page-link\" href=\"";
        // line 269
        (((0 < (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "currentPage" => (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1)]), "html", null, true))) : (print ("")));
        echo "\">Anterior</a></li>

            ";
        // line 271
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - 1))) {
            // line 272
            echo "                ";
            $context["maxLeftRange"] = (($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange")) - 1);
            // line 273
            echo "            ";
        } elseif (((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages"))) && (($context["thisPage"] ?? $this->getContext($context, "thisPage")) != ($context["minRightRange"] ?? $this->getContext($context, "minRightRange"))))) {
            // line 274
            echo "                ";
            $context["maxLeftRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 275
            echo "            ";
        }
        // line 276
        echo "            
            
            ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["minLeftRange"] ?? $this->getContext($context, "minLeftRange")), ($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 279
            echo "                <li class=\"page-item ";
            echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
            echo "\">
                    <a class=\"page-link\"  href=\"";
            // line 280
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
        // line 283
        echo "
            ";
        // line 284
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 285
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                ";
            // line 288
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 1))) {
                // line 289
                echo "                    ";
                $context["extremoDerecho"] = (($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) - 1);
                // line 290
                echo "                ";
            }
            // line 291
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["extremoIzquierdo"] ?? $this->getContext($context, "extremoIzquierdo")), ($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                    
                    <li class=\"page-item ";
                // line 292
                echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
                echo "\">
                        <a class=\"page-link\"  href=\"";
                // line 293
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
            // line 296
            echo "            ";
        }
        // line 297
        echo "
            ";
        // line 298
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 2))) {
            // line 299
            echo "                ";
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) != (($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange")) - 3))) {
                // line 300
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                ";
            }
            // line 304
            echo "            ";
        }
        // line 305
        echo "
            ";
        // line 306
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
            // line 307
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minRightRange"] ?? $this->getContext($context, "minRightRange")), ($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"";
                // line 309
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
            // line 312
            echo "            ";
        }
        echo "            

            ";
        // line 314
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 315
            echo "
            ";
        } else {
            // line 317
            echo "                ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 318
            echo "            ";
        }
        // line 319
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
        return array (  676 => 319,  673 => 318,  670 => 317,  666 => 315,  664 => 314,  658 => 312,  647 => 309,  639 => 307,  637 => 306,  634 => 305,  631 => 304,  625 => 300,  622 => 299,  620 => 298,  617 => 297,  614 => 296,  603 => 293,  599 => 292,  592 => 291,  589 => 290,  586 => 289,  584 => 288,  579 => 285,  577 => 284,  574 => 283,  563 => 280,  558 => 279,  554 => 278,  550 => 276,  547 => 275,  544 => 274,  541 => 273,  538 => 272,  536 => 271,  531 => 269,  526 => 266,  523 => 265,  520 => 264,  517 => 263,  514 => 262,  511 => 261,  508 => 260,  506 => 259,  503 => 258,  500 => 257,  497 => 256,  495 => 255,  492 => 254,  489 => 253,  486 => 252,  484 => 251,  481 => 250,  478 => 249,  475 => 248,  472 => 247,  470 => 246,  465 => 244,  462 => 243,  459 => 242,  456 => 241,  446 => 232,  438 => 229,  435 => 228,  433 => 227,  423 => 220,  415 => 215,  400 => 203,  393 => 199,  389 => 197,  384 => 195,  382 => 194,  377 => 192,  373 => 191,  369 => 190,  365 => 189,  361 => 188,  358 => 187,  353 => 186,  351 => 185,  337 => 173,  327 => 169,  324 => 168,  320 => 167,  317 => 166,  307 => 162,  304 => 161,  300 => 160,  290 => 153,  283 => 149,  278 => 147,  265 => 137,  260 => 135,  256 => 134,  249 => 130,  244 => 128,  240 => 127,  231 => 121,  226 => 119,  219 => 115,  214 => 113,  207 => 109,  202 => 107,  195 => 103,  186 => 96,  180 => 93,  178 => 92,  176 => 91,  170 => 89,  164 => 88,  161 => 87,  158 => 86,  155 => 85,  151 => 84,  148 => 83,  145 => 82,  142 => 81,  139 => 80,  137 => 79,  60 => 4,  51 => 3,  29 => 1,);
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
        
        .pagination a {
            float: left;
            padding: 0 14px;
            line-height: 34px;
            color: #060325;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 0;
        }

        .pagination a:hover,
        .pagination .active a {
            background-color: #060325;
            color: #ffffff;
        }

        .pagination li:first-child a {
            border-left-width: 1px;
            -webkit-border-radius: 3px 0 0 3px;
            -moz-border-radius: 3px 0 0 3px;
            border-radius: 3px 0 0 3px;
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
