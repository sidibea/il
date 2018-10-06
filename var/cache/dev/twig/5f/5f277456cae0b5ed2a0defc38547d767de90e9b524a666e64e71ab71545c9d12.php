<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_a284cb1605b0d3d96e21249ab4f7a9c1c5fd4fa59acbc1a339a4240a499d2cef extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
<div class=\"container-fluid\">
    <div class=\"animated fadeIn\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong>Modifier votre profile</strong>
                    </div>
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "

                    <div class=\"card-body\">
                        <div class=\"form-group\">
                            <label for=\"nom_carte\">Nom </label>
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nom_carte\">Prenom </label>
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nom_carte\">Adresse </label>
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nom_carte\">Nom d'utilisateur </label>
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nom_carte\">Mot de passe actuel </label>
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
                        </div>

                    </div>
                    <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-dot-circle-o\"></i> Enregistrer</button>
                        <button type=\"reset\" class=\"btn btn-sm btn-danger\">
                            <i class=\"fa fa-ban\"></i> Reset</button>
                    </div>
                    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

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
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 42,  72 => 32,  65 => 28,  58 => 24,  51 => 20,  44 => 16,  36 => 11,  25 => 2,);
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
                        <strong>Modifier votre profile</strong>
                    </div>
                    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}

                    <div class=\"card-body\">
                        <div class=\"form-group\">
                            <label for=\"nom_carte\">Nom </label>
                            {{ form_widget(form.firstname, {'attr': {'class': 'form-control ' }}) }}
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nom_carte\">Prenom </label>
                            {{ form_widget(form.lastname, {'attr': {'class': 'form-control ' }}) }}
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nom_carte\">Adresse </label>
                            {{ form_widget(form.email, {'attr': {'class': 'form-control ' }}) }}
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nom_carte\">Nom d'utilisateur </label>
                            {{ form_widget(form.username, {'attr': {'class': 'form-control ' }}) }}
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nom_carte\">Mot de passe actuel </label>
                            {{ form_widget(form.current_password, {'attr': {'class': 'form-control ' }}) }}
                        </div>

                    </div>
                    <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-dot-circle-o\"></i> Enregistrer</button>
                        <button type=\"reset\" class=\"btn btn-sm btn-danger\">
                            <i class=\"fa fa-ban\"></i> Reset</button>
                    </div>
                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>
</div>


", "@FOSUser/Profile/edit_content.html.twig", "/var/www/html/ILafia/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
