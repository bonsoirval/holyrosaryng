<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Holyrosaryng_controller extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = array(
            'title' => 'Holy Rosary Hospital, Emekuku',
        );
        return view('frontend.index')->with('data', $data);
    }

    public function holyrosary_about()
    {
          $data = array (
            'title' => 'About Holy Rosary Hospital, Emekuku',
          );
          return view ('frontend.about')->with('data', $data);

    }

    public function holyrosary_admission()
    {
        $data = array (
          'title' => 'About Holy Rosary Hospital, Emekuku',
        );
        return view ('frontend.admission_process')->with('data', $data);

    }

    public function schools()
    {
        $data = array (
          'title' => 'About Holy Rosary Hospital, Emekuku',
        );
        return view ('frontend.schools')->with('data', $data);

    }

    public function holyrosary_contact()
    {
        echo "Holyrosary contact";
        exit;
        $data = array (
          'title' => 'About Holy Rosary Hospital, Emekuku',
        );
        return view ('frontend.contact')->with('data', $data);
    }

    public function nursing_school_index()
    {
        $data = array (
          'title' => 'School of Nursing, Holy Rosary Hospital, Emekuku',
        );
        return view ('frontend.nursing_school_index')->with('data', $data);
    }

    public function medlab_school_index()
    {
      $data = array (
        'title' => 'School of Medical Laborator, Holy Rosary Hospital, Emekuku',
      );
      return view ('frontend.medlab_school_index')->with('data', $data);
    }

    public function midwifery_school_index()
    {
        $data = array (
          'title' => 'School of Midwifery, Holy Rosary Hospital, Emekuku',
        );
        return view ('frontend.midwife_school_index')->with('data', $data);
    }
/*
    public function notfound()
    {
        return view('errors.404');
    }*/
}
