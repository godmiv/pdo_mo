<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Main extends Controller_Template {

	public $template = 'tpl/default';
	public $columns;
	public $colconfig;
	
	public function before() {
		parent::before();
		
		$this->user = array ('user' => Session::instance()->get('user'));
		$this->colconfig = Kohana::$config->load('columns');
	
	}
} // End Main
