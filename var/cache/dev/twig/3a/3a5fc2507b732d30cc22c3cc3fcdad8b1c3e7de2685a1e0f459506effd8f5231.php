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

/* AppBundle:Movimiento:externo.html.twig */
class __TwigTemplate_cd45afe2b0aaf6535a379a4a2e524e13f75e81d1b5823dd50720c50cd86fb1b8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movimiento:externo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movimiento:externo.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Movimiento:externo.html.twig", 1);
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
            <strong>PASE EXTERNO, EXPEDIENTE ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
        echo " </strong>
            <hr/>    
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "

            <div class=\"col-lg-6\">
                <label class=\"text-default\">MESA DE ENTRADA</label>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mesaentrada", []), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mesaentrada", []), 'widget');
        echo "
            </div>   
            <hr/>
            <div class=\"col-lg-2\">
                <label class=\"text-default\">FOJAS</label>
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'errors');
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'widget');
        echo "
            </div>   
            <div class=\"col-lg-12\">
                <hr/>
                <label class=\"text-default\">OBSERVACIONES</label>
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observacion", []), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observacion", []), 'widget');
        echo "
            </div>   
            <div class=\"col-lg-12\">
                <label class=\"text-default\">COMENTARIO</label>
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comentario", []), 'errors');
        echo "
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comentario", []), 'widget');
        echo "
                <hr/>
            </div>  
            <div class=\"col-lg-3 float left\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Aceptar", []), 'widget');
        echo "
            </div>
        </div>
        ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>      
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Movimiento:externo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 57,  142 => 54,  135 => 50,  131 => 49,  124 => 45,  120 => 44,  112 => 39,  108 => 38,  100 => 33,  96 => 32,  89 => 28,  84 => 26,  60 => 4,  51 => 3,  29 => 1,);
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
            <strong>PASE EXTERNO, EXPEDIENTE {{ expediente.nroExpediente }} </strong>
            <hr/>    
            {{form_start(form,{'action':'' ,'method':'POST'})}}

            <div class=\"col-lg-6\">
                <label class=\"text-default\">MESA DE ENTRADA</label>
                {{ form_errors(form.mesaentrada) }}
                {{ form_widget(form.mesaentrada) }}
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
            </div>
        </div>
        {{form_end(form)}}

    </div>      
</div>
{% endblock %}", "AppBundle:Movimiento:externo.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Movimiento/externo.html.twig");
    }
}
