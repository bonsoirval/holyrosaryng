<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nursing_student;
use App\Midwife_student;
use App\Medlab_student;


class Nursing_admin_controller extends Controller
{
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
        return view('backend.admin.index', ['title' => $title]);
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
