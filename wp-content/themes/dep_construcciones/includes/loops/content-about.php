<?php if(have_posts()): while(have_posts()): the_post(); 

	$icon_items = get_field('cara_eleccion');
?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <div class="container">
        	<header>
        		<h3><?php the_title(); ?></h3>
        	</header>
        	<?php the_content()?>
    	</div>
    </article>

    <article class="choose">
    	<div class="container wrap-characters">
    		<header>
    			<h3>¿POR QUÉ ELEGIRNOS?</h3>
    		</header>
    		<ul>

	    		<?php
					if($icon_items):
						while(have_rows('cara_eleccion')): the_row();

		    				$fd_icono = get_sub_field('fd_icono');
		    				$fd_title = get_sub_field('fd_title');
		    				$fd_texto = get_sub_field('fd_texto');
	    		?>

		    		<li>
		    			<figure>
		    				<img src="<?php echo $fd_icono; ?>" alt="<?php echo $fd_title; ?>">
		    			</figure>
		    			<h4><?php echo $fd_title; ?></h4>
		    			<p class="fdtexto"><?php echo $fd_texto; ?></p>
		    		</li>

	    		<?php
						endwhile;
					endif;
				?>
    			
    		</ul>
    	</div>
    </article>
<?php endwhile; ?>
<?php endif; ?>