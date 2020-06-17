<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //1.获取提交的请求参数
        $input = $request->all();

        $user = User::orderBy('user_id','asc')
            ->where(function($query) use($request){
            $username = $request->input('username');
            if(!empty($username)){
                $query->where('user_name','like','%'.$username.'%')->orWhere('email','like','%'.$username.'%');
            }
            })->paginate($request->input('num')?$request->input('num'):3);
//        $user = User::paginate(3);
        return view('admin.user.list',compact('user','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1.接受前台表单提交的数据  email repass
        $input = $request->all();

        //2.进行表单验证

        //3.添加到数据库的user表
        $username = $input['email'];
        $pass = Crypt::encrypt($input['pass']);
        $r = User::create(['user_name'=>$username,'user_pass'=>$pass,'email'=>$input['email']]);

        //4.根据添加是否成功，个客户端返回一个json格式的反馈
        if($r){
            $data = [
                'status'=>'1',
                'message'=>'添加成功'
            ];
        }else{
            $data = [
                'status'=>'0',
                'message'=>'添加失败！'
            ];
        }
        return $data;
    }

    /**
     * Display the specified resource.
     *显示一个数据
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user =User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //1.根据id获取要修改的记录
        $user = User::find($id);
        //2.获取要修改成的用户名
        $username = $request->input('user_name');
        $user->user_name = $username;

        $res = $user->save();
        if($res){
            $data = [
              'status'=>1,
              'message'=>'修改成功',
            ];
        }else{
            $data = [
                'status'=>0,
                'message'=>'修改失败',
            ];
        }
        return $data;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $res = $user->delete();
        if($res){
            $data = [
                'status'=>1,
                'message'=>'修改成功',
            ];
        }else{
            $data = [
                'status'=>0,
                'message'=>'修改失败',
            ];
        }
        return $data;
    }

    public function delAll(Request $request)
    {
        $input = $request->input('ids');

        $res = User::destroy($input);
        if($res){
            $data = [
                'status'=>1,
                'message'=>'删除成功',
            ];
        }else{
            $data = [
                'status'=>0,
                'message'=>'删除失败',
            ];
        }
        return $data;
    }




}
