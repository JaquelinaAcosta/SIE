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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Dependencia:add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Dependencia:add.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Dependencia:add.html.twig", 1);
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



    ";
        // line 45
        echo "    <div class=\"title\">Dependencia -> Alta de dependencia</div>
    <hr/>
    <div class=\"col-lg-4 col-center\">

        <div class=\"form-group\">  
            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
            <h3>Información de la Dependencia</h3>
            <hr/>
            <div class=\"\">
                <label class=\"text-default\">DESCRIPCION(<span class=\"text-danger\">*</span>)</label>                 
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcion", []), 'errors');
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcion", []), 'widget');
        echo "
            </div>

            <div class=\"\">
                <label class=\"text-default\">DEPENDENCIA PADRE(<span class=\"text-danger\">*</span>)</label>                 
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dependenciaPadre", []), 'errors');
        echo "
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dependenciaPadre", []), 'widget');
        echo "
            </div>

            <div class=\"\">
                <label class=\"text-default\">RESPONSABLE(<span class=\"text-danger\">*</span>)</label>                 
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsable", []), 'errors');
        echo "
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsable", []), 'widget');
        echo "

             
                </div>
                <div class=\"\">
                    <label class=\"text-default\">NIVEL(<span class=\"text-danger\">*</span>)</label>                 
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivel", []), 'errors');
        echo "
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivel", []), 'widget');
        echo "
                </div>
                <div class=\"\">
                    <hr/>
                    <h3>Información de la Mesa de Entrada</h3>
                    <hr/>

                    <label class=\"text-default\">RESPONSABLE/S(<span class=\"text-danger\">*</span>)</label>                 
                    <div class=\"responsable_items\">


                    </div>
                    <div class=\"add float right\"></div>
                    <div class=\"responsables\" data-prototype=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mesaentrada", []), "responsables", []), "vars", []), "prototype", []), 'widget'), "html_attr");
        echo "\">

                    </div>
                    <hr/>
                    ";
        // line 95
        echo "
                    <label class=\"text-default\">CODIGO DE EXPEDIENTE(<span class=\"text-danger\">*</span>)</label>                 
                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mesaentrada", []), "codigoExpediente", []), 'errors');
        echo "
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mesaentrada", []), "codigoExpediente", []), 'widget');
        echo "
                </div>
                <div class=\"aceptar\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Aceptar", []), 'widget');
        echo "
                </div>

                ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>  

        <script>
            var \$collectionHolder;

            // setup an \"add a tag\" link
            var \$addResponsableButton = \$('<button type=\"button\" class=\"add_responsable form-control btn btn-danger\">Agregar</button>');
            var \$newLinkLi = \$('.add').append(\$addResponsableButton);

            jQuery(document).ready(function () {
                // Get the ul that holds the collection of tags
                \$collectionHolder = \$('.responsables');

                // add a delete link to all of the existing tag form li elements

                // add the \"add a tag\" anchor and li to the tags ul
                \$collectionHolder.append(\$newLinkLi);

                // count the current form inputs we have (e.g. 2), use that as the new
                // index when inserting a new item (e.g. 2)
                \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

                addResponsableForm(\$collectionHolder, \$newLinkLi);

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
                var \$newFormLi = \$('.responsable_items').append(newForm);
                if (index > 1) {
                    addTagFormDeleteLink(\$(\$newFormLi).children().eq(index - 1), \$collectionHolder);
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
        return "AppBundle:Dependencia:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 104,  195 => 101,  189 => 98,  185 => 97,  181 => 95,  174 => 88,  158 => 75,  154 => 74,  145 => 68,  141 => 67,  133 => 62,  129 => 61,  121 => 56,  117 => 55,  109 => 50,  102 => 45,  60 => 4,  51 => 3,  29 => 1,);
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



    {# {{ dump(responsables) }}#}
    <div class=\"title\">Dependencia -> Alta de dependencia</div>
    <hr/>
    <div class=\"col-lg-4 col-center\">

        <div class=\"form-group\">  
            {{form_start(form,{'action':'' ,'method':'POST'})}}
            <h3>Información de la Dependencia</h3>
            <hr/>
            <div class=\"\">
                <label class=\"text-default\">DESCRIPCION(<span class=\"text-danger\">*</span>)</label>                 
                {{ form_errors(form.descripcion) }}
                {{ form_widget(form.descripcion) }}
            </div>

            <div class=\"\">
                <label class=\"text-default\">DEPENDENCIA PADRE(<span class=\"text-danger\">*</span>)</label>                 
                {{ form_errors(form.dependenciaPadre) }}
                {{ form_widget(form.dependenciaPadre) }}
            </div>

            <div class=\"\">
                <label class=\"text-default\">RESPONSABLE(<span class=\"text-danger\">*</span>)</label>                 
                {{ form_errors(form.responsable) }}
                {{ form_widget(form.responsable) }}

             
                </div>
                <div class=\"\">
                    <label class=\"text-default\">NIVEL(<span class=\"text-danger\">*</span>)</label>                 
                    {{ form_errors(form.nivel) }}
                    {{ form_widget(form.nivel) }}
                </div>
                <div class=\"\">
                    <hr/>
                    <h3>Información de la Mesa de Entrada</h3>
                    <hr/>

                    <label class=\"text-default\">RESPONSABLE/S(<span class=\"text-danger\">*</span>)</label>                 
                    <div class=\"responsable_items\">


                    </div>
                    <div class=\"add float right\"></div>
                    <div class=\"responsables\" data-prototype=\"{{ form_widget(form.mesaentrada.responsables.vars.prototype)|e('html_attr') }}\">

                    </div>
                    <hr/>
                    {#<label class=\"text-default\">RESPONSABLES(<span class=\"text-danger\">*</span>)</label>                 
                    {{ form_errors(form.mesaentrada.responsables.usuario) }}
                    {{ form_widget(form.mesaentrada.responsables.usuario) }}#}

                    <label class=\"text-default\">CODIGO DE EXPEDIENTE(<span class=\"text-danger\">*</span>)</label>                 
                    {{ form_errors(form.mesaentrada.codigoExpediente) }}
                    {{ form_widget(form.mesaentrada.codigoExpediente) }}
                </div>
                <div class=\"aceptar\">
                    {{ form_widget(form.Aceptar) }}
                </div>

                {{form_end(form)}}
            </div>
        </div>  

        <script>
            var \$collectionHolder;

            // setup an \"add a tag\" link
            var \$addResponsableButton = \$('<button type=\"button\" class=\"add_responsable form-control btn btn-danger\">Agregar</button>');
            var \$newLinkLi = \$('.add').append(\$addResponsableButton);

            jQuery(document).ready(function () {
                // Get the ul that holds the collection of tags
                \$collectionHolder = \$('.responsables');

                // add a delete link to all of the existing tag form li elements

                // add the \"add a tag\" anchor and li to the tags ul
                \$collectionHolder.append(\$newLinkLi);

                // count the current form inputs we have (e.g. 2), use that as the new
                // index when inserting a new item (e.g. 2)
                \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

                addResponsableForm(\$collectionHolder, \$newLinkLi);

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
                var \$newFormLi = \$('.responsable_items').append(newForm);
                if (index > 1) {
                    addTagFormDeleteLink(\$(\$newFormLi).children().eq(index - 1), \$collectionHolder);
                }

                //console.log(\$(\$newFormLi).children().eq(index-1));
                \$newLinkLi.before(\$newFormLi);

            }


        </script>
        {% endblock %}
", "AppBundle:Dependencia:add.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Dependencia/add.html.twig");
    }
}
