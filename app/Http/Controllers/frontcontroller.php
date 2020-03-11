<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontcontroller extends Controller
{
    // 
    public function index(){

    	return view("frontView.home.homecontent");
    }
}
