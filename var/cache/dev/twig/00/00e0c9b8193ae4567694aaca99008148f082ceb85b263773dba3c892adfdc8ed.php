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

/* back/reclamations/show.html.twig */
class __TwigTemplate_525e7931efa1b1c5c13f51fc7a276ed94435119b477e7105bcb613b2d4f0f301 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reclamations/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reclamations/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/reclamations/show.html.twig", 1);
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
        echo "    Afficher Réclamations
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
        echo "    <!--start page wrapper -->
    <div class=\"page-wrapper\">
        <div class=\"page-content\">
            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\"> Réclamations </div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bxs-report\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

        </br>
            <h6 class=\"mb-0 text-uppercase\">Liste des Réclamations</h6>
            <hr/>
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table id=\"table\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                            <thead>
                            <tr>
                                <th>Nom du client </th>
                                <th>type de la réclamation</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Etat</th>
                                <th>Traiter</th>
                                <th>Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["rec"]);
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 45
            echo "                            <tr>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rec"], "user", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rec"], "type", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                <td></td>
                                <td> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rec"], "Description", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                <td> ";
            // line 50
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rec"], "etat", [], "any", false, false, false, 50), 0))) {
                // line 51
                echo "                                <span class=\"badge bg-light text-white w-100\">Non Traitée</span>
                                ";
            } else {
                // line 53
                echo "                                <span class=\"badge bg-light text-white w-100\">Traitée</span>
                                ";
            }
            // line 55
            echo "                                </td>
                                ";
            // line 56
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rec"], "etat", [], "any", false, false, false, 56), 0))) {
                // line 57
                echo "                                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rec_res", ["id" => twig_get_attribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\" class=\"text-white bg-light border-0\"><i class='bx bxs-edit'></i></a></td>
                                <td><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_rec", ["id" => twig_get_attribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a></td>
                                ";
            } else {
                // line 60
                echo "                                    <td><a href=\"#\" class=\"text-white bg-light border-0\"><i class='bx bxs-edit'></i></a></td>
                                    <td><a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_rec", ["id" => twig_get_attribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a></td>
                                ";
            }
            // line 63
            echo "                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                            </tbody>
                            <tfoot>
                            <tr>
                            <tr>
                                <th>Nom du client </th>
                                <th>type de la réclamation</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Etat</th>
                                <th>Traiter</th>
                                <th>Supprimer</th>
                            </tr>
                            </tr>
                            </tfoot>
                        </table>
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
        return "back/reclamations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 65,  183 => 63,  178 => 61,  175 => 60,  170 => 58,  165 => 57,  163 => 56,  160 => 55,  156 => 53,  152 => 51,  150 => 50,  146 => 49,  141 => 47,  137 => 46,  134 => 45,  130 => 44,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
    Afficher Réclamations
{% endblock %}
{% block content %}
    <!--start page wrapper -->
    <div class=\"page-wrapper\">
        <div class=\"page-content\">
            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\"> Réclamations </div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bxs-report\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

        </br>
            <h6 class=\"mb-0 text-uppercase\">Liste des Réclamations</h6>
            <hr/>
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table id=\"table\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                            <thead>
                            <tr>
                                <th>Nom du client </th>
                                <th>type de la réclamation</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Etat</th>
                                <th>Traiter</th>
                                <th>Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for rec in rec %}
                            <tr>
                                <td>{{ rec.user.nom }}</td>
                                <td>{{ rec.type }}</td>
                                <td></td>
                                <td> {{ rec.Description }}</td>
                                <td> {% if rec.etat == 0 %}
                                <span class=\"badge bg-light text-white w-100\">Non Traitée</span>
                                {% else %}
                                <span class=\"badge bg-light text-white w-100\">Traitée</span>
                                {% endif %}
                                </td>
                                {% if rec.etat== 0 %}
                                <td><a href=\"{{path(\"rec_res\",{'id':rec.id})}}\" class=\"text-white bg-light border-0\"><i class='bx bxs-edit'></i></a></td>
                                <td><a href=\"{{ path('delete_rec',{'id':rec.id}) }}\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a></td>
                                {% else %}
                                    <td><a href=\"#\" class=\"text-white bg-light border-0\"><i class='bx bxs-edit'></i></a></td>
                                    <td><a href=\"{{ path('delete_rec',{'id':rec.id}) }}\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a></td>
                                {% endif %}
                            </tr>
                            {% endfor %}

                            </tbody>
                            <tfoot>
                            <tr>
                            <tr>
                                <th>Nom du client </th>
                                <th>type de la réclamation</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Etat</th>
                                <th>Traiter</th>
                                <th>Supprimer</th>
                            </tr>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!--end page wrapper -->
{% endblock %}", "back/reclamations/show.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\reclamations\\show.html.twig");
    }
}
