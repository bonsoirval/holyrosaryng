<?php

namespace App\Http\Controllers;
use App\NursingCandidatePin;
use App\Http\Controllers/Controller;
use Illuminate\Http\Request;
use Session;

class NursingCandidatePin extends Controller
{
  public function index()
  {
    //fetch all active nursing candidate pins
    $nursing_candidate_pin = NursingCandidatePin::orderBy('status', 'desc')->get()->limit(1);

    //pass nursing candidate pins to view
    return view('posts.index', ['posts' => $posts]);
  }
}
