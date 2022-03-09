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

/* front/reservation/index.html.twig */
class __TwigTemplate_0044fa8ca9ae079a352e1397490fc9627578137f71289f8288a231aebe74b0da extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/reservation/index.html.twig", 1);
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
        echo "    Réservations
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
<!-- Start Page Banner -->
<div class=\"page-banner-area item-bg3\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <div class=\"container\">
                <div class=\"page-banner-content\">
                    <h2>Checkout</h2>
                    <ul>
                        <li>
                            <a href=\"index.html\">Home</a>
                        </li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Checkout Area -->
<section class=\"checkout-area ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12\">
                <div class=\"user-actions\">
                    <i class='bx bx-link-external'></i>
                    <span>Returning customer?
                                <a href=\"login.html\">Click here to login</a>
                            </span>
                </div>
            </div>
        </div>
        <form>
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"billing-details\">
                        <h3 class=\"title\">Billing Details</h3>
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-group\">
                                    <label>Country <span class=\"required\">*</span></label>
                                    <div class=\"select-box\">
                                        <select class=\"form-control\">
                                            <option value=\"5\">United Arab Emirates</option>
                                            <option value=\"1\">China</option>
                                            <option value=\"2\">United Kingdom</option>
                                            <option value=\"0\">Germany</option>
                                            <option value=\"3\">France</option>
                                            <option value=\"4\">Japan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>First Name <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Last Name <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-group\">
                                    <label>Company Name</label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Town / City <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>State / County <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Postcode / Zip <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Email Address<span class=\"required\">*</span></label>
                                    <input type=\"email\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Phone <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"create-an-account\">
                                    <label class=\"form-check-label\" for=\"create-an-account\">Create an account?</label>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"ship-different-address\">
                                    <label class=\"form-check-label\" for=\"ship-different-address\">Ship to a different address?</label>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-group\">
                                    <textarea name=\"notes\" id=\"notes\" cols=\"30\" rows=\"5\" placeholder=\"Order Notes\" class=\"form-control\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"order-details\">
                        <h3 class=\"title\">Your Order</h3>
                        <div class=\"order-table table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Product Name</th>
                                    <th scope=\"col\">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"product-name\">
                                        <a href=\"shop-details.html\">Darling Oranges</a>
                                    </td>
                                    <td class=\"product-total\">
                                        <span class=\"subtotal-amount\">\$455.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"product-name\">
                                        <a href=\"shop-details.html\">Strawberry</a>
                                    </td>
                                    <td class=\"product-total\">
                                        <span class=\"subtotal-amount\">\$541.50</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"product-name\">
                                        <a href=\"shop-details.html\">Cabbage</a>
                                    </td>
                                    <td class=\"product-total\">
                                        <span class=\"subtotal-amount\">\$140.50</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"product-name\">
                                        <a href=\"shop-details.html\">Nectarine</a>
                                    </td>
                                    <td class=\"product-total\">
                                        <span class=\"subtotal-amount\">\$547.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"order-subtotal\">
                                        <span>Seasoned Tomatoes</span>
                                    </td>
                                    <td class=\"order-subtotal-price\">
                                        <span class=\"order-subtotal-amount\">\$1683.50</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"order-shipping\">
                                        <span>Seasoned Carrot</span>
                                    </td>
                                    <td class=\"shipping-price\">
                                        <span>\$30.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"total-price\">
                                        <span>Order Total</span>
                                    </td>
                                    <td class=\"product-subtotal\">
                                        <span class=\"subtotal-amount\">\$1713.50</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class=\"payment-box\">
                            <div class=\"payment-method\">
                                <p>
                                    <input type=\"radio\" id=\"direct-bank-transfer\" name=\"radio-group\" checked>
                                    <label for=\"direct-bank-transfer\">Direct Bank Transfer</label>
                                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                </p>
                                <p>
                                    <input type=\"radio\" id=\"paypal\" name=\"radio-group\">
                                    <label for=\"paypal\">PayPal</label>
                                </p>
                                <p>
                                    <input type=\"radio\" id=\"cash-on-delivery\" name=\"radio-group\">
                                    <label for=\"cash-on-delivery\">Cash on Delivery</label>
                                </p>
                            </div>
                            <a href=\"#\" class=\"default-btn\">
                                Place Order
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Checkout Area -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block title %}
    Réservations
{% endblock %}
{% block content %}

<!-- Start Page Banner -->
<div class=\"page-banner-area item-bg3\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <div class=\"container\">
                <div class=\"page-banner-content\">
                    <h2>Checkout</h2>
                    <ul>
                        <li>
                            <a href=\"index.html\">Home</a>
                        </li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Checkout Area -->
<section class=\"checkout-area ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12\">
                <div class=\"user-actions\">
                    <i class='bx bx-link-external'></i>
                    <span>Returning customer?
                                <a href=\"login.html\">Click here to login</a>
                            </span>
                </div>
            </div>
        </div>
        <form>
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"billing-details\">
                        <h3 class=\"title\">Billing Details</h3>
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-group\">
                                    <label>Country <span class=\"required\">*</span></label>
                                    <div class=\"select-box\">
                                        <select class=\"form-control\">
                                            <option value=\"5\">United Arab Emirates</option>
                                            <option value=\"1\">China</option>
                                            <option value=\"2\">United Kingdom</option>
                                            <option value=\"0\">Germany</option>
                                            <option value=\"3\">France</option>
                                            <option value=\"4\">Japan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>First Name <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Last Name <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-group\">
                                    <label>Company Name</label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Address <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Town / City <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>State / County <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Postcode / Zip <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Email Address<span class=\"required\">*</span></label>
                                    <input type=\"email\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"form-group\">
                                    <label>Phone <span class=\"required\">*</span></label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"create-an-account\">
                                    <label class=\"form-check-label\" for=\"create-an-account\">Create an account?</label>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"ship-different-address\">
                                    <label class=\"form-check-label\" for=\"ship-different-address\">Ship to a different address?</label>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-group\">
                                    <textarea name=\"notes\" id=\"notes\" cols=\"30\" rows=\"5\" placeholder=\"Order Notes\" class=\"form-control\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"order-details\">
                        <h3 class=\"title\">Your Order</h3>
                        <div class=\"order-table table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Product Name</th>
                                    <th scope=\"col\">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"product-name\">
                                        <a href=\"shop-details.html\">Darling Oranges</a>
                                    </td>
                                    <td class=\"product-total\">
                                        <span class=\"subtotal-amount\">\$455.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"product-name\">
                                        <a href=\"shop-details.html\">Strawberry</a>
                                    </td>
                                    <td class=\"product-total\">
                                        <span class=\"subtotal-amount\">\$541.50</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"product-name\">
                                        <a href=\"shop-details.html\">Cabbage</a>
                                    </td>
                                    <td class=\"product-total\">
                                        <span class=\"subtotal-amount\">\$140.50</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"product-name\">
                                        <a href=\"shop-details.html\">Nectarine</a>
                                    </td>
                                    <td class=\"product-total\">
                                        <span class=\"subtotal-amount\">\$547.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"order-subtotal\">
                                        <span>Seasoned Tomatoes</span>
                                    </td>
                                    <td class=\"order-subtotal-price\">
                                        <span class=\"order-subtotal-amount\">\$1683.50</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"order-shipping\">
                                        <span>Seasoned Carrot</span>
                                    </td>
                                    <td class=\"shipping-price\">
                                        <span>\$30.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"total-price\">
                                        <span>Order Total</span>
                                    </td>
                                    <td class=\"product-subtotal\">
                                        <span class=\"subtotal-amount\">\$1713.50</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class=\"payment-box\">
                            <div class=\"payment-method\">
                                <p>
                                    <input type=\"radio\" id=\"direct-bank-transfer\" name=\"radio-group\" checked>
                                    <label for=\"direct-bank-transfer\">Direct Bank Transfer</label>
                                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                </p>
                                <p>
                                    <input type=\"radio\" id=\"paypal\" name=\"radio-group\">
                                    <label for=\"paypal\">PayPal</label>
                                </p>
                                <p>
                                    <input type=\"radio\" id=\"cash-on-delivery\" name=\"radio-group\">
                                    <label for=\"cash-on-delivery\">Cash on Delivery</label>
                                </p>
                            </div>
                            <a href=\"#\" class=\"default-btn\">
                                Place Order
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Checkout Area -->
{% endblock %}
", "front/reservation/index.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\reservation\\index.html.twig");
    }
}
