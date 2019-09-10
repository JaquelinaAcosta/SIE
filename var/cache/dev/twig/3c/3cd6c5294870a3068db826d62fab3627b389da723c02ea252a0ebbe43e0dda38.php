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

/* Expediente/listadoExpediente.html.twig */
class __TwigTemplate_68858000062feae2ca7461ef8e6b8dd6bd1d195b3e1616c5cba3662df09ebbed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/listadoExpediente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/listadoExpediente.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Expediente/listadoExpediente.html.twig", 1);
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
        echo "    <style>
        .modal-header-warning {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #060325;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
    </style>

    <div class=\"content\">
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h2 class=\"mb-0\">
                        <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Expediente ( Haga click aquí para expandir )
                        </button>
                        ";
        // line 28
        $context["accion_habilitada"] = false;
        // line 29
        echo "                        ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 30
            echo "                            ";
            $context["accion_habilitada"] = true;
            // line 31
            echo "                        ";
        } else {
            // line 32
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "dependencia", []), "mesaentrada", []), "responsables", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 33
                echo "                                ";
                if ((($context["user"] ?? $this->getContext($context, "user")) == $this->getAttribute($context["responsable"], "usuario", []))) {
                    // line 34
                    echo "                                    ";
                    $context["accion_habilitada"] = true;
                    // line 35
                    echo "                                ";
                }
                // line 36
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                        ";
        }
        echo "  

                        ";
        // line 39
        if (((($context["asociado"] ?? $this->getContext($context, "asociado")) == false) && (($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true))) {
            // line 40
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente");
            echo "\" role=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-file-alt\"></i> Nuevo Expediente</a>
                        ";
        }
        // line 42
        echo "

                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_start');
        echo "
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'errors');
        echo "

                        <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
                        <div class=\"row\">
                            <div class=\"threecol col-lg-1\">
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-2\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-1\">
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 74
        if ($this->getAttribute(($context["formExpedienteFilter"] ?? null), "dependencia", [], "any", true, true)) {
            // line 75
            echo "                                <div class=\"threecol col-lg-4\">
                                    ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
            echo "
                                    ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'widget');
            echo "
                                    <div class=\"help-block with-errors\">
                                        ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'errors');
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 83
        echo "                            <div class=\"threecol col-lg-5\">
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'label', ["label" => "TEMA"]);
        echo "
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'errors');
        echo "
                                </div>
                            </div>    
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'label', ["label" => "TIPO"]);
        echo "
                                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'errors');
        echo "
                                </div>
                            </div>  
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'label', ["label" => "ESTADO"]);
        echo "
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'errors');
        echo "
                                </div>
                            </div>  


                            <div class=\"help-block with-errors\">
                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'errors');
        echo "
                            </div>
                            <div class=\"threecol col-lg-3\">            
                                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "left_date", []), 'row', ["id" => "date1"]);
        echo " 
                                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "left_date", []), 'widget');
        echo "

                            </div>   
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "right_date", []), 'row', ["id" => "date2"]);
        echo " 
                                ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "right_date", []), 'widget');
        echo "
                            </div>
                        </div>
                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_end');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 132
            echo "                <hr/>
                <div class=\"alert alert-success\">
                    ";
            // line 134
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "
            ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 139
            echo "                <hr/>
                <div class=\"alert alert-danger\">
                    ";
            // line 141
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "


        </div>

        ";
        // line 149
        if ((twig_length_filter($this->env, ($context["expedientes"] ?? $this->getContext($context, "expedientes"))) > 0)) {
            // line 150
            echo "            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: ";
            // line 152
            echo twig_escape_filter($this->env, ($context["totalItems"] ?? $this->getContext($context, "totalItems")), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                ";
            // line 154
            $context["nuevoCount"] = 0;
            // line 155
            echo "                ";
            $context["vistoCount"] = 0;
            // line 156
            echo "                ";
            $context["bajaCount"] = 0;
            // line 157
            echo "
                ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["expedientes"] ?? $this->getContext($context, "expedientes")));
            foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
                // line 159
                echo "                    ";
                if ((($this->getAttribute($context["expediente"], "estado", []) == "NUEVO") && (null === $this->getAttribute($context["expediente"], "fechaBaja", [])))) {
                    // line 160
                    echo "                        ";
                    $context["nuevoCount"] = (($context["nuevoCount"] ?? $this->getContext($context, "nuevoCount")) + 1);
                    // line 161
                    echo "                    ";
                } elseif ((($this->getAttribute($context["expediente"], "estado", []) == "VISTO") && (null === $this->getAttribute($context["expediente"], "fechaBaja", [])))) {
                    // line 162
                    echo "                        ";
                    $context["vistoCount"] = (($context["vistoCount"] ?? $this->getContext($context, "vistoCount")) + 1);
                    // line 163
                    echo "                    ";
                }
                // line 164
                echo "                    ";
                if ( !(null === $this->getAttribute($context["expediente"], "fechaBaja", []))) {
                    // line 165
                    echo "                        ";
                    $context["bajaCount"] = (($context["bajaCount"] ?? $this->getContext($context, "bajaCount")) + 1);
                    // line 166
                    echo "                    ";
                }
                // line 167
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "
                ";
            // line 169
            if ((($context["nuevoCount"] ?? $this->getContext($context, "nuevoCount")) > 0)) {
                // line 170
                echo "                    <i class=\"far fa-file\"></i> Nuevos: ";
                echo twig_escape_filter($this->env, ($context["nuevoCount"] ?? $this->getContext($context, "nuevoCount")), "html", null, true);
                echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                ";
            }
            // line 172
            echo "                ";
            if ((($context["vistoCount"] ?? $this->getContext($context, "vistoCount")) > 0)) {
                // line 173
                echo "                    <i class=\"fas fa-check\"></i> Visto: ";
                echo twig_escape_filter($this->env, ($context["vistoCount"] ?? $this->getContext($context, "vistoCount")), "html", null, true);
                echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                ";
            }
            // line 175
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 176
                echo "                    ";
                if ((($context["bajaCount"] ?? $this->getContext($context, "bajaCount")) > 0)) {
                    // line 177
                    echo "                        <i class=\"fas fa-trash-alt\"></i> Baja: ";
                    echo twig_escape_filter($this->env, ($context["bajaCount"] ?? $this->getContext($context, "bajaCount")), "html", null, true);
                    echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    ";
                }
                // line 179
                echo "                ";
            }
            // line 180
            echo "            </div>
            <hr/>

        ";
        } else {
            // line 184
            echo "            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Búsqueda con 0 resultados, Cargue un expediente! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        ";
        }
        // line 189
        echo "

        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th style=\"padding:15px;\" scope=\"col\">NUMERO</th>
                    <th style=\"padding:15px;\" scope=\"col\">TEMA</th>
                    <th style=\"padding:15px;\" class=\"text-center\" scope=\"col\">UBICACION ACTUAL</th>
                    <th style=\"padding:15px;\" class=\"text-center\" scope=\"col\">ESTADO</th>
                    <th style=\"padding:15px;\" class=\"text-center\" scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 202
        $context["count"] = 0;
        // line 203
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["expedientes"] ?? $this->getContext($context, "expedientes"))));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
            // line 204
            echo "                    <tr>
                        <td class=\"\" style=\"padding:10px;\">

                            ";
            // line 207
            echo twig_escape_filter($this->env, $context["expediente"], "html", null, true);
            echo "

                        </td>            
                        <td class=\"\" style=\"padding:10px;\">";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "tema", []));
            echo "</td>         
                        <td class=\"text-center\" style=\"padding:10px;\">";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "ubicacionActual", []));
            echo "</td>
                        <td class=\"text-center\" style=\"padding:10px;\">
                            ";
            // line 213
            if (($this->getAttribute($context["expediente"], "fechaBaja", []) == null)) {
                // line 214
                echo "                                ";
                if (($this->getAttribute($context["expediente"], "estado", []) == "NUEVO")) {
                    // line 215
                    echo "                                    <span class=\"badge badge-pill badge-info\">NUEVO</span>
                                ";
                } else {
                    // line 217
                    echo "                                    <span class=\"badge badge-pill badge-success\">VISTO</span>
                                ";
                }
                // line 219
                echo "                            ";
            } else {
                // line 220
                echo "                                <span class=\"badge badge-pill badge-danger\">BAJA</span>
                            ";
            }
            // line 222
            echo "
                        </td>  

                        ";
            // line 225
            if ((($context["asociado"] ?? $this->getContext($context, "asociado")) == false)) {
                // line 226
                echo "                            <td class=\"text-center\" style=\"padding:10px;\"><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>

                                ";
                // line 229
                echo "                                ";
                $context["accion_habilitada"] = false;
                // line 230
                echo "                                ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                    // line 231
                    echo "                                    ";
                    $context["accion_habilitada"] = true;
                    // line 232
                    echo "                                ";
                } else {
                    // line 233
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["expediente"], "ubicacionActual", []), "responsables", []), "getValues", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                        // line 234
                        echo "                                        ";
                        if ((($context["user"] ?? $this->getContext($context, "user")) == $this->getAttribute($context["responsable"], "usuario", []))) {
                            // line 235
                            echo "                                            ";
                            $context["accion_habilitada"] = true;
                            // line 236
                            echo "                                        ";
                        }
                        // line 237
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 238
                    echo "                                ";
                }
                echo "  

                                ";
                // line 240
                if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
                    // line 241
                    echo "                                    <a class=\"btn btn-warning\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                    echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                    <a class=\"btn btn-primary\" href=\"";
                    // line 242
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("elegir_movimiento", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                    echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Realizar un pase\"><i class=\"fas fa-arrow-alt-circle-right\"></i></a>

                                    ";
                    // line 244
                    if ((null === $this->getAttribute($context["expediente"], "fechaBaja", []))) {
                        // line 245
                        echo "                                        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                        echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                        echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                        <!-- The Modal -->
                                        <div class=\"modal fade\" id=\"myModal";
                        // line 249
                        echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                        echo "\">
                                            <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                                <div class=\"modal-content\">

                                                    <!-- Modal Header -->
                                                    <div class=\"modal-header-warning\">
                                                        <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        <h4 class=\"modal-title\">Eliminar Expediente</h4>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class=\"modal-body\">
                                                        ¿Desea Eliminar el Expediente: ";
                        // line 261
                        echo twig_escape_filter($this->env, $context["expediente"], "html", null, true);
                        echo "?
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                        // line 265
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                        echo "\"  role=\"button\">SI</a></button>                          
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        ";
                        // line 272
                        $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                        echo "                                  
                                    ";
                    }
                    // line 274
                    echo "                                ";
                }
                // line 275
                echo "                            ";
            } else {
                // line 276
                echo "                            <td class=\"text-center\"><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "id_asoc" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                echo "\"  
                                                       role=\"button\" data-toggle=\"tooltip\" 
                                                       data-placement=\"top\" title=\"Asociar\"></i>Asociar</a></td>

                        ";
            }
            // line 281
            echo "
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "                
            </tbody>
        </table>


        ";
        // line 289
        echo "        ";
        $context["limite"] = 6;
        // line 290
        echo "        ";
        $context["extremos"] = 2;
        // line 291
        echo "
        ";
        // line 292
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < ($context["limite"] ?? $this->getContext($context, "limite")))) {
            echo " 

            ";
            // line 294
            $context["minLeftRange"] = 1;
            // line 295
            echo "            ";
            $context["maxLeftRange"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 296
            echo "            ";
            $context["minRightRange"] = (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 297
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 298
            echo "
        ";
        } elseif ((        // line 299
($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 300
            echo "            ";
            $context["minLeftRange"] = 1;
            // line 301
            echo "            ";
            $context["maxLeftRange"] = 2;
            // line 302
            echo "
            ";
            // line 303
            $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 304
            echo "            ";
            $context["extremoDerecho"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) + ($context["extremos"] ?? $this->getContext($context, "extremos")));
            // line 305
            echo "            ";
            $context["minRightRange"] = ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))) + 2);
            // line 306
            echo "
            ";
            // line 307
            if ((($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) >= (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) + ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
                // line 308
                echo "                ";
                $context["minRightRange"] = ($context["thisPage"] ?? $this->getContext($context, "thisPage"));
                // line 309
                echo "                ";
                $context["extremoDerecho"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
                // line 310
                echo "                ";
                $context["extremoIzquierdo"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - (($context["extremos"] ?? $this->getContext($context, "extremos")) * 2));
                // line 311
                echo "            ";
            }
            // line 312
            echo "            ";
            $context["maxRightRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 313
            echo "        ";
        }
        // line 314
        echo "

        <div class=\"pagination\">
            <li><a class=\"page-link\" href=\"";
        // line 317
        (((0 < (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1)]), "html", null, true))) : (print ("")));
        echo "\">Anterior</a></li>

            ";
        // line 319
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - 1))) {
            // line 320
            echo "                ";
            $context["maxLeftRange"] = (($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange")) - 1);
            // line 321
            echo "            ";
        } elseif (((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages"))) && (($context["thisPage"] ?? $this->getContext($context, "thisPage")) != ($context["minRightRange"] ?? $this->getContext($context, "minRightRange"))))) {
            // line 322
            echo "                ";
            $context["maxLeftRange"] = ($context["maxPages"] ?? $this->getContext($context, "maxPages"));
            // line 323
            echo "            ";
        }
        // line 324
        echo "

            ";
        // line 326
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["minLeftRange"] ?? $this->getContext($context, "minLeftRange")), ($context["maxLeftRange"] ?? $this->getContext($context, "maxLeftRange"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 327
            echo "                <li class=\"page-item ";
            echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
            echo "\">
                    <a class=\"page-link\"  href=\"";
            // line 328
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "
            ";
        // line 332
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) >= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 333
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                ";
            // line 336
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 1))) {
                // line 337
                echo "                    ";
                $context["extremoDerecho"] = (($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho")) - 1);
                // line 338
                echo "                ";
            }
            // line 339
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["extremoIzquierdo"] ?? $this->getContext($context, "extremoIzquierdo")), ($context["extremoDerecho"] ?? $this->getContext($context, "extremoDerecho"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                    
                    <li class=\"page-item ";
                // line 340
                echo ((($context["i"] == ($context["thisPage"] ?? $this->getContext($context, "thisPage")))) ? ("active") : (""));
                echo "\">
                        <a class=\"page-link\"  href=\"";
                // line 341
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            echo "            ";
        }
        // line 345
        echo "
            ";
        // line 346
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["minRightRange"] ?? $this->getContext($context, "minRightRange")) - 2))) {
            // line 347
            echo "                ";
            if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) != (($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange")) - 3))) {
                // line 348
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                ";
            }
            // line 352
            echo "            ";
        }
        // line 353
        echo "
            ";
        // line 354
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) < (($context["maxPages"] ?? $this->getContext($context, "maxPages")) - ($context["extremos"] ?? $this->getContext($context, "extremos"))))) {
            // line 355
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minRightRange"] ?? $this->getContext($context, "minRightRange")), ($context["maxRightRange"] ?? $this->getContext($context, "maxRightRange"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"";
                // line 357
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "            ";
        }
        echo "            

            ";
        // line 362
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 363
            echo "
            ";
        } else {
            // line 365
            echo "                ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 366
            echo "            ";
        }
        // line 367
        echo "            <li><a class=\"page-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
        echo "\">Siguiente</a></li>

            </ul>
        </div>
    </div>

</div>

<script>

    \$('#expediente_filter_tema').autocompleter({
        url_list: \"";
        // line 378
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
        url_get: \"";
        // line 379
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_get");
        echo "\"
    });

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
        return "Expediente/listadoExpediente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  899 => 379,  895 => 378,  880 => 367,  877 => 366,  874 => 365,  870 => 363,  868 => 362,  862 => 360,  851 => 357,  843 => 355,  841 => 354,  838 => 353,  835 => 352,  829 => 348,  826 => 347,  824 => 346,  821 => 345,  818 => 344,  807 => 341,  803 => 340,  796 => 339,  793 => 338,  790 => 337,  788 => 336,  783 => 333,  781 => 332,  778 => 331,  767 => 328,  762 => 327,  758 => 326,  754 => 324,  751 => 323,  748 => 322,  745 => 321,  742 => 320,  740 => 319,  735 => 317,  730 => 314,  727 => 313,  724 => 312,  721 => 311,  718 => 310,  715 => 309,  712 => 308,  710 => 307,  707 => 306,  704 => 305,  701 => 304,  699 => 303,  696 => 302,  693 => 301,  690 => 300,  688 => 299,  685 => 298,  682 => 297,  679 => 296,  676 => 295,  674 => 294,  669 => 292,  666 => 291,  663 => 290,  660 => 289,  653 => 283,  645 => 281,  636 => 276,  633 => 275,  630 => 274,  625 => 272,  615 => 265,  608 => 261,  593 => 249,  585 => 245,  583 => 244,  578 => 242,  573 => 241,  571 => 240,  565 => 238,  559 => 237,  556 => 236,  553 => 235,  550 => 234,  545 => 233,  542 => 232,  539 => 231,  536 => 230,  533 => 229,  527 => 226,  525 => 225,  520 => 222,  516 => 220,  513 => 219,  509 => 217,  505 => 215,  502 => 214,  500 => 213,  495 => 211,  491 => 210,  485 => 207,  480 => 204,  475 => 203,  473 => 202,  458 => 189,  451 => 184,  445 => 180,  442 => 179,  436 => 177,  433 => 176,  430 => 175,  424 => 173,  421 => 172,  415 => 170,  413 => 169,  410 => 168,  404 => 167,  401 => 166,  398 => 165,  395 => 164,  392 => 163,  389 => 162,  386 => 161,  383 => 160,  380 => 159,  376 => 158,  373 => 157,  370 => 156,  367 => 155,  365 => 154,  360 => 152,  356 => 150,  354 => 149,  347 => 144,  338 => 141,  334 => 139,  330 => 138,  327 => 137,  318 => 134,  314 => 132,  310 => 131,  302 => 126,  296 => 123,  292 => 122,  283 => 116,  279 => 115,  272 => 111,  268 => 110,  262 => 107,  253 => 101,  248 => 99,  244 => 98,  237 => 94,  232 => 92,  228 => 91,  221 => 87,  216 => 85,  212 => 84,  209 => 83,  202 => 79,  197 => 77,  193 => 76,  190 => 75,  188 => 74,  180 => 69,  175 => 67,  168 => 63,  163 => 61,  156 => 57,  151 => 55,  143 => 50,  139 => 49,  130 => 42,  124 => 40,  122 => 39,  116 => 37,  110 => 36,  107 => 35,  104 => 34,  101 => 33,  96 => 32,  93 => 31,  90 => 30,  87 => 29,  85 => 28,  60 => 5,  51 => 4,  29 => 1,);
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
        .modal-header-warning {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #060325;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
    </style>

    <div class=\"content\">
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h2 class=\"mb-0\">
                        <button class=\"btn btn-dark search\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <i class=\"fas fa-plus\"></i> &ensp;Filtros de Búsqueda de Expediente ( Haga click aquí para expandir )
                        </button>
                        {% set accion_habilitada = false %}
                        {% if app.user.role == 'ROLE_ADMIN' %}
                            {% set accion_habilitada = true %}
                        {%else%}
                            {% for responsable in app.user.persona.dependencia.mesaentrada.responsables.getValues %}
                                {% if user == responsable.usuario %}
                                    {% set accion_habilitada = true %}
                                {% endif %}
                            {%endfor%}
                        {% endif %}  

                        {% if asociado == false and accion_habilitada == true %}
                            <a href=\"{{ path('nuevo_expediente') }}\" role=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-file-alt\"></i> Nuevo Expediente</a>
                        {% endif %}


                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
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
                            <div class=\"threecol col-lg-3\">            
                                {{ form_row(formExpedienteFilter.fechaInicio.left_date, { 'id': 'date1' })}} 
                                {{ form_widget(formExpedienteFilter.fechaInicio.left_date) }}

                            </div>   
                            <div class=\"threecol col-lg-3\">
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

            {% for message in app.flashes('success') %}
                <hr/>
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}

            {% for message in app.flashes('danger') %}
                <hr/>
                <div class=\"alert alert-danger\">
                    {{ message }}
                </div>
            {% endfor %}



        </div>

        {% if expedientes|length >0 %}
            <hr/>
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: {{totalItems }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                {% set nuevoCount=0 %}
                {% set vistoCount=0 %}
                {% set bajaCount = 0 %}

                {% for expediente in expedientes %}
                    {% if expediente.estado == 'NUEVO' and expediente.fechaBaja is null %}
                        {% set nuevoCount= nuevoCount+1 %}
                    {% elseif expediente.estado == 'VISTO' and expediente.fechaBaja is null %}
                        {% set vistoCount= vistoCount+1 %}
                    {% endif %}
                    {% if expediente.fechaBaja is not null%}
                        {% set bajaCount=bajaCount+1 %}
                    {% endif %}
                {% endfor %}

                {% if nuevoCount > 0 %}
                    <i class=\"far fa-file\"></i> Nuevos: {{nuevoCount}} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                {% endif %}
                {% if vistoCount > 0 %}
                    <i class=\"fas fa-check\"></i> Visto: {{vistoCount}} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                {% endif %}
                {% if app.user.role == 'ROLE_ADMIN' %}
                    {% if bajaCount >0 %}
                        <i class=\"fas fa-trash-alt\"></i> Baja: {{bajaCount}} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    {% endif %}
                {% endif %}
            </div>
            <hr/>

        {% else %}
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Búsqueda con 0 resultados, Cargue un expediente! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>
            <hr/>
        {%endif%}


        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th style=\"padding:15px;\" scope=\"col\">NUMERO</th>
                    <th style=\"padding:15px;\" scope=\"col\">TEMA</th>
                    <th style=\"padding:15px;\" class=\"text-center\" scope=\"col\">UBICACION ACTUAL</th>
                    <th style=\"padding:15px;\" class=\"text-center\" scope=\"col\">ESTADO</th>
                    <th style=\"padding:15px;\" class=\"text-center\" scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                {% set count=0 %}
                {% for expediente in expedientes|reverse %}
                    <tr>
                        <td class=\"\" style=\"padding:10px;\">

                            {{expediente}}

                        </td>            
                        <td class=\"\" style=\"padding:10px;\">{{expediente.tema|e }}</td>         
                        <td class=\"text-center\" style=\"padding:10px;\">{{expediente.ubicacionActual|e }}</td>
                        <td class=\"text-center\" style=\"padding:10px;\">
                            {% if expediente.fechaBaja == null %}
                                {% if expediente.estado == 'NUEVO' %}
                                    <span class=\"badge badge-pill badge-info\">NUEVO</span>
                                {% else %}
                                    <span class=\"badge badge-pill badge-success\">VISTO</span>
                                {% endif %}
                            {% else %}
                                <span class=\"badge badge-pill badge-danger\">BAJA</span>
                            {% endif %}

                        </td>  

                        {% if asociado == false %}
                            <td class=\"text-center\" style=\"padding:10px;\"><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>

                                {#<a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"><i class=\"fas fa-trash-alt\"></i></a></td>#}
                                {% set accion_habilitada = false %}
                                {% if app.user.role == 'ROLE_ADMIN' %}
                                    {% set accion_habilitada = true %}
                                {%else%}
                                    {% for responsable in expediente.ubicacionActual.responsables.getValues %}
                                        {% if user == responsable.usuario %}
                                            {% set accion_habilitada = true %}
                                        {% endif %}
                                    {%endfor%}
                                {% endif %}  

                                {% if accion_habilitada == true %}
                                    <a class=\"btn btn-warning\" href=\"{{ path(\"editar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                    <a class=\"btn btn-primary\" href=\"{{ path(\"elegir_movimiento\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Realizar un pase\"><i class=\"fas fa-arrow-alt-circle-right\"></i></a>

                                    {% if expediente.fechaBaja is null %}
                                        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal{{ count }}\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                        <!-- The Modal -->
                                        <div class=\"modal fade\" id=\"myModal{{count}}\">
                                            <div class=\"modal-dialog modal-sm modal-dialog-centered\">
                                                <div class=\"modal-content\">

                                                    <!-- Modal Header -->
                                                    <div class=\"modal-header-warning\">
                                                        <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        <h4 class=\"modal-title\">Eliminar Expediente</h4>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class=\"modal-body\">
                                                        ¿Desea Eliminar el Expediente: {{ expediente }}?
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"{{ path(\"eliminar_expediente\", {'id':expediente.id})  }}\"  role=\"button\">SI</a></button>                          
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {% set count=count+1 %}                                  
                                    {% endif %}
                                {% endif %}
                            {% else %}
                            <td class=\"text-center\"><a class=\"btn btn-info\" href=\"{{ path(\"nuevo_expediente_asociado\", {'id':padre_id, 'id_asoc':expediente.id}) }}\"  
                                                       role=\"button\" data-toggle=\"tooltip\" 
                                                       data-placement=\"top\" title=\"Asociar\"></i>Asociar</a></td>

                        {% endif %}

                    </tr>
                {% endfor %}                
            </tbody>
        </table>


        {#         -----Paginación-----              #}
        {% set limite = 6 %}
        {% set extremos = 2 %}

        {% if thisPage < limite %} 

            {%set minLeftRange = 1%}
            {%set maxLeftRange = thisPage+extremos%}
            {%set minRightRange = maxPages-extremos%}
            {%set maxRightRange = maxPages %}

        {% elseif thisPage >= limite%}
            {%set minLeftRange = 1 %}
            {%set maxLeftRange = 2 %}

            {%set extremoIzquierdo = thisPage-extremos%}
            {%set extremoDerecho = thisPage+extremos%}
            {%set minRightRange = maxPages-extremos+2 %}

            {% if extremoDerecho >= minRightRange+extremos%}
                {%set minRightRange = thisPage %}
                {%set extremoDerecho = maxPages%}
                {%set extremoIzquierdo = thisPage-((extremos*2))%}
            {%endif%}
            {%set maxRightRange = maxPages %}
        {%endif%}


        <div class=\"pagination\">
            <li><a class=\"page-link\" href=\"{{ 0 < thisPage-1 ? path('listado_expediente', {\"currentPage\": thisPage-1}) }}\">Anterior</a></li>

            {%if thisPage == maxPages-1%}
                {%set maxLeftRange = maxLeftRange-1%}
            {%elseif thisPage == maxPages and thisPage != minRightRange%}
                {%set maxLeftRange = maxPages%}
            {%endif%}


            {% for i in minLeftRange..maxLeftRange %}
                <li class=\"page-item {{  i == thisPage ? 'active' : '' }}\">
                    <a class=\"page-link\"  href=\"{{ path('listado_expediente', {\"currentPage\": i}) }}\">{{ i }}</a>
                </li>
            {% endfor %}

            {% if thisPage >= limite %}
                <li class=\"page-item disabled\">
                    <a class=\"page-link\"  href=\"#\">...</a>
                </li>
                {% if thisPage == minRightRange-1%}
                    {%set extremoDerecho = extremoDerecho-1%}
                {%endif%}
                {% for i in extremoIzquierdo..extremoDerecho %}                    
                    <li class=\"page-item {{  i == thisPage ? 'active' : '' }}\">
                        <a class=\"page-link\"  href=\"{{ path('listado_expediente', {\"currentPage\": i}) }}\">{{ i }}</a>
                    </li>                    
                {% endfor %}
            {%endif%}

            {% if thisPage < minRightRange-2%}
                {%if thisPage!= maxRightRange-3%}
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"  href=\"#\">...</a>
                    </li>
                {%endif%}
            {% endif%}

            {% if thisPage < maxPages-extremos%}
                {% for i in minRightRange..maxRightRange %}                   
                    <li class=\"page-item\">
                        <a class=\"page-link\"  href=\"{{ path('listado_expediente', {\"currentPage\": i}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
            {%endif%}            

            {%if (page==maxPages)%}

            {%else%}
                {%set page= page+1%}
            {%endif%}
            <li><a class=\"page-link\" href=\"{{ path('listado_expediente', {\"currentPage\": page}) }}\">Siguiente</a></li>

            </ul>
        </div>
    </div>

</div>

<script>

    \$('#expediente_filter_tema').autocompleter({
        url_list: \"{{ path('tema_search') }}\",
        url_get: \"{{ path('tema_get') }}\"
    });

    \$(function () {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    })
</script>


{% endblock %}
", "Expediente/listadoExpediente.html.twig", "/var/www/html/SIE/app/Resources/views/Expediente/listadoExpediente.html.twig");
    }
}
