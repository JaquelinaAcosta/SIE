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

/* AppBundle:Dependencia:listadoDependencia.html.twig */
class __TwigTemplate_12f817bb0e2e7275511ada3393220b050f1d08dac0e78d56f7196cf6a9b5171b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Dependencia:listadoDependencia.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Dependencia:listadoDependencia.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Dependencia:listadoDependencia.html.twig", 1);
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
        echo "    <style>

        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

    </style>

    <div class=\"content\">
            <div class=\"row form col-lg-12\">
                <div class=\"filtro\">
                    <div class=\"header\"><h4><i class=\"fas fa-search\"></i> Búsqueda de Dependencia</h4></div>
                    <hr/>
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), 'errors');
        echo "
                        <div class=\"row\">
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'label', ["label" => "DESCRIPCIÓN"]);
        echo "
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "descripcion", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'label', ["label" => "DEPENDENCIA PADRE"]);
        echo "
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "dependenciaPadre", []), 'errors');
        echo "
                                </div>
                            </div> 
                            <div class=\"threecol col-lg-4\">
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'label', ["label" => "NOMBRE RESPONSABLE"]);
        echo "
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "responsable", []), 'errors');
        echo "
                                </div>
                            </div>  
                            <div class=\"twocol col-lg-1\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'label', ["label" => "NIVEL"]);
        echo "
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "nivel", []), 'errors');
        echo "
                                </div>
                            </div> 
                            <div class=\"twocol col-lg-1\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "archivado", []), 'label', ["label" => "ESTADO"]);
        echo "
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "archivado", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "archivado", []), 'errors');
        echo "
                                </div>
                            </div> 
                        </div>

                        <div class=\"col-lg-12\">
                            <div class=\"col-lg-1\">
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "filter", []), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-1\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), "reset", []), 'row');
        echo "
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <hr/>
                        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formDependenciaFilter"] ?? $this->getContext($context, "formDependenciaFilter")), 'form_end');
        echo "

                    </form>
                </div>
        </div>


        <br/>


        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">Descripción</th>
                    <th scope=\"col\">Dependencia Padre</th>
                    <th scope=\"col\">Responsable</th>
                    <th scope=\"col\">Estado</th>
                    <th scope=\"col\">Nivel</th>
                    <th scope=\"col\">Acciones</th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["dependencias"] ?? $this->getContext($context, "dependencias"))));
        foreach ($context['_seq'] as $context["_key"] => $context["dependencia"]) {
            // line 95
            echo "                    <tr>
                        <td class=\"text-default\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "descripcion", []));
            echo "</td>
                        <td class=\"text-default\"><p>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dependencia"], "dependenciaPadre", []), "descripcion", []));
            echo "</p></td>
                        <td class=\"text-default\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "responsable", []));
            echo "</td>

                        ";
            // line 100
            if (($this->getAttribute($context["dependencia"], "archivado", []) == "NO")) {
                // line 101
                echo "                            <td class=\"text-default\">Vigente</td>
                            <td class=\"text-default\">";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "nivel", []));
                echo "</td>
                            <td> <a class=\"btn btn-info\" href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adm_gestionar_mesaentrada", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar Mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                                <a class=\"btn btn-warning\" href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-danger\" href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archivar_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"far fa-file-archive\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Archivar\"></i></a></td>
                                ";
            } else {
                // line 107
                echo "                            <td class=\"text-default\">Archivado</td>
                            <td class=\"text-default\">";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "nivel", []));
                echo "</td>
                            <td> <a class=\"btn btn-info\" href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adm_gestionar_mesaentrada", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                                <a class=\"btn btn-warning\" href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Dependencia\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-success\" href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alta_dependencia", ["id" => $this->getAttribute($context["dependencia"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\"><i class=\"far fa-calendar-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dar de Alta\"></i></a></td>
                                ";
            }
            // line 113
            echo "
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "
            </tbody>
        </table>

        ";
        // line 120
        if ((twig_length_filter($this->env, ($context["dependencias"] ?? $this->getContext($context, "dependencias"))) < ($context["totalItems"] ?? $this->getContext($context, "totalItems")))) {
            // line 121
            echo "            <ul class=\"pagination\">
                ";
            // line 122
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                echo "           
                ";
            } else {
                // line 124
                echo "                    ";
                $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
                // line 125
                echo "                ";
            }
            // line 126
            echo "

                <li ><a class=\"page-link\" href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
            echo "\">&laquo</a></li>
                    ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 130
                echo "                    <li><a class=\"page-link\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "
                ";
            // line 133
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                // line 134
                echo "
                ";
            } else {
                // line 136
                echo "                    ";
                $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
                // line 137
                echo "                ";
            }
            // line 138
            echo "                <li><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\">&raquo</a></li>

            </ul>
        ";
        }
        // line 142
        echo "
        <script>
            \$(function () {
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        </script>

        <script>
            \$('#dependencia_filter_responsable').autocompleter({
                url_list: \"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_search");
        echo "\",
                url_get: \"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persona_get");
        echo "\"
            });
        </script>

        <hr/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Dependencia:listadoDependencia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 152,  358 => 151,  347 => 142,  339 => 138,  336 => 137,  333 => 136,  329 => 134,  327 => 133,  324 => 132,  313 => 130,  309 => 129,  305 => 128,  301 => 126,  298 => 125,  295 => 124,  290 => 122,  287 => 121,  285 => 120,  279 => 116,  271 => 113,  266 => 111,  262 => 110,  258 => 109,  254 => 108,  251 => 107,  246 => 105,  242 => 104,  238 => 103,  234 => 102,  231 => 101,  229 => 100,  224 => 98,  220 => 97,  216 => 96,  213 => 95,  209 => 94,  183 => 71,  174 => 65,  168 => 62,  158 => 55,  153 => 53,  149 => 52,  142 => 48,  137 => 46,  133 => 45,  126 => 41,  121 => 39,  117 => 38,  110 => 34,  105 => 32,  101 => 31,  94 => 27,  89 => 25,  85 => 24,  79 => 21,  60 => 4,  51 => 3,  29 => 1,);
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

        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

    </style>

    <div class=\"content\">
            <div class=\"row form col-lg-12\">
                <div class=\"filtro\">
                    <div class=\"header\"><h4><i class=\"fas fa-search\"></i> Búsqueda de Dependencia</h4></div>
                    <hr/>
                    <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                        {{ form_errors(formDependenciaFilter) }}
                        <div class=\"row\">
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formDependenciaFilter.descripcion, 'DESCRIPCIÓN') }}
                                {{ form_widget(formDependenciaFilter.descripcion) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formDependenciaFilter.descripcion) }}
                                </div>
                            </div>
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formDependenciaFilter.dependenciaPadre, 'DEPENDENCIA PADRE') }}
                                {{ form_widget(formDependenciaFilter.dependenciaPadre) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formDependenciaFilter.dependenciaPadre) }}
                                </div>
                            </div> 
                            <div class=\"threecol col-lg-4\">
                                {{ form_label(formDependenciaFilter.responsable, 'NOMBRE RESPONSABLE') }}
                                {{ form_widget(formDependenciaFilter.responsable) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formDependenciaFilter.responsable) }}
                                </div>
                            </div>  
                            <div class=\"twocol col-lg-1\">
                                {{ form_label(formDependenciaFilter.nivel, 'NIVEL') }}
                                {{ form_widget(formDependenciaFilter.nivel) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formDependenciaFilter.nivel) }}
                                </div>
                            </div> 
                            <div class=\"twocol col-lg-1\">
                                {{ form_label(formDependenciaFilter.archivado, 'ESTADO') }}
                                {{ form_widget(formDependenciaFilter.archivado) }}
                                <div class=\"help-block with-errors\">
                                    {{ form_errors(formDependenciaFilter.archivado) }}
                                </div>
                            </div> 
                        </div>

                        <div class=\"col-lg-12\">
                            <div class=\"col-lg-1\">
                                {{ form_row(formDependenciaFilter.filter) }}
                            </div>
                            <div class=\"col-lg-1\">
                                {{ form_row(formDependenciaFilter.reset) }}
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <hr/>
                        {{ form_end(formDependenciaFilter) }}

                    </form>
                </div>
        </div>


        <br/>


        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">Descripción</th>
                    <th scope=\"col\">Dependencia Padre</th>
                    <th scope=\"col\">Responsable</th>
                    <th scope=\"col\">Estado</th>
                    <th scope=\"col\">Nivel</th>
                    <th scope=\"col\">Acciones</th>
                </tr>
            </thead>
            <tbody>

                {% for dependencia in dependencias|reverse %}
                    <tr>
                        <td class=\"text-default\">{{dependencia.descripcion|e }}</td>
                        <td class=\"text-default\"><p>{{dependencia.dependenciaPadre.descripcion|e }}</p></td>
                        <td class=\"text-default\">{{dependencia.responsable|e }}</td>

                        {% if dependencia.archivado == 'NO' %}
                            <td class=\"text-default\">Vigente</td>
                            <td class=\"text-default\">{{dependencia.nivel|e }}</td>
                            <td> <a class=\"btn btn-info\" href=\"{{ path('adm_gestionar_mesaentrada',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar Mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                                <a class=\"btn btn-warning\" href=\"{{ path('editar_dependencia',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-danger\" href=\"{{ path('archivar_dependencia',{'id':dependencia.id}) }}\"  role=\"button\"><i class=\"far fa-file-archive\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Archivar\"></i></a></td>
                                {% else %}
                            <td class=\"text-default\">Archivado</td>
                            <td class=\"text-default\">{{dependencia.nivel|e }}</td>
                            <td> <a class=\"btn btn-info\" href=\"{{ path('adm_gestionar_mesaentrada',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gestionar mesa de Entrada\">  <i class=\"fas fa-table\"></i></a>
                                <a class=\"btn btn-warning\" href=\"{{ path('editar_dependencia',{'id':dependencia.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Dependencia\"><i class=\"fas fa-edit\"></i></a>
                                <a class=\"btn btn-success\" href=\"{{ path('alta_dependencia',{'id':dependencia.id}) }}\"  role=\"button\"><i class=\"far fa-calendar-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dar de Alta\"></i></a></td>
                                {% endif %}

                    </tr>
                {% endfor %}

            </tbody>
        </table>

        {% if dependencias|length < totalItems %}
            <ul class=\"pagination\">
                {%if (thisPage==1)%}           
                {%else%}
                    {%set thisPage= thisPage-1%}
                {%endif%}


                <li ><a class=\"page-link\" href=\"{{ path('listado_dependencia', {\"currentPage\": thisPage}) }}\">&laquo</a></li>
                    {% for i in 1..maxPages %}
                    <li><a class=\"page-link\"  href=\"{{ path('listado_dependencia', {\"currentPage\": i}) }}\">{{ i }}</a></li>
                    {% endfor %}

                {%if (page==maxPages)%}

                {%else%}
                    {%set page= page+1%}
                {%endif%}
                <li><a class=\"page-link\" href=\"{{ path('listado_dependencia', {\"currentPage\": page}) }}\">&raquo</a></li>

            </ul>
        {% endif %}

        <script>
            \$(function () {
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        </script>

        <script>
            \$('#dependencia_filter_responsable').autocompleter({
                url_list: \"{{ path('persona_search') }}\",
                url_get: \"{{ path('persona_get') }}\"
            });
        </script>

        <hr/>
    {% endblock %}", "AppBundle:Dependencia:listadoDependencia.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Dependencia/listadoDependencia.html.twig");
    }
}
