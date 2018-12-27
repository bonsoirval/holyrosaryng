<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard)
        {
          case 'admin':
          if(Auth::guard($guard)->check())
          {
            return redirect()->route('admin.dashboard');
          }
          break;

          case 'nursing_candidate':
          if(Auth::guard($guard)->check())
          {
            //exit('Stop RedirectAuthenticated');
            return redirect()->route('nursing_candidate_dashboard');
          }
          case "nursing_student":
          if(Auth::guard($guard)->check())
          {
            return redirect()->route('nursing_student_dashboard');
            //return redirect()->route('nursing.dashboard');
          }

          case 'medlab_candidate':
          if(Auth::guard($guard)->check())
          {
            //exit('Stop RedirectAuthenticated');
            return redirect()->route('medlab_candidate_dashboard');
          }


          default:
          if(Auth::guard($guard)->check())
          {
            return redirect('/home');
          }
          break;
        }
        /*
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }*/

        return $next($request);
    }
}
