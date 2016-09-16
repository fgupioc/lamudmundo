<?php
//soporte para imagenes destacadas
add_theme_support('post-thumbnails');
// without parameter -> Post Thumbnail (as set by theme using set_post_thumbnail_size())
the_post_thumbnail();

the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)

the_post_thumbnail(array(100, 100));  // Other resolutions

register_nav_menus(array(
    'principal' => 'Menu Principal Lamud',
    'footer_menu' => 'Footer Menu',
 ));

//soporte de Widget
if(function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => __('Sidebar Search','sidebar-search'),
        'id'            => 'primary-widget-area',
        'class'         => 'pprzz-search',
        'description'   => __('Wigdet para Buscador','dir'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
