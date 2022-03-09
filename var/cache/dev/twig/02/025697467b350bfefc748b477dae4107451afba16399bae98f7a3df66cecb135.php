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

/* back/promotion/updatePromotion.html.twig */
class __TwigTemplate_1fe8490d21a5799a1fa3798900884d680f5d41c85f73167f6957aa0e783a27c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/promotion/updatePromotion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/promotion/updatePromotion.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/promotion/updatePromotion.html.twig", 1);
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
        echo "    Modifier Promotion
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
        echo "    <!--start page wrapper -->
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier Promotion</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">
                    <h5 class=\"card-title\">Modifier Promotion</h5>
                    <hr/>
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["promotionForm"]) || array_key_exists("promotionForm", $context) ? $context["promotionForm"] : (function () { throw new RuntimeError('Variable "promotionForm" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <div class=\"col-lg-6\">
                                <div class=\"border border-3 p-4 rounded\">
                                    <div class=\"row g-3\">

                                        <div class=\"col-12\">
                                            <label for=\"inputProductType\" class=\"form-label\">Nom du produit</label>
                                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["promotionForm"]) || array_key_exists("promotionForm", $context) ? $context["promotionForm"] : (function () { throw new RuntimeError('Variable "promotionForm" does not exist.', 39, $this->source); })()), "produit", [], "any", false, false, false, 39), 'widget');
        echo "
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"inputVendor\" class=\"form-label\">Nom de l'évènement</label>
                                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["promotionForm"]) || array_key_exists("promotionForm", $context) ? $context["promotionForm"] : (function () { throw new RuntimeError('Variable "promotionForm" does not exist.', 44, $this->source); })()), "evenement", [], "any", false, false, false, 44), 'widget');
        echo "
                                        </div>

                                        <div class=\"col-3\">
                                            <label for=\"inputProductTags\" class=\"form-label\">Réduction ( en % )</label>
                                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["promotionForm"]) || array_key_exists("promotionForm", $context) ? $context["promotionForm"] : (function () { throw new RuntimeError('Variable "promotionForm" does not exist.', 49, $this->source); })()), "pourcentage", [], "any", false, false, false, 49), 'widget');
        echo "
                                        </div>
                                        <ul class=\"custom-error2\">
                                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["promotionForm"]) || array_key_exists("promotionForm", $context) ? $context["promotionForm"] : (function () { throw new RuntimeError('Variable "promotionForm" does not exist.', 52, $this->source); })()), "pourcentage", [], "any", false, false, false, 52), 'errors');
        echo "
                                        </ul>

                                        <div class=\"col-12\">
                                            <div class=\"d-grid\">
                                                <button type=\"submit\" class=\"btn btn-light\">Modifier</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["promotionForm"]) || array_key_exists("promotionForm", $context) ? $context["promotionForm"] : (function () { throw new RuntimeError('Variable "promotionForm" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
                        </div><!--end row-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end page wrapper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/promotion/updatePromotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 63,  150 => 52,  144 => 49,  136 => 44,  128 => 39,  118 => 32,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
    Modifier Promotion
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier Promotion</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">
                    <h5 class=\"card-title\">Modifier Promotion</h5>
                    <hr/>
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            {{ form_start(promotionForm, {'attr' : {'novalidate' : 'novalidate'} }) }}
                            <div class=\"col-lg-6\">
                                <div class=\"border border-3 p-4 rounded\">
                                    <div class=\"row g-3\">

                                        <div class=\"col-12\">
                                            <label for=\"inputProductType\" class=\"form-label\">Nom du produit</label>
                                            {{ form_widget(promotionForm.produit) }}
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"inputVendor\" class=\"form-label\">Nom de l'évènement</label>
                                            {{ form_widget(promotionForm.evenement) }}
                                        </div>

                                        <div class=\"col-3\">
                                            <label for=\"inputProductTags\" class=\"form-label\">Réduction ( en % )</label>
                                            {{ form_widget(promotionForm.pourcentage) }}
                                        </div>
                                        <ul class=\"custom-error2\">
                                            {{ form_errors(promotionForm.pourcentage) }}
                                        </ul>

                                        <div class=\"col-12\">
                                            <div class=\"d-grid\">
                                                <button type=\"submit\" class=\"btn btn-light\">Modifier</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{ form_end(promotionForm) }}
                        </div><!--end row-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end page wrapper -->
{% endblock %}", "back/promotion/updatePromotion.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\promotion\\updatePromotion.html.twig");
    }
}
