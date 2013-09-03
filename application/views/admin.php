<script type="text/javascript">
/*
$(document).ready(function(){
	createdialog();
	$(function(){
		$.datepicker.setDefaults(
		$.extend($.datepicker.regional["ru"])
		);
		$("#docdate").datepicker({dateFormat:'yy-mm-dd'});
	});
});

function createdialog(){
	$("#dialog").dialog({
		title: "Доступ пользователя",//тайтл, заголовок окна
		width: 750,//ширина
		height: 450,//высота
		modal: true,//true - окно модальное, false - нет
		autoOpen:false,
	});
}
*/
$(function(){
jQuery("#users").jqGrid({
    url:'<?php echo URL::base()?>admin/tableusers',
	editurl: "<?php echo URL::base()?>admin/edituser",
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?php echo implode('","',$colnames['users']);?>"],
   	colModel:[
		<?php foreach($columns['users'] as $key=>$col){
			echo "{name:'$key', ";
			echo "index:'$key', ";
			echo "width:'$col[1]', ";
			if($key != 'id') echo "editable:true ";
			else echo "editable:false ";
			echo "},\r\n";
		};?>
   	],
   	rowNum:50,
   	rowList:[10,20,30,50,100,500],
   	pager: '#upager',
   	sortname: 'id',
	viewrecords: true,
	sortorder: "asc",
	caption: "Пользователи",
//	autowidth: true,
	height: "100%",
	multiselect: true,
	rownumbers: true,
/*	gridComplete: function(){
		decorateColumnFile("#detal");
	}*/
});

jQuery("#users").jqGrid('filterToolbar',{stringResult: true, searchOnEnter : false, defaultSearch: 'cn'});
jQuery("#users").jqGrid('navGrid','#upager',
	{edit:true,add:true,del:true,view:false}, //options
	{closeAfterEdit : true}, // edit options
	{}, // add options
	{}, // del options
	{multipleSearch:true, sopt:['eq','ne','lt','le','gt','ge','bw','bn','ew','en','cn','nc','in','ni','nu','nn'], width:600}, // search options
	{} // view options
	);

jQuery("#groups").jqGrid({
    url:'<?php echo URL::base()?>admin/tablegroups',
	editurl: "<?php echo URL::base()?>admin/editpermissiongroup",
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?php echo implode('","',$colnames['groups']);?>"],
   	colModel:[
		<?php foreach($columns['groups'] as $key=>$col){
			echo "{name:'$key', ";
			echo "index:'$key', ";
			echo "width:'$col[1]', ";
			if($key == 'allowed') echo "editable:true ";
			else echo "editable:false ";
			echo "},\r\n";
		};?>
   	],
   	rowNum:5,
   	rowList:[5,20,30,50,100,500],
   	pager: '#gpager',
   	sortname: 'group',
	viewrecords: true,
	sortorder: "asc",
	caption: "Группы пользователей",
//	autowidth: true,
	height: "100%",
	multiselect: true,
	rownumbers: true,
/*	gridComplete: function(){
		decorateColumnFile("#detal");
	}*/
});

jQuery("#groups").jqGrid('filterToolbar',{stringResult: true, searchOnEnter : false, defaultSearch: 'cn'});
jQuery("#groups").jqGrid('navGrid','#gpager',
	{edit:true,add:false,del:false,view:false}, //options
	{closeAfterEdit : true}, // edit options
	{}, // add options
	{}, // del options
	{multipleSearch:true, sopt:['eq','ne','lt','le','gt','ge','bw','bn','ew','en','cn','nc','in','ni','nu','nn'], width:600}, // search options
	{} // view options
);

var lastsel;
jQuery("#permissions").jqGrid({
    url:'<?php echo URL::base()?>admin/tablepermissions',
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?php echo implode('","',$colnames['permissions']);?>"],
   	colModel:[
		<?php foreach($columns['permissions'] as $key=>$col):?>
		{name:'<?=$key;?>',index:'<?=$key;?>',width:<?=$col[1];?>,editable:<?php if($key == 'allowed') echo 'true';else echo 'false';?>},
		<?php endforeach;?>
   	],
   	rowNum:10,
   	rowList:[10,30,50,100],
   	pager: '#ppager',
   	sortname: 'id',
    viewrecords: true,
    sortorder: "desc",
    caption: "Функции пользователей",
//	autowidth: true,
	height: "100%",
	editurl: "<?php echo URL::base()?>admin/editpermission",
	multiselect: true,
/*
	ondblClickRow: function(rowid) {
		opendialog('#dialog');
		var rowData = jQuery('#permissions').getRowData(rowid);
		$("#login").val(rowData.login);
		$("#fio").val(rowData.fio);
		$("#action").val(rowData.action);
		$("#allowed").val(rowData.allowed);
	},
*/
});

jQuery("#permissions").jqGrid('filterToolbar',{stringResult: true, searchOnEnter : false, defaultSearch: 'cn'});
jQuery("#permissions").jqGrid('navGrid','#ppager',
	{edit:true,add:false,del:false,view:false}, //options
	{closeAfterEdit : true}, // edit options
	{}, // add options
	{}, // del options
	{multipleSearch:true, sopt:['eq','ne','lt','le','gt','ge','bw','bn','ew','en','cn','nc','in','ni','nu','nn'], width:600}, // search options
	{} // view options
	);
});
/*
function opendialog(id){
	var rowid = jQuery('#permissions').jqGrid('getGridParam','selrow');
	var rowData = jQuery('#permissions').getRowData(rowid);
	$("#login").val(rowData.login);
	$("#fio").val(rowData.fio);
	$("#action").val(rowData.action);
	$("#allowed").val(rowData.allowed);
	$(id).dialog('open');
}
*/
</script>
<!-- div id="dialog" class="ui-jqdialog-content ui-widget-content">
	<?php echo form::open(NULL, array('id'=>'formpermission','class'=>'FormGrid'));?>
	<table>
	<?php foreach ($form_all as $field):?>
		<tr class="FormData">
			<td class="CaptionTD"><?php echo $field['attr']['desc']?></td>
			<td class="DataTD"><?php echo form::input($field['name'], $field['value'], $field['attr'])?></td>
			<td style="color:red"><?php if(isset ($errors[$field['name']])) echo $errors[$field['name']];?></td>			
		</tr>
	<?php endforeach;?>
		<tr>
			<td>Действия</td>
			<td><?php foreach ($action as $item) {
				$opt[$item['name']] = $item['name']; }
				echo form::select('action', $opt, $action_selected, array('id'=>'action', 'class'=>'FormElement ui-widget-content ui-corner-all'));?>
			</td>
			<td></td>
		</tr>
	</table>
	<table>
		<tr><td><?php echo form::submit('add','Сохранить')?></td><td></td></tr>
	</table>
	<?php echo form::close();?>
</div -->

<table id="users"></table>
<div id="upager"></div>

<table id="groups"></table>
<div id="gpager"></div>

<table id="permissions"></table>
<div id="ppager"></div>
<!-- input type="button" onclick="opendialog('#dialog');" id="addbutton" value="Добавть действие пользователю" / -->
