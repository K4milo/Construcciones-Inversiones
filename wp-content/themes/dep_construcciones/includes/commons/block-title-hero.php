<?php

	if(have_posts()): 
		while(have_posts()): the_post();
			// Block hero default
			$thumb_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
?>
<section id="heroTitle" style="background-image: url('<?php echo $thumb_url; ?>')" class="block-hero--title">
	<div class="container">
		<figure class="top-togo">
		<a href="<?php echo get_site_url(); ?>">	<img src="<?php bloginfo('template_url');?>/images/logos/logo.png" alt="Construcciones e Inversiones"/></a>
		</figure>
		<h1><?php the_title(); ?></h1>
	</div>
</section>
<?php
	endwhile;
	endif;