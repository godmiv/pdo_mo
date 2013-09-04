<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Journal extends Controller_Template {

	public $template = 'tpl/default';
	public $columns;

	public function before() {
		parent::before();
		$this->user = array ('user' => Session::instance()->get('user'));
		$columns = Kohana::$config->load('columns');
		$this->columns['journal'] = $columns->get('journal');
		$this->columns['detal'] = $columns->get('detal');
	}

	public function action_index()
	{
		if(!perm::check()) $this->request->redirect('');
		$data = array();
		$data['form_all'] = array(
			'detalavto'	=>array('name'=>'detalavto','value'=>Arr::get($_POST, 'detalavto', ''),'attr'=>array('desc'=>'Деталь автомобиля', 'id'=>'detalavto', 'class'=>'FormElement ui-widget-content ui-corner-all')),
			'nazvdet'	=>array('name'=>'nazvdet',	'value'=>Arr::get($_POST, 'nazvdet', ''),'attr'=>array('desc'=>'Название детали', 'id'=>'nazvdet', 'class'=>'FormElement ui-widget-content ui-corner-all')),
			'nosnas'	=>array('name'=>'nosnas',	'value'=>Arr::get($_POST, 'nosnas', ''),'attr'=>array('desc'=>'Шифр оснастки', 'id'=>'nosnas', 'class'=>'FormElement ui-widget-content ui-corner-all')),
			'nkompl'	=>array('name'=>'nkompl',	'value'=>Arr::get($_POST, 'nkompl', ''),'attr'=>array('desc'=>'№ комплекта', 'id'=>'nkompl', 'class'=>'FormElement ui-widget-content ui-corner-all')),
			'doc'		=>array('name'=>'doc',		'value'=>Arr::get($_POST, 'dok', ''),'attr'=>array('desc'=>'№ документа', 'id'=>'doc', 'class'=>'FormElement ui-widget-content ui-corner-all')),
			'docdate'	=>array('name'=>'docdate',	'value'=>Arr::get($_POST, 'docdate', ''),'attr'=>array('desc'=>'Дата документа', 'id'=>'docdate', 'class'=>'FormElement ui-widget-content ui-corner-all')),
			'notes'		=>array('name'=>'notes',	'value'=>Arr::get($_POST, 'notes', ''),'attr'=>array('desc'=>'Комментарии', 'id'=>'notes', 'class'=>'FormElement ui-widget-content ui-corner-all')),
		);
		$data['vidremonta'] = DB::select()->from('vidremonta')->execute()->as_array();
		$str1 = '';
		foreach ($data['vidremonta'] as $v) {
			$str1 .= $v['name'].':'.$v['name'].';';
		}
		$data['vidremonta_list'] = rtrim($str1, ";");
		$data['vidremonta_selected'] = Arr::get($_POST,'vidremonta','');

		$data['columns']['detal'] = $this->columns['detal'];
		$data['columns']['journal'] = $this->columns['journal'];
		$data['colnames']['detal']= implode('","',Arr::pluck($data['columns']['detal'], '0'));
		$data['colnames']['journal'] = implode('","',Arr::pluck($data['columns']['journal'], '0'));

		/* Перенесено в аякс функцию
		if(isset($_POST['add'])) {
			$post = Validation::factory($_POST);
			$post->rule('detalavto', 'not_empty');	
			$post->rule('nazvdet', 'not_empty');
			$post->rule('nosnas', 'not_empty');
			$post->rule('nkompl', 'not_empty');
			$post->rule('doc', 'not_empty');
			$post->rule('docdate', 'not_empty');

			if($post->check()) {
				$query = DB::insert('journal', array(
					'detalavto',
					'nazvdet',
					'nosnas',
					'nkompl',
					'doc',
					'docdate',
					'notes',
					'vidremonta',
					'startdate',
					))
						->values(array(
							Arr::get($_POST, 'detalavto'),
							Arr::get($_POST, 'nazvdet'),
							Arr::get($_POST, 'nosnas'),
							Arr::get($_POST, 'nkompl'),
							Arr::get($_POST, 'doc'),
							Arr::get($_POST, 'docdate'),
							Arr::get($_POST, 'notes'),
							Arr::get($_POST, 'vidremonta'),
							DB::expr('now()'),
							));
				$query->execute();
				Request::current()->redirect('journal');
			} else {
				$data['errors']=$post->errors('');
				//$this->template->content = 'Ошибка добавления записи в базу.';
			}
		 
		}*/
		$this->template->menu = View::factory('menu',$this->user);
		$this->template->content = View::factory('journal',$data);
	}

	public function action_ajaxAdd() {
		$this->auto_render = false;
		$post = Validation::factory($_POST);
		$post->rule('detalavto', 'not_empty');	
		$post->rule('nazvdet', 'not_empty');
		$post->rule('nosnas', 'not_empty');
		$post->rule('nkompl', 'not_empty');
		$post->rule('doc', 'not_empty');
		$post->rule('docdate', 'not_empty');
		if($post->check()){
			$query = DB::insert('journal', array(
				'detalavto',
				'nazvdet',
				'nosnas',
				'nkompl',
				'doc',
				'docdate',
				'notes',
				'vidremonta',
				'startdate',
				))
					->values(array(
						Arr::get($_POST, 'detalavto'),
						Arr::get($_POST, 'nazvdet'),
						Arr::get($_POST, 'nosnas'),
						Arr::get($_POST, 'nkompl'),
						Arr::get($_POST, 'doc'),
						Arr::get($_POST, 'docdate'),
						Arr::get($_POST, 'notes'),
						Arr::get($_POST, 'vidremonta'),
						DB::expr('now()'),
						));
			$query->execute();
			$res['code'] = 'success';			
		} else {
			$res['code'] = 'error';
			$res['errors'] = $post->errors('');
			$res['post'] = $_POST;
		}
		echo json_encode($res);
	}

	/*
	 * Вывод таблицы журнала
	 * Вызывается jqgrid'ом через ajax
	 */
	public function action_table() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		$query = DB::select()->from('journal');
		$this->response->headers['Content-type'] = 'text/xml;charset=utf-8';//("Content-type: text/xml;charset=utf-8");
		$fields = array_keys($this->columns['journal']);
		$s = Helper_Jqgrid::xmlforjqgrid($query, $fields);
		$this->response->body($s);
	}

	/*
	 * Этот метод вызывается стандартными кнопками jqgrid (ajax)
	 * При нажатии кнопки jqgrid посылает $_POST['oper'] который может содержать del, edit или add
	 */
	public function action_edit() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;

		if($_POST['oper'] == 'del') {
			$query = DB::delete('journal')->where('id', '=', $_POST['id']);
			$query->execute();
			$status = "success";
			$message = "del succeeded";
		}
		
		if($_POST['oper'] == 'add') {
		}
		
		if($_POST['oper'] == 'edit') {
			//print_r($_POST);
			$id = Arr::get($_POST,'id');
			$detalavto = Arr::get($_POST,'detalavto');
			$nosnas = Arr::get($_POST,'nosnas');
			$nkompl = Arr::get($_POST, 'nkompl');
			$nazvdet = Arr::get($_POST, 'nazvdet');
			$doc = Arr::get($_POST, 'doc');
			$docdate = Arr::get($_POST, 'docdate');
			$vidremonta = Arr::get($_POST, 'vidremonta');
			$notes = Arr::get($_POST, 'notes');
			

			$query = DB::update('journal')
					->set(array(
					'detalavto' => $detalavto,
					'nosnas' => $nosnas,
					'nkompl' => $nkompl,
					'nazvdet' => $nazvdet,
					'doc' => $doc,
					'docdate' => $docdate,
					'vidremonta' => $vidremonta,
					'notes' => $notes
					))
					->where('id', '=', $id);
				$query->execute();
				$status = "success";
				$message = "edit succeeded";
		}
		$s = $status.';'.$message.';';
		$this->response->body($s);
	}

} // End Journal					