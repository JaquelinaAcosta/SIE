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

/* AppBundle:Expediente:edit.html.twig */
class __TwigTemplate_6dfe2c07090f6dfb7d728f9bbd8ff70d35de73dc2f63cd95b85efbe890df693c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:edit.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:edit.html.twig", 1);
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

        echo "  
    <style>
        input[type=text]{
            margin-bottom: 10px;
            padding:10px;            
        }
        input[type=submit]{
            margin-bottom: 10px;           
        }
        .panel{
            font-size: 11px;        
        }
        .form-exp{
            font-size:15px;
            padding:10px;
        }
        .title{
            font-size:16px;
        }
    </style>

    <div class=\"col-ls-12 col-md-offset\" style=\"padding-left:  30px; padding-right:  30px\">
        
        <div class=\"panel panel-primary \">
            <div class=\"title panel-heading\">Editar Expediente</div>
            <div class=\"panel panel-body\">
                <br/>
                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "        
                <div class=\"col-lg-14\">
                    <div class=\"col-lg-5\">
                        <label class=\"exp text-default\">NRO. DE EXPEDIENTE</label>
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nroExpediente", []), 'errors');
        echo "
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nroExpediente", []), 'widget');
        echo "
                    </div>
                     <div class=\"col-lg-3 \">
                    <label class=\"text-default\">TIPO</label>
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'errors');
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'widget');
        echo "
                  </div>
                    <div class=\"col-lg-2 \">
                        <label class=\"text-default\">CODIGO TEMA</label>
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tema", []), 'errors');
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tema", []), 'widget');
        echo "
                    </div>
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FOJAS</label>
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'errors');
        echo "
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fojas", []), 'widget');
        echo "
                    </div>                   
                    <div class=\"col-lg-6\">
                        <label class=\"text-default\">DEPENDENCIA</label>
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "iniciadorDependencia", []), 'errors');
        echo "
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "iniciadorDependencia", []), 'widget');
        echo "
                    </div>                                           
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FECHA DE INICIO</label>
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'row', ["id" => "date1"]);
        echo " 
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'errors');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaInicio", []), 'widget');
        echo "
                    </div>  
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FECHA DE FIN.</label>
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'row', ["id" => "date2"]);
        echo " 
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'errors');
        echo "
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFin", []), 'widget');
        echo "
                    </div>                      
                </div>
                <hr/>
               
                <div class=\"col-lg-12\">
                    <label class=\"text-default\">CONCEPTO</label>
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'errors');
        echo "
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "concepto", []), 'widget');
        echo "
                    <hr/>
                </div>
                <div class=\"col-lg-3 float left\">
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", []), 'widget');
        echo "
                    <a class=\"btn btn-default\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                </div>
                ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>           
    <script>
        var \$ubicacion = \$('#expediente_ubicacionActual');     
        var \$form = \$ubicacion.closest('form');

        \$ubicacion.on('change', function () {
            var data = \$ubicacion.serialize();
            var index = \$ubicacion.val();
            \$.ajax({
                url :\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_evento");
        echo "\",
                type: \"POST\",
                data: data,
                success : function(html) {
                    // la variable html representa toda la página junto con el select de estados.
                    // el cual tomamos y colocamos para reemplazar el select actual.
                   
                   
                   if(index == 0 ){
                        \$('#persona').hide();
                        \$('#mesaentrada').hide();
                        \$('#lugarfisico').hide();
                   }
                   if(index == 1){
                        \$('#persona').hide();
                        \$('#lugarfisico').hide();
                        \$('#mesaentrada').show();
                        
                        
                        if(\$('.codigo > input').size() <=0){
                               \$('#contenido').html(\$(html).find('#expediente_mesaentrada'));
                               \$('#expediente_mesaentrada_codigoExpediente').appendTo(\".codigo\");
                        }
                     
                   }
                   if(index == 2){
                            \$('#mesaentrada').hide();
                            \$('#lugarfisico').hide();
                            \$('#persona').show();
                            
                             if(\$('.nombre > input').size() <= 0){
                               \$('#contenido').html(\$(html).find('#expediente_persona'));
                               \$('#expediente_persona_nombre').appendTo(\".nombre\");
                               \$('#expediente_persona_apellido').appendTo(\".apellido\");
                               \$('#expediente_persona_dni').appendTo(\".dni\");
                               \$('#expediente_persona_cargo').appendTo(\".cargo\");
                            }
                           
                   }     
                   if(index == 3){
                              \$('#mesaentrada').hide();         
                              \$('#persona').hide();
                              \$('#lugarfisico').show();
                             if(\$('.tipo > input').size() <= 0){
                               \$('#contenido').html(\$(html).find('#expediente_lugarfisico'));
                               \$('#expediente_lugarfisico_tipo').appendTo(\".tipo\");
                               \$('#expediente_lugarfisico_descripcion').appendTo(\".descripcion\");
                               \$('#expediente_lugarfisico_acceso').appendTo(\".acceso\");
                            }
                   }
                }
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Expediente:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 94,  200 => 82,  194 => 79,  187 => 75,  183 => 74,  173 => 67,  169 => 66,  165 => 65,  158 => 61,  154 => 60,  150 => 59,  143 => 55,  139 => 54,  132 => 50,  128 => 49,  121 => 45,  117 => 44,  110 => 40,  106 => 39,  99 => 35,  95 => 34,  88 => 30,  51 => 3,  29 => 1,);
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
        }
        .panel{
            font-size: 11px;        
        }
        .form-exp{
            font-size:15px;
            padding:10px;
        }
        .title{
            font-size:16px;
        }
    </style>

    <div class=\"col-ls-12 col-md-offset\" style=\"padding-left:  30px; padding-right:  30px\">
        
        <div class=\"panel panel-primary \">
            <div class=\"title panel-heading\">Editar Expediente</div>
            <div class=\"panel panel-body\">
                <br/>
                {{form_start(form,{'action':'','method':'POST'})}}        
                <div class=\"col-lg-14\">
                    <div class=\"col-lg-5\">
                        <label class=\"exp text-default\">NRO. DE EXPEDIENTE</label>
                        {{ form_errors(form.nroExpediente) }}
                        {{ form_widget(form.nroExpediente) }}
                    </div>
                     <div class=\"col-lg-3 \">
                    <label class=\"text-default\">TIPO</label>
                    {{ form_errors(form.tipo) }}
                    {{ form_widget(form.tipo) }}
                  </div>
                    <div class=\"col-lg-2 \">
                        <label class=\"text-default\">CODIGO TEMA</label>
                        {{ form_errors(form.tema) }}
                        {{ form_widget(form.tema) }}
                    </div>
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FOJAS</label>
                        {{ form_errors(form.fojas) }}
                        {{ form_widget(form.fojas) }}
                    </div>                   
                    <div class=\"col-lg-6\">
                        <label class=\"text-default\">DEPENDENCIA</label>
                        {{ form_errors(form.iniciadorDependencia) }}
                        {{ form_widget(form.iniciadorDependencia) }}
                    </div>                                           
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FECHA DE INICIO</label>
                        {{ form_row(form.fechaInicio, { 'id': 'date1' })}} 
                        {{ form_errors(form.fechaInicio) }}
                        {{ form_widget(form.fechaInicio) }}
                    </div>  
                    <div class=\"col-lg-2\">
                        <label class=\"text-default\">FECHA DE FIN.</label>
                        {{ form_row(form.fechaFin, { 'id': 'date2' })}} 
                        {{ form_errors(form.fechaFin) }}
                        {{ form_widget(form.fechaFin) }}
                    </div>                      
                </div>
                <hr/>
               
                <div class=\"col-lg-12\">
                    <label class=\"text-default\">CONCEPTO</label>
                    {{ form_errors(form.concepto) }}
                    {{ form_widget(form.concepto) }}
                    <hr/>
                </div>
                <div class=\"col-lg-3 float left\">
                    {{ form_widget(form.Guardar) }}
                    <a class=\"btn btn-default\" onclick=\"history.back()\"  role=\"button\">Volver</a>
                </div>
                {{form_end(form)}}
            </div>
        </div>
    </div>           
    <script>
        var \$ubicacion = \$('#expediente_ubicacionActual');     
        var \$form = \$ubicacion.closest('form');

        \$ubicacion.on('change', function () {
            var data = \$ubicacion.serialize();
            var index = \$ubicacion.val();
            \$.ajax({
                url :\"{{ path('add_evento') }}\",
                type: \"POST\",
                data: data,
                success : function(html) {
                    // la variable html representa toda la página junto con el select de estados.
                    // el cual tomamos y colocamos para reemplazar el select actual.
                   
                   
                   if(index == 0 ){
                        \$('#persona').hide();
                        \$('#mesaentrada').hide();
                        \$('#lugarfisico').hide();
                   }
                   if(index == 1){
                        \$('#persona').hide();
                        \$('#lugarfisico').hide();
                        \$('#mesaentrada').show();
                        
                        
                        if(\$('.codigo > input').size() <=0){
                               \$('#contenido').html(\$(html).find('#expediente_mesaentrada'));
                               \$('#expediente_mesaentrada_codigoExpediente').appendTo(\".codigo\");
                        }
                     
                   }
                   if(index == 2){
                            \$('#mesaentrada').hide();
                            \$('#lugarfisico').hide();
                            \$('#persona').show();
                            
                             if(\$('.nombre > input').size() <= 0){
                               \$('#contenido').html(\$(html).find('#expediente_persona'));
                               \$('#expediente_persona_nombre').appendTo(\".nombre\");
                               \$('#expediente_persona_apellido').appendTo(\".apellido\");
                               \$('#expediente_persona_dni').appendTo(\".dni\");
                               \$('#expediente_persona_cargo').appendTo(\".cargo\");
                            }
                           
                   }     
                   if(index == 3){
                              \$('#mesaentrada').hide();         
                              \$('#persona').hide();
                              \$('#lugarfisico').show();
                             if(\$('.tipo > input').size() <= 0){
                               \$('#contenido').html(\$(html).find('#expediente_lugarfisico'));
                               \$('#expediente_lugarfisico_tipo').appendTo(\".tipo\");
                               \$('#expediente_lugarfisico_descripcion').appendTo(\".descripcion\");
                               \$('#expediente_lugarfisico_acceso').appendTo(\".acceso\");
                            }
                   }
                }
            });
        });
    </script>

{% endblock %}", "AppBundle:Expediente:edit.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/edit.html.twig");
    }
}
