<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="会员管理">&#xe6b8;</i>
                    <cite>用户管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                            <a onclick="xadmin.add_tab('用户列表','user')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>用户列表</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('添加用户','user/create')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加用户</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="角色管理">&#xe723;</i>
                    <cite>角色管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('角色列表','role')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>角色列表</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('添加角色','role/create')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加角色</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="权限管理">&#xe726;</i>
                    <cite>权限管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('权限列表','permission')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>权限列表</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('添加权限','permission/create')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加权限</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="分类管理">&#xe723;</i>
                    <cite>分类管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('分类列表','cate')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>分类列表</cite></a>
                    </li>
                </ul>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('添加分类','cate/create')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加分类</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="文章管理">&#xe723;</i>
                    <cite>文章管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('文章列表','article')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>文章列表</cite></a>
                    </li>
                </ul>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('添加文章','article/create')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加文章</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="网络配置管理">&#xe6ce;</i>
                    <cite>系统统计</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('添加网络配置','config/create')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加网络配置</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('网络配置列表','config')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>网络配置列表</cite></a>
                    </li>
                </ul>
            </li>
{{--            <li>--}}
{{--                <a href="javascript:;">--}}
{{--                    <i class="iconfont left-nav-li" lay-tips="图标字体">&#xe6b4;</i>--}}
{{--                    <cite>图标字体</cite>--}}
{{--                    <i class="iconfont nav_right">&#xe697;</i></a>--}}
{{--                <ul class="sub-menu">--}}
{{--                    <li>--}}
{{--                        <a onclick="xadmin.add_tab('图标对应字体','unicode.html')">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>图标对应字体</cite></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="javascript:;">--}}
{{--                    <i class="iconfont left-nav-li" lay-tips="其它页面">&#xe6b4;</i>--}}
{{--                    <cite>其它页面</cite>--}}
{{--                    <i class="iconfont nav_right">&#xe697;</i></a>--}}
{{--                <ul class="sub-menu">--}}
{{--                    <li>--}}
{{--                        <a href="login.blade.php" target="_blank">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>登录页面</cite></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a onclick="xadmin.add_tab('错误页面','error.html')">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>错误页面</cite></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a onclick="xadmin.add_tab('示例页面','demo.html')">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>示例页面</cite></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a onclick="xadmin.add_tab('更新日志','log.html')">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>更新日志</cite></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="javascript:;">--}}
{{--                    <i class="iconfont left-nav-li" lay-tips="第三方组件">&#xe6b4;</i>--}}
{{--                    <cite>layui第三方组件</cite>--}}
{{--                    <i class="iconfont nav_right">&#xe697;</i></a>--}}
{{--                <ul class="sub-menu">--}}
{{--                    <li>--}}
{{--                        <a onclick="xadmin.add_tab('滑块验证','https://fly.layui.com/extend/sliderVerify/')" target="">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>滑块验证</cite></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a onclick="xadmin.add_tab('富文本编辑器','https://fly.layui.com/extend/layedit/')">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>富文本编辑器</cite></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a onclick="xadmin.add_tab('eleTree 树组件','https://fly.layui.com/extend/eleTree/')">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>eleTree 树组件</cite></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a onclick="xadmin.add_tab('图片截取','https://fly.layui.com/extend/croppers/')">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>图片截取</cite></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a onclick="xadmin.add_tab('formSelects 4.x 多选框','https://fly.layui.com/extend/formSelects/')">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>formSelects 4.x 多选框</cite></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a onclick="xadmin.add_tab('Magnifier 放大镜','https://fly.layui.com/extend/Magnifier/')">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>Magnifier 放大镜</cite></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a onclick="xadmin.add_tab('notice 通知控件','https://fly.layui.com/extend/notice/')">--}}
{{--                            <i class="iconfont">&#xe6a7;</i>--}}
{{--                            <cite>notice 通知控件</cite></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>
<!-- <div class="x-slide_left"></div> -->
