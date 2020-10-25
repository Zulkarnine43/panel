<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function a_login(){
        return view('admin.login');
    }

    public function a_home(){
        return view('admin.index');
    }

    public function all_farmer(){
        return view('admin.all_farmer');
    }
    public function all_customer(){
        return view('admin.all_customer');
    }

    public function verified_crops(){
        return view('admin.verified_crops');
    }
    public function Unverified_crops(){
        return view('admin.Unverified_crops');
    }
    public function add_news(){
        return view('admin.add_news');
    }

    public function manage_news(){
        return view('admin.manage_news');
    }
}
