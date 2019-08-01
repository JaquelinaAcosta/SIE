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

/* AppBundle::layout.html.twig */
class __TwigTemplate_e6d7046595b7d5d4de0de63a50a0b945a6248b4fe6e2f768f9eec36bb348e778 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"es\">
    <head>

        <meta charset=\"utf-8\" />
        <title>            
            ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "           
        </title>
        <script src=\"https://code.jquery.com/jquery-1.12.4.js\"
                integrity=\"sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=\"
        crossorigin=\"anonymous\"></script>
        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">\t
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <script src=\"//code.jquery.com/jquery-3.3.1.min.js\"></script>
        <script src=\"//code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pugxautocompleter/js/autocompleter-jqueryui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>  
        <style>
            .active{
                color:grey;
                margin-left: 10px;
                font-size: 20px;
            }
            .footer {

                position: fixed;

                bottom: 0;

                width: 100%;

                height: 55px;

                background-color: #3e3e3e;

            }
            .container{
                background-color: #3e3e3e;
                padding:15px;
            }
            .footer p{
                text-align: center;
                color:#fff;
            }
        </style>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script>
            \$(function () {
                \$(\".datepicker\").datepicker({
                    inline: true,
                    showOtherMonths: true,
                    dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                });
            });
        </script>
    </head>
    <body>       
          ";
        // line 61
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 62
            echo "        <header>  
            <nav class=\"navbar navbar-sticky-top navbar-default \">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Sistema de Pases de Expediente</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">                        
                            ";
            // line 79
            $this->displayBlock('menu', $context, $blocks);
            // line 82
            echo "                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">

                            ";
            // line 92
            echo "
                            <li>

                            </li>

                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 98
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "userName", []), "html", null, true);
                echo " ";
            } else {
                echo " Iniciar Sesion ";
            }
            echo " <span class=\"glyphicon glyphicon-cog\"></span><span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    
                                    ";
            // line 101
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == null)) {
                // line 102
                echo "                                          
                                        <li><a href=\"";
                // line 103
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loginUsuario");
                echo "\">Entrar</a></li>

                                    ";
            } else {
                // line 106
                echo "                                        <li><a href=\"#\">Opciones</a></li>
                                        <li><a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_usuario", ["id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]), "html", null, true);
                echo "\">Configuración de Cuenta</a></li>
                                        <li><a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_persona", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "id", [])]), "html", null, true);
                echo "\">Configuración Personal</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
                // line 110
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
                echo "\">Salir</a></li>
                                        ";
            }
            // line 112
            echo "                                    
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                           
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Expedientes <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente");
            echo "\">Listado</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
            // line 136
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente");
            echo "\">Nuevo Expediente</a></li>
                                  ";
            // line 141
            echo "                                </ul>
                            </li>
                            
                           
                            
                            ";
            // line 146
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 147
                echo "                                <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dependencia <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                // line 150
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia");
                echo "\">Listado</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
                // line 152
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_dependencia");
                echo "\">Nueva Dependencia</a></li>
                                  ";
                // line 157
                echo "                                </ul>
                            </li>
                             <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Persona(en proceso,falta listado con paginacion) <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                // line 162
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona");
                echo "\">Listado</a></li>
                                     <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
                // line 164
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_persona");
                echo "\">Nueva Persona</a></li>
                                  ";
                // line 169
                echo "                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Usuarios <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                // line 174
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario");
                echo "\">Listado</a></li>
                                     <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
                // line 176
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_usuario");
                echo "\">Nueva Usuario</a></li>
                                  ";
                // line 181
                echo "                                </ul>
                            </li>
                            ";
            }
            // line 184
            echo "                            
                            
                            
                        </ul>        
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </header>
";
        }
        // line 194
        echo "        <section id=\"content\">             
            ";
        // line 195
        $this->displayBlock('content', $context, $blocks);
        echo "   
        </section>


    </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SIE";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        echo "  

                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 195
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "Content default";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 195,  333 => 79,  315 => 7,  297 => 195,  294 => 194,  282 => 184,  277 => 181,  273 => 176,  268 => 174,  261 => 169,  257 => 164,  252 => 162,  245 => 157,  241 => 152,  236 => 150,  231 => 147,  229 => 146,  222 => 141,  218 => 136,  213 => 134,  189 => 112,  184 => 110,  179 => 108,  175 => 107,  172 => 106,  166 => 103,  163 => 102,  161 => 101,  149 => 98,  141 => 92,  136 => 82,  134 => 79,  125 => 73,  112 => 62,  110 => 61,  64 => 18,  60 => 17,  47 => 7,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"es\">
    <head>

        <meta charset=\"utf-8\" />
        <title>            
            {% block title %}SIE{% endblock %}           
        </title>
        <script src=\"https://code.jquery.com/jquery-1.12.4.js\"
                integrity=\"sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=\"
        crossorigin=\"anonymous\"></script>
        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">\t
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <script src=\"//code.jquery.com/jquery-3.3.1.min.js\"></script>
        <script src=\"//code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
        <script src=\"{{ asset('bundles/pugxautocompleter/js/autocompleter-jqueryui.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>  
        <style>
            .active{
                color:grey;
                margin-left: 10px;
                font-size: 20px;
            }
            .footer {

                position: fixed;

                bottom: 0;

                width: 100%;

                height: 55px;

                background-color: #3e3e3e;

            }
            .container{
                background-color: #3e3e3e;
                padding:15px;
            }
            .footer p{
                text-align: center;
                color:#fff;
            }
        </style>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script>
            \$(function () {
                \$(\".datepicker\").datepicker({
                    inline: true,
                    showOtherMonths: true,
                    dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                });
            });
        </script>
    </head>
    <body>       
          {% if app.user != null %}
        <header>  
            <nav class=\"navbar navbar-sticky-top navbar-default \">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"{{ path(\"homepage\") }}\">Sistema de Pases de Expediente</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">                        
                            {% block menu %}  

                            {% endblock %}
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">

                            {#<li><a href=\"#\">
                                     {% if app.user != null %}
                                    Bienvenido, {{}}

                                {%endif%}
                                </a>
                            </li>#}

                            <li>

                            </li>

                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{% if app.user != null %} {{ app.user.userName }} {% else %} Iniciar Sesion {% endif %} <span class=\"glyphicon glyphicon-cog\"></span><span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    
                                    {% if app.user == null %}
                                          
                                        <li><a href=\"{{ path(\"loginUsuario\") }}\">Entrar</a></li>

                                    {%else%}
                                        <li><a href=\"#\">Opciones</a></li>
                                        <li><a href=\"{{ path(\"editar_usuario\", {'id':app.user.id}) }}\">Configuración de Cuenta</a></li>
                                        <li><a href=\"{{ path(\"editar_persona\", {'id':app.user.persona.id}) }}\">Configuración Personal</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path(\"logout\") }}\">Salir</a></li>
                                        {%endif%}
                                    
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                           
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Expedientes <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path(\"listado_expediente\") }}\">Listado</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"{{ path(\"nuevo_expediente\") }}\">Nuevo Expediente</a></li>
                                  {#  <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">One more separated link</a></li>#}
                                </ul>
                            </li>
                            
                           
                            
                            {% if app.user.role == 'ROLE_ADMIN' %}
                                <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dependencia <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path(\"listado_dependencia\") }}\">Listado</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"{{ path(\"nueva_dependencia\") }}\">Nueva Dependencia</a></li>
                                  {#  <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">One more separated link</a></li>#}
                                </ul>
                            </li>
                             <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Persona(en proceso,falta listado con paginacion) <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path(\"listado_persona\") }}\">Listado</a></li>
                                     <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"{{ path(\"nueva_persona\") }}\">Nueva Persona</a></li>
                                  {#  <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">One more separated link</a></li>#}
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Usuarios <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path(\"listado_usuario\") }}\">Listado</a></li>
                                     <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"{{ path(\"nuevo_usuario\") }}\">Nueva Usuario</a></li>
                                  {#  <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">One more separated link</a></li>#}
                                </ul>
                            </li>
                            {% endif %}
                            
                            
                            
                        </ul>        
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </header>
{% endif %}
        <section id=\"content\">             
            {% block content %}Content default{% endblock %}   
        </section>


    </body>

</html>
", "AppBundle::layout.html.twig", "/var/www/html/SIE/src/AppBundle/Resources/views/layout.html.twig");
    }
}
