<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * WPStreet Class
 * A helper class for general options pages and routing
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
 class WPStreet{

		function __construct(){
			if(is_admin()){
			 	//add_action( 'admin_header', array("WPStreet","load_header") );
			 	add_action( 'admin_footer', array("WPStreet","load_footer") );

			}
		}

		public static function load_header(){
				wp_enqueue_style( 'wpst', plugin_dir_url(__FILE__ )."assets/css/wpst.css" );
				wp_enqueue_script( 'wpst', plugin_dir_url(__FILE__ )."assets/js/wpst.js"  , array(), '1.0.0', true );
		} 

		public static function load_footer(){
				wp_enqueue_style( 'wpst', plugin_dir_url(__FILE__ )."assets/css/wpst.css" );
				wp_enqueue_script( 'wpst', plugin_dir_url(__FILE__ )."assets/js/wpst.js"  , array(), '1.0.0', true );
		} 		

 		public static function route($page = ''){
 			   if($page == "wpst-help"){
 			   		 include_once wp_normalize_path(plugin_dir_path(__FILE__ ) .'/template/help.php');
 			   }else if($page == "wpst-product"){
 			   		 include_once wp_normalize_path(plugin_dir_path(__FILE__ ) .'/template/products.php');
 			   }
 		}

 }


?>