<?php
// to add featured image in edit page at the bottom
function lapizzeria_setup(){
	add_theme_support('post-thumbnails');
	// to make a change in image size
add_image_size('boxes',437,291,true);
add_image_size('specialties',768,515,true);
}
add_action('after_setup_theme','lapizzeria_setup');

function lapizzeria_styles(){
// adding stylesheets
	wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700',array(),'1.0.0');
wp_register_style('normalize', get_template_directory_uri() . '/css/normalizer.css', array(),'8.0.0');
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'),'1.0');

	wp_enqueue_style('normalize');
	wp_enqueue_style('googlefonts');
	wp_enqueue_style('style');

wp_register_script('script',get_template_directory_uri().'/js/scripts.js',array('jquery'),'1.0.0',true);
		wp_enqueue_script('script');

//add javascript files
		wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts','lapizzeria_styles');

 
	
 add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
 // fontawesome
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}


add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
//add bootstrap to the wordpress
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0.0', true );
}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

//add menu in dashboard
function lapizzeria_menus(){
	register_nav_menus(array(
		'header-menu'=> __('Header Menu'),
			'social-menu'=> __('Social Menu')
	));
}
add_action('init','lapizzeria_menus');

/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );


// custom post

function lapizzeria_specialties(){
	
$labels = array (
'name'				=> _x('Pizzas', 'lapizzeria'),
'singular_name'		=> _x('Pizzas','post type singular name', 'lapizzeria'),
'menu_name'			=> _x('Pizzas','admin menu', 'lapizzeria'),
'name_admin_bar'	=> _x('Pizzas','add new on admin bar','lapizzeria'),
'add_new'			=> _x('Add New','book','lapizzeria'),
'add_new_item'		=> __('Add New Pizzas','book','lapizzeria'),
'new_item'			=> __('New Pizza','lapizzeria'),
'New_item'			=> __('New Pizza', 'lapizzeria'),
'edit_item'			=> __('Edit Pizza','lapizzeria'),
'View_item'			=> __('View Pizzas','lapizzeria'),
'all_items'			=> __('All Pizza', 'Lapizzeria'),
'Search_items'		=> __('search Pizza','lapizzeria'),
'parent_item_colon'	=>	__('Parent Pizzas','lapizzeria'),
'not_found'			=> __('No pizzases found.','lapizzeria'),
'not_found_in_trash' => __('No Pizzas found in trash','lapizzeria')

);

$args = array(
	'labels'  => $labels,
	'descripton' => __('Description','lapizzeria'),
	'public' => true,
	'publicly_query' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array('slug'=>'specialties'),
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => 6,
	'supports' => array('title','editor','thumbnail'),
	'taxonomies' => array('category'),



);

register_post_type('specialties',$args);
}

add_action ('init','lapizzeria_specialties');


// widget

function lapizzeria_widgets(){
register_sidebar(array(
	'name' => 'blog sidebar',
	'id'	=>'blog_sidebar',
	'before_widget' => '<div class="widget">',
	'after_widget' =>'</div>',
	'before_title' => '<h3>',
	'after_title'	=> '</h3>'

));
}
 add_action('widgets_init','lapizzeria_widgets');

 ?>
