<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// CUSTOMIZE SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
 global $skelet_customize;
     $options              = array();

// -----------------------------------------
// Customize Core Fields                   -
// -----------------------------------------
$options[]            = sk_apply_prefix(array(
  'name'              => 'wp_core_fields',
  'title'             => 'WP Core Fields',
  'settings'          => array(

    // color
    array(
      'name'          => 'color_option_with_default',
      'default'       => '#d80039',
      'control'       => array(
        'label'       => 'Color',
        'type'        => 'color',
      ),
    ),

    // text
    array(
      'name'          => 'text_option',
      'control'       => array(
        'label'       => 'Text',
        'type'        => 'text',
      ),
    ),

    // text with default
    array(
      'name'          => 'text_option_with_default',
      'default'       => 'bla bla bla',
      'control'       => array(
        'label'       => 'Text with Default',
        'type'        => 'text',
      ),
    ),

    // textarea
    array(
      'name'          => 'textarea_option',
      'control'       => array(
        'label'       => 'Textarea',
        'type'        => 'textarea',
      ),
    ),

    // checkbox
    array(
      'name'          => 'checkbox_option',
      'control'       => array(
        'label'       => 'Checkbox',
        'type'        => 'checkbox',
      ),
    ),

    // radio
    array(
      'name'          => 'radio_option',
      'control'       => array(
        'label'       => 'Radio',
        'type'        => 'radio',
        'choices'     => array(
          'key1'      => 'value 1',
          'key2'      => 'value 2',
          'key3'      => 'value 3',
        )
      ),
    ),

    // select
    array(
      'name'          => 'select_option',
      'control'       => array(
        'label'       => 'Select',
        'type'        => 'select',
        'choices'     => array(
          ''          => '- Select a value -',
          'key1'      => 'value 1',
          'key2'      => 'value 2',
          'key3'      => 'value 3',
        )
      ),
    ),

    // dropdown-pages
    array(
      'name'          => 'dropdown_pages_option',
      'control'       => array(
        'label'       => 'Dropdown-Pages',
        'type'        => 'dropdown-pages',
      ),
    ),

    // upload
    array(
      'name'          => 'upload_option',
      'control'       => array(
        'label'       => 'Upload',
        'type'        => 'upload',
      ),
    ),

    // image
    array(
      'name'          => 'image_option',
      'control'       => array(
        'label'       => 'Image',
        'type'        => 'image',
      ),
    ),

    // media
    array(
      'name'          => 'media_option',
      'control'       => array(
        'label'       => 'Media',
        'type'        => 'media',
      ),
    ),

  )
));

// -----------------------------------------
// Customize Skelet Fields               -
// -----------------------------------------
$options[]            = sk_apply_prefix(array(
  'name'              => 'skelet_fields',
  'title'             => 'Skelet Framework Fields',
  'settings'          => array(

    // skelet color picker
    array(
      'name'          => 'skelet_color_picker',
      'default'       => '#3498db',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'color_picker',
          'title'     => 'Color Picker Field',
        ),
      ),
    ),

    // skelet text
    array(
      'name'          => 'skelet_text',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'text',
          'desc'      => 'Skelet Switcher Field',
          'title'     => 'Text Field',
        ),
      ),
    ),

    // skelet textarea
    array(
      'name'          => 'skelet_textarea',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'textarea',
          'title'     => 'Text Area',
        ),
      ),
    ),

    // skelet switcher
    array(
      'name'          => 'skelet_switcher',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'switcher',
          'title'     => 'Skelet Switcher Field',
          'label'     => 'Do you want to ?',
          'help'      => 'Lorem Ipsum Dollar',
        ),
      ),
    ),

    // skelet upload
    array(
      'name'          => 'skelet_upload',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'upload',
          'title'     => 'Skelet Upload Field',
        ),
      ),
    ),

    // skelet image
    array(
      'name'          => 'skelet_image',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'image',
          'title'     => 'Skelet Image Field',
        ),
      ),
    ),

    // skelet gallery
    array(
      'name'          => 'skelet_gallery',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'gallery',
          'title'     => 'Skelet Gallery Field',
        ),
      ),
    ),

    // skelet icon
    array(
      'name'          => 'skelet_icon',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'icon',
          'title'     => 'Skelet Icon Field',
        ),
      ),
    ),

    // skelet image select
    array(
      'name'          => 'skelet_image_select',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'image_select',
          'title'     => 'Skelet Image Select Field',
          'options'   => array(
            'value-1' => 'http://placehold.it/100x80/2ecc71/',
            'value-2' => 'http://placehold.it/100x80/e74c3c/',
            'value-3' => 'http://placehold.it/100x80/3498db/',
          ),
          'radio'     => true,
        ),
      ),
    ),

    // skelet heading
    array(
      'name'          => 'skelet_heading',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'heading',
          'content'   => 'Skelet Heading',
        ),
      ),
    ),

    // skelet subheading
    array(
      'name'          => 'skelet_subheading',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'subheading',
          'content'   => 'Skelet Sub-Heading',
        ),
      ),
    ),

    // skelet notice:success
    array(
      'name'          => 'skelet_notice_success',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'notice',
          'class'     => 'success',
          'content'   => 'Notice Success: Lorem Ipsum...',
        ),
      ),
    ),

    // skelet notice:info
    array(
      'name'          => 'skelet_notice_info',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'notice',
          'class'     => 'info',
          'content'   => 'Notice Info: Lorem Ipsum...',
        ),
      ),
    ),

    // skelet notice:danger
    array(
      'name'          => 'skelet_notice_danger',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'notice',
          'class'     => 'danger',
          'content'   => 'Notice Danger: Lorem Ipsum...',
        ),
      ),
    ),

    // skelet content
    array(
      'name'          => 'skelet_content',
      'control'       => array(
        'type'        => 'sk_field',
        'options'     => array(
          'type'      => 'content',
          'content'   => 'Simple Content Field...',
        ),
      ),
    ),

  )
));

// -----------------------------------------
// Customize Panel Options Fields          -
// -----------------------------------------
$options[]            = sk_apply_prefix(array(
  'name'              => 'skelet_panel_1',
  'title'             => 'Skelet Framework Panel',
  'description'       => 'Skelet customize panel description.',
  'sections'          => array(

    // begin: section
    array(
      'name'          => 'section_1',
      'title'         => 'Section 1',
      'settings'      => array(

        array(
          'name'      => 'color_option_1',
          'default'   => '#ffbc00',
          'control'   => array(
            'type'    => 'sk_field',
            'options' => array(
              'type'  => 'color_picker',
              'title' => 'Color Option 1',
            ),
          ),
        ),

        array(
          'name'      => 'color_option_2',
          'default'   => '#2ecc71',
          'control'   => array(
            'type'    => 'sk_field',
            'options' => array(
              'type'  => 'color_picker',
              'title' => 'Color Option 2',
            ),
          ),
        ),

        array(
          'name'      => 'color_option_3',
          'default'   => '#e74c3c',
          'control'   => array(
            'type'    => 'sk_field',
            'options' => array(
              'type'  => 'color_picker',
              'title' => 'Color Option 3',
            ),
          ),
        ),

        array(
          'name'      => 'color_option_4',
          'default'   => '#3498db',
          'control'   => array(
            'type'    => 'sk_field',
            'options' => array(
              'type'  => 'color_picker',
              'title' => 'Color Option 4',
            ),
          ),
        ),

        array(
          'name'      => 'color_option_5',
          'default'   => '#555555',
          'control'   => array(
            'type'    => 'sk_field',
            'options' => array(
              'type'  => 'color_picker',
              'title' => 'Color Option 5',
            ),
          ),
        ),

      ),
    ),
    // end: section

    // begin: section
    array(
      'name'          => 'section_2',
      'title'         => 'Section 2',
      'settings'      => array(

        array(
          'name'      => 'text_option_1',
          'control'   => array(
            'type'    => 'sk_field',
            'options' => array(
              'type'  => 'text',
              'title' => 'Text Option 1',
            ),
          ),
        ),

        array(
          'name'      => 'text_option_2',
          'control'   => array(
            'type'    => 'sk_field',
            'options' => array(
              'type'  => 'text',
              'title' => 'Text Option 2',
            ),
          ),
        ),

        array(
          'name'      => 'text_option_3',
          'control'   => array(
            'type'    => 'sk_field',
            'options' => array(
              'type'  => 'text',
              'title' => 'Text Option 3',
            ),
          ),
        ),

      ),
    ),
    // end: section

  ),
  // end: sections

));

$skelet_customize = array_merge($skelet_customize,$options);
