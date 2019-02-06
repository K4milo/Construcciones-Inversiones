<section id="cotizadorHome" class="block--quotes">
	<div class="container">
		<?php the_content(); ?>
	</div>
	<?php

$icon_items = get_field('links_clientes');

?>


	<div class="">

		<?php 
			if($icon_items):
				while(have_rows('ava')): the_row();

					$imagen = get_sub_field('imagen-avalador');
					
				?>

				<div class="icon_item col-md-6">
					<figure>
						<img src="<?php echo $imagen ?>">
					</figure>
					
				</div>

				<?php

				endwhile;
			endif;
		?>
	</div>

</section>