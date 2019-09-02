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

/* AppBundle:Dependencia:add.html.twig */
class __TwigTemplate_1f39ff6449f84471f76e144ab8b227252e8290b3e8d1b3b46e3672d04302af89 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Dependencia:add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Dependencia:add.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Dependencia:add.html.twig", 1);
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

    </style>
    
    <div class=\"content\">
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
        <div class=\"title\">
            ";
        // line 21
        echo twig_escape_filter($this->env, ($context["accion"] ?? $this->getContext($context, "accion")), "html", null, true);
        echo " Dependencia
        </div>
        <hr/>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Descripción(<span class=\"text-danger\">*</span>)</label>                 
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcion", []), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcion", []), 'widget');
        echo "
            </div>
            <div class=\"space col-lg-6\"></div>
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Dependencia Padre(<span class=\"text-danger\">*</span>)</label>                 
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dependenciaPadre", []), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dependenciaPadre", []), 'widget');
        echo "
            </div>
            <div class=\"space col-lg-6\"></div>
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Responsable(<span class=\"text-danger\">*</span>)</label>                 
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsable", []), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsable", []), 'widget');
        echo "
            </div>
            <div class=\"space col-lg-6\"></div>
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Nivel(<span class=\"text-danger\">*</span>)</label>                 
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivel", []), 'errors');
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivel", []), 'widget');
        echo "
            </div>         
        </div>
        <hr/>
        <div class=\"col-lg-3 float left\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Aceptar", []), 'widget');
        echo "
            <button class=\"form-submit btn btn-secondary\" onclick=\"history.back()\"  role=\"button\">Volver</button>
        </div>
        ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <script>
        \$('#dependencia_responsable').autocompleter({
            url_list: \"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_search");
        echo "\",
            url_get: \"";
        // line 59
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
        return "AppBundle:Dependencia:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 59,  152 => 58,  145 => 54,  139 => 51,  131 => 46,  127 => 45,  119 => 40,  115 => 39,  107 => 34,  103 => 33,  95 => 28,  91 => 27,  82 => 21,  77 => 19,  60 => 4,  51 => 3,  29 => 1,);
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

    </style>
    
    <div class=\"content\">
        {{form_start(form,{'action':'' ,'method':'POST'})}}
        <div class=\"title\">
            {{ accion }} Dependencia
        </div>
        <hr/>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Descripción(<span class=\"text-danger\">*</span>)</label>                 
                {{ form_errors(form.descripcion) }}
                {{ form_widget(form.descripcion) }}
            </div>
            <div class=\"space col-lg-6\"></div>
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Dependencia Padre(<span class=\"text-danger\">*</span>)</label>                 
                {{ form_errors(form.dependenciaPadre) }}
                {{ form_widget(form.dependenciaPadre) }}
            </div>
            <div class=\"space col-lg-6\"></div>
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Responsable(<span class=\"text-danger\">*</span>)</label>                 
                {{ form_errors(form.responsable) }}
                {{ form_widget(form.responsable) }}
            </div>
            <div class=\"space col-lg-6\"></div>
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Nivel(<span class=\"text-danger\">*</span>)</label>                 
                {{ form_errors(form.nivel) }}
                {{ form_widget(form.nivel) }}
            </div>         
        </div>
        <hr/>
        <div class=\"col-lg-3 float left\">
            {{ form_widget(form.Aceptar) }}
            <button class=\"form-submit btn btn-secondary\" onclick=\"history.back()\"  role=\"button\">Volver</button>
        </div>
        {{form_end(form)}}
    </div>
    <script>
        \$('#dependencia_responsable').autocompleter({
            url_list: \"{{ path('persona_search') }}\",
            url_get: \"{{ path('persona_get') }}\"
        });

    </script>
{% endblock %}
", "AppBundle:Dependencia:add.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Dependencia/add.html.twig");
    }
}
