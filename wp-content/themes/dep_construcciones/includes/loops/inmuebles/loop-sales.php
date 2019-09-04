<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/dep_construcciones/includes/results/php-logic-sale.php';

if($query->have_posts()): 

?>

<main class="sideresults col-md-8">
	<?php
		while($query->have_posts()): $query->the_post();

		/* Variables of post
			metros_cuadrados
			precio_inmueble
		*/

		setlocale(LC_MONETARY, 'es_CO');

		$metros_cuadrados = get_field('metros_cuadrados');
		$precio_inmueble  = get_field('precio_inmueble');

		// Taxonmy vars
		$ubicacion = wp_get_post_terms( $query->post->ID, array('ubicacion'));
		$banos = wp_get_post_terms( $query->post->ID, array('banos'));
		$habitaciones = wp_get_post_terms( $query->post->ID, array('habitaciones')); 
	?>

	<article class="post-item pod_horizontal post_<?php the_ID();?>">
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
						<li class="metadata--item bottom-items metros"><span class="icon">Metros:</span> <?php  echo $metros_cuadrados; ?></li>
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

			<a href="<?php the_permalink(); ?>" class="more-btn">Más Información</a>

							
			<?php endif; ?>

		</div>

	</article>

	<?php
		endwhile; 
	?>
</main>
<?php 
	else:
?>
<main class="sideresults col-md-8">
	<h1>No existen resultados que concuerden con tu criterio de búsqueda.</h1>
</main>

<?php
	endif;
	wp_reset_query(); 

