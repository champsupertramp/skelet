<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// TAXONOMY OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();
global $skelet_taxonomy;

// -----------------------------------------
// Taxonomy Options                    -
// -----------------------------------------
$options[]    = sk_apply_prefix(array(
  'taxonomy' => 'category',
  'fields' => array(

						        array(
						          'id'    => 'section_4_text',
						          'type'  => 'text',
						          'title' => 'Text Field',
						        ),

						        array(
						          'id'    => 'section_4_textarea',
						          'type'  => 'textarea',
						          'title' => 'Textarea Field',
						        ),

						        array(
						          'id'    => 'section_4_upload',
						          'type'  => 'upload',
						          'title' => 'Upload Field',
						        ),

						        array(
						          'id'    => 'section_4_switcher',
						          'type'  => 'switcher',
						          'title' => 'Switcher Field',
						          'label' => 'Yes, Please do it.',
						        )

  )
));

$skelet_taxonomy = array_merge($skelet_taxonomy,$options);