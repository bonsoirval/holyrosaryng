@extends('layouts.backend.medlab.app-medlab_candidate_preview')
@section('content')
    <div class="well">
        <div class="tab-content">

            <div class="tab-pane fade active in" id="profile_preview">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h1>Profile Final Preview</h1>
                                    <div class="clearfix"></div>
                                </div>
                                <form id="profile" method="post" action="#" data-parsley-validate="" class="form-horizontal form-label-left">
                                                                            <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Gender: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="surname" value='{{ strtoupper($user_profile['gender']) }}' readonly="readonly" id="surname" class="form-control" type="text">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="othernames" value = '{{ $user_profile['dob'] }}' readonly="readonly" id="othernames" class="form-control" type="text">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">Place of Birth<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input name="birth_town" value = "{{ strtoupper($user_profile['birth_town']) }}" readonly="readonly" id="birth_town" placeholder="dd/mm/yyyy" class="form-control" type="birth_town">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">LGA Of Origin<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input name="lga" value = "{{ strtoupper($user_profile['lga']) }}" readonly="readonly" id="lga" placeholder="Your LGA of Origin" class="form-control" type="birth_town">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">State Of Origin<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input value = "{{ strtoupper($user_profile['origin_state']) }}"  readonly="readonly" class="form-control" type="text">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">Country Of Origin<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input value = "{{ strtoupper($user_profile['nationality']) }}" readonly="readonly" class="form-control" type="text">

                                        </div>
                                    </div>
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
        <!-- passport upload section start-->

            <div class="tab-pane fade" id="contact">
                 <div class="tab-pane fade in active" id="tab1">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h1>Contact Final Preview</h1>
                                    <div class="clearfix"></div>
                                </div>

                                <form id="profile" method="post" action="#" data-parsley-validate="" class="form-horizontal form-label-left">
                                                                            <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Contact Address <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea cols="5" rows="5" readonly="readonly" type="text" class="form-control">{{ $contacts['contact_address'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Permanent Address<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea cols="5" rows="5" readonly="readonly" value="" type="text" id="othernames" class="form-control">{{ $contacts['permanent_address'] }}</textarea>

                                        </div>
                                    </div>

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

            </div>



            <div class="tab-pane fade" id="next_of_kin">
                 <div class="tab-pane fade in active" id="tab1">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h1>Next of Kin Final Preview</h1>
                                    <div class="clearfix"></div>
                                </div>

                                <form id="profile" method="post" action="#" data-parsley-validate="" class="form-horizontal form-label-left">
                                                                            <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Next of Kin Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input readonly="readonly" value = '{{ $nextkin['name'] }}' id="surname" class="form-control" type="text">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Next of Kin Address<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input readonly="readonly" value = '{{ $nextkin['nextkin_address'] }}' id="othernames" class="form-control" type="text">

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">Next of Kin Phone<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input readonly="readonly" value = '{{ $nextkin['nextkin_phone'] }}' id="birth_town" placeholder="Enter Town of Birth" class="form-control" type="birth_town">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">Next of Kin Relationship<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input readonly="readonly" value = '{{ $nextkin['relationship'] }}' placeholder="Enter Town of Birth" class="form-control" type="birth_town">

                                        </div>
                                    </div>

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

            </div>




        <div class="tab-pane fade" id="olevel1">
                 <div class="tab-pane fade in active" id="tab1">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h1>Olevel Final Preview</h1>
                                    <div class="clearfix"></div>
                                </div>

                                <form id="profile" method="POST" action="{{ route('medlab_candidate_preview_submit') }}" data-parsley-validate="" class="form-horizontal form-label-left">
                                  {{ csrf_field() }}
                                        <table class="table table-bordered">
                                     <thead>
                                       <tr>
                                         <th></th>
                                         <th>FIRST SITTING GRADE</th>
                                         <th>SECOND SITTING GRADE</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                     <tr>
                                       <td>Examination</td>
                                       <td>{{ strtoupper($olevel1['examination']) }}</td>
                                       <td>{{ strtoupper($olevel2['examination']) }}</td>
                                    </tr>
                                     <tr>
                                       <td>Examination Number</td>
                                       <td>{{ strtoupper($olevel1['exam_number']) }}</td>
                                       <td>{{ strtoupper($olevel2['exam_number']) }}</td>
                                     </tr>
                                     <tr>
                                       <td>Examination Year</td>
                                       <td>{{ $olevel1['exam_year'] }}</td>
                                       <td>{{ $olevel1['exam_year'] }}</td>
                                     </tr>
                                     <tr>
                                       <td>English Language</td>
                                       <td>{{ strtoupper($olevel1['english']) }}</td>
                                       <td>{{ strtoupper($olevel2['english']) }}</td>
                                     </tr>
                                     <tr>
                                       <td>Mathematics</td>
                                       <td>{{ strtoupper($olevel1['mathematics']) }}</td>
                                       <td>{{ strtoupper($olevel2['mathematics']) }}</td>
                                     </tr>
                                     <tr>
                                       <td>Physics</td>
                                       <td>{{ strtoupper($olevel1['physics']) }}</td>
                                       <td>{{ strtoupper($olevel2['physics']) }}</td>
                                     </tr>
                                     <tr>
                                       <td>Chemistry</td>
                                       <td>{{ strtoupper($olevel1['chemistry']) }}</td>
                                       <td>{{ strtoupper($olevel2['chemistry']) }}</td>
                                     </tr>
                                     <tr>
                                       <td>Biology</td>
                                       <td>{{ strtoupper($olevel1['biology']) }}</td>
                                       <td>{{ strtoupper($olevel2['chemistry']) }}</td>
                                     </tr>
                                     </tbody>
                                   </table>
                                   <input class="btn btn-success" value="Final Submission" type ='submit'/>
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

            </div>
        </div>
        <!-- /page content -->

    </div>



</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>



</div>


@endsection
