<section id="clientes" class="loop-clientes">
	<h3>Nuestros Clientes</h3>
	<div class="container loop-wrapper">
		<ul>
		<?php

			$args = array(
				'post_type' => 'cliente',
				'posts_per_page' => -1
			);

			$query = new WP_Query($args);

			if($query->have_posts()): 
				while($query->have_posts()): $query->the_post();
		?>
			<li><?php the_post_thumbnail('full'); ?></li>
		<?php
			endwhile; 
			endif; 
			wp_reset_query(); 
		?>
		</ul>
	</div>
</section>