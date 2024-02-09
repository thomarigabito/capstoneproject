<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\AuthServiceProvider;

class ajcController extends Controller
{
    function homepage()
    {
        return view('homepage');
    }
    function internet()
    {
        return view('include.internet');
    }
    function promos()
    {
        return view('include.promos');
    }
    function contactus()
    {
        return view('include.contactus');
    }
    function applynow()
    {
        return view('include.applynow');
    }
    function login()
    {
        return view('include.login');
    }
    function register()
    {
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
    function applynowPOST(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'contact' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'plan' => 'required',
            'email' => 'required|email',
            'street' => 'required',
            'barangay' => 'required',
            'town' => 'required',
            'province' => 'required',
            'landmark' => 'required',
            'uploadid' => 'required',
            'idselfie' => 'required'


        ]);
        $data['firstname'] = $request->firstname;
        $data['middlename'] = $request->middlename;
        $data['lastname'] = $request->lastname;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);
        if (!$user) {
            return redirect(route('registration'))->with("error", "Registration failed, please try again");
        }
        return redirect(route('login'))->with("success", "Please login to continue");
        }
        function logout()
        {
            Session::flush();
            Auth::logout();
            return redirect(route('login'));
        }
}
