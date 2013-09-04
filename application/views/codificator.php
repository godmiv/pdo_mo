<script type="text/javascript">
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
			echo "editable:";
			if($key != 'id') echo "true,";
			else echo "false,";
			echo "hidden:$col[2],";
			if($key == 'nazvdet') echo 'edittype:"select",editoptions:{value:"'.$nazvdet_list.'"}';
			echo "},\r\n";
		};?>
   	],
   	rowNum:20,
   	rowList:[10,20,30,50,100,500],
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
		$(this).jqGrid("editGridRow", "new", {recreateForm: true, closeAfterAdd: true, width:500, closeOnEscape: true});
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
var last_id = 0;
jQuery("#detal").jqGrid('filterToolbar',{stringResult: true, searchOnEnter : false, defaultSearch: 'cn'});
jQuery("#detal").jqGrid('navGrid','#pager',
	{edit:true,add:true,del:true,view:false}, //options
	{width:650,
		afterSubmit:function(data_from_server) {
			var result = data_from_server.responseText.split(';');
			if (result[0] == 'fail') {
				return [false,result[1]]
			} else {
				return [true,result[1]];
			}
		}
	}, // edit options
	{
		width:500,
		closeAfterAdd : false,
		clearAfterAdd : false,
		afterSubmit:function(data_from_server) {
			var result = data_from_server.responseText.split(';');
			if (result[0] == 'fail') {
				return [false,result[1]]
			} else {
				return [true,result[1]];
			}
		},
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
	{multipleSearch:true, sopt:['eq','ne','lt','le','gt','ge','bw','bn','ew','en','cn','nc','in','ni'], width:600}, // search options
	{} // view options
	);
});
//jQuery("#detal").jqGrid('gridResize',{minWidth:350,maxWidth:800,minHeight:80, maxHeight:350});

</script>
<table id="detal"></table>
<div id="pager"></div>