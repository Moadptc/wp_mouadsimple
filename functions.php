<?php

require 'class/bootstrap-navwalker.php';

function mouad_theme_support()
{
	// add featured image
	add_theme_support('post-thumbnails');


	// add menu to the theme
	register_nav_menus(
		array(
			'primary' => __('Navigation Bar'),
			'footer' => __('Footer Menu')
		)
	);


	// post format support
	add_theme_support('post-formats' , array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme' , 'mouad_theme_support');


// widget Location
function init_widgets($id)
{
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="card-body main-widget border-top">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Showcase',
		'id' => 'showcase',
		'before_widget' => '<div class="card-body showcase">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Box 1',
		'id' => 'box1',
		'before_widget' => '<div class="card-body box1">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Box 2',
		'id' => 'box2',
		'before_widget' => '<div class="card-body box2">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Box 3',
		'id' => 'box3',
		'before_widget' => '<div class="card-body box3">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

add_action('widgets_init','init_widgets');


/*
 *  add styles
 */

function mouad_add_styles()
{
	wp_enqueue_style('bt4',get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('fas',get_template_directory_uri().'/css/fontawesome-all.min.css');
	wp_enqueue_style('main',get_template_directory_uri().'/css/main.css');
}

/*
 *  add scripts
 */

function mouad_add_scripts()
{
	wp_deregister_script('jquery');
	wp_register_script('jquery' , includes_url('/js/jquery/jquery.js'),
		false , '' , true);

	wp_enqueue_script('jquery');

	wp_enqueue_script('bt4',
		get_template_directory_uri().'/js/bootstrap.js',
		array(), false, true );

	wp_enqueue_script('popper',
		get_template_directory_uri().'/js/popper.min.js',
		array(), false, true );

	wp_enqueue_script('main-js',
		get_template_directory_uri().'/js/main.js',
		array(), false, true );

	/*------   fucking microsoft IE  ----------*/

	wp_enqueue_script('html5shiv',get_template_directory_uri().'/js/html5shiv.min.js');
	wp_enqueue_script('respond',get_template_directory_uri().'/js/respond.min.js');

	wp_script_add_data('html5shiv' , 'conditional' , 'lt IE 9');
	wp_script_add_data('respond' , 'conditional' , 'lt IE 9');

	/*------   fucking microsoft IE  ----------*/
}

// hooks all scripts or put all scripts and styles in index.php

add_action('wp_enqueue_scripts','mouad_add_styles');
add_action('wp_enqueue_scripts','mouad_add_scripts');




/*
 *  custom menu
 */


function mouad_put_menu()
{
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'menu_class' => 'navbar-nav',
			'menu_id'        => 'primary-menu',
			'container'      => false,
			'depth'          => 2,
			'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
			'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback

		)
	);
}



function set_excerpt_length()
{
	return 25;
}

function mouad_excerpt_change_dots($more)
{
	return ' ...';
}


add_filter('excerpt_more','mouad_excerpt_change_dots');
add_filter('excerpt_length','set_excerpt_length');


function get_top_parent(){
	global $post;
	if($post->post_parent){
		$ancestors = get_post_ancestors($post->ID);
		return $ancestors[0];
	}

	return $post->ID;
}

function page_is_parent(){
	global $post;

	$pages = get_pages('child_of='.$post->ID);
	return count($pages);
}

