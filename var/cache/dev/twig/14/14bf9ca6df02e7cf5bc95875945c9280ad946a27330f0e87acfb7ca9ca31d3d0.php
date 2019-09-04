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
        echo "    <style>
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;           
        }
        .expediente{
            margin-right: 12px;
            padding:15px;
        }
        .expediente p{
            margin-top:10px;
        }
        .titulo{
            height: 30px;
            padding:7px;
            background-color:black;
            color: #fff;
        }
        .panel{
            font-size: 15px; 
            margin-bottom: 20px;
            margin-right: 20px;
        }
        .form-exp{
            font-size:15px;
            padding:10px;
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
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Persona
                    </button>
                    <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_persona");
        echo "\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nueva Persona</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), 'errors');
        echo "
                        <div class=\"row\">
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
        echo "
                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'label', ["label" => "APELLIDO"]);
        echo "
                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'label', ["label" => "NOMBRE"]);
        echo "
                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'errors');
        echo "
                                </div>
                            </div>                  
                            <div class=\"twocol col-lg-3\">
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'label', ["label" => "DOCUMENTO"]);
        echo "
                                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'errors');
        echo "
                                </div>
                            </div>   
                            <div class=\"twocol col-lg-3\">
                                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'label', ["label" => "CARGO"]);
        echo "
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'errors');
        echo "
                                </div>
                            </div>                          
                        </div>      
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), 'form_end');
        echo "
                    </form>
                </div>
            </div>
        </div>

        ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 147
            echo "            <div class=\"alert alert-success\">
                ";
            // line 148
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
            <hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "
        ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 154
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 155
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
            <hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "
        <hr/>
        ";
        // line 161
        if ((twig_length_filter($this->env, ($context["personas"] ?? $this->getContext($context, "personas"))) > 0)) {
            // line 162
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
            // line 174
            $context["count"] = 0;
            // line 175
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["personas"] ?? $this->getContext($context, "personas")));
            foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
                // line 176
                echo "                        <tr>
                            <td class=\"text-default\">";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "apellido", []));
                echo "</td>
                            <td class=\"text-default\"><p>";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", []));
                echo "</p></td>
                            <td class=\"text-default\">";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "dni", []));
                echo "</td>
                            <td class=\"text-default\">";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "cargo", []));
                echo "</td>
                            <td class=\"text-default\">";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["persona"], "dependencia", []), "descripcion", []));
                echo "</td>

                            <td> <a class=\"btn btn-warning\" href=\"";
                // line 183
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>


                                ";
                // line 186
                $context["accion_responsable"] = false;
                // line 187
                echo "                                ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                    // line 188
                    echo "                                    ";
                    $context["accion_responsable"] = true;
                    // line 189
                    echo "                                ";
                }
                // line 190
                echo "                                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["persona"], "responsables", [])) > 0)) {
                    // line 191
                    echo "                                    ";
                    if ((($this->getAttribute($context["persona"], "usuario", []) != null) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["persona"], "responsables", []), 0, [], "array"), "usuario", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                        // line 192
                        echo "                                        ";
                        $context["accion_responsable"] = true;
                        // line 193
                        echo "                                    ";
                    }
                    // line 194
                    echo "                                ";
                }
                // line 195
                echo "                                ";
                if ((($context["accion_responsable"] ?? $this->getContext($context, "accion_responsable")) == true)) {
                    // line 196
                    echo "                                    <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionar_persona_responsables", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                    echo "\"  role=\"button\"><i class=\"fas fa-user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Responsables\"></i></a>
                                    ";
                }
                // line 198
                echo "                                <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    
                                <!-- The Modal -->
                                <div class=\"modal fade\" id=\"myModal";
                // line 200
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
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "apellido", []), "html", null, true);
                echo "?
                                            </div>
                                            <!-- Modal footer -->
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\">Si</a></button>                          
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                ";
                // line 224
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 225
                echo "                        </tr>             
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "

                </tbody>
            </table>
        ";
        }
        // line 231
        echo "       

        ";
        // line 233
        $context["limite"] = 6;
        // line 234
        echo "        ";
        $context["extremos"] = 2;
        // line 235
        echo "
        ";
        // line 236
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < ($context["limite"] ?? $this->getContext($context, "limite")))) {
            echo " 

            ";
            // line 238
            $context["minLeftRange"] = 1;
            // line 239
            echo "            ";
            $context["maxLeftRange"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 240
            echo "            ";
            $context["minRightRange"] = (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 241
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 242
            echo "
        ";
        } elseif ((        // line 243
($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 244
            echo "            ";
            $context["minLeftRange"] = 1;
            // line 245
            echo "            ";
            $context["maxLeftRange"] = 2;
            // line 246
            echo "
            ";
            // line 247
            $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 248
            echo "            ";
            $context["extremoDerecho"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 249
            echo "            ";
            $context["minRightRange"] = ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))) + 2);
            // line 250
            echo "
            ";
            // line 251
            if ((($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) >= (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) + ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
                // line 252
                echo "                ";
                $context["minRightRange"] = ($context["thisPage"] ?? $this->getContext($context, "thisPage"));
                // line 253
                echo "                ";
                $context["extremoDerecho"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
                // line 254
                echo "                ";
                $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - (($context["extremos"] ?? $this->getContext($context, "extremos")) * 2));
                // line 255
                echo "            ";
            }
            // line 256
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 257
            echo "        ";
        }
        // line 258
        echo "

        <div class=\"pagination\">
            <li><a class=\"page-link\" href=\"";
        // line 261
        (((0 < (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1)]), "html", null, true))) : (print ("")));
        echo "\">Anterior</a></li>

            ";
        // line 263
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - 1))) {
            // line 264
            echo "                ";
            $context["maxLeftRange"] = (($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange")) - 1);
            // line 265
            echo "            ";
        } elseif ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 266
            echo "                ";
            $context["maxLeftRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 267
            echo "            ";
        }
        // line 268
        echo "            
            
            ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["minLeftRange"] ?? $this->getContext($context, "minLeftRange")), ($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 271
            echo "                <li class=\"page-item ";
            echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
            echo "\">
                    <a class=\"page-link\"  href=\"";
            // line 272
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
        // line 275
        echo "
            ";
        // line 276
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 277
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                ";
            // line 280
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 1))) {
                // line 281
                echo "                    ";
                $context["extremoDerecho"] = (($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) - 1);
                // line 282
                echo "                ";
            }
            // line 283
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["extremoIzquierdo"] ?? $this->getContext($context, "extremoIzquierdo")), ($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                    
                    <li class=\"page-item ";
                // line 284
                echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
                echo "\">
                        <a class=\"page-link\"  href=\"";
                // line 285
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
            // line 288
            echo "            ";
        }
        // line 289
        echo "
            ";
        // line 290
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 2))) {
            // line 291
            echo "                ";
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) != (($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange")) - 3))) {
                // line 292
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                ";
            }
            // line 296
            echo "            ";
        }
        // line 297
        echo "
            ";
        // line 298
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
            // line 299
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minRightRange"] ?? $this->getContext($context, "minRightRange")), ($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"";
                // line 301
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
            // line 304
            echo "            ";
        }
        echo "            

            ";
        // line 306
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 307
            echo "
            ";
        } else {
            // line 309
            echo "                ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 310
            echo "            ";
        }
        // line 311
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
        return array (  673 => 311,  670 => 310,  667 => 309,  663 => 307,  661 => 306,  655 => 304,  644 => 301,  636 => 299,  634 => 298,  631 => 297,  628 => 296,  622 => 292,  619 => 291,  617 => 290,  614 => 289,  611 => 288,  600 => 285,  596 => 284,  589 => 283,  586 => 282,  583 => 281,  581 => 280,  576 => 277,  574 => 276,  571 => 275,  560 => 272,  555 => 271,  551 => 270,  547 => 268,  544 => 267,  541 => 266,  538 => 265,  535 => 264,  533 => 263,  528 => 261,  523 => 258,  520 => 257,  517 => 256,  514 => 255,  511 => 254,  508 => 253,  505 => 252,  503 => 251,  500 => 250,  497 => 249,  494 => 248,  492 => 247,  489 => 246,  486 => 245,  483 => 244,  481 => 243,  478 => 242,  475 => 241,  472 => 240,  469 => 239,  467 => 238,  462 => 236,  459 => 235,  456 => 234,  454 => 233,  450 => 231,  443 => 227,  436 => 225,  434 => 224,  423 => 216,  414 => 212,  399 => 200,  393 => 198,  387 => 196,  384 => 195,  381 => 194,  378 => 193,  375 => 192,  372 => 191,  369 => 190,  366 => 189,  363 => 188,  360 => 187,  358 => 186,  352 => 183,  347 => 181,  343 => 180,  339 => 179,  335 => 178,  331 => 177,  328 => 176,  323 => 175,  321 => 174,  307 => 162,  305 => 161,  301 => 159,  291 => 155,  288 => 154,  284 => 153,  281 => 152,  271 => 148,  268 => 147,  264 => 146,  255 => 140,  249 => 137,  245 => 136,  236 => 130,  231 => 128,  227 => 127,  220 => 123,  215 => 121,  211 => 120,  204 => 116,  199 => 114,  195 => 113,  188 => 109,  183 => 107,  179 => 106,  172 => 102,  167 => 100,  163 => 99,  157 => 96,  145 => 87,  60 => 4,  51 => 3,  29 => 1,);
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
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;           
        }
        .expediente{
            margin-right: 12px;
            padding:15px;
        }
        .expediente p{
            margin-top:10px;
        }
        .titulo{
            height: 30px;
            padding:7px;
            background-color:black;
            color: #fff;
        }
        .panel{
            font-size: 15px; 
            margin-bottom: 20px;
            margin-right: 20px;
        }
        .form-exp{
            font-size:15px;
            padding:10px;
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
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Persona
                    </button>
                    <a href=\"{{ path('nueva_persona') }}\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nueva Persona</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        {{ form_errors(formPersonaFilter) }}
                        <div class=\"row\">
                            <div class=\"threecol col-lg-3\">
                                {{ form_label(formPersonaFilter.dependencia, 'DEPENDENCIA') }}
                                {{ form_widget(formPersonaFilter.dependencia) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formPersonaFilter.dependencia) }}
                                </div>
                            </div>
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

        <hr/>
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
            {%elseif thisPage == maxPages%}
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
