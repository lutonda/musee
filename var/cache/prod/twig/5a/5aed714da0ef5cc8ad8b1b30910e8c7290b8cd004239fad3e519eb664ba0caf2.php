<?php

/* template_seven/widgets.html */
class __TwigTemplate_1d6e26af92758fd9628e8f0c1ab1574ae577a9c4765f244bbf82f0ef3bfcbe42 extends Twig_Template
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
    <link href=\"http://fonts.googleapis.com/css?family=Lato:100,300,400,700\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/bootstrap.min.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/font-awesome.min.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/hightop-font.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/isotope.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/jquery.fancybox.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/fullcalendar.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/wizard.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/select2.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/morris.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/datatables.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/datepicker.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/timepicker.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/colorpicker.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/bootstrap-switch.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/bootstrap-editable.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/daterange-picker.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/typeahead.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/summernote.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/ladda-themeless.min.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/social-buttons.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/jquery.fileupload-ui.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/dropzone.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/nestable.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/pygments.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/style.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"stylesheets/color/green.css\" media=\"all\" rel=\"alternate stylesheet\" title=\"green-theme\" type=\"text/css\" /><link href=\"stylesheets/color/orange.css\" media=\"all\" rel=\"alternate stylesheet\" title=\"orange-theme\" type=\"text/css\" /><link href=\"stylesheets/color/magenta.css\" media=\"all\" rel=\"alternate stylesheet\" title=\"magenta-theme\" type=\"text/css\" /><link href=\"stylesheets/color/gray.css\" media=\"all\" rel=\"alternate stylesheet\" title=\"gray-theme\" type=\"text/css\" /><script src=\"http://code.jquery.com/jquery-1.10.2.min.js\" type=\"text/javascript\"></script><script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/raphael.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/selectivizr-min.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.mousewheel.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.vmap.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.vmap.sampledata.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.vmap.world.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.bootstrap.wizard.js\" type=\"text/javascript\"></script><script src=\"javascripts/fullcalendar.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/gcal.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.dataTables.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/datatable-editable.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.easy-pie-chart.js\" type=\"text/javascript\"></script><script src=\"javascripts/excanvas.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.isotope.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/isotope_extras.js\" type=\"text/javascript\"></script><script src=\"javascripts/modernizr.custom.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.fancybox.pack.js\" type=\"text/javascript\"></script><script src=\"javascripts/select2.js\" type=\"text/javascript\"></script><script src=\"javascripts/styleswitcher.js\" type=\"text/javascript\"></script><script src=\"javascripts/wysiwyg.js\" type=\"text/javascript\"></script><script src=\"javascripts/typeahead.js\" type=\"text/javascript\"></script><script src=\"javascripts/summernote.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.inputmask.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.validate.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap-fileupload.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap-datepicker.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap-timepicker.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap-colorpicker.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap-switch.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/typeahead.js\" type=\"text/javascript\"></script><script src=\"javascripts/spin.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/ladda.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/moment.js\" type=\"text/javascript\"></script><script src=\"javascripts/mockjax.js\" type=\"text/javascript\"></script><script src=\"javascripts/bootstrap-editable.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/xeditable-demo-mock.js\" type=\"text/javascript\"></script><script src=\"javascripts/xeditable-demo.js\" type=\"text/javascript\"></script><script src=\"javascripts/address.js\" type=\"text/javascript\"></script><script src=\"javascripts/daterange-picker.js\" type=\"text/javascript\"></script><script src=\"javascripts/date.js\" type=\"text/javascript\"></script><script src=\"javascripts/morris.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/skycons.js\" type=\"text/javascript\"></script><script src=\"javascripts/fitvids.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.sparkline.min.js\" type=\"text/javascript\"></script><script src=\"javascripts/dropzone.js\" type=\"text/javascript\"></script><script src=\"javascripts/jquery.nestable.js\" type=\"text/javascript\"></script><script src=\"javascripts/main.js\" type=\"text/javascript\"></script><script src=\"javascripts/respond.js\" type=\"text/javascript\"></script>
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
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"widgets.html#\"><span aria-hidden=\"true\" class=\"hightop-flag\"></span>
                  <div class=\"sr-only\">
                    Notifications
                  </div>
                  <p class=\"counter\">
                    4
                  </p>
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"widgets.html#\">
                    <div class=\"notifications label label-info\">
                      New
                    </div>
                    <p>
                      New user added: Jane Smith
                    </p></a>
                    
                  </li>
                  <li><a href=\"widgets.html#\">
                    <div class=\"notifications label label-info\">
                      New
                    </div>
                    <p>
                      Sales targets available
                    </p></a>
                    
                  </li>
                  <li><a href=\"widgets.html#\">
                    <div class=\"notifications label label-info\">
                      New
                    </div>
                    <p>
                      New performance metric added
                    </p></a>
                    
                  </li>
                  <li><a href=\"widgets.html#\">
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
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"widgets.html#\"><span aria-hidden=\"true\" class=\"hightop-envelope\"></span>
                  <div class=\"sr-only\">
                    Messages
                  </div>
                  <p class=\"counter\">
                    3
                  </p>
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"widgets.html#\">
                    <img width=\"34\" height=\"34\" src=\"images/avatar-male2.png\" />Could we meet today? I wanted...</a>
                  </li>
                  <li><a href=\"widgets.html#\">
                    <img width=\"34\" height=\"34\" src=\"images/avatar-female.png\" />Important data needs your analysis...</a>
                  </li>
                  <li><a href=\"widgets.html#\">
                    <img width=\"34\" height=\"34\" src=\"images/avatar-male2.png\" />Buy Se7en today, it's a great theme...</a>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown user hidden-xs\"><a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"widgets.html#\">
                <img width=\"34\" height=\"34\" src=\"images/avatar-male.jpg\" />John Smith<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"widgets.html#\">
                    <i class=\"fa fa-user\"></i>My Account</a>
                  </li>
                  <li><a href=\"widgets.html#\">
                    <i class=\"fa fa-gear\"></i>Account Settings</a>
                  </li>
                  <li><a href=\"login1.html\">
                    <i class=\"fa fa-sign-out\"></i>Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <button class=\"navbar-toggle\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button><a class=\"logo\" href=\"index.html\">Hightop</a>
          <form class=\"navbar-form form-inline col-lg-2 hidden-xs\">
            <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
          </form>
        </div>
        <div class=\"container-fluid main-nav clearfix\">
          <div class=\"nav-collapse\">
            <ul class=\"nav\">
              <li>
                <a href=\"index.html\"><span aria-hidden=\"true\" class=\"hightop-home\"></span>Dashboard</a>
              </li>
              <li><a href=\"social.html\">
                <span aria-hidden=\"true\" class=\"hightop-feed\"></span>Social Feed</a>
              </li>
              <li class=\"dropdown\"><a data-toggle=\"dropdown\" class=\"current\" href=\"widgets.html#\">
                <span aria-hidden=\"true\" class=\"hightop-star\"></span>UI Features<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <a href=\"buttons.html\">Buttons</a>
                  </li>
                  <li>
                    <a href=\"fontawesome.html\">Font Awesome Icons</a>
                  </li>
                  <li>
                    <a href=\"glyphicons.html\">Glyphicons</a>
                  </li>
                  <li>
                    <a href=\"components.html\">Components</a>
                  </li>
                  <li>
                    <a class=\"current\" href=\"widgets.html\">Widgets</a>
                  </li>
                  <li>
                    <a href=\"nestable-lists.html\">Nestable Lists</a>
                  </li>
                  <li>
                    <a href=\"typo.html\">Typography</a>
                  </li>
                  <li>
                    <a href=\"grid.html\">Grid Layout</a>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown\"><a data-toggle=\"dropdown\" href=\"widgets.html#\">
                <span aria-hidden=\"true\" class=\"hightop-forms\"></span>Forms<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <a href=\"form-components.html\">Form Components</a>
                  </li>
                  <li>
                    <a href=\"form-advanced.html\">Advanced Forms</a>
                  </li>
                  <li>
                    <a href=\"xeditable.html\">X-Editable</a>
                  </li>
                  <li>
                    <a href=\"file-upload.html\">Multiple File Upload</a>
                  </li>
                  <li>
                    <a href=\"dropzone-file-upload.html\">Dropzone File Upload</a>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown\"><a data-toggle=\"dropdown\" href=\"widgets.html#\">
                <span aria-hidden=\"true\" class=\"hightop-tables\"></span>Tables<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <a href=\"tables.html\">Basic tables</a>
                  </li>
                  <li>
                    <a href=\"datatables.html\">DataTables</a>
                  </li>
                  <li>
                    <a href=\"datatables-editable.html\">Editable DataTables</a>
                  </li>
                </ul>
              </li>
              <li><a href=\"charts.html\">
                <span aria-hidden=\"true\" class=\"hightop-charts\"></span>Charts</a>
              </li>
              <li class=\"dropdown\"><a data-toggle=\"dropdown\" href=\"widgets.html#\">
                <span aria-hidden=\"true\" class=\"hightop-pages\"></span>Pages<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <a href=\"chat.html\">Chat</a>
                  </li>
                  <li>
                    <a href=\"calendar.html\">Calendar</a>
                  </li>
                  <li>
                    <a href=\"timeline.html\">Timeline</a>
                  </li>
                  <li>
                    <a href=\"login1.html\">Login 1</a>
                  </li>
                  <li>
                    <a href=\"login2.html\">Login 2</a>
                  </li>
                  <li>
                    <a href=\"messages.html\">Messages/Inbox</a>
                  </li>
                  <li>
                    <a href=\"pricing.html\">Pricing Tables</a>
                  </li>
                  <li>
                    <a href=\"signup1.html\">Sign Up 1</a>
                  </li>
                  <li>
                    <a href=\"signup2.html\">Sign Up 2</a>
                  </li>
                  <li>
                    <a href=\"invoice.html\">Invoice</a>
                  </li>
                  <li>
                    <a href=\"faq.html\">FAQ</a>
                  </li>
                  <li>
                    <a href=\"filters.html\">Filter Results</a>
                  </li>
                  <li>
                    <a href=\"404-page.html\">404 Page</a>
                  </li>
                  <li>
                    <a href=\"500-page.html\">500 Error</a>
                  </li>
                </ul>
              </li>
              <li><a href=\"gallery.html\">
                <span aria-hidden=\"true\" class=\"hightop-gallery\"></span>Gallery</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Navigation -->
      <div class=\"container-fluid main-content\">
        <div class=\"page-title\">
          <h1>
            Widgets
          </h1>
        </div>
        <div class=\"row\">
          <!-- Weather -->
          <div class=\"col-lg-12\">
            <div class=\"widget-container weather\">
              <div class=\"widget-content padded\">
                <div class=\"row text-center\">
                  <div class=\"col-sm-2 col-xs-4\">
                    <p>
                      MON
                    </p>
                    <canvas class=\"skycons-element\" data-skycons=\"RAIN\" height=\"60\" id=\"clear-day\" width=\"60\"></canvas>
                    <div class=\"number\">
                      86<small>&deg;</small>
                    </div>
                  </div>
                  <div class=\"col-sm-2 col-xs-4\">
                    <p>
                      TUE
                    </p>
                    <canvas class=\"skycons-element\" data-skycons=\"CLOUDY\" height=\"60\" id=\"cloudy\" width=\"60\"></canvas>
                    <div class=\"number\">
                      75<small>&deg;</small>
                    </div>
                  </div>
                  <div class=\"col-sm-2 col-xs-4\">
                    <p>
                      WED
                    </p>
                    <canvas class=\"skycons-element\" data-skycons=\"PARTLY_CLOUDY_DAY\" height=\"60\" id=\"partly-cloudy-day\" width=\"60\"></canvas>
                    <div class=\"number\">
                      82<small>&deg;</small>
                    </div>
                  </div>
                  <div class=\"col-sm-2 hidden-xs\">
                    <p>
                      THU
                    </p>
                    <canvas class=\"skycons-element\" data-skycons=\"SNOW\" height=\"60\" id=\"snow\" width=\"60\"></canvas>
                    <div class=\"number\">
                      64<small>&deg;</small>
                    </div>
                  </div>
                  <div class=\"col-sm-2 hidden-xs\">
                    <p>
                      FRI
                    </p>
                    <canvas class=\"skycons-element\" data-skycons=\"WIND\" height=\"60\" id=\"wind\" width=\"60\"></canvas>
                    <div class=\"number\">
                      57<small>&deg;</small>
                    </div>
                  </div>
                  <div class=\"col-sm-2 hidden-xs\">
                    <p>
                      SAT
                    </p>
                    <canvas class=\"skycons-element\" data-skycons=\"SNOW\" height=\"60\" id=\"snow2\" width=\"60\"></canvas>
                    <div class=\"number\">
                      32<small>&deg;</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <!-- Task List -->
          <div class=\"col-lg-6\">
            <div class=\"widget-container scrollable list task-widget\">
              <div class=\"heading\">
                <i class=\"fa fa-list\"></i>Task list<i class=\"fa fa-plus pull-right\"></i>
              </div>
              <div class=\"widget-content\">
                <ul>
                  <li>
                    <label><input checked=\"checked\" class=\"task-input\" type=\"checkbox\"><span></span>
                      <div class=\"label label-success pull-right\">
                        Approved
                      </div>
                      Distribute latest marketing</label>
                  </li>
                  <li>
                    <label><input class=\"task-input\" type=\"checkbox\"><span></span>
                      <div class=\"label label-success pull-right\">
                        Approved
                      </div>
                      Create the latest mockup</label>
                  </li>
                  <li>
                    <label><input class=\"task-input\" type=\"checkbox\"><span></span>
                      <div class=\"label label-warning pull-right\">
                        Pending
                      </div>
                      Code the latest features</label>
                  </li>
                  <li>
                    <label><input checked=\"checked\" class=\"task-input\" type=\"checkbox\"><span></span>
                      <div class=\"label label-danger pull-right\">
                        Rejected
                      </div>
                      Coffee time</label>
                  </li>
                  <li>
                    <label><input checked=\"checked\" class=\"task-input\" type=\"checkbox\"><span></span>
                      <div class=\"label label-success pull-right\">
                        Approved
                      </div>
                      Distribute latest marketing</label>
                  </li>
                  <li>
                    <label><input class=\"task-input\" type=\"checkbox\"><span></span>
                      <div class=\"label label-success pull-right\">
                        Approved
                      </div>
                      Pick up lunch</label>
                  </li>
                  <li>
                    <label><input class=\"task-input\" type=\"checkbox\"><span></span>
                      <div class=\"label label-danger pull-right\">
                        Rejected
                      </div>
                      Send out e-blast</label>
                  </li>
                  <li>
                    <label><input class=\"task-input\" type=\"checkbox\"><span></span>
                      <div class=\"label label-warning pull-right\">
                        Pending
                      </div>
                      Ask for a raise</label>
                  </li>
                  <li>
                    <label><input class=\"task-input\" type=\"checkbox\"><span></span>
                      <div class=\"label label-warning pull-right\">
                        Pending
                      </div>
                      Coffe time pt. 2</label>
                  </li>
                  <li>
                    <label><input class=\"task-input\" type=\"checkbox\"><span></span>
                      <div class=\"label label-success pull-right\">
                        Approved
                      </div>
                      Bug fixes</label>
                  </li>
                  <li>
                    <label><input class=\"task-input\" type=\"checkbox\"><span></span>
                      <div class=\"label label-success pull-right\">
                        Approved
                      </div>
                      Happy hour!!!</label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End Task List --><!-- Ratings -->
          <div class=\"col-lg-6\">
            <div class=\"widget-container scrollable list rating-widget\">
              <div class=\"heading\">
                <i class=\"fa fa-comment\"></i>Recent Ratings<i class=\"fa fa-refresh pull-right\"></i>
              </div>
              <div class=\"widget-content\">
                <ul>
                  <li>
                    <div class=\"reviewer-info\">
                      <div class=\"star-rating pull-right\">
                        <i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star-empty\"></i><i class=\"fa fa-star-empty\"></i>
                      </div>
                      <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a><em> on 8/20/2013</em>
                    </div>
                    <div class=\"review-text\">
                      <p>
                        Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class=\"reviewer-info\">
                      <div class=\"star-rating pull-right\">
                        <i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star-empty\"></i><i class=\"fa fa-star-empty\"></i>
                      </div>
                      <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a><em> on 8/20/2013</em>
                    </div>
                    <div class=\"review-text\">
                      <p>
                        Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class=\"reviewer-info\">
                      <div class=\"star-rating pull-right\">
                        <i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star-empty\"></i><i class=\"fa fa-star-empty\"></i>
                      </div>
                      <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a><em> on 8/20/2013</em>
                    </div>
                    <div class=\"review-text\">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
                      </p>
                      <p>
                        Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class=\"reviewer-info\">
                      <div class=\"star-rating pull-right\">
                        <i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star-empty\"></i><i class=\"fa fa-star-empty\"></i>
                      </div>
                      <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a><em> on 8/20/2013</em>
                    </div>
                    <div class=\"review-text\">
                      <p>
                        Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class=\"reviewer-info\">
                      <div class=\"star-rating pull-right\">
                        <i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star-empty\"></i><i class=\"fa fa-star-empty\"></i>
                      </div>
                      <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a><em> on 8/20/2013</em>
                    </div>
                    <div class=\"review-text\">
                      <p>
                        Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class=\"reviewer-info\">
                      <div class=\"star-rating pull-right\">
                        <i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star-empty\"></i><i class=\"fa fa-star-empty\"></i>
                      </div>
                      <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a><em> on 8/20/2013</em>
                    </div>
                    <div class=\"review-text\">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
                      </p>
                      <p>
                        Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End Ratings -->
        </div>
        <div class=\"row\">
          <!-- Map -->
          <div class=\"col-lg-6\">
            <div class=\"widget-container\">
              <div class=\"heading\">
                <i class=\"fa fa-map-marker\"></i>Interactive global map<i class=\"fa fa-plus pull-right\"></i><i class=\"fa fa-refresh pull-right\"></i>
              </div>
              <div class=\"widget-content\">
                <div class=\"map\" id=\"vmap\" style=\"height: 450px;\"></div>
              </div>
            </div>
          </div>
          <!-- End Map --><!-- Rollodex -->
          <div class=\"col-lg-6\">
            <div class=\"widget-container scrollable list rollodex\">
              <div class=\"heading\">
                <i class=\"fa fa-comment\"></i>Rollodex<i class=\"fa fa-plus pull-right\"></i><i class=\"fa fa-search pull-right\"></i><i class=\"fa fa-refresh pull-right\"></i>
              </div>
              <div class=\"widget-content\">
                <div class=\"roll-title\">
                  A
                </div>
                <ul>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-female.png\" /><a href=\"widgets.html\">Joan Andrews</a>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">Jose Anderson</a>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male2.png\" /><a href=\"widgets.html\">Phil Aaron</a>
                  </li>
                </ul>
                <div class=\"roll-title\">
                  B
                </div>
                <ul>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-female.png\" /><a href=\"widgets.html\">Samatha Brown</a>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">Chris Baker</a>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-female2.png\" /><a href=\"widgets.html\">Kristin Blues</a>
                  </li>
                </ul>
                <div class=\"roll-title\">
                  C
                </div>
                <ul>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">Adam Carter</a>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male2.png\" /><a href=\"widgets.html\">Greg Campbell</a>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-female2.png\" /><a href=\"widgets.html\">Judy Collins</a>
                  </li>
                </ul>
                <div class=\"roll-title\">
                  D
                </div>
                <ul>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a>
                  </li>
                </ul>
                <div class=\"roll-title\">
                  E
                </div>
                <ul>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a>
                  </li>
                </ul>
                <div class=\"roll-title\">
                  F
                </div>
                <div class=\"roll-title\">
                  G
                </div>
                <div class=\"roll-title\">
                  H
                </div>
                <div class=\"roll-title\">
                  I
                </div>
                <div class=\"roll-title\">
                  J
                </div>
                <ul>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a>
                  </li>
                </ul>
                <div class=\"roll-title\">
                  K
                </div>
                <div class=\"roll-title\">
                  L
                </div>
                <div class=\"roll-title\">
                  M
                </div>
                <div class=\"roll-title\">
                  N
                </div>
                <div class=\"roll-title\">
                  O
                </div>
                <div class=\"roll-title\">
                  P
                </div>
                <div class=\"roll-title\">
                  Q
                </div>
                <div class=\"roll-title\">
                  R
                </div>
                <div class=\"roll-title\">
                  S
                </div>
                <ul>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">John Smith</a>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male2.png\" /><a href=\"widgets.html\">Brian Sullivan</a>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" /><a href=\"widgets.html\">Chris Stevens</a>
                  </li>
                </ul>
                <div class=\"roll-title\">
                  T
                </div>
                <div class=\"roll-title\">
                  U
                </div>
                <div class=\"roll-title\">
                  V
                </div>
                <div class=\"roll-title\">
                  W
                </div>
                <div class=\"roll-title\">
                  X
                </div>
                <div class=\"roll-title\">
                  Y
                </div>
                <div class=\"roll-title\">
                  Z
                </div>
              </div>
            </div>
          </div>
          <!-- End Rollodex -->
        </div>
        <div class=\"row\">
          <!-- Calendar -->
          <div class=\"col-lg-6\">
            <div class=\"widget-container\">
              <div class=\"heading\">
                <i class=\"fa fa-calendar\"></i>Calendar<i class=\"fa fa-plus pull-right\"></i><i class=\"fa fa-refresh pull-right\"></i>
              </div>
              <div class=\"widget-content padded\">
                <div id=\"calendar\"></div>
              </div>
            </div>
          </div>
          <!-- End Calendar --><!-- Chat -->
          <div class=\"col-lg-6\">
            <div class=\"widget-container scrollable chat\">
              <div class=\"heading\">
                <i class=\"fa fa-comments\"></i>Chat Widget<i class=\"fa fa-smile pull-right\"></i>
              </div>
              <div class=\"widget-content padded\">
                <ul>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" />
                    <div class=\"bubble\">
                      <a class=\"user-name\" href=\"widgets.html\">John Smith</a>
                      <p class=\"message\">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
                      </p>
                      <p class=\"time\">
                        <strong>Today </strong>3:53 pm
                      </p>
                    </div>
                  </li>
                  <li class=\"current-user\">
                    <img width=\"30\" height=\"30\" src=\"images/avatar-female.jpg\" />
                    <div class=\"bubble\">
                      <a class=\"user-name\" href=\"widgets.html\">Jane Smith</a>
                      <p class=\"message\">
                        Donec odio. Quisque volutpat mattis eros.
                      </p>
                      <p class=\"time\">
                        <strong>Today </strong>3:53 pm
                      </p>
                    </div>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" />
                    <div class=\"bubble\">
                      <a class=\"user-name\" href=\"widgets.html\">John Smith</a>
                      <p class=\"message\">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                      </p>
                      <p class=\"time\">
                        <strong>Today </strong>3:53 pm
                      </p>
                    </div>
                  </li>
                  <li>
                    <img width=\"30\" height=\"30\" src=\"images/avatar-male.jpg\" />
                    <div class=\"bubble\">
                      <a class=\"user-name\" href=\"widgets.html\">John Smith</a>
                      <p class=\"message\">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                      </p>
                      <p class=\"time\">
                        <strong>Today </strong>3:53 pm
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class=\"post-message\">
                <input class=\"form-control\" placeholder=\"Write your message here…\" type=\"text\"><input class=\"btn btn-primary\" type=\"submit\" value=\"Post\">
              </div>
            </div>
          </div>
          <!-- End Chat -->
        </div>
      </div>
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
            <a class=\"active\" href=\"widgets.html#\" id=\"bg-1\"></a>
          </li>
          <li>
            <a href=\"widgets.html#\" id=\"bg-2\"></a>
          </li>
          <li>
            <a href=\"widgets.html#\" id=\"bg-3\"></a>
          </li>
          <li>
            <a href=\"widgets.html#\" id=\"bg-4\"></a>
          </li>
          <li>
            <a href=\"widgets.html#\" id=\"bg-5\"></a>
          </li>
        </ul>
        <div class=\"style-toggle closed\">
          <span aria-hidden=\"true\" class=\"hightop-gear\"></span>
        </div>
      </div>
    </div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "template_seven/widgets.html";
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
        return new Twig_Source("", "template_seven/widgets.html", "/opt/lampp/htdocs/musee/des/app/Resources/views/template_seven/widgets.html");
    }
}
