<?php
/*
The Single Inmueble Loop
=====================
*/
?> 

<?php 
    if(have_posts()): while(have_posts()): the_post(); 
        setlocale(LC_MONETARY, 'es_CO');

        $metros_cuadrados = get_field('metros_cuadrados');
        $precio_inmueble  = get_field('precio_inmueble');
        $galeria = get_field('galeria');

        // Taxonmy vars
        $ubicacion = wp_get_post_terms( get_the_ID(), array('ubicacion'));
        $banos = wp_get_post_terms( get_the_ID(), array('banos'));
        $habitaciones = wp_get_post_terms( get_the_ID(), array('habitaciones')); 

?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h2><?php the_title()?></h2>
        </header>
        <section>
            <div class="gallery-wrapper col-md-8">
                <div class="gallery-loop">
                    <?php 
                        if($galeria):
                            while(have_rows('galeria')): the_row();

                                $image_fd = get_sub_field('image_fd');
                                $caption_fd = get_sub_field('caption_fd');

                            ?>

                            <div class="gallery-item" data-thumb="<?php echo $image_fd; ?>" style="background-image: url('<?php echo $image_fd; ?>');">
                                <figure>
                                    <img src="<?php echo $image_fd; ?>" alt="">
                                    <?php if($caption_fd): ?>
                                        <div class="image-text">
                                            <?php echo $caption_fd; ?>
                                        </div>
                                    <?php endif;?>
                                </figure>
                            </div>

                            <?php

                            endwhile;
                        endif;
                    ?>
                </div>                            
            </div>
            <div class="content-wrapper col-md-4">
                <div class="caption">
                    <?php the_content(); ?>
                </div>
                
                <div class="metadata">
                    <ul>
                        <?php if($ubicacion): ?>
                            <li class="metadata--item ubicacion"><span class="icon">Ubicación:</span> <?php foreach($ubicacion as $ubi): echo $ubi->name; endforeach; ?></li>
                        <?php endif; ?>
                        <?php if($metros_cuadrados): ?>
                            <li class="metadata--item bottom-items metros"><span class="icon">Metros:</span> <?php  echo $metros_cuadrados; ?></li>
                        <?php endif; ?>
                        <?php if($banos): ?>
                            <li class="metadata--item bottom-items banos"><span class="icon">Baños:</span> <?php foreach($banos as $bano): echo $bano->name; endforeach; ?></li>
                        <?php endif; ?>
                        <?php if($habitaciones): ?>
                            <li class="metadata--item bottom-items habs"><span class="icon">Habitaciones:</span> <?php foreach($habitaciones as $habitacion): echo $habitacion->name; endforeach; ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="price">
                    <?php echo money_format('%(#1.0n', $precio_inmueble); ?>
                </div>
            </div>

        </section>
    </article>
<?php endwhile; ?>
<?php endif; ?>