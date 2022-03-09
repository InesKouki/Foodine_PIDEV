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

/* back/recette/ajoutRecette.html.twig */
class __TwigTemplate_3ee77ac2ac4d9f2aecd561528025a41b8a564f01c6b4cf1f33d7761901f13ba7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/recette/ajoutRecette.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/recette/ajoutRecette.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--favicon-->
    <link rel=\"icon\" href=\"Back/assets/images/icon.png\" type=\"image/png\" />
    <!--plugins-->
    <link href=\"Back/assets/plugins/simplebar/css/simplebar.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/input-tags/css/tagsinput.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/metismenu/css/metisMenu.min.css\" rel=\"stylesheet\" />
    <!-- loader-->
    <link href=\"Back/assets/css/pace.min.css\" rel=\"stylesheet\" />
    <script src=\"Back/assets/js/pace.min.js\"></script>
    <!-- Bootstrap CSS -->
    <link href=\"Back/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"Back/assets/css/app.css\" rel=\"stylesheet\">
    <link href=\"Back/assets/css/icons.css\" rel=\"stylesheet\">

    <title>Foodine | Ajouter Recette</title>
</head>

<body class=\"bg-theme bg-theme6\">
<!--wrapper-->
<div class=\"wrapper\">
    <!--start header -->
    <header>
        <div class=\"topbar d-flex align-items-center\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"topbar-logo-header\">
                    <div class=\"\">
                        <a href=\"IndexChef.html\" ><img src=\"Back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                    </div>
                    <div class=\"\">
                        <!--<h4 class=\"logo-text\">Foodine</h4>-->
                    </div>
                </div>
                <div class=\"mobile-toggle-menu\"><i class='bx bx-menu'></i></div>
                <div class=\"search-bar flex-grow-1\">

                </div>
                <div class=\"top-menu ms-auto\">
                    <ul class=\"navbar-nav align-items-center\">
                        <li class=\"nav-item mobile-search-icon\">
                            <a class=\"nav-link\" href=\"#\">\t<i class='bx bx-search'></i>
                            </a>
                        </li>

                        <li class=\"nav-item dropdown dropdown-large\">

                            <div class=\"dropdown-menu dropdown-menu-end\">

                                <div class=\"header-notifications-list\">
                                </div>

                            </div>
                        </li>
                        <li class=\"nav-item dropdown dropdown-large\">

                            <div class=\"dropdown-menu dropdown-menu-end\">

                                <div class=\"header-message-list\">
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"user-box dropdown\">
                    <a class=\"d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"Back/assets/images/avatars/ines.jpg\" class=\"user-img\" alt=\"user avatar\">
                        <div class=\"user-info ps-3\">
                            <p class=\"user-name mb-0\">Ines </p>
                            <p class=\"designattion mb-0\">Chef</p>
                        </div>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\">

                        <li><a class=\"dropdown-item\" href=\"ConnexionChef.html\"><i class='bx bx-log-out-circle'></i><span>Déconnexion</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <!--navigation-->
    <div class=\"nav-container\">
        <div class=\"mobile-topbar-header\">
            <div>
                <!--\t<img src=\"Back/assets/images/logoo.png\" class=\"logo-icon\" alt=\"logo icon\"> -->
            </div>
            <div>
                <a href=\"indexChef.html\">\t<h4 class=\"logo-text\">Foodine</h4></a>
            </div>
            <div class=\"toggle-icon ms-auto\"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <nav class=\"topbar-nav\">
            <ul class=\"metismenu\" id=\"menu\">
                <li>
                    <a href=\"/ajouterplanning\" class=\"\">
                        <div class=\"parent-icon\"><i class='bx bx-calendar'></i>
                        </div>
                        <div class=\"menu-title\">Planning</div>
                    </a>


                <li>
                    <a href=\"admin-recette\" class=\"\">
                        <div class=\"parent-icon\"><i class=\"bx bx-receipt\"></i>
                        </div>
                        <div class=\"menu-title\">Recettes</div>
                    </a>

                </li>

            </ul>
        </nav>
    </div>
    <!--end navigation-->
    <!--start page wrapper -->
    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\">Ajouter Recette</div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-receipt\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">
                    <h5 class=\"card-title\">Ajouter Recette</h5>
                    <hr/>
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"border border-3 p-4 rounded\">

                                    <div class=\"mb-3\">
                                        <label for=\"inputProductDescription\" class=\"form-label\">Image de la recette</label>
                                        <input id=\"image-uploadify\" type=\"file\" accept=\".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf\" multiple>
                                    </div>



                                </div>




                            </div>




                            <div class=\"col-lg-4\">
                                <div class=\"border border-3 p-4 rounded\">
                                    <div class=\"row g-3\">


                                        <div class=\"col-12\">
                                            <label for=\"inputProductType\" class=\"form-label\">Nom De la recette</label>
                                            <input type=\"text\" class=\"form-control\" id=\"inputProductTags\" placeholder=\"Nom recette\">
                                        </div>
                                        <div class=\"col-12\">
                                            <label for=\"inputVendor\" class=\"form-label\">Nom de du planning</label>
                                            <select class=\"form-select\" id=\"inputVendor\">
                                                <option></option>
                                                <option value=\"1\">One</option>
                                                <option value=\"2\">Two</option>
                                                <option value=\"3\">Three</option>
                                            </select>
                                        </div>

                                        <div class=\"card-body\">
                                            <form>

                                                <div class=\"mb-3\">
                                                    <label class=\"form-label\">Ingrédients</label>
                                                    <select multiple data-role=\"tagsinput\">
                                                        <option value=\"Amsterdam\">Ingredient1</option>
                                                        <option value=\"Washington\">Ingredient2</option>
                                                        <option value=\"Sydney\">Ingredient3</option>
                                                        <option value=\"Beijing\">Beijing</option>
                                                        <option value=\"Cairo\">Cairo</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"inputProductTags\" class=\"form-label\">Description</label>
                                            <input type=\"text\" class=\"form-control\" id=\"inputProductTags\" placeholder=\"Enter Product Tags\">
                                        </div>
                                        <div class=\"col-12\">
                                            <div class=\"d-grid\">
                                                <button type=\"button\" class=\"btn btn-light\">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class=\"overlay toggle-icon\"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href=\"javaScript:;\" class=\"back-to-top\"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class=\"page-footer\">
        <p class=\"mb-0\">Copyright © 2021. All right reserved.</p>
    </footer>
</div>
<!--end wrapper-->
<!--start switcher-->
<div class=\"switcher-wrapper\">
    <div class=\"switcher-btn\"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class=\"switcher-body\">
        <div class=\"d-flex align-items-center\">
            <h5 class=\"mb-0 text-uppercase\">Theme Customizer</h5>
            <button type=\"button\" class=\"btn-close ms-auto close-switcher\" aria-label=\"Close\"></button>
        </div>
        <hr/>
        <p class=\"mb-0\">Gaussian Texture</p>
        <hr>

        <ul class=\"switcher\">
            <li id=\"theme1\"></li>
            <li id=\"theme2\"></li>
            <li id=\"theme3\"></li>
            <li id=\"theme4\"></li>
            <li id=\"theme5\"></li>
            <li id=\"theme6\"></li>
        </ul>
        <hr>
        <p class=\"mb-0\">Gradient Background</p>
        <hr>

        <ul class=\"switcher\">
            <li id=\"theme7\"></li>
            <li id=\"theme8\"></li>
            <li id=\"theme9\"></li>
            <li id=\"theme10\"></li>
            <li id=\"theme11\"></li>
            <li id=\"theme12\"></li>
            <li id=\"theme13\"></li>
            <li id=\"theme14\"></li>
            <li id=\"theme15\"></li>
        </ul>
    </div>
</div>
<!--end switcher-->
<!-- Bootstrap JS -->
<script src=\"Back/assets/js/bootstrap.bundle.min.js\"></script>
<!--plugins-->
<script src=\"Back/assets/js/jquery.min.js\"></script>
<script src=\"Back/assets/plugins/input-tags/js/tagsinput.js\"></script>

<script src=\"Back/assets/plugins/simplebar/js/simplebar.min.js\"></script>
<script src=\"Back/assets/plugins/metismenu/js/metisMenu.min.js\"></script>
<script src=\"Back/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js\"></script>
<script src=\"Back/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js\"></script>
<script>
    \$(document).ready(function () {
        \$('#image-uploadify').imageuploadify();
    })
</script>
<!--app JS-->
<script src=\"Back/assets/js/app.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/recette/ajoutRecette.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--favicon-->
    <link rel=\"icon\" href=\"Back/assets/images/icon.png\" type=\"image/png\" />
    <!--plugins-->
    <link href=\"Back/assets/plugins/simplebar/css/simplebar.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/input-tags/css/tagsinput.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css\" rel=\"stylesheet\" />
    <link href=\"Back/assets/plugins/metismenu/css/metisMenu.min.css\" rel=\"stylesheet\" />
    <!-- loader-->
    <link href=\"Back/assets/css/pace.min.css\" rel=\"stylesheet\" />
    <script src=\"Back/assets/js/pace.min.js\"></script>
    <!-- Bootstrap CSS -->
    <link href=\"Back/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"Back/assets/css/app.css\" rel=\"stylesheet\">
    <link href=\"Back/assets/css/icons.css\" rel=\"stylesheet\">

    <title>Foodine | Ajouter Recette</title>
</head>

<body class=\"bg-theme bg-theme6\">
<!--wrapper-->
<div class=\"wrapper\">
    <!--start header -->
    <header>
        <div class=\"topbar d-flex align-items-center\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"topbar-logo-header\">
                    <div class=\"\">
                        <a href=\"IndexChef.html\" ><img src=\"Back/assets/images/logo-white.png\" class=\"logo-icon\" alt=\"logo icon\"></a>
                    </div>
                    <div class=\"\">
                        <!--<h4 class=\"logo-text\">Foodine</h4>-->
                    </div>
                </div>
                <div class=\"mobile-toggle-menu\"><i class='bx bx-menu'></i></div>
                <div class=\"search-bar flex-grow-1\">

                </div>
                <div class=\"top-menu ms-auto\">
                    <ul class=\"navbar-nav align-items-center\">
                        <li class=\"nav-item mobile-search-icon\">
                            <a class=\"nav-link\" href=\"#\">\t<i class='bx bx-search'></i>
                            </a>
                        </li>

                        <li class=\"nav-item dropdown dropdown-large\">

                            <div class=\"dropdown-menu dropdown-menu-end\">

                                <div class=\"header-notifications-list\">
                                </div>

                            </div>
                        </li>
                        <li class=\"nav-item dropdown dropdown-large\">

                            <div class=\"dropdown-menu dropdown-menu-end\">

                                <div class=\"header-message-list\">
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"user-box dropdown\">
                    <a class=\"d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"Back/assets/images/avatars/ines.jpg\" class=\"user-img\" alt=\"user avatar\">
                        <div class=\"user-info ps-3\">
                            <p class=\"user-name mb-0\">Ines </p>
                            <p class=\"designattion mb-0\">Chef</p>
                        </div>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\">

                        <li><a class=\"dropdown-item\" href=\"ConnexionChef.html\"><i class='bx bx-log-out-circle'></i><span>Déconnexion</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <!--navigation-->
    <div class=\"nav-container\">
        <div class=\"mobile-topbar-header\">
            <div>
                <!--\t<img src=\"Back/assets/images/logoo.png\" class=\"logo-icon\" alt=\"logo icon\"> -->
            </div>
            <div>
                <a href=\"indexChef.html\">\t<h4 class=\"logo-text\">Foodine</h4></a>
            </div>
            <div class=\"toggle-icon ms-auto\"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <nav class=\"topbar-nav\">
            <ul class=\"metismenu\" id=\"menu\">
                <li>
                    <a href=\"/ajouterplanning\" class=\"\">
                        <div class=\"parent-icon\"><i class='bx bx-calendar'></i>
                        </div>
                        <div class=\"menu-title\">Planning</div>
                    </a>


                <li>
                    <a href=\"admin-recette\" class=\"\">
                        <div class=\"parent-icon\"><i class=\"bx bx-receipt\"></i>
                        </div>
                        <div class=\"menu-title\">Recettes</div>
                    </a>

                </li>

            </ul>
        </nav>
    </div>
    <!--end navigation-->
    <!--start page wrapper -->
    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\">Ajouter Recette</div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-receipt\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">
                    <h5 class=\"card-title\">Ajouter Recette</h5>
                    <hr/>
                    <div class=\"form-body mt-4\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"border border-3 p-4 rounded\">

                                    <div class=\"mb-3\">
                                        <label for=\"inputProductDescription\" class=\"form-label\">Image de la recette</label>
                                        <input id=\"image-uploadify\" type=\"file\" accept=\".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf\" multiple>
                                    </div>



                                </div>




                            </div>




                            <div class=\"col-lg-4\">
                                <div class=\"border border-3 p-4 rounded\">
                                    <div class=\"row g-3\">


                                        <div class=\"col-12\">
                                            <label for=\"inputProductType\" class=\"form-label\">Nom De la recette</label>
                                            <input type=\"text\" class=\"form-control\" id=\"inputProductTags\" placeholder=\"Nom recette\">
                                        </div>
                                        <div class=\"col-12\">
                                            <label for=\"inputVendor\" class=\"form-label\">Nom de du planning</label>
                                            <select class=\"form-select\" id=\"inputVendor\">
                                                <option></option>
                                                <option value=\"1\">One</option>
                                                <option value=\"2\">Two</option>
                                                <option value=\"3\">Three</option>
                                            </select>
                                        </div>

                                        <div class=\"card-body\">
                                            <form>

                                                <div class=\"mb-3\">
                                                    <label class=\"form-label\">Ingrédients</label>
                                                    <select multiple data-role=\"tagsinput\">
                                                        <option value=\"Amsterdam\">Ingredient1</option>
                                                        <option value=\"Washington\">Ingredient2</option>
                                                        <option value=\"Sydney\">Ingredient3</option>
                                                        <option value=\"Beijing\">Beijing</option>
                                                        <option value=\"Cairo\">Cairo</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"inputProductTags\" class=\"form-label\">Description</label>
                                            <input type=\"text\" class=\"form-control\" id=\"inputProductTags\" placeholder=\"Enter Product Tags\">
                                        </div>
                                        <div class=\"col-12\">
                                            <div class=\"d-grid\">
                                                <button type=\"button\" class=\"btn btn-light\">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class=\"overlay toggle-icon\"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href=\"javaScript:;\" class=\"back-to-top\"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class=\"page-footer\">
        <p class=\"mb-0\">Copyright © 2021. All right reserved.</p>
    </footer>
</div>
<!--end wrapper-->
<!--start switcher-->
<div class=\"switcher-wrapper\">
    <div class=\"switcher-btn\"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class=\"switcher-body\">
        <div class=\"d-flex align-items-center\">
            <h5 class=\"mb-0 text-uppercase\">Theme Customizer</h5>
            <button type=\"button\" class=\"btn-close ms-auto close-switcher\" aria-label=\"Close\"></button>
        </div>
        <hr/>
        <p class=\"mb-0\">Gaussian Texture</p>
        <hr>

        <ul class=\"switcher\">
            <li id=\"theme1\"></li>
            <li id=\"theme2\"></li>
            <li id=\"theme3\"></li>
            <li id=\"theme4\"></li>
            <li id=\"theme5\"></li>
            <li id=\"theme6\"></li>
        </ul>
        <hr>
        <p class=\"mb-0\">Gradient Background</p>
        <hr>

        <ul class=\"switcher\">
            <li id=\"theme7\"></li>
            <li id=\"theme8\"></li>
            <li id=\"theme9\"></li>
            <li id=\"theme10\"></li>
            <li id=\"theme11\"></li>
            <li id=\"theme12\"></li>
            <li id=\"theme13\"></li>
            <li id=\"theme14\"></li>
            <li id=\"theme15\"></li>
        </ul>
    </div>
</div>
<!--end switcher-->
<!-- Bootstrap JS -->
<script src=\"Back/assets/js/bootstrap.bundle.min.js\"></script>
<!--plugins-->
<script src=\"Back/assets/js/jquery.min.js\"></script>
<script src=\"Back/assets/plugins/input-tags/js/tagsinput.js\"></script>

<script src=\"Back/assets/plugins/simplebar/js/simplebar.min.js\"></script>
<script src=\"Back/assets/plugins/metismenu/js/metisMenu.min.js\"></script>
<script src=\"Back/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js\"></script>
<script src=\"Back/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js\"></script>
<script>
    \$(document).ready(function () {
        \$('#image-uploadify').imageuploadify();
    })
</script>
<!--app JS-->
<script src=\"Back/assets/js/app.js\"></script>
</body>

</html>", "back/recette/ajoutRecette.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\recette\\ajoutRecette.html.twig");
    }
}
