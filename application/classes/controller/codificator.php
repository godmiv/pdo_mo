<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Codificator extends Controller_Main {

	public function before() {
		parent::before();
		$this->columns['detal'] = $this->colconfig->get('detal');
	}

	public function action_index() {
		if(!perm::check()) $this->request->redirect('');
		$data = array();

		$data['nazvdet'] = DB::select()->from('nazvdet')->execute()->as_array();
		$str1 = '';
		foreach ($data['nazvdet'] as $v) {
			$str1 .= $v['name'].':'.$v['name'].';';
		}
		$data['nazvdet_list'] = rtrim($str1, ";");
		$data['nazvdet_selected'] = Arr::get($_POST,'nazvdet','');
		
		$data['columns']['detal'] = $this->columns['detal'];
		$data['colnames']['detal'] = implode('","',Arr::pluck($data['columns']['detal'], '0'));
		$this->template->menu = View::factory('menu',$this->user);
		$this->template->content = View::factory('codificator',$data);
	}
	
	/*
	 * Вывод таблицы с деталями
	 * Вызывается jqgrid'ом через ajax
	 */
	public function action_detal() {
		if(!Request::initial()->is_ajax()) die();
		$this->auto_render = false;
		$query = DB::select()->from('codificator');
		$this->response->headers['Content-type'] = 'text/xml;charset=utf-8';//("Content-type: text/xml;charset=utf-8");
		$fields = array_keys($this->columns['detal']);
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
			$query = DB::delete('codificator')->where('id', '=', $_POST['id']);
			$query->execute();
			$status = "success";
			$message = "del succeeded";
			$s = $status.';'.$message.';';
		}
		
		if($_POST['oper'] == 'add') {
			$detalavto	= Arr::get($_POST, 'detalavto');
			$nazvdet	= Arr::get($_POST, 'nazvdet');
			$nosnas		= Arr::get($_POST, 'nosnas');
			$nkompl		= Arr::get($_POST, 'nkompl');
			
			$query = DB::select()->from('codificator')
					->where('detalavto','=', $detalavto)
					->and_where('nazvdet', '=', $nazvdet)
					->and_where('nosnas', '=', $nosnas)
					->and_where('nkompl', '=', $nkompl);
			if($query->execute()->count() > 0) {
				$status = "fail";
				$message = "Такая запись уже есть в кодификаторе";
			} else {
				$query = DB::insert('codificator',array('detalavto','nazvdet','nosnas','nkompl'))->values(array($detalavto,$nazvdet,$nosnas,$nkompl));
				$result = $query->execute();
				$status = "success";
				$message = "add succeeded";
			}
			$s = $status.';'.$message.';';
		}
		
		if($_POST['oper'] == 'edit') {
			//print_r($_POST);
			$id = Arr::get($_POST,'id');
			$detalavto = Arr::get($_POST,'detalavto');
			$nosnas = Arr::get($_POST,'nosnas');
			$nkompl = Arr::get($_POST, 'nkompl');
			$nazvdet = Arr::get($_POST, 'nazvdet');

			$query = DB::select()->from('codificator');

			$query->where_open()
					->where('detalavto','=',$detalavto)
					->and_where('nosnas','=',$nosnas)
					->and_where('nkompl', '=', $nkompl)
					->and_where('nazvdet', '=', $nazvdet)
				->where_close()
					->and_where('id', '<>', $id);

			$result = $query->execute()->as_array();
			
			if(empty ($result)){
				$query = DB::update('codificator')
					->set(array('detalavto' => $detalavto,
					'nosnas' => $nosnas,
					'nkompl' => $nkompl,
					'nazvdet' => $nazvdet
					))
					->where('id', '=', $id);
				$query->execute();
				$status = "success";
				$message = "edit succeeded";
			} else {
				$status = "fail";
				$message = "Ошибка. Такое сочетание Деталь автомобиля+Номер оснастки+Номер комплекта+Название детали уже есть в базе.";
			}
			$s = $status.';'.$message.';';
		}
		$this->response->body($s);
	}


} // End Codiricator
