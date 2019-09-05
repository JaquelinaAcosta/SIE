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

/* Expediente/listadoCaratulas.html.twig */
class __TwigTemplate_e356325e20a7d2e371e95930f0e17168195d4b0aa6fc52da4e18070146b0aa35 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/listadoCaratulas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/listadoCaratulas.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Expediente/listadoCaratulas.html.twig", 1);
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
        
        .title{
            font-size:16px;
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
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingOne\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Carátulas
                    </button>

                    ";
        // line 64
        $context["accion_habilitada"] = false;
        // line 65
        echo "                    ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 66
            echo "                        ";
            $context["accion_habilitada"] = true;
            // line 67
            echo "                    ";
        } else {
            // line 68
            echo "
                        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "responsables", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 70
                echo "                            ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == $this->getAttribute($context["responsable"], "usuario", []))) {
                    // line 71
                    echo "                                ";
                    $context["accion_habilitada"] = true;
                    // line 72
                    echo "                            ";
                }
                // line 73
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                    ";
        }
        echo "  
                    ";
        // line 75
        if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
            // line 76
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                           role=\"button\" class=\"btn btn-info float-right\">Nuevo Carátula</a>
                    ";
        }
        // line 79
        echo "                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), 'form_start');
        echo "
";
        // line 87
        echo "                        <div class=\"row\">
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "tema", []), 'label', ["label" => "CODIGO"]);
        echo "
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "tema", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "tema", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "descripcionTema", []), 'label', ["label" => "DESCRIPCION TEMA"]);
        echo "
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "descripcionTema", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "descripcionTema", []), 'errors');
        echo "
                                </div>
                            </div> 

                        </div>

                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formCaratulaAgregadaFilter"] ?? $this->getContext($context, "formCaratulaAgregadaFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 112
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
        // line 133
        $context["count"] = 0;
        // line 134
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["caratulas"] ?? $this->getContext($context, "caratulas")));
        foreach ($context['_seq'] as $context["_key"] => $context["caratulaAgregada"]) {
            // line 135
            echo "
                    <tr>
                        <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["caratulaAgregada"], "tema", []), "codigo", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["caratulaAgregada"], "tema", []), "descripcion", []), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 140
            if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
                // line 141
                echo "                                <a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                <a class=\"btn btn-warning\" href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
";
                // line 144
                echo "                            
                                <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                // line 145
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"myModal";
                // line 149
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">
                                        <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                            <div class=\"modal-content\">

                                                <!-- Modal Header -->
                                                <div class=\"modal-header-warning\">
                                                    <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\">Eliminar Carátula Agregada</h4>
                                                </div>

                                                <!-- Modal body -->
                                                <div class=\"modal-body\">
                                                    ¿Está seguro de quitar la carátula ";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["caratulaAgregada"], "tema", []), "html", null, true);
                echo " del expediente?
                                                </div>

                                                <!-- Modal footer -->
                                                <div class=\"modal-footer\">                                          
                                                    <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                // line 166
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_caratula", ["id" => $this->getAttribute($context["caratulaAgregada"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\">Si</a></button>                                   
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                ";
                // line 173
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                echo "                     
                        ";
            }
            // line 175
            echo "                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratulaAgregada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "
            </tbody>

        </table>

                
                
                     ";
        // line 186
        echo "        ";
        $context["limite"] = 6;
        // line 187
        echo "        ";
        $context["extremos"] = 2;
        // line 188
        echo "
        ";
        // line 189
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < ($context["limite"] ?? $this->getContext($context, "limite")))) {
            echo " 

            ";
            // line 191
            $context["minLeftRange"] = 1;
            // line 192
            echo "            ";
            $context["maxLeftRange"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 193
            echo "            ";
            $context["minRightRange"] = (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 194
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 195
            echo "
        ";
        } elseif ((        // line 196
($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 197
            echo "            ";
            $context["minLeftRange"] = 1;
            // line 198
            echo "            ";
            $context["maxLeftRange"] = 2;
            // line 199
            echo "
            ";
            // line 200
            $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 201
            echo "            ";
            $context["extremoDerecho"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 202
            echo "            ";
            $context["minRightRange"] = ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))) + 2);
            // line 203
            echo "
            ";
            // line 204
            if ((($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) >= (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) + ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
                // line 205
                echo "                ";
                $context["minRightRange"] = ($context["thisPage"] ?? $this->getContext($context, "thisPage"));
                // line 206
                echo "                ";
                $context["extremoDerecho"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
                // line 207
                echo "                ";
                $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - (($context["extremos"] ?? $this->getContext($context, "extremos")) * 2));
                // line 208
                echo "            ";
            }
            // line 209
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 210
            echo "        ";
        }
        // line 211
        echo "

        <div class=\"pagination\">
            <li><a class=\"page-link\" href=\"";
        // line 214
        (((0 < (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => ($context["caratula"] ?? $this->getContext($context, "caratula")), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true))) : (print ("")));
        echo "\">Anterior</a></li>

            ";
        // line 216
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - 1))) {
            // line 217
            echo "                ";
            $context["maxLeftRange"] = (($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange")) - 1);
            // line 218
            echo "            ";
        } elseif (((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages"))) && (($context["thisPage"] ?? $this->getContext($context, "thisPage")) != ($context["minRightRange"] ?? $this->getContext($context, "minRightRange"))))) {
            // line 219
            echo "                ";
            $context["maxLeftRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 220
            echo "            ";
        }
        // line 221
        echo "            
            
            ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["minLeftRange"] ?? $this->getContext($context, "minLeftRange")), ($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 224
            echo "                <li class=\"page-item ";
            echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
            echo "\">
                    <a class=\"page-link\"  href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => ($context["caratula"] ?? $this->getContext($context, "caratula")), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "
            ";
        // line 229
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 230
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                ";
            // line 233
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 1))) {
                // line 234
                echo "                    ";
                $context["extremoDerecho"] = (($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) - 1);
                // line 235
                echo "                ";
            }
            // line 236
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["extremoIzquierdo"] ?? $this->getContext($context, "extremoIzquierdo")), ($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                    
                    <li class=\"page-item ";
                // line 237
                echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
                echo "\">
                        <a class=\"page-link\"  href=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => ($context["caratula"] ?? $this->getContext($context, "caratula")), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "            ";
        }
        // line 242
        echo "
            ";
        // line 243
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 2))) {
            // line 244
            echo "                ";
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) != (($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange")) - 3))) {
                // line 245
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                ";
            }
            // line 249
            echo "            ";
        }
        // line 250
        echo "
            ";
        // line 251
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
            // line 252
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minRightRange"] ?? $this->getContext($context, "minRightRange")), ($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"";
                // line 254
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => ($context["caratula"] ?? $this->getContext($context, "caratula")), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
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
        echo "            

            ";
        // line 259
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 260
            echo "
            ";
        } else {
            // line 262
            echo "                ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 263
            echo "            ";
        }
        // line 264
        echo "            <li><a class=\"page-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => ($context["caratula"] ?? $this->getContext($context, "caratula")), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
        echo "\">Siguiente</a></li>

            </ul>
        </div> 

    </div>



    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

    <script>
        \$('#caratula_filter_responsable').autocompleter({
            url_list: \"";
        // line 281
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
            url_get: \"";
        // line 282
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
        return "Expediente/listadoCaratulas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 282,  593 => 281,  572 => 264,  569 => 263,  566 => 262,  562 => 260,  560 => 259,  554 => 257,  543 => 254,  535 => 252,  533 => 251,  530 => 250,  527 => 249,  521 => 245,  518 => 244,  516 => 243,  513 => 242,  510 => 241,  499 => 238,  495 => 237,  488 => 236,  485 => 235,  482 => 234,  480 => 233,  475 => 230,  473 => 229,  470 => 228,  459 => 225,  454 => 224,  450 => 223,  446 => 221,  443 => 220,  440 => 219,  437 => 218,  434 => 217,  432 => 216,  427 => 214,  422 => 211,  419 => 210,  416 => 209,  413 => 208,  410 => 207,  407 => 206,  404 => 205,  402 => 204,  399 => 203,  396 => 202,  393 => 201,  391 => 200,  388 => 199,  385 => 198,  382 => 197,  380 => 196,  377 => 195,  374 => 194,  371 => 193,  368 => 192,  366 => 191,  361 => 189,  358 => 188,  355 => 187,  352 => 186,  343 => 178,  335 => 175,  330 => 173,  320 => 166,  312 => 161,  297 => 149,  290 => 145,  287 => 144,  283 => 142,  278 => 141,  276 => 140,  271 => 138,  267 => 137,  263 => 135,  258 => 134,  256 => 133,  232 => 112,  226 => 109,  222 => 108,  210 => 99,  205 => 97,  201 => 96,  194 => 92,  189 => 90,  185 => 89,  181 => 87,  177 => 85,  169 => 79,  162 => 76,  160 => 75,  155 => 74,  149 => 73,  146 => 72,  143 => 71,  140 => 70,  136 => 69,  133 => 68,  130 => 67,  127 => 66,  124 => 65,  122 => 64,  60 => 4,  51 => 3,  29 => 1,);
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
        
        .title{
            font-size:16px;
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
                {% set count = 0 %}
                {% for caratulaAgregada in caratulas %}

                    <tr>
                        <td>{{caratulaAgregada.tema.codigo}}</td>
                        <td>{{caratulaAgregada.tema.descripcion}}</td>
                        <td>
                            {% if accion_habilitada == true %}
                                <a class=\"btn btn-info\" href=\"{{path(\"ver_caratula\",{'id':caratulaAgregada.id})}}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                <a class=\"btn btn-warning\" href=\"{{ path(\"editar_caratula\", {'id':caratulaAgregada.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
{#                                <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_caratula\", {'id':caratulaAgregada.id}) }}\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>#}
                            
                                <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal{{ count }}\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"myModal{{count}}\">
                                        <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                            <div class=\"modal-content\">

                                                <!-- Modal Header -->
                                                <div class=\"modal-header-warning\">
                                                    <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\">Eliminar Carátula Agregada</h4>
                                                </div>

                                                <!-- Modal body -->
                                                <div class=\"modal-body\">
                                                    ¿Está seguro de quitar la carátula {{caratulaAgregada.tema}} del expediente?
                                                </div>

                                                <!-- Modal footer -->
                                                <div class=\"modal-footer\">                                          
                                                    <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"{{ path(\"eliminar_caratula\", {'id':caratulaAgregada.id}) }}\"  role=\"button\">Si</a></button>                                   
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                {% set count=count+1 %}                     
                        {%endif%}
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
            <li><a class=\"page-link\" href=\"{{ 0 < thisPage-1 ? path('listado_caratula', {'id':caratula, \"currentPage\": thisPage}) }}\">Anterior</a></li>

            {%if thisPage == maxPages-1%}
                {%set maxLeftRange = maxLeftRange-1%}
            {%elseif thisPage == maxPages and thisPage != minRightRange%}
                {%set maxLeftRange = maxPages%}
            {%endif%}
            
            
            {% for i in minLeftRange..maxLeftRange %}
                <li class=\"page-item {{  i == thisPage ? 'active' : '' }}\">
                    <a class=\"page-link\"  href=\"{{ path('listado_caratula', {'id':caratula, \"currentPage\": thisPage}) }}\">{{ i }}</a>
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
                        <a class=\"page-link\"  href=\"{{ path('listado_caratula', {'id':caratula, \"currentPage\": thisPage}) }}\">{{ i }}</a>
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
                        <a class=\"page-link\"  href=\"{{ path('listado_caratula', {'id':caratula, \"currentPage\": thisPage}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
            {%endif%}            

            {%if (page==maxPages)%}

            {%else%}
                {%set page= page+1%}
            {%endif%}
            <li><a class=\"page-link\" href=\"{{ path('listado_caratula', {'id':caratula, \"currentPage\": thisPage}) }}\">Siguiente</a></li>

            </ul>
        </div> 

    </div>



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
{% endblock %}", "Expediente/listadoCaratulas.html.twig", "/var/www/html/SIE/app/Resources/views/Expediente/listadoCaratulas.html.twig");
    }
}
