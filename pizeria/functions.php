<?php





function pizzeria_setup(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'pizzeria_setup');


function pizzeria_styles() {
  // editing stylesheets
  wp_register_style( 'googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700,900"', array(), '1.0.0');
  wp_register_style('normilize', get_template_directory_uri() . '/css/normilize.css', array(), '8.0');
  wp_register_style('fluidboxcss', get_template_directory_uri() . '/css/fluidbox.min.css', array(), '8.0');
  wp_register_style('fontawesome', get_template_directory_uri() . '/css/fontawesome.css', array(), '5.8.1');
  wp_register_style('style', get_template_directory_uri() . '/style.css', array('normilize'), '1.0');

// enqueue the style
wp_enqueue_style('normilize');
wp_enqueue_style('fluidboxcss');
wp_enqueue_style('fontawesome');
wp_enqueue_style('googlefont');
wp_enqueue_style('style');


wp_register_script('fluidboxjs', get_template_directory_uri().'/js/jquery.fluidbox.min.js', array('jquery'), '1.4.1', true);
wp_register_script('script', get_template_directory_uri().'/js/scripts.js', array('jquery'), '1.0.0', true);
// add javascript files

wp_enqueue_script('jquery');
wp_enqueue_script('fluidboxjs');
wp_enqueue_script('script');

}

 add_action('wp_enqueue_scripts', 'pizzeria_styles');

//add menus
function pizzeria_menus() {
    register_nav_menus(array(
      'header-menu' => __('Header Menu', 'pizzeria'),
      'social-menu' => __('Social Menu', 'pizzeria'),
    ) );

}



add_action('init', 'pizzeria_menus');

function pizzeria_specialties() {
  /**
    * Post Type: Pizzas.post type singular name
    */
  $labels = array(
    'name'                  => _x('Pizzas', 'pizzeria'),
    'singular_name'         => _x('Pizza', 'post type singular name', 'pizzeria'),
    'menu_name'             => _x('Pizzas', 'admin menu', 'pizzeria'),
    'name_admin_bar'        => _x('Pizzas', 'add new on admin bar', 'pizzeria'),
    'add_new'               => _x('Add New', 'book', 'pizzeria'),
    'add_new_item'          => __('Add New Pizza', 'pizzeria'),
    'new_item'              => __('New Pizzas', 'pizzeria'),
    'edit_item'             => __('Edit Pizzas', 'pizzeria'),
    'view_item'             => __('View Pizzas', 'pizzeria'),
    'all_items'             => __('All Pizzas', 'pizzeria'),
    'search_items'          => __('Serach Pizzas', 'pizzeria'),
    'parent_item_colon'     => __('Parent Pizzas:', 'pizzeria'),
    'not_found'             => __('No Pizzas found.', 'pizzeria'),
    'not_found_in_trash'    => __('No Pizzas found in Trash.', 'pizzeria')
  );
$args = array(

  'labels'              => $labels,
  'description'         => __('Description.', 'pizzeria'),
  'public'              => true,
  'publicly_queryable'  => true,
  'show_ui'             => true,
  'show_in_menu'        => true,
  'query_var'           => true,
  'rewrite'             => array('slug' => 'specialties'),
  'capability_type'     => 'post',
  'has_archive'         => true,
  'hierarchical'        => false,
  'menu_position'       => 6,
  'supports'            => array('title', 'editor', 'thumbnail'),
  'taxonomies'          => array('category'),
    );

    register_post_type('specialties', $args);
  }
add_action('int', 'pizzeria_specialties', 0 );
