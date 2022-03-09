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

/* front/employes/team.html.twig */
class __TwigTemplate_698c502cffff30b572ce41303e364195056bdbb67d9b5948952e4cfeb726b3a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/employes/team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/employes/team.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/employes/team.html.twig", 1);
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

        echo "Team";
        
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
        echo "    <div class=\"page-banner-area item-bg1\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Team</h2>
                        <ul>
                            <li>
                                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Home</a>
                            </li>
                            <li>Nos Chefs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"team-area pt-100 pb-70\">

        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Nos Chefs</h2>

                <div class=\"s-box\">
                    <img src=\"/Front/assets/img/search.svg\" class=\"search-icon\">
                    <input type=\"text\" id=\"search\" autocomplete=\"off\" class=\"s-input\">
                    <img  class=\"vs-icon\">
                    <ul class=\"dropdown\" id=\"entitiesNav\"></ul>
                </div>





            </div>

            <div class=\"row\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["chef"]);
        foreach ($context['_seq'] as $context["_key"] => $context["chef"]) {
            // line 45
            echo "                <div class=\"col-lg-4 col-md-6\">

                    <div class=\"single-team-box\">
                        <div class=\"image\">
                            <img class=\"image\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["chef"], "file", [], "any", false, false, false, 49))), "html", null, true);
            echo "\" alt=\"image\">

                            <ul class=\"social\">
                                <li>
                                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_chef", ["id" => twig_get_attribute($this->env, $this->source, $context["chef"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" target=\"_blank\">
                                        <i class='bx bx-show'>Show</i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class=\"content\">
                            <h3> ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chef"], "nom", [], "any", false, false, false, 62), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chef"], "prenom", [], "any", false, false, false, 62), "html", null, true);
            echo "</h3>
                            <span>Chef</span>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chef'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
            </div>
        </div>
    </section>
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
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
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
                                                entitySelector.append('<li>'+value[1]+'<a href=\"/show_chef/'+id+'\">'+'<img src=\"/uploads/'+value[0]+'\" style=\"width: 50px; height: 50px; border-radius:50%; \"/></a></li>');
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

    <style>
        nav {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-right: 30px;
            margin-top: 14px;
        }
        nav a {
            font-size: 13px;
            display: inline-block;
            line-height: 24px;
            font-weight: 400;
            color: rgb(0,0,0,0.87);
            cursor: pointer;
            padding: 5px 6.7px
        }
        nav a:hover {
            text-decoration: underline;
            opacity: .85;
        }
        nav img {
            width: 34px;
            padding: 5px;
            margin: auto 7px;
            cursor: pointer;
        }
        nav img:hover {
            opacity: .8;
        }
        nav button {
            border: 1px solid #4285f4;
            font-weight: bold;
            outline: none;
            background: #4285f4;
            color: #fff;
            padding: 7px 12px;
            border-radius: 3px;
            margin-left: 7px;
            cursor: pointer;
        }
        .section-1 {
            flex: 1;
        }
        .section-1 .logo {
            display: block;
            margin: 0px auto;
            margin-top: 107px;
        }
        .s-box {
            width: 580px;
            margin: 0px auto;
            position: relative;
            margin-top: -8px;
            text-align: center;
        }
        .s-box .s-input {
            display: block;
            border: 1px solid #ddd;
            color: rgba(0,0,0, 0.87);
            font-size: 16px;
            padding: 13px;
            padding-left: 45px;
            border-radius: 25px;
            width: 100%;
            transition: box-shadow 100ms;
            outline: none;
        }
        .s-box  .s-input:focus {
            border: 1px solid #fff;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.05),
            0 0 2px rgba(0, 0, 0, 0.05),
            0 0 3px rgba(0, 0, 0, 0.05),
            0 0 4px rgba(0, 0, 0, 0.05),
            0 0 5px rgba(0, 0, 0, 0.05),
            0 0 4px rgba(0, 0, 0, 0.05),
            0 0 5px rgba(0, 0, 0, 0.05)
        }
        .s-box .search-icon {
            width: 20px;
            opacity: .4;
            position: absolute;
            top: 13px;
            left: 14px;
        }
        .s-box .vs-icon {
            width: 14px;
            position: absolute;
            top: 13px;
            right: 24px;
        }
        .s-btn {
            border: 1px solid transparent;
            padding: 9px 15px;
            color: #666;
            font-size: 14px;
            border-radius: 4px;
            display: inline-block;
            margin-right: 10px;
            margin-top: 28px;
            outline: none;
            cursor: pointer;
            transition: border-color 100ms;
        }
        .s-btn:hover {
            border: 1px solid #aaa;
        }
        .lang {
            margin-top: 30px;
            text-align: center;
            font-size: 13px;
            color: #111;
        }
        .lang a {
            margin-left: 5px;
            color: #1a0dab;
        }
        .lang a:hover {
            text-decoration: underline;
        }


        .links {
            border-top: 1px solid #ddd;
            display: flex;
        }
        .link-1 {
            padding-left: 18.7px;
            flex: 1;
        }
        .link-2 {
            padding-right: 18.7px;
        }

        .entitiesNav {
            display: none;
            background: #fff;
            position: absolute;
            width: 100%;
            top: 47px;
            border-radius: 30px;
            padding: 20px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.05),
            0 0 2px rgba(0, 0, 0, 0.05),
            0 0 3px rgba(0, 0, 0, 0.05),
            0 0 4px rgba(0, 0, 0, 0.05),
            0 0 5px rgba(0, 0, 0, 0.05),
            0 0 4px rgba(0, 0, 0, 0.05),
            0 0 5px rgba(0, 0, 0, 0.05)
        }
        .dropdown li {
            list-style: none;
            text-align: left;
        }
        .dropdown li a {
            display: block;
            padding: 8px;
            text-decoration: none;
            color: #222;
            font-size: 18px;
            font-weight: bold;
        }
        .dropdown li a:hover {
            background: #eee;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/employes/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 87,  174 => 68,  160 => 62,  148 => 53,  141 => 49,  135 => 45,  131 => 44,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Team{% endblock %}

{% block content %}
    <div class=\"page-banner-area item-bg1\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Team</h2>
                        <ul>
                            <li>
                                <a href=\"{{ path('front') }}\">Home</a>
                            </li>
                            <li>Nos Chefs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"team-area pt-100 pb-70\">

        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Nos Chefs</h2>

                <div class=\"s-box\">
                    <img src=\"/Front/assets/img/search.svg\" class=\"search-icon\">
                    <input type=\"text\" id=\"search\" autocomplete=\"off\" class=\"s-input\">
                    <img  class=\"vs-icon\">
                    <ul class=\"dropdown\" id=\"entitiesNav\"></ul>
                </div>





            </div>

            <div class=\"row\">
                {% for chef in chef %}
                <div class=\"col-lg-4 col-md-6\">

                    <div class=\"single-team-box\">
                        <div class=\"image\">
                            <img class=\"image\" src=\"{{ asset('uploads/' ~ chef.file ) }}\" alt=\"image\">

                            <ul class=\"social\">
                                <li>
                                    <a href=\"{{path('show_chef',{'id':chef.id})}}\" target=\"_blank\">
                                        <i class='bx bx-show'>Show</i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class=\"content\">
                            <h3> {{ chef.nom }} {{ chef.prenom  }}</h3>
                            <span>Chef</span>
                        </div>
                    </div>
                </div>
                {% endfor %}

            </div>
        </div>
    </section>
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
                        url: \"{{ path('search') }}\",
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
                                                entitySelector.append('<li>'+value[1]+'<a href=\"/show_chef/'+id+'\">'+'<img src=\"/uploads/'+value[0]+'\" style=\"width: 50px; height: 50px; border-radius:50%; \"/></a></li>');
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

    <style>
        nav {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-right: 30px;
            margin-top: 14px;
        }
        nav a {
            font-size: 13px;
            display: inline-block;
            line-height: 24px;
            font-weight: 400;
            color: rgb(0,0,0,0.87);
            cursor: pointer;
            padding: 5px 6.7px
        }
        nav a:hover {
            text-decoration: underline;
            opacity: .85;
        }
        nav img {
            width: 34px;
            padding: 5px;
            margin: auto 7px;
            cursor: pointer;
        }
        nav img:hover {
            opacity: .8;
        }
        nav button {
            border: 1px solid #4285f4;
            font-weight: bold;
            outline: none;
            background: #4285f4;
            color: #fff;
            padding: 7px 12px;
            border-radius: 3px;
            margin-left: 7px;
            cursor: pointer;
        }
        .section-1 {
            flex: 1;
        }
        .section-1 .logo {
            display: block;
            margin: 0px auto;
            margin-top: 107px;
        }
        .s-box {
            width: 580px;
            margin: 0px auto;
            position: relative;
            margin-top: -8px;
            text-align: center;
        }
        .s-box .s-input {
            display: block;
            border: 1px solid #ddd;
            color: rgba(0,0,0, 0.87);
            font-size: 16px;
            padding: 13px;
            padding-left: 45px;
            border-radius: 25px;
            width: 100%;
            transition: box-shadow 100ms;
            outline: none;
        }
        .s-box  .s-input:focus {
            border: 1px solid #fff;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.05),
            0 0 2px rgba(0, 0, 0, 0.05),
            0 0 3px rgba(0, 0, 0, 0.05),
            0 0 4px rgba(0, 0, 0, 0.05),
            0 0 5px rgba(0, 0, 0, 0.05),
            0 0 4px rgba(0, 0, 0, 0.05),
            0 0 5px rgba(0, 0, 0, 0.05)
        }
        .s-box .search-icon {
            width: 20px;
            opacity: .4;
            position: absolute;
            top: 13px;
            left: 14px;
        }
        .s-box .vs-icon {
            width: 14px;
            position: absolute;
            top: 13px;
            right: 24px;
        }
        .s-btn {
            border: 1px solid transparent;
            padding: 9px 15px;
            color: #666;
            font-size: 14px;
            border-radius: 4px;
            display: inline-block;
            margin-right: 10px;
            margin-top: 28px;
            outline: none;
            cursor: pointer;
            transition: border-color 100ms;
        }
        .s-btn:hover {
            border: 1px solid #aaa;
        }
        .lang {
            margin-top: 30px;
            text-align: center;
            font-size: 13px;
            color: #111;
        }
        .lang a {
            margin-left: 5px;
            color: #1a0dab;
        }
        .lang a:hover {
            text-decoration: underline;
        }


        .links {
            border-top: 1px solid #ddd;
            display: flex;
        }
        .link-1 {
            padding-left: 18.7px;
            flex: 1;
        }
        .link-2 {
            padding-right: 18.7px;
        }

        .entitiesNav {
            display: none;
            background: #fff;
            position: absolute;
            width: 100%;
            top: 47px;
            border-radius: 30px;
            padding: 20px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.05),
            0 0 2px rgba(0, 0, 0, 0.05),
            0 0 3px rgba(0, 0, 0, 0.05),
            0 0 4px rgba(0, 0, 0, 0.05),
            0 0 5px rgba(0, 0, 0, 0.05),
            0 0 4px rgba(0, 0, 0, 0.05),
            0 0 5px rgba(0, 0, 0, 0.05)
        }
        .dropdown li {
            list-style: none;
            text-align: left;
        }
        .dropdown li a {
            display: block;
            padding: 8px;
            text-decoration: none;
            color: #222;
            font-size: 18px;
            font-weight: bold;
        }
        .dropdown li a:hover {
            background: #eee;
        }
    </style>
{% endblock%}", "front/employes/team.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\employes\\team.html.twig");
    }
}
