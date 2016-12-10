<?php

/* base.html.twig */
class __TwigTemplate_8c84dcd8b4da94888fd809212db19d6e4d029dedd7d8eac09f8b5e08e011cae9 extends Twig_Template
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
        $__internal_f364c372a48487f132d04dcf000928cb6fc7800730dacffaee8d9b6aaa066368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f364c372a48487f132d04dcf000928cb6fc7800730dacffaee8d9b6aaa066368->enter($__internal_f364c372a48487f132d04dcf000928cb6fc7800730dacffaee8d9b6aaa066368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f364c372a48487f132d04dcf000928cb6fc7800730dacffaee8d9b6aaa066368->leave($__internal_f364c372a48487f132d04dcf000928cb6fc7800730dacffaee8d9b6aaa066368_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a027c4b5dae82b07039ea8f54bcad471c3d53026104b72e84cc689410a94d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a027c4b5dae82b07039ea8f54bcad471c3d53026104b72e84cc689410a94d50->enter($__internal_7a027c4b5dae82b07039ea8f54bcad471c3d53026104b72e84cc689410a94d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_7a027c4b5dae82b07039ea8f54bcad471c3d53026104b72e84cc689410a94d50->leave($__internal_7a027c4b5dae82b07039ea8f54bcad471c3d53026104b72e84cc689410a94d50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7bda3765f61a8c78d913b7f82798d60fdcaeaee57c744ae31838b4b7a39b9ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bda3765f61a8c78d913b7f82798d60fdcaeaee57c744ae31838b4b7a39b9ecb->enter($__internal_7bda3765f61a8c78d913b7f82798d60fdcaeaee57c744ae31838b4b7a39b9ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_7bda3765f61a8c78d913b7f82798d60fdcaeaee57c744ae31838b4b7a39b9ecb->leave($__internal_7bda3765f61a8c78d913b7f82798d60fdcaeaee57c744ae31838b4b7a39b9ecb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e9ebf05031a8cddf1ef7277e565ec4229b35fc1fadf645b342b5aff810e920e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9ebf05031a8cddf1ef7277e565ec4229b35fc1fadf645b342b5aff810e920e->enter($__internal_5e9ebf05031a8cddf1ef7277e565ec4229b35fc1fadf645b342b5aff810e920e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_5e9ebf05031a8cddf1ef7277e565ec4229b35fc1fadf645b342b5aff810e920e->leave($__internal_5e9ebf05031a8cddf1ef7277e565ec4229b35fc1fadf645b342b5aff810e920e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bae494de654402f64e3e9176b4fe87693a6d01aa777b1612fd358db40775771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bae494de654402f64e3e9176b4fe87693a6d01aa777b1612fd358db40775771->enter($__internal_5bae494de654402f64e3e9176b4fe87693a6d01aa777b1612fd358db40775771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_5bae494de654402f64e3e9176b4fe87693a6d01aa777b1612fd358db40775771->leave($__internal_5bae494de654402f64e3e9176b4fe87693a6d01aa777b1612fd358db40775771_prof);

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
", "base.html.twig", "/opt/lampp/htdocs/musee/des/app/Resources/views/base.html.twig");
    }
}
