<script type="text/javascript">
function userlogin(){
	var l = $('#login').val();
	var p = $('#pass').val();
	$.ajax({
		url: "<?php echo URL::base()?>user/login",
		data: 'login='+l+'&pass='+p,
		type: 'POST',
		cache: false,
		success: function(data){
			alert( "data: " + data );
		}
	});
}
</script>
<?php $sess = Session::instance()->as_array(); if(!isset ($sess['user'])):?>
<?php echo Form::open('user/login',array('id'=>'login_form','style'=>'margin: 0;'));?>
<!--div style="font-size: small"-->
<div id="dialog" class="ui-jqdialog-content ui-widget-content">
<table border="0">
	<tr class="FormData">
		<td class="CaptionTD" style="text-align: right">Login:</td>
		<td class="DataTD"><?php echo Form::input('login', '', array('id'=>'login','size'=>'10','maxlength'=>'100','class'=>'FormElement ui-widget-content ui-corner-all'));?></td>
		<td class="CaptionTD" style="text-align: right">Pass:</td>
		<td class="DataTD"><?php echo Form::password('pass', '', array('id'=>'pass','size'=>'10','maxlength'=>'100','class'=>'FormElement ui-widget-content ui-corner-all'));?></td>
		<td><?php echo Form::submit('ok', 'Войти',array('class'=>'ui-corner-all'));?></td>
		<td>&nbsp;</td>
	</tr>
</table>
</div>
<?php echo Form::input('url', Request::current()->uri(), array('type'=>'hidden'));?>
<?php echo Form::close()?>
<?php else:?>
Пользователь: <?php echo $sess['user']['fio'].' ('.$sess['user']['group'].') ';?>
<?php echo Html::anchor('user/logout','Выйти');?>
<?php endif; ?>