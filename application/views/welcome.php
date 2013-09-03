<script type="text/javascript">
$(function(){
jQuery("#journal").jqGrid({
    url:'<?php echo URL::base()?>welcome/tablewelcome',
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?php echo implode('","',$colnames['welcome']);?>"],
   	colModel:[
		<?php foreach($columns['welcome'] as $key=>$col){
			echo "{name:'$key', ";
			echo "index:'$key', ";
			echo "width:'$col[1]', ";
			echo "editable:false, ";
			echo "hidden:$col[2],";
			if($key == 'vidremonta') echo 'stype:"select",editoptions:{value:":Все;'.$vidremonta_list.'"}';
			echo "},\r\n";
		};?>
   	],
   	rowNum:30,
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
	sortable: true
/*	gridComplete: function(){
		decorateColumnFile("#detal");
	}*/
});

jQuery("#journal").jqGrid('filterToolbar',{stringResult: true, searchOnEnter : false, defaultSearch: 'cn'});
jQuery("#journal").jqGrid('navGrid','#jpager',
	{edit:false,add:false,del:false,view:false}, //options
	{}, // edit options
	{}, // add options
	{}, // del options
	{multipleSearch:true, sopt:['eq','ne','lt','le','gt','ge','bw','bn','ew','en','cn','nc','in','ni','nu','nn'], width:600}, // search options
	{} // view options
	);
});
</script>
<table id="journal"></table>
<div id="jpager"></div>