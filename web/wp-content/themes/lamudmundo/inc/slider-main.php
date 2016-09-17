<div class="header-wrapper header-wrapper-home">
    <?php $args = array(
        'posts_per_page' => 1,
        'cat' => '22,19',
        'tag_id' => '20,8,18'
    ); ?>
    <?php $the_query = new WP_Query($args); ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post();
        $img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        ?>
        <div class="bg-slider-wrapper">
            <div id="bg-slider" class="flexslider bg-slider">
                <ul class="slides">
                    <li class="slide slide-1" style="background-image: url('<?php echo $img_url; ?>');"></li>
                    <!--li class="slide slide-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gualamita2.jpg');"></li>
                    <li class="slide slide-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gualamita3.jpg');"></li-->
                </ul>
            </div>
        </div><!--//bg-slider-wrapper-->
        <section id="home-promo" class="home-promo section">
            <div class="container text-right">
                <h2 class="title">
                    <span class="middle"><?php the_title(); ?></span>
                    <span class="upper">Lamud </span>
                </h2>
                <!--<button class="btn btn-cta btn-cta-primary" type="button" data-toggle="modal" data-target="#modal-contact" data-backdrop="static">Talk to us</button>-->
                <a href="<?php the_permalink(); ?>" class="btn btn-cta btn-cta-primary btn3d">Ver Más</a>
            </div><!--//container-->
        </section><!--//promo-->
        <?php
    endwhile;
    wp_reset_postdata();
    ?>
</div><!--//header-wrapper-->