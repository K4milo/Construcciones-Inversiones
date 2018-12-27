<?php
	
	// Post Variables
	$type = $_POST['type'];
	$business = $_POST['business'];
	$area = $_POST['area'];
	$from_home = $_POST['from-home'];
	$args = [];

	if($from_home == 1){
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
			        'terms' => $business,
			        'field' => 'slug'
			    )
			),
		);

	} elseif ($from_home == 0) {

		echo "Were from results";
	} else {
		$args = array(
			'post_type' => 'inmueble',
			'posts_per_page' => -1
		);
	}

	$query = new WP_Query($args);