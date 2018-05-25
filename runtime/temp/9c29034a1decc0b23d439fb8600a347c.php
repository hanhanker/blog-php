<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"E:\phpstudy\PHPTutorial\WWW\thinkphp\public/../application/admin\view\index\index.html";i:1527042647;s:76:"E:\phpstudy\PHPTutorial\WWW\thinkphp\application\admin\view\common\base.html";i:1527079866;}*/ ?>
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
    
<style>
body{padding:0px;background:#EAEEF5;overflow:hidden;}
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
    
<div id="topmenu" class="wst-topmenu"  style="background: #3399ff;">
    <div class="wst-topmenu-logo"></div>
    <div class="wst-topmenu-welcome">
        <a href="<?php echo url('home/index/index'); ?>" target='_blank' class="wst-top-link">商城首页</a>
        <span class="wst-space">|</span>
        <a href="#none" onclick='clearCache()' class="wst-top-link">清除缓存</a>
        <span class="wst-space">|</span>
        <a href="#none" onclick='editPassBox()' class="wst-top-link">修改密码</a>
        <span class="wst-space">|</span>
        <a href="javascript:logout()" class="wst-top-link">退出系统</a> 
    </div> 
</div>
<div id="wst-tabs" style="width:100%; height:100%;overflow: hidden; border: 1px solid #D3D3d3;" class="liger-tab">
   <?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): $k = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
   <div id="wst-tab-<?php echo $vo['menuId']; ?>" tabId="wst-tab-<?php echo $vo['menuId']; ?>" v="<?php echo $vo['menuId']; ?>" title="<?php echo $vo['menuName']; ?>" class='wst-tab' <?php if($k ==0): ?>lselected="true"<?php endif; ?> style="height: 300px"> 
   </div>
   <?php endforeach; endif; else: echo "" ;endif; ?>
   <!-- 
   <div id="wst-tab-market" tabId="wst-tab-market" v="market" title="WSTMart广场" class='wst-tab' style="height: 300px;display:none">
   <iframe id='wst-market' frameborder="0" src="" width='100%' height='100%'></iframe> 
   </div>
   -->
</div>
<div id='editPassBox' style='display:none;padding-top:5px;'>
  <form id='editPassFrom' autocomplete="off">
   <table class='wst-form'>
      <tr>
         <th style='width:100px'>原密码：</th>
         <td><input type='password' id='srcPass' name='srcPass' class='ipt' data-rule="原密码: required;" maxLength='16'/></td>
      </tr>
      <tr>
         <th>新密码：</th>
         <td><input type='password' id='newPass' name='newPass' class='ipt' data-rule="新密码: required;length[6~]" maxLength='16'/></td>
      </tr>
      <tr>
         <th>确认密码：</th>
         <td><input type='password' id='newPass2' name='newPass2' class='ipt' data-rule="确认密码: required;match(newPass);" maxLength='16'/></td>
      </tr>
   </table>
  </form>
</div>
 
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


<script src="/static/admin/js/index.js" type="text/javascript"></script>
