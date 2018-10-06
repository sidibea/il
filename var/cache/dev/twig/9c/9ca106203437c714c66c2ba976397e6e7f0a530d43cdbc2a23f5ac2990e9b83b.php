<?php

/* ILBankBundle:Homepage:index.html.twig */
class __TwigTemplate_8501375313ea50ecd86c1a8fccb3aa8e2b20d7a65f3859c8eebf592231d692af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ILBankBundle::layout.html.twig", "ILBankBundle:Homepage:index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle:Homepage:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle:Homepage:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container-fluid\">
        <div class=\"animated fadeIn\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-primary\">
                        <div class=\"card-body pb-0\">
                            <div class=\"btn-group float-right\">
                                <button type=\"button\" class=\"btn btn-transparent dropdown-toggle p-0\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"icon-settings\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"#\">Cette Semaine</a>
                                    <a class=\"dropdown-item\" href=\"#\">Ce mois</a>
                                    <a class=\"dropdown-item\" href=\"#\">Le mois dernier</a>
                                    <a class=\"dropdown-item\" href=\"#\">Cette annee</a>
                                </div>
                            </div>
                            <div class=\"text-value\">9.823</div>
                            <div>Nombre d'utilisateurs</div>
                        </div>
                        <div class=\"chart-wrapper mt-3 mx-3\" style=\"height:70px;\">
                            <canvas id=\"card-chart1\" class=\"chart\" height=\"70\"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-info\">
                        <div class=\"card-body pb-0\">
                            <button type=\"button\" class=\"btn btn-transparent p-0 float-right\">
                                <i class=\"icon-location-pin\"></i>
                            </button>
                            <div class=\"text-value\">9.823</div>
                            <div>Nombre de transactions</div>
                        </div>
                        <div class=\"chart-wrapper mt-3 mx-3\" style=\"height:70px;\">
                            <canvas id=\"card-chart2\" class=\"chart\" height=\"70\"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-success\">
                        <div class=\"card-body pb-0\">
                            <div class=\"btn-group float-right\">
                                <button type=\"button\" class=\"btn btn-transparent dropdown-toggle p-0\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"icon-settings\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"#\">Cette Semaine</a>
                                    <a class=\"dropdown-item\" href=\"#\">Ce mois</a>
                                    <a class=\"dropdown-item\" href=\"#\">Le mois dernier</a>
                                    <a class=\"dropdown-item\" href=\"#\">Cette annee</a>
                                </div>
                            </div>
                            <div class=\"text-value\">9.823</div>
                            <div>Nombre de transactions reussies</div>
                        </div>
                        <div class=\"chart-wrapper mt-3\" style=\"height:70px;\">
                            <canvas id=\"card-chart3\" class=\"chart\" height=\"70\"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-danger\">
                        <div class=\"card-body pb-0\">
                            <div class=\"btn-group float-right\">
                                <button type=\"button\" class=\"btn btn-transparent dropdown-toggle p-0\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"icon-settings\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"#\">Cette Semaine</a>
                                    <a class=\"dropdown-item\" href=\"#\">Ce mois</a>
                                    <a class=\"dropdown-item\" href=\"#\">Le mois dernier</a>
                                    <a class=\"dropdown-item\" href=\"#\">Cette annee</a>
                                </div>
                            </div>
                            <div class=\"text-value\">9.823</div>
                            <div>Nombre de transactions echouees</div>
                        </div>
                        <div class=\"chart-wrapper mt-3 mx-3\" style=\"height:70px;\">
                            <canvas id=\"card-chart4\" class=\"chart\" height=\"70\"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->

            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <h4 class=\"card-title mb-0\">Souscriptions</h4>
                            <div class=\"small text-muted\">";
        // line 99
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "M"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</div>
                        </div>
                        <!--/.col-->
                        <div class=\"col-sm-7 d-none d-md-block\">
                            <button type=\"button\" class=\"btn btn-primary float-right\">
                                <i class=\"icon-cloud-download\"></i>
                            </button>
                            <div class=\"btn-group btn-group-toggle float-right mr-3\" data-toggle=\"buttons\">
                                <label class=\"btn btn-outline-secondary\">
                                    <input type=\"radio\" name=\"options\" id=\"option1\" autocomplete=\"off\"> Jour
                                </label>
                                <label class=\"btn btn-outline-secondary active\">
                                    <input type=\"radio\" name=\"options\" id=\"option2\" autocomplete=\"off\" checked> Mois
                                </label>
                                <label class=\"btn btn-outline-secondary\">
                                    <input type=\"radio\" name=\"options\" id=\"option3\" autocomplete=\"off\"> Annee
                                </label>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                    <div class=\"chart-wrapper\" style=\"height:300px;margin-top:40px;\">
                        <canvas id=\"main-chart\" class=\"chart\" height=\"300\"></canvas>
                    </div>
                </div>
            </div>
            <!--/.card-->

        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ILBankBundle:Homepage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 99,  49 => 4,  40 => 3,  11 => 1,);
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

{% block content %}
    <div class=\"container-fluid\">
        <div class=\"animated fadeIn\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-primary\">
                        <div class=\"card-body pb-0\">
                            <div class=\"btn-group float-right\">
                                <button type=\"button\" class=\"btn btn-transparent dropdown-toggle p-0\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"icon-settings\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"#\">Cette Semaine</a>
                                    <a class=\"dropdown-item\" href=\"#\">Ce mois</a>
                                    <a class=\"dropdown-item\" href=\"#\">Le mois dernier</a>
                                    <a class=\"dropdown-item\" href=\"#\">Cette annee</a>
                                </div>
                            </div>
                            <div class=\"text-value\">9.823</div>
                            <div>Nombre d'utilisateurs</div>
                        </div>
                        <div class=\"chart-wrapper mt-3 mx-3\" style=\"height:70px;\">
                            <canvas id=\"card-chart1\" class=\"chart\" height=\"70\"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-info\">
                        <div class=\"card-body pb-0\">
                            <button type=\"button\" class=\"btn btn-transparent p-0 float-right\">
                                <i class=\"icon-location-pin\"></i>
                            </button>
                            <div class=\"text-value\">9.823</div>
                            <div>Nombre de transactions</div>
                        </div>
                        <div class=\"chart-wrapper mt-3 mx-3\" style=\"height:70px;\">
                            <canvas id=\"card-chart2\" class=\"chart\" height=\"70\"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-success\">
                        <div class=\"card-body pb-0\">
                            <div class=\"btn-group float-right\">
                                <button type=\"button\" class=\"btn btn-transparent dropdown-toggle p-0\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"icon-settings\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"#\">Cette Semaine</a>
                                    <a class=\"dropdown-item\" href=\"#\">Ce mois</a>
                                    <a class=\"dropdown-item\" href=\"#\">Le mois dernier</a>
                                    <a class=\"dropdown-item\" href=\"#\">Cette annee</a>
                                </div>
                            </div>
                            <div class=\"text-value\">9.823</div>
                            <div>Nombre de transactions reussies</div>
                        </div>
                        <div class=\"chart-wrapper mt-3\" style=\"height:70px;\">
                            <canvas id=\"card-chart3\" class=\"chart\" height=\"70\"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-danger\">
                        <div class=\"card-body pb-0\">
                            <div class=\"btn-group float-right\">
                                <button type=\"button\" class=\"btn btn-transparent dropdown-toggle p-0\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"icon-settings\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"#\">Cette Semaine</a>
                                    <a class=\"dropdown-item\" href=\"#\">Ce mois</a>
                                    <a class=\"dropdown-item\" href=\"#\">Le mois dernier</a>
                                    <a class=\"dropdown-item\" href=\"#\">Cette annee</a>
                                </div>
                            </div>
                            <div class=\"text-value\">9.823</div>
                            <div>Nombre de transactions echouees</div>
                        </div>
                        <div class=\"chart-wrapper mt-3 mx-3\" style=\"height:70px;\">
                            <canvas id=\"card-chart4\" class=\"chart\" height=\"70\"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->

            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <h4 class=\"card-title mb-0\">Souscriptions</h4>
                            <div class=\"small text-muted\">{{ \"now\" | date('M') }} {{ \"now\" | date('Y') }}</div>
                        </div>
                        <!--/.col-->
                        <div class=\"col-sm-7 d-none d-md-block\">
                            <button type=\"button\" class=\"btn btn-primary float-right\">
                                <i class=\"icon-cloud-download\"></i>
                            </button>
                            <div class=\"btn-group btn-group-toggle float-right mr-3\" data-toggle=\"buttons\">
                                <label class=\"btn btn-outline-secondary\">
                                    <input type=\"radio\" name=\"options\" id=\"option1\" autocomplete=\"off\"> Jour
                                </label>
                                <label class=\"btn btn-outline-secondary active\">
                                    <input type=\"radio\" name=\"options\" id=\"option2\" autocomplete=\"off\" checked> Mois
                                </label>
                                <label class=\"btn btn-outline-secondary\">
                                    <input type=\"radio\" name=\"options\" id=\"option3\" autocomplete=\"off\"> Annee
                                </label>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                    <div class=\"chart-wrapper\" style=\"height:300px;margin-top:40px;\">
                        <canvas id=\"main-chart\" class=\"chart\" height=\"300\"></canvas>
                    </div>
                </div>
            </div>
            <!--/.card-->

        </div>

    </div>

{% endblock %}", "ILBankBundle:Homepage:index.html.twig", "/var/www/html/ILafia/src/IL/BankBundle/Resources/views/Homepage/index.html.twig");
    }
}
