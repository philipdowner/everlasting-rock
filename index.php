<?php
//Conditionally load local environment files, before bootstrapping WP
if( file_exists(dirname(__FILE__) . '/enviro-local.php') ) {
	require(dirname(__FILE__) . '/enviro-local.php');
}