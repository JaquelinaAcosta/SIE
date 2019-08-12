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

/* AppBundle:Expediente:detalleResolucion.html.twig */
class __TwigTemplate_0127e2f670bd7a805bc9ca8cbb7fbf9668c7fbe6f792b9d843a178e9ccc76561 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:detalleResolucion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:detalleResolucion.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:detalleResolucion.html.twig", 1);
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
        echo "
    <style>
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;
            padding:10px;            
        }
        .expediente{
            margin-right: 12px;
            padding:5px;
            font-size:15px;
        }

        .btn{
            width:30px;
            padding:5px;
            height:30px;
        }
        .btnopt{
            width:300px;
            padding:10px;
            height:30px;
        }
        .movimiento{
            width:auto;
            height: auto;
            float:right;
            padding:15px;
        }
        .right{
            float:right;
        }
    </style>
    
    <h4>RESOLUCIÓN EXPEDIENTE ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
        echo "</h4>
    <hr/>
                <table class=\"table table-striped table-hover\"> 
                    <thead>
                    <br/>
                    </thead>
                    <tbody>
                        <tr>
                            <th class=\"info list-group col-lg-2\">USUARIO</th>
                            <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []), "usuario", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">NUMERO DE RESOLUCION</th>
                            <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []), "numeroResolucion", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">TIPO</th>
                            <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []), "tipo", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">FECHA</th>
                            <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []), "fechaResolucion", []), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                    <tfoot>
                    <th>

                    </th>
                </table>

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
        return "AppBundle:Expediente:detalleResolucion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 62,  125 => 58,  118 => 54,  111 => 50,  99 => 41,  60 => 4,  51 => 3,  29 => 1,);
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
            padding:10px;            
        }
        .expediente{
            margin-right: 12px;
            padding:5px;
            font-size:15px;
        }

        .btn{
            width:30px;
            padding:5px;
            height:30px;
        }
        .btnopt{
            width:300px;
            padding:10px;
            height:30px;
        }
        .movimiento{
            width:auto;
            height: auto;
            float:right;
            padding:15px;
        }
        .right{
            float:right;
        }
    </style>
    
    <h4>RESOLUCIÓN EXPEDIENTE {{ expediente.nroExpediente }}</h4>
    <hr/>
                <table class=\"table table-striped table-hover\"> 
                    <thead>
                    <br/>
                    </thead>
                    <tbody>
                        <tr>
                            <th class=\"info list-group col-lg-2\">USUARIO</th>
                            <td>{{ expediente.resolucion.usuario}}</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">NUMERO DE RESOLUCION</th>
                            <td>{{ expediente.resolucion.numeroResolucion}}</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">TIPO</th>
                            <td>{{ expediente.resolucion.tipo}}</td>
                        </tr>
                        <tr>
                            <th class=\"info list-group\">FECHA</th>
                            <td>{{ expediente.resolucion.fechaResolucion}}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                    <th>

                    </th>
                </table>

            <script>
                \$(function () {
                    \$('[data-toggle=\"tooltip\"]').tooltip()
                })
            </script>

        {% endblock %}", "AppBundle:Expediente:detalleResolucion.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/detalleResolucion.html.twig");
    }
}
