<?php

function bst_enqueues() {

	/* Styles */
	
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.3.4', null);
	wp_enqueue_style('bootstrap-css');

  	wp_register_style('bst-css', get_template_directory_uri() . '/css/bst.css', false, null);
	wp_enqueue_style('bst-css');

	wp_register_style('fancybox-css', get_template_directory_uri() . '/css/vendors/fancybox.css', false, null);
	wp_enqueue_style('fancybox-css');

  	wp_register_style('styles-css', get_template_directory_uri() . '/css/styles.css', false, null);
  	wp_enqueue_style('styles-css');

  	wp_register_style('style2-css', get_template_directory_uri() . '/css/style2.css', false, null);
  	wp_enqueue_style('style2-css');

	/* Scripts */
	
	wp_enqueue_script( 'jquery' );
	/* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
	https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, true);
	wp_enqueue_script('modernizr');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('fancybox', get_template_directory_uri() . '/js/vendors/fancybox.js', false, wp_register_script, true);
	wp_enqueue_script('fancybox');

	wp_register_script('counterUp', get_template_directory_uri() . '/js/vendors/counterUp.js', false, wp_register_script, true);
	wp_enqueue_script('counterUp');

	wp_register_script('slick', get_template_directory_uri() . '/js/vendors/slick.min.js', false, wp_register_script, true);
	wp_enqueue_script('slick');

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', false, wp_register_script, true);
	wp_enqueue_script('modernizr');

	wp_register_script('bst-js', get_template_directory_uri() . '/js/bst.js', false, null, true);
	wp_enqueue_script('bst-js');

	wp_register_script('general-js', get_template_directory_uri() . '/js/general.js', false, null, true);
	wp_enqueue_script('general-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);
