<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"E:\phpStudy\WWW\kyw/application/admin\view\system_changepwd.html";i:1545900010;s:52:"E:\phpStudy\WWW\kyw\application\admin\view\base.html";i:1545906008;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>后台管理</title>
		<link rel="stylesheet" href="/kyw/public/plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="/kyw/public/css/main.css"  media="all"  />
	
    
   
    <!--[if lt IE 9]>
    <script src="/kyw/static/css/html5shiv.min.js"></script>
    <script src="/kyw/static/css/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/kyw/public/plugins/layui/layui.js"></script>
</head>
<body>

    <!--主体-->
    <div style="margin-bottom:36px;">
      


    <!--tab标签-->
    <div class="layui-tab-brief">

        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <form class="layui-form form-container" data-url="<?php echo url('admin/change_password/updatePassword'); ?>"  localtion-url="<?php echo url('admin/change_password/index'); ?>" >
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="old_password" value="" required lay-verify="required" placeholder="请输入原密码" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">新密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password" value="" placeholder="请输入新密码" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">重复密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="confirm_password" value="" placeholder="请再次输入新密码" class="layui-input">
                        </div>
                    </div>
                    <div class="btable-paged" >
				<div class="layui-main">
                    <div class="formbtngroup">
<button  class="layui-btn layui-btn-small" lay-submit="" lay-filter="formadd">修改</button>
<button type="reset" class="layui-btn layui-btn-primary layui-btn-small">重置</button>
</div>
</div>
        </div>
                    
                </form>
            </div>
        </div>
    </div>


</div>

 

<script>

</script>


<!--页面JS脚本-->

</body>
</html>