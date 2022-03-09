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

/* front/evenement/index.html.twig */
class __TwigTemplate_aabe9c38f49fb8e9ad65ce08c8ea83742ea52b14df46b309da0cdd5ada0e532e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evenement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/evenement/index.html.twig", 1);
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
        echo "
    <style>
        .page-banner-area {
            background-image: url(Front/assets/img/footer-bg.jpg);
        }
    </style>

    <div class=\"page-banner-area\">

        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Nos Deals</h2>
                        <ul>
                            <li>
                                <a href=\"/\">Home</a>
                            </li>
                            <li>Nos Deals</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"blog-area pt-100 pb-100\">
        <div class=\"container\">

            <div class=\"row\">
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frontEvents"]) || array_key_exists("frontEvents", $context) ? $context["frontEvents"] : (function () { throw new RuntimeError('Variable "frontEvents" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 37
            echo "                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"single-blog-item\">
                        <div class=\"image\">
                            <a href=";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventDeals", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "><img width=\"740\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["e"], "image", [], "any", false, false, false, 40))), "html", null, true);
            echo "\" alt=\"image\"></a>

                            <div class=\"date\">
                                <span>Du <b>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateDeb", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
            echo "</b> Jusqu'à <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateFin", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
            echo "</b></span>
                            </div>
                        </div>
                        <div class=\"content\">
                            <h3>
                                <a href=";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventDeals", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</a>
                            </h3>
                            <div style=\"display: flex; justify-content: space-between\">
                            <a  href=";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventDeals", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo " class=\"blog-btn\">Plus d'Informations +</a>

                                <div id=\"fb-root\"></div>
                                <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = \"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0\";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                <div
                                     class=\"fb-share-button\"
                                     data-href=\"http://127.0.0.1:8000/evenement-";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\"
                                     data-layout=\"button\" data-size=\"large\">
                                </div>
                            </div>
                            </div>
                    </div>
                </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 72,  172 => 63,  157 => 51,  149 => 48,  139 => 43,  131 => 40,  126 => 37,  122 => 36,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block title %}
    Evénements
{% endblock %}
{% block content %}

    <style>
        .page-banner-area {
            background-image: url(Front/assets/img/footer-bg.jpg);
        }
    </style>

    <div class=\"page-banner-area\">

        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Nos Deals</h2>
                        <ul>
                            <li>
                                <a href=\"/\">Home</a>
                            </li>
                            <li>Nos Deals</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"blog-area pt-100 pb-100\">
        <div class=\"container\">

            <div class=\"row\">
    {% for e in frontEvents %}
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"single-blog-item\">
                        <div class=\"image\">
                            <a href={{ path('eventDeals',{id: e.id}) }}><img width=\"740\" src=\"{{asset('uploads/' ~ e.image)}}\" alt=\"image\"></a>

                            <div class=\"date\">
                                <span>Du <b>{{ e.dateDeb|date('d/m/Y') }}</b> Jusqu'à <b>{{ e.dateFin|date('d/m/Y') }}</b></span>
                            </div>
                        </div>
                        <div class=\"content\">
                            <h3>
                                <a href={{ path('eventDeals',{id: e.id}) }}>{{ e.name }}</a>
                            </h3>
                            <div style=\"display: flex; justify-content: space-between\">
                            <a  href={{ path('eventDeals',{id: e.id}) }} class=\"blog-btn\">Plus d'Informations +</a>

                                <div id=\"fb-root\"></div>
                                <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = \"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0\";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                <div
                                     class=\"fb-share-button\"
                                     data-href=\"http://127.0.0.1:8000/evenement-{{ e.id }}\"
                                     data-layout=\"button\" data-size=\"large\">
                                </div>
                            </div>
                            </div>
                    </div>
                </div>

    {% endfor %}

            </div>
        </div>
    </section>

{% endblock %}", "front/evenement/index.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\evenement\\index.html.twig");
    }
}
