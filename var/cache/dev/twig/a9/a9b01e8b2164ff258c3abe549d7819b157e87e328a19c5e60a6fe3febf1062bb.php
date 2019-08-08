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
            'content' => [$this, 'block_content'],
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
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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



    <h4 class=\"text-center\"><i class=\"fas fa-bars\"></i> Lista de Lugares Físicos <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_lugarfisico");
        echo "\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nuevo Lugar Físico\"><i class=\"fas fa-plus\"></i></a></h4>
    <hr/>
    
    <div id=\"accordion_filtros\">

        <div class=\"row form col-lg-12\" style=\"background:none;margin:0;\">
            
            <h4>FILTROS</h4>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"threecol col-lg-2\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "tipo", []), 'label', ["label" => "TIPO"]);
        echo "
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "tipo", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "tipo", []), 'errors');
        echo "
                        </div>
                    </div>  
                    <div class=\"threecol col-lg-2\">
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCIÓN"]);
        echo "
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "descripcion", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "descripcion", []), 'errors');
        echo "
                        </div>
                    </div>
                    
                    ";
        // line 81
        echo "            
                    
                </div>
                
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-1\">
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "filter", []), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-1\">
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), "reset", []), 'row');
        echo "
                    </div>
                </div>
                    <br/>
                    <br/>
                    <hr/>
                ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formLugarFisicoFilter"] ?? $this->getContext($context, "formLugarFisicoFilter")), 'form_end');
        echo "

            </form>
                 
        </div>
    </div>
    
    
    
    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 106
            echo "        <div class=\"alert alert-success\">
            ";
            // line 107
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
    ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 112
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 113
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "    <table class=\"table table-striped\">
        <thead class=\"\">
            <tr>
                ";
        // line 119
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 120
            echo "                    <th scope=\"col\">Lugar de origen</th>
                    ";
        }
        // line 122
        echo "                <th scope=\"col\">Tipo</th>
                <th scope=\"col\">Descripción</th> 
                <th scope=\"col\">Acceso</th>
                <th scope=\"col\">Acciones</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["lugarFisico"] ?? $this->getContext($context, "lugarFisico"))));
        foreach ($context['_seq'] as $context["_key"] => $context["lugarfisico"]) {
            // line 130
            echo "                <tr>
                    ";
            // line 131
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 132
                echo "                        <td class=\"text-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lugarfisico"], "dependencia", []), "descripcion", []));
                echo "</td>
                    ";
            }
            // line 134
            echo "                    <td class=\"text-default\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lugarfisico"], "tipo", []));
            echo "</td>
                    <td class=\"text-default\"><p>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["lugarfisico"], "descripcion", []));
            echo "</p></td>
                    <td class=\"text-default\">";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["lugarfisico"], "acceso", []));
            echo "</td>
                    <td><a class=\"btn btn-warning\" href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_lugarfisico", ["id" => $this->getAttribute($context["lugarfisico"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_lugarfisico", ["id" => $this->getAttribute($context["lugarfisico"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"far fa-file-archive\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Borrar\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lugarfisico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "
        </tbody>
    </table>
            
    ";
        // line 145
        if ((twig_length_filter($this->env, ($context["lugarFisico"] ?? $this->getContext($context, "lugarFisico"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            echo "        
    <ul class=\"pagination\">
        ";
            // line 147
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
        ";
            } else {
                // line 149
                echo "            ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 150
                echo "        ";
            }
            // line 151
            echo "

        <li ><a class=\"page-link\" href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
        ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 155
                echo "            <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "        
        ";
            // line 158
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 159
                echo "        ";
            } else {
                // line 160
                echo "            ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 161
                echo "        ";
            }
            // line 162
            echo "        <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

    </ul>
    ";
        }
        // line 166
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
        return array (  355 => 166,  347 => 162,  344 => 161,  341 => 160,  338 => 159,  336 => 158,  333 => 157,  322 => 155,  318 => 154,  314 => 153,  310 => 151,  307 => 150,  304 => 149,  299 => 147,  294 => 145,  288 => 141,  279 => 138,  275 => 137,  271 => 136,  267 => 135,  262 => 134,  256 => 132,  254 => 131,  251 => 130,  247 => 129,  238 => 122,  234 => 120,  232 => 119,  227 => 116,  218 => 113,  215 => 112,  211 => 111,  208 => 110,  199 => 107,  196 => 106,  192 => 105,  180 => 96,  171 => 90,  165 => 87,  157 => 81,  150 => 71,  145 => 69,  141 => 68,  134 => 64,  129 => 62,  125 => 61,  119 => 58,  107 => 49,  60 => 4,  51 => 3,  29 => 1,);
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

{% block content %}
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



    <h4 class=\"text-center\"><i class=\"fas fa-bars\"></i> Lista de Lugares Físicos <a href=\"{{ path('nuevo_lugarfisico') }}\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nuevo Lugar Físico\"><i class=\"fas fa-plus\"></i></a></h4>
    <hr/>
    
    <div id=\"accordion_filtros\">

        <div class=\"row form col-lg-12\" style=\"background:none;margin:0;\">
            
            <h4>FILTROS</h4>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                {{ form_errors(formLugarFisicoFilter) }}
                <div class=\"row\">
                    <div class=\"threecol col-lg-2\">
                        {{ form_label(formLugarFisicoFilter.tipo, 'TIPO') }}
                        {{ form_widget(formLugarFisicoFilter.tipo) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formLugarFisicoFilter.tipo) }}
                        </div>
                    </div>  
                    <div class=\"threecol col-lg-2\">
                        {{ form_label(formLugarFisicoFilter.descripcion, 'DESCRIPCIÓN') }}
                        {{ form_widget(formLugarFisicoFilter.descripcion) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formLugarFisicoFilter.descripcion) }}
                        </div>
                    </div>
                    
                    {#<div class=\"threecol col-lg-2\">
                        {{ form_label(formUsuarioFilter.persona, 'NOMBRE RESPONSABLE') }}
                        {{ form_widget(formUsuarioFilter.persona) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formUsuarioFilter.persona) }}
                        </div>
                    </div>  #}            
                    
                </div>
                
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-1\">
                        {{ form_row(formLugarFisicoFilter.filter) }}
                    </div>
                    <div class=\"col-lg-1\">
                        {{ form_row(formLugarFisicoFilter.reset) }}
                    </div>
                </div>
                    <br/>
                    <br/>
                    <hr/>
                {{ form_end(formLugarFisicoFilter) }}

            </form>
                 
        </div>
    </div>
    
    
    
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
        <thead class=\"\">
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
            {% for lugarfisico in lugarFisico|reverse %}
                <tr>
                    {% if app.user.role == \"ROLE_ADMIN\" %}
                        <td class=\"text-default\">{{lugarfisico.dependencia.descripcion|e }}</td>
                    {% endif %}
                    <td class=\"text-default\">{{lugarfisico.tipo|e }}</td>
                    <td class=\"text-default\"><p>{{lugarfisico.descripcion|e }}</p></td>
                    <td class=\"text-default\">{{lugarfisico.acceso|e }}</td>
                    <td><a class=\"btn btn-warning\" href=\"{{ path('editar_lugarfisico',{'id':lugarfisico.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"{{ path('borrar_lugarfisico',{'id':lugarfisico.id}) }}\"  role=\"button\"><i class=\"far fa-file-archive\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Borrar\"></i></a></td>
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
    {%endif%}

    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

    <hr/>
{% endblock %}", "AppBundle:Ubicacion:listadoLugarFisico.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/Ubicacion/listadoLugarFisico.html.twig");
    }
}
