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

/* back/Notifications/show.html.twig */
class __TwigTemplate_761006afa165d29c1a4501824d78ef5dd3bc149766f1a9025c828aa8d38c384c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/Notifications/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/Notifications/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/Notifications/show.html.twig", 1);
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
        echo "    Afficher Notification
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
                <div class=\"breadcrumb-title pe-3\"> Notification </div>
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
            <h6 class=\"mb-0 text-uppercase\">Liste des Notifications</h6>
            <hr/>
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table id=\"table\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                            <thead>
                            <tr>
                                <th>Message </th>
                                <th>Titre</th>
                                <th>Etat</th>

                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["notif"]);
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 42
            echo "                                <tr>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "message", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "titre", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>

                                    <td> ";
            // line 46
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["notif"], "Status", [], "any", false, false, false, 46), 0))) {
                // line 47
                echo "                                            <span class=\"badge bg-light text-white w-100\">Unseen</span>
                                        ";
            } else {
                // line 49
                echo "                                            <span class=\"badge bg-light text-white w-100\">Seen</span>
                                        ";
            }
            // line 51
            echo "                                    </td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
                            </tbody>
                            <tfoot>
                            <tr>
                            <tr>
                                <th>Message </th>
                                <th>Titre</th>
                                <th>Etat</th>

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
        return "back/Notifications/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  153 => 51,  149 => 49,  145 => 47,  143 => 46,  138 => 44,  134 => 43,  131 => 42,  127 => 41,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
    Afficher Notification
{% endblock %}
{% block content %}
    <!--start page wrapper -->
    <div class=\"page-wrapper\">
        <div class=\"page-content\">
            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\"> Notification </div>
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
            <h6 class=\"mb-0 text-uppercase\">Liste des Notifications</h6>
            <hr/>
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table id=\"table\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                            <thead>
                            <tr>
                                <th>Message </th>
                                <th>Titre</th>
                                <th>Etat</th>

                            </tr>
                            </thead>
                            <tbody>
                            {% for notif in notif %}
                                <tr>
                                    <td>{{ notif.message }}</td>
                                    <td>{{ notif.titre }}</td>

                                    <td> {% if notif.Status == 0 %}
                                            <span class=\"badge bg-light text-white w-100\">Unseen</span>
                                        {% else %}
                                            <span class=\"badge bg-light text-white w-100\">Seen</span>
                                        {% endif %}
                                    </td>

                                </tr>
                            {% endfor %}

                            </tbody>
                            <tfoot>
                            <tr>
                            <tr>
                                <th>Message </th>
                                <th>Titre</th>
                                <th>Etat</th>

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
{% endblock %}", "back/Notifications/show.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\Notifications\\show.html.twig");
    }
}
