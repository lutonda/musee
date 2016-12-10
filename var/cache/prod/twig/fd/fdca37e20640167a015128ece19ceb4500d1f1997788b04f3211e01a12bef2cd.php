<?php

/* ::index.html.twig */
class __TwigTemplate_b2b6090774eb8220372b335fd256508d91cbb298b6e8cf305383a65b5b9153ff extends Twig_Template
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
          <div class=\"widget-content padded\">
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
        echo twig_include($this->env, $context, (isset($context["pagina"]) ? $context["pagina"] : null));
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
    }

    public function getTemplateName()
    {
        return "::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 250,  476 => 207,  467 => 201,  461 => 198,  348 => 88,  344 => 87,  340 => 86,  336 => 85,  332 => 84,  328 => 83,  324 => 82,  320 => 81,  316 => 80,  312 => 79,  308 => 78,  304 => 77,  300 => 76,  296 => 75,  292 => 74,  288 => 73,  284 => 72,  280 => 71,  276 => 70,  272 => 69,  268 => 68,  264 => 67,  260 => 66,  256 => 65,  252 => 64,  248 => 63,  244 => 62,  240 => 61,  236 => 60,  232 => 59,  228 => 58,  224 => 57,  220 => 56,  216 => 55,  212 => 54,  208 => 53,  204 => 52,  200 => 51,  196 => 50,  192 => 49,  188 => 48,  184 => 47,  180 => 46,  176 => 45,  172 => 44,  168 => 43,  164 => 42,  160 => 41,  156 => 40,  152 => 39,  148 => 38,  144 => 37,  140 => 36,  136 => 35,  132 => 34,  128 => 33,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  27 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::index.html.twig", "/opt/lampp/htdocs/musee/des/app/Resources/views/index.html.twig");
    }
}
