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
                            <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Expediente - ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "dependencia", []), "html", null, true);
        echo "
                        </button>
                        ";
        // line 48
        $context["accion_habilitada"] = false;
        // line 49
        echo "                        ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 50
            echo "                            ";
            $context["accion_habilitada"] = true;
            // line 51
            echo "                        ";
        } else {
            // line 52
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "dependencia", []), "mesaentrada", []), "responsables", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 53
                echo "                                ";
                if ((($context["user"] ?? $this->getContext($context, "user")) == $this->getAttribute($context["responsable"], "usuario", []))) {
                    // line 54
                    echo "                                    ";
                    $context["accion_habilitada"] = true;
                    // line 55
                    echo "                                ";
                }
                // line 56
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                        ";
        }
        echo "  

                        ";
        // line 59
        if (((($context["asociado"] ?? $this->getContext($context, "asociado")) == false) && (($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true))) {
            // line 60
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente");
            echo "\" role=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-file-alt\"></i> Nuevo Expediente</a>
                        ";
        }
        // line 62
        echo "

                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_start');
        echo "
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'errors');
        echo "

                        <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
                        <div class=\"row\">
                            <div class=\"threecol col-lg-1\">
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-2\">
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-1\">
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 94
        if ($this->getAttribute(($context["formExpedienteFilter"] ?? null), "dependencia", [], "any", true, true)) {
            // line 95
            echo "                                <div class=\"threecol col-lg-4\">
                                    ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
            echo "
                                    ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'widget');
            echo "
                                    <div class=\"help-block with-errors\">
                                        ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'errors');
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 103
        echo "                            <div class=\"threecol col-lg-5\">
                                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'label', ["label" => "TEMA"]);
        echo "
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'errors');
        echo "
                                </div>
                            </div>    
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'label', ["label" => "TIPO"]);
        echo "
                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'errors');
        echo "
                                </div>
                            </div>  
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'label', ["label" => "ESTADO"]);
        echo "
                                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'errors');
        echo "
                                </div>
                            </div>  


                            <div class=\"help-block with-errors\">
                                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaCarga", []), 'errors');
        echo "
                            </div>
                            <div class=\"threecol col-lg-2\">            
                                ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaCarga", []), "left_date", []), 'row', ["id" => "date1"]);
        echo " 
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaCarga", []), "left_date", []), 'widget');
        echo "

                            </div>   
                            <div class=\"threecol col-lg-2\">
                                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaCarga", []), "right_date", []), 'row', ["id" => "date2"]);
        echo " 
                                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaCarga", []), "right_date", []), 'widget');
        echo "
                            </div>
                        </div>
                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            <hr/>

            ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 153
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 154
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "
            ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 160
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 161
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "


        </div>

        ";
        // line 170
        if ((twig_length_filter($this->env, ($context["expedientes"] ?? $this->getContext($context, "expedientes"))) > 0)) {
            // line 171
            echo "
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: ";
            // line 173
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["expedientes"] ?? $this->getContext($context, "expedientes"))), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                ";
            // line 175
            $context["nuevoCount"] = 0;
            // line 176
            echo "                ";
            $context["vistoCount"] = 0;
            // line 177
            echo "                ";
            $context["bajaCount"] = 0;
            // line 178
            echo "
                ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["expedientes"] ?? $this->getContext($context, "expedientes")));
            foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
                // line 180
                echo "                    ";
                if ((($this->getAttribute($context["expediente"], "estado", []) == "NUEVO") && (null === $this->getAttribute($context["expediente"], "fechaBaja", [])))) {
                    // line 181
                    echo "                        ";
                    $context["nuevoCount"] = (($context["nuevoCount"] ?? $this->getContext($context, "nuevoCount")) + 1);
                    // line 182
                    echo "                    ";
                } elseif ((($this->getAttribute($context["expediente"], "estado", []) == "VISTO") && (null === $this->getAttribute($context["expediente"], "fechaBaja", [])))) {
                    // line 183
                    echo "                        ";
                    $context["vistoCount"] = (($context["vistoCount"] ?? $this->getContext($context, "vistoCount")) + 1);
                    // line 184
                    echo "                    ";
                }
                // line 185
                echo "                    ";
                if ( !(null === $this->getAttribute($context["expediente"], "fechaBaja", []))) {
                    // line 186
                    echo "                        ";
                    $context["bajaCount"] = (($context["bajaCount"] ?? $this->getContext($context, "bajaCount")) + 1);
                    // line 187
                    echo "                    ";
                }
                // line 188
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "
                ";
            // line 190
            if ((($context["nuevoCount"] ?? $this->getContext($context, "nuevoCount")) > 0)) {
                // line 191
                echo "                    <i class=\"far fa-file\"></i> Nuevos: ";
                echo twig_escape_filter($this->env, ($context["nuevoCount"] ?? $this->getContext($context, "nuevoCount")), "html", null, true);
                echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                ";
            }
            // line 193
            echo "                ";
            if ((($context["vistoCount"] ?? $this->getContext($context, "vistoCount")) > 0)) {
                // line 194
                echo "                    <i class=\"fas fa-check\"></i> Visto: ";
                echo twig_escape_filter($this->env, ($context["vistoCount"] ?? $this->getContext($context, "vistoCount")), "html", null, true);
                echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                ";
            }
            // line 196
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 197
                echo "                    ";
                if ((($context["bajaCount"] ?? $this->getContext($context, "bajaCount")) > 0)) {
                    // line 198
                    echo "                        <i class=\"fas fa-trash-alt\"></i> Baja: ";
                    echo twig_escape_filter($this->env, ($context["bajaCount"] ?? $this->getContext($context, "bajaCount")), "html", null, true);
                    echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    ";
                }
                // line 200
                echo "                ";
            }
            // line 201
            echo "            </div>
            <hr/>

        ";
        }
        // line 205
        echo "
        <table class=\"table table-sm table-hover table-bordered\">
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
        // line 217
        $context["count"] = 0;
        // line 218
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["expedientes"] ?? $this->getContext($context, "expedientes"))));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
            // line 219
            echo "                    <tr>
                        <td class=\"\" style=\"padding:10px;\">

                           ";
            // line 222
            echo twig_escape_filter($this->env, $context["expediente"], "html", null, true);
            echo "

                        </td>            
                        <td class=\"\" style=\"padding:10px;\">";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "tema", []));
            echo "</td>         
                        <td class=\"text-center\" style=\"padding:10px;\">";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "ubicacionActual", []));
            echo "</td>
                        <td class=\"text-center\" style=\"padding:10px;\">
                            ";
            // line 228
            if (($this->getAttribute($context["expediente"], "fechaBaja", []) == null)) {
                // line 229
                echo "                                ";
                if (($this->getAttribute($context["expediente"], "estado", []) == "NUEVO")) {
                    // line 230
                    echo "                                    <span class=\"badge badge-pill badge-info\">NUEVO</span>
                                ";
                } else {
                    // line 232
                    echo "                                    <span class=\"badge badge-pill badge-success\">VISTO</span>
                                ";
                }
                // line 234
                echo "                            ";
            } else {
                // line 235
                echo "                                <span class=\"badge badge-pill badge-danger\">BAJA</span>
                            ";
            }
            // line 237
            echo "
                        </td>  

                        ";
            // line 240
            if ((($context["asociado"] ?? $this->getContext($context, "asociado")) == false)) {
                // line 241
                echo "                            <td class=\"text-center\" style=\"padding:10px;\"><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>

                                ";
                // line 244
                echo "                                ";
                $context["accion_habilitada"] = false;
                // line 245
                echo "                                ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                    // line 246
                    echo "                                    ";
                    $context["accion_habilitada"] = true;
                    // line 247
                    echo "                                ";
                } else {
                    // line 248
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["expediente"], "ubicacionActual", []), "responsables", []), "getValues", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                        // line 249
                        echo "                                        ";
                        if ((($context["user"] ?? $this->getContext($context, "user")) == $this->getAttribute($context["responsable"], "usuario", []))) {
                            // line 250
                            echo "                                            ";
                            $context["accion_habilitada"] = true;
                            // line 251
                            echo "                                        ";
                        }
                        // line 252
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 253
                    echo "                                ";
                }
                echo "  

                                ";
                // line 255
                if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
                    // line 256
                    echo "                                    <a class=\"btn btn-warning\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                    echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                    <a class=\"btn btn-primary\" href=\"";
                    // line 257
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("elegir_movimiento", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                    echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Realizar un pase\"><i class=\"fas fa-arrow-alt-circle-right\"></i></a>

                                    ";
                    // line 259
                    if ((null === $this->getAttribute($context["expediente"], "fechaBaja", []))) {
                        // line 260
                        echo "                                        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                        echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                        echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                        <!-- The Modal -->
                                        <div class=\"modal fade\" id=\"myModal";
                        // line 264
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
                        // line 276
                        echo twig_escape_filter($this->env, $context["expediente"], "html", null, true);
                        echo "?
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                        // line 280
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                        echo "\"  role=\"button\">SI</a></button>                          
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        ";
                        // line 287
                        $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                        // line 288
                        echo "                                    ";
                    } else {
                        // line 289
                        echo "                                        <a class=\"btn btn-success\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alta_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                        echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dar de alta\"><i class=\"fas fa-check-square\"></i></a>
                                        ";
                    }
                    // line 291
                    echo "                                    ";
                }
                // line 292
                echo "                                ";
            } else {
                // line 293
                echo "                            <td class=\"text-center\"><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "id_asoc" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                echo "\"  
                                                       role=\"button\" data-toggle=\"tooltip\" 
                                                       data-placement=\"top\" title=\"Asociar\"></i>Asociar</a></td>

                        ";
            }
            // line 298
            echo "
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "                ";
        if ((twig_length_filter($this->env, ($context["expedientes"] ?? $this->getContext($context, "expedientes"))) <= ($context["limite"] ?? $this->getContext($context, "limite")))) {
            // line 302
            echo "                    ";
            $context["filas_vacias"] = (($context["limite"] ?? $this->getContext($context, "limite")) - twig_length_filter($this->env, ($context["expedientes"] ?? $this->getContext($context, "expedientes"))));
            // line 303
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["totalItems"] ?? $this->getContext($context, "totalItems")), ($context["filas_vacias"] ?? $this->getContext($context, "filas_vacias"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 304
                echo "                        <tr>
                            <td style=\"padding:23px;\"></td>
                             <td style=\"padding:23px;\"></td>
                              <td style=\"padding:23px;\"></td>
                               <td style=\"padding:23px;\"></td>
                                <td style=\"padding:23px;\"></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "                ";
        }
        // line 313
        echo "            </tbody>
        </table>


        <div class=\"row\">
            <ul class=\"pagination\">
                ";
        // line 319
        if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
            echo "           
                ";
        } else {
            // line 321
            echo "                    ";
            $context["thisPage"] = (($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1);
            // line 322
            echo "                ";
        }
        // line 323
        echo "
                <li ><a class=\"page-link\" href=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => ($context["thisPage"] ?? $this->getContext($context, "thisPage"))]), "html", null, true);
        echo "\">&laquo</a></li>
                    ";
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 326
            echo "                    <li class=\"page-item active\"><a class=\"page-link\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "
                ";
        // line 329
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
            // line 330
            echo "
                ";
        } else {
            // line 332
            echo "                    ";
            $context["page"] = (($context["page"] ?? $this->getContext($context, "page")) + 1);
            // line 333
            echo "                ";
        }
        // line 334
        echo "                <li><a class=\"page-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
        echo "\">&raquo</a></li>

            </ul>
        </div>
    </div>

</div>

<script>

    \$('#expediente_filter_tema').autocompleter({
        url_list: \"";
        // line 345
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
        url_get: \"";
        // line 346
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
        return array (  777 => 346,  773 => 345,  758 => 334,  755 => 333,  752 => 332,  748 => 330,  746 => 329,  743 => 328,  732 => 326,  728 => 325,  724 => 324,  721 => 323,  718 => 322,  715 => 321,  710 => 319,  702 => 313,  699 => 312,  686 => 304,  681 => 303,  678 => 302,  675 => 301,  667 => 298,  658 => 293,  655 => 292,  652 => 291,  646 => 289,  643 => 288,  641 => 287,  631 => 280,  624 => 276,  609 => 264,  601 => 260,  599 => 259,  594 => 257,  589 => 256,  587 => 255,  581 => 253,  575 => 252,  572 => 251,  569 => 250,  566 => 249,  561 => 248,  558 => 247,  555 => 246,  552 => 245,  549 => 244,  543 => 241,  541 => 240,  536 => 237,  532 => 235,  529 => 234,  525 => 232,  521 => 230,  518 => 229,  516 => 228,  511 => 226,  507 => 225,  501 => 222,  496 => 219,  491 => 218,  489 => 217,  475 => 205,  469 => 201,  466 => 200,  460 => 198,  457 => 197,  454 => 196,  448 => 194,  445 => 193,  439 => 191,  437 => 190,  434 => 189,  428 => 188,  425 => 187,  422 => 186,  419 => 185,  416 => 184,  413 => 183,  410 => 182,  407 => 181,  404 => 180,  400 => 179,  397 => 178,  394 => 177,  391 => 176,  389 => 175,  384 => 173,  380 => 171,  378 => 170,  371 => 165,  361 => 161,  358 => 160,  354 => 159,  351 => 158,  341 => 154,  338 => 153,  334 => 152,  325 => 146,  319 => 143,  315 => 142,  306 => 136,  302 => 135,  295 => 131,  291 => 130,  285 => 127,  276 => 121,  271 => 119,  267 => 118,  260 => 114,  255 => 112,  251 => 111,  244 => 107,  239 => 105,  235 => 104,  232 => 103,  225 => 99,  220 => 97,  216 => 96,  213 => 95,  211 => 94,  203 => 89,  198 => 87,  191 => 83,  186 => 81,  179 => 77,  174 => 75,  166 => 70,  162 => 69,  153 => 62,  147 => 60,  145 => 59,  139 => 57,  133 => 56,  130 => 55,  127 => 54,  124 => 53,  119 => 52,  116 => 51,  113 => 50,  110 => 49,  108 => 48,  103 => 46,  60 => 5,  51 => 4,  29 => 1,);
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
                            <i class=\"fas fa-search-plus\"></i> Filtros de Búsqueda de Expediente - {{ app.user.persona.dependencia }}
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
                                {{ form_errors(formExpedienteFilter.fechaCarga) }}
                            </div>
                            <div class=\"threecol col-lg-2\">            
                                {{ form_row(formExpedienteFilter.fechaCarga.left_date, { 'id': 'date1' })}} 
                                {{ form_widget(formExpedienteFilter.fechaCarga.left_date) }}

                            </div>   
                            <div class=\"threecol col-lg-2\">
                                {{ form_row(formExpedienteFilter.fechaCarga.right_date, { 'id': 'date2' })}} 
                                {{ form_widget(formExpedienteFilter.fechaCarga.right_date) }}
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

        {% if expedientes|length >0 %}

            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: {{ expedientes|length }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

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

        {% endif %}

        <table class=\"table table-sm table-hover table-bordered\">
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
                                    {% else %}
                                        <a class=\"btn btn-success\" href=\"{{ path(\"alta_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dar de alta\"><i class=\"fas fa-check-square\"></i></a>
                                        {% endif %}
                                    {% endif %}
                                {% else %}
                            <td class=\"text-center\"><a class=\"btn btn-info\" href=\"{{ path(\"nuevo_expediente_asociado\", {'id':padre_id, 'id_asoc':expediente.id}) }}\"  
                                                       role=\"button\" data-toggle=\"tooltip\" 
                                                       data-placement=\"top\" title=\"Asociar\"></i>Asociar</a></td>

                        {% endif %}

                    </tr>
                {% endfor %}
                {% if expedientes|length <= limite %}
                    {% set filas_vacias = limite - expedientes|length %}
                    {% for i in totalItems..filas_vacias %}
                        <tr>
                            <td style=\"padding:23px;\"></td>
                             <td style=\"padding:23px;\"></td>
                              <td style=\"padding:23px;\"></td>
                               <td style=\"padding:23px;\"></td>
                                <td style=\"padding:23px;\"></td>
                        </tr>
                    {% endfor %}
                {%endif%}
            </tbody>
        </table>


        <div class=\"row\">
            <ul class=\"pagination\">
                {%if (thisPage==1)%}           
                {%else%}
                    {%set thisPage= thisPage-1%}
                {%endif%}

                <li ><a class=\"page-link\" href=\"{{ path('listado_expediente', {\"currentPage\": thisPage}) }}\">&laquo</a></li>
                    {% for i in 1..maxPages %}
                    <li class=\"page-item active\"><a class=\"page-link\"  href=\"{{ path('listado_expediente', {\"currentPage\": i}) }}\">{{ i }}</a></li>
                    {% endfor %}

                {%if (page==maxPages)%}

                {%else%}
                    {%set page= page+1%}
                {%endif%}
                <li><a class=\"page-link\" href=\"{{ path('listado_expediente', {\"currentPage\": page}) }}\">&raquo</a></li>

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
