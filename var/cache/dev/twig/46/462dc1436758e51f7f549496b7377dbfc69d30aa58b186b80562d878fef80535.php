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
        $__internal_670cd5d747d4ec8d0e736500d9b3cd940881242d90cd1dd9252b24e2d70cc144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670cd5d747d4ec8d0e736500d9b3cd940881242d90cd1dd9252b24e2d70cc144->enter($__internal_670cd5d747d4ec8d0e736500d9b3cd940881242d90cd1dd9252b24e2d70cc144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_670cd5d747d4ec8d0e736500d9b3cd940881242d90cd1dd9252b24e2d70cc144->leave($__internal_670cd5d747d4ec8d0e736500d9b3cd940881242d90cd1dd9252b24e2d70cc144_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_648db92003169630bc31cdc13e7f69023861ce898fb5a7d33fc4006f985607d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648db92003169630bc31cdc13e7f69023861ce898fb5a7d33fc4006f985607d0->enter($__internal_648db92003169630bc31cdc13e7f69023861ce898fb5a7d33fc4006f985607d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_648db92003169630bc31cdc13e7f69023861ce898fb5a7d33fc4006f985607d0->leave($__internal_648db92003169630bc31cdc13e7f69023861ce898fb5a7d33fc4006f985607d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f76b47c4c8c9d47e587cd80cad7721ebdb3189aa73e1c22015774cc557ddec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f76b47c4c8c9d47e587cd80cad7721ebdb3189aa73e1c22015774cc557ddec3->enter($__internal_3f76b47c4c8c9d47e587cd80cad7721ebdb3189aa73e1c22015774cc557ddec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3f76b47c4c8c9d47e587cd80cad7721ebdb3189aa73e1c22015774cc557ddec3->leave($__internal_3f76b47c4c8c9d47e587cd80cad7721ebdb3189aa73e1c22015774cc557ddec3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d5f0b7abdf26e61722d85498a0a1aeb17335f120637ab338ba49038a74f996b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5f0b7abdf26e61722d85498a0a1aeb17335f120637ab338ba49038a74f996b->enter($__internal_3d5f0b7abdf26e61722d85498a0a1aeb17335f120637ab338ba49038a74f996b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3d5f0b7abdf26e61722d85498a0a1aeb17335f120637ab338ba49038a74f996b->leave($__internal_3d5f0b7abdf26e61722d85498a0a1aeb17335f120637ab338ba49038a74f996b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa3d0d79a72eb54b525d7bfc0832a95ceadb3c0f22f8982ae59612f4c8576a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3d0d79a72eb54b525d7bfc0832a95ceadb3c0f22f8982ae59612f4c8576a11->enter($__internal_aa3d0d79a72eb54b525d7bfc0832a95ceadb3c0f22f8982ae59612f4c8576a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_aa3d0d79a72eb54b525d7bfc0832a95ceadb3c0f22f8982ae59612f4c8576a11->leave($__internal_aa3d0d79a72eb54b525d7bfc0832a95ceadb3c0f22f8982ae59612f4c8576a11_prof);

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
