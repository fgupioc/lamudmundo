<?php setPostViews(get_the_ID()); ?>
<?php get_header(); ?>
<!-- ******Blog Post****** -->
<div class="blog-post-wrapper container" style="margin-top:50px ">
    <div class="row">
        <div class="blog-entry col-md-8 col-sm-8 col-xs-12">
            <article class="post">
                <h2 class="title"><?php the_title(); ?></h2>
                <div class="meta">
                    <ul class="meta-list list-inline">
                        <li class="post-time post_date date updated"><i class="fa fa-calendar"></i> 18 Feb, 2015</li>
                        <li class="post-author"><i class="fa fa-user"></i> <a href="#">James Lee</a></li>
                        <li class="post-comments-link">
                            <a href="#comment-area"><i class="fa fa-comments"></i>5 Comments</a>
                        </li>
                    </ul><!--//meta-list-->
                </div><!--meta-->
                <div class="content">
                    <?php $img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <p class="post-figure">
                        <img class="img-responsive" src="<?php echo $img_url; ?>" alt=""/>
                    </p><!--//post-figure-->
                     <div class="contenido">
                         <?php
                         if (have_posts()) :
                             while (have_posts()) :
                                 the_post();
                                 the_content();
                             endwhile;
                         endif;
                         ?>                         
                     </div>

                </div>
                <div class="clearfix"></div>
                <div id="comment-area" class="comment-area">
                    <div class="comment-container">
                        <div class="comment-list">
                            <h3 class="title">5 Comments</h3>
                            <div class="comment-item depth-1 parent">
                                <div class="comment-item-box">
                                    <div class="comment-author">
                                        <img class="img-responsive" src="assets/images/comment/user-3.jpg" alt=""/>
                                    </div><!--//comment-author-->
                                    <div class="comment-body">
                                        <cite class="name">Carl Jones Says:</cite>
                                        <p class="time">Feb 23, 2015 at 9:35m</p>
                                        <div class="content">
                                            <p>Sed condimentum vel quam ut sagittis. Aliquam erat enim, lobortis sit
                                                amet tellus accumsan, scelerisque porttitor sem. Suspendisse dictum
                                                risus id iaculis sodales phasellus id ex aliquam.</p>
                                        </div><!--//content-->
                                        <a class="comment-reply-link btn btn-cta btn-cta-secondary" href="#">Reply</a>
                                    </div><!--//comment-body-->
                                </div><!--//comment-box-->
                            </div><!--//comment-item depth-1-->
                        </div><!--comment-list-->
                    </div><!--//comments-container-->
                </div><!--//comment-area-->
            </article><!--//post-->
        </div><!--//blog-entry--> 
        <aside id="blog-sidebar"
               class="blog-sidebar col-md-3 col-sm-4 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
            <section class="widget recent-posts">
                <h3 class="title">Recent Posts</h3>
                <ul class="list-unstyled">
                    <li>
                        <img class="thumb img-responsive" src="assets/images/blog/blog-tiny-thumb-1.jpg" alt=""/>
                            <span class="post-info">
                                <a class="post-title" href="#">DevStudio helps XYZ</a><br/>
                                <span class="date">18 Feb 2015</span>
                            </span>
                    </li>
                    <li>
                        <img class="thumb img-responsive" src="assets/images/blog/blog-tiny-thumb-2.jpg" alt=""/>
                            <span class="post-info">
                                <a class="post-title" href="#">devAid Free Bootstrap Theme</a><br/>
                                <span class="date">16 Jan 2014</span>
                            </span>
                    </li>
                    <li>
                        <img class="thumb img-responsive" src="assets/images/blog/blog-tiny-thumb-3.jpg" alt=""/>
                            <span class="post-info">
                                <a class="post-title" href="#">Phasellus feugiat arcu eget sem tincidunt </a><br/>
                                <span class="date">20 Dec 2014</span>
                            </span>
                    </li>
                    <li>
                        <img class="thumb img-responsive" src="assets/images/blog/blog-tiny-thumb-4.jpg" alt=""/>
                            <span class="post-info">
                                <a class="post-title" href="#">Nulla egestas commodo dignissim</a><br/>
                                <span class="date">16 Nov 2014</span>
                            </span>
                    </li>
                </ul>
            </section><!--//widget-->

        </aside><!--//blog-side-bar-->
    </div><!--//row-->
</div><!--//blog-->
<?php get_footer(); ?>
