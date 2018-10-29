<?php

/* ILBankBundle::index.html.twig */
class __TwigTemplate_2847aa67e168e0f9d1d268e497d47f25e36c9a71f96d02ce4e8d1e5e5de0d413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ILBankBundle::layout.html.twig", "ILBankBundle::index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle::index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ILBankBundle::index.html.twig"));

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
        echo "    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"card text-white bg-flat-color-1\">
                <div class=\"card-body pb-0\">
                    <div class=\"dropdown float-right\">
                        <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-cog\"></i>
                        </button>

                    </div>
                    <h4 class=\"mb-0\">
                        <span class=\"count\">";
        // line 15
        echo twig_escape_filter($this->env, ($context["sousMobile"] ?? $this->getContext($context, "sousMobile")), "html", null, true);
        echo "</span>
                    </h4>
                    <p class=\"text-light\">Souscription Mobile</p>

                    <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"><iframe class=\"chartjs-hidden-iframe\" tabindex=\"-1\" style=\"display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;\"></iframe>
                        <canvas id=\"widgetChart1\" height=\"140\" width=\"416\" style=\"display: block; height: 70px; width: 208px;\"></canvas>
                    </div>

                </div>

            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"card text-white bg-flat-color-2\">
                <div class=\"card-body pb-0\">
                    <div class=\"dropdown float-right\">
                        <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-cog\"></i>
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <div class=\"dropdown-menu-content\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class=\"mb-0\">
                        <span class=\"count\">";
        // line 43
        echo twig_escape_filter($this->env, ($context["sousBanque"] ?? $this->getContext($context, "sousBanque")), "html", null, true);
        echo "</span>
                    </h4>
                    <p class=\"text-light\">Souscription Banque</p>

                    <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"><iframe class=\"chartjs-hidden-iframe\" tabindex=\"-1\" style=\"display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;\"></iframe>
                        <canvas id=\"widgetChart2\" height=\"140\" width=\"416\" style=\"display: block; height: 70px; width: 208px;\"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"card text-white bg-flat-color-3\">
                <div class=\"card-body pb-0\">
                    <div class=\"dropdown float-right\">
                        <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-cog\"></i>
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <div class=\"dropdown-menu-content\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class=\"mb-0\">
                        <span class=\"count\">0</span>
                    </h4>
                    <p class=\"text-light\">Transferts echoues</p>

                </div>

                <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"><iframe class=\"chartjs-hidden-iframe\" tabindex=\"-1\" style=\"display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;\"></iframe>
                    <canvas id=\"widgetChart3\" height=\"114\" width=\"496\" style=\"display: block; height: 57px; width: 248px;\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"card text-white bg-flat-color-5\">
                <div class=\"card-body pb-0\">
                    <div class=\"dropdown float-right\">
                        <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-cog\"></i>
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <div class=\"dropdown-menu-content\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class=\"mb-0\">
                        <span class=\"count\">";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["transfert"] ?? $this->getContext($context, "transfert")), "nbre", array()), "html", null, true);
        echo "</span>
                    </h4>
                    <p class=\"text-light\">Transferts reussis</p>

                </div>

                <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"><iframe class=\"chartjs-hidden-iframe\" tabindex=\"-1\" style=\"display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;\"></iframe>
                    <canvas id=\"widgetChart3\" height=\"114\" width=\"496\" style=\"display: block; height: 57px; width: 248px;\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4>STATS</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"custom-tab\">

                        <nav>
                            <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                                <a class=\"nav-item nav-link active \" id=\"custom-nav-home-tab\" data-toggle=\"tab\" href=\"#custom-nav-home\" role=\"tab\" aria-controls=\"custom-nav-home\" aria-selected=\"true\">Linkage Banque</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-profile-tab\" data-toggle=\"tab\" href=\"#custom-nav-profile\" role=\"tab\" aria-controls=\"custom-nav-profile\" aria-selected=\"false\">Linkage Mobile</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-contact-tab\" data-toggle=\"tab\" href=\"#custom-nav-contact\" role=\"tab\" aria-controls=\"custom-nav-contact\" aria-selected=\"false\">Resiliations </a>
                            </div>
                        </nav>
                        <div class=\"tab-content pl-3 pt-2\" id=\"nav-tabContent\">
                            <div class=\"tab-pane fade active show\" id=\"custom-nav-home\" role=\"tabpanel\" aria-labelledby=\"custom-nav-home-tab\">
                                <div class=\"chart tab-pane active\" id=\"banque-chart\" style=\"position: relative; height: 300px;\"></div>

                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-profile\" role=\"tabpanel\" aria-labelledby=\"custom-nav-profile-tab\">
                                <div class=\"chart tab-pane\" id=\"mobile-chart\" style=\"position: relative; height: 300px;\"></div>

                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-contact\" role=\"tabpanel\" aria-labelledby=\"custom-nav-contact-tab\">
                                <div class=\"chart tab-pane active\" id=\"resiliation-chart\" style=\"position: relative; height: 300px;\"></div>

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

    // line 150
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 151
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){
            'use strict';
            /* Morris.js Charts */
            // Sales chart
            var area = new Morris.Line({
                element   : 'banque-chart',
                resize    : true,
                data      : [
                    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banque"] ?? $this->getContext($context, "banque")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 161
            echo "                    { y: '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "date", array()), "html", null, true);
            echo "', souscription: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nbre", array()), "html", null, true);
            echo "  },

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "
                ],
                xkey      : 'y',
                ykeys     : ['souscription' ],
                labels    : ['Souscription'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });

            var line = new Morris.Area({
                element   : 'mobile-chart',
                resize    : true,
                data      : [
                    ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mobile"] ?? $this->getContext($context, "mobile")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 178
            echo "                    { y: '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "date", array()), "html", null, true);
            echo "', souscriptionMobile: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nbre", array()), "html", null, true);
            echo "  },

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "
                ],
                xkey      : 'y',
                ykeys     : ['souscriptionMobile' ],
                labels    : ['Souscription'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });
            var resiliation = new Morris.Area({
                element   : 'resiliation-chart',
                resize    : true,
                data      : [
                    ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resiliation"] ?? $this->getContext($context, "resiliation")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 194
            echo "                    { y: '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "date", array()), "html", null, true);
            echo "', resiliation: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nbre", array()), "html", null, true);
            echo "  },

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "
                ],
                xkey      : 'y',
                ykeys     : ['resiliation' ],
                labels    : ['Souscription'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });



        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ILBankBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 197,  298 => 194,  294 => 193,  280 => 181,  268 => 178,  264 => 177,  249 => 164,  237 => 161,  233 => 160,  222 => 151,  213 => 150,  151 => 97,  94 => 43,  63 => 15,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"card text-white bg-flat-color-1\">
                <div class=\"card-body pb-0\">
                    <div class=\"dropdown float-right\">
                        <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-cog\"></i>
                        </button>

                    </div>
                    <h4 class=\"mb-0\">
                        <span class=\"count\">{{ sousMobile }}</span>
                    </h4>
                    <p class=\"text-light\">Souscription Mobile</p>

                    <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"><iframe class=\"chartjs-hidden-iframe\" tabindex=\"-1\" style=\"display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;\"></iframe>
                        <canvas id=\"widgetChart1\" height=\"140\" width=\"416\" style=\"display: block; height: 70px; width: 208px;\"></canvas>
                    </div>

                </div>

            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"card text-white bg-flat-color-2\">
                <div class=\"card-body pb-0\">
                    <div class=\"dropdown float-right\">
                        <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-cog\"></i>
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <div class=\"dropdown-menu-content\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class=\"mb-0\">
                        <span class=\"count\">{{ sousBanque }}</span>
                    </h4>
                    <p class=\"text-light\">Souscription Banque</p>

                    <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"><iframe class=\"chartjs-hidden-iframe\" tabindex=\"-1\" style=\"display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;\"></iframe>
                        <canvas id=\"widgetChart2\" height=\"140\" width=\"416\" style=\"display: block; height: 70px; width: 208px;\"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"card text-white bg-flat-color-3\">
                <div class=\"card-body pb-0\">
                    <div class=\"dropdown float-right\">
                        <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-cog\"></i>
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <div class=\"dropdown-menu-content\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class=\"mb-0\">
                        <span class=\"count\">0</span>
                    </h4>
                    <p class=\"text-light\">Transferts echoues</p>

                </div>

                <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"><iframe class=\"chartjs-hidden-iframe\" tabindex=\"-1\" style=\"display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;\"></iframe>
                    <canvas id=\"widgetChart3\" height=\"114\" width=\"496\" style=\"display: block; height: 57px; width: 248px;\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"card text-white bg-flat-color-5\">
                <div class=\"card-body pb-0\">
                    <div class=\"dropdown float-right\">
                        <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-cog\"></i>
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <div class=\"dropdown-menu-content\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class=\"mb-0\">
                        <span class=\"count\">{{ transfert.nbre }}</span>
                    </h4>
                    <p class=\"text-light\">Transferts reussis</p>

                </div>

                <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"><iframe class=\"chartjs-hidden-iframe\" tabindex=\"-1\" style=\"display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;\"></iframe>
                    <canvas id=\"widgetChart3\" height=\"114\" width=\"496\" style=\"display: block; height: 57px; width: 248px;\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4>STATS</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"custom-tab\">

                        <nav>
                            <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                                <a class=\"nav-item nav-link active \" id=\"custom-nav-home-tab\" data-toggle=\"tab\" href=\"#custom-nav-home\" role=\"tab\" aria-controls=\"custom-nav-home\" aria-selected=\"true\">Linkage Banque</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-profile-tab\" data-toggle=\"tab\" href=\"#custom-nav-profile\" role=\"tab\" aria-controls=\"custom-nav-profile\" aria-selected=\"false\">Linkage Mobile</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-contact-tab\" data-toggle=\"tab\" href=\"#custom-nav-contact\" role=\"tab\" aria-controls=\"custom-nav-contact\" aria-selected=\"false\">Resiliations </a>
                            </div>
                        </nav>
                        <div class=\"tab-content pl-3 pt-2\" id=\"nav-tabContent\">
                            <div class=\"tab-pane fade active show\" id=\"custom-nav-home\" role=\"tabpanel\" aria-labelledby=\"custom-nav-home-tab\">
                                <div class=\"chart tab-pane active\" id=\"banque-chart\" style=\"position: relative; height: 300px;\"></div>

                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-profile\" role=\"tabpanel\" aria-labelledby=\"custom-nav-profile-tab\">
                                <div class=\"chart tab-pane\" id=\"mobile-chart\" style=\"position: relative; height: 300px;\"></div>

                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-contact\" role=\"tabpanel\" aria-labelledby=\"custom-nav-contact-tab\">
                                <div class=\"chart tab-pane active\" id=\"resiliation-chart\" style=\"position: relative; height: 300px;\"></div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}

{% block scripts %}
    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){
            'use strict';
            /* Morris.js Charts */
            // Sales chart
            var area = new Morris.Line({
                element   : 'banque-chart',
                resize    : true,
                data      : [
                    {% for key, val in banque %}
                    { y: '{{ val.date }}', souscription: {{ val.nbre }}  },

                    {% endfor %}

                ],
                xkey      : 'y',
                ykeys     : ['souscription' ],
                labels    : ['Souscription'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });

            var line = new Morris.Area({
                element   : 'mobile-chart',
                resize    : true,
                data      : [
                    {% for key, val in mobile %}
                    { y: '{{ val.date }}', souscriptionMobile: {{ val.nbre }}  },

                    {% endfor %}

                ],
                xkey      : 'y',
                ykeys     : ['souscriptionMobile' ],
                labels    : ['Souscription'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });
            var resiliation = new Morris.Area({
                element   : 'resiliation-chart',
                resize    : true,
                data      : [
                    {% for key, val in resiliation %}
                    { y: '{{ val.date }}', resiliation: {{ val.nbre }}  },

                    {% endfor %}

                ],
                xkey      : 'y',
                ykeys     : ['resiliation' ],
                labels    : ['Souscription'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });



        });
    </script>
{% endblock %}", "ILBankBundle::index.html.twig", "/Applications/MAMP/htdocs/il/src/IL/BankBundle/Resources/views/index.html.twig");
    }
}
