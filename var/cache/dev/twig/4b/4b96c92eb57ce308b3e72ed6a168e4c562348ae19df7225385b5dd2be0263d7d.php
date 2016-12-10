<?php

/* /pessoa/index.html.twig */
class __TwigTemplate_8192de35b3edd7bf8d0ec291036d6229ba057bd19ba197ec60a87e53af7f8861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/pessoa/index.html.twig", 1);
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
        $__internal_0ee17de1d0f04e5a955cf3bca21d55998e3f3c11bf3a530850edd5a21344adbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee17de1d0f04e5a955cf3bca21d55998e3f3c11bf3a530850edd5a21344adbb->enter($__internal_0ee17de1d0f04e5a955cf3bca21d55998e3f3c11bf3a530850edd5a21344adbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/pessoa/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ee17de1d0f04e5a955cf3bca21d55998e3f3c11bf3a530850edd5a21344adbb->leave($__internal_0ee17de1d0f04e5a955cf3bca21d55998e3f3c11bf3a530850edd5a21344adbb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5a6c1808a180e2a1c98300847f8b5399c98935e8e2e83054c4935701e4914d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a6c1808a180e2a1c98300847f8b5399c98935e8e2e83054c4935701e4914d1->enter($__internal_d5a6c1808a180e2a1c98300847f8b5399c98935e8e2e83054c4935701e4914d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "/pessoa/index.html.twig"));

        // line 6
        echo "    <div class=\"page-title\">
        <h1>
            Pessoas
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
                                Nome Completo
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Email
                    : activate to sort column ascending\" style=\"width: 383px;\">
                                Numero
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Email
                    : activate to sort column ascending\" style=\"width: 383px;\">
                                Tipo
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
        $context['_seq'] = twig_ensure_traversable((isset($context["pessoas"]) ? $context["pessoas"] : $this->getContext($context, "pessoas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pessoa"]) {
            // line 55
            echo "                        <tr class=\"odd\">
                            <td class=\"check hidden-xs  sorting_1\">
                                <label><input name=\"optionsRadios1\" type=\"checkbox\" value=\"option1\"><span></span></label>
                            </td>
                            <td  class=\" \"><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_show", array("id" => $this->getAttribute($context["pessoa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pessoa"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td class=\" \">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["pessoa"], "genero", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pessoa"], "nome", array()), "html", null, true);
            echo "</td>
                            <td class=\" \">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["pessoa"], "numero", array()), "html", null, true);
            echo "</td>
                            <td class=\" \">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["pessoa"], "tipo", array()), "html", null, true);
            echo "</td>
                            <td class=\"hidden-xs \">";
            // line 63
            if ($this->getAttribute($context["pessoa"], "data", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pessoa"], "data", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td class=\" \">
                                ";
            // line 65
            if ($this->getAttribute($context["pessoa"], "estado", array())) {
                // line 66
                echo "                                <span class=\"label label-success\">Approved</span>
                                    ";
            } else {
                // line 68
                echo "                                ";
            }
            // line 69
            echo "                            </td>
                            <td class=\"actions \">
                                <div class=\"action-buttons\">
                                    <a class=\"table-actions\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_show", array("id" => $this->getAttribute($context["pessoa"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-eye\"></i>
                                    </a>
                                    <a class=\"table-actions\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_edit", array("id" => $this->getAttribute($context["pessoa"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-pencil\"></i></a>
                                </div>
                            </td>

                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pessoa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d5a6c1808a180e2a1c98300847f8b5399c98935e8e2e83054c4935701e4914d1->leave($__internal_d5a6c1808a180e2a1c98300847f8b5399c98935e8e2e83054c4935701e4914d1_prof);

    }

    public function getTemplateName()
    {
        return "/pessoa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 82,  150 => 75,  144 => 72,  139 => 69,  136 => 68,  132 => 66,  130 => 65,  123 => 63,  119 => 62,  115 => 61,  109 => 60,  103 => 59,  97 => 55,  93 => 54,  51 => 15,  40 => 6,  34 => 5,  11 => 1,);
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
            Pessoas
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
                                Nome Completo
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Email
                    : activate to sort column ascending\" style=\"width: 383px;\">
                                Numero
                            </th><th class=\"hidden-xs sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"dataTable1\" rowspan=\"1\" colspan=\"1\" aria-label=\"
                      Email
                    : activate to sort column ascending\" style=\"width: 383px;\">
                                Tipo
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
                        {% for pessoa in pessoas %}
                        <tr class=\"odd\">
                            <td class=\"check hidden-xs  sorting_1\">
                                <label><input name=\"optionsRadios1\" type=\"checkbox\" value=\"option1\"><span></span></label>
                            </td>
                            <td  class=\" \"><a href=\"{{ path('pessoa_show', { 'id': pessoa.id }) }}\">{{ pessoa.id }}</a></td>
                            <td class=\" \">{{ pessoa.genero }} {{ pessoa.nome }}</td>
                            <td class=\" \">{{ pessoa.numero }}</td>
                            <td class=\" \">{{ pessoa.tipo }}</td>
                            <td class=\"hidden-xs \">{% if pessoa.data %}{{ pessoa.data|date('Y-m-d H:i:s') }}{% endif %}</td>
                            <td class=\" \">
                                {% if pessoa.estado %}
                                <span class=\"label label-success\">Approved</span>
                                    {% else %}
                                {% endif %}
                            </td>
                            <td class=\"actions \">
                                <div class=\"action-buttons\">
                                    <a class=\"table-actions\" href=\"{{ path('pessoa_show', { 'id': pessoa.id }) }}\">
                                        <i class=\"fa fa-eye\"></i>
                                    </a>
                                    <a class=\"table-actions\" href=\"{{ path('pessoa_edit', { 'id': pessoa.id }) }}\">
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
", "/pessoa/index.html.twig", "/opt/lampp/htdocs/musee/des/app/Resources/views/pessoa/index.html.twig");
    }
}
