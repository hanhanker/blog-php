<?php
namespace app\home\controller;
use think\Controller;
use app\home\model\Contact as M;

class Contact extends Controller{
    public function index(){
     return $this->fetch('contact/index');

    }

    public function contact(){
    	$m = new M();
        $rs = $m->advice();
        return $rs;
    }
}