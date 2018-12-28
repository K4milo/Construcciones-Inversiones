<?php

/*
  Template Name: Arriendos
*/

	get_template_part('includes/header');

	// Hero Banner
	get_template_part('includes/commons/block','title-hero');

	// Sidebar Form
	?>
	<div class="container results-wrapper page-wrapper">
		<?php
			get_template_part('includes/results/side','form');
			get_template_part('includes/loops/inmuebles/loop','rents');
		?>
	</div>

	<?php

	get_template_part('includes/footer');