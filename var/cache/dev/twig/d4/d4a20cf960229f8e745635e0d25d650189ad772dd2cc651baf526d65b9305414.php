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

/* Expediente/add.html.twig */
class __TwigTemplate_683c37f1b0a3e7ac26856b1546026329c8178fea5b22fbc26492c0fcb495b2d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/add.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Expediente/add.html.twig", 1);
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
            <div class=\"title\">
                <strong>Carga de Expediente</strong>
            </div>
            <hr/>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
            <div class=\"filtro_panel\"
                 <label class=\"text-default\">Número de Expediente</label>
                <div class=\" text-danger\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoExpediente", []), 'errors');
        echo "</div>
                <div class=\" text-danger\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroExpediente", []), 'errors');
        echo "</div>
                <div class=\" text-danger\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "digitoExpediente", []), 'errors');
        echo "</div>
                <div class=\"row\">
                    <div class=\"cod col-lg-1\">
                        <label class=\"exp text-default\"></label>
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoExpediente", []), 'widget');
        echo "
                    </div>                   
                    <div class=\"num col-lg-2\">
                        <label class=\"exp text-default\"></label>

                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroExpediente", []), 'widget');
        echo "
                    </div>
                    <div class=\"dig col-lg-1\">
                        <label class=\"exp text-default\"></label>

                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "digitoExpediente", []), 'widget');
        echo "
                    </div>
                </div>
                <hr/>
                <div class=\"row\">                   
                    <div class=\"col-lg-4 \">
                        <label class=\"text-default\">Tipo</label>
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'errors');
        echo "
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'widget');
        echo "
                    </div>
                    <div class=\"space col-lg-7\"></div>
                    <div class=\"col-lg-4\">
                        <label class=\"text-default\">Fojas</label>
                        <div class=\" text-danger\">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'errors');
        echo "</div>
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'widget');
        echo "
                    </div>    
                    <div class=\"space col-lg-7\"></div>
                    <div class=\"col-lg-6\">
                        <label class=\"text-default\">Tema</label>
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tema", []), 'errors');
        echo "
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tema", []), 'widget');
        echo "
                    </div>     
                    <div class=\"space col-lg-6\"></div>
                    <div class=\"col-lg-4\">
                        <label class=\"text-default\">Fecha de Inicio</label>
                        <div class=\" text-danger\">";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'row', ["id" => "date1"]);
        echo " </div>
                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'widget');
        echo "
                    </div>  
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'errors');
        echo "
                    <div class=\"col-lg-4\">
                        <label class=\"text-default\">Fecha de Fin.</label>
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'row', ["id" => "date2"]);
        echo " 
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'widget');
        echo "
                    </div>                      
                </div>
                <hr/>              
                <label class=\"text-default\">Concepto</label>
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'errors');
        echo "
                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'widget');
        echo "
                <hr/>

                <div class=\"col-lg-3 float left\">
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", []), 'widget');
        echo "
                    <button class=\"btn btn-secondary\" type=\"button\" onclick=\"history.back()\"  role=\"button\">Volver</button>
                </div>
            </div>
            ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
        <script>
            \$('#expediente_tema').autocompleter({
                url_list: \"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
                url_get: \"";
        // line 118
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
        return "Expediente/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 118,  241 => 117,  233 => 112,  226 => 108,  219 => 104,  215 => 103,  207 => 98,  203 => 97,  197 => 94,  192 => 92,  188 => 91,  180 => 86,  176 => 85,  168 => 80,  164 => 79,  156 => 74,  152 => 73,  142 => 66,  134 => 61,  126 => 56,  119 => 52,  115 => 51,  111 => 50,  105 => 47,  51 => 3,  29 => 1,);
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
            <div class=\"title\">
                <strong>Carga de Expediente</strong>
            </div>
            <hr/>
            {{form_start(form,{'action':'','method':'POST'})}}
            <div class=\"filtro_panel\"
                 <label class=\"text-default\">Número de Expediente</label>
                <div class=\" text-danger\">{{ form_errors(form.codigoExpediente) }}</div>
                <div class=\" text-danger\">{{ form_errors(form.numeroExpediente) }}</div>
                <div class=\" text-danger\">{{ form_errors(form.digitoExpediente) }}</div>
                <div class=\"row\">
                    <div class=\"cod col-lg-1\">
                        <label class=\"exp text-default\"></label>
                        {{ form_widget(form.codigoExpediente) }}
                    </div>                   
                    <div class=\"num col-lg-2\">
                        <label class=\"exp text-default\"></label>

                        {{ form_widget(form.numeroExpediente) }}
                    </div>
                    <div class=\"dig col-lg-1\">
                        <label class=\"exp text-default\"></label>

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
                        {{ form_widget(form.fechaInicio) }}
                    </div>  
                    {{ form_errors(form.fechaFin) }}
                    <div class=\"col-lg-4\">
                        <label class=\"text-default\">Fecha de Fin.</label>
                        {{ form_row(form.fechaFin, { 'id': 'date2' })}} 
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


    {% endblock %}", "Expediente/add.html.twig", "/var/www/html/SIE/app/Resources/views/Expediente/add.html.twig");
    }
}
