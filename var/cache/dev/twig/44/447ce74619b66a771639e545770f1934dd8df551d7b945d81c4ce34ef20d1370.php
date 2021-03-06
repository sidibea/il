<?php

/* ILBankBundle::layout.html.twig */
class __TwigTemplate_f5b00d4edfdd7e72a32d4a81d5bbb597270ead3e1538ac655b2feb12f2eccdb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'message' => array($this, 'block_message'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <meta name=\"description\" content=\"CoreUI - Open Source Bootstrap Admin Template\">
    <meta name=\"author\" content=\"Łukasz Holeczek\">
    <meta name=\"keyword\" content=\"Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/normalize.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/themify-icons.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/flag-icon.min.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/cs-skin-elastic.css")), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-select.less")), "html", null, true);
        echo "\"> -->
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/morris.js/morris.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scss/style.css")), "html", null, true);
        echo "\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->
</head>
<body class=\"\">
<!-- Left Panel -->

<aside id=\"left-panel\" class=\"left-panel\">
    <nav class=\"navbar navbar-expand-sm navbar-default\">

        <div class=\"navbar-header\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"./\"><h2>ILAFIA</h2></a>
            <a class=\"navbar-brand hidden\" href=\"./\"><h3>ILAFIA</h3></a>
        </div>

        <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_homepage");
        echo "\"> <i class=\"menu-icon fa fa-dashboard\"></i>Tableau de Bord </a>
                </li>
                <h3 class=\"menu-title\">Souscriptions</h3><!-- /.menu-title -->
                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-laptop\"></i>Souscription Mobile</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_souscription_mobile_list");
        echo "\">Liste des souscriptions</a></li>
                        <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_souscription_mobile_resiliation_list");
        echo "\">Liste des resiliations</a></li>
                        <li><i class=\"fa fa-id-badge\"></i><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_souscription_mobile_new");
        echo "\">Nouvelle souscription</a></li>

                    </ul>
                </li>
                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-table\"></i>Souscription Banque</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i class=\"fa fa-table\"></i><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_souscription_banque_list");
        echo "\">Liste des souscriptions</a></li>
                        <li><i class=\"fa fa-table\"></i><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_souscription_banque_resiliation_list");
        echo "\">Liste des resiliations</a></li>
                        <li><i class=\"fa fa-table\"></i><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_souscription_banque_new");
        echo "\">Nouvelle souscription</a></li>
                    </ul>
                </li>


                <h3 class=\"menu-title\">Analytiques</h3><!-- /.menu-title -->
                <li class=\"active\">
                    <a href=\"index.html\"> <i class=\"menu-icon fa fa-star\"></i>Report Managers </a>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id=\"right-panel\" class=\"right-panel\">

    <!-- Header-->
    <header id=\"header\" class=\"header\">

        <div class=\"header-menu\">

            <div class=\"col-sm-7\">
                <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
                <div class=\"header-left\">


                    <div class=\"dropdown for-message\">

                        <div class=\"dropdown-menu\" aria-labelledby=\"message\">
                            <p class=\"red\">You have 4 Mails</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/1.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jonathan Smith</span>
                                    <span class=\"time float-right\">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/2.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jack Sanders</span>
                                    <span class=\"time float-right\">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/3.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Cheryl Wheeler</span>
                                    <span class=\"time float-right\">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-3\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/4.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Rachel Santos</span>
                                    <span class=\"time float-right\">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-5\">
                <div class=\"user-area dropdown float-right\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"user-avatar rounded-circle\" src=\"images/admin.jpg\" alt=\"User Avatar\">
                    </a>

                    <div class=\"user-menu dropdown-menu\">
                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>

                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>Notifications <span class=\"count\">13</span></a>

                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                    </div>
                </div>

                <div class=\"language-select dropdown\" id=\"language-select\">
                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        <i class=\"flag-icon flag-icon-us\"></i>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                        <div class=\"dropdown-item\">
                            <span class=\"flag-icon flag-icon-fr\"></span>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-es\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-it\"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    ";
        // line 176
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 177
        echo "
    <div class=\"content mt-3\">


            ";
        // line 181
        $this->displayBlock('message', $context, $blocks);
        // line 193
        echo "


        ";
        // line 196
        $this->displayBlock('content', $context, $blocks);
        // line 197
        echo "

    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendor/jquery-2.1.4.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/popper.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lib/chart-js/Chart.bundle.js")), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/widgets.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dashboard.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js")), "html", null, true);
        echo "\"></script>
</body>

</html>

";
        // line 218
        $this->displayBlock('scripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 176
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_message($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        // line 182
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 183
            echo "                    <div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\">
                        <span class=\"badge badge-pill badge-warning\">Felicitation</span>
                        ";
            // line 185
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo ".
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 196
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ILBankBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 218,  412 => 196,  402 => 192,  389 => 185,  385 => 183,  380 => 182,  371 => 181,  353 => 176,  335 => 10,  325 => 218,  317 => 213,  313 => 212,  309 => 211,  305 => 210,  301 => 209,  296 => 207,  292 => 206,  288 => 205,  284 => 204,  275 => 197,  273 => 196,  268 => 193,  266 => 181,  260 => 177,  258 => 176,  139 => 60,  135 => 59,  131 => 58,  121 => 51,  117 => 50,  113 => 49,  104 => 43,  78 => 20,  74 => 19,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <meta name=\"description\" content=\"CoreUI - Open Source Bootstrap Admin Template\">
    <meta name=\"author\" content=\"Łukasz Holeczek\">
    <meta name=\"keyword\" content=\"Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard\">
    <title>{% block title %} {% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/css/normalize.css')) }}\">
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/css/bootstrap.min.css')) }}\">
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/css/font-awesome.min.css')) }}\">
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/css/themify-icons.css')) }}\">
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/css/flag-icon.min.css')) }}\">
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/css/cs-skin-elastic.css')) }}\">
    <!-- <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/css/bootstrap-select.less')) }}\"> -->
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/morris.js/morris.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/scss/style.css')) }}\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->
</head>
<body class=\"\">
<!-- Left Panel -->

<aside id=\"left-panel\" class=\"left-panel\">
    <nav class=\"navbar navbar-expand-sm navbar-default\">

        <div class=\"navbar-header\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"./\"><h2>ILAFIA</h2></a>
            <a class=\"navbar-brand hidden\" href=\"./\"><h3>ILAFIA</h3></a>
        </div>

        <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <a href=\"{{ path('il_bank_homepage') }}\"> <i class=\"menu-icon fa fa-dashboard\"></i>Tableau de Bord </a>
                </li>
                <h3 class=\"menu-title\">Souscriptions</h3><!-- /.menu-title -->
                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-laptop\"></i>Souscription Mobile</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"{{ path('il_bank_souscription_mobile_list') }}\">Liste des souscriptions</a></li>
                        <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"{{ path('il_bank_souscription_mobile_resiliation_list') }}\">Liste des resiliations</a></li>
                        <li><i class=\"fa fa-id-badge\"></i><a href=\"{{ path('il_bank_souscription_mobile_new') }}\">Nouvelle souscription</a></li>

                    </ul>
                </li>
                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-table\"></i>Souscription Banque</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i class=\"fa fa-table\"></i><a href=\"{{ path('il_bank_souscription_banque_list') }}\">Liste des souscriptions</a></li>
                        <li><i class=\"fa fa-table\"></i><a href=\"{{ path('il_bank_souscription_banque_resiliation_list') }}\">Liste des resiliations</a></li>
                        <li><i class=\"fa fa-table\"></i><a href=\"{{ path('il_bank_souscription_banque_new') }}\">Nouvelle souscription</a></li>
                    </ul>
                </li>


                <h3 class=\"menu-title\">Analytiques</h3><!-- /.menu-title -->
                <li class=\"active\">
                    <a href=\"index.html\"> <i class=\"menu-icon fa fa-star\"></i>Report Managers </a>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id=\"right-panel\" class=\"right-panel\">

    <!-- Header-->
    <header id=\"header\" class=\"header\">

        <div class=\"header-menu\">

            <div class=\"col-sm-7\">
                <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
                <div class=\"header-left\">


                    <div class=\"dropdown for-message\">

                        <div class=\"dropdown-menu\" aria-labelledby=\"message\">
                            <p class=\"red\">You have 4 Mails</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/1.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jonathan Smith</span>
                                    <span class=\"time float-right\">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/2.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jack Sanders</span>
                                    <span class=\"time float-right\">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/3.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Cheryl Wheeler</span>
                                    <span class=\"time float-right\">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-3\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/4.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Rachel Santos</span>
                                    <span class=\"time float-right\">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-5\">
                <div class=\"user-area dropdown float-right\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"user-avatar rounded-circle\" src=\"images/admin.jpg\" alt=\"User Avatar\">
                    </a>

                    <div class=\"user-menu dropdown-menu\">
                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>

                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>Notifications <span class=\"count\">13</span></a>

                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                    </div>
                </div>

                <div class=\"language-select dropdown\" id=\"language-select\">
                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        <i class=\"flag-icon flag-icon-us\"></i>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                        <div class=\"dropdown-item\">
                            <span class=\"flag-icon flag-icon-fr\"></span>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-es\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-it\"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    {% block breadcrumb %} {% endblock %}

    <div class=\"content mt-3\">


            {% block message %}
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\">
                        <span class=\"badge badge-pill badge-warning\">Felicitation</span>
                        {{ flashMessage }}.
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                    </div>

                {% endfor %}
            {% endblock %}



        {% block content %} {% endblock %}


    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src=\"{{ absolute_url(asset('assets/js/vendor/jquery-2.1.4.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/js/popper.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/js/plugins.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/js/lib/chart-js/Chart.bundle.js')) }}\"></script>

<script src=\"{{ absolute_url(asset('assets/js/widgets.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/js/dashboard.js')) }}\"></script>
<script src=\"{{ asset('assets/raphael/raphael.min.js') }}\"></script>
<script src=\"{{ asset('assets/morris.js/morris.min.js') }}\"></script>
<script src=\"{{ absolute_url(asset('assets/js/main.js')) }}\"></script>
</body>

</html>

{% block scripts %} {% endblock %}", "ILBankBundle::layout.html.twig", "/Applications/MAMP/htdocs/il/src/IL/BankBundle/Resources/views/layout.html.twig");
    }
}
