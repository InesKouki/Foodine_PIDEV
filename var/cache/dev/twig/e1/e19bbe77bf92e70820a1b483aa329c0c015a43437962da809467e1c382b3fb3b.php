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

/* back/evenement/index.html.twig */
class __TwigTemplate_daa0f68d145f58781505790d38b4ec70afa4220415e7465aadd1f752eaba5de3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/evenement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/evenement/index.html.twig", 1);
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
        echo "    Evénements
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
                <div class=\"breadcrumb-title pe-3\">Dashboard</div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-money\"></i></a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Evénements</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-lg-3 col-xl-2\">
                                    <a href=\"admin-addEvenement\" class=\"btn btn-light mb-3 mb-lg-0\"><i class='bx bxs-plus-square'></i>Ajouter</a>
                                </div>
                                <div class=\"col-lg-6 col-xl-8\">
                                    <input type=\"text\" id=\"search\" style=\"color: #ffffff\" class=\"form-control-lg search-control\" placeholder=\"Rechercher...\">
                                </div>
                                <div class=\"col-lg-3 col-xl-2\">
                                    <form class=\"float-lg-end\">
                                        <div class=\"row row-cols-lg-auto g-2\">

                                            <div class=\"col-12\">
                                                <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                                    <button type=\"button\" class=\"btn btn-light\">Trier Par</button>
                                                    <div class=\"btn-group\" role=\"group\">
                                                        <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                            <i class='bx bx-chevron-down'></i>
                                                        </button>
                                                        <ul class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                                            <li><a class=\"dropdown-item\" href=\"/admin-evenements-sortbynameasc\">Par Nom ↑</a></li>
                                                            <li><a class=\"dropdown-item\" href=\"/admin-evenements-sortbynamedesc\">Par Nom ↓</a></li>
                                                            <li><a class=\"dropdown-item\" href=\"/admin-evenements-sortbydateasc\">Par Date ↑</a></li>
                                                            <li><a class=\"dropdown-item\" href=\"/admin-evenements\">Par Date ↓</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"card\">

                <div class=\"table-responsive\">
                    <table class=\"table mb-0\">
                        <thead class=\"table-light\">
                        <tr>
                            <th>Nom</th>
                            <th>Statut</th>
                            <th>Description</th>
                            <th>Date Début</th>
                            <th>Date Fin</th>
                            <th>Image</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody id=\"all\">
                        ";
        // line 84
        $this->loadTemplate("back/evenement/ajax.html.twig", "back/evenement/index.html.twig", 84)->display($context);
        // line 85
        echo "                        </tbody>
                        <tbody id=\"search\">
                        </tbody>
                    </table>
                </div>
                <div style=\"align-self: center\">
                    ";
        // line 91
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["backEvents"]) || array_key_exists("backEvents", $context) ? $context["backEvents"] : (function () { throw new RuntimeError('Variable "backEvents" does not exist.', 91, $this->source); })()));
        echo "
                </div>
            </div>

        </div>

    </div>


    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script

            src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), "html", null, true);
        echo "\">
    </script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                currentRequest = \$.ajax({
                    url : \"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchResajax");
        echo "\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>
    <!--end page wrapper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 118,  198 => 103,  192 => 100,  180 => 91,  172 => 85,  170 => 84,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
    Evénements
{% endblock %}
{% block content %}
    <!--start page wrapper -->
    <div class=\"page-wrapper\">
        <div class=\"page-content\">
            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\">Dashboard</div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-money\"></i></a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Evénements</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-lg-3 col-xl-2\">
                                    <a href=\"admin-addEvenement\" class=\"btn btn-light mb-3 mb-lg-0\"><i class='bx bxs-plus-square'></i>Ajouter</a>
                                </div>
                                <div class=\"col-lg-6 col-xl-8\">
                                    <input type=\"text\" id=\"search\" style=\"color: #ffffff\" class=\"form-control-lg search-control\" placeholder=\"Rechercher...\">
                                </div>
                                <div class=\"col-lg-3 col-xl-2\">
                                    <form class=\"float-lg-end\">
                                        <div class=\"row row-cols-lg-auto g-2\">

                                            <div class=\"col-12\">
                                                <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                                    <button type=\"button\" class=\"btn btn-light\">Trier Par</button>
                                                    <div class=\"btn-group\" role=\"group\">
                                                        <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                            <i class='bx bx-chevron-down'></i>
                                                        </button>
                                                        <ul class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                                                            <li><a class=\"dropdown-item\" href=\"/admin-evenements-sortbynameasc\">Par Nom ↑</a></li>
                                                            <li><a class=\"dropdown-item\" href=\"/admin-evenements-sortbynamedesc\">Par Nom ↓</a></li>
                                                            <li><a class=\"dropdown-item\" href=\"/admin-evenements-sortbydateasc\">Par Date ↑</a></li>
                                                            <li><a class=\"dropdown-item\" href=\"/admin-evenements\">Par Date ↓</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"card\">

                <div class=\"table-responsive\">
                    <table class=\"table mb-0\">
                        <thead class=\"table-light\">
                        <tr>
                            <th>Nom</th>
                            <th>Statut</th>
                            <th>Description</th>
                            <th>Date Début</th>
                            <th>Date Fin</th>
                            <th>Image</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody id=\"all\">
                        {% include 'back/evenement/ajax.html.twig' %}
                        </tbody>
                        <tbody id=\"search\">
                        </tbody>
                    </table>
                </div>
                <div style=\"align-self: center\">
                    {{ knp_pagination_render(backEvents) }}
                </div>
            </div>

        </div>

    </div>


    <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
    <script

            src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}\">
    </script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                currentRequest = \$.ajax({
                    url : \"{{ path('searchResajax') }}\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>
    <!--end page wrapper -->
{% endblock %}
", "back/evenement/index.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\evenement\\index.html.twig");
    }
}
