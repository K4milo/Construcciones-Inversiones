<?php

/*
  Template Name: Resultados
*/

	get_template_part('includes/header');

	// PHP logic
	//get_template_part('includes/results/php','logic');

	// Sidebar Form
	?>
	<div class="container results-wrapper page-wrapper">
		<?php
			get_template_part('includes/results/side','form');
			get_template_part('includes/loops/inmuebles/loop','results');
		?>
	</div>

	<?php

	get_template_part('includes/footer');