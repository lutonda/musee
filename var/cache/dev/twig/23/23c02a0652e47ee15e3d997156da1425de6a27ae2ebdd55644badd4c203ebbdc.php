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
        $__internal_1e7979640bdf961b9ea8034fed0c4ea32dddd1162ed7e1d736940956c747a88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7979640bdf961b9ea8034fed0c4ea32dddd1162ed7e1d736940956c747a88b->enter($__internal_1e7979640bdf961b9ea8034fed0c4ea32dddd1162ed7e1d736940956c747a88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e7979640bdf961b9ea8034fed0c4ea32dddd1162ed7e1d736940956c747a88b->leave($__internal_1e7979640bdf961b9ea8034fed0c4ea32dddd1162ed7e1d736940956c747a88b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_876528df0039afa2a3b5c11f8681b037016432df4d35bcbd442496f01a353981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876528df0039afa2a3b5c11f8681b037016432df4d35bcbd442496f01a353981->enter($__internal_876528df0039afa2a3b5c11f8681b037016432df4d35bcbd442496f01a353981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_876528df0039afa2a3b5c11f8681b037016432df4d35bcbd442496f01a353981->leave($__internal_876528df0039afa2a3b5c11f8681b037016432df4d35bcbd442496f01a353981_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_878dd182755ec5a58805bb03b80613367b68463422ec640fdd496cfd80f2a278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878dd182755ec5a58805bb03b80613367b68463422ec640fdd496cfd80f2a278->enter($__internal_878dd182755ec5a58805bb03b80613367b68463422ec640fdd496cfd80f2a278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_878dd182755ec5a58805bb03b80613367b68463422ec640fdd496cfd80f2a278->leave($__internal_878dd182755ec5a58805bb03b80613367b68463422ec640fdd496cfd80f2a278_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41da7e1fc18a8a5aca9aaf0eea3f0bbe4a4db500252fbce6b688cdb1ef4911d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41da7e1fc18a8a5aca9aaf0eea3f0bbe4a4db500252fbce6b688cdb1ef4911d3->enter($__internal_41da7e1fc18a8a5aca9aaf0eea3f0bbe4a4db500252fbce6b688cdb1ef4911d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_41da7e1fc18a8a5aca9aaf0eea3f0bbe4a4db500252fbce6b688cdb1ef4911d3->leave($__internal_41da7e1fc18a8a5aca9aaf0eea3f0bbe4a4db500252fbce6b688cdb1ef4911d3_prof);

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
