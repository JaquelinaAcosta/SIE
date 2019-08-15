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
            'contentmain' => [$this, 'block_contentmain'],
            'login' => [$this, 'block_login'],
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

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">\t   

        <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
        <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
        <script src=\"http://code.jquery.com/ui/1.10.1/jquery-ui.js\"></script>

        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\"> 
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pugxautocompleter/js/autocompleter-jqueryui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>  
        <style>
            *{
                font-family: 'Noto Sans', sans-serif;
                font-size: 13px;
            }
            .sidebar{
                width:125px;
                height:1200px;
                background-color:#e3e3e3;
                /* float:left  Removed*/
                left:0; /* Added */
                position: fixed;
                border: #b3b3b3 .2px;
            }
            .contentmain{
                margin-top:30px;
                margin-left:150px; /* Added */
                margin-right:25px;

            }
            body{
                background-color:#ededed;
                color:#616161;
            }
            .content{
                margin:0 auto;
                width:1000px;
                background-color:#fff;

                padding:30px;
                -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.12);
                -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.12);
                box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.12);
            }
            .filtro{
                background-color: #e8e8e8;
                padding:20px;
            }

            table{
                color:#616161;
            }
            .dropdown-menu {display: block;visibility: hidden;opacity:0;transform: translateY(50px);transition:.5s ease all;}
            .dropdown-menu.show {display: block;visibility: visible;opacity:1;transform: translateY(0px);transition:.5s ease all;}

            .right{
                margin-left: auto;
                margin-right: 0;

            }

            table{
                color:#616161;
            }
            .dropdown-menu {display: block;visibility: hidden;opacity:0;transform: translateY(50px);transition:.5s ease all;}
            .dropdown-menu.show {display: block;visibility: visible;opacity:1;transform: translateY(0px);transition:.5s ease all;}

        </style>
        <script>

            \$.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '< Ant',
                nextText: 'Sig >',
                currentText: 'Hoy',
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };

            \$.datepicker.setDefaults(\$.datepicker.regional[ \"es\" ]);

            \$(function () {
                \$(\".datepicker\").datepicker({
                    inline: true,
                    showOtherMonths: true,
                    dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                    dateFormat: 'dd-mm-yy'
                });
            });
        </script>
    </head>

    <body>       
        ";
        // line 114
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 115
            echo "            <header>  
                <nav class=\"navbar fixed-top navbar-expand-md navbar-dark bg-dark\">
                    ";
            // line 118
            echo "                    <a class=\"navbar-brand abs\" href=\"#\"><strong style=\"font-size:16px;\">
                            ";
            // line 119
            echo "Sistema de Gestión Interna de Expedientes
                        </strong></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsingNavbar\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"navbar-collapse collapse\" id=\"collapsingNavbar\">

                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                                <div class=\"dropdown right\">
                                    <button class=\"btn btn-dark dropdown-toggle right\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                            aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-user\"></i>  ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "userName", []), "html", null, true);
            echo "  
                                        </a>        </button>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                        <a class=\"dropdown-item\" type=\"button\"><i class=\"fab fa-whmcs\"></i>  Configuración</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 135
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" type=\"button\"><i class=\"fas fa-sign-out-alt\"></i>  Cerrar Sesión</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class=\"sidebar\"> 
                    <div class=\"list-group\" style=\"margin-top:15px;\">
                        <a href=\"";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => 1]);
            echo "\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"far fa-file-alt\" style=\"font-size:27px; margin:0 auto;\"></i>
                            <br/>
                            Expedientes
                        </a>
                        ";
            // line 150
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 151
                echo "                            <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => 1]);
                echo "\" class=\"list-group-item list-group-item-action text-center\">
                                <i class=\"fas fa-building\" style=\"font-size:27px; margin:0 auto;\"></i>
                                <br/>
                                Dependencias
                            </a>
                            <a href=\"";
                // line 156
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => 1]);
                echo "\" class=\"list-group-item list-group-item-action text-center\">
                                <i class=\"fas fa-male\" style=\"font-size:27px; margin:0 auto;\"></i>
                                <br/>
                                Personas
                            </a>
                            <a href=\"";
                // line 161
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => 1]);
                echo "\" class=\"list-group-item list-group-item-action text-center\">
                                <i class=\"fas fa-user\" style=\"font-size:27px; margin:0 auto;\"></i>
                                <br/>
                                Usuarios
                            </a>
                        ";
            }
            // line 167
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => 1]);
            echo "\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-archive\" style=\"font-size:27px;\"></i>
                            <br/>
                            Lugares
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-history\" style=\"font-size:27px;\"></i>
                            <br/>
                            Últimos Registros
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-question-circle\" style=\"font-size:27px;\"></i>
                            <br/>
                            Ayuda
                        </a>
                        <a href=\"";
            // line 182
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-sign-out-alt\" style=\"font-size:27px;\"></i>
                            <br/>
                            Salir
                        </a>
                    </div>
                </div>


                <div class=\"contentmain\">

                    ";
            // line 193
            $this->displayBlock('contentmain', $context, $blocks);
            // line 196
            echo "
                </div>
            </header>
        ";
        } else {
            // line 200
            echo "
            <div class=\"login\">

                ";
            // line 203
            $this->displayBlock('login', $context, $blocks);
            // line 206
            echo "
            </div>


        ";
        }
        // line 211
        echo "

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

    // line 193
    public function block_contentmain($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentmain"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentmain"));

        // line 194
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 203
    public function block_login($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        // line 204
        echo "
                ";
        
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
        return array (  359 => 204,  350 => 203,  339 => 194,  330 => 193,  312 => 7,  297 => 211,  290 => 206,  288 => 203,  283 => 200,  277 => 196,  275 => 193,  261 => 182,  242 => 167,  233 => 161,  225 => 156,  216 => 151,  214 => 150,  206 => 145,  193 => 135,  186 => 131,  172 => 119,  169 => 118,  165 => 115,  163 => 114,  67 => 21,  63 => 20,  47 => 7,  39 => 1,);
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

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">\t   

        <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
        <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
        <script src=\"http://code.jquery.com/ui/1.10.1/jquery-ui.js\"></script>

        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\"> 
        <script src=\"{{ asset('bundles/pugxautocompleter/js/autocompleter-jqueryui.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>  
        <style>
            *{
                font-family: 'Noto Sans', sans-serif;
                font-size: 13px;
            }
            .sidebar{
                width:125px;
                height:1200px;
                background-color:#e3e3e3;
                /* float:left  Removed*/
                left:0; /* Added */
                position: fixed;
                border: #b3b3b3 .2px;
            }
            .contentmain{
                margin-top:30px;
                margin-left:150px; /* Added */
                margin-right:25px;

            }
            body{
                background-color:#ededed;
                color:#616161;
            }
            .content{
                margin:0 auto;
                width:1000px;
                background-color:#fff;

                padding:30px;
                -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.12);
                -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.12);
                box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.12);
            }
            .filtro{
                background-color: #e8e8e8;
                padding:20px;
            }

            table{
                color:#616161;
            }
            .dropdown-menu {display: block;visibility: hidden;opacity:0;transform: translateY(50px);transition:.5s ease all;}
            .dropdown-menu.show {display: block;visibility: visible;opacity:1;transform: translateY(0px);transition:.5s ease all;}

            .right{
                margin-left: auto;
                margin-right: 0;

            }

            table{
                color:#616161;
            }
            .dropdown-menu {display: block;visibility: hidden;opacity:0;transform: translateY(50px);transition:.5s ease all;}
            .dropdown-menu.show {display: block;visibility: visible;opacity:1;transform: translateY(0px);transition:.5s ease all;}

        </style>
        <script>

            \$.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '< Ant',
                nextText: 'Sig >',
                currentText: 'Hoy',
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };

            \$.datepicker.setDefaults(\$.datepicker.regional[ \"es\" ]);

            \$(function () {
                \$(\".datepicker\").datepicker({
                    inline: true,
                    showOtherMonths: true,
                    dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                    dateFormat: 'dd-mm-yy'
                });
            });
        </script>
    </head>

    <body>       
        {% if app.user != null %}
            <header>  
                <nav class=\"navbar fixed-top navbar-expand-md navbar-dark bg-dark\">
                    {#                                        <img width=\"35px\" src=\"{{ asset('logo.png') }}\">#}
                    <a class=\"navbar-brand abs\" href=\"#\"><strong style=\"font-size:16px;\">
                            {#<img width=\"30\" src=\"{{ asset('dpv.jpeg') }}\">#}Sistema de Gestión Interna de Expedientes
                        </strong></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsingNavbar\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"navbar-collapse collapse\" id=\"collapsingNavbar\">

                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                                <div class=\"dropdown right\">
                                    <button class=\"btn btn-dark dropdown-toggle right\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                            aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-user\"></i>  {{ app.user.userName }}  
                                        </a>        </button>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                        <a class=\"dropdown-item\" type=\"button\"><i class=\"fab fa-whmcs\"></i>  Configuración</a>
                                        <a class=\"dropdown-item\" href=\"{{ path(\"logout\") }}\" type=\"button\"><i class=\"fas fa-sign-out-alt\"></i>  Cerrar Sesión</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class=\"sidebar\"> 
                    <div class=\"list-group\" style=\"margin-top:15px;\">
                        <a href=\"{{ path('listado_expediente',{'currentPage':1}) }}\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"far fa-file-alt\" style=\"font-size:27px; margin:0 auto;\"></i>
                            <br/>
                            Expedientes
                        </a>
                        {% if app.user.role == 'ROLE_ADMIN' %}
                            <a href=\"{{ path('listado_dependencia',{'currentPage':1}) }}\" class=\"list-group-item list-group-item-action text-center\">
                                <i class=\"fas fa-building\" style=\"font-size:27px; margin:0 auto;\"></i>
                                <br/>
                                Dependencias
                            </a>
                            <a href=\"{{ path('listado_persona',{'currentPage':1}) }}\" class=\"list-group-item list-group-item-action text-center\">
                                <i class=\"fas fa-male\" style=\"font-size:27px; margin:0 auto;\"></i>
                                <br/>
                                Personas
                            </a>
                            <a href=\"{{ path('listado_usuario',{'currentPage':1}) }}\" class=\"list-group-item list-group-item-action text-center\">
                                <i class=\"fas fa-user\" style=\"font-size:27px; margin:0 auto;\"></i>
                                <br/>
                                Usuarios
                            </a>
                        {% endif %}
                        <a href=\"{{ path('listado_lugarfisico',{'currentPage':1}) }}\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-archive\" style=\"font-size:27px;\"></i>
                            <br/>
                            Lugares
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-history\" style=\"font-size:27px;\"></i>
                            <br/>
                            Últimos Registros
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-question-circle\" style=\"font-size:27px;\"></i>
                            <br/>
                            Ayuda
                        </a>
                        <a href=\"{{ path('logout') }}\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-sign-out-alt\" style=\"font-size:27px;\"></i>
                            <br/>
                            Salir
                        </a>
                    </div>
                </div>


                <div class=\"contentmain\">

                    {% block contentmain %}

                    {% endblock %}

                </div>
            </header>
        {% else %}

            <div class=\"login\">

                {% block login %}

                {% endblock %}

            </div>


        {% endif %}


    </body>

</html>
", "AppBundle::layout.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/layout.html.twig");
    }
}
