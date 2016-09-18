<section id="who" class="who section"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/iglesia_lamud.jpg');">
    <div class="container text-center">
        <h2 class="title text-center">!Lo que se puede encontrar¡</h2>
        <p class="intro text-center">Las fiestas patronales de Lámud se celebran el 14 de septiembre, día de la fiesta
            del Señor de Gualamita, advocación muy venerada en la zona y es visitada por más de 10 000 devotos.</p>
        <div class="row benefits text-center">
            <article>
                <?php $args = array(
                    'posts_per_page' => 5,
                    'cat' => 22,
                    'tag__in' => array(23)
                ); ?>
                <?php $the_query = new WP_Query($args); ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    ?>
                    <div class="item col-md-3 col-sm-6 col-xs-6">
                        <a href="<?php the_permalink() ?>" class="title_hacer">
                            <?php
                            $image = get_field('icono_actividad');
                            if (!empty($image)): ?>
                                <div class="item-inner" style=" background-image: url('<?php echo $image['url']; ?>');">
                                    <!--div class="fs1">
                                        <img style="    width: 139px;  height: 76px;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </div-->
                                    <!---->
                                </div>
                            <?php endif; ?>
                            <h3 class="sub-title"><?php the_title(); ?></h3>
                        </a>
                    </div><!--//item-->
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </article>
        </div><!--//row-->
        <!--<a class="btn btn-cta btn-cta-secondary" href="about.html">More about us</a>-->
    </div><!--//container-->
</section>