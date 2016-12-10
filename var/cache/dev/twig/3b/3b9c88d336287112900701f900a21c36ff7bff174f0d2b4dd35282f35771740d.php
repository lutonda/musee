<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a0a6203ef8596362fc60f4bdf3f64b77224771b5215356a92cbad10de31ad2b5 extends Twig_Template
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
        $__internal_2b6369b7ba7750fab131b15a55f71d0c09c17a217f0600c498407637183f9a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6369b7ba7750fab131b15a55f71d0c09c17a217f0600c498407637183f9a12->enter($__internal_2b6369b7ba7750fab131b15a55f71d0c09c17a217f0600c498407637183f9a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6369b7ba7750fab131b15a55f71d0c09c17a217f0600c498407637183f9a12->leave($__internal_2b6369b7ba7750fab131b15a55f71d0c09c17a217f0600c498407637183f9a12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_807dd746cbde4f5f59cbe9f0389432e599883c8221e421f6310f5cbb612f5263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807dd746cbde4f5f59cbe9f0389432e599883c8221e421f6310f5cbb612f5263->enter($__internal_807dd746cbde4f5f59cbe9f0389432e599883c8221e421f6310f5cbb612f5263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_807dd746cbde4f5f59cbe9f0389432e599883c8221e421f6310f5cbb612f5263->leave($__internal_807dd746cbde4f5f59cbe9f0389432e599883c8221e421f6310f5cbb612f5263_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3948f065e07c2bc9bbac75dfe5a106be1e72b59c0e8b5e421f2221aa2c405110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3948f065e07c2bc9bbac75dfe5a106be1e72b59c0e8b5e421f2221aa2c405110->enter($__internal_3948f065e07c2bc9bbac75dfe5a106be1e72b59c0e8b5e421f2221aa2c405110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3948f065e07c2bc9bbac75dfe5a106be1e72b59c0e8b5e421f2221aa2c405110->leave($__internal_3948f065e07c2bc9bbac75dfe5a106be1e72b59c0e8b5e421f2221aa2c405110_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_808a5ddc1c9e4f06f2e01485f0335f1a2c5aaae9f67a52b527882bd940f1ef34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808a5ddc1c9e4f06f2e01485f0335f1a2c5aaae9f67a52b527882bd940f1ef34->enter($__internal_808a5ddc1c9e4f06f2e01485f0335f1a2c5aaae9f67a52b527882bd940f1ef34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_808a5ddc1c9e4f06f2e01485f0335f1a2c5aaae9f67a52b527882bd940f1ef34->leave($__internal_808a5ddc1c9e4f06f2e01485f0335f1a2c5aaae9f67a52b527882bd940f1ef34_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/musee/des/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
