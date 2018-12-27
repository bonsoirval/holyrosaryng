<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MedlabAdminLoginController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/medlab'; //original setting
    protected $redirectTo = '/admin'; //candidate';


    public function __construct()
    {
      //exit('Xup');
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
      $title = 'Medlab Admin Login';
      return view('auth.admin_login', ['title' => $title]);
    }

    public function login(Request $request)
    {
      //return true;
      //validate form data
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6',
      ]);

      //attempt to log the user in
      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
      {
        //if successful, then redirect to their intended location
        return redirect()->intended(route('admin.dashboard'));
      }

      //if unsuccessful, then redirect back to the login with for data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        //$request->session()->invalidate();
        return redirect('/');
    }
}
