<?php

namespace App\Http\Controllers;

use App\farmer_register;
use App\user_register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class homeController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }
    public function contact(){
        return view('home.contact');
    }

    public function services(){
        return view('home.services');
    }
    public function about(){
        return view('home.about_us');
    }
    public function signup(){
        return view('home.signup');
    }

    public function login(){
    return view('home.login');
}

    public function pw_change_link(){
        return view('home.pw_change_link');
    }

    public function crop_details(){
        return view('home.crop_details');
    }
    public function c_message(){
        return view('home.c_message');
    }
	
	    public function logout(){
		Session::flush();
        return view('home.index');
    }
}
