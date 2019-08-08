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
      <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\"> 
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pugxautocompleter/js/autocompleter-jqueryui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>  
        <style>
            *{
               font-family: 'Noto Sans', sans-serif;
            }
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
            .dropdown a{
                font-size:15px;
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
                    dateFormat: 'dd/mm/yy'
                });
            });
        </script>
    </head>
    <body>       
        ";
        // line 69
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 70
            echo "            <header>  
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
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Sistema de Pases de Expediente</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav\">                        
                                ";
            // line 87
            $this->displayBlock('menu', $context, $blocks);
            // line 90
            echo "                            </ul>
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
            // line 100
            echo "
                                <li>

                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 106
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
                echo " <strong>Bienvenido/a</strong>, ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "nombre", []), "html", null, true);
                echo " ";
            } else {
                echo " Iniciar Sesion ";
            }
            echo " <span class=\"glyphicon glyphicon-cog\"></span><span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">

                                        ";
            // line 109
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == null)) {
                // line 110
                echo "
                                            <li><a href=\"";
                // line 111
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loginUsuario");
                echo "\">Entrar</a></li>

                                        ";
            } else {
                // line 114
                echo "                                            <li><a href=\"#\">Opciones</a></li>
                                            <li><a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_usuario", ["id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]), "html", null, true);
                echo "\">Configuración de Cuenta</a></li>
                                            <li><a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_persona", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "id", [])]), "html", null, true);
                echo "\">Configuración Personal</a></li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"";
                // line 118
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
                echo "\">Salir</a></li>
                                            ";
            }
            // line 120
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
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">EXPEDIENTE <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 142
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => 1]);
            echo "\">LISTADO</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
            // line 144
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente");
            echo "\">NUEVO EXPEDIENTE</a></li>
                                            ";
            // line 149
            echo "                                    </ul>
                                </li>

                                ";
            // line 152
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 153
                echo "                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">DEPENDENCIA <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
                // line 156
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => 1]);
                echo "\">LISTADO</a></li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"";
                // line 158
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_dependencia");
                echo "\">NUEVA DEPENDENCIA</a></li>
                                                ";
                // line 163
                echo "                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">PERSONA <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
                // line 168
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => 1]);
                echo "\">LISTADO</a></li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"";
                // line 170
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_persona");
                echo "\">NUEVA PERSONA</a></li>
                                                ";
                // line 175
                echo "                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">USUARIOS <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
                // line 180
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => 1]);
                echo "\">LISTADO</a></li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"";
                // line 182
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_usuario");
                echo "\">NUEVO USUARIO</a></li>
                                                ";
                // line 187
                echo "                                        </ul>
                                    </li>
                                ";
            }
            // line 190
            echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">LUGAR FSICO <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 194
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => 1]);
            echo "\">LISTADO</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"";
            // line 196
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_lugarfisico");
            echo "\">NUEVO LUGAR FISICO</a></li>
                                            ";
            // line 201
            echo "                                    </ul>
                                </li>

                            </ul>        
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

            </header>
        ";
        }
        // line 211
        echo "        <section id=\"content\">             
            ";
        // line 212
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

    // line 87
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

    // line 212
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
        return array (  374 => 212,  354 => 87,  336 => 7,  318 => 212,  315 => 211,  303 => 201,  299 => 196,  294 => 194,  288 => 190,  283 => 187,  279 => 182,  274 => 180,  267 => 175,  263 => 170,  258 => 168,  251 => 163,  247 => 158,  242 => 156,  237 => 153,  235 => 152,  230 => 149,  226 => 144,  221 => 142,  197 => 120,  192 => 118,  187 => 116,  183 => 115,  180 => 114,  174 => 111,  171 => 110,  169 => 109,  157 => 106,  149 => 100,  144 => 90,  142 => 87,  133 => 81,  120 => 70,  118 => 69,  65 => 19,  61 => 18,  47 => 7,  39 => 1,);
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
      <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\"> 
        <script src=\"{{ asset('bundles/pugxautocompleter/js/autocompleter-jqueryui.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>  
        <style>
            *{
               font-family: 'Noto Sans', sans-serif;
            }
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
            .dropdown a{
                font-size:15px;
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
                    dateFormat: 'dd/mm/yy'
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
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{% if app.user != null %} <strong>Bienvenido/a</strong>, {{ app.user.persona.nombre }} {% else %} Iniciar Sesion {% endif %} <span class=\"glyphicon glyphicon-cog\"></span><span class=\"caret\"></span></a>
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
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">EXPEDIENTE <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path(\"listado_expediente\",{'currentPage':1}) }}\">LISTADO</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path(\"nuevo_expediente\") }}\">NUEVO EXPEDIENTE</a></li>
                                            {#  <li role=\"separator\" class=\"divider\"></li>
                                              <li><a href=\"#\">Separated link</a></li>
                                              <li role=\"separator\" class=\"divider\"></li>
                                              <li><a href=\"#\">One more separated link</a></li>#}
                                    </ul>
                                </li>

                                {% if app.user.role == 'ROLE_ADMIN' %}
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">DEPENDENCIA <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"{{ path(\"listado_dependencia\",{'currentPage':1}) }}\">LISTADO</a></li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"{{ path(\"nueva_dependencia\") }}\">NUEVA DEPENDENCIA</a></li>
                                                {#  <li role=\"separator\" class=\"divider\"></li>
                                                  <li><a href=\"#\">Separated link</a></li>
                                                  <li role=\"separator\" class=\"divider\"></li>
                                                  <li><a href=\"#\">One more separated link</a></li>#}
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">PERSONA <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"{{ path(\"listado_persona\",{'currentPage':1}) }}\">LISTADO</a></li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"{{ path(\"nueva_persona\") }}\">NUEVA PERSONA</a></li>
                                                {#  <li role=\"separator\" class=\"divider\"></li>
                                                  <li><a href=\"#\">Separated link</a></li>
                                                  <li role=\"separator\" class=\"divider\"></li>
                                                  <li><a href=\"#\">One more separated link</a></li>#}
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">USUARIOS <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"{{ path(\"listado_usuario\",{'currentPage':1}) }}\">LISTADO</a></li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"{{ path(\"nuevo_usuario\") }}\">NUEVO USUARIO</a></li>
                                                {#  <li role=\"separator\" class=\"divider\"></li>
                                                  <li><a href=\"#\">Separated link</a></li>
                                                  <li role=\"separator\" class=\"divider\"></li>
                                                  <li><a href=\"#\">One more separated link</a></li>#}
                                        </ul>
                                    </li>
                                {% endif %}

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">LUGAR FSICO <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path(\"listado_lugarfisico\",{'currentPage':1}) }}\">LISTADO</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"{{ path(\"nuevo_lugarfisico\") }}\">NUEVO LUGAR FISICO</a></li>
                                            {#  <li role=\"separator\" class=\"divider\"></li>
                                              <li><a href=\"#\">Separated link</a></li>
                                              <li role=\"separator\" class=\"divider\"></li>
                                              <li><a href=\"#\">One more separated link</a></li>#}
                                    </ul>
                                </li>

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
