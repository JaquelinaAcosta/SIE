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

/* AppBundle:Movimiento:detalleMovimiento.html.twig */
class __TwigTemplate_65d901fed6b6832c0f528287b006c475aacf59261e050888f0d713ab4e72dd7e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movimiento:detalleMovimiento.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movimiento:detalleMovimiento.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Movimiento:detalleMovimiento.html.twig", 1);
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
        echo "    <div class=\"content\">
        <div class=\"row\">
            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\"> </th>
                        <th scope=\"col\"><i class=\"fas fa-info-circle \"></i> <strong> DETALLE DE MOVIMIENTO DE EXPEDIENTE - ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movimiento"] ?? $this->getContext($context, "movimiento")), "expediente", []), "html", null, true);
        echo "</th>
                    </tr>

                </thead>
                <tbody >                    
                    <tr>
                        <th class=\"w-25\">UBICACIÓN</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movimiento"] ?? $this->getContext($context, "movimiento")), "ubicacion", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">FOJAS</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movimiento"] ?? $this->getContext($context, "movimiento")), "fojas", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">USUARIO</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movimiento"] ?? $this->getContext($context, "movimiento")), "usuario", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">FECHA</th>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["movimiento"] ?? $this->getContext($context, "movimiento")), "fecha", []), "d-m-Y"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">COMENTARIO</th>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movimiento"] ?? $this->getContext($context, "movimiento")), "comentario", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 \">OBSERVACIÓN</th>
                        <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movimiento"] ?? $this->getContext($context, "movimiento")), "observacion", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">TIPO DE SALIDA</th>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movimiento"] ?? $this->getContext($context, "movimiento")), "tiposalida", []), "html", null, true);
        echo "</td>
                    </tr> 
                </tbody>
                <tfoot>
            </table>  
        <a class=\"btn btn-primary\" href=\"#\" onclick=\"history.back()\"  role=\"button\">Volver</a>

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
        return "AppBundle:Movimiento:detalleMovimiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  113 => 37,  106 => 33,  99 => 29,  92 => 25,  85 => 21,  78 => 17,  68 => 10,  60 => 4,  51 => 3,  29 => 1,);
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
    <div class=\"content\">
        <div class=\"row\">
            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\"> </th>
                        <th scope=\"col\"><i class=\"fas fa-info-circle \"></i> <strong> DETALLE DE MOVIMIENTO DE EXPEDIENTE - {{ movimiento.expediente}}</th>
                    </tr>

                </thead>
                <tbody >                    
                    <tr>
                        <th class=\"w-25\">UBICACIÓN</th>
                        <td>{{movimiento.ubicacion}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">FOJAS</th>
                        <td>{{movimiento.fojas}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">USUARIO</th>
                        <td>{{ movimiento.usuario}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">FECHA</th>
                        <td>{{ movimiento.fecha|date('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">COMENTARIO</th>
                        <td>{{ movimiento.comentario}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 \">OBSERVACIÓN</th>
                        <td>{{ movimiento.observacion}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25\">TIPO DE SALIDA</th>
                        <td>{{ movimiento.tiposalida}}</td>
                    </tr> 
                </tbody>
                <tfoot>
            </table>  
        <a class=\"btn btn-primary\" href=\"#\" onclick=\"history.back()\"  role=\"button\">Volver</a>

        </div>

    </div>
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

{% endblock %}", "AppBundle:Movimiento:detalleMovimiento.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Movimiento/detalleMovimiento.html.twig");
    }
}
