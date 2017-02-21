<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends BaseController
{
    public function __construct(){
        parent::__construct();
    }

    //
    public function index(){
        return View('admin.index');
    }

    public function grids(){
        return View('admin.grids');
    }

    public function graphs(){
        return View('admin.graphs');
    }

    public function typography(){
        return View('admin.typography');
    }

    public function inbox(){
        return View('admin.inbox');
    }

    public function compose(){
        return View('admin.compose');
    }

    public function forms(){
        return View('admin.forms');
    }

    public function validation(){
        return View('admin.validation');
    }

    public function basic_tables(){
        return View('admin.basic_tables');
    }

    public function media(){
        return View('admin.media');
    }

    public function widgets(){
        return View('admin.widgets');
    }
}
