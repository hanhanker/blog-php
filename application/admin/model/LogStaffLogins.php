<?php
namespace app\admin\model;
use think\Model;
use think\Db;


class LogStaffLogins extends Model{
    /**
	 * 分页
	 */
	public function pageQuery(){
		$startDate = input('get.startDate');
		$endDate = input('get.endDate');
		$where = [];
		if($startDate!='')$where['l.loginTime'] = ['>=',$startDate." 00:00:00"];
		if($endDate!='')$where[' l.loginTime'] = ['<=',$endDate." 23:59:59"];
		return $mrs = Db::name('log_staff_logins')->alias('l')->join('__STAFFS__ s',' l.staffId=s.staffId','left')
			->where($where)
			->field('l.*,s.staffName')
			->order('l.loginId', 'desc')->paginate(input('pagesize/d'));
			
	}
	// public function log(){
	// 	$mrs = $this->order('loginTime', 'desc')
	// 		->limit(1)
	// 		->select();
	// 		foreach ($mrs as $key => $value) {
	// 		// session('WST_STAFF.lastTime',$value['loginTime']);
	// 		// session('WST_STAFF.lastIP',$mrs['loginIp']);
	// 		}
			

			
	// }
}
