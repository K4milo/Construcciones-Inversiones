<?php
// clients block links home

/*
	Variables
	links_clientes
		icono_link
		texto_link
		url_link
*/

$icon_items = get_field('links_clientes');

?>

<section id="clientLinks" class="block-client--links">
	<div class="container">
		<h3>Zona de clientes</h3>
		<?php 
			if($icon_items):
				while(have_rows('links_clientes')): the_row();

					$icono_link = get_sub_field('icono_link');
					$texto_link = get_sub_field('texto_link');
					$url_link  = get_sub_field('url_link');

				?>

				<div class="icon_item col-md-4">
					<figure>
						<img src="<?php echo $icono_link; ?>">
					</figure>
					<a href="<?php echo $url_link; ?>" title="<?php echo $texto_link; ?>" target="_blank"><?php echo $texto_link; ?></a>
				</div>

				<?php

				endwhile;
			endif;
		?>
	</div>
</section>
