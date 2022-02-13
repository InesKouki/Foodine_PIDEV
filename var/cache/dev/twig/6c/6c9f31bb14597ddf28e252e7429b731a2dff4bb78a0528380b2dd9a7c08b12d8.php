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

/* /front/security/registration.html.twig */
class __TwigTemplate_0b5c8cd27539f5f802701bee1b04fd451ba8e538f15d6143f8f08bd9006eca0d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/front/security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/front/security/registration.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "/front/security/registration.html.twig", 1);
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

        echo "Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "<!-- Start Page Banner -->
<div class=\"page-banner-area item-bg4\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <div class=\"container\">
                <div class=\"page-banner-content\">
                    <h2>Register</h2>
                    <ul>
                        <li>
                            <a href=\"index.html\">Home</a>
                        </li>
                        <li>Inscription</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
}
</style>

            
            { ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
   <section class=\"register-area ptb-100\">
            <div class=\"container\">
                <div class=\"register-form\">
                    <h2>Register</h2>
                      <div class=\"form-group\">
             ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 45, $this->source); })()), "Nom", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>

             <div class=\"form-group\">
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 49, $this->source); })()), "Prenom", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
             </div>
             <div class=\"form-group\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 52, $this->source); })()), "Username", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
            <div class=\"form-group\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 55, $this->source); })()), "Email", [], "any", false, false, false, 55), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
             </div>
             <div class=\"form-group\">
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 58, $this->source); })()), "Password", [], "any", false, false, false, 58), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
         <div class=\"form-group\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 61, $this->source); })()), "Confirm_password", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
            <div class=\"form-group\">
             ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 64, $this->source); })()), "file", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
               </div>
               <div class=\"form-group\">

                <button type=\"submit\" class=\"default-btn\">Register</button>
            </div>       
            </div>
            </div>
        </section>
            ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 73, $this->source); })()), 'form_end');
        echo "
            

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/front/security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 73,  166 => 64,  160 => 61,  154 => 58,  148 => 55,  142 => 52,  136 => 49,  129 => 45,  120 => 39,  88 => 9,  78 => 8,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Inscription{% endblock %}




{% block content %}
<!-- Start Page Banner -->
<div class=\"page-banner-area item-bg4\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <div class=\"container\">
                <div class=\"page-banner-content\">
                    <h2>Register</h2>
                    <ul>
                        <li>
                            <a href=\"index.html\">Home</a>
                        </li>
                        <li>Inscription</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
}
</style>

            
            { {{ form_start(f) }}
   <section class=\"register-area ptb-100\">
            <div class=\"container\">
                <div class=\"register-form\">
                    <h2>Register</h2>
                      <div class=\"form-group\">
             {{ form_row(f.Nom,{'attr': {'class':'form-control'}}) }}
              </div>

             <div class=\"form-group\">
            {{ form_row(f.Prenom,{'attr': {'class':'form-control'}}) }}
             </div>
             <div class=\"form-group\">
            {{ form_row(f.Username,{'attr': {'class':'form-control'}}) }}
              </div>
            <div class=\"form-group\">
            {{ form_row(f.Email,{'attr': {'class':'form-control'}}) }}
             </div>
             <div class=\"form-group\">
            {{ form_row(f.Password,{'attr': {'class':'form-control'}}) }}
              </div>
         <div class=\"form-group\">
            {{ form_row(f.Confirm_password,{'attr': {'class':'form-control'}}) }}
              </div>
            <div class=\"form-group\">
             {{ form_row(f.file,{'attr': {'class':'form-control'}}) }}
               </div>
               <div class=\"form-group\">

                <button type=\"submit\" class=\"default-btn\">Register</button>
            </div>       
            </div>
            </div>
        </section>
            {{ form_end(f) }}
            

{% endblock  %}
", "/front/security/registration.html.twig", "C:\\Users\\ASUS\\Desktop\\Foodine_PIDEV\\templates\\front\\security\\registration.html.twig");
    }
}
