<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'welcome' => array
	(
		//       название ширина hidden
		'id'=>array('ID', '30',  'true'),
		'detalavto'=>array('Деталь автомобиля','120','false'),
		'nosnas'=>array('Шифр оснастки','120','false'),
		'nkompl'=>array('№ комплекта','30','false'),
		'nazvdet'=>array('Наименование оснастки','110','false'),
		'doc'=>array('№ документа','60','false'),
		'docdate'=>array('Дата документа','90','false'),
		'startdate'=>array('Дата регистрации поступления','90','false'),
		'vidremonta'=>array('Вид ремонта','120','false'),
		'finishdate'=>array('Дата отгрузки','90','false'),
		'notes'=>array('Примечания','150','false'),
	),
	'detal' => array
	(
		'id'=>array('ID','50','true'),
		'detalavto'=>array('Деталь автомобиля','200','false'),
		'nosnas'=>array('Шифр оснастки','200','false'),
		'nkompl'=>array('№ комплекта','70','false'),
		'nazvdet'=>array('Наименование оснастки','200','false'),
	),
	'journal' => array
	(
		'id'=>array('ID','30','true'),
		'detalavto'=>array('Деталь автомобиля','120','false'),
		'nosnas'=>array('Шифр оснастки','120','false'),
		'nkompl'=>array('№ комплекта','30','false'),
		'nazvdet'=>array('Наименование оснастки','110','false'),
		'doc'=>array('№ документа','60','false'),
		'docdate'=>array('Дата документа','90','false'),
		'startdate'=>array('Дата регистрации поступления','90','false'),
		'vidremonta'=>array('Вид ремонта','120','false'),
//		'finishdate'=>array('Дата отгрузки','160','false'),
		'notes'=>array('Примечания','150','false'),
	),
	'shipping' => array
	(
		'id'=>array('ID','30','true'),
		'detalavto'=>array('Деталь автомобиля','120','false'),
		'nosnas'=>array('Шифр оснастки','120','false'),
		'nkompl'=>array('№ комплекта','30','false'),
		'nazvdet'=>array('Наименование оснастки','110','false'),
		'doc'=>array('№ документа','60','false'),
		'docdate'=>array('Дата документа','90','false'),
		'startdate'=>array('Дата регистрации поступления','90','false'),
		'vidremonta'=>array('Вид ремонта','90','false'),
		'finishdate'=>array('Дата отгрузки','90','false'),
		'notes'=>array('Примечания','150','false'),
	)
);