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

/* back/recette/AjoutRecette.html.twig */
class __TwigTemplate_7dadcddca5fb4b3b8dee9b1409f2a50236ab7f26cb4ae6005ea2ccfcedacba5b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/recette/AjoutRecette.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/recette/AjoutRecette.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/recette/AjoutRecette.html.twig", 1);
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
        echo "    Recettes
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
                <div class=\"breadcrumb-title pe-3\">Ajouter Recette</div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-receipt\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">
                    <h5 class=\"card-title\">Ajouter Recette</h5>
                    <hr/>
                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"border border-3 p-4 rounded\">

                                    <div class=\"mb-3\">
                                        <label for=\"inputProductDescription\" class=\"form-label\">Image de
                                            Recette</label>
                                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 38, $this->source); })()), "imagerecette", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                        <ul class=\"custom-error\">
                                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 41, $this->source); })()), "imagerecette", [], "any", false, false, false, 41), 'errors');
        echo "
                                        </ul>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <label for=\"inputPrice\" class=\"form-label\">Description</label>
                                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        <ul class=\"custom-error\">
                                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), 'errors');
        echo "
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"border border-3 p-4 rounded\">
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Nom du Recette</label>
                                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 58, $this->source); })()), "nom", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        <ul class=\"custom-error\">
                                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), 'errors');
        echo "
                                        </ul>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">Planning:</label>
                                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 65, $this->source); })()), "planningid", [], "any", false, false, false, 65), 'widget');
        echo "
                                        <ul class=\"custom-error\">
                                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 67, $this->source); })()), "planningid", [], "any", false, false, false, 67), 'errors');
        echo "
                                        </ul>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">Ingredients:</label>
                                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 72, $this->source); })()), "ingredient", [], "any", false, false, false, 72), 'widget', ["attr" => ["multiple data-role" => "tagsinput"]]);
        echo "
                                        <ul class=\"custom-error\">
                                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 74, $this->source); })()), "ingredient", [], "any", false, false, false, 74), 'errors');
        echo "
                                        </ul>
                                    </div>


                                    <div class=\"col-12\">
                                        <div class=\"d-grid\">
                                            <button type=\"submit\" class=\"btn btn-light\">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div><!--end row-->
                    </div>
                    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f1"]) || array_key_exists("f1", $context) ? $context["f1"] : (function () { throw new RuntimeError('Variable "f1" does not exist.', 90, $this->source); })()), 'form_end');
        echo "
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
        return "back/recette/AjoutRecette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 90,  190 => 74,  185 => 72,  177 => 67,  172 => 65,  164 => 60,  159 => 58,  146 => 48,  141 => 46,  133 => 41,  127 => 38,  115 => 29,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
    Recettes
{% endblock %}
{% block content %}
    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\">Ajouter Recette</div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-receipt\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">
                    <h5 class=\"card-title\">Ajouter Recette</h5>
                    <hr/>
                    {{ form_start (f1,{ 'attr' : {'novalidate':'novalidate'} }) }}
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"border border-3 p-4 rounded\">

                                    <div class=\"mb-3\">
                                        <label for=\"inputProductDescription\" class=\"form-label\">Image de
                                            Recette</label>
                                        {{ form_widget(f1.imagerecette,{'attr':{'class':'form-control'}}) }}

                                        <ul class=\"custom-error\">
                                            {{ form_errors(f1.imagerecette) }}
                                        </ul>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <label for=\"inputPrice\" class=\"form-label\">Description</label>
                                        {{ form_widget(f1.description,{'attr':{'class':'form-control'}}) }}
                                        <ul class=\"custom-error\">
                                            {{ form_errors(f1.description) }}
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"border border-3 p-4 rounded\">
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Nom du Recette</label>
                                        {{ form_widget(f1.nom,{'attr':{'class':'form-control'}}) }}
                                        <ul class=\"custom-error\">
                                            {{ form_errors(f1.nom) }}
                                        </ul>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">Planning:</label>
                                        {{ form_widget(f1.planningid) }}
                                        <ul class=\"custom-error\">
                                            {{ form_errors(f1.planningid) }}
                                        </ul>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">Ingredients:</label>
                                        {{ form_widget(f1.ingredient,{'attr':{'multiple data-role':'tagsinput'}}) }}
                                        <ul class=\"custom-error\">
                                            {{ form_errors(f1.ingredient) }}
                                        </ul>
                                    </div>


                                    <div class=\"col-12\">
                                        <div class=\"d-grid\">
                                            <button type=\"submit\" class=\"btn btn-light\">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div><!--end row-->
                    </div>
                    {{ form_end(f1) }}
                </div>

            </div>

        </div>
    </div>
{% endblock %}", "back/recette/AjoutRecette.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\recette\\ajoutRecette.html.twig");
    }
}
