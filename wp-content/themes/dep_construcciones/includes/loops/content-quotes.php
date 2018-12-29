<?php if(have_posts()): while(have_posts()): the_post(); 

?>
	<header>
		<figure class="top-togo">
			<img src="<?php bloginfo('template_url');?>/images/logos/logo.png" alt="Construcciones e Inversiones"/>
		</figure>
		<h1><?php the_title(); ?></h1>
	</header>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <div class="container">
        	<div class="content-wrapper">
        		<?php the_content()?>
        	</div>
    	</div>
    </article>

<?php endwhile; ?>
<?php endif; ?>