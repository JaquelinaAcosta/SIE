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

/* Dependencia/listadoDependencia.html.twig */
class __TwigTemplate_c6f7b895287bf33596b5896998f73c4cb98c851bec4b959131fd34799dec7b13 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dependencia/listadoDependencia.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dependencia/listadoDependencia.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Dependencia/listadoDependencia.html.twig", 1);
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

        <div class=\"card\">
            <div class=\"card-header\" id=\"headingOne\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Dependencias ( Haga click aquí para expandir )
                    </button>
                    <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_dependencia");
        echo "\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nueva Dependencia</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), 'errors');
        echo "
                        <div class=\"row\">
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCIÓN"]);
        echo "
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'label', ["label" => "DEPENDENCIA PADRE"]);
        echo "
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'errors');
        echo "
                                </div>
                            </div> 
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'label', ["label" => "NOMBRE RESPONSABLE"]);
        echo "
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'errors');
        echo "
                                </div>
                            </div>  
                            <div class=\"twocol col-lg-2\">
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'label', ["label" => "NIVEL"]);
        echo "
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'errors');
        echo "
                                </div>
                            </div> 
                        </div>

                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), 'form_end');
        echo "

                    </form>
                </div>
            </div>
        </div>

        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 90
            echo "            <hr/>
            <div class=\"alert alert-success\">
                ";
            // line 92
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 97
            echo "            <hr/>
            <div class=\"alert alert-danger\">
                ";
            // line 99
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        
        
        
        ";
        // line 105
        if ((twig_length_filter($this->env, ($context["dependencias"] ?? $this->getContext($context, "dependencias"))) > 0)) {
            // line 106
            echo "            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: ";
            // line 108
            echo twig_escape_filter($this->env, ($context["totalItems"] ?? $this->getContext($context, "totalItems")), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        ";
        } else {
            // line 112
            echo "            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Búsqueda con 0 resultados! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        ";
        }
        // line 117
        echo "            

        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">Descripción</th>
                    <th scope=\"col\">Dependencia Padre</th>
                    <th scope=\"col\">Responsable</th>
                    <th scope=\"col\">Nivel</th>
                    <th scope=\"col\">Acciones</th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 131
        $context["count"] = 0;
        // line 132
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["dependencias"] ?? $this->getContext($context, "dependencias"))));
        foreach ($context['_seq'] as $context["_key"] => $context["dependencia"]) {
            // line 133
            echo "                    <tr>
                        <td class=\"text-default\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "descripcion", []));
            echo "</td>
                        <td class=\"text-default\"><p>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dependencia"], "dependenciaPadre", []), "descripcion", []));
            echo "</p></td>
                        <td class=\"text-default\">";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "responsable", []));
            echo "</td>

                        <td class=\"text-default\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "nivel", []));
            echo "</td>
                        <td> <a class=\"btn btn-info\" href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionar_mesaentrada", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar Mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                            <a class=\"btn btn-warning\" href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
";
            // line 142
            echo "                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                        <!-- The Modal -->
                                        <div class=\"modal fade\" id=\"myModal";
            // line 146
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                                            <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                                <div class=\"modal-content\">

                                                    <!-- Modal Header -->
                                                    <div class=\"modal-header-warning\">
                                                        <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        <h4 class=\"modal-title\">Eliminar Dependencia</h4>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class=\"modal-body\">
                                                        ¿Desea Eliminar la Dependencia: ";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "descripcion", []), "html", null, true);
            echo "?
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("baja_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\">SI</a></button>                          
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        ";
            // line 169
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
            echo "   

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
            </tbody>
        </table>

        ";
        // line 177
        echo "                
        ";
        // line 178
        $context["limite"] = 6;
        // line 179
        echo "        ";
        $context["extremos"] = 2;
        // line 180
        echo "
        ";
        // line 181
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < ($context["limite"] ?? $this->getContext($context, "limite")))) {
            echo " 

            ";
            // line 183
            $context["minLeftRange"] = 1;
            // line 184
            echo "            ";
            $context["maxLeftRange"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 185
            echo "            ";
            $context["minRightRange"] = (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 186
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 187
            echo "
        ";
        } elseif ((        // line 188
($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 189
            echo "            ";
            $context["minLeftRange"] = 1;
            // line 190
            echo "            ";
            $context["maxLeftRange"] = 2;
            // line 191
            echo "
            ";
            // line 192
            $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 193
            echo "            ";
            $context["extremoDerecho"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 194
            echo "            ";
            $context["minRightRange"] = ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))) + 2);
            // line 195
            echo "
            ";
            // line 196
            if ((($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) >= (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) + ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
                // line 197
                echo "                ";
                $context["minRightRange"] = ($context["thisPage"] ?? $this->getContext($context, "thisPage"));
                // line 198
                echo "                ";
                $context["extremoDerecho"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
                // line 199
                echo "                ";
                $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - (($context["extremos"] ?? $this->getContext($context, "extremos")) * 2));
                // line 200
                echo "            ";
            }
            // line 201
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 202
            echo "        ";
        }
        // line 203
        echo "

        <div class=\"pagination\" >
            <li><a class=\"page-link\" href=\"";
        // line 206
        (((0 < (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1)]), "html", null, true))) : (print ("")));
        echo "\">Anterior</a></li>

            ";
        // line 208
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - 1))) {
            // line 209
            echo "                ";
            $context["maxLeftRange"] = (($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange")) - 1);
            // line 210
            echo "            ";
        } elseif (((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages"))) && (($context["thisPage"] ?? $this->getContext($context, "thisPage")) != ($context["minRightRange"] ?? $this->getContext($context, "minRightRange"))))) {
            // line 211
            echo "                ";
            $context["maxLeftRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 212
            echo "            ";
        }
        // line 213
        echo "
            ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["minLeftRange"] ?? $this->getContext($context, "minLeftRange")), ($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 215
            echo "                <li class=\"page-item ";
            echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
            echo "\">
                    <a class=\"page-link\"  href=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "
            ";
        // line 220
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 221
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                ";
            // line 224
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 1))) {
                // line 225
                echo "                    ";
                $context["extremoDerecho"] = (($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) - 1);
                // line 226
                echo "                ";
            }
            // line 227
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["extremoIzquierdo"] ?? $this->getContext($context, "extremoIzquierdo")), ($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                    
                    <li class=\"page-item ";
                // line 228
                echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
                echo "\">
                        <a class=\"page-link\"  href=\"";
                // line 229
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "            ";
        }
        // line 233
        echo "
            ";
        // line 234
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 2))) {
            // line 235
            echo "                ";
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) != (($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange")) - 3))) {
                // line 236
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                ";
            }
            // line 240
            echo "            ";
        }
        // line 241
        echo "
            ";
        // line 242
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
            // line 243
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minRightRange"] ?? $this->getContext($context, "minRightRange")), ($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"";
                // line 245
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "            ";
        }
        echo "            

            ";
        // line 250
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 251
            echo "
            ";
        } else {
            // line 253
            echo "                ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 254
            echo "            ";
        }
        // line 255
        echo "            <li><a class=\"page-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
        echo "\">Siguiente</a></li>

            </ul>
        </div>


        <script>
            \$(function () {
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        </script>

        <script>
            \$('#dependencia_filter_responsable').autocompleter({
                url_list: \"";
        // line 269
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_search");
        echo "\",
                url_get: \"";
        // line 270
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_get");
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
        return "Dependencia/listadoDependencia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 270,  606 => 269,  588 => 255,  585 => 254,  582 => 253,  578 => 251,  576 => 250,  570 => 248,  559 => 245,  551 => 243,  549 => 242,  546 => 241,  543 => 240,  537 => 236,  534 => 235,  532 => 234,  529 => 233,  526 => 232,  515 => 229,  511 => 228,  504 => 227,  501 => 226,  498 => 225,  496 => 224,  491 => 221,  489 => 220,  486 => 219,  475 => 216,  470 => 215,  466 => 214,  463 => 213,  460 => 212,  457 => 211,  454 => 210,  451 => 209,  449 => 208,  444 => 206,  439 => 203,  436 => 202,  433 => 201,  430 => 200,  427 => 199,  424 => 198,  421 => 197,  419 => 196,  416 => 195,  413 => 194,  410 => 193,  408 => 192,  405 => 191,  402 => 190,  399 => 189,  397 => 188,  394 => 187,  391 => 186,  388 => 185,  385 => 184,  383 => 183,  378 => 181,  375 => 180,  372 => 179,  370 => 178,  367 => 177,  361 => 173,  351 => 169,  341 => 162,  334 => 158,  319 => 146,  311 => 142,  307 => 140,  303 => 139,  299 => 138,  294 => 136,  290 => 135,  286 => 134,  283 => 133,  278 => 132,  276 => 131,  260 => 117,  253 => 112,  246 => 108,  242 => 106,  240 => 105,  235 => 102,  226 => 99,  222 => 97,  218 => 96,  215 => 95,  206 => 92,  202 => 90,  198 => 89,  188 => 82,  182 => 79,  178 => 78,  167 => 70,  162 => 68,  158 => 67,  151 => 63,  146 => 61,  142 => 60,  135 => 56,  130 => 54,  126 => 53,  119 => 49,  114 => 47,  110 => 46,  104 => 43,  92 => 34,  60 => 4,  51 => 3,  29 => 1,);
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

        <div class=\"card\">
            <div class=\"card-header\" id=\"headingOne\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Dependencias ( Haga click aquí para expandir )
                    </button>
                    <a href=\"{{ path('nueva_dependencia') }}\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nueva Dependencia</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        {{ form_errors(formDependenciaFilter) }}
                        <div class=\"row\">
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formDependenciaFilter.descripcion, 'DESCRIPCIÓN') }}
                                {{ form_widget(formDependenciaFilter.descripcion) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formDependenciaFilter.descripcion) }}
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formDependenciaFilter.dependenciaPadre, 'DEPENDENCIA PADRE') }}
                                {{ form_widget(formDependenciaFilter.dependenciaPadre) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formDependenciaFilter.dependenciaPadre) }}
                                </div>
                            </div> 
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formDependenciaFilter.responsable, 'NOMBRE RESPONSABLE') }}
                                {{ form_widget(formDependenciaFilter.responsable) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formDependenciaFilter.responsable) }}
                                </div>
                            </div>  
                            <div class=\"twocol col-lg-2\">
                                {{ form_label(formDependenciaFilter.nivel, 'NIVEL') }}
                                {{ form_widget(formDependenciaFilter.nivel) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formDependenciaFilter.nivel) }}
                                </div>
                            </div> 
                        </div>

                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                {{ form_widget(formDependenciaFilter.filter) }}
                                {{ form_widget(formDependenciaFilter.reset) }}
                            </div>
                        </div>
                        {{ form_end(formDependenciaFilter) }}

                    </form>
                </div>
            </div>
        </div>

        {% for message in app.flashes('success') %}
            <hr/>
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}

        {% for message in app.flashes('danger') %}
            <hr/>
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}
        
        
        
        {% if dependencias|length >0 %}
            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: {{ totalItems }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
                    <th scope=\"col\">Descripción</th>
                    <th scope=\"col\">Dependencia Padre</th>
                    <th scope=\"col\">Responsable</th>
                    <th scope=\"col\">Nivel</th>
                    <th scope=\"col\">Acciones</th>
                </tr>
            </thead>
            <tbody>

                {% set count=0 %}
                {% for dependencia in dependencias|reverse %}
                    <tr>
                        <td class=\"text-default\">{{dependencia.descripcion|e }}</td>
                        <td class=\"text-default\"><p>{{dependencia.dependenciaPadre.descripcion|e }}</p></td>
                        <td class=\"text-default\">{{dependencia.responsable|e }}</td>

                        <td class=\"text-default\">{{dependencia.nivel|e }}</td>
                        <td> <a class=\"btn btn-info\" href=\"{{ path('gestionar_mesaentrada',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar Mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                            <a class=\"btn btn-warning\" href=\"{{ path('editar_dependencia',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
{#                            <a class=\"btn btn-danger\" href=\"{{ path('baja_dependencia',{'id':dependencia.id}) }}\"  role=\"button\"><i class=\"fas fa-trash\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Borrar\"></i></a></td>#}
                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal{{ count }}\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                        <!-- The Modal -->
                                        <div class=\"modal fade\" id=\"myModal{{count}}\">
                                            <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                                <div class=\"modal-content\">

                                                    <!-- Modal Header -->
                                                    <div class=\"modal-header-warning\">
                                                        <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        <h4 class=\"modal-title\">Eliminar Dependencia</h4>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class=\"modal-body\">
                                                        ¿Desea Eliminar la Dependencia: {{ dependencia.descripcion }}?
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"{{ path('baja_dependencia',{'id':dependencia.id}) }}\"  role=\"button\">SI</a></button>                          
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {% set count=count+1 %}   

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


        <div class=\"pagination\" >
            <li><a class=\"page-link\" href=\"{{ 0 < thisPage-1 ? path('listado_dependencia', {\"currentPage\": thisPage-1}) }}\">Anterior</a></li>

            {%if thisPage == maxPages-1%}
                {%set maxLeftRange = maxLeftRange-1%}
            {%elseif thisPage == maxPages and thisPage != minRightRange%}
                {%set maxLeftRange = maxPages%}
            {%endif%}

            {% for i in minLeftRange..maxLeftRange %}
                <li class=\"page-item {{ i == thisPage ? 'active' : '' }}\">
                    <a class=\"page-link\"  href=\"{{ path('listado_dependencia', {\"currentPage\": i}) }}\">{{ i }}</a>
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
                        <a class=\"page-link\"  href=\"{{ path('listado_dependencia', {\"currentPage\": i}) }}\">{{ i }}</a>
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
                        <a class=\"page-link\"  href=\"{{ path('listado_dependencia', {\"currentPage\": i}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
            {%endif%}            

            {%if (page==maxPages)%}

            {%else%}
                {%set page= page+1%}
            {%endif%}
            <li><a class=\"page-link\" href=\"{{ path('listado_dependencia', {\"currentPage\": page}) }}\">Siguiente</a></li>

            </ul>
        </div>


        <script>
            \$(function () {
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        </script>

        <script>
            \$('#dependencia_filter_responsable').autocompleter({
                url_list: \"{{ path('persona_search') }}\",
                url_get: \"{{ path('persona_get') }}\"
            });
        </script>

        <hr/>
    {% endblock %}", "Dependencia/listadoDependencia.html.twig", "/var/www/html/SIE/app/Resources/views/Dependencia/listadoDependencia.html.twig");
    }
}
