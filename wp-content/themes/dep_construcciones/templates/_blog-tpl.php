<?php

/*
  Template Name: Blog
*/

	get_template_part('includes/header');

	// Hero Banner
	get_template_part('includes/commons/block','title-hero');

	// Blog
	get_template_part('includes/loops/loop','posts');	


	get_template_part('includes/footer');