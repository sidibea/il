<?php

/* ILBankBundle::report.html.twig */
class __TwigTemplate_96ca8ff9e1c7b7f8f12cfbc72c637e2ab959e9a375eb2c2fcab35b916d2c519b extends Twig_Template
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
            'scripts' => array($this, 'block_scripts'),
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
                        <form method=\"get\">
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
                                        <select name=\"operateur\" class=\"form-control\">
                                            <option value=\"Orange ML\">Orange ML</option>
                                            <option value=\"Malitel\">Malitel</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Type de transaction</label>

                                        <select name=\"type_operation\" class=\"form-control\">
                                            <option value=\"\"></option>
                                            <option value=\"1\">Bank to wallet </option>
                                            <option value=\"2\">Wallet to bank</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Numero de la carte</label>
                                        <input type=\"text\" name=\"numero_carte\" class=\"form-control\" id=\"ccnumber\" maxlength=\"16\" onkeypress=\"return isNumberKey(event)\"  placeholder=\"0000 0000 0000 0000\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Start date</label>
                                        <input type=\"text\" name=\"start_date\" class=\"form-control\" id=\"ccnumber\" placeholder=\"XX-XX-XXXX\">
                                    </div>


                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"name\">Numero de compte</label>
                                        <input type=\"text\" name=\"numero_compte\" maxlength=\"16\" onkeypress=\"return isNumberKey(event)\" class=\"form-control\" id=\"name\" placeholder=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"name\">Statut de linkage</label>
                                        <select name=\"statut_linkage\" class=\"form-control\">
                                            <option value=\"\"></option>
                                            <option value=\"linked\">Linked</option>
                                            <option value=\"delinked\">Delinked</option>
                                            <option value=\"pending\">Pending</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"name\">Reference flexcube</label>
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">End date</label>
                                        <input type=\"text\" name=\"end_date\" class=\"form-control\" id=\"ccnumber\" placeholder=\"XX-XX-XXXX\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                                    <i class=\"fa fa-search\"></i> Rechercher</button>
                            </div>
                            <div class=\"row\"> &nbsp;</div>

                            ";
        // line 108
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "statut_linkage"), "method") != "")) {
            // line 109
            echo "                                <table class=\"table table-responsive-sm table-hover  mb-0\">
                                    <thead class=\"thead-light\">
                                    <tr>
                                        <th> No de Carte</th>
                                        <th> No de telephone</th>
                                        <th> Nom du detenteur</th>
                                        <th> Opérateur Mobile</th>
                                        <th>Statut de Liaison</th>
                                        <th>Type Carte</th>
                                        <th> Link Status</th>
                                        <th>Agence</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["souscriptions"] ?? $this->getContext($context, "souscriptions")));
            foreach ($context['_seq'] as $context["_key"] => $context["souscription"]) {
                // line 125
                echo "                                        <tr>
                                            <td><b>";
                // line 126
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["souscription"], "numeroCarte", array()), 0, 3), "html", null, true);
                echo "****";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["souscription"], "numeroCarte", array()), 10, 14), "html", null, true);
                echo "</b></td>
                                            <td>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "numeroMobile", array()), "html", null, true);
                echo "</td>
                                            <td><i><b>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "nomCarte", array()), "html", null, true);
                echo "</b></i></td>
                                            <td><b>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "operateur", array()), "html", null, true);
                echo "</b></td>
                                            <td> ";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "typeCarte", array()), "html", null, true);
                echo "</td>
                                            <td> ";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "statutLiaison", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscription"], "statutCarte", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "bank", array()), "html", null, true);
                echo "</td>

                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                                    </tbody>
                                </table>
                            ";
        } else {
            // line 140
            echo "                                <table class=\"table table-responsive table-striped\">
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
                                ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["souscriptions"] ?? $this->getContext($context, "souscriptions")));
            foreach ($context['_seq'] as $context["_key"] => $context["trans"]) {
                // line 159
                echo "                                    <tr>
                                        <td>1</td>
                                        <td>
                                            ";
                // line 162
                if (($this->getAttribute($context["trans"], "trans", array()) == "c2w")) {
                    // line 163
                    echo "                                                ";
                    if ((twig_slice($this->env, $this->getAttribute($context["trans"], "beneficiaire", array()), 0, 1) == 7)) {
                        // line 164
                        echo "                                                    Orange Money
                                                ";
                    } else {
                        // line 166
                        echo "                                                    Mobicash
                                                ";
                    }
                    // line 168
                    echo "                                            ";
                } else {
                    // line 169
                    echo "                                                ";
                    if ((twig_slice($this->env, $this->getAttribute($context["trans"], "source", array()), 0, 1) == 7)) {
                        // line 170
                        echo "                                                    Orange Money
                                                ";
                    } else {
                        // line 172
                        echo "                                                    Mobicash
                                                ";
                    }
                    // line 174
                    echo "
                                            ";
                }
                // line 176
                echo "                                        </td>
                                        <td>
                                            ";
                // line 178
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["trans"], "trans", array())), "html", null, true);
                echo "
                                        </td>
                                        <td>";
                // line 180
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["trans"], "created_at", array()), "d M Y H:i:s"), "html", null, true);
                echo "</td>
                                        <td>XXXXXX</td>
                                        <td>";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "source", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 183
                echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "beneficiaire", array()), "html", null, true);
                echo "</td>
                                        <td>OR1503200WMDRHI</td>
                                        <td>";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "montant", array()), "html", null, true);
                echo "</td>
                                        <td>null</td>
                                        <td>null</td>
                                        <td>RECORDN</td>

                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trans'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "

                                    </tbody>
                                    </table>
                            ";
        }
        // line 197
        echo "
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 208
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 209
        echo "<script>
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
    function isLetterKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)
            return true;
        return false;
    }
    </script>
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
        return array (  394 => 209,  385 => 208,  366 => 197,  359 => 192,  346 => 185,  341 => 183,  337 => 182,  332 => 180,  327 => 178,  323 => 176,  319 => 174,  315 => 172,  311 => 170,  308 => 169,  305 => 168,  301 => 166,  297 => 164,  294 => 163,  292 => 162,  287 => 159,  283 => 158,  263 => 140,  258 => 137,  248 => 133,  244 => 132,  240 => 131,  236 => 130,  232 => 129,  228 => 128,  224 => 127,  218 => 126,  215 => 125,  211 => 124,  194 => 109,  192 => 108,  110 => 28,  101 => 27,  84 => 19,  70 => 7,  61 => 6,  43 => 3,  11 => 1,);
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
                        <form method=\"get\">
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
                                        <select name=\"operateur\" class=\"form-control\">
                                            <option value=\"Orange ML\">Orange ML</option>
                                            <option value=\"Malitel\">Malitel</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Type de transaction</label>

                                        <select name=\"type_operation\" class=\"form-control\">
                                            <option value=\"\"></option>
                                            <option value=\"1\">Bank to wallet </option>
                                            <option value=\"2\">Wallet to bank</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Numero de la carte</label>
                                        <input type=\"text\" name=\"numero_carte\" class=\"form-control\" id=\"ccnumber\" maxlength=\"16\" onkeypress=\"return isNumberKey(event)\"  placeholder=\"0000 0000 0000 0000\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">Start date</label>
                                        <input type=\"text\" name=\"start_date\" class=\"form-control\" id=\"ccnumber\" placeholder=\"XX-XX-XXXX\">
                                    </div>


                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"name\">Numero de compte</label>
                                        <input type=\"text\" name=\"numero_compte\" maxlength=\"16\" onkeypress=\"return isNumberKey(event)\" class=\"form-control\" id=\"name\" placeholder=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"name\">Statut de linkage</label>
                                        <select name=\"statut_linkage\" class=\"form-control\">
                                            <option value=\"\"></option>
                                            <option value=\"linked\">Linked</option>
                                            <option value=\"delinked\">Delinked</option>
                                            <option value=\"pending\">Pending</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"name\">Reference flexcube</label>
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"company\">End date</label>
                                        <input type=\"text\" name=\"end_date\" class=\"form-control\" id=\"ccnumber\" placeholder=\"XX-XX-XXXX\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                                    <i class=\"fa fa-search\"></i> Rechercher</button>
                            </div>
                            <div class=\"row\"> &nbsp;</div>

                            {% if app.request.get('statut_linkage') != \"\" %}
                                <table class=\"table table-responsive-sm table-hover  mb-0\">
                                    <thead class=\"thead-light\">
                                    <tr>
                                        <th> No de Carte</th>
                                        <th> No de telephone</th>
                                        <th> Nom du detenteur</th>
                                        <th> Opérateur Mobile</th>
                                        <th>Statut de Liaison</th>
                                        <th>Type Carte</th>
                                        <th> Link Status</th>
                                        <th>Agence</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for souscription in souscriptions %}
                                        <tr>
                                            <td><b>{{ souscription.numeroCarte | slice(0, 3) }}****{{ souscription.numeroCarte | slice(10, 14) }}</b></td>
                                            <td>{{ souscription.numeroMobile }}</td>
                                            <td><i><b>{{ souscription.nomCarte }}</b></i></td>
                                            <td><b>{{ souscription.operateur }}</b></td>
                                            <td> {{ souscription.typeCarte }}</td>
                                            <td> {{ souscription.statutLiaison }}</td>
                                            <td>{{ souscription.statutCarte }}</td>
                                            <td>{{ app.user.bank }}</td>

                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            {% else %}
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
                                {% for trans in souscriptions %}
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            {% if trans.trans == 'c2w' %}
                                                {% if trans.beneficiaire |slice(0, 1) == 7 %}
                                                    Orange Money
                                                {% else %}
                                                    Mobicash
                                                {% endif %}
                                            {% else %}
                                                {% if trans.source |slice(0, 1) == 7 %}
                                                    Orange Money
                                                {% else %}
                                                    Mobicash
                                                {% endif %}

                                            {% endif %}
                                        </td>
                                        <td>
                                            {{ trans.trans | upper }}
                                        </td>
                                        <td>{{ trans.created_at | date('d M Y H:i:s') }}</td>
                                        <td>XXXXXX</td>
                                        <td>{{ trans.source }}</td>
                                        <td>{{ trans.beneficiaire }}</td>
                                        <td>OR1503200WMDRHI</td>
                                        <td>{{ trans.montant }}</td>
                                        <td>null</td>
                                        <td>null</td>
                                        <td>RECORDN</td>

                                    </tr>
                                    {% endfor %}


                                    </tbody>
                                    </table>
                            {% endif %}

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

 {% block scripts %}
<script>
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
    function isLetterKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)
            return true;
        return false;
    }
    </script>
 {% endblock %}", "ILBankBundle::report.html.twig", "/Applications/MAMP/htdocs/il/src/IL/BankBundle/Resources/views/report.html.twig");
    }
}
