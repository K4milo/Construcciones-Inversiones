<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--<div  class="navbar-fixed-top" style="text-align:center; background-color:white;">
				
				<a href="<?php echo get_site_url(); ?>">	<img src="<?php bloginfo('template_url');?>/images/logos/logo-header.png" alt="Construcciones e Inversiones" width="150px" height="auto"></a>

</div>
[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="side-menu  align-middle">
  <div class="nav-header">
    <button type="button" class="navbar-side-btn">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="nav-collapse" id="navbar-side">
     <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
   <img src="<?php bloginfo('template_url')?>/images/logos/logo-white.png" alt="Construye inversiones"/>
    </a>
	 <br><br>
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'navbar-left',
            'depth'             => 2,
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
        );
      ?>

      <div class="follow">
        <ul>
          <li><a href="https://www.facebook.com/cinversiones/" class="social-icn fb" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/construye_SAS" class="social-icn tw" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/construyeinversiones/" class="social-icn ins" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCikTZvZ-ZurpqZnSIiwe0yw" class="social-icn yt" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        </ul>
      </div>
  </div><!-- /.navbar-collapse -->
</nav>
  
<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar, 
then you probably don't require a site title. Alternatively you can use the example below. 
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
