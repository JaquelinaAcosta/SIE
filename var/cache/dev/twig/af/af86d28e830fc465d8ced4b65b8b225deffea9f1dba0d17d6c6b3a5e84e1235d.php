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

/* Dependencia/add.html.twig */
class __TwigTemplate_7a3703b05bb8b0a03ec50548ab791179a962f8b2fd60a71d806d4f635af54cb2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dependencia/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dependencia/add.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Dependencia/add.html.twig", 1);
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

        echo " 
    <div class=\"content\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
        <div class=\"title\">
            ";
        // line 7
        echo twig_escape_filter($this->env, ($context["accion"] ?? $this->getContext($context, "accion")), "html", null, true);
        echo " Dependencia
        </div>
        <hr/>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Descripción(<span class=\"text-danger\">*</span>)</label>                 
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcion", []), 'errors');
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcion", []), 'widget');
        echo "
            </div>
            <div class=\"space col-lg-6\"></div>
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Dependencia Padre(<span class=\"text-danger\">*</span>)</label>                 
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dependenciaPadre", []), 'errors');
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dependenciaPadre", []), 'widget');
        echo "
            </div>
            <div class=\"space col-lg-6\"></div>
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Responsable(<span class=\"text-danger\">*</span>)</label>                 
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsable", []), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsable", []), 'widget');
        echo "
            </div>
            <div class=\"space col-lg-6\"></div>
            <div class=\"col-lg-6\">
                <label class=\"text-default\">Nivel(<span class=\"text-danger\">*</span>)</label>                 
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivel", []), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivel", []), 'widget');
        echo "
            </div>         
        </div>
        <hr/>
        <div class=\"col-lg-3 float left\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Aceptar", []), 'widget');
        echo "
            <button class=\"form-submit btn btn-secondary\" onclick=\"history.back()\"  role=\"button\">Volver</button>
        </div>
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <script>
        \$('#dependencia_responsable').autocompleter({
            url_list: \"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_search");
        echo "\",
            url_get: \"";
        // line 45
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
        return "Dependencia/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  138 => 44,  131 => 40,  125 => 37,  117 => 32,  113 => 31,  105 => 26,  101 => 25,  93 => 20,  89 => 19,  81 => 14,  77 => 13,  68 => 7,  63 => 5,  51 => 3,  29 => 1,);
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
", "Dependencia/add.html.twig", "/var/www/html/SIE/app/Resources/views/Dependencia/add.html.twig");
    }
}
