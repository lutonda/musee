<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_234e8ccf1a85474f300f9608117e90184ca08cc10e5c1222f6872f8e953f844e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ffff418a570e5329ae9b90d65e10497f8cbec72cc0b627aaec7d1731838ba564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffff418a570e5329ae9b90d65e10497f8cbec72cc0b627aaec7d1731838ba564->enter($__internal_ffff418a570e5329ae9b90d65e10497f8cbec72cc0b627aaec7d1731838ba564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffff418a570e5329ae9b90d65e10497f8cbec72cc0b627aaec7d1731838ba564->leave($__internal_ffff418a570e5329ae9b90d65e10497f8cbec72cc0b627aaec7d1731838ba564_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c2f4f17fabedb9fdb773bb1644e711b15b22ce2f59da8e8e3e230cc069ee915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2f4f17fabedb9fdb773bb1644e711b15b22ce2f59da8e8e3e230cc069ee915->enter($__internal_6c2f4f17fabedb9fdb773bb1644e711b15b22ce2f59da8e8e3e230cc069ee915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_6c2f4f17fabedb9fdb773bb1644e711b15b22ce2f59da8e8e3e230cc069ee915->leave($__internal_6c2f4f17fabedb9fdb773bb1644e711b15b22ce2f59da8e8e3e230cc069ee915_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c509f90ab805c145a1a6faaf6b278e3ce9207e2a25f8f650e1ddb18da0f0ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c509f90ab805c145a1a6faaf6b278e3ce9207e2a25f8f650e1ddb18da0f0ccc->enter($__internal_9c509f90ab805c145a1a6faaf6b278e3ce9207e2a25f8f650e1ddb18da0f0ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c509f90ab805c145a1a6faaf6b278e3ce9207e2a25f8f650e1ddb18da0f0ccc->leave($__internal_9c509f90ab805c145a1a6faaf6b278e3ce9207e2a25f8f650e1ddb18da0f0ccc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1891a2465b47cd0ae91836a69d0c1ee122274b4010bb86820a5df308e3cbe10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1891a2465b47cd0ae91836a69d0c1ee122274b4010bb86820a5df308e3cbe10->enter($__internal_c1891a2465b47cd0ae91836a69d0c1ee122274b4010bb86820a5df308e3cbe10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c1891a2465b47cd0ae91836a69d0c1ee122274b4010bb86820a5df308e3cbe10->leave($__internal_c1891a2465b47cd0ae91836a69d0c1ee122274b4010bb86820a5df308e3cbe10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/musee/des/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
