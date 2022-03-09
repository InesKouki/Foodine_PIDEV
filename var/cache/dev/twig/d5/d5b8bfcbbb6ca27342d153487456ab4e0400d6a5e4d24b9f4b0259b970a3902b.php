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

/* front/homeFront.html.twig */
class __TwigTemplate_51f7643783c795740c4abc494a74c42b62ef25bcb21c4514736c772671939d1f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/homeFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/homeFront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/homeFront.html.twig", 1);
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
        echo "    Home
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
    ";
        // line 7
        if (twig_test_empty((isset($context["activeEvents"]) || array_key_exists("activeEvents", $context) ? $context["activeEvents"] : (function () { throw new RuntimeError('Variable "activeEvents" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "        <div class=\"main-banner\">
            <div class=\"main-banner-item\">
                <div class=\"d-table\">
                    <div class=\"d-table-cell\">
                        <div class=\"container\">
                            <div class=\"main-banner-content\">
                                <h1>Foodine</h1>
                                <div class=\"banner-btn\">
                                    <a href=\"\" class=\"default-btn\">Notre Restaurant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 25
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activeEvents"]) || array_key_exists("activeEvents", $context) ? $context["activeEvents"] : (function () { throw new RuntimeError('Variable "activeEvents" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 26
                echo "            <style>
                .main-banner-item {
                    background-image: url('";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["e"], "image", [], "any", false, false, false, 28))), "html", null, true);
                echo "');
                }
            </style>

        <div class=\"main-banner\">
            <div class=\"main-banner-item\">
                <div class=\"d-table\">
                    <div class=\"d-table-cell\">
                        <div class=\"container\">
                            <div class=\"main-banner-content\">
";
                // line 39
                echo "                                <h2>Du &nbsp;";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateDeb", [], "any", false, false, false, 39), "d/m/y"), "html", null, true);
                echo "&nbsp; jusqu'à &nbsp;";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateFin", [], "any", false, false, false, 39), "d/m/y"), "html", null, true);
                echo "</h2>
                                <div class=\"banner-btn\">
                                    <a href=\"/evenements\" class=\"default-btn\" target=\"_blank\">Plus d'événements</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
";
            // line 57
            echo "
    ";
        }
        // line 59
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/homeFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 59,  160 => 57,  157 => 51,  136 => 39,  123 => 28,  119 => 26,  114 => 25,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block title %}
    Home
{% endblock %}
{% block content %}

    {% if activeEvents is empty %}
        <div class=\"main-banner\">
            <div class=\"main-banner-item\">
                <div class=\"d-table\">
                    <div class=\"d-table-cell\">
                        <div class=\"container\">
                            <div class=\"main-banner-content\">
                                <h1>Foodine</h1>
                                <div class=\"banner-btn\">
                                    <a href=\"\" class=\"default-btn\">Notre Restaurant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% else %}
    {% for e in activeEvents %}
            <style>
                .main-banner-item {
                    background-image: url('{{asset('uploads/' ~ e.image)}}');
                }
            </style>

        <div class=\"main-banner\">
            <div class=\"main-banner-item\">
                <div class=\"d-table\">
                    <div class=\"d-table-cell\">
                        <div class=\"container\">
                            <div class=\"main-banner-content\">
{#                                <h1>Foodine</h1>#}
                                <h2>Du &nbsp;{{ e.dateDeb|date('d/m/y') }}&nbsp; jusqu'à &nbsp;{{ e.dateFin|date('d/m/y') }}</h2>
                                <div class=\"banner-btn\">
                                    <a href=\"/evenements\" class=\"default-btn\" target=\"_blank\">Plus d'événements</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    {% endfor %}

{#  else if active.events(LENGTH) > 1
    ....
    ....
    ....
#}

    {% endif %}

{% endblock %}
", "front/homeFront.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\homeFront.html.twig");
    }
}
