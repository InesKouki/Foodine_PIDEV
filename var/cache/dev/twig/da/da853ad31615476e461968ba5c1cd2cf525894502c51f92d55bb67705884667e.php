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

/* front/Client/modifierprofile.html.twig */
class __TwigTemplate_79117c088455ac307ca2086cf6dd8661fa13ca381f3f8e24c78382cbdf31f574 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/Client/modifierprofile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/Client/modifierprofile.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/Client/modifierprofile.html.twig", 2);
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

        echo "Modifier Profile";
        
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
                            <div class=\"row\">
                                <div class=\"col-lg-8\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row mb-3\">

                                                ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
                                                <div class=\"form-group\">
                                                        ";
        // line 41
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Nom", [], "any", false, false, false, 41), 'errors')) {
            // line 42
            echo "                                                            <div class=\"alert alert-danger\"
                                                             ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "Nom", [], "any", false, false, false, 43), 'errors');
            echo "
                                                             </div>
                                                        ";
        }
        // line 46
        echo "                                                        <h6 class=\"mb-0\"> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Nom", [], "any", false, false, false, 46), 'label', ["label" => "Nom"]);
        echo "</h6>

                                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "Nom", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                                </div>

                                            <div class=\"form-group\">
                                                ";
        // line 53
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Prenom", [], "any", false, false, false, 53), 'errors')) {
            // line 54
            echo "                                                <div class=\"alert alert-danger\"
                                                ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "Prenom", [], "any", false, false, false, 55), 'errors');
            echo "
                                                </div>
                                                    ";
        }
        // line 58
        echo "                                                <h6 class=\"mb-0\"> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "Prenom", [], "any", false, false, false, 58), 'label', ["label" => "Prenom"]);
        echo "</h6>

                                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "Prenom", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                            </div>

                                        <div class=\"form-group\">
                                            ";
        // line 65
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "Phone", [], "any", false, false, false, 65), 'errors')) {
            // line 66
            echo "                                            <div class=\"alert alert-danger\"
                                            ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "Phone", [], "any", false, false, false, 67), 'errors');
            echo "
                                        </div>
                                        ";
        }
        // line 70
        echo "                                        <h6 class=\"mb-0\"> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "Phone", [], "any", false, false, false, 70), 'label', ["label" => "Phone"]);
        echo "</h6>

                                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "Phone", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>

                                        <div class=\"form-group\">
                                            ";
        // line 77
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "Email", [], "any", false, false, false, 77), 'errors')) {
            // line 78
            echo "                                            <div class=\"alert alert-danger\"
                                            ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "Email", [], "any", false, false, false, 79), 'errors');
            echo "
                                            </div>
                                            ";
        }
        // line 82
        echo "                                            <h6 class=\"mb-0\"> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "Email", [], "any", false, false, false, 82), 'label', ["label" => "Email"]);
        echo "</h6>

                                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "Email", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                        </div>

                                    <div class=\"form-group\">
                                        ";
        // line 89
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "Address", [], "any", false, false, false, 89), 'errors')) {
            // line 90
            echo "                                        <div class=\"alert alert-danger\"
                                        ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "Address", [], "any", false, false, false, 91), 'errors');
            echo "
                                    </div>
                                    ";
        }
        // line 94
        echo "                                    <h6 class=\"mb-0\"> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "Address", [], "any", false, false, false, 94), 'label', ["label" => "Address"]);
        echo "</h6>

                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "Address", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                </div>







                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "file", [], "any", false, false, false, 106), 'row');
        echo "

                                </div>








                                            <div class=\"row\">
                                                <div class=\"col-sm-3\"></div>

                                                    <button type=\"submit\" class=\"default-btn\">Enregistrer les modifications</button>




                                            </div>
                                ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'form_end');
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
        return "front/Client/modifierprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 126,  268 => 106,  255 => 96,  249 => 94,  243 => 91,  240 => 90,  238 => 89,  230 => 84,  224 => 82,  218 => 79,  215 => 78,  213 => 77,  205 => 72,  199 => 70,  193 => 67,  190 => 66,  188 => 65,  180 => 60,  174 => 58,  168 => 55,  165 => 54,  163 => 53,  155 => 48,  149 => 46,  143 => 43,  140 => 42,  138 => 41,  133 => 39,  112 => 21,  106 => 20,  101 => 18,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'baseFront.html.twig' %}

{% block title %}Modifier Profile{% endblock %}

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
                            <div class=\"row\">
                                <div class=\"col-lg-8\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row mb-3\">

                                                {{ form_start(form) }}
                                                <div class=\"form-group\">
                                                        {% if form_errors(form.Nom) %}
                                                            <div class=\"alert alert-danger\"
                                                             {{ form_errors(form.Nom) }}
                                                             </div>
                                                        {% endif %}
                                                        <h6 class=\"mb-0\"> {{ form_label(form.Nom,'Nom') }}</h6>

                                                    {{ form_widget(form.Nom,{'attr': {'class':'form-control'}}) }}

                                                </div>

                                            <div class=\"form-group\">
                                                {% if form_errors(form.Prenom) %}
                                                <div class=\"alert alert-danger\"
                                                {{ form_errors(form.Prenom) }}
                                                </div>
                                                    {% endif %}
                                                <h6 class=\"mb-0\"> {{ form_label(form.Prenom,'Prenom') }}</h6>

                                                {{ form_widget(form.Prenom,{'attr': {'class':'form-control'}}) }}

                                            </div>

                                        <div class=\"form-group\">
                                            {% if form_errors(form.Phone) %}
                                            <div class=\"alert alert-danger\"
                                            {{ form_errors(form.Phone) }}
                                        </div>
                                        {% endif %}
                                        <h6 class=\"mb-0\"> {{ form_label(form.Phone,'Phone') }}</h6>

                                        {{ form_widget(form.Phone,{'attr': {'class':'form-control'}}) }}

                                    </div>

                                        <div class=\"form-group\">
                                            {% if form_errors(form.Email) %}
                                            <div class=\"alert alert-danger\"
                                            {{ form_errors(form.Email) }}
                                            </div>
                                            {% endif %}
                                            <h6 class=\"mb-0\"> {{ form_label(form.Email,'Email') }}</h6>

                                            {{ form_widget(form.Email,{'attr': {'class':'form-control'}}) }}

                                        </div>

                                    <div class=\"form-group\">
                                        {% if form_errors(form.Address) %}
                                        <div class=\"alert alert-danger\"
                                        {{ form_errors(form.Address) }}
                                    </div>
                                    {% endif %}
                                    <h6 class=\"mb-0\"> {{ form_label(form.Address,'Address') }}</h6>

                                    {{ form_widget(form.Address,{'attr': {'class':'form-control'}}) }}

                                </div>







                        {{ form_row(form.file) }}

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
{% endblock %}", "front/Client/modifierprofile.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\Client\\modifierprofile.html.twig");
    }
}
