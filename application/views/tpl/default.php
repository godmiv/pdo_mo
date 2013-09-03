<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>ПДО МО :: Ремонт оснастки</title>
		
		<?php $user = Session::instance()->get('user') ? Session::instance()->get('user') : '';?>
		
		<?php echo HTML::style('assets/css/my.css'), PHP_EOL ?>		
		<?php if($user == ''):?>
			<?php echo HTML::style('assets/css/start/jquery-ui.css'), PHP_EOL ?>
		<?php else :?>
			<?php echo HTML::style('assets/css/'.$user['theme']), PHP_EOL ?>
		<?php endif;?>
		
		<?php echo HTML::style('assets/css/ui.jqgrid.css'), PHP_EOL ?>
		<?php echo HTML::script('assets/js/jquery-1.10.2.min.js'), PHP_EOL ?>
		<?php echo HTML::script('assets/js/grid.locale-ru.js'), PHP_EOL ?>
		<?php echo HTML::script('assets/js/jquery.jqGrid.min.js'), PHP_EOL ?>
		<?php echo HTML::script('assets/js/jquery-ui-1.10.3.custom.min.js'), PHP_EOL ?>
		<?php echo HTML::script('assets/js/jquery.ui.datepicker-ru.js'), PHP_EOL ?>

    </head>
    <body>
		<div>
		<div style="display:inline-block; margin-bottom: 3px"><?php echo $menu;?></div>
		<div style="display:inline-block; margin-bottom: 3px;position:relative;top:-8px;left:0px;"><?php echo View::factory('user/login');?></div>
		</div>
		<?php echo $content;?>
    </body>
</html>