<?php

/*
  Template Name: Home Template
*/

	get_template_part('includes/header');

	// Home Buscador
	get_template_part('includes/commons/block','search-hero');

	// Clientes Acceso
	get_template_part('includes/commons/block','client-access');

	// Post Inmuebles
	get_template_part('includes/loops/inmuebles/loop','home');

	// Cotizador
	get_template_part('includes/home/block','quotes');


	get_template_part('includes/footer');