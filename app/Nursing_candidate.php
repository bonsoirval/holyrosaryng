<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Nursing_candidate extends Authenticatable //, Model
{
  use Notifiable;
  protected $guard = 'nursing_candidate';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  protected $fillable = [
      'name', 'email', 'password','serial_number','phone','pin',
  ];



}
