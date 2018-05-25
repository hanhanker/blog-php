<?php
namespace app\home\model;
use think\Model;
use think\Request;
use think\Db;
use think\Loader;
use think\Validate;
// use app\home\validate\User;

class Contact extends Model{

	public function advice(){
		$data = array();
    	$data['userName'] = input("post.username");
    	$data['userEmail'] = input("post.useremail");
    	$data['userPhone'] = input("post.userphone");
    	$data['userInfo'] = input("post.userinfo");
    	$data['createTime'] = date('Y-m-d H:i:s');
    	$data['dataFlag'] = 1;

        $msg = [
            'userName.require' => '名称必须',
            'userName.max'     => '名称最多不能超过25个字符',
            'userEmail'        => '邮箱格式错误',
        ];
        $rule  = [
             'userName'  => 'require|max:25',
             'userEmail' => 'email'
         ];
        $validate = new Validate($rule,$msg);

        
        if (!$validate->check($data)) {
            return WSTReturn($validate->getError());
        }


    	Db::startTrans();
        try{
            $res = $this->data($data)->save();

	    	if(false !==  $res ){
	    		Db::commit();
	    		return WSTReturn("",1);
	    	}
        }catch (\Exception $e) {
        	Db::rollback();
        }
    	return WSTReturn('提交失败');;
	}
}