<?php defined('SYSPATH') or die('No direct script access.');

class Helper_Jqgrid {
	
	/*
	 * Добавляет условия для поиска в запрос.
	 * @param $q Запрос, в который добавляются условия
	 * @param $p Объект json_decode, содержащий параметры поиска
	 */
	public static function createwhere($q,$p) {
//		print_r($p);
		$q->where_open();
		if($p->groupOp == 'AND') $w = 'and_where';
		if($p->groupOp == 'OR') $w = 'or_where';
		foreach ($p->rules as $rule) {
			//['eq','ne','lt','le','gt','ge','bw','bn','in','ni','ew','en','cn','nc']
			switch ($rule->op) {
				case 'eq': $q->$w($rule->field, '=', $rule->data); break; // равно
				case 'ne': $q->$w($rule->field, '<>', $rule->data); break; // не равно
				case 'lt': $q->$w($rule->field, '<', $rule->data); break; // меньше
				case 'le': $q->$w($rule->field, '<=', $rule->data); break; // меньше или равно
				case 'gt': $q->$w($rule->field, '>', $rule->data); break; // больше
				case 'ge': $q->$w($rule->field, '>=', $rule->data); break; // больше или равно
				case 'bw': $q->$w($rule->field, 'LIKE', $rule->data.'%'); break; // начинается с
				case 'bn': $q->$w($rule->field, 'NOT LIKE', $rule->data.'%'); break; // не начинается с
				case 'ew': $q->$w($rule->field, 'LIKE', '%'.$rule->data); break; // заканчивается на
				case 'en': $q->$w($rule->field, 'NOT LIKE', '%'.$rule->data); break; // не заканчивается на
				case 'cn': $q->$w($rule->field, 'LIKE', '%'.$rule->data.'%'); break; // содержит
				case 'nс': $q->$w($rule->field, 'NOT LIKE', '%'.$rule->data.'%'); break; // не содержит
				case 'nu': $q->$w($rule->field, 'IS', NULL); break; // is null
				case 'nn': $q->$w($rule->field, 'IS NOT', NULL); break; // is not null
				case 'in': $q->$w($rule->field, 'IN', explode(',', $rule->data)); break; // находится в
				case 'ni': $q->$w($rule->field, 'NOT IN', explode(',', $rule->data)); break; // не находится в
				//default:
			}
		}
		$q->where_close();
	}
	
	/*
	 * Готовит xml для jqgrid на основе запроса $query, списка полей $fields
	 */
	public static function xmlforjqgrid($query,$fields) {
		$page = Arr::get($_POST,'page');
		$limit = Arr::get($_POST,'rows');
		$sidx = Arr::get($_POST,'sidx');
		$sord = Arr::get($_POST,'sord');

		if(!$sidx) $sidx =1;

		// calculate the number of rows for the query. We need this for paging the result
		if($_POST['_search'] == 'true') {
			//$this->createwhere($query,json_decode(Arr::get($_POST,'filters')));
			Helper_Jqgrid::createwhere($query,json_decode(Arr::get($_POST,'filters')));
		}
		$count = $query->execute()->count();

		// calculate the total pages for the query
		if( $count > 0 && $limit > 0) {
			$total_pages = ceil($count/$limit);
		} else {
			$total_pages = 0;
		}

		// if for some reasons the requested page is greater than the total
		// set the requested page to total page
		if ($page > $total_pages) $page=$total_pages;

		// calculate the starting position of the rows
		$start = $limit*$page - $limit;

		// if for some reasons start position is negative set it to 0
		// typical case is that the user type 0 for the requested page
		if($start <0) $start = 0;

		// дополняем запрос условия сортировки и лимитами
		$query->order_by($sidx,$sord)->limit($limit)->offset($start);

		$result = $query->execute()->as_array();

		$s = "<?xml version='1.0' encoding='utf-8'?>";
		$s .= "<rows>";
		$s .= "<page>".$page."</page>";
		$s .= "<total>".$total_pages."</total>";
		$s .= "<records>".$count."</records>";

		// be sure to put text data in CDATA
		foreach($result as $row) {
			$s .= "<row id='". $row['id']."'>";
			foreach($fields as $key=>$val) {
				$s .= "<cell><![CDATA[". $row[$val]."]]></cell>";
			}
			$s .= "</row>";
		}
		$s .= "</rows>";
		//$s .= Database::instance()->last_query;//debug
		return $s;
	}
}
