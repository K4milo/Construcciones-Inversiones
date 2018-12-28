<?php
	// Block hero default
	$thumb_url = get_the_post_thumbnail_url('full');
?>
<section id="heroTitle" style="background-image: url('<?php echo $thumb_url; ?>')" class="block-hero--title">
	<div class="container">
		<figure class="top-togo">
			<img src="<?php bloginfo('template_url');?>/images/logos/logo.png" alt="Construcciones e Inversiones"/>
		</figure>
		<h1><?php the_title(); ?></h1>
	</div>
</section>