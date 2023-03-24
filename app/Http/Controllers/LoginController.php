<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (){
        return view ('login');
    }

    public function signin (Request $request){
        $login = $request->only('login', 'password');
        $signin = $request->signin;
        if (Auth::attempt($login, $signin)){
            return redirect ('private-page');
        } else {
            return back ();
        }
    }
}
