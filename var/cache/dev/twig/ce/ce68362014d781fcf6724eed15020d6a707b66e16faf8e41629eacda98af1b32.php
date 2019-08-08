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

/* AppBundle:Usuario:editarUsuario.html.twig */
class __TwigTemplate_7696ec8bc5621571ac85c4ee2017015669e76f76def8d1d74f8d193cdd41aa0a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuario:editarUsuario.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuario:editarUsuario.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Usuario:editarUsuario.html.twig", 1);
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
            <div class=\"title panel-heading text-center\">Configurar Cuenta de Usuario</div>
            <div class=\"panel panel-body\">
                <br/>
                  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 44
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 45
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 50
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 51
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "        
                        <label class=\"float exp\">NOMBRE DE USUARIO</label>
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "iup", []), 'errors');
        echo "
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "iup", []), 'widget');
        echo "
                        <label class=\"float left\">EMAIL</label>
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget');
        echo "
                        <label class=\"float left\">CONTRASEÑA</label>
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenia", []), 'errors');
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrasenia", []), 'widget');
        echo "
                        
                        ";
        // line 65
        if ($this->getAttribute(($context["form"] ?? null), "persona", [], "any", true, true)) {
            // line 66
            echo "                        
                        <label class=\"float left\">PERSONA GESTIONANTE</label>
                        ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "persona", []), 'errors');
            echo "
                        ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "persona", []), 'widget');
            echo " 
                        
                          ";
        }
        // line 72
        echo "                        
                        ";
        // line 73
        if ($this->getAttribute(($context["form"] ?? null), "role", [], "any", true, true)) {
            // line 74
            echo "                            
                                    <label class=\"float left\">ROLES</label>
                               ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", []), 'errors');
            echo "
                               ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", []), 'widget');
            echo "        
                            
                       ";
        }
        // line 80
        echo "                        
                                                       
                        <br/>
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Aceptar", []), 'widget');
        echo "
                   
                    <a class=\"btn btn-default\" onclick=\"history.back()\"  role=\"button\">Volver</a>

             
                ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>           
            
<script>        
        \$('#usuario_persona').autocompleter({
            url_list: \"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_search");
        echo "\",
            url_get: \"";
        // line 96
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
        return "AppBundle:Usuario:editarUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 96,  227 => 95,  217 => 88,  209 => 83,  204 => 80,  198 => 77,  194 => 76,  190 => 74,  188 => 73,  185 => 72,  179 => 69,  175 => 68,  171 => 66,  169 => 65,  164 => 63,  160 => 62,  155 => 60,  151 => 59,  146 => 57,  142 => 56,  136 => 54,  127 => 51,  124 => 50,  120 => 49,  117 => 48,  108 => 45,  105 => 44,  101 => 43,  60 => 4,  51 => 3,  29 => 1,);
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
            <div class=\"title panel-heading text-center\">Configurar Cuenta de Usuario</div>
            <div class=\"panel panel-body\">
                <br/>
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
                        
                        {% if form.persona is defined %}
                        
                        <label class=\"float left\">PERSONA GESTIONANTE</label>
                        {{ form_errors(form.persona) }}
                        {{ form_widget(form.persona) }} 
                        
                          {% endif %}
                        
                        {% if form.role is defined %}
                            
                                    <label class=\"float left\">ROLES</label>
                               {{ form_errors(form.role) }}
                               {{ form_widget(form.role) }}        
                            
                       {% endif %}
                        
                                                       
                        <br/>
                    {{ form_widget(form.Aceptar) }}
                   
                    <a class=\"btn btn-default\" onclick=\"history.back()\"  role=\"button\">Volver</a>

             
                {{form_end(form)}}
            </div>
        </div>
    </div>           
            
<script>        
        \$('#usuario_persona').autocompleter({
            url_list: \"{{ path('persona_search') }}\",
            url_get: \"{{ path('persona_get') }}\"
        });
    </script>
    
{% endblock %}", "AppBundle:Usuario:editarUsuario.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Usuario/editarUsuario.html.twig");
    }
}
