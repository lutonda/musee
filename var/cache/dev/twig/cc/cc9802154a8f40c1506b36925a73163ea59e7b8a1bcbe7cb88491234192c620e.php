<?php

/* /pessoa/show.html.twig */
class __TwigTemplate_d0c5bba69e2caf420edb331ddd20a08f206a7be669b70caaacb367b7c27d6817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/pessoa/show.html.twig", 1);
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
        $__internal_c763ebb0c91929d2637472df976382488a7b4e7383662500b5ed327a203bc098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c763ebb0c91929d2637472df976382488a7b4e7383662500b5ed327a203bc098->enter($__internal_c763ebb0c91929d2637472df976382488a7b4e7383662500b5ed327a203bc098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/pessoa/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c763ebb0c91929d2637472df976382488a7b4e7383662500b5ed327a203bc098->leave($__internal_c763ebb0c91929d2637472df976382488a7b4e7383662500b5ed327a203bc098_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1ac14d105de4368da47c6d75ed0357ff475f68ce3fde7c0051e69a12e46432f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ac14d105de4368da47c6d75ed0357ff475f68ce3fde7c0051e69a12e46432f->enter($__internal_c1ac14d105de4368da47c6d75ed0357ff475f68ce3fde7c0051e69a12e46432f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "/pessoa/show.html.twig"));

        // line 4
        echo "
    <div class=\"container-fluid main-content\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <ul class=\"breadcrumb\">
                    <li>
                        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_index");
        echo "\"><i class=\"fa fa-backward\"></i></a>
                    </li>
                    <li>
                        <a href=\"/\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 17
            echo "                    <li>
                        <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($context["u"]);
            echo "\">";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "</a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    <li class=\"active\">
                        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "nome", array()), "html", null, true);
        echo "
                    </li>
                </ul>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"page-title\">
                    <h1>
                        Pessoa #";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "id", array()), "html", null, true);
        echo "
                    </h1>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div style=\"float: right;\">
                    <label style=\"margin-right: 30px; display: none\"><input id=\"autoopen\" type=\"checkbox\" checked hidden=\"hidden\" ><span>Auto open next field</span></label>

                    ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <button class=\"btn btn-danger\" type=\"submit\"><i class=\"fa fa-trash-o\"></i>Eliminar</button>
                    <button class=\"btn btn-default\" id=\"enable\" style=\"margin:0;\">Activar / Desativar Edição</button>
                    ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

                </div>
            </div>
        </div>
        <div class=\"row\" style=\"margin-top: 0\">
            <div class=\"col-lg-12\">


                <div class=\"widget-container fluid-height clearfix\">
                    <div class=\"widget-content padded\">
                        <p>
                            <em>Click fields below to edit</em>
                        </p>
                        <table class=\"table table-bordered table-striped editable-form\" id=\"user\" style=\"clear: both\">
                            <tbody>
                            <tr>
                                <td style=\"width: 35%; max-width: 120px\">
                                    Nome Completo
                                </td>
                                <td>
                                    <a data-original-title=\"Enter username\" data-pk=\"1\" data-type=\"text\" href=\"xeditable.html#\" id=\"username\" class=\"editable editable-click\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "nome", array()), "html", null, true);
        echo "</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Numero
                                </td>
                                <td>
                                    <a data-original-title=\"Enter your firstname\" data-pk=\"1\" data-placeholder=\"Required\" data-placement=\"right\" data-type=\"text\" href=\"xeditable.html#\" id=\"firstname\" class=\"editable editable-click editable-empty\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "numero", array()), "html", null, true);
        echo "</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nivel Academico
                                </td>
                                <td>
                                    <a data-original-title=\"Select sex\" data-pk=\"1\" data-type=\"select\" data-value=\"\" href=\"xeditable.html#\" id=\"sex\" class=\"editable editable-click\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "nivelacademico", array()), "html", null, true);
        echo "</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tipo
                                </td>
                                <td>
                                    <a data-original-title=\"Select group\" data-pk=\"1\" data-source=\"/groups\" data-type=\"select\" data-value=\"5\" href=\"xeditable.html#\" id=\"group\" class=\"editable editable-click\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "tipo", array()), "html", null, true);
        echo "</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Especialidade
                                </td>
                                <td>
                                    <a data-original-title=\"Select group\" data-pk=\"1\" data-source=\"/groups\" data-type=\"select\" data-value=\"5\" href=\"xeditable.html#\" id=\"group\" class=\"editable editable-click\">";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "especialidade", array()), "nome", array()), "html", null, true);
        echo "</a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Curso
                                </td>
                                <td>
                                    <a data-original-title=\"Enter username\" data-pk=\"1\" data-type=\"text\" href=\"xeditable.html#\" id=\"username\" class=\"editable editable-click\">
                                        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "contactos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contacto"]) {
            // line 104
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contacto"], "descricao", array()), "html", null, true);
            echo ",
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contacto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Genero
                                </td>
                                <td>
                                    <a data-original-title=\"Select status\" data-pk=\"1\" data-source=\"/status\" data-type=\"select\" data-value=\"0\" href=\"xeditable.html#\" id=\"status\" class=\"editable editable-click\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "genero", array()), "html", null, true);
        echo "</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Data de nascimento
                                </td>
                                <td>
                                    <a data-format=\"YYYY-MM-DD\" data-original-title=\"Select Date of birth\" data-pk=\"1\" data-template=\"D / MMM / YYYY\" data-type=\"combodate\" data-value=\"";
        // line 123
        if ($this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "datanacimento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "datanacimento", array()), "Y-m-d"), "html", null, true);
        }
        echo "\" data-viewformat=\"DD/MM/YYYY\" href=\"xeditable.html#\" id=\"dob\" class=\"editable editable-click\">";
        if ($this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "datanacimento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "datanacimento", array()), "d-m-Y"), "html", null, true);
        }
        echo "</a>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"width: 35%; max-width: 120px\">
                                    Naturalidade
                                </td>
                                <td>
                                    <a data-original-title=\"Enter username\" data-pk=\"1\" data-type=\"text\" href=\"xeditable.html#\" id=\"username\" class=\"editable editable-click\">";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "naturalidade", array()), "nome", array()), "html", null, true);
        echo ", Província de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "naturalidade", array()), "idprovincia", array()), "nome", array()), "html", null, true);
        echo "</a>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"width: 35%; max-width: 120px\">
                                    Nacionalidade
                                </td>
                                <td>
                                    <a data-original-title=\"Enter username\" data-pk=\"1\" data-type=\"text\" href=\"xeditable.html#\" id=\"username\" class=\"editable editable-click\">";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "naturalidade", array()), "idprovincia", array()), "idpais", array()), "nome", array()), "html", null, true);
        echo "</a>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"width: 35%; max-width: 120px\">
                                    Morada
                                </td>
                                <td>
                                    <a data-original-title=\"Enter username\" data-pk=\"1\" data-type=\"text\" href=\"xeditable.html#\" id=\"username\" class=\"editable editable-click\">";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "morada", array()), "nome", array()), "html", null, true);
        echo ", Província de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "morada", array()), "idprovincia", array()), "nome", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "morada", array()), "idprovincia", array()), "idpais", array()), "nome", array()), "html", null, true);
        echo "</a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Data de Cadastro
                                </td>
                                <td>
                                    <a data-format=\"DD-MM-YYYY HH:mm\" data-original-title=\"Setup event date and time\" data-pk=\"1\" data-template=\"D MMM YYYY  HH:mm\" data-type=\"combodate\" data-viewformat=\"MMM D, YYYY, HH:mm\"  class=\"editable editable-click editable-empty\">";
        // line 156
        if ($this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "data", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : $this->getContext($context, "pessoa")), "data", array()), "H:i:s d-m-Y"), "html", null, true);
        }
        echo "</a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c1ac14d105de4368da47c6d75ed0357ff475f68ce3fde7c0051e69a12e46432f->leave($__internal_c1ac14d105de4368da47c6d75ed0357ff475f68ce3fde7c0051e69a12e46432f_prof);

    }

    public function getTemplateName()
    {
        return "/pessoa/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 156,  262 => 147,  251 => 139,  238 => 131,  221 => 123,  210 => 115,  199 => 106,  190 => 104,  186 => 103,  173 => 93,  162 => 85,  151 => 77,  140 => 69,  129 => 61,  105 => 40,  99 => 37,  88 => 29,  78 => 22,  75 => 21,  64 => 18,  61 => 17,  57 => 16,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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

    <div class=\"container-fluid main-content\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <ul class=\"breadcrumb\">
                    <li>
                        <a href=\"{{ path('pessoa_index') }}\"><i class=\"fa fa-backward\"></i></a>
                    </li>
                    <li>
                        <a href=\"/\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    {% for u in url %}
                    <li>
                        <a href=\"{{ path(u) }}\">{{ u }}</a>
                    </li>
                    {% endfor %}
                    <li class=\"active\">
                        {{ pessoa.nome }}
                    </li>
                </ul>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"page-title\">
                    <h1>
                        Pessoa #{{ pessoa.id }}
                    </h1>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div style=\"float: right;\">
                    <label style=\"margin-right: 30px; display: none\"><input id=\"autoopen\" type=\"checkbox\" checked hidden=\"hidden\" ><span>Auto open next field</span></label>

                    {{ form_start(delete_form) }}
                    <button class=\"btn btn-danger\" type=\"submit\"><i class=\"fa fa-trash-o\"></i>Eliminar</button>
                    <button class=\"btn btn-default\" id=\"enable\" style=\"margin:0;\">Activar / Desativar Edição</button>
                    {{ form_end(delete_form) }}

                </div>
            </div>
        </div>
        <div class=\"row\" style=\"margin-top: 0\">
            <div class=\"col-lg-12\">


                <div class=\"widget-container fluid-height clearfix\">
                    <div class=\"widget-content padded\">
                        <p>
                            <em>Click fields below to edit</em>
                        </p>
                        <table class=\"table table-bordered table-striped editable-form\" id=\"user\" style=\"clear: both\">
                            <tbody>
                            <tr>
                                <td style=\"width: 35%; max-width: 120px\">
                                    Nome Completo
                                </td>
                                <td>
                                    <a data-original-title=\"Enter username\" data-pk=\"1\" data-type=\"text\" href=\"xeditable.html#\" id=\"username\" class=\"editable editable-click\">{{ pessoa.nome }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Numero
                                </td>
                                <td>
                                    <a data-original-title=\"Enter your firstname\" data-pk=\"1\" data-placeholder=\"Required\" data-placement=\"right\" data-type=\"text\" href=\"xeditable.html#\" id=\"firstname\" class=\"editable editable-click editable-empty\">{{ pessoa.numero }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nivel Academico
                                </td>
                                <td>
                                    <a data-original-title=\"Select sex\" data-pk=\"1\" data-type=\"select\" data-value=\"\" href=\"xeditable.html#\" id=\"sex\" class=\"editable editable-click\">{{ pessoa.nivelacademico }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tipo
                                </td>
                                <td>
                                    <a data-original-title=\"Select group\" data-pk=\"1\" data-source=\"/groups\" data-type=\"select\" data-value=\"5\" href=\"xeditable.html#\" id=\"group\" class=\"editable editable-click\">{{ pessoa.tipo }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Especialidade
                                </td>
                                <td>
                                    <a data-original-title=\"Select group\" data-pk=\"1\" data-source=\"/groups\" data-type=\"select\" data-value=\"5\" href=\"xeditable.html#\" id=\"group\" class=\"editable editable-click\">{{ pessoa.especialidade.nome }}</a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Curso
                                </td>
                                <td>
                                    <a data-original-title=\"Enter username\" data-pk=\"1\" data-type=\"text\" href=\"xeditable.html#\" id=\"username\" class=\"editable editable-click\">
                                        {% for contacto in pessoa.contactos %}
                                            {{ contacto.descricao }},
                                        {% endfor %}
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Genero
                                </td>
                                <td>
                                    <a data-original-title=\"Select status\" data-pk=\"1\" data-source=\"/status\" data-type=\"select\" data-value=\"0\" href=\"xeditable.html#\" id=\"status\" class=\"editable editable-click\">{{ pessoa.genero }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Data de nascimento
                                </td>
                                <td>
                                    <a data-format=\"YYYY-MM-DD\" data-original-title=\"Select Date of birth\" data-pk=\"1\" data-template=\"D / MMM / YYYY\" data-type=\"combodate\" data-value=\"{% if pessoa.datanacimento %}{{ pessoa.datanacimento|date('Y-m-d') }}{% endif %}\" data-viewformat=\"DD/MM/YYYY\" href=\"xeditable.html#\" id=\"dob\" class=\"editable editable-click\">{% if pessoa.datanacimento %}{{ pessoa.datanacimento|date('d-m-Y') }}{% endif %}</a>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"width: 35%; max-width: 120px\">
                                    Naturalidade
                                </td>
                                <td>
                                    <a data-original-title=\"Enter username\" data-pk=\"1\" data-type=\"text\" href=\"xeditable.html#\" id=\"username\" class=\"editable editable-click\">{{ pessoa.naturalidade.nome }}, Província de {{ pessoa.naturalidade.idprovincia.nome }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"width: 35%; max-width: 120px\">
                                    Nacionalidade
                                </td>
                                <td>
                                    <a data-original-title=\"Enter username\" data-pk=\"1\" data-type=\"text\" href=\"xeditable.html#\" id=\"username\" class=\"editable editable-click\">{{ pessoa.naturalidade.idprovincia.idpais.nome }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"width: 35%; max-width: 120px\">
                                    Morada
                                </td>
                                <td>
                                    <a data-original-title=\"Enter username\" data-pk=\"1\" data-type=\"text\" href=\"xeditable.html#\" id=\"username\" class=\"editable editable-click\">{{ pessoa.morada.nome }}, Província de {{ pessoa.morada.idprovincia.nome }}, {{ pessoa.morada.idprovincia.idpais.nome }}</a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Data de Cadastro
                                </td>
                                <td>
                                    <a data-format=\"DD-MM-YYYY HH:mm\" data-original-title=\"Setup event date and time\" data-pk=\"1\" data-template=\"D MMM YYYY  HH:mm\" data-type=\"combodate\" data-viewformat=\"MMM D, YYYY, HH:mm\"  class=\"editable editable-click editable-empty\">{% if pessoa.data %}{{ pessoa.data|date('H:i:s d-m-Y') }}{% endif %}</a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "/pessoa/show.html.twig", "/opt/lampp/htdocs/musee/des/app/Resources/views/pessoa/show.html.twig");
    }
}
