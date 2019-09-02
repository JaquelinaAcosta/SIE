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

/* AppBundle:Ubicacion:persona.html.twig */
class __TwigTemplate_6d29912d8fb6035b041ba81fde74f64b217b0063e74152400bd92c81751524c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Ubicacion:persona.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Ubicacion:persona.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Ubicacion:persona.html.twig", 1);
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
        <i clas=\"fas fa-edit\"></i> ALTA DE PERSONA

        <hr/>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
        <div class=\"row\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"row\">

                ";
        // line 26
        if ($this->getAttribute(($context["form"] ?? null), "dependencia", [], "any", true, true)) {
            // line 27
            echo "                    <div class=\"col-lg-6\">
                        <label class=\"text-default\">Dependencia</label>
                        ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dependencia", []), 'errors');
            echo "
                        ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dependencia", []), 'widget');
            echo "
                    </div>
                    <div class=\"col-lg-10\"></div>
                ";
        }
        // line 34
        echo "
                <div class=\"col-lg-6\">
                    <label class=\"text-default\">Nombre</label>
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", []), 'errors');
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", []), 'widget');
        echo "
                </div>
                <div class=\"col-lg-4\"></div>
                <div class=\"col-lg-6\">
                    <label class=\"text-default\">Apellido</label>
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "apellido", []), 'errors');
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "apellido", []), 'widget');
        echo "
                </div>
                <div class=\"col-lg-4\"></div>
                <div class=\"col-lg-6\">
                    <label class=\"text-default\">DNI</label>
                    <div class=\" text-danger\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dni", []), 'errors');
        echo "</div>
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dni", []), 'widget');
        echo "
                </div>
                <div class=\"col-lg-4\"></div>
                <div class=\"col-lg-6\">
                    <label class=\"text-default\">Cargo</label>
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cargo", []), 'errors');
        echo "
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cargo", []), 'widget');
        echo "
                </div>
            </div>

        </div>
        <hr/>
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Aceptar", []), 'widget');
        echo "
        <button class=\"btn btn-secondary\" type=\"button\" onclick=\"history.back()\"  role=\"button\">Volver</button>

        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Ubicacion:persona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 65,  161 => 62,  152 => 56,  148 => 55,  140 => 50,  136 => 49,  128 => 44,  124 => 43,  116 => 38,  112 => 37,  107 => 34,  100 => 30,  96 => 29,  92 => 27,  90 => 26,  84 => 23,  79 => 21,  60 => 4,  51 => 3,  29 => 1,);
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
        <i clas=\"fas fa-edit\"></i> ALTA DE PERSONA

        <hr/>
        {{form_start(form,{'action':'','method':'POST'})}}
        <div class=\"row\">
            {{ form_errors(form) }}
            <div class=\"row\">

                {% if form.dependencia is defined %}
                    <div class=\"col-lg-6\">
                        <label class=\"text-default\">Dependencia</label>
                        {{ form_errors(form.dependencia) }}
                        {{ form_widget(form.dependencia) }}
                    </div>
                    <div class=\"col-lg-10\"></div>
                {% endif %}

                <div class=\"col-lg-6\">
                    <label class=\"text-default\">Nombre</label>
                    {{ form_errors(form.nombre) }}
                    {{ form_widget(form.nombre) }}
                </div>
                <div class=\"col-lg-4\"></div>
                <div class=\"col-lg-6\">
                    <label class=\"text-default\">Apellido</label>
                    {{ form_errors(form.apellido) }}
                    {{ form_widget(form.apellido) }}
                </div>
                <div class=\"col-lg-4\"></div>
                <div class=\"col-lg-6\">
                    <label class=\"text-default\">DNI</label>
                    <div class=\" text-danger\">{{ form_errors(form.dni) }}</div>
                    {{ form_widget(form.dni) }}
                </div>
                <div class=\"col-lg-4\"></div>
                <div class=\"col-lg-6\">
                    <label class=\"text-default\">Cargo</label>
                    {{ form_errors(form.cargo) }}
                    {{ form_widget(form.cargo) }}
                </div>
            </div>

        </div>
        <hr/>
        {{ form_widget(form.Aceptar) }}
        <button class=\"btn btn-secondary\" type=\"button\" onclick=\"history.back()\"  role=\"button\">Volver</button>

        {{form_end(form)}}
    </div>
{% endblock %}", "AppBundle:Ubicacion:persona.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Ubicacion/persona.html.twig");
    }
}
