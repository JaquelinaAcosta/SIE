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
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_persona");
        echo "\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nueva Persona\"><i class=\"fas fa-plus\"></i></a></h4>
    <hr/>
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            echo "        <div class=\"alert alert-success\">
            ";
            // line 53
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 58
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 59
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                
    
    <table class=\"table table-striped\">
        <thead class=\"\">
            <tr>
                <th scope=\"col\">Nombre</th>
                <th scope=\"col\">Apellido</th>
                <th scope=\"col\">DNI</th>
                <th scope=\"col\">Cargo</th>
                <th scope=\"col\">Acciones</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["persona"]);
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 76
            echo "                <tr>
                    <td class=\"text-default\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", []));
            echo "</td>
                    <td class=\"text-default\"><p>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "apellido", []));
            echo "</p></td>
                    <td class=\"text-default\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "dni", []));
            echo "</td>
                    <td class=\"text-default\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "cargo", []));
            echo "</td>
                    
                       <td> <a class=\"btn btn-warning\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_persona", ["id" => $this->getAttribute($context["persona"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                </tr>             
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            

        </tbody>
    </table>
    
    <ul class=\"pagination\">
        ";
        // line 92
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
            // line 93
            echo "            
        ";
        } else {
            // line 95
            echo "            ";
            $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
            // line 96
            echo "        ";
        }
        // line 97
        echo "        
            
        <li ><a class=\"page-link\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
        echo "\">&laquo</a></li>
        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 101
            echo "            <li><a class=\"page-link\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        
        
        ";
        // line 105
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 106
            echo "            
        ";
        } else {
            // line 108
            echo "            ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 109
            echo "        ";
        }
        // line 110
        echo "        <li><a class=\"page-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
        echo "\">&raquo</a></li>

    </ul>

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
        return array (  258 => 110,  255 => 109,  252 => 108,  248 => 106,  246 => 105,  242 => 103,  231 => 101,  227 => 100,  223 => 99,  219 => 97,  216 => 96,  213 => 95,  209 => 93,  207 => 92,  199 => 86,  190 => 83,  186 => 82,  181 => 80,  177 => 79,  173 => 78,  169 => 77,  166 => 76,  162 => 75,  147 => 62,  138 => 59,  135 => 58,  131 => 57,  128 => 56,  119 => 53,  116 => 52,  112 => 51,  107 => 49,  60 => 4,  51 => 3,  29 => 1,);
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
    {% endfor %}
                
    {% for message in app.flashes('danger') %}
        <div class=\"alert alert-danger\">
            {{ message }}
        </div>
    {% endfor %}
                
    
    <table class=\"table table-striped\">
        <thead class=\"\">
            <tr>
                <th scope=\"col\">Nombre</th>
                <th scope=\"col\">Apellido</th>
                <th scope=\"col\">DNI</th>
                <th scope=\"col\">Cargo</th>
                <th scope=\"col\">Acciones</th>
            </tr>
        </thead>
        <tbody>
            {% for persona in persona %}
                <tr>
                    <td class=\"text-default\">{{persona.nombre|e }}</td>
                    <td class=\"text-default\"><p>{{persona.apellido|e }}</p></td>
                    <td class=\"text-default\">{{persona.dni|e }}</td>
                    <td class=\"text-default\">{{persona.cargo|e }}</td>
                    
                       <td> <a class=\"btn btn-warning\" href=\"{{ path(\"editar_persona\", {'id':persona.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                        <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_persona\", {'id':persona.id}) }}\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                </tr>             
            {% endfor %}
            

        </tbody>
    </table>
    
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

    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

    <hr/>
{% endblock %}", "AppBundle:Ubicacion:listadoPersona.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/Ubicacion/listadoPersona.html.twig");
    }
}
