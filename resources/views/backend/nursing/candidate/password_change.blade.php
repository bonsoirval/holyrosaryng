@extends('layouts.backend.nursing.app-nursing-candidate')

@section('content')

<div class="tab-pane fade in active" id="tab1">
     <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          <div class="x_title">
              <h1>Candidate's Password Update</h1>
              <div class="clearfix"></div>
              <form class="form-horizontal well" method="post" id="password_reset_form" action="{{ route('nursing_candidate_password_change_submit') }}">
                {{ csrf_field() }}

                <div class="form-group">
                  <label for="old_pass">Old Password</label>
                  <input type="password" name="old_pass" class="form-control" id="old_pass" placeholder="Enter Password From The Email" required>
                </div>

                <div class="form-group">
                  <label for="new_pass">New Password</label>
                  <input type="password" name="new_pass" class="form-control" id="new_pass" placeholder="New Password" required>
                </div>

                <div class="form-group">
                  <label for="conf_new_pass">Confirm Password</label>
                  <input type="password" name="conf_new_pass" class="form-control" id="conf_new_pass" placeholder="Confirm Password" required>
                </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-primary" id="update_password" value="Update Password">
                </div>

              </form>
          </div>

      </div>
  </div>



    </div>


<script lang='javascript' type='text/javascript'>
  $(document).ready(function(){
    $("#password_reset_form").submit(function(e){
      e.preventDefault();

      //variable declarations
      var old_pass = $("#old_pass").val();
      var new_pass = $("#new_pass").val();
      var conf_new_pass = $("#conf_new_pass").val();
      var csrf_lisgrey = $("input[name=csrf_lisgrey]").val();

      if( new_pass != conf_new_pass)
      {
        alert("Password Not Confirmed!");
        location.reload();
        //$("#new_pass").focus();
      }else{
        //ajax jquery call
                $.ajax({
                    url: "<?php //echo base_url(); ?>Login/password_update",
                    type: "POST",
                    data:
                    {
                      "old_pass":old_pass,
                      "new_pass":new_pass,
                       "conf_new_pass":conf_new_pass,
                       //"csrf_lisgrey":csrf_lisgrey,
                    },
                    ContentType: "html",
                     success: function(json)
                    {
                        alert("Update Successful");
            window.location.href = "<?php //echo base_url(); ?>Login/index";
                    },
                    error: function(){
                            alert('Password Update Failed. Try Again');
                    }

                  });
      }
    });
  });
</script>
@endsection
