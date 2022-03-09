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

/* back/evenement/ajax.html.twig */
class __TwigTemplate_1e5b2eed67311f401487724beb841fe4967b616dd19484b1084ac08fb25174ee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/evenement/ajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/evenement/ajax.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["backEvents"]) || array_key_exists("backEvents", $context) ? $context["backEvents"] : (function () { throw new RuntimeError('Variable "backEvents" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 2
            echo "    <tr>
        <td><a target=\"_blank\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventDeals", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 3)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 3), "html", null, true);
            echo "</a><td>

            ";
            // line 5
            if (((1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateDeb", [], "any", false, false, false, 5), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d"))) && (1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateFin", [], "any", false, false, false, 5), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d"))))) {
                // line 6
                echo "                <span class=\"badge bg-gradient-moonlit\">Bientôt</span>
            ";
            } elseif (((0 >= twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 7
$context["e"], "dateDeb", [], "any", false, false, false, 7), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d"))) && (1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateFin", [], "any", false, false, false, 7), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d"))))) {
                // line 8
                echo "                <span class=\"badge bg-gradient-lush\">Actif</span>
            ";
            } elseif (((-1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 9
$context["e"], "dateDeb", [], "any", false, false, false, 9), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d"))) && (-1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateFin", [], "any", false, false, false, 9), "Y-m-d"), twig_date_format_filter($this->env, "now", "Y-m-d"))))) {
                // line 10
                echo "                <span class=\"badge bg-gradient-burning\">Inactif</span>
            ";
            }
            // line 12
            echo "        </td>

        <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
        ";
            // line 16
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateDeb", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateFin", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
            echo "</td>
        <td><img height=\"112\" width=\"250\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["e"], "image", [], "any", false, false, false, 18)), "html", null, true);
            echo "\" alt=\"image\"></td>

        <td>
            <div class=\"d-flex order-actions\">
                <a href=";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateEvenement", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo " class=\"ms-3\"><i class='bx bxs-edit'></i></a>
                <a href=";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteEvenement", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo " class=\"ms-3\"><i class='bx bxs-trash'></i></a>
            </div>
        </td>

    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/evenement/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  97 => 22,  90 => 18,  86 => 17,  81 => 16,  77 => 14,  73 => 12,  69 => 10,  67 => 9,  64 => 8,  62 => 7,  59 => 6,  57 => 5,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for e in backEvents %}
    <tr>
        <td><a target=\"_blank\" href=\"{{ path('eventDeals',{id: e.id}) }}\">{{ e.name }}</a><td>

            {% if e.dateDeb|date('Y-m-d') > \"now\"|date('Y-m-d') and e.dateFin|date('Y-m-d') > \"now\"|date('Y-m-d') %}
                <span class=\"badge bg-gradient-moonlit\">Bientôt</span>
            {% elseif e.dateDeb|date('Y-m-d') <= \"now\"|date('Y-m-d') and e.dateFin|date('Y-m-d') > \"now\"|date('Y-m-d') %}
                <span class=\"badge bg-gradient-lush\">Actif</span>
            {% elseif e.dateDeb|date('Y-m-d') < \"now\"|date('Y-m-d') and e.dateFin|date('Y-m-d') < \"now\"|date('Y-m-d') %}
                <span class=\"badge bg-gradient-burning\">Inactif</span>
            {%  endif %}
        </td>

        <td>{{ e.description }}</td>
        {#<td><div class=\"badge rounded-pill bg-light p-2 text-uppercase px-3\"><i class='bx bxs-circle me-1'></i>Traitée</div></td>#}
        <td>{{ e.dateDeb | date ('d/m/Y') }}</td>
        <td>{{ e.dateFin | date ('d/m/Y') }}</td>
        <td><img height=\"112\" width=\"250\" src=\"{{ asset('uploads/') ~ e.image }}\" alt=\"image\"></td>

        <td>
            <div class=\"d-flex order-actions\">
                <a href={{ path('updateEvenement',{id: e.id}) }} class=\"ms-3\"><i class='bx bxs-edit'></i></a>
                <a href={{ path('deleteEvenement',{id: e.id}) }} class=\"ms-3\"><i class='bx bxs-trash'></i></a>
            </div>
        </td>

    </tr>
{% endfor %}", "back/evenement/ajax.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\evenement\\ajax.html.twig");
    }
}
