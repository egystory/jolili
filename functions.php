<?php
	add_theme_support('nav-menus');
		if ( function_exists('register_nav_menus')) {
		 register_nav_menus(
		  array(
		   'main-menu' => __( 'Primary menu' )
		   )
		 );
		}
	
include_once('admin/jolili-options.php');