<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Main {

	public function before() {
		parent::before();
		$this->columns['welcome'] = $this->colconfig->get('welcome');
	}

	public function action_tablewelcome() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		$query = DB::select()->from('journal');
		$this->response->headers['Content-type'] = 'text/xml;charset=utf-8';//("Content-type: text/xml;charset=utf-8");
		$fields = array_keys($this->columns['welcome']);
		$s = Helper_Jqgrid::xmlforjqgrid($query, $fields);
		$this->response->body($s);
	}
	
	public function action_index()
	{
		$data = array();
		$data['vidremonta'] = DB::select()->from('vidremonta')->execute()->as_array();
		$str1 = '';
		foreach ($data['vidremonta'] as $v) {
			$str1 .= $v['name'].':'.$v['name'].';';
		}
		$data['vidremonta_list'] = rtrim($str1, ";");
		$data['columns']['welcome'] = $this->columns['welcome'];
		$data['colnames']['welcome'] = implode('","',Arr::pluck($data['columns']['welcome'], '0'));
		$this->template->menu = View::factory('menu',$this->user);
		$this->template->content = View::factory('welcome',$data);
	}

} // End Welcome
