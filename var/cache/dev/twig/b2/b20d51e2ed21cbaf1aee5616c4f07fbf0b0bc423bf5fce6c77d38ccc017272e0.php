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

/* AppBundle:Ubicacion:listadoPersona.html.twig */
class __TwigTemplate_1589bfab07a73fbe8e84db8dd0881de74672307661fe2cbf0f70821979244197 extends \Twig\Template
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
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Ubicacion:listadoPersona.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Ubicacion:listadoPersona.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Ubicacion:listadoPersona.html.twig", 1);
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
    </style>

    <div class=\"content\">
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingOne\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Persona
                    </button>
                    <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_persona");
        echo "\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nueva Persona</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), 'errors');
        echo "
                        <div class=\"row\">
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
        echo "
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'label', ["label" => "APELLIDO"]);
        echo "
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'label', ["label" => "NOMBRE"]);
        echo "
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'errors');
        echo "
                                </div>
                            </div>                  
                            <div class=\"twocol col-lg-3\">
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'label', ["label" => "DOCUMENTO"]);
        echo "
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'errors');
        echo "
                                </div>
                            </div>   
                            <div class=\"twocol col-lg-3\">
                                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'label', ["label" => "CARGO"]);
        echo "
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'errors');
        echo "
                                </div>
                            </div>                          
                        </div>      
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), 'form_end');
        echo "
                    </form>
                </div>
            </div>
        </div>

        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 124
            echo "            <div class=\"alert alert-success\">
                ";
            // line 125
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
            <hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "
        ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 131
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 132
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
            <hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
        <hr/>
        ";
        // line 138
        if ((twig_length_filter($this->env, ($context["personas"] ?? $this->getContext($context, "personas"))) > 0)) {
            // line 139
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
            // line 151
            $context["count"] = 0;
            // line 152
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["personas"] ?? $this->getContext($context, "personas")));
            foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
                // line 153
                echo "                        <tr>
                            <td class=\"text-default\">";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "apellido", []));
                echo "</td>
                            <td class=\"text-default\"><p>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", []));
                echo "</p></td>
                            <td class=\"text-default\">";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "dni", []));
                echo "</td>
                            <td class=\"text-default\">";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "cargo", []));
                echo "</td>
                            <td class=\"text-default\">";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["persona"], "dependencia", []), "descripcion", []));
                echo "</td>

                            <td> <a class=\"btn btn-warning\" href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                               

                                ";
                // line 163
                $context["accion_responsable"] = false;
                // line 164
                echo "                                ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                    // line 165
                    echo "                                    ";
                    $context["accion_responsable"] = true;
                    // line 166
                    echo "                                ";
                }
                // line 167
                echo "                                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["persona"], "responsables", [])) > 0)) {
                    // line 168
                    echo "                                    ";
                    if ((($this->getAttribute($context["persona"], "usuario", []) != null) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["persona"], "responsables", []), 0, [], "array"), "usuario", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                        // line 169
                        echo "                                        ";
                        $context["accion_responsable"] = true;
                        // line 170
                        echo "                                    ";
                    }
                    // line 171
                    echo "                                ";
                }
                // line 172
                echo "                                ";
                if ((($context["accion_responsable"] ?? $this->getContext($context, "accion_responsable")) == true)) {
                    // line 173
                    echo "                                    <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionar_persona_responsables", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                    echo "\"  role=\"button\"><i class=\"fas fa-user\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Responsables\"></i></a>
                                ";
                }
                // line 175
                echo "                                 <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    
                                <!-- The Modal -->
                                <div class=\"modal fade\" id=\"myModal";
                // line 177
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
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "apellido", []), "html", null, true);
                echo "?
                                            </div>
                                            <!-- Modal footer -->
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\">Si</a></button>                          
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                ";
                // line 201
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 202
                echo "                        </tr>             
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "

                </tbody>
            </table>
        ";
        }
        // line 208
        echo "       
        ";
        // line 209
        if ((twig_length_filter($this->env, ($context["personas"] ?? $this->getContext($context, "personas"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 210
            echo "            <div class=\"row\">
                <ul class=\"pagination\">
                    ";
            // line 212
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
                    ";
            } else {
                // line 214
                echo "                        ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 215
                echo "                    ";
            }
            // line 216
            echo "
                    <li ><a class=\"page-link\" href=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                        ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 219
                echo "                        <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "
                    ";
            // line 222
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 223
                echo "
                    ";
            } else {
                // line 225
                echo "                        ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 226
                echo "                    ";
            }
            // line 227
            echo "                    <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

                </ul>
            </div>
        </div>
    ";
        }
        // line 233
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
        return "AppBundle:Ubicacion:listadoPersona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 233,  484 => 227,  481 => 226,  478 => 225,  474 => 223,  472 => 222,  469 => 221,  458 => 219,  454 => 218,  450 => 217,  447 => 216,  444 => 215,  441 => 214,  436 => 212,  432 => 210,  430 => 209,  427 => 208,  420 => 204,  413 => 202,  411 => 201,  400 => 193,  391 => 189,  376 => 177,  370 => 175,  364 => 173,  361 => 172,  358 => 171,  355 => 170,  352 => 169,  349 => 168,  346 => 167,  343 => 166,  340 => 165,  337 => 164,  335 => 163,  329 => 160,  324 => 158,  320 => 157,  316 => 156,  312 => 155,  308 => 154,  305 => 153,  300 => 152,  298 => 151,  284 => 139,  282 => 138,  278 => 136,  268 => 132,  265 => 131,  261 => 130,  258 => 129,  248 => 125,  245 => 124,  241 => 123,  232 => 117,  226 => 114,  222 => 113,  213 => 107,  208 => 105,  204 => 104,  197 => 100,  192 => 98,  188 => 97,  181 => 93,  176 => 91,  172 => 90,  165 => 86,  160 => 84,  156 => 83,  149 => 79,  144 => 77,  140 => 76,  134 => 73,  122 => 64,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}

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
        {% if personas|length < totalItems %}
            <div class=\"row\">
                <ul class=\"pagination\">
                    {%if (thisPage==1)%}           
                    {%else%}
                        {%set thisPage= thisPage-1%}
                    {%endif%}

                    <li ><a class=\"page-link\" href=\"{{ path('listado_persona', {\"currentPage\": thisPage}) }}\">&laquo</a></li>
                        {% for i in 1..maxPages %}
                        <li><a class=\"page-link\"  href=\"{{ path('listado_persona', {\"currentPage\": i}) }}\">{{ i }}</a></li>
                        {% endfor %}

                    {%if (page==maxPages)%}

                    {%else%}
                        {%set page= page+1%}
                    {%endif%}
                    <li><a class=\"page-link\" href=\"{{ path('listado_persona', {\"currentPage\": page}) }}\">&raquo</a></li>

                </ul>
            </div>
        </div>
    {% endif %}

</div>
<script>
    \$(function () {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    })
</script>

<hr/>
{% endblock %}", "AppBundle:Ubicacion:listadoPersona.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Ubicacion/listadoPersona.html.twig");
    }
}
