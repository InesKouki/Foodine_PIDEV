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

/* back/evenement/addEvenement.html.twig */
class __TwigTemplate_7c555fcb03169e93596db46074ddcf094ea8d278cd4cf0d2c0023bc40e2ef659 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/evenement/addEvenement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/evenement/addEvenement.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/evenement/addEvenement.html.twig", 1);
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
        echo "    Ajouter Evénement
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
                <div class=\"breadcrumb-title pe-3\">Ajouter Evènement</div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-calendar-event\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">

                    <hr/>
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"border border-3 p-4 rounded\">

                                    <div class=\"mb-3\">
                                        <label for=\"inputProductDescription\" class=\"form-label\">Image de l'évènement</label>
                                        <input id=\"image-uploadify\" type=\"file\" accept=\".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf\" multiple>
                                    </div>

                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"border border-3 p-4 rounded\">
                                    <div class=\"row g-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"inputPrice\" class=\"form-label\">Nom de l'evenement</label>
                                            <input type=\"text\" class=\"form-control\" id=\"inputPrice\" placeholder=\"\">
                                        </div>



                                        <div class=\"col-md-6\">
                                            <label for=\"inputPrice\" class=\"form-label\">Description</label>
                                            <input type=\"text\" class=\"form-control\" id=\"inputPrice\" placeholder=\"\">
                                        </div>
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Date début:</label>
                                            <input type=\"datetime-local\" class=\"form-control\">
                                        </div>
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Date fin:</label>
                                            <input type=\"datetime-local\" class=\"form-control\">
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
        return "back/evenement/addEvenement.html.twig";
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
    Ajouter Evénement
{% endblock %}
{% block content %}
    <!--start page wrapper -->
    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\">Ajouter Evènement</div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-calendar-event\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">

                    <hr/>
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"border border-3 p-4 rounded\">

                                    <div class=\"mb-3\">
                                        <label for=\"inputProductDescription\" class=\"form-label\">Image de l'évènement</label>
                                        <input id=\"image-uploadify\" type=\"file\" accept=\".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf\" multiple>
                                    </div>

                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"border border-3 p-4 rounded\">
                                    <div class=\"row g-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"inputPrice\" class=\"form-label\">Nom de l'evenement</label>
                                            <input type=\"text\" class=\"form-control\" id=\"inputPrice\" placeholder=\"\">
                                        </div>



                                        <div class=\"col-md-6\">
                                            <label for=\"inputPrice\" class=\"form-label\">Description</label>
                                            <input type=\"text\" class=\"form-control\" id=\"inputPrice\" placeholder=\"\">
                                        </div>
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Date début:</label>
                                            <input type=\"datetime-local\" class=\"form-control\">
                                        </div>
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Date fin:</label>
                                            <input type=\"datetime-local\" class=\"form-control\">
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
{% endblock %}
", "back/evenement/addEvenement.html.twig", "C:\\Users\\ASUS\\Desktop\\Foodine_PIDEV\\templates\\back\\evenement\\addEvenement.html.twig");
    }
}
