<?php

/* ILBankBundle::layout.html.twig */
class __TwigTemplate_50512cb687c0ad1c500bb3f4bf54c45462251531ac726d05de8b6f528558793b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
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
    <!-- Icons-->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/@coreui/icons/css/coreui-icons.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/flag-icon-css/css/flag-icon.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/font-awesome/css/font-awesome.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/simple-line-icons/css/simple-line-icons.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Main styles for this application-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/css/style.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/vendors/pace-progress/css/pace.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body class=\"app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show\">
<header class=\"app-header navbar\">
    <button class=\"navbar-toggler sidebar-toggler d-lg-none mr-auto\" type=\"button\" data-toggle=\"sidebar-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"#\">
        <img class=\"navbar-brand-full\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/images/logo.png")), "html", null, true);
        echo "\" width=\"89\" height=\"25\" alt=\"CMM Logo\">
        <img class=\"navbar-brand-minimized\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/images/logo.png")), "html", null, true);
        echo "\" width=\"30\" height=\"30\" alt=\"CMM Logo\">
    </a>
    <button class=\"navbar-toggler sidebar-toggler d-md-down-none\" type=\"button\" data-toggle=\"sidebar-lg-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <ul class=\"nav navbar-nav ml-auto\">


        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <img class=\"img-avatar\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/img/avatars/6.jpg")), "html", null, true);
        echo "\" alt=\"\">
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\">


                <div class=\"dropdown-header text-center\">
                    <strong>Reglages</strong>
                </div>
                <a class=\"dropdown-item\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">
                    <i class=\"fa fa-user\"></i> Voir Profile
                </a>
                <a class=\"dropdown-item\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">
                    <i class=\"fa fa-user\"></i> Modifier Profile
                </a>

                <div class=\"divider\"></div>

                <a class=\"dropdown-item\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                    <i class=\"fa fa-lock\"></i> Se deconnecter</a>
            </div>
        </li>
    </ul>
    <button class=\"navbar-toggler aside-menu-toggler d-md-down-none\" type=\"button\" data-toggle=\"aside-menu-lg-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <button class=\"navbar-toggler aside-menu-toggler d-lg-none\" type=\"button\" data-toggle=\"aside-menu-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
</header>
<div class=\"app-body\">
    <div class=\"sidebar\">
        <nav class=\"sidebar-nav\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_homepage");
        echo "\">
                        <i class=\"nav-icon icon-speedometer\"></i> Tableau de Bord
                    </a>
                </li>

                <li class=\"nav-title\">Souscription mobile</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_souscription_list");
        echo "\">
                        <i class=\"nav-icon icon-file\"></i> Liste de souscription</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_souscription");
        echo "\">
                        <i class=\"nav-icon icon-plus\"></i> Nouvelle Souscription</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">
                        <i class=\"nav-icon icon-remove\"></i> Resiliation</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">
                        <i class=\"nav-icon icon-pencil\"></i> Releve (3 mois)</a>
                </li>
                <li class=\"nav-title\">Souscription banque</li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_linkage_compte");
        echo "\">
                        <i class=\"nav-icon icon-pencil\"></i> Nouvelle souscription</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_souscription_list_banque");
        echo "\">
                        <i class=\"nav-icon icon-file\"></i> Liste de souscription </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">
                        <i class=\"nav-icon icon-remove\"></i> Resiliation</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">
                        <i class=\"nav-icon icon-pencil\"></i> Releve (3 mois)</a>
                </li>
                <li class=\"nav-title\">Report</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_report_manager");
        echo "\">
                        <i class=\"nav-icon icon-pencil\"></i> Report Manager</a>
                </li>





                <li class=\"nav-item mt-auto\">
                    <a class=\"nav-link nav-link-success\" href=\"https://coreui.io\" target=\"_top\">
                        <i class=\"nav-icon icon-cloud-download\"></i>Telecharger notre appli</a>
                </li>

            </ul>
        </nav>
        <button class=\"sidebar-minimizer brand-minimizer\" type=\"button\"></button>
    </div>
    <main class=\"main\">
        <!-- Breadcrumb-->
        ";
        // line 133
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 134
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 135
        echo "    </main>
</div>
<footer class=\"app-footer\">
    <div>
        <a href=\"https://coreui.io\">Credit Mobile Money</a>
        <span>&copy; 2018 Kema.</span>
    </div>
    <div class=\"ml-auto\">
        <span>Developpe par</span>
        <a href=\"https://coreui.io\">Sekou Assane Sidibe</a>
    </div>
</footer>
<!-- Bootstrap and necessary plugins-->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/jquery/dist/jquery.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/popper.js/dist/umd/popper.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/pace-progress/pace.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/@coreui/coreui/dist/js/coreui.min.js")), "html", null, true);
        echo "\"></script>
<!-- Plugins and scripts required by this view-->
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/chart.js/dist/Chart.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/js/main.js")), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
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

    // line 133
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

    // line 134
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
        return array (  321 => 134,  303 => 133,  285 => 10,  272 => 157,  268 => 156,  264 => 155,  259 => 153,  255 => 152,  251 => 151,  247 => 150,  243 => 149,  239 => 148,  224 => 135,  221 => 134,  219 => 133,  197 => 114,  181 => 101,  174 => 97,  157 => 83,  150 => 79,  140 => 72,  120 => 55,  111 => 49,  105 => 46,  94 => 38,  80 => 27,  76 => 26,  65 => 18,  61 => 17,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  39 => 10,  28 => 1,);
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
    <!-- Icons-->
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/@coreui/icons/css/coreui-icons.min.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/flag-icon-css/css/flag-icon.min.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/font-awesome/css/font-awesome.min.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/simple-line-icons/css/simple-line-icons.css')) }}\" rel=\"stylesheet\">
    <!-- Main styles for this application-->
    <link href=\"{{ absolute_url(asset('assets/admin/css/style.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/vendors/pace-progress/css/pace.min.css')) }}\" rel=\"stylesheet\">
</head>
<body class=\"app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show\">
<header class=\"app-header navbar\">
    <button class=\"navbar-toggler sidebar-toggler d-lg-none mr-auto\" type=\"button\" data-toggle=\"sidebar-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"#\">
        <img class=\"navbar-brand-full\" src=\"{{ absolute_url(asset('assets/main/images/logo.png')) }}\" width=\"89\" height=\"25\" alt=\"CMM Logo\">
        <img class=\"navbar-brand-minimized\" src=\"{{ absolute_url(asset('assets/main/images/logo.png')) }}\" width=\"30\" height=\"30\" alt=\"CMM Logo\">
    </a>
    <button class=\"navbar-toggler sidebar-toggler d-md-down-none\" type=\"button\" data-toggle=\"sidebar-lg-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <ul class=\"nav navbar-nav ml-auto\">


        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <img class=\"img-avatar\" src=\"{{ absolute_url(asset('assets/admin/img/avatars/6.jpg')) }}\" alt=\"\">
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\">


                <div class=\"dropdown-header text-center\">
                    <strong>Reglages</strong>
                </div>
                <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_show') }}\">
                    <i class=\"fa fa-user\"></i> Voir Profile
                </a>
                <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_edit') }}\">
                    <i class=\"fa fa-user\"></i> Modifier Profile
                </a>

                <div class=\"divider\"></div>

                <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\">
                    <i class=\"fa fa-lock\"></i> Se deconnecter</a>
            </div>
        </li>
    </ul>
    <button class=\"navbar-toggler aside-menu-toggler d-md-down-none\" type=\"button\" data-toggle=\"aside-menu-lg-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <button class=\"navbar-toggler aside-menu-toggler d-lg-none\" type=\"button\" data-toggle=\"aside-menu-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
</header>
<div class=\"app-body\">
    <div class=\"sidebar\">
        <nav class=\"sidebar-nav\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('il_bank_homepage') }}\">
                        <i class=\"nav-icon icon-speedometer\"></i> Tableau de Bord
                    </a>
                </li>

                <li class=\"nav-title\">Souscription mobile</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('il_bank_souscription_list') }}\">
                        <i class=\"nav-icon icon-file\"></i> Liste de souscription</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('il_bank_souscription') }}\">
                        <i class=\"nav-icon icon-plus\"></i> Nouvelle Souscription</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">
                        <i class=\"nav-icon icon-remove\"></i> Resiliation</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">
                        <i class=\"nav-icon icon-pencil\"></i> Releve (3 mois)</a>
                </li>
                <li class=\"nav-title\">Souscription banque</li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('il_bank_linkage_compte') }}\">
                        <i class=\"nav-icon icon-pencil\"></i> Nouvelle souscription</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('il_bank_souscription_list_banque') }}\">
                        <i class=\"nav-icon icon-file\"></i> Liste de souscription </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">
                        <i class=\"nav-icon icon-remove\"></i> Resiliation</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">
                        <i class=\"nav-icon icon-pencil\"></i> Releve (3 mois)</a>
                </li>
                <li class=\"nav-title\">Report</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('il_bank_report_manager') }}\">
                        <i class=\"nav-icon icon-pencil\"></i> Report Manager</a>
                </li>





                <li class=\"nav-item mt-auto\">
                    <a class=\"nav-link nav-link-success\" href=\"https://coreui.io\" target=\"_top\">
                        <i class=\"nav-icon icon-cloud-download\"></i>Telecharger notre appli</a>
                </li>

            </ul>
        </nav>
        <button class=\"sidebar-minimizer brand-minimizer\" type=\"button\"></button>
    </div>
    <main class=\"main\">
        <!-- Breadcrumb-->
        {% block breadcrumb %} {% endblock %}
        {% block content %} {% endblock %}
    </main>
</div>
<footer class=\"app-footer\">
    <div>
        <a href=\"https://coreui.io\">Credit Mobile Money</a>
        <span>&copy; 2018 Kema.</span>
    </div>
    <div class=\"ml-auto\">
        <span>Developpe par</span>
        <a href=\"https://coreui.io\">Sekou Assane Sidibe</a>
    </div>
</footer>
<!-- Bootstrap and necessary plugins-->
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/jquery/dist/jquery.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/popper.js/dist/umd/popper.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/pace-progress/pace.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/@coreui/coreui/dist/js/coreui.min.js')) }}\"></script>
<!-- Plugins and scripts required by this view-->
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/chart.js/dist/Chart.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/js/main.js')) }}\"></script>
</body>
</html>", "ILBankBundle::layout.html.twig", "/var/www/html/ILafia/src/IL/BankBundle/Resources/views/layout.html.twig");
    }
}
