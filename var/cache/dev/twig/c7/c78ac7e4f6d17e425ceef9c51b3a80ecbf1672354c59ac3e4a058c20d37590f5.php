<?php

/* ILBankBundle::report.html.twig */
class __TwigTemplate_cb4b8a17c50fed045da8fe2947ccc50ad95be992322c2da37004ae1795755c3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ILBankBundle::layout.html.twig", "ILBankBundle::report.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle::report.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle::report.html.twig"));

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

        echo " Report Manager ";
        
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
            <a href=\"#\">Report Manager</a>
        </li>
        <li class=\"breadcrumb-item active\">Report Manager</li>
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
                            <strong>Report Manager</strong>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"company\">Type de rapport</label>
                                        <select class=\"form-control\">
                                            <option value=\"\">Settlement/EOD File Exception Report</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"company\">Nom de l'operateur</label>
                                        <select class=\"form-control\">
                                            <option value=\"\">Orange ML</option>
                                            <option value=\"\">Malitel</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Type de transaction</label>

                                        <select class=\"form-control\">
                                            <option value=\"\"></option>
                                            <option value=\"\">Orange ML</option>
                                            <option value=\"\">Malitel</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Numero de la carte</label>
                                        <input type=\"text\" class=\"form-control\" id=\"ccnumber\" placeholder=\"0000 0000 0000 0000\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Start date</label>
                                        <input type=\"text\" class=\"form-control\" id=\"ccnumber\" placeholder=\"XX-XX-XXXX\">
                                    </div>


                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"name\">Numero de compte</label>
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"name\">Statut de linkage</label>
                                        <select class=\"form-control\">
                                            <option value=\"\"></option>
                                            <option value=\"\">Linked</option>
                                            <option value=\"\">Delinked</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"name\">Reference flexcube</label>
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">End date</label>
                                        <input type=\"text\" class=\"form-control\" id=\"ccnumber\" placeholder=\"XX-XX-XXXX\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                                    <i class=\"fa fa-search\"></i> Rechercher</button>
                            </div>
                            <div class=\"row\"> &nbsp;</div>

                            <div class=\"row\">
                                <table class=\"table table-responsive table-striped\">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>OPERATOR_CODE</th>
                                        <th>REQUEST_TYPE</th>
                                        <th>REQUEST_DATE</th>
                                        <th>ACCOUNT_ALIAS</th>
                                        <th>ACCOUNT_NO</th>
                                        <th>MOBILE NO</th>
                                        <th>REQUEST_ID</th>
                                        <th>AMOUNT</th>
                                        <th>RESPONSE_CODE</th>
                                        <th>RESPONSE_MESSAGE</th>
                                        <th>STATUS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Orange Money</td>
                                        <td>C2W</td>
                                        <td>XX-XX-XXXX</td>
                                        <td>XXXXXX</td>
                                        <td>XXXXXXXXX</td>
                                        <td>75317475</td>
                                        <td>OR1503200WMDRHI</td>
                                        <td>5000</td>
                                        <td>null</td>
                                        <td>null</td>
                                        <td>RECORDN</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mobicah</td>
                                        <td>C2W</td>
                                        <td>XX-XX-XXXX</td>
                                        <td>XXXXXX</td>
                                        <td>XXXXXXXXX</td>
                                        <td>75317475</td>
                                        <td>OR1503200WMDRHI</td>
                                        <td>5000</td>
                                        <td>null</td>
                                        <td>null</td>
                                        <td>RECORDN</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mobicah</td>
                                        <td>C2W</td>
                                        <td>XX-XX-XXXX</td>
                                        <td>XXXXXX</td>
                                        <td>XXXXXXXXX</td>
                                        <td>75317475</td>
                                        <td>OR1503200WMDRHI</td>
                                        <td>5000</td>
                                        <td>null</td>
                                        <td>null</td>
                                        <td>RECORDN</td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
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
        return "ILBankBundle::report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  100 => 27,  83 => 19,  69 => 7,  60 => 6,  42 => 3,  11 => 1,);
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

{% block title %} Report Manager {% endblock %}


{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">Accueil</li>
        <li class=\"breadcrumb-item\">
            <a href=\"#\">Report Manager</a>
        </li>
        <li class=\"breadcrumb-item active\">Report Manager</li>
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
                            <strong>Report Manager</strong>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"company\">Type de rapport</label>
                                        <select class=\"form-control\">
                                            <option value=\"\">Settlement/EOD File Exception Report</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"company\">Nom de l'operateur</label>
                                        <select class=\"form-control\">
                                            <option value=\"\">Orange ML</option>
                                            <option value=\"\">Malitel</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Type de transaction</label>

                                        <select class=\"form-control\">
                                            <option value=\"\"></option>
                                            <option value=\"\">Orange ML</option>
                                            <option value=\"\">Malitel</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Numero de la carte</label>
                                        <input type=\"text\" class=\"form-control\" id=\"ccnumber\" placeholder=\"0000 0000 0000 0000\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Start date</label>
                                        <input type=\"text\" class=\"form-control\" id=\"ccnumber\" placeholder=\"XX-XX-XXXX\">
                                    </div>


                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"name\">Numero de compte</label>
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"name\">Statut de linkage</label>
                                        <select class=\"form-control\">
                                            <option value=\"\"></option>
                                            <option value=\"\">Linked</option>
                                            <option value=\"\">Delinked</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"name\">Reference flexcube</label>
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">End date</label>
                                        <input type=\"text\" class=\"form-control\" id=\"ccnumber\" placeholder=\"XX-XX-XXXX\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                                    <i class=\"fa fa-search\"></i> Rechercher</button>
                            </div>
                            <div class=\"row\"> &nbsp;</div>

                            <div class=\"row\">
                                <table class=\"table table-responsive table-striped\">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>OPERATOR_CODE</th>
                                        <th>REQUEST_TYPE</th>
                                        <th>REQUEST_DATE</th>
                                        <th>ACCOUNT_ALIAS</th>
                                        <th>ACCOUNT_NO</th>
                                        <th>MOBILE NO</th>
                                        <th>REQUEST_ID</th>
                                        <th>AMOUNT</th>
                                        <th>RESPONSE_CODE</th>
                                        <th>RESPONSE_MESSAGE</th>
                                        <th>STATUS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Orange Money</td>
                                        <td>C2W</td>
                                        <td>XX-XX-XXXX</td>
                                        <td>XXXXXX</td>
                                        <td>XXXXXXXXX</td>
                                        <td>75317475</td>
                                        <td>OR1503200WMDRHI</td>
                                        <td>5000</td>
                                        <td>null</td>
                                        <td>null</td>
                                        <td>RECORDN</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mobicah</td>
                                        <td>C2W</td>
                                        <td>XX-XX-XXXX</td>
                                        <td>XXXXXX</td>
                                        <td>XXXXXXXXX</td>
                                        <td>75317475</td>
                                        <td>OR1503200WMDRHI</td>
                                        <td>5000</td>
                                        <td>null</td>
                                        <td>null</td>
                                        <td>RECORDN</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mobicah</td>
                                        <td>C2W</td>
                                        <td>XX-XX-XXXX</td>
                                        <td>XXXXXX</td>
                                        <td>XXXXXXXXX</td>
                                        <td>75317475</td>
                                        <td>OR1503200WMDRHI</td>
                                        <td>5000</td>
                                        <td>null</td>
                                        <td>null</td>
                                        <td>RECORDN</td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "ILBankBundle::report.html.twig", "/var/www/html/ILafia/src/IL/BankBundle/Resources/views/report.html.twig");
    }
}
