<?php //Make sure there is no trailing whitespace in the functions script -- this will significantly trip you up if you ignore this!
	register_nav_menus(
		array(
			'primary' => 'Primary Navigation'
	));
	
	register_sidebar(
		array(
			'name'				=> 	'Home Aside',
			'before_widget'		=>	'<div class="buttons %2%s">',
			'after_widget'		=>	'</div>'
	));
?>