<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Help extends Controller_Template {

	public $template = 'tpl/default';
	public $columns;

	public function before() {
		parent::before();
		$this->user = array ('user' => Session::instance()->get('user'));
	}

	public function action_index()
	{
		$data = array();
		$query = DB::select()->from('journal')->execute();
		$data['count_journal'] = $query->count();
		$query = DB::select()->from('codificator')->execute();
		$data['count_codificator'] = $query->count();
		$this->template->menu = View::factory('menu',$this->user);
		$this->template->content = View::factory('help',$data);
	}

} // End Help
