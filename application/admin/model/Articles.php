<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Articles extends Model{
	/*展示表的格式*/
	  public function getEModel($tables){
        $rs =  Db::query('show columns FROM `'.config('database.prefix').$tables."`");
        $obj = [];
        if($rs){
            foreach($rs as $key => $v) {
                $obj[$v['Field']] = $v['Default']; //把字段的默认值赋给字段名
                if($v['Key'] == 'PRI')$obj[$v['Field']] = 0; //如果Key的值是PRI则默认为0
            }
        }
        return $obj;
    }
    
	/**
	 * 分页
	 */
	public function pageQuery(){
		$key = input('get.key');
		$where = [];
		$where['a.dataFlag'] = 1;
		if($key!='')$where['a.articleTitle'] = ['like','%'.$key.'%'];
		$page = Db::name('articles')->alias('a')
		->join('__ARTICLE_CATS__ ac','a.catId= ac.catId','left')
		->join('__STAFFS__ s','a.staffId= s.staffId','left')
		->where($where)
		->field('a.articleId,a.catId,a.articleTitle,a.isShow,a.articleContent,a.articleKey,a.createTime,ac.catName,s.staffName')
		->order('a.articleId', 'desc')
		->paginate(input('post.pagesize/d'))->toArray();

		if(count($page['data'])>0){
			foreach ($page['data'] as $key => $v){
				//把内容转换为具体的形式 strip_tags 剥去字符串中的 HTML 标签 
				// htmlspecialchars_decode 把 < 和 > 转换为实体常用于防止浏览器将其用作 HTML 元素
				$page['data'][$key]['articleContent'] = strip_tags(htmlspecialchars_decode($v['articleContent']));
			}
		}
		//return $page;
		return WSTPager2($page);

	}
	
	/**
	 * 显示是否显示/隐藏
	 */
	public function editiIsShow(){
		$id = input('post.id/d');
		$isShow = input('post.isShow/d')?0:1;
		$result = $this->where(['articleId'=>$id])->update(['isShow' => $isShow]);
		if(false !== $result){
			return WSTReturn("操作成功", 1);
		}else{
			return WSTReturn($this->getError(),-1);
		}
	}
	
	/**
	 * 获取指定对象
	 */
	public function getById($id){
		$single = $this->where(['articleId'=>$id,'dataFlag'=>1])->find();
		$singlec = Db::name('article_cats')->where(['catId'=>$single['catId'],'dataFlag'=>1])->field('catName')->find();
		$single['catName']=$singlec['catName'];
		$single['articleContent'] = htmlspecialchars_decode($single['articleContent']);
		return $single;
	}
	
	/**
	 * 新增
	 */
	public function add(){
		$data = input('post.');
		WSTUnset($data,'articleId,dataFlag');
		$data["staffId"] = (int)session('WST_STAFF.staffId');
		$data['createTime'] = date('Y-m-d H:i:s');
		$result = $this->validate('admin/Articles.add')->allowField(true)->save($data);
		if(false !== $result){
			return WSTReturn("新增成功", 1);
		}else{
			return WSTReturn($this->getError(),-1);
		}
	}
	
	/**
	 * 编辑
	 */
	public function edit(){
		$articleId = input('post.id/d');
		$data = input('post.');
		WSTUnset($data,'articleId,dataFlag,createTime');
		$data["staffId"] = (int)session('WST_STAFF.staffId');
		$result = $this->validate('Articles.edit')->allowField(true)->save($data,['articleId'=>$articleId]);
		if(false !== $result){
			return WSTReturn("修改成功", 1);
		}else{
			return WSTReturn($this->getError(),-1);
		}
	}
	
	/**
	 * 删除
	 */
	public function del(){
		$id = input('post.id/d');
		$data = [];
		$data['dataFlag'] = -1;
		$result = $this->where(['articleId'=>$id])->update($data);
		if(false !== $result){
			return WSTReturn("删除成功", 1);
		}else{
			return WSTReturn($this->getError(),-1);
		}
	}

	/**
	 * 批量删除
	 */
	public function delByBatch(){
		$ids = input('post.ids');
		$data = [];
		$data['dataFlag'] = -1;
		$result = $this->where(['articleId'=>['in',$ids]])->update($data);
		if(false !== $result){
			return WSTReturn("删除成功", 1);
		}else{
			return WSTReturn($this->getError(),-1);
		}
	}
}