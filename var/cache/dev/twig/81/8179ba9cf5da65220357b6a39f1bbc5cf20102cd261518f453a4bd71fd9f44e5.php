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

/* AppBundle:Expediente:add.html.twig */
class __TwigTemplate_8c5f74ff5f6306d6a4d151cf13253aafc5a75cfa38807be853dbb51144d1c14c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:add.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:add.html.twig", 1);
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

        .cod{
            width:60px;

        }
        .num{
            width:115px;
            margin-left:-4px;
        }
        .dig{
            width:35px;
            margin-left:-19px;

        }


    </style>

    <div class=\"content\">
        <div class=\"col-ls-12\">
            <br/>
            <strong>Carga de Expediente</strong>
            <hr/>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
            <div class=\"filtro_panel\"
                 <label class=\"text-default\">Número de Expediente</label>
                <div class=\"row\">
                    <div class=\"cod col-lg-1\">
                        <label class=\"exp text-default\"></label>
                        <div class=\" text-danger\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoExpediente", []), 'errors');
        echo "</div>
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoExpediente", []), 'widget');
        echo "
                    </div>                   
                    <div class=\"num col-lg-2\">
                        <label class=\"exp text-default\"></label>
                        <div class=\" text-danger\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroExpediente", []), 'errors');
        echo "</div>
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroExpediente", []), 'widget');
        echo "
                    </div>
                    <div class=\"dig col-lg-1\">
                        <label class=\"exp text-default\"></label>
                        <div class=\" text-danger\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "digitoExpediente", []), 'errors');
        echo "</div>
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "digitoExpediente", []), 'widget');
        echo "
                    </div>
                </div>
                <hr/>
                <div class=\"row\">                   
                    <div class=\"col-lg-4 \">
                        <label class=\"text-default\">Tipo</label>
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'errors');
        echo "
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'widget');
        echo "
                    </div>
                    <div class=\"space col-lg-7\"></div>
                    <div class=\"col-lg-4\">
                        <label class=\"text-default\">Fojas</label>
                        <div class=\" text-danger\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'errors');
        echo "</div>
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'widget');
        echo "
                    </div>    
                    <div class=\"space col-lg-7\"></div>
                    <div class=\"col-lg-6\">
                        <label class=\"text-default\">Tema</label>
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tema", []), 'errors');
        echo "
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tema", []), 'widget');
        echo "
                    </div>     
                    <div class=\"space col-lg-6\"></div>
                    <div class=\"col-lg-4\">
                        <label class=\"text-default\">Fecha de Inicio</label>
                        <div class=\" text-danger\">";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'row', ["id" => "date1"]);
        echo " </div>
                        ";
        // line 89
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'widget');
        echo "
                    </div>  
                    <div class=\"col-lg-4\">
                        <label class=\"text-default\">Fecha de Fin.</label>
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'row', ["id" => "date2"]);
        echo " 
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'errors');
        echo "
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'widget');
        echo "
                    </div>                      
                </div>
                <hr/>              
                <label class=\"text-default\">Concepto</label>
                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'errors');
        echo "
                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'widget');
        echo "
                <hr/>

                <div class=\"col-lg-3 float left\">
                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", []), 'widget');
        echo "
                     <button class=\"btn btn-secondary\" type=\"button\" onclick=\"history.back()\"  role=\"button\">Volver</button>
                </div>
            </div>
            ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
        <script>
            \$('#expediente_tema').autocompleter({
                url_list: \"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
                url_get: \"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_get");
        echo "\"
            });

        </script>     


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Expediente:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 115,  238 => 114,  230 => 109,  223 => 105,  216 => 101,  212 => 100,  204 => 95,  200 => 94,  196 => 93,  188 => 89,  184 => 87,  176 => 82,  172 => 81,  164 => 76,  160 => 75,  152 => 70,  148 => 69,  138 => 62,  134 => 61,  127 => 57,  123 => 56,  116 => 52,  112 => 51,  103 => 45,  51 => 3,  29 => 1,);
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

        .cod{
            width:60px;

        }
        .num{
            width:115px;
            margin-left:-4px;
        }
        .dig{
            width:35px;
            margin-left:-19px;

        }


    </style>

    <div class=\"content\">
        <div class=\"col-ls-12\">
            <br/>
            <strong>Carga de Expediente</strong>
            <hr/>
            {{form_start(form,{'action':'','method':'POST'})}}
            <div class=\"filtro_panel\"
                 <label class=\"text-default\">Número de Expediente</label>
                <div class=\"row\">
                    <div class=\"cod col-lg-1\">
                        <label class=\"exp text-default\"></label>
                        <div class=\" text-danger\">{{ form_errors(form.codigoExpediente) }}</div>
                        {{ form_widget(form.codigoExpediente) }}
                    </div>                   
                    <div class=\"num col-lg-2\">
                        <label class=\"exp text-default\"></label>
                        <div class=\" text-danger\">{{ form_errors(form.numeroExpediente) }}</div>
                        {{ form_widget(form.numeroExpediente) }}
                    </div>
                    <div class=\"dig col-lg-1\">
                        <label class=\"exp text-default\"></label>
                        <div class=\" text-danger\">{{ form_errors(form.digitoExpediente) }}</div>
                        {{ form_widget(form.digitoExpediente) }}
                    </div>
                </div>
                <hr/>
                <div class=\"row\">                   
                    <div class=\"col-lg-4 \">
                        <label class=\"text-default\">Tipo</label>
                        {{ form_errors(form.tipo) }}
                        {{ form_widget(form.tipo) }}
                    </div>
                    <div class=\"space col-lg-7\"></div>
                    <div class=\"col-lg-4\">
                        <label class=\"text-default\">Fojas</label>
                        <div class=\" text-danger\">{{ form_errors(form.fojas) }}</div>
                        {{ form_widget(form.fojas) }}
                    </div>    
                    <div class=\"space col-lg-7\"></div>
                    <div class=\"col-lg-6\">
                        <label class=\"text-default\">Tema</label>
                        {{ form_errors(form.tema) }}
                        {{ form_widget(form.tema) }}
                    </div>     
                    <div class=\"space col-lg-6\"></div>
                    <div class=\"col-lg-4\">
                        <label class=\"text-default\">Fecha de Inicio</label>
                        <div class=\" text-danger\">{{ form_row(form.fechaInicio, { 'id': 'date1' })}} </div>
                        {#                        {{ form_errors(form.fechaInicio) }}#}
                        {{ form_widget(form.fechaInicio) }}
                    </div>  
                    <div class=\"col-lg-4\">
                        <label class=\"text-default\">Fecha de Fin.</label>
                        {{ form_row(form.fechaFin, { 'id': 'date2' })}} 
                        {{ form_errors(form.fechaFin) }}
                        {{ form_widget(form.fechaFin) }}
                    </div>                      
                </div>
                <hr/>              
                <label class=\"text-default\">Concepto</label>
                {{ form_errors(form.concepto) }}
                {{ form_widget(form.concepto) }}
                <hr/>

                <div class=\"col-lg-3 float left\">
                    {{ form_widget(form.Guardar) }}
                     <button class=\"btn btn-secondary\" type=\"button\" onclick=\"history.back()\"  role=\"button\">Volver</button>
                </div>
            </div>
            {{form_end(form)}}

        </div>
        <script>
            \$('#expediente_tema').autocompleter({
                url_list: \"{{ path('tema_search') }}\",
                url_get: \"{{ path('tema_get') }}\"
            });

        </script>     


    {% endblock %}", "AppBundle:Expediente:add.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/add.html.twig");
    }
}
