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

/* /back/homeBack.html.twig */
class __TwigTemplate_8f343b57e5d047c04021c289c8afed2c7b5b1066a1951a9fbf875c9aef0eac47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'notif' => [$this, 'block_notif'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/back/homeBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/back/homeBack.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "/back/homeBack.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Dashboard
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_notif($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        // line 6
        echo "    <div class=\"top-menu ms-auto\">
        <ul class=\"navbar-nav align-items-center\">
            <li class=\"nav-item dropdown dropdown-large\">
                <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret position-relative\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"  >
                   <div  >
                    <span class=\"alert-count \" id=\"count\">
                    ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["nbNotif"]) || array_key_exists("nbNotif", $context) ? $context["nbNotif"] : (function () { throw new RuntimeError('Variable "nbNotif" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "
                    </span>
                    <i class='bx bx-bell'></i>
                   </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end\">
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_readNotif");
        echo "\" >
                        <div class=\"msg-header\">
                            <p class=\"msg-header-title\">Notifications</p>
                            <p class=\"msg-header-clear ms-auto\">Marks all as read</p>
                        </div>
                    </a>

                        <div class=\"header-notifications-list\" id=\"notification_button\" id=\"notification\">
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["notif"]);
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 27
            echo "                            <a class=\"dropdown-item\" href=\"#\" >

                                <div class=\"d-flex align-items-center\">
                                    <div class=\"notify\"><i class='bx bx-user-pin'></i>
                                    </div>

                                    <div class=\"flex-grow-1\" >
                                        <h6 class=\"msg-name\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "Titre", [], "any", false, false, false, 34), "html", null, true);
            echo "<span class=\"msg-time float-end\">
                                                ";
            // line 35
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["notif"], "Status", [], "any", false, false, false, 35), 1))) {
                // line 36
                echo "                                               Seen
                                                ";
            } else {
                // line 38
                echo "                                                    Unseen
                                                    ";
            }
            // line 40
            echo "                                            </span></h6>
                                        <p class=\"msg-info\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "Message", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                                    </div>

                                </div>

                            </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </div>

                    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_showNotif");
        echo "\">
                        <div class=\"text-center msg-footer\">View All Notifications</div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 59
        echo "
    <!--start page wrapper -->
    <div class=\"page-wrapper\">

        <div class=\"page-content\">

            <div class=\"row row-cols-1 row-cols-lg-2 row-cols-xl-4\">
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Commandes Totales</p>
                                    <h5 class=\"mb-0 text-white\">867</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-cart font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart1\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Revenu Total</p>
                                    <h5 class=\"mb-0 text-white\">\$52,945</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-wallet font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart2\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Nombre Clients Total</p>

                                    <h5 class=\"mb-0 text-white\"> ";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "</h5>

                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-group font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart3\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Feed-Backs</p>
                                    <h5 class=\"mb-0 text-white\">";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["revCount"]) || array_key_exists("revCount", $context) ? $context["revCount"] : (function () { throw new RuntimeError('Variable "revCount" does not exist.', 119, $this->source); })()), "html", null, true);
        echo "</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-chat font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart4\"></div>
                    </div>
                </div>
            </div><!--end row-->






            <div class=\"row\">
                <div class=\"col-12 col-xl-8 d-flex\">
                    <div class=\"card radius-10 w-100\">
                        <div class=\"card-body\">
                            ";
        // line 139
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 139, $this->source); })()));
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-xl-4 d-flex\">
                    <div class=\"card radius-10 w-100 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <h5 class=\"mb-0\">Métriques du restaurant</h5>
                                </div>
                                <div class=\"font-22 ms-auto\"><i class='bx bx-dots-horizontal-rounded'></i>
                                </div>
                            </div>
                        </div>

                        <div class=\"store-metrics p-3 mb-3\">

                            <div class=\"card mt-3 radius-10 bg-transparent border shadow-none\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <p class=\"mb-0\">Produits totaux</p>
                                            <h4 class=\"mb-0\">856</h4>
                                        </div>
                                        <div class=\"widgets-icons ms-auto\"><i class='bx bxs-shopping-bag'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card radius-10 border bg-transparent  shadow-none\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <p class=\"mb-0\">Cliens totaux</p>
                                            <h4 class=\"mb-0\">";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "</h4>
                                        </div>
                                        <div class=\"widgets-icons ms-auto\"><i class='bx bxs-group'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card radius-10 border bg-transparent  shadow-none\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <p class=\"mb-0\">Categories totales</p>
                                            <h4 class=\"mb-0\">98</h4>
                                        </div>
                                        <div class=\"widgets-icons ms-auto\"><i class='bx bxs-category'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card radius-10 border bg-transparent  shadow-none\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <p class=\"mb-0\">Commandes totales</p>
                                            <h4 class=\"mb-0\">124</h4>
                                        </div>
                                        <div class=\"widgets-icons ms-auto\"><i class='bx bxs-cart-add'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card radius-10 border bg-transparent  shadow-none mb-0\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <p class=\"mb-0\">Employés totaux</p>
                                            <h4 class=\"mb-0\">";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["ntot"]) || array_key_exists("ntot", $context) ? $context["ntot"] : (function () { throw new RuntimeError('Variable "ntot" does not exist.', 210, $this->source); })()), "html", null, true);
        echo "</h4>
                                        </div>
                                        <div class=\"widgets-icons ms-auto\"><i class='bx bxs-user-account'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6 col-xl-8 d-flex\">
                    <div class=\"card radius-10 w-100\">
                        <div class=\"card-header border-bottom\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <h6 class=\"mb-0\">Feed-Back des clients</h6>
                                </div>
                                <div class=\"font-22 ms-auto text-white\"><i class=\"bx bx-dots-horizontal-rounded\"></i>
                                </div>
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["rev"]);
        foreach ($context['_seq'] as $context["_key"] => $context["rev"]) {
            // line 233
            echo "                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"/back/assets/images/avatars/avatar-1.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rev"], "userName", [], "any", false, false, false, 237), "html", null, true);
            echo " <small class=\"ms-4\"></small></h6>
                                        <p class=\"mb-0 small-font\">";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rev"], "Description", [], "any", false, false, false, 238), "html", null, true);
            echo "</p>
                                    </div>
                                      ";
            // line 240
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rev"], "Stars", [], "any", false, false, false, 240), 1))) {
                // line 241
                echo "                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                          ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 248
$context["rev"], "Stars", [], "any", false, false, false, 248), 2))) {
                // line 249
                echo "                                              <div class=\"ms-auto star\">
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-light-4'></i>
                                                  <i class='bx bxs-star text-light-4'></i>
                                                  <i class='bx bxs-star text-light-4'></i>
                                              </div>
                                              ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 256
$context["rev"], "Stars", [], "any", false, false, false, 256), 3))) {
                // line 257
                echo "                                                  <div class=\"ms-auto star\">
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-light-4'></i>
                                                      <i class='bx bxs-star text-light-4'></i>
                                                  </div>

                                          ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 265
$context["rev"], "Stars", [], "any", false, false, false, 265), 4))) {
                // line 266
                echo "                                              <div class=\"ms-auto star\">
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-light-4'></i>
                                              </div>
                                              ";
            } else {
                // line 274
                echo "                                                  <div class=\"ms-auto star\">
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>

                                                  </div>

                                    ";
            }
            // line 284
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_deleteReview", ["id" => twig_get_attribute($this->env, $this->source, $context["rev"], "id", [], "any", false, false, false, 284)]), "html", null, true);
            echo "\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                </div>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div><!--end row-->
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card radius-10\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <h5 class=\"mb-1\">Dernières commandes</h5>
                            </div>
                            <div class=\"ms-auto\">
                                <a href=\"javscript:;\" class=\"btn btn-light btn-sm radius-30\">Voir toutes les commandes</a>
                            </div>
                        </div>

                        <div class=\"table-responsive mt-3\">
                            <table class=\"table align-middle mb-0\">
                                <thead class=\"table-light\">
                                <tr>


                                    <th>Date</th>
                                    <th>Etat</th>
                                    <th>Somme</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">
                                            <a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Cancelled</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Pending</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Pending</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Cancelled</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--end row-->


    </div>
    </div>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script>
   \$(document).ready(function(){
       \$('#notification_button').click(function(){
           jQuery.ajax({
               url :'";
        // line 425
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_readNotif");
        echo "',
               success:function(){
                   \$('#notification').fadeToggle('fast','linear');
                   \$('#count').fadeOut('slow');
               }

           });
           return false

       });
       \$(document).click(function(){
           \$('#count').hide();
       });
   });
    </script>

    <!--end page wrapper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/back/homeBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 425,  472 => 288,  461 => 284,  449 => 274,  439 => 266,  437 => 265,  427 => 257,  425 => 256,  416 => 249,  414 => 248,  405 => 241,  403 => 240,  398 => 238,  394 => 237,  388 => 233,  384 => 232,  359 => 210,  320 => 174,  282 => 139,  259 => 119,  240 => 103,  194 => 59,  184 => 58,  166 => 50,  162 => 48,  149 => 41,  146 => 40,  142 => 38,  138 => 36,  136 => 35,  132 => 34,  123 => 27,  119 => 26,  108 => 18,  99 => 12,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
    Dashboard
{% endblock %}
{% block notif %}
    <div class=\"top-menu ms-auto\">
        <ul class=\"navbar-nav align-items-center\">
            <li class=\"nav-item dropdown dropdown-large\">
                <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret position-relative\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"  >
                   <div  >
                    <span class=\"alert-count \" id=\"count\">
                    {{ nbNotif }}
                    </span>
                    <i class='bx bx-bell'></i>
                   </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end\">
                    <a href=\"{{path('admin_readNotif')}}\" >
                        <div class=\"msg-header\">
                            <p class=\"msg-header-title\">Notifications</p>
                            <p class=\"msg-header-clear ms-auto\">Marks all as read</p>
                        </div>
                    </a>

                        <div class=\"header-notifications-list\" id=\"notification_button\" id=\"notification\">
                            {% for notif in notif %}
                            <a class=\"dropdown-item\" href=\"#\" >

                                <div class=\"d-flex align-items-center\">
                                    <div class=\"notify\"><i class='bx bx-user-pin'></i>
                                    </div>

                                    <div class=\"flex-grow-1\" >
                                        <h6 class=\"msg-name\">{{ notif.Titre }}<span class=\"msg-time float-end\">
                                                {% if notif.Status==1 %}
                                               Seen
                                                {% else %}
                                                    Unseen
                                                    {% endif %}
                                            </span></h6>
                                        <p class=\"msg-info\">{{ notif.Message }}</p>
                                    </div>

                                </div>

                            </a>
                            {% endfor %}
                        </div>

                    <a href=\"{{path('admin_showNotif')}}\">
                        <div class=\"text-center msg-footer\">View All Notifications</div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
{% endblock %}
{% block content %}

    <!--start page wrapper -->
    <div class=\"page-wrapper\">

        <div class=\"page-content\">

            <div class=\"row row-cols-1 row-cols-lg-2 row-cols-xl-4\">
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Commandes Totales</p>
                                    <h5 class=\"mb-0 text-white\">867</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-cart font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart1\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Revenu Total</p>
                                    <h5 class=\"mb-0 text-white\">\$52,945</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-wallet font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart2\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Nombre Clients Total</p>

                                    <h5 class=\"mb-0 text-white\"> {{ n }}</h5>

                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-group font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart3\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Feed-Backs</p>
                                    <h5 class=\"mb-0 text-white\">{{ revCount }}</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-chat font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart4\"></div>
                    </div>
                </div>
            </div><!--end row-->






            <div class=\"row\">
                <div class=\"col-12 col-xl-8 d-flex\">
                    <div class=\"card radius-10 w-100\">
                        <div class=\"card-body\">
                            {{ render_chart(chart) }}
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-xl-4 d-flex\">
                    <div class=\"card radius-10 w-100 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <h5 class=\"mb-0\">Métriques du restaurant</h5>
                                </div>
                                <div class=\"font-22 ms-auto\"><i class='bx bx-dots-horizontal-rounded'></i>
                                </div>
                            </div>
                        </div>

                        <div class=\"store-metrics p-3 mb-3\">

                            <div class=\"card mt-3 radius-10 bg-transparent border shadow-none\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <p class=\"mb-0\">Produits totaux</p>
                                            <h4 class=\"mb-0\">856</h4>
                                        </div>
                                        <div class=\"widgets-icons ms-auto\"><i class='bx bxs-shopping-bag'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card radius-10 border bg-transparent  shadow-none\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <p class=\"mb-0\">Cliens totaux</p>
                                            <h4 class=\"mb-0\">{{ n }}</h4>
                                        </div>
                                        <div class=\"widgets-icons ms-auto\"><i class='bx bxs-group'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card radius-10 border bg-transparent  shadow-none\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <p class=\"mb-0\">Categories totales</p>
                                            <h4 class=\"mb-0\">98</h4>
                                        </div>
                                        <div class=\"widgets-icons ms-auto\"><i class='bx bxs-category'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card radius-10 border bg-transparent  shadow-none\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <p class=\"mb-0\">Commandes totales</p>
                                            <h4 class=\"mb-0\">124</h4>
                                        </div>
                                        <div class=\"widgets-icons ms-auto\"><i class='bx bxs-cart-add'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card radius-10 border bg-transparent  shadow-none mb-0\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <p class=\"mb-0\">Employés totaux</p>
                                            <h4 class=\"mb-0\">{{ ntot }}</h4>
                                        </div>
                                        <div class=\"widgets-icons ms-auto\"><i class='bx bxs-user-account'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6 col-xl-8 d-flex\">
                    <div class=\"card radius-10 w-100\">
                        <div class=\"card-header border-bottom\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <h6 class=\"mb-0\">Feed-Back des clients</h6>
                                </div>
                                <div class=\"font-22 ms-auto text-white\"><i class=\"bx bx-dots-horizontal-rounded\"></i>
                                </div>
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            {% for rev in rev %}
                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"/back/assets/images/avatars/avatar-1.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">{{  rev.userName }} <small class=\"ms-4\"></small></h6>
                                        <p class=\"mb-0 small-font\">{{ rev.Description }}</p>
                                    </div>
                                      {% if rev.Stars==1 %}
                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                          {% elseif rev.Stars==2 %}
                                              <div class=\"ms-auto star\">
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-light-4'></i>
                                                  <i class='bx bxs-star text-light-4'></i>
                                                  <i class='bx bxs-star text-light-4'></i>
                                              </div>
                                              {% elseif rev.Stars==3 %}
                                                  <div class=\"ms-auto star\">
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-light-4'></i>
                                                      <i class='bx bxs-star text-light-4'></i>
                                                  </div>

                                          {% elseif rev.Stars==4 %}
                                              <div class=\"ms-auto star\">
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-white'></i>
                                                  <i class='bx bxs-star text-light-4'></i>
                                              </div>
                                              {% else %}
                                                  <div class=\"ms-auto star\">
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>
                                                      <i class='bx bxs-star text-white'></i>

                                                  </div>

                                    {% endif %}
                                    <a href=\"{{ path('admin_deleteReview',{'id':rev.id}) }}\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                </div>

                                {% endfor%}
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div><!--end row-->
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card radius-10\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <h5 class=\"mb-1\">Dernières commandes</h5>
                            </div>
                            <div class=\"ms-auto\">
                                <a href=\"javscript:;\" class=\"btn btn-light btn-sm radius-30\">Voir toutes les commandes</a>
                            </div>
                        </div>

                        <div class=\"table-responsive mt-3\">
                            <table class=\"table align-middle mb-0\">
                                <thead class=\"table-light\">
                                <tr>


                                    <th>Date</th>
                                    <th>Etat</th>
                                    <th>Somme</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">
                                            <a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Cancelled</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Pending</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Pending</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Cancelled</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--end row-->


    </div>
    </div>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script>
   \$(document).ready(function(){
       \$('#notification_button').click(function(){
           jQuery.ajax({
               url :'{{ path('admin_readNotif') }}',
               success:function(){
                   \$('#notification').fadeToggle('fast','linear');
                   \$('#count').fadeOut('slow');
               }

           });
           return false

       });
       \$(document).click(function(){
           \$('#count').hide();
       });
   });
    </script>

    <!--end page wrapper -->
{% endblock %}
", "/back/homeBack.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\homeBack.html.twig");
    }
}
