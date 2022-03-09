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

/* baseBack.html.twig */
class __TwigTemplate_f7cb1666e84b1f277d4190e7d1b2c1cb5efb33664bb18dec1791a02dd7e0f745 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--favicon-->
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/images/icon.png"), "html", null, true);
        echo "\" type=\"image/png\" />
    <!--plugins-->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/highcharts/css/highcharts-white.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/metismenu/css/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- loader-->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/pace.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>
        Foodine | ";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        // line 26
        echo "    </title>
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
                        <a href=\"/admin\" ><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/images/logo-white.png"), "html", null, true);
        echo "\" class=\"logo-icon\" alt=\"logo icon\"></a>
                    </div>
                    <div class=\"\">
                        <!--<h4 class=\"logo-text\">Foodine</h4>-->
                    </div>
                </div>
                <div class=\"mobile-toggle-menu\"><i class='bx bx-menu'></i></div>
                <div class=\"search-bar flex-grow-1\">
                    <div class=\"position-relative search-bar-box\">
                        <input type=\"text\" class=\"form-control search-control\" placeholder=\"Type to search...\"> <span class=\"position-absolute top-50 search-show translate-middle-y\"><i class='bx bx-search'></i></span>
                        <span class=\"position-absolute top-50 search-close translate-middle-y\"><i class='bx bx-x'></i></span>
                    </div>
                </div>
                <div class=\"top-menu ms-auto\">
                    <ul class=\"navbar-nav align-items-center\">
                        <li class=\"nav-item mobile-search-icon\">
                            <a class=\"nav-link\" href=\"#\">\t<i class='bx bx-search'></i>
                            </a>
                        </li>

                        <li class=\"nav-item dropdown dropdown-large\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret position-relative\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> <span class=\"alert-count\">7</span>
                                <i class='bx bx-bell'></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <a href=\"javascript:;\">
                                    <div class=\"msg-header\">
                                        <p class=\"msg-header-title\">Notifications</p>
                                        <p class=\"msg-header-clear ms-auto\">Marks all as read</p>
                                    </div>
                                </a>
                                <div class=\"header-notifications-list\">
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-group\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">New Customers<span class=\"msg-time float-end\">14 Sec
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">5 new user registered</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-cart-alt\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">New Orders <span class=\"msg-time float-end\">2 min
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">You have recived new orders</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-file\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">24 PDF File<span class=\"msg-time float-end\">19 min
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">The pdf files generated</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-send\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Time Response <span class=\"msg-time float-end\">28 min
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">5.1 min avarage time response</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-home-circle\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">New Product Approved <span
                                                            class=\"msg-time float-end\">2 hrs ago</span></h6>
                                                <p class=\"msg-info\">Your new product has approved</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-message-detail\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">New Comments <span class=\"msg-time float-end\">4 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">New customer comments recived</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class='bx bx-check-square'></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Your item is shipped <span class=\"msg-time float-end\">5 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">Successfully shipped your item</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class='bx bx-user-pin'></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">New 24 authors<span class=\"msg-time float-end\">1 day
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">24 new authors joined last week</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class='bx bx-door-open'></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Defense Alerts <span class=\"msg-time float-end\">2 weeks
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">45% less alerts last 4 weeks</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href=\"javascript:;\">
                                    <div class=\"text-center msg-footer\">View All Notifications</div>
                                </a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown dropdown-large\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret position-relative\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> <span class=\"alert-count\">8</span>
                                <i class='bx bx-comment'></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <a href=\"javascript:;\">
                                    <div class=\"msg-header\">
                                        <p class=\"msg-header-title\">Messages</p>
                                        <p class=\"msg-header-clear ms-auto\">Marks all as read</p>
                                    </div>
                                </a>
                                <div class=\"header-message-list\">
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-1.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Daisy Anderson <span class=\"msg-time float-end\">5 sec
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">The standard chunk of lorem</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-2.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Althea Cabardo <span class=\"msg-time float-end\">14
\t\t\t\t\t\t\t\t\t\t\t\t\tsec ago</span></h6>
                                                <p class=\"msg-info\">Many desktop publishing packages</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-3.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Oscar Garner <span class=\"msg-time float-end\">8 min
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">Various versions have evolved over</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-4.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Katherine Pechon <span class=\"msg-time float-end\">15
\t\t\t\t\t\t\t\t\t\t\t\t\tmin ago</span></h6>
                                                <p class=\"msg-info\">Making this the first true generator</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-5.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Amelia Doe <span class=\"msg-time float-end\">22 min
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">Duis aute irure dolor in reprehenderit</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-6.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Cristina Jhons <span class=\"msg-time float-end\">2 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">The passage is attributed to an unknown</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-7.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">James Caviness <span class=\"msg-time float-end\">4 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">The point of using Lorem</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-8.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Peter Costanzo <span class=\"msg-time float-end\">6 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">It was popularised in the 1960s</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-9.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">David Buckley <span class=\"msg-time float-end\">2 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">Various versions have evolved over</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-10.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Thomas Wheeler <span class=\"msg-time float-end\">2 days
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">If you are going to use a passage</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-11.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Johnny Seitz <span class=\"msg-time float-end\">5 days
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">All the Lorem Ipsum generators</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href=\"javascript:;\">
                                    <div class=\"text-center msg-footer\">View All Messages</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"user-box dropdown\">
                    <a class=\"d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/images/avatars/portrait.jpg"), "html", null, true);
        echo "\" class=\"user-img\" alt=\"user avatar\">
                        <div class=\"user-info ps-3\">
                            <p class=\"user-name mb-0\">Aziz</p>
                            <p class=\"designattion mb-0\">Admin</p>
                        </div>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\">

                        <li><a class=\"dropdown-item\" href=\"ConnexionAdmin.html\"><i class='bx bx-log-out-circle'></i><span>Déconnexion</span></a>
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
                <img src=\"Back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\">
            </div>
            <div>
                <a href=\"index.html\">\t<h4 class=\"logo-text\">Foodine</h4></a>
            </div>
            <div class=\"toggle-icon ms-auto\"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <nav class=\"topbar-nav\">
            <ul class=\"metismenu\" id=\"menu\">
                <li>
                    <a href=\"#\" class=\"\">
                        <div class=\"parent-icon\"><i class='bx bx-package'></i>
                        </div>
                        <div class=\"menu-title\">Produits</div>
                    </a>


                <li>
                    <a href=\"#\" class=\"\">
                        <div class=\"parent-icon\"><i class=\"bx bx-category\"></i>
                        </div>
                        <div class=\"menu-title\">Catégories</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"/admin-evenements\">
                        <div class=\"parent-icon\"><i class=\"bx bx-calendar-event\"></i>
                        </div>
                        <div class=\"menu-title\">Evénements</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"/admin-promotions\">
                        <div class=\"parent-icon\"><i class='bx bx-money'></i>
                        </div>
                        <div class=\"menu-title\">Promotions</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon\"><i class=\"bx bxs-user-badge\"></i>
                        </div>
                        <div class=\"menu-title\">Employés</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon\"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class=\"menu-title\">Réclamations</div>
                    </a>

                </li>


                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon\"><i class='bx bx-purchase-tag'></i>
                        </div>
                        <div class=\"menu-title\">Commandes</div>
                    </a>

                </li>

                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon\"><i class='bx bx-calendar'></i>
                        </div>
                        <div class=\"menu-title\">Réservations</div>
                    </a>

                </li>

                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon\"><i class='bx bx-chair'></i>
                        </div>
                        <div class=\"menu-title\">Tables</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon icon-color-6\"> <i class=\"bx bxs-user-account\"></i>
                        </div>
                        <div class=\"menu-title\">Clients</div>
                    </a>

                </li>
            </ul>
        </nav>
    </div>
    <!--end navigation-->

    ";
        // line 448
        $this->displayBlock('content', $context, $blocks);
        // line 451
        echo "
<!--start overlay-->
<div class=\"overlay toggle-icon\"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href=\"javaScript:;\" class=\"back-to-top\"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
";
        // line 460
        echo "</div>
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
<script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!--plugins-->
<script src=\"Back/assets/js/jquery.min.js\"></script>
<script src=\"Back/assets/plugins/simplebar/js/simplebar.min.js\"></script>
<script src=\"Back/assets/plugins/metismenu/js/metisMenu.min.js\"></script>
<script src=\"Back/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js\"></script>
<script src=\"Back/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js\"></script>
<script src=\"Back/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js\"></script>
<script src=\"Back/assets/plugins/highcharts/js/highcharts.js\"></script>
<script src=\"Back/assets/plugins/highcharts/js/exporting.js\"></script>
<script src=\"Back/assets/plugins/highcharts/js/variable-pie.js\"></script>
<script src=\"Back/assets/plugins/highcharts/js/export-data.js\"></script>
<script src=\"Back/assets/plugins/highcharts/js/accessibility.js\"></script>
<script src=\"Back/assets/plugins/apexcharts-bundle/js/apexcharts.min.js\"></script>

<!--app JS-->
<script src=\"Back/assets/js/app.js\"></script>
<script>
    new PerfectScrollbar('.customers-list');
    new PerfectScrollbar('.store-metrics');
    new PerfectScrollbar('.product-list-2');
</script>
</body>

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

    // line 448
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 449
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 449,  643 => 448,  625 => 25,  590 => 502,  546 => 460,  538 => 451,  536 => 448,  414 => 329,  120 => 38,  106 => 26,  104 => 25,  98 => 22,  94 => 21,  89 => 19,  84 => 17,  80 => 16,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  54 => 8,  45 => 1,);
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
    <link rel=\"icon\" href=\"{{ asset('Back/assets/images/icon.png')}}\" type=\"image/png\" />
    <!--plugins-->
    <link href=\"{{ asset('Back/assets/plugins/simplebar/css/simplebar.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('Back/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('Back/assets/plugins/highcharts/css/highcharts-white.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('Back/assets/plugins/metismenu/css/metisMenu.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('Back/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}\" rel=\"stylesheet\" />
    <!-- loader-->
    <link href=\"{{ asset('Back/assets/css/pace.min.css') }}\"  rel=\"stylesheet\" />
    <script src=\"{{ asset('Back/assets/js/pace.min.js') }}\"></script>
    <!-- Bootstrap CSS -->
    <link href=\"{{ asset('Back/assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"{{ asset('Back/assets/css/app.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Back/assets/css/icons.css') }}\" rel=\"stylesheet\">

    <title>
        Foodine | {% block title %}{% endblock %}
    </title>
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
                        <a href=\"/admin\" ><img src=\"{{ asset('Back/assets/images/logo-white.png')}}\" class=\"logo-icon\" alt=\"logo icon\"></a>
                    </div>
                    <div class=\"\">
                        <!--<h4 class=\"logo-text\">Foodine</h4>-->
                    </div>
                </div>
                <div class=\"mobile-toggle-menu\"><i class='bx bx-menu'></i></div>
                <div class=\"search-bar flex-grow-1\">
                    <div class=\"position-relative search-bar-box\">
                        <input type=\"text\" class=\"form-control search-control\" placeholder=\"Type to search...\"> <span class=\"position-absolute top-50 search-show translate-middle-y\"><i class='bx bx-search'></i></span>
                        <span class=\"position-absolute top-50 search-close translate-middle-y\"><i class='bx bx-x'></i></span>
                    </div>
                </div>
                <div class=\"top-menu ms-auto\">
                    <ul class=\"navbar-nav align-items-center\">
                        <li class=\"nav-item mobile-search-icon\">
                            <a class=\"nav-link\" href=\"#\">\t<i class='bx bx-search'></i>
                            </a>
                        </li>

                        <li class=\"nav-item dropdown dropdown-large\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret position-relative\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> <span class=\"alert-count\">7</span>
                                <i class='bx bx-bell'></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <a href=\"javascript:;\">
                                    <div class=\"msg-header\">
                                        <p class=\"msg-header-title\">Notifications</p>
                                        <p class=\"msg-header-clear ms-auto\">Marks all as read</p>
                                    </div>
                                </a>
                                <div class=\"header-notifications-list\">
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-group\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">New Customers<span class=\"msg-time float-end\">14 Sec
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">5 new user registered</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-cart-alt\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">New Orders <span class=\"msg-time float-end\">2 min
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">You have recived new orders</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-file\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">24 PDF File<span class=\"msg-time float-end\">19 min
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">The pdf files generated</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-send\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Time Response <span class=\"msg-time float-end\">28 min
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">5.1 min avarage time response</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-home-circle\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">New Product Approved <span
                                                            class=\"msg-time float-end\">2 hrs ago</span></h6>
                                                <p class=\"msg-info\">Your new product has approved</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class=\"bx bx-message-detail\"></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">New Comments <span class=\"msg-time float-end\">4 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">New customer comments recived</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class='bx bx-check-square'></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Your item is shipped <span class=\"msg-time float-end\">5 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">Successfully shipped your item</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class='bx bx-user-pin'></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">New 24 authors<span class=\"msg-time float-end\">1 day
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">24 new authors joined last week</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"notify\"><i class='bx bx-door-open'></i>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Defense Alerts <span class=\"msg-time float-end\">2 weeks
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">45% less alerts last 4 weeks</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href=\"javascript:;\">
                                    <div class=\"text-center msg-footer\">View All Notifications</div>
                                </a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown dropdown-large\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret position-relative\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> <span class=\"alert-count\">8</span>
                                <i class='bx bx-comment'></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <a href=\"javascript:;\">
                                    <div class=\"msg-header\">
                                        <p class=\"msg-header-title\">Messages</p>
                                        <p class=\"msg-header-clear ms-auto\">Marks all as read</p>
                                    </div>
                                </a>
                                <div class=\"header-message-list\">
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-1.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Daisy Anderson <span class=\"msg-time float-end\">5 sec
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">The standard chunk of lorem</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-2.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Althea Cabardo <span class=\"msg-time float-end\">14
\t\t\t\t\t\t\t\t\t\t\t\t\tsec ago</span></h6>
                                                <p class=\"msg-info\">Many desktop publishing packages</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-3.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Oscar Garner <span class=\"msg-time float-end\">8 min
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">Various versions have evolved over</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-4.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Katherine Pechon <span class=\"msg-time float-end\">15
\t\t\t\t\t\t\t\t\t\t\t\t\tmin ago</span></h6>
                                                <p class=\"msg-info\">Making this the first true generator</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-5.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Amelia Doe <span class=\"msg-time float-end\">22 min
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">Duis aute irure dolor in reprehenderit</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-6.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Cristina Jhons <span class=\"msg-time float-end\">2 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">The passage is attributed to an unknown</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-7.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">James Caviness <span class=\"msg-time float-end\">4 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">The point of using Lorem</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-8.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Peter Costanzo <span class=\"msg-time float-end\">6 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">It was popularised in the 1960s</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-9.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">David Buckley <span class=\"msg-time float-end\">2 hrs
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">Various versions have evolved over</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-10.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Thomas Wheeler <span class=\"msg-time float-end\">2 days
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">If you are going to use a passage</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item\" href=\"javascript:;\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"user-online\">
                                                <img src=\"Back/assets/images/avatars/avatar-11.png\" class=\"msg-avatar\" alt=\"user avatar\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"msg-name\">Johnny Seitz <span class=\"msg-time float-end\">5 days
\t\t\t\t\t\t\t\t\t\t\t\t\tago</span></h6>
                                                <p class=\"msg-info\">All the Lorem Ipsum generators</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href=\"javascript:;\">
                                    <div class=\"text-center msg-footer\">View All Messages</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"user-box dropdown\">
                    <a class=\"d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"{{ asset('Back/assets/images/avatars/portrait.jpg')}}\" class=\"user-img\" alt=\"user avatar\">
                        <div class=\"user-info ps-3\">
                            <p class=\"user-name mb-0\">Aziz</p>
                            <p class=\"designattion mb-0\">Admin</p>
                        </div>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\">

                        <li><a class=\"dropdown-item\" href=\"ConnexionAdmin.html\"><i class='bx bx-log-out-circle'></i><span>Déconnexion</span></a>
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
                <img src=\"Back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\">
            </div>
            <div>
                <a href=\"index.html\">\t<h4 class=\"logo-text\">Foodine</h4></a>
            </div>
            <div class=\"toggle-icon ms-auto\"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <nav class=\"topbar-nav\">
            <ul class=\"metismenu\" id=\"menu\">
                <li>
                    <a href=\"#\" class=\"\">
                        <div class=\"parent-icon\"><i class='bx bx-package'></i>
                        </div>
                        <div class=\"menu-title\">Produits</div>
                    </a>


                <li>
                    <a href=\"#\" class=\"\">
                        <div class=\"parent-icon\"><i class=\"bx bx-category\"></i>
                        </div>
                        <div class=\"menu-title\">Catégories</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"/admin-evenements\">
                        <div class=\"parent-icon\"><i class=\"bx bx-calendar-event\"></i>
                        </div>
                        <div class=\"menu-title\">Evénements</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"/admin-promotions\">
                        <div class=\"parent-icon\"><i class='bx bx-money'></i>
                        </div>
                        <div class=\"menu-title\">Promotions</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon\"><i class=\"bx bxs-user-badge\"></i>
                        </div>
                        <div class=\"menu-title\">Employés</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon\"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class=\"menu-title\">Réclamations</div>
                    </a>

                </li>


                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon\"><i class='bx bx-purchase-tag'></i>
                        </div>
                        <div class=\"menu-title\">Commandes</div>
                    </a>

                </li>

                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon\"><i class='bx bx-calendar'></i>
                        </div>
                        <div class=\"menu-title\">Réservations</div>
                    </a>

                </li>

                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon\"><i class='bx bx-chair'></i>
                        </div>
                        <div class=\"menu-title\">Tables</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"#\">
                        <div class=\"parent-icon icon-color-6\"> <i class=\"bx bxs-user-account\"></i>
                        </div>
                        <div class=\"menu-title\">Clients</div>
                    </a>

                </li>
            </ul>
        </nav>
    </div>
    <!--end navigation-->

    {% block content %}

    {% endblock %}

<!--start overlay-->
<div class=\"overlay toggle-icon\"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href=\"javaScript:;\" class=\"back-to-top\"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
{#<footer class=\"page-footer\">#}
{#    <p class=\"mb-0\">Copyright © 2021. All right reserved.</p>#}
{#</footer>#}
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
<script src=\"{{ asset('Back/assets/js/bootstrap.bundle.min.js')}}\"></script>
<!--plugins-->
<script src=\"Back/assets/js/jquery.min.js\"></script>
<script src=\"Back/assets/plugins/simplebar/js/simplebar.min.js\"></script>
<script src=\"Back/assets/plugins/metismenu/js/metisMenu.min.js\"></script>
<script src=\"Back/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js\"></script>
<script src=\"Back/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js\"></script>
<script src=\"Back/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js\"></script>
<script src=\"Back/assets/plugins/highcharts/js/highcharts.js\"></script>
<script src=\"Back/assets/plugins/highcharts/js/exporting.js\"></script>
<script src=\"Back/assets/plugins/highcharts/js/variable-pie.js\"></script>
<script src=\"Back/assets/plugins/highcharts/js/export-data.js\"></script>
<script src=\"Back/assets/plugins/highcharts/js/accessibility.js\"></script>
<script src=\"Back/assets/plugins/apexcharts-bundle/js/apexcharts.min.js\"></script>

<!--app JS-->
<script src=\"Back/assets/js/app.js\"></script>
<script>
    new PerfectScrollbar('.customers-list');
    new PerfectScrollbar('.store-metrics');
    new PerfectScrollbar('.product-list-2');
</script>
</body>

</html>", "baseBack.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\baseBack.html.twig");
    }
}
