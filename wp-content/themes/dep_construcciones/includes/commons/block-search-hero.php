<?php
// Search block for home

// Terms list
$types = get_terms('tipos', array('hide_empty' => false));
$business = get_terms('transacciones', array('hide_empty' => false, 'parent' => 0));
$ubicaciones = get_terms('ubicacion', array('hide_empty' => false));

// Sales child
$term_id = 18;
$taxonomy_name = 'transacciones';
$term_children = get_term_children( $term_id, $taxonomy_name );

?>

<section id="heroBanner" class="block-hero--search">
	<div class="container">
		<figure class="top-togo">
			<a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_url');?>/images/logos/logo.png" alt="Construcciones e Inversiones"/></a>
		</figure>
		<h2>Un nuevo espacio lo espera</h2>
		<form action="<?php echo get_site_url(); ?>/resultados/" method="post">
			<ul>
				<li>
					<select name="type">
						<option selected>Tipo de Inmueble</option>
						<?php
							// list terms
							foreach ($types as $type_inm) {
								echo '<option value="'.$type_inm->slug.'">'.$type_inm->name.'</option>';
							}
						?>

					</select>
				</li>
				<li>
					<select name="business">
						<option selected>Tipo de Negocio</option>
						<?php
							// list terms
							foreach ($business as $business_inm) {
								echo '<option value="'.$business_inm->slug.'">'.$business_inm->name.'</option>';
							}

							// list child terms
							foreach ($term_children as $business_child) {
								$term_child = get_term_by( 'id', $business_child, $taxonomy_name );

								echo '<option value="'. $term_child->slug .'">Venta '. $term_child->name.'</option>';
							}
						?>

					</select>
				</li>
				<li>
					<select name="zone">
						<option selected>Escoja la Ubicación</option>
						<?php
							// list terms
							foreach ($ubicaciones as $tax_ubi_inm) {
								echo '<option value="'.$tax_ubi_inm->slug.'">'.$tax_ubi_inm->name.'</option>';
							}
						?>
					</select>
					<input type="hidden" name="from-home" value="1">
				</li>
				<li class="last">
					<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</li>
			</ul>			
		</form>
	</div>
</section>
