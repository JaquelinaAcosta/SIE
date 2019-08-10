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
    <div class=\"content\">
        <div class=\"row form col-lg-12\">
            <div class=\"filtro\">
                <div class=\"header\"><h4><i class=\"fas fa-search\"></i> Búsqueda de Expediente</h4></div>
                <hr/>
                <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'errors');
        echo "
                    <div class=\"row\">
                        <div class=\"threecol col-lg-4\">
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "nroExpediente", []), 'label', ["label" => "EXPEDIENTE"]);
        echo "
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "nroExpediente", []), 'widget');
        echo "
                            <div class=\"help-block with-errors\">
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "nroExpediente", []), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"threecol col-lg-5\">
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'label', ["label" => "TEMA"]);
        echo "
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'widget');
        echo "
                            <div class=\"help-block with-errors\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'errors');
        echo "
                            </div>
                        </div>    
                        <div class=\"threecol col-lg-3\">
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'label', ["label" => "TIPO"]);
        echo "
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'widget');
        echo "
                            <div class=\"help-block with-errors\">
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'errors');
        echo "
                            </div>
                        </div>   
                        <div class=\"threecol col-lg-3\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'label', ["label" => "FECHA DESDE"]);
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'row', ["id" => "date1"]);
        echo " 
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'widget');
        echo "
                            <div class=\"help-block with-errors\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'errors');
        echo "
                            </div>
                        </div>     

                        <div class=\"col-lg-12\">
                            <div class=\"col-lg-6\">
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "filter", []), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-6\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "reset", []), 'row');
        echo "
                            </div>
                        </div>
                        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_end');
        echo "
                </form>
            </div>
        </div>
    </div>

    <hr/>

    <table class=\"table table-sm table-striped\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">NUMERO</th>
                <th scope=\"col\">TEMA</th>
                <th scope=\"col\">UBICACION ACTUAL</th>
                <th scope=\"col\">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["expediente"]));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
            // line 72
            echo "                <tr>
                    <td class=\"text-default\">
                        ";
            // line 74
            if (($this->getAttribute($context["expediente"], "estado", []) == "NUEVO")) {
                // line 75
                echo "                            <span style=\"color:red;\">Nuevo</span> <i class=\"fas fa-bell\" style=\"color:red;\"></i> - 
                        ";
            }
            // line 77
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "nroExpediente", []));
            echo "
                    </td>            
                    <td class=\"text-default\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "tema", []));
            echo "</td>         
                    <td class=\"text-default\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "ubicacionActual", []));
            echo "</td>
                    <td><a class=\"btn btn-info\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                        <a class=\"btn btn-warning\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
        </tbody>
    </table>

</div>

<script>

    \$('#expediente_filter_tema').autocompleter({
                    url_list: \"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
                    url_get: \"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_get");
        echo "\"
    });
    ";
        // line 102
        echo "
\$(function () {
    \$('[data-toggle=\"tooltip\"]').tooltip()
})
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 113
        echo "    <style>
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;           
        }
        .expediente{
            margin-right: 12px;
            padding:15px;
        }
        .expediente p{
            margin-top:10px;
        }
        .titulo{
            height: 30px;
            padding:7px;
            background-color:black;
            color: #fff;
        }
        .panel{
            font-size: 15px; 
            margin-bottom: 20px;
            margin-right: 20px;
        }
        .form-exp{
            font-size:15px;
            padding:10px;
        }
        .title{
            font-size:16px;
        }

        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

    </style>
<<<<<<< HEAD

    <script>


=======
    <div class=\"content\">
    <div class=\"row form col-lg-10\" style=\"background:none;margin:0;\">
            <div class=\"filtro\">
                <div class=\"header\"><h4>Búsqueda de Expediente</h4></div>
                <hr/>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"threecol col-lg-4\">
                        ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "nroExpediente", []), 'label', ["label" => "EXPEDIENTE"]);
        echo "
                        ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "nroExpediente", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "nroExpediente", []), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"threecol col-lg-5\">
                        ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'label', ["label" => "TEMA"]);
        echo "
                        ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tema", []), 'errors');
        echo "
                        </div>
                    </div>    
                     <div class=\"threecol col-lg-3\">
                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'label', ["label" => "TIPO"]);
        echo "
                        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "tipo", []), 'errors');
        echo "
                        </div>
                    </div>   
                         <div class=\"threecol col-lg-3\">
                        ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'label', ["label" => "FECHA DESDE"]);
        echo "
                         ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'row', ["id" => "date1"]);
        echo " 
                        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'widget');
        echo "
                        <div class=\"help-block with-errors\">
                            ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "fechaInicio", []), 'errors');
        echo "
                        </div>
                    </div>     
                    
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-6\">
                        ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "filter", []), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6\">
                        ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), "reset", []), 'row');
        echo "
                    </div>
                </div>
                ";
        // line 207
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formExpedienteFilter"] ?? $this->getContext($context, "formExpedienteFilter")), 'form_end');
        echo "
            </form>
        </div>
        </div>
    </div>

    <hr/>
    
    <table class=\"table table-sm\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">NUMERO</th>
                <th scope=\"col\">TEMA</th>
                <th scope=\"col\">UBICACION ACTUAL</th>
                <th scope=\"col\">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["expediente"]));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
            // line 227
            echo "                <tr>
                    <td class=\"text-default\">";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "nroExpediente", []));
            echo "</td>            
                    <td class=\"text-default\">";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "tema", []));
            echo "</td>         
                    <td class=\"text-default\">";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($context["expediente"], "ubicacionActual", []));
            echo "</td>
                    <td><a class=\"btn btn-info\" href=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                        <a class=\"btn btn-warning\" href=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_expediente", ["id" => $this->getAttribute($context["expediente"], "id", [])]), "html", null, true);
            echo "\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"><i class=\"fas fa-trash-alt\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "
        </tbody>
    </table>
    </div>
    <script>
        
      
         \$('#expediente_filter_tema').autocompleter({
                url_list: \"";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_search");
        echo "\",
                url_get: \"";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tema_get");
        echo "\"
            });
        ";
        // line 251
        echo "        
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        })
>>>>>>> ab2842b5589d6a0803da88c3a55e1de94d1535d3
    </script>
    <hr/>
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
        return array (  492 => 251,  487 => 245,  483 => 244,  473 => 236,  464 => 233,  460 => 232,  456 => 231,  452 => 230,  448 => 229,  444 => 228,  441 => 227,  437 => 226,  415 => 207,  409 => 204,  403 => 201,  394 => 195,  389 => 193,  385 => 192,  381 => 191,  374 => 187,  369 => 185,  365 => 184,  358 => 180,  353 => 178,  349 => 177,  342 => 173,  337 => 171,  333 => 170,  327 => 167,  271 => 113,  262 => 112,  245 => 102,  240 => 96,  236 => 95,  225 => 86,  216 => 83,  212 => 82,  208 => 81,  204 => 80,  200 => 79,  194 => 77,  190 => 75,  188 => 74,  184 => 72,  180 => 71,  158 => 52,  152 => 49,  146 => 46,  137 => 40,  132 => 38,  128 => 37,  124 => 36,  117 => 32,  112 => 30,  108 => 29,  101 => 25,  96 => 23,  92 => 22,  85 => 18,  80 => 16,  76 => 15,  70 => 12,  61 => 5,  52 => 4,  30 => 1,);
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

    <div class=\"content\">
        <div class=\"row form col-lg-12\">
            <div class=\"filtro\">
                <div class=\"header\"><h4><i class=\"fas fa-search\"></i> Búsqueda de Expediente</h4></div>
                <hr/>
                <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                    {{ form_errors(formExpedienteFilter) }}
                    <div class=\"row\">
                        <div class=\"threecol col-lg-4\">
                            {{ form_label(formExpedienteFilter.nroExpediente, 'EXPEDIENTE') }}
                            {{ form_widget(formExpedienteFilter.nroExpediente) }}
                            <div class=\"help-block with-errors\">
                                {{ form_errors(formExpedienteFilter.nroExpediente) }}
                            </div>
                        </div>
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
                            {{ form_label(formExpedienteFilter.fechaInicio, 'FECHA DESDE') }}
                            {{ form_row(formExpedienteFilter.fechaInicio, { 'id': 'date1' })}} 
                            {{ form_widget(formExpedienteFilter.fechaInicio) }}
                            <div class=\"help-block with-errors\">
                                {{ form_errors(formExpedienteFilter.fechaInicio) }}
                            </div>
                        </div>     

                        <div class=\"col-lg-12\">
                            <div class=\"col-lg-6\">
                                {{ form_row(formExpedienteFilter.filter) }}
                            </div>
                            <div class=\"col-lg-6\">
                                {{ form_row(formExpedienteFilter.reset) }}
                            </div>
                        </div>
                        {{ form_end(formExpedienteFilter) }}
                </form>
            </div>
        </div>
    </div>

    <hr/>

    <table class=\"table table-sm table-striped\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">NUMERO</th>
                <th scope=\"col\">TEMA</th>
                <th scope=\"col\">UBICACION ACTUAL</th>
                <th scope=\"col\">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

            {% for expediente in expediente|reverse %}
                <tr>
                    <td class=\"text-default\">
                        {% if expediente.estado == 'NUEVO' %}
                            <span style=\"color:red;\">Nuevo</span> <i class=\"fas fa-bell\" style=\"color:red;\"></i> - 
                        {% endif %}
                        {{expediente.nroExpediente|e }}
                    </td>            
                    <td class=\"text-default\">{{expediente.tema|e }}</td>         
                    <td class=\"text-default\">{{expediente.ubicacionActual|e }}</td>
                    <td><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                        <a class=\"btn btn-warning\" href=\"{{ path(\"editar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"><i class=\"fas fa-trash-alt\"></i></a></td>
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


{% block content %}
    <style>
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;           
        }
        .expediente{
            margin-right: 12px;
            padding:15px;
        }
        .expediente p{
            margin-top:10px;
        }
        .titulo{
            height: 30px;
            padding:7px;
            background-color:black;
            color: #fff;
        }
        .panel{
            font-size: 15px; 
            margin-bottom: 20px;
            margin-right: 20px;
        }
        .form-exp{
            font-size:15px;
            padding:10px;
        }
        .title{
            font-size:16px;
        }

        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

    </style>
<<<<<<< HEAD

    <script>


=======
    <div class=\"content\">
    <div class=\"row form col-lg-10\" style=\"background:none;margin:0;\">
            <div class=\"filtro\">
                <div class=\"header\"><h4>Búsqueda de Expediente</h4></div>
                <hr/>
            <form method=\"post\" novalidate=\"true\" id=\"form_buscar\">
                {{ form_errors(formExpedienteFilter) }}
                <div class=\"row\">
                    <div class=\"threecol col-lg-4\">
                        {{ form_label(formExpedienteFilter.nroExpediente, 'EXPEDIENTE') }}
                        {{ form_widget(formExpedienteFilter.nroExpediente) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formExpedienteFilter.nroExpediente) }}
                        </div>
                    </div>
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
                        {{ form_label(formExpedienteFilter.fechaInicio, 'FECHA DESDE') }}
                         {{ form_row(formExpedienteFilter.fechaInicio, { 'id': 'date1' })}} 
                        {{ form_widget(formExpedienteFilter.fechaInicio) }}
                        <div class=\"help-block with-errors\">
                            {{ form_errors(formExpedienteFilter.fechaInicio) }}
                        </div>
                    </div>     
                    
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-6\">
                        {{ form_row(formExpedienteFilter.filter) }}
                    </div>
                    <div class=\"col-lg-6\">
                        {{ form_row(formExpedienteFilter.reset) }}
                    </div>
                </div>
                {{ form_end(formExpedienteFilter) }}
            </form>
        </div>
        </div>
    </div>

    <hr/>
    
    <table class=\"table table-sm\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">NUMERO</th>
                <th scope=\"col\">TEMA</th>
                <th scope=\"col\">UBICACION ACTUAL</th>
                <th scope=\"col\">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

            {% for expediente in expediente|reverse %}
                <tr>
                    <td class=\"text-default\">{{expediente.nroExpediente|e }}</td>            
                    <td class=\"text-default\">{{expediente.tema|e }}</td>         
                    <td class=\"text-default\">{{expediente.ubicacionActual|e }}</td>
                    <td><a class=\"btn btn-info\" href=\"{{ path(\"ver_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver Detalle\"><i class=\"fas fa-search\"></i></a>
                        <a class=\"btn btn-warning\" href=\"{{ path(\"editar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"{{ path(\"eliminar_expediente\", {'id':expediente.id}) }}\"  role=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\"><i class=\"fas fa-trash-alt\"></i></a></td>
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
>>>>>>> ab2842b5589d6a0803da88c3a55e1de94d1535d3
    </script>
    <hr/>
{% endblock %}", "AppBundle:Expediente:listadoExpediente.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/listadoExpediente.html.twig");
    }
}
