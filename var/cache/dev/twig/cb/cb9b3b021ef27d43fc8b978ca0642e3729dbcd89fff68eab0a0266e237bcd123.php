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

/* back/planning/AjouterPlanning.html.twig */
class __TwigTemplate_13583152b4d7e823fdd68580a8cbc07b5a0dd8d3dd6569f773c6fdaaae730786 extends Template
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
        return "baseChef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/planning/AjouterPlanning.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/planning/AjouterPlanning.html.twig"));

        $this->parent = $this->loadTemplate("baseChef.html.twig", "back/planning/AjouterPlanning.html.twig", 1);
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
        echo "    Planning
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
        echo "    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\">Ajouter Planning</div>
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
                                        <label for=\"inputPrice\" class=\"form-label\">Nom du planning</label>
                                        <input type=\"text\" class=\"form-control\" id=\"inputPrice\" placeholder=\"\">
                                    </div>
                                    <div class=\"mb-3\">
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/planning/AjouterPlanning.html.twig";
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
        return new Source("{% extends 'baseChef.html.twig' %}
{% block title %}
    Planning
{% endblock %}
{% block content %}
    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\">Ajouter Planning</div>
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
                                        <label for=\"inputPrice\" class=\"form-label\">Nom du planning</label>
                                        <input type=\"text\" class=\"form-control\" id=\"inputPrice\" placeholder=\"\">
                                    </div>
                                    <div class=\"mb-3\">
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
{% endblock %}
", "back/planning/AjouterPlanning.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\planning\\AjouterPlanning.html.twig");
    }
}
