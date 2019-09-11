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

/* Expediente/detalleExpediente.html.twig */
class __TwigTemplate_4f8a2bf90bf608671a65c33254190fd5ff4899050ea3a94b931bbc8bd6f163ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/detalleExpediente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Expediente/detalleExpediente.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Expediente/detalleExpediente.html.twig", 1);
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
    ";
        // line 5
        $context["accion_habilitada"] = false;
        // line 6
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
            // line 7
            echo "        ";
            $context["accion_habilitada"] = true;
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "responsables", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 10
                echo "            ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == $this->getAttribute($context["responsable"], "usuario", []))) {
                    // line 11
                    echo "                ";
                    $context["accion_habilitada"] = true;
                    // line 12
                    echo "            ";
                }
                // line 13
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
    ";
        }
        // line 15
        echo "  

    <div class=\"content\">
        <div class=\"row\">
            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\"> </th>
                        <th scope=\"col\"> <i class=\"fas fa-info-circle \"></i> <strong>DETALLE DEL EXPEDIENTE ";
        // line 23
        echo twig_escape_filter($this->env, ($context["expediente"] ?? $this->getContext($context, "expediente")), "html", null, true);
        echo "
                                ";
        // line 24
        if ((($context["accion_habilitada"] ?? $this->getContext($context, "accion_habilitada")) == true)) {
            // line 25
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" class=\"right btn btn-warning float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Expediente\"><i class=\"fas fa-edit\"></i></a></th>       
                                    ";
        }
        // line 27
        echo "                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <th class=\"w-25 bg-gray\">TEMA</th>
                        <td class=\"bg-white\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tema", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">CONCEPTO</th>
                        <td class=\"bg-white\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "concepto", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TOTAL DE FOJAS</th>
                        <td class=\"bg-white\">

                            ";
        // line 42
        $context["fojas"] = $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fojas", []);
        // line 43
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", []));
        foreach ($context['_seq'] as $context["_key"] => $context["caratula"]) {
            // line 44
            echo "                                ";
            if (($this->getAttribute($context["caratula"], "fechaBaja", []) == null)) {
                // line 45
                echo "                                    ";
                $context["fojas"] = (($context["fojas"] ?? $this->getContext($context, "fojas")) + $this->getAttribute($context["caratula"], "fojas", []));
                // line 46
                echo "                                ";
            }
            // line 47
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["fojas"] ?? $this->getContext($context, "fojas")), "html", null, true);
        echo "


                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TIPO</th>
                        <td class=\"bg-white\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "tipo", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">INICIADOR DEPENDENCIA</th>
                        <td class=\"bg-white\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "iniciadorDependencia", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE INICIO</th>
                        <td class=\"bg-white\">";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaInicio", []), "d-m-Y"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE FIN</th>
                        <td class=\"bg-white\">
                            ";
        // line 68
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []) != null)) {
            // line 69
            echo "                                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "fechaFin", []), "d-m-Y"), "html", null, true);
            echo "
                            ";
        }
        // line 71
        echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">ULTIMO PASE</th>
                        <td  class=\"bg-white\">
                            ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ultimaUbicacion", []), "html", null, true);
        echo "

                            - ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ultimaUbicacion", []), "dependencia", []), "html", null, true);
        echo "

                            , en fecha <strong>";
        // line 80
        echo twig_escape_filter($this->env, ($context["ultima_fecha"] ?? $this->getContext($context, "ultima_fecha")), "html", null, true);
        echo "</strong>
                        </td>
                    </tr>  
                    <tr>
                        <th class=\"w-25 bg-gray\">UBICACION ACTUAL</th>
                        <td  class=\"bg-white\">
                            ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "html", null, true);
        echo "                          
                            - ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "ubicacionActual", []), "dependencia", []), "html", null, true);
        echo "
                            , desde el <strong>";
        // line 88
        echo twig_escape_filter($this->env, ($context["actual_fecha"] ?? $this->getContext($context, "actual_fecha")), "html", null, true);
        echo "</strong>
                        </td>
                    </tr>   


                    ";
        // line 93
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "estado", []) == "ASOCIADO")) {
            echo "                        
                        <tr>
                            <th class=\"w-25 bg-gray\">ASOCIADO A EXPEDIENTE</th>
                            <td  class=\"bg-white\">

                                ";
            // line 98
            echo twig_escape_filter($this->env, ($context["expediente_padre"] ?? $this->getContext($context, "expediente_padre")), "html", null, true);
            echo "
                                <br/>
                            <td/>
                        </tr>              
                    ";
        }
        // line 103
        echo "
                </tbody>
                <tfoot>
            </table>  


        </div>

        <div class=\"row\">
            <div class=\"btn-group float-left\">
                <a class=\"btn btn-primary\" href=\"#\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_movimiento", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => 1]), "html", null, true);
        echo "\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">MOVIMIENTOS
                    ";
        // line 117
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "movimientos", []), "getValues", [])) > 0)) {
            // line 118
            echo "                        <span class=\"badge badge-danger badge-pill\">
                            ";
            // line 119
            $context["countMovimiento"] = 0;
            // line 120
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "movimientos", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
                // line 121
                echo "                                ";
                if (($this->getAttribute($context["movimiento"], "fechaBaja", []) == null)) {
                    // line 122
                    echo "                                    ";
                    $context["countMovimiento"] = (($context["countMovimiento"] ?? $this->getContext($context, "countMovimiento")) + 1);
                    // line 123
                    echo "                                ";
                }
                // line 124
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                            ";
            if ((($context["countMovimiento"] ?? $this->getContext($context, "countMovimiento")) > 0)) {
                // line 126
                echo "                                ";
                echo twig_escape_filter($this->env, ($context["countMovimiento"] ?? $this->getContext($context, "countMovimiento")), "html", null, true);
                echo "
                            ";
            }
            // line 128
            echo "                        </span>
                    ";
        }
        // line 130
        echo "                </a>
                <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_caratula", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => 1]), "html", null, true);
        echo "\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">CARATULAS
                    ";
        // line 134
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", [])) > 0)) {
            // line 135
            echo "                        <span class=\"badge badge-danger badge-pill\">
                            ";
            // line 136
            $context["countCaratula"] = 0;
            // line 137
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "caratulas", []), "getValues", []));
            foreach ($context['_seq'] as $context["_key"] => $context["caratula"]) {
                // line 138
                echo "                                ";
                if (($this->getAttribute($context["caratula"], "fechaBaja", []) == null)) {
                    // line 139
                    echo "                                    ";
                    $context["countCaratula"] = (($context["countCaratula"] ?? $this->getContext($context, "countCaratula")) + 1);
                    // line 140
                    echo "                                ";
                }
                // line 141
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caratula'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                            ";
            if ((($context["countCaratula"] ?? $this->getContext($context, "countCaratula")) > 0)) {
                // line 143
                echo "                                ";
                echo twig_escape_filter($this->env, ($context["countCaratula"] ?? $this->getContext($context, "countCaratula")), "html", null, true);
                echo "
                            ";
            }
            // line 145
            echo "                        </span>
                    ";
        }
        // line 147
        echo "                </a>
                ";
        // line 148
        if ((twig_length_filter($this->env, ($context["expedientes_asociados"] ?? $this->getContext($context, "expedientes_asociados"))) == 0)) {
            // line 149
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_asociado", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", []), "currentPage" => 1]), "html", null, true);
            echo "\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">EXPEDIENTES ASOCIADOS
                        ";
            // line 152
            if ((twig_length_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "expedientesAsociados", [])) > 0)) {
                // line 153
                echo "                            <span class=\"badge badge-danger badge-pill\">
                                ";
                // line 154
                $context["countAsociado"] = 0;
                // line 155
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "expedientesAsociados", []), "getValues", []));
                foreach ($context['_seq'] as $context["_key"] => $context["asociado"]) {
                    // line 156
                    echo "                                    ";
                    if (($this->getAttribute($context["asociado"], "fechaBaja", []) == null)) {
                        // line 157
                        echo "                                        ";
                        $context["countAsociado"] = (($context["countAsociado"] ?? $this->getContext($context, "countAsociado")) + 1);
                        // line 158
                        echo "                                    ";
                    }
                    // line 159
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asociado'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                echo "                                ";
                if ((($context["countAsociado"] ?? $this->getContext($context, "countAsociado")) > 0)) {
                    // line 161
                    echo "                                    ";
                    echo twig_escape_filter($this->env, ($context["countAsociado"] ?? $this->getContext($context, "countAsociado")), "html", null, true);
                    echo "
                                ";
                }
                // line 163
                echo "                            </span>
                        ";
            }
            // line 165
            echo "
                    </a>
                ";
        }
        // line 168
        echo "                ";
        if (($this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "resolucion", []) == null)) {
            echo " 
                    ";
            // line 169
            if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN") || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "R0LE_RESPONSABLE"))) {
                // line 170
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_resolucion", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
                echo "\" 
                           class=\"btn btn-primary\" 
                           role=\"button\">NUEVA RESOLUCIÓN</a>
                    ";
            }
            // line 174
            echo "                ";
        } else {
            // line 175
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_resolucion", ["id" => $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "id", [])]), "html", null, true);
            echo "\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">VER RESOLUCIÓN</a>
                ";
        }
        // line 179
        echo "            </div>    

        </div>
        ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 183
            echo "            <hr/>
            <div class=\"alert alert-success\">
                ";
            // line 185
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "
        ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 190
            echo "            <hr/>
            <div class=\"alert alert-danger\">
                ";
            // line 192
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "    </div>
    <script>


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
        return "Expediente/detalleExpediente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 195,  488 => 192,  484 => 190,  480 => 189,  477 => 188,  468 => 185,  464 => 183,  460 => 182,  455 => 179,  447 => 175,  444 => 174,  436 => 170,  434 => 169,  429 => 168,  424 => 165,  420 => 163,  414 => 161,  411 => 160,  405 => 159,  402 => 158,  399 => 157,  396 => 156,  391 => 155,  389 => 154,  386 => 153,  384 => 152,  377 => 149,  375 => 148,  372 => 147,  368 => 145,  362 => 143,  359 => 142,  353 => 141,  350 => 140,  347 => 139,  344 => 138,  339 => 137,  337 => 136,  334 => 135,  332 => 134,  326 => 131,  323 => 130,  319 => 128,  313 => 126,  310 => 125,  304 => 124,  301 => 123,  298 => 122,  295 => 121,  290 => 120,  288 => 119,  285 => 118,  283 => 117,  277 => 114,  264 => 103,  256 => 98,  248 => 93,  240 => 88,  236 => 87,  232 => 86,  223 => 80,  218 => 78,  213 => 76,  206 => 71,  200 => 69,  198 => 68,  190 => 63,  183 => 59,  176 => 55,  165 => 48,  159 => 47,  156 => 46,  153 => 45,  150 => 44,  145 => 43,  143 => 42,  134 => 36,  127 => 32,  120 => 27,  114 => 25,  112 => 24,  108 => 23,  98 => 15,  94 => 14,  88 => 13,  85 => 12,  82 => 11,  79 => 10,  74 => 9,  71 => 8,  68 => 7,  65 => 6,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
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

    {% set accion_habilitada = false %}
    {% if app.user.role == 'ROLE_ADMIN' %}
        {% set accion_habilitada = true %}
    {%else%}
        {% for responsable in expediente.ubicacionActual.responsables.getValues %}
            {% if app.user == responsable.usuario %}
                {% set accion_habilitada = true %}
            {% endif %}
        {%endfor%}

    {% endif %}  

    <div class=\"content\">
        <div class=\"row\">
            <table class=\"table table-bordered\"> 
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\"> </th>
                        <th scope=\"col\"> <i class=\"fas fa-info-circle \"></i> <strong>DETALLE DEL EXPEDIENTE {{expediente}}
                                {% if accion_habilitada == true %}
                                    <a href=\"{{ path('editar_expediente',{'id':expediente.id}) }}\" class=\"right btn btn-warning float-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar Expediente\"><i class=\"fas fa-edit\"></i></a></th>       
                                    {% endif%}
                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <th class=\"w-25 bg-gray\">TEMA</th>
                        <td class=\"bg-white\">{{ expediente.tema}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">CONCEPTO</th>
                        <td class=\"bg-white\">{{ expediente.concepto}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TOTAL DE FOJAS</th>
                        <td class=\"bg-white\">

                            {% set fojas = expediente.fojas %}
                            {% for caratula in expediente.caratulas.getValues %}
                                {% if caratula.fechaBaja == null %}
                                    {% set fojas = fojas+caratula.fojas %}
                                {%endif%}
                            {% endfor %}
                            {{ fojas }}


                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">TIPO</th>
                        <td class=\"bg-white\">{{ expediente.tipo}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">INICIADOR DEPENDENCIA</th>
                        <td class=\"bg-white\">{{ expediente.iniciadorDependencia}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE INICIO</th>
                        <td class=\"bg-white\">{{ expediente.fechaInicio|date('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">FECHA DE FIN</th>
                        <td class=\"bg-white\">
                            {% if expediente.fechaFin != null %}
                                {{ expediente.fechaFin|date('d-m-Y')}}
                            {% endif %}
                        </td>
                    </tr>
                    <tr>
                        <th class=\"w-25 bg-gray\">ULTIMO PASE</th>
                        <td  class=\"bg-white\">
                            {{ expediente.ultimaUbicacion}}

                            - {{ expediente.ultimaUbicacion.dependencia }}

                            , en fecha <strong>{{ ultima_fecha }}</strong>
                        </td>
                    </tr>  
                    <tr>
                        <th class=\"w-25 bg-gray\">UBICACION ACTUAL</th>
                        <td  class=\"bg-white\">
                            {{ expediente.ubicacionActual}}                          
                            - {{ expediente.ubicacionActual.dependencia }}
                            , desde el <strong>{{ actual_fecha }}</strong>
                        </td>
                    </tr>   


                    {% if expediente.estado == 'ASOCIADO' %}                        
                        <tr>
                            <th class=\"w-25 bg-gray\">ASOCIADO A EXPEDIENTE</th>
                            <td  class=\"bg-white\">

                                {{ expediente_padre }}
                                <br/>
                            <td/>
                        </tr>              
                    {% endif %}

                </tbody>
                <tfoot>
            </table>  


        </div>

        <div class=\"row\">
            <div class=\"btn-group float-left\">
                <a class=\"btn btn-primary\" href=\"#\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                <a href=\"{{ path('listado_movimiento',{'id':expediente.id,'currentPage':1}) }}\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">MOVIMIENTOS
                    {% if expediente.movimientos.getValues|length >0 %}
                        <span class=\"badge badge-danger badge-pill\">
                            {% set countMovimiento=0 %}
                            {% for movimiento in expediente.movimientos.getValues %}
                                {% if movimiento.fechaBaja == null %}
                                    {% set countMovimiento=countMovimiento+1 %}
                                {%endif%}
                            {% endfor %}
                            {% if countMovimiento >0 %}
                                {{countMovimiento}}
                            {%endif%}
                        </span>
                    {% endif %}
                </a>
                <a href=\"{{ path('listado_caratula',{'id':expediente.id, 'currentPage':1}) }}\" 
                   class=\"btn btn-primary\" 
                   role=\"button\">CARATULAS
                    {% if expediente.caratulas.getValues|length >0 %}
                        <span class=\"badge badge-danger badge-pill\">
                            {% set countCaratula=0 %}
                            {% for caratula in expediente.caratulas.getValues %}
                                {% if caratula.fechaBaja == null %}
                                    {% set countCaratula=countCaratula+1 %}
                                {%endif%}
                            {% endfor %}
                            {% if countCaratula >0 %}
                                {{countCaratula}}
                            {%endif%}
                        </span>
                    {% endif %}
                </a>
                {% if expedientes_asociados|length == 0 %}
                    <a href=\"{{ path('listado_asociado',{'id':expediente.id,'currentPage':1}) }}\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">EXPEDIENTES ASOCIADOS
                        {% if expediente.expedientesAsociados|length >0 %}
                            <span class=\"badge badge-danger badge-pill\">
                                {% set countAsociado=0 %}
                                {% for asociado in expediente.expedientesAsociados.getValues %}
                                    {% if asociado.fechaBaja == null %}
                                        {% set countAsociado=countAsociado+1 %}
                                    {%endif%}
                                {% endfor %}
                                {% if countAsociado >0 %}
                                    {{countAsociado}}
                                {%endif%}
                            </span>
                        {% endif %}

                    </a>
                {% endif %}
                {% if expediente.resolucion == null %} 
                    {% if app.user.role == 'ROLE_ADMIN' or app.user.role == 'R0LE_RESPONSABLE' %}
                        <a href=\"{{ path('nueva_resolucion',{'id':expediente.id}) }}\" 
                           class=\"btn btn-primary\" 
                           role=\"button\">NUEVA RESOLUCIÓN</a>
                    {% endif  %}
                {% else %}
                    <a href=\"{{ path('ver_resolucion',{'id':expediente.id}) }}\" 
                       class=\"btn btn-primary\" 
                       role=\"button\">VER RESOLUCIÓN</a>
                {% endif %}
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
    <script>


        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
    </script>

{% endblock %}", "Expediente/detalleExpediente.html.twig", "/var/www/html/SIE/app/Resources/views/Expediente/detalleExpediente.html.twig");
    }
}
