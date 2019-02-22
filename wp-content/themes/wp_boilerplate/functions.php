<?php

//Registro de estilos
function register_enqueue_style(){
    $theme_data = wp_get_theme();

    //Registrando estilos
    wp_register_style('Master', 
    get_parent_theme_file_uri('/assets/css/master.css'), 
    null, '1.0.0', 'screen');

	wp_register_style('Bootstrap', 
    get_parent_theme_file_uri('/assets/css/bootstrap.css'), 
    null, '1.0.0', 'screen');

    wp_register_style('Bootstrap-min', 
    get_parent_theme_file_uri('/assets/css/bootstrap.min.css'), 
    null, '1.0.0', 'screen');

	wp_register_style('font-awesome', 
    'https://use.fontawesome.com/releases/v5.7.0/css/all.css', 
	null, '1.0.0', 'screen');
	
	wp_register_style('grid-gallery', 
    get_parent_theme_file_uri('/assets/css/grid-gallery.min.css'), 
    null, '1.0.0', 'screen');

    //Enqueue estilos
    wp_enqueue_style('Bootstrap');
    wp_enqueue_style('Bootstrap-min');
    wp_enqueue_style('Master');
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('grid-gallery');
}
add_action('wp_enqueue_scripts', 'register_enqueue_style');

//registro de scripts

function register_enqueue_scripts(){
    $theme_data = wp_get_theme();
    
    //deregister scripts
    wp_deregister_script('jQuery');
	wp_deregister_script('jQuery-min');
	wp_deregister_script('animatescroll');
	wp_deregister_script('grid-gallery');
    wp_deregister_script('Bootstrap');
    wp_deregister_script('Bootstrap-min');
    wp_deregister_script('Main');

    //registrando scripts
    
    wp_register_script('jQuery', 
    get_parent_theme_file_uri('/assets/js/jquery-3.3.1.js'), 
    null, '3.3.1', true);

    wp_register_script('jQuery-min', 
    get_parent_theme_file_uri('/assets/js/jquery-3.3.1.min.js'), 
    null, '3.2.1', true);

	wp_register_script('animatescroll', 
    get_parent_theme_file_uri('/assets/js/animatescroll.js'), 
    null, '3.2.1', true);

	wp_register_script('grid-gallery', 
    get_parent_theme_file_uri('/assets/js/grid-gallery.min.js'), 
	null, '3.2.1', true);
	
    wp_register_script('Bootstrap', 
    get_parent_theme_file_uri('/assets/js/bootstrap.js'), 
    null, '3.2.1', true);

    wp_register_script('Bootstrap-min', 
    get_parent_theme_file_uri('/assets/js/bootstrap.min.js'), 
	null, '3.2.1', true);

    wp_register_script('Main', 
    get_parent_theme_file_uri('/assets/js/main.js'), 
	null, '3.2.1', true);

	
	//Enqueue scripts
	wp_enqueue_script('jQuery');
	wp_enqueue_script('jQuery-min');
	wp_enqueue_script('animatescroll');
	wp_enqueue_script('grid-gallery');
    wp_enqueue_script('Bootstrap');
    wp_enqueue_script('Bootstrap-min');
    wp_enqueue_script('Main');
    
}
add_action('wp_enqueue_scripts', 'register_enqueue_scripts');

// Register Custom Post Type
function Gallery() {

	$labels = array(
		'name'                  => _x( 'Galeria', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Galeria', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Galeria', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Galeria', 'text_domain' ),
		'description'           => __( 'Galeria de imagenes', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Galeria', $args );

}
add_action( 'init', 'Gallery', 0 );
// Register Custom Post Type
function Secciones() {

	$labels = array(
		'name'                  => _x( 'Secciones', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Seccion', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Secciones', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Seccion', 'text_domain' ),
		'description'           => __( 'Link a Secciones', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-page',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Secciones', $args );

}
add_action( 'init', 'Secciones', 0 );
?>