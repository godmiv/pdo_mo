<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shipping extends Controller_Template {

	public $template = 'tpl/default';
	public $columns;

	public function before() {
		parent::before();
		$this->user = array ('user' => Session::instance()->get('user'));
		$columns = Kohana::$config->load('columns');
		$this->columns['shipping'] = $columns->get('shipping');
	}

	public function action_index() {
		if(!perm::check()) $this->request->redirect('');
		$data = array();
		$data['columns']['shipping'] = $this->columns['shipping'];
		$data['colnames']['shipping']= implode('","',Arr::pluck($data['columns']['shipping'], '0'));
		$this->template->menu = View::factory('menu',$this->user);
		$this->template->content = View::factory('shipping',$data);
	}

	public function action_tableshipping() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		$query = DB::select()->from('journal')->where('finishdate', 'is', null);
		$this->response->headers['Content-type'] = 'text/xml;charset=utf-8';//("Content-type: text/xml;charset=utf-8");
		$fields = array_keys($this->columns['shipping']);
		$s = Helper_Jqgrid::xmlforjqgrid($query, $fields);
		$this->response->body($s);
	}
	
	/*
	 * Помечает детали как отгруженные
	 * Вызывается через ajax
	 */
	public function action_done() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		if(!empty($_POST)) {
			$ids = explode(',', $_POST['ids']);
			$query = DB::update('journal')->set(array( 'finishdate' => DB::expr('now()') ))->where('id', 'IN', $ids);
			$query->execute();
			echo 'ok';
		} else {
			echo 'Не выбрана ни одна деталь';
		}
 	}
	
} // End Shipping
