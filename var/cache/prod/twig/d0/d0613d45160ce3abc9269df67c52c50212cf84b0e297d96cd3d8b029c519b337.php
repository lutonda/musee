<?php

/* template/404-page.html */
class __TwigTemplate_04a33fa1cb4a413ed3c3fa5f131c0eb7c3aad3a70e103175f747ab26e51a8530 extends Twig_Template
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
    <link href=\"http://fonts.googleapis.com/css?family=Lato:100,300,400,700\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/bootstrap.min.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/font-awesome.min.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/hightop-font.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/style.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><script src=\"http://code.jquery.com/jquery-1.10.2.min.js\" type=\"text/javascript\"></script><script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/modernizr.custom.js\" type=\"text/javascript\"></script><script src=\"javascripts/main.js\" type=\"text/javascript\"></script><script src=\"javascripts/application.js\" type=\"text/javascript\"></script>
    <meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
  </head>
  <body class=\"fourofour\">
    <!-- Login Screen -->
    <div class=\"fourofour-container\">
      <h1>
        404
      </h1>
      <h2>
        It looks like you're lost.
      </h2>
      <a class=\"btn btn-lg btn-default-outline\" href=\"index.html\"><i class=\"fa fa-home\"></i>Go to the homepage</a>
    </div>
    <!-- End Login Screen -->
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "template/404-page.html";
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
        return new Twig_Source("", "template/404-page.html", "/opt/lampp/htdocs/musee/des/app/Resources/views/template/404-page.html");
    }
}
