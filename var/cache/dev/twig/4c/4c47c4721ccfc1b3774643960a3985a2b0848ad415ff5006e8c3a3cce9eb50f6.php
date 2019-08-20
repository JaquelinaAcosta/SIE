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

/* AppBundle:Movimiento:chooser.html.twig */
class __TwigTemplate_ed07f0fac41d562c416af6877cc09465a6566e78424b79c17a31aeecc4ab1d1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movimiento:chooser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movimiento:chooser.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Movimiento:chooser.html.twig", 1);
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
        .panel{
            width: 50%;
            margin: 0 auto;
        }
        .panel a{
            padding:20px;
            font-size: 16px;
        }
    </style>

    <div class=\"content\">

        <h4 class=\"text-center\">ELIGA EL TIPO DE PASE A REALIZAR</h4>
        <hr/>
        <div class=\"panel\">
            ";
        // line 20
        if ((($context["pase_externo"] ?? $this->getContext($context, "pase_externo")) == true)) {
            // line 21
            echo "                <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_externo", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\"  
                   role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" 
                   title=\"Desde una Mesa de Entrada a otra\">EXTERNO</a>
            ";
        } else {
            // line 25
            echo "                 <a class=\"btn btn-primary disabled\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_externo", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\"  
                   role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" 
                   title=\"Desde una Mesa de Entrada a otra\">EXTERNO</a>
            ";
        }
        // line 29
        echo "            <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_interno", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\"  
               role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" 
               title=\"Hacia una Persona\">INTERNO</a>

            <a class=\"btn btn-primary\" href=\"";
        // line 33
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
    <hr/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Movimiento:chooser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  96 => 29,  88 => 25,  80 => 21,  78 => 20,  60 => 4,  51 => 3,  29 => 1,);
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
        .panel{
            width: 50%;
            margin: 0 auto;
        }
        .panel a{
            padding:20px;
            font-size: 16px;
        }
    </style>

    <div class=\"content\">

        <h4 class=\"text-center\">ELIGA EL TIPO DE PASE A REALIZAR</h4>
        <hr/>
        <div class=\"panel\">
            {% if pase_externo == true %}
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
    <hr/>
{% endblock %}
", "AppBundle:Movimiento:chooser.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Movimiento/chooser.html.twig");
    }
}
