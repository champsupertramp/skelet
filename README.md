## Skelet Framework

### Introduction

Skelet is a framework for creating WordPress plugins, it eases the creation of advanced option pages, shortcodes and WordPress editor buttons.

######Contents

* [Installation](#installation)
* [Add Skelet to a Project](#add-skelet-to-a-project)
* [Configuration Files](#config-files)
* [Pulling Values](#pulling-values)

### Installation
------------

Let's assume that you want to use Skelet Framework in the plugin-boilerplate.

* Download & extract a copy of [Plugin Boilerplate](http://wppb.me) in `wp-content/plugins/` & pull [Skelet Framework](https://github.com/pressapps/skelet) from the repository and drop the folder `/skelet` in `plugin-boilerplate/admin/`
* In the `/plugin-boilerplate/` directory, open the plugin main file and add the following codes
```PHP
/*----------------------------------------------------------------- */
/* Skelet Config Path
/*----------------------------------------------------------------- */

$skelet_paths[] = array(
	'prefix'	  => 'pabpdemo',
	'dir'		  => wp_normalize_path(  plugin_dir_path( __FILE__ ).'/admin/' ),
	'uri' 		  => plugin_dir_url( __FILE__ ).'/admin/skelet',
);


/*----------------------------------------------------------------- */
/* Load Skelet Framework
/*----------------------------------------------------------------- */
if(! class_exists( 'Skelet_LoadConfig' ) ) 
		include_once dirname( __FILE__ ) .'/admin/skelet/skelet.php';
```

 after this line.
```PHP 
if ( ! defined( 'WPINC' ) ) {
	die;
}
```

####Take Note that the prefix name should be unique per plugin
```PHP
$skelet_paths[] = array(
	'prefix'	  => 'your_unique_prefix_name',
	....
);
```

* Create a new folder `options` in the `plugin-boilerplate/admin` directory.
* In `plugin-boilerplate/admin/options`, create a new file `framework.config.php` and add the following codes:
```PHP
$settings      = array(
  'header_title' => 'Plugin BoilerPlate',
  'current_version' => '1.0.0',
  'menu_title' => 'BoilerPlate',
  'menu_type'  => 'add_submenu_page',
  'menu_slug'  => 'pa-boilerplate',
  'ajax_save'  => false,
);

$options = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'overwiew',
  'title'       => 'Overview',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

	    // begin: a field
	    array(
	      'id'      => 'text_1',
	      'type'    => 'text',
	      'title'   => 'Text',
	      'default' => 'Hello World!'
	    ),
	    // end: a field

	    array(
	      'id'      => 'textarea_1',
	      'type'    => 'textarea',
	      'title'   => 'Textarea',
	      'default'	=> 'How are you today?',
	      'help'    => 'This option field is useful. You will love it!'
	    )
   )
 );
SkeletFramework::instance( $settings, $options );

```
* Now, let's activate the `plugin-boilerplate` and it should show the `PressApps` in the admin side-menu.

### Add Skelet to a Project
------------

### Configuration Files
------------

### Pulling Values
------------