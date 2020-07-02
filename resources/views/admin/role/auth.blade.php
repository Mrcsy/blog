<!DOCTYPE html>
<html class="x-admin-sm">

<head>
    <meta charset="UTF-8">
    <title>欢迎管理员登录！</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
{{--    <link rel="stylesheet" href="./css/font.css">--}}
{{--    <link rel="stylesheet" href="./css/xadmin.css">--}}
{{--    <script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>--}}
{{--    <script type="text/javascript" src="./js/xadmin.js"></script>--}}
@include('admin.public.styles')
@include('admin.public.script')
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="layui-fluid">
    <div class="layui-row">
        <form class="layui-form" action="{{ url('admin/role/doauth') }}" method="post">
            {{ csrf_field() }}
            <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                    <span class="x-red">*</span>角色名称</label>
                <div class="layui-input-inline">
                    <input type="hidden" name="role_id" value="{{ $role->id }}">
                    <input type="text" id="L_email" name="role_name" value="{{ $role->role_name }}" required="" lay-verify="" autocomplete="off" class="layui-input"></div>
            </div>
            <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                    <span class="x-red">*</span>权限列表</label>
                <div class="layui-input-inline" style="width: 600px;">
                    @foreach($perms as $v)
                        @if(in_array($v->id,$own_pers))
                        <input type="checkbox" name="permission_id[]" checked value="{{ $v->id }}" title="{{ $v->per_name }}">
                        @else
                            <input type="checkbox" name="permission_id[]" value="{{ $v->id }}" title="{{ $v->per_name }}">
                        @endif
                    @endforeach
                </div>
{{--                <div class="layui-input-inline">--}}
{{--                    <input type="text" id="L_email" name="role_name" required="" lay-verify="" autocomplete="off" class="layui-input"></div>--}}
            </div>
            <div class="layui-form-item">
                <label for="L_repass" class="layui-form-label"></label>
                <button class="layui-btn" lay-filter="add" lay-submit="">授权</button></div>
        </form>
    </div>
</div>
<script>layui.use(['form', 'layer','jquery'],
        function() {
            $ = layui.jquery;
            var form = layui.form,
                layer = layui.layer;

            //自定义验证规则
            // form.verify({
            //     nikename: function(value) {
            //         if (value.length < 5) {
            //             return '昵称至少得5个字符啊';
            //         }
            //     },
            //     pass: [/(.+){6,12}$/, '密码必须6到12位'],
            //     repass: function(value) {
            //         if ($('#L_pass').val() != $('#L_repass').val()) {
            //             return '两次密码不一致';
            //         }
            //     }
            // });

            //监听提交
            form.on('submit(add)', function(data) {

                // //发异步，把数据提交给php
                // $.ajax({
                //     type:'POST',
                //     url:'/admin/role',
                //     dataType:'json',
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     },
                //     data:data.field,
                //     success:function (data) {
                //         //弹层提示添加成功，并刷新父页面
                //         if(data.status == 1){
                //             layer.alert(data.message,{icon:6},function () {
                //                 parent.location.reload(true);
                //             });
                //         }else{
                //             layer.alert(data.message,{icon: 5});
                //         }
                //     },
                //     error:function () {
                //         //错误信息
                //     },
                // });
                //     // console.log(data);
                //     // //发异步，把数据提交给php
                //     // layer.alert("增加成功", {
                //     //         icon: 6
                //     //     },
                //     //     function() {
                //     //         //关闭当前frame
                //     //         xadmin.close();
                //     //
                //     //         // 可以对父窗口进行刷新
                //     //         xadmin.father_reload();
                //     //     });
                //     return false;
                });

        });</script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
</body>

</html>
