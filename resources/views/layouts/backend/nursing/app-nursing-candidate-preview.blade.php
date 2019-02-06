@extends('layouts.backend.nursing.candidate.sidebar')

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
                    <img src="images/img.jpg" alt="">{{ strtoupper(Auth::user()->name) }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="{{ route('nursing_candidate_logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
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
        <!-- /top navigation -->

        <!--preview navigation -->

        <div class="btn-group btn-group-justified btn-group-sm" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#profile_preview" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <div class="hidden-xs">Preview Profile</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default" href="#contact" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                    <div class="hidden-xs">Preview Contact</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default" href="#next_of_kin" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                    <div class="hidden-xs">Preview Next of Kin</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default" href="#olevel1" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                    <div class="hidden-xs">Preview Olevel</div>
                </button>
            </div>

        </div>
      </div>
</div>
        <!--/preview navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <br />

          @yield('content')

        </div>
        <!-- /page content -->
<div>
  <div>
        <!-- daterangepicker -->
            <script type="text/javascript" src="1_files/moment.js"></script>
            <script type="text/javascript" src="1_files/daterangepicker.js"></script>
            <script type="text/javascript" src="1_files/date.js"></script>


            <script type="text/javascript" lang="javascript">

                $(document).ready(function(){
                    $('#dob').daterangepicker({
                        singleDatePicker: true,
                        calender_style: "picker_4"
                    }, function (start, end, label) {
                        console.log(start.toISOString(), end.toISOString(), label);
                    });


                    /*image preview start*/
                    $("#imgInp").change(function(){
                        readURL(this);
                    });

                    /*image preview end*/
                });


                 function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#passport')
                                .attr('src', e.target.result)
                                .width(150)
                                .height(200);
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }


                <!-- datepicker -->
            <script type="text/javascript">
                $(document).ready(function () {

                    var cb = function (start, end, label) {
                        console.log(start.toISOString(), end.toISOString(), label);
                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
                    }

                    var optionSet1 = {
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment(),
                        minDate: '01/01/2012',
                        maxDate: '12/31/2015',
                        dateLimit: {
                            days: 60
                        },
                        showDropdowns: true,
                        showWeekNumbers: true,
                        timePicker: false,
                        timePickerIncrement: 1,
                        timePicker12Hour: true,
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                        },
                        opens: 'left',
                        buttonClasses: ['btn btn-default'],
                        applyClass: 'btn-small btn-primary',
                        cancelClass: 'btn-small',
                        format: 'MM/DD/YYYY',
                        separator: ' to ',
                        locale: {
                            applyLabel: 'Submit',
                            cancelLabel: 'Clear',
                            fromLabel: 'From',
                            toLabel: 'To',
                            customRangeLabel: 'Custom',
                            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                            firstDay: 1
                        }
                    };
                    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
                    $('#reportrange').daterangepicker(optionSet1, cb);
                    $('#reportrange').on('show.daterangepicker', function () {
                        console.log("show event fired");
                    });
                    $('#reportrange').on('hide.daterangepicker', function () {
                        console.log("hide event fired");
                    });
                    $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
                    });
                    $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                        console.log("cancel event fired");
                    });
                    $('#options1').click(function () {
                        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
                    });
                    $('#options2').click(function () {
                        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
                    });
                    $('#destroy').click(function () {
                        $('#reportrange').data('daterangepicker').remove();
                    });
                });
        </script>
            <script type="text/javascript" lang="javascript">

                $(document).ready(function () {

                    //alert("Hi");
                    ajax_nationality();
                    //ajax_states();

                    $("select#nationality").change(function(){
                          ajax_states();
                      });

                    $("select#origin_state").change(function(){
                          //alert("hi"); //
                          ajax_cities();
                      });
                });

                function ajax_nationality() {

                  //$('.show-veg').click(function () {
                  //alert("Countries");
                    $.ajax({
                      url: "#",
                      async: false,
                      type: "POST",
                      //data: {},
                      dataType: "html",
                      success: function(data) {
                         // alert(data);
                        $('#nationality').html(data);
                      }
                    })
                  //});

                }

                function ajax_states() {
                    var country_id = $("#nationality").val();
                    //$()
                    $.ajax({
                      url: "#",
                      //async: false,
                      type: "POST",
                      data:
                        {
                            'country_id':country_id,
                        },
                    ContentType: "application/json",

                     // dataType: "html",
                      success: function(data) {
                         // alert(data);
                        $('#origin_state').html(data);
                      }
                    })
                  //});

                }
        </script>

        <!-- footer content -->
                <footer>
                  <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                  </div>
                  <div class="clearfix"></div>
                </footer>
        <!-- /footer content -->
              </div>
            </div>

            <!-- jQuery -->
            <script src="/dashboard/vendors/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="/dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- FastClick -->
            <script src="/dashboard/vendors/fastclick/lib/fastclick.js"></script>
            <!-- NProgress -->
            <script src="/dashboard/vendors/nprogress/nprogress.js"></script>
            <!-- Chart.js -->
            <script src="/dashboard/vendors/Chart.js/dist/Chart.min.js"></script>
            <!-- gauge.js -->
            <script src="/dashboard/vendors/gauge.js/dist/gauge.min.js"></script>
            <!-- bootstrap-progressbar -->
            <script src="/dashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
            <!-- iCheck -->
            <script src="/dashboard/vendors/iCheck/icheck.min.js"></script>
            <!-- Skycons -->
            <script src="/dashboard/vendors/skycons/skycons.js"></script>
            <!-- Flot -->
            <script src="/dashboard/vendors/Flot/jquery.flot.js"></script>
            <script src="/dashboard/vendors/Flot/jquery.flot.pie.js"></script>
            <script src="/dashboard/vendors/Flot/jquery.flot.time.js"></script>
            <script src="/dashboard/vendors/Flot/jquery.flot.stack.js"></script>
            <script src="/dashboard/vendors/Flot/jquery.flot.resize.js"></script>
            <!-- Flot plugins -->
            <script src="/dashboard/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
            <script src="/dashboard/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
            <script src="/dashboard/vendors/flot.curvedlines/curvedLines.js"></script>
            <!-- DateJS -->
            <script src="/dashboard/vendors/DateJS/build/date.js"></script>
            <!-- JQVMap -->
            <script src="/dashboard/vendors/jqvmap/dist/jquery.vmap.js"></script>
            <script src="/dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
            <script src="/dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
            <!-- bootstrap-daterangepicker -->
            <script src="/dashboard/vendors/moment/min/moment.min.js"></script>
            <script src="/dashboard/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

            <!-- Custom Theme Scripts -->
            <script src="/dashboard/build/js/custom.min.js"></script>

          </body>
        </html>
