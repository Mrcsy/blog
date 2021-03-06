<?php

namespace App\Http\Controllers\Admin;

use App\Model\Permission;
use App\Model\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{

    public function auth($id)
    {
        //获取当前角色
        $role = Role::find($id);
        //获取所有的权限列表
        $perms = Permission::get();
        $own_perms = $role->permission;
        $own_pers = [];
        foreach ($own_perms as $v){
            $own_pers[] = $v->id;
        }

        //获取当前角色拥有的权限
        return view('admin.role.auth',compact('role','perms','own_pers','own_perms'));
    }


    //处理授权
    public function doAuth(Request $request)
    {
        $input = $request->except('_token');
        //删除当前已有的权限
        DB::table('role_permission')->where('role_id',$input['role_id'])->delete();
        if(!empty($input['permission_id'])){
            foreach ($input['permission_id'] as $v){
                DB::table('role_permission')->insert(['role_id'=>$input['role_id'],'permission_id'=>$v]);
            }
        }
        return redirect('admin/role');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //1.获取所有角色数据
        $role = Role::get();
        return view('admin.role.list',compact('role'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.role.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->except('_token');

        //2.数据验证


        //3.进行添加role表
        $res = Role::create($input);
        if($res){
            return redirect('admin/role');
        }else{
            return back()->with('msg','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
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
        //
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
    }
}
