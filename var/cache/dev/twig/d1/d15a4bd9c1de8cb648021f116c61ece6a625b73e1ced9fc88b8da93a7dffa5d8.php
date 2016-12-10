<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7c66431440c5907d514a84e009dc2722204442ad59d89a40994c7dc9529ed23a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f7a6a095c34e3ae60f6846ca0f57015c455f78f7df8584e6d155a18e1e209d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7a6a095c34e3ae60f6846ca0f57015c455f78f7df8584e6d155a18e1e209d3->enter($__internal_0f7a6a095c34e3ae60f6846ca0f57015c455f78f7df8584e6d155a18e1e209d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f7a6a095c34e3ae60f6846ca0f57015c455f78f7df8584e6d155a18e1e209d3->leave($__internal_0f7a6a095c34e3ae60f6846ca0f57015c455f78f7df8584e6d155a18e1e209d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb97958dc9bdebb9e89e0169fb325e8720b9100b1b06c67f2043dfbbdd5b1510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb97958dc9bdebb9e89e0169fb325e8720b9100b1b06c67f2043dfbbdd5b1510->enter($__internal_fb97958dc9bdebb9e89e0169fb325e8720b9100b1b06c67f2043dfbbdd5b1510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fb97958dc9bdebb9e89e0169fb325e8720b9100b1b06c67f2043dfbbdd5b1510->leave($__internal_fb97958dc9bdebb9e89e0169fb325e8720b9100b1b06c67f2043dfbbdd5b1510_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2542eb22557a1246f489e130eff249ea9101f1f319a54d68635ba9b4fd9b856d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2542eb22557a1246f489e130eff249ea9101f1f319a54d68635ba9b4fd9b856d->enter($__internal_2542eb22557a1246f489e130eff249ea9101f1f319a54d68635ba9b4fd9b856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2542eb22557a1246f489e130eff249ea9101f1f319a54d68635ba9b4fd9b856d->leave($__internal_2542eb22557a1246f489e130eff249ea9101f1f319a54d68635ba9b4fd9b856d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_db323cf852943acc446244a77a79f810a8eb7abe4ae963c57c74ed74894fc753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db323cf852943acc446244a77a79f810a8eb7abe4ae963c57c74ed74894fc753->enter($__internal_db323cf852943acc446244a77a79f810a8eb7abe4ae963c57c74ed74894fc753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_db323cf852943acc446244a77a79f810a8eb7abe4ae963c57c74ed74894fc753->leave($__internal_db323cf852943acc446244a77a79f810a8eb7abe4ae963c57c74ed74894fc753_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/musee/des/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
