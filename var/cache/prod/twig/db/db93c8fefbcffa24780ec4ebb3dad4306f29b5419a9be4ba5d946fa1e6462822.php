<?php

/* template/signup1.html */
class __TwigTemplate_75756a8abe90ec0b19ee04e31ce65acf2a0fee31aea2fc3439f0f7f318695bee extends Twig_Template
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
    <link href=\"http://fonts.googleapis.com/css?family=Lato:100,300,400,700\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/bootstrap.min.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/font-awesome.min.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/hightop-font.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/style.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><script src=\"http://code.jquery.com/jquery-1.10.2.min.js\" type=\"text/javascript\"></script><script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/raphael.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.mousewheel.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.vmap.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.vmap.sampledata.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.vmap.world.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.bootstrap.wizard.js\" type=\"text/javascript\"></script><script src=\"javascripts/fullcalendar.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/gcal.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.dataTables.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/datatable-editable.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.easy-pie-chart.js\" type=\"text/javascript\"></script><script src=\"javascripts/excanvas.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.isotope.min.js\" type=\"text/javascript\"></script><script src=\"http://www.andrewreifman.com/se7en/javascripts/masonry.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/modernizr.custom.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.fancybox.pack.js\" type=\"text/javascript\"></script><script src=\"javascripts/select2.js\" type=\"text/javascript\"></script><script src=\"javascripts/styleswitcher.js\" type=\"text/javascript\"></script><script src=\"javascripts/wysiwyg.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.inputmask.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.validate.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap-fileupload.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap-datepicker.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap-timepicker.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap-colorpicker.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap-switch.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/daterange-picker.js\" type=\"text/javascript\"></script><script src=\"javascripts/date.js\" type=\"text/javascript\"></script><script src=\"javascripts/morris.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/skycons.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.sparkline.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/main.js\" type=\"text/javascript\"></script><script src=\"javascripts/respond.js\" type=\"text/javascript\"></script>
    <meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
  </head>
  <body class=\"login1 signup\">
    <!-- Login Screen -->
    <div class=\"login-wrapper\">
      <div class=\"login-container\">
        <h1>
          <a href=\"index.html\">HIGHTOP</a>
        </h1>
        <form action=\"index.html\">
          <div class=\"form-group\">
            <input class=\"form-control\" type=\"text\" value=\"Enter your email address\">
          </div>
          <div class=\"form-group\">
            <input class=\"form-control\" type=\"text\" value=\"Select a password\">
          </div>
          <div class=\"form-group\">
            <input class=\"form-control\" type=\"text\" value=\"Repeat your password\"><input type=\"submit\" value=\"&#xf054;\">
          </div>
          <div class=\"form-options\">
            <label class=\"checkbox\"><input type=\"checkbox\"><span>I agree to the terms and conditions.</span></label>
          </div>
        </form>
        <div class=\"social-login clearfix\">
          <a class=\"btn btn-primary pull-left facebook\" href=\"index.html\"><i class=\"fa fa-facebook\"></i>Facebook login</a><a class=\"btn btn-primary pull-right twitter\" href=\"index.html\"><i class=\"fa fa-twitter\"></i>Twitter login</a>
        </div>
        <p class=\"signup\">
          Already have an account?<a href=\"login1.html\">Log in now</a>
        </p>
      </div>
    </div>
    <!-- End Login Screen -->
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "template/signup1.html";
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
        return new Twig_Source("", "template/signup1.html", "/opt/lampp/htdocs/musee/des/app/Resources/views/template/signup1.html");
    }
}
