@extends('layouts.backend.admin.nursing.app_admin_dashboard')
@section('content')

<div class="row x_title">
  <div class="col-md-6">
    <h3>Administrative Tools</h3>
  </div>

</div>
<div class="col-md-9 col-sm-9 col-xs-12">

  <div class="row">
      <div class="col-md-offset-2 col-md-10">
        <a href="http://www.expertphp.in/laravel5.3/public/download-excel-file/xls">Download Result Format in Excel xls</a> |
        <a href="http://www.expertphp.in/laravel5.3/public/download-excel-file/xlsx">Download Result Format in  Excel xlsx</a>
      </div>
   </div>

  <form method="POST" action="{{route('nursing_candidate_upload_result_submit')}}" accept-charset="UTF-8" enctype="multipart/form-data">
  {{ csrf_field() }}
      <div class="row" style="margin-top: 10px;">
        <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="sample_file" class="col-md-3">Select Result File:</label>
                  <div class="col-md-9">
                    <input class="form-control" name="result_file" type="file" id="result_file" required>
                  </div>
              </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top: 10px;">
            <input class="btn btn-primary" type="submit" value="Upload">
          </div>
    </div>
  </form>
</div>

@endsection
