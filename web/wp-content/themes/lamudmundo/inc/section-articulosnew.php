<section id="latest-blog" class="latest-blog section"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/huayllabelen.jpg');">
    <div class="container">
        <h2 class="title text-center">Nuevos Blogs</h2>
        <div class="row">

            <?php $args = array(
                'posts_per_page' => 8,
                'cat' => '1,19'
            ); ?>
            <?php $the_query = new WP_Query($args); ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
                $img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                ?>
                <div class="item col-md-3 col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <a href="<?php the_permalink(); ?>">
                        <figure class="img-responsive img_cover" style="height: 180px; background-image: url('<?php echo $img_url; ?>')" >
                        </figure>
                        </a>
                        <div class="content-wrapper text-center">
                            <h3 class="sub-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>

                        </div><!--//content-wrapper text-center-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div><!--//row-->
    </div><!--//container-->
</section>