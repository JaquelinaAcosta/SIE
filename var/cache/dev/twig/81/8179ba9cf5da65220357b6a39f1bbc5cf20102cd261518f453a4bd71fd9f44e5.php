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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:add.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:add.html.twig", 1);
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

    <div class=\"col-ls-12\" style=\"padding-left:  30px; padding-right:  30px\">
        <div class=\"panel panel-primary \">
            <div class=\"title panel-heading\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["accion"] ?? $this->getContext($context, "accion")), "html", null, true);
        echo " -> Expediente</div>
            <div class=\"panel panel-body\">
                <br/>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "        
                <div class=\"col-lg-14\">
                    <div class=\"col-lg-5\">
                        <label class=\"exp text-default\">NRO. DE EXPEDIENTE</label>
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nroExpediente", []), 'errors');
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nroExpediente", []), 'widget');
        echo "
                    </div>
                    <div class=\"col-lg-2 \">
                        <label class=\"text-default\">TIPO</label>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'errors');
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'widget');
        echo "
                    </div>
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FOJAS</label>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'errors');
        echo "
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'widget');
        echo "
                    </div>    
                    <div class=\"col-lg-6 \">
                        <label class=\"text-default\">CODIGO TEMA</label>
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tema", []), 'errors');
        echo "
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tema", []), 'widget');
        echo "
                    </div>                                   
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FECHA DE INICIO</label>
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'row', ["id" => "date1"]);
        echo " 
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'errors');
        echo "
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'widget');
        echo "
                    </div>  
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FECHA DE FIN.</label>
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'row', ["id" => "date2"]);
        echo " 
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'errors');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'widget');
        echo "
                    </div>                      
                </div>
                <hr/>              
                <div class=\"col-lg-12\">
                    <label class=\"text-default\">CONCEPTO</label>
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'errors');
        echo "
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'widget');
        echo "
                    <hr/>
                </div>
              ";
        // line 84
        echo "                <div class=\"col-lg-3 float left\">
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", []), 'widget');
        echo "
                    <a class=\"btn btn-default\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                </div>
                ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>   

    <script>
        \$('#expediente_tema').autocompleter({
            url_list: \"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
            url_get: \"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_get");
        echo "\"
        });

    </script>     

   ";
        // line 167
        echo "
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
        return array (  214 => 167,  206 => 96,  202 => 95,  192 => 88,  186 => 85,  183 => 84,  177 => 68,  173 => 67,  164 => 61,  160 => 60,  156 => 59,  149 => 55,  145 => 54,  141 => 53,  134 => 49,  130 => 48,  123 => 44,  119 => 43,  112 => 39,  108 => 38,  101 => 34,  97 => 33,  90 => 29,  84 => 26,  51 => 3,  29 => 1,);
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

    <div class=\"col-ls-12\" style=\"padding-left:  30px; padding-right:  30px\">
        <div class=\"panel panel-primary \">
            <div class=\"title panel-heading\">{{ accion }} -> Expediente</div>
            <div class=\"panel panel-body\">
                <br/>
                {{form_start(form,{'action':'','method':'POST'})}}        
                <div class=\"col-lg-14\">
                    <div class=\"col-lg-5\">
                        <label class=\"exp text-default\">NRO. DE EXPEDIENTE</label>
                        {{ form_errors(form.nroExpediente) }}
                        {{ form_widget(form.nroExpediente) }}
                    </div>
                    <div class=\"col-lg-2 \">
                        <label class=\"text-default\">TIPO</label>
                        {{ form_errors(form.tipo) }}
                        {{ form_widget(form.tipo) }}
                    </div>
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FOJAS</label>
                        {{ form_errors(form.fojas) }}
                        {{ form_widget(form.fojas) }}
                    </div>    
                    <div class=\"col-lg-6 \">
                        <label class=\"text-default\">CODIGO TEMA</label>
                        {{ form_errors(form.tema) }}
                        {{ form_widget(form.tema) }}
                    </div>                                   
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FECHA DE INICIO</label>
                        {{ form_row(form.fechaInicio, { 'id': 'date1' })}} 
                        {{ form_errors(form.fechaInicio) }}
                        {{ form_widget(form.fechaInicio) }}
                    </div>  
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FECHA DE FIN.</label>
                        {{ form_row(form.fechaFin, { 'id': 'date2' })}} 
                        {{ form_errors(form.fechaFin) }}
                        {{ form_widget(form.fechaFin) }}
                    </div>                      
                </div>
                <hr/>              
                <div class=\"col-lg-12\">
                    <label class=\"text-default\">CONCEPTO</label>
                    {{ form_errors(form.concepto) }}
                    {{ form_widget(form.concepto) }}
                    <hr/>
                </div>
              {#  <div class=\"col-lg-12\">
                    <label class=\"text-default\">EXPEDIENTE/S ASOCIADOS</label>                 
                    <div class=\"expediente_items\">
                        {% for expediente_asociado in form.expedientes_asociados %}
                            {{ form_row(expediente_asociado) }}
                        {% endfor %}      
                    </div>
                    <div class=\"add float right\"></div>
                    <div class=\"expedientes\" data-prototype=\"{{ form_widget(form.expedientes_asociados.vars.prototype)|e('html_attr') }}\">

                    </div>
                    <hr/>     
                </div>#}
                <div class=\"col-lg-3 float left\">
                    {{ form_widget(form.Guardar) }}
                    <a class=\"btn btn-default\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                </div>
                {{form_end(form)}}
            </div>
        </div>
    </div>   

    <script>
        \$('#expediente_tema').autocompleter({
            url_list: \"{{ path('tema_search') }}\",
            url_get: \"{{ path('tema_get') }}\"
        });

    </script>     

   {# <script>
        var \$collectionHolder;
        // setup an \"add a tag\" link
        var \$addResponsableButton = \$('<button type=\"button\" class=\"add_responsable form-control btn btn-success\">Agregar nuevo Expediente Asociado</button>');
        var \$newLinkLi = \$('.add').append(\$addResponsableButton);
        var totalCount = 0;
        jQuery(document).ready(function () {
            // Get the ul that holds the collection of tags
            \$collectionHolder = \$('.expedientes');
            \$collectionHolder2 = \$('.expediente_items');
            // add a delete link to all of the existing tag form li elements

            // add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length + \$collectionHolder2.find(':input').length);
            totalCount = \$collectionHolder.data('index');

            for (var i = 0; i < totalCount; i++) {
                addTagFormDeleteLink(\$('.expediente_items').children().eq(i), \$collectionHolder);
            }

            \$addResponsableButton.on('click', function (e) {
                // add a new tag form (see next code block)
                addResponsableForm(\$collectionHolder, \$newLinkLi);
            });
        });
        function addTagFormDeleteLink(\$tagFormLi, \$collectionHolder) {
            var \$removeFormButton = \$('<button type=\"button\">Delete this tag</button>');
            \$tagFormLi.append(\$removeFormButton);
            \$removeFormButton.on('click', function (e) {
                // remove the li for the tag form
                \$tagFormLi.remove();
                var index = \$collectionHolder.data('index');
                \$collectionHolder.data('index', index - 1);
            });
        }
        function addResponsableForm(\$collectionHolder, \$newLinkLi) {
            // Get the data-prototype explained earlier
            var prototype = \$collectionHolder.data('prototype');
            // get the new index
            var index = \$collectionHolder.data('index');
            var newForm = prototype;
            // You need this only if you didn't set 'label' => false in your tags field in TaskType
            // Replace '__name__label__' in the prototype's HTML to
            // instead be a number based on how many items we have
            // newForm = newForm.replace(/__name__label__/g, index);
            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            newForm = newForm.replace(/__name__/g, index);

            // increase the index with one for the next item
            \$collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a tag\" link li
            var \$newFormLi = \$('.expediente_items').append(newForm);
            if (index > 0) {
                //console.log(totalCount);
                addTagFormDeleteLink(\$(\$newFormLi).children().eq(index - 1), \$collectionHolder);
            }
            //console.log(\$(\$newFormLi).children().eq(index-1));
            \$newLinkLi.before(\$newFormLi);
        }
    </script>         #}

{% endblock %}", "AppBundle:Expediente:add.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/Expediente/add.html.twig");
    }
}
