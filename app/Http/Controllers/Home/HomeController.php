<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(){
        return View('home.index');
    }

    public function about(){
        return View('home.about');
    }

    public function skill(){
        return View('home.skill');
    }

    public function portfolio(){
        return View('home.portfolio');
    }

    public function contact(){
        return View('home.contact');
    }
}
