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

/* Usuario/listadoUsuarios.html.twig */
class __TwigTemplate_0bc25d239c798186180f6b1502454403b66c2208a454c00c97014d1f95ae1629 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Usuario/listadoUsuarios.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Usuario/listadoUsuarios.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Usuario/listadoUsuarios.html.twig", 1);
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
                        <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Usuarios ( Haga click aquí para expandir )
                    </button>
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_usuario");
        echo "\" 
                       role=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-user-plus\"></i>&ensp;Nuevo Usuario</a>
                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), 'errors');
        echo "
                        <div class=\"row\">
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
        echo "
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "dependencia", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "dependencia", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "iup", []), 'label', ["label" => "USUARIO"]);
        echo "
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "iup", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "iup", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "role", []), 'label', ["label" => "ROL"]);
        echo "
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "role", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "role", []), 'errors');
        echo "
                                </div>
                            </div>  
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "persona", []), 'label', ["label" => "NOMBRE RESPONSABLE"]);
        echo "
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "persona", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "persona", []), 'errors');
        echo "
                                </div>
                            </div>              

                        </div>

                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), 'form_end');
        echo "

                    </form>

                </div>
            </div>
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
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 90
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 91
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        
        ";
        // line 95
        if ((twig_length_filter($this->env, ($context["usuarios"] ?? $this->getContext($context, "usuarios"))) > 0)) {
            // line 96
            echo "            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: ";
            // line 98
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["usuarios"] ?? $this->getContext($context, "usuarios"))), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        ";
        } else {
            // line 102
            echo "            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Búsqueda con 0 resultados! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        ";
        }
        // line 107
        echo "        
        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">USUARIO</th>
                    <th scope=\"col\">ROL</th>
                    <th scope=\"col\">PERSONA RESPONSBLE</th>
                    <th scope=\"col\">DEPENDENCIA</th>
                    <th scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 119
        $context["count"] = 0;
        // line 120
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["usuarios"] ?? $this->getContext($context, "usuarios"))));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 121
            echo "                    <tr>
                        <td class=\"text-default\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "iup", []));
            echo "</td>
                        ";
            // line 123
            if (($this->getAttribute($context["usuario"], "role", []) == "ROLE_ADMIN")) {
                // line 124
                echo "                            <td class=\"text-default\"><p>Administrador</p></td>
                        ";
            } elseif (($this->getAttribute(            // line 125
$context["usuario"], "role", []) == "ROLE_RESPONSABLE")) {
                // line 126
                echo "                            <td class=\"text-default\"><p>Responsble de M. E.</p></td>
                        ";
            } elseif (($this->getAttribute(            // line 127
$context["usuario"], "role", []) == "ROLE_USER")) {
                // line 128
                echo "                            <td class=\"text-default\"><p>Usuario</p></td>
                        ";
            }
            // line 130
            echo "                        <td class=\"text-default\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "persona", []));
            echo "</td>
                        <td class=\"text-default\">";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["usuario"], "persona", []), "dependencia", []), "descripcion", []));
            echo "</td>

                        ";
            // line 134
            echo "                        ";
            // line 135
            echo "                        <td> <a class=\"btn btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_usuario", ["id" => $this->getAttribute($context["usuario"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                                ";
            // line 137
            echo "

                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 139
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                            <!-- The Modal -->
                            <div class=\"modal fade\" id=\"myModal";
            // line 143
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                                <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                    <div class=\"modal-content\">

                                        <!-- Modal Header -->
                                        <div class=\"modal-header-warning\">
                                            <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <h4 class=\"modal-title\">Eliminar Usuario</h4>
                                        </div>

                                        <!-- Modal body -->
                                        <div class=\"modal-body\">
                                            ¿Desea Eliminar a ";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "iup", []), "html", null, true);
            echo " ?
                                        </div>
                                        <!-- Modal footer -->
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_usuario", ["id" => $this->getAttribute($context["usuario"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\">Si</a></button>                          
                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            ";
            // line 166
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
            // line 167
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "            </tbody>
        </table>

        ";
        // line 173
        echo "        ";
        $context["limite"] = 6;
        // line 174
        echo "        ";
        $context["extremos"] = 2;
        // line 175
        echo "
        ";
        // line 176
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < ($context["limite"] ?? $this->getContext($context, "limite")))) {
            echo " 

            ";
            // line 178
            $context["minLeftRange"] = 1;
            // line 179
            echo "            ";
            $context["maxLeftRange"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 180
            echo "            ";
            $context["minRightRange"] = (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 181
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 182
            echo "
        ";
        } elseif ((        // line 183
($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 184
            echo "            ";
            $context["minLeftRange"] = 1;
            // line 185
            echo "            ";
            $context["maxLeftRange"] = 2;
            // line 186
            echo "
            ";
            // line 187
            $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 188
            echo "            ";
            $context["extremoDerecho"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 189
            echo "            ";
            $context["minRightRange"] = ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))) + 2);
            // line 190
            echo "
            ";
            // line 191
            if ((($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) >= (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) + ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
                // line 192
                echo "                ";
                $context["minRightRange"] = ($context["thisPage"] ?? $this->getContext($context, "thisPage"));
                // line 193
                echo "                ";
                $context["extremoDerecho"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
                // line 194
                echo "                ";
                $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - (($context["extremos"] ?? $this->getContext($context, "extremos")) * 2));
                // line 195
                echo "            ";
            }
            // line 196
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 197
            echo "        ";
        }
        // line 198
        echo "
        <div class=\"pagination\" >
            <li><a class=\"page-link\" href=\"";
        // line 200
        (((0 < (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1)]), "html", null, true))) : (print ("")));
        echo "\">Anterior</a></li>

            ";
        // line 202
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - 1))) {
            // line 203
            echo "                ";
            $context["maxLeftRange"] = (($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange")) - 1);
            // line 204
            echo "            ";
        } elseif (((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages"))) && (($context["thisPage"] ?? $this->getContext($context, "thisPage")) != ($context["minRightRange"] ?? $this->getContext($context, "minRightRange"))))) {
            // line 205
            echo "                ";
            $context["maxLeftRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 206
            echo "            ";
        }
        // line 207
        echo "
            ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["minLeftRange"] ?? $this->getContext($context, "minLeftRange")), ($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 209
            echo "                <li class=\"page-item ";
            echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
            echo " \">
                    <a class=\"page-link\"  href=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "
            ";
        // line 214
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 215
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                ";
            // line 218
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 1))) {
                // line 219
                echo "                    ";
                $context["extremoDerecho"] = (($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) - 1);
                // line 220
                echo "                ";
            }
            // line 221
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["extremoIzquierdo"] ?? $this->getContext($context, "extremoIzquierdo")), ($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                    
                    <li class=\"page-item ";
                // line 222
                echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
                echo " \">
                        <a class=\"page-link\"  href=\"";
                // line 223
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "            ";
        }
        // line 227
        echo "
            ";
        // line 228
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 2))) {
            // line 229
            echo "                ";
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) != (($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange")) - 3))) {
                // line 230
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                ";
            }
            // line 234
            echo "            ";
        }
        // line 235
        echo "
            ";
        // line 236
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
            // line 237
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minRightRange"] ?? $this->getContext($context, "minRightRange")), ($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"";
                // line 239
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "            ";
        }
        echo "            

            ";
        // line 244
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 245
            echo "
            ";
        } else {
            // line 247
            echo "                ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 248
            echo "            ";
        }
        // line 249
        echo "            <li><a class=\"page-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
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

        \$('#usuario_filter_persona').autocompleter({
            url_list: \"";
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_search");
        echo "\",
            url_get: \"";
        // line 266
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
        return "Usuario/listadoUsuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 266,  606 => 265,  586 => 249,  583 => 248,  580 => 247,  576 => 245,  574 => 244,  568 => 242,  557 => 239,  549 => 237,  547 => 236,  544 => 235,  541 => 234,  535 => 230,  532 => 229,  530 => 228,  527 => 227,  524 => 226,  513 => 223,  509 => 222,  502 => 221,  499 => 220,  496 => 219,  494 => 218,  489 => 215,  487 => 214,  484 => 213,  473 => 210,  468 => 209,  464 => 208,  461 => 207,  458 => 206,  455 => 205,  452 => 204,  449 => 203,  447 => 202,  442 => 200,  438 => 198,  435 => 197,  432 => 196,  429 => 195,  426 => 194,  423 => 193,  420 => 192,  418 => 191,  415 => 190,  412 => 189,  409 => 188,  407 => 187,  404 => 186,  401 => 185,  398 => 184,  396 => 183,  393 => 182,  390 => 181,  387 => 180,  384 => 179,  382 => 178,  377 => 176,  374 => 175,  371 => 174,  368 => 173,  363 => 169,  356 => 167,  354 => 166,  344 => 159,  337 => 155,  322 => 143,  315 => 139,  311 => 137,  306 => 135,  304 => 134,  299 => 131,  294 => 130,  290 => 128,  288 => 127,  285 => 126,  283 => 125,  280 => 124,  278 => 123,  274 => 122,  271 => 121,  266 => 120,  264 => 119,  250 => 107,  243 => 102,  236 => 98,  232 => 96,  230 => 95,  227 => 94,  218 => 91,  215 => 90,  211 => 89,  208 => 88,  199 => 85,  196 => 84,  192 => 83,  179 => 73,  173 => 70,  169 => 69,  157 => 60,  152 => 58,  148 => 57,  141 => 53,  136 => 51,  132 => 50,  125 => 46,  120 => 44,  116 => 43,  109 => 39,  104 => 37,  100 => 36,  94 => 33,  83 => 25,  60 => 4,  51 => 3,  29 => 1,);
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
                        <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Usuarios ( Haga click aquí para expandir )
                    </button>
                    <a href=\"{{ path('nuevo_usuario') }}\" 
                       role=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-user-plus\"></i>&ensp;Nuevo Usuario</a>
                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        {{ form_errors(formUsuarioFilter) }}
                        <div class=\"row\">
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formUsuarioFilter.dependencia, 'DEPENDENCIA') }}
                                {{ form_widget(formUsuarioFilter.dependencia) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formUsuarioFilter.dependencia) }}
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formUsuarioFilter.iup, 'USUARIO') }}
                                {{ form_widget(formUsuarioFilter.iup) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formUsuarioFilter.iup) }}
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formUsuarioFilter.role, 'ROL') }}
                                {{ form_widget(formUsuarioFilter.role) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formUsuarioFilter.role) }}
                                </div>
                            </div>  
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formUsuarioFilter.persona, 'NOMBRE RESPONSABLE') }}
                                {{ form_widget(formUsuarioFilter.persona) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formUsuarioFilter.persona) }}
                                </div>
                            </div>              

                        </div>

                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                {{ form_widget(formUsuarioFilter.filter) }}
                                {{ form_widget(formUsuarioFilter.reset) }}
                            </div>
                        </div>
                        {{ form_end(formUsuarioFilter) }}

                    </form>

                </div>
            </div>
        </div>

        <hr/>

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}

        {% for message in app.flashes('danger') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}
        
        {% if usuarios|length >0 %}
            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: {{ usuarios|length }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
                    <th scope=\"col\">USUARIO</th>
                    <th scope=\"col\">ROL</th>
                    <th scope=\"col\">PERSONA RESPONSBLE</th>
                    <th scope=\"col\">DEPENDENCIA</th>
                    <th scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                {% set count = 0 %}
                {% for usuario in usuarios|reverse %}
                    <tr>
                        <td class=\"text-default\">{{usuario.iup|e }}</td>
                        {% if usuario.role == 'ROLE_ADMIN' %}
                            <td class=\"text-default\"><p>Administrador</p></td>
                        {% elseif usuario.role == 'ROLE_RESPONSABLE' %}
                            <td class=\"text-default\"><p>Responsble de M. E.</p></td>
                        {% elseif usuario.role == 'ROLE_USER'%}
                            <td class=\"text-default\"><p>Usuario</p></td>
                        {% endif %}
                        <td class=\"text-default\">{{usuario.persona|e }}</td>
                        <td class=\"text-default\">{{usuario.persona.dependencia.descripcion|e }}</td>

                        {#   <td><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente.id}) }}\"  role=\"button\"><i class=\"fas fa-search\"></i></a>#}
                        {#                        <td><a class=\"btn btn-info\" href=\"{{ path(\"editar_usuario\", {'id':usuario.id}) }}\"  role=\"button\"><i class=\"fas fa-search\"></i></a>#}
                        <td> <a class=\"btn btn-warning\" href=\"{{ path(\"editar_usuario\", {'id':usuario.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                                {#                            <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_usuario\", {'id':usuario.id}) }}\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>#}


                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal{{ count }}\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                            <!-- The Modal -->
                            <div class=\"modal fade\" id=\"myModal{{count}}\">
                                <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                    <div class=\"modal-content\">

                                        <!-- Modal Header -->
                                        <div class=\"modal-header-warning\">
                                            <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <h4 class=\"modal-title\">Eliminar Usuario</h4>
                                        </div>

                                        <!-- Modal body -->
                                        <div class=\"modal-body\">
                                            ¿Desea Eliminar a {{usuario.iup}} ?
                                        </div>
                                        <!-- Modal footer -->
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"{{ path(\"eliminar_usuario\", {'id':usuario.id}) }}\"  role=\"button\">Si</a></button>                          
                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
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
            <li><a class=\"page-link\" href=\"{{ 0 < thisPage-1 ? path('listado_usuario', {\"currentPage\": thisPage-1}) }}\">Anterior</a></li>

            {%if thisPage == maxPages-1%}
                {%set maxLeftRange = maxLeftRange-1%}
            {%elseif thisPage == maxPages and thisPage != minRightRange%}
                {%set maxLeftRange = maxPages%}
            {%endif%}

            {% for i in minLeftRange..maxLeftRange %}
                <li class=\"page-item {{  i == thisPage ? 'active' : '' }} \">
                    <a class=\"page-link\"  href=\"{{ path('listado_usuario', {\"currentPage\": i}) }}\">{{ i }}</a>
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
                    <li class=\"page-item {{  i == thisPage ? 'active' : '' }} \">
                        <a class=\"page-link\"  href=\"{{ path('listado_usuario', {\"currentPage\": i}) }}\">{{ i }}</a>
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
                        <a class=\"page-link\"  href=\"{{ path('listado_usuario', {\"currentPage\": i}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
            {%endif%}            

            {%if (page==maxPages)%}

            {%else%}
                {%set page= page+1%}
            {%endif%}
            <li><a class=\"page-link\" href=\"{{ path('listado_usuario', {\"currentPage\": page}) }}\">Siguiente</a></li>

            </ul>
        </div>


    </div>
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

    <script>

        \$('#usuario_filter_persona').autocompleter({
            url_list: \"{{ path('persona_search') }}\",
            url_get: \"{{ path('persona_get') }}\"
        });
    </script>
    <hr/>
{% endblock %}", "Usuario/listadoUsuarios.html.twig", "/var/www/html/SIE/app/Resources/views/Usuario/listadoUsuarios.html.twig");
    }
}
