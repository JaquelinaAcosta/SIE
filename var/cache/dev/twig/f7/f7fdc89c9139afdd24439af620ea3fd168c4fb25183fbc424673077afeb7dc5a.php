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

/* AppBundle:Ubicacion:mesaEntrada.html.twig */
class __TwigTemplate_2eeaeb6b80def9ed7ef0a87df6494601d2bbbc0447fd5b1e0a17cac704db710e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Ubicacion:mesaEntrada.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Ubicacion:mesaEntrada.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Ubicacion:mesaEntrada.html.twig", 1);
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
            font-size: 11px;
        }
        .title{
            font-size:18px;
            margin-left:18px;
            margin-bottom:10px;
        }
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=textarea]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;
            padding:10px;            
        }
        .col-center{
            float: none;
            margin: 0 auto;
        }
        .aceptar{
            float: none;
            margin: 0 auto;
        }

        .user{
            margin-top: 10px;
            width:250px;
            margin-left:0;
        }
    </style>

        

    <div class=\"formu col-lg-4 col-md-offset-1\">
        <div class=\"border border-primary\">
            <h4 class=\"text-center\">Gestionar mesa de Entrada - ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dependencia"] ?? $this->getContext($context, "dependencia")), "descripcion", []), "html", null, true);
        echo "</h4>
            <hr/>
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
            
                     <label class=\"text-default\">CODIGO DE EXPEDIENTE(<span class=\"text-danger\">*</span>)</label>                 
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoExpediente", []), 'errors');
        echo "
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoExpediente", []), 'widget');
        echo "
                    <hr/>
                    <label class=\"text-default\">USUARIO/S RESPONSABLE/S(<span class=\"text-danger\">*</span>)</label>                 
                    <div class=\"responsable_items\">                       
                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsables", []));
        foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
            // line 65
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["responsable"], 'row');
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                       
                    </div>
                    <div class=\"add float right\"></div>
                    <div class=\"responsables\" data-prototype=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsables", []), "vars", []), "prototype", []), 'widget'), "html_attr");
        echo "\"></div>
                    <hr/>
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", []), 'widget');
        echo "
           
                  
            ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
            
      <script>
            var \$collectionHolder;

            // setup an \"add a tag\" link
            var \$addResponsableButton = \$('<button type=\"button\" class=\"add_responsable form-control btn btn-danger\">Agregar</button>');
            var \$newLinkLi = \$('.add').append(\$addResponsableButton);
            var totalCount=0;
            jQuery(document).ready(function () {
                // Get the ul that holds the collection of tags
                \$collectionHolder = \$('.responsables');
                \$collectionHolder2 = \$('.responsable_items');
                
                // add a delete link to all of the existing tag form li elements

                // add the \"add a tag\" anchor and li to the tags ul
                \$collectionHolder.append(\$newLinkLi);

                // count the current form inputs we have (e.g. 2), use that as the new
                // index when inserting a new item (e.g. 2)
                \$collectionHolder.data('index', \$collectionHolder.find(':input').length+\$collectionHolder2.find(':input').length);                               
        
                totalCount = \$collectionHolder.data('index');
               
                
                for (var i = 1; i <= totalCount; i++) {
                      addTagFormDeleteLink(\$('.responsable_items').children().eq(i), \$collectionHolder);
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
                    var index = \$collectionHolder.data('index');
                    \$tagFormLi.remove();

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
                var \$newFormLi = \$('.responsable_items').append(newForm);
                if (index > 0) {
                    //console.log(totalCount);
                    addTagFormDeleteLink(\$(\$newFormLi).children().eq(index-1), \$collectionHolder);
                }

                //console.log(\$(\$newFormLi).children().eq(index-1));
                \$newLinkLi.before(\$newFormLi);

            }


        </script>
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Ubicacion:mesaEntrada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 74,  157 => 71,  152 => 69,  147 => 66,  138 => 65,  134 => 64,  127 => 60,  123 => 59,  117 => 56,  112 => 54,  60 => 4,  51 => 3,  29 => 1,);
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
            font-size: 11px;
        }
        .title{
            font-size:18px;
            margin-left:18px;
            margin-bottom:10px;
        }
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=textarea]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;
            padding:10px;            
        }
        .col-center{
            float: none;
            margin: 0 auto;
        }
        .aceptar{
            float: none;
            margin: 0 auto;
        }

        .user{
            margin-top: 10px;
            width:250px;
            margin-left:0;
        }
    </style>

        

    <div class=\"formu col-lg-4 col-md-offset-1\">
        <div class=\"border border-primary\">
            <h4 class=\"text-center\">Gestionar mesa de Entrada - {{ dependencia.descripcion }}</h4>
            <hr/>
            {{form_start(form,{'action':'','method':'POST'})}}
            
                     <label class=\"text-default\">CODIGO DE EXPEDIENTE(<span class=\"text-danger\">*</span>)</label>                 
                    {{ form_errors(form.codigoExpediente) }}
                    {{ form_widget(form.codigoExpediente) }}
                    <hr/>
                    <label class=\"text-default\">USUARIO/S RESPONSABLE/S(<span class=\"text-danger\">*</span>)</label>                 
                    <div class=\"responsable_items\">                       
                        {% for responsable in form.responsables %}
                            {{ form_row(responsable) }}
                        {% endfor %}                       
                    </div>
                    <div class=\"add float right\"></div>
                    <div class=\"responsables\" data-prototype=\"{{ form_widget(form.responsables.vars.prototype)|e('html_attr') }}\"></div>
                    <hr/>
                    {{ form_widget(form.Guardar) }}
           
                  
            {{form_end(form)}}
        </div>
    </div>
            
      <script>
            var \$collectionHolder;

            // setup an \"add a tag\" link
            var \$addResponsableButton = \$('<button type=\"button\" class=\"add_responsable form-control btn btn-danger\">Agregar</button>');
            var \$newLinkLi = \$('.add').append(\$addResponsableButton);
            var totalCount=0;
            jQuery(document).ready(function () {
                // Get the ul that holds the collection of tags
                \$collectionHolder = \$('.responsables');
                \$collectionHolder2 = \$('.responsable_items');
                
                // add a delete link to all of the existing tag form li elements

                // add the \"add a tag\" anchor and li to the tags ul
                \$collectionHolder.append(\$newLinkLi);

                // count the current form inputs we have (e.g. 2), use that as the new
                // index when inserting a new item (e.g. 2)
                \$collectionHolder.data('index', \$collectionHolder.find(':input').length+\$collectionHolder2.find(':input').length);                               
        
                totalCount = \$collectionHolder.data('index');
               
                
                for (var i = 1; i <= totalCount; i++) {
                      addTagFormDeleteLink(\$('.responsable_items').children().eq(i), \$collectionHolder);
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
                    var index = \$collectionHolder.data('index');
                    \$tagFormLi.remove();

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
                var \$newFormLi = \$('.responsable_items').append(newForm);
                if (index > 0) {
                    //console.log(totalCount);
                    addTagFormDeleteLink(\$(\$newFormLi).children().eq(index-1), \$collectionHolder);
                }

                //console.log(\$(\$newFormLi).children().eq(index-1));
                \$newLinkLi.before(\$newFormLi);

            }


        </script>
            
{% endblock %}", "AppBundle:Ubicacion:mesaEntrada.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Ubicacion/mesaEntrada.html.twig");
    }
}
