@extends('layouts.backend.nursing.app-nursing-candidate')

@section('content')
<form enctype="multipart/form-data" action = "{{ route('nursing_candidate_nextkin_submit') }}" method="post" >
{{ csrf_field() }}

                <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Candidate's Next of Kin Details</h1>
                                        <div class="clearfix"></div>

                                    </div>
                    <div class="form-group">
                        <label for="realname">Next Kin Name</label>
                        <input type="text" id="next_kin_name" name="next_kin_name" required='yes' class="form-control" placeholder="Next of Kin name" >
                    </div>

                    <div class="form-group">
                        <label for="email">Next Kin Address</label>
                        <input type="text" id="next_kin_address" name="next_kin_address" required='yes' class="form-control" placeholder="Next of Kin address" >
                    </div>
                    <div class="form-group">
                        <label for="email">Next Kin Phone</label>
                        <input type="text" id="next_kin_phone" name="next_kin_phone" required='yes' class="form-control" placeholder="Next of Kin active phone number" >
                    </div>
                    <div class="form-group">
                        <label for="email">Next Kin Relationship</label>
                        <select class="form-control" name='next_kin_relationship'>
                            <option value="">--Select Next of Kin Relationship</option>
                            <option value="brother">Brother</option>
                            <option value="sister">Sister</option>
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="son">Son</option>
                            <option value="aunt">Aunt</option>
                            <option value="uncle">Uncle</option>
                            <option value="cousin">Cousin</option>
                            <option value="nephew">Nephew</option>
                            <option value="daugther">Daughter</option>
                            <option value="Husband">Husband</option>
                            <option value="wife">Wife</option>

                        </select>
                    </div>

                    <div class="form-group">

                        <input  id='sub_profile' class=" btn-success" type="submit" value="Send Now" />
                    </div>

                                </form>
                                </div>
                            </div>


            <!-- /page content -->
<div class="clearfix"></div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
            <div class="clearfix"></div>

  </div>
</form>
@endsection
