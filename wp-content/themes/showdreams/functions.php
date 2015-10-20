<?php 

add_theme_support('post-thumbnails');

add_image_size( 'services-thumb', 256, 160, true );

function register_my_menus(){
	//register_nav_menu('header-nav', __('Header Navigation'));
	register_nav_menus(
		array(
			'menu-header' => __('Header Menu') ,
			'menu-footer' => __('Footer Menu')	
			 )
	 );
}
add_action('init','register_my_menus');

function register_my_widgets(){
	register_sidebar(
		array(
			'id' => 'sidebar-blog',
			'name' => 'Sidebar Blog',
			'description' => 'Sidebar Blog'
			)
  

	 );
  register_sidebar(
    array(
      'id' => 'sidebar-language',
      'name' => 'Sidebar language',
      'description' => 'Sidebar language'
      )
  

   );
  
}

add_action('widgets_init', 'register_my_widgets');



function site_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_template_directory_uri().'/favicon.ico" />';
}
add_action('wp_head', 'site_favicon');

add_filter( 'rwmb_meta_boxes', 'showdreams_register_meta_boxes' );

function showdreams_register_meta_boxes( $meta_boxes )
{

    $prefix = 'rw_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'gallery',
        'title'    => 'Gallery',
        'pages'    => array( 'post', 'page','services' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            
             array(
                'name'  => 'Images',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'gallery',
                'type'  => 'image',
                'std'   => '',
                'class' => 'custom-class'
                
            )

        )
    );
    


    return $meta_boxes;
}

//excerprt for pages

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
//custom post type services
function my_custom_post_services() {
  $labels = array(
    'name'               => _x( 'Services', 'post type general name' ),
    'singular_name'      => _x( 'Service', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Service' ),
    'edit_item'          => __( 'Edit Service' ),
    'new_item'           => __( 'New Service' ),
    'all_items'          => __( 'All Services' ),
    'view_item'          => __( 'View Service' ),
    'search_items'       => __( 'Search Services' ),
    'not_found'          => __( 'No services found' ),
    'not_found_in_trash' => __( 'No services found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Services'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our services and service specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'services', $args ); 
}
add_action( 'init', 'my_custom_post_services' );

function my_updated_messages( $messages ) {
  global $post, $post_ID;
  $messages['services'] = array(
    0 => '', 
    1 => sprintf( __('Service updated. <a href="%s">View service</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Service updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Service restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Service published. <a href="%s">View service</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Service saved.'),
    8 => sprintf( __('Service submitted. <a target="_blank" href="%s">Preview service</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Service scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview service</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Service draft updated. <a target="_blank" href="%s">Preview service</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_messages' );

function my_taxonomies_services() {
  $labels = array(
    'name'              => _x( 'Service Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Service Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Service Categories' ),
    'all_items'         => __( 'All Service Categories' ),
    'parent_item'       => __( 'Parent Service Category' ),
    'parent_item_colon' => __( 'Parent Service Category:' ),
    'edit_item'         => __( 'Edit Service Category' ), 
    'update_item'       => __( 'Update Service Category' ),
    'add_new_item'      => __( 'Add New Service Category' ),
    'new_item_name'     => __( 'New Service Category' ),
    'menu_name'         => __( 'Service Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'service_category', 'services', $args );
}
add_action( 'init', 'my_taxonomies_services', 0 );