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

/* AppBundle:Expediente:listadoExpediente.html.twig */
class __TwigTemplate_30a25b2efbe3082d1ea36eef481e2a46039b69b13e9163915b6143d6c1f31456 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoExpediente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:listadoExpediente.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:listadoExpediente.html.twig", 1);
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
        echo "
    <style>
        label{
            margin-top:6px;
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
            margin-left:-32px;

        }

    </style>


    <div class=\"content\">
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h2 class=\"mb-0\">
                        <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Expediente
                        </button>
                        ";
        // line 35
        if ((($context["asociado"] ?? $this->getContext($context, "asociado")) == false)) {
            // line 36
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente");
            echo "\" role=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-file-alt\"></i> Nuevo Expediente</a>
                        ";
        }
        // line 38
        echo "
                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_start');
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'errors');
        echo "

                        <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
                        <div class=\"row\">
                            <div class=\"threecol col-lg-1\">
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-2\">
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-1\">
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 69
        if ($this->getAttribute(($context["formExpedienteFilter"] ?? null), "dependencia", [], "any", true, true)) {
            // line 70
            echo "                                <div class=\"threecol col-lg-4\">
                                    ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
            echo "
                                    ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'widget');
            echo "
                                    <div class=\"help-block with-errors\">
                                        ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'errors');
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 78
        echo "                            <div class=\"threecol col-lg-5\">
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'label', ["label" => "TEMA"]);
        echo "
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'errors');
        echo "
                                </div>
                            </div>    
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'label', ["label" => "TIPO"]);
        echo "
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'errors');
        echo "
                                </div>
                            </div>  
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'label', ["label" => "ESTADO"]);
        echo "
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'errors');
        echo "
                                </div>
                            </div>  


                            <div class=\"help-block with-errors\">
                                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'errors');
        echo "
                            </div>
                            <div class=\"threecol col-lg-2\">            
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "left_date", []), 'row', ["id" => "date1"]);
        echo " 
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "left_date", []), 'widget');
        echo "

                            </div>   
                            <div class=\"threecol col-lg-2\">
                                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "right_date", []), 'row', ["id" => "date2"]);
        echo " 
                                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "right_date", []), 'widget');
        echo "
                            </div>
                        </div>
                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            <hr/>

            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 128
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 129
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 135
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 136
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "


        </div>


        <table class=\"table table-sm table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">NUMERO</th>
                    <th scope=\"col\">TEMA</th>
                    <th class=\"text-center\" scope=\"col\">UBICACION ACTUAL</th>
                    <th class=\"text-center\" scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["expediente"]));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
            // line 157
            echo "                    <tr>
                        <td class=\"\">
                            ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "codigoExpediente", []), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "numeroExpediente", []), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "digitoExpediente", []), "html", null, true);
            echo "
                            ";
            // line 160
            if (($this->getAttribute($context["expediente"], "estado", []) == "NUEVO")) {
                // line 161
                echo "                                - <span class=\"badge badge-pill badge-info\">NUEVO</span>
                            ";
            }
            // line 163
            echo "
                        </td>            
                        <td class=\"\">";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "tema", []));
            echo "</td>         
                        <td class=\"text-center\">";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "ubicacionActual", []));
            echo "</td>
                        ";
            // line 167
            if ((($context["asociado"] ?? $this->getContext($context, "asociado")) == false)) {
                // line 168
                echo "                            <td class=\"text-center\"><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                <a class=\"btn btn-warning\" href=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-danger\" href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"><i class=\"fas fa-trash-alt\"></i></a></td>

                        ";
            } else {
                // line 173
                echo "                            <td class=\"text-center\"><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "id_asoc" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                echo "\"  
                                                       role=\"button\" data-toggle=\"tooltip\" 
                                                       data-placement=\"top\" title=\"Asociar\"></i>Asociar</a></td>

                        ";
            }
            // line 178
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "
            </tbody>
        </table>

    </div>

    <script>

        \$('#expediente_filter_tema').autocompleter({
            url_list: \"";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
            url_get: \"";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_get");
        echo "\"
        });
        ";
        // line 196
        echo "
                \$(function () {
                    \$('[data-toggle=\"tooltip\"]').tooltip()
                })
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Expediente:listadoExpediente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 196,  417 => 190,  413 => 189,  402 => 180,  395 => 178,  386 => 173,  380 => 170,  376 => 169,  371 => 168,  369 => 167,  365 => 166,  361 => 165,  357 => 163,  353 => 161,  351 => 160,  343 => 159,  339 => 157,  335 => 156,  317 => 140,  307 => 136,  304 => 135,  300 => 134,  297 => 133,  287 => 129,  284 => 128,  280 => 127,  271 => 121,  265 => 118,  261 => 117,  252 => 111,  248 => 110,  241 => 106,  237 => 105,  231 => 102,  222 => 96,  217 => 94,  213 => 93,  206 => 89,  201 => 87,  197 => 86,  190 => 82,  185 => 80,  181 => 79,  178 => 78,  171 => 74,  166 => 72,  162 => 71,  159 => 70,  157 => 69,  149 => 64,  144 => 62,  137 => 58,  132 => 56,  125 => 52,  120 => 50,  112 => 45,  108 => 44,  100 => 38,  94 => 36,  92 => 35,  60 => 5,  51 => 4,  29 => 1,);
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
        label{
            margin-top:6px;
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
            margin-left:-32px;

        }

    </style>


    <div class=\"content\">
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h2 class=\"mb-0\">
                        <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Expediente
                        </button>
                        {% if asociado == false %}
                            <a href=\"{{ path('nuevo_expediente') }}\" role=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-file-alt\"></i> Nuevo Expediente</a>
                        {% endif %}

                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        {{ form_start(formExpedienteFilter) }}
                        {{ form_errors(formExpedienteFilter) }}

                        <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
                        <div class=\"row\">
                            <div class=\"threecol col-lg-1\">
                                {{ form_widget(formExpedienteFilter.codigoExpediente) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formExpedienteFilter.codigoExpediente) }}
                                </div>
                            </div>
                            <div class=\"threecol col-lg-2\">
                                {{ form_widget(formExpedienteFilter.numeroExpediente) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formExpedienteFilter.numeroExpediente) }}
                                </div>
                            </div>
                            <div class=\"threecol col-lg-1\">
                                {{ form_widget(formExpedienteFilter.digitoExpediente) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formExpedienteFilter.digitoExpediente) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {% if formExpedienteFilter.dependencia is defined %}
                                <div class=\"threecol col-lg-4\">
                                    {{ form_label(formExpedienteFilter.dependencia, 'DEPENDENCIA') }}
                                    {{ form_widget(formExpedienteFilter.dependencia) }}
                                    <div class=\"help-block with-errors\">
                                        {{ form_errors(formExpedienteFilter.dependencia) }}
                                    </div>
                                </div>
                            {% endif %}
                            <div class=\"threecol col-lg-5\">
                                {{ form_label(formExpedienteFilter.tema, 'TEMA') }}
                                {{ form_widget(formExpedienteFilter.tema) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formExpedienteFilter.tema) }}
                                </div>
                            </div>    
                            <div class=\"threecol col-lg-3\">
                                {{ form_label(formExpedienteFilter.tipo, 'TIPO') }}
                                {{ form_widget(formExpedienteFilter.tipo) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formExpedienteFilter.tipo) }}
                                </div>
                            </div>  
                            <div class=\"threecol col-lg-3\">
                                {{ form_label(formExpedienteFilter.estado, 'ESTADO') }}
                                {{ form_widget(formExpedienteFilter.estado) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formExpedienteFilter.estado) }}
                                </div>
                            </div>  


                            <div class=\"help-block with-errors\">
                                {{ form_errors(formExpedienteFilter.fechaInicio) }}
                            </div>
                            <div class=\"threecol col-lg-2\">            
                                {{ form_row(formExpedienteFilter.fechaInicio.left_date, { 'id': 'date1' })}} 
                                {{ form_widget(formExpedienteFilter.fechaInicio.left_date) }}

                            </div>   
                            <div class=\"threecol col-lg-2\">
                                {{ form_row(formExpedienteFilter.fechaInicio.right_date, { 'id': 'date2' })}} 
                                {{ form_widget(formExpedienteFilter.fechaInicio.right_date) }}
                            </div>
                        </div>
                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                {{ form_widget(formExpedienteFilter.filter) }}
                                {{ form_widget(formExpedienteFilter.reset) }}
                            </div>
                        </div>
                        {{ form_end(formExpedienteFilter) }}
                    </div>
                </div>
            </div>
            <hr/>

            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
                <hr/>
            {% endfor %}

            {% for message in app.flashes('danger') %}
                <div class=\"alert alert-danger\">
                    {{ message }}
                </div>
                <hr/>
            {% endfor %}



        </div>


        <table class=\"table table-sm table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">NUMERO</th>
                    <th scope=\"col\">TEMA</th>
                    <th class=\"text-center\" scope=\"col\">UBICACION ACTUAL</th>
                    <th class=\"text-center\" scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                {% for expediente in expediente|reverse %}
                    <tr>
                        <td class=\"\">
                            {{expediente.codigoExpediente }}-{{expediente.numeroExpediente }}-{{expediente.digitoExpediente }}
                            {% if expediente.estado == 'NUEVO' %}
                                - <span class=\"badge badge-pill badge-info\">NUEVO</span>
                            {% endif %}

                        </td>            
                        <td class=\"\">{{expediente.tema|e }}</td>         
                        <td class=\"text-center\">{{expediente.ubicacionActual|e }}</td>
                        {% if asociado == false %}
                            <td class=\"text-center\"><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                                <a class=\"btn btn-warning\" href=\"{{ path(\"editar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"><i class=\"fas fa-trash-alt\"></i></a></td>

                        {% else %}
                            <td class=\"text-center\"><a class=\"btn btn-info\" href=\"{{ path(\"nuevo_expediente_asociado\", {'id':padre_id, 'id_asoc':expediente.id}) }}\"  
                                                       role=\"button\" data-toggle=\"tooltip\" 
                                                       data-placement=\"top\" title=\"Asociar\"></i>Asociar</a></td>

                        {% endif %}
                    </tr>
                {% endfor %}

            </tbody>
        </table>

    </div>

    <script>

        \$('#expediente_filter_tema').autocompleter({
            url_list: \"{{ path('tema_search') }}\",
            url_get: \"{{ path('tema_get') }}\"
        });
        {#  \$('#expediente_filter_nroExpediente').autocompleter({
                url_list: \"{{ path('expediente_search') }}\",
                url_get: \"{{ path('expediente_get') }}\"
            });#}

                \$(function () {
                    \$('[data-toggle=\"tooltip\"]').tooltip()
                })
    </script>


{% endblock %}
", "AppBundle:Expediente:listadoExpediente.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/listadoExpediente.html.twig");
    }
}
