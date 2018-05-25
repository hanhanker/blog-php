<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:87:"E:\phpstudy\PHPTutorial\WWW\thinkphp\public/../application/home\view\articles\list.html";i:1527248641;s:75:"E:\phpstudy\PHPTutorial\WWW\thinkphp\application\home\view\common\base.html";i:1526633180;s:74:"E:\phpstudy\PHPTutorial\WWW\thinkphp\application\home\view\common\nav.html";i:1526552876;s:77:"E:\phpstudy\PHPTutorial\WWW\thinkphp\application\home\view\common\footer.html";i:1526543313;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
function hideURLbar(){ window.scrollTo(0,1); } 
</script>

<link href="/static/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic' rel='stylesheet' type='text/css'>


<link href="/static/home/css/style.css" rel='stylesheet' type='text/css' />	
<link href="/static/home/css/component.css" rel='stylesheet' type='text/css' />	
<link href="/static/home/css/nav.css" rel='stylesheet' type='text/css' />	
<link href="/static/home/css/magnific-popup.css" rel="stylesheet" type="text/css">

<link href="/static/home/css/animate.css" rel="stylesheet" type="text/css" media="all">


	<style>
		  	#parent .cat-name{
				font-size: 16px;
		  	}

		  	#parent .h-list li{
		  		padding-left: 16px;
		  	}
		  	.h-curr{
		  		color: #5bb2fc;
		  	}
	</style>


</head>
<body> 
	
    <!-- 头部 banner -->
    <div class="banner" id="home">
         <header>
            <nav class="cd-stretchy-nav">
                <a class="cd-nav-trigger" href="#0">
                    <h6>Menu</h6>
                    <span aria-hidden="true"></span>
                </a>
                <ul class="side_nav">
                    <li><a href="<?php echo url('home/index/index'); ?>"><span>Home</span></a></li>
                    <li><a href="typography.html"><span>Services</span></a></li>
                    <li><a href="<?php echo url('home/articles/index'); ?>"><span>Articles</span></a></li>
                    <li><a href="gallery.html"><span>Gallery</span></a></li>
                    <li><a href="<?php echo url('home/contact/index'); ?>"><span>Contact</span></a></li>
                </ul> 
                <span aria-hidden="true" class="stretchy-nav-bg"></span>
            </nav>
        </header>
        <div class="content-part">
            <h1 class="title wow fadeInDown animated animated" data-wow-delay=".3s"><a href="index.html">Go Easy On</a></h1>
            <span class="wow fadeInUp animated animated" data-wow-delay=".2s">Where do you want to be?</span>
        </div>
    </div>
    <!--/start-inner-content-->
    <!-- blog -->
    <div class="help-right">
        <div class="h-content">
        </div>
    </div>
    <div class="blog">
        <!-- container -->
        <div class="container">
            <div class="blog-info wow fadeInDown animated animated" data-wow-delay=".5s">
                <h2 class="tittle">Our Blog</h3>
			</div>
			<div class="blog-top-grids">
				<div class="col-md-8 blog-top-left-grid">
					<div class="left-blog">
						<div class="blog-left">
							<!-- 作者信息 -->
							<div class="blog-left-left wow fadeInRight animated animated" data-wow-delay=".5s">
								<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2016 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								<a href="single.html">
							</div>

							<div class="blog-left-right wow fadeInRight animated animated" data-wow-delay=".5s">
								<!-- 全部文章的显示 -->
							 <?php if((!input("param.catId") && !input("param.id"))): ?>
							<div class="head">
							    <p>
							        <span>全部文章</span>
							    </p>
							    <div class='wst-clear'></div>
							</div>

							<ul class="news-list">
							    <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?>
							    <li>
							        <div id="g-square"></div>
							        <a href="<?php echo url('home/article/view',['id'=>$li['articleId']]); ?>"><?php echo $li['articleTitle']; ?></a>
							        <span class="list-time"> <?php echo date('Y-m-d H:i:s',strtotime($li['createTime'])); ?></span>
							    </li>
							    <?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
							<?php endif; ?> 
							<!-- 文章种类的显示 -->
							<?php if(isset($newsList)): ?>
							<div class="head">
							    <p>
							        <span><?php echo $title; ?></span>
							    </p>
							    <div class='wst-clear'></div>
							</div>
							<ul class="news-list">
							    <?php if(is_array($newsList) || $newsList instanceof \think\Collection || $newsList instanceof \think\Paginator): $i = 0; $__LIST__ = $newsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?>
							    <li>
							        <div id="g-square"></div>
							        <a href="<?php echo url('home/articles/view',['id'=>$n['articleId']]); ?>"><?php echo $n['articleTitle']; ?></a>
							        <span class="list-time"> <?php echo date('Y-m-d H:i:s',strtotime($n['createTime'])); ?></span>
							    </li>
							    <?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
							<?php endif; ?>
							</div>
							<div class="clearfix"> </div>
						</div>

					</div>
					<nav>
						<!-- 分页 -->
						<ul class="pagination wow fadeInRight animated animated" data-wow-delay=".5s">
                            <?php if(isset($page)): ?>
                            <div class="h-page"><?php echo $page; ?>
                                <div class='wst-clear'></div>
                            </div>
                            <?php endif; ?>
						</ul>
					</nav>
				</div>
				<div class="col-md-4 blog-top-right-grid">
					<div class="Categories">
						<!-- 面包导航 -->
					<ol class="breadcrumb">
	                    <li class="">首页</li>
	                    <li class="">文章</li>
	                     <?php if(is_array($bcNav) || $bcNav instanceof \think\Collection || $bcNav instanceof \think\Paginator): $i = 0; $__LIST__ = $bcNav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bc): $mod = ($i % 2 );++$i;?>
	                     <li class="active">
	                        <a href="<?php echo url('home/articles/nlist',['catId'=>$bc['catId']]); ?>"><?php echo $bc['catName']; ?></a> 
	                     </li>
                     <?php endforeach; endif; else: echo "" ;endif; ?>
             		 </ol>
						<!-- 左侧导航 -->
                        <ul id="parent">
                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <li class="wow fadeInLeft animated animated" data-wow-delay=".5s" style="background: 0 none;">
                                <span class="cat-name"><?php echo $v['catName']; ?>
                                </span>
                                <ul class="h-list">
                                    <?php if(is_array($v['children']) || $v['children'] instanceof \think\Collection || $v['children'] instanceof \think\Paginator): $k1 = 0; $__LIST__ = $v['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($k1 % 2 );++$k1;?>
                                    <a href="<?php echo url('home/Articles/nList',['catId'=>$v1['catId']]); ?>" class="wow fadeInLeft animated animated" data-wow-delay=".5s">
                                        <li class="<?php if(($v1['catId']==$catId)): ?>h-curr<?php endif; ?>"><?php echo $v1['catName']; ?>（<?php echo $v1['newsCount']; ?>）</li>
                                    </a>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //blog -->
<!-- bottom -->
   <div class="map-bottom">
					<div class="col-md-4 adrs-left wow fadeInUp animated animated" data-wow-delay=".5s">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						<p>江苏-盐城</p>
					</div>
					<div class="col-md-4 adrs-left adrs-middle wow fadeInUp animated animated" data-wow-delay=".5s">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						<p>15380548973</p>
					</div>
					<div class="col-md-4 adrs-left adrs-right wow fadeInUp animated animated" data-wow-delay=".5s">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<p><a href="mailto:example@email.com">hancuiyang@163.com</a></p>
					</div>
					<div class="clearfix"></div>
				</div>

<!-- <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a> -->

</body>
</html>

<script src="/static/plugins/jquery.min.js"> </script>
<script src="/static/plugins/common.js"></script>
<script src="/static/plugins/layer/layer.js"></script>


<script src="/static/home/js/modernizr.custom.js"> </script>
<script src="/static/home/js/move-top.js"></script>
<script src="/static/home/js/easing.js"></script>
<script src="/static/home/js/jquery.magnific-popup.js" type="text/javascript"></script>

<script src="/static/home/js/wow.min.js"></script>

<script src="/static/home/js/rAF.js"></script>
<script src="/static/home/js/demo-2.js"></script>
<script src="/static/home/js/main.js"></script> 

<script src="/static/home/js/bootstrap.js"></script>

<script type="text/javascript">
	 //php信息配置
	 window.conf = {
		"ROOT"      : "", 
		"APP"       : "<?php echo request()->root; ?>", 
		"STATIC"    : "/static", 
		"SUFFIX"    : "<?php echo config('url_html_suffix'); ?>"
	}
</script>


<script src="/static/home/js/common.js"></script>


<script type="text/javascript">
	jQuery(document).ready(function($) {

	new WOW().init();

	
	// 返回顶部
		$().UItoTop();

		$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
	});
</script>


