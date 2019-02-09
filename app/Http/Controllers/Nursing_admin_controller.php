<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nursing_student;
use Illuminate\Support\Facades\DB;
use Session;
use Excel;
use File;


class Nursing_admin_controller extends Controller
{
  public function import(Request $request)
  {
      //error debugging variables
      $errormsg = "";
      $insertData = false;

      //validate the xls file
      $this->validate($request, array(
          'file'      => 'required'
      ));

      if($request->hasFile('file')){
          $extension = File::extension($request->file->getClientOriginalName());
          if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {

              $path = $request->file->getRealPath();
              $data = Excel::load($path, function($reader) {})->get();
              if(!empty($data) && $data->count()){
                  foreach ($data as $key => $value) {
                      $insert[] = [
                      'exam_number' => $value->exam_number,
                      'user_id' => $value->user_id,
                      'score' => $value->score,
                      'remark' => $value->remark,
                      ];
                  }

                  if(!empty($insert)){
                      /*
                      $errormsg = "";
                      $result = false;
                      try{
                          $result = DB::table('members')->insert(
                                  [
                                      'username' => $request->username,
                                      'phone' => $request->phone,
                                      'status' => 1
                                  ]
                              );
                      }catch(Exception $exception)
                      {
                          $errormsg = 'Database error! ' . $exception->getCode();
                      }
                      return Response::json(['success'=>$result,'errormsg'=>$errormsg]);
                      */
                      /*
                      try {
                          $user = User::findOrFail($request->input('user_id'));
                      } catch (ModelNotFoundException $exception) {
                          return back()->withError($exception->getMessage())->withInput();
                      }*/

                      try{
                        $insertData = DB::table('nursing_candidate_result')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                      }catch(\Exception $exception)
                      {
                          $errormsg = 'Database error! ' . $exception->getCode();
                          //Session::flash('error', $errormsg);
                          Session::flash('error', "Make sure no duplicate value(s) for user_id column. Contact super admin if problem continues using bonsoirval@gmail.com");
                          return back();
                      }
                  }
              }

              return back();

          }else {
              Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
              return back();
          }
      }
  }

    public function nursing_candidate_upload_result()
    {
        return view('backend.admin.nursing.nursing_candidate_upload_result_submit');
    }

    public function nursing_candidate_upload_result_submit(Request $request)
    {
        //validate the xls file

        $this->validate($request, array(
            'result_file'      => 'required'
        ));
        if($request->hasFile('result_file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {

                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {})->get();

                if(!empty($data) && $data->count()){

                    foreach ($data as $key => $value) {
                        $insert[] = [
                        'id' => $value->id,
                        'exam_nubmer' => $value->exam_nubmer,
                        'user_id' => $value->user_id,
                        'remark' => $value->remark,
                        ];
                    }

                    if(!empty($insert)){
                        $insertData = DB::table('nursing_candidate_result')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }

                return back();

            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }

    /*
    public function nursing_candidate_upload_result_submit()
    {
          if($request->hasFile('sample_file'))
          {
               $path = $request->file('sample_file')->getRealPath();
               $data = \Excel::load($path)->get();
               if($data->count()){
                   foreach ($data as $key => $value) {
                       $arr[] =
                         [
                           'name' => $value->name,
                           'details' => $value->details
                         ];
                   }
                   if(!empty($arr)){
                       \DB::table('products')->insert($arr);
                       dd('Insert Record successfully.');
                   }
               }
           }
           dd('Request data does not have any files to import.');
    }
    */
    public function nursing_candidate_pin_problem()
    {
      echo "Hello World";
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //specify guard
        $this->middleware('auth:nursing_admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Admin Login Dashboard';
        return view('backend.admin.nursing.index', ['title' => $title]);
    }


    public function view_students(Request $request)
    {

        //dd($request);
        $search_level = $request->get('search_level');
        $search_school = $request->get('search_school');
        $search_parameter = $request->get('search_parameter');

        $search = $request->get('search');

        $search_value = $request->get('search_value') != '' ? $request->get('search_value') : -1;
        $field = $request->get('field') != '' ? $request->get('field') : 'name';
        $sort = 'asc'; //$request->get('sort') != '' ? $request->get('sort') : 'asc';

        if($search_school == 'nursing')
        {
            $nursing_student = new Nursing_student();
            if($search_parameter == 'name')
            {
                //searching for a student name
                $nursing_student = $nursing_student
                //->where('name', 'like', '%' . $search . '%')
                ->where('current_year', $search_level)
                ->where('name', 'like', '%'.ucfirst($search).'%') //searching with name
                ->orderBy($field, $sort)
                ->paginate(5)
                ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
                $title = 'View Student';
                return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
            }
            elseif($search_parameter == 'email')
            {
               //searching for a student using his email
               $nursing_student = $nursing_student
               //->where('name', 'like', '%' . $search . '%')
               ->where('current_year', $search_level)
               ->where('email', 'like', '%'.strtolower($search).'%') //searching with name
               ->orderBy($field, $sort)
               ->paginate(5)
               ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
               $title = 'View Student';
               return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
            }
            elseif($search_parameter == 'phone')
            {
               //search for a student using his phone
               $nursing_student = $nursing_student
               //->where('name', 'like', '%' . $search . '%')
               ->where('current_year', $search_level)
               ->where('phone', 'like', '%'.ucfirst($search).'%') //searching with name
               ->orderBy($field, $sort)
               ->paginate(5)
               ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
               $title = 'View Student';
               return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
            }
            elseif($search_parameter == 'mat_number')
            {
              //search for a student using his phone
              $nursing_student = $nursing_student
              //->where('name', 'like', '%' . $search . '%')
              ->where('current_year', $search_level)
              ->where('mat_number', 'like', '%'.ucfirst($search).'%') //searching with name
              ->orderBy($field, $sort)
              ->paginate(5)
              ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
              $title = 'View Student';
              return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
            }

        }
        elseif($search_school == 'medlab')
        {
              $nursing_student = new Medlab_student();
              if($search_parameter == 'name')
              {
                  //searching for a student name
                  $nursing_student = $nursing_student
                  //->where('name', 'like', '%' . $search . '%')
                  ->where('current_year', $search_level)
                  ->where('name', 'like', '%'.ucfirst($search).'%') //searching with name
                  ->orderBy($field, $sort)
                  ->paginate(5)
                  ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
                  $title = 'View Student';
                  return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
              }
              elseif($search_parameter == 'email')
              {
                 //searching for a student using his email
                 $nursing_student = $nursing_student
                 //->where('name', 'like', '%' . $search . '%')
                 ->where('current_year', $search_level)
                 ->where('email', 'like', '%'.strtolower($search).'%') //searching with name
                 ->orderBy($field, $sort)
                 ->paginate(5)
                 ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
                 $title = 'View Student';
                 return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
              }
              elseif($search_parameter == 'phone')
              {
                 //search for a student using his phone
                 $nursing_student = $nursing_student
                 //->where('name', 'like', '%' . $search . '%')
                 ->where('current_year', $search_level)
                 ->where('phone', 'like', '%'.ucfirst($search).'%') //searching with name
                 ->orderBy($field, $sort)
                 ->paginate(5)
                 ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
                 $title = 'View Student';
                 return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
              }
              elseif($search_parameter == 'mat_number')
              {
                //search for a student using his phone
                $nursing_student = $nursing_student
                //->where('name', 'like', '%' . $search . '%')
                ->where('current_year', $search_level)
                ->where('mat_number', 'like', '%'.ucfirst($search).'%') //searching with name
                ->orderBy($field, $sort)
                ->paginate(5)
                ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
                $title = 'View Student';
                return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
              }
        }
        elseif($search_school == 'midwifery')
        {
              $nursing_student = new Midwife_student();
              if($search_parameter == 'name')
              {
                  //searching for a student name
                  $nursing_student = $nursing_student
                  //->where('name', 'like', '%' . $search . '%')
                  ->where('current_year', $search_level)
                  ->where('name', 'like', '%'.ucfirst($search).'%') //searching with name
                  ->orderBy($field, $sort)
                  ->paginate(5)
                  ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
                  $title = 'View Student';
                  return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
              }
              elseif($search_parameter == 'email')
              {
                 //searching for a student using his email
                 $nursing_student = $nursing_student
                 //->where('name', 'like', '%' . $search . '%')
                 ->where('current_year', $search_level)
                 ->where('email', 'like', '%'.strtolower($search).'%') //searching with name
                 ->orderBy($field, $sort)
                 ->paginate(5)
                 ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
                 $title = 'View Student';
                 return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
              }
              elseif($search_parameter == 'phone')
              {
                 //search for a student using his phone
                 $nursing_student = $nursing_student
                 //->where('name', 'like', '%' . $search . '%')
                 ->where('current_year', $search_level)
                 ->where('phone', 'like', '%'.ucfirst($search).'%') //searching with name
                 ->orderBy($field, $sort)
                 ->paginate(5)
                 ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
                 $title = 'View Student';
                 return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
              }
              elseif($search_parameter == 'mat_number')
              {
                //search for a student using his phone
                $nursing_student = $nursing_student
                //->where('name', 'like', '%' . $search . '%')
                ->where('current_year', $search_level)
                ->where('mat_number', 'like', '%'.ucfirst($search).'%') //searching with name
                ->orderBy($field, $sort)
                ->paginate(5)
                ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);
                $title = 'View Student';
                return view('backend.admin.view_students',['title' => $title, 'students' => $nursing_student] );
              }
        }
  }

    public function student_update(Request $request, $id)
    {

        if ($request->isMethod('get'))
        {
            $title = 'Edit Student Details';
            return view(
              'backend.admin.student_update_form',
              ['customer' => Nursing_student::find($id),'title' => $title ]);
        }else {
            $rules = [
                'name' => 'required',
                'email' => 'required|email',
            ];
            $this->validate($request, $rules);
            $customer = Nursing_student::find($id);
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->email = $request->email;
            $customer->save();
            return redirect(route('admin_student_view'));
            //return 'done'; //return redirect('/laravel-crud-search-sort');
        }
    }
}
