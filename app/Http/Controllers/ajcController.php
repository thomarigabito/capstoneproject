<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\clients;
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
        //to avoid accessing this route whlie logged in
        if(Auth::check()){
            return redirect(route('homepage'));
        }
        return view('include.applynow');
    }
    
   

  






   
    
  

    

}
