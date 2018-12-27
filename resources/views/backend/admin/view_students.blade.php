@extends('layouts.backend.admin.loggedin')
<!--extends('layouts.default')-->
@section('css')
    <style>
        a, a:hover {
            color: white;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        {!! Form::open(['method'=>'get']) !!}
        <div class="row">
            <div class="col-sm-4 form-group">
                <select class="form-control" required name="search_parameter">
                    <option value="">Select Search Parameter</option>
                    <option value="name">Name</option>
                    <option value="phone">Phone Number</option>
                    <option value="email">Email Address</option>
                    <option value="mat_number">Matriculation Number</option>
                </select>
            </div>
            <div class="col-sm-4 form-group">
              <select class="form-control" required name="search_school">
                  <option value="">Select School</option>
                  <option value="nursing">School of Nursing</option>
                  <option value="medlab">School of Med Lab</option>
                  <option value="midwifery">School of Midwifery</option>
              </select>
            </div>
            <div class="col-sm-4 form-group">
                <select class="form-control" required name="search_level">
                    <option value="-1">Select Candidate Year</option>
                    <option value="1">Year one</option>
                    <option value="2">Year two</option>
                    <option value="3">Year three</option>
                </select>
            </div>
        </div>
        <!-- another line -->
        <div class="row">
          <div class="col-sm-4 form-group">
              <div class="input-group">
                  <input class="form-control" id="search"
                         value="{{ request('search') }}"
                         placeholder="Enter Search Value" name="search"
                         type="text" id="search" required/>
                  <div class="input-group-btn">
                      <button type="submit" class="btn btn-warning">
                          Search
                      </button>
                  </div>
              </div>
          </div>
          <input type="hidden" value="{{request('field')}}" name="field"/>
          <input type="hidden" value="{{request('sort')}}" name="sort"/>
        </div>


        {!! Form::close() !!}
      <!--/form-->

        <table class="table table-bordered bg-light">
            <thead class="bg-dark" style="color: white">
            <tr>
                <th width="60px" style="vertical-align: middle;text-align: center">No</th>
                <th style="vertical-align: middle">
                    <a href="{{url('laravel-crud-search-sort')}}?search={{request('search')}}&gender={{request('gender')}}&field=name&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Name
                    </a>
                    {{request('field','name')=='name'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                </th>
                <th style="vertical-align: middle">
                    <a href="{{url('laravel-crud-search-sort')}}?search={{request('search')}}&gender={{request('gender')}}&field=gender&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Phone
                    </a>
                    {{request('field')=='gender'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                </th>
                <th style="vertical-align: middle">
                    <a href="{{url('laravel-crud-search-sort')}}?search={{request('search')}}&gender={{request('gender')}}&field=email&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                        Email
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
            @foreach($students as $student)
                <tr>
                    <th style="vertical-align: middle;text-align: center">{{$i++}}</th>
                    <td style="vertical-align: middle">{{ strtoupper($student->name) }}</td>
                    <td style="vertical-align: middle">{{ $student->phone }}</td>
                    <td style="vertical-align: middle">{{$student->email}}</td>
                    <td style="vertical-align: middle" align="center">

                        <form id="frm_{{$student->id}}"

                              action="{{url('admin/delete/'.$student->id)}}"
                              method="post" style="padding-bottom: 0px;margin-bottom: 0px">

                            <a class="btn btn-primary btn-sm" title="Edit"
                                href="{{url('admin/student_update/'.$student->id)}}">
                               <!--href="{{url('admin/admin_student_view/view_students/'.$student->id)}}"-->
                                View / Edit
                            </a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <nav>
            <ul class="pagination justify-content-end">
                {{$students->links('vendor.pagination.bootstrap-4')}}
            </ul>
        </nav>
    </div>
@endsection
