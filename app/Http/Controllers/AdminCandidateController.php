<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nursing_student;


class AdminCandidateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //specify guard
        $this->middleware('auth:admin');
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
        $search = $request->get('search');
        $search_value = $request->get('search_value') != '' ? $request->get('search_value') : -1;
        $field = $request->get('field') != '' ? $request->get('field') : 'name';
        $sort = 'asc'; //$request->get('sort') != '' ? $request->get('sort') : 'asc';
        $customers = new Nursing_student();

/*
        if ($search_value != -1)
            $customers = $customers->where('name', $search_value);
*/
        switch($search_value)
          {
              case 'phone':
              {
                    $customers = $customers->where('phone', 'like', '%' . $search . '%')
                        ->orderBy($field, $sort)
                        ->paginate(5)
                        ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);

                    $title = 'View Student';
                    return view('backend.admin.view_students',['title' => $title, 'customers' => $customers] );
              }

              case 'email':
              {
                $customers = $customers->where('email', 'like', '%' . $search . '%')
                    ->orderBy($field, $sort)
                    ->paginate(5)
                    ->withPath('?search=' . $search . '&search_value=' . $search_value . '&field=' . $field . '&sort=' . $sort);

                $title = 'View Student';
                return view('backend.admin.view_students',['title' => $title, 'customers' => $customers] );
              }

              case 'name':
              {

                $customers = $customers->where('name', 'like', '%' . $search . '%')
                    ->orderBy($field, $sort)
                    ->paginate(5)
                    ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);


                $title = 'View Student';
                return view('backend.admin.view_students',['title' => $title, 'customers' => $customers] );
              }

              default:
              {
                $customers = $customers
                    ->orderBy($field, $sort)
                    ->paginate(5)
                    ->withPath('?search=' . $search . '&search_value=' . $search_value . '&field=' . $field . '&sort=' . $sort);

                    $title = 'View Student';
                    return view('backend.admin.view_students',['title' => $title, 'customers' => $customers] );
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
