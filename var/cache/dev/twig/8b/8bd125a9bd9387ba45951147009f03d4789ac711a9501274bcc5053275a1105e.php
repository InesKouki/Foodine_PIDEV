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

/* back/evenement/email.html.twig */
class __TwigTemplate_3267917ade26b48c2e4708b0fe02eb82875b07c72dd4c7860dad9562b4980d13 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/evenement/email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/evenement/email.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"format-detection\" content=\"date=no\" />
    <meta name=\"format-detection\" content=\"address=no\" />
    <meta name=\"format-detection\" content=\"telephone=no\" />
    <meta name=\"x-apple-disable-message-reformatting\" />
    <!--[if !mso]><!-->
    <link href=\"https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i\" rel=\"stylesheet\" />
    <!--<![endif]-->
    <title>Email Template</title>
    <!--[if gte mso 9]>
    <style type=\"text/css\" media=\"all\">
        sup { font-size: 100% !important; }
    </style>
    <![endif]-->


    <style type=\"text/css\" media=\"screen\">
        /* Linked Styles */
        body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#1e52bd; -webkit-text-size-adjust:none }
        a { color:#000001; text-decoration:none }
        p { padding:0 !important; margin:0 !important }
        img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
        .mcnPreviewText { display: none !important; }
        .text-footer2 a { color: #ffffff; }

        /* Mobile styles */
        @media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
            .mobile-shell { width: 100% !important; min-width: 100% !important; }

            .m-center { text-align: center !important; }
            .m-left { text-align: left !important; margin-right: auto !important; }

            .center { margin: 0 auto !important; }
            .content2 { padding: 8px 15px 12px !important; }
            .t-left { float: left !important; margin-right: 30px !important; }
            .t-left-2  { float: left !important; }

            .td { width: 100% !important; min-width: 100% !important; }

            .content { padding: 30px 15px !important; }
            .section { padding: 30px 15px 0px !important; }

            .m-br-15 { height: 15px !important; }
            .mpb5 { padding-bottom: 5px !important; }
            .mpb15 { padding-bottom: 15px !important; }
            .mpb20 { padding-bottom: 20px !important; }
            .mpb30 { padding-bottom: 30px !important; }
            .m-padder { padding: 0px 15px !important; }
            .m-padder2 { padding-left: 15px !important; padding-right: 15px !important; }
            .p70 { padding: 30px 0px !important; }
            .pt70 { padding-top: 30px !important; }
            .p0-15 { padding: 0px 15px !important; }
            .p30-15 { padding: 30px 15px !important; }
            .p30-15-0 { padding: 30px 15px 0px 15px !important; }
            .p0-15-30 { padding: 0px 15px 30px 15px !important; }


            .text-footer { text-align: center !important; }

            .m-td,
            .m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

            .m-block { display: block !important; }

            .fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

            .column,
            .column-dir,
            .column-top,
            .column-empty,
            .column-top-30,
            .column-top-60,
            .column-empty2,
            .column-bottom { float: left !important; width: 100% !important; display: block !important; }

            .column-empty { padding-bottom: 15px !important; }
            .column-empty2 { padding-bottom: 30px !important; }

            .content-spacing { width: 15px !important; }
        }
    </style>
</head>
<body class=\"body\"style=\"padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#1e52bd; -webkit-text-size-adjust:none;\">
<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#1e52bd\">
    <tr>
        <td align=\"center\" valign=\"top\">
            <!-- Main -->
            <table width=\"650\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"mobile-shell\">
                <tr>
                    <td class=\"td\" style=\"width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;\">
                        <!-- Header -->
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">

                            <!-- END Top bar -->
                            <!-- Logo -->
                            <tr>
                                <td bgcolor=\"#ffffff\" class=\"p30-15 img-center\" style=\"padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;\"><a href=\"#\" target=\"_blank\"><img src=\"https://i.ibb.co/nLxpyC3/logoo.png\" width=\"244\" height=\"75\" border=\"0\" alt=\"\" /></a></td>
                            </tr>
                            <!-- END Logo -->
                            <!-- Nav -->
                            <!-- END Nav -->
                        </table>
                        <!-- END Header -->

                        <!-- Section 1 -->
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ebebeb\">
                            <tr>
                                <td class=\"fluid-img\"style=\"font-size:0pt; line-height:0pt; text-align:left;\"><img src=\"https://i.ibb.co/VqTDJc3/banner-2.png\" width=\"650\" height=\"358\" border=\"0\" alt=\"\" /></td>
                            </tr>
                            <tr>
                                <td class=\"p30-15-0\" style=\"padding: 50px 30px 0px;\" bgcolor=\"#ffffff\">
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">

                                        <tr>
                                            <td class=\"h2-center\"style=\"color:#000000; font-family:'Playfair Display', Times, 'Times New Roman', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;\">Ne ratez pas le nouvel ??v??nement !</td>
                                        </tr>

                                        <tr>
                                            <td class=\"h2-center\"style=\"color:#000000; font-family:'Playfair Display', Times, 'Times New Roman', serif; font-size:48px;font-weight: bold; text-transform: uppercase; line-height:36px; text-align:center; padding-bottom:20px;\">";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 132, $this->source); })()), "name", [], "any", false, false, false, 132), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"h2-center\"style=\"color:#000000; font-family:'Playfair Display', Times, 'Times New Roman', serif; font-size:26px; line-height:24px; text-align:center; padding-bottom:20px;\">
                                                Du ";
        // line 136
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 136, $this->source); })()), "dateDeb", [], "any", false, false, false, 136), "d M"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 136, $this->source); })()), "dateFin", [], "any", false, false, false, 136), "d M"), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-center\"style=\"color:#5d5c5c; font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-bottom:22px;\">";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 140, $this->source); })()), "description", [], "any", false, false, false, 140), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td align=\"center\">
                                                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                    <tr>
                                                        <td class=\"text-button-orange\"style=\"background:#e85711; color:#ffffff; font-family:'Kreon', 'Times New Roman', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px;\"><a href=\"localhost:8000\" target=\"_blank\" class=\"link-white\"style=\"color:#ffffff; text-decoration:none;\"><span class=\"link-white\"style=\"color:#ffffff; text-decoration:none;\">Voir plus</span></a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!-- END Section 1 -->

                        <!-- Section 2 -->
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#dde8fd\">
                                        <tr>
                                            <td class=\"fluid-img\"style=\"font-size:0pt; line-height:0pt; text-align:left;\"><img src=\"https://i.ibb.co/Kb7RcX8/free-white-blue.jpg\" width=\"650\" height=\"162\" border=\"0\" alt=\"\" /></td>
                                        </tr>
                                        <tr>
                                            <td class=\"p0-15\" style=\"padding: 0px 30px;\">
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                    <tr>
                                                        <td class=\"h2-center\"style=\"color:#000000; font-family:'Playfair Display', Times, 'Times New Roman', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;\"><multiline>Ev??nements prochains</multiline></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"pb40\"style=\"padding-bottom:40px;\">
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <td class=\"event-separator\"style=\"padding-bottom:40px; border-bottom:1px solid #ffffff;\">
                                                                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                            <tr>
                                                                                <th class=\"column-top\" width=\"60\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                        <tr>
                                                                                            <td class=\"date\"style=\"color:#000000; font-family:'Raleway', Arial,sans-serif; font-size:12px; line-height:16px; text-align:left; padding-bottom:6px;\"><multiline>Mars</multiline></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class=\"day\"style=\"color:#1e52bd; font-family:'Raleway', Arial,sans-serif; font-size:40px; line-height:44px; text-align:left; font-weight:bold;\"><multiline>15</multiline></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                                <th class=\"column-empty\" width=\"10\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                                                <th class=\"column-top\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                        <tr>
                                                                                            <td class=\"h5-black black\"style=\"font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;\"><multiline>Ev??nement 1</multiline></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class=\"text black\"style=\"font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;\"><multiline>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo dolore setr tempore alipsinung.</multiline></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                                <th class=\"column-empty\" width=\"10\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                                                <th class=\"column-top\" width=\"156\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                        <tr>
                                                                                            <td align=\"right\">
                                                                                                <table class=\"m-left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                                    <tr>
                                                                                                        <td class=\"text-button button-blue\"style=\"font-family:'Kreon', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:transparent; color:#1e52bd; border:1px solid #1e52bd;\"><multiline><a href=\"localhost:8000/evenements\" target=\"_blank\" class=\"link-blue\"style=\"color:#1e52bd; text-decoration:none;\"><span class=\"link-blue\"style=\"color:#1e52bd; text-decoration:none;\">Voir plus</span></a></multiline></td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"pb40\"style=\"padding-bottom:40px;\">
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <th class=\"column-top\" width=\"60\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                            <tr>
                                                                                <td class=\"date\"style=\"color:#000000; font-family:'Raleway', Arial,sans-serif; font-size:12px; line-height:16px; text-align:left; padding-bottom:6px;\"><multiline>Mars</multiline></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class=\"day\"style=\"color:#1e52bd; font-family:'Raleway', Arial,sans-serif; font-size:40px; line-height:44px; text-align:left; font-weight:bold;\"><multiline>21</multiline></td>
                                                                            </tr>
                                                                        </table>
                                                                    </th>
                                                                    <th class=\"column-empty\" width=\"10\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                                    <th class=\"column-top\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                            <tr>
                                                                                <td class=\"h5-black black\"style=\"font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;\"><multiline>Ev??nement 2</multiline></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class=\"text black\"style=\"font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;\"><multiline>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo dolore setr tempore alipsinung.</multiline></td>
                                                                            </tr>
                                                                        </table>
                                                                    </th>
                                                                    <th class=\"column-empty\" width=\"10\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                                    <th class=\"column-top\" width=\"156\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                            <tr>
                                                                                <td align=\"right\">
                                                                                    <table class=\"m-left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                        <tr>
                                                                                            <td class=\"text-button button-blue\"style=\"font-family:'Kreon', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:transparent; color:#1e52bd; border:1px solid #1e52bd;\"><multiline><a href=\"#\" target=\"_blank\" class=\"link-blue\"style=\"color:#1e52bd; text-decoration:none;\"><span class=\"link-blue\"style=\"color:#1e52bd; text-decoration:none;\">Voir plus</span></a></multiline></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\">
                                                            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <td class=\"text-button button-blue2\"style=\"font-family:'Kreon', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:#1e52bd; color:#ffffff;\"><multiline><a href=\"#\" target=\"_blank\" class=\"link-white\"style=\"color:#ffffff; text-decoration:none;\"><span class=\"link-white\"style=\"color:#ffffff; text-decoration:none;\">Voir tous les ??v??nements</span></a></multiline></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"fluid-img\"style=\"font-size:0pt; line-height:0pt; text-align:left;\"><img src=\"https://i.ibb.co/Wkrd2bT/free-blue-white.jpg\" width=\"650\" height=\"160\" border=\"0\" alt=\"\" /></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>
                        <!-- END Section 2 -->




































                        <!-- Footer -->
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td class=\"p30-15-0\" bgcolor=\"#ffffff\" style=\"border-radius: 0px 0px 20px 20px; padding: 70px 30px 0px 30px;\">
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td align=\"center\" class=\"p30-15\" style=\"border-top: 1px solid #ebebeb; padding: 30px;\">
                                                <table class=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"style=\"text-align:center;\">
                                                    <tr>
                                                        <th class=\"column-top\" width=\"180\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <td class=\"text-footer\"style=\"color:#5d5c5c; font-family:'Raleway', Arial,sans-serif; font-size:13px; line-height:22px; text-align:left;\">
                                                                        <multiline>
                                                                            <strong>Catalog &amp; Brochures</strong><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Request</span></a> <br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">View Online</span></a> <br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Buying Guides</span></a>
                                                                        </multiline>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                        <th class=\"column-empty\" width=\"20\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                        <th class=\"column-top\" width=\"180\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <td class=\"text-footer\"style=\"color:#5d5c5c; font-family:'Raleway', Arial,sans-serif; font-size:13px; line-height:22px; text-align:left;\">
                                                                        <multiline>
                                                                            <strong>Need Help</strong><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">FAQ</span></a><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Contact Us</span></a><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Return Policy</span></a><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Children's Product Registration</span></a>
                                                                        </multiline>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                        <th class=\"column-empty\" width=\"20\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                        <th class=\"column-top\" width=\"180\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <td class=\"text-footer\"style=\"color:#5d5c5c; font-family:'Raleway', Arial,sans-serif; font-size:13px; line-height:22px; text-align:left;\">
                                                                        <multiline>
                                                                            <strong>Delivery Information</strong><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Store Delivery</span></a> <br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Online Delivery</span></a> <br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Picking with Delivery</span></a> <br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Track an Order</span></a>
                                                                        </multiline>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <!-- END Footer -->
                    </td>
                </tr>
            </table>
            <!-- END Main -->

        </td>
    </tr>
</table>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/evenement/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 140,  183 => 136,  176 => 132,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"format-detection\" content=\"date=no\" />
    <meta name=\"format-detection\" content=\"address=no\" />
    <meta name=\"format-detection\" content=\"telephone=no\" />
    <meta name=\"x-apple-disable-message-reformatting\" />
    <!--[if !mso]><!-->
    <link href=\"https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i\" rel=\"stylesheet\" />
    <!--<![endif]-->
    <title>Email Template</title>
    <!--[if gte mso 9]>
    <style type=\"text/css\" media=\"all\">
        sup { font-size: 100% !important; }
    </style>
    <![endif]-->


    <style type=\"text/css\" media=\"screen\">
        /* Linked Styles */
        body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#1e52bd; -webkit-text-size-adjust:none }
        a { color:#000001; text-decoration:none }
        p { padding:0 !important; margin:0 !important }
        img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
        .mcnPreviewText { display: none !important; }
        .text-footer2 a { color: #ffffff; }

        /* Mobile styles */
        @media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
            .mobile-shell { width: 100% !important; min-width: 100% !important; }

            .m-center { text-align: center !important; }
            .m-left { text-align: left !important; margin-right: auto !important; }

            .center { margin: 0 auto !important; }
            .content2 { padding: 8px 15px 12px !important; }
            .t-left { float: left !important; margin-right: 30px !important; }
            .t-left-2  { float: left !important; }

            .td { width: 100% !important; min-width: 100% !important; }

            .content { padding: 30px 15px !important; }
            .section { padding: 30px 15px 0px !important; }

            .m-br-15 { height: 15px !important; }
            .mpb5 { padding-bottom: 5px !important; }
            .mpb15 { padding-bottom: 15px !important; }
            .mpb20 { padding-bottom: 20px !important; }
            .mpb30 { padding-bottom: 30px !important; }
            .m-padder { padding: 0px 15px !important; }
            .m-padder2 { padding-left: 15px !important; padding-right: 15px !important; }
            .p70 { padding: 30px 0px !important; }
            .pt70 { padding-top: 30px !important; }
            .p0-15 { padding: 0px 15px !important; }
            .p30-15 { padding: 30px 15px !important; }
            .p30-15-0 { padding: 30px 15px 0px 15px !important; }
            .p0-15-30 { padding: 0px 15px 30px 15px !important; }


            .text-footer { text-align: center !important; }

            .m-td,
            .m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

            .m-block { display: block !important; }

            .fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

            .column,
            .column-dir,
            .column-top,
            .column-empty,
            .column-top-30,
            .column-top-60,
            .column-empty2,
            .column-bottom { float: left !important; width: 100% !important; display: block !important; }

            .column-empty { padding-bottom: 15px !important; }
            .column-empty2 { padding-bottom: 30px !important; }

            .content-spacing { width: 15px !important; }
        }
    </style>
</head>
<body class=\"body\"style=\"padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#1e52bd; -webkit-text-size-adjust:none;\">
<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#1e52bd\">
    <tr>
        <td align=\"center\" valign=\"top\">
            <!-- Main -->
            <table width=\"650\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"mobile-shell\">
                <tr>
                    <td class=\"td\" style=\"width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;\">
                        <!-- Header -->
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">

                            <!-- END Top bar -->
                            <!-- Logo -->
                            <tr>
                                <td bgcolor=\"#ffffff\" class=\"p30-15 img-center\" style=\"padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;\"><a href=\"#\" target=\"_blank\"><img src=\"https://i.ibb.co/nLxpyC3/logoo.png\" width=\"244\" height=\"75\" border=\"0\" alt=\"\" /></a></td>
                            </tr>
                            <!-- END Logo -->
                            <!-- Nav -->
                            <!-- END Nav -->
                        </table>
                        <!-- END Header -->

                        <!-- Section 1 -->
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ebebeb\">
                            <tr>
                                <td class=\"fluid-img\"style=\"font-size:0pt; line-height:0pt; text-align:left;\"><img src=\"https://i.ibb.co/VqTDJc3/banner-2.png\" width=\"650\" height=\"358\" border=\"0\" alt=\"\" /></td>
                            </tr>
                            <tr>
                                <td class=\"p30-15-0\" style=\"padding: 50px 30px 0px;\" bgcolor=\"#ffffff\">
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">

                                        <tr>
                                            <td class=\"h2-center\"style=\"color:#000000; font-family:'Playfair Display', Times, 'Times New Roman', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;\">Ne ratez pas le nouvel ??v??nement !</td>
                                        </tr>

                                        <tr>
                                            <td class=\"h2-center\"style=\"color:#000000; font-family:'Playfair Display', Times, 'Times New Roman', serif; font-size:48px;font-weight: bold; text-transform: uppercase; line-height:36px; text-align:center; padding-bottom:20px;\">{{ event.name }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"h2-center\"style=\"color:#000000; font-family:'Playfair Display', Times, 'Times New Roman', serif; font-size:26px; line-height:24px; text-align:center; padding-bottom:20px;\">
                                                Du {{ event.dateDeb|date('d M')}} au {{ event.dateFin|date('d M')}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-center\"style=\"color:#5d5c5c; font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-bottom:22px;\">{{ event.description }}</td>
                                        </tr>
                                        <tr>
                                            <td align=\"center\">
                                                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                    <tr>
                                                        <td class=\"text-button-orange\"style=\"background:#e85711; color:#ffffff; font-family:'Kreon', 'Times New Roman', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px;\"><a href=\"localhost:8000\" target=\"_blank\" class=\"link-white\"style=\"color:#ffffff; text-decoration:none;\"><span class=\"link-white\"style=\"color:#ffffff; text-decoration:none;\">Voir plus</span></a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!-- END Section 1 -->

                        <!-- Section 2 -->
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#dde8fd\">
                                        <tr>
                                            <td class=\"fluid-img\"style=\"font-size:0pt; line-height:0pt; text-align:left;\"><img src=\"https://i.ibb.co/Kb7RcX8/free-white-blue.jpg\" width=\"650\" height=\"162\" border=\"0\" alt=\"\" /></td>
                                        </tr>
                                        <tr>
                                            <td class=\"p0-15\" style=\"padding: 0px 30px;\">
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                    <tr>
                                                        <td class=\"h2-center\"style=\"color:#000000; font-family:'Playfair Display', Times, 'Times New Roman', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;\"><multiline>Ev??nements prochains</multiline></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"pb40\"style=\"padding-bottom:40px;\">
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <td class=\"event-separator\"style=\"padding-bottom:40px; border-bottom:1px solid #ffffff;\">
                                                                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                            <tr>
                                                                                <th class=\"column-top\" width=\"60\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                        <tr>
                                                                                            <td class=\"date\"style=\"color:#000000; font-family:'Raleway', Arial,sans-serif; font-size:12px; line-height:16px; text-align:left; padding-bottom:6px;\"><multiline>Mars</multiline></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class=\"day\"style=\"color:#1e52bd; font-family:'Raleway', Arial,sans-serif; font-size:40px; line-height:44px; text-align:left; font-weight:bold;\"><multiline>15</multiline></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                                <th class=\"column-empty\" width=\"10\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                                                <th class=\"column-top\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                        <tr>
                                                                                            <td class=\"h5-black black\"style=\"font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;\"><multiline>Ev??nement 1</multiline></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class=\"text black\"style=\"font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;\"><multiline>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo dolore setr tempore alipsinung.</multiline></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                                <th class=\"column-empty\" width=\"10\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                                                <th class=\"column-top\" width=\"156\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                        <tr>
                                                                                            <td align=\"right\">
                                                                                                <table class=\"m-left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                                    <tr>
                                                                                                        <td class=\"text-button button-blue\"style=\"font-family:'Kreon', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:transparent; color:#1e52bd; border:1px solid #1e52bd;\"><multiline><a href=\"localhost:8000/evenements\" target=\"_blank\" class=\"link-blue\"style=\"color:#1e52bd; text-decoration:none;\"><span class=\"link-blue\"style=\"color:#1e52bd; text-decoration:none;\">Voir plus</span></a></multiline></td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"pb40\"style=\"padding-bottom:40px;\">
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <th class=\"column-top\" width=\"60\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                            <tr>
                                                                                <td class=\"date\"style=\"color:#000000; font-family:'Raleway', Arial,sans-serif; font-size:12px; line-height:16px; text-align:left; padding-bottom:6px;\"><multiline>Mars</multiline></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class=\"day\"style=\"color:#1e52bd; font-family:'Raleway', Arial,sans-serif; font-size:40px; line-height:44px; text-align:left; font-weight:bold;\"><multiline>21</multiline></td>
                                                                            </tr>
                                                                        </table>
                                                                    </th>
                                                                    <th class=\"column-empty\" width=\"10\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                                    <th class=\"column-top\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                            <tr>
                                                                                <td class=\"h5-black black\"style=\"font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;\"><multiline>Ev??nement 2</multiline></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class=\"text black\"style=\"font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;\"><multiline>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo dolore setr tempore alipsinung.</multiline></td>
                                                                            </tr>
                                                                        </table>
                                                                    </th>
                                                                    <th class=\"column-empty\" width=\"10\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                                    <th class=\"column-top\" width=\"156\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                            <tr>
                                                                                <td align=\"right\">
                                                                                    <table class=\"m-left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                        <tr>
                                                                                            <td class=\"text-button button-blue\"style=\"font-family:'Kreon', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:transparent; color:#1e52bd; border:1px solid #1e52bd;\"><multiline><a href=\"#\" target=\"_blank\" class=\"link-blue\"style=\"color:#1e52bd; text-decoration:none;\"><span class=\"link-blue\"style=\"color:#1e52bd; text-decoration:none;\">Voir plus</span></a></multiline></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\">
                                                            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <td class=\"text-button button-blue2\"style=\"font-family:'Kreon', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:#1e52bd; color:#ffffff;\"><multiline><a href=\"#\" target=\"_blank\" class=\"link-white\"style=\"color:#ffffff; text-decoration:none;\"><span class=\"link-white\"style=\"color:#ffffff; text-decoration:none;\">Voir tous les ??v??nements</span></a></multiline></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"fluid-img\"style=\"font-size:0pt; line-height:0pt; text-align:left;\"><img src=\"https://i.ibb.co/Wkrd2bT/free-blue-white.jpg\" width=\"650\" height=\"160\" border=\"0\" alt=\"\" /></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>
                        <!-- END Section 2 -->




































                        <!-- Footer -->
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td class=\"p30-15-0\" bgcolor=\"#ffffff\" style=\"border-radius: 0px 0px 20px 20px; padding: 70px 30px 0px 30px;\">
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td align=\"center\" class=\"p30-15\" style=\"border-top: 1px solid #ebebeb; padding: 30px;\">
                                                <table class=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"style=\"text-align:center;\">
                                                    <tr>
                                                        <th class=\"column-top\" width=\"180\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <td class=\"text-footer\"style=\"color:#5d5c5c; font-family:'Raleway', Arial,sans-serif; font-size:13px; line-height:22px; text-align:left;\">
                                                                        <multiline>
                                                                            <strong>Catalog &amp; Brochures</strong><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Request</span></a> <br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">View Online</span></a> <br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Buying Guides</span></a>
                                                                        </multiline>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                        <th class=\"column-empty\" width=\"20\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                        <th class=\"column-top\" width=\"180\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <td class=\"text-footer\"style=\"color:#5d5c5c; font-family:'Raleway', Arial,sans-serif; font-size:13px; line-height:22px; text-align:left;\">
                                                                        <multiline>
                                                                            <strong>Need Help</strong><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">FAQ</span></a><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Contact Us</span></a><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Return Policy</span></a><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Children's Product Registration</span></a>
                                                                        </multiline>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                        <th class=\"column-empty\" width=\"20\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;\"></th>
                                                        <th class=\"column-top\" width=\"180\"style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;\">
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                <tr>
                                                                    <td class=\"text-footer\"style=\"color:#5d5c5c; font-family:'Raleway', Arial,sans-serif; font-size:13px; line-height:22px; text-align:left;\">
                                                                        <multiline>
                                                                            <strong>Delivery Information</strong><br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Store Delivery</span></a> <br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Online Delivery</span></a> <br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Picking with Delivery</span></a> <br />
                                                                            <a href=\"#\" target=\"_blank\" class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\"><span class=\"link-grey\"style=\"color:#5d5c5c; text-decoration:none;\">Track an Order</span></a>
                                                                        </multiline>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <!-- END Footer -->
                    </td>
                </tr>
            </table>
            <!-- END Main -->

        </td>
    </tr>
</table>
</body>
</html>
", "back/evenement/email.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\evenement\\email.html.twig");
    }
}
