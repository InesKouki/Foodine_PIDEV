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
class __TwigTemplate_c297edfe8b2e4f7e179bca01bb664da4bda6e70d12125fda339062b0c439840f extends Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/animate.min.css\">
    <!-- Meanmenu CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/meanmenu.css\">
    <!-- Boxicons CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/boxicons.min.css\">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/flaticon.css\">
    <!-- Nice Select CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/nice-select.min.css\">
    <!-- Owl Carousel CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/owl.carousel.min.css\">
    <!-- Owl Carousel Default CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/owl.theme.default.min.css\">
    <!-- Odometer CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/odometer.min.css\">
    <!-- Magnific Popup CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/magnific-popup.min.css\">
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/css/style.css"), "html", null, true);
        echo "\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/responsive.css\">

        <title>
            Foodine | ";
        // line 33
        $this->displayBlock('title', $context, $blocks);
        // line 34
        echo "        </title>

    <link rel=\"icon\" type=\"image/png\" href=\"Front/assets/img/icon.png\">
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
                    <a href=\"/\">
                        <img src=\"Front/assets/img/logo.png\" alt=\"image\">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"main-navbar\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-md navbar-light\">
                <a class=\"navbar-brand\" href=\"/\">
                    <img src=\"Front/assets/img/logo.png\" alt=\"image\">
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
                                Nos Deals
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
                            <a href=\"contact.html\" class=\"nav-link\">
                                About Us
                            </a>
                        </li>
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
                            <form class=\"search-box\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                <button type=\"submit\"><i class=\"flaticon-search\"></i></button>
                            </form>
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
                            <div class=\"languages-list\">
                                <select>
                                    <option value=\"1\">Eng</option>
                                    <option value=\"2\">Ger</option>
                                    <option value=\"3\">Span</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"option-item\">
                            <div class=\"cart-btn\">
                                <a href=\"cart.html\">
                                    <i class='flaticon-shopping-cart'></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>

                        <div class=\"option-item\">
                            <form class=\"search-box\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                <button type=\"submit\"><i class=\"flaticon-search\"></i></button>
                            </form>
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
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Sidebar Modal -->
<div class=\"sidebar-modal\">
    <div class=\"sidebar-modal-inner\">
        <div class=\"sidebar-about-area\">
            <div class=\"title\">
                <h2>About Us</h2>
                <p>We believe brand interaction is key in communication. Real innovations and a positive customer
                    experience are the heart of successful communication. No fake products and services. The customer is
                    king, their lives and needs are the inspiration.</p>
            </div>
        </div>

        <div class=\"sidebar-instagram-feed\">
            <h2>Instagram</h2>
            <ul>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram1.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram2.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram3.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram4.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram5.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram6.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram7.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram8.jpg\" alt=\"image\">
                    </a>
                </li>
            </ul>
        </div>

        <div class=\"sidebar-contact-area\">
            <div class=\"contact-info\">
                <div class=\"contact-info-content\">
                    <h2>
                        <a href=\"tel:+0881306298615\">
                            +088 130 629 8615
                        </a>
                        <span>OR</span>
                        <a href=\"mailto:orgo@gmail.com\">
                            orgo@gmail.com
                        </a>
                    </h2>

                    <ul class=\"social\">
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <span class=\"close-btn sidebar-modal-close-btn\">
                    <i class=\"flaticon-cancel\"></i>
                </span>
    </div>
</div>
<!-- End Sidebar Modal -->

<!-- Start Main Banner Area -->
";
        // line 341
        $this->displayBlock('content', $context, $blocks);
        // line 344
        echo "<!-- End Main Banner Area -->

<!-- Start Footer Area -->
<div class=\"footer-area pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <div class=\"logo\">
                        <h2>
                            <a href=\"index.html\">Orgo</a>
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
                                <img src=\"Front/assets/img/instagram/instagram1.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram2.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram3.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram4.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram5.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram6.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram7.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram8.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram1.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget pl-5\">
                    <h3>Quick Links</h3>

                    <ul class=\"quick-links\">
                        <li>
                            <a href=\"#\">About Us</a>
                        </li>
                        <li>
                            <a href=\"#\">Our Services</a>
                        </li>
                        <li>
                            <a href=\"#\">Shop</a>
                        </li>
                        <li>
                            <a href=\"#\">Blog</a>
                        </li>
                        <li>
                            <a href=\"#\">Faq</a>
                        </li>
                        <li>
                            <a href=\"#\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h3>Contact Us</h3>

                    <ul class=\"footer-contact-info\">
                        <li>
                            <i class='bx bxs-phone'></i>
                            <span>Phone</span>
                            <a href=\"tel:407409202288\">(+40) 74 0920 2288</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>Email</span>
                            <a href=\"mailto:hello@orgo.com\">hello@orgo.com</a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            <span>Address</span>
                            175 5th Ave Premium Area, New York, NY 10010, United States
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
<script src=\"Front/assets/js/jquery.min.js\"></script>
<!-- Popper JS -->
<script src=\"Front/assets/js/popper.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"Front/assets/js/bootstrap.min.js\"></script>
<!-- Meanmenu JS -->
<script src=\"Front/assets/js/jquery.meanmenu.js\"></script>
<!-- Nice Select JS -->
<script src=\"Front/assets/js/jquery.nice-select.min.js\"></script>
<!-- Owl Carousel JS -->
<script src=\"Front/assets/js/owl.carousel.min.js\"></script>
<!-- Magnific Popup JS -->
<script src=\"Front/assets/js/jquery.magnific-popup.min.js\"></script>
<!-- Odometer JS -->
<script src=\"Front/assets/js/odometer.min.js\"></script>
<!-- Jquery Appear JS -->
<script src=\"Front/assets/js/jquery.appear.min.js\"></script>
<!-- Ajaxchimp JS -->
<script src=\"Front/assets/js/jquery.ajaxchimp.min.js\"></script>
<!-- Form Validator JS -->
<script src=\"Front/assets/js/form-validator.min.js\"></script>
<!-- Contact JS -->
<script src=\"Front/assets/js/contact-form-script.js\"></script>
<!-- Wow JS -->
<script src=\"Front/assets/js/wow.min.js\"></script>
<!-- Custom JS -->
<script src=\"Front/assets/js/main.js\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
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

    // line 341
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 342
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
        return array (  752 => 342,  742 => 341,  724 => 33,  398 => 344,  396 => 341,  87 => 34,  85 => 33,  77 => 28,  54 => 8,  45 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('Front/assets/css/bootstrap.min.css') }}\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/animate.min.css\">
    <!-- Meanmenu CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/meanmenu.css\">
    <!-- Boxicons CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/boxicons.min.css\">
    <!-- Flaticon CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/flaticon.css\">
    <!-- Nice Select CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/nice-select.min.css\">
    <!-- Owl Carousel CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/owl.carousel.min.css\">
    <!-- Owl Carousel Default CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/owl.theme.default.min.css\">
    <!-- Odometer CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/odometer.min.css\">
    <!-- Magnific Popup CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/magnific-popup.min.css\">
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"{{asset(\"Front/assets/css/style.css\")}}\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"Front/assets/css/responsive.css\">

        <title>
            Foodine | {% block title %}{% endblock %}
        </title>

    <link rel=\"icon\" type=\"image/png\" href=\"Front/assets/img/icon.png\">
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
                    <a href=\"/\">
                        <img src=\"Front/assets/img/logo.png\" alt=\"image\">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"main-navbar\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-md navbar-light\">
                <a class=\"navbar-brand\" href=\"/\">
                    <img src=\"Front/assets/img/logo.png\" alt=\"image\">
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
                                Nos Deals
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
                            <a href=\"contact.html\" class=\"nav-link\">
                                About Us
                            </a>
                        </li>
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
                            <form class=\"search-box\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                <button type=\"submit\"><i class=\"flaticon-search\"></i></button>
                            </form>
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
                            <div class=\"languages-list\">
                                <select>
                                    <option value=\"1\">Eng</option>
                                    <option value=\"2\">Ger</option>
                                    <option value=\"3\">Span</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"option-item\">
                            <div class=\"cart-btn\">
                                <a href=\"cart.html\">
                                    <i class='flaticon-shopping-cart'></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>

                        <div class=\"option-item\">
                            <form class=\"search-box\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                <button type=\"submit\"><i class=\"flaticon-search\"></i></button>
                            </form>
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
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Sidebar Modal -->
<div class=\"sidebar-modal\">
    <div class=\"sidebar-modal-inner\">
        <div class=\"sidebar-about-area\">
            <div class=\"title\">
                <h2>About Us</h2>
                <p>We believe brand interaction is key in communication. Real innovations and a positive customer
                    experience are the heart of successful communication. No fake products and services. The customer is
                    king, their lives and needs are the inspiration.</p>
            </div>
        </div>

        <div class=\"sidebar-instagram-feed\">
            <h2>Instagram</h2>
            <ul>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram1.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram2.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram3.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram4.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram5.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram6.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram7.jpg\" alt=\"image\">
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <img src=\"Front/assets/img/instagram/instagram8.jpg\" alt=\"image\">
                    </a>
                </li>
            </ul>
        </div>

        <div class=\"sidebar-contact-area\">
            <div class=\"contact-info\">
                <div class=\"contact-info-content\">
                    <h2>
                        <a href=\"tel:+0881306298615\">
                            +088 130 629 8615
                        </a>
                        <span>OR</span>
                        <a href=\"mailto:orgo@gmail.com\">
                            orgo@gmail.com
                        </a>
                    </h2>

                    <ul class=\"social\">
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <span class=\"close-btn sidebar-modal-close-btn\">
                    <i class=\"flaticon-cancel\"></i>
                </span>
    </div>
</div>
<!-- End Sidebar Modal -->

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
                            <a href=\"index.html\">Orgo</a>
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
                                <img src=\"Front/assets/img/instagram/instagram1.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram2.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram3.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram4.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram5.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram6.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram7.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram8.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>

                        <li>
                            <div class=\"box\">
                                <img src=\"Front/assets/img/instagram/instagram1.jpg\" alt=\"image\">
                                <i class=\"bx bxl-instagram\"></i>
                                <a href=\"#\" target=\"_blank\" class=\"link-btn\"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget pl-5\">
                    <h3>Quick Links</h3>

                    <ul class=\"quick-links\">
                        <li>
                            <a href=\"#\">About Us</a>
                        </li>
                        <li>
                            <a href=\"#\">Our Services</a>
                        </li>
                        <li>
                            <a href=\"#\">Shop</a>
                        </li>
                        <li>
                            <a href=\"#\">Blog</a>
                        </li>
                        <li>
                            <a href=\"#\">Faq</a>
                        </li>
                        <li>
                            <a href=\"#\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h3>Contact Us</h3>

                    <ul class=\"footer-contact-info\">
                        <li>
                            <i class='bx bxs-phone'></i>
                            <span>Phone</span>
                            <a href=\"tel:407409202288\">(+40) 74 0920 2288</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>Email</span>
                            <a href=\"mailto:hello@orgo.com\">hello@orgo.com</a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            <span>Address</span>
                            175 5th Ave Premium Area, New York, NY 10010, United States
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
<script src=\"Front/assets/js/jquery.min.js\"></script>
<!-- Popper JS -->
<script src=\"Front/assets/js/popper.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"Front/assets/js/bootstrap.min.js\"></script>
<!-- Meanmenu JS -->
<script src=\"Front/assets/js/jquery.meanmenu.js\"></script>
<!-- Nice Select JS -->
<script src=\"Front/assets/js/jquery.nice-select.min.js\"></script>
<!-- Owl Carousel JS -->
<script src=\"Front/assets/js/owl.carousel.min.js\"></script>
<!-- Magnific Popup JS -->
<script src=\"Front/assets/js/jquery.magnific-popup.min.js\"></script>
<!-- Odometer JS -->
<script src=\"Front/assets/js/odometer.min.js\"></script>
<!-- Jquery Appear JS -->
<script src=\"Front/assets/js/jquery.appear.min.js\"></script>
<!-- Ajaxchimp JS -->
<script src=\"Front/assets/js/jquery.ajaxchimp.min.js\"></script>
<!-- Form Validator JS -->
<script src=\"Front/assets/js/form-validator.min.js\"></script>
<!-- Contact JS -->
<script src=\"Front/assets/js/contact-form-script.js\"></script>
<!-- Wow JS -->
<script src=\"Front/assets/js/wow.min.js\"></script>
<!-- Custom JS -->
<script src=\"Front/assets/js/main.js\"></script>
</body>
</html>", "baseFront.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\baseFront.html.twig");
    }
}
