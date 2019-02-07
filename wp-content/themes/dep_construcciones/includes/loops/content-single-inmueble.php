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
        $precio_admin  = get_field('precio_administracion');
        $galeria = get_field('galeria');
        $transporte=get_field('transporte');
        $sauna_turco=get_field('sauna_turco');
        $pisos=get_field('pisos');
        $piscina=get_field('piscina');
        $parque=get_field('parque');
        $gimnasio=get_field('gimnasio');
        $garaje=get_field('garaje');
        $exterior=get_field('exterior');
        $estrato=get_field('estrato');
        $ascensor=get_field('ascensor');
        $antiguedad=get_field('antiguedad');
        $administracion=get_field('administracion');
        $video=get_field('video');

        // Taxonmy vars
        $ubicacion = wp_get_post_terms( get_the_ID(), array('ubicacion'));
        $banos = wp_get_post_terms( get_the_ID(), array('banos'));
        $habitaciones = wp_get_post_terms( get_the_ID(), array('habitaciones'));
        $transacciones = wp_get_post_terms( get_the_ID(), array('transacciones'));

?>
<div class="container-fluid banner">
    <div class="row bg-banner" style="background-image: url('<?php the_post_thumbnail_url('full') ?>');">
        <?php if($transacciones): ?>
            <ul>
                <?php foreach($transacciones as $trans): echo'<li>'.$trans->name.'</li>'; endforeach; ?>
            </ul>
        <?php endif;?>    
    </div>
</div>
<div class="container content-wrapper">
    <article role="article" id="post_<?php the_ID()?>" 
        <?php post_class()?>>
        <header>
            <h2>
                <?php the_title()?>
            </h2>
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
                    <div class="gallery-item" data-thumb="
                        <?php echo $image_fd; ?>" style="background-image: url('<?php echo $image_fd; ?>');">
                        <figure>
                            <img src="
                                <?php echo $image_fd; ?>" alt="">
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
                    <div class="brand">
                        <a href="/">
                            <img src="
                                <?php bloginfo('template_url')?>/images/logos/logo.png" alt="Construye inversiones"/>
                            </a>
                        </div>
                        <div class="caption">
                            <?php the_content(); ?>
                        </div>
                        <div class="metadata">
                            <ul>
                                <?php if($ubicacion): ?>
                                <li class="metadata--item ubicacion">
                                    <span class="icon">Ubicación:</span>
                                    <?php foreach($ubicacion as $ubi): echo $ubi->name; endforeach; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($metros_cuadrados): ?>
                                <li class="metadata--item bottom-items metros">
                                    <span class="icon">Metros:</span>
                                    <?php  echo $metros_cuadrados; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($banos): ?>
                                <li class="metadata--item bottom-items banos">
                                    <span class="icon">Baños:</span>
                                    <?php foreach($banos as $bano): echo $bano->name; endforeach; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($habitaciones): ?>
                                <li class="metadata--item bottom-items habs">
                                    <span class="icon">Habitaciones:</span>
                                    <?php foreach($habitaciones as $habitacion): echo $habitacion->name; endforeach; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($transporte): ?>
                                <li class="metadata--item bottom-items transporte">
                                    <span class="icon">Transporte:</span>
                                    <?php  echo $transporte; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($sauna_turco): ?>
                                <li class="metadata--item bottom-items sauna">
                                    <span class="icon">Sauna turco:</span>
                                    <?php  echo $sauna_turco; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($pisos): ?>
                                <li class="metadata--item bottom-items pisos">
                                    <span class="icon">Pisos:</span>
                                    <?php  echo $pisos; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($piscina): ?>
                                <li class="metadata--item bottom-items piscina">
                                    <span class="icon">Piscina:</span>
                                    <?php  echo $piscina; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($parque): ?>
                                <li class="metadata--item bottom-items parque">
                                    <span class="icon">Parque:</span>
                                    <?php  echo $parque; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($gimnasio): ?>
                                <li class="metadata--item bottom-items gimnasio">
                                    <span class="icon">Gimnasio:</span>
                                    <?php  echo $gimnasio; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($garaje): ?>
                                <li class="metadata--item bottom-items garaje">
                                    <span class="icon">Garaje:</span>
                                    <?php  echo $garaje; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($estrato): ?>
                                <li class="metadata--item bottom-items estrato">
                                    <span class="icon">Estrato:</span>
                                    <?php  echo $estrato; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($exterior): ?>
                                <li class="metadata--item bottom-items exterior">
                                    <span class="icon">Estrato:</span>
                                    <?php  echo $exterior; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($ascensor): ?>
                                <li class="metadata--item bottom-items ascensor">
                                    <span class="icon">Ascensor:</span>
                                    <?php  echo $ascensor; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($antiguedad): ?>
                                <li class="metadata--item bottom-items antiguedad">
                                    <span class="icon">Antigüedad:</span>
                                    <?php  echo $antiguedad; ?>
                                </li>
                                <?php endif; ?>
                                <?php if($administracion): ?>
                                <li class="metadata--item bottom-items admon">
                                    <span class="icon">Administración:</span>
                                    <?php  echo $administracion; ?>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="price">
                            <?php echo money_format('%(#1.0n', $precio_inmueble); ?>
                        </div>
                        <?php if($precio_admin): ?>
                        <div class="price-admin">
                            <h3>Precio Administración</h3>
                            <div class="price">
                                <?php echo money_format('%(#1.0n', $precio_admin); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="social-share">
                            <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
                            <div class="wp">
                                <a class="whatsapp-movil" href="whatsapp://send/?phone=573125083128&text=">
                                    <img src="
                                        <?php bloginfo('template_url');?>/images/icons/wp.png" alt="whatsapp" width="40px" height="auto">
                                    </a>
                                    <a class="whatsapp-web" href="https://web.whatsapp.com/send/?phone=573125083128&text=">
                                        <img src="
                                            <?php bloginfo('template_url');?>/images/icons/wp.png" alt="whatsapp" width="40px" height="auto">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="container video-wrapper">
                            <?php if($video): ?>
                                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>