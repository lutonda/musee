<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f583ddd68040cea1c72193a29b35820037f2bae549cdc070a8f6a4634d7ebbca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_711ba3c2b6ecba6ea03a6a3247bec71d04db5bb0250f2ac19d837e9f7f03464f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711ba3c2b6ecba6ea03a6a3247bec71d04db5bb0250f2ac19d837e9f7f03464f->enter($__internal_711ba3c2b6ecba6ea03a6a3247bec71d04db5bb0250f2ac19d837e9f7f03464f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711ba3c2b6ecba6ea03a6a3247bec71d04db5bb0250f2ac19d837e9f7f03464f->leave($__internal_711ba3c2b6ecba6ea03a6a3247bec71d04db5bb0250f2ac19d837e9f7f03464f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49c61a57ac2325dbc231e09a22fbbbbc0b83a8f8c955c9ce19e2c54e8b9ea953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c61a57ac2325dbc231e09a22fbbbbc0b83a8f8c955c9ce19e2c54e8b9ea953->enter($__internal_49c61a57ac2325dbc231e09a22fbbbbc0b83a8f8c955c9ce19e2c54e8b9ea953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_49c61a57ac2325dbc231e09a22fbbbbc0b83a8f8c955c9ce19e2c54e8b9ea953->leave($__internal_49c61a57ac2325dbc231e09a22fbbbbc0b83a8f8c955c9ce19e2c54e8b9ea953_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27781087a7c6ad7c808cc425a5adbd335ff3fa36a5f769705a8a79ccfd493cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27781087a7c6ad7c808cc425a5adbd335ff3fa36a5f769705a8a79ccfd493cab->enter($__internal_27781087a7c6ad7c808cc425a5adbd335ff3fa36a5f769705a8a79ccfd493cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_27781087a7c6ad7c808cc425a5adbd335ff3fa36a5f769705a8a79ccfd493cab->leave($__internal_27781087a7c6ad7c808cc425a5adbd335ff3fa36a5f769705a8a79ccfd493cab_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7da0c0554c91a47f9d59feea5751a0e4434095006da41401dcbf96429b2547d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da0c0554c91a47f9d59feea5751a0e4434095006da41401dcbf96429b2547d5->enter($__internal_7da0c0554c91a47f9d59feea5751a0e4434095006da41401dcbf96429b2547d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7da0c0554c91a47f9d59feea5751a0e4434095006da41401dcbf96429b2547d5->leave($__internal_7da0c0554c91a47f9d59feea5751a0e4434095006da41401dcbf96429b2547d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/musee/des/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
