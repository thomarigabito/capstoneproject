<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajcController extends Controller
{
    function homepage(){
        return view('homepage');
    }
    function internet(){
        return view('include.internet');
    }
    function promos(){
        return view('include.promos');
    }
    function contactus(){
        return view('include.contactus');
    }
    function applynow(){
        return view('include.applynow');
    }
    function login(){
        return view('include.login');
    }
    function register(){
        return view('include.register');
    }



    
    // function loginPost(Request $request){
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);
    //     $credentials = $request->only('email', 'password');
    //     if(Auth::attempt($credentials)){
    //         return redirect()->intended(route('home'));
    //     }
    //     return redirect(route('login'))->with("error", "Email and password does not match");
    // }
    
    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }


    

}
