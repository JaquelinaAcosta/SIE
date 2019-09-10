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

/* Ubicacion/listadoPersona.html.twig */
class __TwigTemplate_1730990c3bdc6d2d20e9c6c9c36a954b9000b822939268071ad77e7e35b26ac3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Ubicacion/listadoPersona.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Ubicacion/listadoPersona.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Ubicacion/listadoPersona.html.twig", 1);
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
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingOne\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Personas ( Haga click aquí para expandir )
                    </button>
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_persona");
        echo "\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nueva Persona</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), 'errors');
        echo "
                        <div class=\"row\">
                            <div class=\"threecol col-lg-6\">
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
        echo "
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'errors');
        echo "
                                </div>
                            </div>
                                <div class=\"col-lg-6\"></div>
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'label', ["label" => "APELLIDO"]);
        echo "
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'label', ["label" => "NOMBRE"]);
        echo "
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'errors');
        echo "
                                </div>
                            </div>                  
                            <div class=\"twocol col-lg-3\">
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'label', ["label" => "DOCUMENTO"]);
        echo "
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'errors');
        echo "
                                </div>
                            </div>   
                            <div class=\"twocol col-lg-3\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'label', ["label" => "CARGO"]);
        echo "
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'errors');
        echo "
                                </div>
                            </div>                          
                        </div>      
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), 'form_end');
        echo "
                    </form>
                </div>
            </div>
        </div>

        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 86
            echo "            <hr/>
            <div class=\"alert alert-success\">
                ";
            // line 88
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
            <hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 94
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 95
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
        ";
        // line 99
        if ((twig_length_filter($this->env, ($context["personas"] ?? $this->getContext($context, "personas"))) > 0)) {
            // line 100
            echo "            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: ";
            // line 102
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["personas"] ?? $this->getContext($context, "personas"))), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        ";
        } else {
            // line 106
            echo "            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Búsqueda con 0 resultados! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        ";
        }
        // line 111
        echo "        
        ";
        // line 112
        if ((twig_length_filter($this->env, ($context["personas"] ?? $this->getContext($context, "personas"))) > 0)) {
            // line 113
            echo "            <table class=\"table table-striped\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">APELLIDO</th>
                        <th scope=\"col\">NOMBRE</th>
                        <th scope=\"col\">DNI</th>
                        <th scope=\"col\">CARGO</th>
                        <th scope=\"col\">DEPENDENCIA</th>
                        <th scope=\"col\">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 125
            $context["count"] = 0;
            // line 126
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["personas"] ?? $this->getContext($context, "personas")));
            foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
                // line 127
                echo "                        <tr>
                            <td class=\"text-default\">";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "apellido", []));
                echo "</td>
                            <td class=\"text-default\"><p>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", []));
                echo "</p></td>
                            <td class=\"text-default\">";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "dni", []));
                echo "</td>
                            <td class=\"text-default\">";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "cargo", []));
                echo "</td>
                            <td class=\"text-default\">";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["persona"], "dependencia", []), "descripcion", []));
                echo "</td>

                            <td> <a class=\"btn btn-warning\" href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>


                                ";
                // line 137
                $context["accion_responsable"] = false;
                // line 138
                echo "                                ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                    // line 139
                    echo "                                    ";
                    $context["accion_responsable"] = true;
                    // line 140
                    echo "                                ";
                }
                // line 141
                echo "                                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["persona"], "responsables", [])) > 0)) {
                    // line 142
                    echo "                                    ";
                    if ((($this->getAttribute($context["persona"], "usuario", []) != null) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["persona"], "responsables", []), 0, [], "array"), "usuario", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                        // line 143
                        echo "                                        ";
                        $context["accion_responsable"] = true;
                        // line 144
                        echo "                                    ";
                    }
                    // line 145
                    echo "                                ";
                }
                // line 146
                echo "                                ";
                if ((($context["accion_responsable"] ?? $this->getContext($context, "accion_responsable")) == true)) {
                    // line 147
                    echo "                                    <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionar_persona_responsables", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                    echo "\"  role=\"button\"><i class=\"fas fa-user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Responsables\"></i></a>
                                    ";
                }
                // line 149
                echo "                                <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    
                                <!-- The Modal -->
                                <div class=\"modal fade\" id=\"myModal";
                // line 151
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">
                                    <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                        <div class=\"modal-content\">

                                            <!-- Modal Header -->
                                            <div class=\"modal-header-warning\">
                                                <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\">Eliminar Persona</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <div class=\"modal-body\">
                                                ¿Desea Eliminar a ";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "apellido", []), "html", null, true);
                echo "?
                                            </div>
                                            <!-- Modal footer -->
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                // line 167
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\">Si</a></button>                          
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                ";
                // line 175
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 176
                echo "                        </tr>             
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "                </tbody>
            </table>
        ";
        }
        // line 180
        echo "    


        ";
        // line 184
        echo "        ";
        $context["limite"] = 6;
        // line 185
        echo "        ";
        $context["extremos"] = 2;
        // line 186
        echo "
        ";
        // line 187
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < ($context["limite"] ?? $this->getContext($context, "limite")))) {
            echo " 

            ";
            // line 189
            $context["minLeftRange"] = 1;
            // line 190
            echo "            ";
            $context["maxLeftRange"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 191
            echo "            ";
            $context["minRightRange"] = (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 192
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 193
            echo "
        ";
        } elseif ((        // line 194
($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 195
            echo "            ";
            $context["minLeftRange"] = 1;
            // line 196
            echo "            ";
            $context["maxLeftRange"] = 2;
            // line 197
            echo "
            ";
            // line 198
            $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 199
            echo "            ";
            $context["extremoDerecho"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 200
            echo "            ";
            $context["minRightRange"] = ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))) + 2);
            // line 201
            echo "
            ";
            // line 202
            if ((($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) >= (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) + ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
                // line 203
                echo "                ";
                $context["minRightRange"] = ($context["thisPage"] ?? $this->getContext($context, "thisPage"));
                // line 204
                echo "                ";
                $context["extremoDerecho"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
                // line 205
                echo "                ";
                $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - (($context["extremos"] ?? $this->getContext($context, "extremos")) * 2));
                // line 206
                echo "            ";
            }
            // line 207
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 208
            echo "        ";
        }
        // line 209
        echo "

        <div class=\"pagination\">
            <li><a class=\"page-link\" href=\"";
        // line 212
        (((0 < (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1)]), "html", null, true))) : (print ("")));
        echo "\">Anterior</a></li>

            ";
        // line 214
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - 1))) {
            // line 215
            echo "                ";
            $context["maxLeftRange"] = (($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange")) - 1);
            // line 216
            echo "            ";
        } elseif (((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages"))) && (($context["thisPage"] ?? $this->getContext($context, "thisPage")) != ($context["minRightRange"] ?? $this->getContext($context, "minRightRange"))))) {
            // line 217
            echo "                ";
            $context["maxLeftRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 218
            echo "            ";
        }
        // line 219
        echo "

            ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["minLeftRange"] ?? $this->getContext($context, "minLeftRange")), ($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 222
            echo "                <li class=\"page-item ";
            echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
            echo "\">
                    <a class=\"page-link\"  href=\"";
            // line 223
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => $context["i"]]), "html", null, true);
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
        echo "
            ";
        // line 227
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 228
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                ";
            // line 231
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 1))) {
                // line 232
                echo "                    ";
                $context["extremoDerecho"] = (($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) - 1);
                // line 233
                echo "                ";
            }
            // line 234
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["extremoIzquierdo"] ?? $this->getContext($context, "extremoIzquierdo")), ($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                    
                    <li class=\"page-item ";
                // line 235
                echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
                echo "\">
                        <a class=\"page-link\"  href=\"";
                // line 236
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "            ";
        }
        // line 240
        echo "
            ";
        // line 241
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 2))) {
            // line 242
            echo "                ";
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) != (($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange")) - 3))) {
                // line 243
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                ";
            }
            // line 247
            echo "            ";
        }
        // line 248
        echo "
            ";
        // line 249
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
            // line 250
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minRightRange"] ?? $this->getContext($context, "minRightRange")), ($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"";
                // line 252
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "            ";
        }
        echo "            

            ";
        // line 257
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 258
            echo "
            ";
        } else {
            // line 260
            echo "                ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 261
            echo "            ";
        }
        // line 262
        echo "            <li><a class=\"page-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
        echo "\">Siguiente</a></li>

            </ul>
        </div>


    </div>
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
        return "Ubicacion/listadoPersona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 262,  631 => 261,  628 => 260,  624 => 258,  622 => 257,  616 => 255,  605 => 252,  597 => 250,  595 => 249,  592 => 248,  589 => 247,  583 => 243,  580 => 242,  578 => 241,  575 => 240,  572 => 239,  561 => 236,  557 => 235,  550 => 234,  547 => 233,  544 => 232,  542 => 231,  537 => 228,  535 => 227,  532 => 226,  521 => 223,  516 => 222,  512 => 221,  508 => 219,  505 => 218,  502 => 217,  499 => 216,  496 => 215,  494 => 214,  489 => 212,  484 => 209,  481 => 208,  478 => 207,  475 => 206,  472 => 205,  469 => 204,  466 => 203,  464 => 202,  461 => 201,  458 => 200,  455 => 199,  453 => 198,  450 => 197,  447 => 196,  444 => 195,  442 => 194,  439 => 193,  436 => 192,  433 => 191,  430 => 190,  428 => 189,  423 => 187,  420 => 186,  417 => 185,  414 => 184,  409 => 180,  404 => 178,  397 => 176,  395 => 175,  384 => 167,  375 => 163,  360 => 151,  354 => 149,  348 => 147,  345 => 146,  342 => 145,  339 => 144,  336 => 143,  333 => 142,  330 => 141,  327 => 140,  324 => 139,  321 => 138,  319 => 137,  313 => 134,  308 => 132,  304 => 131,  300 => 130,  296 => 129,  292 => 128,  289 => 127,  284 => 126,  282 => 125,  268 => 113,  266 => 112,  263 => 111,  256 => 106,  249 => 102,  245 => 100,  243 => 99,  240 => 98,  231 => 95,  228 => 94,  224 => 93,  221 => 92,  211 => 88,  207 => 86,  203 => 85,  194 => 79,  188 => 76,  184 => 75,  175 => 69,  170 => 67,  166 => 66,  159 => 62,  154 => 60,  150 => 59,  143 => 55,  138 => 53,  134 => 52,  127 => 48,  122 => 46,  118 => 45,  110 => 40,  105 => 38,  101 => 37,  95 => 34,  83 => 25,  60 => 4,  51 => 3,  29 => 1,);
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
                        <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Personas ( Haga click aquí para expandir )
                    </button>
                    <a href=\"{{ path('nueva_persona') }}\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nueva Persona</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        {{ form_errors(formPersonaFilter) }}
                        <div class=\"row\">
                            <div class=\"threecol col-lg-6\">
                                {{ form_label(formPersonaFilter.dependencia, 'DEPENDENCIA') }}
                                {{ form_widget(formPersonaFilter.dependencia) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formPersonaFilter.dependencia) }}
                                </div>
                            </div>
                                <div class=\"col-lg-6\"></div>
                            <div class=\"threecol col-lg-3\">
                                {{ form_label(formPersonaFilter.apellido, 'APELLIDO') }}
                                {{ form_widget(formPersonaFilter.apellido) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formPersonaFilter.apellido) }}
                                </div>
                            </div>
                            <div class=\"threecol col-lg-3\">
                                {{ form_label(formPersonaFilter.nombre, 'NOMBRE') }}
                                {{ form_widget(formPersonaFilter.nombre) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formPersonaFilter.nombre) }}
                                </div>
                            </div>                  
                            <div class=\"twocol col-lg-3\">
                                {{ form_label(formPersonaFilter.dni, 'DOCUMENTO') }}
                                {{ form_widget(formPersonaFilter.dni) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formPersonaFilter.dni) }}
                                </div>
                            </div>   
                            <div class=\"twocol col-lg-3\">
                                {{ form_label(formPersonaFilter.cargo, 'CARGO') }}
                                {{ form_widget(formPersonaFilter.cargo) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formPersonaFilter.cargo) }}
                                </div>
                            </div>                          
                        </div>      
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                {{ form_widget(formPersonaFilter.filter) }}
                                {{ form_widget(formPersonaFilter.reset) }}
                            </div>
                        </div>
                        {{ form_end(formPersonaFilter) }}
                    </form>
                </div>
            </div>
        </div>

        {% for message in app.flashes('success') %}
            <hr/>
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
            <hr/>
        {% endfor %}

        {% for message in app.flashes('danger') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}

        {% if personas|length >0 %}
            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: {{ personas|length }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        {% else %}
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Búsqueda con 0 resultados! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        {%endif%}
        
        {% if personas|length >0 %}
            <table class=\"table table-striped\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">APELLIDO</th>
                        <th scope=\"col\">NOMBRE</th>
                        <th scope=\"col\">DNI</th>
                        <th scope=\"col\">CARGO</th>
                        <th scope=\"col\">DEPENDENCIA</th>
                        <th scope=\"col\">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    {% set count = 0 %}
                    {% for persona in personas %}
                        <tr>
                            <td class=\"text-default\">{{persona.apellido|e }}</td>
                            <td class=\"text-default\"><p>{{persona.nombre|e }}</p></td>
                            <td class=\"text-default\">{{persona.dni|e }}</td>
                            <td class=\"text-default\">{{persona.cargo|e }}</td>
                            <td class=\"text-default\">{{persona.dependencia.descripcion|e }}</td>

                            <td> <a class=\"btn btn-warning\" href=\"{{ path(\"editar_persona\", {'id':persona.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>


                                {% set accion_responsable = false %}
                                {% if app.user.role == 'ROLE_ADMIN' %}
                                    {% set accion_responsable = true %}
                                {% endif%}
                                {% if persona.responsables|length>0%}
                                    {% if persona.usuario != null and persona.responsables[0].usuario == app.user %}
                                        {% set accion_responsable = true %}
                                    {% endif %}
                                {%endif%}
                                {% if accion_responsable == true %}
                                    <a class=\"btn btn-info\" href=\"{{ path(\"gestionar_persona_responsables\", {'id':persona.id}) }}\"  role=\"button\"><i class=\"fas fa-user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Responsables\"></i></a>
                                    {%endif%}
                                <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal{{ count }}\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    
                                <!-- The Modal -->
                                <div class=\"modal fade\" id=\"myModal{{count}}\">
                                    <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                        <div class=\"modal-content\">

                                            <!-- Modal Header -->
                                            <div class=\"modal-header-warning\">
                                                <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\">Eliminar Persona</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <div class=\"modal-body\">
                                                ¿Desea Eliminar a {{persona.nombre}} {{ persona.apellido}}?
                                            </div>
                                            <!-- Modal footer -->
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"{{ path(\"eliminar_persona\", {'id':persona.id}) }}\"  role=\"button\">Si</a></button>                          
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
        {% endif %}    


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
            <li><a class=\"page-link\" href=\"{{ 0 < thisPage-1 ? path('listado_persona', {\"currentPage\": thisPage-1}) }}\">Anterior</a></li>

            {%if thisPage == maxPages-1%}
                {%set maxLeftRange = maxLeftRange-1%}
            {%elseif thisPage == maxPages and thisPage != minRightRange%}
                {%set maxLeftRange = maxPages%}
            {%endif%}


            {% for i in minLeftRange..maxLeftRange %}
                <li class=\"page-item {{  i == thisPage ? 'active' : '' }}\">
                    <a class=\"page-link\"  href=\"{{ path('listado_persona', {\"currentPage\": i}) }}\">{{ i }}</a>
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
                        <a class=\"page-link\"  href=\"{{ path('listado_persona', {\"currentPage\": i}) }}\">{{ i }}</a>
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
                        <a class=\"page-link\"  href=\"{{ path('listado_persona', {\"currentPage\": i}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
            {%endif%}            

            {%if (page==maxPages)%}

            {%else%}
                {%set page= page+1%}
            {%endif%}
            <li><a class=\"page-link\" href=\"{{ path('listado_persona', {\"currentPage\": page}) }}\">Siguiente</a></li>

            </ul>
        </div>


    </div>
</div>
<script>
    \$(function () {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    })
</script>

<hr/>
{% endblock %}", "Ubicacion/listadoPersona.html.twig", "/var/www/html/SIE/app/Resources/views/Ubicacion/listadoPersona.html.twig");
    }
}
