<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// WIDGET GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options       = array();
global $options;

// -----------------------------------------
// Basic WIDGET Examples                -
// -----------------------------------------

 // Two
 $options[]            = array(
  'name'              => 'skelet_widget_fields_1',
  'title'             => 'Skelet Widget Fields ',
  'description'       => 'This is a description',
  'settings'          => array(
             array(
            'name'      => 'switcher_1',
            'control'  =>
                  array(
                   'type'    => 'switcher',
                   'title'   => 'Switcher',
                   'label'   => 'You want to update for this framework ?',
                  ),
            'default' => true
              ),
            // color
            array(
              'name'          => 'color_option_with_default',
              'default'       => '#d80039',
              'control'       => array(
                'label'       => 'Color',
                'type'        => 'color_picker',
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
                'options'     => array(
                  ''          => '- Select a value -',
                  'key1'      => 'value 1',
                  'key2'      => 'value 2',
                  'key3'      => 'value 3',
                )
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

         
  )),
  "frontend_tpl" => array(
      "wrapper"      => "<div class=\"item-wrapper\">%s</div>",
      "before_item"  => "<div>",
      "after_item"   => "</div>",
      "show_label"   => array(
          "wrapper"  => "<div>%s</div>",
          "before"   => "<label>",
          "after"    => ":</label>  "
      ),
      "walker_class" => array(
            "name"   => "SkeletWidgetWalker",
            "path"   => PABP_PLUGIN_DIR."template/widget/walkers/sk-widget-sample-class.php",
             "filter" => array("image_option","upload_option","select_option")

      )
  )

 
);

 // Two
 $options[]            = array(
  'name'              => 'skelet_widget_fields_3',
  'title'             => 'Skelet Widget Fields 2',
  'description'       => 'This is a description 2',
  'settings'          => array(

    // color
    array(
      'name'          => 'color_option_with_default_3',
      'default'       => '#d80039',
      'control'       => array(
        'label'       => 'Color',
        'type'        => 'color_picker',
      ),
    ),

    // text
    array(
      'name'          => 'text_option_3',
      'control'       => array(
        'label'       => 'Text',
        'type'        => 'text',
      ),
    ),

    // text with default
    array(
      'name'          => 'text_option_with_default_3',
      'default'       => 'bla bla bla',
      'control'       => array(
        'label'       => 'Text with Default',
        'type'        => 'text',
      ),
    ),

    // textarea
    array(
      'name'          => 'textarea_option_3',
      'control'       => array(
        'label'       => 'Textarea',
        'type'        => 'textarea',
      ),
    ),

    // checkbox
    array(
      'name'          => 'checkbox_option_3',
      'control'       => array(
        'label'       => 'Checkbox',
        'type'        => 'checkbox',
      ),
    ),

    // radio
    array(
      'name'          => 'radio_option_3',
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
      'name'          => 'select_option_3',
      'control'       => array(
        'label'       => 'Checkboxes',
        'type'        => 'checkbox',
        'options'     => array(
           'key1'      => 'value 1',
          'key2'      => 'value 2',
          'key3'      => 'value 3',
        )
      ),

    ),

  
    // upload
    array(
      'name'          => 'upload_option_3',
      'control'       => array(
        'label'       => 'Upload',
        'type'        => 'upload',
      ),
    ),

    // image
    array(
      'name'          => 'image_option_3',
      'control'       => array(
        'label'       => 'Image',
        'type'        => 'image',
      ),
    ),

  array(
            'name'      => 'switcher_2_3',
            'control'  =>
              array(
               'type'    => 'switcher',
               'title'   => 'Switcher',
               'label'   => 'You want to update for this framework ?',
              )
          ),

  )
  );



SkeletFramework_Widget::instance($options);



