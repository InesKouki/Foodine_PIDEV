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
class __TwigTemplate_38d27fe93f89bcdd70c39b3679b8701c7e0092ad9caf23eae7ee1162333910a4 extends Template
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
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/images/icon.png"), "html", null, true);
        echo "\" type=\"image/png\" />
    <!--plugins-->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/highcharts/css/highcharts-white.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/metismenu/css/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- loader-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/pace.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap CSS -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 24
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        // line 25
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

    <title>
        Foodine | ";
        // line 28
        $this->displayBlock('title', $context, $blocks);
        // line 29
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "Roles", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 42
            echo "

                            ";
            // line 44
            if ((0 === twig_compare($context["role"], "ROLE_CHEF"))) {
                // line 45
                echo "                                <a href=\"/chef\" ><img src=\"/back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                            ";
            } elseif ((0 === twig_compare(            // line 46
$context["role"], "ROLE_LIVREUR"))) {
                // line 47
                echo "                                <a href=\"/livreur\" ><img src=\"/back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                            ";
            } elseif ((0 === twig_compare(            // line 48
$context["role"], "ROLE_ADMIN"))) {
                // line 49
                echo "                                <a href=\"/admin\" ><img src=\"/back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                            ";
            }
            // line 51
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        // line 63
        $this->displayBlock('notif', $context, $blocks);
        // line 65
        echo "                <div class=\"user-box dropdown\">
                    <a class=\"d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "file", [], "any", false, false, false, 67))), "html", null, true);
        echo "\" class=\"user-img\" alt=\"user avatar\">
                        <div class=\"user-info ps-3\">
                            <p class=\"user-name mb-0\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "Nom", [], "any", false, false, false, 69), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "Prenom", [], "any", false, false, false, 69), "html", null, true);
        echo " </p>
                            <p class=\"designattion mb-0\">

                                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "Roles", [], "any", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 73
            echo "

                                    ";
            // line 75
            if ((0 === twig_compare($context["role"], "ROLE_CHEF"))) {
                // line 76
                echo "                                    Chef
                                ";
            } elseif ((0 === twig_compare(            // line 77
$context["role"], "ROLE_LIVREUR"))) {
                // line 78
                echo "                                    Livreur
                                ";
            } elseif ((0 === twig_compare(            // line 79
$context["role"], "ROLE_ADMIN"))) {
                // line 80
                echo "                                    Admin
                                ";
            }
            // line 82
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "


                            </p>
                        </div>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\">

                        <li><a class=\"dropdown-item\" href=\"";
        // line 92
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
        // line 103
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 104
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
            // line 150
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_showUsers");
            echo "\">
                        <div class=\"parent-icon\"><i class=\"bx bxs-user-badge\"></i>
                        </div>
                        <div class=\"menu-title\">Utilisateurs</div>
                    </a>

                </li>
                <li>
                    <a class=\"\" href=\"";
            // line 158
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
            // line 197
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
            // line 229
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
        // line 253
        echo "    </div>
    <!--end navigation-->

    ";
        // line 256
        $this->displayBlock('content', $context, $blocks);
        // line 259
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
<script src=\"";
        // line 310
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

    // line 28
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

    // line 63
    public function block_notif($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        // line 64
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 256
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 257
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
        return array (  553 => 257,  543 => 256,  533 => 64,  523 => 63,  505 => 28,  470 => 310,  417 => 259,  415 => 256,  410 => 253,  384 => 229,  350 => 197,  308 => 158,  297 => 150,  249 => 104,  247 => 103,  233 => 92,  223 => 84,  216 => 82,  212 => 80,  210 => 79,  207 => 78,  205 => 77,  202 => 76,  200 => 75,  196 => 73,  192 => 72,  184 => 69,  179 => 67,  175 => 65,  173 => 63,  161 => 53,  154 => 51,  150 => 49,  148 => 48,  145 => 47,  143 => 46,  140 => 45,  138 => 44,  134 => 42,  130 => 41,  116 => 29,  114 => 28,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  91 => 20,  86 => 18,  82 => 17,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  56 => 9,  46 => 1,);
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
    {{ encore_entry_link_tags('app') }}
    {{ encore_entry_script_tags('app') }}

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
                        <img src=\"{{asset('uploads/' ~ app.user.file) }}\" class=\"user-img\" alt=\"user avatar\">
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
