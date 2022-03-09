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

/* front/security/resetPass.html.twig */
class __TwigTemplate_3fa8f21c228a7c2ad24ec3c5e79238456eef7987c8a9a58952632c0aafad9b50 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/resetPass.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/resetPass.html.twig"));

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
    <title>Foodine - Réini</title>
</head>

<body class=\"bg-theme bg-theme6\">
<!-- wrapper -->
<div class=\"wrapper\">
    <div class=\"authentication-reset-password d-flex align-items-center justify-content-center\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-10 mx-auto\">
                <div class=\"card\">
                    <div class=\"row g-0\">
                        <div class=\"col-lg-5 border-end\">
                            <div class=\"card-body\">
                                <div class=\"p-5\">
                                    <div class=\"text-start\">

                                    </div>
                                    <h4 class=\"mt-5 font-weight-bold\">Générer un nouveau mot de passe</h4>
                                    <p class=\"\">
                                        Nous avons bien reçu votre demande de réinitialisation de mot de passe.
                                        Veuillez saisir votre nouveau mot de passe !</p>
                                    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
                                    <div class=\"mb-3 mt-5\">
                                        ";
        // line 41
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Password", [], "any", false, false, false, 41), 'errors')) {
            // line 42
            echo "                                        <div class=\"alert alert-danger\"
                                        ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "Password", [], "any", false, false, false, 43), 'errors');
            echo "
                                    </div>
                                    ";
        }
        // line 46
        echo "                                    <h6 class=\"form-label\"> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Password", [], "any", false, false, false, 46), 'label', ["label" => "Password"]);
        echo "</h6>
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "Password", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                    <div class=\"mb-3\">
                                        ";
        // line 50
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'errors')) {
            // line 51
            echo "                                        <div class=\"alert alert-danger\"
                                        ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'errors');
            echo "
                                    </div>
                                ";
        }
        // line 55
        echo "                                        <h6 class=\"form-label\"> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "Confirm_password", [], "any", false, false, false, 55), 'label', ["label" => "Confirm_password"]);
        echo "</h6>
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "Confirm_password", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <input type=\"hidden\" name=\"token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\">
                                    </div>
                                    <div class=\"d-grid gap-2\">
                                        <button type=\"submit\" class=\"btn btn-light\">Changer mon Mot de passe</button>
                                        <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"btn btn-light\"><i class='bx bx-arrow-back mr-1'></i>Retour</a>
                                    </div>
                                </div>
                            ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-7\">
                            <img src=\"/back/assets/images/login-images/forgot-password-frent-img.jpg\" class=\"card-img login-img h-100\" alt=\"...\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper -->


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/security/resetPass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 64,  137 => 61,  130 => 57,  126 => 56,  121 => 55,  115 => 52,  112 => 51,  110 => 50,  104 => 47,  99 => 46,  93 => 43,  90 => 42,  88 => 41,  83 => 39,  43 => 1,);
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
    <title>Foodine - Réini</title>
</head>

<body class=\"bg-theme bg-theme6\">
<!-- wrapper -->
<div class=\"wrapper\">
    <div class=\"authentication-reset-password d-flex align-items-center justify-content-center\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-10 mx-auto\">
                <div class=\"card\">
                    <div class=\"row g-0\">
                        <div class=\"col-lg-5 border-end\">
                            <div class=\"card-body\">
                                <div class=\"p-5\">
                                    <div class=\"text-start\">

                                    </div>
                                    <h4 class=\"mt-5 font-weight-bold\">Générer un nouveau mot de passe</h4>
                                    <p class=\"\">
                                        Nous avons bien reçu votre demande de réinitialisation de mot de passe.
                                        Veuillez saisir votre nouveau mot de passe !</p>
                                    {{ form_start(form) }}
                                    <div class=\"mb-3 mt-5\">
                                        {% if form_errors(form.Password) %}
                                        <div class=\"alert alert-danger\"
                                        {{ form_errors(form.Password) }}
                                    </div>
                                    {% endif %}
                                    <h6 class=\"form-label\"> {{ form_label(form.Password,'Password') }}</h6>
                                    {{ form_widget(form.Password,{'attr': {'class':'form-control'}}) }}
                                    </div>
                                    <div class=\"mb-3\">
                                        {% if form_errors(form) %}
                                        <div class=\"alert alert-danger\"
                                        {{ form_errors(form) }}
                                    </div>
                                {% endif %}
                                        <h6 class=\"form-label\"> {{ form_label(form.Confirm_password,'Confirm_password') }}</h6>
                                        {{ form_widget(form.Confirm_password,{'attr': {'class':'form-control'}}) }}
                                <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
                                    </div>
                                    <div class=\"d-grid gap-2\">
                                        <button type=\"submit\" class=\"btn btn-light\">Changer mon Mot de passe</button>
                                        <a href=\"{{ path('login') }}\" class=\"btn btn-light\"><i class='bx bx-arrow-back mr-1'></i>Retour</a>
                                    </div>
                                </div>
                            {{ form_end(form) }}
                            </div>
                        </div>
                        <div class=\"col-lg-7\">
                            <img src=\"/back/assets/images/login-images/forgot-password-frent-img.jpg\" class=\"card-img login-img h-100\" alt=\"...\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper -->


</body>

</html>", "front/security/resetPass.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\security\\resetPass.html.twig");
    }
}
