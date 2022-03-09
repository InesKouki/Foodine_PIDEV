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

/* back/reclamations/reponse.html.twig */
class __TwigTemplate_ae7a462300f579c71cfcb5e70792c87f90f75b5f3c3d58d8b9917940e36330ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reclamations/reponse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reclamations/reponse.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/reclamations/reponse.html.twig", 1);
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
        echo "   Répondre
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
        echo "   <!--start page wrapper -->
   <div class=\"page-wrapper\">
      <div class=\"page-content\">
         <!--breadcrumb-->
         <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
            <div class=\"breadcrumb-title pe-3\">Répondre</div>
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
         <div class=\"row\">
            <div class=\"col-xl-9 mx-auto\">



               <hr/>
               <div class=\"card\">
                  <div class=\"card-body\">
                     <div class=\"p-4 border rounded\">
                        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
                           <div class=\"col-md-4\">
                              ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "Message", [], "any", false, false, false, 35), 'label');
        echo "
                              ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Message", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "

                           </div>

                           </br>
                           <div class=\"col-12\">
                              <button class=\"btn btn-light\" type=\"submit\">Répondre</button>
                           </div>
                        ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
                     </div>
                  </div>
               </div>

            </div>
         </div>
         <!--end row-->
      </div>
   </div>
   <!--end page wrapper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/reclamations/reponse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 44,  128 => 36,  124 => 35,  119 => 33,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
   Répondre
{% endblock %}
{% block content %}
   <!--start page wrapper -->
   <div class=\"page-wrapper\">
      <div class=\"page-content\">
         <!--breadcrumb-->
         <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
            <div class=\"breadcrumb-title pe-3\">Répondre</div>
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
         <div class=\"row\">
            <div class=\"col-xl-9 mx-auto\">



               <hr/>
               <div class=\"card\">
                  <div class=\"card-body\">
                     <div class=\"p-4 border rounded\">
                        {{ form_start(form) }}
                           <div class=\"col-md-4\">
                              {{ form_label(form.Message) }}
                              {{ form_widget(form.Message,{'attr': {'class':'form-control '}}) }}

                           </div>

                           </br>
                           <div class=\"col-12\">
                              <button class=\"btn btn-light\" type=\"submit\">Répondre</button>
                           </div>
                        {{ form_end(form) }}
                     </div>
                  </div>
               </div>

            </div>
         </div>
         <!--end row-->
      </div>
   </div>
   <!--end page wrapper -->
{% endblock %}", "back/reclamations/reponse.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\reclamations\\reponse.html.twig");
    }
}
