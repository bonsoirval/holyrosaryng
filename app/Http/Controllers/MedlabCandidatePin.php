<?php

namespace App\Http\Controllers;
use App\MedlabCandidatePin;
use App\Http\Controllers/Controller;
use Illuminate\Http\Request;
use Session;

class MedlabCandidatePin extends Controller
{
  public function index()
  {
    //fetch all active medlab candidate pins
    $medlab_candidate_pin = MedlabCandidatePin::orderBy('status', 'desc')->get()->limit(1);

    //pass medlab candidate pins to view
    return view('posts.index', ['posts' => $posts]);
  }
}
