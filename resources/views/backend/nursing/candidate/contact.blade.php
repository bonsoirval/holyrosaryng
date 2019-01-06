@extends('layouts.backend.nursing.candidate.app_nursing_candidate_dashboard')
@section('content')
<form enctype="multipart/form-data" action = "{{ route('nursing_candidate_contact_submit') }}" method="post" >
{{ csrf_field() }}
  <!--div class="well">
            <div class="tab-content"-->

                <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Candidate's Contact Details</h1>
                                        <div class="clearfix"></div>

                                    </div>


                <?php
                    $data = array(
                            'id' => 'contact',
                            'name' => 'contact'
                        );
                    //echo form_open("Candidate/contact", $data);
                ?>
                    <div class="form-group">
                        <label for="realname">Contact Address</label>
                        <input  type = "text" name="contact_add" class='form-control' id = 'contact_add' required>
                    </div>

                    <div class="form-group">
                        <label for="email">Permanent Address</label>
                          <input  type = "text" name="permanent_add" class='form-control' id = 'permanent_add' required>
                    </div>

                    <div class="form-group">

                        <input width="100" id='sub_profile' class="form-control btn-success" type="submit" value="Send Now" />
                    </div>

                    </form>
                                </div>
                            </div>


            <!-- /page content -->
<div class="clearfix"></div>


            <!-- passport upload section end -->
    </div>

    <!--/div>

  </div-->
</form>
@endsection
