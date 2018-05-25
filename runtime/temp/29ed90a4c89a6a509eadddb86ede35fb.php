<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:88:"E:\phpstudy\PHPTutorial\WWW\thinkphp\public/../application/admin\view\articles\edit.html";i:1527080589;s:76:"E:\phpstudy\PHPTutorial\WWW\thinkphp\application\admin\view\common\base.html";i:1527079866;}*/ ?>
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
    
<link rel="stylesheet" type="text/css" href="/static/plugins/webuploader/webuploader.css" />

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
    
<input type='hidden' id='articleId' value='<?php echo $object["articleId"]; ?>'/>
<div class="l-loading" style="display: block" id="wst-loading"></div>
<form id='articleForm' autocomplete="off">
<table class='wst-form wst-box-top'>
  <tr>
     <th width='150'>文章标题<font color='red'>*</font>：</th>
     <td><input type="text" id='articleTitle' name='articleTitle' maxLength='50' style='width:300px;' class='ipt'/></td>
  </tr>
   <tr>
     <th width='150' align='right'>分类类型<font color='red'>*</font>：</th>
   <td>
	   <input style="width: 200px;" class="l-text-field" readonly="" id="catIds" name="catIds" type="text" value="<?php echo $object['catName']; ?>"><span id="catIdt"></span>
	   <input id="catId"  class="text ipt" autocomplete="off" type="hidden" value=""/>
   </td>
   </tr>
      <tr>
      <th width='150'>是否显示<font color='red'>*</font>：</th>
      <td height='24'>
         <label>
            <input type="radio" id="isShow1" name="isShow" class="ipt" value="1" checked>显示
         </label>
         <label>
            <input type="radio" id="isShow1" name="isShow" class="ipt" value="0">隐藏
         </label>
      </td>
   </tr>
  <tr>
     <th width='150'>关键字<font color='red'>*</font>：</th>
     <td><input type="text" id='articleKey' name='articleKey' maxLength='120' style='width:600px;' class='ipt'/></td>
  </tr>
   <tr>
       <th width='150'>文章内容<font color='red'>*</font>：</th>
       <td>
       	<textarea id='articleContent' name='articleContent' class="form-control ipt" style='width:80%;height:400px'></textarea>
       </td>
    </tr>  
     <tr>
       <td colspan='2' align='center'>
           <button type="submit" class="btn btn-blue">保&nbsp;存</button>
           <button type="button" class="btn" onclick="javascript:history.go(-1)">返&nbsp;回</button>
       </td>
     </tr>
</table>
 </form>
  <script>
$(function(){
  //文件上传
	WST.upload({
  	  pick:'#filePicker',
  	  formData: {dir:'adspic'},
  	  accept: {extensions: 'gif,jpg,jpeg,png',mimeTypes: 'image/jpg,image/jpeg,image/png,image/gif'},
  	  callback:function(f){
  		  var json = WST.toAdminJson(f);
  		  if(json.status==1){
        	$('#preview').html('<img src="'+WST.conf.ROOT+'/'+json.savePath+json.thumb+'" height="152" />');
        	$('#articleImg').val(json.savePath+json.thumb);
  		  }
	  }
    });
  //编辑器
    KindEditor.ready(function(K) {
		editor1 = K.create('textarea[name="articleContent"]', {
			height:'350px',
			allowFileManager : false,
			allowImageUpload : true,
			items:[
			        'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
			        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
			        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
			        'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
			        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
			        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|','image','table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
			        'anchor', 'link', 'unlink', '|', 'about'
			],
			afterBlur: function(){ this.sync(); }
		});
	});
});
</script>
 
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


<script src="/static/plugins/webuploader/webuploader.js" type="text/javascript" ></script>
<script src="/static/plugins/kindeditor/kindeditor.js" type="text/javascript" ></script>
<script src="/static/admin/js/articles/articles.js" type="text/javascript"></script>

<script>
$(function () {

	initCombo();

	<?php if($object['articleId'] !=0): ?>
	   WST.setValues(<?php echo $object; ?>);
	<?php endif; ?>
	$('#articleForm').validate({

	    rules: {
	    	articleTitle: {
	    		 required: true
	    	},
	    	catIds: {
		       required: true
		    },
	    	articleKey: {
	    		 required: true
	    	},
		    articleContent: {
	    		required: true
	    	}
	    },
	    submitHandler: function(form){
	    	var articleId = $('#articleId').val();
	    	toEdits(articleId);
	    }
	})
});
</script>
