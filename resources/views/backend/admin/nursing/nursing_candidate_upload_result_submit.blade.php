@extends('layouts.backend.admin.nursing.app_admin_dashboard')
@section('content')

        <h1 class="text-center">
            Nursing Candidate Result Upload
        </h1>

        @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif

    @if ( Session::has('error') )
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{{ Session::get('error') }}</strong>
    </div>
    @endif

    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <div>
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
</div>
@endif

  <div class="row">
      <div class="col-md-offset-2 col-md-10">
        <a href="{{ URL::to('admin/nursing/download_candidate_result_xls')}}">Download Result Format in Excel xls</a> |
        <a href="http://www.expertphp.in/laravel5.3/public/download-excel-file/xlsx">Download Result Format in  Excel xlsx</a>
      </div>
   </div>

<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Choose your xls/csv File : <input type="file" name="file" class="form-control">

    <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 3%">
</form>
@endsection
