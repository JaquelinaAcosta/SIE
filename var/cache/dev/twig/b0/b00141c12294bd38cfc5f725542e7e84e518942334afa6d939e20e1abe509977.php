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
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "dependencia", []), "html", null, true);
        echo "
                        </button>
                        ";
        // line 47
        if (((($context["asociado"] ?? $this->getContext($context, "asociado")) == false) && (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_RESPONSABLE") || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")))) {
            // line 48
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente");
            echo "\" role=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-file-alt\"></i> Nuevo Expediente</a>
                        ";
        }
        // line 50
        echo "
                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_start');
        echo "
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'errors');
        echo "

                        <label class=\"text-default\">NUMERO DE EXPEDIENTE</label>
                        <div class=\"row\">
                            <div class=\"threecol col-lg-1\">
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "codigoExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-2\">
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "numeroExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"threecol col-lg-1\">
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "digitoExpediente", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 81
        if ($this->getAttribute(($context["formExpedienteFilter"] ?? null), "dependencia", [], "any", true, true)) {
            // line 82
            echo "                                <div class=\"threecol col-lg-4\">
                                    ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'label', ["label" => "DEPENDENCIA"]);
            echo "
                                    ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'widget');
            echo "
                                    <div class=\"help-block with-errors\">
                                        ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "dependencia", []), 'errors');
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 90
        echo "                            <div class=\"threecol col-lg-5\">
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'label', ["label" => "TEMA"]);
        echo "
                                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'errors');
        echo "
                                </div>
                            </div>    
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'label', ["label" => "TIPO"]);
        echo "
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'errors');
        echo "
                                </div>
                            </div>  
                            <div class=\"threecol col-lg-3\">
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'label', ["label" => "ESTADO"]);
        echo "
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'widget');
        echo "
                                <div class=\"help-block with-errors\">
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "estado", []), 'errors');
        echo "
                                </div>
                            </div>  


                            <div class=\"help-block with-errors\">
                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'errors');
        echo "
                            </div>
                            <div class=\"threecol col-lg-2\">            
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "left_date", []), 'row', ["id" => "date1"]);
        echo " 
                                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "left_date", []), 'widget');
        echo "

                            </div>   
                            <div class=\"threecol col-lg-2\">
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "right_date", []), 'row', ["id" => "date2"]);
        echo " 
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), "right_date", []), 'widget');
        echo "
                            </div>
                        </div>
                        <hr/>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "filter", []), 'widget');
        echo "
                                ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "reset", []), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            <hr/>

            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 140
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 141
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "
            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 147
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 148
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "


        </div>

        ";
        // line 157
        if ((twig_length_filter($this->env, ($context["expediente"] ?? $this->getContext($context, "expediente"))) > 0)) {
            // line 158
            echo "
            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: ";
            // line 160
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["expediente"] ?? $this->getContext($context, "expediente"))), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                ";
            // line 162
            $context["nuevoCount"] = 0;
            // line 163
            echo "                ";
            $context["vistoCount"] = 0;
            // line 164
            echo "                ";
            $context["bajaCount"] = 0;
            // line 165
            echo "
                ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["expediente"]);
            foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
                // line 167
                echo "                    ";
                if ((($this->getAttribute($context["expediente"], "estado", []) == "NUEVO") && (null === $this->getAttribute($context["expediente"], "fechaBaja", [])))) {
                    // line 168
                    echo "                        ";
                    $context["nuevoCount"] = (($context["nuevoCount"] ?? $this->getContext($context, "nuevoCount")) + 1);
                    // line 169
                    echo "                    ";
                } elseif ((($this->getAttribute($context["expediente"], "estado", []) == "VISTO") && (null === $this->getAttribute($context["expediente"], "fechaBaja", [])))) {
                    // line 170
                    echo "                        ";
                    $context["vistoCount"] = (($context["vistoCount"] ?? $this->getContext($context, "vistoCount")) + 1);
                    // line 171
                    echo "                    ";
                }
                // line 172
                echo "                    ";
                if ( !(null === $this->getAttribute($context["expediente"], "fechaBaja", []))) {
                    // line 173
                    echo "                        ";
                    $context["bajaCount"] = (($context["bajaCount"] ?? $this->getContext($context, "bajaCount")) + 1);
                    // line 174
                    echo "                    ";
                }
                // line 175
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "
                ";
            // line 177
            if ((($context["nuevoCount"] ?? $this->getContext($context, "nuevoCount")) > 0)) {
                // line 178
                echo "                    <i class=\"far fa-file\"></i> Nuevos: ";
                echo twig_escape_filter($this->env, ($context["nuevoCount"] ?? $this->getContext($context, "nuevoCount")), "html", null, true);
                echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                ";
            }
            // line 180
            echo "                ";
            if ((($context["vistoCount"] ?? $this->getContext($context, "vistoCount")) > 0)) {
                // line 181
                echo "                    <i class=\"fas fa-check\"></i> Visto: ";
                echo twig_escape_filter($this->env, ($context["vistoCount"] ?? $this->getContext($context, "vistoCount")), "html", null, true);
                echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                ";
            }
            // line 183
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 184
                echo "                    ";
                if ((($context["bajaCount"] ?? $this->getContext($context, "bajaCount")) > 0)) {
                    // line 185
                    echo "                        <i class=\"fas fa-trash-alt\"></i> Baja: ";
                    echo twig_escape_filter($this->env, ($context["bajaCount"] ?? $this->getContext($context, "bajaCount")), "html", null, true);
                    echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    ";
                }
                // line 187
                echo "                ";
            }
            // line 188
            echo "            </div>
            <hr/>

        ";
        }
        // line 192
        echo "
        <table class=\"table table-sm table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">NUMERO</th>
                    <th scope=\"col\">TEMA</th>
                    <th class=\"text-center\" scope=\"col\">UBICACION ACTUAL</th>
                    <th class=\"text-center\" scope=\"col\">ESTADO</th>
                    <th class=\"text-center\" scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 204
        $context["count"] = 0;
        // line 205
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["expediente"]));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
            // line 206
            echo "                    <tr>
                        <td class=\"\">

                            ";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "codigoExpediente", []), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "numeroExpediente", []), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "digitoExpediente", []), "html", null, true);
            echo "

                        </td>            
                        <td class=\"\">";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "tema", []));
            echo "</td>         
                        <td class=\"text-center\">";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "ubicacionActual", []));
            echo "</td>
                        <td class=\"text-center\">
                            ";
            // line 215
            if (($this->getAttribute($context["expediente"], "fechaBaja", []) == null)) {
                // line 216
                echo "                                ";
                if (($this->getAttribute($context["expediente"], "estado", []) == "NUEVO")) {
                    // line 217
                    echo "                                    <span class=\"badge badge-pill badge-info\">NUEVO</span>
                                ";
                } else {
                    // line 219
                    echo "                                    <span class=\"badge badge-pill badge-success\">VISTO</span>
                                ";
                }
                // line 221
                echo "                            ";
            } else {
                // line 222
                echo "                                <span class=\"badge badge-pill badge-danger\">BAJA</span>
                            ";
            }
            // line 224
            echo "
                        </td>  

                        ";
            // line 227
            if ((($context["asociado"] ?? $this->getContext($context, "asociado")) == false)) {
                // line 228
                echo "                            <td class=\"text-center\"><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>

                                ";
                // line 232
                echo "                                ";
                if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_RESPONSABLE") || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN"))) {
                    // line 233
                    echo "                                    <a class=\"btn btn-warning\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                    echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                    <a class=\"btn btn-warning\" href=\"";
                    // line 234
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("elegir_movimiento", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                    echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Realizar Movimiento\"><i class=\"fas fa-arrow-alt-circle-right\"></i></a>

                                    ";
                    // line 236
                    if ((null === $this->getAttribute($context["expediente"], "fechaBaja", []))) {
                        // line 237
                        echo "                                        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal";
                        echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                        echo "\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"></i></button>    


                                        <!-- The Modal -->
                                        <div class=\"modal fade\" id=\"myModal";
                        // line 241
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
                        // line 253
                        echo twig_escape_filter($this->env, $context["expediente"], "html", null, true);
                        echo "?
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-primary\"><a class=\"text-type btn-primary\"href=\"";
                        // line 257
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                        echo "\"  role=\"button\">SI</a></button>                          
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NO</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        ";
                        // line 264
                        $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                        // line 265
                        echo "                                    ";
                    } else {
                        // line 266
                        echo "                                        <a class=\"btn btn-success\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alta_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                        echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dar de alta\"><i class=\"fas fa-check-square\"></i></a>
                                        ";
                    }
                    // line 268
                    echo "                                    ";
                }
                // line 269
                echo "                                ";
            } else {
                // line 270
                echo "                            <td class=\"text-center\"><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente_asociado", ["id" => ($context["padre_id"] ?? $this->getContext($context, "padre_id")), "id_asoc" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
                echo "\"  
                                                       role=\"button\" data-toggle=\"tooltip\" 
                                                       data-placement=\"top\" title=\"Asociar\"></i>Asociar</a></td>

                        ";
            }
            // line 275
            echo "
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "
            </tbody>
        </table>

    </div>

    <script>

        \$('#expediente_filter_tema').autocompleter({
            url_list: \"";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
            url_get: \"";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_get");
        echo "\"
        });
        ";
        // line 294
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
        return array (  623 => 294,  618 => 288,  614 => 287,  603 => 278,  595 => 275,  586 => 270,  583 => 269,  580 => 268,  574 => 266,  571 => 265,  569 => 264,  559 => 257,  552 => 253,  537 => 241,  529 => 237,  527 => 236,  522 => 234,  517 => 233,  514 => 232,  508 => 228,  506 => 227,  501 => 224,  497 => 222,  494 => 221,  490 => 219,  486 => 217,  483 => 216,  481 => 215,  476 => 213,  472 => 212,  462 => 209,  457 => 206,  452 => 205,  450 => 204,  436 => 192,  430 => 188,  427 => 187,  421 => 185,  418 => 184,  415 => 183,  409 => 181,  406 => 180,  400 => 178,  398 => 177,  395 => 176,  389 => 175,  386 => 174,  383 => 173,  380 => 172,  377 => 171,  374 => 170,  371 => 169,  368 => 168,  365 => 167,  361 => 166,  358 => 165,  355 => 164,  352 => 163,  350 => 162,  345 => 160,  341 => 158,  339 => 157,  332 => 152,  322 => 148,  319 => 147,  315 => 146,  312 => 145,  302 => 141,  299 => 140,  295 => 139,  286 => 133,  280 => 130,  276 => 129,  267 => 123,  263 => 122,  256 => 118,  252 => 117,  246 => 114,  237 => 108,  232 => 106,  228 => 105,  221 => 101,  216 => 99,  212 => 98,  205 => 94,  200 => 92,  196 => 91,  193 => 90,  186 => 86,  181 => 84,  177 => 83,  174 => 82,  172 => 81,  164 => 76,  159 => 74,  152 => 70,  147 => 68,  140 => 64,  135 => 62,  127 => 57,  123 => 56,  115 => 50,  109 => 48,  107 => 47,  102 => 45,  60 => 5,  51 => 4,  29 => 1,);
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
                        {% if asociado == false and (app.user.role == 'ROLE_RESPONSABLE' or app.user.role == 'ROLE_ADMIN') %}
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

        {% if expediente|length >0 %}

            <div class=\"alert alert-info\">
                <i class=\"fas fa-search\"></i> Resultados de la búsqueda: {{ expediente|length }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                {% set nuevoCount=0 %}
                {% set vistoCount=0 %}
                {% set bajaCount = 0 %}

                {% for expediente in expediente %}
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

        <table class=\"table table-sm table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">NUMERO</th>
                    <th scope=\"col\">TEMA</th>
                    <th class=\"text-center\" scope=\"col\">UBICACION ACTUAL</th>
                    <th class=\"text-center\" scope=\"col\">ESTADO</th>
                    <th class=\"text-center\" scope=\"col\">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                {% set count=0 %}
                {% for expediente in expediente|reverse %}
                    <tr>
                        <td class=\"\">

                            {{expediente.codigoExpediente }}-{{expediente.numeroExpediente }}-{{expediente.digitoExpediente }}

                        </td>            
                        <td class=\"\">{{expediente.tema|e }}</td>         
                        <td class=\"text-center\">{{expediente.ubicacionActual|e }}</td>
                        <td class=\"text-center\">
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
                            <td class=\"text-center\"><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>

                                {#<a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"><i class=\"fas fa-trash-alt\"></i></a></td>
#}
                                {% if app.user.role == 'ROLE_RESPONSABLE' or app.user.role == 'ROLE_ADMIN' %}
                                    <a class=\"btn btn-warning\" href=\"{{ path(\"editar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                                    <a class=\"btn btn-warning\" href=\"{{ path(\"elegir_movimiento\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Realizar Movimiento\"><i class=\"fas fa-arrow-alt-circle-right\"></i></a>

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
