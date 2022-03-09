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

/* back/homeBack.html.twig */
class __TwigTemplate_8d75248d11394aec6f1ff3de7d9f50f67d5bdea14e695e372008c5fb4b84281d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/homeBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/homeBack.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/homeBack.html.twig", 1);
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
        echo "    Dashboard
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
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("chart", (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 6, $this->source); })()));
        echo "

    <!--start page wrapper -->
    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <div class=\"row row-cols-1 row-cols-lg-2 row-cols-xl-4\">
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Commandes Totales</p>
                                    <h5 class=\"mb-0 text-white\">867</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-cart font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart1\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Revenu Total</p>
                                    <h5 class=\"mb-0 text-white\">\$52,945</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-wallet font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart2\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Nombre Clients Total</p>
                                    <h5 class=\"mb-0 text-white\">24.5K</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-group font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart3\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Feed-Backs</p>
                                    <h5 class=\"mb-0 text-white\">869</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-chat font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart4\"></div>
                    </div>
                </div>
            </div><!--end row-->

            <div class=\"row\">
                <div class=\"col-12 col-xl-8 d-flex\">
                    <div class=\"card radius-10 w-100\">
                        <div class=\"card-body\">
";
        // line 80
        echo "                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-xl-4 d-flex\">
                    <div class=\"card radius-10 w-100\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <h5 class=\"mb-1\">Objectif de ventes</h5>
                                </div>
                                <div class=\"font-22 ms-auto\"><i class=\"bx bx-dots-horizontal-rounded\"></i>
                                </div>
                            </div>
                            <div class=\"mt-4\" id=\"chart6\"></div>
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <h2 class=\"mb-0\">2248</h2>
                                    <p class=\"mb-0\">/2,800 target</p>
                                </div>
                                <div class=\"ms-auto d-flex align-items-center border radius-10 px-2\">
                                    <i class='bx bxs-checkbox font-22 me-1 text-white'></i><span>Ventes marketing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->




            <div class=\"row\">
                <div class=\"col-12 col-lg-6 col-xl-4 d-flex\">
                    <div class=\"card radius-10 overflow-hidden w-100\">
                        <div class=\"card-body\">
                            <p>Gain total</p>
                            <h4 class=\"mb-0\">287,493\$</h4>
                            <small>1.4% <i class=\"zmdi zmdi-long-arrow-up\"></i> Depuis le mois dernier</small>
                            <hr>
                            <p>Ventes totales</p>
                            <h4 class=\"mb-0\">87,493</h4>
                            <small>5.43% <i class=\"zmdi zmdi-long-arrow-up\"></i> Depuis le mois dernier</small>
                            <div class=\"mt-5\">
                                <div class=\"chart-container-4\">
                                    <canvas id=\"chart5\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6 col-xl-8 d-flex\">
                    <div class=\"card radius-10 w-100\">
                        <div class=\"card-header border-bottom\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <h6 class=\"mb-0\">Feed-Back des clients</h6>
                                </div>
                                <div class=\"font-22 ms-auto text-white\"><i class=\"bx bx-dots-horizontal-rounded\"></i>
                                </div>
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"Back/assets/images/avatars/avatar-1.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">iPhone X <small class=\"ms-4\">08.34 AM</small></h6>
                                        <p class=\"mb-0 small-font\">Sara Jhon : This is svery Nice phone in low budget.</p>
                                    </div>
                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                </div>
                            </li>
                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"Back/assets/images/avatars/avatar-2.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">Air Pod <small class=\"ml-4\">05.26 PM</small></h6>
                                        <p class=\"mb-0 small-font\">Danish Josh : The brand apple is original !</p>
                                    </div>
                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                </div>
                            </li>
                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"Back/assets/images/avatars/avatar-3.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">Mackbook Pro <small class=\"ml-4\">06.45 AM</small></h6>
                                        <p class=\"mb-0 small-font\">Jhon Doe : Excllent product and awsome quality</p>
                                    </div>
                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                </div>
                            </li>
                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"Back/assets/images/avatars/avatar-4.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">Air Pod <small class=\"ml-4\">08.34 AM</small></h6>
                                        <p class=\"mb-0 small-font\">Christine : The brand apple is original !</p>
                                    </div>
                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                </div>
                            </li>
                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"Back/assets/images/avatars/avatar-5.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">Mackbook <small class=\"ml-4\">08.34 AM</small></h6>
                                        <p class=\"mb-0 small-font\">Michle : The brand apple is original !</p>
                                    </div>
                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        <div class=\"row\">
            <div class=\"col-12 col-xl-4 d-flex\">
                <div class=\"card radius-10 w-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <h5 class=\"mb-0\">Nouveaux Clients</h5>
                            </div>
                            <div class=\"font-22 ms-auto\"><i class='bx bx-dots-horizontal-rounded'></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"customers-list p-3 mb-3\">
                        <div class=\"customers-list-item d-flex align-items-center border-top border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-1.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Emy Jackson</h6>
                                <p class=\"mb-0 font-13\">emy_jac@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-2.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Martin Hughes</h6>
                                <p class=\"mb-0 font-13\">martin.hug@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-3.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Laura Madison</h6>
                                <p class=\"mb-0 font-13\">laura_01@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-4.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Shoan Stephen</h6>
                                <p class=\"mb-0 font-13\">s.stephen@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-5.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Keate Medona</h6>
                                <p class=\"mb-0 font-13\">Keate@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-6.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Paul Benn</h6>
                                <p class=\"mb-0 font-13\">pauly.b@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-7.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Winslet Maya</h6>
                                <p class=\"mb-0 font-13\">winslet_02@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-8.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Bruno Bernard</h6>
                                <p class=\"mb-0 font-13\">bruno.b@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-9.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Merlyn Dona</h6>
                                <p class=\"mb-0 font-13\">merlyn.d@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-10.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Alister Campel</h6>
                                <p class=\"mb-0 font-13\">alister_42@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-xl-4 d-flex\">
                <div class=\"card radius-10 w-100 overflow-hidden\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <h5 class=\"mb-0\">Métriques du restaurant</h5>
                            </div>
                            <div class=\"font-22 ms-auto\"><i class='bx bx-dots-horizontal-rounded'></i>
                            </div>
                        </div>
                    </div>

                    <div class=\"store-metrics p-3 mb-3\">

                        <div class=\"card mt-3 radius-10 bg-transparent border shadow-none\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <p class=\"mb-0\">Produits totaux</p>
                                        <h4 class=\"mb-0\">856</h4>
                                    </div>
                                    <div class=\"widgets-icons ms-auto\"><i class='bx bxs-shopping-bag'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card radius-10 border bg-transparent  shadow-none\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <p class=\"mb-0\">Cliens totaux</p>
                                        <h4 class=\"mb-0\">45,241</h4>
                                    </div>
                                    <div class=\"widgets-icons ms-auto\"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card radius-10 border bg-transparent  shadow-none\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <p class=\"mb-0\">Categories totales</p>
                                        <h4 class=\"mb-0\">98</h4>
                                    </div>
                                    <div class=\"widgets-icons ms-auto\"><i class='bx bxs-category'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card radius-10 border bg-transparent  shadow-none\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <p class=\"mb-0\">Commandes totales</p>
                                        <h4 class=\"mb-0\">124</h4>
                                    </div>
                                    <div class=\"widgets-icons ms-auto\"><i class='bx bxs-cart-add'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card radius-10 border bg-transparent  shadow-none mb-0\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <p class=\"mb-0\">Employés totaux</p>
                                        <h4 class=\"mb-0\">55</h4>
                                    </div>
                                    <div class=\"widgets-icons ms-auto\"><i class='bx bxs-user-account'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-12 col-xl-4 d-flex\">
                <div class=\"card radius-10 w-100 \">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <h5 class=\"mb-1\">Meilleurs produits</h5>
                            </div>
                            <div class=\"font-22 ms-auto\"><i class=\"bx bx-dots-horizontal-rounded\"></i>
                            </div>
                        </div>
                    </div>

                    <div class=\"product-list-2 p-3 mb-3\">

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/01.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Black Boost Chair</h6>
                                <p class=\"mb-0\">148 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$246.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/03.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Red Single Sofa</h6>
                                <p class=\"mb-0\">122 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$328.14</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/04.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Pink Rounded Sofa</h6>
                                <p class=\"mb-0\">105 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$124.35</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/05.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Brown Single Table</h6>
                                <p class=\"mb-0\">201 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$158.34</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/06.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Grey Long Chair</h6>
                                <p class=\"mb-0\">146 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">158.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/07.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Beautiful Sofa</h6>
                                <p class=\"mb-0\">210 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$520.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/08.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Grey Stand Table</h6>
                                <p class=\"mb-0\">115 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$345.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/09.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Brown Single Table</h6>
                                <p class=\"mb-0\">116 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$126.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/10.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Four Leg Chair</h6>
                                <p class=\"mb-0\">154 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$425.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/11.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Blue Light T-Shirt</h6>
                                <p class=\"mb-0\">186 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$149.34</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--end row-->


        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card radius-10\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <h5 class=\"mb-1\">Dernières commandes</h5>
                            </div>
                            <div class=\"ms-auto\">
                                <a href=\"javscript:;\" class=\"btn btn-light btn-sm radius-30\">Voir toutes les commandes</a>
                            </div>
                        </div>

                        <div class=\"table-responsive mt-3\">
                            <table class=\"table align-middle mb-0\">
                                <thead class=\"table-light\">
                                <tr>


                                    <th>Date</th>
                                    <th>Etat</th>
                                    <th>Somme</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">
                                            <a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Cancelled</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Pending</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Pending</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Cancelled</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--end row-->

    </div>
    </div>
    <!--end page wrapper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/homeBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 80,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}
    Dashboard
{% endblock %}
{% block content %}
    {{ render_chart(chart) }}

    <!--start page wrapper -->
    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <div class=\"row row-cols-1 row-cols-lg-2 row-cols-xl-4\">
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Commandes Totales</p>
                                    <h5 class=\"mb-0 text-white\">867</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-cart font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart1\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Revenu Total</p>
                                    <h5 class=\"mb-0 text-white\">\$52,945</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-wallet font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart2\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Nombre Clients Total</p>
                                    <h5 class=\"mb-0 text-white\">24.5K</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-group font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart3\"></div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card radius-10 overflow-hidden\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <p class=\"mb-0\">Feed-Backs</p>
                                    <h5 class=\"mb-0 text-white\">869</h5>
                                </div>
                                <div class=\"ms-auto text-white\">\t<i class='bx bx-chat font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class=\"\" id=\"chart4\"></div>
                    </div>
                </div>
            </div><!--end row-->

            <div class=\"row\">
                <div class=\"col-12 col-xl-8 d-flex\">
                    <div class=\"card radius-10 w-100\">
                        <div class=\"card-body\">
{#                            <div class=\"\" id=\"chart5\"></div>#}
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-xl-4 d-flex\">
                    <div class=\"card radius-10 w-100\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <h5 class=\"mb-1\">Objectif de ventes</h5>
                                </div>
                                <div class=\"font-22 ms-auto\"><i class=\"bx bx-dots-horizontal-rounded\"></i>
                                </div>
                            </div>
                            <div class=\"mt-4\" id=\"chart6\"></div>
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <h2 class=\"mb-0\">2248</h2>
                                    <p class=\"mb-0\">/2,800 target</p>
                                </div>
                                <div class=\"ms-auto d-flex align-items-center border radius-10 px-2\">
                                    <i class='bx bxs-checkbox font-22 me-1 text-white'></i><span>Ventes marketing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->




            <div class=\"row\">
                <div class=\"col-12 col-lg-6 col-xl-4 d-flex\">
                    <div class=\"card radius-10 overflow-hidden w-100\">
                        <div class=\"card-body\">
                            <p>Gain total</p>
                            <h4 class=\"mb-0\">287,493\$</h4>
                            <small>1.4% <i class=\"zmdi zmdi-long-arrow-up\"></i> Depuis le mois dernier</small>
                            <hr>
                            <p>Ventes totales</p>
                            <h4 class=\"mb-0\">87,493</h4>
                            <small>5.43% <i class=\"zmdi zmdi-long-arrow-up\"></i> Depuis le mois dernier</small>
                            <div class=\"mt-5\">
                                <div class=\"chart-container-4\">
                                    <canvas id=\"chart5\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6 col-xl-8 d-flex\">
                    <div class=\"card radius-10 w-100\">
                        <div class=\"card-header border-bottom\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <h6 class=\"mb-0\">Feed-Back des clients</h6>
                                </div>
                                <div class=\"font-22 ms-auto text-white\"><i class=\"bx bx-dots-horizontal-rounded\"></i>
                                </div>
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"Back/assets/images/avatars/avatar-1.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">iPhone X <small class=\"ms-4\">08.34 AM</small></h6>
                                        <p class=\"mb-0 small-font\">Sara Jhon : This is svery Nice phone in low budget.</p>
                                    </div>
                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                </div>
                            </li>
                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"Back/assets/images/avatars/avatar-2.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">Air Pod <small class=\"ml-4\">05.26 PM</small></h6>
                                        <p class=\"mb-0 small-font\">Danish Josh : The brand apple is original !</p>
                                    </div>
                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                </div>
                            </li>
                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"Back/assets/images/avatars/avatar-3.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">Mackbook Pro <small class=\"ml-4\">06.45 AM</small></h6>
                                        <p class=\"mb-0 small-font\">Jhon Doe : Excllent product and awsome quality</p>
                                    </div>
                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                </div>
                            </li>
                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"Back/assets/images/avatars/avatar-4.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">Air Pod <small class=\"ml-4\">08.34 AM</small></h6>
                                        <p class=\"mb-0 small-font\">Christine : The brand apple is original !</p>
                                    </div>
                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                </div>
                            </li>
                            <li class=\"list-group-item bg-transparent\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"Back/assets/images/avatars/avatar-5.png\" alt=\"user avatar\" class=\"rounded-circle\" width=\"55\" height=\"55\">
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\">Mackbook <small class=\"ml-4\">08.34 AM</small></h6>
                                        <p class=\"mb-0 small-font\">Michle : The brand apple is original !</p>
                                    </div>
                                    <div class=\"ms-auto star\">
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-white'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                        <i class='bx bxs-star text-light-4'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        <div class=\"row\">
            <div class=\"col-12 col-xl-4 d-flex\">
                <div class=\"card radius-10 w-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <h5 class=\"mb-0\">Nouveaux Clients</h5>
                            </div>
                            <div class=\"font-22 ms-auto\"><i class='bx bx-dots-horizontal-rounded'></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"customers-list p-3 mb-3\">
                        <div class=\"customers-list-item d-flex align-items-center border-top border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-1.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Emy Jackson</h6>
                                <p class=\"mb-0 font-13\">emy_jac@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-2.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Martin Hughes</h6>
                                <p class=\"mb-0 font-13\">martin.hug@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-3.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Laura Madison</h6>
                                <p class=\"mb-0 font-13\">laura_01@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-4.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Shoan Stephen</h6>
                                <p class=\"mb-0 font-13\">s.stephen@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-5.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Keate Medona</h6>
                                <p class=\"mb-0 font-13\">Keate@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-6.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Paul Benn</h6>
                                <p class=\"mb-0 font-13\">pauly.b@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-7.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Winslet Maya</h6>
                                <p class=\"mb-0 font-13\">winslet_02@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-8.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Bruno Bernard</h6>
                                <p class=\"mb-0 font-13\">bruno.b@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-9.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Merlyn Dona</h6>
                                <p class=\"mb-0 font-13\">merlyn.d@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class=\"customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer\">
                            <div class=\"\">
                                <img src=\"Back/assets/images/avatars/avatar-10.png\" class=\"rounded-circle\" width=\"46\" height=\"46\" alt=\"\" />
                            </div>
                            <div class=\"ms-2\">
                                <h6 class=\"mb-1 font-14\">Alister Campel</h6>
                                <p class=\"mb-0 font-13\">alister_42@xyz.com</p>
                            </div>
                            <div class=\"list-inline d-flex customers-contacts ms-auto\">\t<a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-envelope'></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bxs-trash' ></i></a>
                                <a href=\"javascript:;\" class=\"list-inline-item\"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-xl-4 d-flex\">
                <div class=\"card radius-10 w-100 overflow-hidden\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <h5 class=\"mb-0\">Métriques du restaurant</h5>
                            </div>
                            <div class=\"font-22 ms-auto\"><i class='bx bx-dots-horizontal-rounded'></i>
                            </div>
                        </div>
                    </div>

                    <div class=\"store-metrics p-3 mb-3\">

                        <div class=\"card mt-3 radius-10 bg-transparent border shadow-none\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <p class=\"mb-0\">Produits totaux</p>
                                        <h4 class=\"mb-0\">856</h4>
                                    </div>
                                    <div class=\"widgets-icons ms-auto\"><i class='bx bxs-shopping-bag'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card radius-10 border bg-transparent  shadow-none\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <p class=\"mb-0\">Cliens totaux</p>
                                        <h4 class=\"mb-0\">45,241</h4>
                                    </div>
                                    <div class=\"widgets-icons ms-auto\"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card radius-10 border bg-transparent  shadow-none\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <p class=\"mb-0\">Categories totales</p>
                                        <h4 class=\"mb-0\">98</h4>
                                    </div>
                                    <div class=\"widgets-icons ms-auto\"><i class='bx bxs-category'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card radius-10 border bg-transparent  shadow-none\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <p class=\"mb-0\">Commandes totales</p>
                                        <h4 class=\"mb-0\">124</h4>
                                    </div>
                                    <div class=\"widgets-icons ms-auto\"><i class='bx bxs-cart-add'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card radius-10 border bg-transparent  shadow-none mb-0\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <p class=\"mb-0\">Employés totaux</p>
                                        <h4 class=\"mb-0\">55</h4>
                                    </div>
                                    <div class=\"widgets-icons ms-auto\"><i class='bx bxs-user-account'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-12 col-xl-4 d-flex\">
                <div class=\"card radius-10 w-100 \">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <h5 class=\"mb-1\">Meilleurs produits</h5>
                            </div>
                            <div class=\"font-22 ms-auto\"><i class=\"bx bx-dots-horizontal-rounded\"></i>
                            </div>
                        </div>
                    </div>

                    <div class=\"product-list-2 p-3 mb-3\">

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/01.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Black Boost Chair</h6>
                                <p class=\"mb-0\">148 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$246.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/03.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Red Single Sofa</h6>
                                <p class=\"mb-0\">122 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$328.14</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/04.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Pink Rounded Sofa</h6>
                                <p class=\"mb-0\">105 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$124.35</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/05.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Brown Single Table</h6>
                                <p class=\"mb-0\">201 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$158.34</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/06.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Grey Long Chair</h6>
                                <p class=\"mb-0\">146 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">158.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/07.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Beautiful Sofa</h6>
                                <p class=\"mb-0\">210 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$520.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/08.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Grey Stand Table</h6>
                                <p class=\"mb-0\">115 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$345.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/09.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Brown Single Table</h6>
                                <p class=\"mb-0\">116 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$126.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/10.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Four Leg Chair</h6>
                                <p class=\"mb-0\">154 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$425.24</h6>
                            </div>
                        </div>

                        <div class=\"d-flex align-items-center py-3 border-bottom cursor-pointer\">
                            <div class=\"product-img-2 me-2\">
                                <img src=\"Back/assets/images/products/11.png\" alt=\"product img\">
                            </div>
                            <div class=\"\">
                                <h6 class=\"mb-0 font-14\">Blue Light T-Shirt</h6>
                                <p class=\"mb-0\">186 Sales</p>
                            </div>
                            <div class=\"ms-auto\">
                                <h6 class=\"mb-0\">\$149.34</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--end row-->


        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card radius-10\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <h5 class=\"mb-1\">Dernières commandes</h5>
                            </div>
                            <div class=\"ms-auto\">
                                <a href=\"javscript:;\" class=\"btn btn-light btn-sm radius-30\">Voir toutes les commandes</a>
                            </div>
                        </div>

                        <div class=\"table-responsive mt-3\">
                            <table class=\"table align-middle mb-0\">
                                <thead class=\"table-light\">
                                <tr>


                                    <th>Date</th>
                                    <th>Etat</th>
                                    <th>Somme</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">
                                            <a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Cancelled</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Pending</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Completed</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Pending</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td>22 Jun, 2020</td>
                                    <td class=\"\"><span class=\"badge bg-light text-white w-100\">Cancelled</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class=\"d-flex order-actions\">\t<a href=\"javascript:;\" class=\"text-white bg-light border-0\"><i class='bx bxs-trash'></i></a>
                                            <a href=\"javascript:;\" class=\"ms-4 text-white bg-light border-0\"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--end row-->

    </div>
    </div>
    <!--end page wrapper -->
{% endblock %}
", "back/homeBack.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\back\\homeBack.html.twig");
    }
}
