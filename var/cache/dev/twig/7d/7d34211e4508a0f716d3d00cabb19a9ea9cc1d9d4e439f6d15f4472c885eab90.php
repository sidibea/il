<?php

/* ILBankBundle:Souscription:list.html.twig */
class __TwigTemplate_01b58b2c2b90e04fa0fec8b6a898c3f1cb187e6f81f5196fa6b58f0feafd5f61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ILBankBundle::layout.html.twig", "ILBankBundle:Souscription:list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle:Souscription:list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle:Souscription:list.html.twig"));

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

        echo " Liste des souscriptions ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 7
        echo "    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">Accueil</li>
        <li class=\"breadcrumb-item\">
            <a href=\"#\">Souscription</a>
        </li>
        <li class=\"breadcrumb-item active\"> Liste des Souscriptions</li>
        <!-- Breadcrumb Menu-->
        <li class=\"breadcrumb-menu d-md-down-none\">
            <div class=\"btn-group\" role=\"group\" aria-label=\"Button group\">
                <a class=\"btn\" href=\"#\">
                    <i class=\"icon-speech\"></i>
                </a>
                <a class=\"btn\" href=\"";
        // line 19
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
        echo "    <div class=\"container-fluid\">
        <div class=\"animated fadeIn\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <strong>Liste des souscriptions <span style=\"font-size: 12px; font-weight: normal;\"> ";
        // line 34
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["souscriptions"] ?? $this->getContext($context, "souscriptions"))), "html", null, true);
        echo " souscriptions</span></strong>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-responsive-sm table-hover  mb-0\">
                                <thead class=\"thead-light\">
                                <tr>
                                    <th class=\"text-center\">
                                        No
                                    </th>
                                    <th class=\"text-center\">Code Affilié</th>
                                    <th> No de Compte</th>
                                    <th> No de telephone</th>
                                    <th> Nom du compte</th>
                                    <th> Opérateur Mobile</th>
                                    <th>Statut Carte</th>
                                    <th>Type Carte</th>
                                    <th> Link Status</th>
                                    <th> Agence de Linkage</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["souscriptions"] ?? $this->getContext($context, "souscriptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["souscription"]) {
            // line 58
            echo "                                    <tr>
                                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "id", array()), "html", null, true);
            echo "</td>
                                        <td><b>";
            // line 61
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["souscription"], "numCartePrepaye", array()), 0, 3), "html", null, true);
            echo "****";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["souscription"], "numCartePrepaye", array()), 10, 14), "html", null, true);
            echo "</b></td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "mobileNo", array()), "html", null, true);
            echo "</td>
                                        <td><i><b>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "nomCarte", array()), "html", null, true);
            echo "</b></i></td>
                                        <td><b>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "operateur", array()), "html", null, true);
            echo "</b></td>
                                        <td> ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "statutLiaison", array()), "html", null, true);
            echo "</td>
                                        <td> ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "statutLiaison", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "statutCarte", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "bank", array()), "html", null, true);
            echo "</td>
                                        <td>
                                                <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_souscription_edit", array("id" => $this->getAttribute($context["souscription"], "id", array()))), "html", null, true);
            echo "\" class=\"btn  btn-outline-primary\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("il_bank_souscription_resiliation", array("id" => $this->getAttribute($context["souscription"], "id", array()))), "html", null, true);
            echo "\" class=\"btn  btn-outline-danger\">Resilier</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ILBankBundle:Souscription:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 75,  197 => 71,  193 => 70,  188 => 68,  184 => 67,  180 => 66,  176 => 65,  172 => 64,  168 => 63,  164 => 62,  158 => 61,  154 => 60,  150 => 59,  147 => 58,  143 => 57,  117 => 34,  109 => 28,  100 => 27,  83 => 19,  69 => 7,  60 => 6,  42 => 3,  11 => 1,);
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

{% block title %} Liste des souscriptions {% endblock %}


{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">Accueil</li>
        <li class=\"breadcrumb-item\">
            <a href=\"#\">Souscription</a>
        </li>
        <li class=\"breadcrumb-item active\"> Liste des Souscriptions</li>
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
    <div class=\"container-fluid\">
        <div class=\"animated fadeIn\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <strong>Liste des souscriptions <span style=\"font-size: 12px; font-weight: normal;\"> {{ souscriptions |length }} souscriptions</span></strong>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-responsive-sm table-hover  mb-0\">
                                <thead class=\"thead-light\">
                                <tr>
                                    <th class=\"text-center\">
                                        No
                                    </th>
                                    <th class=\"text-center\">Code Affilié</th>
                                    <th> No de Compte</th>
                                    <th> No de telephone</th>
                                    <th> Nom du compte</th>
                                    <th> Opérateur Mobile</th>
                                    <th>Statut Carte</th>
                                    <th>Type Carte</th>
                                    <th> Link Status</th>
                                    <th> Agence de Linkage</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for souscription in souscriptions %}
                                    <tr>
                                        <td>{{ souscription.id }}</td>
                                        <td>{{ souscription.id }}</td>
                                        <td><b>{{ souscription.numCartePrepaye | slice(0, 3) }}****{{ souscription.numCartePrepaye | slice(10, 14) }}</b></td>
                                        <td>{{ souscription.mobileNo }}</td>
                                        <td><i><b>{{ souscription.nomCarte }}</b></i></td>
                                        <td><b>{{ souscription.operateur }}</b></td>
                                        <td> {{ souscription.statutLiaison }}</td>
                                        <td> {{ souscription.statutLiaison }}</td>
                                        <td>{{ souscription.statutCarte }}</td>
                                        <td>{{ app.user.bank }}</td>
                                        <td>
                                                <a href=\"{{ path('il_bank_souscription_edit', { 'id' : souscription.id }) }}\" class=\"btn  btn-outline-primary\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"{{ path('il_bank_souscription_resiliation', { 'id' : souscription.id }) }}\" class=\"btn  btn-outline-danger\">Resilier</a>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}", "ILBankBundle:Souscription:list.html.twig", "/var/www/html/ILafia/src/IL/BankBundle/Resources/views/Souscription/list.html.twig");
    }
}
