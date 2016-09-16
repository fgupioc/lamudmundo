<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php bloginfo( 'name' ); ?> <?php is_home()?'': the_title(' | ') ?></title>
    <!-- Meta -->
    <meta charset=" <?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Lamud mundo">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:700,300italic,400italic,700italic,300,400'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/elegant_font/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/owl-carousel/owl.theme.css">
    <!-- Theme CSS -->

    <link id="theme-style" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head() ?>
</head>

<body class="home-page">
<section class="banner der">
    <div class="banner_background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banne1.jpg');">
        <button type="button" class="close" id="publicidad1" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</section>
<section class="banner izq">
    <div class="banner_background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banne1.jpg');">
        <button type="button" class="close" id="publicidad2" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</section> 
<?php get_template_part('inc/nav','main'); ?>
   
    
      