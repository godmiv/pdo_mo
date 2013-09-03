<?php $ctrl = Request::current()->controller();?>
<?php if(empty($user)): //если пользователь не залогинен ?>
<?php else: //если залогинен, то меню показываем в зависимости от группы ?>
<table>
	<tr>
		<td><?php $class = ($ctrl == 'welcome') ? 'button-link current-button' : 'button-link';
			echo Html::anchor('','Просмотр журнала',array('class'=> $class));?></td>

			<?php if(perm::check('journal')):?>

		<td><?php $class = ($ctrl == 'journal') ? 'button-link current-button' : 'button-link';
			echo Html::anchor('journal','Приемка оснастки',array('class'=>$class));?></td>
		
			<?php endif;?>
			
			<?php if(perm::check('codificator')):?>
		
		<td><?php $class = ($ctrl == 'codificator') ? 'button-link current-button' : 'button-link';
			echo Html::anchor('codificator','Кодификатор',array('class'=>$class));?></td>

			<?php endif;?>
			
			<?php if(perm::check('shipping')):?>
			
		<td><?php $class = ($ctrl == 'shipping') ? 'button-link current-button' : 'button-link';
			echo Html::anchor('shipping','Отгрузка оснастки',array('class'=>$class));?></td>
		
			<?php endif;?>

			<?php if(perm::check('edit')):?>

		<td><?php $class = ($ctrl == 'edit') ? 'button-link current-button' : 'button-link';
			echo Html::anchor('edit','База данных',array('class'=>$class));?></td>			

			<?php endif;?>

			<?php if(perm::check('admin')):?>
	
		<td><?php $class = ($ctrl == 'admin') ? 'button-link current-button' : 'button-link';
			echo Html::anchor('admin','Пользователи',array('class'=>$class));?></td>
			<?php endif;?>
		<td><?php $class = ($ctrl == 'help') ? 'button-link current-button' : 'button-link';
			echo Html::anchor('help','?',array('class'=>$class));?></td>
	</tr>
</table>
<?php endif;?>