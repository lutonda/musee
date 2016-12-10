<?php

/* template/login2.html */
class __TwigTemplate_174f72a4a7d45512095e5108ff9d4d8635ece894fbbb3b029c07a8406cdb8b0f extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      hightop - Dashboard
    </title>
    <link href=\"http://fonts.googleapis.com/css?family=Lato:100,300,400,700\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/bootstrap.min.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/font-awesome.min.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/hightop-font.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/style.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><script src=\"http://code.jquery.com/jquery-1.10.2.min.js\" type=\"text/javascript\"></script><script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/modernizr.custom.js\" type=\"text/javascript\"></script><script src=\"javascripts/main.js\" type=\"text/javascript\"></script>
    <meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
  </head>
  <body class=\"login2\">
    <!-- Login Screen -->
    <div class=\"login-wrapper\">
      <h1>
        <a href=\"index.html\">HIGHTOP</a>
      </h1>
      <form action=\"index.html\">
        <div class=\"form-group\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span><input class=\"form-control\" placeholder=\"Username or Email\" type=\"text\">
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span><input class=\"form-control\" placeholder=\"Password\" type=\"text\">
          </div>
        </div>
        <a class=\"pull-right\" href=\"login2.html#\">Forgot password?</a>
        <div class=\"text-left\">
          <label class=\"checkbox\"><input type=\"checkbox\"><span>Keep me logged in</span></label>
        </div>
        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"Log in\">
        <div class=\"social-login clearfix\">
          <a class=\"btn btn-primary pull-left facebook\" href=\"index.html\"><i class=\"fa fa-facebook\"></i>Login with facebook</a><a class=\"btn btn-primary pull-right twitter\" href=\"index.html\"><i class=\"fa fa-twitter\"></i>Login with twitter</a>
        </div>
      </form>
      <p>
        Don't have an account yet?
      </p>
      <a class=\"btn btn-default-outline btn-block\" href=\"signup2.html\">Sign up now</a>
    </div>
    <!-- End Login Screen -->
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "template/login2.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template/login2.html", "/opt/lampp/htdocs/musee/des/app/Resources/views/template/login2.html");
    }
}
