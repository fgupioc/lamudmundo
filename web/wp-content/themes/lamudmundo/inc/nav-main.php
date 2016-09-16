<header id="header" class="header navbar-fixed-top">  
    <div class="container">       
        <h1 class="logo">
            <a href="<?php echo home_url(); ?>"><span class="highlight">Lamud</span>Mundo</a>
        </h1><!--//logo-->
        <nav class="main-nav navbar-right" role="navigation">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">by Franz GV</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
            </div><!--//navbar-header-->
            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
                   <!--<li class="nav-item dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="work.html">Work <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="work.html">Our Work</a></li>
                            <li><a href="case-study-1.html">Single Case Study 1</a></li>
                            <li><a href="case-study-2.html">Single Case Study 2</a></li>
                            <li><a href="blog-post.html">Single Blog Post</a></li> 
                            <li><a href="404.html">404 Page</a></li>            
                        </ul>
                    </li><!--//dropdown--> 
                    <li class="nav-item"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Actualidad'))); ?>">Actualidad</a></li>
                    <li class="nav-item"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Turismo'))); ?>">Turismo</a></li>
                    <li class="nav-item "><a href="<?php echo esc_url( get_permalink( get_page_by_title('Contacto'))); ?>">Contacto</a></li>
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div><!--//container-->
</header><!--//header--> 