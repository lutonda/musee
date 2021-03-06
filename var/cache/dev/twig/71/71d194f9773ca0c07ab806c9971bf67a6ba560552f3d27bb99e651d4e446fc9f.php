<?php

/* usuario/new.html.twig */
class __TwigTemplate_798f7f575e98875f7db44357220ceb1304d899f8822b58702ce792a7b55b332d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4777d8feb2a7d43df11193675859d87d34270c03a9daf94d477c917f2a36b6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4777d8feb2a7d43df11193675859d87d34270c03a9daf94d477c917f2a36b6c5->enter($__internal_4777d8feb2a7d43df11193675859d87d34270c03a9daf94d477c917f2a36b6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4777d8feb2a7d43df11193675859d87d34270c03a9daf94d477c917f2a36b6c5->leave($__internal_4777d8feb2a7d43df11193675859d87d34270c03a9daf94d477c917f2a36b6c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f5d23cbb0794b7a47eb0dd814f72bb8502c39c83438aa3b03c02cf76ad6566e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5d23cbb0794b7a47eb0dd814f72bb8502c39c83438aa3b03c02cf76ad6566e->enter($__internal_6f5d23cbb0794b7a47eb0dd814f72bb8502c39c83438aa3b03c02cf76ad6566e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usuario/new.html.twig"));

        // line 4
        echo "
    <div class=\"page-title\">
        <h1>
            Cadastrar Utilizador
        </h1>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"widget-container\">
                <div class=\"heading\">
                    <i class=\"fa fa-shield\"></i>Form Validation
                </div>
                <div class=\"widget-content padded\">
                    <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_save");
        echo " \" id=\"validate-form\" method=\"POST\" novalidate=\"novalidate\">
                        <fieldset>
                            <div class=\"row\">

                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"firstname\">Primeiro Nome</label><input class=\"form-control\" id=\"firstname\" name=\"firstname\" type=\"text\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"username\">Username</label><input class=\"form-control\" id=\"username\" name=\"username\" type=\"text\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\">Palavra Passe</label><input class=\"form-control\" id=\"password\" name=\"password\" type=\"password\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"lastname\">Ultimo Nome</label><input class=\"form-control\" id=\"lastname\" name=\"lastname\" type=\"text\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"email\">E-mail</label><input class=\"form-control\" id=\"email\" name=\"email\" type=\"email\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"confirm_password\">Confirme a Palavra Passe</label><input class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" type=\"password\">
                                    </div>
                                </div>
                            </div>
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"Submeter\">
                            <input class=\"btn btn-danger\" type=\"reset\" value=\"Reiniciar\">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f5d23cbb0794b7a47eb0dd814f72bb8502c39c83438aa3b03c02cf76ad6566e->leave($__internal_6f5d23cbb0794b7a47eb0dd814f72bb8502c39c83438aa3b03c02cf76ad6566e_prof);

    }

    public function getTemplateName()
    {
        return "usuario/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"page-title\">
        <h1>
            Cadastrar Utilizador
        </h1>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"widget-container\">
                <div class=\"heading\">
                    <i class=\"fa fa-shield\"></i>Form Validation
                </div>
                <div class=\"widget-content padded\">
                    <form action=\"{{ path('usuario_save') }} \" id=\"validate-form\" method=\"POST\" novalidate=\"novalidate\">
                        <fieldset>
                            <div class=\"row\">

                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"firstname\">Primeiro Nome</label><input class=\"form-control\" id=\"firstname\" name=\"firstname\" type=\"text\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"username\">Username</label><input class=\"form-control\" id=\"username\" name=\"username\" type=\"text\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\">Palavra Passe</label><input class=\"form-control\" id=\"password\" name=\"password\" type=\"password\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"lastname\">Ultimo Nome</label><input class=\"form-control\" id=\"lastname\" name=\"lastname\" type=\"text\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"email\">E-mail</label><input class=\"form-control\" id=\"email\" name=\"email\" type=\"email\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"confirm_password\">Confirme a Palavra Passe</label><input class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" type=\"password\">
                                    </div>
                                </div>
                            </div>
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"Submeter\">
                            <input class=\"btn btn-danger\" type=\"reset\" value=\"Reiniciar\">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "usuario/new.html.twig", "/var/www/html/musee/des/app/Resources/views/usuario/new.html.twig");
    }
}
