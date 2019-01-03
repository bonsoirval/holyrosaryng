@extends('layouts.backend.nursing.student.')
@section('css')
    <style>
        a, a:hover {
            color: white;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <!--div class="float-right">
            <a href="{{url('laravel-crud-search-sort/create')}}" class="btn btn-primary">New</a>
        </div>
        <h1 style="font-size: 2.2rem">courses List (Laravel CRUD, Search, Sort Example)</h1>
        <hr/-->
        {!! Form::open(['method'=>'get']) !!}
        <div class="row">
            <div class="col-sm-4 form-group">
                {!! Form::select('search_value',['-1'=>'Select Search Value','course_code'=>'Course Code','course_title'=>'Course Title', 'level'=> 'Level', 'school' => 'School', 'load' => 'Load'],null,['class'=>'form-control']) !!}
                <!-- {!! Form::select('gender',['-1'=>'Select Gender','Male'=>'Male','Female'=>'Female'],null,['class'=>'form-control','onChange'=>'form.submit()']) !!} -->
            </div>
          <div class="col-sm-5 form-group">
                <div class="input-group">
                    <input class="form-control" id="search"
                           value="{{ request('search') }}"
                           placeholder="Enter Search Value" name="search"
                           type="text" id="search"/>
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-warning"
                        >
                            Search
                        </button>
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{request('field')}}" name="field"/>
            <input type="hidden" value="{{request('sort')}}" name="sort"/>
        </div>
        {!! Form::close() !!}
        <table class="table table-bordered bg-light">
            <thead class="bg-dark" style="color: white">
            <tr>
                <th width="60px" style="vertical-align: middle;text-align: center">No</th>
                <th style="vertical-align: middle">
                    <a href="{{url('laravel-crud-search-sort')}}?search={{request('search')}}&gender={{request('gender')}}&field=name&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Code
                    </a>
                    {{request('field','name')=='name'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                </th>
                <th style="vertical-align: middle">
                    <a href="{{url('laravel-crud-search-sort')}}?search={{request('search')}}&gender={{request('gender')}}&field=gender&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Title
                    </a>
                    {{request('field')=='gender'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                </th>
                <th style="vertical-align: middle">
                    <a href="{{url('laravel-crud-search-sort')}}?search={{request('search')}}&gender={{request('gender')}}&field=email&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Level
                    </a>
                    {{request('field')=='email'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                </th>
                <th style="vertical-align: middle">
                    <a href="{{url('laravel-crud-search-sort')}}?search={{request('search')}}&gender={{request('gender')}}&field=email&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        School
                    </a>
                    {{request('field')=='email'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                </th>
                <th style="vertical-align: middle">
                    <a href="{{url('laravel-crud-search-sort')}}?search={{request('search')}}&gender={{request('gender')}}&field=email&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Load
                    </a>
                    {{request('field')=='email'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                </th>
                <th width="130px" style="vertical-align: middle">Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i=1;
            @endphp
            @foreach($courses as $course)
                <tr>
                    <th style="vertical-align: middle;text-align: center">{{$i++}}</th>
                    <td style="vertical-align: middle">{{ strtoupper($course->course_code) }}</td>
                    <td style="vertical-align: middle">{{ $course->course_title }}</td>
                    <td style="vertical-align: middle">{{ $course->level }}</td>
                    <td style="vertical-align: middle">{{ strtoupper($course->school) }}</td>
                    <td style="vertical-align: middle">{{ $course->course_load }}</td>
                    <td style="vertical-align: middle" align="center">

                        <form id="frm_{{$course->id}}"

                              action="{{url('admin/delete/'.$course->id)}}"
                              method="post" style="padding-bottom: 0px;margin-bottom: 0px">

                            <a class="btn btn-primary btn-sm" title="Edit"
                                href="{{url('nursing/student/register_course/'.$course->id)}}">
                               <!--href="{{url('admin/admin_student_view/view_students/'.$course->id)}}"-->
                                Register Course
                            </a>

                            <!--input type="hidden" name="_method" value="delete"/>
                            {{csrf_field()}}
                            <a class="btn btn-danger btn-sm" title="Delete"
                               href="javascript:if(confirm('Are you sure want to delete?')) $('#frm_{{$course->id}}').submit()">
                                Delete
                            </a-->
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <nav>
            <ul class="pagination justify-content-end">
                {{$courses->links('vendor.pagination.bootstrap-4')}}
            </ul>
        </nav>
    </div>
@endsection
