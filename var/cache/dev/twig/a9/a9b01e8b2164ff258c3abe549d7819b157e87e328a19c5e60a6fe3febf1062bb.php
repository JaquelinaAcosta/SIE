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

/* AppBundle:Ubicacion:listadoLugarFisico.html.twig */
class __TwigTemplate_6046505f96e5228ff3587ae9438108e1b7e25c3ebc3edff398671e3a73f648f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Ubicacion:listadoLugarFisico.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Ubicacion:listadoLugarFisico.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Ubicacion:listadoLugarFisico.html.twig", 1);
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
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Lugares
                    </button>
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_lugarfisico");
        echo "\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nuevo Lugar</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), 'errors');
        echo "
                        <div class=\"row\">

                            ";
        // line 47
        if ($this->getAttribute(($context["formLugarFisicoFilter"] ?? null), "dependencia", [], "any", true, true)) {
            echo "                    
                                <div class=\"threecol col-lg-4\">
                                    ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
            echo "
                                    ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "dependencia", []), 'widget');
            echo "
                                    <div class=\"help-block with-errors\">
                                        ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "dependencia", []), 'errors');
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 56
        echo "
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "tipo", []), 'label', ["label" => "TIPO"]);
        echo "
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "tipo", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "tipo", []), 'errors');
        echo "
                                </div>
                            </div>  
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCIÓN"]);
        echo "
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "descripcion", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "descripcion", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), 'form_end');
        echo "

                    </form>
                </div>
            </div>
        </div>

        <hr/>
        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 88
            echo "            <div class=\"alert alert-success\">
                ";
            // line 89
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
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

        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    ";
        // line 103
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 104
            echo "                        <th scope=\"col\">Lugar de origen</th>
                        ";
        }
        // line 106
        echo "                    <th scope=\"col\">Tipo</th>
                    <th scope=\"col\">Descripción</th> 
                    <th scope=\"col\">Acceso</th>
                    <th scope=\"col\">Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 113
        $context["count"] = 0;
        // line 114
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["lugarFisico"] ?? $this->getContext($context, "lugarFisico"))));
        foreach ($context['_seq'] as $context["_key"] => $context["lugarfisico"]) {
            // line 115
            echo "                    <tr>
                        ";
            // line 116
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 117
                echo "                            <td class=\"text-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lugarfisico"], "dependencia", []), "descripcion", []));
                echo "</td>
                        ";
            }
            // line 119
            echo "                        <td class=\"text-default\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lugarfisico"], "tipo", []));
            echo "</td>
                        <td class=\"text-default\"><p>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["lugarfisico"], "descripcion", []));
            echo "</p></td>
                        <td class=\"text-default\">";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["lugarfisico"], "acceso", []));
            echo "</td>
                        <td><a class=\"btn btn-warning\" href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_lugarfisico", ["id" => $this->getAttribute($context["lugarfisico"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
";
            // line 124
            echo "                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                        <!-- The Modal -->
                                        <div class=\"modal fade\" id=\"myModal";
            // line 128
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
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lugarfisico"], "dependencia", []), "descripcion", []), "html", null, true);
            echo "?
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_lugarfisico", ["id" => $this->getAttribute($context["lugarfisico"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\">SI</a></button>                          
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        ";
            // line 151
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
            // line 152
            echo "                            
                            
                            
                            
                            <a class=\"btn btn-warning\" href=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionar_lugarfisico_responsables", ["id" => $this->getAttribute($context["lugarfisico"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Responsables\"></i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lugarfisico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "
            </tbody>
        </table>

        ";
        // line 163
        if ((twig_length_filter($this->env, ($context["lugarFisico"] ?? $this->getContext($context, "lugarFisico"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            echo "        
            <ul class=\"pagination\">
                ";
            // line 165
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
                ";
            } else {
                // line 167
                echo "                    ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 168
                echo "                ";
            }
            // line 169
            echo "

                <li ><a class=\"page-link\" href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                    ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 173
                echo "                    <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "
                ";
            // line 176
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 177
                echo "                ";
            } else {
                // line 178
                echo "                    ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 179
                echo "                ";
            }
            // line 180
            echo "                <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

            </ul>

        </div> 
    ";
        }
        // line 186
        echo "
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
        return "AppBundle:Ubicacion:listadoLugarFisico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 186,  400 => 180,  397 => 179,  394 => 178,  391 => 177,  389 => 176,  386 => 175,  375 => 173,  371 => 172,  367 => 171,  363 => 169,  360 => 168,  357 => 167,  352 => 165,  347 => 163,  341 => 159,  332 => 156,  326 => 152,  324 => 151,  314 => 144,  307 => 140,  292 => 128,  284 => 124,  280 => 122,  276 => 121,  272 => 120,  267 => 119,  261 => 117,  259 => 116,  256 => 115,  251 => 114,  249 => 113,  240 => 106,  236 => 104,  234 => 103,  227 => 98,  218 => 95,  215 => 94,  211 => 93,  208 => 92,  199 => 89,  196 => 88,  192 => 87,  181 => 79,  175 => 76,  171 => 75,  161 => 68,  156 => 66,  152 => 65,  145 => 61,  140 => 59,  136 => 58,  132 => 56,  125 => 52,  120 => 50,  116 => 49,  111 => 47,  105 => 44,  93 => 35,  60 => 4,  51 => 3,  29 => 1,);
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
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Lugares
                    </button>
                    <a href=\"{{ path('nuevo_lugarfisico') }}\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nuevo Lugar</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
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
                        <td><a class=\"btn btn-warning\" href=\"{{ path('editar_lugarfisico',{'id':lugarfisico.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
{#                            <a class=\"btn btn-danger\" href=\"{{ path('borrar_lugarfisico',{'id':lugarfisico.id}) }}\"  role=\"button\"><i class=\"far fa-file-archive\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Borrar\"></i></a>#}
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
                                                        ¿Desea Eliminar el Lugar Físico: {{ lugarfisico.dependencia.descripcion}}?
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"{{ path('borrar_lugarfisico',{'id':lugarfisico.id}) }}\"  role=\"button\">SI</a></button>                          
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {% set count=count+1 %}
                            
                            
                            
                            
                            <a class=\"btn btn-warning\" href=\"{{ path(\"gestionar_lugarfisico_responsables\", {'id':lugarfisico.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Responsables\"></i></a></td>
                    </tr>
                {% endfor %}

            </tbody>
        </table>

        {% if lugarFisico|length < totalItems %}        
            <ul class=\"pagination\">
                {%if (thisPage==1)%}           
                {%else%}
                    {%set thisPage= thisPage-1%}
                {%endif%}


                <li ><a class=\"page-link\" href=\"{{ path('listado_lugarfisico', {\"currentPage\": thisPage}) }}\">&laquo</a></li>
                    {% for i in 1..maxPages %}
                    <li><a class=\"page-link\"  href=\"{{ path('listado_lugarfisico', {\"currentPage\": i}) }}\">{{ i }}</a></li>
                    {% endfor %}

                {%if (page==maxPages)%}
                {%else%}
                    {%set page= page+1%}
                {%endif%}
                <li><a class=\"page-link\" href=\"{{ path('listado_lugarfisico', {\"currentPage\": page}) }}\">&raquo</a></li>

            </ul>

        </div> 
    {%endif%}

    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

    <hr/>
{% endblock %}", "AppBundle:Ubicacion:listadoLugarFisico.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Ubicacion/listadoLugarFisico.html.twig");
    }
}
