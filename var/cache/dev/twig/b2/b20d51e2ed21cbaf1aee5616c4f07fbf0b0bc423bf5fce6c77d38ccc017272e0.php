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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Ubicacion:listadoPersona.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Ubicacion:listadoPersona.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Ubicacion:listadoPersona.html.twig", 1);
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



    <h4 class=\"text-center\"><i class=\"fas fa-bars\"></i> Lista de Personas <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_persona");
        echo "\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nueva Persona\"><i class=\"fas fa-plus\"></i></a></h4>
    <hr/>
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 50
            echo "        <div class=\"alert alert-success\">
            ";
            // line 51
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        <hr/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 57
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 58
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        <hr/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "

    <div id=\"accordion_filtros\">

        <div class=\"row form col-lg-10\" style=\"background:none;margin:0;\">
   

    <div id=\"accordion_filtros\">

        <div class=\"row form col-lg-12\" style=\"background:none;margin:0;\">
            <h4>FILTROS</h4>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"threecol col-lg-2\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'label', ["label" => "APELLIDO"]);
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "apellido", []), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"threecol col-lg-2\">
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'label', ["label" => "NOMBRE"]);
        echo "
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "nombre", []), 'errors');
        echo "
                        </div>
                    </div>                  
                    <div class=\"twocol col-lg-2\">
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'label', ["label" => "NRO. DOCUMENTO"]);
        echo "
                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "dni", []), 'errors');
        echo "
                        </div>
                    </div>   
                    <div class=\"twocol col-lg-2\">
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'label', ["label" => "CARGO"]);
        echo "
                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "cargo", []), 'errors');
        echo "
                        </div>
                    </div>                          
                    </div>      
                   
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-1\">
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "filter", []), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-1\">
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), "reset", []), 'row');
        echo "
                    </div>
                </div>
                    <br/>
                    <br/>
                    <hr/>
                ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formPersonaFilter"] ?? $this->getContext($context, "formPersonaFilter")), 'form_end');
        echo "
            </form>
        </div>
    </div>

    <hr/>
    
    ";
        // line 125
        if ((twig_length_filter($this->env, ($context["persona"] ?? $this->getContext($context, "persona"))) > 0)) {
            // line 126
            echo "    <table class=\"table table-striped\">
        <thead class=\"\">
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
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["persona"]);
            foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
                // line 139
                echo "                <tr>
                    <td class=\"text-default\">";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "apellido", []));
                echo "</td>
                    <td class=\"text-default\"><p>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", []));
                echo "</p></td>
                    <td class=\"text-default\">";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "dni", []));
                echo "</td>
                    <td class=\"text-default\">";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "cargo", []));
                echo "</td>
                    <td class=\"text-default\">";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["persona"], "dependencia", []), "descripcion", []));
                echo "</td>

                    <td> <a class=\"btn btn-warning\" href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                        <a class=\"btn btn-danger\" href=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                </tr>             
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "

        </tbody>
    </table>
     ";
        }
        // line 154
        echo "       
    ";
        // line 155
        if ((twig_length_filter($this->env, ($context["persona"] ?? $this->getContext($context, "persona"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 156
            echo "
        <ul class=\"pagination\">
            ";
            // line 158
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
            ";
            } else {
                // line 160
                echo "                ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 161
                echo "            ";
            }
            // line 162
            echo "

            <li ><a class=\"page-link\" href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 166
                echo "                <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "
            ";
            // line 169
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 170
                echo "
            ";
            } else {
                // line 172
                echo "                ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 173
                echo "            ";
            }
            // line 174
            echo "            <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

        </ul>


    ";
        }
        // line 180
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
        return "AppBundle:Ubicacion:listadoPersona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 180,  382 => 174,  379 => 173,  376 => 172,  372 => 170,  370 => 169,  367 => 168,  356 => 166,  352 => 165,  348 => 164,  344 => 162,  341 => 161,  338 => 160,  333 => 158,  329 => 156,  327 => 155,  324 => 154,  317 => 150,  308 => 147,  304 => 146,  299 => 144,  295 => 143,  291 => 142,  287 => 141,  283 => 140,  280 => 139,  276 => 138,  262 => 126,  260 => 125,  250 => 118,  241 => 112,  235 => 109,  224 => 101,  219 => 99,  215 => 98,  208 => 94,  203 => 92,  199 => 91,  192 => 87,  187 => 85,  183 => 84,  176 => 80,  171 => 78,  167 => 77,  161 => 74,  147 => 62,  137 => 58,  134 => 57,  130 => 56,  127 => 55,  117 => 51,  114 => 50,  110 => 49,  105 => 47,  60 => 4,  51 => 3,  29 => 1,);
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



    <h4 class=\"text-center\"><i class=\"fas fa-bars\"></i> Lista de Personas <a href=\"{{ path('nueva_persona') }}\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nueva Persona\"><i class=\"fas fa-plus\"></i></a></h4>
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


    <div id=\"accordion_filtros\">

        <div class=\"row form col-lg-10\" style=\"background:none;margin:0;\">
   

    <div id=\"accordion_filtros\">

        <div class=\"row form col-lg-12\" style=\"background:none;margin:0;\">
            <h4>FILTROS</h4>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                {{ form_errors(formPersonaFilter) }}
                <div class=\"row\">
                    <div class=\"threecol col-lg-2\">
                        {{ form_label(formPersonaFilter.apellido, 'APELLIDO') }}
                        {{ form_widget(formPersonaFilter.apellido) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formPersonaFilter.apellido) }}
                        </div>
                    </div>
                    <div class=\"threecol col-lg-2\">
                        {{ form_label(formPersonaFilter.nombre, 'NOMBRE') }}
                        {{ form_widget(formPersonaFilter.nombre) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formPersonaFilter.nombre) }}
                        </div>
                    </div>                  
                    <div class=\"twocol col-lg-2\">
                        {{ form_label(formPersonaFilter.dni, 'NRO. DOCUMENTO') }}
                        {{ form_widget(formPersonaFilter.dni) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formPersonaFilter.dni) }}
                        </div>
                    </div>   
                    <div class=\"twocol col-lg-2\">
                        {{ form_label(formPersonaFilter.cargo, 'CARGO') }}
                        {{ form_widget(formPersonaFilter.cargo) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formPersonaFilter.cargo) }}
                        </div>
                    </div>                          
                    </div>      
                   
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-1\">
                        {{ form_row(formPersonaFilter.filter) }}
                    </div>
                    <div class=\"col-lg-1\">
                        {{ form_row(formPersonaFilter.reset) }}
                    </div>
                </div>
                    <br/>
                    <br/>
                    <hr/>
                {{ form_end(formPersonaFilter) }}
            </form>
        </div>
    </div>

    <hr/>
    
    {% if persona|length >0 %}
    <table class=\"table table-striped\">
        <thead class=\"\">
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
            {% for persona in persona %}
                <tr>
                    <td class=\"text-default\">{{persona.apellido|e }}</td>
                    <td class=\"text-default\"><p>{{persona.nombre|e }}</p></td>
                    <td class=\"text-default\">{{persona.dni|e }}</td>
                    <td class=\"text-default\">{{persona.cargo|e }}</td>
                    <td class=\"text-default\">{{persona.dependencia.descripcion|e }}</td>

                    <td> <a class=\"btn btn-warning\" href=\"{{ path(\"editar_persona\", {'id':persona.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                        <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_persona\", {'id':persona.id}) }}\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                </tr>             
            {% endfor %}


        </tbody>
    </table>
     {% endif %}       
    {% if persona|length < totalItems %}

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


    {% endif %}

    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

    <hr/>
{% endblock %}", "AppBundle:Ubicacion:listadoPersona.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Ubicacion/listadoPersona.html.twig");
    }
}
