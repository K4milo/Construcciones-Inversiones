<section id="homeInmuebles" class="loop-inmuebles">
	<header class="container section-title">
		<h3>Inmuebles destacados</h3>
	</header>
	<div class="container loop-wrapper carousel-pods">
		<?php

		setlocale(LC_MONETARY, 'es_CO');

		$args = array(
			'post_type' => 'inmueble',
			'posts_per_page' => -1
		);

		$query = new WP_Query($args);

		if($query->have_posts()): 
			while($query->have_posts()): $query->the_post();

			/* Variables of post
				metros_cuadrados
				precio_inmueble
			*/

			$metros_cuadrados = get_field('metros_cuadrados');
			$precio_inmueble  = get_field('precio_inmueble');

			// Taxonmy vars
			$ubicacion = wp_get_post_terms( $query->post->ID, array('ubicacion'));
			$banos = wp_get_post_terms( $query->post->ID, array('banos'));
			$habitaciones = wp_get_post_terms( $query->post->ID, array('habitaciones')); 

		?>

			<article class="carousel-item inmueble-carousel__item pod_vertical post_<?php the_ID();?>">
				<figure class="thumb" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
					<?php the_post_thumbnail(); ?>
				</figure>
				<div class="caption">
					<h4><?php the_title();?></h4>
					<?php the_excerpt();?>
					<div class="metadata">
						<ul>
							<?php if($ubicacion): ?>
								<li class="metadata--item ubicacion"><span class="icon">Ubicación:</span> <?php foreach($ubicacion as $ubi): echo $ubi->name; endforeach; ?></li>
							<?php endif; ?>
							<?php if($metros_cuadrados): ?>
								<li class="metadata--item bottom-items metros"><span class="icon">Metros:</span> <?php  echo $metros_cuadrados; ?><span>M²</span></li>
							<?php endif; ?>
							<?php if($banos): ?>
								<li class="metadata--item bottom-items banos"><span class="icon">Baños:</span> <?php foreach($banos as $bano): echo $bano->name; endforeach; ?></li>
							<?php endif; ?>
							<?php if($habitaciones): ?>
								<li class="metadata--item bottom-items habs"><span class="icon">Habitaciones:</span> <?php foreach($habitaciones as $habitacion): echo $habitacion->name; endforeach; ?></li>
							<?php endif; ?>
						</ul>
					</div>
					
					<?php if($precio_inmueble): ?>

					<div class="price">
						<?php echo money_format('%(#1.0n', $precio_inmueble); ?>
					</div>

					<?php endif; ?>

					<a href="<?php the_permalink(); ?>" class="more-btn">Más Información</a>

				</div>

			</article>

		<?php 
			endwhile; 
			endif; 
			wp_reset_query(); 
		?>
		
	</div>
</section>
