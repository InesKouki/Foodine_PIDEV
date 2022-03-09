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

/* front/homeFront.html.twig */
class __TwigTemplate_093e6b15b45f237db4ab18506ec9c31bc6ef01628568c24fddb786f7d40e8058 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/homeFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/homeFront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/homeFront.html.twig", 1);
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
        echo "Home
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
 <div class=\"main-banner\">
            <div class=\"main-banner-item\">
                <div class=\"d-table\">
                    <div class=\"d-table-cell\">
                        <div class=\"container\">
                            <div class=\"main-banner-content\">
                                <span></span>                              
                                <h1>Foodine</h1>
                                <p></p>
                                <div class=\"banner-btn\">
                                    <a href=\"shop-1.html\" class=\"default-btn\">Notre Restaurant</a>
                                   <!-- <a href=\"cart.html\" class=\"optional-btn\">Add to Cart</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Start Featured Products Area -->
    <section class=\"featured-products-area pt-100 pb-70\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Featured  Products</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-1.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Bean</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$3.00</span>
                                <span class=\"old-price\">\$12.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-2.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Pomegranate</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$30.00</span>
                                <span class=\"old-price\">\$122.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-3.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Avocado</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$40.00</span>
                                <span class=\"old-price\">\$140.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-4.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Capsicum</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$33.00</span>
                                <span class=\"old-price\">\$133.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-5.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">WaterMelon</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$23.00</span>
                                <span class=\"old-price\">\$125.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-6.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Crab Apples</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$45.00</span>
                                <span class=\"old-price\">\$120.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-7.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Pea-nut</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$65.00</span>
                                <span class=\"old-price\">\$156.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-8.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Mint</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$49.00</span>
                                <span class=\"old-price\">\$133.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Products Area -->
    <!-- Start Deal Area -->
    <section class=\"deal-area ptb-100\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"deal-title\">
                        <h2>Deals Of The Weeks</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                    </div>

                    <div class=\"deal-content\">
                        <div id=\"timer\" class=\"flex-wrap d-flex justify-content-center\">
                            <div id=\"days\" class=\"align-items-center flex-column d-flex justify-content-center\"></div>
                            <div id=\"hours\" class=\"align-items-center flex-column d-flex justify-content-center\"></div>
                            <div id=\"minutes\" class=\"align-items-center flex-column d-flex justify-content-center\"></div>
                            <div id=\"seconds\" class=\"align-items-center flex-column d-flex justify-content-center\"></div>
                        </div>

                        <div class=\"deal-btn\">
                            <a href=\"cart.html\" class=\"default-btn\">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"deal-image\">
                        <img src=\"/Front/assets/img/deal/deal-1.png\" alt=\"image\">

                        <div class=\"offer\">
                            <h4>50%</h4>
                            <span>Off</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"deal-shape\">
            <div class=\"shape-1\">
                <img src=\"/Front/assets/img/deal/deal-shape-1.png\" alt=\"image\">
            </div>
            <div class=\"shape-2\">
                <img src=\"/Front/assets/img/deal/deal-shape-2.png\" alt=\"image\">
            </div>
            <div class=\"shape-3\">
                <img src=\"/Front/assets/img/deal/deal-shape-3.png\" alt=\"image\">
            </div>
            <div class=\"shape-4\">
                <img src=\"/Front/assets/img/deal/deal-shape-4.png\" alt=\"image\">
            </div>
        </div>
    </section>
    <!-- End Deal Area -->

    <!-- Start Testimonial Area -->
    <section class=\"testimonial-area ptb-100\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Client’s Feedback</h2>
                <p></p>
            </div>

            <div class=\"testimonial-slider owl-carousel owl-theme\">
                ";
        // line 462
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["rev"]);
        foreach ($context['_seq'] as $context["_key"] => $context["rev"]) {
            // line 463
            echo "                <div class=\"testimonial-item\">
                    <div class=\"info\">

                        <h3>";
            // line 466
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rev"], "userName", [], "any", false, false, false, 466), "html", null, true);
            echo "</h3>

                    </div>
                    <p>";
            // line 469
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rev"], "Description", [], "any", false, false, false, 469), "html", null, true);
            echo "</p>

                    <ul class=\"rating\" style=\"padding-right: 45px\" >
                        ";
            // line 472
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rev"], "Stars", [], "any", false, false, false, 472), 1))) {
                // line 473
                echo "                        <li>
                            <i class='bx bxs-star'></i>

                        </li>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 477
$context["rev"], "Stars", [], "any", false, false, false, 477), 2))) {
                // line 478
                echo "                        <li>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>


                        </li>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 484
$context["rev"], "Stars", [], "any", false, false, false, 484), 3))) {
                // line 485
                echo "                        <li>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>


                        </li>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 492
$context["rev"], "Stars", [], "any", false, false, false, 492), 4))) {
                // line 493
                echo "                        <li>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>


                        </li>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 501
$context["rev"], "Stars", [], "any", false, false, false, 501), 5))) {
                // line 502
                echo "                        <li>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>

                        </li>
                    </ul>
                    ";
            }
            // line 512
            echo "                    <div class=\"icon\">
                        <i class=\"flaticon-right-quotes-symbol\"></i>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 517
        echo "

            </div>
        </div>

        <div class=\"deal-btn-\" style=\"padding-left: 890px;padding-top: 20px\">
            <a href=\"";
        // line 523
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showReview");
        echo "\" class=\"default-btn\" >Show All</a>
        </div>
    </section>
    <!-- End Testimonial Area -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/homeFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 523,  634 => 517,  624 => 512,  612 => 502,  610 => 501,  600 => 493,  598 => 492,  589 => 485,  587 => 484,  579 => 478,  577 => 477,  571 => 473,  569 => 472,  563 => 469,  557 => 466,  552 => 463,  548 => 462,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block title %}
Home
{% endblock %}
{% block content %}

 <div class=\"main-banner\">
            <div class=\"main-banner-item\">
                <div class=\"d-table\">
                    <div class=\"d-table-cell\">
                        <div class=\"container\">
                            <div class=\"main-banner-content\">
                                <span></span>                              
                                <h1>Foodine</h1>
                                <p></p>
                                <div class=\"banner-btn\">
                                    <a href=\"shop-1.html\" class=\"default-btn\">Notre Restaurant</a>
                                   <!-- <a href=\"cart.html\" class=\"optional-btn\">Add to Cart</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Start Featured Products Area -->
    <section class=\"featured-products-area pt-100 pb-70\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Featured  Products</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-1.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Bean</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$3.00</span>
                                <span class=\"old-price\">\$12.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-2.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Pomegranate</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$30.00</span>
                                <span class=\"old-price\">\$122.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-3.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Avocado</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$40.00</span>
                                <span class=\"old-price\">\$140.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-4.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Capsicum</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$33.00</span>
                                <span class=\"old-price\">\$133.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-5.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">WaterMelon</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$23.00</span>
                                <span class=\"old-price\">\$125.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-6.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Crab Apples</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$45.00</span>
                                <span class=\"old-price\">\$120.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-7.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Pea-nut</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$65.00</span>
                                <span class=\"old-price\">\$156.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"featured-products-item\">
                        <div class=\"products-image\">
                            <a href=\"shop-details.html\"><img src=\"/Front/assets/img/featured-products/featured-products-8.jpg\" alt=\"image\"></a>

                            <ul class=\"products-action\">
                                <li>
                                    <a href=\"cart.html\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i class=\"flaticon-shopping-cart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i class=\"flaticon-heart\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                        <i class=\"flaticon-search\"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class=\"new\">
                                <span>New</span>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"shop-details.html\">Mint</a>
                            </h3>
                            <div class=\"price\">
                                <span class=\"new-price\">\$49.00</span>
                                <span class=\"old-price\">\$133.00</span>
                            </div>
                            <ul class=\"rating\">
                                <li>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Products Area -->
    <!-- Start Deal Area -->
    <section class=\"deal-area ptb-100\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"deal-title\">
                        <h2>Deals Of The Weeks</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                    </div>

                    <div class=\"deal-content\">
                        <div id=\"timer\" class=\"flex-wrap d-flex justify-content-center\">
                            <div id=\"days\" class=\"align-items-center flex-column d-flex justify-content-center\"></div>
                            <div id=\"hours\" class=\"align-items-center flex-column d-flex justify-content-center\"></div>
                            <div id=\"minutes\" class=\"align-items-center flex-column d-flex justify-content-center\"></div>
                            <div id=\"seconds\" class=\"align-items-center flex-column d-flex justify-content-center\"></div>
                        </div>

                        <div class=\"deal-btn\">
                            <a href=\"cart.html\" class=\"default-btn\">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"deal-image\">
                        <img src=\"/Front/assets/img/deal/deal-1.png\" alt=\"image\">

                        <div class=\"offer\">
                            <h4>50%</h4>
                            <span>Off</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"deal-shape\">
            <div class=\"shape-1\">
                <img src=\"/Front/assets/img/deal/deal-shape-1.png\" alt=\"image\">
            </div>
            <div class=\"shape-2\">
                <img src=\"/Front/assets/img/deal/deal-shape-2.png\" alt=\"image\">
            </div>
            <div class=\"shape-3\">
                <img src=\"/Front/assets/img/deal/deal-shape-3.png\" alt=\"image\">
            </div>
            <div class=\"shape-4\">
                <img src=\"/Front/assets/img/deal/deal-shape-4.png\" alt=\"image\">
            </div>
        </div>
    </section>
    <!-- End Deal Area -->

    <!-- Start Testimonial Area -->
    <section class=\"testimonial-area ptb-100\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Client’s Feedback</h2>
                <p></p>
            </div>

            <div class=\"testimonial-slider owl-carousel owl-theme\">
                {% for rev in rev %}
                <div class=\"testimonial-item\">
                    <div class=\"info\">

                        <h3>{{ rev.userName }}</h3>

                    </div>
                    <p>{{ rev.Description }}</p>

                    <ul class=\"rating\" style=\"padding-right: 45px\" >
                        {% if rev.Stars==1 %}
                        <li>
                            <i class='bx bxs-star'></i>

                        </li>
                        {% elseif rev.Stars==2 %}
                        <li>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>


                        </li>
                        {% elseif rev.Stars==3 %}
                        <li>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>


                        </li>
                        {% elseif rev.Stars==4 %}
                        <li>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>


                        </li>
                        {% elseif rev.Stars==5 %}
                        <li>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>

                        </li>
                    </ul>
                    {% endif %}
                    <div class=\"icon\">
                        <i class=\"flaticon-right-quotes-symbol\"></i>
                    </div>
                </div>
                {% endfor %}


            </div>
        </div>

        <div class=\"deal-btn-\" style=\"padding-left: 890px;padding-top: 20px\">
            <a href=\"{{ path('showReview') }}\" class=\"default-btn\" >Show All</a>
        </div>
    </section>
    <!-- End Testimonial Area -->

{% endblock %}
", "front/homeFront.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\homeFront.html.twig");
    }
}
