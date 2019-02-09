<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- dashboard files -->
    <title>Candidate Dashboard </title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('css/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('css/icheck/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('css/progressbar/bootstrap-progressbar-3.3.0.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('css/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('css/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <!-- Custom Theme Style -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><!--i class="fa fa-paw"></i--> <span>School of Medlab Dashboard</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('images/schools/medlab.png')}}" alt="schoolLogo" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ strtoupper(Auth::user()->name) }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Personal Details <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('medlab_candidate_profile_update') }}">Profile Update</a></li>
                      <li><a href="{{ route('medlab_candidate_passport_upload') }}">Passport Upload</a></li>
                      <li><a href="{{ route('medlab_candidate_contact') }}">Contact</a></li>
                      <li><a href="{{ route('medlab_candidate_nextkin') }}">Next of Kin Contact</a></li>
                      <li><a href="{{ route('medlab_candidate_password_change') }}">Change Password</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> General Qualification <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('medlab_candidate_olevel1') }}">Olevel (First Sitting)</a></li>
                      <li><a href="{{ route('medlab_candidate_olevel2') }}">Olevel (Second Sitting)</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Preview and Submit <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('medlab_candidate_preview') }}">Preview Application</a></li>
                      <li><a href="{{ route('medlab_candidate_complete_application') }}">Complete Application</a></li>

                    </ul>
                  </li>
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <!--<img src="images/img.jpg" alt="Profile Image">-->{{ strtoupper(Auth::user()->name) }}

                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!--li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li-->
                    <li><a href="{{ route('medlab_candidate_logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">

                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles - ->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->

          <!--div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">



                <div class="clearfix"></div>
              </div>
            </div>

          </div-->
          <br />

          @yield('content')

        </div>
        <!-- /page content -->
        <!-- footer content -->
                <footer>
                  <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
              </div>
            </div>

            <p class="pull-right" style="color: #fff"><a href="http://www.vgnservices.com.ng">Developed by VIRTUAL GOLD </a>. |
                <span class="lead"> <i class="fa fa-phone-square"></i>&nbsp;2347038616871 | 2348188993143</span>
            </p>
            <!-- jQuery -->
            <script src="{{asset('js/jquery.min.js')}}" ></script>
            <!-- Bootstrap -->
            <script src="{{asset('js/bootstrap.min.js')}}" ></script>
            <!-- FastClick -->
            <script src="{{asset('js/fastclick/lib/fastclick.js')}}" ></script>
            <!-- NProgress -->
            <script src="{{asset('vendors/nprogress/nprogress.js')}}" ></script>
            <!-- Chart.js -->
            <script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}" ></script>
            <!-- gauge.js -->
            <script src="{{asset('vendors/gauge.js/dist/gauge.min.js')}}" ></script>
            <!-- bootstrap-progressbar -->
            <script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}" ></script>
            <!-- iCheck -->
            <script src="{{asset('vendors/iCheck/icheck.min.js')}}" ></script>
            <!-- Skycons -->
            <script src="{{asset('vendors/skycons/skycons.js')}}" ></script>
            <!-- Flot -->
            <script src="{{asset('vendors/Flot/jquery.flot.js')}}" ></script>

            <script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}" ></script>
            <script src="{{asset('vendors/Flot/jquery.flot.time.js')}}" ></script>
            <script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}" ></script>
            <script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}" ></script>
            <!-- Flot plugins -->
            <script src="{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}" ></script>
            <script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}" ></script>
            <script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}" ></script>
            <!-- DateJS -->
            <script src="{{asset('vendors/DateJS/build/date.js')}}" ></script>
            <!-- JQVMap -->
            <script src="{{asset('vendors/jqvmap/dist/jquery.vmap.js')}}" ></script>
            <script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}" ></script>
            <script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}" ></script>
            <!-- bootstrap-daterangepicker -->
            <script src="{{asset('vendors/moment/min/moment.min.js')}}" ></script>
            <script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}" ></script>

            <!-- Custom Theme Scripts -->
            <script src="{{asset('build/js/custom.min.js')}}" ></script>

          </body>
        </html>
