@extends('layouts.backend.admin.loggedin')
<!-- extends('layouts.default') -->
@section('css')
    <style>
        .form-group.required label:after {
            content: " *";
            color: red;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <div class="container">
      <style>
      table{
        width: 500px;
        height:auto;
      }
        thead{
          background-color: lightgray;

          margin:20px;
          padding: 20px;
        }
        td, thead{
          text-align:center;
          border:2px solid black;
        }
      </style>
        <div class="col-md-8 offset-md-2">
            Edit Student
            <table>
              <thead>

                  <td>Passport</td>
                  <td>Item</td>
                  <td>Value</td>

            </thead>
            <tr>
                  <td rowspan="4"><img src="" alt="Passport Here" /></td>
                  <td>Name</td>
                  <td>Njoku Okechukwu Valentine</td>
            </tr>
            <tr>

                  <td>Phone</td>
                  <td>07038616871</td>
            </tr>
            <tr>

                  <td>Phone</td>
                  <td>07038616871</td>
            </tr>
            <tr>

                  <td>Phone</td>
                  <td>07038616871</td>
            </tr>
            </table>
        </div>

        <div class="col-md-8 offset-md-2">
            <h1>{{isset($customer)?'Edit':'New'}} Customer</h1>
            <hr/>
            @if(isset($customer))
                {!! Form::model($customer,['method'=>'put']) !!}
            @else
                {!! Form::open() !!}
            @endif
            <div class="form-group row required">
                {!! Form::label("passport","Student Passport",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                      <img src='' alt = 'Student Passport' width='100' height="100" />
                </div>
            </div>
            <div class="form-group row required">
                {!! Form::label("name","Name",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                    {!! Form::text("name",null,["class"=>"form-control".($errors->has('name')?" is-invalid":""),"autofocus",'placeholder'=>'Name']) !!}
                    {!! $errors->first('name','<span class="invalid-feedback">:message</span>') !!}
                </div>
            </div>
            <div class="form-group row required">
                {!! Form::label("phone","Phone",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                    {!! Form::text("phone",null,["class"=>"form-control".($errors->has('email')?" is-invalid":""),'placeholder'=>'Email']) !!}
                    {!! $errors->first('phone','<span class="invalid-feedback">:message</span>') !!}
                </div>
            </div>
            <div class="form-group row required">
                {!! Form::label("email","Email",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                    {!! Form::text("email",null,["class"=>"form-control".($errors->has('email')?" is-invalid":""),'placeholder'=>'Email']) !!}
                    {!! $errors->first('email','<span class="invalid-feedback">:message</span>') !!}
                </div>
            </div>
             <div class="form-group row">
                <div class="col-md-3 col-lg-2"></div>
                <div class="col-md-4">
                    <a href="{{url('laravel-crud-search-sort')}}" class="btn btn-danger">
                        Back</a>
                    {!! Form::button("Save",["type" => "submit","class"=>"btn
                btn-primary"])!!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
