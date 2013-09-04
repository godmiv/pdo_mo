<script type="text/javascript">
$(document).ready(function(){
	createdialog();
	$(function(){
		$.datepicker.setDefaults(
		$.extend($.datepicker.regional["ru"])
		);
		$("#docdate").datepicker({dateFormat:'yy-mm-dd'});
	});

// оправка формы ajax, вывод ошибок формы после валидации
	$("#sendAjax").click(function(){ // при нажатии кнопки добавления новой статьи
		$("#sendAjax").attr('disabled','disabled'); // делаем кнопку недоступной, чтобы избежать повторных нажатий
		//$("#error").slideUp('slow'); // убираем блок с ошибкой, если он был
		//$("#loading").slideDown('slow'); // показываем индикатор загрузки
		//var name = $('#name').val(); // берем имя статьи из формы
		//var text = $('#text').val(); // берем текст из формы
		<?php foreach($form_all as $field){echo 'var '.$field['name'].' = $(\'#'.$field['name'].'\').val();'."\r\n";}?>
		$.ajax({ // описываем наш запрос
				type: "POST", // будем передавать данные через POST
				dataType: "json", // указываем, что нам вернется JSON
				url: '<?php echo URL::base()?>journal/ajaxAdd', // запрос отправляем на контроллер Ajax метод addarticle
				//data: "name="+name+"&text="+text, // передаем данные из формы
				data: <?php	$d=''; foreach($form_all as $field){ $d .= $field['name'].'="+'.$field['name'].'+"&';} echo '"'.substr($d, 0, -3);?>,
				success: function(response) { // когда получаем ответ
					if(response.code == 'success'){
						$('#journal').trigger('reloadGrid');
						$('#dialog').dialog('close');
					}
					if(response.code == 'error'){
						$("[id $= '_err']").html('')
						//этот цикл перебирает все ошибки и рисует их на форме
						for (var err in response.errors){
							var key = err;
							var val = response.errors[key];
							//alert(key+':'+val);
							$('#'+key+'_err').html(val);
						}
						//заполняем поля формы старыми данными
						for (var post in response.post){
							var key = post;
							var val = response.post[key];
							//alert(key+':'+val);
							$('#'+key).val(val);
						}
					}
					$("#sendAjax").removeAttr('disabled');
				}
		});
	});



});

function createdialog(){
	$("#dialog").dialog({
		title: "Добавление в журнал",//тайтл, заголовок окна
		width: 750,//ширина
		height: 450,//высота
		modal: true,//true - окно модальное, false - нет
		autoOpen:false,
		close: function(){$('#showform').value="false"},
		open: function(){$("[id $= '_err']").html('')}//удаляем все сообщения об ошибках
	});
}

$(function(){
jQuery("#detal").jqGrid({
    url:'<?php echo URL::base()?>codificator/detal',
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?=$colnames['detal']?>"],
   	colModel:[
		<?php foreach($columns['detal'] as $key=>$col){
			echo "{name:'$key',";
			echo "index:'$key',";
			echo "width:'$col[1]',";
			echo "hidden:$col[2],";
			echo "editable:";
			if($key != 'id') echo "true},\r\n";
			else echo "false},\r\n";
			//echo '},';
		};?>
   	],
   	rowNum:10,
   	rowList:[10,20,30],
   	pager: '#pager',
   	sortname: 'id',
	viewrecords: true,
	sortorder: "desc",
	caption: "Кодификатор",
//	autowidth: true,
	height: "100%",
	editurl: "<?php echo URL::base()?>codificator/edit",
	multiselect: true,
	ondblClickRow: function(rowid) {
		opendialog('#dialog');
		var rowData = jQuery('#detal').getRowData(rowid);
		$("#detalavto").val(rowData.detalavto);
		$("#nazvdet").val(rowData.nazvdet);
		$("#nosnas").val(rowData.nosnas);
		$("#nkompl").val(rowData.nkompl);
	},
/*	gridComplete: function(){
		decorateColumnFile("#detal");
	}*/
});

jQuery("#detal").jqGrid('filterToolbar',{stringResult: true, searchOnEnter : false, defaultSearch: 'cn'});
jQuery("#detal").jqGrid('navGrid','#pager',
	{edit:false,add:false,del:false}, //options
	{width:500,
		afterSubmit:function(data_from_server, array_data) {
			var result = data_from_server.responseText.split(';');
			if (result[0] == 'fail') {
				return [false,result[1]]
			} else {
				return [true,result[2]];
			}
		 }
	}, // edit options
	{	
		width:500,
		beforeShowForm:function() {
			var id = jQuery('#detal').jqGrid('getGridParam','selrow');
			var rowData = jQuery('#detal').getRowData(id);
			$("#detalavto").val(rowData.detalavto);
			$("#nazvdet").val(rowData.nazvdet);
			$("#nosnas").val(rowData.nosnas);
			$("#nkompl").val(rowData.nkompl);
			//alert(rowData.id);
		},
	}, // add options
	{width:320}, // del options
	{multipleSearch:true, sopt:['eq','ne','lt','le','gt','ge','bw','bn','ew','en','cn','nc','in','ni'], width:600} // search options
	);

jQuery("#journal").jqGrid({
    url:'<?php echo URL::base()?>journal/table',
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?=$colnames['journal']?>"],
   	colModel:[
		<?php foreach($columns['journal'] as $key=>$col){
			echo "{name:'$key',";
			echo "index:'$key',";
			echo "width:'$col[1]',";
			echo "hidden:$col[2],";
			echo "editable:";
			if($key != 'id' and $key != 'startdate') echo "true";
			else echo "false";
			if($key == 'vidremonta') echo ',edittype:"select",editoptions:{value:"'.$vidremonta_list.'"}';
			if($key == 'vidremonta') echo ',stype:"select",editoptions:{value:":Все;'.$vidremonta_list.'"}';
			echo "},\r\n";
		};?>
   	],
   	rowNum:20,
   	rowList:[10,20,30,50,100,500],
   	pager: '#jpager',
   	sortname: 'id',
	viewrecords: true,
	sortorder: "desc",
	caption: "Журнал",
	autowidth: true,
	height: "100%",
	editurl: "<?php echo URL::base()?>journal/edit",
	multiselect: true,
	sortable: true
/*	gridComplete: function(){
		decorateColumnFile("#detal");
	}*/
});

jQuery("#journal").jqGrid('filterToolbar',{stringResult: true, searchOnEnter : false, defaultSearch: 'cn'});
jQuery("#journal").jqGrid('navGrid','#jpager',
	{edit:true,add:false,del:true}, //options
	{
		width:500,
		afterShowForm: function() {
		$("#docdate").datepicker({dateFormat:'yy-mm-dd'});
		},
	}, // edit options
	{width:500}, // add options
	{width:320}, // del options
	{multipleSearch:true, sopt:['eq','ne','lt','le','gt','ge','bw','bn','ew','en','cn','nc','in','ni','nu','nn'], width:600} // search options
	);
});

function opendialog(id){
	var rowid = jQuery('#detal').jqGrid('getGridParam','selrow');
	var rowData = jQuery('#detal').getRowData(rowid);
	$("#detalavto").val(rowData.detalavto);
	$("#nazvdet").val(rowData.nazvdet);
	$("#nosnas").val(rowData.nosnas);
	$("#nkompl").val(rowData.nkompl);
	$("#doc").val('');
	$("#docdate").val('');
	$("#notes").val('');
	$(id).dialog('open');
}

</script>
<?php // if(isset($errors)) print_r($errors)?>
<div id="dialog" class="ui-jqdialog-content ui-widget-content">
	<?php echo form::open(NULL, array('id'=>'formadd','class'=>'FormGrid'));?>
	<table>
	<?php foreach ($form_all as $field):?>
		<tr class="FormData">
			<td class="CaptionTD"><?php echo $field['attr']['desc']?></td>
			<td class="DataTD"><?php echo form::input($field['name'], $field['value'], $field['attr'])?></td>
			<td id ="<?=$field['name']?>_err" style="color:red"><?php if(isset ($errors[$field['name']])) echo $errors[$field['name']];?></td>
		</tr>
	<?php endforeach;?>
		<tr>
			<td>Вид ремонта</td>
			<td><?php foreach ($vidremonta as $item) {
				$opt[$item['name']] = $item['name']; }
				echo form::select('vidremonta', $opt, $vidremonta_selected, array('id'=>'vidremonta', 'class'=>'FormElement ui-widget-content ui-corner-all'));?>
			</td>
			<td></td>
		</tr>
	</table>
	<table>
		<tr><td><?php /* echo form::submit('add','Добавить деталь') */?><input type="button" id="sendAjax" value="Добавить в журнал" /></td><td></td></tr>
	</table>
	<?php echo form::close();?>
</div>
<table id="detal"></table>
<div id="pager"></div>
<input type="button" onclick="opendialog('#dialog');" id="addbutton" value="Добавить в журнал" />
<table id="journal"></table>
<div id="jpager"></div>