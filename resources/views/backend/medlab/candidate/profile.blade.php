@extends('layouts.backend.medlab.app-medlab')

@section('content')
              <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Candidate's Biodata</h1>
                                        <div class="clearfix"></div>
                                    </div>

                                    <form id="profile" method='post' action="{{ route('medlab_candidate_profile_update_submit') }}" data-parsley-validate class="form-horizontal form-label-left">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Candidate Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" readonly name='name' value = '{{ Auth::user()->name }}' id="name" class="form-control">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="dob" name="dob"  placeholder = "dd/mm/yyyy" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">Town of Birth<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="text" name = "birth_town" id="birth_town" placeholder="Enter Town of Birth" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nationality">Nationality<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select id="nationality"  name="nationality" class="form-control col-md-7 col-xs-12" type="text" name="nationality">
                                                  @if(sizeof($countries) > 0)

                                                     @foreach($countries as $country)
                                                        <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>

                                                     @endForeach

                                                   @else
                                                      No Record Found
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="origin_state">State of Origin<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select id="origin_state"  name="origin_state" class="form-control col-md-7 col-xs-12" type="text"origin_state>
                                                  @if(sizeof($countries) > 0)

                                                     @foreach($states as $state)
                                                        <option value="{{ $state['id'] }}">{{ $state['name'] }}</option>

                                                     @endForeach

                                                   @else
                                                      No Record Found
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="lga" class="control-label col-md-3 col-sm-3 col-xs-12">L.G.A</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">

                                                <input type="text" id="lga" name="lga" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>

                                       <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div id="gender" class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" id="gender" name="gender" value="male" required="required"> &nbsp; Male &nbsp;
                                                    </label>
                                                    <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" id="gender" name="gender" value="female" checked="" required="required"> Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <center>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button id="cancel" type="submit" class="btn btn-primary">Cancel</button>
                                                    <button id="save" type="submit" class="btn btn-success">Save and Continue</button>
                                                </div>
                                            </div>
                                        </center>
                                        </form>
                                </div>
                            </div>


            <!-- /page content -->


    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
            <div class="clearfix"></div>

                </div>

            <div id="custom_notifications" class="custom-notifications dsp_none">
                <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
                </ul>
                <div class="clearfix"></div>
                <div id="notif-group" class="tabbed_notifications"></div>
            </div>
            <div class="clearfix"></div>

            <!-- passport upload section end -->

<!-- daterangepicker -->
    <script type="text/javascript" src="<?php //echo base_url(); ?>public/bootstrap/daterangepicker/js/moment.min.js"></script>
    <script type="text/javascript" src="<?php //echo base_url(); ?>public/bootstrap/daterangepicker/js/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php //echo base_url(); ?>public/bootstrap/daterangepicker/js/date.js"></script>


    <script lang='javascript' type='text/javascript' >

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
    <script lang="javascript" type="text/javascript">

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
              url: "<?php //echo base_url(); ?>Candidate/nationality",
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
              url: "<?php //echo base_url(); ?>Candidate/state",
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

@endsection
