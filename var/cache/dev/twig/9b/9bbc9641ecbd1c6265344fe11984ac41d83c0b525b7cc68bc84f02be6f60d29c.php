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

/* front/security/login.html.twig */
class __TwigTemplate_c162973c6d7a227c7676691ed47cb741e9cbdf237cfbe09ddf6bfd6e331332cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/login.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/security/login.html.twig", 1);
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

        echo "Connexion";
        
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
        <div class=\"page-banner-area item-bg4\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <div class=\"container\">
                        <div class=\"page-banner-content\">
                            <h2>Connexion</h2>
                            <ul>
                                <li>
                                    <a href=\"index.html\">Home</a>
                                </li>
                                <li>Connexion</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Login Area -->
        <section class=\"login-area ptb-100\">
            <div class=\"container\">
                ";
        // line 30
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageKey", [], "any", false, false, false, 32), "html", null, true);
            echo "
                </div>
                ";
        }
        // line 35
        echo "
                <div class=\"login-form\">
                    <h2>Connexion</h2>

                    <form action=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                        <div class=\"form-group\">
                            <label>Username</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" ,required name=\"_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) || array_key_exists("lastUsername", $context) ? $context["lastUsername"] : (function () { throw new RuntimeError('Variable "lastUsername" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\">
                        </div>

                        <div class=\"form-group\">
                            <label>Mot de passe</label>
                            <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\"required name=\"_password\">
                        </div>

                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkme\">
                                    <label class=\"form-check-label\" for=\"checkme\">Remember me</label>
                                </div>
                            </div>

                            <div class=\"col-lg-6 col-md-6 col-sm-6 lost-your-password\">
                                <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oubliPass");
        echo "\" class=\"lost-your-password\">Avec-vous oublié votre mot de passe?</a>
                            </div>
                        </div>

                        <button type=\"submit\" class=\"default-btn\">Connexion</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Login Area -->
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 59,  137 => 42,  131 => 39,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block content%}

        <!-- Start Page Banner -->
        <div class=\"page-banner-area item-bg4\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <div class=\"container\">
                        <div class=\"page-banner-content\">
                            <h2>Connexion</h2>
                            <ul>
                                <li>
                                    <a href=\"index.html\">Home</a>
                                </li>
                                <li>Connexion</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Login Area -->
        <section class=\"login-area ptb-100\">
            <div class=\"container\">
                {% if error %}
                <div class=\"alert alert-danger\">
                    {{ error.messageKey }}
                </div>
                {% endif %}

                <div class=\"login-form\">
                    <h2>Connexion</h2>

                    <form action=\"{{ path('login')}}\" method=\"post\">
                        <div class=\"form-group\">
                            <label>Username</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" ,required name=\"_username\" value=\"{{ lastUsername }}\">
                        </div>

                        <div class=\"form-group\">
                            <label>Mot de passe</label>
                            <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\"required name=\"_password\">
                        </div>

                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkme\">
                                    <label class=\"form-check-label\" for=\"checkme\">Remember me</label>
                                </div>
                            </div>

                            <div class=\"col-lg-6 col-md-6 col-sm-6 lost-your-password\">
                                <a href=\"{{ path('oubliPass') }}\" class=\"lost-your-password\">Avec-vous oublié votre mot de passe?</a>
                            </div>
                        </div>

                        <button type=\"submit\" class=\"default-btn\">Connexion</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Login Area -->
        
{% endblock %}", "front/security/login.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\security\\login.html.twig");
    }
}
