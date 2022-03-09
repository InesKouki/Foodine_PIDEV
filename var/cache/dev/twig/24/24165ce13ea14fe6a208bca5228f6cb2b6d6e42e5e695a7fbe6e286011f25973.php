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

/* back/promotion/index.html.twig */
class __TwigTemplate_23a2a8bb7726cc07bf47eab02ee0e5d9b6e209a5d9d1d532b7a84f7d907fc734 extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/promotion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/promotion/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/promotion/index.html.twig", 1);
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
        echo "    Promotions
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
        echo "<!--start page wrapper -->
<div class=\"page-wrapper\">
    <div class=\"page-content\">
        <!--breadcrumb-->
        <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
            <div class=\"breadcrumb-title pe-3\">Tables</div>
            <div class=\"ps-3\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-0 p-0\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-money\"></i></a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Promotions</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-3 col-xl-2\">
                                <a href=\"admin-addPromotion\" class=\"btn btn-light mb-3 mb-lg-0\"><i class='bx bxs-plus-square'></i>Ajouter </a>
                            </div>
                            <div class=\"col-lg-9 col-xl-10\">
                                <form class=\"float-lg-end\">
                                    <div class=\"row row-cols-lg-auto g-2\">

                                        <div class=\"col-12\">
                                            <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                                <button type=\"button\" class=\"btn btn-light\">Tier Par</button>
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        <i class='bx bx-chevron-down'></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                                        <li><a class=\"dropdown-item\" href=\"#\">Dropdown link</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-12\">
                                            <div class=\"btn-group\" role=\"group\">
                                                <button type=\"button\" class=\"btn btn-light\">Price Range</button>
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        <i class='bx bx-slider'></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu dropdown-menu-start\" aria-labelledby=\"btnGroupDrop1\">
                                                        <li><a class=\"dropdown-item\" href=\"#\">Dropdown link</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid\">
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/01.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/02.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>




                    </div>

                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/03.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/04.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/05.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/06.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/07.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/08.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/09.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/10.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--end row-->


    </div>
</div>
<!--end page wrapper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/promotion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
    Promotions
{% endblock %}
{% block content %}
<!--start page wrapper -->
<div class=\"page-wrapper\">
    <div class=\"page-content\">
        <!--breadcrumb-->
        <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
            <div class=\"breadcrumb-title pe-3\">Tables</div>
            <div class=\"ps-3\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-0 p-0\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-money\"></i></a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Promotions</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-3 col-xl-2\">
                                <a href=\"admin-addPromotion\" class=\"btn btn-light mb-3 mb-lg-0\"><i class='bx bxs-plus-square'></i>Ajouter </a>
                            </div>
                            <div class=\"col-lg-9 col-xl-10\">
                                <form class=\"float-lg-end\">
                                    <div class=\"row row-cols-lg-auto g-2\">

                                        <div class=\"col-12\">
                                            <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                                <button type=\"button\" class=\"btn btn-light\">Tier Par</button>
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        <i class='bx bx-chevron-down'></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                                        <li><a class=\"dropdown-item\" href=\"#\">Dropdown link</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-12\">
                                            <div class=\"btn-group\" role=\"group\">
                                                <button type=\"button\" class=\"btn btn-light\">Price Range</button>
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        <i class='bx bx-slider'></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu dropdown-menu-start\" aria-labelledby=\"btnGroupDrop1\">
                                                        <li><a class=\"dropdown-item\" href=\"#\">Dropdown link</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid\">
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/01.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/02.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>




                    </div>

                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/03.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/04.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/05.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/06.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/07.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/08.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/09.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/10.png\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\"><span class=\"\">-10%</span></div>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title cursor-pointer\">Nest Shaped Chair</h6>
                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\"><strong>134</strong> Sales</p>
                            <p class=\"mb-0 float-end fw-bold\"><span class=\"me-2 text-decoration-line-through\">\$350</span><span class=\"text-white\">\$240</span></p>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--end row-->


    </div>
</div>
<!--end page wrapper -->
{% endblock %}", "back/promotion/index.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\promotion\\index.html.twig");
    }
}
