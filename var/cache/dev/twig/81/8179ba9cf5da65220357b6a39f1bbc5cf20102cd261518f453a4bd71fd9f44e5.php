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
            <strong>Nuevo Expediente</strong>
            <hr/>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
            <div class=\"filtro_panel\"
                    <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
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
                    <div class=\"col-lg-3 \">
                        <label class=\"text-default\">TIPO</label>
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'errors');
        echo "
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'widget');
        echo "
                    </div>
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FOJAS</label>
                        <div class=\" text-danger\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'errors');
        echo "</div>
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'widget');
        echo "
                    </div>    
                    <div class=\"col-lg-7\">
                        <label class=\"text-default\">TEMA</label>
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tema", []), 'errors');
        echo "
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tema", []), 'widget');
        echo "
                    </div>     
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FECHA DE INICIO</label>
                        <div class=\" text-danger\">";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'row', ["id" => "date1"]);
        echo " </div>
";
        // line 86
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'widget');
        echo "
                    </div>  
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FECHA DE FIN.</label>
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'row', ["id" => "date2"]);
        echo " 
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'errors');
        echo "
                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'widget');
        echo "
                    </div>                      
                </div>
                <hr/>              
                <label class=\"text-default\">CONCEPTO</label>
                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'errors');
        echo "
                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'widget');
        echo "
                <hr/>
                ";
        // line 113
        echo "                <div class=\"col-lg-3 float left\">
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", []), 'widget');
        echo "
                    <a class=\"form-submit btn btn-secondary\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                </div>
            </div>
            ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
        <script>
            \$('#expediente_tema').autocompleter({
                url_list: \"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
                url_get: \"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_get");
        echo "\"
            });

        </script>     

        ";
        // line 195
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
        return array (  248 => 195,  240 => 124,  236 => 123,  228 => 118,  221 => 114,  218 => 113,  213 => 98,  209 => 97,  201 => 92,  197 => 91,  193 => 90,  185 => 86,  181 => 84,  174 => 80,  170 => 79,  163 => 75,  159 => 74,  152 => 70,  148 => 69,  138 => 62,  134 => 61,  127 => 57,  123 => 56,  116 => 52,  112 => 51,  103 => 45,  51 => 3,  29 => 1,);
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
            <strong>Nuevo Expediente</strong>
            <hr/>
            {{form_start(form,{'action':'','method':'POST'})}}
            <div class=\"filtro_panel\"
                    <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
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
                    <div class=\"col-lg-3 \">
                        <label class=\"text-default\">TIPO</label>
                        {{ form_errors(form.tipo) }}
                        {{ form_widget(form.tipo) }}
                    </div>
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FOJAS</label>
                        <div class=\" text-danger\">{{ form_errors(form.fojas) }}</div>
                        {{ form_widget(form.fojas) }}
                    </div>    
                    <div class=\"col-lg-7\">
                        <label class=\"text-default\">TEMA</label>
                        {{ form_errors(form.tema) }}
                        {{ form_widget(form.tema) }}
                    </div>     
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FECHA DE INICIO</label>
                        <div class=\" text-danger\">{{ form_row(form.fechaInicio, { 'id': 'date1' })}} </div>
{#                        {{ form_errors(form.fechaInicio) }}#}
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
                <label class=\"text-default\">CONCEPTO</label>
                {{ form_errors(form.concepto) }}
                {{ form_widget(form.concepto) }}
                <hr/>
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
                    <a class=\"form-submit btn btn-secondary\" onclick=\"history.back()\"  role=\"button\">Volver</a>
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

    {% endblock %}", "AppBundle:Expediente:add.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/add.html.twig");
    }
}
