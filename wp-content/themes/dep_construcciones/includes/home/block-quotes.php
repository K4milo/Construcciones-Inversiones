<section id="cotizadorHome" class="block--quotes">
	<div class="container">
		<?php the_content(); ?>
	</div>
	<?php

$icon_items = get_field('links_clientes');

?>


	<div class="logos-wrapper">
		<ul>
		<?php 
			if($icon_items):
				while(have_rows('ava')): the_row();

					$imagen = get_sub_field('imagen-avalador');
					
				?>
				<li class="icon_item">
					<figure>
						<img src="<?php echo $imagen ?>" width="170" height="auto">
					</figure>
					
				</li>
				<?php

				endwhile;
			endif;
		?>
		</ul>
	</div>

</section>