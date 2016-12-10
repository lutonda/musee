<?php

/* index.html.twig */
class __TwigTemplate_ad3a57e21d43acd85aac5a11c675f84e9f1d61d85cea2e1cc9355cc9cbd4e2f3 extends Twig_Template
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
        $__internal_d2ba867265e0e7e84a509db3146dfb548466b3d62e70912ea55d073b1fb77349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ba867265e0e7e84a509db3146dfb548466b3d62e70912ea55d073b1fb77349->enter($__internal_d2ba867265e0e7e84a509db3146dfb548466b3d62e70912ea55d073b1fb77349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      Inicio - Dashboard
    </title>
    ";
        // line 8
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/font-awesome.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/hightop-font.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/isotope.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/jquery.fancybox.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/fullcalendar.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/wizard.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/select2.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/morris.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/datatables.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/datepicker.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/timepicker.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/colorpicker.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/bootstrap-switch.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/bootstrap-editable.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/daterange-picker.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/typeahead.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/summernote.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/ladda-themeless.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/social-buttons.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/dropzone.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/nestable.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/pygments.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/style.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/main.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/color/green.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"alternate stylesheet\" title=\"green-theme\" type=\"text/css\" />
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/color/orange.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"alternate stylesheet\" title=\"orange-theme\" type=\"text/css\" />
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/color/magenta.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"alternate stylesheet\" title=\"magenta-theme\" type=\"text/css\" />
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/color/gray.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"alternate stylesheet\" title=\"gray-theme\" type=\"text/css\" />
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery-1.10.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery-ui.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/bootstrap.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/raphael.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/selectivizr-min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.mousewheel.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.vmap.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.vmap.world.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.bootstrap.wizard.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/fullcalendar.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/gcal.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.dataTables.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/datatable-editable.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/excanvas.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.isotope.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/isotope_extras.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/modernizr.custom.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/select2.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/styleswitcher.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/wysiwyg.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/typeahead.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/summernote.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.inputmask.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.validate.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/bootstrap-fileupload.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/bootstrap-datepicker.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/bootstrap-timepicker.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/bootstrap-switch.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/typeahead.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/spin.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/ladda.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/moment.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/mockjax.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/bootstrap-editable.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/xeditable-demo-mock.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/xeditable-demo.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/address.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/daterange-picker.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/date.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/morris.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/skycons.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/fitvids.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.sparkline.min.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/dropzone.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.nestable.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/main.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/respond.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
  </head>
  <body class=\"page-header-fixed bg-1\">
    <div class=\"modal-shiftfix\">
      <!-- Navigation -->
      <div class=\"navbar navbar-fixed-top scroll-hide\">
        <div class=\"container-fluid top-bar\">
          <div class=\"pull-right\">
            <ul class=\"nav navbar-nav pull-right\">
              <li class=\"dropdown notifications hidden-xs\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span aria-hidden=\"true\" class=\"hightop-flag\"></span>
                  <div class=\"sr-only\">
                    Notifications
                  </div>
                  <p class=\"counter\">
                    4
                  </p>
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">
                    <div class=\"notifications label label-info\">
                      New
                    </div>
                    <p>
                      New user added: Jane Smith
                    </p></a>
                    
                  </li>
                  <li><a href=\"#\">
                    <div class=\"notifications label label-info\">
                      New
                    </div>
                    <p>
                      Sales targets available
                    </p></a>
                    
                  </li>
                  <li><a href=\"#\">
                    <div class=\"notifications label label-info\">
                      New
                    </div>
                    <p>
                      New performance metric added
                    </p></a>
                    
                  </li>
                  <li><a href=\"#\">
                    <div class=\"notifications label label-info\">
                      New
                    </div>
                    <p>
                      New growth data available
                    </p></a>
                    
                  </li>
                </ul>
              </li>
              <li class=\"dropdown messages hidden-xs\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span aria-hidden=\"true\" class=\"hightop-envelope\"></span>
                  <div class=\"sr-only\">
                    Messages
                  </div>
                  <p class=\"counter\">
                    3
                  </p>
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">
                    <img width=\"34\" height=\"34\" src=\"images/avatar-male2.png\" />Could we meet today? I wanted...</a>
                  </li>
                  <li><a href=\"#\">
                    <img width=\"34\" height=\"34\" src=\"images/avatar-female.png\" />Important data needs your analysis...</a>
                  </li>
                  <li><a href=\"#\">
                    <img width=\"34\" height=\"34\" src=\"images/avatar-male2.png\" />Buy Se7en today, it's a great theme...</a>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown user hidden-xs\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <img width=\"34\" height=\"34\" src=\"images/avatar-male.jpg\" />John Smith<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">
                    <i class=\"fa fa-user\"></i>Minha conta</a>
                  </li>
                  <li><a href=\"#\">
                      <i class=\"fa fa-flag\"></i>Ajuda</a>
                  </li>
                  <li><a href=\"#\">
                      <i class=\"fa fa-question\"></i>Sobre</a>
                  </li>
                  <li><a href=\"#\">
                      <i class=\"fa fa-gear\"></i>Definições</a>
                  </li>
                  <li><a href=\"login1.html\">
                    <i class=\"fa fa-sign-out\"></i>Terminar secção</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <button class=\"navbar-toggle\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button><a class=\"logo\" href=\"/\">MUSEU</a>
        </div>
        <div class=\"container-fluid main-nav clearfix\"  style=\"text-align: left !important;\">
          <div class=\"nav-collapse\" >
            <ul class=\"nav \" style=\"text-align: left !important; \">
              <li class=\"current\" >
                <a href=\"/\"><span aria-hidden=\"true\" class=\"hightop-home\"></span>Inicio</a>
              </li>
              <li><a href=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acervos");
        echo "\">
                <span aria-hidden=\"true\" class=\"hightop-feed\"></span>Acervos</a>
              </li>
              <li><a href=\"";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visitas");
        echo "\">
                  <span aria-hidden=\"true\" class=\"hightop-star\"></span>Visiatas</a>
              </li>
              <li><a href=\"/\">
                  <span aria-hidden=\"true\" class=\"hightop-pages\"></span>Eventos</a>
              </li>
              <li ><a href=\"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilizadores");
        echo "\">
                <span aria-hidden=\"true\" class=\"hightop-forms\"></span>Utilizadores</a>
              </li>
              <li class=\"dropdown\"><a data-toggle=\"dropdown\" href=\"#\">
                <span aria-hidden=\"true\" class=\"hightop-charts\"></span>Estatistica<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <a href=\"form-components.html\">Visitas</a>
                  </li>
                  <li>
                    <a href=\"form-advanced.html\">Acervos</a>
                  </li>
                  <li>
                    <a href=\"xeditable.html\">Eventos</a>
                  </li>
                  <li>
                    <a href=\"file-upload.html\">Utilizadors</a>
                  </li>
                  <li>
                    <a href=\"dropzone-file-upload.html\">Outros</a>
                  </li>
                </ul>
              </li>
              <li><a data-toggle=\"dropdown\" href=\"#\">
                <span aria-hidden=\"true\" class=\"hightop-gear\"></span>Definições</a>
              </li>
            </ul>
          </div>
          <div class=\"widget-content padded\" hidden>
            <p>
              <button class=\"btn btn-default\"><i class=\"fa fa-home\"></i>Home</button>
              <button class=\"btn btn-primary\"><i class=\"fa fa-user\"></i>My Profile</button>
              <button class=\"btn btn-success\"><i class=\"fa fa-cog\"></i>Settings</button>
              <button class=\"btn btn-info\"><i class=\"fa fa-cloud-download\"></i>Download</button>
              <button class=\"btn btn-warning\"><i class=\"fa fa-warning\"></i>Warning</button>
              <button class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i>Delete</button>
            </p>

          </div>

        </div>
      </div>
      <!-- End Navigation -->
      ";
        // line 250
        echo twig_include($this->env, $context, (isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")));
        echo "

    </div>
    <div class=\"style-selector\">
      <div class=\"style-selector-container\">
        <h2>
          Layout Style
        </h2>
        <select name=\"layout\"><option value=\"fluid\">Fluid</option><option value=\"boxed\">Boxed</option></select>
        <h2>
          Navigation Style
        </h2>
        <select name=\"nav\"><option value=\"top\">Top</option><option value=\"left\">Left</option></select>
        <h2>
          Color Options
        </h2>
        <ul class=\"color-options clearfix\">
          <li>
            <a class=\"blue\" href=\"javascript:chooseStyle('none', 30)\"></a>
          </li>
          <li>
            <a class=\"green\" href=\"javascript:chooseStyle('green-theme', 30)\"></a>
          </li>
          <li>
            <a class=\"orange\" href=\"javascript:chooseStyle('orange-theme', 30)\"></a>
          </li>
          <li>
            <a class=\"magenta\" href=\"javascript:chooseStyle('magenta-theme', 30)\"></a>
          </li>
          <li>
            <a class=\"gray\" href=\"javascript:chooseStyle('gray-theme', 30)\"></a>
          </li>
        </ul>
        <h2>
          Background Patterns
        </h2>
        <ul class=\"pattern-options clearfix\">
          <li>
            <a class=\"active\" href=\"#\" id=\"bg-1\"></a>
          </li>
          <li>
            <a href=\"#\" id=\"bg-2\"></a>
          </li>
          <li>
            <a href=\"#\" id=\"bg-3\"></a>
          </li>
          <li>
            <a href=\"#\" id=\"bg-4\"></a>
          </li>
          <li>
            <a href=\"#\" id=\"bg-5\"></a>
          </li>
        </ul>
        <div class=\"style-toggle closed\">
          <span aria-hidden=\"true\" class=\"hightop-gear\"></span>
        </div>
      </div>
    </div>
  </body>
</html>
";
        
        $__internal_d2ba867265e0e7e84a509db3146dfb548466b3d62e70912ea55d073b1fb77349->leave($__internal_d2ba867265e0e7e84a509db3146dfb548466b3d62e70912ea55d073b1fb77349_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 250,  479 => 207,  470 => 201,  464 => 198,  351 => 88,  347 => 87,  343 => 86,  339 => 85,  335 => 84,  331 => 83,  327 => 82,  323 => 81,  319 => 80,  315 => 79,  311 => 78,  307 => 77,  303 => 76,  299 => 75,  295 => 74,  291 => 73,  287 => 72,  283 => 71,  279 => 70,  275 => 69,  271 => 68,  267 => 67,  263 => 66,  259 => 65,  255 => 64,  251 => 63,  247 => 62,  243 => 61,  239 => 60,  235 => 59,  231 => 58,  227 => 57,  223 => 56,  219 => 55,  215 => 54,  211 => 53,  207 => 52,  203 => 51,  199 => 50,  195 => 49,  191 => 48,  187 => 47,  183 => 46,  179 => 45,  175 => 44,  171 => 43,  167 => 42,  163 => 41,  159 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  30 => 8,  22 => 1,);
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
      Inicio - Dashboard
    </title>
    {#<link href=\"http://fonts.googleapis.com/css?family=Lato:100,300,400,700\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />#}
    <link href=\"{{ asset('stylesheets/bootstrap.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/font-awesome.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/hightop-font.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/isotope.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/jquery.fancybox.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/fullcalendar.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/wizard.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/select2.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/morris.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/datatables.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/datepicker.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/timepicker.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/colorpicker.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/bootstrap-switch.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/bootstrap-editable.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/daterange-picker.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/typeahead.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/summernote.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/ladda-themeless.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/social-buttons.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/jquery.fileupload-ui.css') }}\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/dropzone.css') }}\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/nestable.css') }}\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/pygments.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/style.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/main.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/color/green.css') }}\" media=\"all\" rel=\"alternate stylesheet\" title=\"green-theme\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/color/orange.css') }}\" media=\"all\" rel=\"alternate stylesheet\" title=\"orange-theme\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/color/magenta.css') }}\" media=\"all\" rel=\"alternate stylesheet\" title=\"magenta-theme\" type=\"text/css\" />
    <link href=\"{{ asset('stylesheets/color/gray.css') }}\" media=\"all\" rel=\"alternate stylesheet\" title=\"gray-theme\" type=\"text/css\" />
    <script src=\"{{ asset('javascripts/jquery-1.10.2.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery-ui.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/bootstrap.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/raphael.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/selectivizr-min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.mousewheel.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.vmap.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.vmap.sampledata.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.vmap.world.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.bootstrap.wizard.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/fullcalendar.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/gcal.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.dataTables.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/datatable-editable.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.easy-pie-chart.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/excanvas.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.isotope.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/isotope_extras.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/modernizr.custom.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.fancybox.pack.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/select2.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/styleswitcher.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/wysiwyg.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/typeahead.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/summernote.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.inputmask.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.validate.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/bootstrap-fileupload.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/bootstrap-datepicker.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/bootstrap-timepicker.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/bootstrap-colorpicker.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/bootstrap-switch.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/typeahead.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/spin.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/ladda.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/moment.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/mockjax.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/bootstrap-editable.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/xeditable-demo-mock.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/xeditable-demo.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/address.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/daterange-picker.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/date.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/morris.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/skycons.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/fitvids.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.sparkline.min.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/dropzone.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.nestable.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/main.js') }}\"type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/respond.js') }}\"type=\"text/javascript\"></script>
    <meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
  </head>
  <body class=\"page-header-fixed bg-1\">
    <div class=\"modal-shiftfix\">
      <!-- Navigation -->
      <div class=\"navbar navbar-fixed-top scroll-hide\">
        <div class=\"container-fluid top-bar\">
          <div class=\"pull-right\">
            <ul class=\"nav navbar-nav pull-right\">
              <li class=\"dropdown notifications hidden-xs\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span aria-hidden=\"true\" class=\"hightop-flag\"></span>
                  <div class=\"sr-only\">
                    Notifications
                  </div>
                  <p class=\"counter\">
                    4
                  </p>
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">
                    <div class=\"notifications label label-info\">
                      New
                    </div>
                    <p>
                      New user added: Jane Smith
                    </p></a>
                    
                  </li>
                  <li><a href=\"#\">
                    <div class=\"notifications label label-info\">
                      New
                    </div>
                    <p>
                      Sales targets available
                    </p></a>
                    
                  </li>
                  <li><a href=\"#\">
                    <div class=\"notifications label label-info\">
                      New
                    </div>
                    <p>
                      New performance metric added
                    </p></a>
                    
                  </li>
                  <li><a href=\"#\">
                    <div class=\"notifications label label-info\">
                      New
                    </div>
                    <p>
                      New growth data available
                    </p></a>
                    
                  </li>
                </ul>
              </li>
              <li class=\"dropdown messages hidden-xs\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span aria-hidden=\"true\" class=\"hightop-envelope\"></span>
                  <div class=\"sr-only\">
                    Messages
                  </div>
                  <p class=\"counter\">
                    3
                  </p>
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">
                    <img width=\"34\" height=\"34\" src=\"images/avatar-male2.png\" />Could we meet today? I wanted...</a>
                  </li>
                  <li><a href=\"#\">
                    <img width=\"34\" height=\"34\" src=\"images/avatar-female.png\" />Important data needs your analysis...</a>
                  </li>
                  <li><a href=\"#\">
                    <img width=\"34\" height=\"34\" src=\"images/avatar-male2.png\" />Buy Se7en today, it's a great theme...</a>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown user hidden-xs\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <img width=\"34\" height=\"34\" src=\"images/avatar-male.jpg\" />John Smith<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">
                    <i class=\"fa fa-user\"></i>Minha conta</a>
                  </li>
                  <li><a href=\"#\">
                      <i class=\"fa fa-flag\"></i>Ajuda</a>
                  </li>
                  <li><a href=\"#\">
                      <i class=\"fa fa-question\"></i>Sobre</a>
                  </li>
                  <li><a href=\"#\">
                      <i class=\"fa fa-gear\"></i>Definições</a>
                  </li>
                  <li><a href=\"login1.html\">
                    <i class=\"fa fa-sign-out\"></i>Terminar secção</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <button class=\"navbar-toggle\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button><a class=\"logo\" href=\"/\">MUSEU</a>
        </div>
        <div class=\"container-fluid main-nav clearfix\"  style=\"text-align: left !important;\">
          <div class=\"nav-collapse\" >
            <ul class=\"nav \" style=\"text-align: left !important; \">
              <li class=\"current\" >
                <a href=\"/\"><span aria-hidden=\"true\" class=\"hightop-home\"></span>Inicio</a>
              </li>
              <li><a href=\"{{ path('acervos') }}\">
                <span aria-hidden=\"true\" class=\"hightop-feed\"></span>Acervos</a>
              </li>
              <li><a href=\"{{ path('visitas') }}\">
                  <span aria-hidden=\"true\" class=\"hightop-star\"></span>Visiatas</a>
              </li>
              <li><a href=\"/\">
                  <span aria-hidden=\"true\" class=\"hightop-pages\"></span>Eventos</a>
              </li>
              <li ><a href=\"{{ path('utilizadores') }}\">
                <span aria-hidden=\"true\" class=\"hightop-forms\"></span>Utilizadores</a>
              </li>
              <li class=\"dropdown\"><a data-toggle=\"dropdown\" href=\"#\">
                <span aria-hidden=\"true\" class=\"hightop-charts\"></span>Estatistica<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <a href=\"form-components.html\">Visitas</a>
                  </li>
                  <li>
                    <a href=\"form-advanced.html\">Acervos</a>
                  </li>
                  <li>
                    <a href=\"xeditable.html\">Eventos</a>
                  </li>
                  <li>
                    <a href=\"file-upload.html\">Utilizadors</a>
                  </li>
                  <li>
                    <a href=\"dropzone-file-upload.html\">Outros</a>
                  </li>
                </ul>
              </li>
              <li><a data-toggle=\"dropdown\" href=\"#\">
                <span aria-hidden=\"true\" class=\"hightop-gear\"></span>Definições</a>
              </li>
            </ul>
          </div>
          <div class=\"widget-content padded\" hidden>
            <p>
              <button class=\"btn btn-default\"><i class=\"fa fa-home\"></i>Home</button>
              <button class=\"btn btn-primary\"><i class=\"fa fa-user\"></i>My Profile</button>
              <button class=\"btn btn-success\"><i class=\"fa fa-cog\"></i>Settings</button>
              <button class=\"btn btn-info\"><i class=\"fa fa-cloud-download\"></i>Download</button>
              <button class=\"btn btn-warning\"><i class=\"fa fa-warning\"></i>Warning</button>
              <button class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i>Delete</button>
            </p>

          </div>

        </div>
      </div>
      <!-- End Navigation -->
      {{ include(pagina) }}

    </div>
    <div class=\"style-selector\">
      <div class=\"style-selector-container\">
        <h2>
          Layout Style
        </h2>
        <select name=\"layout\"><option value=\"fluid\">Fluid</option><option value=\"boxed\">Boxed</option></select>
        <h2>
          Navigation Style
        </h2>
        <select name=\"nav\"><option value=\"top\">Top</option><option value=\"left\">Left</option></select>
        <h2>
          Color Options
        </h2>
        <ul class=\"color-options clearfix\">
          <li>
            <a class=\"blue\" href=\"javascript:chooseStyle('none', 30)\"></a>
          </li>
          <li>
            <a class=\"green\" href=\"javascript:chooseStyle('green-theme', 30)\"></a>
          </li>
          <li>
            <a class=\"orange\" href=\"javascript:chooseStyle('orange-theme', 30)\"></a>
          </li>
          <li>
            <a class=\"magenta\" href=\"javascript:chooseStyle('magenta-theme', 30)\"></a>
          </li>
          <li>
            <a class=\"gray\" href=\"javascript:chooseStyle('gray-theme', 30)\"></a>
          </li>
        </ul>
        <h2>
          Background Patterns
        </h2>
        <ul class=\"pattern-options clearfix\">
          <li>
            <a class=\"active\" href=\"#\" id=\"bg-1\"></a>
          </li>
          <li>
            <a href=\"#\" id=\"bg-2\"></a>
          </li>
          <li>
            <a href=\"#\" id=\"bg-3\"></a>
          </li>
          <li>
            <a href=\"#\" id=\"bg-4\"></a>
          </li>
          <li>
            <a href=\"#\" id=\"bg-5\"></a>
          </li>
        </ul>
        <div class=\"style-toggle closed\">
          <span aria-hidden=\"true\" class=\"hightop-gear\"></span>
        </div>
      </div>
    </div>
  </body>
</html>
", "index.html.twig", "/opt/lampp/htdocs/musee/des/app/Resources/views/index.html.twig");
    }
}
