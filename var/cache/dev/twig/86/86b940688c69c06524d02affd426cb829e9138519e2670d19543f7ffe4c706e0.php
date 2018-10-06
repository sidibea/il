<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_dbeb15dbbd82229a8ae4fb01d11628c30248c7a7172f1338ce06c114d07d3e49 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"container-fluid\">
    <div class=\"animated fadeIn\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong>Informations</strong>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <strong>Nom: </strong>
                            </div>
                            <div class=\"col-md-8\">
                                ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <strong>Prenom: </strong>
                            </div>
                            <div class=\"col-md-8\">
                                ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <strong>Nom d'utilisateur: </strong>
                            </div>
                            <div class=\"col-md-8\">
                                ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <strong>Email: </strong>
                            </div>
                            <div class=\"col-md-8\">
                                ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <strong>Agence: </strong>
                            </div>
                            <div class=\"col-md-8\">
                                ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "bank", array()), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 49,  75 => 41,  64 => 33,  53 => 25,  42 => 17,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"container-fluid\">
    <div class=\"animated fadeIn\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong>Informations</strong>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <strong>Nom: </strong>
                            </div>
                            <div class=\"col-md-8\">
                                {{ app.user.firstname }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <strong>Prenom: </strong>
                            </div>
                            <div class=\"col-md-8\">
                                {{ app.user.lastname }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <strong>Nom d'utilisateur: </strong>
                            </div>
                            <div class=\"col-md-8\">
                                {{ app.user.username }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <strong>Email: </strong>
                            </div>
                            <div class=\"col-md-8\">
                                {{ app.user.email }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <strong>Agence: </strong>
                            </div>
                            <div class=\"col-md-8\">
                                {{ app.user.bank }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

", "@FOSUser/Profile/show_content.html.twig", "/var/www/html/ILafia/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
