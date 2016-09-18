<section id="latest-work" class="latest-work section">
    <div class="container-fluid text-center">
        <h2 class="title text-center">Los más vistos</h2>
        <div id="work-carousel" class="items owl-carousel owl-theme">
            <?php $args = array(
                'showposts'=>5,
                'cat' => '1,19',
                'meta_key'=>'post_views_count',
                'orderby'=>'meta_value_num',
                'order'=>'DESC'
            ); ?>
            <?php $the_query = new WP_Query($args); ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
                $img_urls = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                ?>
                <div class="item item-1">
                    <div class="row">
                        <div class="content col-md-6 col-sm-12 col-xs-12">
                        <figure class="figure-container" style="background: #65758e url('<?php echo $img_urls; ?>') no-repeat 50% 50%;">
                            <a href="<?php the_permalink(); ?>"></a>
                        </figure>
                        </div>
                        <div class="content col-md-6 col-sm-12 col-xs-12">
                            <div class="content-inner">
                                <h3 class="project-title"><?php the_title();?></h3>
                                <ul class="meta list-unstyled">
                                    <li><strong>Autor:</strong> <?php the_author();?></li>
                                    <li><strong>Fecha de publicacion</strong> <?php the_time('F jS, Y'); ?></li>
                                </ul><!--//meta-->
                                <div class="desc">
                                    <p><?php the_excerpt()?></p>
                                </div><!--//desc-->
                                <a class="btn btn-cta btn-cta-secondary" href="<?php the_permalink(); ?>">leer  el Articulo</a>
                            </div><!--//content-inner-->
                        </div><!--//content-->
                    </div><!--//row-->
                </div><!--//item-->
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div><!--//owl-carousel-->
    </div><!--container-fluid-->
</section>