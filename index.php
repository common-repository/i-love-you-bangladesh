<?php
/*
Plugin Name: I Love You Bangladesh
Plugin URI: http://marksitbd.blogspot.com
Description: It helps you to install bengali on wordpress blog easily. 
Version:0.01
Author: Marksitbd
Author URI:  http://marksitbd.blogspot.com
*/

/*function change_locale
 
 replaces default locale 
 
 of wordpress site */

	function change_locale( $locale ){
    	
    	return 'bn_BD';
	
	}

 add_filter( 'locale', 'change_locale' );


	function get_lang_file($mofile, $domain='default') {
		
		$locale = get_locale(); 
		
		$path=plugin_dir_path(__FILE__);
		
		$custom_mofile= $path . "/lang/$locale.mo";
		
		if (file_exists($custom_mofile)) return ($custom_mofile); 
		
		else  return $mofile;
	}

 add_filter ('load_textdomain_mofile','get_lang_file' );
 
?>