<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class farmerController extends Controller
{
    //
    public function f_home(){
        return view('farmer.index');
    }

    public function crop_import(){
        return view('farmer.crop_import');
    }

    public function crop_manage(){
        return view('farmer.manage_crops');
    }

    public function user_manage(){
        return view('farmer.customer_information');
    }

    public function f_profile(){
        return view('farmer.farmer_profile');
    }
}
