<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
class AuthController extends Controller
{

    public function register(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');
    }

    function loginPost(Request $request){
        $users = Account::All();
        return view('auth.login', compact('users'));
    }
}
