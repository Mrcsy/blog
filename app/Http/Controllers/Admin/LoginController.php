<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Org\code\Code;
use Illuminate\Support\Facades\Validator;

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

    //处理用户登录到方法
    public function dologin(Request $request)
    {
        //之定义验证
        //1.接受表单的数据
        $input = $request->except('_token');
        //2.进行表单验证
//        $validator = Validator::make('需要验证的表单数据','验证规则','错误提示信息');
        //验证字段
        $rule = [
            'username'=>'required|between:4,18',
            'password'=>'required|between:4,18|alpha_dash',
        ];
        //验证字段提示中文信息
        $msg = [
            'username.required'=>'用户名必须输入',
            'username.between'=>'用户名长度必须在4-18位之间',
            'password.required'=>'密码必须输入',
            'password.between'=>'密码长度必须在4-18位之间',
            'password.alpha_dash'=>'密码必须是数字、字母、下划线',
        ];
        $validator = Validator::make($input,$rule,$msg);
        //如果不满足条件则验证失败返回错误信息
        if ($validator->fails()) {
            return redirect('admin/login')
                ->withErrors($validator)
                ->withInput();
        }

        //3.验证是否由此用户（用户名  密码  验证码）


        //4.

    }
}
