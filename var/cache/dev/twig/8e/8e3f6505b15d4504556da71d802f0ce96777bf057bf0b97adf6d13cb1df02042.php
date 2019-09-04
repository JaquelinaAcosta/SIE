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
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Dependencia
                    </button>
                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_dependencia");
        echo "\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nueva Dependencia</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), 'errors');
        echo "
                        <div class=\"row\">
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCIÓN"]);
        echo "
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'label', ["label" => "DEPENDENCIA PADRE"]);
        echo "
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'errors');
        echo "
                                </div>
                            </div> 
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'label', ["label" => "NOMBRE RESPONSABLE"]);
        echo "
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'errors');
        echo "
                                </div>
                            </div>  
                            <div class=\"twocol col-lg-2\">
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'label', ["label" => "NIVEL"]);
        echo "
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'errors');
        echo "
                                </div>
                            </div> 
                            <div class=\"twocol col-lg-3\">
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "estado", []), 'label', ["label" => "ESTADO"]);
        echo "
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "estado", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "estado", []), 'errors');
        echo "
                                </div>
                            </div> 
                        </div>

                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), 'form_end');
        echo "

                    </form>
                </div>
            </div>
        </div>


        <hr/>


        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">Descripción</th>
                    <th scope=\"col\">Dependencia Padre</th>
                    <th scope=\"col\">Responsable</th>
                    <th scope=\"col\">Estado</th>
                    <th scope=\"col\">Nivel</th>
                    <th scope=\"col\">Acciones</th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["dependencias"] ?? $this->getContext($context, "dependencias"))));
        foreach ($context['_seq'] as $context["_key"] => $context["dependencia"]) {
            // line 126
            echo "                    <tr>
                        <td class=\"text-default\">";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "descripcion", []));
            echo "</td>
                        <td class=\"text-default\"><p>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dependencia"], "dependenciaPadre", []), "descripcion", []));
            echo "</p></td>
                        <td class=\"text-default\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "responsable", []));
            echo "</td>

                        ";
            // line 131
            if (($this->getAttribute($context["dependencia"], "estado", []) != null)) {
                // line 132
                echo "                            <td class=\"text-default\">HABILITADO</td>
                            <td class=\"text-default\">";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "nivel", []));
                echo "</td>
                            <td> <a class=\"btn btn-info\" href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adm_gestionar_mesaentrada", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar Mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                                <a class=\"btn btn-warning\" href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-danger\" href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deshabilitar_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"far fa-file-archive\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Archivar\"></i></a></td>
                                ";
            } else {
                // line 138
                echo "                            <td class=\"text-default\">DESHABILITADO</td>
                            <td class=\"text-default\">";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "nivel", []));
                echo "</td>
                            <td> <a class=\"btn btn-info\" href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adm_gestionar_mesaentrada", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                                <a class=\"btn btn-warning\" href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Dependencia\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-success\" href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alta_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"far fa-calendar-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dar de Alta\"></i></a></td>
                                ";
            }
            // line 144
            echo "
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "
            </tbody>
        </table>

";
        // line 151
        echo "                
        ";
        // line 152
        $context["limite"] = 6;
        // line 153
        echo "        ";
        $context["extremos"] = 2;
        // line 154
        echo "
        ";
        // line 155
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < ($context["limite"] ?? $this->getContext($context, "limite")))) {
            echo " 

            ";
            // line 157
            $context["minLeftRange"] = 1;
            // line 158
            echo "            ";
            $context["maxLeftRange"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 159
            echo "            ";
            $context["minRightRange"] = (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 160
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 161
            echo "
        ";
        } elseif ((        // line 162
($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 163
            echo "            ";
            $context["minLeftRange"] = 1;
            // line 164
            echo "            ";
            $context["maxLeftRange"] = 2;
            // line 165
            echo "
            ";
            // line 166
            $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 167
            echo "            ";
            $context["extremoDerecho"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 168
            echo "            ";
            $context["minRightRange"] = ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))) + 2);
            // line 169
            echo "
            ";
            // line 170
            if ((($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) >= (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) + ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
                // line 171
                echo "                ";
                $context["minRightRange"] = ($context["thisPage"] ?? $this->getContext($context, "thisPage"));
                // line 172
                echo "                ";
                $context["extremoDerecho"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
                // line 173
                echo "                ";
                $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - (($context["extremos"] ?? $this->getContext($context, "extremos")) * 2));
                // line 174
                echo "            ";
            }
            // line 175
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 176
            echo "        ";
        }
        // line 177
        echo "        
        
        <div class=\"pagination\" >
            <li><a class=\"page-link\" href=\"";
        // line 180
        (((0 < (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1)]), "html", null, true))) : (print ("")));
        echo "\">Anterior</a></li>

            ";
        // line 182
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - 1))) {
            // line 183
            echo "                ";
            $context["maxLeftRange"] = (($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange")) - 1);
            // line 184
            echo "            ";
        } elseif (((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages"))) && (($context["thisPage"] ?? $this->getContext($context, "thisPage")) != ($context["minRightRange"] ?? $this->getContext($context, "minRightRange"))))) {
            // line 185
            echo "                ";
            $context["maxLeftRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 186
            echo "            ";
        }
        // line 187
        echo "            
                ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["minLeftRange"] ?? $this->getContext($context, "minLeftRange")), ($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 189
            echo "                <li class=\"page-item ";
            echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
            echo "\">
                    <a class=\"page-link\"  href=\"";
            // line 190
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
        // line 193
        echo "
            ";
        // line 194
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 195
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                ";
            // line 198
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 1))) {
                // line 199
                echo "                    ";
                $context["extremoDerecho"] = (($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) - 1);
                // line 200
                echo "                ";
            }
            // line 201
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["extremoIzquierdo"] ?? $this->getContext($context, "extremoIzquierdo")), ($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                    
                    <li class=\"page-item ";
                // line 202
                echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
                echo "\">
                        <a class=\"page-link\"  href=\"";
                // line 203
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
            // line 206
            echo "            ";
        }
        // line 207
        echo "
            ";
        // line 208
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 2))) {
            // line 209
            echo "                ";
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) != (($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange")) - 3))) {
                // line 210
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                ";
            }
            // line 214
            echo "            ";
        }
        // line 215
        echo "
            ";
        // line 216
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
            // line 217
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minRightRange"] ?? $this->getContext($context, "minRightRange")), ($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"";
                // line 219
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
            // line 222
            echo "            ";
        }
        echo "            

            ";
        // line 224
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 225
            echo "
            ";
        } else {
            // line 227
            echo "                ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 228
            echo "            ";
        }
        // line 229
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
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_search");
        echo "\",
                url_get: \"";
        // line 244
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
        return array (  562 => 244,  558 => 243,  540 => 229,  537 => 228,  534 => 227,  530 => 225,  528 => 224,  522 => 222,  511 => 219,  503 => 217,  501 => 216,  498 => 215,  495 => 214,  489 => 210,  486 => 209,  484 => 208,  481 => 207,  478 => 206,  467 => 203,  463 => 202,  456 => 201,  453 => 200,  450 => 199,  448 => 198,  443 => 195,  441 => 194,  438 => 193,  427 => 190,  422 => 189,  418 => 188,  415 => 187,  412 => 186,  409 => 185,  406 => 184,  403 => 183,  401 => 182,  396 => 180,  391 => 177,  388 => 176,  385 => 175,  382 => 174,  379 => 173,  376 => 172,  373 => 171,  371 => 170,  368 => 169,  365 => 168,  362 => 167,  360 => 166,  357 => 165,  354 => 164,  351 => 163,  349 => 162,  346 => 161,  343 => 160,  340 => 159,  337 => 158,  335 => 157,  330 => 155,  327 => 154,  324 => 153,  322 => 152,  319 => 151,  313 => 147,  305 => 144,  300 => 142,  296 => 141,  292 => 140,  288 => 139,  285 => 138,  280 => 136,  276 => 135,  272 => 134,  268 => 133,  265 => 132,  263 => 131,  258 => 129,  254 => 128,  250 => 127,  247 => 126,  243 => 125,  216 => 101,  210 => 98,  206 => 97,  195 => 89,  190 => 87,  186 => 86,  179 => 82,  174 => 80,  170 => 79,  163 => 75,  158 => 73,  154 => 72,  147 => 68,  142 => 66,  138 => 65,  131 => 61,  126 => 59,  122 => 58,  116 => 55,  104 => 46,  60 => 4,  51 => 3,  29 => 1,);
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
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Dependencia
                    </button>
                    <a href=\"{{ path('nueva_dependencia') }}\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nueva Dependencia</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
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
                            <div class=\"twocol col-lg-3\">
                                {{ form_label(formDependenciaFilter.estado, 'ESTADO') }}
                                {{ form_widget(formDependenciaFilter.estado) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formDependenciaFilter.estado) }}
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


        <hr/>


        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">Descripción</th>
                    <th scope=\"col\">Dependencia Padre</th>
                    <th scope=\"col\">Responsable</th>
                    <th scope=\"col\">Estado</th>
                    <th scope=\"col\">Nivel</th>
                    <th scope=\"col\">Acciones</th>
                </tr>
            </thead>
            <tbody>

                {% for dependencia in dependencias|reverse %}
                    <tr>
                        <td class=\"text-default\">{{dependencia.descripcion|e }}</td>
                        <td class=\"text-default\"><p>{{dependencia.dependenciaPadre.descripcion|e }}</p></td>
                        <td class=\"text-default\">{{dependencia.responsable|e }}</td>

                        {% if dependencia.estado != null %}
                            <td class=\"text-default\">HABILITADO</td>
                            <td class=\"text-default\">{{dependencia.nivel|e }}</td>
                            <td> <a class=\"btn btn-info\" href=\"{{ path('adm_gestionar_mesaentrada',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar Mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                                <a class=\"btn btn-warning\" href=\"{{ path('editar_dependencia',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-danger\" href=\"{{ path('deshabilitar_dependencia',{'id':dependencia.id}) }}\"  role=\"button\"><i class=\"far fa-file-archive\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Archivar\"></i></a></td>
                                {% else %}
                            <td class=\"text-default\">DESHABILITADO</td>
                            <td class=\"text-default\">{{dependencia.nivel|e }}</td>
                            <td> <a class=\"btn btn-info\" href=\"{{ path('adm_gestionar_mesaentrada',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                                <a class=\"btn btn-warning\" href=\"{{ path('editar_dependencia',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Dependencia\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-success\" href=\"{{ path('alta_dependencia',{'id':dependencia.id}) }}\"  role=\"button\"><i class=\"far fa-calendar-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dar de Alta\"></i></a></td>
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
