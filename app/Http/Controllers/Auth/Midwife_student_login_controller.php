<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class Midwife_student_login_controller extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:nursing_student', ['except' => ['logout']]);
  }
  public function show_login_form()
  {
    return view('auth.midwife-login');
  }

  public function login(Request $request)
  {
    //dd($request);
    //return true;
    //validate form data
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required|min:6',
    ]);

    //attempt to log the user in
    if(Auth::guard('nursing_student')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
    {
      //if successful, then redirect to their intended location
      return redirect()->intended(route('nursing_student_dashboard'));
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
      Auth::guard('nursing_student')->logout();
      //$request->session()->invalidate();
      return redirect('/');
  }
}
