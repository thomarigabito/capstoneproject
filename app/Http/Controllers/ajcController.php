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
}
