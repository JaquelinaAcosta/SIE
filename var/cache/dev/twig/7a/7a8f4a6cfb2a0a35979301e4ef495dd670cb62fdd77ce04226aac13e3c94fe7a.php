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

/* Ubicacion/lugarfisicoResponsables.html.twig */
class __TwigTemplate_af93071c7294d35385ac02e0b01503a384202db77e6d89e31610f0aab12824a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Ubicacion/lugarfisicoResponsables.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Ubicacion/lugarfisicoResponsables.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Ubicacion/lugarfisicoResponsables.html.twig", 1);
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

        .user{
            width:250px;
            margin-left:0;
        }
        .delete{
            width:160px;
            position:relative;
            left:265px;
            bottom:30px;
        }
    </style>

    <div class=\"content\">

        <h4 class=\"text-center\">Gestionar los usuarios responsables de  - ";
        // line 21
        echo twig_escape_filter($this->env, ($context["lugarfisico"] ?? $this->getContext($context, "lugarfisico")), "html", null, true);
        echo "</h4>
        <hr/>
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
        <div class=\"filtro\">
            <label class=\"text-default\">Usuarios Responsables</label>                 
            <div class=\"responsable_items\">                       
                ";
        // line 27
        $context["count"] = 0;
        // line 28
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsables", []));
        foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
            // line 29
            echo "                    ";
            if ((($context["count"] ?? $this->getContext($context, "count")) == 0)) {
                // line 30
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["responsable"], "usuario", []), 'row', ["disabled" => "disabled"]);
                echo "
                    ";
            } else {
                // line 32
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["responsable"], 'row');
                echo "

                    ";
            }
            // line 35
            echo "                    ";
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
            // line 36
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                              
            </div>
            <div class=\"add col-lg-3\"></div>
            <div class=\"responsables\" data-prototype=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsables", []), "vars", []), "prototype", []), 'widget'), "html_attr");
        echo "\"></div>
            <hr/>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", []), 'widget');
        echo "

                </div>
                <div class=\"col-lg-4\">
                    <button class=\"btn btn-secondary\" type=\"button\" onclick=\"history.back()\"  role=\"button\">Volver</button>
                </div>
            </div>
        </div>

        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

    <script>

        \$(\"#persona_Guardar\").click(function () {
            \$(\".respon\").prop(\"disabled\", false);
            return true;
        });

        var \$collectionHolder;

        // setup an \"add a tag\" link
        var \$addResponsableButton = \$('<button type=\"button\" class=\"add_responsable form-control btn btn-info\">Agregar Usuario</button>');
        var \$newLinkLi = \$('.add').append(\$addResponsableButton);
        var totalCount = 0;
        jQuery(document).ready(function () {
            // Get the ul that holds the collection of tags
            \$collectionHolder = \$('.responsables');
            \$collectionHolder2 = \$('.responsable_items');

            // add a delete link to all of the existing tag form li elements

            // add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length + \$collectionHolder2.find(':input').length);

            totalCount = \$collectionHolder.data('index');


            for (var i = 0; i <= totalCount; i++) {
                if (i == 0) {
                    addTagFormDeleteLink(\$('.responsable_items').children().eq(i), \$collectionHolder, true);
                } else {
                    addTagFormDeleteLink(\$('.responsable_items').children().eq(i), \$collectionHolder, false);
                }

            }

            \$addResponsableButton.on('click', function (e) {
                // add a new tag form (see next code block)
                addResponsableForm(\$collectionHolder, \$newLinkLi);
            });
        });

        function addTagFormDeleteLink(\$tagFormLi, \$collectionHolder, disabled) {
            if (!disabled) {
                var \$removeFormButton = \$('<button class=\"delete btn btn-danger\" type=\"button\">Quitar Usuario</button>');
                \$tagFormLi.append(\$removeFormButton);

                \$removeFormButton.on('click', function (e) {
                    // remove the li for the tag form
                    var index = \$collectionHolder.data('index');
                    \$tagFormLi.remove();

                    \$collectionHolder.data('index', index - 1);
                });
            } else {
                var \$removeFormButton = \$('<button disabled class=\"delete btn btn-danger\" type=\"button\">Quitar Usuario</button>');
                \$tagFormLi.append(\$removeFormButton);
            }

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
        return "Ubicacion/lugarfisicoResponsables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  134 => 43,  127 => 39,  117 => 36,  114 => 35,  107 => 32,  101 => 30,  98 => 29,  93 => 28,  91 => 27,  84 => 23,  79 => 21,  60 => 4,  51 => 3,  29 => 1,);
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

        .user{
            width:250px;
            margin-left:0;
        }
        .delete{
            width:160px;
            position:relative;
            left:265px;
            bottom:30px;
        }
    </style>

    <div class=\"content\">

        <h4 class=\"text-center\">Gestionar los usuarios responsables de  - {{ lugarfisico }}</h4>
        <hr/>
        {{form_start(form,{'action':'','method':'POST'})}}
        <div class=\"filtro\">
            <label class=\"text-default\">Usuarios Responsables</label>                 
            <div class=\"responsable_items\">                       
                {%set count = 0%}
                {% for responsable in form.responsables %}
                    {% if count == 0 %}
                        {{ form_row(responsable.usuario,{'disabled':'disabled'})}}
                    {%else%}
                        {{ form_row(responsable)}}

                    {%endif%}
                    {% set count = count+1%}
                {% endfor %}                              
            </div>
            <div class=\"add col-lg-3\"></div>
            <div class=\"responsables\" data-prototype=\"{{ form_widget(form.responsables.vars.prototype)|e('html_attr') }}\"></div>
            <hr/>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    {{ form_widget(form.Guardar) }}

                </div>
                <div class=\"col-lg-4\">
                    <button class=\"btn btn-secondary\" type=\"button\" onclick=\"history.back()\"  role=\"button\">Volver</button>
                </div>
            </div>
        </div>

        {{form_end(form)}}
    </div>

    <script>

        \$(\"#persona_Guardar\").click(function () {
            \$(\".respon\").prop(\"disabled\", false);
            return true;
        });

        var \$collectionHolder;

        // setup an \"add a tag\" link
        var \$addResponsableButton = \$('<button type=\"button\" class=\"add_responsable form-control btn btn-info\">Agregar Usuario</button>');
        var \$newLinkLi = \$('.add').append(\$addResponsableButton);
        var totalCount = 0;
        jQuery(document).ready(function () {
            // Get the ul that holds the collection of tags
            \$collectionHolder = \$('.responsables');
            \$collectionHolder2 = \$('.responsable_items');

            // add a delete link to all of the existing tag form li elements

            // add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length + \$collectionHolder2.find(':input').length);

            totalCount = \$collectionHolder.data('index');


            for (var i = 0; i <= totalCount; i++) {
                if (i == 0) {
                    addTagFormDeleteLink(\$('.responsable_items').children().eq(i), \$collectionHolder, true);
                } else {
                    addTagFormDeleteLink(\$('.responsable_items').children().eq(i), \$collectionHolder, false);
                }

            }

            \$addResponsableButton.on('click', function (e) {
                // add a new tag form (see next code block)
                addResponsableForm(\$collectionHolder, \$newLinkLi);
            });
        });

        function addTagFormDeleteLink(\$tagFormLi, \$collectionHolder, disabled) {
            if (!disabled) {
                var \$removeFormButton = \$('<button class=\"delete btn btn-danger\" type=\"button\">Quitar Usuario</button>');
                \$tagFormLi.append(\$removeFormButton);

                \$removeFormButton.on('click', function (e) {
                    // remove the li for the tag form
                    var index = \$collectionHolder.data('index');
                    \$tagFormLi.remove();

                    \$collectionHolder.data('index', index - 1);
                });
            } else {
                var \$removeFormButton = \$('<button disabled class=\"delete btn btn-danger\" type=\"button\">Quitar Usuario</button>');
                \$tagFormLi.append(\$removeFormButton);
            }

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
                addTagFormDeleteLink(\$(\$newFormLi).children().eq(index - 1), \$collectionHolder);
            }

            //console.log(\$(\$newFormLi).children().eq(index-1));
            \$newLinkLi.before(\$newFormLi);

        }


    </script>

{% endblock %}", "Ubicacion/lugarfisicoResponsables.html.twig", "/var/www/html/SIE/app/Resources/views/Ubicacion/lugarfisicoResponsables.html.twig");
    }
}
