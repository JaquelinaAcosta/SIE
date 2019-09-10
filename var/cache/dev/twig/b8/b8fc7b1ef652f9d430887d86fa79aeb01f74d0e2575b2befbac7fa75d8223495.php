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

/* Expediente/listadoMovimientos.html.twig */
class __TwigTemplate_ff3d3e67d030f91ec83aa080c56c7ece29ab5718d2e129f7098e853003f1a378 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/listadoMovimientos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/listadoMovimientos.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Expediente/listadoMovimientos.html.twig", 1);
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

        echo "   
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
                            <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Movimientos,  expediente ";
        // line 24
        echo twig_escape_filter($this->env, ($context["expediente"] ?? $this->getContext($context, "expediente")), "html", null, true);
        echo " ( Haga click aquí para expandir )
                        </button>

                        ";
        // line 27
        $context["accion_habilitada"] = false;
        // line 28
        echo "
                        ";
        // line 29
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "estado", []) != "ASOCIADO")) {
            // line 30
            echo "                            ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 31
                echo "                                ";
                $context["accion_habilitada"] = true;
                // line 32
                echo "                            ";
            } else {
                // line 33
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "responsables", []), "getValues", []));
                foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                    // line 34
                    echo "                                    ";
                    if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == $this->getAttribute($context["responsable"], "usuario", []))) {
                        // line 35
                        echo "                                        ";
                        $context["accion_habilitada"] = true;
                        // line 36
                        echo "                                    ";
                    }
                    // line 37
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                            ";
            }
            echo "  
                        ";
        }
        // line 40
        echo "                        ";
        if ((($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "estado", []) != "ASOCIADO") && (($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true))) {
            // line 41
            echo "
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("elegir_movimiento", ["id" => $this->getAttribute(            // line 43
($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                               role=\"button\" class=\"btn btn-info float-right\">Nuevo Movimiento</a>
                        ";
        }
        // line 46
        echo "
                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), 'errors');
        echo "
                            <div class=\"row\">
                                <div class=\"threecol col-lg-3\">
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "usuario", []), 'label', ["label" => "USUARIO"]);
        echo "
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "usuario", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "usuario", []), 'errors');
        echo "
                                    </div>
                                </div>  
                                <div class=\"threecol col-lg-3\">
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "tipoSalida", []), 'label', ["label" => "TIPO DE PASE"]);
        echo "
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "tipoSalida", []), 'widget');
        echo "
                                    <div class=\"help-block with-errors\">
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "tipoSalida", []), 'errors');
        echo "
                                    </div>
                                </div>  
                                <div class=\"help-block with-errors\">
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "fecha", []), 'errors');
        echo "
                                </div>
                                <div class=\"threecol col-lg-2\">            
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "fecha", []), "left_date", []), 'row', ["id" => "date1"]);
        echo " 
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "fecha", []), "left_date", []), 'widget');
        echo "

                                </div>   
                                <div class=\"threecol col-lg-2\">
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "fecha", []), "right_date", []), 'row', ["id" => "date2"]);
        echo " 
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "fecha", []), "right_date", []), 'widget');
        echo "

                                </div>       
                            </div>

                            <hr/>

                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "filter", []), 'widget');
        echo "
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "reset", []), 'widget');
        echo "
                                </div>
                            </div>
                            ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), 'form_end');
        echo "

                        </form>   
                    </div>
                </div>
            </div>

            <hr/>

            ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 102
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 103
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 109
            echo "                <div class=\"alert alert-danger\">
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
        if ((twig_length_filter($this->env, ($context["movimientos"] ?? $this->getContext($context, "movimientos"))) > 0)) {
            // line 116
            echo "            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: ";
            // line 118
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["movimientos"] ?? $this->getContext($context, "movimientos"))), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
            ";
        } else {
            // line 122
            echo "                <div class=\"alert alert-info\">
                    <i class=\"fas fa-search\"></i> Búsqueda con 0 resultados! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                </div>
                <hr/>
            ";
        }
        // line 127
        echo "
            <table class=\"table table-striped\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\"></th>
                        <th scope=\"col\">UBICACION</th>
                        <th scope=\"col\">DEPENDENCIA</th>
                        <th scope=\"col\">TIPO DE PASE</th>
                        <th scope=\"col\">FECHA</th>
                        <th scope=\"col\">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 140
        $context["count"] = (twig_length_filter($this->env, ($context["movimientos"] ?? $this->getContext($context, "movimientos"))) + 1);
        // line 141
        echo "                    ";
        $context["modalCount"] = 0;
        // line 142
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["movimientos"] ?? $this->getContext($context, "movimientos"))));
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 143
            echo "                        <tr>
                            ";
            // line 144
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) - 1);
            // line 145
            echo "                            ";
            if ((($context["count"] ?? $this->getContext($context, "count")) != twig_length_filter($this->env, ($context["movimientos"] ?? $this->getContext($context, "movimientos"))))) {
                // line 146
                echo "                                <td><i class=\"fas fa-arrow-up\"></i> ";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo " </td>
                            ";
            } else {
                // line 148
                echo "                                <td><i class=\"fas fa-arrows-alt-h\"></i> ";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo " </td>
                            ";
            }
            // line 150
            echo "                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "ubicacion", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movimiento"], "ubicacion", []), "dependencia", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "tipoSalida", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 153
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["movimiento"], "fecha", []), "d-m-Y"), "html", null, true);
            echo "</td>
                            ";
            // line 154
            if (((($this->getAttribute($context["movimiento"], "ubicacion", []) == $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", [])) && ($this->getAttribute($context["movimiento"], "ubicacion", []) != $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ultimaUbicacion", []))) && (($context["count"] ?? $this->getContext($context, "count")) == twig_length_filter($this->env, ($context["movimientos"] ?? $this->getContext($context, "movimientos")))))) {
                // line 155
                echo "                                <td><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_movimiento", ["id" => $this->getAttribute($context["movimiento"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                        ";
                // line 156
                if (((($context["count"] ?? $this->getContext($context, "count")) > 0) && (($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true))) {
                    // line 157
                    echo "                                        <a class=\"btn btn-warning\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_movimiento", ["id" => $this->getAttribute($context["movimiento"], "id", [])]), "html", null, true);
                    echo "\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>                                  
                                        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                    // line 158
                    echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                    echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                        <!-- The Modal -->
                                        <div class=\"modal fade\" id=\"myModal";
                    // line 162
                    echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                    echo "\">
                                            <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                                <div class=\"modal-content\">

                                                    <!-- Modal Header -->
                                                    <div class=\"modal-header-warning\">
                                                        <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        <h4 class=\"modal-title\">Eliminar Movimento</h4>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class=\"modal-body\">
                                                        ¿Desea Eliminar el Movimiento: ";
                    // line 174
                    echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "ubicacion", []), "html", null, true);
                    echo "?

                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                    // line 179
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_movimiento", ["id" => $this->getAttribute($context["movimiento"], "id", [])]), "html", null, true);
                    echo "\"  role=\"button\">SI</a></button>                          
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        ";
                    // line 186
                    $context["modalCount"] = (($context["modalCount"] ?? $this->getContext($context, "modalCount")) + 1);
                    // line 187
                    echo "
                                        ";
                    // line 189
                    echo "                                    ";
                }
                // line 190
                echo "                                ";
            } else {
                // line 191
                echo "                                <td><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_movimiento", ["id" => $this->getAttribute($context["movimiento"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a></td>
                                    ";
            }
            // line 193
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                  
                </tbody>
            </table>



            ";
        // line 201
        echo "            ";
        $context["limite"] = 6;
        // line 202
        echo "            ";
        $context["extremos"] = 2;
        // line 203
        echo "
            ";
        // line 204
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < ($context["limite"] ?? $this->getContext($context, "limite")))) {
            echo " 

                ";
            // line 206
            $context["minLeftRange"] = 1;
            // line 207
            echo "                ";
            $context["maxLeftRange"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 208
            echo "                ";
            $context["minRightRange"] = (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 209
            echo "                ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 210
            echo "
            ";
        } elseif ((        // line 211
($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 212
            echo "                ";
            $context["minLeftRange"] = 1;
            // line 213
            echo "                ";
            $context["maxLeftRange"] = 2;
            // line 214
            echo "
                ";
            // line 215
            $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 216
            echo "                ";
            $context["extremoDerecho"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 217
            echo "                ";
            $context["minRightRange"] = ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))) + 2);
            // line 218
            echo "
                ";
            // line 219
            if ((($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) >= (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) + ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
                // line 220
                echo "                    ";
                $context["minRightRange"] = ($context["thisPage"] ?? $this->getContext($context, "thisPage"));
                // line 221
                echo "                    ";
                $context["extremoDerecho"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
                // line 222
                echo "                    ";
                $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - (($context["extremos"] ?? $this->getContext($context, "extremos")) * 2));
                // line 223
                echo "                ";
            }
            // line 224
            echo "                ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 225
            echo "            ";
        }
        // line 226
        echo "

            <div class=\"pagination\">
                <li><a class=\"page-link\" href=\"";
        // line 229
        (((0 < (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true))) : (print ("")));
        echo "\">Anterior</a></li>

                ";
        // line 231
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - 1))) {
            // line 232
            echo "                    ";
            $context["maxLeftRange"] = (($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange")) - 1);
            // line 233
            echo "                ";
        } elseif (((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages"))) && (($context["thisPage"] ?? $this->getContext($context, "thisPage")) != ($context["minRightRange"] ?? $this->getContext($context, "minRightRange"))))) {
            // line 234
            echo "                    ";
            $context["maxLeftRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 235
            echo "                ";
        }
        // line 236
        echo "

                ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["minLeftRange"] ?? $this->getContext($context, "minLeftRange")), ($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 239
            echo "                    <li class=\"page-item ";
            echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
            echo "\">
                        <a class=\"page-link\"  href=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "
                ";
        // line 244
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 245
            echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                    ";
            // line 248
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 1))) {
                // line 249
                echo "                        ";
                $context["extremoDerecho"] = (($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) - 1);
                // line 250
                echo "                    ";
            }
            // line 251
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["extremoIzquierdo"] ?? $this->getContext($context, "extremoIzquierdo")), ($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                    
                        <li class=\"page-item ";
                // line 252
                echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
                echo "\">
                            <a class=\"page-link\"  href=\"";
                // line 253
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                        </li>                    
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "                ";
        }
        // line 257
        echo "
                ";
        // line 258
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 2))) {
            // line 259
            echo "                    ";
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) != (($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange")) - 3))) {
                // line 260
                echo "                        <li class=\"page-item disabled\">
                            <a class=\"page-link\"  href=\"#\">...</a>
                        </li>
                    ";
            }
            // line 264
            echo "                ";
        }
        // line 265
        echo "
                ";
        // line 266
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
            // line 267
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minRightRange"] ?? $this->getContext($context, "minRightRange")), ($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                        <li class=\"page-item\">
                            <a class=\"page-link\"  href=\"";
                // line 269
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "                ";
        }
        echo "            

                ";
        // line 274
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 275
            echo "
                ";
        } else {
            // line 277
            echo "                    ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 278
            echo "                ";
        }
        // line 279
        echo "                <li><a class=\"page-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
        echo "\">Siguiente</a></li>

                </ul>
            </div> 

            ";
        // line 306
        echo " 


        </div>
        <script>
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
        return "Expediente/listadoMovimientos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  682 => 306,  673 => 279,  670 => 278,  667 => 277,  663 => 275,  661 => 274,  655 => 272,  644 => 269,  636 => 267,  634 => 266,  631 => 265,  628 => 264,  622 => 260,  619 => 259,  617 => 258,  614 => 257,  611 => 256,  600 => 253,  596 => 252,  589 => 251,  586 => 250,  583 => 249,  581 => 248,  576 => 245,  574 => 244,  571 => 243,  560 => 240,  555 => 239,  551 => 238,  547 => 236,  544 => 235,  541 => 234,  538 => 233,  535 => 232,  533 => 231,  528 => 229,  523 => 226,  520 => 225,  517 => 224,  514 => 223,  511 => 222,  508 => 221,  505 => 220,  503 => 219,  500 => 218,  497 => 217,  494 => 216,  492 => 215,  489 => 214,  486 => 213,  483 => 212,  481 => 211,  478 => 210,  475 => 209,  472 => 208,  469 => 207,  467 => 206,  462 => 204,  459 => 203,  456 => 202,  453 => 201,  445 => 194,  438 => 193,  432 => 191,  429 => 190,  426 => 189,  423 => 187,  421 => 186,  411 => 179,  403 => 174,  388 => 162,  381 => 158,  376 => 157,  374 => 156,  369 => 155,  367 => 154,  363 => 153,  359 => 152,  355 => 151,  350 => 150,  344 => 148,  338 => 146,  335 => 145,  333 => 144,  330 => 143,  325 => 142,  322 => 141,  320 => 140,  305 => 127,  298 => 122,  291 => 118,  287 => 116,  285 => 115,  282 => 114,  272 => 110,  269 => 109,  265 => 108,  262 => 107,  252 => 103,  249 => 102,  245 => 101,  233 => 92,  227 => 89,  223 => 88,  211 => 79,  207 => 78,  200 => 74,  196 => 73,  190 => 70,  183 => 66,  178 => 64,  174 => 63,  167 => 59,  162 => 57,  158 => 56,  152 => 53,  143 => 46,  137 => 43,  136 => 42,  133 => 41,  130 => 40,  124 => 38,  118 => 37,  115 => 36,  112 => 35,  109 => 34,  104 => 33,  101 => 32,  98 => 31,  95 => 30,  93 => 29,  90 => 28,  88 => 27,  82 => 24,  51 => 3,  29 => 1,);
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
                            <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Movimientos,  expediente {{expediente}} ( Haga click aquí para expandir )
                        </button>

                        {% set accion_habilitada = false %}

                        {% if expediente.estado != 'ASOCIADO' %}
                            {% if app.user.role == 'ROLE_ADMIN' %}
                                {% set accion_habilitada = true %}
                            {%else%}
                                {% for responsable in expediente.ubicacionActual.responsables.getValues %}
                                    {% if app.user == responsable.usuario %}
                                        {% set accion_habilitada = true %}
                                    {% endif %}
                                {%endfor%}
                            {% endif %}  
                        {% endif %}
                        {% if expediente.estado != 'ASOCIADO' and accion_habilitada ==true %}

                            <a href=\"{{ path('elegir_movimiento',
                                 {'id':expediente.id}) }}\" 
                               role=\"button\" class=\"btn btn-info float-right\">Nuevo Movimiento</a>
                        {% endif %}

                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                            {{ form_errors(formMovimientoFilter) }}
                            <div class=\"row\">
                                <div class=\"threecol col-lg-3\">
                                    {{ form_label(formMovimientoFilter.usuario, 'USUARIO') }}
                                    {{ form_widget(formMovimientoFilter.usuario) }}
                                    <div class=\"help-block with-errors\">
                                        {{ form_errors(formMovimientoFilter.usuario) }}
                                    </div>
                                </div>  
                                <div class=\"threecol col-lg-3\">
                                    {{ form_label(formMovimientoFilter.tipoSalida, 'TIPO DE PASE') }}
                                    {{ form_widget(formMovimientoFilter.tipoSalida) }}
                                    <div class=\"help-block with-errors\">
                                        {{ form_errors(formMovimientoFilter.tipoSalida) }}
                                    </div>
                                </div>  
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formMovimientoFilter.fecha) }}
                                </div>
                                <div class=\"threecol col-lg-2\">            
                                    {{ form_row(formMovimientoFilter.fecha.left_date, { 'id': 'date1' })}} 
                                    {{ form_widget(formMovimientoFilter.fecha.left_date) }}

                                </div>   
                                <div class=\"threecol col-lg-2\">
                                    {{ form_row(formMovimientoFilter.fecha.right_date, { 'id': 'date2' })}} 
                                    {{ form_widget(formMovimientoFilter.fecha.right_date) }}

                                </div>       
                            </div>

                            <hr/>

                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    {{ form_widget(formMovimientoFilter.filter) }}
                                    {{ form_widget(formMovimientoFilter.reset) }}
                                </div>
                            </div>
                            {{ form_end(formMovimientoFilter) }}

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
            
            {% if movimientos|length >0 %}
            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: {{ movimientos|length }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
                        <th scope=\"col\"></th>
                        <th scope=\"col\">UBICACION</th>
                        <th scope=\"col\">DEPENDENCIA</th>
                        <th scope=\"col\">TIPO DE PASE</th>
                        <th scope=\"col\">FECHA</th>
                        <th scope=\"col\">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    {% set count = movimientos|length+1 %}
                    {% set modalCount = 0 %}
                    {% for movimiento in movimientos|reverse%}
                        <tr>
                            {% set count= count-1 %}
                            {% if count != movimientos|length %}
                                <td><i class=\"fas fa-arrow-up\"></i> {{count}} </td>
                            {% else %}
                                <td><i class=\"fas fa-arrows-alt-h\"></i> {{ count }} </td>
                            {% endif %}
                            <td>{{movimiento.ubicacion}}</td>
                            <td>{{movimiento.ubicacion.dependencia}}</td>
                            <td>{{movimiento.tipoSalida}}</td>
                            <td>{{movimiento.fecha|date('d-m-Y')}}</td>
                            {% if (movimiento.ubicacion == expediente.ubicacionActual) and (movimiento.ubicacion != expediente.ultimaUbicacion) and (count == movimientos|length) %}
                                <td><a class=\"btn btn-info\" href=\"{{ path('ver_movimiento',{'id':movimiento.id}) }}\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                        {% if count >0 and (accion_habilitada == true)%}
                                        <a class=\"btn btn-warning\" href=\"{{ path('editar_movimiento',{'id':movimiento.id}) }}\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>                                  
                                        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal{{ count }}\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                        <!-- The Modal -->
                                        <div class=\"modal fade\" id=\"myModal{{count}}\">
                                            <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                                <div class=\"modal-content\">

                                                    <!-- Modal Header -->
                                                    <div class=\"modal-header-warning\">
                                                        <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        <h4 class=\"modal-title\">Eliminar Movimento</h4>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class=\"modal-body\">
                                                        ¿Desea Eliminar el Movimiento: {{ movimiento.ubicacion }}?

                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"{{ path(\"eliminar_movimiento\", {'id':movimiento.id})  }}\"  role=\"button\">SI</a></button>                          
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {% set modalCount=modalCount+1 %}

                                        {#                                        <a class=\"btn btn-danger\" href=\"{{path('eliminar_movimiento',{'id':movimiento.id})}}\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>#}
                                    {% endif %}
                                {% else %}
                                <td><a class=\"btn btn-info\" href=\"{{ path('ver_movimiento',{'id':movimiento.id}) }}\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a></td>
                                    {% endif %}
                        </tr>
                    {% endfor %}                  
                </tbody>
            </table>



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
                <li><a class=\"page-link\" href=\"{{ 0 < thisPage-1 ? path('listado_movimiento', {'id':expediente.id,\"currentPage\": thisPage}) }}\">Anterior</a></li>

                {%if thisPage == maxPages-1%}
                    {%set maxLeftRange = maxLeftRange-1%}
                {%elseif thisPage == maxPages and thisPage != minRightRange%}
                    {%set maxLeftRange = maxPages%}
                {%endif%}


                {% for i in minLeftRange..maxLeftRange %}
                    <li class=\"page-item {{  i == thisPage ? 'active' : '' }}\">
                        <a class=\"page-link\"  href=\"{{ path('listado_movimiento', {'id':expediente.id,\"currentPage\": thisPage}) }}\">{{ i }}</a>
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
                            <a class=\"page-link\"  href=\"{{ path('listado_movimiento', {'id':expediente.id,\"currentPage\": thisPage}) }}\">{{ i }}</a>
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
                            <a class=\"page-link\"  href=\"{{ path('listado_movimiento', {'id':expediente.id,\"currentPage\": thisPage}) }}\">{{ i }}</a>
                        </li>
                    {% endfor %}
                {%endif%}            

                {%if (page==maxPages)%}

                {%else%}
                    {%set page= page+1%}
                {%endif%}
                <li><a class=\"page-link\" href=\"{{path('listado_movimiento', {'id':expediente.id,\"currentPage\": thisPage}) }}\">Siguiente</a></li>

                </ul>
            </div> 

            {#       {% if movimientos|length < totalItems %}        
                       <ul class=\"pagination\">
                           {%if (thisPage==1)%}           
                           {%else%}
                               {%set thisPage= thisPage-1%}
                           {%endif%}
       
       
                           <li ><a class=\"page-link\" href=\"{{ path('listado_movimiento', {'id':expediente.id,\"currentPage\": thisPage}) }}\">&laquo</a></li>
                               {% for i in 1..maxPages %}
                               <li><a class=\"page-link\"  href=\"{{ path('listado_movimiento', {'id':expediente.id,\"currentPage\": i}) }}\">{{ i }}</a></li>
                               {% endfor %}
       
                           {%if (page==maxPages)%}
                           {%else%}
                               {%set page= page+1%}
                           {%endif%}
                           <li><a class=\"page-link\" href=\"{{ path('listado_movimiento', {'id':expediente.id,\"currentPage\": page}) }}\">&raquo</a></li>
       
                       </ul>
       
                   </div> 
               {%endif%}#} 


        </div>
        <script>
            \$(function () {
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        </script>
        <hr/>
    {% endblock %}", "Expediente/listadoMovimientos.html.twig", "/var/www/html/SIE/app/Resources/views/Expediente/listadoMovimientos.html.twig");
    }
}
