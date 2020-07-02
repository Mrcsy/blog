<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Org\code\Code;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
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

        //验证验证码-验证码生成会放导session里面
        if(strtolower($input['code']) != strtolower(session()->get('code'))){
            return redirect('admin/login')->with('errors','验证码错误');
        }
        $user = User::where('user_name',$input['username'])->first();
        if(!$user){
            return redirect('admin/login')->with('errors','用户错误');
        }
        if($input['password'] != Crypt::decrypt($user->user_pass)){
            return redirect('admin/login')->with('errors','密码错误');
        }

        //4.保存用户信息到seesion中
        session()->put('user',$user);

        //5.跳转到后台首页
        return  redirect('admin/index');


    }


    //加密算法
    public function jiami()
    {
        //1.md5加密，生成一个32位的字符串
//        $str = "123456";
//        return md5($str);

        //2.哈希加密
//        $str = '123456';
//        $hash = Hash::make($str);
//        //解密
//        if(Hash::check($str,$hash)){
//            return '密码正确';
//        }else{
//            return '密码错误';
//        }

        //3.crypt加密
        $str = '123456';
        $crypt_str = 'eyJpdiI6IkQyd2UrSklibFZpMmJ6RHlyRldtRnc9PSIsInZhbHVlIjoiMzdYeEppU1RlU1dvXC96MXkxR3RYT0E9PSIsIm1hYyI6IjYxMDdiODRkMTE4YzYzZjk1YWE1Y2VhN2VhYjE3NGYxODM5ZjNhYjYzZTcwZDVmODliMTRkOTEzZDM3NDk4YTEifQ';
//        $crypt_str = Crypt::encrypt($str);
//        return $crypt_str;
        //解密
       if(Crypt::decrypt($crypt_str) == $str) {
           return '密码正确';
       }



    }

    //后台首页
    public function index()
    {
        return view('admin.index');
    }

    //后台欢迎页
    public function welcome()
    {
        return view('admin.welcome');
    }

    //退出登录
    public function logout()
    {
        //清空session中的信息
        session()->flush();
        //跳转到登录页面
        return redirect('admin/login');
    }

    //没有权限，对应的跳转
    public function noaccess()
    {
        return view('errors.noaccess');
    }


}
