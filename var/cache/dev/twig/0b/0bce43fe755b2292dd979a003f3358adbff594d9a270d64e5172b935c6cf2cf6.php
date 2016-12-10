<?php

/* /usuario/index.html.twig */
class __TwigTemplate_d10f34ffba1bb42fd78b1a8862fad492258bc18939b4c0701452e3e0e153c503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/usuario/index.html.twig", 1);
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
        $__internal_e3ce4dbacebcc4fda5fcf87458c7df17e18bbfd4d5d83804ea3a5814fec4cc09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ce4dbacebcc4fda5fcf87458c7df17e18bbfd4d5d83804ea3a5814fec4cc09->enter($__internal_e3ce4dbacebcc4fda5fcf87458c7df17e18bbfd4d5d83804ea3a5814fec4cc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usuario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3ce4dbacebcc4fda5fcf87458c7df17e18bbfd4d5d83804ea3a5814fec4cc09->leave($__internal_e3ce4dbacebcc4fda5fcf87458c7df17e18bbfd4d5d83804ea3a5814fec4cc09_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac5410fa0b8c8545311492875630de65471dd2e95de9777e248876ec628f9eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5410fa0b8c8545311492875630de65471dd2e95de9777e248876ec628f9eec->enter($__internal_ac5410fa0b8c8545311492875630de65471dd2e95de9777e248876ec628f9eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "/usuario/index.html.twig"));

        // line 6
        echo "    <div class=\"page-title\">
        <h1>
            Utilizadores
        </h1>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"widget-container fluid-height clearfix\">
            <div class=\"heading\">
                <a class=\"btn btn-primary btn\" data-toggle=\"modal\" href=\"components.html#myModal\">Bootstrap Modal</a>
                <a class=\"btn btn-sm btn-primary-outline pull-right\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_new");
        echo "\" id=\"add-row\"><i class=\"fa fa-plus\"></i>Add row</a>
            </div>
            <div class=\"widget-content padded clearfix\">
                <div id=\"dataTable1_wrapper\" class=\"dataTables_wrapper\" role=\"grid\">

                    <table class=\"table table-bordered table-striped dataTable\" id=\"dataTable1\" aria-describedby=\"dataTable1_info\">
                        <thead>
                        <tr role=\"row\"><th class=\"check-header hidden-xs sorting_disabled\" role=\"columnheader\" rowspan=\"1\" colspan=\"1\" aria-label=\"

                    \" style=\"width: 17px;\">

                                <label><input id=\"checkAll\" name=\"checkAll\" type=\"checkbox\"><span></span></label>
                            </th><th class=\"sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      First Name
                    : activate to sort column ascending\" style=\"width: 80px;\">
                                N.º
                            </th><th class=\"sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Last Name
                    : activate to sort column ascending\" style=\"width: 413px;\">
                                Username
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Email
                    : activate to sort column ascending\" style=\"width: 383px;\">
                                Tipo
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Email
                    : activate to sort column ascending\" style=\"width: 383px;\">
                                Roles
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Date Added
                    : activate to sort column ascending\" style=\"width: 239px;\">
                                Date de Cadastro
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Status
                    : activate to sort column ascending\" style=\"width: 246px;\">
                                Estado
                            </th><th class=\"sorting_disabled\" role=\"columnheader\" rowspan=\"1\" colspan=\"1\" aria-label=\"\" style=\"width: 72px;\"></th></tr></thead>

                        <tbody role=\"alert\" aria-live=\"polite\" aria-relevant=\"all\">
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 55
            echo "                            <tr class=\"odd\">
                                <td class=\"check hidden-xs  sorting_1\">
                                    <label><input name=\"optionsRadios1\" type=\"checkbox\" value=\"option1\"><span></span></label>
                                </td>
                                <td  class=\" \"><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_show", array("id" => $this->getAttribute($this->getAttribute($context["usuario"], "idpessoa", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "idpessoa", array()), "id", array()), "html", null, true);
            echo "</a></td>
                                <td class=\" \">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
            echo "</td>
                                <td class=\" \">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "tipo", array()), "html", null, true);
            echo "</td>
                                <td class=\" \">";
            // line 62
            echo "</td>
                                <td class=\"hidden-xs \">";
            // line 63
            if ($this->getAttribute($context["usuario"], "data", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "data", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td class=\" \">
                                    ";
            // line 65
            if ($this->getAttribute($context["usuario"], "estado", array())) {
                // line 66
                echo "                                        <span class=\"label label-success\">Activo</span>
                                    ";
            } else {
                // line 68
                echo "                                        <span class=\"label label-danger\">Cancelado</span>
                                    ";
            }
            // line 70
            echo "                                </td>
                                <td class=\"actions \">
                                    <div class=\"action-buttons\">
                                        <a class=\"table-actions\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_show", array("id" => $this->getAttribute($this->getAttribute($context["usuario"], "idpessoa", array()), "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                        <a class=\"table-actions\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-pencil\"></i></a>
                                    </div>
                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_ac5410fa0b8c8545311492875630de65471dd2e95de9777e248876ec628f9eec->leave($__internal_ac5410fa0b8c8545311492875630de65471dd2e95de9777e248876ec628f9eec_prof);

    }

    public function getTemplateName()
    {
        return "/usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 83,  148 => 76,  142 => 73,  137 => 70,  133 => 68,  129 => 66,  127 => 65,  120 => 63,  117 => 62,  113 => 61,  109 => 60,  103 => 59,  97 => 55,  93 => 54,  51 => 15,  40 => 6,  34 => 5,  11 => 1,);
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
            Utilizadores
        </h1>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"widget-container fluid-height clearfix\">
            <div class=\"heading\">
                <a class=\"btn btn-primary btn\" data-toggle=\"modal\" href=\"components.html#myModal\">Bootstrap Modal</a>
                <a class=\"btn btn-sm btn-primary-outline pull-right\" href=\"{{ path('pessoa_new') }}\" id=\"add-row\"><i class=\"fa fa-plus\"></i>Add row</a>
            </div>
            <div class=\"widget-content padded clearfix\">
                <div id=\"dataTable1_wrapper\" class=\"dataTables_wrapper\" role=\"grid\">

                    <table class=\"table table-bordered table-striped dataTable\" id=\"dataTable1\" aria-describedby=\"dataTable1_info\">
                        <thead>
                        <tr role=\"row\"><th class=\"check-header hidden-xs sorting_disabled\" role=\"columnheader\" rowspan=\"1\" colspan=\"1\" aria-label=\"

                    \" style=\"width: 17px;\">

                                <label><input id=\"checkAll\" name=\"checkAll\" type=\"checkbox\"><span></span></label>
                            </th><th class=\"sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      First Name
                    : activate to sort column ascending\" style=\"width: 80px;\">
                                N.º
                            </th><th class=\"sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Last Name
                    : activate to sort column ascending\" style=\"width: 413px;\">
                                Username
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Email
                    : activate to sort column ascending\" style=\"width: 383px;\">
                                Tipo
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Email
                    : activate to sort column ascending\" style=\"width: 383px;\">
                                Roles
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Date Added
                    : activate to sort column ascending\" style=\"width: 239px;\">
                                Date de Cadastro
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Status
                    : activate to sort column ascending\" style=\"width: 246px;\">
                                Estado
                            </th><th class=\"sorting_disabled\" role=\"columnheader\" rowspan=\"1\" colspan=\"1\" aria-label=\"\" style=\"width: 72px;\"></th></tr></thead>

                        <tbody role=\"alert\" aria-live=\"polite\" aria-relevant=\"all\">
                        {% for usuario in usuarios %}
                            <tr class=\"odd\">
                                <td class=\"check hidden-xs  sorting_1\">
                                    <label><input name=\"optionsRadios1\" type=\"checkbox\" value=\"option1\"><span></span></label>
                                </td>
                                <td  class=\" \"><a href=\"{{ path('pessoa_show', { 'id': usuario.idpessoa.id }) }}\">{{ usuario.idpessoa.id }}</a></td>
                                <td class=\" \">{{ usuario.username}}</td>
                                <td class=\" \">{{ usuario.tipo }}</td>
                                <td class=\" \">{# usuario.roles #}</td>
                                <td class=\"hidden-xs \">{% if usuario.data %}{{ usuario.data|date('Y-m-d H:i:s') }}{% endif %}</td>
                                <td class=\" \">
                                    {% if usuario.estado %}
                                        <span class=\"label label-success\">Activo</span>
                                    {% else %}
                                        <span class=\"label label-danger\">Cancelado</span>
                                    {% endif %}
                                </td>
                                <td class=\"actions \">
                                    <div class=\"action-buttons\">
                                        <a class=\"table-actions\" href=\"{{ path('pessoa_show', { 'id': usuario.idpessoa.id }) }}\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                        <a class=\"table-actions\" href=\"{{ path('pessoa_edit', { 'id': usuario.id }) }}\">
                                            <i class=\"fa fa-pencil\"></i></a>
                                    </div>
                                </td>

                            </tr>
                        {% endfor %}
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "/usuario/index.html.twig", "/var/www/html/musee/des/app/Resources/views/usuario/index.html.twig");
    }
}
