<?php

/* /visita/show.html.twig */
class __TwigTemplate_2f266a33db51a4715883c2b5618c773926a89997df92d8e6a957383eaaf7968a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/visita/show.html.twig", 1);
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
        $__internal_4b4ea9856ebee0ffea8a2f5b2b55f7f455c772c16d77fe2e1c8b5f1fca22ce2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4ea9856ebee0ffea8a2f5b2b55f7f455c772c16d77fe2e1c8b5f1fca22ce2f->enter($__internal_4b4ea9856ebee0ffea8a2f5b2b55f7f455c772c16d77fe2e1c8b5f1fca22ce2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/visita/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b4ea9856ebee0ffea8a2f5b2b55f7f455c772c16d77fe2e1c8b5f1fca22ce2f->leave($__internal_4b4ea9856ebee0ffea8a2f5b2b55f7f455c772c16d77fe2e1c8b5f1fca22ce2f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f3388e3df0fc6f92c94bdd7c887a1d17cee52205939136faa8074aabac506cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3388e3df0fc6f92c94bdd7c887a1d17cee52205939136faa8074aabac506cb->enter($__internal_7f3388e3df0fc6f92c94bdd7c887a1d17cee52205939136faa8074aabac506cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "/visita/show.html.twig"));

        // line 4
        echo "    <h1>Visitum</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visitum"]) ? $context["visitum"] : $this->getContext($context, "visitum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visitum"]) ? $context["visitum"] : $this->getContext($context, "visitum")), "tipo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duracao</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visitum"]) ? $context["visitum"] : $this->getContext($context, "visitum")), "duracao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["visitum"]) ? $context["visitum"] : $this->getContext($context, "visitum")), "data", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["visitum"]) ? $context["visitum"] : $this->getContext($context, "visitum")), "data", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_edit", array("id" => $this->getAttribute((isset($context["visitum"]) ? $context["visitum"] : $this->getContext($context, "visitum")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7f3388e3df0fc6f92c94bdd7c887a1d17cee52205939136faa8074aabac506cb->leave($__internal_7f3388e3df0fc6f92c94bdd7c887a1d17cee52205939136faa8074aabac506cb_prof);

    }

    public function getTemplateName()
    {
        return "/visita/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Visitum</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ visitum.id }}</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>{{ visitum.tipo }}</td>
            </tr>
            <tr>
                <th>Duracao</th>
                <td>{{ visitum.duracao }}</td>
            </tr>
            <tr>
                <th>Data</th>
                <td>{% if visitum.data %}{{ visitum.data|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('visita_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('visita_edit', { 'id': visitum.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "/visita/show.html.twig", "/var/www/html/musee/des/app/Resources/views/visita/show.html.twig");
    }
}
