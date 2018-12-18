<?php

// Custom post types creation
function create_posttype() {

	 ////////////////////
	// POST TYPES
	///////////////////
	
	//Post Type Inmuebles

	register_post_type( 'inmueble',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'Inmueble' ),
	            'singular_name' => __( 'Inmueble' )
	        ),
	        'rewrite' => array('slug' => 'inmueble'),
	        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
	        'public' => true,
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 5,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => true,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);

	////////////////////
	// TAXONOMIAS
	///////////////////


	// ubicaciones

	$media_labels_ubic = array(
	    'name' => _x( 'Ubicaciones', 'Ubicaciones Inmueble' ),
	    'singular_name' => _x( 'Item de Ubicación', 'item de ubicacion' ),
	    'search_items' =>  __( 'Buscar Items de Ubicación' ),
	    'all_items' => __( 'Todas las ubicaciones' ),
	    'parent_item' => __( 'Ubicación Padre' ),
	    'parent_item_colon' => __( 'Tipo de Ubicación:' ),
	    'edit_item' => __( 'Editar Ubicación' ), 
	    'update_item' => __( 'Actualizar Ubicación' ),
	    'add_new_item' => __( 'Adicionar Ubicación' ),
	    'new_item_name' => __( 'Nueva Ubicación' ),
	    'menu_name' => __( 'Ubicaciónes' ),
	); 

	register_taxonomy('ubicacion',array('inmueble'), array(
	    'hierarchical' => true,
	    'labels' => $media_labels_ubic,
	    'show_ui' => true,
	    'show_admin_column' => true,
	    'show_in_rest' => true,
	    'rest_base' => 'ubicaciones',
	    'rest_controller_class' => 'WP_REST_Terms_Controller',
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'items-ubicaciones' ),
	)); 

	// Baños

	$media_labels_bano = array(
	    'name' => _x( 'Baños', 'Baños Inmueble' ),
	    'singular_name' => _x( 'Item de Baño', 'item de Baño' ),
	    'search_items' =>  __( 'Buscar Items de Baño' ),
	    'all_items' => __( 'Todos los Baños' ),
	    'parent_item' => __( 'Baño Padre' ),
	    'parent_item_colon' => __( 'Tipo de Baño:' ),
	    'edit_item' => __( 'Editar Baño' ), 
	    'update_item' => __( 'Actualizar Baño' ),
	    'add_new_item' => __( 'Adicionar Baño' ),
	    'new_item_name' => __( 'Nuevo Baño' ),
	    'menu_name' => __( 'Baños' ),
	); 

	register_taxonomy('banos',array('inmueble'), array(
	    'hierarchical' => true,
	    'labels' => $media_labels_bano,
	    'show_ui' => true,
	    'show_admin_column' => true,
	    'show_in_rest' => true,
	    'rest_base' => 'bano',
	    'rest_controller_class' => 'WP_REST_Terms_Controller',
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'nano-item' ),
	)); 

	// tipos

    $media_labels_tipos = array(
        'name' => _x( 'Tipo de Inmueble', 'Tipos de Inmueble' ),
        'singular_name' => _x( 'Item de tipo', 'item de tipo' ),
        'search_items' =>  __( 'Buscar Tipos de Inmueble' ),
        'all_items' => __( 'Todos los Tipos' ),
        'parent_item' => __( 'Tipo Padre' ),
        'parent_item_colon' => __( 'Tipo de Inmueble:' ),
        'edit_item' => __( 'Editar tipo' ), 
        'update_item' => __( 'Actualizar Tipo' ),
        'add_new_item' => __( 'Adicionar Tipo' ),
        'new_item_name' => __( 'Nuevo Tipo' ),
        'menu_name' => __( 'Tipos de Inmueble' ),
    ); 

    register_taxonomy('tipos',array('inmueble'), array(
        'hierarchical' => true,
        'labels' => $media_labels_tipos,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rest_base' => 'tipos',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'tipos-item' ),
    )); 

	// habitaciones

	$media_labels_hab = array(
	    'name' => _x( 'Número de habitaciones', 'habitaciones Inmueble' ),
	    'singular_name' => _x( 'Item de Habitación', 'item de Habitación' ),
	    'search_items' =>  __( 'Buscar Items de Habitación' ),
	    'all_items' => __( 'Todas las habitaciones' ),
	    'parent_item' => __( 'Habitación Padre' ),
	    'parent_item_colon' => __( 'Tipo de Habitación:' ),
	    'edit_item' => __( 'Editar Habitación' ), 
	    'update_item' => __( 'Actualizar Habitación' ),
	    'add_new_item' => __( 'Adicionar Habitación' ),
	    'new_item_name' => __( 'Nueva Habitacion' ),
	    'menu_name' => __( 'Habitaciones' ),
	); 

	register_taxonomy('habitaciones',array('inmueble'), array(
	    'hierarchical' => true,
	    'labels' => $media_labels_hab,
	    'show_ui' => true,
	    'show_admin_column' => true,
	    'show_in_rest' => true,
	    'rest_base' => 'habitaciones',
	    'rest_controller_class' => 'WP_REST_Terms_Controller',
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'habitaciones-item' ),
	));

	// transacciones

    $media_labels_trans = array(
        'name' => _x( 'Transacciones', 'Transacciones Inmueble' ),
        'singular_name' => _x( 'Item de Transacción', 'item de Transacción' ),
        'search_items' =>  __( 'Buscar Items de Transacción' ),
        'all_items' => __( 'Todas las Transacciones' ),
        'parent_item' => __( 'Transacción Padre' ),
        'parent_item_colon' => __( 'Tipo de Transacción:' ),
        'edit_item' => __( 'Editar Transacción' ), 
        'update_item' => __( 'Actualizar Transacciónn' ),
        'add_new_item' => __( 'Adicionar Transacción' ),
        'new_item_name' => __( 'Nueva Transacción' ),
        'menu_name' => __( 'Transacciones' ),
    ); 

    register_taxonomy('transacciones',array('inmueble'), array(
        'hierarchical' => true,
        'labels' => $media_labels_trans,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rest_base' => 'transacciones',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'transacciones-item' ),
    ));  

}


// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );