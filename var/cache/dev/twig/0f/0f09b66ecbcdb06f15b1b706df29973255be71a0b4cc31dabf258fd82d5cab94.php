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

/* AppBundle:Expediente:movimiento.html.twig */
class __TwigTemplate_dbd1e36e108055d41a4b993b492641f5aea9a6aa23ef362324a0bad85e0098a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:movimiento.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Expediente:movimiento.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Expediente:movimiento.html.twig", 1);
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

    </style>
    
    
    <div class=\"col-ls-12\">
            <div class=\"title \">Expediente -> Movimiento</div>
            <hr/>
                ";
        // line 28
        if ((($context["expediente"] ?? $this->getContext($context, "expediente")) != null)) {
            // line 29
            echo "                      <h4 class=\"text-default\">Expediente Número: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["expediente"] ?? $this->getContext($context, "expediente")), "nroExpediente", []), "html", null, true);
            echo "</h4>        
                      <hr/>
                ";
        }
        // line 32
        echo "             
            
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => "", "method" => "POST"]);
        echo "
             <div class=\"col-lg-14\">
                
                <div class=\"col-lg-4\">
                    <label class=\"text-default\">DESTINO(<span class=\"text-danger\">*</span>)</label>                 
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ubicacion", []), 'errors');
        echo "
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ubicacion", []), 'widget');
        echo "
                    </div>  
                </div>
                
                <div id=\"contenido\" hidden></div>
                
                <div id=\"mesaentrada\" class=\"col-xs-14\" hidden>
                    <div class=\"dependencia col-lg-4\">
                        <label class=\"text-default\">DEPENDENCIA(<span class=\"text-danger\">*</span>)</label>                    
                    </div>                 
                </div>

                <div id=\"lugarfisico\" class=\"col-xs-14\" hidden>
                    <div class=\"tipo col-lg-4\">
                        <label class=\"text-default\">TIPO(<span class=\"text-danger\">*</span>)</label>                    
                    </div>                        
                     
                </div>

                <div id=\"persona\" class=\"col-xs-14\" hidden>
                    <div class=\"nombre col-lg-4\">
                        <label class=\"text-default\">NOMBRE(<span class=\"text-danger\">*</span>)</label>                    
                    </div>                   
                </div>
                
              <div class=\"col-lg-12\">
                  <hr/>
                    <label class=\"text-default\">OBSERVACIONES</label>
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observacion", []), 'errors');
        echo "
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observacion", []), 'widget');
        echo "
               </div>   
                       <div class=\"col-lg-12\">
                    <label class=\"text-default\">COMENTARIO</label>
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comentario", []), 'errors');
        echo "
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comentario", []), 'widget');
        echo "
                    <hr/>
               </div>  
               <div class=\"col-lg-3 float left\">
                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Aceptar", []), 'widget');
        echo "
               </div>
            </div>
            ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>          
     <script>
        var \$ubicacion = \$('#movimientoexpediente_ubicacion');     
        var \$form = \$ubicacion.closest('form');

        \$ubicacion.on('change', function () {
            var data = \$ubicacion.serialize();
            var index = \$ubicacion.val();
            \$.ajax({
                url :\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_movimiento");
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
                        
                        var count = \$('.dependencia').find(':input').length;
                        
                        if(count == 0){
                            \$('#contenido').html(\$(html).find('#movimientoexpediente_mesaentrada'));
                            \$('#movimientoexpediente_mesaentrada_dependencia').appendTo(\".dependencia\");
                        }                   
                   }
                   if(index == 2){
                       \$('#mesaentrada').hide();
                       \$('#lugarfisico').hide();
                       \$('#persona').show();
                            
                        if(\$('.nombre > input').size() <= 0){
                        \$('#contenido').html(\$(html).find('#movimientoexpediente_persona'));
                        \$('#movimientoexpediente_persona_nombre').appendTo(\".nombre\");
                        ";
        // line 127
        echo "                         }
                           
                   }     
                   if(index == 3){
                              \$('#mesaentrada').hide();         
                              \$('#persona').hide();
                              \$('#lugarfisico').show();
                             if(\$('.tipo > input').size() <= 0){
                               \$('#contenido').html(\$(html).find('#movimientoexpediente_lugarfisico'));
                               \$('#movimientoexpediente_lugarfisico_tipo').appendTo(\".tipo\");
                              ";
        // line 139
        echo "                            }
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
        return "AppBundle:Expediente:movimiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 139,  219 => 127,  184 => 92,  170 => 81,  164 => 78,  157 => 74,  153 => 73,  146 => 69,  142 => 68,  111 => 40,  107 => 39,  99 => 34,  95 => 32,  88 => 29,  86 => 28,  60 => 4,  51 => 3,  29 => 1,);
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

    </style>
    
    
    <div class=\"col-ls-12\">
            <div class=\"title \">Expediente -> Movimiento</div>
            <hr/>
                {% if expediente != null %}
                      <h4 class=\"text-default\">Expediente Número: {{ expediente.nroExpediente }}</h4>        
                      <hr/>
                {% endif %}
             
            
            {{form_start(form,{'action':'' ,'method':'POST'})}}
             <div class=\"col-lg-14\">
                
                <div class=\"col-lg-4\">
                    <label class=\"text-default\">DESTINO(<span class=\"text-danger\">*</span>)</label>                 
                        {{ form_errors(form.ubicacion) }}
                        {{ form_widget(form.ubicacion) }}
                    </div>  
                </div>
                
                <div id=\"contenido\" hidden></div>
                
                <div id=\"mesaentrada\" class=\"col-xs-14\" hidden>
                    <div class=\"dependencia col-lg-4\">
                        <label class=\"text-default\">DEPENDENCIA(<span class=\"text-danger\">*</span>)</label>                    
                    </div>                 
                </div>

                <div id=\"lugarfisico\" class=\"col-xs-14\" hidden>
                    <div class=\"tipo col-lg-4\">
                        <label class=\"text-default\">TIPO(<span class=\"text-danger\">*</span>)</label>                    
                    </div>                        
                     
                </div>

                <div id=\"persona\" class=\"col-xs-14\" hidden>
                    <div class=\"nombre col-lg-4\">
                        <label class=\"text-default\">NOMBRE(<span class=\"text-danger\">*</span>)</label>                    
                    </div>                   
                </div>
                
              <div class=\"col-lg-12\">
                  <hr/>
                    <label class=\"text-default\">OBSERVACIONES</label>
                    {{ form_errors(form.observacion) }}
                    {{ form_widget(form.observacion) }}
               </div>   
                       <div class=\"col-lg-12\">
                    <label class=\"text-default\">COMENTARIO</label>
                    {{ form_errors(form.comentario) }}
                    {{ form_widget(form.comentario) }}
                    <hr/>
               </div>  
               <div class=\"col-lg-3 float left\">
                    {{ form_widget(form.Aceptar) }}
               </div>
            </div>
            {{form_end(form)}}

    </div>          
     <script>
        var \$ubicacion = \$('#movimientoexpediente_ubicacion');     
        var \$form = \$ubicacion.closest('form');

        \$ubicacion.on('change', function () {
            var data = \$ubicacion.serialize();
            var index = \$ubicacion.val();
            \$.ajax({
                url :\"{{ path('add_movimiento') }}\",
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
                        
                        var count = \$('.dependencia').find(':input').length;
                        
                        if(count == 0){
                            \$('#contenido').html(\$(html).find('#movimientoexpediente_mesaentrada'));
                            \$('#movimientoexpediente_mesaentrada_dependencia').appendTo(\".dependencia\");
                        }                   
                   }
                   if(index == 2){
                       \$('#mesaentrada').hide();
                       \$('#lugarfisico').hide();
                       \$('#persona').show();
                            
                        if(\$('.nombre > input').size() <= 0){
                        \$('#contenido').html(\$(html).find('#movimientoexpediente_persona'));
                        \$('#movimientoexpediente_persona_nombre').appendTo(\".nombre\");
                        {#  \$('#expediente_persona_apellido').appendTo(\".apellido\");
                        \$('#expediente_persona_dni').appendTo(\".dni\");
                        \$('#expediente_persona_cargo').appendTo(\".cargo\");#}
                         }
                           
                   }     
                   if(index == 3){
                              \$('#mesaentrada').hide();         
                              \$('#persona').hide();
                              \$('#lugarfisico').show();
                             if(\$('.tipo > input').size() <= 0){
                               \$('#contenido').html(\$(html).find('#movimientoexpediente_lugarfisico'));
                               \$('#movimientoexpediente_lugarfisico_tipo').appendTo(\".tipo\");
                              {# \$('#expediente_lugarfisico_descripcion').appendTo(\".descripcion\");
                               \$('#expediente_lugarfisico_acceso').appendTo(\".acceso\");#}
                            }
                   }
                }
            });
        });
    </script>
{% endblock %}", "AppBundle:Expediente:movimiento.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/Expediente/movimiento.html.twig");
    }
}
