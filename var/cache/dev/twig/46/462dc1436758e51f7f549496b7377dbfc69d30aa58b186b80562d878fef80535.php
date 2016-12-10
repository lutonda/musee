<?php

/* base.html.twig */
class __TwigTemplate_a2e2c8127f137ddcdf32a28ccf650d29142e0064c15f0f3e8f3e03311f7e7a29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0e85c757b864ca1b26935571bed2e437b02ea762c270d313d506405986e020e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e85c757b864ca1b26935571bed2e437b02ea762c270d313d506405986e020e->enter($__internal_f0e85c757b864ca1b26935571bed2e437b02ea762c270d313d506405986e020e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f0e85c757b864ca1b26935571bed2e437b02ea762c270d313d506405986e020e->leave($__internal_f0e85c757b864ca1b26935571bed2e437b02ea762c270d313d506405986e020e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f06850bd0dfe1d68fd2c396b9ebb9a831141630deaf28cd8a379443a2e7883fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06850bd0dfe1d68fd2c396b9ebb9a831141630deaf28cd8a379443a2e7883fe->enter($__internal_f06850bd0dfe1d68fd2c396b9ebb9a831141630deaf28cd8a379443a2e7883fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_f06850bd0dfe1d68fd2c396b9ebb9a831141630deaf28cd8a379443a2e7883fe->leave($__internal_f06850bd0dfe1d68fd2c396b9ebb9a831141630deaf28cd8a379443a2e7883fe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89dd117f0a52c4feaa1dc8e602353c845f18b9cfbe2dad618e74a3ca2e5c44f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89dd117f0a52c4feaa1dc8e602353c845f18b9cfbe2dad618e74a3ca2e5c44f0->enter($__internal_89dd117f0a52c4feaa1dc8e602353c845f18b9cfbe2dad618e74a3ca2e5c44f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_89dd117f0a52c4feaa1dc8e602353c845f18b9cfbe2dad618e74a3ca2e5c44f0->leave($__internal_89dd117f0a52c4feaa1dc8e602353c845f18b9cfbe2dad618e74a3ca2e5c44f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f99e3fa7430f710ffdeeabd877bb9adfb5e4dac5558f0e381ce54a1b9e60e47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99e3fa7430f710ffdeeabd877bb9adfb5e4dac5558f0e381ce54a1b9e60e47e->enter($__internal_f99e3fa7430f710ffdeeabd877bb9adfb5e4dac5558f0e381ce54a1b9e60e47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f99e3fa7430f710ffdeeabd877bb9adfb5e4dac5558f0e381ce54a1b9e60e47e->leave($__internal_f99e3fa7430f710ffdeeabd877bb9adfb5e4dac5558f0e381ce54a1b9e60e47e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f548ac4ebaf1c5cb7b744e49230d33c5e35bc234872b292af0704998b0c17e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f548ac4ebaf1c5cb7b744e49230d33c5e35bc234872b292af0704998b0c17e7c->enter($__internal_f548ac4ebaf1c5cb7b744e49230d33c5e35bc234872b292af0704998b0c17e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f548ac4ebaf1c5cb7b744e49230d33c5e35bc234872b292af0704998b0c17e7c->leave($__internal_f548ac4ebaf1c5cb7b744e49230d33c5e35bc234872b292af0704998b0c17e7c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/musee/des/app/Resources/views/base.html.twig");
    }
}
