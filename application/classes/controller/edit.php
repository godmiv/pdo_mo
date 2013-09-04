<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Edit extends Controller_Template {

	public $template = 'tpl/default';
	public $columns;

	public function before() {
		parent::before();
		$this->user = array ('user' => Session::instance()->get('user'));
		$columns = Kohana::$config->load('columns');
		$this->columns['edit'] = $columns->get('welcome');
	}

	public function action_tableedit() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		$query = DB::select()->from('journal');
		$this->response->headers['Content-type'] = 'text/xml;charset=utf-8';//("Content-type: text/xml;charset=utf-8");
		$fields = array_keys($this->columns['edit']);
		$s = Helper_Jqgrid::xmlforjqgrid($query, $fields);
		$this->response->body($s);
	}

	public function action_edit() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		if($_POST['oper'] == 'edit') {
			$this->response->body('тест');
		}
	}

	public function action_index() {
		$data = array();
		
		chdir ('d:/usr/www/_pdo_mo/dump/');
		foreach (glob("*.sql") as $filename) {
			$data['file'][$filename]['name'] = $filename;
			$data['file'][$filename]['size'] = filesize($filename);
			$data['file'][$filename]['mtime'] = date ("Y-m-d H:i:s", filemtime($filename));
		}
		
		$data['vidremonta'] = DB::select()->from('vidremonta')->execute()->as_array();
		$str1 = '';
		foreach ($data['vidremonta'] as $v) {
			$str1 .= $v['name'].':'.$v['name'].';';
		}
		$data['vidremonta_list'] = rtrim($str1, ";");
		$data['columns']['edit'] = $this->columns['edit'];
		$data['colnames']['edit']= implode('","',Arr::pluck($data['columns']['edit'], '0'));

		$this->template->menu = View::factory('menu',$this->user);
		$this->template->content = View::factory('edit',$data);
	}
	
	public function action_dump() {
		$this->auto_render = false;
		$filename = 'dump_'.date("Y-m-d",time()).'.sql';
		exec ("d:/usr/mysql/bin/mysqldump -h sapr02 -uroot -p1 pdo_mo > d:/usr/www/_pdo_mo/dump/".$filename);
		//$this->execInBackground("d:/usr/mysql/bin/mysqldump -h sapr02 -uroot -p1 pdo_mo > d:/usr/www/_pdo_mo/dump/".$filename);
		$this->request->redirect('edit');
	}
	public function action_recovery() {
		$this->auto_render = false;
		if(isset($_POST['file']) and ($_POST['file'] != ''))
		{
			$filename = $_POST['file'];
			if (file_exists("d:/usr/www/_pdo_mo/dump/".$filename)) {
				exec ("d:/usr/mysql/bin/mysql -h sapr02 -uroot -p1 pdo_mo < d:/usr/www/_pdo_mo/dump/".$filename);
				//$this->execInBackground("d:/usr/mysql/bin/mysql -h sapr02 -uroot -p1 pdo_test < d:/usr/www/_pdo_mo/dump/".$filename);
			}
			$this->request->redirect('edit');
		}
	}
	
	function execInBackground($cmd) { 
     if (substr(php_uname(), 0, 7) == "Windows"){ 
         pclose(popen("start /B ". $cmd, "r"));  
     } 
     else { 
         exec($cmd . " > /dev/null &");   
     } 
	}

} // End Welcome
