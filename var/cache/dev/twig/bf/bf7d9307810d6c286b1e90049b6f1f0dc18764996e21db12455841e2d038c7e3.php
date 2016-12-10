<?php

/* login.html.twig */
class __TwigTemplate_f8a9bb372ba6695b2800c59d81a61a7c6b2283bb1f0e16accd3189539d730e69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7919aebb71e25c19cd57074a20459faea1e593d8845bff57b788d688faabc359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7919aebb71e25c19cd57074a20459faea1e593d8845bff57b788d688faabc359->enter($__internal_7919aebb71e25c19cd57074a20459faea1e593d8845bff57b788d688faabc359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      Login - Dashboard
    </title>
    \t<link href=\"http://fonts.googleapis.com/css?family=Lato:100,300,400,700\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/font-awesome.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/hightop-font.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/style.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<script src=\"http://code.jquery.com/jquery-1.10.2.min.js\" type=\"text/javascript\"></script>
\t<script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/main.js"), "html", null, true);
        echo "'\" type=\"text/javascript\"></script>
    <meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
  </head>
  <body class=\"login2\">
    <!-- Login Screen -->
    <div class=\"login-wrapper\">
      <h1>
        <a href=\"index.html\">Entrar</a>
      </h1>
        ";
        // line 25
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 26
            echo "            <span class=\"badge badge-negative\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo " <i class=\"ficon-down-dir f-16\"></i></span>
        ";
        }
        // line 28
        echo "      <form method=\"POST\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" name=\"login_form\">
        <div class=\"form-group\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
                <i class=\"fa fa-envelope\"></i></span><input class=\"form-control\" placeholder=\"Username or Email\" type=\"text\" name=\"username\">
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
                <i class=\"fa fa-lock\"></i></span><input class=\"form-control\" placeholder=\"Password\" type=\"text\" name=\"password\">
          </div>
        </div>
        <a class=\"pull-right\" href=\"login2.html#\">Forgot password?</a>
        <div class=\"text-left\">
          <label class=\"checkbox\"><input type=\"checkbox\"><span>Keep me logged in</span></label>
        </div>
        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"Log in\">

      </form>
    </div>
    <!-- End Login Screen -->
  </body>
</html>
";
        
        $__internal_7919aebb71e25c19cd57074a20459faea1e593d8845bff57b788d688faabc359->leave($__internal_7919aebb71e25c19cd57074a20459faea1e593d8845bff57b788d688faabc359_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  71 => 26,  69 => 25,  57 => 16,  53 => 15,  49 => 14,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
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
    <title>
      Login - Dashboard
    </title>
    \t<link href=\"http://fonts.googleapis.com/css?family=Lato:100,300,400,700\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('stylesheets/bootstrap.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('stylesheets/font-awesome.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('stylesheets/hightop-font.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('stylesheets/style.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<script src=\"http://code.jquery.com/jquery-1.10.2.min.js\" type=\"text/javascript\"></script>
\t<script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('javascripts/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('javascripts/modernizr.custom.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('javascripts/main.js') }}'\" type=\"text/javascript\"></script>
    <meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
  </head>
  <body class=\"login2\">
    <!-- Login Screen -->
    <div class=\"login-wrapper\">
      <h1>
        <a href=\"index.html\">Entrar</a>
      </h1>
        {% if error %}
            <span class=\"badge badge-negative\"> {{ error.message }} <i class=\"ficon-down-dir f-16\"></i></span>
        {% endif %}
      <form method=\"POST\" action=\"{{ path('login_check') }}\" name=\"login_form\">
        <div class=\"form-group\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
                <i class=\"fa fa-envelope\"></i></span><input class=\"form-control\" placeholder=\"Username or Email\" type=\"text\" name=\"username\">
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
                <i class=\"fa fa-lock\"></i></span><input class=\"form-control\" placeholder=\"Password\" type=\"text\" name=\"password\">
          </div>
        </div>
        <a class=\"pull-right\" href=\"login2.html#\">Forgot password?</a>
        <div class=\"text-left\">
          <label class=\"checkbox\"><input type=\"checkbox\"><span>Keep me logged in</span></label>
        </div>
        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"Log in\">

      </form>
    </div>
    <!-- End Login Screen -->
  </body>
</html>
", "login.html.twig", "/var/www/html/musee/des/app/Resources/views/login.html.twig");
    }
}
