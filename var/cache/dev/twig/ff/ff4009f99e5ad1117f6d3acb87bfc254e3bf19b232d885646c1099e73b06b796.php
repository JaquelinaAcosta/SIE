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

/* layout.html.twig */
class __TwigTemplate_7876c60c1d2f34ce9083df23632e1c16bb523caae299f42f449a640c8efc9bc7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">\t   
        <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
        <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
        <script src=\"http://code.jquery.com/ui/1.10.1/jquery-ui.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\"> 

        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pugxautocompleter/js/autocompleter-jqueryui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>  

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/front_page.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/pagination.css"), "html", null, true);
        echo "\">

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
        // line 57
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 58
            echo "            <header>  
                <nav class=\"navbar fixed-top navbar-expand-md navbar-dark bg-dark\">
                    ";
            // line 61
            echo "                    <a class=\"navbar-brand abs\" href=\"#\"><strong style=\"font-size:16px;\">
                            ";
            // line 62
            echo "Sistema de Gestión Interna de Expedientes
                        </strong></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsingNavbar\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"navbar-collapse collapse\" id=\"collapsingNavbar\">

                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-dark dropdown-toggle left\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                            aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-user\"></i>  ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "userName", []), "html", null, true);
            echo "  
                                        </a>        </button>
                                    <div class=\"dropdown-menu pull-left\" aria-labelledby=\"dropdownMenuMenu\">
                                        <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_usuario", ["id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]), "html", null, true);
            echo "\" class=\"dropdown-item\" type=\"button\">Configuración de Usuario</a>
                                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_persona", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "id", [])]), "html", null, true);
            echo "\" class=\"dropdown-item\" type=\"button\">Configuración de Personal</a>
                                        <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionar_persona_responsables", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "persona", []), "id", [])]), "html", null, true);
            echo "\" class=\"dropdown-item\" type=\"button\">
                                            Configuracion de Responsables</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 81
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
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("busqueda_expediente");
            echo "\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-search\" style=\"font-size:27px; margin:0 auto;\"></i>
                            <br/>
                            Búscar un Expediente
                        </a>
                        <a href=\"";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_expediente", ["currentPage" => 1]);
            echo "\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"far fa-file-alt\" style=\"font-size:27px; margin:0 auto;\"></i>
                            <br/>
                            Listado de Expedientes
                        </a>
                        ";
            // line 101
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 102
                echo "                            <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_dependencia", ["currentPage" => 1]);
                echo "\" class=\"list-group-item list-group-item-action text-center\">
                                <i class=\"fas fa-building\" style=\"font-size:27px; margin:0 auto;\"></i>
                                <br/>
                                Dependencias
                            </a>
                            <a href=\"";
                // line 107
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_persona", ["currentPage" => 1]);
                echo "\" class=\"list-group-item list-group-item-action text-center\">
                                <i class=\"fas fa-male\" style=\"font-size:27px; margin:0 auto;\"></i>
                                <br/>
                                Personas
                            </a>
                            <a href=\"";
                // line 112
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_usuario", ["currentPage" => 1]);
                echo "\" class=\"list-group-item list-group-item-action text-center\">
                                <i class=\"fas fa-user\" style=\"font-size:27px; margin:0 auto;\"></i>
                                <br/>
                                Usuarios
                            </a>
                        ";
            }
            // line 118
            echo "                        ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "ROLE_RESPONSABLE")) {
                // line 119
                echo "                            <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_personal", ["currentPage" => 1]);
                echo "\" class=\"list-group-item list-group-item-action text-center\">
                                <i class=\"fas fa-male\" style=\"font-size:27px; margin:0 auto;\"></i>
                                <br/>
                                Personal
                            </a>
                        ";
            }
            // line 125
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_mesaentrada", ["currentPage" => 1]);
            echo "\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-archive\" style=\"font-size:27px;\"></i>
                            <br/>
                            Mesas de Entrada
                        </a>
                        <a href=\"";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_lugarfisico", ["currentPage" => 1]);
            echo "\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-archive\" style=\"font-size:27px;\"></i>
                            <br/>
                            Lugares
                        </a>
                        ";
            // line 140
            echo "                        <a href=\"#\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-question-circle\" style=\"font-size:27px;\"></i>
                            <br/>
                            Ayuda
                        </a>
                        <a href=\"";
            // line 145
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
            // line 153
            $this->displayBlock('contentmain', $context, $blocks);
            // line 155
            echo "
                </div>
            </header>
        ";
        } else {
            // line 159
            echo "            <div class=\"login\">
                ";
            // line 160
            $this->displayBlock('login', $context, $blocks);
            // line 162
            echo "            </div>
        ";
        }
        // line 164
        echo "    </body>
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

    // line 153
    public function block_contentmain($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentmain"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentmain"));

        // line 154
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_login($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        // line 161
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 161,  325 => 160,  315 => 154,  306 => 153,  288 => 7,  276 => 164,  272 => 162,  270 => 160,  267 => 159,  261 => 155,  259 => 153,  248 => 145,  241 => 140,  233 => 130,  224 => 125,  214 => 119,  211 => 118,  202 => 112,  194 => 107,  185 => 102,  183 => 101,  175 => 96,  167 => 91,  154 => 81,  149 => 79,  145 => 78,  141 => 77,  135 => 74,  121 => 62,  118 => 61,  114 => 58,  112 => 57,  74 => 22,  70 => 21,  65 => 19,  61 => 18,  47 => 7,  39 => 1,);
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
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">\t   
        <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
        <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
        <script src=\"http://code.jquery.com/ui/1.10.1/jquery-ui.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans&display=swap\" rel=\"stylesheet\"> 

        <script src=\"{{ asset('bundles/pugxautocompleter/js/autocompleter-jqueryui.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>  

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/front_page.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/pagination.css') }}\">

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
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-dark dropdown-toggle left\" type=\"button\" id=\"dropdownMenuMenu\" data-toggle=\"dropdown\"
                                            aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-user\"></i>  {{ app.user.userName }}  
                                        </a>        </button>
                                    <div class=\"dropdown-menu pull-left\" aria-labelledby=\"dropdownMenuMenu\">
                                        <a href=\"{{ path('editar_usuario',{'id':app.user.id}) }}\" class=\"dropdown-item\" type=\"button\">Configuración de Usuario</a>
                                        <a href=\"{{ path('editar_persona',{'id':app.user.persona.id}) }}\" class=\"dropdown-item\" type=\"button\">Configuración de Personal</a>
                                        <a href=\"{{ path('gestionar_persona_responsables',{'id':app.user.persona.id}) }}\" class=\"dropdown-item\" type=\"button\">
                                            Configuracion de Responsables</a>
                                        <a class=\"dropdown-item\" href=\"{{ path(\"logout\") }}\" type=\"button\"><i class=\"fas fa-sign-out-alt\"></i>  Cerrar Sesión</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class=\"sidebar\"> 
                    <div class=\"list-group\" style=\"margin-top:15px;\">
                        <a href=\"{{ path('busqueda_expediente') }}\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-search\" style=\"font-size:27px; margin:0 auto;\"></i>
                            <br/>
                            Búscar un Expediente
                        </a>
                        <a href=\"{{ path('listado_expediente',{'currentPage':1}) }}\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"far fa-file-alt\" style=\"font-size:27px; margin:0 auto;\"></i>
                            <br/>
                            Listado de Expedientes
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
                        {% if app.user.role == 'ROLE_RESPONSABLE' %}
                            <a href=\"{{ path('listado_personal',{'currentPage':1}) }}\" class=\"list-group-item list-group-item-action text-center\">
                                <i class=\"fas fa-male\" style=\"font-size:27px; margin:0 auto;\"></i>
                                <br/>
                                Personal
                            </a>
                        {%endif%}
                        <a href=\"{{ path('listado_mesaentrada',{'currentPage':1}) }}\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-archive\" style=\"font-size:27px;\"></i>
                            <br/>
                            Mesas de Entrada
                        </a>
                        <a href=\"{{ path('listado_lugarfisico',{'currentPage':1}) }}\" class=\"list-group-item list-group-item-action text-center\">
                            <i class=\"fas fa-archive\" style=\"font-size:27px;\"></i>
                            <br/>
                            Lugares
                        </a>
                        {# <a href=\"#\" class=\"list-group-item list-group-item-action text-center\">
                             <i class=\"fas fa-history\" style=\"font-size:27px;\"></i>
                             <br/>
                             Últimos Registros
                         </a>#}
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
", "layout.html.twig", "/var/www/html/SIE/app/Resources/views/layout.html.twig");
    }
}
