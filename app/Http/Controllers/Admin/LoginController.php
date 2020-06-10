<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Org\code\Code;

class LoginController extends Controller
{
    //后台登录页面
    public function login()
    {
        return view('admin.login');
    }
    //验证码
    public function code()
    {
        $code = new Code;
        return $code->make();
    }
}
