<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth.admin');//登录验证
    }

    public function jsonResponse($errorCode, $errorMsg, $data)
    {
        $data['status'] = $errorCode;
        $data['errorMsg'] = $errorMsg;
        return response()->json($data);
    }

    public function success($data=[]){
        return $this->jsonResponse(0, '', $data);
    }

    public function fail($errorMsg, $errorCode = 1){
        return $this->jsonResponse($errorCode, $errorMsg, []);
    }
}
