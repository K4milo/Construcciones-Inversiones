<?php

// -------------- Sideform block ----------------

/* scope variables*/
$tax_types = get_terms( 'tipos', array('hide_empty' => false));
$tax_business = get_terms( 'transacciones', array('hide_empty' => false, 'parent' => 0));
$tax_ubicacion = get_terms( 'ubicacion', array('hide_empty' => false));
$tax_banos = get_terms( 'banos', array('hide_empty' => false));
$tax_habitaciones = get_terms( 'habitaciones', array('hide_empty' => false));


// Sales child
$tax_term_id = 18;
$tax_taxonomy_name = 'transacciones';
$tax_term_children = get_term_children( $tax_term_id, $tax_taxonomy_name );


?>
<aside class="sideform col-md-4">
	<form action="<?php the_permalink(); ?>" method="POST">
		<ul>
			<li>
				<label>Zona / Barrio:</label>
				<select name="zone">
					<?php
						// list terms
						foreach ($tax_ubicacion as $tax_ubi_inm) {
							echo '<option value="'.$tax_ubi_inm->slug.'">'.$tax_ubi_inm->name.'</option>';
						}
					?>
				</select>
			</li>
			<li>
				<label>Tipo de Inmueble:</label>
				<select name="type">
					<?php
						// list terms
						foreach ($tax_types as $tax_type_inm) {
							echo '<option value="'.$tax_type_inm->slug.'">'.$tax_type_inm->name.'</option>';
						}
					?>

				</select>
			</li>
			<li>
				<label>Tipo de Negocio:</label>
				<select name="business">
					<?php
						// list terms
						foreach ($tax_business as $tax_business_inm) {
							echo '<option value="'.$tax_business_inm->slug.'">'.$tax_business_inm->name.'</option>';
						}

						// list child terms
						foreach ($tax_term_children as $business_child) {
							$term_child = get_term_by( 'id', $business_child, $tax_taxonomy_name );

							echo '<option value="'. $term_child->slug .'">Venta '. $term_child->name.'</option>';
						}
					?>

				</select>
			</li>
			<li>
				<label>Baños:</label>
				<select name="baths">
					<?php
						// list terms
						foreach ($tax_banos as $tax_banos_inm) {
							echo '<option value="'.$tax_banos_inm->name.'">'.$tax_banos_inm->name.'</option>';
						}
					?>
				</select>
			</li>
			<li>
				<label>Habitaciones:</label>
				<select name="rooms">
					<?php
						// list terms
						foreach ($tax_banos as $tax_habitaciones_inm) {
							echo '<option value="'.$tax_habitaciones_inm->name.'">'.$tax_habitaciones_inm->name.'</option>';
						}
					?>
				</select>
			</li>
			<li>
				<label>Rango de precios:</label>
				<span>
					<input class="money-mask money m-1" placeholder="Desde" type="number" name="price1">
				</span>
				<span>
					<input class="money-mask money m-2" placeholder="Hasta" type="number" name="price2">
				</span>
			</li>
			<li>
				<label>Área (m²)</label>
				<select class="sidebar-filter area-range" name="area-range" id="list-marea">
					<option value="0-60">Hasta 60</option>
					<option value="61-100">61 a 100</option>
					<option value="101-200">101 a 200</option>
					<option value="201-300">201 a 300</option>
					<option value="301-400">301 a 400</option>
					<option value="401-500">401 a 500</option>
					<option value="501-1000">501 a 1000</option>
					<option value="1000">1001 o más</option>
				</select>
			</li>
		</ul>
		<input type="hidden" name="from-home" value="0">
		<button type="submit">Filtrar resultados <i class="fa fa-search" aria-hidden="true"></i></button>

	</form>
</aside>