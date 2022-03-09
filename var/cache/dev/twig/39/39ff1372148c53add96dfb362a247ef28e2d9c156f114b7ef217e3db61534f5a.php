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

/* front/security/ForgottenPassEmail.html.twig */
class __TwigTemplate_ee5872cad02b277f26f2a28d759630e519b801bee3372b135fc358a940344b6c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/ForgottenPassEmail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/ForgottenPassEmail.html.twig"));

        // line 1
        echo "<table width=\"100%\" height=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" >
    <tbody>
    <tr>
        <td style=\"border_collapse:collapse\" valign=\"top\" align=\"center\">
            <table style=\"background-color:#FFFFFF;background-image: none; background-repeat: repeat;background-position: top left\"
                   width=\"100%\" height=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                <tbody>
                <tr>
                    <td style=\"border-collapse: collapse\" valign=\"middle\" align=\"center\">
                        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Front/assets/img/icon.png")), "html", null, true);
        echo "\">
                    </td>
                </tr>
                </tbody>

            </table>
        </td>
    </tr>
    <tr>
        <td style=\"border-collapse: collapse\" valign=\"top\" align=\"center\">

            <table width=\"100%\" height=\"0\" cellspacing=\"0\" cellpadding=\"40\" border=\"0\">
                <tbody>
                <tr>
                    <td style=\"border-collapse: collapse\" valign=\"middle\" align=\"center\">
                        <h1 style=\"color:orange\"> Mot de passe oublié </h1>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>

    </tr>

    <tr>
        <td style=\"border-collapse: collapse\" valign=\"top\" align=\"center\">
            <table>
                <tr>
                    <td style=\"border-collapse: collapse\" valign=\"middle\" align=\"center\">
                        <div stlye=\"text-align:left;padding:0 20px 20px ; font-size:14px;line-height:1.5;width:80%\">

                            <p class=\"align-content-center\"> Vous avez demandé de réinitialiser le mot de passe de votre compte.
                                Cliquez sur le bouton ci-dessous pour vous effectuer ce changement. </p>
                            <br>

                            <p class=\"align-content-center\">
                                <a  style=\"background-color:orange;color:beige;display: inline-block;text-align: center;text-decoration: none;width: 300px; height: 20px ;border-radius: 12px\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetPassword", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 46, $this->source); })())])), "html", null, true);
        echo "\"> Réinitialiser mon mot de passe </a></p>

                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </tbody>


</table>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/security/ForgottenPassEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 46,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table width=\"100%\" height=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" >
    <tbody>
    <tr>
        <td style=\"border_collapse:collapse\" valign=\"top\" align=\"center\">
            <table style=\"background-color:#FFFFFF;background-image: none; background-repeat: repeat;background-position: top left\"
                   width=\"100%\" height=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                <tbody>
                <tr>
                    <td style=\"border-collapse: collapse\" valign=\"middle\" align=\"center\">
                        <img src=\"{{absolute_url(asset('/Front/assets/img/icon.png')) }}\">
                    </td>
                </tr>
                </tbody>

            </table>
        </td>
    </tr>
    <tr>
        <td style=\"border-collapse: collapse\" valign=\"top\" align=\"center\">

            <table width=\"100%\" height=\"0\" cellspacing=\"0\" cellpadding=\"40\" border=\"0\">
                <tbody>
                <tr>
                    <td style=\"border-collapse: collapse\" valign=\"middle\" align=\"center\">
                        <h1 style=\"color:orange\"> Mot de passe oublié </h1>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>

    </tr>

    <tr>
        <td style=\"border-collapse: collapse\" valign=\"top\" align=\"center\">
            <table>
                <tr>
                    <td style=\"border-collapse: collapse\" valign=\"middle\" align=\"center\">
                        <div stlye=\"text-align:left;padding:0 20px 20px ; font-size:14px;line-height:1.5;width:80%\">

                            <p class=\"align-content-center\"> Vous avez demandé de réinitialiser le mot de passe de votre compte.
                                Cliquez sur le bouton ci-dessous pour vous effectuer ce changement. </p>
                            <br>

                            <p class=\"align-content-center\">
                                <a  style=\"background-color:orange;color:beige;display: inline-block;text-align: center;text-decoration: none;width: 300px; height: 20px ;border-radius: 12px\" href=\"{{ absolute_url(path('resetPassword' ,{'token' : token})) }}\"> Réinitialiser mon mot de passe </a></p>

                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </tbody>


</table>


", "front/security/ForgottenPassEmail.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\security\\ForgottenPassEmail.html.twig");
    }
}
