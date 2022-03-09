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

/* front/Review/show.html.twig */
class __TwigTemplate_6cf2263645cd9c0e5cfa104e9ca01e71ddde1ce65ca775f44c6478896ce6c368 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/Review/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/Review/show.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/Review/show.html.twig", 1);
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
        echo "    Review
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
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <div class=\"container\">
        <h1 class=\"mt-5 mb-5\">Feedbacks des Clients</h1>
        <div class=\"card\">
            <div class=\"card-header\"></div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-sm-4 text-center\">
                        <h1 class=\"text-warning mt-4 mb-4\">
                            <b><span id=\"average_rating\">0.0</span> / 5</b>
                        </h1>
                        <div class=\"mb-3\">
                            <i class=\"fas fa-star star-light mr-1 main_star\"></i>
                            <i class=\"fas fa-star star-light mr-1 main_star\"></i>
                            <i class=\"fas fa-star star-light mr-1 main_star\"></i>
                            <i class=\"fas fa-star star-light mr-1 main_star\"></i>
                            <i class=\"fas fa-star star-light mr-1 main_star\"></i>
                        </div>
                        <h3><span id=\"total_review\">0</span> FeedBack</h3>
                    </div>
                    <div class=\"col-sm-4\">
                        <p>
                        <div class=\"progress-label-left\"><b>5</b> <i class=\"fas fa-star text-warning\"></i></div>

                        <div class=\"progress-label-right\">(<span id=\"total_five_star_review\">0</span>)</div>
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" id=\"five_star_progress\"></div>
                        </div>
                        </p>
                        <p>
                        <div class=\"progress-label-left\"><b>4</b> <i class=\"fas fa-star text-warning\"></i></div>

                        <div class=\"progress-label-right\">(<span id=\"total_four_star_review\">0</span>)</div>
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" id=\"four_star_progress\"></div>
                        </div>
                        </p>
                        <p>
                        <div class=\"progress-label-left\"><b>3</b> <i class=\"fas fa-star text-warning\"></i></div>

                        <div class=\"progress-label-right\">(<span id=\"total_three_star_review\">0</span>)</div>
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" id=\"three_star_progress\"></div>
                        </div>
                        </p>
                        <p>
                        <div class=\"progress-label-left\"><b>2</b> <i class=\"fas fa-star text-warning\"></i></div>

                        <div class=\"progress-label-right\">(<span id=\"total_two_star_review\">0</span>)</div>
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" id=\"two_star_progress\"></div>
                        </div>
                        </p>
                        <p>
                        <div class=\"progress-label-left\"><b>1</b> <i class=\"fas fa-star text-warning\"></i></div>

                        <div class=\"progress-label-right\">(<span id=\"total_one_star_review\">0</span>)</div>
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" id=\"one_star_progress\"></div>
                        </div>
                        </p>
                    </div>
                    <div class=\"col-sm-4 text-center\">
                        <h3 class=\"mt-4 mb-3\">Poster un Feedback ici</h3>
                        <button type=\"button\" name=\"add_review\" id=\"add_review\" class=\"btn btn-primary\">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"mt-5\" id=\"review_content\"></div>
    </div>
    </body>
    </html>

    <div id=\"review_modal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Poster  Feedback</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <h4 class=\"text-center mt-2 mb-4\">
                        <i class=\"fas fa-star star-light submit_star mr-1\" id=\"submit_star_1\" data-rating=\"1\"></i>
                        <i class=\"fas fa-star star-light submit_star mr-1\" id=\"submit_star_2\" data-rating=\"2\"></i>
                        <i class=\"fas fa-star star-light submit_star mr-1\" id=\"submit_star_3\" data-rating=\"3\"></i>
                        <i class=\"fas fa-star star-light submit_star mr-1\" id=\"submit_star_4\" data-rating=\"4\"></i>
                        <i class=\"fas fa-star star-light submit_star mr-1\" id=\"submit_star_5\" data-rating=\"5\"></i>
                    </h4>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"user_name\" id=\"user_name\" class=\"form-control\" placeholder=\"Entrez votre nom\" />
                    </div>
                    <div class=\"form-group\">
                        <textarea name=\"user_review\" id=\"user_review\" class=\"form-control\" placeholder=\"Description\"></textarea>
                    </div>
                    <div class=\"form-group text-center mt-4\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"save_review\">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .progress-label-left
        {
            float: left;
            margin-right: 0.5em;
            line-height: 1em;
        }
        .progress-label-right
        {
            float: right;
            margin-left: 0.3em;
            line-height: 1em;
        }
        .star-light
        {
            color:#e9ecef;
        }
    </style>

    <script>

        \$(document).ready(function(){

            var rating_data = 0;

            \$('#add_review').click(function(){

                \$('#review_modal').modal('show');

            });

            \$(document).on('mouseenter', '.submit_star', function(){

                var rating = \$(this).data('rating');

                reset_background();

                for(var count = 1; count <= rating; count++)
                {

                    \$('#submit_star_'+count).addClass('text-warning');

                }

            });

            function reset_background()
            {
                for(var count = 1; count <= 5; count++)
                {

                    \$('#submit_star_'+count).addClass('star-light');

                    \$('#submit_star_'+count).removeClass('text-warning');

                }
            }

            \$(document).on('mouseleave', '.submit_star', function(){

                reset_background();

                for(var count = 1; count <= rating_data; count++)
                {

                    \$('#submit_star_'+count).removeClass('star-light');

                    \$('#submit_star_'+count).addClass('text-warning');
                }

            });

            \$(document).on('click', '.submit_star', function(){

                rating_data = \$(this).data('rating');

            });

            \$('#save_review').click(function(){

                var user_name = \$('#user_name').val();

                var user_review = \$('#user_review').val();

                if(user_name == '' || user_review == '')
                {
                    alert(\"Please Fill Both Field\");
                    return false;
                }
                else
                {
                    \$.ajax({
                        url:\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addReview");
        echo "\",
                        method:\"POST\",
                        data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                        success:function(data)
                        {
                            \$('#review_modal').modal('hide');

                            load_rating_data();

                            //alert(data);
                        }
                    })
                }

            });

            load_rating_data();

            function load_rating_data()
            {
                \$.ajax({
                    url:\"";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calculer");
        echo "\",
                    method:\"POST\",
                    data:{action:'load_data'},
                    dataType:\"JSON\",
                    success:function(data)
                    {
                        \$('#average_rating').text(data.average_rating);
                        \$('#total_review').text(data.total_review);

                        var count_star = 0;

                        \$('.main_star').each(function(){
                            count_star++;
                            if(Math.ceil(data.average_rating) >= count_star)
                            {
                                \$(this).addClass('text-warning');
                                \$(this).addClass('star-light');
                            }
                        });

                        \$('#total_five_star_review').text(data.five_star_review);

                        \$('#total_four_star_review').text(data.four_star_review);

                        \$('#total_three_star_review').text(data.three_star_review);

                        \$('#total_two_star_review').text(data.two_star_review);

                        \$('#total_one_star_review').text(data.one_star_review);

                        \$('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                        \$('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                        \$('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                        \$('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                        \$('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                        if(data.review_data.length > 0)
                        {
                            var html = '';

                            for(var count = 0; count < data.review_data.length; count++)
                            {
                                html += '<div class=\"row mb-3\">';

                                html += '<div class=\"col-sm-1\"><div class=\"rounded-circle bg-danger text-white pt-2 pb-2\"><h3 class=\"text-center\">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                                html += '<div class=\"col-sm-11\">';

                                html += '<div class=\"card\">';

                                html += '<div class=\"card-header\"><b>'+data.review_data[count].user_name+'</b></div>';

                                html += '<div class=\"card-body\">';

                                for(var star = 1; star <= 5; star++)
                                {
                                    var class_name = '';

                                    if(data.review_data[count].rating >= star)
                                    {
                                        class_name = 'text-warning';
                                    }
                                    else
                                    {
                                        class_name = 'star-light';
                                    }

                                    html += '<i class=\"fas fa-star '+class_name+' mr-1\"></i>';
                                }

                                html += '<br />';

                                html += data.review_data[count].user_review;

                                html += '</div>';

                                html += '<div class=\"card-footer text-right\">On '+data.review_data[count].datetime+'</div>';

                                html += '</div>';

                                html += '</div>';

                                html += '</div>';
                            }

                            \$('#review_content').html(html);
                        }
                    }
                })
            }

        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/Review/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 228,  293 => 207,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block title %}
    Review
{% endblock %}
{% block content %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <div class=\"container\">
        <h1 class=\"mt-5 mb-5\">Feedbacks des Clients</h1>
        <div class=\"card\">
            <div class=\"card-header\"></div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-sm-4 text-center\">
                        <h1 class=\"text-warning mt-4 mb-4\">
                            <b><span id=\"average_rating\">0.0</span> / 5</b>
                        </h1>
                        <div class=\"mb-3\">
                            <i class=\"fas fa-star star-light mr-1 main_star\"></i>
                            <i class=\"fas fa-star star-light mr-1 main_star\"></i>
                            <i class=\"fas fa-star star-light mr-1 main_star\"></i>
                            <i class=\"fas fa-star star-light mr-1 main_star\"></i>
                            <i class=\"fas fa-star star-light mr-1 main_star\"></i>
                        </div>
                        <h3><span id=\"total_review\">0</span> FeedBack</h3>
                    </div>
                    <div class=\"col-sm-4\">
                        <p>
                        <div class=\"progress-label-left\"><b>5</b> <i class=\"fas fa-star text-warning\"></i></div>

                        <div class=\"progress-label-right\">(<span id=\"total_five_star_review\">0</span>)</div>
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" id=\"five_star_progress\"></div>
                        </div>
                        </p>
                        <p>
                        <div class=\"progress-label-left\"><b>4</b> <i class=\"fas fa-star text-warning\"></i></div>

                        <div class=\"progress-label-right\">(<span id=\"total_four_star_review\">0</span>)</div>
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" id=\"four_star_progress\"></div>
                        </div>
                        </p>
                        <p>
                        <div class=\"progress-label-left\"><b>3</b> <i class=\"fas fa-star text-warning\"></i></div>

                        <div class=\"progress-label-right\">(<span id=\"total_three_star_review\">0</span>)</div>
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" id=\"three_star_progress\"></div>
                        </div>
                        </p>
                        <p>
                        <div class=\"progress-label-left\"><b>2</b> <i class=\"fas fa-star text-warning\"></i></div>

                        <div class=\"progress-label-right\">(<span id=\"total_two_star_review\">0</span>)</div>
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" id=\"two_star_progress\"></div>
                        </div>
                        </p>
                        <p>
                        <div class=\"progress-label-left\"><b>1</b> <i class=\"fas fa-star text-warning\"></i></div>

                        <div class=\"progress-label-right\">(<span id=\"total_one_star_review\">0</span>)</div>
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" id=\"one_star_progress\"></div>
                        </div>
                        </p>
                    </div>
                    <div class=\"col-sm-4 text-center\">
                        <h3 class=\"mt-4 mb-3\">Poster un Feedback ici</h3>
                        <button type=\"button\" name=\"add_review\" id=\"add_review\" class=\"btn btn-primary\">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"mt-5\" id=\"review_content\"></div>
    </div>
    </body>
    </html>

    <div id=\"review_modal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Poster  Feedback</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <h4 class=\"text-center mt-2 mb-4\">
                        <i class=\"fas fa-star star-light submit_star mr-1\" id=\"submit_star_1\" data-rating=\"1\"></i>
                        <i class=\"fas fa-star star-light submit_star mr-1\" id=\"submit_star_2\" data-rating=\"2\"></i>
                        <i class=\"fas fa-star star-light submit_star mr-1\" id=\"submit_star_3\" data-rating=\"3\"></i>
                        <i class=\"fas fa-star star-light submit_star mr-1\" id=\"submit_star_4\" data-rating=\"4\"></i>
                        <i class=\"fas fa-star star-light submit_star mr-1\" id=\"submit_star_5\" data-rating=\"5\"></i>
                    </h4>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"user_name\" id=\"user_name\" class=\"form-control\" placeholder=\"Entrez votre nom\" />
                    </div>
                    <div class=\"form-group\">
                        <textarea name=\"user_review\" id=\"user_review\" class=\"form-control\" placeholder=\"Description\"></textarea>
                    </div>
                    <div class=\"form-group text-center mt-4\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"save_review\">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .progress-label-left
        {
            float: left;
            margin-right: 0.5em;
            line-height: 1em;
        }
        .progress-label-right
        {
            float: right;
            margin-left: 0.3em;
            line-height: 1em;
        }
        .star-light
        {
            color:#e9ecef;
        }
    </style>

    <script>

        \$(document).ready(function(){

            var rating_data = 0;

            \$('#add_review').click(function(){

                \$('#review_modal').modal('show');

            });

            \$(document).on('mouseenter', '.submit_star', function(){

                var rating = \$(this).data('rating');

                reset_background();

                for(var count = 1; count <= rating; count++)
                {

                    \$('#submit_star_'+count).addClass('text-warning');

                }

            });

            function reset_background()
            {
                for(var count = 1; count <= 5; count++)
                {

                    \$('#submit_star_'+count).addClass('star-light');

                    \$('#submit_star_'+count).removeClass('text-warning');

                }
            }

            \$(document).on('mouseleave', '.submit_star', function(){

                reset_background();

                for(var count = 1; count <= rating_data; count++)
                {

                    \$('#submit_star_'+count).removeClass('star-light');

                    \$('#submit_star_'+count).addClass('text-warning');
                }

            });

            \$(document).on('click', '.submit_star', function(){

                rating_data = \$(this).data('rating');

            });

            \$('#save_review').click(function(){

                var user_name = \$('#user_name').val();

                var user_review = \$('#user_review').val();

                if(user_name == '' || user_review == '')
                {
                    alert(\"Please Fill Both Field\");
                    return false;
                }
                else
                {
                    \$.ajax({
                        url:\"{{ path('addReview') }}\",
                        method:\"POST\",
                        data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                        success:function(data)
                        {
                            \$('#review_modal').modal('hide');

                            load_rating_data();

                            //alert(data);
                        }
                    })
                }

            });

            load_rating_data();

            function load_rating_data()
            {
                \$.ajax({
                    url:\"{{ path('calculer') }}\",
                    method:\"POST\",
                    data:{action:'load_data'},
                    dataType:\"JSON\",
                    success:function(data)
                    {
                        \$('#average_rating').text(data.average_rating);
                        \$('#total_review').text(data.total_review);

                        var count_star = 0;

                        \$('.main_star').each(function(){
                            count_star++;
                            if(Math.ceil(data.average_rating) >= count_star)
                            {
                                \$(this).addClass('text-warning');
                                \$(this).addClass('star-light');
                            }
                        });

                        \$('#total_five_star_review').text(data.five_star_review);

                        \$('#total_four_star_review').text(data.four_star_review);

                        \$('#total_three_star_review').text(data.three_star_review);

                        \$('#total_two_star_review').text(data.two_star_review);

                        \$('#total_one_star_review').text(data.one_star_review);

                        \$('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                        \$('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                        \$('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                        \$('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                        \$('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                        if(data.review_data.length > 0)
                        {
                            var html = '';

                            for(var count = 0; count < data.review_data.length; count++)
                            {
                                html += '<div class=\"row mb-3\">';

                                html += '<div class=\"col-sm-1\"><div class=\"rounded-circle bg-danger text-white pt-2 pb-2\"><h3 class=\"text-center\">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                                html += '<div class=\"col-sm-11\">';

                                html += '<div class=\"card\">';

                                html += '<div class=\"card-header\"><b>'+data.review_data[count].user_name+'</b></div>';

                                html += '<div class=\"card-body\">';

                                for(var star = 1; star <= 5; star++)
                                {
                                    var class_name = '';

                                    if(data.review_data[count].rating >= star)
                                    {
                                        class_name = 'text-warning';
                                    }
                                    else
                                    {
                                        class_name = 'star-light';
                                    }

                                    html += '<i class=\"fas fa-star '+class_name+' mr-1\"></i>';
                                }

                                html += '<br />';

                                html += data.review_data[count].user_review;

                                html += '</div>';

                                html += '<div class=\"card-footer text-right\">On '+data.review_data[count].datetime+'</div>';

                                html += '</div>';

                                html += '</div>';

                                html += '</div>';
                            }

                            \$('#review_content').html(html);
                        }
                    }
                })
            }

        });

    </script>
{% endblock %}", "front/Review/show.html.twig", "C:\\Users\\azizm\\Desktop\\SEM2\\PIDEV\\Foodine_PIDEV\\templates\\front\\Review\\show.html.twig");
    }
}
