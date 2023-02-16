<?php 
/*
Plugin Name: Webspeed Youtube
Version: 1.0
Plugin URI: https://www.web.dk
Description: Lazy loading Youtube video Gutenberg block. Requirements: Advanced Custom Fields PRO
Author: Morten Andersen
Text Domain: websepeed-youtube-domain
Author URI: https://www.web.dk
*/

if( class_exists('ACF') ) {
	require_once ('files/acf-blocks.php');
	require_once ('files/acf.php');
}