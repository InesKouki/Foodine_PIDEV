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

/* front/categorie/index.html.twig */
class __TwigTemplate_9375480012637d6486378f60e963fa1328c54b513184b3b7c032db6b9ed37e22 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/categorie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/categorie/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Catégorie";
        
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
        <!-- Start Page Banner -->
        <div class=\"page-banner-area\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <div class=\"container\">
                        <div class=\"page-banner-content\">
                            <h2>Shop List One</h2>
                            <ul>
                                <li>
                                    <a href=\"index.html\">Home</a>
                                </li>
                                <li>Shop List One</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Top Products Area -->
        <section class=\"top-products-area pt-100 pb-100\">
            <div class=\"container\">
                <div class=\"orgo-grid-sorting row align-items-center\">
                    <div class=\"col-lg-6 col-md-6 result-count\">
                        <p>We found <span class=\"count\">10</span> products available for you</p>
                    </div>

                    <div class=\"col-lg-6 col-md-6 ordering\">
                        <div class=\"select-box\">
                            <label>Sort By:</label>
                            <select>
                                <option>Default</option>
                                <option>Popularity</option>
                                <option>Latest</option>
                                <option>Price: low to high</option>
                                <option>Price: high to low</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-1.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Darling Oranges</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$38.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-2.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Strawberry</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$30.00</span>
                                    <span class=\"old-price\">\$116.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-3.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Cabbage</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$40.00</span>
                                    <span class=\"old-price\">\$179.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-4.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Nectarine</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$45.00</span>
                                    <span class=\"old-price\">\$135.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-5.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Seasoned Tomatoes</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$68.00</span>
                                    <span class=\"old-price\">\$168.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-6.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Seasoned Carrot</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$30.00</span>
                                    <span class=\"old-price\">\$130.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-7.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Pineapple</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$39.00</span>
                                    <span class=\"old-price\">\$139.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-8.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Fresh Banana</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$17.00</span>
                                    <span class=\"old-price\">\$115.00</span>
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

                    <div class=\"col-lg-12 col-md-12\">
                        <div class=\"pagination-area\">
                            <a href=\"#\" class=\"prev page-numbers\">
                                <i class=\"flaticon-left-arrow\"></i>
                            </a>
                            <a href=\"#\" class=\"page-numbers\">1</a>
                            <span class=\"page-numbers current\" aria-current=\"page\">2</span>
                            <a href=\"#\" class=\"page-numbers\">3</a>
                            <a href=\"#\" class=\"page-numbers\">4</a>
                            <a href=\"#\" class=\"next page-numbers\">
                                <i class=\"flaticon-right-arrow\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Products Area -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Catégorie{% endblock %}

{% block content %}

        <!-- Start Page Banner -->
        <div class=\"page-banner-area\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <div class=\"container\">
                        <div class=\"page-banner-content\">
                            <h2>Shop List One</h2>
                            <ul>
                                <li>
                                    <a href=\"index.html\">Home</a>
                                </li>
                                <li>Shop List One</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Top Products Area -->
        <section class=\"top-products-area pt-100 pb-100\">
            <div class=\"container\">
                <div class=\"orgo-grid-sorting row align-items-center\">
                    <div class=\"col-lg-6 col-md-6 result-count\">
                        <p>We found <span class=\"count\">10</span> products available for you</p>
                    </div>

                    <div class=\"col-lg-6 col-md-6 ordering\">
                        <div class=\"select-box\">
                            <label>Sort By:</label>
                            <select>
                                <option>Default</option>
                                <option>Popularity</option>
                                <option>Latest</option>
                                <option>Price: low to high</option>
                                <option>Price: high to low</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-1.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Darling Oranges</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$38.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-2.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Strawberry</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$30.00</span>
                                    <span class=\"old-price\">\$116.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-3.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Cabbage</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$40.00</span>
                                    <span class=\"old-price\">\$179.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-4.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Nectarine</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$45.00</span>
                                    <span class=\"old-price\">\$135.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-5.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Seasoned Tomatoes</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$68.00</span>
                                    <span class=\"old-price\">\$168.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-6.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Seasoned Carrot</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$30.00</span>
                                    <span class=\"old-price\">\$130.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-7.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Pineapple</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$39.00</span>
                                    <span class=\"old-price\">\$139.00</span>
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
                        <div class=\"top-products-item\">
                            <div class=\"products-image\">
                                <a href=\"shop-details.html\"><img src=\"Back/assets/img/top-products/top-products-8.jpg\" alt=\"image\"></a>

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

                                <div class=\"sale\">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class=\"products-content\">
                                <h3>
                                    <a href=\"shop-details.html\">Fresh Banana</a>
                                </h3>
                                <div class=\"price\">
                                    <span class=\"new-price\">\$17.00</span>
                                    <span class=\"old-price\">\$115.00</span>
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

                    <div class=\"col-lg-12 col-md-12\">
                        <div class=\"pagination-area\">
                            <a href=\"#\" class=\"prev page-numbers\">
                                <i class=\"flaticon-left-arrow\"></i>
                            </a>
                            <a href=\"#\" class=\"page-numbers\">1</a>
                            <span class=\"page-numbers current\" aria-current=\"page\">2</span>
                            <a href=\"#\" class=\"page-numbers\">3</a>
                            <a href=\"#\" class=\"page-numbers\">4</a>
                            <a href=\"#\" class=\"next page-numbers\">
                                <i class=\"flaticon-right-arrow\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Products Area -->

{% endblock %}
", "front/categorie/index.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\categorie\\index.html.twig");
    }
}
