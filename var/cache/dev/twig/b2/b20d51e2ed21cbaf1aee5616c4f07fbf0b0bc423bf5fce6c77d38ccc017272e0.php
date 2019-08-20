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
        <div class=\"filtro\">
            <div class=\"header\"><i class=\"fas fa-search\"></i> <strong>Búsqueda de Personas</strong></h4>
                <a role=\"button\" 
                   class=\"btn btn-success float-right\" 
                   href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_persona");
        echo "\">
                    Nueva Persona</a>
            </div>
            <hr/>

            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 69
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 75
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 76
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "

            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"threecol col-lg-3\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
        echo "
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dependencia", []), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"threecol col-lg-3\">
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'label', ["label" => "APELLIDO"]);
        echo "
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"threecol col-lg-3\">
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'label', ["label" => "NOMBRE"]);
        echo "
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'errors');
        echo "
                        </div>
                    </div>                  
                    <div class=\"twocol col-lg-3\">
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'label', ["label" => "DOCUMENTO"]);
        echo "
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'errors');
        echo "
                        </div>
                    </div>   
                    <div class=\"twocol col-lg-3\">
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'label', ["label" => "CARGO"]);
        echo "
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'errors');
        echo "
                        </div>
                    </div>                          
                </div>      
                <hr/>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "filter", []), 'widget');
        echo "
                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "reset", []), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), 'form_end');
        echo "
        </div>
    </form>
    <hr/>
    ";
        // line 132
        if ((twig_length_filter($this->env, ($context["personas"] ?? $this->getContext($context, "personas"))) > 0)) {
            // line 133
            echo "        <table class=\"table table-striped\">
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
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["personas"] ?? $this->getContext($context, "personas")));
            foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
                // line 146
                echo "                    <tr>
                        <td class=\"text-default\">";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "apellido", []));
                echo "</td>
                        <td class=\"text-default\"><p>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", []));
                echo "</p></td>
                        <td class=\"text-default\">";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "dni", []));
                echo "</td>
                        <td class=\"text-default\">";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "cargo", []));
                echo "</td>
                        <td class=\"text-default\">";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["persona"], "dependencia", []), "descripcion", []));
                echo "</td>

                        <td> <a class=\"btn btn-warning\" href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                            <!-- The Modal -->
                            <div class=\"modal fade\" id=\"myModal\">
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
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "apellido", []), "html", null, true);
                echo "?
                                        </div>
                                        <!-- Modal footer -->
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\">Si</a></button>                          
                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </tr>             
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "

            </tbody>
        </table>
    ";
        }
        // line 187
        echo "       
    ";
        // line 188
        if ((twig_length_filter($this->env, ($context["personas"] ?? $this->getContext($context, "personas"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 189
            echo "        <div class=\"row\">
            <ul class=\"pagination\">
                ";
            // line 191
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
                ";
            } else {
                // line 193
                echo "                    ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 194
                echo "                ";
            }
            // line 195
            echo "
                <li ><a class=\"page-link\" href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                    ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 198
                echo "                    <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "
                ";
            // line 201
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 202
                echo "
                ";
            } else {
                // line 204
                echo "                    ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 205
                echo "                ";
            }
            // line 206
            echo "                <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

            </ul>
        </div>
    </div>
";
        }
        // line 212
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
        return array (  438 => 212,  428 => 206,  425 => 205,  422 => 204,  418 => 202,  416 => 201,  413 => 200,  402 => 198,  398 => 197,  394 => 196,  391 => 195,  388 => 194,  385 => 193,  380 => 191,  376 => 189,  374 => 188,  371 => 187,  364 => 183,  349 => 174,  340 => 170,  320 => 153,  315 => 151,  311 => 150,  307 => 149,  303 => 148,  299 => 147,  296 => 146,  292 => 145,  278 => 133,  276 => 132,  269 => 128,  263 => 125,  259 => 124,  249 => 117,  244 => 115,  240 => 114,  233 => 110,  228 => 108,  224 => 107,  217 => 103,  212 => 101,  208 => 100,  201 => 96,  196 => 94,  192 => 93,  185 => 89,  180 => 87,  176 => 86,  170 => 83,  165 => 80,  155 => 76,  152 => 75,  148 => 74,  145 => 73,  135 => 69,  132 => 68,  128 => 67,  120 => 62,  60 => 4,  51 => 3,  29 => 1,);
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
        <div class=\"filtro\">
            <div class=\"header\"><i class=\"fas fa-search\"></i> <strong>Búsqueda de Personas</strong></h4>
                <a role=\"button\" 
                   class=\"btn btn-success float-right\" 
                   href=\"{{ path('nueva_persona')}}\">
                    Nueva Persona</a>
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
                <hr/>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        {{ form_widget(formPersonaFilter.filter) }}
                        {{ form_widget(formPersonaFilter.reset) }}
                    </div>
                </div>
                {{ form_end(formPersonaFilter) }}
        </div>
    </form>
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
                {% for persona in personas %}
                    <tr>
                        <td class=\"text-default\">{{persona.apellido|e }}</td>
                        <td class=\"text-default\"><p>{{persona.nombre|e }}</p></td>
                        <td class=\"text-default\">{{persona.dni|e }}</td>
                        <td class=\"text-default\">{{persona.cargo|e }}</td>
                        <td class=\"text-default\">{{persona.dependencia.descripcion|e }}</td>

                        <td> <a class=\"btn btn-warning\" href=\"{{ path(\"editar_persona\", {'id':persona.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                            <!-- The Modal -->
                            <div class=\"modal fade\" id=\"myModal\">
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
