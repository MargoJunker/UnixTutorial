<?php?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.2.1.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap-affix.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

        <!-- Google-Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-62752768-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- Data-Spy -->
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
    </head>

    <body data-spy="scroll" data-target=".scrollspy" <?php body_class(); ?>>

<!-- Site-header -->
        <header class="site-header">
            <nav id="site-navigation" class="main-navigation navbar-center" role="navigation">
                <div class="wrapper navbar-wrapper">
                    <!-- Logo -->
                    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img class="navbar-brand" alt="Logo" src="https://www.upload.ee/image/4736899/logo.png"></a>
                    <!-- Menu -->
                    <div class="navbar-default" role="navigation">   
                        <div class="navbar-header">    
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-left">
                            <?php
                            wp_nav_menu( array(

                                'theme_location' 	=> 'primary',
                                'container' 		=> 'nav',
                                'container_class' 	=> 'navbar-collapse collapse',
                                'menu_class' 		=> 'nav navbar-nav navbar-right'

                            ) );
                        ?>
                        </div>                      
                    </div>
                    <!-- RSS Widget -->
                    <div class="navbar-right">
                    <?php
                    if ( is_user_logged_in() ) {
                        $current_user = wp_get_current_user();
                        printf( '
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><p>%s<span class="caret"></span></p></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">Action</a></li>
                            </ul>
                        </div>', 
                        esc_html( $current_user->user_firstname ) ); ?>
                        <h1><a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></h1><?php

                    } else {
                        $url = home_url();
                        echo '<h1><a href=/wp-login.php?redirect_to="/">Log In</a></h1>';
                    }?>
                    </div>
                    <!-- Header Widget -->
                    <div class="navbar-right header-widget hidden-xs">
                        <?php if( dynamic_sidebar( 'header_widget' ) ) : else : endif; ?>
                    </div>
                </div>
            </nav>
        </header>
<!-- /Site-header -->

<!-- Site-content -->
        <div class="site-content">
