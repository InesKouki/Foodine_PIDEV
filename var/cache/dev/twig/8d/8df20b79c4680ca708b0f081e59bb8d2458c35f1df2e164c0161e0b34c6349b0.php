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

/* baseFront.html.twig */
class __TwigTemplate_144e92e59854d6d557f2ea686ddb4b7b51b54cce72cc0752184df880c0919370 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"zxx\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/bootstrap.min.css\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/animate.min.css\">
    <!-- Meanmenu CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/meanmenu.css\">
    <!-- Boxicons CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/boxicons.min.css\">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/flaticon.css\">
    <!-- Nice Select CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/nice-select.min.css\">
    <!-- Owl Carousel CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/owl.carousel.min.css\">
    <!-- Owl Carousel Default CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/owl.theme.default.min.css\">
    <!-- Odometer CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/odometer.min.css\">
    <!-- Magnific Popup CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/magnific-popup.min.css\">
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/style.css\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/responsive.css\">



        <title>
            Foodine | ";
        // line 35
        $this->displayBlock('title', $context, $blocks);
        // line 36
        echo "        </title>

    <link rel=\"icon\" type=\"image/png\" href=\"/Front/assets/img/icon.png\">
</head>

<body>

<!-- Start Preloader Area -->
<div class=\"preloader\">
    <div class=\"preloader\">
        <span></span>
        <span></span>
    </div>
</div>
<!-- End Preloader Area -->


<!-- Start Navbar Area -->
<div class=\"navbar-area\">
    <div class=\"main-responsive-nav\">
        <div class=\"container\">
            <div class=\"main-responsive-menu\">
                <div class=\"logo\">
                    <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">
                        <img src=\"/Front/assets/img/logo.png\" alt=\"image\">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"main-navbar\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-md navbar-light\">
                <a class=\"navbar-brand\" href=\"/\">
                    <img src=\"/Front/assets/img/logo.png\" alt=\"image\">
                </a>

                <div class=\"collapse navbar-collapse mean-menu\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                Catégories
                                <i class='bx bx-chevron-down'></i>
                            </a>

                            <ul class=\"dropdown-menu\">

                                <li class=\"nav-item\">
                                    <a href=\"/categorie\" class=\"nav-link\">
                                        Pizza
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"/categorie\" class=\"nav-link\">
                                        Sandwich
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"/categorie\" class=\"nav-link\">
                                        Burger
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"/categorie\" class=\"nav-link\">
                                        Plats
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"/categorie\" class=\"nav-link\">
                                        Salade
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"/evenements\" class=\"nav-link\">
                                Evénements
                            </a>

                        </li>

                        <li class=\"nav-item\">
                            <a href=\"/reservation\" class=\"nav-link\">
                                Réservation
                            </a>

                        </li>

                        <li class=\"nav-item\">
                            <a href=\"/recette\" class=\"nav-link\">
                                Recettes
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team");
        echo "\" class=\"nav-link\">
                                Team
                            </a>
                        </li>
                        ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142)) {
            // line 143
            echo "                        <li class=\"nav-item\">
                            <a href=\"";
            // line 144
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rec");
            echo "\" class=\"nav-link\">
                                Contact
                            </a>
                        </li>
                        ";
        }
        // line 149
        echo "
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                Compte
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            ";
        // line 155
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155)) {
            // line 156
            echo "                            <ul class=\"dropdown-menu\">

                                <li class=\"nav-item\">
                                    <a href=\"";
            // line 159
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"nav-link\">
                                        Se connecter
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
            // line 164
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"nav-link\">
                                        S'inscrire
                                    </a>
                                </li>
                            </ul>
                            ";
        } else {
            // line 170
            echo "                            <ul class=\"dropdown-menu\">

                                <li class=\"nav-item\">
                                    <a href=";
            // line 173
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_profil");
            echo " class=\"nav-link\">
                                        Profile
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"/logout\" class=\"nav-link\">
                                       Déconnexion
                                    </a>
                                </li>



                            </ul>
                            ";
        }
        // line 187
        echo "
                        </li>

                ";
        // line 190
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 191
            echo "                        <li class=\"nav-item\">
                            <a href=\"";
            // line 192
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"nav-link\">
                                Admin_Dashboard
                            </a>

                        </li>
                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CHEF")) {
            // line 198
            echo "                        <li class=\"nav-item\">
                            <a href=\"";
            // line 199
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_index");
            echo "\" class=\"nav-link\">
                                Chef_Dashboard
                            </a>

                        </li>
                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) {
            // line 205
            echo "                        <li class=\"nav-item\">
                            <a href=\"";
            // line 206
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livreur_index");
            echo "\" class=\"nav-link\">
                                Livreur_Dashboard
                            </a>

                        </li>
                        ";
        }
        // line 212
        echo "
                    </ul>

                    <div class=\"others-options d-flex align-items-center\">
                        <div class=\"option-item\">
                            <div class=\"cart-btn\">
                                <a href=\"cart.html\">
                                    <i class='flaticon-shopping-cart'></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>



                        <div class=\"option-item\">
                            <div class=\"burger-menu\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class=\"others-option-for-responsive\">
        <div class=\"container\">
            <div class=\"dot-menu\">
                <div class=\"inner\">
                    <div class=\"circle circle-one\"></div>
                    <div class=\"circle circle-two\"></div>
                    <div class=\"circle circle-three\"></div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"option-inner\">
                    <div class=\"others-options d-flex align-items-center\">


                        <div class=\"option-item\">
                            <div class=\"cart-btn\">
                                <a href=\"cart.html\">
                                    <i class='flaticon-shopping-cart'></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->



<!-- Start Main Banner Area -->
";
        // line 276
        $this->displayBlock('content', $context, $blocks);
        // line 279
        echo "<!-- End Main Banner Area -->

<!-- Start Footer Area -->
<div class=\"footer-area pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <div class=\"logo\">
                        <h2>
                            <a href=\"";
        // line 289
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Foodine</a>
                        </h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <ul class=\"social\">
                        <li>
                            <a href=\"#\" class=\"facebook\" target=\"_blank\">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"twitter\" target=\"_blank\">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"pinterest\" target=\"_blank\">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"linkedin\" target=\"_blank\">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h3>Instagram</h3>

                    <ul class=\"instagram-list\">
                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram1.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram2.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram3.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram4.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram5.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram6.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram7.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram8.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram1.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget pl-5\">
                    <h3>Liens Rapides</h3>

                    <ul class=\"quick-links\">
                        <li>
                            <a href=\"";
        // line 405
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team");
        echo "\">Equipe</a>
                        </li>
                        <li>
                            <a href=\"#\">Shop</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 411
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rec");
        echo "\">Contact</a>
                        </li>
                        <li>
                            <a href=\"#\">Reservation</a>
                        </li>
                        <li>
                            <a href=\"#\">Evenements</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h3>Contact </h3>

                    <ul class=\"footer-contact-info\">
                        <li>
                            <i class='bx bxs-phone'></i>
                            <span>Phone</span>
                            <a href=\"#\">+216 70100100</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>Email</span>
                            <a href=\"#\">contact@foodine.com</a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            <span>Address</span>
                            01 Rue des Oranges ,Tunis
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class=\"copyright-area\">
    <div class=\"container\">
        <div class=\"copyright-area-content\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-6\">
                    <p>
                        <i class=\"far fa-copyright\"></i>
                        Copyright @2022 Foodine
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class=\"go-top\">
    <i class='bx bx-up-arrow-alt'></i>
</div>
<!-- End Go Top Area -->

<!-- Start QuickView Modal Area -->
<div class=\"modal fade productsQuickView\" id=\"productsQuickView\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\"><i class=\"flaticon-cancel\"></i></span>
            </button>

            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"products-image\"></div>
                </div>

                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"product-content\">
                        <h3>Seasoned Tomatoes</h3>
                        <div class=\"price\">
                            <span class=\"new-price\">\$541.00</span>
                            <span class=\"old-price\">\$652.00</span>
                        </div>
                        <div class=\"product-review\">
                            <div class=\"rating\">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href=\"#\" class=\"rating-count\">5 reviews</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et.</p>
                        <div class=\"product-add-to-cart\">
                            <div class=\"input-counter\">
                                        <span class=\"minus-btn\">
                                            <i class='bx bx-minus'></i>
                                        </span>
                                <input type=\"text\" value=\"1\">
                                <span class=\"plus-btn\">
                                            <i class='bx bx-plus'></i>
                                        </span>
                            </div>
                            <button type=\"submit\" class=\"default-btn\">
                                Add to cart
                            </button>
                        </div>

                        <div class=\"buy-checkbox-btn\">
                            <div class=\"item\">
                                <input class=\"inp-cbx\" id=\"cbx\" type=\"checkbox\">
                                <label class=\"cbx\" for=\"cbx\">
                                            <span>
                                                <svg width=\"12px\" height=\"10px\" viewbox=\"0 0 12 10\">
                                                    <polyline points=\"1.5 6 4.5 9 10.5 1\"></polyline>
                                                </svg>
                                            </span>
                                    <span>I agree with the terms and conditions</span>
                                </label>
                            </div>
                            <div class=\"item\">
                                <a href=\"#\" class=\"btn btn-light\">Buy it now!</a>
                            </div>
                        </div>

                        <div class=\"products-share\">
                            <ul class=\"social\">
                                <li><span>Share:</span></li>
                                <li>
                                    <a href=\"#\" class=\"facebook\" target=\"_blank\"><i class='bx bxl-facebook'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"twitter\" target=\"_blank\"><i class='bx bxl-twitter'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"linkedin\" target=\"_blank\"><i class='bx bxl-linkedin'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"instagram\" target=\"_blank\"><i class='bx bxl-instagram'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End QuickView Modal Area -->
<!-- Jquery Slim JS -->
<script src=\"/Front/assets/js/jquery.min.js\"></script>
<!-- Popper JS -->
<script src=\"/Front/assets/js/popper.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"/Front/assets/js/bootstrap.min.js\"></script>
<!-- Meanmenu JS -->
<script src=\"/Front/assets/js/jquery.meanmenu.js\"></script>
<!-- Nice Select JS -->
<script src=\"/Front/assets/js/jquery.nice-select.min.js\"></script>
<!-- Owl Carousel JS -->
<script src=\"/Front/assets/js/owl.carousel.min.js\"></script>
<!-- Magnific Popup JS -->
<script src=\"/Front/assets/js/jquery.magnific-popup.min.js\"></script>
<!-- Odometer JS -->
<script src=\"/Front/assets/js/odometer.min.js\"></script>
<!-- Jquery Appear JS -->
<script src=\"/Front/assets/js/jquery.appear.min.js\"></script>
<!-- Ajaxchimp JS -->
<script src=\"/Front/assets/js/jquery.ajaxchimp.min.js\"></script>
<!-- Form Validator JS -->
<script src=\"/Front/assets/js/form-validator.min.js\"></script>
<!-- Contact JS -->
<script src=\"/Front/assets/js/contact-form-script.js\"></script>
<!-- Wow JS -->
<script src=\"/Front/assets/js/wow.min.js\"></script>
<!-- Custom JS -->
<script src=\"/Front/assets/js/main.js\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
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

    // line 276
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 277
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  734 => 277,  724 => 276,  706 => 35,  515 => 411,  506 => 405,  387 => 289,  375 => 279,  373 => 276,  307 => 212,  298 => 206,  295 => 205,  286 => 199,  283 => 198,  274 => 192,  271 => 191,  269 => 190,  264 => 187,  247 => 173,  242 => 170,  233 => 164,  225 => 159,  220 => 156,  218 => 155,  210 => 149,  202 => 144,  199 => 143,  197 => 142,  190 => 138,  108 => 59,  83 => 36,  81 => 35,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"zxx\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/bootstrap.min.css\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/animate.min.css\">
    <!-- Meanmenu CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/meanmenu.css\">
    <!-- Boxicons CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/boxicons.min.css\">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/flaticon.css\">
    <!-- Nice Select CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/nice-select.min.css\">
    <!-- Owl Carousel CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/owl.carousel.min.css\">
    <!-- Owl Carousel Default CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/owl.theme.default.min.css\">
    <!-- Odometer CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/odometer.min.css\">
    <!-- Magnific Popup CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/magnific-popup.min.css\">
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/style.css\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"/Front/assets/css/responsive.css\">



        <title>
            Foodine | {% block title %}{% endblock %}
        </title>

    <link rel=\"icon\" type=\"image/png\" href=\"/Front/assets/img/icon.png\">
</head>

<body>

<!-- Start Preloader Area -->
<div class=\"preloader\">
    <div class=\"preloader\">
        <span></span>
        <span></span>
    </div>
</div>
<!-- End Preloader Area -->


<!-- Start Navbar Area -->
<div class=\"navbar-area\">
    <div class=\"main-responsive-nav\">
        <div class=\"container\">
            <div class=\"main-responsive-menu\">
                <div class=\"logo\">
                    <a href=\"{{ path('front') }}\">
                        <img src=\"/Front/assets/img/logo.png\" alt=\"image\">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"main-navbar\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-md navbar-light\">
                <a class=\"navbar-brand\" href=\"/\">
                    <img src=\"/Front/assets/img/logo.png\" alt=\"image\">
                </a>

                <div class=\"collapse navbar-collapse mean-menu\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                Catégories
                                <i class='bx bx-chevron-down'></i>
                            </a>

                            <ul class=\"dropdown-menu\">

                                <li class=\"nav-item\">
                                    <a href=\"/categorie\" class=\"nav-link\">
                                        Pizza
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"/categorie\" class=\"nav-link\">
                                        Sandwich
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"/categorie\" class=\"nav-link\">
                                        Burger
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"/categorie\" class=\"nav-link\">
                                        Plats
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"/categorie\" class=\"nav-link\">
                                        Salade
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"/evenements\" class=\"nav-link\">
                                Evénements
                            </a>

                        </li>

                        <li class=\"nav-item\">
                            <a href=\"/reservation\" class=\"nav-link\">
                                Réservation
                            </a>

                        </li>

                        <li class=\"nav-item\">
                            <a href=\"/recette\" class=\"nav-link\">
                                Recettes
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"{{ path('team') }}\" class=\"nav-link\">
                                Team
                            </a>
                        </li>
                        {% if app.user %}
                        <li class=\"nav-item\">
                            <a href=\"{{ path('add_rec') }}\" class=\"nav-link\">
                                Contact
                            </a>
                        </li>
                        {% endif %}

                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                Compte
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            {% if not app.user %}
                            <ul class=\"dropdown-menu\">

                                <li class=\"nav-item\">
                                    <a href=\"{{ path('login')}}\" class=\"nav-link\">
                                        Se connecter
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('registration')}}\" class=\"nav-link\">
                                        S'inscrire
                                    </a>
                                </li>
                            </ul>
                            {% else %}
                            <ul class=\"dropdown-menu\">

                                <li class=\"nav-item\">
                                    <a href={{ path('client_profil') }} class=\"nav-link\">
                                        Profile
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"/logout\" class=\"nav-link\">
                                       Déconnexion
                                    </a>
                                </li>



                            </ul>
                            {% endif %}

                        </li>

                {% if is_granted(\"ROLE_ADMIN\") %}
                        <li class=\"nav-item\">
                            <a href=\"{{ path('admin') }}\" class=\"nav-link\">
                                Admin_Dashboard
                            </a>

                        </li>
                    {% elseif is_granted(\"ROLE_CHEF\")%}
                        <li class=\"nav-item\">
                            <a href=\"{{ path('chef_index') }}\" class=\"nav-link\">
                                Chef_Dashboard
                            </a>

                        </li>
                    {% elseif is_granted(\"ROLE_LIVREUR\")%}
                        <li class=\"nav-item\">
                            <a href=\"{{ path('livreur_index') }}\" class=\"nav-link\">
                                Livreur_Dashboard
                            </a>

                        </li>
                        {% endif %}

                    </ul>

                    <div class=\"others-options d-flex align-items-center\">
                        <div class=\"option-item\">
                            <div class=\"cart-btn\">
                                <a href=\"cart.html\">
                                    <i class='flaticon-shopping-cart'></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>



                        <div class=\"option-item\">
                            <div class=\"burger-menu\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class=\"others-option-for-responsive\">
        <div class=\"container\">
            <div class=\"dot-menu\">
                <div class=\"inner\">
                    <div class=\"circle circle-one\"></div>
                    <div class=\"circle circle-two\"></div>
                    <div class=\"circle circle-three\"></div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"option-inner\">
                    <div class=\"others-options d-flex align-items-center\">


                        <div class=\"option-item\">
                            <div class=\"cart-btn\">
                                <a href=\"cart.html\">
                                    <i class='flaticon-shopping-cart'></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->



<!-- Start Main Banner Area -->
{% block content %}

{% endblock  %}
<!-- End Main Banner Area -->

<!-- Start Footer Area -->
<div class=\"footer-area pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <div class=\"logo\">
                        <h2>
                            <a href=\"{{ path('front') }}\">Foodine</a>
                        </h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <ul class=\"social\">
                        <li>
                            <a href=\"#\" class=\"facebook\" target=\"_blank\">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"twitter\" target=\"_blank\">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"pinterest\" target=\"_blank\">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"linkedin\" target=\"_blank\">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h3>Instagram</h3>

                    <ul class=\"instagram-list\">
                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram1.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram2.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram3.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram4.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram5.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram6.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram7.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram8.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"/Front/assets/img/instagram/instagram1.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget pl-5\">
                    <h3>Liens Rapides</h3>

                    <ul class=\"quick-links\">
                        <li>
                            <a href=\"{{path('team')}}\">Equipe</a>
                        </li>
                        <li>
                            <a href=\"#\">Shop</a>
                        </li>
                        <li>
                            <a href=\"{{path('add_rec')}}\">Contact</a>
                        </li>
                        <li>
                            <a href=\"#\">Reservation</a>
                        </li>
                        <li>
                            <a href=\"#\">Evenements</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h3>Contact </h3>

                    <ul class=\"footer-contact-info\">
                        <li>
                            <i class='bx bxs-phone'></i>
                            <span>Phone</span>
                            <a href=\"#\">+216 70100100</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>Email</span>
                            <a href=\"#\">contact@foodine.com</a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            <span>Address</span>
                            01 Rue des Oranges ,Tunis
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class=\"copyright-area\">
    <div class=\"container\">
        <div class=\"copyright-area-content\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-6\">
                    <p>
                        <i class=\"far fa-copyright\"></i>
                        Copyright @2022 Foodine
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class=\"go-top\">
    <i class='bx bx-up-arrow-alt'></i>
</div>
<!-- End Go Top Area -->

<!-- Start QuickView Modal Area -->
<div class=\"modal fade productsQuickView\" id=\"productsQuickView\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\"><i class=\"flaticon-cancel\"></i></span>
            </button>

            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"products-image\"></div>
                </div>

                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"product-content\">
                        <h3>Seasoned Tomatoes</h3>
                        <div class=\"price\">
                            <span class=\"new-price\">\$541.00</span>
                            <span class=\"old-price\">\$652.00</span>
                        </div>
                        <div class=\"product-review\">
                            <div class=\"rating\">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href=\"#\" class=\"rating-count\">5 reviews</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et.</p>
                        <div class=\"product-add-to-cart\">
                            <div class=\"input-counter\">
                                        <span class=\"minus-btn\">
                                            <i class='bx bx-minus'></i>
                                        </span>
                                <input type=\"text\" value=\"1\">
                                <span class=\"plus-btn\">
                                            <i class='bx bx-plus'></i>
                                        </span>
                            </div>
                            <button type=\"submit\" class=\"default-btn\">
                                Add to cart
                            </button>
                        </div>

                        <div class=\"buy-checkbox-btn\">
                            <div class=\"item\">
                                <input class=\"inp-cbx\" id=\"cbx\" type=\"checkbox\">
                                <label class=\"cbx\" for=\"cbx\">
                                            <span>
                                                <svg width=\"12px\" height=\"10px\" viewbox=\"0 0 12 10\">
                                                    <polyline points=\"1.5 6 4.5 9 10.5 1\"></polyline>
                                                </svg>
                                            </span>
                                    <span>I agree with the terms and conditions</span>
                                </label>
                            </div>
                            <div class=\"item\">
                                <a href=\"#\" class=\"btn btn-light\">Buy it now!</a>
                            </div>
                        </div>

                        <div class=\"products-share\">
                            <ul class=\"social\">
                                <li><span>Share:</span></li>
                                <li>
                                    <a href=\"#\" class=\"facebook\" target=\"_blank\"><i class='bx bxl-facebook'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"twitter\" target=\"_blank\"><i class='bx bxl-twitter'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"linkedin\" target=\"_blank\"><i class='bx bxl-linkedin'></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"instagram\" target=\"_blank\"><i class='bx bxl-instagram'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End QuickView Modal Area -->
<!-- Jquery Slim JS -->
<script src=\"/Front/assets/js/jquery.min.js\"></script>
<!-- Popper JS -->
<script src=\"/Front/assets/js/popper.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"/Front/assets/js/bootstrap.min.js\"></script>
<!-- Meanmenu JS -->
<script src=\"/Front/assets/js/jquery.meanmenu.js\"></script>
<!-- Nice Select JS -->
<script src=\"/Front/assets/js/jquery.nice-select.min.js\"></script>
<!-- Owl Carousel JS -->
<script src=\"/Front/assets/js/owl.carousel.min.js\"></script>
<!-- Magnific Popup JS -->
<script src=\"/Front/assets/js/jquery.magnific-popup.min.js\"></script>
<!-- Odometer JS -->
<script src=\"/Front/assets/js/odometer.min.js\"></script>
<!-- Jquery Appear JS -->
<script src=\"/Front/assets/js/jquery.appear.min.js\"></script>
<!-- Ajaxchimp JS -->
<script src=\"/Front/assets/js/jquery.ajaxchimp.min.js\"></script>
<!-- Form Validator JS -->
<script src=\"/Front/assets/js/form-validator.min.js\"></script>
<!-- Contact JS -->
<script src=\"/Front/assets/js/contact-form-script.js\"></script>
<!-- Wow JS -->
<script src=\"/Front/assets/js/wow.min.js\"></script>
<!-- Custom JS -->
<script src=\"/Front/assets/js/main.js\"></script>
</body>
</html>", "baseFront.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\baseFront.html.twig");
    }
}
