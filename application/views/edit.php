<script type="text/javascript">
$(document).ready(function(){
	$(function(){
		$.datepicker.setDefaults(
		$.extend($.datepicker.regional["ru"])
		);
	});
})

$(function(){
var lastsel;
jQuery("#journal").jqGrid({
    url:'<?php echo URL::base()?>edit/tableedit',
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?=$colnames['edit']?>"],
   	colModel:[
		<?php foreach($columns['edit'] as $key=>$col){
			echo "{name:'$key', ";
			echo "index:'$key', ";
			echo "width:'$col[1]', ";
			echo "editable:true, ";
			echo "hidden:$col[2],";
			if($key == 'vidremonta') echo 'edittype:\'select\',stype:\'select\',editoptions:{value:\':Все;'.$vidremonta_list.'\'}';
			echo "},\r\n";
		};?>
   	],
   	rowNum:20,
   	rowList:[10,20,30,40,50,100,500],
   	pager: '#jpager',
   	sortname: 'id',
	viewrecords: true,
	sortorder: "desc",
	caption: "Журнал",
	autowidth: true,
	height: "100%",
	multiselect: false,
	rownumbers: true,
	onSelectRow: function(id){
		if(id && id!==lastsel){
			jQuery('#journal').jqGrid('restoreRow',lastsel);
			jQuery('#journal').jqGrid('editRow',id,true,pickdates);
			lastsel=id;
		}
	},
	editurl: "edit/edit"
});

function pickdates(id){
	jQuery("#"+id+"_finishdate","#journal").datepicker({dateFormat:"yy-mm-dd"});
	jQuery("#"+id+"_startdate","#journal").datepicker({dateFormat:"yy-mm-dd"});
	jQuery("#"+id+"_docdate","#journal").datepicker({dateFormat:"yy-mm-dd"});
}

jQuery("#journal").jqGrid('filterToolbar',{stringResult: true, searchOnEnter : false, defaultSearch: 'cn'});
jQuery("#journal").jqGrid('navGrid','#jpager',
	{edit:false,add:false,del:true,view:false}, //options
	{
		afterShowForm: function() {
		$("#docdate").datepicker({dateFormat:'yy-mm-dd'});
		}
	}, // edit options
	{}, // add options
	{}, // del options
	{multipleSearch:true, sopt:['eq','ne','lt','le','gt','ge','bw','bn','ew','en','cn','nc','in','ni','nu','nn'], width:600}, // search options
	{} // view options
	);
});

</script>
<table id="journal"></table>
<div id="jpager"></div>
<div>
Доступные дампы: <br />
<form name="restore" action="edit/recovery" method="post">
<table border='1'>
	<tr>
		<td></td><td>Имя файла</td><td>Размер</td><td>Дата</td>
	</tr>
	<?php foreach($file as $f):?>
	<tr>
		<td><input name="file" type="radio" value="<?=$f['name'];?>"></td><td><?=$f['name'];?></td><td><?=$f['size'];?></td><td><?=$f['mtime'];?></td>
	</tr>
	<?php endforeach;?>
</table>
<span style="color:red">Нажатие кнопки "Восстановить" приведет к потере всех данных и изменений сделанных позже создания выбранного дампа.</span>
<input type="submit" value="Восстановить">
</form>
<form name="create" action="edit/dump" method="post">
	<input name="createdump" type="submit" value="Создать дамп базы" />
</form>
</div>