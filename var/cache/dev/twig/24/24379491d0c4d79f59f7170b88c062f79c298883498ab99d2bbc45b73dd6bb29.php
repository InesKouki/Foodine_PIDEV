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
class __TwigTemplate_2bd8053aea00c2b79f3632cc1135474a34bbc3cb96a38d45a0ed822328edcc81 extends Template
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
            'notif' => [$this, 'block_notif'],
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
    <link rel=\"icon\" href=\"/back/assets/images/icon.png\" type=\"image/png\" />
    <!--plugins-->
    <link href=\"/back/assets/plugins/simplebar/css/simplebar.css\" rel=\"stylesheet\" />
    <link href=\"/back/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css\" rel=\"stylesheet\" />
    <link href=\"/back/assets/plugins/highcharts/css/highcharts-white.css\" rel=\"stylesheet\" />
    <link href=\"/back/assets/plugins/metismenu/css/metisMenu.min.css\" rel=\"stylesheet\" />
    <link href=\"/back/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css\" rel=\"stylesheet\" />
    <!-- loader-->
    <link href=\"/back/assets/css/pace.min.css\" rel=\"stylesheet\" />
    <script src=\"/back/assets/js/pace.min.js\"></script>
    <!-- Bootstrap CSS -->
    <link href=\"/back/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"/back/assets/css/app.css\" rel=\"stylesheet\">
    <link href=\"/back/assets/css/icons.css\" rel=\"stylesheet\">

    <title>
        Foodine | ";
        // line 26
        $this->displayBlock('title', $context, $blocks);
        // line 27
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
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "Roles", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 40
            echo "

                            ";
            // line 42
            if ((0 === twig_compare($context["role"], "ROLE_CHEF"))) {
                // line 43
                echo "                                <a href=\"/chef\" ><img src=\"/back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                            ";
            } elseif ((0 === twig_compare(            // line 44
$context["role"], "ROLE_LIVREUR"))) {
                // line 45
                echo "                                <a href=\"/livreur\" ><img src=\"/back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                            ";
            } elseif ((0 === twig_compare(            // line 46
$context["role"], "ROLE_ADMIN"))) {
                // line 47
                echo "                                <a href=\"/admin\" ><img src=\"/back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                            ";
            }
            // line 49
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
                    </div>
                    <div class=\"\">
                        <!--<h4 class=\"logo-text\">Foodine</h4>-->
                    </div>
                </div>
                <div class=\"mobile-toggle-menu\"><i class='bx bx-menu'></i></div>
                <div class=\"search-bar flex-grow-1\">

                </div>
                ";
        // line 61
        $this->displayBlock('notif', $context, $blocks);
        // line 63
        echo "                <div class=\"user-box dropdown\">
                    <a class=\"d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "file", [], "any", false, false, false, 65))), "html", null, true);
        echo "\" class=\"user-img\" alt=\"user avatar\">
                        <div class=\"user-info ps-3\">
                            <p class=\"user-name mb-0\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "Nom", [], "any", false, false, false, 67), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "Prenom", [], "any", false, false, false, 67), "html", null, true);
        echo " </p>
                            <p class=\"designattion mb-0\">

                                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "Roles", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 71
            echo "

                                    ";
            // line 73
            if ((0 === twig_compare($context["role"], "ROLE_CHEF"))) {
                // line 74
                echo "                                    Chef
                                ";
            } elseif ((0 === twig_compare(            // line 75
$context["role"], "ROLE_LIVREUR"))) {
                // line 76
                echo "                                    Livreur
                                ";
            } elseif ((0 === twig_compare(            // line 77
$context["role"], "ROLE_ADMIN"))) {
                // line 78
                echo "                                    Admin
                                ";
            }
            // line 80
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "


                            </p>
                        </div>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\">

                        <li><a class=\"dropdown-item\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\"><i class='bx bx-log-out-circle'></i><span>Déconnexion</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <!--navigation-->

    <div class=\"nav-container\">
        ";
        // line 101
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 102
            echo "        <div class=\"mobile-topbar-header\">
            <div>
                <!--\t<img src=\"/back/assets/images/logoo.png\" class=\"logo-icon\" alt=\"logo icon\"> -->
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
                    <a href=\"table-prod.html\" class=\"\">
                        <div class=\"parent-icon\"><i class='bx bx-package'></i>
                        </div>
                        <div class=\"menu-title\">Produits</div>
                    </a>


                <li>
                    <a href=\"table-categ.html\" class=\"\">
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
                    <a class=\"\" href=\"";
            // line 148
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_showUsers");
            echo "\">
                        <div class=\"parent-icon\"><i class=\"bx bxs-user-badge\"></i>
                        </div>
                        <div class=\"menu-title\">Utilisateurs</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"";
            // line 156
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_rec");
            echo "\">
                        <div class=\"parent-icon\"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class=\"menu-title\">Réclamations</div>
                    </a>

                </li>


                <li>
                    <a class=\"\" href=\"table-commande.html\">
                        <div class=\"parent-icon\"><i class='bx bx-purchase-tag'></i>
                        </div>
                        <div class=\"menu-title\">Commandes</div>
                    </a>

                </li>

                <li>
                    <a class=\"\" href=\"table-reservation.html\">
                        <div class=\"parent-icon\"><i class='bx bx-calendar'></i>
                        </div>
                        <div class=\"menu-title\">Réservations</div>
                    </a>

                </li>

                <li>
                    <a class=\"\" href=\"table-table.html\">
                        <div class=\"parent-icon\"><i class='bx bx-chair'></i>
                        </div>
                        <div class=\"menu-title\">Tables</div>
                    </a>

                </li>

            </ul>
        </nav>
        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CHEF")) {
            // line 195
            echo "            <div class=\"mobile-topbar-header\">
                <div>
                    <!--\t<img src=\"assets/images/logoo.png\" class=\"logo-icon\" alt=\"logo icon\"> -->
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
                        <a href=\"table-planning.html\" class=\"\">
                            <div class=\"parent-icon\"><i class='bx bx-calendar'></i>
                            </div>
                            <div class=\"menu-title\">Planning</div>
                        </a>


                    <li>
                        <a href=\"table-recette.html\" class=\"\">
                            <div class=\"parent-icon\"><i class=\"bx bx-receipt\"></i>
                            </div>
                            <div class=\"menu-title\">Recettes</div>
                        </a>

                    </li>

                </ul>
            </nav>
        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) {
            // line 227
            echo "            <div class=\"mobile-topbar-header\">
                <div>
                    <!--\t<img src=\"assets/images/logoo.png\" class=\"logo-icon\" alt=\"logo icon\"> -->
                </div>
                <div>
                    <a href=\"IndexLivreur.html\">\t<h4 class=\"logo-text\">Foodine</h4></a>
                </div>
                <div class=\"toggle-icon ms-auto\"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <nav class=\"topbar-nav\">
                <ul class=\"metismenu\" id=\"menu\">
                    <li>
                        <a href=\"table-livraison.html\" class=\"\">
                            <div class=\"parent-icon\"><i class='bx bx-package'></i>
                            </div>
                            <div class=\"menu-title\">Livraisons</div>
                        </a>



                </ul>
            </nav>
        ";
        }
        // line 251
        echo "    </div>
    <!--end navigation-->

    ";
        // line 254
        $this->displayBlock('content', $context, $blocks);
        // line 257
        echo "
<!--start overlay-->
<div class=\"overlay toggle-icon\"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href=\"javaScript:;\" class=\"back-to-top\"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class=\"page-footer\">
    <p class=\"mb-0\">Copyright © 2021. All right reserved.</p>
</footer>
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
<script src=\"/back/assets/js/bootstrap.bundle.min.js\"></script>
<!--plugins-->
<!--plugins-->
<script src=\"/back/assets/js/jquery.min.js\"></script>
<script src=\"/back/assets/plugins/simplebar/js/simplebar.min.js\"></script>
<script src=\"/back/assets/plugins/metismenu/js/metisMenu.min.js\"></script>
<script src=\"/back/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js\"></script>
<script src=\"/back/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js\"></script>
<script src=\"/back/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js\"></script>
<script src=\"/back/assets/plugins/highcharts/js/highcharts.js\"></script>
<script src=\"/back/assets/plugins/highcharts/js/exporting.js\"></script>
<script src=\"/back/assets/plugins/highcharts/js/variable-pie.js\"></script>
<script src=\"/back/assets/plugins/highcharts/js/export-data.js\"></script>
<script src=\"/back/assets/plugins/highcharts/js/accessibility.js\"></script>
<script src=\"/back/assets/plugins/apexcharts-bundle/js/apexcharts.min.js\"></script>

";
        // line 325
        echo "<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            initialView: 'dayGridMonth',
            initialDate: '2020-09-12',
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            nowIndicator: true,
            dayMaxEvents: true, // allow \"more\" link when too many events
            editable: true,
            selectable: true,
            businessHours: true,
            dayMaxEvents: true, // allow \"more\" link when too many events
            events: [{
                title: 'All Day Event',
                start: '2020-09-01',
            }, {
                title: 'Long Event',
                start: '2020-09-07',
                end: '2020-09-10'
            }, {
                groupId: 999,
                title: 'Repeating Event',
                start: '2020-09-09T16:00:00'
            }, {
                groupId: 999,
                title: 'Repeating Event',
                start: '2020-09-16T16:00:00'
            }, {
                title: 'Conference',
                start: '2020-09-11',
                end: '2020-09-13'
            }, {
                title: 'Meeting',
                start: '2020-09-12T10:30:00',
                end: '2020-09-12T12:30:00'
            }, {
                title: 'Lunch',
                start: '2020-09-12T12:00:00'
            }, {
                title: 'Meeting',
                start: '2020-09-12T14:30:00'
            }, {
                title: 'Happy Hour',
                start: '2020-09-12T17:30:00'
            }, {
                title: 'Dinner',
                start: '2020-09-12T20:00:00'
            }, {
                title: 'Birthday Party',
                start: '2020-09-13T07:00:00'
            }, {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2020-09-28'
            }]
        });
        calendar.render();
    });
</script>

<script src=\"/back/assets/js/dashboard-sales.js\"></script>
<!--app JS-->
<script src=\"/back/assets/js/app.js\"></script>
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

    // line 26
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

    // line 61
    public function block_notif($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        // line 62
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 254
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 255
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
        return array (  580 => 255,  570 => 254,  560 => 62,  550 => 61,  532 => 26,  445 => 325,  376 => 257,  374 => 254,  369 => 251,  343 => 227,  309 => 195,  267 => 156,  256 => 148,  208 => 102,  206 => 101,  192 => 90,  182 => 82,  175 => 80,  171 => 78,  169 => 77,  166 => 76,  164 => 75,  161 => 74,  159 => 73,  155 => 71,  151 => 70,  143 => 67,  138 => 65,  134 => 63,  132 => 61,  120 => 51,  113 => 49,  109 => 47,  107 => 46,  104 => 45,  102 => 44,  99 => 43,  97 => 42,  93 => 40,  89 => 39,  75 => 27,  73 => 26,  46 => 1,);
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
    <link rel=\"icon\" href=\"/back/assets/images/icon.png\" type=\"image/png\" />
    <!--plugins-->
    <link href=\"/back/assets/plugins/simplebar/css/simplebar.css\" rel=\"stylesheet\" />
    <link href=\"/back/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css\" rel=\"stylesheet\" />
    <link href=\"/back/assets/plugins/highcharts/css/highcharts-white.css\" rel=\"stylesheet\" />
    <link href=\"/back/assets/plugins/metismenu/css/metisMenu.min.css\" rel=\"stylesheet\" />
    <link href=\"/back/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css\" rel=\"stylesheet\" />
    <!-- loader-->
    <link href=\"/back/assets/css/pace.min.css\" rel=\"stylesheet\" />
    <script src=\"/back/assets/js/pace.min.js\"></script>
    <!-- Bootstrap CSS -->
    <link href=\"/back/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"/back/assets/css/app.css\" rel=\"stylesheet\">
    <link href=\"/back/assets/css/icons.css\" rel=\"stylesheet\">

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
                        {% for role in app.user.Roles %}


                            {% if role==\"ROLE_CHEF\" %}
                                <a href=\"/chef\" ><img src=\"/back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                            {% elseif role==\"ROLE_LIVREUR\" %}
                                <a href=\"/livreur\" ><img src=\"/back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                            {% elseif role==\"ROLE_ADMIN\" %}
                                <a href=\"/admin\" ><img src=\"/back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                            {% endif %}

                        {% endfor %}

                    </div>
                    <div class=\"\">
                        <!--<h4 class=\"logo-text\">Foodine</h4>-->
                    </div>
                </div>
                <div class=\"mobile-toggle-menu\"><i class='bx bx-menu'></i></div>
                <div class=\"search-bar flex-grow-1\">

                </div>
                {% block notif %}
                {% endblock %}
                <div class=\"user-box dropdown\">
                    <a class=\"d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"{{ asset('uploads/' ~ app.user.file ) }}\" class=\"user-img\" alt=\"user avatar\">
                        <div class=\"user-info ps-3\">
                            <p class=\"user-name mb-0\">{{app.user.Nom }} {{app.user.Prenom }} </p>
                            <p class=\"designattion mb-0\">

                                {% for role in app.user.Roles %}


                                    {% if role==\"ROLE_CHEF\" %}
                                    Chef
                                {% elseif role==\"ROLE_LIVREUR\" %}
                                    Livreur
                                {% elseif role==\"ROLE_ADMIN\" %}
                                    Admin
                                {% endif %}

                                {% endfor %}



                            </p>
                        </div>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\">

                        <li><a class=\"dropdown-item\" href=\"{{ path('logout') }}\"><i class='bx bx-log-out-circle'></i><span>Déconnexion</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <!--navigation-->

    <div class=\"nav-container\">
        {% if is_granted(\"ROLE_ADMIN\") %}
        <div class=\"mobile-topbar-header\">
            <div>
                <!--\t<img src=\"/back/assets/images/logoo.png\" class=\"logo-icon\" alt=\"logo icon\"> -->
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
                    <a href=\"table-prod.html\" class=\"\">
                        <div class=\"parent-icon\"><i class='bx bx-package'></i>
                        </div>
                        <div class=\"menu-title\">Produits</div>
                    </a>


                <li>
                    <a href=\"table-categ.html\" class=\"\">
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
                    <a class=\"\" href=\"{{ path('admin_showUsers') }}\">
                        <div class=\"parent-icon\"><i class=\"bx bxs-user-badge\"></i>
                        </div>
                        <div class=\"menu-title\">Utilisateurs</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"{{path('show_rec')}}\">
                        <div class=\"parent-icon\"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class=\"menu-title\">Réclamations</div>
                    </a>

                </li>


                <li>
                    <a class=\"\" href=\"table-commande.html\">
                        <div class=\"parent-icon\"><i class='bx bx-purchase-tag'></i>
                        </div>
                        <div class=\"menu-title\">Commandes</div>
                    </a>

                </li>

                <li>
                    <a class=\"\" href=\"table-reservation.html\">
                        <div class=\"parent-icon\"><i class='bx bx-calendar'></i>
                        </div>
                        <div class=\"menu-title\">Réservations</div>
                    </a>

                </li>

                <li>
                    <a class=\"\" href=\"table-table.html\">
                        <div class=\"parent-icon\"><i class='bx bx-chair'></i>
                        </div>
                        <div class=\"menu-title\">Tables</div>
                    </a>

                </li>

            </ul>
        </nav>
        {% elseif is_granted(\"ROLE_CHEF\") %}
            <div class=\"mobile-topbar-header\">
                <div>
                    <!--\t<img src=\"assets/images/logoo.png\" class=\"logo-icon\" alt=\"logo icon\"> -->
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
                        <a href=\"table-planning.html\" class=\"\">
                            <div class=\"parent-icon\"><i class='bx bx-calendar'></i>
                            </div>
                            <div class=\"menu-title\">Planning</div>
                        </a>


                    <li>
                        <a href=\"table-recette.html\" class=\"\">
                            <div class=\"parent-icon\"><i class=\"bx bx-receipt\"></i>
                            </div>
                            <div class=\"menu-title\">Recettes</div>
                        </a>

                    </li>

                </ul>
            </nav>
        {% elseif is_granted(\"ROLE_LIVREUR\") %}
            <div class=\"mobile-topbar-header\">
                <div>
                    <!--\t<img src=\"assets/images/logoo.png\" class=\"logo-icon\" alt=\"logo icon\"> -->
                </div>
                <div>
                    <a href=\"IndexLivreur.html\">\t<h4 class=\"logo-text\">Foodine</h4></a>
                </div>
                <div class=\"toggle-icon ms-auto\"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <nav class=\"topbar-nav\">
                <ul class=\"metismenu\" id=\"menu\">
                    <li>
                        <a href=\"table-livraison.html\" class=\"\">
                            <div class=\"parent-icon\"><i class='bx bx-package'></i>
                            </div>
                            <div class=\"menu-title\">Livraisons</div>
                        </a>



                </ul>
            </nav>
        {% endif %}
    </div>
    <!--end navigation-->

    {% block content %}

    {% endblock %}

<!--start overlay-->
<div class=\"overlay toggle-icon\"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href=\"javaScript:;\" class=\"back-to-top\"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class=\"page-footer\">
    <p class=\"mb-0\">Copyright © 2021. All right reserved.</p>
</footer>
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
<script src=\"/back/assets/js/bootstrap.bundle.min.js\"></script>
<!--plugins-->
<!--plugins-->
<script src=\"/back/assets/js/jquery.min.js\"></script>
<script src=\"/back/assets/plugins/simplebar/js/simplebar.min.js\"></script>
<script src=\"/back/assets/plugins/metismenu/js/metisMenu.min.js\"></script>
<script src=\"/back/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js\"></script>
<script src=\"/back/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js\"></script>
<script src=\"/back/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js\"></script>
<script src=\"/back/assets/plugins/highcharts/js/highcharts.js\"></script>
<script src=\"/back/assets/plugins/highcharts/js/exporting.js\"></script>
<script src=\"/back/assets/plugins/highcharts/js/variable-pie.js\"></script>
<script src=\"/back/assets/plugins/highcharts/js/export-data.js\"></script>
<script src=\"/back/assets/plugins/highcharts/js/accessibility.js\"></script>
<script src=\"/back/assets/plugins/apexcharts-bundle/js/apexcharts.min.js\"></script>

{#Calendar Script#}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            initialView: 'dayGridMonth',
            initialDate: '2020-09-12',
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            nowIndicator: true,
            dayMaxEvents: true, // allow \"more\" link when too many events
            editable: true,
            selectable: true,
            businessHours: true,
            dayMaxEvents: true, // allow \"more\" link when too many events
            events: [{
                title: 'All Day Event',
                start: '2020-09-01',
            }, {
                title: 'Long Event',
                start: '2020-09-07',
                end: '2020-09-10'
            }, {
                groupId: 999,
                title: 'Repeating Event',
                start: '2020-09-09T16:00:00'
            }, {
                groupId: 999,
                title: 'Repeating Event',
                start: '2020-09-16T16:00:00'
            }, {
                title: 'Conference',
                start: '2020-09-11',
                end: '2020-09-13'
            }, {
                title: 'Meeting',
                start: '2020-09-12T10:30:00',
                end: '2020-09-12T12:30:00'
            }, {
                title: 'Lunch',
                start: '2020-09-12T12:00:00'
            }, {
                title: 'Meeting',
                start: '2020-09-12T14:30:00'
            }, {
                title: 'Happy Hour',
                start: '2020-09-12T17:30:00'
            }, {
                title: 'Dinner',
                start: '2020-09-12T20:00:00'
            }, {
                title: 'Birthday Party',
                start: '2020-09-13T07:00:00'
            }, {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2020-09-28'
            }]
        });
        calendar.render();
    });
</script>

<script src=\"/back/assets/js/dashboard-sales.js\"></script>
<!--app JS-->
<script src=\"/back/assets/js/app.js\"></script>
<script>
    new PerfectScrollbar('.customers-list');
    new PerfectScrollbar('.store-metrics');
    new PerfectScrollbar('.product-list-2');
</script>
</body>

</html>", "baseBack.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\baseBack.html.twig");
    }
}
