<?php

namespace App\Http\Controllers\Auth;

use App\Medlab_candidate;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class Medlab_candidate_register_controller extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/medlab'; //original setting
    protected $redirectTo = '/medlab/candidate';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:medlab_candidate');
    }


    public function messages()
    {
        return [
            'pin.exists' => 'Invalid or used Scratch Card Pin',
            'body.required'  => 'A message is required',
        ];
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:medlab_candidates',
            'phone' => 'required|min:11|max:13|unique:medlab_candidates',
            'password' => 'required|string|min:6|confirmed',
            'pin' => [
                  'required',
                  'min:10',
                  Rule::exists('medlab_candidate_pins')->where(function ($query){
                    $query->where('status', 'active');
                  }),
            ]

        ], $this->messages());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Medlab_candidate::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function use_pin(array $data)
    {
      DB::table('medlab_candidate_pins')
            ->where('pin', $data['pin'])
            ->update(['status' => 'used']);


            return true;
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_registration_form()
    {
        return view('auth.register_medlab_candidate');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        //update and invalid (mark card as used) card
        $this->use_pin($request->all());

        event(new Registered($user = $this->create($request->all())));

        Auth::guard('medlab_candidate')->login($user);

        return $this->registered($request, $user) ?: redirect($this->redirectPath());
    }


}
