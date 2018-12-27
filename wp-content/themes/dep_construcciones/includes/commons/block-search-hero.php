<?php
// Search block for home

// Terms list
$types = get_terms( 'tipos', array('hide_empty' => false));
$business = get_terms( 'transacciones', array('hide_empty' => false, 'parent' => 0));

// Sales child
$term_id = 18;
$taxonomy_name = 'transacciones';
$term_children = get_term_children( $term_id, $taxonomy_name );

?>

<section id="heroBanner" class="block-hero--search">
	<div class="container">
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
					<input type="number" name="area" placeholder="Número de Área">
					<input type="hidden" name="from-home" value="1">
					<small>Ingrese el número de área</small>
				</li>
				<li>
					<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</li>
			</ul>			
		</form>
	</div>
</section>
