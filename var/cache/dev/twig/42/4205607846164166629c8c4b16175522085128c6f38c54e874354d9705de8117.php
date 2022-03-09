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

/* front/promotion/index.html.twig */
class __TwigTemplate_a238fd9fedef0f41c3d3bd155014bb7efd95a654fb9f3351110f06e6bf13cc3f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/promotion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/promotion/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/promotion/index.html.twig", 1);
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
    <style>
        .page-banner-area {
            background-image: url('";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["frontPromotions"]) || array_key_exists("frontPromotions", $context) ? $context["frontPromotions"] : (function () { throw new RuntimeError('Variable "frontPromotions" does not exist.', 9, $this->source); })())), "evenement", [], "any", false, false, false, 9), "image", [], "any", false, false, false, 9))), "html", null, true);
        echo "');
            background-position: bottom;

        }
    </style>

    <div class=\"page-banner-area\">

        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["frontPromotions"]) || array_key_exists("frontPromotions", $context) ? $context["frontPromotions"] : (function () { throw new RuntimeError('Variable "frontPromotions" does not exist.', 21, $this->source); })())), "evenement", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</h2>
                        <ul>
                            <li>
                                <a href=\"/\">Home</a>
                            </li>
                            <li>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["frontPromotions"]) || array_key_exists("frontPromotions", $context) ? $context["frontPromotions"] : (function () { throw new RuntimeError('Variable "frontPromotions" does not exist.', 26, $this->source); })())), "evenement", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"top-products-area pt-100 pb-100\">
    <div class=\"container\">
    ";
        // line 37
        echo "    <div class=\"orgo-grid-sorting row align-items-center\">
        <div class=\"col-lg-6 col-md-6 result-count\">
            <p>Nous avons <span class=\"count\">";
        // line 39
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["frontPromotions"]) || array_key_exists("frontPromotions", $context) ? $context["frontPromotions"] : (function () { throw new RuntimeError('Variable "frontPromotions" does not exist.', 39, $this->source); })())), "html", null, true);
        echo "</span> produits en promotion</p>
        </div>

";
        // line 57
        echo "
";
        // line 59
        echo "    </div>

    ";
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frontPromotions"]) || array_key_exists("frontPromotions", $context) ? $context["frontPromotions"] : (function () { throw new RuntimeError('Variable "frontPromotions" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 63
            echo "        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"top-products-item\">
                    <div class=\"products-image\">
                        <a href=\"\"><img src=\"Back/assets/images/products/download.jpg\" alt=\"image\"></a>

                        <ul class=\"products-action\">
                            <li>
                                <a href=\"\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i
                                            class=\"flaticon-shopping-cart\"></i></a>
                            </li>
                            <li>
                                <a href=\"\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i
                                            class=\"flaticon-heart\"></i></a>
                            </li>
                            <li>
                                <a href=\"\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\"
                                   data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                    <i class=\"flaticon-search\"></i>
                                </a>
                            </li>
                        </ul>
                        <div class=\"sale\">
                            <span>-";
            // line 86
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["p"], "pourcentage", [], "any", false, false, false, 86) * 100), "html", null, true);
            echo "%</span>
                        </div>
                    </div>

                    <div class=\"products-content\">
                        <h3>
                            <a href=\"shop-details.html\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "produit", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92), "html", null, true);
            echo "</a>
                        </h3>
                        <div class=\"price\">
                            <span class=\"new-price\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "produit", [], "any", false, false, false, 95), "price", [], "any", false, false, false, 95), "html", null, true);
            echo " DT</span>
                            <span class=\"old-price\">";
            // line 96
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "produit", [], "any", false, false, false, 96), "price", [], "any", false, false, false, 96) * (1 - twig_get_attribute($this->env, $this->source, $context["p"], "pourcentage", [], "any", false, false, false, 96))), "html", null, true);
            echo "DT</span>
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

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/promotion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 117,  197 => 96,  193 => 95,  187 => 92,  178 => 86,  153 => 63,  148 => 62,  144 => 59,  141 => 57,  135 => 39,  131 => 37,  118 => 26,  110 => 21,  95 => 9,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block title %}
    Promotions
{% endblock %}
{% block content %}

    <style>
        .page-banner-area {
            background-image: url('{{asset('uploads/' ~ frontPromotions|first.evenement.image)}}');
            background-position: bottom;

        }
    </style>

    <div class=\"page-banner-area\">

        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>{{ frontPromotions|first.evenement.name }}</h2>
                        <ul>
                            <li>
                                <a href=\"/\">Home</a>
                            </li>
                            <li>{{ frontPromotions|first.evenement.name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"top-products-area pt-100 pb-100\">
    <div class=\"container\">
    {# HEADER #}
    <div class=\"orgo-grid-sorting row align-items-center\">
        <div class=\"col-lg-6 col-md-6 result-count\">
            <p>Nous avons <span class=\"count\">{{ frontPromotions|length }}</span> produits en promotion</p>
        </div>

{#        <div class=\"col-lg-6 col-md-6 ordering\">#}
{#            <div class=\"select-box\">#}
{#                <label>Trier par:</label>#}
{#                <select onchange=\"javascript:handleSelect(this)\">#}
{#                    <option>Defaut</option>#}
{#                    <option value=\"\">Par Pourcentage ↑</option>#}
{#                    <option>Par Pourcentage ↓</option>#}
{#                </select>#}
{#                <script type=\"text/javascript\">#}
{#                    function handleSelect(elm)#}
{#                    {#}
{#                        window.location = elm.value;#}
{#                    }#}
{#                </script>#}
{#            </div>#}

{#        </div>#}
    </div>

    {# CONTENT #}
    {% for p in frontPromotions %}
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"top-products-item\">
                    <div class=\"products-image\">
                        <a href=\"\"><img src=\"Back/assets/images/products/download.jpg\" alt=\"image\"></a>

                        <ul class=\"products-action\">
                            <li>
                                <a href=\"\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Cart\"><i
                                            class=\"flaticon-shopping-cart\"></i></a>
                            </li>
                            <li>
                                <a href=\"\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i
                                            class=\"flaticon-heart\"></i></a>
                            </li>
                            <li>
                                <a href=\"\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"Quick View\"
                                   data-toggle=\"modal\" data-target=\"#productsQuickView\">
                                    <i class=\"flaticon-search\"></i>
                                </a>
                            </li>
                        </ul>
                        <div class=\"sale\">
                            <span>-{{ p.pourcentage * 100 }}%</span>
                        </div>
                    </div>

                    <div class=\"products-content\">
                        <h3>
                            <a href=\"shop-details.html\">{{ p.produit.name }}</a>
                        </h3>
                        <div class=\"price\">
                            <span class=\"new-price\">{{ p.produit.price }} DT</span>
                            <span class=\"old-price\">{{ p.produit.price * (1-p.pourcentage) }}DT</span>
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

    {% endfor %}

{% endblock %}", "front/promotion/index.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\promotion\\index.html.twig");
    }
}
