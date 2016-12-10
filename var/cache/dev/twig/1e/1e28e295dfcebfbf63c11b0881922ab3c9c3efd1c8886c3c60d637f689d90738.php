<?php

/* ::usuario/show.html.twig */
class __TwigTemplate_e51c45d5d17794d5eb4bb916974e92cc61f7b291a88e06c01ef47cb268e995f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::usuario/show.html.twig", 1);
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
        $__internal_b18ff953e9eb820e174fc21194f5857090823cc6bfcf0cf8cf7908c7b5e5c3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18ff953e9eb820e174fc21194f5857090823cc6bfcf0cf8cf7908c7b5e5c3ae->enter($__internal_b18ff953e9eb820e174fc21194f5857090823cc6bfcf0cf8cf7908c7b5e5c3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::usuario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18ff953e9eb820e174fc21194f5857090823cc6bfcf0cf8cf7908c7b5e5c3ae->leave($__internal_b18ff953e9eb820e174fc21194f5857090823cc6bfcf0cf8cf7908c7b5e5c3ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0db42a131808b3fe60cbad1495814ba3ef7e6c522fd4e785cfe7346a35bc55a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db42a131808b3fe60cbad1495814ba3ef7e6c522fd4e785cfe7346a35bc55a4->enter($__internal_0db42a131808b3fe60cbad1495814ba3ef7e6c522fd4e785cfe7346a35bc55a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::usuario/show.html.twig"));

        // line 4
        echo "    <h1>Usuario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "tipo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "roles", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "estado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "data", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "data", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0db42a131808b3fe60cbad1495814ba3ef7e6c522fd4e785cfe7346a35bc55a4->leave($__internal_0db42a131808b3fe60cbad1495814ba3ef7e6c522fd4e785cfe7346a35bc55a4_prof);

    }

    public function getTemplateName()
    {
        return "::usuario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  114 => 47,  108 => 44,  102 => 41,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Usuario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ usuario.id }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ usuario.username }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ usuario.password }}</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>{{ usuario.tipo }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{ usuario.roles }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ usuario.estado }}</td>
            </tr>
            <tr>
                <th>Data</th>
                <td>{% if usuario.data %}{{ usuario.data|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('usuario_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('usuario_edit', { 'id': usuario.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "::usuario/show.html.twig", "/opt/lampp/htdocs/musee/des/app/Resources/views/usuario/show.html.twig");
    }
}
