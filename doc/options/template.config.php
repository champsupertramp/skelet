<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// TEMPLATE SETTINGS
// -----------------------------------------------------------------------------------------------
// =====================================
$templates  = array();


$templates[] = array(
			 "template-sample-01" => array(
			 		"if" => array(
			 			"is_post_type" => array(
			 				"papb_cpt"
			 			),
			 			"is_tax" => array(
			 				"pressapps_cpt_2"
			 			),
			 			"is_category" => array(
			 				"pressapps_cpt_2_category"
			 			)
			 		),
			 		"controller" => "sample-controller-01"
			 )
			
);

SkeletFramework_Template::instance( $templates );