<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AuthManager extends Controller
{
    //Login Post Funtion
    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect(route('homepage'));
        }
        return redirect(route('login'))->with('error', 'Credentails not valid');
    }

    function registerPost(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
            // 'confirmpassword'=> 'required'
        ]);
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['password']= Hash::make($request->password);
        // $data['confirmpassword']= Hash::make($request->confirmpassword);

        $user = User::create($data);
        if(!$user){
            return redirect(route('register'))->with('error','Make an account');
        }
        return redirect(route('login'))->with('success','Registration successfull, Login your Account');

    }

        function logout(){
            Session::flush();
            Auth::logout();
            return redirect(route('homepage'));
        }
}
