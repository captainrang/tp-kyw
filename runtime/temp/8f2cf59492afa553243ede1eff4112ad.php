<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"E:\phpStudy\WWW\kyw/application/admin\view\nav_add.html";i:1548854798;s:52:"E:\phpStudy\WWW\kyw\application\admin\view\base.html";i:1548150336;}*/ ?>
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
      


    <div class="layui-tab-brief">

        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                    <div class="layui-form-item">
                        <label class="layui-form-label">导航名称</label>
                        <div class="layui-input-inline">
                            <input type="text" name="name" value="" required  lay-verify="required" placeholder="请输入导航名称" class="layui-input required">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">别名</label>
                        <div class="layui-input-inline">
                            <input type="text" name="alias" value="" placeholder="（选填）请输入导航别名" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">链接</label>
                       
                       <div> <div class="layui-input-inline">
                            <input type="text" name="link" value="" placeholder="" class="layui-input"></div>  </div>
                           <div class="label-tint">带参数的本地连接用半角逗号隔开,如版块id为1，则访问版块输入index/view,id,1</div> 
                      
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">链接属性</label>
                        <div class="layui-input-inline">
                            <input type="radio" name="sid" value="1" title="内部" checked="checked">内部
                            <input type="radio" name="sid" value="0" title="外部">外部
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">图标</label>
                        <div class="layui-input-inline">
                            <input type="text" name="icon" value="" placeholder="（选填）如：fa fa-home" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">状态</label>
                        <div class="layui-input-inline">
                            <input type="radio" name="status" value="1" title="显示" checked="checked">显示
                            <input type="radio" name="status" value="0" title="隐藏">隐藏
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">打开方式</label>
                        <div class="layui-input-inline">
                            <input type="radio" name="target" value="_self" title="默认" checked="checked">默认
                            <input type="radio" name="target" value="_blank" title="新窗口">新窗口
                        </div>
                    </div>
                    <input type='hidden' name='type' value='<?php echo $type; ?>'><input type='hidden' name='pid' value='<?php echo $pid; ?>'><input type='hidden' name='sort'value='<?php echo $count; ?>'>
                    <div class="btable-paged"  style="position: absolute;left:  430px" >
                            <button  class="layui-btn layui-btn-small"  id="submit" lay-filter="formadd">添加</button>
        </div>
            </div>
        </div>
    </div>

</div>

 

<script>

</script>

<script src="/kyw/public/js/common.js"></script>


<!--页面JS脚本-->

<script>
    layui.use(['layer', 'form', 'element'], function () {
        var form = layui.form
            , jq = layui.jquery;
            jq('#submit').click(function () {
            if (jq('.required').val() == null || jq('.required').val()==='') {
                jq('.required').css('border','red 1px solid');
                layer.msg("请输入必填项目", {icon: 2, time: 1000}, function () {
                    //  location.reload();
                });
            } else {
                var formdata  ={'data':JSON.stringify({
                        'name':jq('input[name=name]').val(),
                        'alias':jq('input[name=alias]').val(),
                        'link':jq('input[name=link]').val(),
                        'sid':jq('input[name=sid]').val(),
                        'icon':jq('input[name=icon]').val(),
                        'status':jq('input[name=status]:checked').val(),
                        'target':jq('input[name=target]:checked').val(),
                        'type':jq('input[name=type]').val(),
                        'pid':jq('input[name=pid]').val(),
                        'sort':jq('input[name=sort]').val(),

                    })}
                ajaxform(formdata,"<?php echo url('admin/nav/save'); ?>",jq,function (res) {
                     var index = parent.layer.getFrameIndex(window.name);
                      parent.layer.close(index);
                         location.reload();
                })
            }
        })

    });
</script>

</body>
</html>