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

/* Ubicacion/listadoLugarFisico.html.twig */
class __TwigTemplate_b16aceda9a74560a2d124bd300ae95b941b19609031d97cca7a1cd0b6abec88e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Ubicacion/listadoLugarFisico.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Ubicacion/listadoLugarFisico.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Ubicacion/listadoLugarFisico.html.twig", 1);
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
                        <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Lugares - ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "dependencia", []), "html", null, true);
        echo " ( Haga click aquí para expandir )
                    </button>
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_lugarfisico");
        echo "\"
                       role=\"button\" class=\"btn btn-info float-right\">Nuevo Lugar</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), 'errors');
        echo "
                        <div class=\"row\">

                            ";
        // line 37
        if ($this->getAttribute(($context["formLugarFisicoFilter"] ?? null), "dependencia", [], "any", true, true)) {
            echo "                    
                                <div class=\"threecol col-lg-4\">
                                    ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
            echo "
                                    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "dependencia", []), 'widget');
            echo "
                                    <div class=\"help-block with-errors\">
                                        ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "dependencia", []), 'errors');
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 46
        echo "
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "tipo", []), 'label', ["label" => "TIPO"]);
        echo "
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "tipo", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "tipo", []), 'errors');
        echo "
                                </div>
                            </div>  
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCIÓN"]);
        echo "
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "descripcion", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "descripcion", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), 'form_end');
        echo "

                    </form>
                </div>
            </div>
        </div>

        
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 78
            echo "            <hr/>
            <div class=\"alert alert-success\">
                ";
            // line 80
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 85
            echo "            <hr/>
            <div class=\"alert alert-danger\">
                ";
            // line 87
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        

        ";
        // line 92
        if ((twig_length_filter($this->env, ($context["lugarFisico"] ?? $this->getContext($context, "lugarFisico"))) > 0)) {
            // line 93
            echo "            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: ";
            // line 95
            echo twig_escape_filter($this->env, ($context["totalItems"] ?? $this->getContext($context, "totalItems")), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        ";
        } else {
            // line 99
            echo "            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Búsqueda con 0 resultados! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        ";
        }
        // line 104
        echo "        

        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    ";
        // line 109
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 110
            echo "                        <th scope=\"col\">Lugar de origen</th>
                        ";
        }
        // line 112
        echo "                    <th scope=\"col\">Tipo</th>
                    <th scope=\"col\">Descripción</th> 
                    <th scope=\"col\">Acceso</th>
                    <th scope=\"col\">Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 119
        $context["count"] = 0;
        // line 120
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["lugarFisico"] ?? $this->getContext($context, "lugarFisico"))));
        foreach ($context['_seq'] as $context["_key"] => $context["lugarfisico"]) {
            // line 121
            echo "                    <tr>
                        ";
            // line 122
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 123
                echo "                            <td class=\"text-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lugarfisico"], "dependencia", []), "descripcion", []));
                echo "</td>
                        ";
            }
            // line 125
            echo "                        <td class=\"text-default\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lugarfisico"], "tipo", []));
            echo "</td>
                        <td class=\"text-default\"><p>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["lugarfisico"], "descripcion", []));
            echo "</p></td>
                        <td class=\"text-default\">";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["lugarfisico"], "acceso", []));
            echo "</td>
                        <td>

                            ";
            // line 130
            $context["accion_habilitada"] = false;
            // line 131
            echo "                            ";
            if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN") || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_RESPONSABLE"))) {
                // line 132
                echo "                                ";
                $context["accion_habilitada"] = true;
                // line 133
                echo "                            ";
            } else {
                // line 134
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["lugarfisico"], "responsables", []), "getValues", []));
                foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                    // line 135
                    echo "                                    ";
                    if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == $this->getAttribute($context["responsable"], "usuario", []))) {
                        // line 136
                        echo "                                        ";
                        $context["accion_habilitada"] = true;
                        // line 137
                        echo "                                    ";
                    }
                    // line 138
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                            ";
            }
            echo "  

                            ";
            // line 141
            if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
                // line 142
                echo "
                                <a class=\"btn btn-warning\" href=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_lugarfisico", ["id" => $this->getAttribute($context["lugarfisico"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                    ";
                // line 145
                echo "
                                <a class=\"btn btn-info\" href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionar_lugarfisico_responsables", ["id" => $this->getAttribute($context["lugarfisico"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"fas fa-user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Responsables\"></i></a>
                                <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                // line 147
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
                                                <h4 class=\"modal-title\">Eliminar Lugar Físico</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <div class=\"modal-body\">
                                                ¿Desea Eliminar el Lugar Físico: ";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["lugarfisico"], "tipo", []), "html", null, true);
                echo "?
                                            </div>
                                            <!-- Modal footer -->
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("baja_lugarfisico", ["id" => $this->getAttribute($context["lugarfisico"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\">SI</a></button>                          
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                ";
                // line 172
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                echo "                               
                            ";
            }
            // line 174
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lugarfisico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "
            </tbody>
        </table>

        ";
        // line 182
        echo "        ";
        $context["limite"] = 6;
        // line 183
        echo "        ";
        $context["extremos"] = 2;
        // line 184
        echo "
        ";
        // line 185
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < ($context["limite"] ?? $this->getContext($context, "limite")))) {
            echo " 

            ";
            // line 187
            $context["minLeftRange"] = 1;
            // line 188
            echo "            ";
            $context["maxLeftRange"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 189
            echo "            ";
            $context["minRightRange"] = (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 190
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 191
            echo "
        ";
        } elseif ((        // line 192
($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 193
            echo "            ";
            $context["minLeftRange"] = 1;
            // line 194
            echo "            ";
            $context["maxLeftRange"] = 2;
            // line 195
            echo "
            ";
            // line 196
            $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 197
            echo "            ";
            $context["extremoDerecho"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 198
            echo "            ";
            $context["minRightRange"] = ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))) + 2);
            // line 199
            echo "
            ";
            // line 200
            if ((($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) >= (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) + ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
                // line 201
                echo "                ";
                $context["minRightRange"] = ($context["thisPage"] ?? $this->getContext($context, "thisPage"));
                // line 202
                echo "                ";
                $context["extremoDerecho"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
                // line 203
                echo "                ";
                $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - (($context["extremos"] ?? $this->getContext($context, "extremos")) * 2));
                // line 204
                echo "            ";
            }
            // line 205
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 206
            echo "        ";
        }
        // line 207
        echo "

        <div class=\"pagination\">
            <li><a class=\"page-link\" href=\"";
        // line 210
        (((0 < (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1)]), "html", null, true))) : (print ("")));
        echo "\">Anterior</a></li>

            ";
        // line 212
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - 1))) {
            // line 213
            echo "                ";
            $context["maxLeftRange"] = (($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange")) - 1);
            // line 214
            echo "            ";
        } elseif (((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages"))) && (($context["thisPage"] ?? $this->getContext($context, "thisPage")) != ($context["minRightRange"] ?? $this->getContext($context, "minRightRange"))))) {
            // line 215
            echo "                ";
            $context["maxLeftRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 216
            echo "            ";
        }
        // line 217
        echo "

            ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["minLeftRange"] ?? $this->getContext($context, "minLeftRange")), ($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 220
            echo "                <li class=\"page-item ";
            echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
            echo "\">
                    <a class=\"page-link\"  href=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "
            ";
        // line 225
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 226
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                ";
            // line 229
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 1))) {
                // line 230
                echo "                    ";
                $context["extremoDerecho"] = (($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) - 1);
                // line 231
                echo "                ";
            }
            // line 232
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["extremoIzquierdo"] ?? $this->getContext($context, "extremoIzquierdo")), ($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                    
                    <li class=\"page-item ";
                // line 233
                echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
                echo "\">
                        <a class=\"page-link\"  href=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "            ";
        }
        // line 238
        echo "
            ";
        // line 239
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 2))) {
            // line 240
            echo "                ";
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) != (($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange")) - 3))) {
                // line 241
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                ";
            }
            // line 245
            echo "            ";
        }
        // line 246
        echo "
            ";
        // line 247
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
            // line 248
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minRightRange"] ?? $this->getContext($context, "minRightRange")), ($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"";
                // line 250
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "            ";
        }
        echo "            

            ";
        // line 255
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 256
            echo "
            ";
        } else {
            // line 258
            echo "                ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 259
            echo "            ";
        }
        // line 260
        echo "            <li><a class=\"page-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
        echo "\">Siguiente</a></li>

            </ul>
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
        return "Ubicacion/listadoLugarFisico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 260,  627 => 259,  624 => 258,  620 => 256,  618 => 255,  612 => 253,  601 => 250,  593 => 248,  591 => 247,  588 => 246,  585 => 245,  579 => 241,  576 => 240,  574 => 239,  571 => 238,  568 => 237,  557 => 234,  553 => 233,  546 => 232,  543 => 231,  540 => 230,  538 => 229,  533 => 226,  531 => 225,  528 => 224,  517 => 221,  512 => 220,  508 => 219,  504 => 217,  501 => 216,  498 => 215,  495 => 214,  492 => 213,  490 => 212,  485 => 210,  480 => 207,  477 => 206,  474 => 205,  471 => 204,  468 => 203,  465 => 202,  462 => 201,  460 => 200,  457 => 199,  454 => 198,  451 => 197,  449 => 196,  446 => 195,  443 => 194,  440 => 193,  438 => 192,  435 => 191,  432 => 190,  429 => 189,  426 => 188,  424 => 187,  419 => 185,  416 => 184,  413 => 183,  410 => 182,  404 => 177,  396 => 174,  391 => 172,  381 => 165,  374 => 161,  359 => 149,  354 => 147,  350 => 146,  347 => 145,  343 => 143,  340 => 142,  338 => 141,  332 => 139,  326 => 138,  323 => 137,  320 => 136,  317 => 135,  312 => 134,  309 => 133,  306 => 132,  303 => 131,  301 => 130,  295 => 127,  291 => 126,  286 => 125,  280 => 123,  278 => 122,  275 => 121,  270 => 120,  268 => 119,  259 => 112,  255 => 110,  253 => 109,  246 => 104,  239 => 99,  232 => 95,  228 => 93,  226 => 92,  222 => 90,  213 => 87,  209 => 85,  205 => 84,  202 => 83,  193 => 80,  189 => 78,  185 => 77,  174 => 69,  168 => 66,  164 => 65,  154 => 58,  149 => 56,  145 => 55,  138 => 51,  133 => 49,  129 => 48,  125 => 46,  118 => 42,  113 => 40,  109 => 39,  104 => 37,  98 => 34,  86 => 25,  81 => 23,  60 => 4,  51 => 3,  29 => 1,);
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
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingOne\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Lugares - {{app.user.persona.dependencia}} ( Haga click aquí para expandir )
                    </button>
                    <a href=\"{{ path('nuevo_lugarfisico') }}\"
                       role=\"button\" class=\"btn btn-info float-right\">Nuevo Lugar</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        {{ form_errors(formLugarFisicoFilter) }}
                        <div class=\"row\">

                            {% if formLugarFisicoFilter.dependencia is defined %}                    
                                <div class=\"threecol col-lg-4\">
                                    {{ form_label(formLugarFisicoFilter.dependencia, 'DEPENDENCIA') }}
                                    {{ form_widget(formLugarFisicoFilter.dependencia) }}
                                    <div class=\"help-block with-errors\">
                                        {{ form_errors(formLugarFisicoFilter.dependencia) }}
                                    </div>
                                </div>
                            {% endif %}

                            <div class=\"threecol col-lg-3\">
                                {{ form_label(formLugarFisicoFilter.tipo, 'TIPO') }}
                                {{ form_widget(formLugarFisicoFilter.tipo) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formLugarFisicoFilter.tipo) }}
                                </div>
                            </div>  
                            <div class=\"threecol col-lg-3\">
                                {{ form_label(formLugarFisicoFilter.descripcion, 'DESCRIPCIÓN') }}
                                {{ form_widget(formLugarFisicoFilter.descripcion) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formLugarFisicoFilter.descripcion) }}
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                {{ form_widget(formLugarFisicoFilter.filter) }}
                                {{ form_widget(formLugarFisicoFilter.reset) }}
                            </div>
                        </div>
                        {{ form_end(formLugarFisicoFilter) }}

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
        

        {% if lugarFisico|length >0 %}
            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: {{ totalItems  }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
                    {% if app.user.role == \"ROLE_ADMIN\" %}
                        <th scope=\"col\">Lugar de origen</th>
                        {% endif %}
                    <th scope=\"col\">Tipo</th>
                    <th scope=\"col\">Descripción</th> 
                    <th scope=\"col\">Acceso</th>
                    <th scope=\"col\">Acciones</th>
                </tr>
            </thead>
            <tbody>
                {% set count=0 %}
                {% for lugarfisico in lugarFisico|reverse %}
                    <tr>
                        {% if app.user.role == \"ROLE_ADMIN\" %}
                            <td class=\"text-default\">{{lugarfisico.dependencia.descripcion|e }}</td>
                        {% endif %}
                        <td class=\"text-default\">{{lugarfisico.tipo|e }}</td>
                        <td class=\"text-default\"><p>{{lugarfisico.descripcion|e }}</p></td>
                        <td class=\"text-default\">{{lugarfisico.acceso|e }}</td>
                        <td>

                            {% set accion_habilitada = false %}
                            {% if app.user.role == 'ROLE_ADMIN' or app.user.role == 'ROLE_RESPONSABLE' %}
                                {% set accion_habilitada = true %}
                            {%else%}
                                {% for responsable in lugarfisico.responsables.getValues %}
                                    {% if app.user == responsable.usuario %}
                                        {% set accion_habilitada = true %}
                                    {% endif %}
                                {%endfor%}
                            {% endif %}  

                            {% if accion_habilitada == true %}

                                <a class=\"btn btn-warning\" href=\"{{ path('editar_lugarfisico',{'id':lugarfisico.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                    {#                            <a class=\"btn btn-danger\" href=\"{{ path('borrar_lugarfisico',{'id':lugarfisico.id}) }}\"  role=\"button\"><i class=\"far fa-file-archive\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Borrar\"></i></a>#}

                                <a class=\"btn btn-info\" href=\"{{ path(\"gestionar_lugarfisico_responsables\", {'id':lugarfisico.id}) }}\"  role=\"button\"><i class=\"fas fa-user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Responsables\"></i></a>
                                <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal{{ count }}\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    
                                <!-- The Modal -->
                                <div class=\"modal fade\" id=\"myModal{{count}}\">
                                    <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                        <div class=\"modal-content\">

                                            <!-- Modal Header -->
                                            <div class=\"modal-header-warning\">
                                                <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\">Eliminar Lugar Físico</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <div class=\"modal-body\">
                                                ¿Desea Eliminar el Lugar Físico: {{ lugarfisico.tipo}}?
                                            </div>
                                            <!-- Modal footer -->
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"{{ path('baja_lugarfisico',{'id':lugarfisico.id}) }}\"  role=\"button\">SI</a></button>                          
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
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
            <li><a class=\"page-link\" href=\"{{ 0 < thisPage-1 ? path('listado_lugarfisico', {\"currentPage\": thisPage-1}) }}\">Anterior</a></li>

            {%if thisPage == maxPages-1%}
                {%set maxLeftRange = maxLeftRange-1%}
            {%elseif thisPage == maxPages and thisPage != minRightRange%}
                {%set maxLeftRange = maxPages%}
            {%endif%}


            {% for i in minLeftRange..maxLeftRange %}
                <li class=\"page-item {{  i == thisPage ? 'active' : '' }}\">
                    <a class=\"page-link\"  href=\"{{ path('listado_lugarfisico', {\"currentPage\": i}) }}\">{{ i }}</a>
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
                        <a class=\"page-link\"  href=\"{{ path('listado_lugarfisico', {\"currentPage\": i}) }}\">{{ i }}</a>
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
                        <a class=\"page-link\"  href=\"{{ path('listado_lugarfisico', {\"currentPage\": i}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
            {%endif%}            

            {%if (page==maxPages)%}

            {%else%}
                {%set page= page+1%}
            {%endif%}
            <li><a class=\"page-link\" href=\"{{ path('listado_lugarfisico', {\"currentPage\": page}) }}\">Siguiente</a></li>

            </ul>
        </div>        


        <script>
            \$(function () {
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        </script>

        <hr/>
    {% endblock %}", "Ubicacion/listadoLugarFisico.html.twig", "/var/www/html/SIE/app/Resources/views/Ubicacion/listadoLugarFisico.html.twig");
    }
}
