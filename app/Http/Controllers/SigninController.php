<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SigninController extends Controller
{
    public function signin(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required'
      ]);
      
    }
}
