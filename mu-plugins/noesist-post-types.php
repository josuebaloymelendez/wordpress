<?php 
/**
 * Custom post type.
 *
 */
function noesist_servicio_register_custom_post_type() {
	$labels = array(
		'name'               => _x( 'Servicios IT', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Servicio', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Servicios IT', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Añadir nueva', 'Servicio', 'text-domain' ),
		'add_new_item'       => __( 'Añadir nueva Servicio', 'text-domain' ),
		'new_item'           => __( 'Nueva Servicio', 'text-domain' ),
		'edit_item'          => __( 'Editar Servicio', 'text-domain' ),
		'view_item'          => __( 'Ver Servicio', 'text-domain' ),
		'all_items'          => __( 'Todas las Servicios', 'text-domain' ),
		'search_items'       => __( 'Buscar Servicios', 'text-domain' ),
		'not_found'          => __( 'No hay Servicios.', 'text-domain' ),
        'not_found_in_trash' => __( 'No hay Servicios en la papelera.', 'text-domain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Descripción.', 'text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'servicio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields')
	);

	register_post_type( 'servicio', $args );
}

add_action( 'init',  'noesist_servicio_register_custom_post_type' );

// function noesist_servicio_create_taxonomies() {
//   $labels = array(
//     'name'             => _x( 'Categorías', 'taxonomy general name' ),
//     'singular_name'    => _x( 'Categoría', 'taxonomy singular name' ),
//     'search_items'     =>  __( 'Buscar por Categoría' ),
//     'all_items'        => __( 'Todos los Categorías' ),
//     'parent_item'      => __( 'Categoría padre' ),
//     'parent_item_colon'=> __( 'Categoría padre:' ),
//     'edit_item'        => __( 'Editar Categoría' ),
//     'update_item'      => __( 'Actualizar Categoría' ),
//     'add_new_item'     => __( 'Añadir nuevo Categoría' ),
//     'new_item_name'    => __( 'Nombre del nuevo Categoría' ),
//   );
  
//   register_taxonomy( 'categoria', array( 'servicio' ), array(
//     'hierarchical'       => true,
//     'labels'             => $labels,
//     'show_ui'            => true,
//     'query_var'          => true,
//     'rewrite'            => array( 'slug' => 'categoria' ),
//   ));  
// }

// add_action( 'init', 'noesist_servicio_create_taxonomies', 0 );  

function noesist_solucion_register_custom_post_type() {
	$labels = array(
		'name'               => _x( 'Soluciones', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Solución', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Soluciones', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Añadir nueva', 'Solución', 'text-domain' ),
		'add_new_item'       => __( 'Añadir nueva Solución', 'text-domain' ),
		'new_item'           => __( 'Nueva Solución', 'text-domain' ),
		'edit_item'          => __( 'Editar Solución', 'text-domain' ),
		'view_item'          => __( 'Ver Solución', 'text-domain' ),
		'all_items'          => __( 'Todas las Soluciones', 'text-domain' ),
		'search_items'       => __( 'Buscar Soluciones', 'text-domain' ),
		'not_found'          => __( 'No hay Soluciones.', 'text-domain' ),
        'not_found_in_trash' => __( 'No hay Soluciones en la papelera.', 'text-domain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Descripción.', 'text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'solucion' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-screenoptions',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'page-attributes')
	);

	register_post_type( 'solucion', $args );
}

add_action( 'init',  'noesist_solucion_register_custom_post_type' );

function noesist_solucion_create_taxonomies() {
  $labels = array(
    'name'             => _x( 'Categorías', 'taxonomy general name' ),
    'singular_name'    => _x( 'Categoría', 'taxonomy singular name' ),
    'search_items'     =>  __( 'Buscar por Categoría' ),
    'all_items'        => __( 'Todos los Categorías' ),
    'parent_item'      => __( 'Categoría padre' ),
    'parent_item_colon'=> __( 'Categoría padre:' ),
    'edit_item'        => __( 'Editar Categoría' ),
    'update_item'      => __( 'Actualizar Categoría' ),
    'add_new_item'     => __( 'Añadir nuevo Categoría' ),
    'new_item_name'    => __( 'Nombre del nuevo Categoría' ),
  );
  
  register_taxonomy( 'categoria', array( 'solucion' ), array(
    'hierarchical'       => true,
    'labels'             => $labels,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'categoria' ),
  ));  
}

add_action( 'init', 'noesist_solucion_create_taxonomies', 0 );  

function noesist_premium_register_custom_post_type() {
	$labels = array(
		'name'               => _x( 'Premium', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Premium', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Premium', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Añadir nueva', 'Premium', 'text-domain' ),
		'add_new_item'       => __( 'Añadir nueva Premium', 'text-domain' ),
		'new_item'           => __( 'Nueva Premium', 'text-domain' ),
		'edit_item'          => __( 'Editar Premium', 'text-domain' ),
		'view_item'          => __( 'Ver Premium', 'text-domain' ),
		'all_items'          => __( 'Todas las Premium', 'text-domain' ),
		'search_items'       => __( 'Buscar Premium', 'text-domain' ),
		'not_found'          => __( 'No hay Premium.', 'text-domain' ),
        'not_found_in_trash' => __( 'No hay Premium en la papelera.', 'text-domain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Descripción.', 'text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => false,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'premium' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
        'menu_position'      => null,
		'menu_icon'          => 'dashicons-awards',
		'taxonomies' 	     => array('categoria'),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'page-attributes')
	);

	register_post_type( 'premium', $args );
}

add_action( 'init',  'noesist_premium_register_custom_post_type' );

function noesist_premium_create_taxonomies() {
  $labels = array(
    'name'             => _x( 'Categorías', 'taxonomy general name' ),
    'singular_name'    => _x( 'Categoría', 'taxonomy singular name' ),
    'search_items'     =>  __( 'Buscar por Categoría' ),
    'all_items'        => __( 'Todos los Categorías' ),
    'parent_item'      => __( 'Categoría padre' ),
    'parent_item_colon'=> __( 'Categoría padre:' ),
    'edit_item'        => __( 'Editar Categoría' ),
    'update_item'      => __( 'Actualizar Categoría' ),
    'add_new_item'     => __( 'Añadir nuevo Categoría' ),
    'new_item_name'    => __( 'Nombre del nuevo Categoría' ),
    'menu_name'    	   => __( 'Categorías' ),
  );
  
  register_taxonomy( 'categoria', array( 'premium' ), array(
    'hierarchical'       => true,
    'labels'             => $labels,
    'show_ui'            => true,
    'show_admin_column'  => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'categoria' ),
  ));  
}

add_action( 'init', 'noesist_premium_create_taxonomies', 0 ); 

// function noesist_add_taxonomies_to_courses() {
// 	register_taxonomy_for_object_type( 'categoria', 'premium' );
// } 

// add_action( 'init', 'noesist_add_taxonomies_to_courses' );

// function wc_product_category_add_tax_to_api() { 
// 	$mytax = get_taxonomy( 'product_cat' ); 
// 	$mytax->show_in_rest = true; 
// } 
// add_action( 'init', 'wc_product_category_add_tax_to_api', 30 );