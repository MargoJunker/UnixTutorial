<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link src="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
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
        <script type="text/javascript">
            function order() {
                var x = new XMLHttpRequest();
                x.open("GET","/UNIX Tutorial/droplet.php",true);
                x.send();
                alert("Droplet Ordered!");
                return false;
                
            }
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
                        global $current_user; // Use global
                        get_currentuserinfo(); // Make sure global is set, if not set it.
                        $current_user = wp_get_current_user();
                        if ( ! user_can( $current_user, "subscriber" ) ) // Check user object has not got subscriber role
                            printf ('
                            <li class="dropdown navbar-right" style="list-style-type: none;">
                                <button id="drop1" href="#" role="button" class="dropdown-toggle btn-default" data-toggle="dropdown"><h5>%s<span class="caret"></span></h5></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                    <li class="disabled"><a tabindex="-1" href="/wp-admin/test.php">Droplets</a></li>
                                    <li><a tabindex="-1" href="/wp-admin/post-new.php">Add a New Post</a></li>
                                    <li><a tabindex="-1" href="/wp-admin/edit.php">Edit Posts</a></li>
                                    <li><a tabindex="-1" href="/wp-admin/media-new.php">Upload New Media</a></li>
                                    <li><a tabindex="-1" href="/wp-admin/upload.php">Media Library</a></li>
                                    <li><a tabindex="-1" href="/wp-admin/profile.php">Edit My Profile</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a tabindex="-1" href="/wp-login.php?action=logout">Logout</a></li>
                                </ul>
                            </li>', 
                            esc_html( $current_user->user_firstname ) );
                        else
                            printf ('
                            <li class="dropdown navbar-right" style="list-style-type: none;">
                                <button id="drop1" href="#" role="button" class="dropdown-toggle btn-default" data-toggle="dropdown"><h5>%s<span class="caret"></span></h5></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                    <li class="disabled"><a tabindex="-1" href="/wp-admin/test.php">Droplets</a></li>
                                    <li><a tabindex="-1" href="/wp-admin/profile.php">Edit My Profile</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a tabindex="-1" href="/wp-login.php?action=logout">Logout</a></li>
                                </ul>
                            </li>', 
                            esc_html( $current_user->user_firstname ) );
                    } else {
                        ?>
                        <li class="dropdown" style="list-style-type: none;">
                            <button id="drop1" href="#" role="button" class="dropdown-toggle btn-default" data-toggle="dropdown"><h1>Login<span class="caret"></span></h1></button>
                                <ul class="dropdown-menu logon" role="menu" aria-labelledby="drop2"><?php
                                    $args = array(
                                        'redirect' => home_url(), 
                                        'form_id' => 'loginform-custom',
                                        'label_username' => __( 'Username' ),
                                        'label_password' => __( 'Password' ),
                                        'label_remember' => __( 'Remember Me' ),
                                        'label_log_in' => __( 'Log In' ),
                                        'remember' => true
                                    );
                                    wp_login_form( $args );
                                    ?></ul>
                                    </li><?php
                    }?>
                    </div>
                    <!-- Header Widget -->
                    <div class="navbar-right header-widget hidden-sm hidden-xs">
                        <?php if( dynamic_sidebar( 'header_widget' ) ) : else : endif; ?>
                    </div>
                </div>
            </nav>
        </header>
<!-- /Site-header -->

<!-- Site-content -->
        <div class="site-content">
