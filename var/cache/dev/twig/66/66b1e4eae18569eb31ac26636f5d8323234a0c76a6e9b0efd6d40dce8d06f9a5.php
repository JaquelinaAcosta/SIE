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

/* AppBundle:Usuario:index.html.twig */
class __TwigTemplate_8107ca37eb8caf829fa9253b3f99b383552ee94053ec04390d65638b6af2b711 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuario:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuario:index.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Usuario:index.html.twig", 1);
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
            padding:10px;            
         }
         body{
             background-color:#fff;
             
         }
         .title{
             font-size:24px;
         }
         .formu{
             width: 600px;
              float: none;
            margin: 0 auto;
         }
         .float{
             margin-top:15px;
         }
         body label{
             font-size: 12px;
             font-style:normal;
         }
         .panel-body{
             padding:30px;
         }
    </style>  
    
     <div class=\"formu col-ls-4\">
        <div class=\"panel panel-primary \">
            <div class=\"title panel-heading text-center\">Alta de Usuario</div>
            <div class=\"panel panel-body\">
                <br/>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "        
                        <label class=\"float exp\">NOMBRE DE USUARIO</label>
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "iup", []), 'errors');
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "iup", []), 'widget');
        echo "
                        <label class=\"float left\">EMAIL</label>
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget');
        echo "
                        <label class=\"float left\">CONTRASEÑA</label>
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenia", []), 'errors');
        echo "
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenia", []), 'widget');
        echo "
                        <label class=\"float left\">PERSONA GESTIONANTE</label>
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "persona", []), 'errors');
        echo "
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "persona", []), 'widget');
        echo "                  
                        <label class=\"float left\">ROLES</label>
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", []), 'errors');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", []), 'widget');
        echo "                                        
                        <hr/>
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Aceptar", []), 'widget');
        echo "          
                <hr/>               
                ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>           
            
    ";
        // line 68
        echo "
    <div class=\"persona\">
        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "persona", []), 'row');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 70,  164 => 68,  156 => 62,  151 => 60,  146 => 58,  142 => 57,  137 => 55,  133 => 54,  128 => 52,  124 => 51,  119 => 49,  115 => 48,  110 => 46,  106 => 45,  101 => 43,  60 => 4,  51 => 3,  29 => 1,);
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
            padding:10px;            
         }
         body{
             background-color:#fff;
             
         }
         .title{
             font-size:24px;
         }
         .formu{
             width: 600px;
              float: none;
            margin: 0 auto;
         }
         .float{
             margin-top:15px;
         }
         body label{
             font-size: 12px;
             font-style:normal;
         }
         .panel-body{
             padding:30px;
         }
    </style>  
    
     <div class=\"formu col-ls-4\">
        <div class=\"panel panel-primary \">
            <div class=\"title panel-heading text-center\">Alta de Usuario</div>
            <div class=\"panel panel-body\">
                <br/>
                {{form_start(form,{'action':'','method':'POST'})}}        
                        <label class=\"float exp\">NOMBRE DE USUARIO</label>
                        {{ form_errors(form.iup) }}
                        {{ form_widget(form.iup) }}
                        <label class=\"float left\">EMAIL</label>
                        {{ form_errors(form.email) }}
                        {{ form_widget(form.email) }}
                        <label class=\"float left\">CONTRASEÑA</label>
                        {{ form_errors(form.contrasenia) }}
                        {{ form_widget(form.contrasenia) }}
                        <label class=\"float left\">PERSONA GESTIONANTE</label>
                        {{ form_errors(form.persona) }}
                        {{ form_widget(form.persona) }}                  
                        <label class=\"float left\">ROLES</label>
                        {{ form_errors(form.role) }}
                        {{ form_widget(form.role) }}                                        
                        <hr/>
                    {{ form_widget(form.Aceptar) }}          
                <hr/>               
                {{form_end(form)}}
            </div>
        </div>
    </div>           
            
    {# Formulario embebido #}

    <div class=\"persona\">
        {{ form_row(form.persona) }}
    </div>
{% endblock %}", "AppBundle:Usuario:index.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Usuario/index.html.twig");
    }
}
