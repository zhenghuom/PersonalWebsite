<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    static public function index(Request $request){
        //if(!$request->session()->get('admin')){
            return View('admin.login');
        //}
    }

    static public function register(Request $request){
        return View('admin.register');
    }

    public function login(Request $request){
        $request->session()->put('admin','admin');
        return redirect('/admin');
    }
}
