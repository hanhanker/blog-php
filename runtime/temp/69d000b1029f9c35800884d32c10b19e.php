<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:88:"E:\phpstudy\PHPTutorial\WWW\thinkphp\public/../application/admin\view\articles\list.html";i:1527227868;s:76:"E:\phpstudy\PHPTutorial\WWW\thinkphp\application\admin\view\common\base.html";i:1527079866;}*/ ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理中心</title>
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <link href="/static/admin/js/ligerui/skins/Aqua/css/ligerui-all.css?" rel="stylesheet" type="text/css" />
    <link href="/static/admin/css/style.css?" rel="stylesheet" type="text/css" />
    <style>
    div.error{
        display: inline-block;
        position: relative;
        top:3px;
    }
    </style>
    
    <script type="text/javascript">
     //php信息配置
     window.conf = {
        "ROOT"      : "", 
        "APP"       : "<?php echo request()->root; ?>", 
        "STATIC"    : "/static", 
        "SUFFIX"    : "<?php echo config('url_html_suffix'); ?>"
    }
    </script>
    <script src="/static/plugins/jquery.min.js"></script>
    <script src="/static/plugins/common.js"></script>

    <script src="/static/admin/js/ligerui/js/ligerui.all.js" ></script>
    <script src="/static/plugins/common.js" ></script>
    <script src="/static/admin/js/common.js" ></script>



    <script src='/static/plugins/layer/layer.js'></script>

    <!-- 验证 -->
    <script type="text/javascript" src="/static/plugins/validate/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/static/plugins/validate/additional-methods.min.js"></script> 
    <script type="text/javascript" src="/static/plugins/validate/jquery.validate.extend.js"></script> 
    <script type="text/javascript" src="/static/plugins/validate/zh-cn.js"></script> 
   
 
  
</head>

<body>
    
<div class="l-loading" style="display: block" id="wst-loading"></div>
<div class="wst-toolbar">
	   文章标题：<input type='text' id='key' placeholder='文章标题'/>  
   <button class="btn btn-blue" onclick='javascript:loadGrid()'>查询</button>
   <button class="btn btn-red f-right" onclick='javascript:toBatchDel()' style='margin-left:10px;'>批量删除</button>

   <button class="btn btn-green f-right" onclick='javascript:toEdit(0)'>新增</button>

   <div style='clear:both'></div>
</div>
<div id="maingrid"></div>
 
    <script>
        function showImg(opt) {
            layer.photos(opt);
        }
        function showBox(opts) {
            return WST.open(opts);
        }
    </script>
</body>

</html>


<script src="/static/admin/js/articles/articles.js" type="text/javascript"></script>
<script>
$(function(){
	initGrid();
});
</script>
