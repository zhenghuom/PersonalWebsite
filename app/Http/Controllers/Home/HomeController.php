<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(){
        return View('Home.index');
    }

    public function about(){
        return View('Home.about');
    }

    public function skill(){
        return View('Home.skill');
    }

    public function portfolio(){
        return View('Home.portfolio');
    }

    public function contact(){
        return View('Home.contact');
    }
}
