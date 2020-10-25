<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
