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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuario:listadoUsuarios.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuario:listadoUsuarios.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Usuario:listadoUsuarios.html.twig", 1);
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



    <h4 class=\"text-center\">    <i class=\"fas fa-bars\"></i> Lista de Usuarios <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_usuario");
        echo "\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nuevo Usuario\"><i class=\"fas fa-plus\"></i></a></h4>
    <hr/>
      ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            echo "                    <div class=\"alert alert-success\">
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
            echo "                    <div class=\"alert alert-danger\">
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
        echo "    <table class=\"table table-striped\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">Usuario</th>
                <th scope=\"col\">Rol</th>
                <th scope=\"col\">Persona Responsable</th>
                <th scope=\"col\">Acciones</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["usuario"]));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 74
            echo "                <tr>
                    <td class=\"text-default\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "iup", []));
            echo "</td>
                    <td class=\"text-default\"><p>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "role", []));
            echo "</p></td>
                    <td class=\"text-default\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "persona", []));
            echo "</td>
                    
                 ";
            // line 81
            echo "                       <td> <a class=\"btn btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_usuario", ["id" => $this->getAttribute($context["usuario"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_usuario", ["id" => $this->getAttribute($context["usuario"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
        </tbody>
    </table>
            
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
        return "AppBundle:Usuario:listadoUsuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 85,  185 => 82,  180 => 81,  175 => 77,  171 => 76,  167 => 75,  164 => 74,  160 => 73,  147 => 62,  138 => 59,  135 => 58,  131 => 57,  128 => 56,  119 => 53,  116 => 52,  112 => 51,  107 => 49,  60 => 4,  51 => 3,  29 => 1,);
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



    <h4 class=\"text-center\">    <i class=\"fas fa-bars\"></i> Lista de Usuarios <a href=\"{{ path('nuevo_usuario') }}\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nuevo Usuario\"><i class=\"fas fa-plus\"></i></a></h4>
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
                <th scope=\"col\">Usuario</th>
                <th scope=\"col\">Rol</th>
                <th scope=\"col\">Persona Responsable</th>
                <th scope=\"col\">Acciones</th>
            </tr>
        </thead>
        <tbody>

            {% for usuario in usuario|reverse %}
                <tr>
                    <td class=\"text-default\">{{usuario.iup|e }}</td>
                    <td class=\"text-default\"><p>{{usuario.role|e }}</p></td>
                    <td class=\"text-default\">{{usuario.persona|e }}</td>
                    
                 {#   <td><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente.id}) }}\"  role=\"button\"><i class=\"fas fa-search\"></i></a>#}
{#                        <td><a class=\"btn btn-info\" href=\"{{ path(\"editar_usuario\", {'id':usuario.id}) }}\"  role=\"button\"><i class=\"fas fa-search\"></i></a>#}
                       <td> <a class=\"btn btn-warning\" href=\"{{ path(\"editar_usuario\", {'id':usuario.id}) }}\"  role=\"button\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"></i></a>
                        <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_usuario\", {'id':usuario.id}) }}\"  role=\"button\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></a></td>
                </tr>
            {% endfor %}

        </tbody>
    </table>
            
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
    <hr/>
{% endblock %}", "AppBundle:Usuario:listadoUsuarios.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Usuario/listadoUsuarios.html.twig");
    }
}
