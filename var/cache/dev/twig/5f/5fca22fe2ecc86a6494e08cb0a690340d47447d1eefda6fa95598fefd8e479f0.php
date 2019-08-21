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

/* AppBundle:Movimiento:editarInterno.html.twig */
class __TwigTemplate_31d87b570348da9c803f55c80b21616df2e24d413878988ed57845d1b5af8b1b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movimiento:editarInterno.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movimiento:editarInterno.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Movimiento:editarInterno.html.twig", 1);
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
        body{
            font-size: 11px;
        }
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=textarea]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;
            padding:10px;            
        }

    </style>


    <div class=\"content\">
        <div class=\"col-ls-12\">
      <strong>PASE INTERNO, EXPEDIENTE ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "codigoExpediente", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "numeroExpediente", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "digitoExpediente", []), "html", null, true);
        echo " </strong>
      <hr/>
        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
        
        
        <div class=\"col-lg-6\">
            <label class=\"text-default\">NOMBRE DE LA PERSONA</label>
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "persona", []), 'errors');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "persona", []), 'widget');
        echo "
        </div>   
        <hr/>
        <div class=\"col-lg-2\">
            <label class=\"text-default\">FOJAS</label>
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'widget');
        echo "
        </div>   
        <div class=\"col-lg-12\">
            <hr/>
            <label class=\"text-default\">OBSERVACIONES</label>
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observacion", []), 'errors');
        echo "
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observacion", []), 'widget');
        echo "
        </div>   
        <div class=\"col-lg-12\">
            <label class=\"text-default\">COMENTARIO</label>
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comentario", []), 'errors');
        echo "
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comentario", []), 'widget');
        echo "
            <hr/>
        </div>  
        <div class=\"col-lg-3 float left\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Aceptar", []), 'widget');
        echo "
            <a class=\"btn btn-primary\" href=\"#\" onclick=\"history.back()\"  role=\"button\">Volver</a>
        </div>
    </div>
    </div>
    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

</div>      

<script>
    \$('#movimientoexpediente_persona_nombre').autocompleter({
        url_list: \"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_search_dependencia", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
        echo "\",
        url_get: \"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_get");
        echo "\"
    });
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Movimiento:editarInterno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 68,  165 => 67,  156 => 61,  148 => 56,  141 => 52,  137 => 51,  130 => 47,  126 => 46,  118 => 41,  114 => 40,  106 => 35,  102 => 34,  94 => 29,  85 => 27,  60 => 4,  51 => 3,  29 => 1,);
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
        body{
            font-size: 11px;
        }
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=textarea]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;
            padding:10px;            
        }

    </style>


    <div class=\"content\">
        <div class=\"col-ls-12\">
      <strong>PASE INTERNO, EXPEDIENTE {{expediente.codigoExpediente }}-{{expediente.numeroExpediente }}-{{expediente.digitoExpediente }} </strong>
      <hr/>
        {{form_start(form,{'action':'' ,'method':'POST'})}}
        
        
        <div class=\"col-lg-6\">
            <label class=\"text-default\">NOMBRE DE LA PERSONA</label>
            {{ form_errors(form.persona) }}
            {{ form_widget(form.persona) }}
        </div>   
        <hr/>
        <div class=\"col-lg-2\">
            <label class=\"text-default\">FOJAS</label>
            {{ form_errors(form.fojas) }}
            {{ form_widget(form.fojas) }}
        </div>   
        <div class=\"col-lg-12\">
            <hr/>
            <label class=\"text-default\">OBSERVACIONES</label>
            {{ form_errors(form.observacion) }}
            {{ form_widget(form.observacion) }}
        </div>   
        <div class=\"col-lg-12\">
            <label class=\"text-default\">COMENTARIO</label>
            {{ form_errors(form.comentario) }}
            {{ form_widget(form.comentario) }}
            <hr/>
        </div>  
        <div class=\"col-lg-3 float left\">
            {{ form_widget(form.Aceptar) }}
            <a class=\"btn btn-primary\" href=\"#\" onclick=\"history.back()\"  role=\"button\">Volver</a>
        </div>
    </div>
    </div>
    {{form_end(form)}}

</div>      

<script>
    \$('#movimientoexpediente_persona_nombre').autocompleter({
        url_list: \"{{ path('persona_search_dependencia',{'id':expediente.id}) }}\",
        url_get: \"{{ path('persona_get') }}\"
    });
</script>


{% endblock %}", "AppBundle:Movimiento:editarInterno.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Movimiento/editarInterno.html.twig");
    }
}
