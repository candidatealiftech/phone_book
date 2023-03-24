<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register (){
        return view ('index');
    }

    public function signup (Request $request){
        User::create([
            'login' => $request['login'],
            'password' => Hash::make($request['password'])
        ]);
        return redirect ('login');
    }
}
