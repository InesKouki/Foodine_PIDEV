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

/* front/employes/chefDetail.html.twig */
class __TwigTemplate_8c7c3fd4df452e483eae7ee5a3ff25577043e72c1fd3b66b909448b3c34e03ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/employes/chefDetail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/employes/chefDetail.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/employes/chefDetail.html.twig", 1);
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

        echo " Profile-Chef";
        
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
    <div class=\"page-banner-area item-bg4\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Profile Chef</h2>
                        <ul>
                            <li>
                                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Home</a>
                            </li>
                            <li>Profile Chef</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class=\"services-details-area pt-100 pb-70\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-8 col-md-12\">
                    <div class=\"services-details-image\">
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new RuntimeError('Variable "chef" does not exist.', 30, $this->source); })()), "file", [], "any", false, false, false, 30))), "html", null, true);
        echo "\" alt=\"image\">
                    </div>


                </div>

                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"services-details-information\">


                        <div class=\"download-file\">
                            <h3>Brochures</h3>

                            <ul>
                                <li><a href=\"#\">PDF Download <i class='bx bxs-file-pdf'></i></a></li>
                                <li><a href=\"#\">Services Details.txt <i class='bx bxs-file-txt'></i></a></li>
                            </ul>
                        </div>

                        <div class=\"services-contact-info\">
                            <h3>Contact Info</h3>

                            <ul>
                                <li>
                                    <div class=\"icon\">
                                        <i class='bx bx-user-pin'></i>
                                    </div>
                                    <span>Phone:</span>
                                   ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new RuntimeError('Variable "chef" does not exist.', 58, $this->source); })()), "phone", [], "any", false, false, false, 58), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <div class=\"icon\">
                                        <i class='bx bx-map'></i>
                                    </div>
                                    <span>Location:</span>
                                    ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new RuntimeError('Variable "chef" does not exist.', 65, $this->source); })()), "address", [], "any", false, false, false, 65), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <div class=\"icon\">
                                        <i class='bx bx-envelope'></i>
                                    </div>
                                    <span>Email:</span>
                                    ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new RuntimeError('Variable "chef" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), "html", null, true);
        echo "
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"related-services\">
                <h5>Liste des recettes</h5>

                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"single-services-box\">
                            <div class=\"icon\">
                                <i class=\"flaticon-apple\"></i>
                            </div>
                            <h3>Nom Recette</h3>
                            <p>Description recette.</p>
                            <a href=\"#\" class=\"read-btn\">Read More +</a>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"single-services-box\">
                            <div class=\"icon\">
                                <i class=\"flaticon-nature\"></i>
                            </div>
                            <h3>Nom Recette</h3>
                            <p>Description recette.</p>
                            <a href=\"#\" class=\"read-btn\">Read More +</a>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"single-services-box\">
                            <div class=\"icon\">
                                <i class=\"flaticon-forest\"></i>
                            </div>
                            <h3>Nom Recette</h3>
                            <p>Description recette.</p>
                            <a href=\"#\" class=\"read-btn\">Read More +</a>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"single-services-box\">
                            <div class=\"icon\">
                                <i class=\"flaticon-organic\"></i>
                            </div>
                            <h3>Nom Recette</h3>
                            <p>Description recette.</p>
                            <a href=\"#\" class=\"read-btn\">Read More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/employes/chefDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 72,  158 => 65,  148 => 58,  117 => 30,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %} Profile-Chef{% endblock %}

{% block content %}

    <div class=\"page-banner-area item-bg4\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Profile Chef</h2>
                        <ul>
                            <li>
                                <a href=\"{{ path('front') }}\">Home</a>
                            </li>
                            <li>Profile Chef</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class=\"services-details-area pt-100 pb-70\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-8 col-md-12\">
                    <div class=\"services-details-image\">
                        <img src=\"{{ asset('uploads/' ~ chef.file ) }}\" alt=\"image\">
                    </div>


                </div>

                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"services-details-information\">


                        <div class=\"download-file\">
                            <h3>Brochures</h3>

                            <ul>
                                <li><a href=\"#\">PDF Download <i class='bx bxs-file-pdf'></i></a></li>
                                <li><a href=\"#\">Services Details.txt <i class='bx bxs-file-txt'></i></a></li>
                            </ul>
                        </div>

                        <div class=\"services-contact-info\">
                            <h3>Contact Info</h3>

                            <ul>
                                <li>
                                    <div class=\"icon\">
                                        <i class='bx bx-user-pin'></i>
                                    </div>
                                    <span>Phone:</span>
                                   {{ chef.phone }}
                                </li>
                                <li>
                                    <div class=\"icon\">
                                        <i class='bx bx-map'></i>
                                    </div>
                                    <span>Location:</span>
                                    {{chef.address }}
                                </li>
                                <li>
                                    <div class=\"icon\">
                                        <i class='bx bx-envelope'></i>
                                    </div>
                                    <span>Email:</span>
                                    {{chef.email}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"related-services\">
                <h5>Liste des recettes</h5>

                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"single-services-box\">
                            <div class=\"icon\">
                                <i class=\"flaticon-apple\"></i>
                            </div>
                            <h3>Nom Recette</h3>
                            <p>Description recette.</p>
                            <a href=\"#\" class=\"read-btn\">Read More +</a>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"single-services-box\">
                            <div class=\"icon\">
                                <i class=\"flaticon-nature\"></i>
                            </div>
                            <h3>Nom Recette</h3>
                            <p>Description recette.</p>
                            <a href=\"#\" class=\"read-btn\">Read More +</a>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"single-services-box\">
                            <div class=\"icon\">
                                <i class=\"flaticon-forest\"></i>
                            </div>
                            <h3>Nom Recette</h3>
                            <p>Description recette.</p>
                            <a href=\"#\" class=\"read-btn\">Read More +</a>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"single-services-box\">
                            <div class=\"icon\">
                                <i class=\"flaticon-organic\"></i>
                            </div>
                            <h3>Nom Recette</h3>
                            <p>Description recette.</p>
                            <a href=\"#\" class=\"read-btn\">Read More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "front/employes/chefDetail.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\employes\\chefDetail.html.twig");
    }
}
