<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nursing_candidate;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Nursing_candidate_pin;
//use Illuminate\Contracts\Validation\Validator;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Nursing_candidates_profiles;
use Image;

use Validator;

class Nursing_candidate_controller extends Controller
{
  /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('nursing_candidate')->logout();
        //$request->session()->invalidate();
        return redirect('/');
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //specify guard
        $this->middleware('auth:nursing_candidate');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.nursing.candidate.index');
    }

    /*
    *method used in fetching the countries used in filling the select input
    */

    /*
    @return shows profile update form
    */
    public function showProfile_updateForm()
    {
      $countries = DB::table('countries')->select('id', 'name')->get();
      $countries = json_decode(json_encode($countries)); //it will return you stdclass object
      $countries = json_decode(json_encode($countries),true); //it will return you data in array
      //echo '<pre>'; print_r($countries);

      $states = DB::table('states')->select('id', 'name')->where('country_id', 160)->get();
      $states = json_decode(json_encode($states)); //it will return you stdclass object
      $states = json_decode(json_encode($states),true); //it will return you data in array
      //echo '<pre>'; print_r($countries);

      //var_dump($profile);
      //exit("Exit");

      return view('backend.nursing.candidate.profile',['countries' => $countries,'states' => $states,]);
      //return redirect()->route('nursing_candidate_profile_update')->with('countries', $countries);
    }

    /*
    submits to the profile update controller
    */
    public function profile_update(Request $request)
    {
//dd($request->all());
          $this->validate($request, [
              'dob' => 'required|max:10|min:9',
              'birth_town' => 'required',
              'nationality' => 'required',
              'origin_state'=> 'required',
              'lga'=> 'required',
              'gender'=> 'required',

          ]);

          //fetch already existing database data
          $profile = DB::table('nursing_candidates_profiles')
                      ->select("dob", 'gender', 'origin_state', 'birth_town')
                      ->where('user_id', Auth::user()->id)
                      ->get();

          $profile = json_decode(json_encode($profile));
          $profile = json_decode(json_encode($profile), true);

          //if profile is not empty, ie it already exists
          if(!empty($profile))
          {//update profile
                DB::table('nursing_candidates_profiles')
                ->where('user_id', Auth::user()->id)
                ->update(
                [
                  'dob' => $request['dob'],
                  'birth_town' => $request['birth_town'],
                  'nationality' => $request['nationality'],
                  'origin_state' => $request['origin_state'],
                  'lga' => $request['lga'],
                  'gender'=>$request['gender']
                ]
            );

          }else{

            //insert fresh data into candidates_profile
              DB::table('nursing_candidates_profiles')->insert(
                  [
                    'user_id' =>  Auth::user()->id,
                    'dob' => $request['dob'],
                    'birth_town' => $request['birth_town'],
                    'nationality' => $request['nationality'],
                    'origin_state' => $request['origin_state'],
                    'lga' => $request['lga'],
                    'gender'=>$request['gender']
                  ]
              );
          }



      //$name = $request->input('dob');
      //var_dump($request->input());
      return redirect(route('nursing_candidate_passport_upload')); //'submited'; //view('backend.nursing.candidate.profile');
    }

    /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  /*public function messages()
  {
      return [
          'passport.max' => 'A title is required',
          'body.required'  => 'A message is required',
      ];
  }*/

    /*
    submits to the passport upload controller
    */
    public function passport_upload(Request $request)
    {
          $this->validate($request, [
    	    	'passport' => 'max:30|mimes:jpeg,bmp,png', //only allow this type extension file.
    		    ]);

    		//$file = $request->file('passport');
    		// image upload in public/upload folder.
    		//$file->move('uploads', $file->getClientOriginalName());
    		//echo 'Image Uploaded Successfully';

        if (Nursing_candidates_profiles::select('passport')
                                  ->where('passport', '<>', '')
                                  ->where('passport', '<>', NULL)
                                  ->where('user_id', '=', Auth::user()->id)
                                  ->exists()) {


          //user passport found, update / change it
          $file = $request->file('passport');

          //get already existing file name from database
          $passport = Nursing_candidates_profiles::select('passport')
                                    ->where('passport', '<>', '')
                                    ->where('user_id', '=', Auth::user()->id)
                                    ->get();

          $passport = json_decode(json_encode($passport));
          $passport = json_decode(json_encode($passport), true);

          $old_passport;

          foreach($passport as $pass)
          {
            $old_passport = $pass;
          }

          //rename passport to user->id
          $name = Auth::user()->id; //time(); // $file->getClientOriginalName(); // prepend the time (integer) to the original file name
          $passport = $name.'.'.$file->extension();

          //var_dump($passport);
          //var_dump($old_passport['passport']);

          $current_working_directory = getcwd();

          chdir('images/candidates/nursing/');
          //delete existing passport
          @unlink($old_passport['passport']);
          ///Storage::delete();
          chdir($current_working_directory);

          /*$extension = $request->file->extension();*/
          $file->move('images/candidates/nursing', $passport); // move it to the 'uploads' directory (public/uploads)


          //update passport column in candidates_profiles
          DB::table('nursing_candidates_profiles')
              ->where('user_id', Auth::user()->id)
              ->update(['passport' => $passport]);

            //exit('Stop Now');

          // create instance of Intervention Image
          $img = Image::make('images/candidates/nursing/'.$passport);

          // resize image to fixed size
          // See the docs - http://image.intervention.io/api/resize

          $img->resize(300, 200);

          // The below part is optional, this is if uploads "belongTo" a "User"
          // so you automatically insert the relation, if you don't need it, just
          // remove it.

          //Storage::delete('152358063.png', '1523585222.png', '1523585235.png');
          return redirect(route('nursing_candidate_contact')); //true; //return 'done';

        }else{
          //user passport not found, insert it

          $file = $request->file('passport');
          //var_dump($file);
          //exit();
          $name = Auth::user()->id; //time(); // $file->getClientOriginalName(); // prepend the time (integer) to the original file name

          $passport = $name.'.'.$file->extension();

          $file->move('images/candidates/nursing',$passport); // move it to the 'uploads' directory (public/uploads)

          //insert passport column in nursing_candidates_profiles
          //we used update below because the row already exists with passport column empty
          DB::table('nursing_candidates_profiles')
              ->where('user_id', Auth::user()->id)
              ->update(['passport' => $passport]);


          // create instance of Intervention Image
          $img = Image::make('public/candidates/nursing/'.$passport);

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
          return redirect(route('medlab_candidate_contact')); //route the user to candidate contact form

        }

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
            $this->validate($request, [
              'contact_add' => 'required', //only allow this type extension file.
              'permanent_add' => 'required',
            ]);


      //fetch already existing database data
      $contacts = DB::table('nursing_candidates_contacts')
                  ->select('contact_address', 'permanent_address')
                  ->where('user_id', Auth::user()->id)->get();

      $contacts = json_decode(json_encode($contacts));
      $contacts = json_decode(json_encode($contacts), true);

      //if profile is not empty, ie it already exists
      if(!empty($contacts))
      {//update profile
        /*
        DB::table('users')
        ->where('id', 1)
        ->update(['votes' => 1]);
        */
        DB::table('nursing_candidates_contacts')
            ->where('user_id', Auth::user()->id)
            ->update(
            [
              'contact_address' => $request['contact_add'],
              'permanent_address' => $request['permanent_add'],
            ]
        );
        return redirect(route('nursing_candidate_nextkin'));

      }else{

        //insert fresh data into candidates_profile
          DB::table('nursing_candidates_contacts')->insert(
              [
                'user_id' =>  Auth::user()->id,
                'contact_address' => $request['contact_add'],
                'permanent_address' => $request['permanent_add'],
              ]
          );
          return redirect(route('nursing_candidate_nextkin'));
      }

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
          $this->validate($request, [
            'next_kin_name' => 'required', //only allow this type extension file.
            'next_kin_address' => 'required',
            'next_kin_phone' => 'required|max:13',
            'next_kin_relationship' => 'required',
          ]);

        //fetch already existing database data
        $nextkin = DB::table('nursing_candidates_nextkins')
                    ->select('relationship')
                    ->where('user_id', Auth::user()->id)->get();

        $nextkin = json_decode(json_encode($nextkin));
        $nextkin = json_decode(json_encode($nextkin), true);

        //if profile is not empty, ie it already exists
        if(!empty($nextkin))
        {//update profile
          /*
          DB::table('users')
          ->where('id', 1)
          ->update(['votes' => 1]);
          */
          DB::table('nursing_candidates_nextkins')
              ->where('user_id', Auth::user()->id)
              ->update(
              [
                'user_id' =>  Auth::user()->id,
                'name' => $request['next_kin_name'],
                'nextkin_address' => $request['next_kin_address'],
                'nextkin_phone' => $request['next_kin_phone'],
                'relationship' => $request['next_kin_relationship'],
              ]
          );
          return redirect(route('nursing_candidate_olevel1'));

        }else{

          //insert fresh data into candidates_profile
            DB::table('nursing_candidates_nextkins')->insert(
                [
                  'user_id' =>  Auth::user()->id,
                  'name' => $request['next_kin_name'],
                  'nextkin_address' => $request['next_kin_address'],
                  'nextkin_phone' => $request['next_kin_phone'],
                  'relationship' => $request['next_kin_relationship'],
                ]
            );

            return redirect(route('nursing_candidate_olevel1'));
        }

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

      $this->validate($request, [
        'examination' => 'required', //only allow this type extension file.
        'exam_number' => 'required',
        //'exam_center' => 'required',
        'exam_year' => 'required',
        'english' => 'required',
        'mathematics' => 'required',
        'physics' => 'required',
        'chemistry' => 'required',
        'biology' => 'required',
      ]);


      //fetch already existing database data
      $olevel1 = DB::table('nursing_candidates_olevels1')
                  ->select('*')
                  ->where('user_id', Auth::user()->id)->get();

      $olevel1 = json_decode(json_encode($olevel1));
      $olevel1 = json_decode(json_encode($olevel1), true);


            //if olevel1 is not empty, ie it already exists
            if(empty($olevel1))
            {
              //insert fresh data into candidates_profile
                DB::table('nursing_candidates_olevels1')->insert(
                    [
                      'user_id' =>  Auth::user()->id,
                      'examination' => $request['examination'],
                      'exam_number' => $request['exam_number'],
                      //'exam_center' => $request['exam_center'],
                      'exam_year' => $request['exam_year'],
                      'english' => $request['english'],
                      'mathematics' => $request['mathematics'],
                      'physics' => $request['physics'],
                      'chemistry' => $request['chemistry'],
                      'biology' => $request['biology'],
                    ]
                );
                return redirect(route('nursing_candidate_olevel2'));

            }else{
                //insert fresh data into candidates_profile
                DB::table('nursing_candidates_olevels1')
                    ->where('user_id', Auth::user()->id)
                    ->update(
                    [
                      //'user_id' =>  Auth::user()->id,
                      'examination' => $request['examination'],
                      'exam_number' => $request['exam_number'],
                      //'exam_center' => $request['exam_center'],
                      'exam_year' => $request['exam_year'],
                      'english' => $request['english'],
                      'mathematics' => $request['mathematics'],
                      'physics' => $request['physics'],
                      'chemistry' => $request['chemistry'],
                      'biology' => $request['biology'],
                    ]
                );
                return redirect(route('nursing_candidate_olevel2'));
            }
}

    /*
    @return accepts value from olevel1 form
    */
    public function olevel2(Request $request)
    {
      $this->validate($request, [
        'examination' => 'required', //only allow this type extension file.
        'exam_number' => 'required',
        //'exam_center' => 'required',
        'exam_year' => 'required',
        'english' => 'required',
        'mathematics' => 'required',
        'physics' => 'required',
        'chemistry' => 'required',
        'biology' => 'required',
      ]);

      //fetch already existing database data
      $olevel2 = DB::table('nursing_candidates_olevels2')
                  ->select('*')
                  ->where('user_id', Auth::user()->id)->get();

      $olevel2 = json_decode(json_encode($olevel2));
      $olevel2 = json_decode(json_encode($olevel2), true);


            //if olevel1 is not empty, ie it already exists
            if(empty($olevel2))
            {
              //insert fresh data into candidates_profile
                DB::table('nursing_candidates_olevels2')->insert(
                    [
                      'user_id' =>  Auth::user()->id,
                      'examination' => $request['examination'],
                      'exam_number' => $request['exam_number'],
                      //'exam_center' => $request['exam_center'],
                      'exam_year' => $request['exam_year'],
                      'english' => $request['english'],
                      'mathematics' => $request['mathematics'],
                      'physics' => $request['physics'],
                      'chemistry' => $request['chemistry'],
                      'biology' => $request['biology'],
                    ]
                );
                return redirect(route('nursing_candidate_preview'));

            }else{
                //insert fresh data into candidates_profile
                DB::table('nursing_candidates_olevels2')
                    ->where('user_id', Auth::user()->id)
                    ->update(
                    [
                      //'user_id' =>  Auth::user()->id,
                      'examination' => $request['examination'],
                      'exam_number' => $request['exam_number'],
                      //'exam_center' => $request['exam_center'],
                      'exam_year' => $request['exam_year'],
                      'english' => $request['english'],
                      'mathematics' => $request['mathematics'],
                      'physics' => $request['physics'],
                      'chemistry' => $request['chemistry'],
                      'biology' => $request['biology'],
                    ]
                );
                return redirect(route('nursing_candidate_preview'));
            }
    }

    /*
    @return shows olevel2 form
    */
    public function showOlevel2Form()
    {
      return view('backend.nursing.candidate.olevel2');
    }

    public function get_nationality($country_code)
    {
        $country = DB::table('countries')->select("name")->where('id', $country_code)->get();
        foreach($country as $country_name):
            $country = array(
              'name' => $country_name->name,
            );
        endforeach;
        return $country['name'];
    }

    public function get_state($state_code)
    {
        $state = DB::table('states')->select("name")->where('id', $state_code)->get();
        foreach($state as $state_name):
            $state = array(
              'name' => $state_name->name,
            );
        endforeach;
        return $state['name'];
    }
        public function user_profile()
        {
            //fetch user profile
              $profile = DB::table('nursing_candidates_profiles')->select("*")->where('user_id', Auth::user()->id)->get();
              $profile = json_decode(json_encode($profile));
              $profile = json_decode(json_encode($profile), true);

              if(sizeof($profile) === 0)
              {
                return NULL;
              }
              //converting arrays to associative arrays
                foreach($profile as $user_profile):
                  $user_profile = array(
                      'gender' => $user_profile['gender'],
                      "dob"=>$user_profile['dob'],
                      "birth_town" =>$user_profile['birth_town'],
                      "lga" =>$user_profile['lga'],
                      "origin_state" =>$this->get_state($user_profile['origin_state']),
                      "nationality" =>$this->get_nationality($user_profile['nationality']),
                  );

                endforeach;
                return $user_profile;
        }
        public function get_nextkin()
        {
          //next of kin details
          $nextkins = DB::table('nursing_candidates_nextkins')->select('*')->where('user_id', Auth::user()->id)->get();
          $nextkins = json_decode(json_encode($nextkins));
          $nextkins = json_decode(json_encode($nextkins), true);

          if(sizeof($nextkins) === 0)
          {
            return NULL;
          }
          //converting arrays to associative arrays
            foreach($nextkins as $nextkin):
              $nextkin = array(
                  'name' => $nextkin['name'],
                  "nextkin_address"=>$nextkin['nextkin_address'],
                  "nextkin_phone"=>$nextkin['nextkin_phone'],
                  'relationship' => $nextkin['relationship'],
              );

            endforeach;

            return $nextkin;
        }

          public function get_olevel1()
          {
                //fetch user olevel1
                $olevel1 = DB::table('nursing_candidates_olevels1')->select("*")->where('user_id', Auth::user()->id)->get();
                $olevel1 = json_decode(json_encode($olevel1));
                $olevel1 = json_decode(json_encode($olevel1), true);

                if(sizeof($olevel1) === 0)
                {
                  return "No olevel result";
                }
                //converting arrays to associative arrays
                  foreach($olevel1 as $candidate_olevel1):
                    $olevel1 = array(
                        'english' => $candidate_olevel1['english'],
                        "examination"=>$candidate_olevel1['examination'],
                        "exam_number"=>$candidate_olevel1['exam_number'],
                        'exam_year' => $candidate_olevel1['exam_year'],
                        'biology' => $candidate_olevel1['biology'],
                        'physics' => $candidate_olevel1['physics'],
                        'chemistry' => $candidate_olevel1['chemistry'],
                        'mathematics' => $candidate_olevel1['mathematics'],
                    );

                  endforeach;

              return $olevel1;

          }

        public function get_olevel2()
        {
              //fetch user olevel2
              $olevel2 = DB::table('nursing_candidates_olevels2')->select("*")->where('user_id', Auth::user()->id)->get();
              $olevel2 = json_decode(json_encode($olevel2));
              $olevel2 = json_decode(json_encode($olevel2), true);

              if(sizeof($olevel2) === 0)
              {
                return NULL;
              }
              //converting arrays to associative arrays
                foreach($olevel2 as $candidate_olevel2):
                  $olevel2 = array(
                      'english' => $candidate_olevel2['english'],
                      "examination"=>$candidate_olevel2['examination'],
                      "exam_number"=>$candidate_olevel2['exam_number'],
                      'exam_year' => $candidate_olevel2['exam_year'],
                      'biology' => $candidate_olevel2['biology'],
                      'physics' => $candidate_olevel2['physics'],
                      'chemistry' => $candidate_olevel2['chemistry'],
                      'mathematics' => $candidate_olevel2['mathematics'],
                  );

                endforeach;

            return $olevel2;

        }

        public function get_contacts()
        {
          $contacts = DB::table('nursing_candidates_contacts')->select('*')->where('user_id', Auth::user()->id)->get();
          $contacts = json_decode(json_encode($contacts));
          $contacts = json_decode(json_encode($contacts), true);

          if(sizeof($contacts) === 0)
          {
            return NULL;
          }
          //converting arrays to associative arrays
            foreach($contacts as $user_contacts):
              $contacts = array(
                  'contact_address' => $user_contacts['contact_address'],
                  "permanent_address"=>$user_contacts['permanent_address'],
              );

            endforeach;

            return $contacts;
        }
    /*
    @return shows preview form
    */
    public function showPreviewForm()
    {
      $user_profile = $this->user_profile();
      $contacts = $this->get_contacts();
      $nextkin = $this->get_nextkin();
      $olevel1 = $this->get_olevel1();
      $olevel2 = $this->get_olevel2();

      return view('backend.nursing.candidate.preview', [
                    'user_profile' => $user_profile,
                    'olevel1' => $olevel1,
                    'olevel2' => $olevel2,
                    'contacts' => $contacts,
                    'nextkin' => $nextkin,]);
    }

    /*
    @return accepted values from showPreviewForm
    */
    public function preview_submit(Request $request)
    {
      return redirect(route('candidate_complete_application'));
    }

    /*
    @return shows complete application form
    */
    public function showComplete_applicationForm()
    {
      $user_profile = $this->user_profile();
      $contacts = $this->get_contacts();
      $nextkin = $this->get_nextkin();
      $olevel1 = $this->get_olevel1();
      $olevel2 = $this->get_olevel2();


      /*'user_profile' => $user_profile,
      'olevel1' => $olevel1,
      'olevel2' => $olevel2,
      'contacts' => $contacts,
      'nextkin' => $nextkin,*/
      return view('backend.nursing.candidate.complete_application',
                  [
                    'passport' => $this->get_passport(Auth::user()->id),
                    'user_profile' => $user_profile,
                    "origin_state" =>$user_profile['origin_state'],
                    'address' => $contacts['contact_address'],

                  ]);
    }

    public function get_passport($id)
    {
        //getting profile passport
        $passport = DB::table('nursing_candidates_profiles')->select('passport')->where('user_id', Auth::user()->id)->get();
        $passport = json_decode(json_encode($passport));
        $passport = json_decode(json_encode($passport), true);

        $candidate_passport = array();

        //converting arrays to associative arrays
          foreach($passport as $user_passport):
            $candidate_passport['passport'] = $user_passport['passport'];
          endforeach;

          return $candidate_passport['passport'];
    }
    /*
    @return accepts values from completed application form
    */
    public function complete_application(Request $request)
    {


      /*
      $this->validate($request, [
        'examination' => 'required', //only allow this type extension file.
        'exam_number' => 'required',
        'exam_center' => 'required',
        'exam_year' => 'required',
        'english' => 'required',
        'mathematics' => 'required',
        'physics' => 'required',
        'chemistry' => 'required',
        'biology' => 'required',
      ]);

      //insert fresh data into candidates_profile
        DB::table('nursing_candidates_profiles')->insert(
            [
              'user_id' =>  Auth::user()->id,
              'examination' => $request['examination'],
              'exam_number' => $request['exam_number'],
              'exam_center' => $request['exam_center'],
              'exam_year' => $request['exam_year'],
              'english' => $request['english'],
              'mathematics' => $request['mathematics'],
              'physics' => $request['physics'],
              'chemistry' => $request['chemistry'],
              'biology' => $request['biology'],
            ]
        );
        return redirect(route('candidate_preview'));
      */
    }
}
