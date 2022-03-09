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

/* front/security/registration.html.twig */
class __TwigTemplate_fd1ba3e9a54a7eb3794b314b2936c531d8b10ae7b77dfcc727caf15caba0c165 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/registration.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/security/registration.html.twig", 1);
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

        echo "Inscription";
        
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
                        <h2>Inscription</h2>
                        <ul>
                            <li>
                                <a href=";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo ">Home</a>
                            </li>
                            <li>Inscription</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .custom-error {

            color: #A94442;

        }
    </style>


    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
    <section class=\"register-area ptb-100\">
        <div class=\"container\">
            <div class=\"register-form\">
                <h2>Inscription</h2>
                <div class=\"form-group\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 42, $this->source); })()), "Nom", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 46, $this->source); })()), "Prenom", [], "any", false, false, false, 46), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 51, $this->source); })()), "Username", [], "any", false, false, false, 51), 'errors');
        echo "
                    </div>
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 53, $this->source); })()), "Username", [], "any", false, false, false, 53), 'label', ["attr" => ["class" => "form-label"], "label" => "Username"]);
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 54, $this->source); })()), "Username", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 58, $this->source); })()), "Email", [], "any", false, false, false, 58), 'errors');
        echo "
                    </div>
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 60, $this->source); })()), "Email", [], "any", false, false, false, 60), 'label', ["attr" => ["class" => "form-label"], "label" => "Adresse Email"]);
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 61, $this->source); })()), "Email", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 66, $this->source); })()), "Password", [], "any", false, false, false, 66), 'errors');
        echo "
                </div>
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 68, $this->source); })()), "Password", [], "any", false, false, false, 68), 'label', ["attr" => ["class" => "form-label"], "label" => "Mot de passe"]);
        echo "
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 69, $this->source); })()), "Password", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 73, $this->source); })()), "Confirm_password", [], "any", false, false, false, 73), 'errors');
        echo "
                    </div>
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 75, $this->source); })()), "Confirm_password", [], "any", false, false, false, 75), 'label', ["attr" => ["class" => "form-label"], "label" => "Confirmer mot de passe"]);
        echo "
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 76, $this->source); })()), "Confirm_password", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 79, $this->source); })()), "file", [], "any", false, false, false, 79), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 84, $this->source); })()), "captcha", [], "any", false, false, false, 84), 'errors');
        echo "
                    </div>
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 86, $this->source); })()), "captcha", [], "any", false, false, false, 86), 'label', ["attr" => ["class" => "form-label"], "label" => "Captcha"]);
        echo "
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 87, $this->source); })()), "captcha", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"default-btn\">Inscription </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
    ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 97, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 97,  225 => 87,  221 => 86,  216 => 84,  208 => 79,  202 => 76,  198 => 75,  193 => 73,  186 => 69,  182 => 68,  177 => 66,  169 => 61,  165 => 60,  160 => 58,  153 => 54,  149 => 53,  144 => 51,  136 => 46,  129 => 42,  120 => 36,  99 => 18,  88 => 9,  78 => 8,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Inscription{% endblock %}




{% block content %}
    <!-- Start Page Banner -->
    <div class=\"page-banner-area item-bg4\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Inscription</h2>
                        <ul>
                            <li>
                                <a href={{ path('front') }}>Home</a>
                            </li>
                            <li>Inscription</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .custom-error {

            color: #A94442;

        }
    </style>


    {{ form_start(f) }}
    <section class=\"register-area ptb-100\">
        <div class=\"container\">
            <div class=\"register-form\">
                <h2>Inscription</h2>
                <div class=\"form-group\">
                    {{ form_row(f.Nom,{'attr': {'class':'form-control'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(f.Prenom,{'attr': {'class':'form-control'}}) }}

                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        {{form_errors(f.Username)}}
                    </div>
                    {{ form_label(f.Username,\"Username\",{'attr':{'class':'form-label'}}) }}
                    {{ form_widget(f.Username,{'attr': {'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        {{form_errors(f.Email)}}
                    </div>
                    {{ form_label(f.Email,\"Adresse Email\",{'attr':{'class':'form-label'}}) }}
                    {{ form_widget(f.Email,{'attr': {'class':'form-control'}}) }}

                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                    {{form_errors(f.Password)}}
                </div>
                {{ form_label(f.Password,\"Mot de passe\",{'attr':{'class':'form-label'}}) }}
                {{ form_widget(f.Password,{'attr': {'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        {{form_errors(f.Confirm_password)}}
                    </div>
                    {{ form_label(f.Confirm_password,\"Confirmer mot de passe\",{'attr':{'class':'form-label'}}) }}
                    {{ form_widget(f.Confirm_password,{'attr': {'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(f.file,{'attr': {'class':'form-control'}}) }}
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-error\">
                        {{form_errors(f.captcha)}}
                    </div>
                    {{ form_label(f.captcha,\"Captcha\",{'attr':{'class':'form-label'}}) }}
                    {{ form_widget(f.captcha,{'attr': {'class':'form-control'}}) }}
                </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"default-btn\">Inscription </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{ form_end(f) }}


{% endblock  %}
", "front/security/registration.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\security\\registration.html.twig");
    }
}
