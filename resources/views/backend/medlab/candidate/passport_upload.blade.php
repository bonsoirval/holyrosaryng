@extends('layouts.backend.medlab.app-medlab')

@section('content')
<form enctype="multipart/form-data" action = "{{ route('medlab_candidate_passport_upload_submit') }}" method="post" >
{{ csrf_field() }}
                <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Candidate's Passport Upload</h1>
                                        <div class="clearfix"></div>
                                    </div>

            <!-- passport upload section start-->


                <div class="tab-pane fade in" id="passport">

                        <div class="form-group">
                        <div class="form-group">
                            <div class="form-group">

                                <label for="passportupload">Passport Upload</label>
                                <!--p><input name="image_name" id="image_name" readonly="readonly" type="file" /></p>
                                <p><input name="image_upload" value="Upload Image" type="submit" /></p-->

                                <input id="passport" name="passport" type='file' onchange="readURL(this);" />
                                <img id="blah" src="#" alt="Your Passport" />

                            </div>
                        </div>
                    </div>
                    @if ($errors->has('image'))
              <span class="help-block">
                  <strong>{{ $errors->first('passport') }}</strong>
              </span>
          @endif
                          @if ($errors->any())
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif

                    <input type='submit' id='passport_upload' name="passport_upload" class='btn-success' value='Upload Pix'/>

    </div>
    </div>

    </div>
  </div>
</form>
  <script lang='javascript' type='text/javascript' >
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


@endsection
