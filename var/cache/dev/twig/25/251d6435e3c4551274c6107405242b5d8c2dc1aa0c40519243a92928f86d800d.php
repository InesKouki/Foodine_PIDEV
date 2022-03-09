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
class __TwigTemplate_890fccbb322405f38d96181836691ad4f112735df166083d8d2c33c4aef92d47 extends Template
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
        echo "
";
        // line 11
        echo "
<!--start page wrapper -->
<div class=\"page-wrapper\">
    <div class=\"page-content\">
        <!--breadcrumb-->
        <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
            <div class=\"breadcrumb-title pe-3\">Dashboard</div>
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
                                <a href=\"admin-addPromotion\" class=\"btn btn-light mb-3 mb-lg-0\"><i class='bx bxs-plus-square'></i>Ajouter</a>
                            </div>
                            <div class=\"col-lg-9 col-xl-10\">
                                <form class=\"float-lg-end\">
                                    <div class=\"row row-cols-lg-auto g-2\">

                                        <div class=\"col-12\">
                                            <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                                <button type=\"button\" class=\"btn btn-light\">Trier Par</button>
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        <i class='bx bx-chevron-down'></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                                        <li><a class=\"dropdown-item\" href=\"/admin-promotions-sortbynameasc\">Par Nom d'événement ↑</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"/admin-promotions-sortbynamedesc\">Par Nom d'événement ↓</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"/admin-promotions-sortbyprcasc\">Par Pourcentage ↑</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"/admin-promotions-sortbyprcdesc\">Par Pourcentage ↓</a></li>
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
            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["backPromotions"]) || array_key_exists("backPromotions", $context) ? $context["backPromotions"] : (function () { throw new RuntimeError('Variable "backPromotions" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 71
            echo "            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/download.jpg\" class=\"card-img-top\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\">
                            <span class=\"\">-";
            // line 75
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["p"], "pourcentage", [], "any", false, false, false, 75) * 100), "html", null, true);
            echo "%</span>
                        </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "produit", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true);
            echo "</h6>
                        <div class=\"clearfix\">
                            <p class=\"float-end fw-bold\">
                                <a href=";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatePromotion", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo " class=\"\"><i class='bx bxs-edit bx-sm'></i></a>
                                <a href=";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePromotion", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo " class=\"ms-3\"><i class='bx bxs-trash bx-sm'></i></a>
                            </p>
                        </div>

                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "evenement", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87), "html", null, true);
            echo "</p>
                            <p class=\"mb-0 float-end fw-bold\">
                                ";
            // line 90
            echo "                                <span class=\"me-2 text-decoration-line-through\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "produit", [], "any", false, false, false, 90), "price", [], "any", false, false, false, 90), "html", null, true);
            echo "DT</span>
                                ";
            // line 92
            echo "                                <span class=\"text-white\"></span>";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "produit", [], "any", false, false, false, 92), "price", [], "any", false, false, false, 92) * (1 - twig_get_attribute($this->env, $this->source, $context["p"], "pourcentage", [], "any", false, false, false, 92))), "html", null, true);
            echo "DT</p>

                        </div>

                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        </div><!--end row-->

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
        return array (  213 => 100,  198 => 92,  193 => 90,  188 => 87,  180 => 82,  176 => 81,  170 => 78,  164 => 75,  158 => 71,  154 => 70,  93 => 11,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
    Promotions
{% endblock %}
{% block content %}

{#    <tr>#}
{#        <td>{{ p.evenement.name }}</td>#}
{#        <td>{{ p.pourcentage }}</td>#}
{#    </tr>#}

<!--start page wrapper -->
<div class=\"page-wrapper\">
    <div class=\"page-content\">
        <!--breadcrumb-->
        <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
            <div class=\"breadcrumb-title pe-3\">Dashboard</div>
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
                                <a href=\"admin-addPromotion\" class=\"btn btn-light mb-3 mb-lg-0\"><i class='bx bxs-plus-square'></i>Ajouter</a>
                            </div>
                            <div class=\"col-lg-9 col-xl-10\">
                                <form class=\"float-lg-end\">
                                    <div class=\"row row-cols-lg-auto g-2\">

                                        <div class=\"col-12\">
                                            <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                                <button type=\"button\" class=\"btn btn-light\">Trier Par</button>
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        <i class='bx bx-chevron-down'></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                                        <li><a class=\"dropdown-item\" href=\"/admin-promotions-sortbynameasc\">Par Nom d'événement ↑</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"/admin-promotions-sortbynamedesc\">Par Nom d'événement ↓</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"/admin-promotions-sortbyprcasc\">Par Pourcentage ↑</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"/admin-promotions-sortbyprcdesc\">Par Pourcentage ↓</a></li>
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
            {% for p in backPromotions %}
            <div class=\"col\">
                <div class=\"card\">
                    <img src=\"Back/assets/images/products/download.jpg\" class=\"card-img-top\">
                        <div class=\"position-absolute top-0 end-0 m-3 product-discount\">
                            <span class=\"\">-{{ p.pourcentage * 100}}%</span>
                        </div>
                    <div class=\"card-body\">
                        <h6 class=\"card-title\">{{ p.produit.name }}</h6>
                        <div class=\"clearfix\">
                            <p class=\"float-end fw-bold\">
                                <a href={{ path('updatePromotion',{id: p.id}) }} class=\"\"><i class='bx bxs-edit bx-sm'></i></a>
                                <a href={{ path('deletePromotion',{id: p.id}) }} class=\"ms-3\"><i class='bx bxs-trash bx-sm'></i></a>
                            </p>
                        </div>

                        <div class=\"clearfix\">
                            <p class=\"mb-0 float-start\">{{ p.evenement.name}}</p>
                            <p class=\"mb-0 float-end fw-bold\">
                                {# OLD PRICE #}
                                <span class=\"me-2 text-decoration-line-through\">{{ p.produit.price }}DT</span>
                                {# NEW PRICE #}
                                <span class=\"text-white\"></span>{{ p.produit.price * (1-p.pourcentage) }}DT</p>

                        </div>

                    </div>
                </div>
            </div>
            {% endfor %}
        </div><!--end row-->

    </div>
</div>
<!--end page wrapper -->
{% endblock %}", "back/promotion/index.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\promotion\\index.html.twig");
    }
}
