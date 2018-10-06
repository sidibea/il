<?php

/* ILUserBundle:Security:login.html.twig */
class __TwigTemplate_f6f460784e8cdb267a0067c4f4cd098f724f1416e01f410c6b5d9944d5e3242f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILUserBundle:Security:login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILUserBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <meta name=\"description\" content=\"CoreUI - Open Source Bootstrap Admin Template\">
    <meta name=\"author\" content=\"Łukasz Holeczek\">
    <meta name=\"keyword\" content=\"Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard\">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/@coreui/icons/css/coreui-icons.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/flag-icon-css/css/flag-icon.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/font-awesome/css/font-awesome.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/simple-line-icons/css/simple-line-icons.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Main styles for this application-->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/css/style.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/vendors/pace-progress/css/pace.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body class=\"app flex-row align-items-center\">
<div class=\"container\">
    <form method=\"post\" action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" >
        <div class=\"row justify-content-center\">
            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/img/b.jpg")), "html", null, true);
        echo "\" />
            <div class=\"col-md-8\">
                <div class=\"card-group\">
                    <div class=\"card p-4\">
                        <div class=\"card-body\">
                            <h1>Identification</h1>
                            <p class=\"text-muted\">Connectez vous a votre compte</p>
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"icon-user\"></i>
                    </span>
                                </div>
                                <input type=\"text\" class=\"form-control\" name=\"_username\" placeholder=\"Nom d'utilisateur\">
                            </div>
                            <div class=\"input-group mb-4\">
                                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"icon-lock\"></i>
                    </span>
                                </div>
                                <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"_password\">
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <button type=\"submit\" class=\"btn btn-primary px-4\">Connexion</button>
                                </div>
                                <div class=\"col-6 text-right\">
                                    <button type=\"button\" class=\"btn btn-link px-0\">Mot de passe oublie?</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
<!-- Bootstrap and necessary plugins-->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/jquery/dist/jquery.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/popper.js/dist/umd/popper.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/pace-progress/pace.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/@coreui/coreui/dist/js/coreui.min.js")), "html", null, true);
        echo "\"></script>
<!-- Plugins and scripts required by this view-->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/chart.js/dist/Chart.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/js/main.js")), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ILUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 81,  151 => 80,  147 => 79,  142 => 77,  138 => 76,  134 => 75,  130 => 74,  126 => 73,  122 => 72,  79 => 32,  74 => 30,  67 => 26,  63 => 25,  58 => 23,  54 => 22,  50 => 21,  46 => 20,  25 => 1,);
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
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <meta name=\"description\" content=\"CoreUI - Open Source Bootstrap Admin Template\">
    <meta name=\"author\" content=\"Łukasz Holeczek\">
    <meta name=\"keyword\" content=\"Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard\">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/@coreui/icons/css/coreui-icons.min.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/flag-icon-css/css/flag-icon.min.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/font-awesome/css/font-awesome.min.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/simple-line-icons/css/simple-line-icons.css')) }}\" rel=\"stylesheet\">
    <!-- Main styles for this application-->
    <link href=\"{{ absolute_url(asset('assets/admin/css/style.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/vendors/pace-progress/css/pace.min.css')) }}\" rel=\"stylesheet\">
</head>
<body class=\"app flex-row align-items-center\">
<div class=\"container\">
    <form method=\"post\" action=\"{{ path('login_check') }}\" >
        <div class=\"row justify-content-center\">
            <img src=\"{{ absolute_url(asset('assets/admin/img/b.jpg')) }}\" />
            <div class=\"col-md-8\">
                <div class=\"card-group\">
                    <div class=\"card p-4\">
                        <div class=\"card-body\">
                            <h1>Identification</h1>
                            <p class=\"text-muted\">Connectez vous a votre compte</p>
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"icon-user\"></i>
                    </span>
                                </div>
                                <input type=\"text\" class=\"form-control\" name=\"_username\" placeholder=\"Nom d'utilisateur\">
                            </div>
                            <div class=\"input-group mb-4\">
                                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"icon-lock\"></i>
                    </span>
                                </div>
                                <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"_password\">
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <button type=\"submit\" class=\"btn btn-primary px-4\">Connexion</button>
                                </div>
                                <div class=\"col-6 text-right\">
                                    <button type=\"button\" class=\"btn btn-link px-0\">Mot de passe oublie?</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
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
</html>", "ILUserBundle:Security:login.html.twig", "/var/www/html/ILafia/src/IL/UserBundle/Resources/views/Security/login.html.twig");
    }
}
