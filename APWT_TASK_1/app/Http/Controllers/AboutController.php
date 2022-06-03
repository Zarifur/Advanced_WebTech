<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function About(){

        return view('AboutUs');
    }
    public function contact(){

        return view('ContactUs');
    }
    public function service(){

        return view('Product.service');
    }
    public function team(){

        return view('team');
    }
}

