<div class="container loop-wrapper blog-pods">
	<?php

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1
	);

	$query = new WP_Query($args);

	if($query->have_posts()): 
		while($query->have_posts()): $query->the_post();
	?>

	<article class="pod_post post_<?php the_ID();?> col-md-4">
		<figure class="thumb" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
			<?php the_post_thumbnail(); ?>
		</figure>
		<div class="caption">
			<h3><?php the_title()?></h3>
			<h4>
			    <em>			        
			        <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('j F Y') ?></time>
			    </em>
			</h4>
			<?php the_excerpt();?>

			<a href="<?php the_permalink(); ?>" class="more-btn">Ver Más</a>

		</div>

	</article>

	<?php 
		endwhile; 
		endif; 
		wp_reset_query(); 
	?>
</div>