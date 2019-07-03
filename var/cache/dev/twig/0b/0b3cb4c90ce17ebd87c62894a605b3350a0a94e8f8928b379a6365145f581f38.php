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

/* AppBundle:Expediente:index.html.twig */
class __TwigTemplate_829aa766f6c19aa9d341046c393195850e0ed42ff7f25e11b9b8ae55a824aabd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:index.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:index.html.twig", 1);
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
        echo "
    
    
    <style>
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;           
        }
        .panel{
            font-size: 11px;        
        }
        .form-exp{
            font-size:15px;
            padding:10px;
        }
        .title{
            font-size:16px;
        }
    </style>


    <div class=\"col-xs-9\">
        <div class=\"panel panel-primary \">
            <div class=\"title panel-heading\">Carga de datos -> Expediente</div>
            <div class=\"panel panel-body\">
                <br/>
                ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "        
                <div class=\"col-lg-14\">
                   
                    <div class=\"col-lg-6\">
                        <label class=\"exp text-default\">NRO. DE EXPEDIENTE</label>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nroExpediente", []), 'errors');
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nroExpediente", []), 'widget');
        echo "
                    </div>
                     <div class=\"col-lg-2\">
                        <label class=\"text-default\">NRO. FOJAS</label>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'errors');
        echo "
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'widget');
        echo "
                    </div>
                    <div class=\"col-lg-3 \">
                        <label class=\"text-default\">TIPO</label>
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'errors');
        echo "
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'widget');
        echo "
                    </div>
                    <div class=\"col-lg-5\">
                        <label class=\"text-default\">DEPENDENCIA</label>
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "iniciadorDependencia", []), 'errors');
        echo "
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "iniciadorDependencia", []), 'widget');
        echo "
                    </div>   
                     <div class=\"col-lg-3\">
                        <label class=\"text-default\">FECHA DE INICIO</label>
                         ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'row', ["id" => "datepicker"]);
        echo " 
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'errors');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'widget');
        echo "
                    </div>  
                      <div class=\"col-lg-3\">
                        <label class=\"text-default\">FECHA DE FINALIZACION</label>
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'row', ["id" => "datepicker"]);
        echo " 
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'errors');
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'widget');
        echo "
                    </div>   
                     <div class=\"col-lg-3\">
                        <label class=\"text-default\">UBICACION ACTUAL</label>
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ubicacionActual", []), 'errors');
        echo "
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ubicacionActual", []), 'widget');
        echo "
                    </div>   
                </div>
                <div class=\"col-lg-12\">
                        <label class=\"text-default\">CONCEPTO</label>
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'errors');
        echo "
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'widget');
        echo "
                        <hr/>
                </div>
                <div class=\"col-lg-3 float left\">
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", []), 'widget');
        echo "
                </div>
               ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Expediente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 83,  196 => 81,  189 => 77,  185 => 76,  177 => 71,  173 => 70,  166 => 66,  162 => 65,  158 => 64,  151 => 60,  147 => 59,  143 => 58,  136 => 54,  132 => 53,  125 => 49,  121 => 48,  114 => 44,  110 => 43,  103 => 39,  99 => 38,  91 => 33,  60 => 4,  51 => 3,  29 => 1,);
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
        .panel{
            font-size: 11px;        
        }
        .form-exp{
            font-size:15px;
            padding:10px;
        }
        .title{
            font-size:16px;
        }
    </style>


    <div class=\"col-xs-9\">
        <div class=\"panel panel-primary \">
            <div class=\"title panel-heading\">Carga de datos -> Expediente</div>
            <div class=\"panel panel-body\">
                <br/>
                {{form_start(form,{'action':'','method':'POST'})}}        
                <div class=\"col-lg-14\">
                   
                    <div class=\"col-lg-6\">
                        <label class=\"exp text-default\">NRO. DE EXPEDIENTE</label>
                        {{ form_errors(form.nroExpediente) }}
                        {{ form_widget(form.nroExpediente) }}
                    </div>
                     <div class=\"col-lg-2\">
                        <label class=\"text-default\">NRO. FOJAS</label>
                        {{ form_errors(form.fojas) }}
                        {{ form_widget(form.fojas) }}
                    </div>
                    <div class=\"col-lg-3 \">
                        <label class=\"text-default\">TIPO</label>
                        {{ form_errors(form.tipo) }}
                        {{ form_widget(form.tipo) }}
                    </div>
                    <div class=\"col-lg-5\">
                        <label class=\"text-default\">DEPENDENCIA</label>
                        {{ form_errors(form.iniciadorDependencia) }}
                        {{ form_widget(form.iniciadorDependencia) }}
                    </div>   
                     <div class=\"col-lg-3\">
                        <label class=\"text-default\">FECHA DE INICIO</label>
                         {{ form_row(form.fechaInicio, { 'id': 'datepicker' })}} 
                        {{ form_errors(form.fechaInicio) }}
                        {{ form_widget(form.fechaInicio) }}
                    </div>  
                      <div class=\"col-lg-3\">
                        <label class=\"text-default\">FECHA DE FINALIZACION</label>
                        {{ form_row(form.fechaFin, { 'id': 'datepicker' })}} 
                        {{ form_errors(form.fechaFin) }}
                        {{ form_widget(form.fechaFin) }}
                    </div>   
                     <div class=\"col-lg-3\">
                        <label class=\"text-default\">UBICACION ACTUAL</label>
                        {{ form_errors(form.ubicacionActual) }}
                        {{ form_widget(form.ubicacionActual) }}
                    </div>   
                </div>
                <div class=\"col-lg-12\">
                        <label class=\"text-default\">CONCEPTO</label>
                        {{ form_errors(form.concepto) }}
                        {{ form_widget(form.concepto) }}
                        <hr/>
                </div>
                <div class=\"col-lg-3 float left\">
                        {{ form_widget(form.Guardar) }}
                </div>
               {{form_end(form)}}
            </div>
        </div>
    </div>
{% endblock %}", "AppBundle:Expediente:index.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/index.html.twig");
    }
}
