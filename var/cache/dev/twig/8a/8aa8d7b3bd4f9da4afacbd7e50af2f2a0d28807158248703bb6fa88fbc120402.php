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

/* AppBundle:Expediente:listadoMovimientos.html.twig */
class __TwigTemplate_79b125a8839e3561f1f1221b6bf9d8b767211763bfbbd4e7975162da093f3519 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoMovimientos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoMovimientos.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:listadoMovimientos.html.twig", 1);
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

        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

    </style>

    <div class=\"content\">
        <div class=\"filtro\">
            <div class=\"header\">
                <i class=\"fas fa-search\"></i> <strong>Búsqueda de Movimientos</strong></h4> 
                ";
        // line 51
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "estado", []) != "ASOCIADO")) {
            // line 52
            echo "                    <a role=\"button\" 
                       class=\"btn btn-success float-right\" 
                       href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("elegir_movimiento", ["id" => $this->getAttribute(            // line 55
($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\">
                        Nuevo Movimiento</a>
                    ";
        }
        // line 58
        echo "
            </div>
            <hr/>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"threecol col-lg-3\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "usuario", []), 'label', ["label" => "USUARIO"]);
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "usuario", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "usuario", []), 'errors');
        echo "
                        </div>
                    </div>  
                    <div class=\"threecol col-lg-3\">
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "tipoSalida", []), 'label', ["label" => "TIPO DE PASE"]);
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "tipoSalida", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "tipoSalida", []), 'errors');
        echo "
                        </div>
                    </div>  
                    <div class=\"help-block with-errors\">
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "fecha", []), 'errors');
        echo "
                    </div>
                    <div class=\"threecol col-lg-2\">            
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "fecha", []), "left_date", []), 'row', ["id" => "date1"]);
        echo " 
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "fecha", []), "left_date", []), 'widget');
        echo "

                    </div>   
                    <div class=\"threecol col-lg-2\">
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "fecha", []), "right_date", []), 'row', ["id" => "date2"]);
        echo " 
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "fecha", []), "right_date", []), 'widget');
        echo "

                    </div>       
                </div>

                <hr/>

                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "filter", []), 'widget');
        echo "
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), "reset", []), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formMovimientoFilter"] ?? $this->getContext($context, "formMovimientoFilter")), 'form_end');
        echo "

            </form>

        </div>
        <hr/>

        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 109
            echo "            <div class=\"alert alert-success\">
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 116
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 117
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
            <hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">UBICACION</th>
                    <th scope=\"col\">DEPENDENCIA</th>
                    <th scope=\"col\">TIPO DE PASE</th>
                    <th scope=\"col\">USUARIO</th>
                    <th scope=\"col\">FECHA</th>
                    <th scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 135
        $context["count"] = (twig_length_filter($this->env, ($context["movimientos"] ?? $this->getContext($context, "movimientos"))) + 1);
        // line 136
        echo "
                ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["movimientos"] ?? $this->getContext($context, "movimientos"))));
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 138
            echo "                    <tr>
                        ";
            // line 139
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) - 1);
            // line 140
            echo "                        ";
            if ((($context["count"] ?? $this->getContext($context, "count")) != twig_length_filter($this->env, ($context["movimientos"] ?? $this->getContext($context, "movimientos"))))) {
                // line 141
                echo "                            <td><i class=\"fas fa-arrow-up\"></i> ";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo " </td>
                        ";
            } else {
                // line 143
                echo "                            <td><i class=\"fas fa-arrows-alt-h\"></i> ";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo " </td>
                        ";
            }
            // line 145
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "ubicacion", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movimiento"], "ubicacion", []), "dependencia", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "tipoSalida", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "usuario", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 149
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["movimiento"], "fecha", []), "d-m-Y"), "html", null, true);
            echo "</td>
                        ";
            // line 150
            if ((($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []) == $this->getAttribute($context["movimiento"], "ubicacion", [])) && (($context["count"] ?? $this->getContext($context, "count")) == twig_length_filter($this->env, ($context["movimientos"] ?? $this->getContext($context, "movimientos")))))) {
                // line 151
                echo "                            <td><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_movimiento", ["id" => $this->getAttribute($context["movimiento"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                <a class=\"btn btn-warning\" href=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_movimiento", ["id" => $this->getAttribute($context["movimiento"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-danger\" href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_movimiento", ["id" => $this->getAttribute($context["movimiento"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                                ";
            } else {
                // line 155
                echo "                            <td><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_movimiento", ["id" => $this->getAttribute($context["movimiento"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a></td>
                        ";
            }
            // line 157
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "
            </tbody>
        </table>

        ";
        // line 163
        if ((twig_length_filter($this->env, ($context["movimientos"] ?? $this->getContext($context, "movimientos"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                    ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 173
                echo "                    <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => $context["i"]]), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

            </ul>

        </div> 
    ";
        }
        // line 185
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
        return "AppBundle:Expediente:listadoMovimientos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 185,  410 => 180,  407 => 179,  404 => 178,  401 => 177,  399 => 176,  396 => 175,  385 => 173,  381 => 172,  377 => 171,  373 => 169,  370 => 168,  367 => 167,  362 => 165,  357 => 163,  351 => 159,  344 => 157,  338 => 155,  333 => 153,  329 => 152,  324 => 151,  322 => 150,  318 => 149,  314 => 148,  310 => 147,  306 => 146,  301 => 145,  295 => 143,  289 => 141,  286 => 140,  284 => 139,  281 => 138,  277 => 137,  274 => 136,  272 => 135,  256 => 121,  246 => 117,  243 => 116,  239 => 115,  236 => 114,  226 => 110,  223 => 109,  219 => 108,  209 => 101,  203 => 98,  199 => 97,  187 => 88,  183 => 87,  176 => 83,  172 => 82,  166 => 79,  159 => 75,  154 => 73,  150 => 72,  143 => 68,  138 => 66,  134 => 65,  128 => 62,  122 => 58,  116 => 55,  115 => 54,  111 => 52,  109 => 51,  60 => 4,  51 => 3,  29 => 1,);
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

        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

    </style>

    <div class=\"content\">
        <div class=\"filtro\">
            <div class=\"header\">
                <i class=\"fas fa-search\"></i> <strong>Búsqueda de Movimientos</strong></h4> 
                {% if expediente.estado != 'ASOCIADO' %}
                    <a role=\"button\" 
                       class=\"btn btn-success float-right\" 
                       href=\"{{ path('elegir_movimiento',
                                 {'id':expediente.id}) }}\">
                        Nuevo Movimiento</a>
                    {% endif %}

            </div>
            <hr/>
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

        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">UBICACION</th>
                    <th scope=\"col\">DEPENDENCIA</th>
                    <th scope=\"col\">TIPO DE PASE</th>
                    <th scope=\"col\">USUARIO</th>
                    <th scope=\"col\">FECHA</th>
                    <th scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                {% set count = movimientos|length+1 %}

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
                        <td>{{movimiento.usuario}}</td>
                        <td>{{movimiento.fecha|date('d-m-Y')}}</td>
                        {% if (expediente.ubicacionActual == movimiento.ubicacion) and (count == movimientos|length) %}
                            <td><a class=\"btn btn-info\" href=\"{{ path('ver_movimiento',{'id':movimiento.id}) }}\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                <a class=\"btn btn-warning\" href=\"{{ path('editar_movimiento',{'id':movimiento.id}) }}\"  role=\"button\" title=\"Modificar\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-danger\" href=\"{{path('eliminar_movimiento',{'id':movimiento.id})}}\"  role=\"button\" title=\"Archivar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                                {% else %}
                            <td><a class=\"btn btn-info\" href=\"{{ path('ver_movimiento',{'id':movimiento.id}) }}\"  role=\"button\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a></td>
                        {% endif %}
                    </tr>
                {% endfor %}

            </tbody>
        </table>

        {% if movimientos|length < totalItems %}        
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
    {%endif%} 


</div>
<script>
    \$(function () {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    })
</script>
<hr/>
{% endblock %}", "AppBundle:Expediente:listadoMovimientos.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/Expediente/listadoMovimientos.html.twig");
    }
}
