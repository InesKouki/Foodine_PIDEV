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

/* front/security/ForgottenPass.html.twig */
class __TwigTemplate_69e0d4a54e12706b537d32d28a5a90a413d5d5893188609a371bbf39b3490add extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/ForgottenPass.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/ForgottenPass.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--favicon-->
    <link rel=\"icon\" href=\"/back/assets/images/favicon-32x32.png\" type=\"image/png\" />
    <!-- loader-->
    <link href=\"/back/assets/css/pace.min.css\" rel=\"stylesheet\" />
    <script src=\"/back/assets/js/pace.min.js\"></script>
    <!-- Bootstrap CSS -->
    <link href=\"/back/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"/back/assets/css/app.css\" rel=\"stylesheet\">
    <link href=\"/back/assets/css/icons.css\" rel=\"stylesheet\">
    <title> Foodine - Mot de passe oublié\"</title>
</head>
    <body class=\"bg-theme bg-theme6\">
    <!-- wrapper -->
    <div class=\"wrapper\">
        <div class=\"authentication-forgot d-flex align-items-center justify-content-center\">
            <div class=\"card forgot-box\">
                <div class=\"card-body\">
                    <div class=\"p-4 rounded  border\">
                        <div class=\"text-center\">
                            <img src=\"/back/assets/images/icons/forgot-2.png\" width=\"120\" alt=\"\" />
                        </div>
                        <h4 class=\"mt-5 font-weight-bold\">Mot de passe oublié ?</h4>
                        <p class=\"\">Entrez votre Email pour réinitialiser le mot de passe</p>
                        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
                        <div class=\"my-4\">
                            ";
        // line 34
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors')) {
            // line 35
            echo "                            <div class=\"alert alert-danger\"
                            ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'errors');
            echo "
                        </div>
                        ";
        }
        // line 39
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'label', ["label" => "Email"]);
        echo "
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>



                        <div class=\"d-grid gap-2\">
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Envoyer", [], "any", false, false, false, 46), 'row', ["attr" => ["class" => "btn btn-light btn-lg"]]);
        echo "
                            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"btn btn-light btn-lg\"><i class='bx bx-arrow-back me-1'></i>Retour</a>
                        </div>
                        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/security/ForgottenPass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 49,  110 => 47,  106 => 46,  97 => 40,  92 => 39,  86 => 36,  83 => 35,  81 => 34,  76 => 32,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--favicon-->
    <link rel=\"icon\" href=\"/back/assets/images/favicon-32x32.png\" type=\"image/png\" />
    <!-- loader-->
    <link href=\"/back/assets/css/pace.min.css\" rel=\"stylesheet\" />
    <script src=\"/back/assets/js/pace.min.js\"></script>
    <!-- Bootstrap CSS -->
    <link href=\"/back/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"/back/assets/css/app.css\" rel=\"stylesheet\">
    <link href=\"/back/assets/css/icons.css\" rel=\"stylesheet\">
    <title> Foodine - Mot de passe oublié\"</title>
</head>
    <body class=\"bg-theme bg-theme6\">
    <!-- wrapper -->
    <div class=\"wrapper\">
        <div class=\"authentication-forgot d-flex align-items-center justify-content-center\">
            <div class=\"card forgot-box\">
                <div class=\"card-body\">
                    <div class=\"p-4 rounded  border\">
                        <div class=\"text-center\">
                            <img src=\"/back/assets/images/icons/forgot-2.png\" width=\"120\" alt=\"\" />
                        </div>
                        <h4 class=\"mt-5 font-weight-bold\">Mot de passe oublié ?</h4>
                        <p class=\"\">Entrez votre Email pour réinitialiser le mot de passe</p>
                        {{ form_start(form) }}
                        <div class=\"my-4\">
                            {% if form_errors(form.email) %}
                            <div class=\"alert alert-danger\"
                            {{ form_errors(form.email) }}
                        </div>
                        {% endif %}
                            {{ form_label(form.email,'Email') }}
                            {{ form_widget(form.email,{'attr': {'class':'form-control'}}) }}
                        </div>



                        <div class=\"d-grid gap-2\">
                            {{ form_row(form.Envoyer,{'attr': {'class':'btn btn-light btn-lg'}}) }}
                            <a href=\"{{ path('login') }}\" class=\"btn btn-light btn-lg\"><i class='bx bx-arrow-back me-1'></i>Retour</a>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

", "front/security/ForgottenPass.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\security\\ForgottenPass.html.twig");
    }
}
