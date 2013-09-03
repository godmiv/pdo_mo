<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template {

	public $template = 'tpl/default';
	public $columns;

	public function before() {
		parent::before();
		$this->user = array ('user' => Session::instance()->get('user'));
		$this->columns['users'] = array(
			'id'=>array('ID','30'),
			'group'=>array('Группа','150'),
			'login'=>array('Логин','150'),
			'pass'=>array('Пароль','100'),
			'fio'=>array('ФИО','300'),
		);
		$this->columns['groups'] = array(
			'group'=>array('Группа','150'),
			'allowed'=>array('allowed','150'),
			'action'=>array('Действие','110'),
		);
		$this->columns['permissions'] = array(
			'id'=>array('ID','30'),
			'group'=>array('Группа','150'),
			'login'=>array('Логин','150'),
			'fio'=>array('ФИО','300'),
			'action'=>array('Действие','110'),
			'allowed'=>array('Да (1) / Нет (0)','150'),
			'path'=>array('path','100'),
		);
	}

	public function action_tableusers() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		$query = DB::select()->from('users');
		$this->response->headers['Content-type'] = 'text/xml;charset=utf-8';//("Content-type: text/xml;charset=utf-8");
		$fields = array_keys($this->columns['users']);
		$s = Helper_Jqgrid::xmlforjqgrid($query, $fields);
		$this->response->body($s);
	}
	public function action_tablegroups() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		//$query = DB::select()->from('users')->join('permission','left')->on('users.id', '=', 'user_id')->join('actions','left')->on('permission.action_id','=','actions.id');
		$query = DB::select()->from('group_permission');
		$this->response->headers['Content-type'] = 'text/xml;charset=utf-8';//("Content-type: text/xml;charset=utf-8");
		$fields = array_keys($this->columns['groups']);
		$s = Helper_Jqgrid::xmlforjqgrid($query, $fields);
		$this->response->body($s);
	}
	public function action_tablepermissions() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		//$query = DB::select()->from('users')->join('permission','left')->on('users.id', '=', 'user_id')->join('actions','left')->on('permission.action_id','=','actions.id');
		$query = DB::select()->from('users_permission_actions');
		$this->response->headers['Content-type'] = 'text/xml;charset=utf-8';//("Content-type: text/xml;charset=utf-8");
		$fields = array_keys($this->columns['permissions']);
		$s = Helper_Jqgrid::xmlforjqgrid($query, $fields);
		$this->response->body($s);
	}
	
	public function action_index()
	{
		if(!perm::check()) $this->request->redirect('');
		$data = array();
		$data['form_all'] = array(
			'login'		=>array('name'=>'login',	'value'=>Arr::get($_POST, 'login', ''),'attr'=>array('desc'=>'Логин', 'id'=>'login', 'class'=>'FormElement ui-widget-content ui-corner-all','readonly'=>'readonly')),
			'fio'		=>array('name'=>'fio',		'value'=>Arr::get($_POST, 'fio', ''),'attr'=>array('desc'=>'ФИО', 'id'=>'fio', 'class'=>'FormElement ui-widget-content ui-corner-all','readonly'=>'readonly')),
			'allowed'	=>array('name'=>'allowed',	'value'=>Arr::get($_POST, 'allowed', ''),'attr'=>array('desc'=>'Разрешено/Запрещено', 'id'=>'allowed', 'class'=>'FormElement ui-widget-content ui-corner-all')),
		);
		$data['action'] = DB::select()->from('actions')->execute()->as_array();
		$str1 = '';
		foreach ($data['action'] as $v) {
			$str1 .= $v['name'].':'.$v['name'].';';
		}
		$data['action_list'] = rtrim($str1, ";");
		$data['action_selected'] = Arr::get($_POST,'action','');

		$data['columns']['users'] = $this->columns['users'];
		foreach ($data['columns']['users'] as $key=>$val){
			$data['colnames']['users'][] = $val[0];
		}
		$data['columns']['groups'] = $this->columns['groups'];
		foreach ($data['columns']['groups'] as $key=>$val){
			$data['colnames']['groups'][] = $val[0];
		}
		$data['columns']['permissions'] = $this->columns['permissions'];
		foreach ($data['columns']['permissions'] as $key=>$val){
			$data['colnames']['permissions'][] = $val[0];
		}
				
		$this->template->menu = View::factory('menu',$this->user);
		$this->template->content = View::factory('admin',$data);
	}
	/*
	 * Этот метод вызывается стандартными кнопками jqgrid (ajax)
	 * При нажатии кнопки jqgrid посылает $_POST['oper'] который может содержать del, edit или add
	 */
	public function action_edituser() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;

		if($_POST['oper'] == 'del') {
			$login	= Arr::get($_POST, 'login');
			if($login == 'dig') {
				$status = "fail";
				$message = "dig is root";
			} else {
				Database::instance()->begin();
				$query = DB::delete('permission')->where('user_id', '=', $_POST['id']);
				$query->execute();
				$query = DB::delete('users')->where('id', '=', $_POST['id']);
				$query->execute();
				Database::instance()->commit();
				$status = "success";
				$message = "del succeeded";
			}
		}
		
		if($_POST['oper'] == 'add') {
			$login	= strtolower(Arr::get($_POST, 'login'));
			$pass	= Arr::get($_POST, 'pass');
			$group	= Arr::get($_POST, 'group');
			$fio	= Arr::get($_POST, 'fio');
			$q = DB::select()->from('users')->where('login','=',$login);
			if ($q->execute()->count() > 0) {
				$status = "fail";
				$message = "login already exists";
			} else {
				/*
				 * При добавлении пользователя в таблицу доступов добаляется запись для какждого действия этого пользователя
				 * На все действия ставится запрет (0) и только на просмотр ставится разрешения, остальные действия необходимо разрешить
				 * в админ-панели, путем высталения 1 в соответствующей строке
				 */						
				$q1 = DB::select()->from('actions')->execute()->as_array();
				$actions_id = Arr::pluck($q1,'id'); //получаем список id всех возможных действий
				Database::instance()->begin();
				$q = DB::insert('users')->columns(array('login','pass','group','fio'))->values(array($login,$pass,$group,$fio))->execute();
				$new_user_id = $q[0];//last insert id
				$q = DB::insert('permission')->columns(array('user_id','allowed','action_id'));
				foreach ($actions_id as $k => $id){
					$q->values(array($new_user_id,'0',$id));//для всех возможных действий ставим запрет
				}
				$q->values(array($new_user_id,'1','1'));//потом для первого действия (просмотр базы данных) ставим разрешение
				$q->execute();
				Database::instance()->commit();
				$status = "success";
				$message = "user added in db";
			}
		}
		
		if($_POST['oper'] == 'edit') {
			//print_r($_POST);
			$id = Arr::get($_POST,'id');
			$group = Arr::get($_POST,'group');
			$login = Arr::get($_POST,'login');
			$pass = Arr::get($_POST, 'pass');
			$fio = Arr::get($_POST, 'fio');
			$q = DB::select()->from('users')->where('login', '=', $login)->and_where('id', '!=', $id)->execute();
			if($q->count() > 0){
				$status = "fail";
				$message = "user login already exists";
			} else {
				$query = DB::update('users')
					->set(array(
					'group' => $group,
					'login' => $login,
					'pass' => $pass,
					'fio' => $fio
					))
					->where('id', '=', $id);
				$query->execute();
				$status = "success";
				$message = "edit succeeded";
			}
		}
		$s = $status.';'.$message.';';
		$this->response->body($s);
	}
	public function action_editpermissiongroup() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		//здесь будем обрабатывать толь событие 'edit' т.к. мы только редактируем права доступа и меняем 1/0
		if($_POST['oper'] == 'edit') {
			$q = DB::select()->from('group_permission')->where('id','=',Arr::get($_POST, 'id'))->execute()->as_array();
			//echo'<pre>';print_r($q[0]);die();
			$action_id = $q[0]['actions_id'];
			$q1 = DB::select()->from('users')->where('group','=',$q[0]['group'])->execute()->as_array();
			//echo'<pre>';print_r(implode(',',Arr::pluck($q1, 'id')));die();
			$users_ids = Arr::pluck($q1, 'id');
			DB::update('permission')->set(array('allowed'=>Arr::get($_POST,'allowed')))->where('user_id','in',$users_ids)->and_where('action_id', '=', $action_id)->execute();
			$status = "success";
			$message = "edit succeeded";
			$s = $status.';'.$message.';';
			$this->response->body($s);
		}
	}
	public function action_editpermission() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		//здесь будем обрабатывать толь событие 'edit' т.к. мы только редактируем права доступа и меняем 1/0
		if($_POST['oper'] == 'edit') {
			DB::update('permission')->set(array('allowed'=>Arr::get($_POST, 'allowed')))->where('id','=',Arr::get($_POST,'id'))->execute();
			$status = "success";
			$message = "edit succeeded";
			$s = $status.';'.$message.';';
			$this->response->body($s);
		}
	}

} // End Admin
