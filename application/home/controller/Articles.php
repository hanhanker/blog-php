<?php
namespace app\home\controller;
use think\Controller;

class Articles extends Controller{

    public function index(){
        return $this->redirect('home/Articles/nlist');
    }

    /**
    *   根据分类id获取文章列表
    */
    public function nlist(){
        $m = model('home/articles');
        $pageObj = $m->nList();
        $news = $pageObj->toArray();
        // 分页页码
        $page = $pageObj->render();
        $this->assign('page',$page);
        //获取左侧列表
        $leftList = $m->NewsList();
        $this->assign('list',$leftList);
        $this->assign('newsList',$news['data']);
        $this->assign('catId',(int)input('catId'));
        //面包屑导航
        $bcNav = $this->bcNav();
    
        // 获取title
        $currTitle = '';
        foreach($bcNav as $k=>$v){
            if($v['catId']==(int)input('catId'))$currTitle = $v['catName'];
        }
        $this->assign('title',$currTitle);
        $this->assign('bcNav',$bcNav);

        //如果没有导航条
        if(empty($bcNav))$this->redirect('home/Articles/view');

        return $this->fetch('articles/list');
    }

    public function view(){
        //获取左侧列表
        $m = model('home/Articles');
        $list = $m->NewsList();
        //当前分类id
        $content = $m->getNewsById();
        $this->assign('catId',(int)$content['catId']);
        $this->assign('list',$list);
        $this->assign('content',$content);


        //面包屑导航
        $bcNav = [];
        if(!empty($content)){
            $bcNav = $this->bcNav();
        }
        $this->assign('bcNav',$bcNav);

        return $this->fetch('articles/articles_view');
    
    }
    public function bcNav(){
        $m = model('home/Articles');
        return $m->bcNav();
    }
   
}