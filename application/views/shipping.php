<script type="text/javascript">
$(function(){
jQuery("#journal").jqGrid({
    url:'<?php echo URL::base()?>shipping/tableshipping',
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?=$colnames['shipping']?>"],
   	colModel:[
		<?php foreach($columns['shipping'] as $key=>$col){
			echo "{name:'$key',";
			echo "index:'$key',";
			echo "width:'$col[1]',";
			echo "hidden:$col[2],";
			echo "editable:false";
			echo '},';
		};?>
   	],
   	rowNum:30,
   	rowList:[10,20,30,50,100,500],
   	pager: '#jpager',
   	sortname: 'id',
	viewrecords: true,
	sortorder: "desc",
	caption: "Журнал",
	autowidth: true,
	height: "100%",
	multiselect: true,
/*	gridComplete: function(){
		decorateColumnFile("#detal");
	}*/
});

jQuery("#journal").jqGrid('filterToolbar',{stringResult: true, searchOnEnter : false});
jQuery("#journal").jqGrid('navGrid','#jpager',
	{edit:false,add:false,del:false}, //options
	{}, // edit options
	{}, // add options
	{}, // del options
	{multipleSearch:true, sopt:['eq','ne','lt','le','gt','ge','bw','bn','ew','en','cn','nc','in','ni'], width:600} // search options
	);
});

function done(){
	var s='';
	s = jQuery("#journal").jqGrid('getGridParam','selarrrow');
	if(s != ''){
		$.ajax({
			url: "<?php echo URL::base()?>shipping/done/",
			data: 'ids='+s,
			type: 'POST',
			cache: false,
			success: function(data){
				$('#journal').trigger('reloadGrid');
			}
		});
	}
}
</script>
<table id="journal"></table>
<div id="jpager"></div>
<input type="button" onclick="done();" id="donebutton" value="Отгружено потребителю" />