<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* baseChef.html.twig */
class __TwigTemplate_75eeaa9faaca441e1bd5577ea8ba1390bd29b0451d939c7b7c3008c14ac19ab7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseChef.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseChef.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--favicon-->
    <link rel=\"icon\" href=\"Back/assets/images/logo.png\" type=\"image/png\" />
    <!--plugins-->
    <link href=\"Back/assets/plugins/simplebar/css/simplebar.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/highcharts/css/highcharts-white.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/metismenu/css/metisMenu.min.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css\" rel=\"stylesheet\" />
    <!-- loader-->
    <link href=\"Back/assets/css/pace.min.css\" rel=\"stylesheet\" />
    <script src=\"Back/assets/js/pace.min.js\"></script>
    <!-- Bootstrap CSS -->
    <link href=\"Back/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"Back/assets/css/app.css\" rel=\"stylesheet\">
    <link href=\"Back/assets/css/icons.css\" rel=\"stylesheet\">

    <title>Foodine | ";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

<body class=\"bg-theme bg-theme6\">
<!--wrapper-->
<div class=\"wrapper\">
    <!--start header -->
    <header>
        <div class=\"topbar d-flex align-items-center\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"topbar-logo-header\">
                    <div class=\"\">
                        <a href=\"IndexChef.html\" ><img src=\"Back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                    </div>
                    <div class=\"\">
                        <!--<h4 class=\"logo-text\">Foodine</h4>-->
                    </div>
                </div>
                <div class=\"mobile-toggle-menu\"><i class='bx bx-menu'></i></div>
                <div class=\"search-bar flex-grow-1\">

                </div>
                <div class=\"top-menu ms-auto\">
                    <ul class=\"navbar-nav align-items-center\">
                        <li class=\"nav-item mobile-search-icon\">
                            <a class=\"nav-link\" href=\"#\">\t<i class='bx bx-search'></i>
                            </a>
                        </li>

                        <li class=\"nav-item dropdown dropdown-large\">

                            <div class=\"dropdown-menu dropdown-menu-end\">

                                <div class=\"header-notifications-list\">
                                </div>

                            </div>
                        </li>
                        <li class=\"nav-item dropdown dropdown-large\">

                            <div class=\"dropdown-menu dropdown-menu-end\">

                                <div class=\"header-message-list\">









                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"user-box dropdown\">
                    <a class=\"d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"Back/assets/images/avatars/ines.jpg\" class=\"user-img\" alt=\"user avatar\">
                        <div class=\"user-info ps-3\">
                            <p class=\"user-name mb-0\">Ines </p>
                            <p class=\"designattion mb-0\">Chef</p>
                        </div>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\">

                        <li><a class=\"dropdown-item\" href=\"ConnexionChef.html\"><i class='bx bx-log-out-circle'></i><span>Déconnexion</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <!--navigation-->
    <div class=\"nav-container\">
        <div class=\"mobile-topbar-header\">
            <div>
                <!--\t<img src=\"Back/assets/images/logoo.png\" class=\"logo-icon\" alt=\"logo icon\"> -->
            </div>
            <div>
                <a href=\"indexChef.html\">\t<h4 class=\"logo-text\">Foodine</h4></a>
            </div>
            <div class=\"toggle-icon ms-auto\"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <nav class=\"topbar-nav\">
            <ul class=\"metismenu\" id=\"menu\">
                <li>
                    <a href=\"/ajouterplanning\" class=\"\">
                        <div class=\"parent-icon\"><i class='bx bx-calendar'></i>
                        </div>
                        <div class=\"menu-title\">Planning</div>
                    </a>


                <li>
                    <a href=\"/admin-recette\" class=\"\">
                        <div class=\"parent-icon\"><i class=\"bx bx-receipt\"></i>
                        </div>
                        <div class=\"menu-title\">Recettes</div>
                    </a>

                </li>

            </ul>
        </nav>
    </div>
    <!--end navigation-->
    <!--start page wrapper -->
    ";
        // line 137
        $this->displayBlock('content', $context, $blocks);
        // line 140
        echo "
<!--end page wrapper -->
<!--start overlay-->
<div class=\"overlay toggle-icon\"></div>
<!--end overlay-->
<!--Start Back To Top Button-->
    <a href=\"javaScript:;\" class=\"back-to-top\"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
</div>
<!--end wrapper-->
<!--start switcher-->
<div class=\"switcher-wrapper\">
    <div class=\"switcher-btn\"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class=\"switcher-body\">
        <div class=\"d-flex align-items-center\">
            <h5 class=\"mb-0 text-uppercase\">Theme Customizer</h5>
            <button type=\"button\" class=\"btn-close ms-auto close-switcher\" aria-label=\"Close\"></button>
        </div>
        <hr/>
        <p class=\"mb-0\">Gaussian Texture</p>
        <hr>

        <ul class=\"switcher\">
            <li id=\"theme1\"></li>
            <li id=\"theme2\"></li>
            <li id=\"theme3\"></li>
            <li id=\"theme4\"></li>
            <li id=\"theme5\"></li>
            <li id=\"theme6\"></li>
        </ul>
        <hr>
        <p class=\"mb-0\">Gradient Background</p>
        <hr>

        <ul class=\"switcher\">
            <li id=\"theme7\"></li>
            <li id=\"theme8\"></li>
            <li id=\"theme9\"></li>
            <li id=\"theme10\"></li>
            <li id=\"theme11\"></li>
            <li id=\"theme12\"></li>
            <li id=\"theme13\"></li>
            <li id=\"theme14\"></li>
            <li id=\"theme15\"></li>
        </ul>
    </div>
</div>
<!--end switcher-->
<!-- Bootstrap JS -->
<script src=\"Back/assets/js/bootstrap.bundle.min.js\"></script>
<!--plugins-->
<script src=\"Back/assets/js/jquery.min.js\"></script>
<script src=\"Back/assets/plugins/simplebar/js/simplebar.min.js\"></script>
<script src=\"Back/assets/plugins/metismenu/js/metisMenu.min.js\"></script>
<script src=\"Back/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js\"></script>
<script src=\"Back/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js\"></script>
<script>
    \$(document).ready(function () {
        \$('#image-uploadify').imageuploadify();
    })
</script>
<!--app JS-->
<script src=\"Back/assets/js/app.js\"></script>
</body>
<footer class=\"page-footer\">
    <p class=\"mb-0\">Copyright © 2021. All right reserved.</p>
</footer>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 138
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseChef.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  294 => 138,  284 => 137,  266 => 25,  188 => 140,  186 => 137,  71 => 25,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--favicon-->
    <link rel=\"icon\" href=\"Back/assets/images/logo.png\" type=\"image/png\" />
    <!--plugins-->
    <link href=\"Back/assets/plugins/simplebar/css/simplebar.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/highcharts/css/highcharts-white.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/metismenu/css/metisMenu.min.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css\" rel=\"stylesheet\" />
    <!-- loader-->
    <link href=\"Back/assets/css/pace.min.css\" rel=\"stylesheet\" />
    <script src=\"Back/assets/js/pace.min.js\"></script>
    <!-- Bootstrap CSS -->
    <link href=\"Back/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"Back/assets/css/app.css\" rel=\"stylesheet\">
    <link href=\"Back/assets/css/icons.css\" rel=\"stylesheet\">

    <title>Foodine | {% block title %}{% endblock %}</title>
</head>

<body class=\"bg-theme bg-theme6\">
<!--wrapper-->
<div class=\"wrapper\">
    <!--start header -->
    <header>
        <div class=\"topbar d-flex align-items-center\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"topbar-logo-header\">
                    <div class=\"\">
                        <a href=\"IndexChef.html\" ><img src=\"Back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                    </div>
                    <div class=\"\">
                        <!--<h4 class=\"logo-text\">Foodine</h4>-->
                    </div>
                </div>
                <div class=\"mobile-toggle-menu\"><i class='bx bx-menu'></i></div>
                <div class=\"search-bar flex-grow-1\">

                </div>
                <div class=\"top-menu ms-auto\">
                    <ul class=\"navbar-nav align-items-center\">
                        <li class=\"nav-item mobile-search-icon\">
                            <a class=\"nav-link\" href=\"#\">\t<i class='bx bx-search'></i>
                            </a>
                        </li>

                        <li class=\"nav-item dropdown dropdown-large\">

                            <div class=\"dropdown-menu dropdown-menu-end\">

                                <div class=\"header-notifications-list\">
                                </div>

                            </div>
                        </li>
                        <li class=\"nav-item dropdown dropdown-large\">

                            <div class=\"dropdown-menu dropdown-menu-end\">

                                <div class=\"header-message-list\">









                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"user-box dropdown\">
                    <a class=\"d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"Back/assets/images/avatars/ines.jpg\" class=\"user-img\" alt=\"user avatar\">
                        <div class=\"user-info ps-3\">
                            <p class=\"user-name mb-0\">Ines </p>
                            <p class=\"designattion mb-0\">Chef</p>
                        </div>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\">

                        <li><a class=\"dropdown-item\" href=\"ConnexionChef.html\"><i class='bx bx-log-out-circle'></i><span>Déconnexion</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <!--navigation-->
    <div class=\"nav-container\">
        <div class=\"mobile-topbar-header\">
            <div>
                <!--\t<img src=\"Back/assets/images/logoo.png\" class=\"logo-icon\" alt=\"logo icon\"> -->
            </div>
            <div>
                <a href=\"indexChef.html\">\t<h4 class=\"logo-text\">Foodine</h4></a>
            </div>
            <div class=\"toggle-icon ms-auto\"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <nav class=\"topbar-nav\">
            <ul class=\"metismenu\" id=\"menu\">
                <li>
                    <a href=\"/ajouterplanning\" class=\"\">
                        <div class=\"parent-icon\"><i class='bx bx-calendar'></i>
                        </div>
                        <div class=\"menu-title\">Planning</div>
                    </a>


                <li>
                    <a href=\"/admin-recette\" class=\"\">
                        <div class=\"parent-icon\"><i class=\"bx bx-receipt\"></i>
                        </div>
                        <div class=\"menu-title\">Recettes</div>
                    </a>

                </li>

            </ul>
        </nav>
    </div>
    <!--end navigation-->
    <!--start page wrapper -->
    {% block content %}

    {% endblock %}

<!--end page wrapper -->
<!--start overlay-->
<div class=\"overlay toggle-icon\"></div>
<!--end overlay-->
<!--Start Back To Top Button-->
    <a href=\"javaScript:;\" class=\"back-to-top\"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
</div>
<!--end wrapper-->
<!--start switcher-->
<div class=\"switcher-wrapper\">
    <div class=\"switcher-btn\"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class=\"switcher-body\">
        <div class=\"d-flex align-items-center\">
            <h5 class=\"mb-0 text-uppercase\">Theme Customizer</h5>
            <button type=\"button\" class=\"btn-close ms-auto close-switcher\" aria-label=\"Close\"></button>
        </div>
        <hr/>
        <p class=\"mb-0\">Gaussian Texture</p>
        <hr>

        <ul class=\"switcher\">
            <li id=\"theme1\"></li>
            <li id=\"theme2\"></li>
            <li id=\"theme3\"></li>
            <li id=\"theme4\"></li>
            <li id=\"theme5\"></li>
            <li id=\"theme6\"></li>
        </ul>
        <hr>
        <p class=\"mb-0\">Gradient Background</p>
        <hr>

        <ul class=\"switcher\">
            <li id=\"theme7\"></li>
            <li id=\"theme8\"></li>
            <li id=\"theme9\"></li>
            <li id=\"theme10\"></li>
            <li id=\"theme11\"></li>
            <li id=\"theme12\"></li>
            <li id=\"theme13\"></li>
            <li id=\"theme14\"></li>
            <li id=\"theme15\"></li>
        </ul>
    </div>
</div>
<!--end switcher-->
<!-- Bootstrap JS -->
<script src=\"Back/assets/js/bootstrap.bundle.min.js\"></script>
<!--plugins-->
<script src=\"Back/assets/js/jquery.min.js\"></script>
<script src=\"Back/assets/plugins/simplebar/js/simplebar.min.js\"></script>
<script src=\"Back/assets/plugins/metismenu/js/metisMenu.min.js\"></script>
<script src=\"Back/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js\"></script>
<script src=\"Back/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js\"></script>
<script>
    \$(document).ready(function () {
        \$('#image-uploadify').imageuploadify();
    })
</script>
<!--app JS-->
<script src=\"Back/assets/js/app.js\"></script>
</body>
<footer class=\"page-footer\">
    <p class=\"mb-0\">Copyright © 2021. All right reserved.</p>
</footer>
</html>", "baseChef.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\baseChef.html.twig");
    }
}
