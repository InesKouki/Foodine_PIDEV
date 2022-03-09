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

/* front/Client/profile.html.twig */
class __TwigTemplate_c908bce7ecb776f2cf2ad72b98d6d45a224873410957d3dcbf501da8d31e8ec2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/Client/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/Client/profile.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/Client/profile.html.twig", 2);
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

        echo "Profile";
        
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
        echo "    <!--start page wrapper -->
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
                                        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "file", [], "any", false, false, false, 19))), "html", null, true);
        echo "\" alt=\"file\" class=\"rounded-circle p-1 bg-primary\" width=\"290\" >
                                        <div class=\"mt-3\">
                                            <h4>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "Nom", [], "any", false, false, false, 21), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "Prenom", [], "any", false, false, false, 21), "html", null, true);
        echo " </h4>
                                            <h5>#";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "Username", [], "any", false, false, false, 22), "html", null, true);
        echo " </h5>
                                            <p class=\"font-size-sm\"></p>
                                            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_profilup", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\"> <button type=\"submit\" class=\"default-btn\">Modifier les informations</button> </a>
                                            <hr>
                                            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_editPass", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\"> <button type=\"submit\" class=\"default-btn\">Modifier Mot de passe</button> </a>
                                        </div>
                                    </div>
                                    <hr class=\"my-4\" />

                                </div>
                            </div>
                        </div>



                        <div class=\"col-lg-8\">
                            <div class=\"card\">
                                <div class=\"card-body\">


                                    <div class=\"row mb-3\">
                                        <div class=\"col-sm-3\">
                                            <h6 class=\"mb-0\">Nom & Prenom:</h6>
                                        </div>
                                        <div class=\"col-sm-9\">
                                            <h6 type=\"text\" class=\"lead\" >";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "prenom", [], "any", false, false, false, 47), "html", null, true);
        echo "</h6>
                                        </div>
                                    </div>



                                    <div class=\"row mb-3\">
                                        <div class=\"col-sm-3\">
                                            <h6 class=\"mb-0\">Email:</h6>
                                        </div>
                                        <div class=\"col-sm-9\">
                                            <h6 type=\"text\" class=\"lead\" >";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "Email", [], "any", false, false, false, 58), "html", null, true);
        echo "</h6>
                                        </div>
                                    </div>
                                    <div class=\"row mb-3\">
                                        <div class=\"col-sm-3\">
                                            <h6 class=\"mb-0\">Phone:</h6>
                                        </div>
                                        <div class=\"col-sm-9\">
                                            <h6 type=\"text\" class=\"lead\" >";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "Phone", [], "any", false, false, false, 66), "html", null, true);
        echo "</h6>
                                        </div>
                                    </div>
                                    <div class=\"row mb-3\">
                                        <div class=\"col-sm-3\">
                                            <h6 class=\"mb-0\">Adresse:</h6>
                                        </div>
                                        <div class=\"col-sm-9\">
                                            <h6 type=\"text\" class=\"lead\" >";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "address", [], "any", false, false, false, 74), "html", null, true);
        echo "</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>




                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <h5 class=\"d-flex align-items-center mb-3\">Historique des commandes</h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        return "front/Client/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 74,  174 => 66,  163 => 58,  147 => 47,  123 => 26,  118 => 24,  113 => 22,  107 => 21,  102 => 19,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'baseFront.html.twig' %}

{% block title %}Profile{% endblock %}

{% block content %}
    <!--start page wrapper -->
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
                                            <a href=\"{{path('client_profilup',{'id':app.user.id})}}\"> <button type=\"submit\" class=\"default-btn\">Modifier les informations</button> </a>
                                            <hr>
                                            <a href=\"{{path('client_editPass',{'id':app.user.id})}}\"> <button type=\"submit\" class=\"default-btn\">Modifier Mot de passe</button> </a>
                                        </div>
                                    </div>
                                    <hr class=\"my-4\" />

                                </div>
                            </div>
                        </div>



                        <div class=\"col-lg-8\">
                            <div class=\"card\">
                                <div class=\"card-body\">


                                    <div class=\"row mb-3\">
                                        <div class=\"col-sm-3\">
                                            <h6 class=\"mb-0\">Nom & Prenom:</h6>
                                        </div>
                                        <div class=\"col-sm-9\">
                                            <h6 type=\"text\" class=\"lead\" >{{app.user.nom }} {{app.user.prenom }}</h6>
                                        </div>
                                    </div>



                                    <div class=\"row mb-3\">
                                        <div class=\"col-sm-3\">
                                            <h6 class=\"mb-0\">Email:</h6>
                                        </div>
                                        <div class=\"col-sm-9\">
                                            <h6 type=\"text\" class=\"lead\" >{{app.user.Email}}</h6>
                                        </div>
                                    </div>
                                    <div class=\"row mb-3\">
                                        <div class=\"col-sm-3\">
                                            <h6 class=\"mb-0\">Phone:</h6>
                                        </div>
                                        <div class=\"col-sm-9\">
                                            <h6 type=\"text\" class=\"lead\" >{{app.user.Phone}}</h6>
                                        </div>
                                    </div>
                                    <div class=\"row mb-3\">
                                        <div class=\"col-sm-3\">
                                            <h6 class=\"mb-0\">Adresse:</h6>
                                        </div>
                                        <div class=\"col-sm-9\">
                                            <h6 type=\"text\" class=\"lead\" >{{app.user.address}}</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>




                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <h5 class=\"d-flex align-items-center mb-3\">Historique des commandes</h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
{% endblock %}", "front/Client/profile.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\Client\\profile.html.twig");
    }
}
