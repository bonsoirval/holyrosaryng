@extends('layouts.backend.nursing.app-nursing-candidate')

@section('content')

              <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Candidate's Biodata</h1>
                                        <div class="clearfix"></div>
                                    </div>

                                    <form id="profile" method='post' action="{{ route('nursing_candidate_profile_updates_submit') }}" data-parsley-validate class="form-horizontal form-label-left">
                                        {{ csrf_field() }}
                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sur Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name='surname' id="surname" class="form-control">

                                            </div>
                                        </div>-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Candidate Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" readonly name='name' value = '{{ Auth::user()->name }}' id="name" class="form-control">

                                            </div>
                                        </div>
                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Other Names<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name = "othernames" id="othernames" class="form-control" />
                                            </div>
                                        </div>-->

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="dob" name="dob"  class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
                                              @if ($errors->has('dob'))
                                                <span class="help-block">
                                                  <strong>{{ $errors->first('dob') }}</strong>
                                                </span>
                                              @endif
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">Town of Birth<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="text" name = "birth_town" id="birth_town" placeholder="Enter Town of Birth" class="form-control" />
                                              @if ($errors->has('birth_town'))
                                                <span class="help-block">
                                                  <strong>{{ $errors->first('birth_town') }}</strong>
                                                </span>
                                              @endif
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
                                                     @endforeach
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

                                                     @endforeach

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
                                                @if ($errors->has('lga'))
                                                  <span class="help-block">
                                                    <strong>{{ $errors->first('lga') }}</strong>
                                                  </span>
                                                @endif
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


            <script src="//code.jquery.com/jquery-1.10.2.js"></script>
             <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
             <script>
             $(function() {
               $( "#dob" ).datepicker();
             });
             </script>
@endsection
