<?php

/* usuario/new.html.twig */
class __TwigTemplate_9862e5fa872aaf94b6c1ff94385eeb2b43a934b6e3c62300b01f90e6c463b120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a0c0300166e0f707ac396343172c70242bc019c54dc5bd54661ca7e50aad23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0c0300166e0f707ac396343172c70242bc019c54dc5bd54661ca7e50aad23c->enter($__internal_3a0c0300166e0f707ac396343172c70242bc019c54dc5bd54661ca7e50aad23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a0c0300166e0f707ac396343172c70242bc019c54dc5bd54661ca7e50aad23c->leave($__internal_3a0c0300166e0f707ac396343172c70242bc019c54dc5bd54661ca7e50aad23c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2455ed1858e699f9afedce9853fb5b27d3ce7d51f74f6852ef2a5464ad410a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2455ed1858e699f9afedce9853fb5b27d3ce7d51f74f6852ef2a5464ad410a4c->enter($__internal_2455ed1858e699f9afedce9853fb5b27d3ce7d51f74f6852ef2a5464ad410a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usuario/new.html.twig"));

        // line 4
        echo "
    <div class=\"page-title\">
        <h1>
            Cadastrar Utilizador
        </h1>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"widget-container fluid-height\">

            <div class=\"widget-content\">
                <div class=\"wizard\" id=\"wizard\">
                    <div class=\"padded\">
                        <ul class=\"wizard-nav nav nav-pills\">
                            <li class=\"\">
                                <a data-toggle=\"tab\" href=\"form-advanced.html#tab1\">1</a>
                            </li>
                            <li class=\"\">
                                <a data-toggle=\"tab\" href=\"form-advanced.html#tab2\">2 </a>
                            </li>
                            <li class=\"active\">
                                <a data-toggle=\"tab\" href=\"form-advanced.html#tab3\">3</a>
                            </li>
                        </ul>
                        <div class=\"progress progress-striped active\">
                            <div aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"0\" class=\"progress-bar\"
                                 role=\"progressbar\" style=\"width: 100%;\"></div>
                        </div>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane\" id=\"tab1\">
                                <h2>
                                    Credenciais de Login
                                </h2>
                                <form role=\"form\">
                                    <div class=\"form-group\">
                                        <label for=\"email\">Username</label><input class=\"form-control has-error\"
                                                                                  id=\"name\" placeholder=\"\" type=\"email\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\">Palavra passe</label><input class=\"form-control\"
                                                                                          id=\"password\"
                                                                                          placeholder=\"6-16 caracters\"
                                                                                          type=\"password\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\">confirma a Palavra passe</label><input
                                                class=\"form-control\" id=\"password\" placeholder=\"6-16 caracters\"
                                                type=\"password\">
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"tab2\">
                                <h2>
                                    Dados Pessoais
                                </h2>
                                <form role=\"form\">
                                    <div class=\"form-group\">
                                        <label for=\"name\">Nome Completo</label><input class=\"form-control\" id=\"name\"
                                                                                      placeholder=\"\" type=\"text\">
                                    </div>
                                    <div class=\"col col-md-4 form-group \">

                                        <label for=\"name\">Data de nascimento</label>
                                        <div class=\"input-group date datepicker\" data-date-autoclose=\"true\" data-date-format=\"dd/mm/yyyy\">
                                            <input class=\"form-control\" type=\"text\"><span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane active\" id=\"tab3\">
                                <h2>
                                    Payment Information
                                </h2>
                                <form role=\"form\">
                                    <div class=\"form-group\">
                                        <label for=\"name-credit\">Name on credit card</label><input class=\"form-control\"
                                                                                                   id=\"name-credit\"
                                                                                                   placeholder=\"\"
                                                                                                   type=\"text\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"credit-card\">Credit card number</label><input class=\"form-control\"
                                                                                                  id=\"credit-card\"
                                                                                                  placeholder=\"\"
                                                                                                  type=\"text\">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"pager\">
                        <div class=\"btn btn-default-outline btn-previous\">
                            <i class=\"fa fa-long-arrow-left\"></i>Back
                        </div>
                        <div class=\"btn btn-primary-outline btn-next disabled\">
                            Continue<i class=\"fa fa-long-arrow-right\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_2455ed1858e699f9afedce9853fb5b27d3ce7d51f74f6852ef2a5464ad410a4c->leave($__internal_2455ed1858e699f9afedce9853fb5b27d3ce7d51f74f6852ef2a5464ad410a4c_prof);

    }

    public function getTemplateName()
    {
        return "usuario/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"page-title\">
        <h1>
            Cadastrar Utilizador
        </h1>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"widget-container fluid-height\">

            <div class=\"widget-content\">
                <div class=\"wizard\" id=\"wizard\">
                    <div class=\"padded\">
                        <ul class=\"wizard-nav nav nav-pills\">
                            <li class=\"\">
                                <a data-toggle=\"tab\" href=\"form-advanced.html#tab1\">1</a>
                            </li>
                            <li class=\"\">
                                <a data-toggle=\"tab\" href=\"form-advanced.html#tab2\">2 </a>
                            </li>
                            <li class=\"active\">
                                <a data-toggle=\"tab\" href=\"form-advanced.html#tab3\">3</a>
                            </li>
                        </ul>
                        <div class=\"progress progress-striped active\">
                            <div aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"0\" class=\"progress-bar\"
                                 role=\"progressbar\" style=\"width: 100%;\"></div>
                        </div>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane\" id=\"tab1\">
                                <h2>
                                    Credenciais de Login
                                </h2>
                                <form role=\"form\">
                                    <div class=\"form-group\">
                                        <label for=\"email\">Username</label><input class=\"form-control has-error\"
                                                                                  id=\"name\" placeholder=\"\" type=\"email\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\">Palavra passe</label><input class=\"form-control\"
                                                                                          id=\"password\"
                                                                                          placeholder=\"6-16 caracters\"
                                                                                          type=\"password\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\">confirma a Palavra passe</label><input
                                                class=\"form-control\" id=\"password\" placeholder=\"6-16 caracters\"
                                                type=\"password\">
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"tab2\">
                                <h2>
                                    Dados Pessoais
                                </h2>
                                <form role=\"form\">
                                    <div class=\"form-group\">
                                        <label for=\"name\">Nome Completo</label><input class=\"form-control\" id=\"name\"
                                                                                      placeholder=\"\" type=\"text\">
                                    </div>
                                    <div class=\"col col-md-4 form-group \">

                                        <label for=\"name\">Data de nascimento</label>
                                        <div class=\"input-group date datepicker\" data-date-autoclose=\"true\" data-date-format=\"dd/mm/yyyy\">
                                            <input class=\"form-control\" type=\"text\"><span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane active\" id=\"tab3\">
                                <h2>
                                    Payment Information
                                </h2>
                                <form role=\"form\">
                                    <div class=\"form-group\">
                                        <label for=\"name-credit\">Name on credit card</label><input class=\"form-control\"
                                                                                                   id=\"name-credit\"
                                                                                                   placeholder=\"\"
                                                                                                   type=\"text\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"credit-card\">Credit card number</label><input class=\"form-control\"
                                                                                                  id=\"credit-card\"
                                                                                                  placeholder=\"\"
                                                                                                  type=\"text\">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"pager\">
                        <div class=\"btn btn-default-outline btn-previous\">
                            <i class=\"fa fa-long-arrow-left\"></i>Back
                        </div>
                        <div class=\"btn btn-primary-outline btn-next disabled\">
                            Continue<i class=\"fa fa-long-arrow-right\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "usuario/new.html.twig", "/opt/lampp/htdocs/musee/des/app/Resources/views/usuario/new.html.twig");
    }
}
