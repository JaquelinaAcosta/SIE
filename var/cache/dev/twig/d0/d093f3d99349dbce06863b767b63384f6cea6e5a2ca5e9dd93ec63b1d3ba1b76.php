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

/* Expediente/resolucion.html.twig */
class __TwigTemplate_7b4f8d559107a14ec76e21f8e3815aa132848fe065cd15a38b5267c703b21e98 extends \Twig\Template
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
        // line 2
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/resolucion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/resolucion.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Expediente/resolucion.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_contentmain($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentmain"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentmain"));

        // line 5
        echo "    <div class=\"content\">
        <div class=\"title\">
            <strong>Resolución, expediente ";
        // line 7
        echo twig_escape_filter($this->env, ($context["expediente"] ?? $this->getContext($context, "expediente")), "html", null, true);
        echo "</strong>
        </div>
        <hr/>
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
        <div class=\"col-lg-4\">
            <label class=\"text-default\">Fecha de Resolución</label>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaResolucion", []), 'row', ["id" => "date1"]);
        echo " 
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaResolucion", []), 'errors');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaResolucion", []), 'widget');
        echo "
        </div>

        <div class=\"col-lg-3\">
            <label class=\"text-default\">Número de Resolución</label>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroResolucion", []), 'row', ["id" => "date1"]);
        echo " 
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroResolucion", []), 'errors');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroResolucion", []), 'widget');
        echo "
        </div>

        <div class=\"col-lg-4\">
            <label class=\"text-default\">Tipo</label>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'row', ["id" => "date1"]);
        echo " 
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'errors');
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'widget');
        echo "
        </div>
        <div class=\"col-lg-12\">
            <label class=\"text-default\">Observación</label>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observacion", []), 'errors');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observacion", []), 'widget');
        echo "
        </div>
        <hr/>
        <div class=\"col-lg-4\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Aceptar", []), 'widget');
        echo "
            <button class=\"btn btn-secondary\" type=\"button\" onclick=\"history.back()\"  role=\"button\">Volver</button>
        </div>

        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Expediente/resolucion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  134 => 38,  127 => 34,  123 => 33,  116 => 29,  112 => 28,  108 => 27,  100 => 22,  96 => 21,  92 => 20,  84 => 15,  80 => 14,  76 => 13,  70 => 10,  64 => 7,  60 => 5,  51 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"layout.html.twig\" %}

{% block contentmain %}
    <div class=\"content\">
        <div class=\"title\">
            <strong>Resolución, expediente {{expediente}}</strong>
        </div>
        <hr/>
        {{form_start(form,{'action':'','method':'POST'})}}
        <div class=\"col-lg-4\">
            <label class=\"text-default\">Fecha de Resolución</label>
            {{ form_row(form.fechaResolucion, { 'id': 'date1' })}} 
            {{ form_errors(form.fechaResolucion) }}
            {{ form_widget(form.fechaResolucion) }}
        </div>

        <div class=\"col-lg-3\">
            <label class=\"text-default\">Número de Resolución</label>
            {{ form_row(form.numeroResolucion, { 'id': 'date1' })}} 
            {{ form_errors(form.numeroResolucion) }}
            {{ form_widget(form.numeroResolucion) }}
        </div>

        <div class=\"col-lg-4\">
            <label class=\"text-default\">Tipo</label>
            {{ form_row(form.tipo, { 'id': 'date1' })}} 
            {{ form_errors(form.tipo) }}
            {{ form_widget(form.tipo) }}
        </div>
        <div class=\"col-lg-12\">
            <label class=\"text-default\">Observación</label>
            {{ form_errors(form.observacion) }}
            {{ form_widget(form.observacion) }}
        </div>
        <hr/>
        <div class=\"col-lg-4\">
            {{ form_widget(form.Aceptar) }}
            <button class=\"btn btn-secondary\" type=\"button\" onclick=\"history.back()\"  role=\"button\">Volver</button>
        </div>

        {{form_end(form)}}
    </div>
{% endblock %}", "Expediente/resolucion.html.twig", "/var/www/html/SIE/app/Resources/views/Expediente/resolucion.html.twig");
    }
}
