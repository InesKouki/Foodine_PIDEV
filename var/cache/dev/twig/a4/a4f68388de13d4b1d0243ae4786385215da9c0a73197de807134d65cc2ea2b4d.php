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

/* front/Client/editpass.html.twig */
class __TwigTemplate_25e8014e4acbd480d82e6732fc9052dfd3c41e8dabc7d94c048c48f85e7e478a extends Template
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
        // line 2
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/Client/editpass.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/Client/editpass.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/Client/editpass.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier Mot de passe";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <div class=\"container\">
                <div class=\"main-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    </br></br></br></br>
                                    <div class=\"d-flex flex-column align-items-center text-center\">
                                        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "file", [], "any", false, false, false, 18))), "html", null, true);
        echo "\" alt=\"file\" class=\"rounded-circle p-1 bg-primary\" width=\"290\" >
                                        <div class=\"mt-3\">
                                            <h4>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "Nom", [], "any", false, false, false, 20), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "Prenom", [], "any", false, false, false, 20), "html", null, true);
        echo " </h4>
                                            <h5>#";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "Username", [], "any", false, false, false, 21), "html", null, true);
        echo " </h5>
                                            <p class=\"font-size-sm\"></p>
                                        </div>
                                    </div>
                                    <hr class=\"my-4\" />
                                </div>
                            </div>
                        </div>



                        <div class=\"col-lg-8\">
                            <br> <br> <br> <br><br>
                            <div class=\"row\">
                                <div class=\"col-lg-8\">
                                    <div class=\"card\">

                                        <div class=\"card-body\">
                                            <div class=\"row mb-3\">

                                                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start');
        echo "

                                                <div class=\"form-group\">
                                                    ";
        // line 44
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "Password", [], "any", false, false, false, 44), 'errors')) {
            // line 45
            echo "                                                    <div class=\"alert alert-danger\"
                                                    ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Password", [], "any", false, false, false, 46), 'errors');
            echo "
                                                </div>
                                                ";
        }
        // line 49
        echo "                                                <h6 class=\"mb-0\"> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "Password", [], "any", false, false, false, 49), 'label', ["label" => "Password"]);
        echo "</h6>

                                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "Password", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 55
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'errors')) {
            // line 56
            echo "                                                <div class=\"alert alert-danger\"
                                                ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'errors');
            echo "
                                            </div>
                                            ";
        }
        // line 60
        echo "                                            <h6 class=\"mb-0\"> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "Confirm_password", [], "any", false, false, false, 60), 'label', ["label" => "Confirm_password"]);
        echo "</h6>

                                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "Confirm_password", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                        </div>


                                    </div>








                                    <div class=\"row\">
                                        <div class=\"col-sm-3\"></div>

                                     <button type=\"submit\" class=\"default-btn\">Enregistrer les modifications</button>




                             </div>
                                 ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
                                <br>
                            </div>
                        </div>
                    </div>
                 </div>
    </div>
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
        return "front/Client/editpass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 85,  182 => 62,  176 => 60,  170 => 57,  167 => 56,  165 => 55,  158 => 51,  152 => 49,  146 => 46,  143 => 45,  141 => 44,  135 => 41,  112 => 21,  106 => 20,  101 => 18,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'baseFront.html.twig' %}

{% block title %}Modifier Mot de passe{% endblock %}

{% block content %}
    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <div class=\"container\">
                <div class=\"main-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    </br></br></br></br>
                                    <div class=\"d-flex flex-column align-items-center text-center\">
                                        <img src=\"{{ asset('uploads/' ~ app.user.file ) }}\" alt=\"file\" class=\"rounded-circle p-1 bg-primary\" width=\"290\" >
                                        <div class=\"mt-3\">
                                            <h4>{{app.user.Nom }} {{app.user.Prenom }} </h4>
                                            <h5>#{{app.user.Username }} </h5>
                                            <p class=\"font-size-sm\"></p>
                                        </div>
                                    </div>
                                    <hr class=\"my-4\" />
                                </div>
                            </div>
                        </div>



                        <div class=\"col-lg-8\">
                            <br> <br> <br> <br><br>
                            <div class=\"row\">
                                <div class=\"col-lg-8\">
                                    <div class=\"card\">

                                        <div class=\"card-body\">
                                            <div class=\"row mb-3\">

                                                {{ form_start(form) }}

                                                <div class=\"form-group\">
                                                    {% if form_errors(form.Password) %}
                                                    <div class=\"alert alert-danger\"
                                                    {{ form_errors(form.Password) }}
                                                </div>
                                                {% endif %}
                                                <h6 class=\"mb-0\"> {{ form_label(form.Password,'Password') }}</h6>

                                                {{ form_widget(form.Password,{'attr': {'class':'form-control'}}) }}

                                            </div>
                                            <div class=\"form-group\">
                                                {% if form_errors(form) %}
                                                <div class=\"alert alert-danger\"
                                                {{ form_errors(form) }}
                                            </div>
                                            {% endif %}
                                            <h6 class=\"mb-0\"> {{ form_label(form.Confirm_password,'Confirm_password') }}</h6>

                                            {{ form_widget(form.Confirm_password,{'attr': {'class':'form-control'}}) }}

                                        </div>


                                    </div>








                                    <div class=\"row\">
                                        <div class=\"col-sm-3\"></div>

                                     <button type=\"submit\" class=\"default-btn\">Enregistrer les modifications</button>




                             </div>
                                 {{ form_end(form) }}
                                <br>
                            </div>
                        </div>
                    </div>
                 </div>
    </div>
    </div>
    </div>
    </div>
    </div>
{% endblock %}", "front/Client/editpass.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\Client\\editpass.html.twig");
    }
}
