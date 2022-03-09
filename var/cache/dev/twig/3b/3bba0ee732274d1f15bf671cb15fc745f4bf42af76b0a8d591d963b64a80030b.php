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

/* back/Users/employe.html.twig */
class __TwigTemplate_4841670cef2ae8228a1aa9a49389ef348fd3c0991be8f13a4234279b319f1f23 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/Users/employe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/Users/employe.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/Users/employe.html.twig", 1);
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
        echo "    Afficher Utilisateurs
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
                <div class=\"breadcrumb-title pe-3\"> Utilisateurs </div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bxs-user-badge\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

                <div class=\"position-relative search-bar-box\">
                    <input type=\"text\" class=\"form-control search-control\" id=\"search\" placeholder=\"Type to search...\"> <span class=\"position-absolute top-50 search-show translate-middle-y\"><i class='bx bx-search'></i></span>
                    <span class=\"position-absolute top-50 search-close translate-middle-y\"><i class='bx bx-x'></i></span>
                </div>

            </div>

            <!--end breadcrumb-->

            <h6 class=\"mb-0 text-uppercase\">Liste des utilisateurs</h6>
            <hr/>

            <div class=\"row row-cols-1 row-cols-lg-2 row-cols-xl-4\" id=\"entitiesNav\">

                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "                <div class=\"col\">
                    <div class=\"card radius-15\" >
                        <div class=\"card-body text-center\">
                            <div class=\"p-4 border radius-15\">
                                <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["user"], "file", [], "any", false, false, false, 43))), "html", null, true);
            echo "\" width=\"110\" height=\"110\" class=\"rounded-circle shadow\" alt=\"\">
                                <h5 class=\"mb-0 mt-5\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 44), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 44), "html", null, true);
            echo " </h5>
                                <p class=\"mb-3\">
                                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "Roles", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 47
                echo "                                        ";
                if ((0 === twig_compare($context["role"], "ROLE_CHEF"))) {
                    // line 48
                    echo "                                            Chef
                                        ";
                } elseif ((0 === twig_compare(                // line 49
$context["role"], "ROLE_LIVREUR"))) {
                    // line 50
                    echo "                                            Livreur
                                        ";
                } elseif ((0 === twig_compare(                // line 51
$context["role"], "ROLE_USER"))) {
                    // line 52
                    echo "                                           Simple_utilisateur
                                        ";
                }
                // line 54
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "</p>

                                <div class=\"d-grid\">
                                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ModifierUser", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\"class=\"btn btn-light radius-15\">Attribuer Role</a>
                                </div>
                            </br>
                                ";
            // line 61
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "Etat", [], "any", false, false, false, 61), 1))) {
                // line 62
                echo "                                <div class=\"d-grid\">
                                    <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_blockUser", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\"class=\"btn btn-light radius-15\">Bloquer</a>
                                </div>
                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 65
$context["user"], "Etat", [], "any", false, false, false, 65), 0))) {
                // line 66
                echo "                                    <div class=\"d-grid\">
                                        <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_unblockUser", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                echo "\"class=\"btn btn-light radius-15\">Débloquer</a>
                                    </div>
                                ";
            }
            // line 70
            echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
            </div>
            <!--end row-->

        </div>
    </div>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 1;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_searchBack");
        echo "\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value===\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key === 'entities') {
                                            if (id !== 'error') {
                                                entitySelector.append('<div class=\"col\"> <div class=\"card radius-15\" ><div class=\"card-body text-center\"><div class=\"p-4 border radius-15\">' +
                                                    '<img width=\"110\" height=\"110\" class=\"rounded-circle shadow\" alt=\"\" src=\"/uploads/'+value[0]+'\"/>'+

                                                    '<h5 class=\"mb-0 mt-5\" >'+value[2]+' '+ value[1]+'<p>'+value[3] +'</p></div></div></div></div> ');
                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }
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
        return "back/Users/employe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 96,  215 => 75,  205 => 70,  199 => 67,  196 => 66,  194 => 65,  189 => 63,  186 => 62,  184 => 61,  178 => 58,  173 => 55,  166 => 54,  162 => 52,  160 => 51,  157 => 50,  155 => 49,  152 => 48,  149 => 47,  145 => 46,  138 => 44,  134 => 43,  128 => 39,  124 => 38,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
    Afficher Utilisateurs
{% endblock %}
{% block content %}
    <!--start page wrapper -->
    <div class=\"page-wrapper\">

        <div class=\"page-content\">

            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\"> Utilisateurs </div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bxs-user-badge\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

                <div class=\"position-relative search-bar-box\">
                    <input type=\"text\" class=\"form-control search-control\" id=\"search\" placeholder=\"Type to search...\"> <span class=\"position-absolute top-50 search-show translate-middle-y\"><i class='bx bx-search'></i></span>
                    <span class=\"position-absolute top-50 search-close translate-middle-y\"><i class='bx bx-x'></i></span>
                </div>

            </div>

            <!--end breadcrumb-->

            <h6 class=\"mb-0 text-uppercase\">Liste des utilisateurs</h6>
            <hr/>

            <div class=\"row row-cols-1 row-cols-lg-2 row-cols-xl-4\" id=\"entitiesNav\">

                {% for user in user %}
                <div class=\"col\">
                    <div class=\"card radius-15\" >
                        <div class=\"card-body text-center\">
                            <div class=\"p-4 border radius-15\">
                                <img src=\"{{ asset('uploads/' ~ user.file ) }}\" width=\"110\" height=\"110\" class=\"rounded-circle shadow\" alt=\"\">
                                <h5 class=\"mb-0 mt-5\">{{ user.Nom}} {{ user.Prenom}} </h5>
                                <p class=\"mb-3\">
                                    {% for role in user.Roles %}
                                        {% if role==\"ROLE_CHEF\" %}
                                            Chef
                                        {% elseif role==\"ROLE_LIVREUR\" %}
                                            Livreur
                                        {% elseif role==\"ROLE_USER\" %}
                                           Simple_utilisateur
                                        {% endif %}

                                    {% endfor %}</p>

                                <div class=\"d-grid\">
                                    <a href=\"{{path('admin_ModifierUser',{'id':user.id})}}\"class=\"btn btn-light radius-15\">Attribuer Role</a>
                                </div>
                            </br>
                                {% if user.Etat==1 %}
                                <div class=\"d-grid\">
                                    <a href=\"{{path('admin_blockUser',{'id':user.id})}}\"class=\"btn btn-light radius-15\">Bloquer</a>
                                </div>
                                    {% elseif user.Etat==0 %}
                                    <div class=\"d-grid\">
                                        <a href=\"{{path('admin_unblockUser',{'id':user.id})}}\"class=\"btn btn-light radius-15\">Débloquer</a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}

            </div>
            <!--end row-->

        </div>
    </div>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 1;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('admin_searchBack') }}\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value===\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key === 'entities') {
                                            if (id !== 'error') {
                                                entitySelector.append('<div class=\"col\"> <div class=\"card radius-15\" ><div class=\"card-body text-center\"><div class=\"p-4 border radius-15\">' +
                                                    '<img width=\"110\" height=\"110\" class=\"rounded-circle shadow\" alt=\"\" src=\"/uploads/'+value[0]+'\"/>'+

                                                    '<h5 class=\"mb-0 mt-5\" >'+value[2]+' '+ value[1]+'<p>'+value[3] +'</p></div></div></div></div> ');
                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }
            });

        });
    </script>
    <!--end page wrapper -->
{% endblock %}", "back/Users/employe.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\Users\\employe.html.twig");
    }
}
