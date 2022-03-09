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

/* back/evenement/addEvenement.html.twig */
class __TwigTemplate_b01120a9582061fe4d50670a691fbfeb6b06ae1b60ee54c15df12f3db93542e4 extends Template
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
            'form_errors' => [$this, 'block_form_errors'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/evenement/addEvenement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/evenement/addEvenement.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/evenement/addEvenement.html.twig", 1);
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
        echo "    Ajouter Evénement
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
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-calendar-event\"></i></a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Ajouter événement</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">

                    <hr/>

                    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 31, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"border border-3 p-4 rounded\">

                                    <div class=\"mb-3\">
                                        <label for=\"inputProductDescription\" class=\"form-label\">Image de
                                            l'événement</label>
                                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 40, $this->source); })()), "image", [], "any", false, false, false, 40), 'widget');
        echo "
                                        <ul class=\"custom-error\">
                                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 42, $this->source); })()), "image", [], "any", false, false, false, 42), 'errors');
        echo "
                                        </ul>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <label for=\"inputPrice\" class=\"form-label\">Description</label>
                                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), 'widget');
        echo "
                                        <ul class=\"custom-error\">
                                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'errors');
        echo "
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"border border-3 p-4 rounded\">
                                        <div class=\"mb-3\">
                                            <label for=\"inputPrice\" class=\"form-label\">Nom de l'événement</label>
                                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), 'widget');
        echo "
                                            <ul class=\"custom-error\">
                                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), 'errors');
        echo "
                                            </ul>
                                        </div>
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Date début:</label>
                                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 66, $this->source); })()), "dateDeb", [], "any", false, false, false, 66), 'widget');
        echo "
                                            <ul class=\"custom-error\">
                                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 68, $this->source); })()), "dateDeb", [], "any", false, false, false, 68), 'errors');
        echo "
                                            </ul>
                                        </div>
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Date fin:</label>
                                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 73, $this->source); })()), "dateFin", [], "any", false, false, false, 73), 'widget');
        echo "
                                            <ul class=\"custom-error\">
                                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 75, $this->source); })()), "dateFin", [], "any", false, false, false, 75), 'errors');
        echo "
                                            </ul>
                                        </div>


                                        <div class=\"col-12\">
                                            <div class=\"d-grid\">
                                                <button type=\"submit\" class=\"btn btn-light\">Ajouter</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                    ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 89, $this->source); })()), 'form_end');
        echo "

                </div>
            </div>

        </div>
    </div>
    <!--end page wrapper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 100
        echo "        ";
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 100, $this->source); })())), 0))) {
            // line 101
            echo "            <ul>
                ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 102, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 103
                echo "                    <div class=\"custom-error\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 103), "html", null, true);
                echo "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "            </ul>
        ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/evenement/addEvenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 105,  248 => 103,  244 => 102,  241 => 101,  238 => 100,  228 => 99,  209 => 89,  192 => 75,  187 => 73,  179 => 68,  174 => 66,  166 => 61,  161 => 59,  148 => 49,  143 => 47,  135 => 42,  130 => 40,  118 => 31,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
    Ajouter Evénement
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
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-calendar-event\"></i></a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Ajouter événement</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">

                    <hr/>

                    {{ form_start(eventForm , {'attr' : {'novalidate' : 'novalidate'} }) }}
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"border border-3 p-4 rounded\">

                                    <div class=\"mb-3\">
                                        <label for=\"inputProductDescription\" class=\"form-label\">Image de
                                            l'événement</label>
                                        {{ form_widget(eventForm.image) }}
                                        <ul class=\"custom-error\">
                                        {{ form_errors(eventForm.image) }}
                                        </ul>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <label for=\"inputPrice\" class=\"form-label\">Description</label>
                                        {{ form_widget(eventForm.description) }}
                                        <ul class=\"custom-error\">
                                            {{ form_errors(eventForm.description) }}
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"border border-3 p-4 rounded\">
                                        <div class=\"mb-3\">
                                            <label for=\"inputPrice\" class=\"form-label\">Nom de l'événement</label>
                                            {{ form_widget(eventForm.name) }}
                                            <ul class=\"custom-error\">
                                                {{ form_errors(eventForm.name) }}
                                            </ul>
                                        </div>
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Date début:</label>
                                            {{ form_widget(eventForm.dateDeb) }}
                                            <ul class=\"custom-error\">
                                                {{ form_errors(eventForm.dateDeb) }}
                                            </ul>
                                        </div>
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\">Date fin:</label>
                                            {{ form_widget(eventForm.dateFin) }}
                                            <ul class=\"custom-error\">
                                                {{ form_errors(eventForm.dateFin) }}
                                            </ul>
                                        </div>


                                        <div class=\"col-12\">
                                            <div class=\"d-grid\">
                                                <button type=\"submit\" class=\"btn btn-light\">Ajouter</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                    {{ form_end(eventForm) }}

                </div>
            </div>

        </div>
    </div>
    <!--end page wrapper -->
{% endblock %}

{% block form_errors %}
        {% if errors|length > 0 %}
            <ul>
                {% for error in errors %}
                    <div class=\"custom-error\">{{ error.message }}</div>
                {% endfor %}
            </ul>
        {% endif %}
{% endblock form_errors %}", "back/evenement/addEvenement.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\evenement\\addEvenement.html.twig");
    }
}
