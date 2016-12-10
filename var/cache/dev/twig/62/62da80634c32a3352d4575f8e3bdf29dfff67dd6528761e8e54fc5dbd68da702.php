<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b7bca5eaedf4415d027b7a22158a64e539f3caac41d636ecdb221fd744a19358 extends Twig_Template
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
        $__internal_e16a4f9588aef039c8aaf34d755d72de948f6447acff62647231a9e7e55f10c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16a4f9588aef039c8aaf34d755d72de948f6447acff62647231a9e7e55f10c2->enter($__internal_e16a4f9588aef039c8aaf34d755d72de948f6447acff62647231a9e7e55f10c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e16a4f9588aef039c8aaf34d755d72de948f6447acff62647231a9e7e55f10c2->leave($__internal_e16a4f9588aef039c8aaf34d755d72de948f6447acff62647231a9e7e55f10c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_710b795b7c9dc14afab8f790903b49b6d1604ce3591a2e370e14f938f8784877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710b795b7c9dc14afab8f790903b49b6d1604ce3591a2e370e14f938f8784877->enter($__internal_710b795b7c9dc14afab8f790903b49b6d1604ce3591a2e370e14f938f8784877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_710b795b7c9dc14afab8f790903b49b6d1604ce3591a2e370e14f938f8784877->leave($__internal_710b795b7c9dc14afab8f790903b49b6d1604ce3591a2e370e14f938f8784877_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b1c32feb43ffc6d9ce75202c8e3b9eb346a0ae620234074264617d261157f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1c32feb43ffc6d9ce75202c8e3b9eb346a0ae620234074264617d261157f31->enter($__internal_8b1c32feb43ffc6d9ce75202c8e3b9eb346a0ae620234074264617d261157f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b1c32feb43ffc6d9ce75202c8e3b9eb346a0ae620234074264617d261157f31->leave($__internal_8b1c32feb43ffc6d9ce75202c8e3b9eb346a0ae620234074264617d261157f31_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb998bb17ff82e00c4a2384086a7daaf71a355d947c32ee2d5e741ef7a7cfc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb998bb17ff82e00c4a2384086a7daaf71a355d947c32ee2d5e741ef7a7cfc6d->enter($__internal_fb998bb17ff82e00c4a2384086a7daaf71a355d947c32ee2d5e741ef7a7cfc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fb998bb17ff82e00c4a2384086a7daaf71a355d947c32ee2d5e741ef7a7cfc6d->leave($__internal_fb998bb17ff82e00c4a2384086a7daaf71a355d947c32ee2d5e741ef7a7cfc6d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/musee/des/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
