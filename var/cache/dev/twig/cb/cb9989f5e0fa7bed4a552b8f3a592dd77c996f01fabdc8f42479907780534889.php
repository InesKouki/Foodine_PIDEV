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

/* back/promotion/addPromotion.html.twig */
class __TwigTemplate_f8fa24a62e4c203aa4593b446e6593d37979aabae10b58cbb745f398d7d1f879 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/promotion/addPromotion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/promotion/addPromotion.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/promotion/addPromotion.html.twig", 1);
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
        echo "    Ajouter Promotion
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Ajouter Promotion</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">
                    <h5 class=\"card-title\">Ajouter Promotion</h5>
                    <hr/>
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"border border-3 p-4 rounded\">

                                    <div class=\"mb-3\">
                                        <label for=\"inputProductDescription\" class=\"form-label\">Product Images</label>
                                        <input id=\"image-uploadify\" type=\"file\" accept=\".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf\" multiple>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"border border-3 p-4 rounded\">
                                    <div class=\"row g-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"inputPrice\" class=\"form-label\">Ancien Prix</label>
                                            <input type=\"email\" class=\"form-control\" id=\"inputPrice\" placeholder=\"00.00\">
                                        </div>

                                        <div class=\"col-md-6\">
                                            <label for=\"inputCostPerPrice\" class=\"form-label\">Nouveau prix</label>
                                            <input type=\"email\" class=\"form-control\" id=\"inputCostPerPrice\" placeholder=\"00.00\">
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"inputProductType\" class=\"form-label\">Nom Du produit</label>
                                            <select class=\"form-select\" id=\"inputProductType\">
                                                <option></option>
                                                <option value=\"1\">One</option>
                                                <option value=\"2\">Two</option>
                                                <option value=\"3\">Three</option>
                                            </select>
                                        </div>
                                        <div class=\"col-12\">
                                            <label for=\"inputVendor\" class=\"form-label\">Nom de l'évènement</label>
                                            <select class=\"form-select\" id=\"inputVendor\">
                                                <option></option>
                                                <option value=\"1\">One</option>
                                                <option value=\"2\">Two</option>
                                                <option value=\"3\">Three</option>
                                            </select>
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"inputProductTags\" class=\"form-label\">Pourcentage</label>
                                            <input type=\"text\" class=\"form-control\" id=\"inputProductTags\" placeholder=\"Enter Product Tags\">
                                        </div>
                                        <div class=\"col-12\">
                                            <div class=\"d-grid\">
                                                <button type=\"button\" class=\"btn btn-light\">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        return "back/promotion/addPromotion.html.twig";
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
    Ajouter Promotion
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Ajouter Promotion</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">
                    <h5 class=\"card-title\">Ajouter Promotion</h5>
                    <hr/>
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"border border-3 p-4 rounded\">

                                    <div class=\"mb-3\">
                                        <label for=\"inputProductDescription\" class=\"form-label\">Product Images</label>
                                        <input id=\"image-uploadify\" type=\"file\" accept=\".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf\" multiple>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"border border-3 p-4 rounded\">
                                    <div class=\"row g-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"inputPrice\" class=\"form-label\">Ancien Prix</label>
                                            <input type=\"email\" class=\"form-control\" id=\"inputPrice\" placeholder=\"00.00\">
                                        </div>

                                        <div class=\"col-md-6\">
                                            <label for=\"inputCostPerPrice\" class=\"form-label\">Nouveau prix</label>
                                            <input type=\"email\" class=\"form-control\" id=\"inputCostPerPrice\" placeholder=\"00.00\">
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"inputProductType\" class=\"form-label\">Nom Du produit</label>
                                            <select class=\"form-select\" id=\"inputProductType\">
                                                <option></option>
                                                <option value=\"1\">One</option>
                                                <option value=\"2\">Two</option>
                                                <option value=\"3\">Three</option>
                                            </select>
                                        </div>
                                        <div class=\"col-12\">
                                            <label for=\"inputVendor\" class=\"form-label\">Nom de l'évènement</label>
                                            <select class=\"form-select\" id=\"inputVendor\">
                                                <option></option>
                                                <option value=\"1\">One</option>
                                                <option value=\"2\">Two</option>
                                                <option value=\"3\">Three</option>
                                            </select>
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"inputProductTags\" class=\"form-label\">Pourcentage</label>
                                            <input type=\"text\" class=\"form-control\" id=\"inputProductTags\" placeholder=\"Enter Product Tags\">
                                        </div>
                                        <div class=\"col-12\">
                                            <div class=\"d-grid\">
                                                <button type=\"button\" class=\"btn btn-light\">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end page wrapper -->
{% endblock %}", "back/promotion/addPromotion.html.twig", "C:\\Users\\ASUS\\Desktop\\Foodine_PIDEV\\templates\\back\\promotion\\addPromotion.html.twig");
    }
}
