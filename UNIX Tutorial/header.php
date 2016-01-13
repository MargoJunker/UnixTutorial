<?php?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap-affix.js"></script>
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
        <script type="text/javascript">
            jQuery(document).ready(function() {
                setTimeout(updateScrollSpy, 1000);
            });
            function updateScrollSpy() {
                jQuery('[data-spy="scroll"]').each(function () {
                  var $spy = jQuery(this).scrollspy('refresh')
                });
            }
        </script>
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
    </head>

    <body data-spy="scroll" data-target=".scrollspy" <?php body_class(); ?>>

<!-- Site-header -->
        <header class="site-header">
            <nav id="site-navigation" class="main-navigation navbar-center" role="navigation">
                <div class="wrapper">
                    <!-- Logo -->
                    <a class="navbar-brand" href="http://178.62.65.175"><img class="navbar-brand" alt="Logo" src="http://www.upload.ee/image/4736899/logo.png"></a>
                    <!-- Menu -->
                    <div class="navbar-left">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    </div>
                    <!-- RSS Widget -->
                    <div class="navbar-right rss-widget hidden-xs hidden-sm">
                        <?php if( dynamic_sidebar( 'rss_widget' ) ) : else : endif; ?>
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
