<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        return view('guest.pages.aboutus.index');
    }
}
