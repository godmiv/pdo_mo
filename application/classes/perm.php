<?php defined('SYSPATH') or die('No direct script access.');

class Perm {
	
	public static function check($action = '') {
		if($action != '') $controller = $action;
		else $controller = Request::current()->controller();
		$user = Session::instance()->get('user') ? Session::instance()->get('user') : '';
		if($user == '') return false;
		$q = DB::select()->from('actions')->join('permission', 'left')->on('action_id','=','actions.id')
				->where('user_id','=',$user['id'])
				->and_where('path', '=', $controller)
				->execute()->as_array();
		if(isset($q[0]) and '1' == $q[0]['allowed']) return true;
		else return false;
	}
}
