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

/* front/reclamation/add.html.twig */
class __TwigTemplate_48baf70602cd61d96f15ee81b4ae13983558b6709059e898a408f3ada27189e8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reclamation/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reclamation/add.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/reclamation/add.html.twig", 1);
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

        echo "Reclamation";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <!-- Start Page Banner -->
    <div class=\"page-banner-area item-bg4\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Reclamation</h2>
                        <ul>
                            <li>
                                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Home</a>
                            </li>
                            <li>Reclamation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Info Area -->
    <section class=\"contact-info-area pt-100 pb-70\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"contact-info-box\">
                        <div class=\"icon\">
                            <i class='bx bx-envelope'></i>
                        </div>

                        <h3>Email ici</h3>

                        <p><a href=\"mailto:support@orgo.com\">contact@foodine.com</a></p>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"contact-info-box\">
                        <div class=\"icon\">
                            <i class='bx bx-map'></i>
                        </div>

                        <h3>Localisation ici</h3>
                        <p>01 Rue des Oranges ,Tunis</p>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"contact-info-box\">
                        <div class=\"icon\">
                            <i class='bx bxs-phone-call'></i>
                        </div>

                        <h3>Appelez ici</h3>
                        <p><a href=\"#\">+216 70100100</a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->


    <!-- Start Contact Area -->
    <section class=\"contact-area ptb-100\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Réclamation</h2>

            </div>

            <div class=\"contact-form\">

                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6\">
                            <div class=\"form-group\">
                                <label>Prénom</label>
                                <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" readonly value=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "nom", [], "any", false, false, false, 87), "html", null, true);
        echo "\">

                            </div>
                        </div>

                        <div class=\"col-lg-6 col-md-6\">
                            <div class=\"form-group\">
                                <label>Nom</label>
                                <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" readonly value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "prenom", [], "any", false, false, false, 95), "html", null, true);
        echo "\">

                            </div>
                        </div>

                        <div class=\"col-lg-12 col-md-12\">
                            <div class=\"form-group\">
                                <label>Votre adresse Email</label>
                                <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" readonly value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "Email", [], "any", false, false, false, 103), "html", null, true);
        echo "\">
                                <div class=\"help-block with-errors\"></div>
                            </div>
                        </div>

                        ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_start');
        echo "
                        <div class=\"col-lg-12 col-md-12\">
                            <div class=\"form-group\">
                                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "Type", [], "any", false, false, false, 111), 'label');
        echo "
                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "Type", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-check "]]);
        echo "

                                <div class=\"help-block with-errors\"></div>
                            </div>
                        </div>

                        <div class=\"col-lg-12 col-md-12\">
                            <div class=\"form-group\">


                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "Description", [], "any", false, false, false, 122), 'label');
        echo "
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "Description", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                            </div>
                        </div>

                        <div class=\"col-lg-12 col-md-12\">
                            <button type=\"submit\" class=\"default-btn\">
                                Envoyer
                            </button>

                            <div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                    ";
        // line 136
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'form_end');
        echo "

            </div>
        </div>
    </section>
    <!-- End Contact Area -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/reclamation/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 136,  228 => 123,  224 => 122,  211 => 112,  207 => 111,  201 => 108,  193 => 103,  182 => 95,  171 => 87,  99 => 18,  88 => 9,  78 => 8,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Reclamation{% endblock %}




{% block content %}
    <!-- Start Page Banner -->
    <div class=\"page-banner-area item-bg4\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Reclamation</h2>
                        <ul>
                            <li>
                                <a href=\"{{ path('front') }}\">Home</a>
                            </li>
                            <li>Reclamation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Info Area -->
    <section class=\"contact-info-area pt-100 pb-70\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"contact-info-box\">
                        <div class=\"icon\">
                            <i class='bx bx-envelope'></i>
                        </div>

                        <h3>Email ici</h3>

                        <p><a href=\"mailto:support@orgo.com\">contact@foodine.com</a></p>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"contact-info-box\">
                        <div class=\"icon\">
                            <i class='bx bx-map'></i>
                        </div>

                        <h3>Localisation ici</h3>
                        <p>01 Rue des Oranges ,Tunis</p>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"contact-info-box\">
                        <div class=\"icon\">
                            <i class='bx bxs-phone-call'></i>
                        </div>

                        <h3>Appelez ici</h3>
                        <p><a href=\"#\">+216 70100100</a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->


    <!-- Start Contact Area -->
    <section class=\"contact-area ptb-100\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Réclamation</h2>

            </div>

            <div class=\"contact-form\">

                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6\">
                            <div class=\"form-group\">
                                <label>Prénom</label>
                                <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" readonly value=\"{{ app.user.nom }}\">

                            </div>
                        </div>

                        <div class=\"col-lg-6 col-md-6\">
                            <div class=\"form-group\">
                                <label>Nom</label>
                                <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" readonly value=\"{{ app.user.prenom }}\">

                            </div>
                        </div>

                        <div class=\"col-lg-12 col-md-12\">
                            <div class=\"form-group\">
                                <label>Votre adresse Email</label>
                                <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" readonly value=\"{{ app.user.Email }}\">
                                <div class=\"help-block with-errors\"></div>
                            </div>
                        </div>

                        {{ form_start(form) }}
                        <div class=\"col-lg-12 col-md-12\">
                            <div class=\"form-group\">
                                {{ form_label(form.Type) }}
                                {{ form_widget(form.Type,{'attr': {'class':'form-check '}}) }}

                                <div class=\"help-block with-errors\"></div>
                            </div>
                        </div>

                        <div class=\"col-lg-12 col-md-12\">
                            <div class=\"form-group\">


                                {{ form_label(form.Description) }}
                                {{ form_widget(form.Description,{'attr': {'class':'form-control '}}) }}
                            </div>
                        </div>

                        <div class=\"col-lg-12 col-md-12\">
                            <button type=\"submit\" class=\"default-btn\">
                                Envoyer
                            </button>

                            <div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                    {{ form_end(form) }}

            </div>
        </div>
    </section>
    <!-- End Contact Area -->


{% endblock %}", "front/reclamation/add.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\reclamation\\add.html.twig");
    }
}
