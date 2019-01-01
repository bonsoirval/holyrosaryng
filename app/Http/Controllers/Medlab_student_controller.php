<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nursing_student;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Nursing_candidate_pin;
use App\Courses;

class Medlab_student_controller extends Controller
{
    public function register(Request $request)
    {
      $pin = Nursing_candidate_pin::table('')->where([
        'pin' => $request->input('pin'),
        'serial_number' => $request->input('serial_number'),
        'status' => 'active'
        ])
        ->first();
      return $pin;
    }


    public function view_courses(Request $request)
    {
      $search = $request->get('search');
      $search_value = $request->get('search_value') != '' ? $request->get('search_value') : -1;
      $field = $request->get('field') != '' ? $request->get('field') : 'course_code';
      $sort = 'asc'; //$request->get('sort') != '' ? $request->get('sort') : 'asc';
      $courses = new Courses();

      switch($search_value)
        {
            case 'phone':
            {
                  $courses = $courses->where('phone', 'like', '%' . $search . '%')
                      ->orderBy($field, $sort)
                      ->paginate(5)
                      ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);

                  $title = 'View Student';
                  return view('backend.nursing.student.view_courses',['title' => $title, 'courses' => $courses] );
            }

            case 'email':
            {
              $courses = $courses->where('email', 'like', '%' . $search . '%')
                  ->orderBy($field, $sort)
                  ->paginate(5)
                  ->withPath('?search=' . $search . '&search_value=' . $search_value . '&field=' . $field . '&sort=' . $sort);

              $title = 'View Student';
              return view('backend.nursing.student.view_courses',['title' => $title, 'courses' => $courses] );
            }

            case 'course_code':
            {

              $courses = $courses->where('course_code', 'like', '%' . $search . '%')
                  ->orderBy($field, $sort)
                  ->paginate(5)
                  ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);


              $title = 'View Student';
              return view('backend.nursing.student.view_courses',['title' => $title, 'courses' => $courses] );
            }

            default:
            {
              $courses = $courses
                  ->orderBy($field, $sort)
                  ->paginate(5)
                  ->withPath('?search=' . $search . '&search_value=' . $search_value . '&field=' . $field . '&sort=' . $sort);

                  $title = 'View Student';
                  return view('backend.nursing.student.view_courses',['title' => $title, 'courses' => $courses] );
            }
        }

        //return view('backend.nursing.student.view_courses');
    }

    public function register_course(Request $request)
    {

      $search = $request->get('search');
      $search_value = $request->get('search_value') != '' ? $request->get('search_value') : -1;
      $field = $request->get('field') != '' ? $request->get('field') : 'course_code';
      $sort = 'asc'; //$request->get('sort') != '' ? $request->get('sort') : 'asc';
      $courses = new Courses();

      $courses = $courses->where('course_code', 'like', '%' . $search . '%')
          ->orderBy($field, $sort)
          ->paginate(5)
          ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);



      $title = 'Register Course';
      return view('backend.nursing.student.register_courses',['title' => $title, 'courses' => Courses::find($id = 1)] );
    }



    /*
    @var level

    */
    public function register_courses(Request $request)
    {
      $search = $request->get('search');
      $search_value = $request->get('search_value') != '' ? $request->get('search_value') : -1;
      $field = $request->get('field') != '' ? $request->get('field') : 'course_code';
      $sort = 'asc'; //$request->get('sort') != '' ? $request->get('sort') : 'asc';
      $courses = new Courses();

      switch($search_value)
        {
            case 'phone':
            {
                  $courses = $courses->where('phone', 'like', '%' . $search . '%')
                      ->orderBy($field, $sort)
                      ->paginate(5)
                      ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);

                  $title = 'View Student';
                  return view('backend.nursing.student.view_register_courses',['title' => $title, 'courses' => $courses] );
            }

            case 'email':
            {
              $courses = $courses->where('email', 'like', '%' . $search . '%')
                  ->orderBy($field, $sort)
                  ->paginate(5)
                  ->withPath('?search=' . $search . '&search_value=' . $search_value . '&field=' . $field . '&sort=' . $sort);

              $title = 'View Student';
              return view('backend.nursing.student.view_register_courses',['title' => $title, 'courses' => $courses] );
            }

            case 'course_code':
            {

              $courses = $courses->where('course_code', 'like', '%' . $search . '%')
                  ->orderBy($field, $sort)
                  ->paginate(5)
                  ->withPath('?search=' . $search . '&search_value=' . $search . '&field=' . $field . '&sort=' . $sort);


              $title = 'View Student';
              return view('backend.nursing.student.view_register_courses',['title' => $title, 'courses' => $courses] );
            }

            default:
            {
              $courses = $courses
                  ->orderBy($field, $sort)
                  ->paginate(5)
                  ->withPath('?search=' . $search . '&search_value=' . $search_value . '&field=' . $field . '&sort=' . $sort);

                  $title = 'View Student';
                  return view('backend.nursing.student.view_register_courses',['title' => $title, 'courses' => $courses] );
            }
        }

        //return view('backend.nursing.student.view_courses');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //specify guard
        $this->middleware('auth:nursing_student');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.medlab.student.index');
    }


    /*
    @return shows profile update form
    */
    public function showProfile_updateForm()
    {
      return view('backend.nursing.candidate.profile');
    }

    /*
    submits to the profile update controller
    */
    public function profile_update(Request $request)
    {
      $name = $request->input('surname');
      var_dump($name);
      return 'submited'; //view('backend.nursing.candidate.profile');
    }

    /*
    submits to the passport upload controller
    */
    public function passport_upload(Request $request)
    {

      $file = $request->file('passport');
      var_dump($file);
      //exit();
      $name = time(); // $file->getClientOriginalName(); // prepend the time (integer) to the original file name

      $file->move('images/candidates/nursing', $name); // move it to the 'uploads' directory (public/uploads)

      // create instance of Intervention Image
      //$img = Image::make('public/candidates/nursing/foo.jpg');

      // resize image to fixed size
      // See the docs - http://image.intervention.io/api/resize
      $img->resize(300, 200);

      // The below part is optional, this is if uploads "belongTo" a "User"
      // so you automatically insert the relation, if you don't need it, just
      // remove it.

      /*
      $user->uploads()->create([
          'original_name' => $name
      ]);
      */
      //Storage::delete('152358063.png', '1523585222.png', '1523585235.png');
      return 'done';

    }

    /*
    @return shows passport upload form
    */
    public function showPassport_uploadForm()
    {
      return view('backend.nursing.candidate.passport_upload');
    }

    /*
    submits to the profile update
    */
    public function contact(Request $request)
    {
      $contact_add = $request->input('contact_add');
      $permanent_add = $request->input('permanent_add');
      var_dump($contact_add);
      var_dump($permanent_add);
      return 'submited'; //view('backend.nursing.candidate.profile');
    }


    /*
    @return shows contact form
    */
    public function showContactForm()
    {
      return view('backend.nursing.candidate.contact');
    }



    /*
    @return shows next of kin form
    */
    public function showNextkinForm()
    {
      return view('backend.nursing.candidate.nextkin');
    }

    /*
    @return accepts submited value from the nextkin form
    */
    public function nextkin(Request $request)
    {
      $next_kin_name = $request->input('next_kin_name');
      $next_kin_address = $request->input('next_kin_address');
      $next_kin_phone = $request->input('next_kin_phone');
      $next_kin_relationship = $request->input('next_kin_relationship');

      var_dump($next_kin_name);
      var_dump($next_kin_address);
      var_dump($next_kin_phone);
      var_dump($next_kin_relationship);
      return 'submited'; //view('backend.nursing.candidate.profile');
    }

    /*
    @return shows password change form
    */
    public function showPassword_changeForm()
    {
      return view('backend.nursing.candidate.password_change');
    }

    /*
    @return accepts value from the password change form
    */
    public function password_change(Request $request)
    {
      $old_pass = $request->input('old_pass');
      $new_pass = $request->input('new_pass');
      $conf_new_pass = $request->input('conf_new_pass');

      var_dump($old_pass);
      var_dump($new_pass);
      var_dump($conf_new_pass);
      return 'submited'; //view('backend.nursing.candidate.profile');
    }

    /*
    @return shows olevel1 form
    */
    public function showOlevel1Form()
    {
      return view('backend.nursing.candidate.olevel1');
    }

    /*
    @return accepts value from olevel1 form
    */
    public function olevel1(Request $request)
    {
      $examination = $request->input('examination');
      $exam_number = $request->input('exam_number');
      $exam_center = $request->input('exam_center');
      $exam_year = $request->input('exam_year');
      $english = $request->input('english');
      $mathematics = $request->input('mathematics');
      $physics = $request->input('physics');
      $chemistry = $request->input('chemistry');
      $biology = $request->input('biology');


      var_dump($examination);
      var_dump($exam_number);
      var_dump($exam_center);
      var_dump($exam_year);
      var_dump($english);
      var_dump($mathematics);
      var_dump($physics);
      var_dump($chemistry);
      var_dump($biology);


      return 'submited'; //view('backend.nursing.candidate.profile');
    }

    /*
    @return accepts value from olevel1 form
    */
    public function olevel2(Request $request)
    {
      $examination = $request->input('examination');
      $exam_number = $request->input('exam_number');
      $exam_center = $request->input('exam_center');
      $exam_year = $request->input('exam_year');
      $english = $request->input('english');
      $mathematics = $request->input('mathematics');
      $physics = $request->input('physics');
      $chemistry = $request->input('chemistry');
      $biology = $request->input('biology');


      var_dump($examination);
      var_dump($exam_number);
      var_dump($exam_center);
      var_dump($exam_year);
      var_dump($english);
      var_dump($mathematics);
      var_dump($physics);
      var_dump($chemistry);
      var_dump($biology);
      return 'submited'; //view('backend.nursing.candidate.profile');
    }

    /*
    @return shows olevel2 form
    */
    public function showOlevel2Form()
    {
      return view('backend.nursing.candidate.olevel2');
    }

    /*
    @return shows preview form
    */
    public function showPreviewForm()
    {
      return view('backend.nursing.candidate.password_change');
    }

    /*
    @return accepted values from showPreviewForm
    */
    public function preveiw(Request $request)
    {
      $name = $request->input('surname');
      var_dump($name);
      return 'submited'; //view('backend.nursing.candidate.profile');
    }

    /*
    @return shows complete application form
    */
    public function showComplete_applicationForm()
    {
      return view('backend.nursing.candidate.password_change');
    }

    /*
    @return accepts values from completed application form
    */
    public function complete_application(Request $request)
    {
      $name = $request->input('surname');
      var_dump($name);
      return 'submited'; //view('backend.nursing.candidate.profile');
    }
}
