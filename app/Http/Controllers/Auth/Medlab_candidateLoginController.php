<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class Medlab_candidateLoginController extends Controller
{

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  //protected $redirectTo = '/medlab'; //original setting
  protected $redirectTo = '/medlab/candidate';

  public function __construct()
  {
    $this->middleware('guest:medlab_candidate', ['except' => ['logout']]);
  }
  public function showLoginForm()
  {
    return view('auth.medlab-candidate-login');
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
    if(Auth::guard('medlab_candidate')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
    {
      //if successful, then redirect to their intended location
      return redirect()->intended(route('medlab_candidate_login_submit'));
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
      Auth::guard('medlab_candidate')->logout();
      //$request->session()->invalidate();
      return redirect('/');
  }
}
