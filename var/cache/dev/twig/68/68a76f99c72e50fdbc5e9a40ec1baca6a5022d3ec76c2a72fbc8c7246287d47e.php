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

/* AppBundle:Usuario:listadoUsuarios.html.twig */
class __TwigTemplate_87c2826c6d0cb3bdadd35148416e38ae7805b501ee1947099923a23d47ca17b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuario:listadoUsuarios.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuario:listadoUsuarios.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Usuario:listadoUsuarios.html.twig", 1);
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
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingOne\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Usuarios
                    </button>
                    <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_usuario");
        echo "\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nuevo Usuario</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), 'errors');
        echo "
                        <div class=\"row\">
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
        echo "
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "dependencia", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "dependencia", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "iup", []), 'label', ["label" => "USUARIO"]);
        echo "
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "iup", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "iup", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "role", []), 'label', ["label" => "ROL"]);
        echo "
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "role", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "role", []), 'errors');
        echo "
                                </div>
                            </div>  
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "persona", []), 'label', ["label" => "NOMBRE RESPONSABLE"]);
        echo "
                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "persona", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "persona", []), 'errors');
        echo "
                                </div>
                            </div>              

                        </div>

                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formUsuarioFilter"] ?? $this->getContext($context, "formUsuarioFilter")), 'form_end');
        echo "

                    </form>

                </div>
            </div>
        </div>

        <hr/>


        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 115
            echo "            <div class=\"alert alert-success\">
                ";
            // line 116
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 121
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 122
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        <table class=\"table table-striped\">
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
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["usuario"]));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 138
            echo "                    <tr>
                        <td class=\"text-default\">";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "iup", []));
            echo "</td>
                        <td class=\"text-default\"><p>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "role", []));
            echo "</p></td>
                        <td class=\"text-default\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "persona", []));
            echo "</td>
                        <td class=\"text-default\">";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["usuario"], "persona", []), "dependencia", []), "descripcion", []));
            echo "</td>

                        ";
            // line 145
            echo "                        ";
            // line 146
            echo "                        <td> <a class=\"btn btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_usuario", ["id" => $this->getAttribute($context["usuario"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                            <a class=\"btn btn-danger\" href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_usuario", ["id" => $this->getAttribute($context["usuario"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "
            </tbody>
        </table>


        ";
        // line 155
        if ((twig_length_filter($this->env, ($context["usuario"] ?? $this->getContext($context, "usuario"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 156
            echo "            <ul class=\"pagination\">
                ";
            // line 157
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
                ";
            } else {
                // line 159
                echo "                    ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 160
                echo "                ";
            }
            // line 161
            echo "
                <li ><a class=\"page-link\" href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                    ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 164
                echo "                    <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "
                ";
            // line 167
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 168
                echo "
                ";
            } else {
                // line 170
                echo "                    ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 171
                echo "                ";
            }
            // line 172
            echo "                <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

            </ul>
        ";
        }
        // line 176
        echo "
    </div>
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

    <script>

        \$('#usuario_filter_persona').autocompleter({
            url_list: \"";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_search");
        echo "\",
            url_get: \"";
        // line 188
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
        return "AppBundle:Usuario:listadoUsuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 188,  393 => 187,  380 => 176,  372 => 172,  369 => 171,  366 => 170,  362 => 168,  360 => 167,  357 => 166,  346 => 164,  342 => 163,  338 => 162,  335 => 161,  332 => 160,  329 => 159,  324 => 157,  321 => 156,  319 => 155,  312 => 150,  303 => 147,  298 => 146,  296 => 145,  291 => 142,  287 => 141,  283 => 140,  279 => 139,  276 => 138,  272 => 137,  258 => 125,  249 => 122,  246 => 121,  242 => 120,  239 => 119,  230 => 116,  227 => 115,  223 => 114,  209 => 103,  203 => 100,  199 => 99,  187 => 90,  182 => 88,  178 => 87,  171 => 83,  166 => 81,  162 => 80,  155 => 76,  150 => 74,  146 => 73,  139 => 69,  134 => 67,  130 => 66,  124 => 63,  112 => 54,  60 => 4,  51 => 3,  29 => 1,);
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
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingOne\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Usuarios
                    </button>
                    <a href=\"{{ path('nuevo_usuario') }}\" 
                       role=\"button\" class=\"btn btn-info float-right\">Nuevo Usuario</a>

                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
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

                {% for usuario in usuario|reverse %}
                    <tr>
                        <td class=\"text-default\">{{usuario.iup|e }}</td>
                        <td class=\"text-default\"><p>{{usuario.role|e }}</p></td>
                        <td class=\"text-default\">{{usuario.persona|e }}</td>
                        <td class=\"text-default\">{{usuario.persona.dependencia.descripcion|e }}</td>

                        {#   <td><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente.id}) }}\"  role=\"button\"><i class=\"fas fa-search\"></i></a>#}
                        {#                        <td><a class=\"btn btn-info\" href=\"{{ path(\"editar_usuario\", {'id':usuario.id}) }}\"  role=\"button\"><i class=\"fas fa-search\"></i></a>#}
                        <td> <a class=\"btn btn-warning\" href=\"{{ path(\"editar_usuario\", {'id':usuario.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                            <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_usuario\", {'id':usuario.id}) }}\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                    </tr>
                {% endfor %}

            </tbody>
        </table>


        {% if usuario|length < totalItems %}
            <ul class=\"pagination\">
                {%if (thisPage==1)%}           
                {%else%}
                    {%set thisPage= thisPage-1%}
                {%endif%}

                <li ><a class=\"page-link\" href=\"{{ path('listado_usuario', {\"currentPage\": thisPage}) }}\">&laquo</a></li>
                    {% for i in 1..maxPages %}
                    <li><a class=\"page-link\"  href=\"{{ path('listado_usuario', {\"currentPage\": i}) }}\">{{ i }}</a></li>
                    {% endfor %}

                {%if (page==maxPages)%}

                {%else%}
                    {%set page= page+1%}
                {%endif%}
                <li><a class=\"page-link\" href=\"{{ path('listado_usuario', {\"currentPage\": page}) }}\">&raquo</a></li>

            </ul>
        {% endif %}

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
{% endblock %}", "AppBundle:Usuario:listadoUsuarios.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Usuario/listadoUsuarios.html.twig");
    }
}
