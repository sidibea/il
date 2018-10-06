<?php

/* ILBankBundle:Souscription:edit.html.twig */
class __TwigTemplate_f526f847586f03f24f179854d451d09dd10ccf66834a340c767f6f32b7cb006c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ILBankBundle::layout.html.twig", "ILBankBundle:Souscription:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ILBankBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle:Souscription:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle:Souscription:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Souscription ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 6
        echo "    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">Accueil</li>
        <li class=\"breadcrumb-item\">
            <a href=\"#\">Souscription</a>
        </li>
        <li class=\"breadcrumb-item active\"> Nouvelle Souscription</li>
        <!-- Breadcrumb Menu-->
        <li class=\"breadcrumb-menu d-md-down-none\">
            <div class=\"btn-group\" role=\"group\" aria-label=\"Button group\">
                <a class=\"btn\" href=\"#\">
                    <i class=\"icon-speech\"></i>
                </a>
                <a class=\"btn\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_homepage");
        echo "\">
                    <i class=\"icon-graph\"></i>  Tableau de bord
                </a>
            </div>
        </li>
    </ol>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 31
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"container-fluid\">
    <div class=\"animated fadeIn\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong>Fiche d'enregistrement de liaison de wallet</strong>
                        <small>Remplissez ce champ pour souscrire à ILAFIA</small>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-7\">
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Operateur Telecom</label>
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "operateur", array()), 'widget', array("attr" => array("class" => "form-control ", "disabled" => "disabled")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Numero de la carte prepaye</label>
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numCartePrepaye", array()), 'widget', array("attr" => array("class" => "form-control ", "disabled" => "disabled")));
        echo "
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <label for=\"nom_carte\">Mois</label>
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "placeholder" => "", "disabled" => "disabled")));
        echo "
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <label for=\"nom_carte\">Annee</label>
                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "placeholder" => "", "disabled" => "disabled")));
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Statut d'activation</label>

                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "statutCarte", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "placeholder" => "", "disabled" => "disabled")));
        echo "
                                </div>


                            </div>
                            <div class=\"col-md-5\">
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Numero Mobile</label>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobileNo", array()), 'widget', array("attr" => array("class" => "form-control ", "disabled" => "disabled", "id" => "nom_carte", "placeholder" => "")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Nom carte</label>
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomCarte", array()), 'widget', array("attr" => array("class" => "form-control ", "disabled" => "disabled", "id" => "nom_carte", "placeholder" => "")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Label de la carte</label>
                                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "labelCarte", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "placeholder" => "")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Alias du compte</label>
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "aliasAccount", array()), 'widget', array("attr" => array("class" => "form-control ", "disabled" => "disabled", "id" => "nom_carte", "placeholder" => "")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Raison</label>
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raison", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "placeholder" => "")));
        echo "
                                </div>

                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group\">
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "w2c", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "placeholder" => "")));
        echo " W2C
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class=\"form-group\">
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "c2w", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "placeholder" => "")));
        echo " C2W
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class=\"form-group\">
                                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "balanceInquery", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "placeholder" => "")));
        echo " Balance Inquery
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class=\"form-group\">
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "miniStatement", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "placeholder" => "")));
        echo " Mini statement
                            </div>
                        </div>
                    </div>

                    <div class=\"card-footer\">

                        <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-dot-circle-o\"></i> Enregistrer</button>
                        <button type=\"reset\" class=\"btn btn-sm btn-danger\">
                            <i class=\"fa fa-ban\"></i> Reset</button>
                    </div>

                </div>

            </div>
        </div>
    </div>

    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 127
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ILBankBundle:Souscription:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 127,  254 => 124,  232 => 105,  226 => 102,  220 => 99,  214 => 96,  204 => 89,  197 => 85,  190 => 81,  183 => 77,  176 => 73,  165 => 65,  156 => 59,  149 => 55,  141 => 50,  134 => 46,  115 => 31,  109 => 28,  100 => 27,  83 => 18,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ILBankBundle::layout.html.twig\" %}

{% block title %} Souscription {% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">Accueil</li>
        <li class=\"breadcrumb-item\">
            <a href=\"#\">Souscription</a>
        </li>
        <li class=\"breadcrumb-item active\"> Nouvelle Souscription</li>
        <!-- Breadcrumb Menu-->
        <li class=\"breadcrumb-menu d-md-down-none\">
            <div class=\"btn-group\" role=\"group\" aria-label=\"Button group\">
                <a class=\"btn\" href=\"#\">
                    <i class=\"icon-speech\"></i>
                </a>
                <a class=\"btn\" href=\"{{ path('il_bank_homepage') }}\">
                    <i class=\"icon-graph\"></i>  Tableau de bord
                </a>
            </div>
        </li>
    </ol>
{% endblock %}


{% block content %}
    {{ form_start(form) }}

    {# Les erreurs générales du formulaire. #}
    {{ form_errors(form) }}
<div class=\"container-fluid\">
    <div class=\"animated fadeIn\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong>Fiche d'enregistrement de liaison de wallet</strong>
                        <small>Remplissez ce champ pour souscrire à ILAFIA</small>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-7\">
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Operateur Telecom</label>
                                    {{ form_widget(form.operateur, {'attr': {'class': 'form-control ','disabled': 'disabled' }}) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Numero de la carte prepaye</label>
                                    {{ form_widget(form.numCartePrepaye, {'attr': {'class': 'form-control ',  'disabled': 'disabled' }}) }}
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <label for=\"nom_carte\">Mois</label>
                                        {{ form_widget(form.month, {'attr': {'class': 'form-control ', 'id': 'nom_carte', 'placeholder': '', 'disabled': 'disabled' }}) }}
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <label for=\"nom_carte\">Annee</label>
                                        {{ form_widget(form.year, {'attr': {'class': 'form-control ', 'id': 'nom_carte', 'placeholder': '', 'disabled': 'disabled' }}) }}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Statut d'activation</label>

                                    {{ form_widget(form.statutCarte, {'attr': {'class': 'form-control ', 'id': 'nom_carte', 'placeholder': '', 'disabled': 'disabled' }}) }}
                                </div>


                            </div>
                            <div class=\"col-md-5\">
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Numero Mobile</label>
                                    {{ form_widget(form.mobileNo, {'attr': {'class': 'form-control ', 'disabled': 'disabled', 'id': 'nom_carte', 'placeholder': '' }}) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Nom carte</label>
                                    {{ form_widget(form.nomCarte, {'attr': {'class': 'form-control ', 'disabled': 'disabled', 'id': 'nom_carte', 'placeholder': '' }}) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Label de la carte</label>
                                    {{ form_widget(form.labelCarte, {'attr': {'class': 'form-control ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Alias du compte</label>
                                    {{ form_widget(form.aliasAccount, {'attr': {'class': 'form-control ', 'disabled': 'disabled', 'id': 'nom_carte', 'placeholder': '' }}) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"nom_carte\">Raison</label>
                                    {{ form_widget(form.raison, {'attr': {'class': 'form-control ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                                </div>

                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group\">
                                {{ form_widget(form.w2c, {'attr': {'class': 'form-control ', 'id': 'nom_carte', 'placeholder': '' }}) }} W2C
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class=\"form-group\">
                                {{ form_widget(form.c2w, {'attr': {'class': 'form-control ', 'id': 'nom_carte', 'placeholder': '' }}) }} C2W
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class=\"form-group\">
                                {{ form_widget(form.balanceInquery, {'attr': {'class': 'form-control ', 'id': 'nom_carte', 'placeholder': '' }}) }} Balance Inquery
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class=\"form-group\">
                                {{ form_widget(form.miniStatement, {'attr': {'class': 'form-control ', 'id': 'nom_carte', 'placeholder': '' }}) }} Mini statement
                            </div>
                        </div>
                    </div>

                    <div class=\"card-footer\">

                        <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-dot-circle-o\"></i> Enregistrer</button>
                        <button type=\"reset\" class=\"btn btn-sm btn-danger\">
                            <i class=\"fa fa-ban\"></i> Reset</button>
                    </div>

                </div>

            </div>
        </div>
    </div>

    {{ form_rest(form) }}

    {# Fermeture de la balise <form> du formulaire HTML #}
    {{ form_end(form) }}


    {% endblock %}
", "ILBankBundle:Souscription:edit.html.twig", "/var/www/html/ILafia/src/IL/BankBundle/Resources/views/Souscription/edit.html.twig");
    }
}
