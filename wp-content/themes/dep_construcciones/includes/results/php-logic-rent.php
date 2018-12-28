<?php
	
	// Post Variables
	$from_tax = $_POST['from-tax'];
	$type = $_POST['type'];
	$business = $_POST['business'];
	$area = $_POST['area'];
	
	$args = [];

	if($from_tax){

		$area_r = $_POST['area-range'];
		$zone = $_POST['zone'];
		$baths = $_POST['baths'];
		$rooms = $_POST['rooms'];
		$price_1 = $_POST['price1'];
		$price_2 = $_POST['price2'];

		// area splited
		$area_split = explode("-", $area_r);
		$area_1 = $area_split[0];
		$area_2 = $area_split[1];

		$args = array (
			'post_type' => 'inmueble',
			'posts_per_page' => -1,
			'tax_query' => array(
				'relation' => 'AND',
			    array(
			        'taxonomy' => 'tipos',
			        'terms' => $type,
			        'field' => 'slug'
			    ),
			    array(
			        'taxonomy' => 'transacciones',
			        'terms' => 'arriendo',
			        'field' => 'slug'
			    ),
			    array(
			        'taxonomy' => 'banos',
			        'terms' => $baths,
			        'field' => 'name'
			    ),
			    array(
			        'taxonomy' => 'habitaciones',
			        'terms' => $rooms,
			        'field' => 'name'
			    )
			),
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key' => 'precio_inmueble',
					'value' => array( $price_1, $price_2),
					'compare' => 'BETWEEN',
					'type' => 'numeric',
				),
				array(
					'key' => 'metros_cuadrados',
					'value' => array( $area_1, $area_2),
					'compare' => 'BETWEEN',
					'type' => 'numeric',
				),
			)
		);

	} else {

		$args = array (
			'post_type' => 'inmueble',
			'posts_per_page' => -1,
			'tax_query' => array(
			    array(
			        'taxonomy' => 'transacciones',
			        'terms' => 'arriendo',
			        'field' => 'slug'
			    )
			),
		);
		
	}
	
	$query = new WP_Query($args);