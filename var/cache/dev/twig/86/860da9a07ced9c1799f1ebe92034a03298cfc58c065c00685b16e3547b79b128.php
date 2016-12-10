<?php

/* pessoa/new.html.twig */
class __TwigTemplate_26eb97af2ded8d21e0e03dcfe8be31b3a9b16f305dbbd5bdeccaa27b8c050f32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pessoa/new.html.twig", 1);
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
        $__internal_8122d8d7689b8b60c29fc4352c3e43207740ea1564d7153d44772e68182c51e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8122d8d7689b8b60c29fc4352c3e43207740ea1564d7153d44772e68182c51e5->enter($__internal_8122d8d7689b8b60c29fc4352c3e43207740ea1564d7153d44772e68182c51e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pessoa/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8122d8d7689b8b60c29fc4352c3e43207740ea1564d7153d44772e68182c51e5->leave($__internal_8122d8d7689b8b60c29fc4352c3e43207740ea1564d7153d44772e68182c51e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd998e8fb5cea5ccba6ee29cd9dc50c573e2d7109ff50a61211abe055e80e18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd998e8fb5cea5ccba6ee29cd9dc50c573e2d7109ff50a61211abe055e80e18d->enter($__internal_bd998e8fb5cea5ccba6ee29cd9dc50c573e2d7109ff50a61211abe055e80e18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pessoa/new.html.twig"));

        // line 4
        echo "    <h1>Pessoa creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bd998e8fb5cea5ccba6ee29cd9dc50c573e2d7109ff50a61211abe055e80e18d->leave($__internal_bd998e8fb5cea5ccba6ee29cd9dc50c573e2d7109ff50a61211abe055e80e18d_prof);

    }

    public function getTemplateName()
    {
        return "pessoa/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Pessoa creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('pessoa_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "pessoa/new.html.twig", "/opt/lampp/htdocs/musee/des/app/Resources/views/pessoa/new.html.twig");
    }
}
