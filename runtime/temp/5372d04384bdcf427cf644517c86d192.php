<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"E:\phpStudy\WWW\kyw/application/admin\view\system_diachange_password.html";i:1546778262;s:52:"E:\phpStudy\WWW\kyw\application\admin\view\base.html";i:1545906008;}*/ ?>
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
    <div class="layui-tab layui-tab-brief">

        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <form class="layui-form form-container" data-url="<?php echo url('admin/system/updatePassword'); ?>"  localtion-url="<?php echo url('admin/system/diachange_password'); ?>" >
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
     <div class="layui-form-item">
    <div class="layui-input-block">
	  <button class="layui-btn" lay-submit="" lay-filter="formadd">立即修改</button>
     
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

<script>
layui.use(['form'],function(){
  var form = layui.form
  ,jq = layui.jquery;

 var url=jq('form').data('url');
 var locationurl=jq('form').attr('localtion-url');

 //jq('.btable-paged').eq(1).hide();
 
 form.on('submit(formadd)', function(data){
	    loading = layer.load(2, {
	      shade: [0.2,'#000']
	    });
	 
	  
	    var param = data.field;
	    jq.post(url,param,function(data){
	      if(data.code == 200){
	        layer.close(loading);
	        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
	        	var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
	        	parent.layer.close(index); //再执行关闭
	        });
	      }else{
	        layer.close(loading);
	        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
	      }
	    });
	    return false;
	  });

})
</script>

</body>
</html>