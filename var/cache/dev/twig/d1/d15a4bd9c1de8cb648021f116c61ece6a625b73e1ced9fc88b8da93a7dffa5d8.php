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
        $__internal_898aad52c2e09dbae4e34c1aa173b329a0dbc3b7e6362a1d123e24391cedcfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898aad52c2e09dbae4e34c1aa173b329a0dbc3b7e6362a1d123e24391cedcfae->enter($__internal_898aad52c2e09dbae4e34c1aa173b329a0dbc3b7e6362a1d123e24391cedcfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_898aad52c2e09dbae4e34c1aa173b329a0dbc3b7e6362a1d123e24391cedcfae->leave($__internal_898aad52c2e09dbae4e34c1aa173b329a0dbc3b7e6362a1d123e24391cedcfae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6ab8c75abe74c0be436d21e49fa4b7828d5b74bad3ea157ad6294a0ec239490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ab8c75abe74c0be436d21e49fa4b7828d5b74bad3ea157ad6294a0ec239490->enter($__internal_e6ab8c75abe74c0be436d21e49fa4b7828d5b74bad3ea157ad6294a0ec239490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e6ab8c75abe74c0be436d21e49fa4b7828d5b74bad3ea157ad6294a0ec239490->leave($__internal_e6ab8c75abe74c0be436d21e49fa4b7828d5b74bad3ea157ad6294a0ec239490_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53114ea23bd591e2ba625fa583bb8b9613ae7cea46bf9160b5be626b9344a522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53114ea23bd591e2ba625fa583bb8b9613ae7cea46bf9160b5be626b9344a522->enter($__internal_53114ea23bd591e2ba625fa583bb8b9613ae7cea46bf9160b5be626b9344a522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_53114ea23bd591e2ba625fa583bb8b9613ae7cea46bf9160b5be626b9344a522->leave($__internal_53114ea23bd591e2ba625fa583bb8b9613ae7cea46bf9160b5be626b9344a522_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_35edfc12aaa31402d5c485c969f66449f25b702ba6b52ecec6e36a04d761307c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35edfc12aaa31402d5c485c969f66449f25b702ba6b52ecec6e36a04d761307c->enter($__internal_35edfc12aaa31402d5c485c969f66449f25b702ba6b52ecec6e36a04d761307c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_35edfc12aaa31402d5c485c969f66449f25b702ba6b52ecec6e36a04d761307c->leave($__internal_35edfc12aaa31402d5c485c969f66449f25b702ba6b52ecec6e36a04d761307c_prof);

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
