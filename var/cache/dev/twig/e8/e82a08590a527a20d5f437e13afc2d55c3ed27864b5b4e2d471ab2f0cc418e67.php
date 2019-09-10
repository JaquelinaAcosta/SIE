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

/* Movimiento/chooser.html.twig */
class __TwigTemplate_1946b94b5f4b7604d38e3750b3234973bd2209d7bb2f6797425a76743fe24768 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Movimiento/chooser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Movimiento/chooser.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Movimiento/chooser.html.twig", 1);
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
        .botones{
            width: 50%;
            margin: 0 auto;
        }
        .botones a{
            padding:20px;
            font-size: 16px;
        }
    </style>

    <div class=\"content\">
        ";
        // line 16
        $context["accion_habilitada"] = false;
        // line 17
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 18
            echo "            ";
            $context["accion_habilitada"] = true;
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "dependencia", []), "mesaentrada", []), "responsables", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 21
                echo "                ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == $this->getAttribute($context["responsable"], "usuario", []))) {
                    // line 22
                    echo "                    ";
                    $context["accion_habilitada"] = true;
                    // line 23
                    echo "                ";
                }
                // line 24
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        }
        echo "  

        <h4 class=\"text-center\">ELIGA EL TIPO DE PASE A REALIZAR</h4>
        <hr/>
        <div class=\"botones\">
            ";
        // line 30
        if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
            // line 31
            echo "                <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_externo", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\"  
                   role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" 
                   title=\"Desde una Mesa de Entrada a otra\">EXTERNO</a>
            ";
        } else {
            // line 35
            echo "                <a class=\"btn btn-primary disabled\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_externo", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\"  
                   role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" 
                   title=\"Desde una Mesa de Entrada a otra\">EXTERNO</a>
            ";
        }
        // line 39
        echo "            <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_interno", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\"  
               role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" 
               title=\"Hacia una Persona\">INTERNO</a>

            <a class=\"btn btn-primary\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_archivado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\"  
               role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" 
               title=\"Hacia un lugar Físico\">ARCHIVADOR</a>
        </div>
    </div>

    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Movimiento/chooser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 43,  132 => 39,  124 => 35,  116 => 31,  114 => 30,  105 => 25,  99 => 24,  96 => 23,  93 => 22,  90 => 21,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  74 => 16,  60 => 4,  51 => 3,  29 => 1,);
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
        .botones{
            width: 50%;
            margin: 0 auto;
        }
        .botones a{
            padding:20px;
            font-size: 16px;
        }
    </style>

    <div class=\"content\">
        {% set accion_habilitada = false %}
        {% if app.user.role == 'ROLE_ADMIN' %}
            {% set accion_habilitada = true %}
        {%else%}
            {% for responsable in app.user.persona.dependencia.mesaentrada.responsables.getValues %}
                {% if app.user == responsable.usuario %}
                    {% set accion_habilitada = true %}
                {% endif %}
            {%endfor%}
        {% endif %}  

        <h4 class=\"text-center\">ELIGA EL TIPO DE PASE A REALIZAR</h4>
        <hr/>
        <div class=\"botones\">
            {% if accion_habilitada == true %}
                <a class=\"btn btn-primary\" href=\"{{ path(\"movimiento_externo\", {'id':expediente.id}) }}\"  
                   role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" 
                   title=\"Desde una Mesa de Entrada a otra\">EXTERNO</a>
            {% else %}
                <a class=\"btn btn-primary disabled\" href=\"{{ path(\"movimiento_externo\", {'id':expediente.id}) }}\"  
                   role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" 
                   title=\"Desde una Mesa de Entrada a otra\">EXTERNO</a>
            {% endif %}
            <a class=\"btn btn-primary\" href=\"{{ path(\"movimiento_interno\", {'id':expediente.id}) }}\"  
               role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" 
               title=\"Hacia una Persona\">INTERNO</a>

            <a class=\"btn btn-primary\" href=\"{{ path(\"movimiento_archivado\", {'id':expediente.id}) }}\"  
               role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" 
               title=\"Hacia un lugar Físico\">ARCHIVADOR</a>
        </div>
    </div>

    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>
{% endblock %}
", "Movimiento/chooser.html.twig", "/var/www/html/SIE/app/Resources/views/Movimiento/chooser.html.twig");
    }
}
