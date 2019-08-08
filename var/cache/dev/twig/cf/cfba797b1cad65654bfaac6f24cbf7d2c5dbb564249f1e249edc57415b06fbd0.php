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

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>

        <script src=\"https://code.jquery.com/jquery-1.12.4.js\"
                integrity=\"sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=\"
        crossorigin=\"anonymous\"></script>

        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">\t
        ";
        // line 22
        echo "        <script src=\"//code.jquery.com/jquery-3.3.1.min.js\"></script>
        <script src=\"//code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\"> 
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pugxautocompleter/js/autocompleter-jqueryui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>  
        <style>
            *{
                font-family: 'Noto Sans', sans-serif;
                font-size: 12px;
            }
            body{
                background-color:#e8e8e8;
            }
            .content{
                margin-left:100px;
                margin-right:100px;
                background-color:#fff;
                padding:30px;
            }
            .filtro{
                background-color: #e8e8e8;
                margin:auto;
                padding:10px;
            }

            table{
                color:#616161;
            }


            .dropdown-menu {display: block;visibility: hidden;opacity:0;transform: translateY(50px);transition:.5s ease all;}
            .dropdown-menu.show {display: block;visibility: visible;opacity:1;transform: translateY(0px);transition:.5s ease all;}

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
        // line 72
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 73
            echo "            <header>  
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                    <a class=\"navbar-brand\" href=\"#\">SIE</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">

                            <div class=\"dropdown dropdown-menu-right\">

                                ";
            // line 85
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == null)) {
                // line 86
                echo "                                    <li class=\"nav-item\">
                                        <a class=\"btn btn-success nav-link\" href=\"";
                // line 87
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loginUsuario");
                echo "\">Iniciar Sesión<i class=\"fa fa-sign-in\"></i></a>
                                    </li>
                                ";
            } else {
                // line 90
                echo "
                                    <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                            aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Bienvenido, ";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "nombre", []), "html", null, true);
                echo "
                                    </button>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                        <a class=\"dropdown-item\" type=\"button\">Configuración</a>
                                        <a class=\"dropdown-item\" href=\"";
                // line 97
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
                echo "\" type=\"button\">Cerrar Sesión</a>
                                    </div>
                                ";
            }
            // line 100
            echo "
                            </div>
                        </ul>

                    </div>
                </nav>

                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark nav-bot\">
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                            <div class=\"dropdown\">
                                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    EXPEDIENTES
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_expediente");
            echo "\" type=\"button\">NUEVO</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => 1]);
            echo "\" type=\"button\">LISTADO</a>
                                </div>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    DEPENDENCIAS
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_dependencia");
            echo "\" type=\"button\">NUEVO</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => 1]);
            echo "\" type=\"button\">LISTADO</a>
                                </div>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    PERSONAS
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 136
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_persona");
            echo "\" type=\"button\">NUEVO</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => 1]);
            echo "\" type=\"button\">LISTADO</a>
                                </div>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    USUARIOS
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_usuario");
            echo "\" type=\"button\">NUEVO</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 147
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => 1]);
            echo "\" type=\"button\">LISTADO</a>
                                </div>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    LUGARES
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_lugarfisico");
            echo "\" type=\"button\">NUEVO</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 157
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => 1]);
            echo "\" type=\"button\">LISTADO</a>
                                </div>
                            </div>
                        </ul>

                    </div>
                </nav>

            </header>
        ";
        }
        // line 167
        echo "        <section id=\"content\">             
            ";
        // line 168
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

    // line 168
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
        return array (  303 => 168,  285 => 7,  267 => 168,  264 => 167,  251 => 157,  247 => 156,  235 => 147,  231 => 146,  219 => 137,  215 => 136,  203 => 127,  199 => 126,  187 => 117,  183 => 116,  165 => 100,  159 => 97,  152 => 93,  147 => 90,  141 => 87,  138 => 86,  136 => 85,  122 => 73,  120 => 72,  71 => 26,  67 => 25,  62 => 22,  46 => 7,  38 => 1,);
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
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>

        <script src=\"https://code.jquery.com/jquery-1.12.4.js\"
                integrity=\"sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=\"
        crossorigin=\"anonymous\"></script>

        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">\t
        {#        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
                <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">#}
        <script src=\"//code.jquery.com/jquery-3.3.1.min.js\"></script>
        <script src=\"//code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\"> 
        <script src=\"{{ asset('bundles/pugxautocompleter/js/autocompleter-jqueryui.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>  
        <style>
            *{
                font-family: 'Noto Sans', sans-serif;
                font-size: 12px;
            }
            body{
                background-color:#e8e8e8;
            }
            .content{
                margin-left:100px;
                margin-right:100px;
                background-color:#fff;
                padding:30px;
            }
            .filtro{
                background-color: #e8e8e8;
                margin:auto;
                padding:10px;
            }

            table{
                color:#616161;
            }


            .dropdown-menu {display: block;visibility: hidden;opacity:0;transform: translateY(50px);transition:.5s ease all;}
            .dropdown-menu.show {display: block;visibility: visible;opacity:1;transform: translateY(0px);transition:.5s ease all;}

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
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                    <a class=\"navbar-brand\" href=\"#\">SIE</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">

                            <div class=\"dropdown dropdown-menu-right\">

                                {% if(app.user == null) %}
                                    <li class=\"nav-item\">
                                        <a class=\"btn btn-success nav-link\" href=\"{{ path(\"loginUsuario\") }}\">Iniciar Sesión<i class=\"fa fa-sign-in\"></i></a>
                                    </li>
                                {% else %}

                                    <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                            aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Bienvenido, {{ app.user.persona.nombre }}
                                    </button>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                        <a class=\"dropdown-item\" type=\"button\">Configuración</a>
                                        <a class=\"dropdown-item\" href=\"{{ path(\"logout\") }}\" type=\"button\">Cerrar Sesión</a>
                                    </div>
                                {% endif %}

                            </div>
                        </ul>

                    </div>
                </nav>

                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark nav-bot\">
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                            <div class=\"dropdown\">
                                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    EXPEDIENTES
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                    <a class=\"dropdown-item\" href=\"{{ path(\"nuevo_expediente\") }}\" type=\"button\">NUEVO</a>
                                    <a class=\"dropdown-item\" href=\"{{ path(\"listado_expediente\",{'currentPage':1}) }}\" type=\"button\">LISTADO</a>
                                </div>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    DEPENDENCIAS
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                    <a class=\"dropdown-item\" href=\"{{ path(\"nueva_dependencia\") }}\" type=\"button\">NUEVO</a>
                                    <a class=\"dropdown-item\" href=\"{{ path(\"listado_dependencia\",{'currentPage':1}) }}\" type=\"button\">LISTADO</a>
                                </div>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    PERSONAS
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                    <a class=\"dropdown-item\" href=\"{{ path(\"nueva_persona\") }}\" type=\"button\">NUEVO</a>
                                    <a class=\"dropdown-item\" href=\"{{ path(\"listado_persona\",{'currentPage':1}) }}\" type=\"button\">LISTADO</a>
                                </div>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    USUARIOS
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                    <a class=\"dropdown-item\" href=\"{{ path(\"nuevo_usuario\") }}\" type=\"button\">NUEVO</a>
                                    <a class=\"dropdown-item\" href=\"{{ path(\"listado_usuario\",{'currentPage':1}) }}\" type=\"button\">LISTADO</a>
                                </div>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    LUGARES
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuMenu\">
                                    <a class=\"dropdown-item\" href=\"{{ path(\"nuevo_lugarfisico\") }}\" type=\"button\">NUEVO</a>
                                    <a class=\"dropdown-item\" href=\"{{ path(\"listado_lugarfisico\",{'currentPage':1}) }}\" type=\"button\">LISTADO</a>
                                </div>
                            </div>
                        </ul>

                    </div>
                </nav>

            </header>
        {% endif %}
        <section id=\"content\">             
            {% block content %}Content default{% endblock %}   
        </section>


    </body>

</html>
", "AppBundle::layout.html.twig", "/var/www/html/gitSIE/src/AppBundle/Resources/views/layout.html.twig");
    }
}
