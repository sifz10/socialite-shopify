<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleRegisterController extends Controller
{
  public function SimpleRegister()
  {
    return view('auth.regularRegister');
  }
}
